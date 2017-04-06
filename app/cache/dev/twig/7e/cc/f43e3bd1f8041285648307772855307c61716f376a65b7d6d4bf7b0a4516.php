<?php

/* PagesBundle:Entity:detail.html.twig */
class __TwigTemplate_7eccf43e3bd1f8041285648307772855307c61716f376a65b7d6d4bf7b0a4516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "    <li>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("entities");
        echo "\">
            ";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact list", array(), "messages");
        // line 8
        echo "        </a>
    </li>
    <li class=\"active\"> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</li>
    ";
    }

    // line 13
    public function block_mainContent($context, array $blocks = array())
    {
        // line 14
        echo "


    <div class=\"container\">

        <!-- start: PAGE CONTENT -->
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-sm-12\">
                <div class=\"tabbable\">

                    <div class=\"tab-content\">
                        <div id=\"panel_overview\" class=\"tab-pane fade in active\">
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-md-4\">
                                    <div class=\"user-left\">
                                        <div class=\"center\">
                                            <h4>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</h4>


                                            <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
                                                <div class=\"user-image\">
                                                    <div class=\"fileupload-new thumbnail\">
                                                        ";
        // line 36
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")) {
            // line 37
            echo "                                                            <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")), "html", null, true);
            echo " \" alt=\"\" >
                                                        ";
        } else {
            // line 39
            echo "                                                            ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sort") == "company")) {
                // line 40
                echo "                                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/Company.png"), "html", null, true);
                echo " \" alt=\"\">

                                                            ";
            } else {
                // line 43
                echo "                                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
                echo " \" alt=\"\" >
                                                            ";
            }
            // line 45
            echo "                                                        ";
        }
        // line 46
        echo "                                                    </div>                                          

                                                </div>
                                            </div>

                                            <hr>


                                        </div>
                                        <table class=\"table table-condensed table-hover\">
                                            <thead>
                                                <tr>
                                                    <th colspan=\"3\">";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact Information", array(), "messages");
        echo "</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>Email:</td>
                                                    <td>
                                                        <a href=\"\">
                                                            ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "
                                                        </a></td>
                                                    <td><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone:</td>
                                                    <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 77
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country", array(), "messages");
        echo ":</td>
                                                    <td>
                                                        ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 84
        echo $this->env->getExtension('translator')->getTranslator()->trans("City", array(), "messages");
        echo ":</td>
                                                    <td>                                                   
                                                        ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("Address", array(), "messages");
        echo ":</td>
                                                    <td>                                                   
                                                        ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("Zip Code", array(), "messages");
        echo ":</td>
                                                    <td>                                                  
                                                        ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class=\"table table-condensed table-hover\">  
                                            <thead>
                                                <tr>
                                                    <th colspan=\"3\">";
        // line 110
        echo $this->env->getExtension('translator')->getTranslator()->trans("General information", array(), "messages");
        echo "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>";
        // line 115
        echo $this->env->getExtension('translator')->getTranslator()->trans("Creator", array(), "messages");
        echo ":</td>
                                                    <td>
                                                        <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "id"))), "html", null, true);
        echo "\">
                                                        ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "html", null, true);
        echo "</td>

                                                    </a>
                                                    <td><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>

                                                <tr>
                                                    <td>";
        // line 125
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo ":</td>
                                                    <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 130
        echo $this->env->getExtension('translator')->getTranslator()->trans("Speciality", array(), "messages");
        echo ":</td>
                                                    <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "speciality"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                ";
        // line 134
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website")) {
            // line 135
            echo "                                                    <tr>
                                                        <td>";
            // line 136
            echo $this->env->getExtension('translator')->getTranslator()->trans("Website", array(), "messages");
            echo ":</td>
                                                        <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website"), "html", null, true);
            echo "</td>
                                                        <td><a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                ";
        }
        // line 141
        echo "                                                ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employeesNumber")) {
            // line 142
            echo "                                                    <tr>
                                                        <td>";
            // line 143
            echo $this->env->getExtension('translator')->getTranslator()->trans("Employees number", array(), "messages");
            echo ":</td>
                                                        <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employeesNumber"), "html", null, true);
            echo "</td>
                                                        <td><a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                ";
        }
        // line 148
        echo "                                                ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description")) {
            // line 149
            echo "                                                    <tr>
                                                        <td>Description:</td>
                                                        <td>";
            // line 151
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description");
            echo "</td>
                                                        <td><a href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                ";
        }
        // line 155
        echo "



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"col-sm-7 col-md-8\">

                                    <span class=\"btn-group pull-right\" style=\"margin-bottom: 2%\">
                                        <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:void(0);\"><i class=\"fa fa-fw fa-wrench\"></i> <span class=\"hidden-xs\">";
        // line 166
        echo $this->env->getExtension('translator')->getTranslator()->trans("More", array(), "messages");
        echo "</span>                                                           </button>
                                        <ul class=\"dropdown-menu pull-right\">                                                            

                                            <!-- <li id=\"Contacts_detailView_moreAction_LBL_ADD_NOTE\">
                                                 <a href=\"\"><i class=\"fa fa-fw fa-file-o\"></i>   Add Document</a></li> -->

                                            <li id=\"Contacts_detailView_moreAction_LBL_ADD_EVENT\">
                                                <a href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/new", array("entity_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-calendar-o\"></i>   ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add Event", array(), "messages");
        echo "</a>
                                            </li>
                                            <!--  <li id=\"Contacts_detailView_moreAction_LBL_ADD_TASK\">
                                                  <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo/new", array("entity_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-file-text-o\"></i>   Add To Do</a>
                                              </li> -->
                                            <li id=\"Contacts_detailView_moreAction_Delete_Contact\">
                                                <a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-pencil\"></i>   ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo "</a>
                                            </li>
                                            <li id=\"Contacts_detailView_moreAction_Delete_Contact\">
                                                <a href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entities/delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-times\"></i>   ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "messages");
        echo "</a>
                                            </li>
                                        </ul>
                                    </span>
                                    <div class=\"panel panel-white space20\">
                                        <div class=\"panel-heading\" style=\"font-weight: bold;\">
                                            <i class=\"clip-checkmark-2\"></i>
                                            ";
        // line 189
        echo $this->env->getExtension('translator')->getTranslator()->trans("Geolocation", array(), "messages");
        // line 190
        echo "                                            <div class=\"panel-tools\">
                                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                                    <i class=\"fa fa-times\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"panel-body panel-scroll height-300\">
                                            <div id=\"divMap\"></div>
                                        </div>
                                    </div>

                                    <div class=\"panel panel-white space20\">
                                        <div class=\"panel-heading\" style=\"font-weight: bold;\">                                           
                                            ";
        // line 203
        echo $this->env->getExtension('translator')->getTranslator()->trans("Activities", array(), "messages");
        // line 204
        echo "                                            <div class=\"panel-tools\">
                                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                                    <i class=\"fa fa-times\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"panel-body panel-scroll height-300\">
                                            ";
        // line 211
        if (((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")) == "true")) {
            // line 212
            echo "                                                ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("No recent activities", array(), "messages");
            // line 213
            echo "                                            ";
        } else {
            // line 214
            echo "

                                                <table class=\"table table-striped table-hover\">
                                                    <tbody>
                                                        
                                                        ";
            // line 219
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 220
                echo "                                                            <tr>
                                                                <td class=\"center\" style=\"color: #ADADAD;\">
                                                                    <i class=\"fa fa-clock-o\"></i>
                                                                </td>

                                                                <td>
                                                                    <span class=\"bold-text text-small\"><a href=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
                echo "</a> </span>
                                                                </td>
                                                                <td>
                                                                    ";
                // line 229
                if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "planned")) {
                    echo "                            
                                                                        <span class=\"label label-sm label-success\">";
                    // line 230
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
                    echo "</span>
                                                                    ";
                } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "cancelled")) {
                    // line 232
                    echo "                                                                        <span class=\"label label-sm label-danger\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
                    echo "</span>
                                                                    ";
                } else {
                    // line 234
                    echo "                                                                        <span class=\"label label-sm label-warning\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
                    echo "</span>
                                                                    ";
                }
                // line 235
                echo " 
                                                                </td>
                                                                <td class=\"center\" style=\"color: #ADADAD;\"><strong>";
                // line 237
                echo $this->env->getExtension('translator')->getTranslator()->trans("Start", array(), "messages");
                echo " :</strong> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "d-m-Y H:i"), "html", null, true);
                echo " <strong>";
                echo $this->env->getExtension('translator')->getTranslator()->trans("End", array(), "messages");
                echo " :</strong> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "d-m-Y H:i"), "html", null, true);
                echo "</td>

                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                                                    </tbody>
                                                </table>


                                            ";
        }
        // line 246
        echo "                                        </div>
                                    </div>

                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end: PAGE CONTENT-->
    </div>

    <script type=\"text/javascript\" src=\"http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0&mkt=fr-fr\"></script>


    ";
        // line 264
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b37284") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1b37284.js");
            // line 267
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 270
        echo "
    <script>
        window.onload = GetMap;
        var map = null;

        // load Map Content with a handler on click to insert a pushpin
        function GetMap() {

            Microsoft.Maps.loadModule('Microsoft.Maps.Themes.BingTheme',
                    {
                        callback: function () {
                            map = new Microsoft.Maps.Map(document.getElementById('divMap'),
                                    {
                                        credentials: \"AoqgNgDfcQ1C-pSBC6q8hJj9jxslNxwEzb8sySpQJtOZSCtg3GXWy11AFqx_5--Z\",
                                        mapTypeId: Microsoft.Maps.MapTypeId.road,
                                        enableClickableLogo: false,
                                        enableSearchLogo: false,
                                        center: new Microsoft.Maps.GeoLocationProvider(map).getCurrentPosition({showAccuracyCircle: false}),
                                        zoom: 5,
                                        showBreadcrumb: false
                                    });
                            LoadSearchModule();

                        }
                    });
        }



        function LoadSearchModule() {
            Microsoft.Maps.loadModule('Microsoft.Maps.Search', {callback: searchRequest})
        }


        function createSearchManager() {
            map.addComponent('searchManager', new Microsoft.Maps.Search.SearchManager(map));
            searchManager = map.getComponent('searchManager');
        }

        function searchRequest() {
            createSearchManager();
            var query = '";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
        echo "';
            if (query != \"\")
            {
                var request = {
                    query: query,
                    count: 20,
                    startIndex: 0,
                    bounds: map.getBounds(),
                    callback: search_onSearchSuccess,
                    errorCallback: search_onSearchFailure
                };
                searchManager.search(request);
            }
            else
                alert('champ vide');
        }

        function search_onSearchSuccess(result, userData) {
            console.log(result);
            if (result.searchRegion.mapBounds !== null) {

                search_createMapPin(result['searchRegion']['geocodeLocations']['0']['location']['latitude'], result['searchRegion']['geocodeLocations']['0']['location']['longitude']);
                map.setView({
                    bounds: result.searchRegion.mapBounds.locationRect
                });
            }
            else {
                console.log('pas de resultat');
            }
        }

        function search_createMapPin(a, b) {
            var pin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(a, b), null);

            Microsoft.Maps.Events.addHandler(pin, 'click', function () {
                search_showInfoBox(result)
            });
            map.entities.push(pin);

        }

        function search_showInfoBox(result) {
            if (currInfobox) {
                currInfobox.setOptions({
                    visible: true
                });
                map.entities.remove(currInfobox);
            }
            currInfobox = new Microsoft.Maps.Infobox(result.location, {
                title: result.name,
                description: [result.address, result.city, result.state,
                    result.country, result.phone].join(' '),
                showPointer: true,
                titleAction: null,
                titleClickHandler: null
            });
            currInfobox.setOptions({
                visible: true
            });
            map.entities.push(currInfobox);
        }

        function search_onSearchFailure(result, userData) {
            alert('Search  failed');
        }



    </script>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Entity:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 311,  539 => 270,  531 => 267,  526 => 264,  506 => 246,  499 => 241,  483 => 237,  479 => 235,  473 => 234,  467 => 232,  462 => 230,  458 => 229,  450 => 226,  442 => 220,  438 => 219,  431 => 214,  428 => 213,  425 => 212,  423 => 211,  414 => 204,  412 => 203,  397 => 190,  395 => 189,  383 => 182,  375 => 179,  369 => 176,  361 => 173,  351 => 166,  338 => 155,  332 => 152,  328 => 151,  324 => 149,  321 => 148,  315 => 145,  311 => 144,  307 => 143,  304 => 142,  301 => 141,  295 => 138,  291 => 137,  287 => 136,  284 => 135,  282 => 134,  277 => 132,  273 => 131,  269 => 130,  263 => 127,  259 => 126,  255 => 125,  248 => 121,  242 => 118,  238 => 117,  233 => 115,  225 => 110,  214 => 102,  209 => 100,  204 => 98,  198 => 95,  193 => 93,  188 => 91,  182 => 88,  177 => 86,  172 => 84,  166 => 81,  161 => 79,  156 => 77,  150 => 74,  146 => 73,  139 => 69,  134 => 67,  122 => 58,  108 => 46,  105 => 45,  99 => 43,  92 => 40,  89 => 39,  83 => 37,  81 => 36,  72 => 30,  54 => 14,  51 => 13,  45 => 10,  41 => 8,  39 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
