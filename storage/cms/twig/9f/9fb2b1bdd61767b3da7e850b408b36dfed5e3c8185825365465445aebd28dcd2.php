<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/navigation.htm */
class __TwigTemplate_ab63541d7769e337e840703bee4abfdaea12156fa6d39920b79183435cdaac06 extends Twig_Template
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
        echo "<!-- Nav -->
<nav class=\"navbar fixed-top navbar-toggleable-xs navbar-light bg-white-transparent fg-primary navbar-big\" id=\"main-navbar\">
    <button class=\"navbar-toggler navbar-toggler-right hidden-md-up\" type=\"button\">
        &#9776;
    </button>
    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">&nbsp;</a>
        <div class=\"w-100\">
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = $this->getAttribute(($context["main"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "hidden-xs-down navbar-nav d-flex justify-content-end"        ;
        $context['__cms_partial_params']['itemClass'] = "nav-item"        ;
        echo $this->env->getExtension('CMS')->partialFunction("navigation/navbar-items"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </div>
    </div>
</nav>

<!-- http://dcdeiv.github.io/simpler-sidebar/ -->
<div id=\"sidebar\">
    <div id=\"sidebar-wrapper\" class=\"sidebar-wrapper bg-white fg-primary\">
        ";
        // line 17
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = $this->getAttribute(($context["main"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "list-group"        ;
        $context['__cms_partial_params']['itemClass'] = "list-group-item"        ;
        echo $this->env->getExtension('CMS')->partialFunction("navigation/sidebar-items"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 22
        echo "    <script type=\"text/javascript\" src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/partials/navigation.js");
        echo "\"></script>
";
        // line 21
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  59 => 22,  57 => 21,  52 => 18,  45 => 17,  36 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav class=\"navbar fixed-top navbar-toggleable-xs navbar-light bg-white-transparent fg-primary navbar-big\" id=\"main-navbar\">
    <button class=\"navbar-toggler navbar-toggler-right hidden-md-up\" type=\"button\">
        &#9776;
    </button>
    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">&nbsp;</a>
        <div class=\"w-100\">
            {% partial 'navigation/navbar-items' items=main.menuItems class='hidden-xs-down navbar-nav d-flex justify-content-end' itemClass='nav-item' %}
        </div>
    </div>
</nav>

<!-- http://dcdeiv.github.io/simpler-sidebar/ -->
<div id=\"sidebar\">
    <div id=\"sidebar-wrapper\" class=\"sidebar-wrapper bg-white fg-primary\">
        {% partial 'navigation/sidebar-items' items=main.menuItems class='list-group' itemClass='list-group-item' %}
    </div>
</div>

{% put scripts %}
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/partials/navigation.js' |theme }}\"></script>
{% endput %}", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/navigation.htm", "");
    }
}
