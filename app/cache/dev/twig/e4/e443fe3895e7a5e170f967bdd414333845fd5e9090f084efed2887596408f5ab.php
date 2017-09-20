<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_e888cd19ca79d281defef9ce7fa5085aad65d6c4870038b2e9aab3c111ee7b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3111acf084491cb5b3d43e46d773df108f80c99adafb13c7631aa75421123fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3111acf084491cb5b3d43e46d773df108f80c99adafb13c7631aa75421123fd4->enter($__internal_3111acf084491cb5b3d43e46d773df108f80c99adafb13c7631aa75421123fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3111acf084491cb5b3d43e46d773df108f80c99adafb13c7631aa75421123fd4->leave($__internal_3111acf084491cb5b3d43e46d773df108f80c99adafb13c7631aa75421123fd4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/Users/louise/documents/Symfony/Project3/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
