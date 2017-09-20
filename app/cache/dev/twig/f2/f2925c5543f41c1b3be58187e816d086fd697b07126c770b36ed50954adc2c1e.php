<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_480e5953a5f71d4915a37b9f6b5af83eb754f05a07d995924761d8afc7718395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28f10aaae20d01c5dc15c5882bc3e8198ac6fdc17ace513517748cfe03d291d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f10aaae20d01c5dc15c5882bc3e8198ac6fdc17ace513517748cfe03d291d2->enter($__internal_28f10aaae20d01c5dc15c5882bc3e8198ac6fdc17ace513517748cfe03d291d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f10aaae20d01c5dc15c5882bc3e8198ac6fdc17ace513517748cfe03d291d2->leave($__internal_28f10aaae20d01c5dc15c5882bc3e8198ac6fdc17ace513517748cfe03d291d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fee6577a67f540c13f79d2eb8dcc7473096f5dce251ae29d1c84aef533405350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee6577a67f540c13f79d2eb8dcc7473096f5dce251ae29d1c84aef533405350->enter($__internal_fee6577a67f540c13f79d2eb8dcc7473096f5dce251ae29d1c84aef533405350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fee6577a67f540c13f79d2eb8dcc7473096f5dce251ae29d1c84aef533405350->leave($__internal_fee6577a67f540c13f79d2eb8dcc7473096f5dce251ae29d1c84aef533405350_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca6f6e951423b52757c4fe131efd36cb56beb4d37669c654d2358ba866fee719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6f6e951423b52757c4fe131efd36cb56beb4d37669c654d2358ba866fee719->enter($__internal_ca6f6e951423b52757c4fe131efd36cb56beb4d37669c654d2358ba866fee719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca6f6e951423b52757c4fe131efd36cb56beb4d37669c654d2358ba866fee719->leave($__internal_ca6f6e951423b52757c4fe131efd36cb56beb4d37669c654d2358ba866fee719_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23e002f73bb19a795189504a73a17eaa68ba0da22c9bb4a6f0d8833f825c4e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e002f73bb19a795189504a73a17eaa68ba0da22c9bb4a6f0d8833f825c4e97->enter($__internal_23e002f73bb19a795189504a73a17eaa68ba0da22c9bb4a6f0d8833f825c4e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_23e002f73bb19a795189504a73a17eaa68ba0da22c9bb4a6f0d8833f825c4e97->leave($__internal_23e002f73bb19a795189504a73a17eaa68ba0da22c9bb4a6f0d8833f825c4e97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/louise/documents/Symfony/Project3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
