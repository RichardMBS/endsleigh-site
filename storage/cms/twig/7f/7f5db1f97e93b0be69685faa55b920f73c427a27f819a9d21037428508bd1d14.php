<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/product-benefit-module.htm */
class __TwigTemplate_ccebe2ef77cae75539c8ac1e26d63543039ed4683dc101042a1e8ff709c2a3c7 extends Twig_Template
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
        <div class=\"col background product-benefits\">
            <div class=\"content-wrapper mt-1 mb-5 mt-md-3 mb-md-3 text-left\">

                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <h2 class=\"mt-5 font-weight-bold mb-3\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["productBenefitH1"] ?? null), "html", null, true);
        echo "</h2>
                        <p class=\"small text-muted mb-4\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["productBenefitH2"] ?? null), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"col-row mt-3\">
                            <div>
                                <img src=\"/storage/app/media/";
        // line 14
        echo twig_escape_filter($this->env, ($context["productSignpost1Icon"] ?? null), "html", null, true);
        echo "\" class=\"img-fluid\">
                            </div>
                            <div class=\"pl-2\">
                                <h5 class=\"font-weight-bold\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["productSignpost1Heading"] ?? null), "html", null, true);
        echo "</h5>
                                <p class=\"text-muted small\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["productSignpost1Copy"] ?? null), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"col-row mt-3\">
                            <div>
                                <img src=\"/storage/app/media/";
        // line 25
        echo twig_escape_filter($this->env, ($context["productSignpost2Icon"] ?? null), "html", null, true);
        echo "\" class=\"img-fluid\">
                            </div>
                            <div class=\"pl-2\">
                                <h5 class=\"font-weight-bold\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["productSignpost2Heading"] ?? null), "html", null, true);
        echo "</h5>
                                <p class=\"text-muted small\">";
        // line 29
        echo twig_escape_filter($this->env, ($context["productSignpost2Copy"] ?? null), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 34
        if ((($context["productSignpost3Heading"] ?? null) != "")) {
            // line 35
            echo "                    <div class=\"col-md-6\">
                        <div class=\"col-row mt-3\">
                            <div>
                                <img src=\"/storage/app/media/";
            // line 38
            echo twig_escape_filter($this->env, ($context["productSignpost3Icon"] ?? null), "html", null, true);
            echo "\" class=\"img-fluid\">
                            </div>
                            <div class=\"pl-2\">
                                <h5 class=\"font-weight-bold\">";
            // line 41
            echo twig_escape_filter($this->env, ($context["productSignpost3Heading"] ?? null), "html", null, true);
            echo "</h5>
                                <p class=\"text-muted small\">";
            // line 42
            echo twig_escape_filter($this->env, ($context["productSignpost3Copy"] ?? null), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 47
        echo "                    
                    ";
        // line 48
        if ((($context["productSignpost4Heading"] ?? null) != "")) {
            // line 49
            echo "                    <div class=\"col-md-6\">
                        <div class=\"col-row mt-3\">
                            <div>
                                <img src=\"/storage/app/media/";
            // line 52
            echo twig_escape_filter($this->env, ($context["productSignpost4Icon"] ?? null), "html", null, true);
            echo "\" class=\"img-fluid\">
                            </div>
                            <div class=\"pl-2\">
                                <h5 class=\"font-weight-bold\">";
            // line 55
            echo twig_escape_filter($this->env, ($context["productSignpost4Heading"] ?? null), "html", null, true);
            echo "</h5>
                                <p class=\"text-muted small\">";
            // line 56
            echo twig_escape_filter($this->env, ($context["productSignpost4Copy"] ?? null), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 61
        echo "                </div>

            </div>

            ";
        // line 65
        if ((($context["productBenefitCta1Text"] ?? null) != "")) {
            // line 66
            echo "            <div class=\"row\" style=\"background: #f5f4f5\">
                <div class=\"my-4 mx-auto text-center\">
                    <div class=\"footer-buttons\">
                        <a class=\"endsleigh-menu-button shadow \" href=\"";
            // line 69
            echo twig_escape_filter($this->env, ($context["productBenefitCta1Link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["productBenefitCta1Text"] ?? null), "html", null, true);
            echo "</a>

                        ";
            // line 71
            if ((($context["productBenefitCta2Text"] ?? null) != "")) {
                // line 72
                echo "                            <a class=\"endsleigh-menu-button btn-transparent\" href=\"";
                echo twig_escape_filter($this->env, ($context["productBenefitCta2Link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["productBenefitCta2Text"] ?? null), "html", null, true);
                echo "</a>
                        ";
            }
            // line 74
            echo "                    </div>
                </div>
            </div>
            ";
        }
        // line 78
        echo "        </div>

    </div>


</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/product-benefit-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 78,  165 => 74,  157 => 72,  155 => 71,  148 => 69,  143 => 66,  141 => 65,  135 => 61,  127 => 56,  123 => 55,  117 => 52,  112 => 49,  110 => 48,  107 => 47,  99 => 42,  95 => 41,  89 => 38,  84 => 35,  82 => 34,  74 => 29,  70 => 28,  64 => 25,  54 => 18,  50 => 17,  44 => 14,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"pb-5\">
    <div class=\"row\">
        <div class=\"col background product-benefits\">
            <div class=\"content-wrapper mt-1 mb-5 mt-md-3 mb-md-3 text-left\">

                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <h2 class=\"mt-5 font-weight-bold mb-3\">{{ productBenefitH1 }}</h2>
                        <p class=\"small text-muted mb-4\">{{ productBenefitH2 }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"col-row mt-3\">
                            <div>
                                <img src=\"/storage/app/media/{{ productSignpost1Icon }}\" class=\"img-fluid\">
                            </div>
                            <div class=\"pl-2\">
                                <h5 class=\"font-weight-bold\">{{ productSignpost1Heading }}</h5>
                                <p class=\"text-muted small\">{{ productSignpost1Copy }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"col-row mt-3\">
                            <div>
                                <img src=\"/storage/app/media/{{ productSignpost2Icon }}\" class=\"img-fluid\">
                            </div>
                            <div class=\"pl-2\">
                                <h5 class=\"font-weight-bold\">{{ productSignpost2Heading }}</h5>
                                <p class=\"text-muted small\">{{ productSignpost2Copy }}</p>
                            </div>
                        </div>
                    </div>
                    
                    {% if productSignpost3Heading != '' %}
                    <div class=\"col-md-6\">
                        <div class=\"col-row mt-3\">
                            <div>
                                <img src=\"/storage/app/media/{{ productSignpost3Icon }}\" class=\"img-fluid\">
                            </div>
                            <div class=\"pl-2\">
                                <h5 class=\"font-weight-bold\">{{ productSignpost3Heading }}</h5>
                                <p class=\"text-muted small\">{{ productSignpost3Copy }}</p>
                            </div>
                        </div>
                    </div>
                    {% endif %}
                    
                    {% if productSignpost4Heading != '' %}
                    <div class=\"col-md-6\">
                        <div class=\"col-row mt-3\">
                            <div>
                                <img src=\"/storage/app/media/{{ productSignpost4Icon }}\" class=\"img-fluid\">
                            </div>
                            <div class=\"pl-2\">
                                <h5 class=\"font-weight-bold\">{{ productSignpost4Heading }}</h5>
                                <p class=\"text-muted small\">{{ productSignpost4Copy }}</p>
                            </div>
                        </div>
                    </div>
                    {% endif %}
                </div>

            </div>

            {% if productBenefitCta1Text != '' %}
            <div class=\"row\" style=\"background: #f5f4f5\">
                <div class=\"my-4 mx-auto text-center\">
                    <div class=\"footer-buttons\">
                        <a class=\"endsleigh-menu-button shadow \" href=\"{{ productBenefitCta1Link }}\">{{ productBenefitCta1Text }}</a>

                        {% if productBenefitCta2Text != '' %}
                            <a class=\"endsleigh-menu-button btn-transparent\" href=\"{{ productBenefitCta2Link }}\">{{ productBenefitCta2Text }}</a>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% endif %}
        </div>

    </div>


</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/product-benefit-module.htm", "");
    }
}
