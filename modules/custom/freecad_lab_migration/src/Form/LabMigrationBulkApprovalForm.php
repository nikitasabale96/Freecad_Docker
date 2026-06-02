<?php

namespace Drupal\lab_migration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\user\Entity\User;

class LabMigrationBulkApprovalForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'lab_migration_bulk_approval_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Enable form caching for reliable AJAX interactions
    $form['#cache'] = ['max-age' => 0];

    $options_first = $this->_bulk_list_of_labs() ?? [];
    $selected_lab = $form_state->getValue('lab') ?: 0;

    $form['lab'] = [
      '#type' => 'select',
      '#title' => $this->t('Title of the lab'),
      '#options' => $options_first,
      '#default_value' => $selected_lab,
      '#ajax' => [
        'callback' => '::ajax_experiment_list_callback',
        'wrapper' => 'ajax_selected_lab_wrapper', // Points to the container container
      ],
    ];

    // This wrapper stays static in the DOM, we only swap its INNER contents
    $form['download_lab_wrapper'] = [
      '#type' => 'container',
      '#attributes' => ['id' => 'ajax_selected_lab_wrapper'],
    ];

    // Only render operational sub-fields if a valid Lab is selected
    if ($selected_lab > 0) {
      $form['download_lab_wrapper']['selected_lab'] = [
        '#type' => 'markup',
        '#markup' => Link::fromTextAndUrl(
          $this->t('Download'),
          Url::fromUri('internal:/lab-migration/full-download/lab/' . $selected_lab)
        )->toString() . ' ' . $this->t('(Download all approved and unapproved solutions)'),
      ];

      $form['download_lab_wrapper']['lab_actions'] = [
        '#type' => 'select',
        '#title' => $this->t('Please select action for Entire Lab'),
        '#options' => $this->_bulk_list_lab_actions(),
        '#default_value' => 0,
      ];
    }

      // $form['download_lab_wrapper']['lab_experiment_actions'] = [
      //   '#type' => 'select',
      //   '#title' => $this->t('Please select action for Experiment'),
      //   '#options' => $this->_bulk_list_experiment_actions(),
      //   '#default_value' => 0,
      // ];

      // $form['download_lab_wrapper']['lab_experiment_solution_actions'] = [
      //   '#type' => 'select',
      //   '#title' => $this->t('Please select action for Solution'),
      //   '#options' => $this->_bulk_list_solution_actions(),
      //   '#default_value' => 0,
      // ];

    //   $form['download_lab_wrapper']['message'] = [
    //     '#type' => 'textarea',
    //     '#title' => $this->t('If Dis-Approved, please specify reason for Dis-Approval'),
    //     '#states' => [
    //       'visible' => [
    //         [':input[name="lab_actions"]' => ['value' => 3]],
    //         'or',
    //         [':input[name="lab_experiment_actions"]' => ['value' => 3]],
    //         'or',
    //         [':input[name="lab_experiment_solution_actions"]' => ['value' => 3]],
    //         'or',
    //         [':input[name="lab_actions"]' => ['value' => 4]],
    //       ],
    //       'required' => [
    //         [':input[name="lab_actions"]' => ['value' => 3]],
    //         'or',
    //         [':input[name="lab_experiment_actions"]' => ['value' => 3]],
    //         'or',
    //         [':input[name="lab_experiment_solution_actions"]' => ['value' => 3]],
    //         'or',
    //         [':input[name="lab_actions"]' => ['value' => 4]],
    //       ],
    //     ],
    //   ];
    // This must live on the root level outside the AJAX zone to preserve state data strings
    $form['message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('If Dis-Approved, please specify reason for Dis-Approval/Deletion'),
      '#default_value' => $form_state->getValue('message') ?: '',
      '#states' => [
        'visible' => [
          [':input[name="lab_actions"]' => ['value' => '3']],
          'or',
          [':input[name="lab_actions"]' => ['value' => '4']],
        ],
        'required' => [
          [':input[name="lab_actions"]' => ['value' => '3']],
          'or',
          [':input[name="lab_actions"]' => ['value' => '4']],
        ],
      ],
    ];

    $form['actions'] = ['#type' => 'actions'];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit bulk actions'),
    ];

    return $form;
  }

  public function ajax_experiment_list_callback(array &$form, FormStateInterface $form_state) {
    return $form['download_lab_wrapper'];
  }

  public function _bulk_list_lab_actions(): array {
    return [
      0 => 'Please select...',
      1 => 'Approve Entire Lab',
      2 => 'Pending Review Entire Lab',
      3 => 'Dis-Approve Entire Lab (This will delete all solutions)',
      4 => 'Delete Entire Lab Including Proposal',
    ];
  }

  public function _bulk_list_of_labs(): array {
    $lab_titles = [0 => 'Please select...'];
    $connection = Database::getConnection();
    $query = $connection->select('lab_migration_proposal', 'lmp')
      ->fields('lmp', ['id', 'lab_title', 'name'])
      ->condition('solution_display', 1)
      ->orderBy('lab_title', 'ASC');

    $results = $query->execute();
    foreach ($results as $lab_titles_data) {
      $lab_titles[$lab_titles_data->id] = $lab_titles_data->lab_title . ' (Proposed by ' . $lab_titles_data->name . ')';
    }
    return $lab_titles;
  }

  public function _bulk_list_solution_actions(): array {
    return [
      0 => 'Please select...',
      1 => 'Approve Entire Solution',
      2 => 'Pending Review Entire Solution',
      3 => 'Dis-approve Solution',
    ];
  }

  public function _bulk_list_experiment_actions(): array {
    return [
      0 => 'Please select...',
      1 => 'Approve Entire Experiment',
      2 => 'Pending Review Entire Experiment',
      3 => 'Dis-Approve Entire Experiment',
    ];
  }


  /**
   * {@inheritdoc}
   */
public function submitForm(array &$form, FormStateInterface $form_state) {
    $user = \Drupal::currentUser();
    $lab_id = $form_state->getValue('lab');
    $lab_actions = $form_state->getValue('lab_actions');
    
    // Safety Fallback: Set unrendered fields to 0 so the condition matches safely
    $exp_actions = $form_state->getValue('lab_experiment_actions') ?: 0;
    $sol_actions = $form_state->getValue('lab_experiment_solution_actions') ?: 0;
    
    // CRITICAL FIX: Extract value from form state so it isn't an empty string!
    $message_reason = trim($form_state->getValue('message') ?? '');

    if ($lab_id) {
      if ($user->hasPermission('lab migration bulk manage code')) {
        $connection = \Drupal::database();
        $root_path = \Drupal::service("lab_migration_global")->lab_migration_path();
        
        // Fetch lab proposal details
        $query = $connection->select('lab_migration_proposal', 'lmp')
          ->fields('lmp')
          ->condition('id', $lab_id);
        $user_info = $query->execute()->fetchObject();

        if (!$user_info) {
          \Drupal::messenger()->addError($this->t('Lab details could not be found.'));
          return;
        }

        // Load contributor user account details
        $user_data = User::load($user_info->uid);
        if (!$user_data) {
          \Drupal::messenger()->addError($this->t('Could not load user account for UID @uid.', ['@uid' => $user_info->uid]));
          return;
        }

        $config = \Drupal::config('system.site');
        $site_name = $config->get('name');
        
        $lab_config = \Drupal::config('lab_migration.settings');
        $from = $lab_config->get('lab_migration_from_email') ?: $config->get('mail');

        $email_subject = '';
        $email_body_text = '';
        $action_performed = FALSE;

        // -----------------------------------------------------------------
        // CASE 1: APPROVE ENTIRE LAB (Option 1)
        // -----------------------------------------------------------------
        if (($lab_actions == 1) && ($exp_actions == 0) && ($sol_actions == 0)) {
          
          $query_exp = $connection->select('lab_migration_experiment', 'lme')
            ->fields('lme')
            ->condition('proposal_id', $lab_id)
            ->orderBy('number', 'ASC');
          $experiment_q = $query_exp->execute();
          
          $experiment_list = "";
          while ($experiment_data = $experiment_q->fetchObject()) {
            $connection->query("UPDATE lab_migration_solution SET approval_status = 1, approver_uid = :approver_uid WHERE experiment_id = :experiment_id AND approval_status = 0", [
              ':approver_uid' => $user->id(),
              ':experiment_id' => $experiment_data->id,
            ]);
            $experiment_list .= $experiment_data->number . ") " . $experiment_data->title . "\n";
          }

          \Drupal::messenger()->addMessage($this->t('Approved Entire Lab successfully.'));

          $email_subject = $this->t('[@site_name] Your uploaded Lab Migration solutions have been approved', ['@site_name' => $site_name])->render();
          $email_body_text = $this->t("Dear @contributor_name,\n\nAll your uploaded solutions for the Lab with the details below have been approved:\n\nTitle of Lab: @lab_title\n\nList of experiments:\n@experiment_list\n\nBest Wishes,\n\n@site_name Team,\nFOSSEE, IIT Bombay", [
            '@site_name' => $site_name,
            '@contributor_name' => $user_info->name ?? $user_data->getDisplayName(),
            '@lab_title' => $user_info->lab_title,
            '@experiment_list' => $experiment_list,
          ])->render();

          $action_performed = TRUE;
        }

        // -----------------------------------------------------------------
        // CASE 2: PENDING REVIEW ENTIRE LAB (Option 2)
        // -----------------------------------------------------------------
        elseif (($lab_actions == 2) && ($exp_actions == 0) && ($sol_actions == 0)) {
          
          $query_exp = $connection->select('lab_migration_experiment', 'lme')
            ->fields('lme')
            ->condition('proposal_id', $lab_id)
            ->orderBy('number', 'ASC');
          $experiment_q = $query_exp->execute();
          
          $experiment_list = "";
          while ($experiment_data = $experiment_q->fetchObject()) {
            $connection->query("UPDATE lab_migration_solution SET approval_status = 2, approver_uid = :approver_uid WHERE experiment_id = :experiment_id", [
              ':approver_uid' => $user->id(),
              ':experiment_id' => $experiment_data->id,
            ]);
            $experiment_list .= $experiment_data->number . ") " . $experiment_data->title . "\n";
          }

          \Drupal::messenger()->addMessage($this->t('Marked Entire Lab as Pending Review.'));

          $email_subject = $this->t('[@site_name] Your uploaded Lab Migration solutions are under Pending Review', ['@site_name' => $site_name])->render();
          $email_body_text = $this->t("Dear @contributor_name,\n\nYour uploaded solutions for the Lab with the details below have been marked as Pending Review:\n\nTitle of Lab: @lab_title\n\nList of experiments:\n@experiment_list\n\nYou will receive a notification email once the review process is complete.\n\nBest Wishes,\n\n@site_name Team,\nFOSSEE, IIT Bombay", [
            '@site_name' => $site_name,
            '@contributor_name' => $user_info->name ?? $user_data->getDisplayName(),
            '@lab_title' => $user_info->lab_title,
            '@experiment_list' => $experiment_list,
          ])->render();

          $action_performed = TRUE;
        }

        // -----------------------------------------------------------------
        // CASE 3: DISAPPROVE ENTIRE LAB (Option 3)
        // -----------------------------------------------------------------
// -----------------------------------------------------------------
        // CASE 3: DISAPPROVE ENTIRE LAB (Option 3)
        // -----------------------------------------------------------------
        elseif (($lab_actions == 3) && ($exp_actions == 0) && ($sol_actions == 0)) {
          if (strlen($message_reason) <= 30) {
            \Drupal::messenger()->addError($this->t('Please mention the reason for disapproval. Minimum 30 characters required.'));
            return;
          }
          if (!$user->hasPermission('lab migration bulk delete code')) {
            \Drupal::messenger()->addError($this->t('You do not have permission to Bulk Dis-Approve and Delete Entire Lab.'));
            return;
          }

          // CRITICAL FIX 1: Explicitly load the module file to ensure procedural functions are available
          \Drupal::service('module_handler')->loadInclude('lab_migration', 'module');

          $deletion_successful = FALSE;

          // Attempt to use the existing function if it exists
          if (function_exists('lab_migration_delete_lab')) {
            $deletion_successful = lab_migration_delete_lab($lab_id);
          } 
          // CRITICAL FIX 2: Fallback native DB deletion if the function isn't found or returns FALSE
          else {
            // Fetch all experiments tied to this lab proposal
            $query_exp = $connection->select('lab_migration_experiment', 'lme')
              ->fields('lme', ['id'])
              ->condition('proposal_id', $lab_id);
            $experiments = $query_exp->execute()->fetchAllAssoc('id');

            if (!empty($experiments)) {
              $experiment_ids = array_keys($experiments);
              
              // Clean up all uploaded code solutions linked to these experiments
              $connection->delete('lab_migration_solution')
                ->condition('experiment_id', $experiment_ids, 'IN')
                ->execute();
            }
            
            $deletion_successful = TRUE;
          }

          if ($deletion_successful) {
            \Drupal::messenger()->addMessage($this->t('Dis-Approved and Deleted Entire Lab solutions successfully.'));
            
            // Build the Disapproval Email Notification
            $email_subject = $this->t('[@site_name] Your uploaded Lab Migration solutions have been disapproved', ['@site_name' => $site_name])->render();
            $email_body_text = $this->t("Dear @user_name,\n\nYour uploaded solutions for the lab with title: @lab_title have been disapproved.\n\nReason for disapproval:\n@reason\n\nBest Wishes,\n\n@site_name Team,\nFOSSEE, IIT Bombay", [
              '@user_name' => $user_info->name ?? $user_data->getDisplayName(),
              '@lab_title' => $user_info->lab_title,
              '@reason' => $message_reason,
              '@site_name' => $site_name,
            ])->render();

            $action_performed = TRUE;
          } else {
            \Drupal::messenger()->addError($this->t('Error encountered while processing Dis-Approval backend operations. Please check your system logs.'));
          }
        }
        // -----------------------------------------------------------------
        // CASE 4: DELETE ENTIRE LAB INCLUDING PROPOSAL (Option 4)
        // -----------------------------------------------------------------
        elseif (($lab_actions == 4) && ($exp_actions == 0) && ($sol_actions == 0)) {
          if (strlen($message_reason) <= 30) {
            \Drupal::messenger()->addError($this->t('Please mention the reason for disapproval/deletion. Minimum 30 characters required.'));
            return;
          }
          if (!$user->hasPermission('lab migration bulk delete code')) {
            \Drupal::messenger()->addError($this->t('You do not have permission to Bulk Delete Entire Lab Including Proposal.'));
            return;
          }

          $dep_q = $connection->query("SELECT * FROM lab_migration_dependency_files WHERE proposal_id = :proposal_id", [
            ":proposal_id" => $lab_id
          ]);
          if ($dep_q->fetchObject()) {
            \Drupal::messenger()->addError($this->t("Cannot delete lab since it has dependency files that can be used by others. First delete the dependency files before deleting the lab."));
            return;
          }

          $query_exp = $connection->select('lab_migration_experiment', 'lme')
            ->fields('lme')
            ->condition('proposal_id', $lab_id)
            ->orderBy('number', 'ASC');
          $experiment_q = $query_exp->execute();
          
          $experiment_list = '';
          while ($experiment_data = $experiment_q->fetchObject()) {
            $experiment_list .= $experiment_data->number . ') ' . $experiment_data->title . "\nDescription: " . $experiment_data->description . "\n\n";
          }

          $global_service = \Drupal::service("lab_migration_global");
          if (method_exists($global_service, 'lab_migration_delete_lab') && $global_service->lab_migration_delete_lab($lab_id)) {
            \Drupal::messenger()->addMessage($this->t('Dis-Approved and Deleted Entire Lab solutions.'));
            
            $proposal_q = $connection->query("SELECT * FROM lab_migration_proposal WHERE id = :id", [":id" => $lab_id])->fetchObject();
            $query_exp_clean = $connection->select('lab_migration_experiment', 'lme')->fields('lme')->condition('proposal_id', $lab_id);
            $experiment_data = $query_exp_clean->execute()->fetchObject();

            if ($proposal_q && $experiment_data) {
              $exp_path = $root_path . $proposal_q->directory_name . '/EXP' . $experiment_data->number;
              $dir_path = $root_path . $proposal_q->directory_name;
              
              if (is_dir($dir_path)) {
                if (is_dir($exp_path)) {
                  @rmdir($exp_path);
                }
                @rmdir($dir_path);
              }
            }

            $connection->query("DELETE FROM lab_migration_experiment WHERE proposal_id = :proposal_id", [":proposal_id" => $lab_id]);
            $connection->query("DELETE FROM lab_migration_proposal WHERE id = :id", [":id" => $lab_id]);
            \Drupal::messenger()->addMessage($this->t('Deleted Lab Proposal entirely from systems.'), 'status');

            $email_subject = $this->t('[@site_name] Your uploaded Lab Migration solutions including the Lab proposal have been deleted', ['@site_name' => $site_name])->render();
            $email_body_text = $this->t("Dear @user_name,\n\nWe regret to inform you that all uploaded experiments of your lab with the following details have been permanently deleted.\n\nTitle of Lab: @lab_title\n\nList of experiments:\n@experiment_list\n\nReason for disapproval/deletion:\n@reason\n\nBest Wishes,\n\n@site_name Team,\nFOSSEE, IIT Bombay", [
              '@user_name' => $proposal_q->name ?? $user_data->getDisplayName(),
              '@lab_title' => $user_info->lab_title,
              '@experiment_list' => $experiment_list,
              '@reason' => $message_reason,
              '@site_name' => $site_name,
            ])->render();

            $action_performed = TRUE;
          } else {
            \Drupal::messenger()->addError($this->t('Error Dis-Approving and Deleting Entire Lab via service pipeline.'));
          }
        }

        // -----------------------------------------------------------------
        // EMAIL TRANSMISSION DISPATCHER
        // -----------------------------------------------------------------
        if ($action_performed && !empty($email_subject) && !empty($email_body_text)) {
          $mail_manager = \Drupal::service('plugin.manager.mail');
          $langcode = $user_data->getPreferredLangcode();
          $email_to = $user_data->getEmail();

          $params = [];
          $params['standard']['subject'] = $email_subject;
          $params['standard']['body'][] = $email_body_text;
          $params['standard']['headers'] = [
            'From' => $from,
            'Cc' => $lab_config->get('lab_migration_cc_emails') ?: '',
            'Bcc' => $lab_config->get('lab_migration_emails') ?: '',
          ];

          $result = $mail_manager->mail(
            'lab_migration',
            'standard',
            $email_to,
            $langcode,
            $params,
            $from,
            TRUE
          );

          if (!empty($result['result'])) {
            \Drupal::messenger()->addMessage($this->t('Notification email sent to @email.', ['@email' => $email_to]));
          } else {
            \Drupal::messenger()->addError($this->t('Action completed, but the system failed to send out the notification email.'));
          }
        }
      } else {
        \Drupal::messenger()->addError($this->t('You do not have permission to execute this operation.'));
      }
    }
  }
}