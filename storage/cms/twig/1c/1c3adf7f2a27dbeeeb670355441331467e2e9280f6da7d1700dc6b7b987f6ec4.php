<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/offer.htm */
class __TwigTemplate_bbe6c6c9b192247d65a72239a9709cd935f19b366c0fdf1b937825dfdd0fa794 extends Twig_Template
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
        echo "<div id=\"offer\" data-target=\"#offer\">
    <div class=\"container text-center py-5\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <h2 class=\"mb-3\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["headertext"] ?? null), "html", null, true);
        echo "</h2>
            </div>
            
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "                <div class=\"col-xs-12 col-md-6\">
                    ";
            // line 10
            $context["icon"] = (((("assets/images/icons/" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "color", array())) . "/offer_block_0") . $context["i"]) . ".svg");
            // line 11
            echo "                    <img class=\"center-block pb-2\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(($context["icon"] ?? null));
            echo "\">
                    ";
            // line 12
            $context["title"] = (("offer/block_0" . $context["i"]) . ".htm");
            // line 13
            echo "                    
                    ";
            // line 14
            if (($context["i"] == 1)) {
                // line 15
                echo "                        <h3 class=\"text-center\">";
                echo twig_escape_filter($this->env, ($context["block01title"] ?? null), "html", null, true);
                echo "</h3>
                    ";
            } elseif ((            // line 16
$context["i"] == 2)) {
                // line 17
                echo "                        <h3 class=\"text-center\">";
                echo twig_escape_filter($this->env, ($context["block02title"] ?? null), "html", null, true);
                echo "</h3>
                    ";
            }
            // line 19
            echo "                    
                    ";
            // line 20
            $context["content"] = (("offer/block_0" . $context["i"]) . ".htm");
            // line 21
            echo "                    ";
            $context['__cms_content_params'] = [];
            echo $this->env->getExtension('CMS')->contentFunction(($context["content"] ?? null)            , $context['__cms_content_params']            );
            unset($context['__cms_content_params']);
            // line 22
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/offer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  75 => 22,  70 => 21,  68 => 20,  65 => 19,  59 => 17,  57 => 16,  52 => 15,  50 => 14,  47 => 13,  45 => 12,  40 => 11,  38 => 10,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"offer\" data-target=\"#offer\">
    <div class=\"container text-center py-5\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <h2 class=\"mb-3\">{{headertext}}</h2>
            </div>
            
            {% for i in 1..2 %}
                <div class=\"col-xs-12 col-md-6\">
                    {% set icon = 'assets/images/icons/' ~ this.theme.color ~ '/offer_block_0' ~ i ~ '.svg' %}
                    <img class=\"center-block pb-2\" src=\"{{ icon |theme }}\">
                    {% set title = 'offer/block_0' ~ i ~ '.htm' %}
                    
                    {% if i == 1 %}
                        <h3 class=\"text-center\">{{ block01title }}</h3>
                    {% elseif i == 2 %}
                        <h3 class=\"text-center\">{{ block02title }}</h3>
                    {% endif %}
                    
                    {% set content = 'offer/block_0' ~ i ~ '.htm' %}
                    {% content content %}
                </div>
            {% endfor %}
            
        </div>
    </div>
</div>", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/offer.htm", "");
    }
}
