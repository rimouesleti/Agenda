<?php

/* ::base.html.twig */
class __TwigTemplate_aef6a8ad3b0a6164f8cc466f20727bd485d873a70de34ccb03b721cf77e985b5 extends Twig_Template
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
                                    ";
        // line 163
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "  
                                        <li>
                                            <a href=\"";
            // line 165
            echo $this->env->getExtension('routing')->getPath("events");
            echo "\">
                                                <span class=\"title\">";
            // line 166
            echo $this->env->getExtension('translator')->getTranslator()->trans("Events", array(), "messages");
            echo "</span>
                                            </a>
                                        </li>
                                    ";
        }
        // line 170
        echo "

                                </ul>
                            </li>

                            <li>
                                <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "Id"))), "html", null, true);
        echo "\"><i class=\"fa fa-calendar-o\"></i> <span class=\"title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calendar", array(), "messages");
        echo "</span> </a>
                            </li>


                            ";
        // line 180
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 181
            echo "                                <li>
                                    <a href=\"";
            // line 182
            echo $this->env->getExtension('routing')->getPath("contributors");
            echo "\"><i class=\"fa fa-users\"></i> <span class=\"title\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Contributors", array(), "messages");
            echo "</span> </a>
                                </li>

                            ";
        }
        // line 186
        echo "                        </ul>
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
        // line 198
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
        // line 244
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 245
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
        // line 257
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 258
            echo "                    <div class=\"flash-notice\">
                        <div class=\"alert alert-info\" style=\"margin: 19px;\">";
            // line 259
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo " </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "

            ";
        // line 264
        $this->displayBlock('mainContent', $context, $blocks);
        // line 265
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
        // line 283
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1a2bd89_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery-2.1.1.min_1.js");
            // line 315
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery-ui-1.10.2.custom.min_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_bootstrap.min_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery.mousewheel_4.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_perfect-scrollbar_5.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery.scrollTo.min_6.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery-scrolltofixed-min_7.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery.appear_8.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery.cookie_9.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery.velocity.min_10.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_bootstrap-modal_11.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_bootstrap-modalmanager_12.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery.pulsate.min_13.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_moment.min_14.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_bootstrap-datetimepicker_15.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_summernote.min_16.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_select2.min_17.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_17") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_bootstrap-timepicker_18.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_18") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_daterangepicker_19.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_19") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_fullcalendar_20.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_20") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_jquery.dataTables.min_21.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_21") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_owl.carousel_22.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_22") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_main_23.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "1a2bd89_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89_23") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89_user-profile_24.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        } else {
            // asset "1a2bd89"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1a2bd89") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1a2bd89.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        }
        unset($context["asset_url"]);
        // line 318
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

    // line 244
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 264
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
        return array (  722 => 264,  717 => 244,  711 => 9,  699 => 318,  522 => 315,  518 => 283,  498 => 265,  496 => 264,  492 => 262,  483 => 259,  480 => 258,  476 => 257,  462 => 245,  460 => 244,  411 => 198,  397 => 186,  388 => 182,  385 => 181,  383 => 180,  374 => 176,  366 => 170,  359 => 166,  355 => 165,  350 => 163,  343 => 159,  337 => 156,  331 => 153,  323 => 150,  314 => 146,  302 => 139,  298 => 137,  291 => 134,  285 => 132,  283 => 131,  255 => 105,  253 => 104,  249 => 103,  243 => 99,  241 => 98,  237 => 97,  232 => 94,  230 => 93,  226 => 92,  216 => 88,  209 => 85,  203 => 83,  201 => 82,  188 => 72,  167 => 54,  163 => 52,  53 => 50,  49 => 23,  32 => 9,  22 => 1,);
    }
}
