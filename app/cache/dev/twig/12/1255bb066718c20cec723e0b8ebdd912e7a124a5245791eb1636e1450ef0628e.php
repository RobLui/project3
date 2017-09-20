<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_db08eff9a074b0d8f8a8c963dcbbc39460753cf056d1cf473a1ffd0bbdfe15e0 extends Twig_Template
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
        $__internal_e561873c60be6b42af4e29a9f05d8e0f30e76e36743660ff847473b8534c5bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e561873c60be6b42af4e29a9f05d8e0f30e76e36743660ff847473b8534c5bad->enter($__internal_e561873c60be6b42af4e29a9f05d8e0f30e76e36743660ff847473b8534c5bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e561873c60be6b42af4e29a9f05d8e0f30e76e36743660ff847473b8534c5bad->leave($__internal_e561873c60be6b42af4e29a9f05d8e0f30e76e36743660ff847473b8534c5bad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b9a6803d79b94b0a7367fbf5c9b2e07e8e6642576141e79a411dbdc250f40e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9a6803d79b94b0a7367fbf5c9b2e07e8e6642576141e79a411dbdc250f40e4->enter($__internal_3b9a6803d79b94b0a7367fbf5c9b2e07e8e6642576141e79a411dbdc250f40e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b9a6803d79b94b0a7367fbf5c9b2e07e8e6642576141e79a411dbdc250f40e4->leave($__internal_3b9a6803d79b94b0a7367fbf5c9b2e07e8e6642576141e79a411dbdc250f40e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33bca5f7eb4bed8dd2fb504d6c5ccc3ca624045af754585294256a1dc3c49c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bca5f7eb4bed8dd2fb504d6c5ccc3ca624045af754585294256a1dc3c49c5c->enter($__internal_33bca5f7eb4bed8dd2fb504d6c5ccc3ca624045af754585294256a1dc3c49c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33bca5f7eb4bed8dd2fb504d6c5ccc3ca624045af754585294256a1dc3c49c5c->leave($__internal_33bca5f7eb4bed8dd2fb504d6c5ccc3ca624045af754585294256a1dc3c49c5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77bc6d0693e8d8e15e2081c937d8fb6e18c79d7d528b4c73d88ba78f5483e9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bc6d0693e8d8e15e2081c937d8fb6e18c79d7d528b4c73d88ba78f5483e9fd->enter($__internal_77bc6d0693e8d8e15e2081c937d8fb6e18c79d7d528b4c73d88ba78f5483e9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_77bc6d0693e8d8e15e2081c937d8fb6e18c79d7d528b4c73d88ba78f5483e9fd->leave($__internal_77bc6d0693e8d8e15e2081c937d8fb6e18c79d7d528b4c73d88ba78f5483e9fd_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/louise/documents/school/project3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
