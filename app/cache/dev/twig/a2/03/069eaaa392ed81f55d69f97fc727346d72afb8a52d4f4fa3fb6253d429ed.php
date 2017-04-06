<?php

/* PagesBundle:Event:show.html.twig */
class __TwigTemplate_a203069eaaa392ed81f55d69f97fc727346d72afb8a52d4f4fa3fb6253d429ed extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("events");
        echo "\">
            ";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Events list", array(), "messages");
        // line 7
        echo "        </a>
    </li>
    <li class=\"active\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
        echo "</li>
    ";
    }

    // line 12
    public function block_mainContent($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class=\"panel panel-white\">
        <div class=\"panel-body\">
            <div id=\"readEvent\" style=\"display: block;\">
                <div class=\"noteWrap col-md-8 col-md-offset-2\">
                    <div class=\"panel panel-note\">

                        <div class=\"panel-heading\">
                            <div class=\"col-md-12\">
                                <h2 class=\"event-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
        echo "</h2>
                                <div class=\"btn-group options-toggle pull-right\">
                                    <button class=\"btn dropdown-toggle btn-transparent-grey\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-cog\"></i>
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-light pull-right\">
                                        <li>
                                            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\" class=\"edit-event\">
                                                <i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        // line 32
        echo "                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/delete", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\" class=\"delete-event\">
                                                <i class=\"fa fa-times\"></i> ";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Remove", array(), "messages");
        // line 37
        echo "                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-body\" style=\"background: transparent;\">

                            <div class=\"note-content\">                 
                                <div class=\"col-md-6\">
                                    ";
        // line 47
        if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "planned")) {
            echo "                            
                                        <span class=\"label label-sm label-success\">";
            // line 48
            echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
            echo "</span>
                                    ";
        } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "cancelled")) {
            // line 50
            echo "                                        <span class=\"label label-sm label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
            echo "</span>
                                    ";
        } else {
            // line 52
            echo "                                        <span class=\"label label-sm label-warning\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
            echo "</span>
                                    ";
        }
        // line 53
        echo " 
                                    <span class=\"event-allday\" style=\"display: inline;\">";
        // line 54
        if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "callback") == 0)) {
            echo "<i class=\"fa fa-check\"></i>
                                        ";
        } else {
            // line 55
            echo $this->env->getExtension('translator')->getTranslator()->trans("No", array(), "messages");
            // line 56
            echo "                                            ";
        }
        echo " ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Callback", array(), "messages");
        echo "</span>
                                        </div>
                                        <div class=\"col-md-12\">

                                            <div class=\"event-start\"><p>";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("Start", array(), "messages");
        echo ":</p>
                                                <div class=\"event-day\"><h2>";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "d"), "html", null, true);
        echo "</h2></div>
                                                <div class=\"event-date\"><h3>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "m-Y"), "html", null, true);
        echo "</h3></div>
                                                <div class=\"event-time\"><h3><i class=\"fa fa-clock-o\"></i> ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "H:i"), "html", null, true);
        echo "</h3></div>
                                            </div>
                                            <div class=\"event-end\" style=\"display: block;\"><p>";
        // line 65
        echo $this->env->getExtension('translator')->getTranslator()->trans("End", array(), "messages");
        echo ":</p>
                                                <div class=\"event-day\"><h2>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "d"), "html", null, true);
        echo "</h2></div>
                                                <div class=\"event-date\"><h3>";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "m-Y"), "html", null, true);
        echo "</h3></div>
                                                <div class=\"event-time\"><h3><i class=\"fa fa-clock-o\"></i> ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "H:i"), "html", null, true);
        echo "</h3></div>

                                            </div>
                                        </div>


                                        <div class=\"col-md-12\">
                                            <hr>
                                            <span class=\"author-note\">";
        // line 76
        echo $this->env->getExtension('translator')->getTranslator()->trans("Appointment with", array(), "messages");
        echo ": <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity", array("id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "entity"), "html", null, true);
        echo "</a></span></br>
                                            <span class=\"author-note\">";
        // line 77
        echo $this->env->getExtension('translator')->getTranslator()->trans("Assigned To", array(), "messages");
        echo ": <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "user"), "html", null, true);
        echo "</a></span>
                                        </div>

                                        <div class=\"col-md-12\" style=\"margin-bottom: 5%;\">
                                            <hr>
                                            <div>";
        // line 82
        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description");
        echo "</div>
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
        return "PagesBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  76 => 30,  275 => 85,  245 => 80,  339 => 153,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 86,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 118,  265 => 116,  250 => 132,  228 => 94,  213 => 116,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 59,  148 => 58,  333 => 151,  303 => 148,  299 => 152,  266 => 114,  197 => 60,  289 => 130,  205 => 82,  137 => 53,  124 => 57,  118 => 55,  239 => 127,  190 => 91,  186 => 76,  282 => 145,  267 => 117,  261 => 137,  180 => 83,  152 => 79,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 155,  320 => 173,  318 => 172,  307 => 164,  286 => 128,  262 => 113,  150 => 61,  134 => 55,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 93,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 82,  200 => 82,  194 => 77,  153 => 70,  146 => 60,  129 => 54,  304 => 127,  288 => 124,  284 => 123,  274 => 119,  259 => 109,  257 => 135,  251 => 129,  244 => 100,  233 => 120,  222 => 90,  218 => 95,  207 => 110,  185 => 52,  165 => 86,  155 => 70,  127 => 58,  104 => 39,  90 => 30,  211 => 91,  192 => 84,  181 => 83,  170 => 88,  84 => 27,  65 => 22,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 149,  255 => 134,  253 => 82,  249 => 81,  237 => 78,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 66,  53 => 11,  114 => 50,  97 => 48,  81 => 14,  77 => 12,  23 => 3,  175 => 68,  172 => 80,  160 => 76,  110 => 42,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 121,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 148,  314 => 146,  312 => 98,  309 => 150,  305 => 145,  298 => 128,  294 => 127,  285 => 132,  283 => 121,  278 => 120,  268 => 112,  264 => 116,  258 => 84,  252 => 105,  247 => 107,  241 => 79,  229 => 97,  220 => 70,  214 => 106,  177 => 82,  169 => 67,  140 => 73,  132 => 53,  128 => 67,  107 => 37,  61 => 14,  273 => 96,  269 => 117,  254 => 111,  243 => 106,  240 => 99,  238 => 105,  235 => 97,  230 => 93,  227 => 81,  224 => 121,  221 => 77,  219 => 91,  217 => 76,  208 => 89,  204 => 88,  179 => 73,  159 => 71,  143 => 66,  135 => 60,  119 => 56,  102 => 48,  71 => 14,  67 => 12,  63 => 15,  59 => 12,  87 => 35,  201 => 87,  196 => 81,  183 => 95,  171 => 67,  166 => 76,  163 => 65,  158 => 63,  156 => 73,  151 => 73,  142 => 57,  138 => 70,  136 => 56,  121 => 48,  117 => 42,  105 => 47,  91 => 36,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 37,  88 => 12,  78 => 36,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 12,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 59,  123 => 57,  120 => 52,  115 => 39,  111 => 27,  108 => 45,  101 => 34,  98 => 16,  96 => 34,  83 => 35,  74 => 19,  66 => 27,  55 => 12,  52 => 11,  50 => 8,  43 => 10,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 85,  203 => 102,  199 => 85,  193 => 87,  189 => 77,  187 => 89,  182 => 80,  176 => 78,  173 => 42,  168 => 79,  164 => 78,  162 => 73,  154 => 62,  149 => 68,  147 => 66,  144 => 74,  141 => 54,  133 => 69,  130 => 59,  125 => 49,  122 => 54,  116 => 56,  112 => 44,  109 => 48,  106 => 41,  103 => 34,  99 => 34,  95 => 41,  92 => 14,  86 => 39,  82 => 32,  80 => 31,  73 => 19,  64 => 25,  60 => 19,  57 => 12,  54 => 13,  51 => 12,  48 => 13,  45 => 9,  42 => 6,  39 => 6,  36 => 6,  33 => 3,  30 => 1,);
    }
}
