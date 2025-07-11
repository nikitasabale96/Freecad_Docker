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

/* themes/themes/openplc/templates/page--front.html.twig */
class __TwigTemplate_ccc6c3d425c3bec0d5c371e26fb9c640 extends Template
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
        // line 1
        yield " ";
        $context["has_sidebar_first"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 1)))));
        // line 2
        $context["has_sidebar_second"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 2)))));
        // line 3
        yield "

 <div class=\"container-fluid\" style=\"background: #e5f5cb;\">
    ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 6), "html", null, true);
        yield "
        <p> &nbsp;</p>

    <header role=\"banner\">
      ";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 10), "html", null, true);
        yield "
    </header>
    <br />

    ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 14), "html", null, true);
        yield "
    ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 15), "html", null, true);
        yield "

    ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "openplc_corousal", [], "any", false, false, true, 17), "html", null, true);
        yield "

    ";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 19), "html", null, true);
        yield "
    ";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 20), "html", null, true);
        yield "
    ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 21), "html", null, true);
        yield "
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\">
        </a>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    ";
        // line 27
        if ((($context["has_sidebar_first"] ?? null) && ($context["has_sidebar_second"] ?? null))) {
            // line 28
            yield "                        ";
            if (($context["has_sidebar_first"] ?? null)) {
                // line 29
                yield "                                <div class=\"col-sm-3\"  role=\"complementary\">
                                    ";
                // line 30
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 30), "html", null, true);
                yield "
                                </div>
                        ";
            }
            // line 33
            yield "                            <div class=\"col-sm-6\">
                                ";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 34), "html", null, true);
            yield "
                            </div>";
            // line 36
            yield "                        ";
            if (($context["has_sidebar_second"] ?? null)) {
                // line 37
                yield "                                <div class=\"col-sm-3\" style=\"float: right;\"  role=\"complementary\">
                                    ";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 38), "html", null, true);
                yield "
                                </div>
                        ";
            }
            // line 41
            yield "                    ";
        } elseif ((($context["has_sidebar_first"] ?? null) || ($context["has_sidebar_second"] ?? null))) {
            // line 42
            yield "                        ";
            if (($context["has_sidebar_first"] ?? null)) {
                // line 43
                yield "                                <div class=\"col-sm-3\"  role=\"complementary\">
                                    ";
                // line 44
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 44), "html", null, true);
                yield "
                                </div>
                            <div class=\"col-sm-9\">
                                ";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 47), "html", null, true);
                yield "
                            </div>";
                // line 49
                yield "                        ";
            } elseif (($context["has_sidebar_second"] ?? null)) {
                // line 50
                yield "                            <div class=\"col-sm-9\">
                                ";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 51), "html", null, true);
                yield "
                            </div>";
                // line 53
                yield "                            <div class=\"col-sm-3\" style=\"float: right;\"  role=\"complementary\">
                                ";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 54), "html", null, true);
                yield "
                            </div>
                        ";
            } else {
                // line 57
                yield "                            <div class=\"col-xl-12 \">
                                ";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 58), "html", null, true);
                yield "
                            </div>";
                // line 60
                yield "                        ";
            }
            // line 61
            yield "                    ";
        } else {
            // line 62
            yield "                        <div class=\"col-xl-12 \">
                            ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 63), "html", null, true);
            yield "
                        </div>";
            // line 65
            yield "                    ";
        }
        // line 66
        yield "                </div>
            </div>
    </main>

    ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 70), "html", null, true);
        yield "
  </div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/themes/openplc/templates/page--front.html.twig";
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
        return array (  199 => 70,  193 => 66,  190 => 65,  186 => 63,  183 => 62,  180 => 61,  177 => 60,  173 => 58,  170 => 57,  164 => 54,  161 => 53,  157 => 51,  154 => 50,  151 => 49,  147 => 47,  141 => 44,  138 => 43,  135 => 42,  132 => 41,  126 => 38,  123 => 37,  120 => 36,  116 => 34,  113 => 33,  107 => 30,  104 => 29,  101 => 28,  99 => 27,  90 => 21,  86 => 20,  82 => 19,  77 => 17,  72 => 15,  68 => 14,  61 => 10,  54 => 6,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/themes/openplc/templates/page--front.html.twig", "/var/www/html/freecad_drupal10/themes/themes/openplc/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 27];
        static $filters = ["trim" => 1, "striptags" => 1, "render" => 1, "escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['trim', 'striptags', 'render', 'escape'],
                [],
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
