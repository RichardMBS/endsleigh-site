<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/ guides-module.htm */
class __TwigTemplate_1db753aeea3f5835729fe9b192e202c902d99949a9740d8fbd71a0fa128fb18d extends Twig_Template
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
        echo "<section class=\"category\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"background\">
                    <div class=\"content-wrapper\">
                        <div class=\"shadow-container\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"main-content\">
                                        <h3>";
        // line 11
        echo twig_escape_filter($this->env, ($context["productHeroH2"] ?? null), "html", null, true);
        echo "</h3>
                                        <h2>";
        // line 12
        echo twig_escape_filter($this->env, ($context["productHeroH1"] ?? null), "html", null, true);
        echo "</h2>
                                        <p>";
        // line 13
        echo twig_escape_filter($this->env, ($context["productHeroH3"] ?? null), "html", null, true);
        echo "</p>
                                        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["productHeroCtaLink"] ?? null), "html", null, true);
        echo "\" class=\"btn-eis secondary arrow\">";
        echo twig_escape_filter($this->env, ($context["productHeroCta"] ?? null), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4 px-0\">
                                    <ul class=\"list-group list-group-flush text-left\">
                                        <li class=\"list-group-item\">
                                            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["guidesLink1"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["guidesLink1Text"] ?? null), "html", null, true);
        echo "</a>
                                        </li>

                                        <li class=\"list-group-item\">
                                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["guidesLink3"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["guidesLink2Text"] ?? null), "html", null, true);
        echo "</a>
                                        </li>

                                        ";
        // line 27
        if ((($context["guidesLink3"] ?? null) != "")) {
            // line 28
            echo "                                        <li class=\"list-group-item\">
                                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["guidesLink3"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["guidesLink3Text"] ?? null), "html", null, true);
            echo "</a>
                                        </li>
                                        ";
        }
        // line 32
        echo "
                                        ";
        // line 33
        if ((($context["guidesLink4"] ?? null) != "")) {
            // line 34
            echo "                                        <li class=\"list-group-item\">
                                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["guidesLink4"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["guidesLink4Text"] ?? null), "html", null, true);
            echo "</a>
                                        </li>
                                        ";
        }
        // line 38
        echo "
                                        ";
        // line 39
        if ((($context["guidesLink5"] ?? null) != "")) {
            // line 40
            echo "                                        <li class=\"list-group-item\">
                                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["guidesLink5"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["guidesLink5Text"] ?? null), "html", null, true);
            echo "</a>
                                        </li>
                                        ";
        }
        // line 44
        echo "                                    </ul>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 px-0\" >
                                    <div class=\"strap\">&nbsp;</div>
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
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/ guides-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  112 => 41,  109 => 40,  107 => 39,  104 => 38,  96 => 35,  93 => 34,  91 => 33,  88 => 32,  80 => 29,  77 => 28,  75 => 27,  67 => 24,  58 => 20,  47 => 14,  43 => 13,  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"category\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"background\">
                    <div class=\"content-wrapper\">
                        <div class=\"shadow-container\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"main-content\">
                                        <h3>{{ productHeroH2 }}</h3>
                                        <h2>{{ productHeroH1 }}</h2>
                                        <p>{{ productHeroH3 }}</p>
                                        <a href=\"{{ productHeroCtaLink }}\" class=\"btn-eis secondary arrow\">{{ productHeroCta }}</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4 px-0\">
                                    <ul class=\"list-group list-group-flush text-left\">
                                        <li class=\"list-group-item\">
                                            <a href=\"{{ guidesLink1 }}\">{{ guidesLink1Text }}</a>
                                        </li>

                                        <li class=\"list-group-item\">
                                            <a href=\"{{ guidesLink3 }}\">{{ guidesLink2Text }}</a>
                                        </li>

                                        {% if guidesLink3 !=''  %}
                                        <li class=\"list-group-item\">
                                            <a href=\"{{ guidesLink3 }}\">{{ guidesLink3Text }}</a>
                                        </li>
                                        {% endif %}

                                        {% if guidesLink4 !=''  %}
                                        <li class=\"list-group-item\">
                                            <a href=\"{{ guidesLink4 }}\">{{ guidesLink4Text }}</a>
                                        </li>
                                        {% endif %}

                                        {% if guidesLink5 !=''  %}
                                        <li class=\"list-group-item\">
                                            <a href=\"{{ guidesLink5 }}\">{{ guidesLink5Text }}</a>
                                        </li>
                                        {% endif %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 px-0\" >
                                    <div class=\"strap\">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/ guides-module.htm", "");
    }
}
