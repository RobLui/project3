<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b221db46e78a0e98ebf7d4854a05fd08d9c6f9d2bb23820d5a957a9588fdd0dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f42d3b2b619d340796692e770a50e02cbc17f273dc1618d762c2170abbc5e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f42d3b2b619d340796692e770a50e02cbc17f273dc1618d762c2170abbc5e84->enter($__internal_6f42d3b2b619d340796692e770a50e02cbc17f273dc1618d762c2170abbc5e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f42d3b2b619d340796692e770a50e02cbc17f273dc1618d762c2170abbc5e84->leave($__internal_6f42d3b2b619d340796692e770a50e02cbc17f273dc1618d762c2170abbc5e84_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6b8c27e7b57b37046c8b88225b78cf84129ce937942cb11c6e2389805d4667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b8c27e7b57b37046c8b88225b78cf84129ce937942cb11c6e2389805d4667d->enter($__internal_c6b8c27e7b57b37046c8b88225b78cf84129ce937942cb11c6e2389805d4667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6b8c27e7b57b37046c8b88225b78cf84129ce937942cb11c6e2389805d4667d->leave($__internal_c6b8c27e7b57b37046c8b88225b78cf84129ce937942cb11c6e2389805d4667d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1b684ef54ee4302a7a9cd55144458481043be8da694b803a143d541eeef5acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b684ef54ee4302a7a9cd55144458481043be8da694b803a143d541eeef5acb->enter($__internal_b1b684ef54ee4302a7a9cd55144458481043be8da694b803a143d541eeef5acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1b684ef54ee4302a7a9cd55144458481043be8da694b803a143d541eeef5acb->leave($__internal_b1b684ef54ee4302a7a9cd55144458481043be8da694b803a143d541eeef5acb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1a1bc6a8a9b86245cf11d7b98055593f8dae5af9f36407fe0a2536219aa9fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a1bc6a8a9b86245cf11d7b98055593f8dae5af9f36407fe0a2536219aa9fe1->enter($__internal_e1a1bc6a8a9b86245cf11d7b98055593f8dae5af9f36407fe0a2536219aa9fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1a1bc6a8a9b86245cf11d7b98055593f8dae5af9f36407fe0a2536219aa9fe1->leave($__internal_e1a1bc6a8a9b86245cf11d7b98055593f8dae5af9f36407fe0a2536219aa9fe1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/louise/documents/Symfony/Project3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
