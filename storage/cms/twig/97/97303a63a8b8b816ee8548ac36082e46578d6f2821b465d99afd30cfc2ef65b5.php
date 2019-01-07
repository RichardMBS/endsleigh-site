<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/social-module.htm */
class __TwigTemplate_ff4b83c71d5381409591fc17ee89b31aad59de7ee8022d8c8af66ab10f107746 extends Twig_Template
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
        echo "<section class=\"twitter\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"background\">
                    <div class=\"content-wrapper\">
                        <h2>";
        // line 7
        echo twig_escape_filter($this->env, ($context["productHeroH1"] ?? null), "html", null, true);
        echo "</h2>
                        <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["productHeroH3"] ?? null), "html", null, true);
        echo "</p>    
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
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/social-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"twitter\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"background\">
                    <div class=\"content-wrapper\">
                        <h2>{{ productHeroH1 }}</h2>
                        <p>{{ productHeroH3 }}</p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/social-module.htm", "");
    }
}
