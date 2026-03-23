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

/* /Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/header.htm */
class __TwigTemplate_41414e672c58a51d415289f652f11d6f4a138e618a498fb7011e1252e0e5d5bf extends \Twig\Template
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
        echo "<header class=\"header\">
    <div class=\"container\">
        <div class=\"nav-wrapper\">

            <a href=\"/\" class=\"logo\">
                ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("header/logo.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "            </a>

            <nav class=\"menu\">
                <div class=\"menu__item\">
                    <a href=\"#services\" class=\"menu__link\">Services</a>
                    <div class=\"dropdown\">
                        <ul class=\"dropdown__list\">
                            <li><a href=\"#services\">Local Moving</a></li>
                            <li><a href=\"#services\">Long Distance Moving</a></li>
                            <li><a href=\"#services\">Office / Commercial Moving</a></li>
                            <li><a href=\"#services\">Packing Services</a></li>
                            <li><a href=\"#services\">Storage Solutions</a></li>
                        </ul>
                    </div>
                </div>

                <a href=\"#about\" class=\"menu__link\">About Us</a>
                <a href=\"#gallery\" class=\"menu__link\">Gallery</a>
                <a href=\"#reviews\" class=\"menu__link\">Reviews</a>
                <a href=\"#contact\" class=\"menu__link\">Contact Us</a>
            </nav>

            <div class=\"actions\">
                ";
        // line 30
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("header/phone-action.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 31
        echo "
                <a href=\"#contact\" class=\"btn-quote\">
                    ";
        // line 33
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("header/btn-text.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 34
        echo "                </a>

                <button class=\"search-btn\">
                    <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                    </svg>
                </button>
                <div class=\"burger\" id=\"burger\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  83 => 33,  79 => 31,  75 => 30,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                [],
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
