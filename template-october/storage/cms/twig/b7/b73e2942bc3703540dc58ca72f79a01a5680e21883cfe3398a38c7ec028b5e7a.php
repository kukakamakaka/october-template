<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/footer.htm */
class __TwigTemplate_bdbc91b4ab830ed349fc8c4e689249598502a1e65e2c419cb5e2877276572190 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer class=\"footer\">
    <div class=\"footer__divider-vector\">
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/VVVector.svg");
        echo "\" alt=\"divider\" class=\"vector-left\">
        <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/VVVector.svg");
        echo "\" alt=\"divider\" class=\"vector-right\">
    </div>

    <div class=\"container footer__container\">
        <div class=\"footer__top\">
            <div class=\"footer__col-questions\">
                <h2 class=\"footer__questions-title\">";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/questions-title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</h2>
                <p class=\"footer__questions-subtitle\">";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/questions-subtitle.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                <a href=\"#contact\" class=\"btn-quote footer__btn\">
                    ";
        // line 13
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/button-text.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 14
        echo "                </a>
            </div>

            <div class=\"footer__col\">
                <h3 class=\"footer__col-title\">Navigation</h3>
                <ul class=\"footer__list\">
                    <li><a href=\"#about\">About Us</a></li>
                    <li><a href=\"#gallery\">Gallery</a></li>
                    <li><a href=\"#reviews\">Reviews</a></li>
                </ul>
            </div>

            <div class=\"footer__col\">
                <h3 class=\"footer__col-title\">Our Services</h3>
                <ul class=\"footer__list\">
                    <li><a href=\"#services\">Office / Commercial Moving</a></li>
                    <li><a href=\"#services\">Local Moving</a></li>
                    <li><a href=\"#services\">Long Distance Moving</a></li>
                    <li><a href=\"#services\">Packing Services</a></li>
                    <li><a href=\"#services\">Storage Solutions</a></li>
                </ul>
            </div>

            <div class=\"footer__col footer__col-contacts\">
                <h3 class=\"footer__col-title\">Contact Us</h3>
                <div class=\"footer__contact-text\">
                    ";
        // line 40
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/address.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 41
        echo "                </div>
                <div class=\"footer__contact-links\">
                    ";
        // line 43
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/contacts.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 44
        echo "                </div>
            </div>

            <div class=\"footer__socials\">
                ";
        // line 48
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/socials.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 49
        echo "            </div>
        </div>

        <div class=\"footer__bottom\">
            <div class=\"footer__line\"></div>
            <p class=\"footer__copyright\">";
        // line 54
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/copyright.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 54,  123 => 49,  119 => 48,  113 => 44,  109 => 43,  105 => 41,  101 => 40,  73 => 14,  69 => 13,  62 => 11,  56 => 10,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 10);
        static $filters = array("theme" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                ['theme'],
                []
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
