<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/student-signpost-module.htm */
class __TwigTemplate_da6173bb90838d66c3e8ef60841576123699d09bb25701026cfe998c1d01eb8a extends Twig_Template
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
        echo "<section class=\"bg-white pb-5\" id=\"18\">
\t<div class=\"row\">
\t\t<div class=\"col background\">
\t\t\t<div class=\"content-wrapper mt-1 mb-4 mt-md-5 mb-md-4 text-left\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h2 class=\"mb-5 mt-5\"></h2>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t\t\t<img alt=\"Article 1\" class=\"card-img-top\" src=\"/storage/app/media/";
        // line 9
        echo twig_escape_filter($this->env, ($context["signpost1Image"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title font-weight-bold\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["signpost1H1"] ?? null), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t<p class=\"small text-muted\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["signpost1Copy"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t<div class=\"footer-buttons\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a class=\"endsleigh-menu-button shadow\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["signpost1Cta1"] ?? null), "html", null, true);
        echo "\">Get a quote</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a class=\"endsleigh-menu-button btn-transparent\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["signpost1Cta2"] ?? null), "html", null, true);
        echo "\">Find out more</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-md-12 px-0\" >
                                    <div class=\"strap\">&nbsp;</div>
                                </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t\t\t<img alt=\"Article 2\" class=\"card-img-top\" src=\"/storage/app/media/";
        // line 31
        echo twig_escape_filter($this->env, ($context["signpost2Image"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title font-weight-bold\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["signpost2H1"] ?? null), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t<p class=\"small text-muted\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["signpost2Copy"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t<div class=\"footer-buttons\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a class=\"endsleigh-menu-button shadow\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["signpost2Cta1"] ?? null), "html", null, true);
        echo "\">Get a quote</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a class=\"endsleigh-menu-button btn-transparent\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["signpost2Cta2"] ?? null), "html", null, true);
        echo "\">Find out more</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-md-12 px-0\" >
                                    <div class=\"strap\">&nbsp;</div>
                                </div>
                            </div>
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
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/student-signpost-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  85 => 37,  79 => 34,  75 => 33,  70 => 31,  54 => 18,  48 => 15,  42 => 12,  38 => 11,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"bg-white pb-5\" id=\"18\">
\t<div class=\"row\">
\t\t<div class=\"col background\">
\t\t\t<div class=\"content-wrapper mt-1 mb-4 mt-md-5 mb-md-4 text-left\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h2 class=\"mb-5 mt-5\"></h2>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t\t\t<img alt=\"Article 1\" class=\"card-img-top\" src=\"/storage/app/media/{{ signpost1Image }}\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title font-weight-bold\">{{ signpost1H1 }}</h4>
\t\t\t\t\t\t\t\t<p class=\"small text-muted\">{{ signpost1Copy }}</p>
\t\t\t\t\t\t\t\t<div class=\"footer-buttons\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a class=\"endsleigh-menu-button shadow\" href=\"{{ signpost1Cta1 }}\">Get a quote</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a class=\"endsleigh-menu-button btn-transparent\" href=\"{{ signpost1Cta2 }}\">Find out more</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-md-12 px-0\" >
                                    <div class=\"strap\">&nbsp;</div>
                                </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t\t\t<img alt=\"Article 2\" class=\"card-img-top\" src=\"/storage/app/media/{{ signpost2Image }}\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title font-weight-bold\">{{ signpost2H1 }}</h4>
\t\t\t\t\t\t\t\t<p class=\"small text-muted\">{{ signpost2Copy }}</p>
\t\t\t\t\t\t\t\t<div class=\"footer-buttons\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a class=\"endsleigh-menu-button shadow\" href=\"{{ signpost2Cta1 }}\">Get a quote</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a class=\"endsleigh-menu-button btn-transparent\" href=\"{{ signpost2Cta2 }}\">Find out more</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-md-12 px-0\" >
                                    <div class=\"strap\">&nbsp;</div>
                                </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/student-signpost-module.htm", "");
    }
}
