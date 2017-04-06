<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_af44ac3239ea38a03663c16a6c22c725ed9841e28f761a89f7d658a5c2017a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class=\"ie8 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9 no-js\" lang=\"en\"><![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" class=\"no-js\">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>ICGM Login</title>
        <!-- start: META -->
        <meta charset=\"utf-8\" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content=\"IE=edge,IE=9,IE=8,chrome=1\" /><![endif]-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->



                  ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "88244b9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_88244b9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/88244b9_styles-responsive_1.css");
            // line 33
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
            // asset "88244b9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_88244b9_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/88244b9_styles_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
            // asset "88244b9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_88244b9_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/88244b9_font-awesome.min_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
            // asset "88244b9_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_88244b9_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/88244b9_animate.min_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
            // asset "88244b9_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_88244b9_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/88244b9_bootstrap.min_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
        } else {
            // asset "88244b9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_88244b9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/88244b9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
        }
        unset($context["asset_url"]);
        // line 35
        echo "

        <!--[if IE 7]>
        <link rel=\"stylesheet\" href=\"assets/plugins/font-awesome/css/font-awesome-ie7.min.css\">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body class=\"login\">
        ";
        // line 47
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc7830f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc7830f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/dc7830f_jquery-2.1.1.min_1.js");
            // line 58
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "dc7830f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc7830f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/dc7830f_jquery-ui-1.10.2.custom.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "dc7830f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc7830f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/dc7830f_bootstrap.min_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "dc7830f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc7830f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/dc7830f_jquery.icheck.min_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "dc7830f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc7830f_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/dc7830f_jquery.transit_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "dc7830f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc7830f_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/dc7830f_jquery.touchSwipe.min_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "dc7830f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc7830f_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/dc7830f_login_7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "dc7830f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc7830f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/dc7830f.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 60
        echo "        <script>
            jQuery(document).ready(function() {
                Login.init();
            });
        </script>
    </body>
    <!-- end: BODY -->
</html>
";
    }

    // line 47
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 48
        echo "        ";
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 48,  172 => 47,  160 => 60,  110 => 58,  106 => 50,  103 => 49,  101 => 47,  87 => 35,  49 => 33,  45 => 24,  20 => 1,  104 => 47,  94 => 40,  89 => 38,  78 => 32,  71 => 28,  67 => 26,  61 => 23,  58 => 22,  56 => 21,  51 => 19,  42 => 13,  31 => 4,  28 => 3,);
    }
}
