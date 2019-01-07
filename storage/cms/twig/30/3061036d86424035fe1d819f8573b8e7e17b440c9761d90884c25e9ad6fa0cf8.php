<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/start-a-quote-header.htm */
class __TwigTemplate_546f7bbfa6957055eae77bf3023d53bf4122d739f834227bf1e07f57f7b428b1 extends Twig_Template
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
        echo "<section class=\"header\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"swiper-overlay-container\">
\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t\t<div class=\"col col-md-6 px-0\">
\t\t\t\t\t\t\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, ($context["h1StartAQuote"] ?? null), "html", null, true);
        echo "</h1>
                                <div class=\"card text-center home-card\">
                                    <div class=\"card-header\">
                                        <ul class=\"nav nav-tabs nav-fill card-header-tabs scroll-hoz\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\">Car</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#gadget\">Gadget</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"#\">Home</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"#\">Travel</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"#\">Landlord</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane container active\" id=\"home\">
                                            <div class=\"card-body\">
                                                <div class=\"wraper\">
                                                    <div class=\"col col-md-12 mb-3  text-center\">
                                                        <h5 class=\"card-title\">Start a quote</h5>
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <span class=\"card-field-layout\"><span class=\"card-sub-label\">Enter car registration</span> <input autocomplete=\"off\" id=\"\" name=\"\" placeholder=\"Start typing...\" type=\"text\"></span>
                                                    </div>
                                                    <div class=\"col-md-12 mt-3 text-center\">
                                                        <a href=\"#\" class=\"btn-eis arrow\">Get quote</a>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class=\"card-footer text-muted\">
                                            <div style=\"display: flex\">
                                                <div style=\"flex:1\"><a href=\"#\">Retrieve a quote</a></div>
                                                <div style=\"flex:1\"><a href=\"#\">Renew policy</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"swiper-slide-sizer\">
\t\t\t\t\t\t<img src=\"/storage/app/media/";
        // line 64
        echo twig_escape_filter($this->env, ($context["imagePath"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["imageAltText"] ?? null), "html", null, true);
        echo "\" width=\"100%\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/start-a-quote-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 64,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"header\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"swiper-overlay-container\">
\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t\t<div class=\"col col-md-6 px-0\">
\t\t\t\t\t\t\t\t<h1>{{ h1StartAQuote }}</h1>
                                <div class=\"card text-center home-card\">
                                    <div class=\"card-header\">
                                        <ul class=\"nav nav-tabs nav-fill card-header-tabs scroll-hoz\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\">Car</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#gadget\">Gadget</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"#\">Home</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"#\">Travel</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"#\">Landlord</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane container active\" id=\"home\">
                                            <div class=\"card-body\">
                                                <div class=\"wraper\">
                                                    <div class=\"col col-md-12 mb-3  text-center\">
                                                        <h5 class=\"card-title\">Start a quote</h5>
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <span class=\"card-field-layout\"><span class=\"card-sub-label\">Enter car registration</span> <input autocomplete=\"off\" id=\"\" name=\"\" placeholder=\"Start typing...\" type=\"text\"></span>
                                                    </div>
                                                    <div class=\"col-md-12 mt-3 text-center\">
                                                        <a href=\"#\" class=\"btn-eis arrow\">Get quote</a>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class=\"card-footer text-muted\">
                                            <div style=\"display: flex\">
                                                <div style=\"flex:1\"><a href=\"#\">Retrieve a quote</a></div>
                                                <div style=\"flex:1\"><a href=\"#\">Renew policy</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"swiper-slide-sizer\">
\t\t\t\t\t\t<img src=\"/storage/app/media/{{ imagePath }}\" alt=\"{{ imageAltText }}\" width=\"100%\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/start-a-quote-header.htm", "");
    }
}
