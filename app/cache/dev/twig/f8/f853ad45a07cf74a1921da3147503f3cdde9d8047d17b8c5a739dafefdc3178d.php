<?php

/* @Project3Website/layout.html.twig */
class __TwigTemplate_028d8690c8c46da48dde8f392cb8ce66ca89620104a098fe2a3b29ef41fa79ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4b933ea27a0df89d639a3d70e21f5612a7992765020736ea0e1384d1109ed47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b933ea27a0df89d639a3d70e21f5612a7992765020736ea0e1384d1109ed47->enter($__internal_a4b933ea27a0df89d639a3d70e21f5612a7992765020736ea0e1384d1109ed47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Project3Website/layout.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/project3website/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/project3website/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/project3website/css/main.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/project3website/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"googlebot\" content=\"noindex,nofollow\">
    <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/project3website/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/project3website/js/main.js"), "html", null, true);
        echo "\"></script>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css\" rel=\"stylesheet\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js\"></script>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/dataTables.bootstrap.css\" rel=\"stylesheet\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.js\"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Project3</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-left\">
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(_twig_default_filter($this->env->getExtension('Project3\WebsiteBundle\Twig\Extensions')->getGroups(), array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 56
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project3_website_group", array("slug" => $this->getAttribute($context["group"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </ul>
            ";
        // line 59
        $this->displayBlock('login', $context, $blocks);
        // line 78
        echo "        </div><!--/.navbar-collapse -->
    </div>
</nav>
";
        // line 81
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 83
        echo "<div class=\"container\" style=\"padding-top: 20px !important;\">
    ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "    <hr>
    <footer>
        <p>&copy; Project3 ";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </footer>
</div> <!-- /container -->
";
        // line 92
        echo "    ";
        // line 93
        echo "        ";
        // line 94
        echo "            ";
        // line 95
        echo "            ";
        // line 96
        echo "            ";
        // line 97
        echo "            ";
        // line 98
        echo "                ";
        // line 99
        echo "                ";
        // line 100
        echo "                    ";
        // line 101
        echo "                    ";
        // line 102
        echo "                ";
        // line 103
        echo "            ";
        // line 104
        echo "            ";
        // line 105
        echo "                ";
        // line 106
        echo "                ";
        // line 107
        echo "                    ";
        // line 108
        echo "                        ";
        // line 109
        echo "                            ";
        // line 110
        echo "                            ";
        // line 111
        echo "                            ";
        // line 112
        echo "                        ";
        // line 113
        echo "                    ";
        // line 114
        echo "                ";
        // line 115
        echo "            ";
        // line 116
        echo "            ";
        // line 117
        echo "        ";
        // line 118
        echo "        ";
        // line 119
        echo "        ";
        // line 120
        echo "    ";
        // line 121
        echo "    ";
        // line 122
        echo "        ";
        // line 123
        echo "    ";
        // line 124
        echo "    ";
        // line 145
        echo "</body>
</html>
";
        
        $__internal_a4b933ea27a0df89d639a3d70e21f5612a7992765020736ea0e1384d1109ed47->leave($__internal_a4b933ea27a0df89d639a3d70e21f5612a7992765020736ea0e1384d1109ed47_prof);

    }

    // line 59
    public function block_login($context, array $blocks = array())
    {
        $__internal_88256c48f8fc233482c70a684e4e6ca1f4f9ef2aff43d4f6a7afb56c14f71730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88256c48f8fc233482c70a684e4e6ca1f4f9ef2aff43d4f6a7afb56c14f71730->enter($__internal_88256c48f8fc233482c70a684e4e6ca1f4f9ef2aff43d4f6a7afb56c14f71730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 60
        echo "                ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 61
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project3_security_logout");
            echo "\">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"navbar-form navbar-right\">
                        <select id=\"quicksearch\" class=\"form-control\" style=\"min-width: 200px;\"></select>
                    </form>
                ";
        } else {
            // line 75
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("Project3WebsiteBundle:Security:loginForm", array("class" => "navbar-form navbar-right")));
            echo "
                ";
        }
        // line 77
        echo "            ";
        
        $__internal_88256c48f8fc233482c70a684e4e6ca1f4f9ef2aff43d4f6a7afb56c14f71730->leave($__internal_88256c48f8fc233482c70a684e4e6ca1f4f9ef2aff43d4f6a7afb56c14f71730_prof);

    }

    // line 81
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_4d295fa7bd5930f3bcd241f75e95a3e7dc6e4ac2138a2b8abbd198a28dfebbfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d295fa7bd5930f3bcd241f75e95a3e7dc6e4ac2138a2b8abbd198a28dfebbfe->enter($__internal_4d295fa7bd5930f3bcd241f75e95a3e7dc6e4ac2138a2b8abbd198a28dfebbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        
        $__internal_4d295fa7bd5930f3bcd241f75e95a3e7dc6e4ac2138a2b8abbd198a28dfebbfe->leave($__internal_4d295fa7bd5930f3bcd241f75e95a3e7dc6e4ac2138a2b8abbd198a28dfebbfe_prof);

    }

    // line 84
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9efbbae6f9786a46c9f8351a3874d245813009c6dee86a188317c39f9308367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9efbbae6f9786a46c9f8351a3874d245813009c6dee86a188317c39f9308367->enter($__internal_b9efbbae6f9786a46c9f8351a3874d245813009c6dee86a188317c39f9308367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 85
        echo "    ";
        
        $__internal_b9efbbae6f9786a46c9f8351a3874d245813009c6dee86a188317c39f9308367->leave($__internal_b9efbbae6f9786a46c9f8351a3874d245813009c6dee86a188317c39f9308367_prof);

    }

    public function getTemplateName()
    {
        return "@Project3Website/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 85,  271 => 84,  260 => 81,  253 => 77,  247 => 75,  236 => 67,  230 => 64,  225 => 61,  222 => 60,  216 => 59,  207 => 145,  205 => 124,  203 => 123,  201 => 122,  199 => 121,  197 => 120,  195 => 119,  193 => 118,  191 => 117,  189 => 116,  187 => 115,  185 => 114,  183 => 113,  181 => 112,  179 => 111,  177 => 110,  175 => 109,  173 => 108,  171 => 107,  169 => 106,  167 => 105,  165 => 104,  163 => 103,  161 => 102,  159 => 101,  157 => 100,  155 => 99,  153 => 98,  151 => 97,  149 => 96,  147 => 95,  145 => 94,  143 => 93,  141 => 92,  135 => 88,  131 => 86,  129 => 84,  126 => 83,  124 => 81,  119 => 78,  117 => 59,  114 => 58,  103 => 56,  99 => 55,  73 => 32,  69 => 31,  61 => 26,  57 => 25,  53 => 24,  43 => 17,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/project3website/css/bootstrap.min.css') }}\">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/project3website/css/bootstrap-theme.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/project3website/css/main.css') }}\">
    <script src=\"{{ asset('bundles/project3website/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}\"></script>
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"googlebot\" content=\"noindex,nofollow\">
    <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
    <script src=\"{{ asset('bundles/project3website/js/vendor/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/project3website/js/main.js') }}\"></script>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css\" rel=\"stylesheet\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js\"></script>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/dataTables.bootstrap.css\" rel=\"stylesheet\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.js\"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Project3</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-left\">
                {% for group in get_groups()|default({}) %}
                    <li><a href=\"{{ path('project3_website_group',{ slug: group.slug }) }}\">{{ group }}</a></li>
                {% endfor %}
            </ul>
            {% block login %}
                {% if app.user %}
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ app.user }} <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('project3_security_logout') }}\">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"navbar-form navbar-right\">
                        <select id=\"quicksearch\" class=\"form-control\" style=\"min-width: 200px;\"></select>
                    </form>
                {% else %}
                    {{ render(controller(\"Project3WebsiteBundle:Security:loginForm\", { class: \"navbar-form navbar-right\" })) }}
                {% endif %}
            {% endblock login %}
        </div><!--/.navbar-collapse -->
    </div>
</nav>
{% block jumbotron %}
{% endblock jumbotron %}
<div class=\"container\" style=\"padding-top: 20px !important;\">
    {% block content %}
    {% endblock content %}
    <hr>
    <footer>
        <p>&copy; Project3 {{ 'now'|date('Y') }}</p>
    </footer>
</div> <!-- /container -->
{#<script>#}
    {#\$(\"#quicksearch\").select2({#}
        {#ajax: {#}
            {#url: \"{{ path(\"project3_ajax_dummys\") }}\",#}
            {#dataType: 'json',#}
            {#delay: 250,#}
            {#data: function (params) {#}
                {#console.log(params);#}
                {#return {#}
                    {#q: params.term, // search term#}
                    {#page: params.page#}
                {#};#}
            {#},#}
            {#processResults: function (data, params) {#}
                {#console.log(data);#}
                {#return {#}
                    {#results: \$.map(data, function (item, key) {#}
                        {#return {#}
                            {#text: item,#}
                            {#slug: item,#}
                            {#id: key#}
                        {#}#}
                    {#})#}
                {#}#}
            {#},#}
            {#cache: false#}
        {#},#}
        {#minimumInputLength: 1,#}
        {#placeholder: \"Quick Search\",#}
    {#});#}
    {#\$(document).on('change', '#quicksearch', function (element) {#}
        {#top.location.href = \"{{ path('project3_website_dummy') }}\" + \"/\" + \$(this).val();#}
    {#});#}
    {#\$('.dataTable').DataTable({});#}
{#</script>#}
{#
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
#}
</body>
</html>
", "@Project3Website/layout.html.twig", "/Users/louise/documents/Symfony/Project3/src/Project3/WebsiteBundle/Resources/views/layout.html.twig");
    }
}
