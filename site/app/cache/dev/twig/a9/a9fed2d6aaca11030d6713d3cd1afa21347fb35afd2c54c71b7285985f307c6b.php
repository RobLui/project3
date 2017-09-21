<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_cdaa10f2ad9179e08d91f9db9d936d6d4a86789520697690eb2389971bb33a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84654d47013b69faab7441f40366b15d8877bfb16b741fe56a2fd551c5c8c26c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84654d47013b69faab7441f40366b15d8877bfb16b741fe56a2fd551c5c8c26c->enter($__internal_84654d47013b69faab7441f40366b15d8877bfb16b741fe56a2fd551c5c8c26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_84654d47013b69faab7441f40366b15d8877bfb16b741fe56a2fd551c5c8c26c->leave($__internal_84654d47013b69faab7441f40366b15d8877bfb16b741fe56a2fd551c5c8c26c_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_00149c815befb01772f7eee91dd9a51d0cb211f960f08b47a81931783a5f160d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00149c815befb01772f7eee91dd9a51d0cb211f960f08b47a81931783a5f160d->enter($__internal_00149c815befb01772f7eee91dd9a51d0cb211f960f08b47a81931783a5f160d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_00149c815befb01772f7eee91dd9a51d0cb211f960f08b47a81931783a5f160d->leave($__internal_00149c815befb01772f7eee91dd9a51d0cb211f960f08b47a81931783a5f160d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/Users/louise/documents/Symfony/Project3/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
