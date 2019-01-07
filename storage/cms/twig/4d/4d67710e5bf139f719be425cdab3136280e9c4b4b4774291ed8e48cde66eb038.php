<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/why-endsleigh-module.htm */
class __TwigTemplate_da20d5448117775a3c6ac31083d6e69fba960c44e64ab03cb9521f3311ecd851 extends Twig_Template
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
        echo "<section class=\"why\" id=\"27\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"background\">
\t\t\t\t\t<div class=\"content-wrapper\" style=\"padding-left: 400px;\">
\t\t\t\t\t\t<h3>";
        // line 7
        echo twig_escape_filter($this->env, ($context["endsleighH2"] ?? null), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, ($context["endsleighH1"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<p>";
        // line 9
        echo twig_escape_filter($this->env, ($context["endsleighCopy"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/why-endsleigh-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"why\" id=\"27\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"background\">
\t\t\t\t\t<div class=\"content-wrapper\" style=\"padding-left: 400px;\">
\t\t\t\t\t\t<h3>{{ endsleighH2 }}</h3>
\t\t\t\t\t\t<h2>{{ endsleighH1 }}</h2>
\t\t\t\t\t\t<p>{{ endsleighCopy }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/why-endsleigh-module.htm", "");
    }
}
