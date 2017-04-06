<?php

/* PagesBundle:History:show.html.twig */
class __TwigTemplate_fdbbda23f88639f255dfb4843aeda942b1f6c214c630ca5a1221c7f37c366be0 extends Twig_Template
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
        echo "    <li class=\"active\">Entities list</li>
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

                        <table class=\"table table-striped table-hover table-full-width display\"  cellspacing=\"0\" width=\"100%\" id=\"example\">
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
                echo "                                                <i class=\"fa fa-user\"></i>
                                            ";
            } elseif (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType") == "event")) {
                // line 65
                echo "                                                <i class=\"fa fa-clock-o\"></i>
                                            ";
            } else {
                // line 67
                echo "                                                <i class=\"fa fa-tasks\"></i>
                                            ";
            }
            // line 69
            echo "                                            <span class=\"bold-text text-small\">";
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
        // line 97
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18601e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18601e8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18601e8_jquery-2.1.1.min_1.js");
            // line 102
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
        // line 105
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
        return array (  287 => 118,  338 => 151,  332 => 148,  202 => 87,  126 => 67,  76 => 30,  275 => 85,  245 => 80,  339 => 153,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 93,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 118,  265 => 116,  250 => 132,  228 => 94,  213 => 116,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 59,  148 => 54,  333 => 151,  303 => 148,  299 => 125,  266 => 114,  197 => 60,  289 => 130,  205 => 82,  137 => 70,  124 => 57,  118 => 63,  239 => 127,  190 => 82,  186 => 76,  282 => 145,  267 => 117,  261 => 130,  180 => 83,  152 => 72,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 145,  320 => 173,  318 => 136,  307 => 164,  286 => 128,  262 => 113,  150 => 61,  134 => 55,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 130,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 76,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 88,  200 => 82,  194 => 83,  153 => 70,  146 => 60,  129 => 54,  304 => 127,  288 => 124,  284 => 117,  274 => 119,  259 => 109,  257 => 121,  251 => 129,  244 => 100,  233 => 114,  222 => 90,  218 => 94,  207 => 110,  185 => 97,  165 => 79,  155 => 70,  127 => 58,  104 => 39,  90 => 30,  211 => 91,  192 => 84,  181 => 75,  170 => 71,  84 => 27,  65 => 22,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 120,  255 => 134,  253 => 82,  249 => 81,  237 => 78,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 66,  53 => 11,  114 => 50,  97 => 24,  81 => 14,  77 => 12,  23 => 3,  175 => 68,  172 => 80,  160 => 76,  110 => 42,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 121,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 148,  314 => 146,  312 => 133,  309 => 150,  305 => 145,  298 => 128,  294 => 127,  285 => 132,  283 => 121,  278 => 120,  268 => 112,  264 => 116,  258 => 84,  252 => 105,  247 => 107,  241 => 108,  229 => 106,  220 => 70,  214 => 93,  177 => 74,  169 => 67,  140 => 53,  132 => 53,  128 => 67,  107 => 58,  61 => 14,  273 => 96,  269 => 117,  254 => 111,  243 => 109,  240 => 99,  238 => 105,  235 => 105,  230 => 93,  227 => 100,  224 => 121,  221 => 77,  219 => 105,  217 => 97,  208 => 89,  204 => 88,  179 => 73,  159 => 71,  143 => 66,  135 => 60,  119 => 56,  102 => 48,  71 => 22,  67 => 12,  63 => 16,  59 => 12,  87 => 23,  201 => 87,  196 => 81,  183 => 95,  171 => 67,  166 => 70,  163 => 65,  158 => 65,  156 => 73,  151 => 73,  142 => 57,  138 => 70,  136 => 52,  121 => 48,  117 => 37,  105 => 47,  91 => 36,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 13,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 26,  88 => 12,  78 => 36,  46 => 9,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 59,  123 => 57,  120 => 52,  115 => 39,  111 => 59,  108 => 33,  101 => 34,  98 => 16,  96 => 34,  83 => 35,  74 => 19,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 10,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 89,  199 => 85,  193 => 81,  189 => 102,  187 => 89,  182 => 77,  176 => 78,  173 => 42,  168 => 79,  164 => 78,  162 => 65,  154 => 64,  149 => 68,  147 => 66,  144 => 53,  141 => 54,  133 => 45,  130 => 69,  125 => 42,  122 => 65,  116 => 62,  112 => 44,  109 => 34,  106 => 41,  103 => 34,  99 => 29,  95 => 41,  92 => 14,  86 => 39,  82 => 32,  80 => 18,  73 => 19,  64 => 25,  60 => 16,  57 => 12,  54 => 13,  51 => 12,  48 => 13,  45 => 10,  42 => 6,  39 => 5,  36 => 6,  33 => 3,  30 => 1,);
    }
}
