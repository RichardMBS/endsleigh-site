<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/our-history-module.htm */
class __TwigTemplate_10cdc31901d8fca6f5f54e2c22bddac6f335b988af606b54acc639a779700544 extends Twig_Template
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
        echo "<section class=\"history-header\" id=\"14\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t<img alt=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["ourHistoryImageAltText"] ?? null), "html", null, true);
        echo "\" src=\"/storage/app/media/";
        echo twig_escape_filter($this->env, ($context["ourHistoryImage"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t\t<div class=\"col col-md-6 px-0\">
                                <h5 class=\"mt-5 mb-0 text-white\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["ourHistoryH2"] ?? null), "html", null, true);
        echo "</h5>
                                <h2 class=\"mt-3\" style=\"margin-left: 0; width: 70%;\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["ourHistoryH1"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, ($context["ourHistoryCopy"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t<div class=\"video-button\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/our-history-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  43 => 11,  39 => 10,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"history-header\" id=\"14\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"overlay-container\">
\t\t\t\t\t<img alt=\"{{ ourHistoryImageAltText }}\" src=\"/storage/app/media/{{ ourHistoryImage }}\">
\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t\t<div class=\"col col-md-6 px-0\">
                                <h5 class=\"mt-5 mb-0 text-white\">{{ ourHistoryH2 }}</h5>
                                <h2 class=\"mt-3\" style=\"margin-left: 0; width: 70%;\">{{ ourHistoryH1 }}</h2>
\t\t\t\t\t\t\t\t<p>{{ ourHistoryCopy }}</p>
\t\t\t\t\t\t\t\t<div class=\"video-button\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/our-history-module.htm", "");
    }
}
