<?php

/* UserBundle:Contributors:show.html.twig */
class __TwigTemplate_75886d5b84f354391034ced5185db8c44914585055bf8ddac11c1757639b21b1 extends Twig_Template
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

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 3
        echo "    <li class=\"active\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contributors List", array(), "messages");
        echo " </li>
    ";
    }

    // line 5
    public function block_mainContent($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c3aedc9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c3aedc9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c3aedc9_jquery.dataTables_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "c3aedc9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c3aedc9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c3aedc9.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    <div class=\"container\" >


        <!-- start: PAGE CONTENT -->
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-md-12\">
                <!-- start: DYNAMIC TABLE PANEL -->
                <div class=\"panel panel-white\">
                    <div class=\"panel-heading\">

                        <div class=\"panel-tools\">
                            <div class=\"dropdown\">
                                <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                    <i class=\"fa fa-cog\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                    <li>
                                        <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                    </li>
                                    <li>
                                        <a class=\"panel-refresh\" href=\"#\">
                                            <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class=\"panel-expand\" href=\"#\">
                                            <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <div class=\"panel-body\">
                        ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "                            <div class=\"col-md-12 space20\">
                                <a class=\"btn btn-green add-row\" href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
                                    ";
            // line 50
            echo $this->env->getExtension('translator')->getTranslator()->trans("Add New", array(), "messages");
            echo " <i class=\"fa fa-plus\"></i>
                                </a>
                            </div>
                            <table class=\"table table-striped table-hover table-full-width display\" cellspacing=\"0\" width=\"100%\" id=\"example\">

                                <thead>
                                    <tr>
                                        <th class=\"center\">#</th>
                                        <th class=\"center\">";
            // line 58
            echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
            echo "</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th class=\"hidden-xs\">";
            // line 61
            echo $this->env->getExtension('translator')->getTranslator()->trans("Last Logged In", array(), "messages");
            echo "</th>
                                        <th class=\"hidden-xs\">Role</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo "\t
                                        <tr>

                                            <td class=\"center\">
                                                ";
                // line 71
                if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")) {
                    // line 72
                    echo "                                                    <img src=\"";
                    echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/user/profilepics/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")), "html", null, true);
                    echo " \" alt=\"\" width=\"25\" height=\"25\">
                                                ";
                } else {
                    // line 74
                    echo "                                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
                    echo "\" alt=\"\" width=\"25\" height=\"25\"></td>

                                            ";
                }
                // line 77
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
                echo "</td>                           
                                            <td >";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mphone"), "html", null, true);
                echo "</td>
                                            <td class=\"hidden-xs\">";
                // line 80
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin"), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                                            <td class=\"hidden-xs\">";
                // line 81
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 82
                    echo "                                                ";
                    if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                        // line 83
                        echo "                                                    <span class=\"label label-sm label-danger\">Admin</span>
                                                ";
                    } else {
                        // line 85
                        echo "                                                    <span class=\"label label-sm label-success\">User</span>
                                                ";
                    }
                    // line 86
                    echo "  
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "</td>

                                        <td class=\"center\">
                                            <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
                                                <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-blue tooltips\" data-placement=\"top\" data-original-title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
                echo "\"><i class=\"fa fa-edit\"></i></a>
                                                <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-green tooltips\" data-placement=\"top\" data-original-title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Show", array(), "messages");
                echo "\"><i class=\"fa fa-share\"></i></a>
                                                <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor/delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-red tooltips\" data-placement=\"top\" data-original-title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Remove", array(), "messages");
                echo "\" ><i class=\"fa fa-times fa fa-white\"></i></a>
                                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-green tooltips\" data-placement=\"top\" data-original-title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Calendar", array(), "messages");
                echo "\" ><i class=\"fa fa-calendar fa fa-white\"></i></a>

                                            </div>
                                            <div class=\"visible-xs visible-sm hidden-md hidden-lg\">
                                                <div class=\"btn-group\">
                                                    <a class=\"btn btn-green dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                    </a>
                                                    <ul role=\"menu\" class=\"dropdown-menu pull-right dropdown-dark\">
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-edit\"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-share\"></i> Show
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor/delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-times\"></i> Remove
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div></td>

                                    </tr>


                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t
                                    </tbody>
                                </table>
                                ";
        } else {
            // line 129
            echo "                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 130
            echo $this->env->getExtension('translator')->getTranslator()->trans("You don't have enough privilege to view this list", array(), "messages");
            echo ".

                                    </div>
                                    ";
        }
        // line 134
        echo "                                    </div>
                                </div>
                                <!-- end: DYNAMIC TABLE PANEL -->
                            </div>
                        </div>

                        <!-- end: PAGE CONTENT-->


                    </div>

                    ";
        // line 145
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18601e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery-2.1.1.min_1.js");
            // line 150
            echo "                    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

                    ";
            // asset "18601e8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery.dataTables.min_2.js");
            echo "                    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

                    ";
            // asset "18601e8_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_table-data_3.js");
            echo "                    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

                    ";
        } else {
            // asset "18601e8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8.js");
            echo "                    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

                    ";
        }
        unset($context["asset_url"]);
        // line 153
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "UserBundle:Contributors:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 153,  304 => 150,  300 => 145,  287 => 134,  280 => 130,  277 => 129,  271 => 125,  253 => 114,  245 => 109,  237 => 104,  222 => 94,  216 => 93,  210 => 92,  204 => 91,  198 => 87,  191 => 86,  187 => 85,  183 => 83,  180 => 82,  176 => 81,  172 => 80,  168 => 79,  164 => 78,  157 => 77,  150 => 74,  144 => 72,  142 => 71,  133 => 67,  124 => 61,  118 => 58,  107 => 50,  103 => 49,  100 => 48,  98 => 47,  61 => 12,  47 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
