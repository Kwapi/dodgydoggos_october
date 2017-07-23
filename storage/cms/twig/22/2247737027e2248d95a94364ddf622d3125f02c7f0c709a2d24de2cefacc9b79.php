<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/about.htm */
class __TwigTemplate_66f078ba3bb55113001ea0f8d90a0e5936a30e20d19c066b170e648a953c1a44 extends Twig_Template
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
        echo "<div id=\"about\" data-target=\"#about\">
    <div class=\"container text-xs-center py-5\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-xs-10 offset-xs-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4 pb-3\">
                        <img class=\"img-fluid img-thumbnail\" src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/about.jpg");
        echo "\" alt=\"me\">
                    </div>
                </div>
                <h2 class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["headertext"] ?? null), "html", null, true);
        echo "</h2>
                ";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("about/about.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 12
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 11,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"about\" data-target=\"#about\">
    <div class=\"container text-xs-center py-5\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-xs-10 offset-xs-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4 pb-3\">
                        <img class=\"img-fluid img-thumbnail\" src=\"{{'assets/images/about.jpg'|theme}}\" alt=\"me\">
                    </div>
                </div>
                <h2 class=\"text-center\">{{headertext}}</h2>
                {% content 'about/about.htm' %}
            </div>
        </div>
    </div>
</div>", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/about.htm", "");
    }
}
