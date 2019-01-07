<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/carousel-generic.htm */
class __TwigTemplate_ea48c749c66b141e58f97bacbdfee3dd8e5e560aa873fffaca443a73631a2a86 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"header\" id=\"30\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"swiper-overlay-container\">
                    <div class=\"overlay\">
                        <div class=\"content-wrapper mt-5\">
                            <div class=\"col col-lg-6 px-0 swiper-slide-content_0 slider-content-container\">
                                <h1>";
        // line 9
        echo twig_escape_filter($this->env, ($context["h1Carousel1"] ?? null), "html", null, true);
        echo "</h1>
                                <h2>";
        // line 10
        echo twig_escape_filter($this->env, ($context["h2Carousel1"] ?? null), "html", null, true);
        echo "</h2>
                                <p>";
        // line 11
        echo twig_escape_filter($this->env, ($context["h3Carousel1"] ?? null), "html", null, true);
        echo "</p>

                                <div class=\"row\">
                                    <div class=\"col-12 col-md-6\">
                                        <div class=\"mt-3 text-white\">
                                            <strong>Call us now</strong><br>
                                            0333 234 555
                                        </div>
                                    </div>
                                    <div class=\"col-12 col-md-6\">
                                        <div class=\"mt-3\">
                                            <a class=\"endsleigh-menu-button shadow\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["callUsNowCTA1"] ?? null), "html", null, true);
        echo "\" style=\"width: 100%;\">Arrange a call back</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"col col-lg-6 px-0 swiper-slide-content_1 slider-content-container\">
                                <h1>";
        // line 29
        echo twig_escape_filter($this->env, ($context["h1Carousel2"] ?? null), "html", null, true);
        echo "</h1>
                                <h2>";
        // line 30
        echo twig_escape_filter($this->env, ($context["h2Carousel2"] ?? null), "html", null, true);
        echo "</h2>
                                <p>";
        // line 31
        echo twig_escape_filter($this->env, ($context["h3carousel2"] ?? null), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col col-lg-6 px-0 swiper-slide-content_2 slider-content-container\">
                                <h1>More Slider Content</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, minima, nulla! A aperiam architecto beatae dolore eveniet.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide-sizer swiper-with-controllers\">
                        <div class=\"swiper-container\">
                            <div class=\"swiper-wrapper\">
                                <div class=\"swiper-slide\"><img src=\"/storage/app/media/";
        // line 42
        echo twig_escape_filter($this->env, ($context["imagePathCarousel1"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["imageAltText1"] ?? null), "html", null, true);
        echo "\" width=\"100%\"></div>
                                <div class=\"swiper-slide\"><img src=\"/storage/app/media/";
        // line 43
        echo twig_escape_filter($this->env, ($context["imagePathCarousel2"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["imageAltText2"] ?? null), "html", null, true);
        echo "\" width=\"100%\"></div>
                                <div class=\"swiper-slide\"><img src=\"/storage/app/media/";
        // line 44
        echo twig_escape_filter($this->env, ($context["imagePathCarousel3"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["imageAltText3"] ?? null), "html", null, true);
        echo "\" width=\"100%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-controlls-container\">
                    <div class=\"swiper-button-prev swiper-button-basic\"><img alt=\"\" src=\"/storage/app/media/svg/endsleigh/sections/arrow_left.svg\"></div>
                    <div class=\"swiper-pagination\"></div>
                    <div class=\"swiper-button-next swiper-button-basic\"><img alt=\"\" src=\"/storage/app/media/svg/endsleigh/sections/arrow.svg\"></div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/carousel-generic.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  93 => 43,  87 => 42,  73 => 31,  69 => 30,  65 => 29,  55 => 22,  41 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"header\" id=\"30\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"swiper-overlay-container\">
                    <div class=\"overlay\">
                        <div class=\"content-wrapper mt-5\">
                            <div class=\"col col-lg-6 px-0 swiper-slide-content_0 slider-content-container\">
                                <h1>{{ h1Carousel1 }}</h1>
                                <h2>{{ h2Carousel1 }}</h2>
                                <p>{{ h3Carousel1 }}</p>

                                <div class=\"row\">
                                    <div class=\"col-12 col-md-6\">
                                        <div class=\"mt-3 text-white\">
                                            <strong>Call us now</strong><br>
                                            0333 234 555
                                        </div>
                                    </div>
                                    <div class=\"col-12 col-md-6\">
                                        <div class=\"mt-3\">
                                            <a class=\"endsleigh-menu-button shadow\" href=\"{{ callUsNowCTA1 }}\" style=\"width: 100%;\">Arrange a call back</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"col col-lg-6 px-0 swiper-slide-content_1 slider-content-container\">
                                <h1>{{ h1Carousel2 }}</h1>
                                <h2>{{ h2Carousel2 }}</h2>
                                <p>{{ h3carousel2 }}</p>
                            </div>
                            <div class=\"col col-lg-6 px-0 swiper-slide-content_2 slider-content-container\">
                                <h1>More Slider Content</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, minima, nulla! A aperiam architecto beatae dolore eveniet.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide-sizer swiper-with-controllers\">
                        <div class=\"swiper-container\">
                            <div class=\"swiper-wrapper\">
                                <div class=\"swiper-slide\"><img src=\"/storage/app/media/{{ imagePathCarousel1 }}\" alt=\"{{ imageAltText1 }}\" width=\"100%\"></div>
                                <div class=\"swiper-slide\"><img src=\"/storage/app/media/{{ imagePathCarousel2 }}\" alt=\"{{ imageAltText2 }}\" width=\"100%\"></div>
                                <div class=\"swiper-slide\"><img src=\"/storage/app/media/{{ imagePathCarousel3 }}\" alt=\"{{ imageAltText3 }}\" width=\"100%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-controlls-container\">
                    <div class=\"swiper-button-prev swiper-button-basic\"><img alt=\"\" src=\"/storage/app/media/svg/endsleigh/sections/arrow_left.svg\"></div>
                    <div class=\"swiper-pagination\"></div>
                    <div class=\"swiper-button-next swiper-button-basic\"><img alt=\"\" src=\"/storage/app/media/svg/endsleigh/sections/arrow.svg\"></div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/carousel-generic.htm", "");
    }
}
