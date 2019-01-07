<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/showcase-module.htm */
class __TwigTemplate_e1c8a466f0286b2f8d3a237511c11e5947b3eb85375c0c62c938f96b972e757b extends Twig_Template
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
        echo "<section class=\"showcase-module pt-4 pb-5\">
\t<div class=\"row\">
    \t\t<div class=\"col background\">
    \t\t\t<div class=\"content-wrapper mt-1 mb-5 mt-md-3 mb-md-3 text-left\">
    \t\t\t\t<div class=\"card p-3 shadow\">
    \t\t\t\t\t<div class=\"card-body\">
    \t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h2 class=\"text-dark\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["showcaseH1"] ?? null), "html", null, true);
        echo "</h2>
                                    <p>";
        // line 10
        echo twig_escape_filter($this->env, ($context["showcaseCopy"] ?? null), "html", null, true);
        echo "</p>

                                    <div class=\"mt-5\">
                                        <div class=\"footer-buttons\">
                                            <div>
                                                <a class=\"btn-eis secondary arrow\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["showcaseCta"] ?? null), "html", null, true);
        echo "\">Arrange a callback</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/showcase-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  37 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"showcase-module pt-4 pb-5\">
\t<div class=\"row\">
    \t\t<div class=\"col background\">
    \t\t\t<div class=\"content-wrapper mt-1 mb-5 mt-md-3 mb-md-3 text-left\">
    \t\t\t\t<div class=\"card p-3 shadow\">
    \t\t\t\t\t<div class=\"card-body\">
    \t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h2 class=\"text-dark\">{{ showcaseH1 }}</h2>
                                    <p>{{ showcaseCopy }}</p>

                                    <div class=\"mt-5\">
                                        <div class=\"footer-buttons\">
                                            <div>
                                                <a class=\"btn-eis secondary arrow\" href=\"{{ showcaseCta }}\">Arrange a callback</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/showcase-module.htm", "");
    }
}
