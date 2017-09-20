<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_454f457bbfc442bf8ec68e4c86f2152de443290b3c4c2031aeb12dfc29660d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5430662f399a0cc221c6ccf46cd35053dfb37061c60c3d56d0698e46d38e1015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5430662f399a0cc221c6ccf46cd35053dfb37061c60c3d56d0698e46d38e1015->enter($__internal_5430662f399a0cc221c6ccf46cd35053dfb37061c60c3d56d0698e46d38e1015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5430662f399a0cc221c6ccf46cd35053dfb37061c60c3d56d0698e46d38e1015->leave($__internal_5430662f399a0cc221c6ccf46cd35053dfb37061c60c3d56d0698e46d38e1015_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f28383dd564f0b648f7bf648938fd9f109887f8a37aa018c044efda4305a8758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28383dd564f0b648f7bf648938fd9f109887f8a37aa018c044efda4305a8758->enter($__internal_f28383dd564f0b648f7bf648938fd9f109887f8a37aa018c044efda4305a8758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter(($context["objectId"] ?? $this->getContext($context, "objectId")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f28383dd564f0b648f7bf648938fd9f109887f8a37aa018c044efda4305a8758->leave($__internal_f28383dd564f0b648f7bf648938fd9f109887f8a37aa018c044efda4305a8758_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_f4f7d22bb8bead4dbd37c8c47520811576104c3a694f59047f88a99161417ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f7d22bb8bead4dbd37c8c47520811576104c3a694f59047f88a99161417ecc->enter($__internal_f4f7d22bb8bead4dbd37c8c47520811576104c3a694f59047f88a99161417ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4f7d22bb8bead4dbd37c8c47520811576104c3a694f59047f88a99161417ecc->leave($__internal_f4f7d22bb8bead4dbd37c8c47520811576104c3a694f59047f88a99161417ecc_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_427b86ba5a7d6334802844b9791b2c2a8c874d081869f4998c88b063a16ab719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427b86ba5a7d6334802844b9791b2c2a8c874d081869f4998c88b063a16ab719->enter($__internal_427b86ba5a7d6334802844b9791b2c2a8c874d081869f4998c88b063a16ab719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_427b86ba5a7d6334802844b9791b2c2a8c874d081869f4998c88b063a16ab719->leave($__internal_427b86ba5a7d6334802844b9791b2c2a8c874d081869f4998c88b063a16ab719_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_f25ce7a188afa4e9d83aa07cd630b8547e312ac66ace1a50c11fac7f2202adeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25ce7a188afa4e9d83aa07cd630b8547e312ac66ace1a50c11fac7f2202adeb->enter($__internal_f25ce7a188afa4e9d83aa07cd630b8547e312ac66ace1a50c11fac7f2202adeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_f25ce7a188afa4e9d83aa07cd630b8547e312ac66ace1a50c11fac7f2202adeb->leave($__internal_f25ce7a188afa4e9d83aa07cd630b8547e312ac66ace1a50c11fac7f2202adeb_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_b22d50554c07423ba120f6de20a3570ee0b531f29b05fea15684a9e6f9ec72c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22d50554c07423ba120f6de20a3570ee0b531f29b05fea15684a9e6f9ec72c1->enter($__internal_b22d50554c07423ba120f6de20a3570ee0b531f29b05fea15684a9e6f9ec72c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_b22d50554c07423ba120f6de20a3570ee0b531f29b05fea15684a9e6f9ec72c1->leave($__internal_b22d50554c07423ba120f6de20a3570ee0b531f29b05fea15684a9e6f9ec72c1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  124 => 35,  112 => 31,  105 => 28,  99 => 27,  89 => 24,  83 => 23,  72 => 19,  66 => 17,  63 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 33,);
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

{% extends base_template %}

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/Users/louise/documents/Symfony/Project3/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
