<?php

/* PagesBundle:Todo:show.html.twig */
class __TwigTemplate_7b1357e7a9d380bc7dc51e68798679e03cccb78197380fad92b7061ec7694be1 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("todos");
        echo "\">
            Todos list
        </a>
    </li>
    <li class=\"active\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "subject"), "html", null, true);
        echo "</li>
    ";
    }

    // line 12
    public function block_mainContent($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"panel panel-white\">
        <div class=\"panel-body\">
            <div id=\"readEvent\" style=\"display: block;\"> 
                <div class=\"noteWrap col-md-8 col-md-offset-2\">
                    <div class=\"panel panel-note\">

                        <div class=\"panel-heading\">
                            <div class=\"col-md-12\">
                                <h2>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "subject"), "html", null, true);
        echo " </h2>
                                <div class=\"btn-group options-toggle pull-right\">
                                    <button class=\"btn dropdown-toggle btn-transparent-grey\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-cog\"></i>
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-light pull-right\">
                                        <li>
                                            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo/edit", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
        echo "\" class=\"edit-event\">
                                                <i class=\"fa fa-pencil\"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todo/delete", array("id" => $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "id"))), "html", null, true);
        echo "\" class=\"delete-event\">
                                                <i class=\"fa fa-times\"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>                  

                        <div class=\"panel-body\" style=\"background: transparent;\">

                            <div class=\"note-content\">
                                <div class=\"col-md-6\">
                                    ";
        // line 48
        if (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "pending")) {
            echo "                            
                                        <span class=\"label label-sm label-success\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
            echo "</span>
                                    ";
        } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "completed")) {
            // line 51
            echo "                                        <span class=\"label label-sm label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
            echo "</span>
                                    ";
        } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "planned")) {
            // line 53
            echo "                                        <span class=\"label label-sm label-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
            echo "</span>
                                    ";
        } elseif (($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status") == "cancelled")) {
            // line 55
            echo "                                        <span class=\"label label-sm label-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
            echo "</span>
                                    ";
        } else {
            // line 57
            echo "                                        <span class=\"label label-sm label-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "status"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 59
        echo "                                </div>

                                <div class=\"col-md-12\">

                                    <div class=\"event-start\"><p>Start:</p>
                                        <div class=\"event-day\"><h2>";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "startDate"), "d"), "html", null, true);
        echo "</h2></div>
                                        <div class=\"event-date\"><h3>";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "startDate"), "m-Y"), "html", null, true);
        echo "</h3></div>
                                        <div class=\"event-time\"><h3><i class=\"fa fa-clock-o\"></i> ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "startDate"), "H:i"), "html", null, true);
        echo "</h3></div>
                                    </div>
                                    <div class=\"event-end\" style=\"display: block;\"><p>End:</p>
                                        <div class=\"event-day\"><h2>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate"), "d"), "html", null, true);
        echo "</h2></div>
                                        <div class=\"event-date\"><h3>";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate"), "m-Y"), "html", null, true);
        echo "</h3></div>
                                        <div class=\"event-time\"><h3><i class=\"fa fa-clock-o\"></i> ";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate"), "H:i"), "html", null, true);
        echo "</h3></div>

                                    </div>
                                </div>


                                <div class=\"col-md-12\">
                                    <hr>
                                    <span class=\"author-note\">Created by: ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "user"), "html", null, true);
        echo "</span>
                                </div>
                                ";
        // line 81
        if ($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "entity")) {
            // line 82
            echo "                                    <div class=\"col-md-12\">
                                        <hr>
                                        <span class=\"author-note\">Related to: <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity", array("id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "entity"), "html", null, true);
            echo "</a></span>
                                    </div>
                                ";
        }
        // line 87
        echo "
                                <div class=\"col-md-12\" style=\"margin-bottom: 5%;\">
                                    <hr>
                                    ";
        // line 90
        echo $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description");
        echo "
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Todo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 64,  124 => 57,  118 => 55,  239 => 122,  190 => 91,  186 => 90,  282 => 127,  267 => 117,  261 => 114,  180 => 85,  152 => 72,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 246,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 198,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 177,  326 => 175,  320 => 173,  318 => 172,  307 => 164,  286 => 149,  262 => 144,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 96,  215 => 111,  191 => 76,  184 => 73,  178 => 71,  113 => 43,  310 => 144,  280 => 141,  276 => 136,  260 => 122,  242 => 111,  234 => 106,  212 => 92,  206 => 101,  200 => 83,  194 => 90,  153 => 59,  146 => 73,  129 => 66,  304 => 127,  288 => 150,  284 => 119,  274 => 121,  259 => 109,  257 => 108,  251 => 129,  244 => 103,  233 => 120,  222 => 111,  218 => 92,  207 => 110,  185 => 80,  165 => 69,  155 => 70,  127 => 52,  104 => 39,  90 => 30,  211 => 91,  192 => 87,  181 => 84,  170 => 79,  84 => 27,  65 => 26,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 174,  302 => 125,  291 => 134,  255 => 108,  253 => 104,  249 => 103,  237 => 121,  232 => 94,  226 => 116,  216 => 88,  188 => 86,  167 => 54,  53 => 11,  114 => 57,  97 => 48,  81 => 29,  77 => 32,  23 => 3,  175 => 81,  172 => 80,  160 => 63,  110 => 42,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 240,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 207,  398 => 129,  393 => 126,  387 => 202,  384 => 121,  381 => 200,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 165,  305 => 95,  298 => 124,  294 => 90,  285 => 132,  283 => 131,  278 => 116,  268 => 85,  264 => 110,  258 => 139,  252 => 80,  247 => 128,  241 => 98,  229 => 97,  220 => 70,  214 => 106,  177 => 82,  169 => 81,  140 => 72,  132 => 70,  128 => 69,  107 => 40,  61 => 21,  273 => 96,  269 => 134,  254 => 130,  243 => 99,  240 => 102,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 82,  159 => 71,  143 => 66,  135 => 53,  119 => 67,  102 => 32,  71 => 28,  67 => 26,  63 => 15,  59 => 12,  87 => 31,  201 => 82,  196 => 90,  183 => 84,  171 => 61,  166 => 76,  163 => 80,  158 => 71,  156 => 73,  151 => 69,  142 => 59,  138 => 70,  136 => 71,  121 => 45,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 38,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 32,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 27,  47 => 10,  40 => 6,  37 => 5,  22 => 1,  246 => 104,  157 => 78,  145 => 66,  139 => 65,  131 => 52,  123 => 68,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 49,  98 => 41,  96 => 47,  83 => 35,  74 => 19,  66 => 27,  55 => 15,  52 => 9,  50 => 8,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 85,  203 => 102,  199 => 85,  193 => 82,  189 => 87,  187 => 89,  182 => 66,  176 => 84,  173 => 83,  168 => 79,  164 => 78,  162 => 57,  154 => 70,  149 => 58,  147 => 66,  144 => 60,  141 => 65,  133 => 55,  130 => 59,  125 => 54,  122 => 54,  116 => 41,  112 => 53,  109 => 34,  106 => 51,  103 => 39,  99 => 34,  95 => 41,  92 => 34,  86 => 28,  82 => 22,  80 => 34,  73 => 19,  64 => 25,  60 => 6,  57 => 20,  54 => 17,  51 => 13,  48 => 12,  45 => 10,  42 => 9,  39 => 6,  36 => 6,  33 => 3,  30 => 1,);
    }
}
