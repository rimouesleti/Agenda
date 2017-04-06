<?php

/* PagesBundle:Default:index.html.twig */
class __TwigTemplate_1d2412a90e7b7dbaf867174213106d8172e63b26c49785817ae7098997ac6447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_mainContent($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"container\">
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"panel panel-red panel-calendar\">
                    <div class=\"panel-heading border-light\">
                        <h4 class=\"panel-title\">";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Today Appointments", array(), "messages");
        echo "</h4>
                        <div class=\"panel-tools\">
                            <div class=\"dropdown\">
                                <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
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
                            <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"height-300\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <div class=\"actual-date\">
                                        <span class=\"actual-day\"></span>
                                        <span class=\"actual-month\"></span>
                                    </div>
                                </div>
                                <div class=\"col-xs-6\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <div class=\"clock-wrapper\">
                                                <div class=\"clock\">
                                                    <div class=\"circle\">
                                                        <div class=\"face\">
                                                            <div id=\"hour\"></div>
                                                            <div id=\"minute\"></div>
                                                            <div id=\"second\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <div class=\"weather text-light\">
                                                <i class=\"wi-day-sunny\"></i>
                                                25°
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"row\">
                                        ";
        // line 77
        if (((isset($context["appointement"]) ? $context["appointement"] : $this->getContext($context, "appointement")) == "true")) {
            // line 78
            echo "                                            <div class=\"appointments border-top border-bottom border-light space15\">
                                                <a class=\"btn btn-sm owl-prev text-light\">
                                                    <i class=\"fa fa-chevron-left\"></i>
                                                </a>
                                                <div class=\"e-slider owl-carousel owl-theme\" data-plugin-options='{\"transitionStyle\": \"goDown\", \"pagination\": false}'>
                                                    ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 84
                echo "
                                                        ";
                // line 85
                if ((twig_date_format_filter($this->env, (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")), "d-m-Y") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "d-m-Y"))) {
                    // line 86
                    echo "                                                            <div class=\"item\">

                                                                <div class=\"inline-block padding-10\">
                                                                    <span class=\"bold-text text-small\"><a style=\"color:white;\" href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
                    echo "</a></span>
                                                                    <span class=\"text-light text-small\">with ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "entity"), "html", null, true);
                    echo "</span>
                                                                </div>
                                                                <div class=\"inline-block padding-10 border-left border-light\">
                                                                    <span class=\"bold-text text-small\"><i class=\"fa fa-clock-o\"></i> ";
                    // line 93
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "H:i"), "html", null, true);
                    echo "</span>

                                                                </div>
                                                            </div>

                                                        ";
                }
                // line 99
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
                                                </div>
                                                <a class=\"btn btn-sm owl-next text-light\"><i class=\"fa fa-chevron-right\"></i> </a>
                                            </div>
                                        ";
        } else {
            // line 106
            echo "                                            <hr>
                                            <span class=\"bold-text text-small\" style=\"padding:5px\"><i class=\"fa fa-fw fa-exclamation\"></i> No appointement for today</span>
                                            <hr>
                                        ";
        }
        // line 110
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"pull-right\">
                                        <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("event/new");
        echo "\" class=\"btn btn-sm btn-transparent-white new-event\"><i class=\"fa fa-plus\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("New Event", array(), "messages");
        echo " </a>
                                        <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "Id"))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-transparent-white show-calendar\"><i class=\"fa fa-calendar-o\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calendar", array(), "messages");
        echo " </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"panel panel-white\">
                    <div class=\"panel-heading border-light\">
                        <h4 class=\"panel-title\">";
        // line 128
        echo $this->env->getExtension('translator')->getTranslator()->trans("History", array(), "messages");
        echo "</h4>
                        <div class=\"panel-tools\">
                            <div class=\"dropdown\">
                                <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                    <i class=\"fa fa-cog\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                    <li>
                                        <a class=\"panel-all\" href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("histories");
        echo "\">
                                            <i class=\"fa fa-list\"></i> <span>";
        // line 137
        echo $this->env->getExtension('translator')->getTranslator()->trans("Show All", array(), "messages");
        echo "</span>
                                        </a>
                                    </li>
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
                            <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"panel-body no-padding\">

                        <div class=\"tabbable no-margin no-padding partition-dark\">

                            <div class=\"tab-content partition-white\">
                                <div id=\"users_tab_example1\" class=\"tab-pane padding-bottom-5 active\">
                                    <div class=\"panel-scroll height-317 ps-container\" style=\"height: 317px;\">
                                        <table class=\"table table-striped table-hover\">
                                            <tbody>
                                                ";
        // line 170
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : $this->getContext($context, "histories")));
        foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
            // line 171
            echo "                                                    <tr>
                                                        <td class=\"center\" style=\"color: #ADADAD;\">
                                                            ";
            // line 173
            if (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType") == "entity")) {
                // line 174
                echo "                                                                <i class=\"fa fa-user\"></i>
                                                            ";
            } elseif (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType") == "event")) {
                // line 176
                echo "                                                                <i class=\"fa fa-clock-o\"></i>
                                                            ";
            } else {
                // line 178
                echo "                                                                <i class=\"fa fa-tasks\"></i>
                                                            ";
            }
            // line 180
            echo "                                                        </td>
                                                        <td>
                                                            <span class=\"bold-text text-small\">";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "user"), "html", null, true);
            echo " 
                                                                ";
            // line 183
            if (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "action") == "updated")) {
                // line 184
                echo "                                                                    ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("updated", array(), "messages");
                echo " 
                                                                ";
            } elseif (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "action") == "deleted")) {
                // line 186
                echo "                                                                     ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "messages");
                // line 187
                echo "                                                                ";
            } else {
                // line 188
                echo "                                                                   ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("created", array(), "messages");
                // line 189
                echo "                                                                ";
            }
            // line 190
            echo "                                                                
                                                                
                                                                ";
            // line 192
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
                                                        <td class=\"center\" style=\"color: #ADADAD;\">";
            // line 194
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "date"), "d-m-Y H:i"), "html", null, true);
            echo "</td>

                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "
                                            </tbody>
                                        </table>
                                        <div class=\"center\">
                                            <hr>
                                            <a href=\"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("histories");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Show All history", array(), "messages");
        echo "</a>
                                        </div>
                                        <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px; width: 320px; display: none;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px; height: 230px; display: inherit;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 152px;\"></div></div></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    ";
        // line 217
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "693f760_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760_jquery-2.1.1.min_1.js");
            // line 221
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "693f760"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 224
        echo "    <script>
        \$('.panel-refresh').click(function (e) {
            e.preventDefault();
            \$.ajax({
                url: '";
        // line 228
        echo $this->env->getExtension('routing')->getPath("history/reload");
        echo "',
                type: \"POST\",
                cache: \"false\",
                dataType: \"html\",
                success: function (data) {
                    \$(\"tbody\").html(data);
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 224,  300 => 189,  297 => 188,  279 => 182,  287 => 118,  338 => 151,  332 => 198,  202 => 128,  126 => 86,  76 => 30,  275 => 180,  245 => 80,  339 => 203,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 93,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 178,  265 => 116,  250 => 132,  228 => 94,  213 => 136,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 59,  148 => 54,  333 => 151,  303 => 190,  299 => 125,  266 => 114,  197 => 60,  289 => 130,  205 => 82,  137 => 90,  124 => 85,  118 => 63,  239 => 127,  190 => 82,  186 => 117,  282 => 145,  267 => 176,  261 => 173,  180 => 116,  152 => 99,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 217,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 145,  320 => 173,  318 => 136,  307 => 192,  286 => 128,  262 => 113,  150 => 61,  134 => 55,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 130,  292 => 147,  270 => 114,  263 => 174,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 76,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 88,  200 => 82,  194 => 83,  153 => 70,  146 => 60,  129 => 54,  304 => 127,  288 => 124,  284 => 117,  274 => 119,  259 => 109,  257 => 171,  251 => 129,  244 => 100,  233 => 114,  222 => 90,  218 => 94,  207 => 110,  185 => 97,  165 => 79,  155 => 70,  127 => 58,  104 => 39,  90 => 30,  211 => 91,  192 => 84,  181 => 75,  170 => 71,  84 => 27,  65 => 22,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 186,  255 => 134,  253 => 170,  249 => 81,  237 => 78,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 66,  53 => 11,  114 => 50,  97 => 24,  81 => 14,  77 => 12,  23 => 3,  175 => 68,  172 => 110,  160 => 76,  110 => 78,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 228,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 221,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 194,  314 => 146,  312 => 133,  309 => 150,  305 => 145,  298 => 128,  294 => 187,  285 => 184,  283 => 183,  278 => 120,  268 => 112,  264 => 116,  258 => 84,  252 => 105,  247 => 107,  241 => 108,  229 => 106,  220 => 70,  214 => 93,  177 => 74,  169 => 67,  140 => 53,  132 => 53,  128 => 67,  107 => 58,  61 => 14,  273 => 96,  269 => 117,  254 => 111,  243 => 109,  240 => 99,  238 => 105,  235 => 105,  230 => 93,  227 => 100,  224 => 121,  221 => 77,  219 => 105,  217 => 137,  208 => 89,  204 => 88,  179 => 73,  159 => 101,  143 => 93,  135 => 60,  119 => 56,  102 => 48,  71 => 22,  67 => 12,  63 => 16,  59 => 12,  87 => 23,  201 => 87,  196 => 81,  183 => 95,  171 => 67,  166 => 106,  163 => 65,  158 => 65,  156 => 73,  151 => 73,  142 => 57,  138 => 70,  136 => 52,  121 => 84,  117 => 83,  105 => 47,  91 => 36,  62 => 23,  49 => 12,  38 => 6,  31 => 5,  28 => 4,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 13,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 26,  88 => 12,  78 => 36,  46 => 9,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 89,  123 => 57,  120 => 52,  115 => 39,  111 => 59,  108 => 77,  101 => 34,  98 => 16,  96 => 34,  83 => 35,  74 => 19,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 10,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 89,  199 => 85,  193 => 81,  189 => 102,  187 => 89,  182 => 77,  176 => 78,  173 => 42,  168 => 79,  164 => 78,  162 => 65,  154 => 64,  149 => 68,  147 => 66,  144 => 53,  141 => 54,  133 => 45,  130 => 69,  125 => 42,  122 => 65,  116 => 62,  112 => 44,  109 => 34,  106 => 41,  103 => 34,  99 => 29,  95 => 41,  92 => 14,  86 => 39,  82 => 32,  80 => 18,  73 => 19,  64 => 25,  60 => 16,  57 => 12,  54 => 13,  51 => 12,  48 => 13,  45 => 10,  42 => 6,  39 => 11,  36 => 6,  33 => 3,  30 => 1,);
    }
}
