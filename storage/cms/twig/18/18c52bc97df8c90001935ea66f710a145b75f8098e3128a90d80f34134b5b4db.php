<?php

/* /Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/site/header.htm */
class __TwigTemplate_8e831de9abc99053d6152a6347216c73db89309a1f2c2dd2e76b692d66d2aec0 extends Twig_Template
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
        echo "<header class=\"no-gutters\">
    <div class=\"row flex-nowrap justify-content-between align-items-center no-gutters\">
        <div class=\"product-switch\">
            <div class=\"product\">
                <a href=\"/\">
                <div class=\"customer-button  ";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()) == "Personal")) ? ("active") : (""));
        echo "\">
                    Personal
                </div></a>
            </div>
            <div class=\"product\">
                <a href=\"/students-and-education\">
                <div class=\"customer-button ";
        // line 12
        echo (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "url", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "/students-and-education") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) ? ("active") : (""));
        echo "\">
                    <span class=\"d-none d-lg-block\">Students &amp; Education</span> <span class=\"d-block d-lg-none\">Student</span>
                </div></a>
            </div>
            <div class=\"product\">
                <a href=\"/commercial\">
                <div class=\"customer-button ";
        // line 18
        echo (((is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "url", array())) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "/commercial") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || 0 === strpos($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9)))) ? ("active") : (""));
        echo "\">
                    Commercial
                </div></a>
            </div>
        </div>
        <div class=\"d-none d-lg-block\">
            <div class=\"customer-group\">
                <div class=\"search-container\">
                    <div class=\"search-icon icon-search\" style=\"font-size: 14px\">
                      
                    </div>
                    <input aria-label=\"Search\" class=\"site-search\" placeholder=\"What are you looking for?\" type=\"search\">
                </div>
                <a href=\"#\">
                <div class=\"account-button\">
                    <div class=\"icon icon-account\" style=\"font-size: 18px\"></div>
                    <div class=\"account-text\">
                        Account
                    </div>
                </div>
            </a>
            <a href=\"#\">
                <div class=\"account-button\">
                    <div class=\"icon icon-contact\" style=\"font-size: 18px\"></div>
                    <div class=\"account-text\">
                        Contact
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  39 => 12,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"no-gutters\">
    <div class=\"row flex-nowrap justify-content-between align-items-center no-gutters\">
        <div class=\"product-switch\">
            <div class=\"product\">
                <a href=\"/\">
                <div class=\"customer-button  {{ this.page.title == 'Personal' ? 'active' : '' }}\">
                    Personal
                </div></a>
            </div>
            <div class=\"product\">
                <a href=\"/students-and-education\">
                <div class=\"customer-button {{ this.page.url starts with '/students-and-education' ? 'active' : '' }}\">
                    <span class=\"d-none d-lg-block\">Students &amp; Education</span> <span class=\"d-block d-lg-none\">Student</span>
                </div></a>
            </div>
            <div class=\"product\">
                <a href=\"/commercial\">
                <div class=\"customer-button {{ this.page.url starts with '/commercial' ? 'active' : '' }}\">
                    Commercial
                </div></a>
            </div>
        </div>
        <div class=\"d-none d-lg-block\">
            <div class=\"customer-group\">
                <div class=\"search-container\">
                    <div class=\"search-icon icon-search\" style=\"font-size: 14px\">
                      
                    </div>
                    <input aria-label=\"Search\" class=\"site-search\" placeholder=\"What are you looking for?\" type=\"search\">
                </div>
                <a href=\"#\">
                <div class=\"account-button\">
                    <div class=\"icon icon-account\" style=\"font-size: 18px\"></div>
                    <div class=\"account-text\">
                        Account
                    </div>
                </div>
            </a>
            <a href=\"#\">
                <div class=\"account-button\">
                    <div class=\"icon icon-contact\" style=\"font-size: 18px\"></div>
                    <div class=\"account-text\">
                        Contact
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
</header>", "/Users/asif/Desktop/mydev/local/mbs/endsleigh.dev/themes/endsleigh/partials/site/header.htm", "");
    }
}
