<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/what-we-cover-module.htm */
class __TwigTemplate_5f9d62cafa295005a2128e6f677f04d988548bffe55014c1b2e431214cde2683 extends Twig_Template
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
        echo "<section class=\"pb-5\">
    <div class=\"row\">
        <div class=\"col background product-benefits what-we-cover\">
            <div class=\"content-wrapper mt-1 mb-5 mt-md-3 mb-md-3 text-left\">

                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <h2>";
        // line 8
        echo twig_escape_filter($this->env, ($context["whatWeCoverH1"] ?? null), "html", null, true);
        echo "</h2>
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-12\">
                        <p class=\"text-muted\">
                           ";
        // line 14
        echo twig_escape_filter($this->env, ($context["whatWeCoverCopy"] ?? null), "html", null, true);
        echo "
                        </p>

                        <h6 class=\"font-weight-bold mt-3 mb-4\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["whatWeCoverH2"] ?? null), "html", null, true);
        echo "</h6>
                    </div>

                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/";
        // line 23
        echo twig_escape_filter($this->env, ($context["whatWeCoverIcon1"] ?? null), "html", null, true);
        echo "\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>";
        // line 26
        echo twig_escape_filter($this->env, ($context["whatWeCoverHeading1"] ?? null), "html", null, true);
        echo "</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/";
        // line 33
        echo twig_escape_filter($this->env, ($context["whatWeCoverIcon2"] ?? null), "html", null, true);
        echo "\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>";
        // line 36
        echo twig_escape_filter($this->env, ($context["whatWeCoverHeading2"] ?? null), "html", null, true);
        echo "</h6>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 41
        if ((($context["whatWeCoverHeading3"] ?? null) != "")) {
            // line 42
            echo "                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/";
            // line 45
            echo twig_escape_filter($this->env, ($context["whatWeCoverIcon3"] ?? null), "html", null, true);
            echo "\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>";
            // line 48
            echo twig_escape_filter($this->env, ($context["whatWeCoverHeading3"] ?? null), "html", null, true);
            echo "</h6>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 53
        echo "                        
                        ";
        // line 54
        if ((($context["whatWeCoverHeading4"] ?? null) != "")) {
            // line 55
            echo "                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/";
            // line 58
            echo twig_escape_filter($this->env, ($context["whatWeCoverIcon4"] ?? null), "html", null, true);
            echo "\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>";
            // line 61
            echo twig_escape_filter($this->env, ($context["whatWeCoverHeading4"] ?? null), "html", null, true);
            echo "</h6>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 66
        echo "                        
                        ";
        // line 67
        if ((($context["whatWeCoverHeading5"] ?? null) != "")) {
            // line 68
            echo "                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/";
            // line 71
            echo twig_escape_filter($this->env, ($context["whatWeCoverIcon5"] ?? null), "html", null, true);
            echo "\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>";
            // line 74
            echo twig_escape_filter($this->env, ($context["whatWeCoverHeading5"] ?? null), "html", null, true);
            echo "</h6>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 79
        echo "                        
                        ";
        // line 80
        if ((($context["whatWeCoverHeading6"] ?? null) != "")) {
            // line 81
            echo "                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/";
            // line 84
            echo twig_escape_filter($this->env, ($context["whatWeCoverIcon6"] ?? null), "html", null, true);
            echo "\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>";
            // line 87
            echo twig_escape_filter($this->env, ($context["whatWeCoverHeading6"] ?? null), "html", null, true);
            echo "</h6>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 92
        echo "                        
                    </div>

                </div>


            </div>

        </div>


</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/what-we-cover-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 92,  171 => 87,  165 => 84,  160 => 81,  158 => 80,  155 => 79,  147 => 74,  141 => 71,  136 => 68,  134 => 67,  131 => 66,  123 => 61,  117 => 58,  112 => 55,  110 => 54,  107 => 53,  99 => 48,  93 => 45,  88 => 42,  86 => 41,  78 => 36,  72 => 33,  62 => 26,  56 => 23,  47 => 17,  41 => 14,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"pb-5\">
    <div class=\"row\">
        <div class=\"col background product-benefits what-we-cover\">
            <div class=\"content-wrapper mt-1 mb-5 mt-md-3 mb-md-3 text-left\">

                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <h2>{{ whatWeCoverH1 }}</h2>
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-12\">
                        <p class=\"text-muted\">
                           {{ whatWeCoverCopy }}
                        </p>

                        <h6 class=\"font-weight-bold mt-3 mb-4\">{{ whatWeCoverH2 }}</h6>
                    </div>

                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/{{ whatWeCoverIcon1 }}\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>{{ whatWeCoverHeading1 }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/{{ whatWeCoverIcon2 }}\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>{{ whatWeCoverHeading2 }}</h6>
                                </div>
                            </div>
                        </div>
                        
                        {% if whatWeCoverHeading3 != '' %}
                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/{{ whatWeCoverIcon3 }}\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>{{ whatWeCoverHeading3 }}</h6>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                        
                        {% if whatWeCoverHeading4 != '' %}
                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/{{ whatWeCoverIcon4 }}\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>{{ whatWeCoverHeading4 }}</h6>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                        
                        {% if whatWeCoverHeading5 != '' %}
                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/{{ whatWeCoverIcon5 }}\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>{{ whatWeCoverHeading5 }}</h6>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                        
                        {% if whatWeCoverHeading6 != '' %}
                        <div class=\"col-md-6 \">
                            <div class=\"col-row grey-bg\">
                                <div>
                                    <img src=\"/storage/app/media/{{ whatWeCoverIcon6 }}\" class=\"img-fluid\">
                                </div>
                                <div>
                                    <h6>{{ whatWeCoverHeading6 }}</h6>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                        
                    </div>

                </div>


            </div>

        </div>


</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/what-we-cover-module.htm", "");
    }
}
