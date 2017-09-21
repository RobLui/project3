<?php

/* @Project3Website/Security/login_form.html.twig */
class __TwigTemplate_790a495f35f44db49dfa868a8fb0d1941907b0c85a0dfc25638677922aea0e1b extends Twig_Template
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
        $__internal_5d231916711c979cb673059cd22ae237572160d14f206ceb3c62dfbdb7b7a9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d231916711c979cb673059cd22ae237572160d14f206ceb3c62dfbdb7b7a9ae->enter($__internal_5d231916711c979cb673059cd22ae237572160d14f206ceb3c62dfbdb7b7a9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Project3Website/Security/login_form.html.twig"));

        // line 1
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "    <h3>Already logged in!</h3>
";
        } else {
            // line 4
            echo "    ";
            if (($context["error"] ?? $this->getContext($context, "error"))) {
                // line 5
                echo "        <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
    ";
            }
            // line 7
            echo "    <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project3_security_login");
            echo "\" method=\"POST\" role=\"form\" class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\">
        <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "\" placeholder=\"Username or e-mail\"/>
        </div>
        <div class=\"form-group\">
            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\"/>
        </div>
        ";
            // line 17
            echo "        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
    </form>
";
        }
        
        $__internal_5d231916711c979cb673059cd22ae237572160d14f206ceb3c62dfbdb7b7a9ae->leave($__internal_5d231916711c979cb673059cd22ae237572160d14f206ceb3c62dfbdb7b7a9ae_prof);

    }

    public function getTemplateName()
    {
        return "@Project3Website/Security/login_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  45 => 9,  37 => 7,  31 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user %}
    <h3>Already logged in!</h3>
{% else %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <form action=\"{{ path('project3_security_login') }}\" method=\"POST\" role=\"form\" class=\"{{ class }}\">
        <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Username or e-mail\"/>
        </div>
        <div class=\"form-group\">
            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\"/>
        </div>
        {#
        <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('project3_website_homepage') }}\" />
        #}
        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
    </form>
{% endif %}", "@Project3Website/Security/login_form.html.twig", "/Users/louise/documents/school/project3/src/Project3/WebsiteBundle/Resources/views/Security/login_form.html.twig");
    }
}
