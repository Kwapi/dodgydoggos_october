<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/navigation/navbar-items.htm */
class __TwigTemplate_08b46d8ac216ad6a8fed26110e457def1ba95638d5483198d534d072167d3c41 extends Twig_Template
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, ($context["itemClass"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
            echo " ";
            echo (($this->getAttribute($context["item"], "items", array())) ? ("dropdown") : (""));
            echo "\">
            <a class=\"nav-link\" ";
            // line 4
            if ($this->getAttribute($context["item"], "items", array())) {
                echo "data-toggle=\"dropdown\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
            echo "\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "
                ";
            // line 6
            if ($this->getAttribute($context["item"], "items", array())) {
                // line 7
                echo "                    <span class=\"caret\"></span>
                ";
            }
            // line 9
            echo "            </a>
            ";
            // line 10
            if ($this->getAttribute($context["item"], "items", array())) {
                // line 11
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = $this->getAttribute($context["item"], "items", array())                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('CMS')->partialFunction("menu-items"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 12
                echo "            ";
            }
            // line 13
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/navigation/navbar-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  72 => 13,  69 => 12,  62 => 11,  60 => 10,  57 => 9,  53 => 7,  51 => 6,  47 => 5,  37 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"{{ class }}\">
    {% for item in items %}
        <li class=\"{{ itemClass }} {{ item.viewBag.cssClass }} {{ item.items ? 'dropdown' : '' }}\">
            <a class=\"nav-link\" {% if item.items %}data-toggle=\"dropdown\"{% endif %} href=\"{{ item.url }}#{{ item.viewBag.cssClass }}\">
                {{ item.title }}
                {% if item.items %}
                    <span class=\"caret\"></span>
                {% endif %}
            </a>
            {% if item.items %}
                {% partial 'menu-items' items=item.items class='dropdown-menu' %}
            {% endif %}
        </li>
    {% endfor %}
</ul>", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/navigation/navbar-items.htm", "");
    }
}
