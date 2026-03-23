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

/* /Users/onege/Desktop/october — копия/template-october/themes/demo/partials/sections/hero.htm */
class __TwigTemplate_25a00e54aedb0891bc3f1f95e13d257fe3914e82db03e98ab331195c25872ce0 extends \Twig\Template
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
        echo "<section class=\"hero\">
    <video autoplay muted loop playsinline class=\"hero-video\">
        <source src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/1.mp4");
        echo "\" type=\"video/mp4\">
    </video>

    <div class=\"hero-overlay\"></div>

    <div class=\"hero__container container\">
        <div class=\"hero__content\">
            <h1 class=\"hero__title\">
                ";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero-title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 12
        echo "            </h1>
            <p class=\"hero__text\">
                ";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero-text.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 15
        echo "            </p>
            <a href=\"#contact\" class=\"btn-quote\">Get a Quote</a>
        </div>
    </div>

    <div class=\"floating-icons\">
        <a href=\"#\" target=\"_blank\" class=\"floating-icons__item\">
            <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Group 4375.svg");
        echo "\" alt=\"Scroll\">
        </a>
        <a href=\"https://instagram.com/ti_moving\" target=\"_blank\" class=\"floating-icons__item\">
            <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Group 1597878298.svg");
        echo "\" alt=\"Instagram\">
        </a>
        <a href=\"https://wa.me/123456789\" target=\"_blank\" class=\"floating-icons__item\">
            <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Group 1597878299.svg");
        echo "\" alt=\"WhatsApp\">
        </a>
    </div>

    <div class=\"hero__divider\"></div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия/template-october/themes/demo/partials/sections/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  81 => 25,  75 => 22,  66 => 15,  62 => 14,  58 => 12,  54 => 11,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/onege/Desktop/october — копия/template-october/themes/demo/partials/sections/hero.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 11);
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
