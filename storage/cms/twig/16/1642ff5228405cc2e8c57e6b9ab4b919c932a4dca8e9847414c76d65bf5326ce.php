<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/contact-us-module.htm */
class __TwigTemplate_34fc490d0cbfdc101a579dd5ede72c8b1052bacddbba9454095c8c0fd85bd2e3 extends Twig_Template
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
        if ((($context["contactSignpost1Copy"] ?? null) != "")) {
            // line 2
            echo "<section class=\"contact-boxes\">
    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col pb-5 background\">
        <div class=\"content-wrapper mt-1   mt-md-3 mb-md-3 \">

            <h2 class=\"mt-5\">";
            // line 8
            echo twig_escape_filter($this->env, ($context["contactUsH1"] ?? null), "html", null, true);
            echo "</h2>
            <p class=\"mt-4 mb-0 small\">";
            // line 9
            echo twig_escape_filter($this->env, ($context["contactUsCopy1"] ?? null), "html", null, true);
            echo "</p>
            <p class=\"mb-0 small\">";
            // line 10
            echo twig_escape_filter($this->env, ($context["contactUsCopy2"] ?? null), "html", null, true);
            echo "</p>
            <p class=\"small\"><strong>Call us on </strong>";
            // line 11
            echo twig_escape_filter($this->env, ($context["contactUsCopy3"] ?? null), "html", null, true);
            echo "</p>
        </div>

        <div class=\"contact-info\">
             <div>
                 <img src=\"/storage/app/media/";
            // line 16
            echo twig_escape_filter($this->env, ($context["contactSignpost1Icon"] ?? null), "html", null, true);
            echo "\" alt=\"Headset\">
                 <h5>";
            // line 17
            echo twig_escape_filter($this->env, ($context["contactSignpost1Copy"] ?? null), "html", null, true);
            echo "</h5>
                 <a class=\"endsleigh-menu-button btn-transparent\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["contactSignpost1Cta"] ?? null), "html", null, true);
            echo "\">Find out more</a>
             </div>
             
            ";
            // line 21
            if ((($context["contactSignpost2Copy"] ?? null) != "")) {
                // line 22
                echo "            <div>
                <img src=\"/storage/app/media/";
                // line 23
                echo twig_escape_filter($this->env, ($context["contactSignpost2Icon"] ?? null), "html", null, true);
                echo "\" alt=\"Headset\">
                <h5>";
                // line 24
                echo twig_escape_filter($this->env, ($context["contactSignpost2Copy"] ?? null), "html", null, true);
                echo "</h5>
               <a class=\"endsleigh-menu-button btn-transparent\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, ($context["contactSignpost2Cta"] ?? null), "html", null, true);
                echo "\">Find out more</a>

            </div>
            ";
            }
            // line 29
            echo "        </div>

    </div>
            </div>
    </div>
</div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/contact-us-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  80 => 25,  76 => 24,  72 => 23,  69 => 22,  67 => 21,  61 => 18,  57 => 17,  53 => 16,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if contactSignpost1Copy !=''  %}
<section class=\"contact-boxes\">
    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col pb-5 background\">
        <div class=\"content-wrapper mt-1   mt-md-3 mb-md-3 \">

            <h2 class=\"mt-5\">{{ contactUsH1 }}</h2>
            <p class=\"mt-4 mb-0 small\">{{ contactUsCopy1 }}</p>
            <p class=\"mb-0 small\">{{ contactUsCopy2 }}</p>
            <p class=\"small\"><strong>Call us on </strong>{{ contactUsCopy3 }}</p>
        </div>

        <div class=\"contact-info\">
             <div>
                 <img src=\"/storage/app/media/{{ contactSignpost1Icon }}\" alt=\"Headset\">
                 <h5>{{ contactSignpost1Copy }}</h5>
                 <a class=\"endsleigh-menu-button btn-transparent\" href=\"{{ contactSignpost1Cta }}\">Find out more</a>
             </div>
             
            {% if contactSignpost2Copy !=''  %}
            <div>
                <img src=\"/storage/app/media/{{ contactSignpost2Icon }}\" alt=\"Headset\">
                <h5>{{ contactSignpost2Copy }}</h5>
               <a class=\"endsleigh-menu-button btn-transparent\" href=\"{{ contactSignpost2Cta }}\">Find out more</a>

            </div>
            {% endif %}
        </div>

    </div>
            </div>
    </div>
</div>
    </div>
</section>
{% endif %}", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/contact-us-module.htm", "");
    }
}
