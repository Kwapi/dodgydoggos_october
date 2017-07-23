<?php

/* /home/michal/webdev/dodgydoggos_october/themes/demo/pages/plugins.htm */
class __TwigTemplate_4949162c2f7a6ccde1d01b3734b19ee339f8fe0d0c2e31d92b61f12ed1b871ff extends Twig_Template
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
        echo "<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>Plugin components</h1>
                <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("demoTodoBum"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "    
</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("explain/plugins.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>
    
<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"btn btn-lg btn-default\">Learn more at October's Documentation</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/demo/pages/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 18,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>Plugin components</h1>
                <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
{% component 'demoTodoBum' %}
    
</div>

<!-- Page Explanation -->
<div class=\"container\">{% partial \"explain/plugins.htm\" %}</div>
    
<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"btn btn-lg btn-default\">Learn more at October's Documentation</a></p>
</div>", "/home/michal/webdev/dodgydoggos_october/themes/demo/pages/plugins.htm", "");
    }
}
