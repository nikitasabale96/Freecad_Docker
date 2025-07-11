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

/* themes/themes/openplc/templates/region--footer.html.twig */
class __TwigTemplate_44039ef4804b636ddefe1d3253547809 extends Template
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
        // line 15
        yield "
   <div id=\"footer\" style=\"background: black;margin-top:100px;\">
       <div class=\"container\">
           <div class=\"row\" style=\"margin-top:5px;\">
                 <div class=\"col-md-4\">
                   <center>
                    <a href=\"https://fossee.in\" target=\"_blank\"><img style=\" width:150px;background: #fff;\"src=\"";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/image/fossee-logo.png\"/><a/>
                   </center>
                 </div>
                 <div class=\"col-md-4\">
                   <center>
                        <a href=\"https://www.iitb.ac.in/\" target=\"_blank\"><img style=\"width: 80px;height: 80px;\" src=\"";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/image/iitb-logo.png\"/><a/>
                   </center>
                 </div>
                 <div class=\"col-md-4\">
                   <center>
                        <a href=\"https://mhrd.gov.in/ict-initiatives\" target=\"_blank\"><img style=\"width: 150px;background: #fff;height: 55px;\"src=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/image/NMEICT.png\"/></a>
                   </center>
                 </div>
               </div>
               <div class=\"row\">
                  <p><center><p style=\"color:#fff\">This work is licensed under a Creative Commons Attribution-ShareAlike 4.0 International License</p></center></p>
                  <center><a href='https://creativecommons.org/licenses/by-sa/4.0/'/><img src=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/image/footer_license.png\" ></a></center>
               </div>
       </div>
   </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/themes/openplc/templates/region--footer.html.twig";
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
        return array (  77 => 37,  68 => 31,  60 => 26,  52 => 21,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/themes/openplc/templates/region--footer.html.twig", "/var/www/html/freecad_drupal10/themes/themes/openplc/templates/region--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
