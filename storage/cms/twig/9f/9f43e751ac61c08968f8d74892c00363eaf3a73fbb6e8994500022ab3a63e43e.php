<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reason-to-believe-module.htm */
class __TwigTemplate_db82bc6789ede759ee39db9bfcfee2e193b873a081862230f2957493024ddaca extends Twig_Template
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
        echo "<section class=\"content\">
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
                            <img alt=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["imageAltText"] ?? null), "html", null, true);
        echo "\" src=\"/storage/app/media/";
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
        echo "\" width=\"30%\">
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
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reason-to-believe-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col px-0\">
                    <div class=\"background\">
                        <div class=\"content-wrapper\">
                            <h3>{{ productHeroH2 }}</h3>
                            <h2>{{ productHeroH1 }}</h2>
                            <p>{{ productHeroH3 }}</p>
                            <img alt=\"{{ imageAltText }}\" src=\"/storage/app/media/{{ image }}\" width=\"30%\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/reason-to-believe-module.htm", "");
    }
}
