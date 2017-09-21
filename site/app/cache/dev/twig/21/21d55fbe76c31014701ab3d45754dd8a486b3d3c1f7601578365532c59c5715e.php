<?php

/* @Project3Website/Security/login.html.twig */
class __TwigTemplate_a070e38e9514d40e356dac45f36a46c6263e7efd546eb52f2fe9bbf123f3f002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Project3Website/layout.html.twig", "@Project3Website/Security/login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Project3Website/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_336bb83cee8cc7c0f9ee2d7362a94ed0b2e4d60132884b36c4c97ee78d3b840f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336bb83cee8cc7c0f9ee2d7362a94ed0b2e4d60132884b36c4c97ee78d3b840f->enter($__internal_336bb83cee8cc7c0f9ee2d7362a94ed0b2e4d60132884b36c4c97ee78d3b840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Project3Website/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336bb83cee8cc7c0f9ee2d7362a94ed0b2e4d60132884b36c4c97ee78d3b840f->leave($__internal_336bb83cee8cc7c0f9ee2d7362a94ed0b2e4d60132884b36c4c97ee78d3b840f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9607fb2f180fd4c9180280fa2829ac111de5fbac12ae8b2776645cbcea1fbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9607fb2f180fd4c9180280fa2829ac111de5fbac12ae8b2776645cbcea1fbd5->enter($__internal_c9607fb2f180fd4c9180280fa2829ac111de5fbac12ae8b2776645cbcea1fbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("Project3WebsiteBundle:Security:loginForm"));
        echo "
        </div>
    </div>
";
        
        $__internal_c9607fb2f180fd4c9180280fa2829ac111de5fbac12ae8b2776645cbcea1fbd5->leave($__internal_c9607fb2f180fd4c9180280fa2829ac111de5fbac12ae8b2776645cbcea1fbd5_prof);

    }

    public function getTemplateName()
    {
        return "@Project3Website/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@Project3Website/layout.html.twig\" %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ render(controller(\"Project3WebsiteBundle:Security:loginForm\")) }}
        </div>
    </div>
{% endblock %}", "@Project3Website/Security/login.html.twig", "/Users/louise/documents/school/project3/src/Project3/WebsiteBundle/Resources/views/Security/login.html.twig");
    }
}
