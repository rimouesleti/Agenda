<?php

/* PagesBundle:Event:showCalendar.html.twig */
class __TwigTemplate_98ba2ac3359892f27ff67d51b3b209ddf5f0bbcb7012c05f9b8966c41217b256 extends Twig_Template
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
        echo "    <li class=\"active\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("My calendar", array(), "messages");
        echo "</li>
    ";
    }

    // line 5
    public function block_mainContent($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3a2ecb8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a2ecb8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3a2ecb8_perfect-scrollbar_1.css");
            // line 12
            echo "

    <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "3a2ecb8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a2ecb8_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3a2ecb8_bootstrap-timepicker_2.css");
            // line 12
            echo "

    <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "3a2ecb8_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a2ecb8_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3a2ecb8_fullcalendar_3.css");
            // line 12
            echo "

    <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "3a2ecb8_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a2ecb8_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3a2ecb8_fullcalendar.print_4.css");
            // line 12
            echo "

    <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "3a2ecb8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a2ecb8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3a2ecb8.css");
            // line 12
            echo "

    <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    <style type=\"text/css\">
        .fc-event .fc-event-title:before, .event-category:before {
            display: none;
        }</style>

    <div class=\"well\">
        <div id='calendar'></div>

    </div>


    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "65a09dc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65a09dc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/65a09dc_jquery-2.1.1.min_1.js");
            // line 39
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "65a09dc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65a09dc_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/65a09dc_jquery.mousewheel_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "65a09dc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65a09dc_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/65a09dc_bootstrap-timepicker_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "65a09dc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65a09dc_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/65a09dc_moment.min_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "65a09dc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65a09dc_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/65a09dc_jquery-ui.custom.min_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "65a09dc_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65a09dc_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/65a09dc_fullcalendar_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "65a09dc_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65a09dc_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/65a09dc_fr_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "65a09dc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65a09dc") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/65a09dc.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "


    <script>



        \$(document).ready(function () {

            function redirect() {
                window.location = \"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("event/new");
        echo "\";
            }
            var _mn = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            var _mns = ['janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'];
            var _dn = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
            var _dns = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];

            \$('#calendar').fullCalendar({                ";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "language") == "fr")) {
            // line 60
            echo "    


                        monthNames: _mn,
                        monthNamesShort: _mns,
                        dayNames: _dn,
                        dayNamesShort: _dns,                ";
        }
        // line 67
        echo "                                    header: {
                                        left: 'prev,next today',
                                        center: 'title',
                                        right: 'all,mandatory,not_mandatory,month,agendaWeek,agendaDay'
                                    },
                                    editable: true,
                                    selectable: true,
                                    selectHelper: true,
                                    eventLimit: true,
                                    events: [";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 77
            echo "                                        {
                                            id: '";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "id"), "html", null, true);
            echo "',
                                            title: '";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "subject"), "html", null, true);
            echo "',
                                            start: '";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "startDate"), "m/d/Y H:m:s"), "html", null, true);
            echo "',
                                            end: '";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "endDate"), "m/d/Y H:m:s"), "html", null, true);
            echo "',
                                            description: '";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "status"), "html", null, true);
            echo "'
                                        }
    ";
            // line 84
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
            } else {
                echo ",";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    , ],
                eventRender: function (event, element) {
                    element.children('.fc-event-inner').css({'color': 'white'});
                    if (event.description === \"planned\") {
                        element.children('.fc-event-inner').css({'background-color': '#5cb85c'});

                    }
                    else if (event.description === \"held\") {
                        element.children('.fc-event-inner').css({'background-color': '#f0ad4e'});


                    }
                    else {
                        element.children('.fc-event-inner').css({'background-color': '#d9534f'});

                    }


                },
                dayClick: function (date, jsEvent, view) {
                    redirect();
                    // console.log(date.format());

                    //console.log('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

                    //   console.log('Current view: ' + view.name);



                }
            });
        });



    </script>  


   

    ";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Event:showCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 85,  245 => 80,  339 => 153,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 86,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 118,  265 => 116,  250 => 132,  228 => 94,  213 => 116,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 59,  148 => 58,  333 => 151,  303 => 148,  299 => 152,  266 => 114,  197 => 60,  289 => 130,  205 => 82,  137 => 53,  124 => 57,  118 => 55,  239 => 127,  190 => 91,  186 => 90,  282 => 145,  267 => 117,  261 => 137,  180 => 83,  152 => 79,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 155,  320 => 173,  318 => 172,  307 => 164,  286 => 128,  262 => 113,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 93,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 67,  200 => 82,  194 => 90,  153 => 70,  146 => 58,  129 => 66,  304 => 127,  288 => 124,  284 => 123,  274 => 119,  259 => 109,  257 => 135,  251 => 129,  244 => 100,  233 => 120,  222 => 90,  218 => 95,  207 => 110,  185 => 52,  165 => 86,  155 => 70,  127 => 58,  104 => 39,  90 => 30,  211 => 91,  192 => 84,  181 => 83,  170 => 88,  84 => 27,  65 => 23,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 149,  255 => 134,  253 => 82,  249 => 81,  237 => 78,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 75,  53 => 11,  114 => 57,  97 => 48,  81 => 14,  77 => 12,  23 => 3,  175 => 72,  172 => 80,  160 => 76,  110 => 42,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 121,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 148,  314 => 146,  312 => 98,  309 => 150,  305 => 145,  298 => 128,  294 => 127,  285 => 132,  283 => 121,  278 => 120,  268 => 112,  264 => 116,  258 => 84,  252 => 105,  247 => 107,  241 => 79,  229 => 97,  220 => 70,  214 => 106,  177 => 82,  169 => 67,  140 => 73,  132 => 53,  128 => 67,  107 => 37,  61 => 14,  273 => 96,  269 => 117,  254 => 111,  243 => 106,  240 => 99,  238 => 105,  235 => 97,  230 => 93,  227 => 81,  224 => 121,  221 => 77,  219 => 91,  217 => 76,  208 => 89,  204 => 88,  179 => 73,  159 => 71,  143 => 66,  135 => 60,  119 => 56,  102 => 48,  71 => 14,  67 => 12,  63 => 15,  59 => 12,  87 => 31,  201 => 87,  196 => 81,  183 => 95,  171 => 76,  166 => 76,  163 => 66,  158 => 72,  156 => 73,  151 => 73,  142 => 57,  138 => 70,  136 => 54,  121 => 48,  117 => 42,  105 => 46,  91 => 27,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 12,  78 => 36,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 12,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 59,  123 => 57,  120 => 60,  115 => 39,  111 => 27,  108 => 45,  101 => 34,  98 => 16,  96 => 34,  83 => 35,  74 => 19,  66 => 27,  55 => 12,  52 => 11,  50 => 8,  43 => 10,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 85,  203 => 102,  199 => 85,  193 => 87,  189 => 77,  187 => 89,  182 => 80,  176 => 78,  173 => 42,  168 => 79,  164 => 78,  162 => 73,  154 => 70,  149 => 68,  147 => 66,  144 => 74,  141 => 54,  133 => 69,  130 => 59,  125 => 49,  122 => 54,  116 => 56,  112 => 44,  109 => 37,  106 => 41,  103 => 34,  99 => 34,  95 => 41,  92 => 14,  86 => 39,  82 => 22,  80 => 37,  73 => 19,  64 => 25,  60 => 19,  57 => 12,  54 => 17,  51 => 14,  48 => 13,  45 => 8,  42 => 6,  39 => 5,  36 => 6,  33 => 3,  30 => 1,);
    }
}
