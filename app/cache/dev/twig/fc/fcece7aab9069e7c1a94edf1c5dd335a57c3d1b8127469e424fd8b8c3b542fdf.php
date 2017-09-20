<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_da019410f838da827289bdd05ca33669f69bf5fbd62dd8519df0a6f8786ea04a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7627ec2b9d41820a9213a28991891eab56e40342cf31cdcb9d472473f9ae7f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7627ec2b9d41820a9213a28991891eab56e40342cf31cdcb9d472473f9ae7f07->enter($__internal_7627ec2b9d41820a9213a28991891eab56e40342cf31cdcb9d472473f9ae7f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_7627ec2b9d41820a9213a28991891eab56e40342cf31cdcb9d472473f9ae7f07->leave($__internal_7627ec2b9d41820a9213a28991891eab56e40342cf31cdcb9d472473f9ae7f07_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_350430f300ec442cba4a862db1fd9834edc0005aea2f3fe21c9f6418b2cf11f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350430f300ec442cba4a862db1fd9834edc0005aea2f3fe21c9f6418b2cf11f3->enter($__internal_350430f300ec442cba4a862db1fd9834edc0005aea2f3fe21c9f6418b2cf11f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_350430f300ec442cba4a862db1fd9834edc0005aea2f3fe21c9f6418b2cf11f3->leave($__internal_350430f300ec442cba4a862db1fd9834edc0005aea2f3fe21c9f6418b2cf11f3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/Users/louise/documents/Symfony/Project3/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
