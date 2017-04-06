<?php

/* PagesBundle:History:show.html.twig */
class __TwigTemplate_7ef2ab5f2f4d3fae5880bda037d1ee774e251e6c12160a3f24eb09c66a5c826a extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("History", array(), "messages");
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
            echo "                            <table class=\"table table-striped table-hover table-full-width display\"  cellspacing=\"0\" width=\"100%\" id=\"example\">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Date</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : $this->getContext($context, "histories")));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 59
                echo "
                                        <tr>
                                            <td>
                                                ";
                // line 62
                if (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType") == "entity")) {
                    // line 63
                    echo "                                                    <i class=\"fa fa-user\"></i>
                                                ";
                } elseif (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType") == "event")) {
                    // line 65
                    echo "                                                    <i class=\"fa fa-clock-o\"></i>
                                                ";
                } else {
                    // line 67
                    echo "                                                    <i class=\"fa fa-tasks\"></i>
                                                ";
                }
                // line 69
                echo "                                                <span class=\"bold-text text-small\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "user"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "action"), "html", null, true);
                echo " 
                                                    ";
                // line 70
                if ($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureId")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType"), array("id" => $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureId"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureName"), "html", null, true);
                    echo "</a>";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureName"), "html", null, true);
                    echo " ";
                }
                echo " </span>
                                            </td>
                                            <td style=\"color: #ADADAD;\">";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "date"), "d-m-Y H:i"), "html", null, true);
                echo "</td>



                                        </tr>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "

                                </tbody>
                            </table>
                        ";
        } else {
            // line 84
            echo "                            <div class=\"alert alert-danger\" role=\"alert\">
                                <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 85
            echo $this->env->getExtension('translator')->getTranslator()->trans("You don't have enough privilege", array(), "messages");
            echo ".

                            </div>
                        ";
        }
        // line 89
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
        // line 102
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18601e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery-2.1.1.min_1.js");
            // line 107
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
        // line 110
        echo "

";
    }

    public function getTemplateName()
    {
        return "PagesBundle:History:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 110,  206 => 107,  202 => 102,  187 => 89,  180 => 85,  177 => 84,  170 => 79,  157 => 72,  142 => 70,  135 => 69,  131 => 67,  127 => 65,  123 => 63,  121 => 62,  116 => 59,  112 => 58,  99 => 47,  97 => 46,  61 => 12,  47 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
