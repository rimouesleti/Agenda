<?php

/* PagesBundle:Todo:showAll.html.twig */
class __TwigTemplate_f2e7a56e2e4a5037420e3cf2345d10379e3db030de3f7649ef2561782891ec15 extends Twig_Template
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
        echo "<li class=\"active\"> Todos list</li>
";
    }

    // line 5
    public function block_mainContent($context, array $blocks = array())
    {
        // line 6
        echo "  ";
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
        echo "<div class=\"container\" >

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
        echo $this->env->getExtension('routing')->getPath("todo/new");
        echo "\">
                            Add New <i class=\"fa fa-plus\"></i>
                        </a>
                    </div>
                    <table class=\"table table-striped table-hover table-full-width\" cellspacing=\"0\" width=\"100%\" id=\"example\">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th class=\"hidden-xs\">Username</th>
                                <th>Entity Name</th>
                                <th class=\"hidden-xs\">Status</th>
                                <th>Start Date</th>
                                <th>Due Date</th>  
                                <th></th>



                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 68
            echo "                        <td >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "subject"), "html", null, true);
            echo "</td>
                        <td class=\"hidden-xs\" >";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "user"), "html", null, true);
            echo "</td>                       
                        <td >";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "entity"), "html", null, true);
            echo "</td>
                        <td class=\"hidden-xs\">   ";
            // line 71
            if (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "pending")) {
                echo "                            
                            <span class=\"label label-sm label-success\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                echo "</span>
                                ";
            } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "completed")) {
                // line 74
                echo "                            <span class=\"label label-sm label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                echo "</span>
                            ";
            } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "planned")) {
                // line 76
                echo "                            <span class=\"label label-sm label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                echo "</span>
                            ";
            } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "cancelled")) {
                // line 78
                echo "                            <span class=\"label label-sm label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                echo "</span>
                                  ";
            } else {
                // line 80
                echo "                            <span class=\"label label-sm label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
                echo "</span>
                              ";
            }
            // line 81
            echo "  </td>
                        
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "startDate"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate"), "Y-m-d H:i"), "html", null, true);
            echo "</td>



                        <td class=\"center\">
                            <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
                                <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo/edit", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-blue tooltips\" data-placement=\"top\" data-original-title=\"Edit\"><i class=\"fa fa-edit\"></i></a>
                                <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-green tooltips\" data-placement=\"top\" data-original-title=\"Show\"><i class=\"fa fa-share\"></i></a>
                                <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo/delete", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-red tooltips\" data-placement=\"top\" data-original-title=\"Remove\" ><i class=\"fa fa-times fa fa-white\"></i></a>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo/edit", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-share\"></i> Show
                                            </a>
                                        </li>
                                        <li>
                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo/delete", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
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
        // line 139
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18601e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery-2.1.1.min_1.js");
            // line 144
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
        // line 147
        echo "
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Todo:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 122,  190 => 91,  186 => 90,  282 => 127,  267 => 117,  261 => 114,  180 => 85,  152 => 72,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 246,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 198,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 177,  326 => 175,  320 => 173,  318 => 172,  307 => 164,  286 => 149,  262 => 144,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 96,  215 => 111,  191 => 76,  184 => 73,  178 => 71,  113 => 43,  310 => 144,  280 => 141,  276 => 136,  260 => 122,  242 => 111,  234 => 106,  212 => 92,  206 => 101,  200 => 83,  194 => 92,  153 => 59,  146 => 73,  129 => 66,  304 => 127,  288 => 150,  284 => 119,  274 => 121,  259 => 109,  257 => 108,  251 => 129,  244 => 103,  233 => 120,  222 => 111,  218 => 92,  207 => 110,  185 => 80,  165 => 69,  155 => 75,  127 => 52,  104 => 39,  90 => 30,  211 => 91,  192 => 87,  181 => 89,  170 => 77,  84 => 27,  65 => 26,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 174,  302 => 125,  291 => 134,  255 => 108,  253 => 104,  249 => 103,  237 => 121,  232 => 94,  226 => 116,  216 => 88,  188 => 86,  167 => 54,  53 => 11,  114 => 57,  97 => 36,  81 => 29,  77 => 32,  23 => 3,  175 => 48,  172 => 80,  160 => 63,  110 => 42,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 240,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 207,  398 => 129,  393 => 126,  387 => 202,  384 => 121,  381 => 200,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 165,  305 => 95,  298 => 124,  294 => 90,  285 => 132,  283 => 131,  278 => 116,  268 => 85,  264 => 110,  258 => 139,  252 => 80,  247 => 128,  241 => 98,  229 => 97,  220 => 70,  214 => 106,  177 => 84,  169 => 81,  140 => 72,  132 => 70,  128 => 69,  107 => 40,  61 => 12,  273 => 96,  269 => 134,  254 => 130,  243 => 99,  240 => 102,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 82,  159 => 66,  143 => 66,  135 => 53,  119 => 67,  102 => 32,  71 => 28,  67 => 26,  63 => 15,  59 => 12,  87 => 31,  201 => 82,  196 => 90,  183 => 84,  171 => 61,  166 => 76,  163 => 80,  158 => 71,  156 => 73,  151 => 76,  142 => 59,  138 => 70,  136 => 71,  121 => 45,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 38,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 32,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 16,  69 => 27,  47 => 10,  40 => 6,  37 => 5,  22 => 1,  246 => 104,  157 => 78,  145 => 74,  139 => 65,  131 => 52,  123 => 68,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 47,  98 => 41,  96 => 47,  83 => 35,  74 => 19,  66 => 27,  55 => 15,  52 => 9,  50 => 8,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 102,  199 => 85,  193 => 82,  189 => 94,  187 => 89,  182 => 66,  176 => 84,  173 => 83,  168 => 79,  164 => 78,  162 => 57,  154 => 70,  149 => 58,  147 => 66,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 54,  122 => 54,  116 => 41,  112 => 46,  109 => 34,  106 => 46,  103 => 39,  99 => 34,  95 => 41,  92 => 34,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 25,  60 => 6,  57 => 20,  54 => 17,  51 => 19,  48 => 15,  45 => 10,  42 => 6,  39 => 6,  36 => 6,  33 => 3,  30 => 1,);
    }
}
