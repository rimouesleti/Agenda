<?php

/* PagesBundle:Event:showAll.html.twig */
class __TwigTemplate_d3589e4d150d33bf7442273f528a570b9a6c109abda97f7bacc60f0ba12f508b extends Twig_Template
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
                        <div class=\"col-md-12 space20\">
                            <a class=\"btn btn-green add-row\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("event/new");
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
                                    <th>";
        // line 54
        echo $this->env->getExtension('translator')->getTranslator()->trans("Subject", array(), "messages");
        echo "</th>                               
                                    <th class=\"hidden-xs\">";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact Name", array(), "messages");
        echo "</th>
                                    <th class=\"hidden-xs\">";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contributor", array(), "messages");
        echo "</th>
                                    <th class=\"hidden-xs\">";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "</th>
                                    <th class=\"hidden-xs\">";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("Callback", array(), "messages");
        echo "</th>
                                    <th>";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("Start Date", array(), "messages");
        echo "</th>
                                    <th>";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("End Date", array(), "messages");
        echo "</th>                                   
                                    <th></th>


                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 68
            echo "                                    <tr>
                                        <td >
                                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
            echo "
                                        </td>                      
                                        <td class=\"hidden-xs\" >";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "entity"), "html", null, true);
            echo "</td>
                                        <td class=\"hidden-xs\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "user"), "html", null, true);
            echo "</td>
                                        <td class=\"hidden-xs\">  
                                            ";
            // line 75
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "planned")) {
                echo "                            
                                                <span class=\"label label-sm label-success\">";
                // line 76
                echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
                echo "</span>
                                            ";
            } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "cancelled")) {
                // line 78
                echo "                                                <span class=\"label label-sm label-danger\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
                echo "</span>
                                            ";
            } else {
                // line 80
                echo "                                                <span class=\"label label-sm label-warning\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
                echo "</span>
                                            ";
            }
            // line 82
            echo "                                        </td>
                                        <td class=\"hidden-xs\">
                                            ";
            // line 84
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "callback") == 0)) {
                echo "Yes
                                            ";
            } else {
                // line 85
                echo "No
                                            ";
            }
            // line 87
            echo "                                        </td>
                                        <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "Y-m-d H:i"), "html", null, true);
            echo "</td>



                                        <td class=\"center\">
                                            <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
                                                <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-blue tooltips\" data-placement=\"top\" data-original-title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            echo "\"><i class=\"fa fa-edit\"></i></a>
                                                <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-green tooltips\" data-placement=\"top\" data-original-title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Show", array(), "messages");
            echo "\"><i class=\"fa fa-share\"></i></a>
                                                <a href=\"";
            // line 97
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
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\">
                                                                <i class=\"fa fa-edit\"></i> ";
            // line 107
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            // line 108
            echo "                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\">
                                                                <i class=\"fa fa-share\"></i> ";
            // line 112
            echo $this->env->getExtension('translator')->getTranslator()->trans("Show", array(), "messages");
            // line 113
            echo "                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/delete", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\">
                                                                <i class=\"fa fa-times\"></i> ";
            // line 117
            echo $this->env->getExtension('translator')->getTranslator()->trans("Remove", array(), "messages");
            // line 118
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
        // line 128
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
        // line 145
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18601e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery-2.1.1.min_1.js");
            // line 150
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
        // line 153
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
        return array (  339 => 153,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 86,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 118,  265 => 116,  250 => 132,  228 => 94,  213 => 116,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 78,  148 => 58,  333 => 151,  303 => 148,  299 => 152,  266 => 114,  197 => 85,  289 => 130,  205 => 82,  137 => 53,  124 => 57,  118 => 55,  239 => 127,  190 => 91,  186 => 90,  282 => 145,  267 => 117,  261 => 137,  180 => 83,  152 => 79,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 155,  320 => 173,  318 => 172,  307 => 164,  286 => 128,  262 => 113,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 93,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 118,  212 => 86,  206 => 85,  200 => 82,  194 => 90,  153 => 70,  146 => 58,  129 => 66,  304 => 127,  288 => 124,  284 => 123,  274 => 119,  259 => 109,  257 => 135,  251 => 129,  244 => 100,  233 => 120,  222 => 90,  218 => 95,  207 => 110,  185 => 76,  165 => 86,  155 => 70,  127 => 58,  104 => 39,  90 => 30,  211 => 91,  192 => 84,  181 => 83,  170 => 88,  84 => 27,  65 => 23,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 149,  255 => 134,  253 => 107,  249 => 108,  237 => 121,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 75,  53 => 11,  114 => 57,  97 => 48,  81 => 29,  77 => 32,  23 => 3,  175 => 72,  172 => 80,  160 => 76,  110 => 42,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 121,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 148,  314 => 146,  312 => 98,  309 => 150,  305 => 145,  298 => 128,  294 => 127,  285 => 132,  283 => 121,  278 => 120,  268 => 112,  264 => 116,  258 => 112,  252 => 105,  247 => 107,  241 => 99,  229 => 97,  220 => 70,  214 => 106,  177 => 82,  169 => 67,  140 => 73,  132 => 53,  128 => 67,  107 => 37,  61 => 12,  273 => 96,  269 => 117,  254 => 111,  243 => 106,  240 => 99,  238 => 105,  235 => 97,  230 => 93,  227 => 81,  224 => 121,  221 => 77,  219 => 91,  217 => 95,  208 => 89,  204 => 88,  179 => 73,  159 => 71,  143 => 66,  135 => 60,  119 => 56,  102 => 48,  71 => 28,  67 => 26,  63 => 15,  59 => 12,  87 => 31,  201 => 87,  196 => 81,  183 => 95,  171 => 76,  166 => 76,  163 => 66,  158 => 72,  156 => 73,  151 => 73,  142 => 57,  138 => 70,  136 => 54,  121 => 48,  117 => 42,  105 => 46,  91 => 27,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 36,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 10,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 59,  123 => 57,  120 => 60,  115 => 55,  111 => 54,  108 => 45,  101 => 34,  98 => 47,  96 => 34,  83 => 35,  74 => 19,  66 => 27,  55 => 12,  52 => 11,  50 => 8,  43 => 10,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 85,  203 => 102,  199 => 85,  193 => 87,  189 => 77,  187 => 89,  182 => 80,  176 => 78,  173 => 68,  168 => 79,  164 => 78,  162 => 73,  154 => 70,  149 => 68,  147 => 66,  144 => 74,  141 => 54,  133 => 69,  130 => 59,  125 => 49,  122 => 54,  116 => 56,  112 => 44,  109 => 37,  106 => 41,  103 => 34,  99 => 34,  95 => 41,  92 => 34,  86 => 39,  82 => 22,  80 => 37,  73 => 19,  64 => 25,  60 => 19,  57 => 18,  54 => 17,  51 => 14,  48 => 13,  45 => 8,  42 => 6,  39 => 5,  36 => 6,  33 => 3,  30 => 1,);
    }
}
