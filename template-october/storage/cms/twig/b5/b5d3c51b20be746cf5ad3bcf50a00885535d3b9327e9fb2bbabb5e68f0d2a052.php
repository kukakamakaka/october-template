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

/* /Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/scripts.htm */
class __TwigTemplate_20aa000d283dc0d5aae93ba944826f4aa9e318321f97bc92ca96fe8bbe9bf7b1 extends \Twig\Template
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
        echo "<script>
   document.addEventListener('DOMContentLoaded', () => {
    // 1. УПРАВЛЕНИЕ ШАПКОЙ
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

    // 2. МОБИЛЬНОЕ МЕНЮ
const burger = document.getElementById('burger');
const menu = document.querySelector('.menu');

burger?.addEventListener('click', () => {
    burger.classList.toggle('active');
    menu.classList.toggle('active');
    document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : 'auto';
});

// 2.1. SERVICES DROPDOWN (МОБ)
const menuItems = document.querySelectorAll('.menu__item');

menuItems.forEach(item => {
    const link = item.querySelector('.menu__link');
    const dropdown = item.querySelector('.dropdown');

    if (link && dropdown) {
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                item.classList.toggle('dropdown-open');
                if (item.classList.contains('dropdown-open')) {
                    dropdown.style.display = 'block';
                } else {
                    dropdown.style.display = 'none';
                }
            }
        });
    }
});

    // 3. ГАЛЕРЕЯ СКРОЛЛ ЖӘНЕ НҮКТЕЛЕР (ОСЫ ЖЕР МАҢЫЗДЫ)
    const gallerySlider = document.querySelector('.gallery__slider');
    const galleryDots = document.querySelectorAll('.gallery__dot');
    const galleryItems = document.querySelectorAll('.gallery__item');

    if (gallerySlider && galleryDots.length > 0) {
        // Функция: Нүктелерді жаңарту
        const updateGalleryDots = () => {
            const scrollLeft = gallerySlider.scrollLeft;
            const itemWidth = galleryItems[0].offsetWidth + 40; // 40 - бұл gap
            const activeIndex = Math.round(scrollLeft / itemWidth);
            galleryDots.forEach((dot, index) => {
                dot.classList.toggle('gallery__dot--active', index === activeIndex);
            });
        };

        gallerySlider.addEventListener('scroll', updateGalleryDots);

        if (galleryItems.length >= 3) {
            const targetItem = galleryItems[2];
            const scrollOffset = targetItem.offsetLeft - (gallerySlider.clientWidth / 2) + (targetItem.offsetWidth / 2);

            gallerySlider.scrollTo({
                left: scrollOffset,
                behavior: 'auto'
            });
            setTimeout(updateGalleryDots, 100);
        }
    }

    // 4. SERVICES SLIDER
    const servicesTrack = document.querySelector('.services-slider__track');
    const servicesDots = document.querySelectorAll('.dot');
    if (servicesTrack) {
        servicesTrack.addEventListener('scroll', () => {
            const cardWidth = 414;
            const index = Math.round(servicesTrack.scrollLeft / cardWidth);
            servicesDots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        });
    }
});
</script>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/scripts.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/onege/Desktop/october — копия/template-october/themes/demo/partials/site/scripts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
