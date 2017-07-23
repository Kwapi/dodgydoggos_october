<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/location.htm */
class __TwigTemplate_1eb1187de9fa4c02ca0bc4f08eecfb815d0003474c14a150c1add86410990abf extends Twig_Template
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
        if (($context["active"] ?? null)) {
            // line 2
            echo "    <div id=\"location\" data-target=\"#location\">
        <div class=\"col-sm-6 col-md-5 col-lg-3 col-xl-3 card card-block route\">
            <div class=\"\">
                <h6 class=\"card-title\">";
            // line 5
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h6>
                <div class=\"card-text\">
                    <div class=\"row\">
                        <div class=\"col-xs-8 col-md-8 col-lg-8 col-xl-8\">
                            <address>
                                <strong>
                                    ";
            // line 11
            echo twig_escape_filter($this->env, ($context["nameLine1"] ?? null), "html", null, true);
            echo "
                                    ";
            // line 12
            if (($context["nameLine2"] ?? null)) {
                // line 13
                echo "                                        <br>";
                echo twig_escape_filter($this->env, ($context["nameLine2"] ?? null), "html", null, true);
                echo "
                                    ";
            }
            // line 15
            echo "                                </strong>
                                ";
            // line 16
            if (($context["addressLine1"] ?? null)) {
                // line 17
                echo "                                    <br>";
                echo twig_escape_filter($this->env, ($context["addressLine1"] ?? null), "html", null, true);
                echo "
                                ";
            }
            // line 19
            echo "                                ";
            if (($context["addressLine2"] ?? null)) {
                // line 20
                echo "                                    <br>";
                echo twig_escape_filter($this->env, ($context["addressLine2"] ?? null), "html", null, true);
                echo "
                                ";
            }
            // line 22
            echo "                            </address>
                        </div>
                        <div class=\"col-xs-4 col-md-4 col-lg-4 col-xl-4\">
                            <a class=\"btn btn-secondary\" id=\"navigation_link\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\", target=\"_blank\">
                                ";
            // line 26
            $context["icon"] = (("assets/images/icons/" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "color", array())) . "/route.svg");
            // line 27
            echo "                                <img src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(($context["icon"] ?? null));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">
                            </a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div id=\"map\"></div>
    </div>
    <script>
        if(typeof(window.theme) === 'undefined') {
            window.theme = {};
        }
        window.theme.locationMapboxAccessToken = \"";
            // line 40
            echo twig_escape_filter($this->env, ($context["mapboxAccessToken"] ?? null), "html", null, true);
            echo "\";
        window.theme.locationMapboxId = \"";
            // line 41
            echo twig_escape_filter($this->env, ($context["mapboxId"] ?? null), "html", null, true);
            echo "\";
        window.theme.locationMaxZoom = Number(\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["maxZoom"] ?? null), "html", null, true);
            echo "\");
        window.theme.locationLongitude = Number(\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["longitude"] ?? null), "html", null, true);
            echo "\");
        window.theme.locationLatitude = Number(\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["latitude"] ?? null), "html", null, true);
            echo "\");
        window.theme.locationZoom = Number(\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["zoom"] ?? null), "html", null, true);
            echo "\");
        window.theme.locationLink = \"";
            // line 46
            echo twig_escape_filter($this->env, ($context["navigationHref"] ?? null), "html", null, true);
            echo "\";
    </script>
    ";
            // line 48
            echo $this->env->getExtension('CMS')->startBlock('scripts'            );
            // line 49
            echo "        <script type=\"text/javascript\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/partials/location.js");
            echo "\"></script>
    ";
            // line 48
            echo $this->env->getExtension('CMS')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/location.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 48,  128 => 49,  126 => 48,  121 => 46,  117 => 45,  113 => 44,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  78 => 27,  76 => 26,  72 => 25,  67 => 22,  61 => 20,  58 => 19,  52 => 17,  50 => 16,  47 => 15,  41 => 13,  39 => 12,  35 => 11,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if active %}
    <div id=\"location\" data-target=\"#location\">
        <div class=\"col-sm-6 col-md-5 col-lg-3 col-xl-3 card card-block route\">
            <div class=\"\">
                <h6 class=\"card-title\">{{ title }}</h6>
                <div class=\"card-text\">
                    <div class=\"row\">
                        <div class=\"col-xs-8 col-md-8 col-lg-8 col-xl-8\">
                            <address>
                                <strong>
                                    {{ nameLine1 }}
                                    {% if nameLine2 %}
                                        <br>{{ nameLine2 }}
                                    {% endif %}
                                </strong>
                                {% if addressLine1 %}
                                    <br>{{ addressLine1 }}
                                {% endif %}
                                {% if addressLine2 %}
                                    <br>{{ addressLine2 }}
                                {% endif %}
                            </address>
                        </div>
                        <div class=\"col-xs-4 col-md-4 col-lg-4 col-xl-4\">
                            <a class=\"btn btn-secondary\" id=\"navigation_link\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ title }}\", target=\"_blank\">
                                {% set icon = 'assets/images/icons/' ~ this.theme.color ~ '/route.svg' %}
                                <img src=\"{{ icon | theme }}\" alt=\"{{ title }}\">
                            </a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div id=\"map\"></div>
    </div>
    <script>
        if(typeof(window.theme) === 'undefined') {
            window.theme = {};
        }
        window.theme.locationMapboxAccessToken = \"{{ mapboxAccessToken }}\";
        window.theme.locationMapboxId = \"{{ mapboxId }}\";
        window.theme.locationMaxZoom = Number(\"{{ maxZoom }}\");
        window.theme.locationLongitude = Number(\"{{ longitude }}\");
        window.theme.locationLatitude = Number(\"{{ latitude }}\");
        window.theme.locationZoom = Number(\"{{ zoom }}\");
        window.theme.locationLink = \"{{ navigationHref }}\";
    </script>
    {% put scripts %}
        <script type=\"text/javascript\" src=\"{{ 'assets/javascript/partials/location.js' |theme }}\"></script>
    {% endput %}
{% endif %}", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/location.htm", "");
    }
}
