<?php

/* UserBundle:Contributors:detail.html.twig */
class __TwigTemplate_d136a7938bc8d9d3cae7eb3d9cae362ac4bbd072b0dafe29d895100495c66547 extends Twig_Template
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
        return array (  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 246,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 198,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 177,  326 => 175,  320 => 173,  318 => 172,  307 => 164,  286 => 149,  262 => 133,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 152,  270 => 114,  263 => 110,  248 => 104,  225 => 96,  215 => 111,  191 => 76,  184 => 73,  178 => 71,  113 => 43,  310 => 144,  280 => 141,  276 => 136,  260 => 122,  242 => 111,  234 => 106,  212 => 92,  206 => 105,  200 => 83,  194 => 96,  153 => 59,  146 => 73,  129 => 66,  304 => 127,  288 => 150,  284 => 119,  274 => 115,  259 => 109,  257 => 108,  251 => 129,  244 => 103,  233 => 120,  222 => 115,  218 => 92,  207 => 87,  185 => 80,  165 => 69,  155 => 75,  127 => 52,  104 => 39,  90 => 39,  211 => 91,  192 => 87,  181 => 89,  170 => 77,  84 => 32,  65 => 26,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 174,  302 => 125,  291 => 134,  255 => 108,  253 => 104,  249 => 103,  237 => 121,  232 => 94,  226 => 116,  216 => 88,  188 => 86,  167 => 54,  53 => 11,  114 => 57,  97 => 36,  81 => 29,  77 => 32,  23 => 3,  175 => 48,  172 => 80,  160 => 63,  110 => 47,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 240,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 207,  398 => 129,  393 => 126,  387 => 202,  384 => 121,  381 => 200,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 165,  305 => 95,  298 => 124,  294 => 90,  285 => 132,  283 => 131,  278 => 116,  268 => 85,  264 => 110,  258 => 132,  252 => 80,  247 => 128,  241 => 98,  229 => 97,  220 => 70,  214 => 91,  177 => 81,  169 => 70,  140 => 71,  132 => 50,  128 => 49,  107 => 40,  61 => 12,  273 => 96,  269 => 134,  254 => 130,  243 => 99,  240 => 102,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 82,  159 => 66,  143 => 69,  135 => 53,  119 => 50,  102 => 32,  71 => 28,  67 => 26,  63 => 15,  59 => 14,  87 => 31,  201 => 82,  196 => 90,  183 => 84,  171 => 61,  166 => 76,  163 => 80,  158 => 71,  156 => 66,  151 => 64,  142 => 59,  138 => 70,  136 => 51,  121 => 45,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 38,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 32,  46 => 14,  44 => 15,  27 => 4,  79 => 28,  72 => 16,  69 => 27,  47 => 10,  40 => 11,  37 => 9,  22 => 1,  246 => 104,  157 => 56,  145 => 57,  139 => 45,  131 => 52,  123 => 51,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 47,  98 => 41,  96 => 34,  83 => 35,  74 => 27,  66 => 27,  55 => 15,  52 => 9,  50 => 8,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 85,  203 => 86,  199 => 85,  193 => 82,  189 => 94,  187 => 85,  182 => 66,  176 => 87,  173 => 71,  168 => 82,  164 => 64,  162 => 57,  154 => 70,  149 => 58,  147 => 66,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 54,  116 => 41,  112 => 46,  109 => 34,  106 => 46,  103 => 39,  99 => 38,  95 => 41,  92 => 34,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 25,  60 => 6,  57 => 20,  54 => 17,  51 => 19,  48 => 15,  45 => 9,  42 => 6,  39 => 6,  36 => 6,  33 => 3,  30 => 1,);
    }
}
