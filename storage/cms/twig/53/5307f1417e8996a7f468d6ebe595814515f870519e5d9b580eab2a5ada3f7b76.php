<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/product-range-module.htm */
class __TwigTemplate_5db825bafc319ceb93e8eab48cd1052d48ec34490e9298a479c3db42f3de1f4e extends Twig_Template
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
        echo "<section class=\"careers-button-box\" id=\"13\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"background\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"careers-button-boxes\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h2 class=\"text-left\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["productRangeH1"] ?? null), "html", null, true);
        echo "</h2>
                                    <h4 class=\"text-left\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["productRangeH2"] ?? null), "html", null, true);
        echo "</h4>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 21
        echo twig_escape_filter($this->env, ($context["productSignpost1Heading"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 22
        echo twig_escape_filter($this->env, ($context["productSignpost1Copy"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["productSignpost1Cta"] ?? null), "html", null, true);
        echo "\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 29
        if ((($context["productSignpost2Heading"] ?? null) != "")) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 33
            echo twig_escape_filter($this->env, ($context["productSignpost2Heading"] ?? null), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 34
            echo twig_escape_filter($this->env, ($context["productSignpost2Copy"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["productSignpost2Cta"] ?? null), "html", null, true);
            echo "\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["productSignpost3Heading"] ?? null) != "")) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 46
            echo twig_escape_filter($this->env, ($context["productSignpost3Heading"] ?? null), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 47
            echo twig_escape_filter($this->env, ($context["productSignpost3Copy"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["productSignpost3Cta"] ?? null), "html", null, true);
            echo "\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["productSignpost4Heading"] ?? null) != "")) {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 59
            echo twig_escape_filter($this->env, ($context["productSignpost4Heading"] ?? null), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 60
            echo twig_escape_filter($this->env, ($context["productSignpost4Copy"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["productSignpost4Cta"] ?? null), "html", null, true);
            echo "\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["productSignpost5Heading"] ?? null) != "")) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 72
            echo twig_escape_filter($this->env, ($context["productSignpost5Heading"] ?? null), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 73
            echo twig_escape_filter($this->env, ($context["productSignpost5Copy"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, ($context["productSignpost5Cta"] ?? null), "html", null, true);
            echo "\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["productSignpost6Heading"] ?? null) != "")) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 85
            echo twig_escape_filter($this->env, ($context["productSignpost6Heading"] ?? null), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 86
            echo twig_escape_filter($this->env, ($context["productSignpost6Copy"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["productSignpost6Cta"] ?? null), "html", null, true);
            echo "\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["productSignpost7Heading"] ?? null) != "")) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 98
            echo twig_escape_filter($this->env, ($context["productSignpost7Heading"] ?? null), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 99
            echo twig_escape_filter($this->env, ($context["productSignpost7Copy"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["productSignpost7Cta"] ?? null), "html", null, true);
            echo "\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["productSignpost8Heading"] ?? null) != "")) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 111
            echo twig_escape_filter($this->env, ($context["productSignpost8Heading"] ?? null), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 112
            echo twig_escape_filter($this->env, ($context["productSignpost8Copy"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, ($context["productSignpost8Cta"] ?? null), "html", null, true);
            echo "\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
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
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/product-range-module.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 120,  240 => 114,  235 => 112,  231 => 111,  226 => 108,  223 => 107,  214 => 101,  209 => 99,  205 => 98,  200 => 95,  197 => 94,  188 => 88,  183 => 86,  179 => 85,  174 => 82,  171 => 81,  162 => 75,  157 => 73,  153 => 72,  148 => 69,  145 => 68,  136 => 62,  131 => 60,  127 => 59,  122 => 56,  119 => 55,  110 => 49,  105 => 47,  101 => 46,  96 => 43,  93 => 42,  84 => 36,  79 => 34,  75 => 33,  70 => 30,  68 => 29,  60 => 24,  55 => 22,  51 => 21,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"careers-button-box\" id=\"13\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col px-0\">
\t\t\t\t<div class=\"background\">
\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t<div class=\"careers-button-boxes\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h2 class=\"text-left\">{{ productRangeH1 }}</h2>
                                    <h4 class=\"text-left\">{{ productRangeH2 }}</h4>
                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{ productSignpost1Heading }}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ productSignpost1Copy }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"{{ productSignpost1Cta }}\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% if productSignpost2Heading != '' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{ productSignpost2Heading }}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ productSignpost2Copy }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"{{ productSignpost2Cta }}\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if productSignpost3Heading != '' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{ productSignpost3Heading }}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ productSignpost3Copy }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"{{ productSignpost3Cta }}\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if productSignpost4Heading != '' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{ productSignpost4Heading }}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ productSignpost4Copy }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"{{ productSignpost4Cta }}\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if productSignpost5Heading != '' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{ productSignpost5Heading }}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ productSignpost5Copy }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"{{ productSignpost5Cta }}\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if productSignpost6Heading != '' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{ productSignpost6Heading }}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ productSignpost6Copy }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"{{ productSignpost6Cta }}\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if productSignpost7Heading != '' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{ productSignpost7Heading }}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ productSignpost7Copy }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"{{ productSignpost7Cta }}\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if productSignpost8Heading != '' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"careers-button-box-single\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{ productSignpost8Heading }}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ productSignpost8Copy }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-wraper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-eis secondary arrow\" href=\"{{ productSignpost8Cta }}\">Read more</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/product-range-module.htm", "");
    }
}
