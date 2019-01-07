<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/twitter-module.htm */
class __TwigTemplate_10dd23c686abc52cc7aab56f7660f166f692d1b37df6d0f47dec2f07c0167961 extends Twig_Template
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
        echo "<section class=\"twitter\" id=\"6\">
\t<div class=\"container\">

        <div class=\"background\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h3>";
        // line 8
        echo twig_escape_filter($this->env, ($context["twitterH2"] ?? null), "html", null, true);
        echo "</h3>
                        <h2>";
        // line 9
        echo twig_escape_filter($this->env, ($context["twitterH1"] ?? null), "html", null, true);
        echo "</h2>
                        <p>";
        // line 10
        echo twig_escape_filter($this->env, ($context["twitterCopy"] ?? null), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <img src=\"/storage/app/media/personal/twitter.png\"
                             class=\"pt-4 mb-5\"></div>
                </div>
            </div>
        </div>

\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/twitter-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"twitter\" id=\"6\">
\t<div class=\"container\">

        <div class=\"background\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h3>{{ twitterH2 }}</h3>
                        <h2>{{ twitterH1 }}</h2>
                        <p>{{ twitterCopy }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <img src=\"/storage/app/media/personal/twitter.png\"
                             class=\"pt-4 mb-5\"></div>
                </div>
            </div>
        </div>

\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/twitter-module.htm", "");
    }
}
