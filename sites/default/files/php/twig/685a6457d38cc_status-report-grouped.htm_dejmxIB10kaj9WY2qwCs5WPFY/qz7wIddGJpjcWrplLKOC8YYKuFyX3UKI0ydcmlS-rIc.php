<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/themes/claro/templates/status-report-grouped.html.twig */
class __TwigTemplate_d79c2e8908eb5b2c4a22e6671f44a3c7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/drupal.collapse"), "html", null, true);
        yield "

<div class=\"system-status-report\">
  <h2 class=\"system-status-general-info__header\">";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Status Details"));
        yield "</h2>
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["grouped_requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            yield "    <details class=\"claro-details\" open>
      <summary id=\"";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, true, 25), "html", null, true);
            yield "\" class=\"claro-details__summary claro-details__summary--system-status-report\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["group"], "title", [], "any", false, false, true, 25), "html", null, true);
            yield "</summary>
      <div class=\"claro-details__wrapper claro-details__wrapper--system-status-report\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, true, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 28
                yield "          <div class=\"system-status-report__row\">
              ";
                // line 30
                $context["summary_classes"] = ["system-status-report__status-title", ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 32
$context["group"], "type", [], "any", false, false, true, 32), ["warning", "error"])) ? (("system-status-report__status-icon system-status-report__status-icon--" . CoreExtension::getAttribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, true, 32))) : (""))];
                // line 35
                yield "              <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["summary_classes"] ?? null)]), "html", null, true);
                yield " role=\"button\">
                ";
                // line 36
                if (CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "severity_title", [], "any", false, false, true, 36)) {
                    // line 37
                    yield "                  <span class=\"visually-hidden\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "severity_title", [], "any", false, false, true, 37), "html", null, true);
                    yield "</span>
                ";
                }
                // line 39
                yield "                ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "title", [], "any", false, false, true, 39), "html", null, true);
                yield "
              </div>
              <div class=\"system-status-report__entry__value\">
                ";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "value", [], "any", false, false, true, 42), "html", null, true);
                yield "
                ";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "description", [], "any", false, false, true, 43)) {
                    // line 44
                    yield "                  <div class=\"description\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "description", [], "any", false, false, true, 44), "html", null, true);
                    yield "</div>
                ";
                }
                // line 46
                yield "              </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['requirement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "
      </div>
    </details>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["grouped_requirements"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/status-report-grouped.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  127 => 53,  118 => 49,  110 => 46,  104 => 44,  102 => 43,  98 => 42,  91 => 39,  85 => 37,  83 => 36,  78 => 35,  76 => 32,  75 => 30,  72 => 28,  68 => 27,  61 => 25,  58 => 24,  54 => 23,  50 => 22,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/status-report-grouped.html.twig", "/var/www/html/freecad_drupal10/core/themes/claro/templates/status-report-grouped.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 23, "set" => 30, "if" => 36];
        static $filters = ["escape" => 19, "t" => 22];
        static $functions = ["attach_library" => 19, "create_attribute" => 35];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 't'],
                ['attach_library', 'create_attribute'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
