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

/* /Users/onege/Desktop/october — копия/template-october/themes/demo/pages/home.htm */
class __TwigTemplate_388e6de395abb296dc501fcb63d52faf33f00bc0ebe24c2420c6dcf9df8ef0fb extends \Twig\Template
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
    ";
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/video.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        echo "
    <div class=\"hero-overlay\"></div>

    <div class=\"hero__container container\">
        <div class=\"hero__content\">
            <h1 class=\"hero__title\">
                ";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "            </h1>
            <p class=\"hero__text\">
                ";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/text.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 13
        echo "            </p>
            <a href=\"#contact\" class=\"btn-quote\">
                ";
        // line 15
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/button-text.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 16
        echo "            </a>
        </div>
    </div>

    <div class=\"floating-icons\">
        ";
        // line 21
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/icon-scroll.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 22
        echo "
        ";
        // line 23
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/icon-instagram.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 24
        echo "
        ";
        // line 25
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/icon-whatsapp.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 26
        echo "    </div>

    <div class=\"hero__divider\"></div>
</section>

    <section class=\"benefits\">
    <div class=\"container\">
        <div class=\"benefits__header\">
            <h2 class=\"benefits__title\">";
        // line 34
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("benefits/main-title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</h2>
            <p class=\"benefits__subtitle\">";
        // line 35
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("benefits/main-subtitle.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
        </div>

        <div class=\"benefits__grid\">
            <div class=\"benefit-card\">
                ";
        // line 40
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("benefits/card-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 41
        echo "            </div>

            <div class=\"benefit-card\">
                ";
        // line 44
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("benefits/card-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 45
        echo "            </div>

            <div class=\"benefit-card\">
                ";
        // line 48
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("benefits/card-3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 49
        echo "            </div>
        </div>
    </div>
</section>

    <section class=\"services-dark\" id=\"services\">
    <div class=\"container\">
        <h2 class=\"services-dark__title\">";
        // line 56
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</h2>

        <div class=\"services-slider\">
            <div class=\"services-slider__track\">

                ";
        // line 62
        echo "                <div class=\"service-dark-card\">
                    ";
        // line 63
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/service-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 64
        echo "                    <div class=\"service-dark-card__btn\">
                        <img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow.svg");
        echo "\" class=\"service-arrow\" alt=\"Go\">
                    </div>
                </div>

                <div class=\"service-dark-card\">
                    ";
        // line 70
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/service-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 71
        echo "                    <div class=\"service-dark-card__btn\">
                        <img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow.svg");
        echo "\" class=\"service-arrow\" alt=\"Go\">
                    </div>
                </div>

                <div class=\"service-dark-card\">
                    ";
        // line 77
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/service-3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 78
        echo "                    <div class=\"service-dark-card__btn\">
                        <img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow.svg");
        echo "\" class=\"service-arrow\" alt=\"Go\">
                    </div>
                </div>

                <div class=\"service-dark-card\">
                    ";
        // line 84
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/service-4.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 85
        echo "                    <div class=\"service-dark-card__btn\">
                        <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow.svg");
        echo "\" class=\"service-arrow\" alt=\"Go\">
                    </div>
                </div>

                <div class=\"service-dark-card\">
                    ";
        // line 91
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/service-5.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 92
        echo "                    <div class=\"service-dark-card__btn\">
                        <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow.svg");
        echo "\" class=\"service-arrow\" alt=\"Go\">
                    </div>
                </div>

            </div>

            <div class=\"services-dots\">
                <span class=\"dot active\"></span>
                <span class=\"dot\"></span>
                <span class=\"dot\"></span>
                <span class=\"dot\"></span>
                <span class=\"dot\"></span>
            </div>
        </div>
    </div>
</section>

    <section class=\"reviews\" id=\"reviews\">
    <div class=\"reviews__container\">
        <h2 class=\"reviews__title\">";
        // line 112
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("reviews/title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</h2>

        <div class=\"reviews__grid\">
            <div class=\"review-card review-card--first\">
                ";
        // line 116
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("reviews/stats-card.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 117
        echo "            </div>

            <div class=\"review-card\">
                ";
        // line 120
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("reviews/review-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 121
        echo "            </div>

            <div class=\"review-card\">
                ";
        // line 124
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("reviews/review-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 125
        echo "            </div>
        </div>
    </div>
</section>

    <section class=\"about\" id=\"about\">
    <div class=\"about__divider\"></div>

    <div class=\"container about__container\">
        <div class=\"about__content\">
            <div class=\"about__image\">
                ";
        // line 136
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/image.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 137
        echo "            </div>

            <div class=\"about__info\">
                <h2 class=\"about__title\">
                    ";
        // line 141
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 142
        echo "                </h2>
                <div class=\"about__text\">
                    ";
        // line 144
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/text.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 145
        echo "                </div>
            </div>
        </div>
    </div>
</section>

    <section class=\"gallery\" id=\"gallery\">
    <div class=\"container gallery__container\">

        <h2 class=\"gallery__title\">
            ";
        // line 155
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 156
        echo "        </h2>

        <div class=\"gallery__slider\">
            <div class=\"gallery__track\">

                <div class=\"gallery__item\">
                    ";
        // line 162
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/img-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 163
        echo "                </div>

                <div class=\"gallery__item\">
                    ";
        // line 166
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/img-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 167
        echo "                </div>

                <div class=\"gallery__item\">
                    ";
        // line 170
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/img-3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 171
        echo "                </div>

                <div class=\"gallery__item\">
                    ";
        // line 174
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/img-4.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 175
        echo "                </div>

                <div class=\"gallery__item\">
                    ";
        // line 178
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/img-5.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 179
        echo "                </div>

            </div>
        </div>

        <div class=\"gallery__dots\">
            <span class=\"gallery__dot gallery__dot--active\"></span>
            <span class=\"gallery__dot\"></span>
            <span class=\"gallery__dot\"></span>
            <span class=\"gallery__dot\"></span>
            <span class=\"gallery__dot\"></span>
        </div>

    </div>
</section>

    <section class=\"contact\" id=\"contact\">
    <div class=\"contact__container\">
        <div class=\"contact__card\">
            <div class=\"contact__content\">
                <div class=\"contact__left\">
                    <h2 class=\"contact__title\">
                        ";
        // line 201
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 202
        echo "                    </h2>

                    <form class=\"contact__form\">
                        <div class=\"form__grid\">
                            <input type=\"text\" placeholder=\"Your Name*\" class=\"form__input\">
                            <input type=\"tel\" placeholder=\"Phone*\" class=\"form__input\">
                            <input type=\"email\" placeholder=\"Email\" class=\"form__input\">

                            <input type=\"text\" placeholder=\"From Address*\" class=\"form__input\">
                            <input type=\"text\" placeholder=\"To Address*\" class=\"form__input\">
                            <input type=\"date\" class=\"form__input\">

                            <div class=\"form__grid-row form__grid-row--half-width\">
                                <input type=\"text\" placeholder=\"Move Type\" class=\"form__input form__input--half\">
                                <input type=\"text\" placeholder=\"Volume\" class=\"form__input form__input--half\">
                            </div>
                        </div>
                        <button type=\"submit\" class=\"contact__btn\">
                            ";
        // line 220
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/button-text.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 221
        echo "                        </button>
                    </form>
                </div>

                <div class=\"contact__right\">
                    <div class=\"contact__info-item\">
                        <div class=\"contact__icon-box\">
                            <img src=\"";
        // line 228
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/loc-icon.svg");
        echo "\" alt=\"Location\">
                        </div>
                        <div class=\"contact__info-text\">
                            ";
        // line 231
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/address.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 232
        echo "                        </div>
                    </div>

                    <div class=\"contact__info-item\">
                        <div class=\"contact__icon-box\">
                            <img src=\"";
        // line 237
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/phone-icon.svg");
        echo "\" alt=\"Phone\">
                        </div>
                        <div class=\"contact__info-text\">
                            ";
        // line 240
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/phone.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 241
        echo "                        </div>
                    </div>

                    <div class=\"contact__info-item\">
                        <div class=\"contact__icon-box\">
                            <img src=\"";
        // line 246
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mail-icon.svg");
        echo "\" alt=\"Email\">
                        </div>
                        <div class=\"contact__info-text\">
                            ";
        // line 249
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/email.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 250
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия/template-october/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 250,  489 => 249,  483 => 246,  476 => 241,  472 => 240,  466 => 237,  459 => 232,  455 => 231,  449 => 228,  440 => 221,  436 => 220,  416 => 202,  412 => 201,  388 => 179,  384 => 178,  379 => 175,  375 => 174,  370 => 171,  366 => 170,  361 => 167,  357 => 166,  352 => 163,  348 => 162,  340 => 156,  336 => 155,  324 => 145,  320 => 144,  316 => 142,  312 => 141,  306 => 137,  302 => 136,  289 => 125,  285 => 124,  280 => 121,  276 => 120,  271 => 117,  267 => 116,  258 => 112,  236 => 93,  233 => 92,  229 => 91,  221 => 86,  218 => 85,  214 => 84,  206 => 79,  203 => 78,  199 => 77,  191 => 72,  188 => 71,  184 => 70,  176 => 65,  173 => 64,  169 => 63,  166 => 62,  156 => 56,  147 => 49,  143 => 48,  138 => 45,  134 => 44,  129 => 41,  125 => 40,  115 => 35,  109 => 34,  99 => 26,  95 => 25,  92 => 24,  88 => 23,  85 => 22,  81 => 21,  74 => 16,  70 => 15,  66 => 13,  62 => 12,  58 => 10,  54 => 9,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/onege/Desktop/october — копия/template-october/themes/demo/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 2);
        static $filters = array("theme" => 65);
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
