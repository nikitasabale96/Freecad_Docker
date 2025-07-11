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

/* themes/themes/dwsim-theme/e_theme/templates/page--front.html.twig */
class __TwigTemplate_6f50dddb6a14ade049724005a5f847a1 extends Template
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
        yield "<div id=\"page-wrapper\">
  <div class=\"header-container\">
    <header>
      <div class=\"logo-bar\">
        <div class=\"logo-left\">
          <img src=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/dwsim-logo.png\" alt=\"DWSIM Logo\">
        </div>
        <div class=\"logo-right\">
          <img src=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/fossee-logo.png\" alt=\"FOSSEE Logo\">
        </div>
      </div>

      <div class=\"nav-container\">
        <button class=\"nav-toggle\">☰</button>
        
        <nav>
          <ul>
            <li><a href=\"#home\">Home</a></li>
            <li><a href=\"#resources\">Resources</a></li>
            <li><a href=\"#testimonials\">Testimonials</a></li>
            <li><a href=\"#contact\">Contact us</a></li>
            <li><a href=\"/user/login\">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </div>

  <section class=\"hero\" id=\"home\">
    <img src=\"";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/hero.jpg\" alt=\"Chemical Process Simulation\">
    <div class=\"hero-overlay\"></div>
    <div class=\"hero-text\">
      <h1 class=\"hero-title\">Open-Source Chemical Process Simulation</h1>
      <p class=\"hero-subtitle\">Advanced process modeling for engineers and researchers</p>
      <a href=\"#resources\" class=\"hero-cta\">Explore Features</a>
    </div>
  </section>

  <div class=\"content\">
    <div class=\"two-columns\">
      <main class=\"main\">
        <h2 class=\"section-title\">About DWSIM</h2>
        <p>DWSIM is an open-source chemical process simulator for Windows, Linux and macOS systems. Written in Python, it's capable of modeling steady-state and dynamic processes for chemical engineering applications.</p>
        
        <p>DWSIM features a comprehensive set of unit operations, advanced thermodynamic models, support for electrolytes and solids, and an intuitive graphical interface. It allows engineers to design, simulate and optimize chemical processes with industrial-grade accuracy.</p>
        
        <p>The software is developed by an international team of volunteers and is widely used in academia and industry for teaching, research and process design.</p>
        
        <div class=\"card-container\">
          <div class=\"card\">
            <div class=\"card-header\">Resources</div>
            <div class=\"card-body\">
              <ul>
                <li><a href=\"#\">System Tutorial</a></li>
                <li><a href=\"#\">Documentation</a></li>
                <li><a href=\"#\">Downloads</a></li>
                <li><a href=\"#\">Video Guides</a></li>
                <li><a href=\"#\">API Reference</a></li>
              </ul>
            </div>
          </div>
          
          <div class=\"card\">
            <div class=\"card-header\">Events</div>
            <div class=\"card-body\">
              <ul>
                <li><a href=\"#\">Workshop</a></li>
                <li><a href=\"#\">Modathon</a></li>
                <li><a href=\"#\">Training Sessions</a></li>
                <li><a href=\"#\">User Conference</a></li>
                <li><a href=\"#\">Webinars</a></li>
              </ul>
            </div>
          </div>
          
          <div class=\"card\">
            <div class=\"card-header\">Notice Board</div>
            <div class=\"card-body\">
              <ul>
                <li><a href=\"#\">Jobs</a></li>
                <li><a href=\"#\">News & Events</a></li>
                <li><a href=\"#\">Software Updates</a></li>
                <li><a href=\"#\">Research Opportunities</a></li>
                <li><a href=\"#\">Community Announcements</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <h2 class=\"section-title\" id=\"resources\">Key Features</h2>
        <div class=\"features-grid\">
          <div class=\"feature-card\">
            <i class=\"fas fa-cogs\"></i>
            <h3>Unit Operations</h3>
            <p>Over 50 unit operations including reactors, separators, heat exchangers, and more.</p>
          </div>
          <div class=\"feature-card\">
            <i class=\"fas fa-flask\"></i>
            <h3>Thermodynamics</h3>
            <p>Comprehensive property packages with support for electrolytes and solids.</p>
          </div>
          <div class=\"feature-card\">
            <i class=\"fas fa-project-diagram\"></i>
            <h3>Flowsheeting</h3>
            <p>Intuitive graphical interface for building complex process flowsheets.</p>
          </div>
          <div class=\"feature-card\">
            <i class=\"fas fa-chart-line\"></i>
            <h3>Optimization</h3>
            <p>Built-in tools for process optimization and sensitivity analysis.</p>
          </div>
        </div>
        
        <h2 class=\"section-title\" id=\"testimonials\">User Testimonials</h2>
        <div class=\"testimonials-slider\">
          <div class=\"testimonial\">
            <p>\"DWSIM has transformed how we teach process simulation. The open-source nature allows students to explore without licensing constraints.\"</p>
            <p class=\"author\">- Dr. Jane Smith, Professor of Chemical Engineering</p>
          </div>
          <div class=\"testimonial\">
            <p>\"We've successfully implemented DWSIM for small-scale process design. It's powerful enough for industrial applications yet accessible for SMEs.\"</p>
            <p class=\"author\">- John Davis, Process Engineer</p>
          </div>
        </div>
      </main>
      
      <aside class=\"sidebar\">
        <button class=\"get-involved\">Get Involved</button>
        
        <div class=\"activities\">
          <h3>Activities</h3>
          <ul>
            <li><a href=\"#\">Flowsheeting Project</a></li>
            <li><a href=\"#\">Custom Modelling Project</a></li>
            <li><a href=\"#\">Textbook Companion</a></li>
            <li><a href=\"#\">Lab Migration</a></li>
            <li><a href=\"#\">Translation Project</a></li>
            <li><a href=\"#\">Documentation Drive</a></li>
          </ul>
        </div>
        
        <div class=\"newsletter\">
          <h3>Subscribe to Newsletter</h3>
          <form id=\"newsletter-form\">
            <input type=\"email\" placeholder=\"Your email address\" required>
            <button type=\"submit\">Subscribe</button>
          </form>
        </div>
        
        <div class=\"stats\">
          <h3>Community Stats</h3>
          <div class=\"stat-item\">
            <i class=\"fas fa-users\"></i>
            <span>15,000+ Users</span>
          </div>
          <div class=\"stat-item\">
            <i class=\"fas fa-download\"></i>
            <span>500,000+ Downloads</span>
          </div>
          <div class=\"stat-item\">
            <i class=\"fas fa-code-branch\"></i>
            <span>200+ Contributors</span>
          </div>
        </div>
      </aside>
    </div>
    
    <h2 class=\"section-title\" id=\"contact\">Contact Us</h2>
    <div class=\"contact-form\">
      <form id=\"contactForm\">
        <div class=\"form-group\">
          <input type=\"text\" placeholder=\"Your Name\" required>
        </div>
        <div class=\"form-group\">
          <input type=\"email\" placeholder=\"Your Email\" required>
        </div>
        <div class=\"form-group\">
          <textarea placeholder=\"Your Message\" rows=\"5\" required></textarea>
        </div>
        <button type=\"submit\">Send Message</button>
      </form>
    </div>
  </div>

  <footer>
    <div class=\"footer-grid\">
      <div class=\"footer-column contact-info\">
        <h3 class=\"footer-title\">Contact Information</h3>
        <p><strong>Prof. Conan Wodgaya</strong></p>
        <p>Phone: 0212-2506-4111</p>
        <p>Mobile: (18) 044 - 620 IPR</p>
        <p>Email: contact@dwsim.org</p>
        <p>Address: Chemical Engineering Department, University Campus, Mumbai</p>
      </div>
      
      <div class=\"footer-column\">
        <h3 class=\"footer-title\">Quick Links</h3>
        <ul>
          <li><a href=\"#\">Documentation</a></li>
          <li><a href=\"#\">Tutorials</a></li>
          <li><a href=\"#\">API Development</a></li>
          <li><a href=\"#\">Contribution Guide</a></li>
          <li><a href=\"#\">Report Issues</a></li>
        </ul>
      </div>
      
      <div class=\"footer-column\">
        <h3 class=\"footer-title\">Community</h3>
        <ul>
          <li><a href=\"#\">Forums</a></li>
          <li><a href=\"#\">User Groups</a></li>
          <li><a href=\"#\">Developer Portal</a></li>
          <li><a href=\"#\">Blog</a></li>
          <li><a href=\"#\">Newsletter</a></li>
        </ul>
      </div>
    </div>
    
    <div class=\"supported-by\">
      <h4>Supported by</h4>
      <div class=\"logo-grid\">
        <img src=\"";
        // line 222
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/dwsim-logo.png\" alt=\"DWSIM\">
        <img src=\"";
        // line 223
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/fossee-logo.png\" alt=\"FOSSEE\">
        <img src=\"";
        // line 224
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/nmeict-logo.png\" alt=\"NMEICT\">
      </div>
    </div>
    
    <div class=\"copyright\">
      &copy; ";
        // line 229
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " DWSIM Project. All rights reserved.
    </div>
  </footer>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/themes/dwsim-theme/e_theme/templates/page--front.html.twig";
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
        return array (  292 => 229,  284 => 224,  280 => 223,  276 => 222,  81 => 30,  57 => 9,  51 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/themes/dwsim-theme/e_theme/templates/page--front.html.twig", "/var/www/html/freecad_drupal10/themes/themes/dwsim-theme/e_theme/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 6, "date" => 229];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
