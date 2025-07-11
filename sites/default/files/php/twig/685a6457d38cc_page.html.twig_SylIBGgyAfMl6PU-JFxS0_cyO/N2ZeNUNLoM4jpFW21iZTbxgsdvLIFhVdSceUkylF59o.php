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

/* themes/themes/openplc/templates/page.html.twig */
class __TwigTemplate_b78303e4a456b93a4c2068b99a50bdc0 extends Template
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
        // line 46
        $context["has_sidebar_first"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 46)))));
        // line 47
        $context["has_sidebar_second"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 47)))));
        // line 48
        yield "<div class=\"container-fluid\" style=\"background: #e5f5cb;\">
    ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 49), "html", null, true);
        yield "
    <header role=\"banner\">
      ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 51), "html", null, true);
        yield "
    </header>

    ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54), "html", null, true);
        yield "
    ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 55), "html", null, true);
        yield "
    ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 56), "html", null, true);
        yield "
    ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "openplc_corousal", [], "any", false, false, true, 57), "html", null, true);
        yield "

    ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 59), "html", null, true);
        yield "
    ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 60), "html", null, true);
        yield "
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\">
        </a>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    ";
        // line 66
        if ((($context["has_sidebar_first"] ?? null) && ($context["has_sidebar_second"] ?? null))) {
            // line 67
            yield "                        ";
            if (($context["has_sidebar_first"] ?? null)) {
                // line 68
                yield "                                <div class=\"col-sm-3\"  role=\"complementary\">
                                    ";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 69), "html", null, true);
                yield "
                                </div>
                        ";
            }
            // line 72
            yield "                            <div class=\"col-sm-6\">
                                ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 73), "html", null, true);
            yield "
                            </div>";
            // line 75
            yield "                        ";
            if (($context["has_sidebar_second"] ?? null)) {
                // line 76
                yield "                                <div class=\"col-sm-3\" style=\"float: right;\"  role=\"complementary\">
                                    ";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 77), "html", null, true);
                yield "
                                </div>
                        ";
            }
            // line 80
            yield "                    ";
        } elseif ((($context["has_sidebar_first"] ?? null) || ($context["has_sidebar_second"] ?? null))) {
            // line 81
            yield "                        ";
            if (($context["has_sidebar_first"] ?? null)) {
                // line 82
                yield "                                <div class=\"col-sm-3\"  role=\"complementary\">
                                    ";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 83), "html", null, true);
                yield "
                                </div>
                            <div class=\"col-sm-9\">
                                ";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 86), "html", null, true);
                yield "
                            </div>";
                // line 88
                yield "                        ";
            } elseif (($context["has_sidebar_second"] ?? null)) {
                // line 89
                yield "                            <div class=\"col-sm-9\">
                                ";
                // line 90
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 90), "html", null, true);
                yield "
                            </div>";
                // line 92
                yield "                            <div class=\"col-sm-3\" style=\"float: right;\"  role=\"complementary\">
                                ";
                // line 93
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 93), "html", null, true);
                yield "
                            </div>
                        ";
            } else {
                // line 96
                yield "                            <div class=\"col-xl-12 \">
                                ";
                // line 97
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97), "html", null, true);
                yield "
                            </div>";
                // line 99
                yield "                        ";
            }
            // line 100
            yield "                    ";
        } else {
            // line 101
            yield "                        <div class=\"col-xl-12 \">
                            ";
            // line 102
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 102), "html", null, true);
            yield "
                        </div>";
            // line 104
            yield "                    ";
        }
        // line 105
        yield "                </div>
            </div>
    </main>
    ";
        // line 109
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 109), "html", null, true);
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
        return "themes/themes/openplc/templates/page.html.twig";
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
        return array (  191 => 109,  186 => 105,  183 => 104,  179 => 102,  176 => 101,  173 => 100,  170 => 99,  166 => 97,  163 => 96,  157 => 93,  154 => 92,  150 => 90,  147 => 89,  144 => 88,  140 => 86,  134 => 83,  131 => 82,  128 => 81,  125 => 80,  119 => 77,  116 => 76,  113 => 75,  109 => 73,  106 => 72,  100 => 69,  97 => 68,  94 => 67,  92 => 66,  83 => 60,  79 => 59,  74 => 57,  70 => 56,  66 => 55,  62 => 54,  56 => 51,  51 => 49,  48 => 48,  46 => 47,  44 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/themes/openplc/templates/page.html.twig", "/var/www/html/freecad_drupal10/themes/themes/openplc/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 46, "if" => 66];
        static $filters = ["trim" => 46, "striptags" => 46, "render" => 46, "escape" => 49];
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
