<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reevoo-hero-module.htm */
class __TwigTemplate_4fe7ef65e5d7bbe6765e2a94309657d02c75cd26e2b94a0541e90de676cb7ecb extends Twig_Template
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
        echo "<section class=\"rating\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"background\">
                    <div class=\"content-wrapper\">
                        <h3>";
        // line 7
        echo twig_escape_filter($this->env, ($context["productHeroH2"] ?? null), "html", null, true);
        echo "</h3>
                        <h2>";
        // line 8
        echo twig_escape_filter($this->env, ($context["productHeroH1"] ?? null), "html", null, true);
        echo "</h2>
                        <p>";
        // line 9
        echo twig_escape_filter($this->env, ($context["productHeroH3"] ?? null), "html", null, true);
        echo "</p>
                        <div class=\"shadow-container\">
                            <div class=\"row\">
                                <div class=\"col-md-6 \">
                                    <!-- Swiper -->
                                    <div class=\"swiper-container\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\"><img src=\"/storage/app/media/student-education/_home-rating-one.jpg\"
                                                    width=\"100%\"></div>
                                            <div class=\"swiper-slide\"><img src=\"/storage/app/media/student-education/_home-rating-one.jpg\"
                                                    width=\"100%\"></div>
                                            <div class=\"swiper-slide\"><img src=\"/storage/app/media/student-education/_home-rating-one.jpg\"
                                                    width=\"100%\"></div>
                                        </div>
                                    </div>
                                    <!-- Swiper -->
                                </div>
                                <div class=\"col-md-6 \">

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <a href=\"#\" class=\"btn-eis secondary arrow\">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reevoo-hero-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"rating\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"background\">
                    <div class=\"content-wrapper\">
                        <h3>{{ productHeroH2 }}</h3>
                        <h2>{{ productHeroH1 }}</h2>
                        <p>{{ productHeroH3 }}</p>
                        <div class=\"shadow-container\">
                            <div class=\"row\">
                                <div class=\"col-md-6 \">
                                    <!-- Swiper -->
                                    <div class=\"swiper-container\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\"><img src=\"/storage/app/media/student-education/_home-rating-one.jpg\"
                                                    width=\"100%\"></div>
                                            <div class=\"swiper-slide\"><img src=\"/storage/app/media/student-education/_home-rating-one.jpg\"
                                                    width=\"100%\"></div>
                                            <div class=\"swiper-slide\"><img src=\"/storage/app/media/student-education/_home-rating-one.jpg\"
                                                    width=\"100%\"></div>
                                        </div>
                                    </div>
                                    <!-- Swiper -->
                                </div>
                                <div class=\"col-md-6 \">

                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <a href=\"#\" class=\"btn-eis secondary arrow\">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reevoo-hero-module.htm", "");
    }
}
