<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/accordion-module.htm */
class __TwigTemplate_799adbc4792037a2eb73ac7b2c2460917ecdbf08968c7e9a0d3220e5d8e8ee55 extends Twig_Template
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
        echo "<section class=\"what-make-endsleigh-no-1\" id=\"34\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0 background\">
\t\t\t\t<div class=\"content-wrapper my-5\">
\t\t\t\t\t<div class=\"row mt-5 toggles bg-white\">
\t\t\t\t\t\t<div class=\"shadow p-4 text-left\">
\t\t\t\t\t\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, ($context["accordianH1"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<p>";
        // line 9
        echo twig_escape_filter($this->env, ($context["accordianCopy"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, ($context["accordian1Title"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 17
        if ((($context["accordian2Title"] ?? null) != "")) {
            // line 18
            echo "\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, ($context["accordian2Title"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 26
        if ((($context["accordian3Title"] ?? null) != "")) {
            // line 27
            echo "\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, ($context["accordian3Title"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 35
        if ((($context["accordian4Title"] ?? null) != "")) {
            // line 36
            echo "\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, ($context["accordian4Title"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 44
        if ((($context["accordian5Title"] ?? null) != "")) {
            // line 45
            echo "\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, ($context["accordian5Title"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/accordion-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  107 => 47,  103 => 45,  101 => 44,  98 => 43,  90 => 38,  86 => 36,  84 => 35,  81 => 34,  73 => 29,  69 => 27,  67 => 26,  64 => 25,  56 => 20,  52 => 18,  50 => 17,  42 => 12,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"what-make-endsleigh-no-1\" id=\"34\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0 background\">
\t\t\t\t<div class=\"content-wrapper my-5\">
\t\t\t\t\t<div class=\"row mt-5 toggles bg-white\">
\t\t\t\t\t\t<div class=\"shadow p-4 text-left\">
\t\t\t\t\t\t\t<h2>{{ accordianH1 }}</h2>
\t\t\t\t\t\t\t<p>{{ accordianCopy }}</p>
\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t{{ accordian1Title }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if accordian2Title != ''  %}
\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t{{ accordian2Title }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if accordian3Title != ''  %}
\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t{{ accordian3Title }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if accordian4Title != ''  %}
\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t{{ accordian4Title }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if accordian5Title != ''  %}
\t\t\t\t\t\t\t<div class=\"panel p-3\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t{{ accordian5Title }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div><img alt=\"open\" src=\"storage/app/media/svg/endsleigh/sections/plus_icon.svg\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/accordion-module.htm", "");
    }
}
