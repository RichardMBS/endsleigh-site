<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/testimonial-hero-module.htm */
class __TwigTemplate_a6f3b0eebc3b1e882c30f40941439fba997f6d170c7d51915e72bfeec7810f84 extends Twig_Template
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
        echo "<section class=\"testimonials\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"background\">
                    <div class=\"content-wrapper\">
                        <h3>";
        // line 7
        echo twig_escape_filter($this->env, ($context["testimonialH2"] ?? null), "html", null, true);
        echo "</h3>
                        <h2>";
        // line 8
        echo twig_escape_filter($this->env, ($context["testimonialH1"] ?? null), "html", null, true);
        echo "</h2>
                        <p>";
        // line 9
        echo twig_escape_filter($this->env, ($context["testimonialCopy"] ?? null), "html", null, true);
        echo "</p>


                        <div class=\"center-block\">
                            <img src=\"/storage/app/media/commercial/testimonials.png\" class=\"mt-5 mb-5\">
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
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/testimonial-hero-module.htm";
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
        return new Twig_Source("<section class=\"testimonials\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col px-0\">
                <div class=\"background\">
                    <div class=\"content-wrapper\">
                        <h3>{{ testimonialH2 }}</h3>
                        <h2>{{ testimonialH1 }}</h2>
                        <p>{{ testimonialCopy }}</p>


                        <div class=\"center-block\">
                            <img src=\"/storage/app/media/commercial/testimonials.png\" class=\"mt-5 mb-5\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/testimonial-hero-module.htm", "");
    }
}
