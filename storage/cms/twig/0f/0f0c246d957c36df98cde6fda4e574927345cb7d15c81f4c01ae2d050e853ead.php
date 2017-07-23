<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/contact.htm */
class __TwigTemplate_06d582bc8a0c6179e32ed1ce9d587fdaf997324dedf5e7cdeb1d03bda4bf58b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"bg-gray-lighter\" id=\"contact\" data-target=\"#contact\">
    <header class=\"py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 push-md-6\">
                    <h2 class=\"text-center\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["headertext"] ?? null), "html", null, true);
        echo "</h2>
                    
                    ";
        // line 8
        $context["icon"] = (("assets/images/icons/" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "color", array())) . "/contact.svg");
        // line 9
        echo "                    <img class=\"mx-auto pb-2\" src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(($context["icon"] ?? null));
        echo "\">
                    <div class=\"mb-3\">
                        ";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("contact.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 12
        echo "                    </div>
                </div>
                <div class=\"col-xs-12 col-md-6 pull-md-6\">
                    ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contactForm/default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "                </div>
            </div>
        </div>
    </header>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  48 => 15,  43 => 12,  39 => 11,  33 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"bg-gray-lighter\" id=\"contact\" data-target=\"#contact\">
    <header class=\"py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 push-md-6\">
                    <h2 class=\"text-center\">{{headertext}}</h2>
                    
                    {% set icon = 'assets/images/icons/' ~ this.theme.color ~ '/contact.svg' %}
                    <img class=\"mx-auto pb-2\" src=\"{{ icon | theme }}\">
                    <div class=\"mb-3\">
                        {% content 'contact.htm' %}
                    </div>
                </div>
                <div class=\"col-xs-12 col-md-6 pull-md-6\">
                    {% partial 'contactForm/default' %}
                </div>
            </div>
        </div>
    </header>
</div>", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/contact.htm", "");
    }
}
