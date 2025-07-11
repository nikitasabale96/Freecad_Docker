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

/* modules/contrib/superfish/templates/superfish-menu-items.html.twig */
class __TwigTemplate_eacee6e97d61b6aec01d9011442a9fb3 extends Template
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
        // line 21
        yield "
";
        // line 22
        $context["classes"] = [];
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menu_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            yield "
  ";
            // line 25
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 25))) {
                // line 26
                yield "    ";
                $context["item_class"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_class", [], "any", false, false, true, 26) . " menuparent");
                // line 27
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 27)) {
                    // line 28
                    yield "      ";
                    $context["item_class"] = (($context["item_class"] ?? null) . " sf-multicolumn-column");
                    // line 29
                    yield "    ";
                }
                // line 30
                yield "  ";
            }
            // line 31
            yield "
  <li";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 32), "html", null, true);
            yield " role=\"none\">
    ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 33)) {
                // line 34
                yield "    <div class=\"sf-multicolumn-column\">
    ";
            }
            // line 36
            yield "
    ";
            // line 37
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 37))) {
                // line 38
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_menuparent", [], "any", false, false, true, 38), ["#attributes" => ["role" => "menuitem", "aria-haspopup" => "true", "aria-expanded" => "false"]]), "html", null, true);
                yield "
    ";
            } else {
                // line 40
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 40), ["#attributes" => ["role" => "menuitem"]]), "html", null, true);
                yield "
    ";
            }
            // line 42
            yield "
    ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_wrapper", [], "any", false, false, true, 43)) {
                // line 44
                yield "      <ul class=\"sf-multicolumn\" role=\"menu\">
      <li class=\"sf-multicolumn-wrapper ";
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_class", [], "any", false, false, true, 45), "html", null, true);
                yield "\" role=\"none\">
    ";
            }
            // line 47
            yield "
    ";
            // line 48
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 48))) {
                // line 49
                yield "
      ";
                // line 50
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_content", [], "any", false, false, true, 50)) {
                    // line 51
                    yield "        <ol role=\"menu\">
      ";
                } else {
                    // line 53
                    yield "        <ul role=\"menu\">
      ";
                }
                // line 55
                yield "
      ";
                // line 56
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 56), "html", null, true);
                yield "

      ";
                // line 58
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_content", [], "any", false, false, true, 58)) {
                    // line 59
                    yield "        </ol>
      ";
                } else {
                    // line 61
                    yield "        </ul>
      ";
                }
                // line 63
                yield "
    ";
            }
            // line 65
            yield "
    ";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_wrapper", [], "any", false, false, true, 66)) {
                // line 67
                yield "      </li>
      </ul>
    ";
            }
            // line 70
            yield "
    ";
            // line 71
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 71)) {
                // line 72
                yield "    </div>
    ";
            }
            // line 74
            yield "  </li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu_items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/superfish/templates/superfish-menu-items.html.twig";
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
        return array (  175 => 74,  171 => 72,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  156 => 65,  152 => 63,  148 => 61,  144 => 59,  142 => 58,  137 => 56,  134 => 55,  130 => 53,  126 => 51,  124 => 50,  121 => 49,  119 => 48,  116 => 47,  111 => 45,  108 => 44,  106 => 43,  103 => 42,  97 => 40,  91 => 38,  89 => 37,  86 => 36,  82 => 34,  80 => 33,  76 => 32,  73 => 31,  70 => 30,  67 => 29,  64 => 28,  61 => 27,  58 => 26,  56 => 25,  53 => 24,  49 => 23,  47 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/superfish/templates/superfish-menu-items.html.twig", "/var/www/html/freecad_drupal10/modules/contrib/superfish/templates/superfish-menu-items.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "for" => 23, "if" => 25];
        static $filters = ["escape" => 32, "merge" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'merge'],
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
