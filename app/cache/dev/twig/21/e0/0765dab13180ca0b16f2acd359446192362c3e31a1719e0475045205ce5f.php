<?php

/* UserBundle:Contributors:detail.html.twig */
class __TwigTemplate_21e00765dab13180ca0b16f2acd359446192362c3e31a1719e0475045205ce5f extends Twig_Template
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

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("contributors");
        echo "\">
            ";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contributors List", array(), "messages");
        // line 7
        echo "        </a>
    </li>
    <li class=\"active\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "</li>
    ";
    }

    // line 11
    public function block_mainContent($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"container\">

        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-sm-12\">
                <div class=\"tabbable\">

                    <div class=\"tab-content\">
                        <div id=\"panel_overview\" class=\"tab-pane fade in active\">
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-md-4\">
                                    <div class=\"user-left\">
                                        <div class=\"center\" style=\"margin-bottom: 25px;\">
                                            <h4>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "</h4>
                                            <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
                                                <div class=\"user-image\">
                                                    <div class=\"fileupload-new thumbnail\">
                                                        ";
        // line 28
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")) {
            // line 29
            echo "                                                            <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/user/profilepics/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")), "html", null, true);
            echo "\" alt=\"userPic\" >
                                                        ";
        } else {
            // line 31
            echo "                                                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"userPic\" ></td>

                                                        ";
        }
        // line 34
        echo "                                                    </div>                                          

                                                </div>
                                            </div>
                                            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" >
                                                <span class=\"label label-sm label-warning\"><i class=\"fa fa-calendar\"></i> ";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("Show calendar", array(), "messages");
        echo "</span>
                                            </a>

                                            <!-- <a href=\"fos_message_thread_new\" >
                                                 <span class=\"label label-sm label-success\"><i class=\"fa fa-envelope\"></i> Send message</span>
                                             </a>
 
                                             <hr>
                                            -->


                                        </div>
                                        <table class=\"table table-condensed table-hover\">
                                            <thead>
                                                <tr>
                                                    <th colspan=\"3\">";
        // line 54
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
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "
                                                        </a></td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone:</td>
                                                    <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Mphone"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 73
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country", array(), "messages");
        echo ":</td>
                                                    <td>
                                                        ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 80
        echo $this->env->getExtension('translator')->getTranslator()->trans("City", array(), "messages");
        echo ":</td>
                                                    <td>                                                   
                                                        ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 87
        echo $this->env->getExtension('translator')->getTranslator()->trans("Address", array(), "messages");
        echo ":</td>
                                                    <td>                                                   
                                                        ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 94
        echo $this->env->getExtension('translator')->getTranslator()->trans("Zip Code", array(), "messages");
        echo ":</td>
                                                    <td>                                                  
                                                        ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "zipCode"), "html", null, true);
        echo "
                                                    </td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class=\"table table-condensed table-hover\">
                                            <thead>
                                                <tr>
                                                    <th colspan=\"3\">";
        // line 105
        echo $this->env->getExtension('translator')->getTranslator()->trans("General information", array(), "messages");
        echo "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Departement</td>
                                                    <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "departement"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 115
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</td>
                                                    <td>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "language"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>";
        // line 120
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last Logged In", array(), "messages");
        echo "</td>
                                                    <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin"), "Y-m-d H:i"), "html", null, true);
        echo "</td>
                                                    <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                </tr>


                                                <tr>
                                                    <td>Role</td>
                                                    <td><span class=\"label label-sm label-info\">";
        // line 128
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 129
            echo "                                                            ";
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                // line 130
                echo "                                                                Administrator
                                                            ";
            } else {
                // line 132
                echo "                                                                User
                                                            ";
            }
            // line 133
            echo "  
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "</span></td>
                                                        <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class=\"col-sm-7 col-md-8\">

                                        <div class=\"panel panel-white space20\">
                                            <div class=\"panel-heading\" style=\"font-weight: bold;\">

                                                ";
        // line 149
        echo $this->env->getExtension('translator')->getTranslator()->trans("Geolocation", array(), "messages");
        // line 150
        echo "                                                <!-- <a href=\"\"><span class=\"pull-right label label-sm label-success\">GPS tracking</span></a>
                                                -->
                                                <a href=\"\"><span class=\"pull-right label label-sm label-success\"><i class=\"fa fa-map-marker\"></i> ";
        // line 152
        echo $this->env->getExtension('translator')->getTranslator()->trans("Show related appointments", array(), "messages");
        echo "</span></a>

                                            </div>
                                            <div class=\"panel-body panel-scroll height-300\">
                                                <div id=\"divMap\"></div>
                                            </div>
                                        </div>



                                        <!--    <div class=\"panel panel-white space20\">
                                                <div class=\"panel-heading\" style=\"font-weight: bold;\">                                                
                                        ";
        // line 164
        echo $this->env->getExtension('translator')->getTranslator()->trans("ToDos", array(), "messages");
        // line 165
        echo "                                        <div class=\"panel-tools\">
                                            <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                                <i class=\"fa fa-times\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"panel-body panel-scroll height-300\">
                                        ";
        // line 172
        if (((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")) == "true")) {
            // line 173
            echo "                                            ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("No recent activities", array(), "messages");
            // line 174
            echo "                                        ";
        } else {
            // line 175
            echo "                                            <table class=\"table table-striped table-hover\">
                                                <tbody>
                                            ";
            // line 177
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
            foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
                // line 178
                echo "                                                <tr>
                                                    <td class=\"center\" style=\"color: #ADADAD;\">

                                                        <i class=\"fa fa-tasks\"></i>

                                                    </td>

                                                    <td>
                                                        <span class=\"bold-text text-small\"><a href=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "subject"), "html", null, true);
                echo "</a> </span>
                                                    </td>
                                                    <td>


                                                ";
                // line 191
                if (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "pending")) {
                    echo "                            
                                                    <span class=\"label label-sm label-success\">";
                    // line 192
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                ";
                } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "completed")) {
                    // line 194
                    echo "                                                    <span class=\"label label-sm label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                ";
                } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "planned")) {
                    // line 196
                    echo "                                                    <span class=\"label label-sm label-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                ";
                } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "cancelled")) {
                    // line 198
                    echo "                                                    <span class=\"label label-sm label-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                ";
                } else {
                    // line 200
                    echo "                                                    <span class=\"label label-sm label-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                    echo "</span>
                                                ";
                }
                // line 202
                echo "                                            </td>
                                            <td class=\"center\" style=\"color: #ADADAD;\"><strong>Start :</strong> ";
                // line 203
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "startDate"), "d-m-Y H:i"), "html", null, true);
                echo " <strong>End :</strong> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate"), "d-m-Y H:i"), "html", null, true);
                echo "</td>

                                        </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "
                                        </tbody>
                                    </table>
                                        ";
        }
        // line 211
        echo "
                                    </div>
                                </div>
                                        -->




                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end: PAGE CONTENT-->
            <div class=\"modal fade\" id=\"messageModal\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                            <h4 class=\"modal-title\">Send new message</h4>
                        </div>
                        <form id=\"messageForm\" action=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message/new", array("receiver" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                            <div class=\"modal-body\">

                                <div class=\"form-group\">
                                    <span>   
                                        ";
        // line 240
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")) {
            // line 241
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/user/profilepics/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")), "html", null, true);
            echo "\" alt=\"\" width=\"25\" height=\"25\" >
                                        ";
        } else {
            // line 243
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"\"  width=\"25\" height=\"25\"></td>

                                        ";
        }
        // line 246
        echo "                                        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "
                                    </span>
                                </div>

                                <div class=\"form-group\">

                                    ";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">

                                    ";
        // line 257
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text"), 'widget');
        echo "
                                </div>

                                ";
        // line 260
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                <button type=\"button\" class=\"btn btn-primary\"  type=\"submit\" id=\"messageBTN\">Send</button>
                            </div>
                        </form>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>


        ";
        // line 275
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "693f760_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760_jquery-2.1.1.min_1.js");
            // line 278
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

        ";
        } else {
            // asset "693f760"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

        ";
        }
        unset($context["asset_url"]);
        // line 280
        echo "                                                  
        <script type=\"text/javascript\">
            \$(\"#messageBTN\").click(function (e) {
                e.preventDefault();
                \$(\"#messageForm\").submit();
            });
        </script>
        <script type=\"text/javascript\" src=\"http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0&mkt=fr-fr\"></script>

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
        // line 330
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "zipCode"), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
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
        return "UserBundle:Contributors:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 330,  523 => 280,  507 => 278,  503 => 275,  485 => 260,  479 => 257,  471 => 252,  459 => 246,  452 => 243,  446 => 241,  444 => 240,  434 => 235,  408 => 211,  402 => 207,  390 => 203,  387 => 202,  381 => 200,  375 => 198,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 177,  326 => 175,  323 => 174,  320 => 173,  318 => 172,  309 => 165,  307 => 164,  292 => 152,  288 => 150,  286 => 149,  269 => 134,  262 => 133,  258 => 132,  254 => 130,  251 => 129,  247 => 128,  237 => 121,  233 => 120,  226 => 116,  222 => 115,  215 => 111,  206 => 105,  194 => 96,  189 => 94,  181 => 89,  176 => 87,  168 => 82,  163 => 80,  155 => 75,  150 => 73,  143 => 69,  134 => 63,  122 => 54,  104 => 39,  100 => 38,  94 => 34,  87 => 31,  81 => 29,  79 => 28,  70 => 24,  56 => 12,  53 => 11,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
