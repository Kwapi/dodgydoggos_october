<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/services.htm */
class __TwigTemplate_824a39e8fcbbeceeadf345e7e0f75a754ed16fef92afef650bad7045b336302a extends Twig_Template
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
        if ((( !($context["slideshow"] ?? null) || ($this->getAttribute(($context["slideshow"] ?? null), "slideshow", array()) == null)) || ($this->getAttribute($this->getAttribute(($context["slideshow"] ?? null), "slideshow", array()), "name", array()) == "Example"))) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            $context["_slideshow"] = array("id" => 1, "name" => "Service", "created_at" => "2016-05-23 10:06:55", "updated_at" => "2016-05-23 10:53:25", "slides" => array(0 => array("id" => 1, "name" => "0", "description" => "<p></p>", "link" => "", "sort_order" => 1, "created_at" => "2016-05-23 10:06:55", "updated_at" => "2016-05-23 10:56:12", "slideshow_id" => 1, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => array("path" => $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/images/placeholders/service_1.jpg")))));
        } else {
            // line 29
            echo "    ";
            $context["_slideshow"] = $this->getAttribute(($context["slideshow"] ?? null), "slideshow", array());
        }
        // line 31
        echo "
<div class=\"bg-gray-lighter\" id=\"services\" data-target=\"#services\">
    <div class=\"container text-center py-5\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <h2 class=\"mb-1\">";
        // line 36
        echo twig_escape_filter($this->env, ($context["headertext"] ?? null), "html", null, true);
        echo "</h2>
                <p>";
        // line 37
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("services/description.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
            </div>
            <div class=\"col-xs-12\">
                ";
        // line 40
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['slideshow'] = ($context["_slideshow"] ?? null)        ;
        $context['__cms_partial_params']['id'] = "slideshow2"        ;
        echo $this->env->getExtension('CMS')->partialFunction("slideshow"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "            </div>
            
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "                <div class=\"col-xs-12 col-md-4 pt-3\">
                    ";
            // line 45
            $context["icon"] = (((("assets/images/icons/" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "color", array())) . "/service_block_0") . $context["i"]) . ".svg");
            // line 46
            echo "                    <img class=\"center-block pb-3\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(($context["icon"] ?? null));
            echo "\">
                    
                    ";
            // line 48
            if (($context["i"] == 1)) {
                // line 49
                echo "                        <h3 class=\"text-center\">";
                echo twig_escape_filter($this->env, ($context["headertextblock1"] ?? null), "html", null, true);
                echo "</h3>
                    ";
            } elseif ((            // line 50
$context["i"] == 2)) {
                // line 51
                echo "                        <h3 class=\"text-center\">";
                echo twig_escape_filter($this->env, ($context["headertextblock2"] ?? null), "html", null, true);
                echo "</h3>
                    ";
            } elseif ((            // line 52
$context["i"] == 3)) {
                // line 53
                echo "                        <h3 class=\"text-center\">";
                echo twig_escape_filter($this->env, ($context["headertextblock3"] ?? null), "html", null, true);
                echo "</h3>
                    ";
            }
            // line 55
            echo "                    
                    ";
            // line 56
            $context["content"] = (("services/block" . $context["i"]) . ".htm");
            // line 57
            echo "                    ";
            $context['__cms_content_params'] = [];
            echo $this->env->getExtension('CMS')->contentFunction(($context["content"] ?? null)            , $context['__cms_content_params']            );
            unset($context['__cms_content_params']);
            // line 58
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 60,  107 => 58,  102 => 57,  100 => 56,  97 => 55,  91 => 53,  89 => 52,  84 => 51,  82 => 50,  77 => 49,  75 => 48,  69 => 46,  67 => 45,  64 => 44,  60 => 43,  56 => 41,  50 => 40,  42 => 37,  38 => 36,  31 => 31,  27 => 29,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not slideshow or slideshow.slideshow == null or slideshow.slideshow.name == 'Example' %}
    {# placeholder slidehsow if no slideshow is set #}
    {% set _slideshow = {
           \"id\":1,
           \"name\":\"Service\",
           \"created_at\":\"2016-05-23 10:06:55\",
           \"updated_at\":\"2016-05-23 10:53:25\",
           \"slides\":[
              {
                 \"id\":1,
                 \"name\":\"0\",
                 \"description\":\"<p><\\/p>\",
                 \"link\":\"\",
                 \"sort_order\":1,
                 \"created_at\":\"2016-05-23 10:06:55\",
                 \"updated_at\":\"2016-05-23 10:56:12\",
                 \"slideshow_id\":1,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/service_1.jpg\" | theme
                 }
              }
           ]
        }
    %}
{% else %}
    {% set _slideshow = slideshow.slideshow %}
{% endif %}

<div class=\"bg-gray-lighter\" id=\"services\" data-target=\"#services\">
    <div class=\"container text-center py-5\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <h2 class=\"mb-1\">{{ headertext }}</h2>
                <p>{% content 'services/description.htm' %}</p>
            </div>
            <div class=\"col-xs-12\">
                {% partial 'slideshow' slideshow=_slideshow id='slideshow2' %}
            </div>
            
            {% for i in 1..3 %}
                <div class=\"col-xs-12 col-md-4 pt-3\">
                    {% set icon = 'assets/images/icons/' ~ this.theme.color ~ '/service_block_0' ~ i ~ '.svg' %}
                    <img class=\"center-block pb-3\" src=\"{{ icon |theme }}\">
                    
                    {% if i == 1 %}
                        <h3 class=\"text-center\">{{ headertextblock1 }}</h3>
                    {% elseif i == 2 %}
                        <h3 class=\"text-center\">{{ headertextblock2 }}</h3>
                    {% elseif i == 3 %}
                        <h3 class=\"text-center\">{{ headertextblock3 }}</h3>
                    {% endif %}
                    
                    {% set content = 'services/block' ~ i ~ '.htm' %}
                    {% content content %}
                </div>
            {% endfor %}
            
        </div>
    </div>
</div>", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/services.htm", "");
    }
}
