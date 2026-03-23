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

    // 1. ШАПКА СКРОЛЛЫ (Бұрынғыша қалады, бұл дұрыс)
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

// 2. МОБИЛЬДІ МӘЗІР (ЖАҢА ТҮЗЕТІЛГЕН НҰСҚА)
const burger = document.getElementById('burger'); // ID арқылы алу
const mobileMenu = document.getElementById('mobileMenu');

if (burger && mobileMenu) {
    burger.addEventListener('click', (e) => {
        e.stopPropagation(); // Басқанда оқиғаның басқа жаққа кетпеуі үшін
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');

        // Мәзір ашылғанда артқы фон (body) скролл болмауы үшін
        if (mobileMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
            document.body.style.touchAction = 'none'; // Мобилкадағы скроллды блоктайды
        } else {
            document.body.style.overflow = 'auto';
            document.body.style.touchAction = 'auto';
        }
    });

    // Мәзірден тыс жерді (экранды) басқанда жабылуы (UX үшін жақсы)
    document.addEventListener('click', (e) => {
        if (mobileMenu.classList.contains('active') && !mobileMenu.contains(e.target) && !burger.contains(e.target)) {
            burger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
}

 // 3. МОБИЛЬДІ АККОРДЕОН (ЖАҚСАРТЫЛҒАН НҰСҚА)
const mobileItems = document.querySelectorAll('.mobile-item');

mobileItems.forEach(item => {
    const link = item.querySelector('.mobile-link');
    const dropdown = item.querySelector('.mobile-dropdown');

    if (dropdown) {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation(); // Оқиғаның жоғары қарай таралмауы үшін

            // БАСҚАЛАРЫН ЖАБУ (Мәзір жинақы тұруы үшін)
            mobileItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('open')) {
                    otherItem.classList.remove('open');
                    const otherSpan = otherItem.querySelector('.mobile-link span');
                    if (otherSpan) otherSpan.textContent = '+';
                }
            });

            // ҚАЗІРГІ ПУНКТТІ АШУ/ЖАБУ
            const isOpen = item.classList.toggle('open');

            // Плюс/Минус белгісін ауыстыру
            const span = link.querySelector('span');
            if (span) {
                span.textContent = isOpen ? '−' : '+';
            }
        });
    }
});

    // 4. ГАЛЕРЕЯ СКРОЛЛ (Өзгеріссіз қалдырдым, бірақ қатеден сақтану үшін тексеріс қостым)
    const gallerySlider = document.querySelector('.gallery__slider');
    const galleryDots = document.querySelectorAll('.gallery__dot');
    const galleryItems = document.querySelectorAll('.gallery__item');

    if (gallerySlider && galleryDots.length > 0 && galleryItems.length > 0) {
        const updateGalleryDots = () => {
            const scrollLeft = gallerySlider.scrollLeft;
            const itemWidth = galleryItems[0].offsetWidth + 40;
            const activeIndex = Math.round(scrollLeft / itemWidth);
            galleryDots.forEach((dot, index) => {
                dot.classList.toggle('gallery__dot--active', index === activeIndex);
            });
        };

        gallerySlider.addEventListener('scroll', updateGalleryDots);

        // Бастапқы позиция (3-ші суретке фокус жасау)
        if (galleryItems.length >= 3) {
            setTimeout(() => {
                const targetItem = galleryItems[2];
                const scrollOffset = targetItem.offsetLeft - (gallerySlider.clientWidth / 2) + (targetItem.offsetWidth / 2);
                gallerySlider.scrollTo({ left: scrollOffset, behavior: 'smooth' });
                updateGalleryDots();
            }, 300);
        }
    }

    // 5. SERVICES SLIDER
    const servicesTrack = document.querySelector('.services-slider__track');
    const servicesDots = document.querySelectorAll('.dot');
    if (servicesTrack && servicesDots.length > 0) {
        servicesTrack.addEventListener('scroll', () => {
            const cardWidth = servicesTrack.querySelector('.service-card')?.offsetWidth || 414;
            const index = Math.round(servicesTrack.scrollLeft / (cardWidth + 20)); // 20 - gap
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
