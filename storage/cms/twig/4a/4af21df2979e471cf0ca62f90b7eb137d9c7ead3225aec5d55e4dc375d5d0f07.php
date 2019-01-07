<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/endsleigh-nudge.htm */
class __TwigTemplate_c77d6f35bbbc068faa27aa380c59d05d551c31fd6ce04b7f0e9033538eab5f14 extends Twig_Template
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
        echo "<section class=\"nudge\" id=\"1\">
\t<div class=\"container\">
\t\t<div class=\"row background\">
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\" style=\"color: rgb(255, 255, 255);\">
\t\t\t\t\t\t<div class=\"box rounded my-3 py-1 px-2\">
\t\t\t\t\t\t\t<div><img alt=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["nudge1ImageText"] ?? null), "html", null, true);
        echo "\" src=\"/storage/app/media/";
        echo twig_escape_filter($this->env, ($context["nudge1Image"] ?? null), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, ($context["nudge1ImageText"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    ";
        // line 15
        if ((($context["nudge2ImageText"] ?? null) != "")) {
            echo "}
                    <div class=\"col-md-5\" style=\"color: rgb(255, 255, 255);\">
                        <div class=\"box rounded my-3 py-1 px-2\">
                            <div><img alt=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["nudge2ImageText"] ?? null), "html", null, true);
            echo "\" src=\"/storage/app/media/";
            echo twig_escape_filter($this->env, ($context["nudge2Image"] ?? null), "html", null, true);
            echo "\"></div>
                            <div>
                                ";
            // line 20
            echo twig_escape_filter($this->env, ($context["nudge2ImageText"] ?? null), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 24
        echo "}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/endsleigh-nudge.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  60 => 20,  53 => 18,  47 => 15,  39 => 10,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"nudge\" id=\"1\">
\t<div class=\"container\">
\t\t<div class=\"row background\">
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\" style=\"color: rgb(255, 255, 255);\">
\t\t\t\t\t\t<div class=\"box rounded my-3 py-1 px-2\">
\t\t\t\t\t\t\t<div><img alt=\"{{ nudge1ImageText }}\" src=\"/storage/app/media/{{ nudge1Image }}\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{ nudge1ImageText }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    {% if nudge2ImageText != '' %}}
                    <div class=\"col-md-5\" style=\"color: rgb(255, 255, 255);\">
                        <div class=\"box rounded my-3 py-1 px-2\">
                            <div><img alt=\"{{ nudge2ImageText }}\" src=\"/storage/app/media/{{ nudge2Image }}\"></div>
                            <div>
                                {{ nudge2ImageText }}
                            </div>
                        </div>
                    </div>
                    {% endif %}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/endsleigh-nudge.htm", "");
    }
}
