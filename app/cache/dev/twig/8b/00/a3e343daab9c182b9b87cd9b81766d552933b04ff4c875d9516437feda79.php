<?php

/* ::base.html.twig */
class __TwigTemplate_8b00a3e343daab9c182b9b87cd9b81766d552933b04ff4c875d9516437feda79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]><html class=\"ie8\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9\" lang=\"en\"><![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
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
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>


        ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8ec4c1a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_font-awesome.min_1.css");
            // line 50
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_animate.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_bootstrap.min_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_all_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_perfect-scrollbar_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_summernote_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_bootstrap-fileupload.min_7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_bootstrap-modal-bs3patch_8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_bootstrap-modal_9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_datetimepicker_10.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_styles_11.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_styles-responsive_12.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_plugins_13.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_theme-default_14.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_owl.carousel_15.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_owl.theme_16.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8ec4c1a_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a_owl.transitions_17.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "8ec4c1a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ec4c1a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8ec4c1a.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 52
        echo "

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body>


        <div class=\"main-wrapper\">
            <!-- start: TOPBAR -->
            <header class=\"topbar navbar navbar-inverse navbar-fixed-top inner\">
                <!-- start: TOPBAR CONTAINER -->
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"sb-toggle-left hidden-md hidden-lg\" href=\"#main-navbar\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                        <!-- start: LOGO -->
                        <a class=\"navbar-brand\" href=\"index.html\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/images//icgm-logo.png"), "html", null, true);
        echo "\" alt=\"ICGM\"/>
                        </a>
                        <!-- end: LOGO -->
                    </div>
                    <div class=\"topbar-tools\">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class=\"nav navbar-right\">
                            <!-- start: USER DROPDOWN -->
                            <li class=\"dropdown current-user\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
                                    ";
        // line 82
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 83
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/user/profilepics/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")), "html", null, true);
            echo " \" alt=\"userpicture\" class=\"img-circle\" width=\"25\">
                                    ";
        } else {
            // line 85
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"userpicture\" class=\"img-circle\"  width=\"25\">

                                    ";
        }
        // line 88
        echo "                                    <span class=\"username hidden-xs\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastName"), "html", null, true);
        echo "</span> <i class=\"fa fa-caret-down \"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-dark\">
                                    <li>
                                        <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "Id"))), "html", null, true);
        echo "\">
                                            ";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("My Profile", array(), "messages");
        // line 94
        echo "                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "Id"))), "html", null, true);
        echo "\">
                                            ";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("My Calendar", array(), "messages");
        // line 99
        echo "                                        </a>
                                    </li>
                                                               
                                    <li>
                                        <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                                            ";
        // line 104
        echo $this->env->getExtension('translator')->getTranslator()->trans("Log Out", array(), "messages");
        // line 105
        echo "                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: USER DROPDOWN -->

                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>
                </div>
                <!-- end: TOPBAR CONTAINER -->
            </header>
            <!-- end: TOPBAR -->
            <!-- start: PAGESLIDE LEFT -->
            <a class=\"closedbar inner hidden-sm hidden-xs\" href=\"#\">
            </a>
            <nav id=\"pageslide-left\" class=\"pageslide inner\">
                <div class=\"navbar-content\">
                    <!-- start: SIDEBAR -->
                    <div class=\"main-navigation left-wrapper transition-left\">
                        <div class=\"navigation-toggler hidden-sm hidden-xs\">
                            <a href=\"#main-navbar\" class=\"sb-toggle-left\">
                            </a>
                        </div>
                        <div class=\"user-profile border-top padding-horizontal-10 block\">
                            <div class=\"inline-block\">
                                ";
        // line 131
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 132
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/user/profilepics/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")), "html", null, true);
            echo " \" alt=\"userpicture\" width=\"55\">
                                ";
        } else {
            // line 134
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"userpicture\" width=\"55\">

                                ";
        }
        // line 137
        echo "                            </div>
                            <div class=\"inline-block\">                              
                                <h4 class=\"no-margin\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastName"), "html", null, true);
        echo " </h4>

                            </div>
                        </div>
                        <!-- start: MAIN NAVIGATION MENU -->
                        <ul class=\"main-navigation-menu\">
                            <li class=\"active open\">
                                <a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><i class=\"fa fa-home\"></i> <span class=\"title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo " </span></a>
                            </li>

                            <li>
                                <a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("map");
        echo "\"><i class=\"fa fa-globe\"></i> <span class=\"title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Map", array(), "messages");
        echo "</span> </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("entities");
        echo "\"><i class=\"fa fa-briefcase\"></i> <span class=\"title\">Contacts</span> </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\"><i class=\"fa fa-file-text-o\"></i> <span class=\"title\">";
        // line 156
        echo $this->env->getExtension('translator')->getTranslator()->trans("My Pages", array(), "messages");
        echo "</span><i class=\"icon-arrow\"></i> </a>
                                <ul class=\"sub-menu\">
                                    <li>
                                        <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "Id"))), "html", null, true);
        echo "\">
                                            <span class=\"title\">Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("events");
        echo "\">
                                            <span class=\"title\">";
        // line 165
        echo $this->env->getExtension('translator')->getTranslator()->trans("Events", array(), "messages");
        echo "</span>
                                        </a>
                                    </li>
                                 
                                    

                                </ul>
                            </li>

                            <li>
                                <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "Id"))), "html", null, true);
        echo "\"><i class=\"fa fa-calendar-o\"></i> <span class=\"title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calendar", array(), "messages");
        echo "</span> </a>
                            </li>

                          

                            <li>
                                <a href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("contributors");
        echo "\"><i class=\"fa fa-users\"></i> <span class=\"title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contributors", array(), "messages");
        echo "</span> </a>
                            </li>

                           
                        </ul>
                        <!-- end: MAIN NAVIGATION MENU -->
                    </div>
                    <!-- end: SIDEBAR -->
                </div>
                <div class=\"slide-tools\">
                    <div class=\"col-xs-6 text-left no-padding\">
                        <a class=\"btn btn-sm status\" href=\"#\">
                            Status <i class=\"fa fa-dot-circle-o text-green\"></i> <span>Online</span>
                        </a>
                    </div>
                    <div class=\"col-xs-6 text-right no-padding\">
                        <a class=\"btn btn-sm log-out text-right\" href=\"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                            <i class=\"fa fa-power-off\"></i> Log Out
                        </a>
                    </div>
                </div>
            </nav>
            <!-- end: PAGESLIDE LEFT -->

            <!-- start: MAIN CONTAINER -->
            <div class=\"main-container inner\">
                <!-- start: PAGE -->
                <div class=\"main-content\">
                    <!-- start: PANEL CONFIGURATION MODAL FORM -->
                    <div class=\"modal fade\" id=\"panel-config\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <h4 class=\"modal-title\">Panel Configuration</h4>
                                </div>
                                <div class=\"modal-body\">
                                    Here will be a configuration form
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                                        Close
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary\">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- end: SPANEL CONFIGURATION MODAL FORM -->
                    <!-- start: PAGE HEADER -->
                    <!-- start: TOOLBAR -->
                    <div class=\"toolbar row hidden-xs\">
                        <div class=\"col-sm-6 hidden-xs\">
                            <div class=\"page-header\">
                                <h4 class=\"breadcrumb\" style=\"font-size: 1.2em;margin: 4%;\">
                                ";
        // line 243
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 244
        echo "                            </h4>
                        </div>
                    </div>
                    <div class=\"toolbar-tools pull-right\">
                        <!-- start: TOP NAVIGATION MENU -->
                       
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>
                </div>
                <!-- end: TOOLBAR -->
                <!-- end: PAGE HEADER -->  

                ";
        // line 256
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 257
            echo "                    <div class=\"flash-notice\">
                        <div class=\"alert alert-info\" style=\"margin: 19px;\">";
            // line 258
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo " </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "

            ";
        // line 263
        $this->displayBlock('mainContent', $context, $blocks);
        // line 264
        echo "        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
    <footer class=\"inner\">
        <div class=\"footer-inner\">
            <div class=\"pull-left\">
                2014 &copy; Geosoftdev.
            </div>
            <div class=\"pull-right\">
                <span class=\"go-top\"><i class=\"fa fa-chevron-up\"></i></span>
            </div>
        </div>
    </footer>

</div>

";
        // line 282
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5cfc949_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery-2.1.1.min_1.js");
            // line 313
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery-ui-1.10.2.custom.min_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_bootstrap.min_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery.mousewheel_4.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_perfect-scrollbar_5.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery.scrollTo.min_6.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery-scrolltofixed-min_7.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery.appear_8.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery.cookie_9.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery.velocity.min_10.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_bootstrap-modal_11.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_bootstrap-modalmanager_12.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery.pulsate.min_13.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_moment.min_14.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_bootstrap-datetimepicker_15.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_summernote.min_16.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_select2.min_17.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_17") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_main_18.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_18") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_user-profile_19.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_19") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_bootstrap-timepicker_20.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_20") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_fullcalendar_21.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_21") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_jquery.dataTables.min_22.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "5cfc949_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949_22") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949_owl.carousel_23.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        } else {
            // asset "5cfc949"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cfc949") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cfc949.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        }
        unset($context["asset_url"]);
        // line 316
        echo "
<script>
    jQuery(document).ready(function () {
        Main.init();
        PagesUserProfile.init();
    });
</script>
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "ICGM";
    }

    // line 243
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 263
    public function block_mainContent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 282,  487 => 264,  485 => 263,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 150,  302 => 139,  291 => 134,  255 => 105,  253 => 104,  249 => 103,  237 => 97,  232 => 94,  226 => 92,  216 => 88,  188 => 72,  167 => 54,  53 => 50,  114 => 23,  97 => 36,  81 => 33,  77 => 30,  23 => 3,  175 => 48,  172 => 47,  160 => 60,  110 => 58,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 97,  305 => 95,  298 => 137,  294 => 90,  285 => 132,  283 => 131,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 21,  63 => 15,  59 => 14,  87 => 35,  201 => 82,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 52,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  38 => 6,  31 => 4,  28 => 3,  26 => 2,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 24,  47 => 9,  40 => 5,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 22,  108 => 21,  101 => 47,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 9,  35 => 5,  32 => 9,  29 => 3,  209 => 85,  203 => 83,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 50,  103 => 49,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 13,  54 => 12,  51 => 14,  48 => 13,  45 => 24,  42 => 6,  39 => 9,  36 => 4,  33 => 3,  30 => 2,);
    }
}
