<?php

/* TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_60c434e89c49a807429a36f34fa51151b9586dc32f0d56eceb872f4c4ce81bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb998b9a291c5312c8928cea1b5a68e771bee3dc150b531c2493c4624ccad52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb998b9a291c5312c8928cea1b5a68e771bee3dc150b531c2493c4624ccad52d->enter($__internal_eb998b9a291c5312c8928cea1b5a68e771bee3dc150b531c2493c4624ccad52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        
        $__internal_eb998b9a291c5312c8928cea1b5a68e771bee3dc150b531c2493c4624ccad52d->leave($__internal_eb998b9a291c5312c8928cea1b5a68e771bee3dc150b531c2493c4624ccad52d_prof);

    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_a5936ed861ac638f46de37984b65b497d22eeb3757ecdf3beb3a36acc8aa98f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5936ed861ac638f46de37984b65b497d22eeb3757ecdf3beb3a36acc8aa98f4->enter($__internal_a5936ed861ac638f46de37984b65b497d22eeb3757ecdf3beb3a36acc8aa98f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    <script type=\"text/javascript\">
    ";
        // line 7
        echo "        var CKEDITOR_BASEPATH = '";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basePath", array()) . "/") . ($context["base_path"] ?? $this->getContext($context, "base_path"))), "js", null, true);
        echo "';
    ";
        // line 9
        echo "    </script>

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["base_path"] ?? $this->getContext($context, "base_path")) . "ckeditor.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    ";
        // line 14
        echo "        ";
        $context["plugins"] = "";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["external_plugins"] ?? $this->getContext($context, "external_plugins")));
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
        foreach ($context['_seq'] as $context["name"] => $context["external_plugin"]) {
            // line 16
            echo "            CKEDITOR.plugins.addExternal('";
            echo $context["name"];
            echo "', '";
            echo ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basePath", array()) . $this->getAttribute($context["external_plugin"], "path", array()));
            echo "', '";
            echo $this->getAttribute($context["external_plugin"], "file", array());
            echo "');
            ";
            // line 17
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 18
                echo "                ";
                $context["plugins"] = (($context["plugins"] ?? $this->getContext($context, "plugins")) . ",");
                // line 19
                echo "            ";
            }
            // line 20
            echo "            ";
            $context["plugins"] = (($context["plugins"] ?? $this->getContext($context, "plugins")) . $context["name"]);
            // line 21
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['external_plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        var trsteelConfig = {
            ";
        // line 24
        if ( !(null === ($context["width"] ?? $this->getContext($context, "width")))) {
            // line 25
            echo "                width: '";
            echo ($context["width"] ?? $this->getContext($context, "width"));
            echo "',
            ";
        }
        // line 27
        echo "            ";
        if ((twig_length_filter($this->env, ($context["templates_files"] ?? $this->getContext($context, "templates_files"))) > 0)) {
            // line 28
            echo "                ";
            $context["templates_files_array"] = array();
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates_files"] ?? $this->getContext($context, "templates_files")));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 30
                echo "                    ";
                $context["templates_files_array"] = twig_array_merge(($context["templates_files_array"] ?? $this->getContext($context, "templates_files_array")), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["file"])));
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                templates_files: ";
            echo twig_jsonencode_filter(($context["templates_files_array"] ?? $this->getContext($context, "templates_files_array")));
            echo ",
            ";
        }
        // line 34
        echo "            ";
        if ( !(null === ($context["allowed_content"] ?? $this->getContext($context, "allowed_content")))) {
            // line 35
            echo "                allowedContent: ";
            if ((($context["allowed_content"] ?? $this->getContext($context, "allowed_content")) == "true")) {
                echo "true";
            } else {
                echo "'";
                echo ($context["allowed_content"] ?? $this->getContext($context, "allowed_content"));
                echo "'";
            }
            echo ",
            ";
        }
        // line 37
        echo "            ";
        if ( !(null === ($context["extra_allowed_content"] ?? $this->getContext($context, "extra_allowed_content")))) {
            // line 38
            echo "                extraAllowedContent: ";
            if ((($context["extra_allowed_content"] ?? $this->getContext($context, "extra_allowed_content")) == "true")) {
                echo "true";
            } else {
                echo "'";
                echo ($context["extra_allowed_content"] ?? $this->getContext($context, "extra_allowed_content"));
                echo "'";
            }
            echo ",
            ";
        }
        // line 40
        echo "            ";
        if ( !(null === ($context["templates_replace_content"] ?? $this->getContext($context, "templates_replace_content")))) {
            // line 41
            echo "                templates_replaceContent: ";
            echo ((($context["templates_replace_content"] ?? $this->getContext($context, "templates_replace_content"))) ? ("true") : ("false"));
            echo ",
            ";
        }
        // line 43
        echo "            ";
        if ( !(null === ($context["height"] ?? $this->getContext($context, "height")))) {
            // line 44
            echo "                height: '";
            echo ($context["height"] ?? $this->getContext($context, "height"));
            echo "',
            ";
        }
        // line 46
        echo "            ";
        if ( !(null === ($context["force_paste_as_plaintext"] ?? $this->getContext($context, "force_paste_as_plaintext")))) {
            // line 47
            echo "                forcePasteAsPlainText: ";
            echo ($context["force_paste_as_plaintext"] ?? $this->getContext($context, "force_paste_as_plaintext"));
            echo ",
            ";
        }
        // line 49
        echo "            ";
        if ( !(null === ($context["language"] ?? $this->getContext($context, "language")))) {
            // line 50
            echo "                language: '";
            echo ($context["language"] ?? $this->getContext($context, "language"));
            echo "',
            ";
        }
        // line 52
        echo "            ";
        if ( !(null === ($context["ui_color"] ?? $this->getContext($context, "ui_color")))) {
            // line 53
            echo "                uiColor: \"";
            echo ($context["ui_color"] ?? $this->getContext($context, "ui_color"));
            echo "\",
            ";
        }
        // line 55
        echo "            ";
        if ((($context["startup_outline_blocks"] ?? $this->getContext($context, "startup_outline_blocks")) == true)) {
            // line 56
            echo "                startupOutlineBlocks: ";
            echo ($context["startup_outline_blocks"] ?? $this->getContext($context, "startup_outline_blocks"));
            echo ",
            ";
        }
        // line 58
        echo "            ";
        if (($this->getAttribute(($context["filebrowser_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_browse_url"] ?? $this->getContext($context, "filebrowser_browse_url")), "route", array())))) {
            // line 59
            echo "                filebrowserBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["filebrowser_browse_url"] ?? $this->getContext($context, "filebrowser_browse_url")), "route", array()), $this->getAttribute(($context["filebrowser_browse_url"] ?? $this->getContext($context, "filebrowser_browse_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute(        // line 60
($context["filebrowser_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_browse_url"] ?? $this->getContext($context, "filebrowser_browse_url")), "url", array())))) {
            // line 61
            echo "                filebrowserBrowseUrl: '";
            echo $this->getAttribute(($context["filebrowser_browse_url"] ?? $this->getContext($context, "filebrowser_browse_url")), "url", array());
            echo "',
            ";
        }
        // line 63
        echo "            ";
        if (($this->getAttribute(($context["filebrowser_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_upload_url"] ?? $this->getContext($context, "filebrowser_upload_url")), "route", array())))) {
            // line 64
            echo "                filebrowserUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["filebrowser_upload_url"] ?? $this->getContext($context, "filebrowser_upload_url")), "route", array()), $this->getAttribute(($context["filebrowser_upload_url"] ?? $this->getContext($context, "filebrowser_upload_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute(        // line 65
($context["filebrowser_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_upload_url"] ?? $this->getContext($context, "filebrowser_upload_url")), "url", array())))) {
            // line 66
            echo "                filebrowserUploadUrl: '";
            echo $this->getAttribute(($context["filebrowser_upload_url"] ?? $this->getContext($context, "filebrowser_upload_url")), "url", array());
            echo "',
            ";
        }
        // line 68
        echo "            ";
        if (($this->getAttribute(($context["filebrowser_image_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_image_browse_url"] ?? $this->getContext($context, "filebrowser_image_browse_url")), "route", array())))) {
            // line 69
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["filebrowser_image_browse_url"] ?? $this->getContext($context, "filebrowser_image_browse_url")), "route", array()), $this->getAttribute(($context["filebrowser_image_browse_url"] ?? $this->getContext($context, "filebrowser_image_browse_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute(        // line 70
($context["filebrowser_image_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_image_browse_url"] ?? $this->getContext($context, "filebrowser_image_browse_url")), "url", array())))) {
            // line 71
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->getAttribute(($context["filebrowser_image_browse_url"] ?? $this->getContext($context, "filebrowser_image_browse_url")), "url", array());
            echo "',
            ";
        }
        // line 73
        echo "            ";
        if (($this->getAttribute(($context["filebrowser_image_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_image_upload_url"] ?? $this->getContext($context, "filebrowser_image_upload_url")), "route", array())))) {
            // line 74
            echo "                filebrowserImageUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["filebrowser_image_upload_url"] ?? $this->getContext($context, "filebrowser_image_upload_url")), "route", array()), $this->getAttribute(($context["filebrowser_image_upload_url"] ?? $this->getContext($context, "filebrowser_image_upload_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute(        // line 75
($context["filebrowser_image_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_image_upload_url"] ?? $this->getContext($context, "filebrowser_image_upload_url")), "url", array())))) {
            // line 76
            echo "                filebrowserImageUploadUrl: '";
            echo $this->getAttribute(($context["filebrowser_image_upload_url"] ?? $this->getContext($context, "filebrowser_image_upload_url")), "url", array());
            echo "',
            ";
        }
        // line 78
        echo "            ";
        if (($this->getAttribute(($context["filebrowser_flash_browse_url"] ?? null), "route", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_flash_browse_url"] ?? $this->getContext($context, "filebrowser_flash_browse_url")), "route", array())))) {
            // line 79
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["filebrowser_flash_browse_url"] ?? $this->getContext($context, "filebrowser_flash_browse_url")), "route", array()), $this->getAttribute(($context["filebrowser_flash_browse_url"] ?? $this->getContext($context, "filebrowser_flash_browse_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute(        // line 80
($context["filebrowser_flash_browse_url"] ?? null), "url", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_flash_browse_url"] ?? $this->getContext($context, "filebrowser_flash_browse_url")), "url", array())))) {
            // line 81
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->getAttribute(($context["filebrowser_flash_browse_url"] ?? $this->getContext($context, "filebrowser_flash_browse_url")), "url", array());
            echo "',
            ";
        }
        // line 83
        echo "            ";
        if (($this->getAttribute(($context["filebrowser_flash_upload_url"] ?? null), "route", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_flash_upload_url"] ?? $this->getContext($context, "filebrowser_flash_upload_url")), "route", array())))) {
            // line 84
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["filebrowser_flash_upload_url"] ?? $this->getContext($context, "filebrowser_flash_upload_url")), "route", array()), $this->getAttribute(($context["filebrowser_flash_upload_url"] ?? $this->getContext($context, "filebrowser_flash_upload_url")), "route_parameters", array()));
            echo "',
            ";
        } elseif (($this->getAttribute(        // line 85
($context["filebrowser_flash_upload_url"] ?? null), "url", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["filebrowser_flash_upload_url"] ?? $this->getContext($context, "filebrowser_flash_upload_url")), "url", array())))) {
            // line 86
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->getAttribute(($context["filebrowser_flash_upload_url"] ?? $this->getContext($context, "filebrowser_flash_upload_url")), "url", array());
            echo "',
            ";
        }
        // line 88
        echo "            ";
        if ( !(null === ($context["skin"] ?? $this->getContext($context, "skin")))) {
            // line 89
            echo "                skin: '";
            echo ($context["skin"] ?? $this->getContext($context, "skin"));
            echo "',
            ";
        }
        // line 91
        echo "            ";
        if ( !(null === ($context["disable_native_spell_checker"] ?? $this->getContext($context, "disable_native_spell_checker")))) {
            // line 92
            echo "                disableNativeSpellChecker: ";
            echo ((($context["disable_native_spell_checker"] ?? $this->getContext($context, "disable_native_spell_checker"))) ? ("true") : ("false"));
            echo ",
            ";
        }
        // line 94
        echo "            ";
        if ((twig_length_filter($this->env, ($context["format_tags"] ?? $this->getContext($context, "format_tags"))) > 0)) {
            // line 95
            echo "                format_tags: '";
            echo twig_join_filter(($context["format_tags"] ?? $this->getContext($context, "format_tags")), ";");
            echo "',
            ";
        }
        // line 97
        echo "            ";
        if ( !(null === ($context["body_class"] ?? $this->getContext($context, "body_class")))) {
            // line 98
            echo "                bodyClass: '";
            echo ($context["body_class"] ?? $this->getContext($context, "body_class"));
            echo "',
            ";
        }
        // line 100
        echo "            ";
        if ( !(null === ($context["contents_css"] ?? $this->getContext($context, "contents_css")))) {
            // line 101
            echo "                ";
            if (twig_test_iterable(($context["contents_css"] ?? $this->getContext($context, "contents_css")))) {
                // line 102
                echo "                    ";
                $context["contents_css_array"] = array();
                // line 103
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["contents_css"] ?? $this->getContext($context, "contents_css")));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 104
                    echo "                        ";
                    $context["contents_css_array"] = twig_array_merge(($context["contents_css_array"] ?? $this->getContext($context, "contents_css_array")), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["file"])));
                    // line 105
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                    contentsCss: ";
                echo twig_jsonencode_filter(($context["contents_css_array"] ?? $this->getContext($context, "contents_css_array")));
                echo ",
                ";
            } else {
                // line 108
                echo "                    contentsCss: '";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["contents_css"] ?? $this->getContext($context, "contents_css")));
                echo "',
                ";
            }
            // line 110
            echo "            ";
        }
        // line 111
        echo "            ";
        if ( !(null === ($context["basic_entities"] ?? $this->getContext($context, "basic_entities")))) {
            // line 112
            echo "                basicEntities: '";
            echo ($context["basic_entities"] ?? $this->getContext($context, "basic_entities"));
            echo "',
            ";
        }
        // line 114
        echo "            ";
        if ( !(null === ($context["entities"] ?? $this->getContext($context, "entities")))) {
            // line 115
            echo "                entities: '";
            echo ($context["entities"] ?? $this->getContext($context, "entities"));
            echo "',
            ";
        }
        // line 117
        echo "            ";
        if ( !(null === ($context["entities_latin"] ?? $this->getContext($context, "entities_latin")))) {
            // line 118
            echo "                entities_latin: '";
            echo ($context["entities_latin"] ?? $this->getContext($context, "entities_latin"));
            echo "',
            ";
        }
        // line 120
        echo "            ";
        if ( !(null === ($context["startup_mode"] ?? $this->getContext($context, "startup_mode")))) {
            // line 121
            echo "                startupMode: '";
            echo ($context["startup_mode"] ?? $this->getContext($context, "startup_mode"));
            echo "',
            ";
        }
        // line 123
        echo "            ";
        if ( !(null === ($context["enter_mode"] ?? $this->getContext($context, "enter_mode")))) {
            // line 124
            echo "                enterMode: CKEDITOR.";
            echo ($context["enter_mode"] ?? $this->getContext($context, "enter_mode"));
            echo ",
            ";
        }
        // line 126
        echo "            ";
        if (($context["plugins"] ?? $this->getContext($context, "plugins"))) {
            // line 127
            echo "                extraPlugins: '";
            echo ($context["plugins"] ?? $this->getContext($context, "plugins"));
            echo "',
            ";
        }
        // line 129
        echo "            ";
        if (($context["custom_config"] ?? $this->getContext($context, "custom_config"))) {
            // line 130
            echo "                customConfig: '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["custom_config"] ?? $this->getContext($context, "custom_config")));
            echo "',
            ";
        }
        // line 132
        echo "            toolbar: ";
        echo twig_jsonencode_filter(($context["toolbar"] ?? $this->getContext($context, "toolbar")));
        echo ",
            baseHref: '";
        // line 133
        echo ((($context["base_href"] ?? $this->getContext($context, "base_href"))) ? (($context["base_href"] ?? $this->getContext($context, "base_href"))) : ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "baseUrl", array())) . "/")));
        echo "'
        };

        CKEDITOR.replace(\"";
        // line 136
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo "\", trsteelConfig);
        CKEDITOR.instances[\"";
        // line 137
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo "\"].rawConfig = trsteelConfig;

    ";
        // line 140
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a5936ed861ac638f46de37984b65b497d22eeb3757ecdf3beb3a36acc8aa98f4->leave($__internal_a5936ed861ac638f46de37984b65b497d22eeb3757ecdf3beb3a36acc8aa98f4_prof);

    }

    public function getTemplateName()
    {
        return "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  490 => 140,  485 => 137,  481 => 136,  475 => 133,  470 => 132,  464 => 130,  461 => 129,  455 => 127,  452 => 126,  446 => 124,  443 => 123,  437 => 121,  434 => 120,  428 => 118,  425 => 117,  419 => 115,  416 => 114,  410 => 112,  407 => 111,  404 => 110,  398 => 108,  392 => 106,  386 => 105,  383 => 104,  378 => 103,  375 => 102,  372 => 101,  369 => 100,  363 => 98,  360 => 97,  354 => 95,  351 => 94,  345 => 92,  342 => 91,  336 => 89,  333 => 88,  327 => 86,  325 => 85,  320 => 84,  317 => 83,  311 => 81,  309 => 80,  304 => 79,  301 => 78,  295 => 76,  293 => 75,  288 => 74,  285 => 73,  279 => 71,  277 => 70,  272 => 69,  269 => 68,  263 => 66,  261 => 65,  256 => 64,  253 => 63,  247 => 61,  245 => 60,  240 => 59,  237 => 58,  231 => 56,  228 => 55,  222 => 53,  219 => 52,  213 => 50,  210 => 49,  204 => 47,  201 => 46,  195 => 44,  192 => 43,  186 => 41,  183 => 40,  171 => 38,  168 => 37,  156 => 35,  153 => 34,  147 => 32,  141 => 31,  138 => 30,  133 => 29,  130 => 28,  127 => 27,  121 => 25,  119 => 24,  115 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  90 => 17,  81 => 16,  63 => 15,  60 => 14,  55 => 11,  51 => 9,  46 => 7,  37 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
{% spaceless %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    <script type=\"text/javascript\">
    {% autoescape 'js' %}
        var CKEDITOR_BASEPATH = '{{ app.request.basePath ~ '/' ~ base_path }}';
    {% endautoescape %}
    </script>

    <script type=\"text/javascript\" src=\"{{ asset(base_path ~ 'ckeditor.js') }}\"></script>
    <script type=\"text/javascript\">
    {% autoescape false %}
        {% set plugins = '' %}
        {% for name, external_plugin in external_plugins %}
            CKEDITOR.plugins.addExternal('{{ name }}', '{{ app.request.basePath ~ external_plugin.path }}', '{{ external_plugin.file }}');
            {% if not loop.first %}
                {% set plugins = plugins ~ ',' %}
            {% endif %}
            {% set plugins = plugins ~ name %}
        {% endfor %}

        var trsteelConfig = {
            {% if width is not null %}
                width: '{{ width }}',
            {% endif %}
            {% if templates_files|length > 0 %}
                {% set templates_files_array = [] %}
                {% for file in templates_files %}
                    {% set templates_files_array = templates_files_array|merge([asset(file)]) %}
                {% endfor %}
                templates_files: {{ templates_files_array|json_encode }},
            {% endif %}
            {% if allowed_content is not null %}
                allowedContent: {% if allowed_content == 'true' %}true{% else %}'{{ allowed_content }}'{% endif %},
            {% endif %}
            {% if extra_allowed_content is not null %}
                extraAllowedContent: {% if extra_allowed_content == 'true' %}true{% else %}'{{ extra_allowed_content }}'{% endif %},
            {% endif %}
            {% if templates_replace_content is not null %}
                templates_replaceContent: {{ templates_replace_content ? 'true' : 'false' }},
            {% endif %}
            {% if height is not null %}
                height: '{{ height }}',
            {% endif %}
            {% if force_paste_as_plaintext is not null %}
                forcePasteAsPlainText: {{ force_paste_as_plaintext }},
            {% endif %}
            {% if language is not null %}
                language: '{{ language }}',
            {% endif %}
            {% if ui_color is not null %}
                uiColor: \"{{ ui_color }}\",
            {% endif %}
            {% if startup_outline_blocks == true %}
                startupOutlineBlocks: {{ startup_outline_blocks }},
            {% endif %}
            {% if filebrowser_browse_url.route is defined and filebrowser_browse_url.route is not null %}
                filebrowserBrowseUrl: '{{ path(filebrowser_browse_url.route, filebrowser_browse_url.route_parameters) }}',
            {% elseif filebrowser_browse_url.url is defined and filebrowser_browse_url.url is not null  %}
                filebrowserBrowseUrl: '{{ filebrowser_browse_url.url }}',
            {% endif %}
            {% if filebrowser_upload_url.route is defined and filebrowser_upload_url.route is not null %}
                filebrowserUploadUrl: '{{ path(filebrowser_upload_url.route, filebrowser_upload_url.route_parameters) }}',
            {% elseif filebrowser_upload_url.url is defined and filebrowser_upload_url.url is not null  %}
                filebrowserUploadUrl: '{{ filebrowser_upload_url.url }}',
            {% endif %}
            {% if filebrowser_image_browse_url.route is defined and filebrowser_image_browse_url.route is not null %}
                filebrowserImageBrowseUrl: '{{ path(filebrowser_image_browse_url.route, filebrowser_image_browse_url.route_parameters) }}',
            {% elseif filebrowser_image_browse_url.url is defined and filebrowser_image_browse_url.url is not null  %}
                filebrowserImageBrowseUrl: '{{ filebrowser_image_browse_url.url }}',
            {% endif %}
            {% if filebrowser_image_upload_url.route is defined and filebrowser_image_upload_url.route is not null %}
                filebrowserImageUploadUrl: '{{ path(filebrowser_image_upload_url.route, filebrowser_image_upload_url.route_parameters) }}',
            {% elseif filebrowser_image_upload_url.url is defined and filebrowser_image_upload_url.url is not null  %}
                filebrowserImageUploadUrl: '{{ filebrowser_image_upload_url.url }}',
            {% endif %}
            {% if filebrowser_flash_browse_url.route is defined and filebrowser_flash_browse_url.route is not null %}
                filebrowserFlashBrowseUrl: '{{ path(filebrowser_flash_browse_url.route, filebrowser_flash_browse_url.route_parameters) }}',
            {% elseif filebrowser_flash_browse_url.url is defined and filebrowser_flash_browse_url.url is not null  %}
                filebrowserFlashBrowseUrl: '{{ filebrowser_flash_browse_url.url }}',
            {% endif %}
            {% if filebrowser_flash_upload_url.route is defined and filebrowser_flash_upload_url.route is not null %}
                filebrowserFlashUploadUrl: '{{ path(filebrowser_flash_upload_url.route, filebrowser_flash_upload_url.route_parameters) }}',
            {% elseif filebrowser_flash_upload_url.url is defined and filebrowser_flash_upload_url.url is not null  %}
                filebrowserFlashUploadUrl: '{{ filebrowser_flash_upload_url.url }}',
            {% endif %}
            {% if skin is not null %}
                skin: '{{ skin }}',
            {% endif %}
            {% if disable_native_spell_checker is not null %}
                disableNativeSpellChecker: {{ disable_native_spell_checker ? 'true' : 'false' }},
            {% endif %}
            {% if format_tags|length > 0 %}
                format_tags: '{{ format_tags|join(';')|raw }}',
            {% endif %}
            {% if body_class is not null %}
                bodyClass: '{{ body_class }}',
            {% endif %}
            {% if contents_css is not null %}
                {% if contents_css is iterable %}
                    {% set contents_css_array = [] %}
                    {% for file in contents_css %}
                        {% set contents_css_array = contents_css_array|merge([asset(file)]) %}
                    {% endfor %}
                    contentsCss: {{ contents_css_array|json_encode }},
                {% else %}
                    contentsCss: '{{ asset(contents_css) }}',
                {% endif %}
            {% endif %}
            {% if basic_entities is not null %}
                basicEntities: '{{ basic_entities }}',
            {% endif %}
            {% if entities is not null %}
                entities: '{{ entities }}',
            {% endif %}
            {% if entities_latin is not null %}
                entities_latin: '{{ entities_latin }}',
            {% endif %}
            {% if startup_mode is not null %}
                startupMode: '{{ startup_mode }}',
            {% endif %}
            {% if enter_mode is not null %}
                enterMode: CKEDITOR.{{ enter_mode }},
            {% endif %}
            {% if plugins %}
                extraPlugins: '{{ plugins }}',
            {% endif %}
            {% if custom_config %}
                customConfig: '{{ asset(custom_config) }}',
            {% endif %}
            toolbar: {{ toolbar | json_encode | raw }},
            baseHref: '{{ base_href ? base_href : app.request.schemeAndHttpHost ~ app.request.baseUrl ~ '/' }}'
        };

        CKEDITOR.replace(\"{{ id }}\", trsteelConfig);
        CKEDITOR.instances[\"{{ id }}\"].rawConfig = trsteelConfig;

    {% endautoescape %}
    </script>
{% endspaceless %}
{% endblock %}
", "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig", "/Users/louise/documents/Symfony/Project3/vendor/trsteel/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
