<?php

/* @Project3Website/layout.html.twig */
class __TwigTemplate_73c0765c973b72a5241d4cc0354216fec34fcc8db3aa3c2ebbbe07fcdc1dade7 extends Twig_Template
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
    }

    // line 59
    public function block_login($context, array $blocks = array())
    {
        // line 60
        echo "                ";
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 61
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "user", array()), "html", null, true);
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
    }

    // line 81
    public function block_jumbotron($context, array $blocks = array())
    {
    }

    // line 84
    public function block_content($context, array $blocks = array())
    {
        // line 85
        echo "    ";
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
        return array (  256 => 85,  253 => 84,  248 => 81,  244 => 77,  238 => 75,  227 => 67,  221 => 64,  216 => 61,  213 => 60,  210 => 59,  204 => 145,  202 => 124,  200 => 123,  198 => 122,  196 => 121,  194 => 120,  192 => 119,  190 => 118,  188 => 117,  186 => 116,  184 => 115,  182 => 114,  180 => 113,  178 => 112,  176 => 111,  174 => 110,  172 => 109,  170 => 108,  168 => 107,  166 => 106,  164 => 105,  162 => 104,  160 => 103,  158 => 102,  156 => 101,  154 => 100,  152 => 99,  150 => 98,  148 => 97,  146 => 96,  144 => 95,  142 => 94,  140 => 93,  138 => 92,  132 => 88,  128 => 86,  126 => 84,  123 => 83,  121 => 81,  116 => 78,  114 => 59,  111 => 58,  100 => 56,  96 => 55,  70 => 32,  66 => 31,  58 => 26,  54 => 25,  50 => 24,  40 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Project3Website/layout.html.twig", "/Users/louise/documents/school/project3/site/src/Project3/WebsiteBundle/Resources/views/layout.html.twig");
    }
}
