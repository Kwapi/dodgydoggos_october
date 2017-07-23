<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/top_header.htm */
class __TwigTemplate_6cecde539f4f20f66e1f9479af6678ee6baf83a64057ce8a45b7a9b2346f6b1a extends Twig_Template
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
            $context["_slideshow"] = array("id" => 2, "name" => "Header", "created_at" => "2016-05-23 10:22:39", "updated_at" => "2016-05-23 10:52:46", "slides" => array(0 => array("id" => 4, "name" => "1", "description" => "<h1>Welcome</h1><p>Donec quis magna consectetur, semper felis vitae, finibus libero. Sed laoreet diam odio.</p>", "link" => "", "sort_order" => 4, "created_at" => "2016-05-23 10:52:10", "updated_at" => "2016-05-25 09:10:32", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => array("path" => $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/images/placeholders/header_1.jpg"))), 1 => array("id" => 5, "name" => "2", "description" => "", "link" => "", "sort_order" => 5, "created_at" => "2016-05-23 10:52:32", "updated_at" => "2016-05-23 10:52:32", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => array("path" => $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/images/placeholders/header_2.jpg"))), 2 => array("id" => 6, "name" => "3", "description" => "", "link" => "", "sort_order" => 6, "created_at" => "2016-05-23 10:52:42", "updated_at" => "2016-05-23 10:52:42", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => array("path" => $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/images/placeholders/header_3.jpg")))));
        } else {
            // line 61
            echo "    ";
            $context["_slideshow"] = $this->getAttribute(($context["slideshow"] ?? null), "slideshow", array());
        }
        // line 63
        echo "
<header id=\"top\" data-target=\"#top\">
    ";
        // line 65
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['slideshow'] = ($context["_slideshow"] ?? null)        ;
        $context['__cms_partial_params']['id'] = "carousel-top-header"        ;
        echo $this->env->getExtension('CMS')->partialFunction("slideshow"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "    <a class=\"icon-circle mx-auto\" href=\"";
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) != "home")) {
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        }
        echo "#about\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Weiter\">
        <i class=\"fa fa-chevron-circle-down\"></i>
    </a>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/top_header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 66,  35 => 65,  31 => 63,  27 => 61,  23 => 3,  21 => 2,  19 => 1,);
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
           \"id\":2,
           \"name\":\"Header\",
           \"created_at\":\"2016-05-23 10:22:39\",
           \"updated_at\":\"2016-05-23 10:52:46\",
           \"slides\":[
              {
                 \"id\":4,
                 \"name\":\"1\",
                 \"description\":\"<h1>Welcome<\\/h1><p>Donec quis magna consectetur, semper felis vitae, finibus libero. Sed laoreet diam odio.<\\/p>\",
                 \"link\":\"\",
                 \"sort_order\":4,
                 \"created_at\":\"2016-05-23 10:52:10\",
                 \"updated_at\":\"2016-05-25 09:10:32\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_1.jpg\" | theme
                 }
              },
              {
                 \"id\":5,
                 \"name\":\"2\",
                 \"description\":\"\",
                 \"link\":\"\",
                 \"sort_order\":5,
                 \"created_at\":\"2016-05-23 10:52:32\",
                 \"updated_at\":\"2016-05-23 10:52:32\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_2.jpg\" | theme
                 }
              },
              {
                 \"id\":6,
                 \"name\":\"3\",
                 \"description\":\"\",
                 \"link\":\"\",
                 \"sort_order\":6,
                 \"created_at\":\"2016-05-23 10:52:42\",
                 \"updated_at\":\"2016-05-23 10:52:42\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_3.jpg\" | theme
                 }
              }
           ]
        }
    %}
{% else %}
    {% set _slideshow = slideshow.slideshow %}
{% endif %}

<header id=\"top\" data-target=\"#top\">
    {% partial 'slideshow' slideshow=_slideshow id='carousel-top-header' %}
    <a class=\"icon-circle mx-auto\" href=\"{% if this.page.id != 'home' %}{{'home'|page}}{% endif %}#about\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Weiter\">
        <i class=\"fa fa-chevron-circle-down\"></i>
    </a>
</header>", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/top_header.htm", "");
    }
}
