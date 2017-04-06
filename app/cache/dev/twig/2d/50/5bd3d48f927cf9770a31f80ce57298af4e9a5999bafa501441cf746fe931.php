<?php

/* PagesBundle:Entity:showAll.html.twig */
class __TwigTemplate_2d505bd3d48f927cf9770a31f80ce57298af4e9a5999bafa501441cf746fe931 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact list", array(), "messages");
        echo "</li>
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
                        <div class=\"col-md-12 space20\">
                            <a class=\"btn btn-green add-row\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("entities/new");
        echo "\">
                                 ";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add New", array(), "messages");
        echo " <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                        <table class=\"table table-striped table-hover table-full-width display\"  cellspacing=\"0\" width=\"100%\" id=\"example\">
                            <thead>
                                <tr>
                                    <th class=\"center\">#</th>
                                    <th>";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</th>
                                    <th class=\"hidden-xs\">";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("Creator", array(), "messages");
        echo "</th>
                                   
                                    <th class=\"hidden-xs\">";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "</th>
                                    <th>Email</th>
                                    <th  class=\"hidden-xs\">";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("Speciality", array(), "messages");
        echo "</th>                                   
                                    <th class=\"hidden-xs\">";
        // line 61
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country", array(), "messages");
        echo "</th>
                                    <th class=\"hidden-xs\">";
        // line 62
        echo $this->env->getExtension('translator')->getTranslator()->trans("City", array(), "messages");
        echo "</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 69
            echo "
                                    <tr>
                                        <td class=\"center\">
                                            ";
            // line 72
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")) {
                // line 73
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")), "html", null, true);
                echo " \" alt=\"\" width=\"25\" height=\"25\">
                                            ";
            } else {
                // line 75
                echo "                                                ";
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sort") == "company")) {
                    // line 76
                    echo "                                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/Company.png"), "html", null, true);
                    echo " \" alt=\"\" width=\"25\" height=\"25\">

                                                ";
                } else {
                    // line 79
                    echo "                                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
                    echo " \" alt=\"\" width=\"25\" height=\"25\">
                                                ";
                }
                // line 80
                echo "  
                                            ";
            }
            // line 82
            echo "                                        </td>
                                        <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"));
            echo "</td>
                                        <td class=\"hidden-xs\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "html", null, true);
            echo "</td>                           
                                        
                                        <td class=\"hidden-xs\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                                        <td  class=\"hidden-xs\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "speciality"), "html", null, true);
            echo "</td>
                                        <td class=\"hidden-xs\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
            echo "</td>
                                        <td class=\"hidden-xs\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
            echo "</td>

                                        <td class=\"center\">
                                            <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
                                                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-blue tooltips\" data-placement=\"top\" data-original-title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            echo "\"><i class=\"fa fa-edit\"></i></a>
                                                <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-green tooltips\" data-placement=\"top\" data-original-title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Show", array(), "messages");
            echo "\"><i class=\"fa fa-share\"></i></a>
                                                <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entities/delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-red tooltips\" data-placement=\"top\" data-original-title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Remove", array(), "messages");
            echo "\" ><i class=\"fa fa-times fa fa-white\"></i></a>
                                            </div>
                                            <div class=\"visible-xs visible-sm hidden-md hidden-lg\">
                                                <div class=\"btn-group\">
                                                    <a class=\"btn btn-green dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                    </a>
                                                    <ul role=\"menu\" class=\"dropdown-menu pull-right dropdown-dark\">
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                                                                <i class=\"fa fa-edit\"></i> ";
            // line 106
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            // line 107
            echo "                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                                                                <i class=\"fa fa-share\"></i> ";
            // line 111
            echo $this->env->getExtension('translator')->getTranslator()->trans("Show", array(), "messages");
            // line 112
            echo "                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entities/delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                                                                <i class=\"fa fa-times\"></i> ";
            // line 116
            echo $this->env->getExtension('translator')->getTranslator()->trans("Remove", array(), "messages");
            // line 117
            echo "                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div></td>

                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: DYNAMIC TABLE PANEL -->
            </div>
        </div>

        <!-- end: PAGE CONTENT-->

        <div class=\"subviews\">
            <div class=\"subviews-container\"></div>
        </div>
    </div>

    ";
        // line 143
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18601e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery-2.1.1.min_1.js");
            // line 148
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "18601e8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery.dataTables.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "18601e8_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_table-data_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "18601e8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 151
        echo "

";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Entity:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 151,  306 => 148,  302 => 143,  283 => 126,  269 => 117,  267 => 116,  263 => 115,  258 => 112,  256 => 111,  252 => 110,  247 => 107,  245 => 106,  241 => 105,  227 => 96,  221 => 95,  215 => 94,  208 => 90,  204 => 89,  200 => 88,  196 => 87,  192 => 86,  187 => 84,  183 => 83,  180 => 82,  176 => 80,  170 => 79,  163 => 76,  160 => 75,  154 => 73,  152 => 72,  147 => 69,  143 => 68,  134 => 62,  130 => 61,  126 => 60,  121 => 58,  116 => 56,  112 => 55,  102 => 48,  98 => 47,  61 => 12,  47 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
