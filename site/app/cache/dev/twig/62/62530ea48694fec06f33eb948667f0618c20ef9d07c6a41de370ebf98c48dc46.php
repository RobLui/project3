<?php

/* @Project3Website/Security/login.html.twig */
class __TwigTemplate_92d6d749490903feb37bb6e75f9e9f6fcdaaef06f69fa0907590f1e831b5d772 extends Twig_Template
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
        $__internal_da4f5892ce1a90f14ba163210c4d1223116683dfee2ec9c84807c27ef1c79435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4f5892ce1a90f14ba163210c4d1223116683dfee2ec9c84807c27ef1c79435->enter($__internal_da4f5892ce1a90f14ba163210c4d1223116683dfee2ec9c84807c27ef1c79435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Project3Website/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4f5892ce1a90f14ba163210c4d1223116683dfee2ec9c84807c27ef1c79435->leave($__internal_da4f5892ce1a90f14ba163210c4d1223116683dfee2ec9c84807c27ef1c79435_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b60685188855e0a98eca092743c0db73ff6fdcfc20b1105a9fcdfad26284da43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60685188855e0a98eca092743c0db73ff6fdcfc20b1105a9fcdfad26284da43->enter($__internal_b60685188855e0a98eca092743c0db73ff6fdcfc20b1105a9fcdfad26284da43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b60685188855e0a98eca092743c0db73ff6fdcfc20b1105a9fcdfad26284da43->leave($__internal_b60685188855e0a98eca092743c0db73ff6fdcfc20b1105a9fcdfad26284da43_prof);

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
{% endblock %}", "@Project3Website/Security/login.html.twig", "/Users/louise/documents/Symfony/Project3/src/Project3/WebsiteBundle/Resources/views/Security/login.html.twig");
    }
}
