<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reevoo-why-choose-module.htm */
class __TwigTemplate_080cd1039a281116edb324dd3ada54ac1ec9ca51113d3753dff5d6866e26ae3e extends Twig_Template
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
        echo "<section class=\"reevo-why-choose\" id=\"5\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"background\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
                            <div class=\"col-md-8\">
                                <div class=\"card shadow\">
                                    <div class=\"card-body\">
                                        <h2 class=\"text-dark text-left\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["whyChooseH1"] ?? null), "html", null, true);
        echo "</h2>
                                        <div class=\"checklist-box\">
                                            <ul class=\"mt-4 text-left\">
                                                <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["whyChooseReason1"] ?? null), "html", null, true);
        echo "</li>
                                                
                                                ";
        // line 16
        if ((($context["whyChooseReason2"] ?? null) != "")) {
            // line 17
            echo "                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">";
            echo twig_escape_filter($this->env, ($context["whyChooseReason2"] ?? null), "html", null, true);
            echo "</li>
                                                ";
        }
        // line 19
        echo "                                                
                                                ";
        // line 20
        if ((($context["whyChooseReason2"] ?? null) != "")) {
            // line 21
            echo "                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">";
            echo twig_escape_filter($this->env, ($context["whyChooseReason2"] ?? null), "html", null, true);
            echo "</li>
                                                ";
        }
        // line 23
        echo "                                                
                                                ";
        // line 24
        if ((($context["whyChooseReason3"] ?? null) != "")) {
            // line 25
            echo "                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">";
            echo twig_escape_filter($this->env, ($context["whyChooseReason3"] ?? null), "html", null, true);
            echo "</li>
                                                ";
        }
        // line 27
        echo "                                                
                                                ";
        // line 28
        if ((($context["whyChooseReason4"] ?? null) != "")) {
            // line 29
            echo "                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">";
            echo twig_escape_filter($this->env, ($context["whyChooseReason4"] ?? null), "html", null, true);
            echo "</li>
                                                ";
        }
        // line 31
        echo "                                                
                                                ";
        // line 32
        if ((($context["whyChooseReason5"] ?? null) != "")) {
            // line 33
            echo "                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">";
            echo twig_escape_filter($this->env, ($context["whyChooseReason5"] ?? null), "html", null, true);
            echo "</li>
                                                ";
        }
        // line 35
        echo "                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"card shadow\">
                                    <div class=\"center-block\">
                                        <img src=\"/storage/app/media/student-education/_home-rating-one.jpg\" class=\"pt-4 mb-5 img-fluid\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reevoo-why-choose-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  92 => 33,  90 => 32,  87 => 31,  81 => 29,  79 => 28,  76 => 27,  70 => 25,  68 => 24,  65 => 23,  59 => 21,  57 => 20,  54 => 19,  48 => 17,  46 => 16,  41 => 14,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"reevo-why-choose\" id=\"5\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"background\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
                            <div class=\"col-md-8\">
                                <div class=\"card shadow\">
                                    <div class=\"card-body\">
                                        <h2 class=\"text-dark text-left\">{{ whyChooseH1 }}</h2>
                                        <div class=\"checklist-box\">
                                            <ul class=\"mt-4 text-left\">
                                                <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">{{ whyChooseReason1 }}</li>
                                                
                                                {% if whyChooseReason2 != '' %}
                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">{{ whyChooseReason2 }}</li>
                                                {% endif %}
                                                
                                                {% if whyChooseReason2 != '' %}
                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">{{ whyChooseReason2 }}</li>
                                                {% endif %}
                                                
                                                {% if whyChooseReason3 != '' %}
                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">{{ whyChooseReason3 }}</li>
                                                {% endif %}
                                                
                                                {% if whyChooseReason4 != '' %}
                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">{{ whyChooseReason4 }}</li>
                                                {% endif %}
                                                
                                                {% if whyChooseReason5 != '' %}
                                                    <li><img alt=\"tick\" src=\"storage/app/media/svg/landingpages/tick.svg\">{{ whyChooseReason5 }}</li>
                                                {% endif %}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"card shadow\">
                                    <div class=\"center-block\">
                                        <img src=\"/storage/app/media/student-education/_home-rating-one.jpg\" class=\"pt-4 mb-5 img-fluid\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reevoo-why-choose-module.htm", "");
    }
}
