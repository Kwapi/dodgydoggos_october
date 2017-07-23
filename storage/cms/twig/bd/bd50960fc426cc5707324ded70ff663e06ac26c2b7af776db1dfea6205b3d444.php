<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/slideshow.htm */
class __TwigTemplate_ea9b4e0d5c61ee40b6a2f748a2e2ea7fdbd2a99e5c236618cb520cc62223a3c7 extends Twig_Template
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
        if ((($context["slideshow"] ?? null) && $this->getAttribute(($context["slideshow"] ?? null), "slides", array(), "array"))) {
            // line 2
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval='3500'>
        <div class=\"carousel-inner\" role=\"listbox\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["slideshow"] ?? null), "slides", array(), "array"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["slide"]) {
                // line 5
                echo "                ";
                if ($this->getAttribute($this->getAttribute($context["slide"], "image", array()), "path", array())) {
                    // line 6
                    echo "                    <div class='carousel-item";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        echo " active";
                    }
                    echo "'>
                        ";
                    // line 7
                    if ($this->getAttribute($context["slide"], "link", array())) {
                        // line 8
                        echo "                            <a class=\"carousel-image-background\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "path", array()), "html", null, true);
                        echo "');\" alt='";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "title", array()), "html", null, true);
                        echo "' href='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "link", array()), "html", null, true);
                        echo "' target='_blank'></a>
                        ";
                    } else {
                        // line 10
                        echo "                            <div class=\"carousel-image-background\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "path", array()), "html", null, true);
                        echo "');\" alt='";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "title", array()), "html", null, true);
                        echo "'></div>
                        ";
                    }
                    // line 12
                    echo "                        ";
                    if ((($this->getAttribute($context["slide"], "title", array()) || $this->getAttribute($context["slide"], "description", array())) || $this->getAttribute($context["slide"], "link", array()))) {
                        // line 13
                        echo "                            <div class=\"carousel-caption clearfix white-caption\">
                                ";
                        // line 14
                        if ($this->getAttribute($context["slide"], "title", array())) {
                            echo "<h4 class='carousel-caption-title'>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
                            echo "</h4>";
                        }
                        // line 15
                        echo "                                ";
                        if ($this->getAttribute($context["slide"], "description", array())) {
                            echo "<p>";
                            echo $this->getAttribute($context["slide"], "description", array());
                            echo "</p>";
                        }
                        // line 16
                        echo "                                ";
                        if ($this->getAttribute($context["slide"], "link", array())) {
                            echo "<a class='carousel-caption-link' href='";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "link", array()), "html", null, true);
                            echo "' target='_blank'>Learn more</a>";
                        }
                        // line 17
                        echo "                            </div>
                         ";
                    }
                    // line 19
                    echo "                    </div>
                ";
                }
                // line 21
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 22,  108 => 21,  104 => 19,  100 => 17,  93 => 16,  86 => 15,  80 => 14,  77 => 13,  74 => 12,  66 => 10,  56 => 8,  54 => 7,  47 => 6,  44 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if slideshow and slideshow['slides'] %}
    <div id=\"{{id}}\" class=\"carousel slide\" data-ride=\"carousel\" data-interval='3500'>
        <div class=\"carousel-inner\" role=\"listbox\">
            {% for i, slide in slideshow['slides'] %}
                {% if slide.image.path %}
                    <div class='carousel-item{% if loop.first %} active{% endif %}'>
                        {% if slide.link %}
                            <a class=\"carousel-image-background\" style=\"background-image: url('{{ slide.image.path }}');\" alt='{{ slide.image.title }}' href='{{ slide.link }}' target='_blank'></a>
                        {% else %}
                            <div class=\"carousel-image-background\" style=\"background-image: url('{{ slide.image.path }}');\" alt='{{ slide.image.title }}'></div>
                        {% endif %}
                        {% if slide.title or slide.description or slide.link %}
                            <div class=\"carousel-caption clearfix white-caption\">
                                {% if slide.title %}<h4 class='carousel-caption-title'>{{ slide.title }}</h4>{% endif %}
                                {% if slide.description %}<p>{{ slide.description|raw }}</p>{% endif %}
                                {% if slide.link %}<a class='carousel-caption-link' href='{{ slide.link }}' target='_blank'>Learn more</a>{% endif %}
                            </div>
                         {% endif %}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/slideshow.htm", "");
    }
}
