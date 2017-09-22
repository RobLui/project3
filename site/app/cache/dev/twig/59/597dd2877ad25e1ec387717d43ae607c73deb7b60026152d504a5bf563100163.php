<?php

/* @Project3Website/Security/login_form.html.twig */
class __TwigTemplate_6aabdd0675e16a7126457e5d3a3b88de7846f488d048741e895932b7a4532e7e extends Twig_Template
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
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 2
            echo "    <h3>Already logged in!</h3>
";
        } else {
            // line 4
            echo "    ";
            if (($context["error"] ?? null)) {
                // line 5
                echo "        <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
                echo "</div>
    ";
            }
            // line 7
            echo "    <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project3_security_login");
            echo "\" method=\"POST\" role=\"form\" class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">
        <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  50 => 17,  42 => 9,  34 => 7,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Project3Website/Security/login_form.html.twig", "/Users/louise/documents/school/project3/site/src/Project3/WebsiteBundle/Resources/views/Security/login_form.html.twig");
    }
}
