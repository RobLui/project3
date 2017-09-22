<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_eafcb26e9adf07d080da049b26df70742d0b944dff0f3f4f7f122a43c973c128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
        var elem = this.parentNode;
        if (elem.style.display == 'none') {
            document.getElementById('sfToolbarMainContent-";
        // line 6
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "').style.display = 'none';
            document.getElementById('sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "').style.display = 'none';
            elem.style.display = 'block';
        } else {
            document.getElementById('sfToolbarMainContent-";
        // line 10
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "').style.display = 'block';
            document.getElementById('sfToolbarClearer-";
        // line 11
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "').style.display = 'block';
            elem.style.display = 'none'
        }

        Sfjs.setPreference('toolbar/displayState', 'block');
    \">
        ";
        // line 17
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<style>
    ";
        // line 21
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => ($context["position"] ?? null), "floatable" => true));
        echo "
</style>
<div id=\"sfToolbarClearer-";
        // line 23
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\" style=\"clear: both; height: 36px;\"></div>

<div id=\"sfToolbarMainContent-";
        // line 25
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 27
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 27)->hasBlock("toolbar", $context)) {
                // line 28
                echo "            ";
                $__internal_1b18c7a46ba5cf2f64119387aeb858bf8abfabfc5d60e71d4eb3f88e8db23c81 = array("collector" => $this->getAttribute(                // line 29
($context["profile"] ?? null), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 30
($context["profiler_url"] ?? null), "token" => $this->getAttribute(                // line 31
($context["profile"] ?? null), "token", array()), "name" =>                 // line 32
$context["name"], "profiler_markup_version" =>                 // line 33
($context["profiler_markup_version"] ?? null));
                if (!is_array($__internal_1b18c7a46ba5cf2f64119387aeb858bf8abfabfc5d60e71d4eb3f88e8db23c81)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_1b18c7a46ba5cf2f64119387aeb858bf8abfabfc5d60e71d4eb3f88e8db23c81);
                // line 35
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 35)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 37
                echo "        ";
            }
            // line 38
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <a class=\"hide-button\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
        var p = this.parentNode;
        p.style.display = 'none';
        (p.previousElementSibling || p.previousSibling).style.display = 'none';
        document.getElementById('sfMiniToolbar-";
        // line 44
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "').style.display = 'block';
        Sfjs.setPreference('toolbar/displayState', 'none');
    \">
        ";
        // line 47
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 47,  136 => 44,  129 => 39,  115 => 38,  112 => 37,  106 => 35,  99 => 33,  98 => 32,  97 => 31,  96 => 30,  95 => 29,  93 => 28,  90 => 27,  73 => 26,  69 => 25,  64 => 23,  59 => 21,  52 => 17,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/toolbar.html.twig", "/Users/louise/documents/school/project3/site/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar.html.twig");
    }
}
