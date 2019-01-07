<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/carousel-contact-us.htm */
class __TwigTemplate_d807612e812ad4299173fabb66efe6b6811fb03841c756f14311a3aef02dda07 extends Twig_Template
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
        echo "<section class=\"header header-with-boxes\">
    <div class=\"container\">
        <div class=\"contact-info-header shadow\">
            <div class=\"info-box-container\">

                <h5><img src=\"storage/app/media/svg/landingpages/call.svg\">Contact Us</h5>
                <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, at doloremque harum molestiae officiis .</p>
                <div class=\"call-small\">
                    <div style=\"flex:1\"><img src=\"/storage/app/media/svg/landingpages/call.svg\" alt=\"\"></div>
                    <div class=\"call-container\">
                        <span>Or call us now</span>
                        <span>0333 234 1556</span>
                    </div>
                </div>
            </div>

            <div class=\"info-box-container\">
                <h5><img src=\"/storage/app/media/svg/landingpages/call.svg\"> Arrange a callback</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, at doloremque harum molestiae officiis.</p>
                <a class=\"green-button-small\" href=\"#\">Find out more</a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"swiper-overlay-container\">
                    <div class=\"overlay\">
                        <div class=\"content-wrapper\">
                            <div class=\"col col-md-6 px-0\">
                                <h1>";
        // line 29
        echo twig_escape_filter($this->env, ($context["H1CarouselContactUs"] ?? null), "html", null, true);
        echo "</h1>
                                <p>";
        // line 30
        echo twig_escape_filter($this->env, ($context["H2CarouselContactUs"] ?? null), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide-sizer\">
                        <div class=\"swiper-container\">
                            <div class=\"swiper-wrapper\">

                                <div class=\"swiper-slide\"><img alt=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["ImageAltText"] ?? null), "html", null, true);
        echo "\" src=\"/storage/app/media/";
        echo twig_escape_filter($this->env, ($context["Image"] ?? null), "html", null, true);
        echo "\" width=\"100%\" class=\"img-fluid\" style=\"max-height: 568px;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style=\"background:#f1f1f1; min-height:120px; z-index:99999999; padding-bottom:30px;\"></div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/carousel-contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 38,  57 => 30,  53 => 29,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"header header-with-boxes\">
    <div class=\"container\">
        <div class=\"contact-info-header shadow\">
            <div class=\"info-box-container\">

                <h5><img src=\"storage/app/media/svg/landingpages/call.svg\">Contact Us</h5>
                <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, at doloremque harum molestiae officiis .</p>
                <div class=\"call-small\">
                    <div style=\"flex:1\"><img src=\"/storage/app/media/svg/landingpages/call.svg\" alt=\"\"></div>
                    <div class=\"call-container\">
                        <span>Or call us now</span>
                        <span>0333 234 1556</span>
                    </div>
                </div>
            </div>

            <div class=\"info-box-container\">
                <h5><img src=\"/storage/app/media/svg/landingpages/call.svg\"> Arrange a callback</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, at doloremque harum molestiae officiis.</p>
                <a class=\"green-button-small\" href=\"#\">Find out more</a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"swiper-overlay-container\">
                    <div class=\"overlay\">
                        <div class=\"content-wrapper\">
                            <div class=\"col col-md-6 px-0\">
                                <h1>{{ H1CarouselContactUs }}</h1>
                                <p>{{ H2CarouselContactUs }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide-sizer\">
                        <div class=\"swiper-container\">
                            <div class=\"swiper-wrapper\">

                                <div class=\"swiper-slide\"><img alt=\"{{ ImageAltText }}\" src=\"/storage/app/media/{{ Image }}\" width=\"100%\" class=\"img-fluid\" style=\"max-height: 568px;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style=\"background:#f1f1f1; min-height:120px; z-index:99999999; padding-bottom:30px;\"></div>
    </div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/carousel-contact-us.htm", "");
    }
}
