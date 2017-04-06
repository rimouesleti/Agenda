<?php

/* PagesBundle:Event:showAll.html.twig */
class __TwigTemplate_6145de7098ac162095b42c9847bc155d916ad0bf14440fd7c5f1d332b0143083 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Events list", array(), "messages");
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
                           ";
        // line 46
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "                        <div class=\"col-md-12 space20\">
                            <a class=\"btn btn-green add-row\" href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("event/new");
            echo "\">
                                ";
            // line 49
            echo $this->env->getExtension('translator')->getTranslator()->trans("Add New", array(), "messages");
            echo " <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                        <table class=\"table table-striped table-hover table-full-width display\"  cellspacing=\"0\" width=\"100%\" id=\"example\">
                            <thead>
                                <tr>
                                    <th>";
            // line 55
            echo $this->env->getExtension('translator')->getTranslator()->trans("Subject", array(), "messages");
            echo "</th>                               
                                    <th class=\"hidden-xs\">";
            // line 56
            echo $this->env->getExtension('translator')->getTranslator()->trans("Contact", array(), "messages");
            echo "</th>
                                    <th class=\"hidden-xs\">";
            // line 57
            echo $this->env->getExtension('translator')->getTranslator()->trans("Contributor", array(), "messages");
            echo "</th>
                                    <th class=\"hidden-xs\">";
            // line 58
            echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
            echo "</th>
                                    <th class=\"hidden-xs\">";
            // line 59
            echo $this->env->getExtension('translator')->getTranslator()->trans("Callback", array(), "messages");
            echo "</th>
                                    <th>";
            // line 60
            echo $this->env->getExtension('translator')->getTranslator()->trans("Start Date", array(), "messages");
            echo "</th>
                                    <th>";
            // line 61
            echo $this->env->getExtension('translator')->getTranslator()->trans("End Date", array(), "messages");
            echo "</th>                                   
                                    <th></th>


                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 69
                echo "                                    <tr>
                                        <td >
                                            ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
                echo "
                                        </td>                      
                                        <td class=\"hidden-xs\" >";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "entity"), "html", null, true);
                echo "</td>
                                        <td class=\"hidden-xs\">
                                            ";
                // line 75
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "user"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 76
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                        echo ", ";
                    }
                    // line 77
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                                        </td>
                                        <td class=\"hidden-xs\">  
                                            ";
                // line 80
                if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "planned")) {
                    echo "                            
                                                <span class=\"label label-sm label-success\">";
                    // line 81
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
                    echo "</span>
                                            ";
                } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "cancelled")) {
                    // line 83
                    echo "                                                <span class=\"label label-sm label-danger\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
                    echo "</span>
                                            ";
                } else {
                    // line 85
                    echo "                                                <span class=\"label label-sm label-warning\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
                    echo "</span>
                                            ";
                }
                // line 87
                echo "                                        </td>
                                        <td class=\"hidden-xs\">
                                            ";
                // line 89
                if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "callback") == 0)) {
                    echo $this->env->getExtension('translator')->getTranslator()->trans("Yes", array(), "messages");
                    // line 90
                    echo "                                            ";
                } else {
                    echo "No
                                            ";
                }
                // line 92
                echo "                                        </td>
                                        <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "Y-m-d H:i"), "html", null, true);
                echo "</td>



                                        <td class=\"center\">
                                            <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
                                                <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-blue tooltips\" data-placement=\"top\" data-original-title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
                echo "\"><i class=\"fa fa-edit\"></i></a>
                                                <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-green tooltips\" data-placement=\"top\" data-original-title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Show", array(), "messages");
                echo "\"><i class=\"fa fa-share\"></i></a>
                                                <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/delete", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
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
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-edit\"></i> ";
                // line 112
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
                // line 113
                echo "                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-share\"></i> ";
                // line 117
                echo $this->env->getExtension('translator')->getTranslator()->trans("Show", array(), "messages");
                // line 118
                echo "                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/delete", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-times\"></i> ";
                // line 122
                echo $this->env->getExtension('translator')->getTranslator()->trans("Remove", array(), "messages");
                // line 123
                echo "                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "

                            </tbody>
                        </table>
                                ";
        } else {
            // line 138
            echo "                                     <div class=\"alert alert-danger\" role=\"alert\">
                                         <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 139
            echo $this->env->getExtension('translator')->getTranslator()->trans("You don't have enough privilege to view this list", array(), "messages");
            echo ".
                                           
                                        </div>
                                 ";
        }
        // line 143
        echo "                    </div>
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
        // line 156
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18601e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery-2.1.1.min_1.js");
            // line 161
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
        // line 164
        echo "
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Event:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 164,  365 => 161,  361 => 156,  346 => 143,  339 => 139,  336 => 138,  329 => 133,  314 => 123,  312 => 122,  308 => 121,  303 => 118,  301 => 117,  297 => 116,  292 => 113,  290 => 112,  286 => 111,  272 => 102,  266 => 101,  260 => 100,  251 => 94,  247 => 93,  244 => 92,  238 => 90,  235 => 89,  231 => 87,  225 => 85,  219 => 83,  214 => 81,  210 => 80,  206 => 78,  192 => 77,  184 => 76,  167 => 75,  162 => 73,  157 => 71,  153 => 69,  149 => 68,  139 => 61,  135 => 60,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  106 => 49,  102 => 48,  99 => 47,  97 => 46,  61 => 12,  47 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
