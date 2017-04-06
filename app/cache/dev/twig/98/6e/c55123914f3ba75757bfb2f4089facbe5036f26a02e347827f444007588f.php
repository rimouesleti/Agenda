<?php

/* UserBundle:Contributors:show.html.twig */
class __TwigTemplate_986ec55123914f3ba75757bfb2f4089facbe5036f26a02e347827f444007588f extends Twig_Template
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
        echo "           ";
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
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
                            ";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add New", array(), "messages");
        echo " <i class=\"fa fa-plus\"></i>
                        </a>
                    </div>
                    <table class=\"table table-striped table-hover table-full-width display\" cellspacing=\"0\" width=\"100%\" id=\"example\">

                        <thead>
                            <tr>
                                <th class=\"center\">#</th>
                                <th class=\"center\">";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th class=\"hidden-xs\">";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last Logged In", array(), "messages");
        echo "</th>
                                <th class=\"hidden-xs\">Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo "\t
                                <tr>

                                    <td class=\"center\">
                                        ";
            // line 70
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")) {
                // line 71
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/user/profilepics/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")), "html", null, true);
                echo " \" alt=\"\" width=\"25\" height=\"25\">
                                        ";
            } else {
                // line 73
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"25\" height=\"25\"></td>

                                    ";
            }
            // line 76
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</td>                           
                                    <td >";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mphone"), "html", null, true);
            echo "</td>
                                    <td class=\"hidden-xs\">";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                    <td class=\"hidden-xs\">";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 81
                echo "                                                            ";
                if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                    // line 82
                    echo "                                                                <span class=\"label label-sm label-danger\">Admin</span>
                                                            ";
                } else {
                    // line 84
                    echo "                                                                <span class=\"label label-sm label-success\">User</span>
                                                            ";
                }
                // line 85
                echo "  
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "</td>

                                    <td class=\"center\">
                                        <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
                                            <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-blue tooltips\" data-placement=\"top\" data-original-title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            echo "\"><i class=\"fa fa-edit\"></i></a>
                                            <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-green tooltips\" data-placement=\"top\" data-original-title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Show", array(), "messages");
            echo "\"><i class=\"fa fa-share\"></i></a>
                                            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor/delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
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
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">
                                                            <i class=\"fa fa-edit\"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">
                                                            <i class=\"fa fa-share\"></i> Show
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 111
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
        // line 122
        echo "\t
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: DYNAMIC TABLE PANEL -->
        </div>
    </div>

    <!-- end: PAGE CONTENT-->

   
</div>

";
        // line 136
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18601e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery-2.1.1.min_1.js");
            // line 141
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "18601e8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery.dataTables.min_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "18601e8_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_table-data_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        } else {
            // asset "18601e8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        }
        unset($context["asset_url"]);
        // line 144
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
        return array (  310 => 144,  280 => 141,  276 => 136,  260 => 122,  242 => 111,  234 => 106,  212 => 92,  206 => 91,  200 => 90,  194 => 86,  153 => 76,  146 => 73,  129 => 66,  304 => 127,  288 => 124,  284 => 121,  274 => 117,  259 => 109,  257 => 108,  251 => 105,  244 => 103,  233 => 98,  222 => 93,  218 => 92,  207 => 87,  185 => 80,  165 => 69,  155 => 65,  127 => 52,  104 => 47,  90 => 39,  211 => 97,  192 => 87,  181 => 82,  170 => 77,  84 => 36,  65 => 26,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 282,  487 => 264,  485 => 263,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 150,  302 => 139,  291 => 134,  255 => 105,  253 => 104,  249 => 103,  237 => 99,  232 => 94,  226 => 101,  216 => 88,  188 => 86,  167 => 54,  53 => 13,  114 => 57,  97 => 36,  81 => 33,  77 => 32,  23 => 3,  175 => 48,  172 => 80,  160 => 77,  110 => 47,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 97,  305 => 95,  298 => 137,  294 => 90,  285 => 132,  283 => 131,  278 => 118,  268 => 85,  264 => 110,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 97,  220 => 70,  214 => 91,  177 => 81,  169 => 70,  140 => 71,  132 => 57,  128 => 56,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 82,  159 => 66,  143 => 65,  135 => 53,  119 => 50,  102 => 32,  71 => 28,  67 => 26,  63 => 15,  59 => 14,  87 => 35,  201 => 82,  196 => 90,  183 => 84,  171 => 61,  166 => 76,  163 => 52,  158 => 71,  156 => 66,  151 => 64,  142 => 59,  138 => 70,  136 => 58,  121 => 52,  117 => 51,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  38 => 6,  31 => 4,  28 => 3,  26 => 11,  94 => 40,  89 => 38,  85 => 25,  75 => 19,  68 => 14,  56 => 21,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 37,  78 => 32,  46 => 14,  44 => 15,  27 => 4,  79 => 34,  72 => 16,  69 => 27,  47 => 10,  40 => 11,  37 => 9,  22 => 1,  246 => 104,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 47,  98 => 41,  96 => 34,  83 => 35,  74 => 14,  66 => 27,  55 => 15,  52 => 9,  50 => 17,  43 => 8,  41 => 10,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 86,  199 => 85,  193 => 82,  189 => 81,  187 => 85,  182 => 66,  176 => 81,  173 => 71,  168 => 79,  164 => 78,  162 => 57,  154 => 70,  149 => 51,  147 => 66,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 46,  103 => 49,  99 => 48,  95 => 41,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 25,  60 => 6,  57 => 20,  54 => 17,  51 => 19,  48 => 15,  45 => 24,  42 => 6,  39 => 5,  36 => 4,  33 => 3,  30 => 1,);
    }
}
