<?php

/* /home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/contactForm/default.htm */
class __TwigTemplate_ac491f0494a68c4f836c67750565700af8758032508843262c8702f772edeb83 extends Twig_Template
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
        echo "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"csontactForm\" role=\"form\"
      data-request=\"onMailSent\"
      data-request-update=\"'contactForm/confirm': '.confirm-container'\"
      data-request-data=\"receivermail: '";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "email_address", array()), "html", null, true);
        echo "', receivername:'";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "company_name", array()), "html", null, true);
        echo "', succeesstext: '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "contact_succeess_text", array()), "html", null, true);
        echo "', receiverregard: '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "contact_regard", array()), "html", null, true);
        echo "', mailtemplate: '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "mail_template", array()), "html", null, true);
        echo "'\"
      >
    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" name=\"name\" required placeholder=\"Name\">
        </div>
        <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" name=\"email\" required placeholder=\"Email\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" name=\"regard\" required placeholder=\"Regard\">
        </div>
        <fieldset class=\"form-group\">
            <textarea class=\"form-control\" name=\"message\" rows=\"6\" required placeholder=\"Your message to us\"></textarea>
        </fieldset>
        ";
        // line 22
        if ($this->getAttribute(($context["__SELF__"] ?? null), "enableCaptcha", array())) {
            // line 23
            echo "            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "siteKey", array()), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 27
        echo "        <div class=\"d-flex align-items-end flex-column\">
            <button type=\"submit\" class=\"btn\">Send</button>
        </div> 
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/contactForm/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 27,  58 => 24,  55 => 23,  53 => 22,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"csontactForm\" role=\"form\"
      data-request=\"onMailSent\"
      data-request-update=\"'contactForm/confirm': '.confirm-container'\"
      data-request-data=\"receivermail: '{{this.theme.email_address}}', receivername:'{{this.theme.company_name}}', succeesstext: '{{this.theme.contact_succeess_text}}', receiverregard: '{{this.theme.contact_regard}}', mailtemplate: '{{this.theme.mail_template}}'\"
      >
    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" name=\"name\" required placeholder=\"Name\">
        </div>
        <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" name=\"email\" required placeholder=\"Email\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" name=\"regard\" required placeholder=\"Regard\">
        </div>
        <fieldset class=\"form-group\">
            <textarea class=\"form-control\" name=\"message\" rows=\"6\" required placeholder=\"Your message to us\"></textarea>
        </fieldset>
        {% if __SELF__.enableCaptcha %}
            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.siteKey }}\"></div>
            </div>
        {% endif %}
        <div class=\"d-flex align-items-end flex-column\">
            <button type=\"submit\" class=\"btn\">Send</button>
        </div> 
    </div>
</form>", "/home/michal/webdev/dodgydoggos_october/themes/jumplink-viola/partials/contactForm/default.htm", "");
    }
}
