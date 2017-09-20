<?php

/* Project3WebsiteBundle:Default:index.html.twig */
class __TwigTemplate_fa1c3109afad5660f9892e3ed377310c20726b867eed9050990f271d431a2ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Project3Website/layout.html.twig", "Project3WebsiteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Project3Website/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6825390fb9979fed1c839224bc2d6b2404a1b8f651ce4912589e2fa4a92d6f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6825390fb9979fed1c839224bc2d6b2404a1b8f651ce4912589e2fa4a92d6f08->enter($__internal_6825390fb9979fed1c839224bc2d6b2404a1b8f651ce4912589e2fa4a92d6f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Project3WebsiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6825390fb9979fed1c839224bc2d6b2404a1b8f651ce4912589e2fa4a92d6f08->leave($__internal_6825390fb9979fed1c839224bc2d6b2404a1b8f651ce4912589e2fa4a92d6f08_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_4f56637f65fa3103b0ef39416333e510287a5b7b6bb46b67f7658174e601ad8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f56637f65fa3103b0ef39416333e510287a5b7b6bb46b67f7658174e601ad8a->enter($__internal_4f56637f65fa3103b0ef39416333e510287a5b7b6bb46b67f7658174e601ad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 4
        echo "    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!--
    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Project3 WIKI</h1>
            <p>Login to continue...</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Click here</a></p>
        </div>
    </div>
    -->
";
        
        $__internal_4f56637f65fa3103b0ef39416333e510287a5b7b6bb46b67f7658174e601ad8a->leave($__internal_4f56637f65fa3103b0ef39416333e510287a5b7b6bb46b67f7658174e601ad8a_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_319c5f89a512993c12613cfe314aa1bf211fe735c39c05aa53cd638592cf8041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319c5f89a512993c12613cfe314aa1bf211fe735c39c05aa53cd638592cf8041->enter($__internal_319c5f89a512993c12613cfe314aa1bf211fe735c39c05aa53cd638592cf8041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    ";
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
        </div>
    ";
        }
        
        $__internal_319c5f89a512993c12613cfe314aa1bf211fe735c39c05aa53cd638592cf8041->leave($__internal_319c5f89a512993c12613cfe314aa1bf211fe735c39c05aa53cd638592cf8041_prof);

    }

    public function getTemplateName()
    {
        return "Project3WebsiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  67 => 18,  64 => 17,  58 => 16,  41 => 4,  35 => 3,  11 => 1,);
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

{% block jumbotron %}
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!--
    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Project3 WIKI</h1>
            <p>Login to continue...</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Click here</a></p>
        </div>
    </div>
    -->
{% endblock jumbotron %}

{% block content %}
    {% if not app.user %}
    {% else %}
        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
        </div>
    {% endif %}
{% endblock content %}
", "Project3WebsiteBundle:Default:index.html.twig", "/Users/louise/documents/Symfony/Project3/src/Project3/WebsiteBundle/Resources/views/Default/index.html.twig");
    }
}
