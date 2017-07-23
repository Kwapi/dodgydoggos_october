<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/layouts/default.htm */
class __TwigTemplate_2fc9e609782253a2c59159e686583b405d8f072c32f93258c933031d86735730 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Pascal Garber\">
        <meta http-equiv=\"language\" content=\"deutsch, de\">
        <meta name=\"Keywords\" content=\"Viola,Garber,Tierheilpraxis,Tierheilpraktikerin,Cuxhaven,Klassische Homöopathie,Homöopathie,Phytotherapie,Akupunktur,Praxis,Hausbesuch,Naturheilverfahren\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        ";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "color", array())) {
            // line 15
            echo "            ";
            $context["style"] = (("assets/scss/theme-" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "color", array())) . ".scss");
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            ";
            $context["style"] = "assets/scss/theme-blue.scss";
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => ($context["style"] ?? null)));
        echo "\" rel=\"stylesheet\">
    </head>
    <body id=\"";
        // line 21
        echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), array("studly", $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array())));
        echo "\" data-spy=\"scroll\">
        
        ";
        // line 24
        echo "        <section id=\"layout-content\">
            ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "            ";
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 27
        echo "        </section>

        ";
        // line 30
        echo "        <script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/vendor/within-viewport/withinviewport.js", 1 => "assets/vendor/jquery/dist/jquery.js", 2 => "assets/vendor/jquery-ui/jquery-ui.js", 3 => "assets/vendor/within-viewport/jquery.withinviewport.js", 4 => "assets/vendor/tether/dist/js/tether.js", 5 => "assets/vendor/bootstrap-backward/dist/js/bootstrap.js", 6 => "assets/vendor/simpler-sidebar/dist/jquery.simpler-sidebar.js", 7 => "assets/vendor/Stickyfill/dist/stickyfill.js", 8 => "assets/vendor/bootstrap-validator/dist/validator.js", 9 => "assets/vendor/leaflet/dist/leaflet.js", 10 => "assets/javascript/app.js"));
        // line 43
        echo "\"></script>
        
        ";
        // line 45
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 46
        echo "        
        ";
        // line 48
        echo "        <script>
            L.Icon.Default.imagePath = \"/themes/";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "dirname", array()), "html", null, true);
        echo "/assets/vendor/leaflet/dist/images/\";
        </script>
        ";
        // line 51
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 52
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  108 => 51,  103 => 49,  100 => 48,  97 => 46,  94 => 45,  90 => 43,  87 => 30,  83 => 27,  80 => 26,  76 => 25,  73 => 24,  68 => 21,  62 => 19,  59 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  44 => 13,  35 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.theme.site_name }} - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Pascal Garber\">
        <meta http-equiv=\"language\" content=\"deutsch, de\">
        <meta name=\"Keywords\" content=\"Viola,Garber,Tierheilpraxis,Tierheilpraktikerin,Cuxhaven,Klassische Homöopathie,Homöopathie,Phytotherapie,Akupunktur,Praxis,Hausbesuch,Naturheilverfahren\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        {% styles %}
        {% if this.theme.color %}
            {% set style = 'assets/scss/theme-' ~ this.theme.color ~ '.scss' %}
        {% else %}
            {% set style = 'assets/scss/theme-blue.scss' %}
        {% endif %}
        <link href=\"{{ [style,]|theme }}\" rel=\"stylesheet\">
    </head>
    <body id=\"{{ str_studly(this.page.title) }}\" data-spy=\"scroll\">
        
        {# Content #}
        <section id=\"layout-content\">
            {% partial 'navigation' %}
            {% page %}
        </section>

        {# Scripts #}
        <script src=\"{{ [
            'assets/vendor/within-viewport/withinviewport.js',
            'assets/vendor/jquery/dist/jquery.js',
            'assets/vendor/jquery-ui/jquery-ui.js',
            'assets/vendor/within-viewport/jquery.withinviewport.js',
            'assets/vendor/tether/dist/js/tether.js',
            'assets/vendor/bootstrap-backward/dist/js/bootstrap.js',
            'assets/vendor/simpler-sidebar/dist/jquery.simpler-sidebar.js',
            'assets/vendor/Stickyfill/dist/stickyfill.js',
            'assets/vendor/bootstrap-validator/dist/validator.js',
            'assets/vendor/leaflet/dist/leaflet.js',
            
            'assets/javascript/app.js',
        ]|theme }}\"></script>
        
        {% framework %}
        
        {# More theme variables #}
        <script>
            L.Icon.Default.imagePath = \"/themes/{{this.theme.dirname}}/assets/vendor/leaflet/dist/images/\";
        </script>
        {% scripts %}

    </body>
</html>", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/layouts/default.htm", "");
    }
}
