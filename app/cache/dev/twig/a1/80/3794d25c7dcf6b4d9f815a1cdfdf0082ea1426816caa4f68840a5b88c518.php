<?php

/* PagesBundle:Event:newEvt.html.twig */
class __TwigTemplate_a1803794d25c7dcf6b4d9f815a1cdfdf0082ea1426816caa4f68840a5b88c518 extends Twig_Template
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
        echo "    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("events");
        echo "\">
            ";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Events list", array(), "messages");
        // line 6
        echo "        </a>
    </li>
    <li class=\"active\">   ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("New event", array(), "messages");
        // line 9
        echo "    </li>
";
    }

    // line 11
    public function block_mainContent($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "03b06f0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_03b06f0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/03b06f0_select2_1.css");
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "03b06f0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_03b06f0_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/03b06f0_bootstrap-select_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "03b06f0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_03b06f0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/03b06f0.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
    <div class=\"container\" style=\"margin-top: 20px;\" >
        <div class=\"panel panel-white\">
            <div class=\"panel-body\" >
                <div class=\"noteWrap col-md-8 col-md-offset-2\">
                    <h3>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add new event", array(), "messages");
        echo "</h3>
                    <div class=\"col-md-12\">
                        <div class=\"errorHandler alert alert-danger no-display\">
                            <i class=\"fa fa-times-sign\"></i>  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        </div>
                    </div>
                    <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("event/new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">                               
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"no-all-day-range\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <div class=\"form-group\">
                                            <label for=\"startDate\" style=\"font-weight: bold;\"><i class=\"fa fa-fw fa-clock-o\"></i> ";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Start Date", array(), "messages");
        echo "</label>
                                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate"), 'widget');
        echo "


                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class=\"no-all-day-range\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <div class=\"form-group\">
                                            <label for=\"endDate\" style=\"font-weight: bold;\"><i class=\"fa fa-fw fa-clock-o\"></i> ";
        // line 52
        echo $this->env->getExtension('translator')->getTranslator()->trans("End Date", array(), "messages");
        echo "</label><span class=\"symbol required\"></span>
                                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate"), 'widget');
        echo "

                                        </div>       
                                    </div>
                                </div>
                            </div>  



                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                   <label for=\"status\" style=\"font-weight: bold;\">";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "<span class=\"symbol required\"></span></label>
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget', array("attr" => array("class" => "selectpicker  form-control event-categories ")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"callback\" style=\"font-weight: bold;\">";
        // line 70
        echo $this->env->getExtension('translator')->getTranslator()->trans("Callback", array(), "messages");
        echo "</label>
                                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "callback"), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                     <label for=\"entity\" style=\"font-weight: bold;\">";
        // line 76
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact Name", array(), "messages");
        echo "</label>
                                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entity"), 'widget', array("attr" => array("style" => "width:100% ")));
        echo "
                                </div> 
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                  <label for=\"user\" style=\"font-weight: bold;\">";
        // line 82
        echo $this->env->getExtension('translator')->getTranslator()->trans("Assigned To", array(), "messages");
        echo "</label>
                                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'widget', array("attr" => array("style" => "width:100% ")));
        echo "
                                </div> 
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                     <label for=\"description\" style=\"font-weight: bold;\">Description</label>
                                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "summernote")));
        echo "
                                </div>
                            </div>
                        </div>
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


                        <button class=\"btn btn-green col-md-4 col-xs-12\" type=\"submit\" style=\"margin-top: 5%;float: right;\">
                            <i class=\"fa fa-floppy-o\"></i> ";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit", array(), "messages");
        // line 98
        echo "                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    ";
        // line 106
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "93c8695_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_jquery-2.1.1.min_1.js");
            // line 114
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "93c8695_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_bootstrap-datetimepicker_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "93c8695_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_summernote.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "93c8695_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_bootstrap-select_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "93c8695_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_select2.min_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "93c8695_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_newEvent_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "93c8695"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 117
        echo "    ";
        if ((isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id"))) {
            // line 118
            echo "        <script>

            \$(\"#icgm2_pagesbundle_events_entity\").select2(\"val\", \"";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")), "html", null, true);
            echo "\");

        </script>
    
    ";
        }
        // line 125
        echo "    <script>
        \$('#icgm2_pagesbundle_events_user').select2();
        \$(\"#icgm2_pagesbundle_events_status option\").each(function (index, value) {
            var option = \$(this);
            if (option.val() === \"planned\") {
                option.attr('data-content', \"<span class='label label-info'>";
        // line 130
        echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
        echo "</span>\");
            }
            else if (option.val() === \"cancelled\") {
                option.attr('data-content', \"<span class='label label-danger'>";
        // line 133
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
        echo "</span>\");
            }
            else if (option.val() === \"held\") {
                option.attr('data-content', \"<span class='label label-warning'>";
        // line 136
        echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
        echo "</span>\");
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Event:newEvt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 118,  338 => 151,  332 => 148,  202 => 87,  126 => 53,  76 => 30,  275 => 85,  245 => 80,  339 => 153,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 93,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 118,  265 => 116,  250 => 132,  228 => 94,  213 => 116,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 59,  148 => 54,  333 => 151,  303 => 148,  299 => 125,  266 => 114,  197 => 60,  289 => 130,  205 => 82,  137 => 53,  124 => 57,  118 => 40,  239 => 127,  190 => 82,  186 => 76,  282 => 145,  267 => 117,  261 => 130,  180 => 83,  152 => 79,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 145,  320 => 173,  318 => 136,  307 => 164,  286 => 128,  262 => 113,  150 => 61,  134 => 55,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 130,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 76,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 88,  200 => 82,  194 => 83,  153 => 70,  146 => 60,  129 => 54,  304 => 127,  288 => 124,  284 => 117,  274 => 119,  259 => 109,  257 => 121,  251 => 129,  244 => 100,  233 => 114,  222 => 90,  218 => 94,  207 => 110,  185 => 52,  165 => 86,  155 => 70,  127 => 58,  104 => 39,  90 => 30,  211 => 91,  192 => 84,  181 => 75,  170 => 71,  84 => 27,  65 => 22,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 120,  255 => 134,  253 => 82,  249 => 81,  237 => 78,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 66,  53 => 11,  114 => 50,  97 => 24,  81 => 14,  77 => 12,  23 => 3,  175 => 68,  172 => 80,  160 => 76,  110 => 42,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 121,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 148,  314 => 146,  312 => 133,  309 => 150,  305 => 145,  298 => 128,  294 => 127,  285 => 132,  283 => 121,  278 => 120,  268 => 112,  264 => 116,  258 => 84,  252 => 105,  247 => 107,  241 => 108,  229 => 106,  220 => 70,  214 => 93,  177 => 74,  169 => 67,  140 => 53,  132 => 53,  128 => 67,  107 => 37,  61 => 14,  273 => 96,  269 => 117,  254 => 111,  243 => 109,  240 => 99,  238 => 105,  235 => 105,  230 => 93,  227 => 100,  224 => 121,  221 => 77,  219 => 98,  217 => 97,  208 => 89,  204 => 88,  179 => 73,  159 => 71,  143 => 66,  135 => 60,  119 => 56,  102 => 48,  71 => 22,  67 => 12,  63 => 16,  59 => 12,  87 => 23,  201 => 87,  196 => 81,  183 => 95,  171 => 67,  166 => 70,  163 => 65,  158 => 65,  156 => 73,  151 => 73,  142 => 57,  138 => 70,  136 => 52,  121 => 48,  117 => 37,  105 => 47,  91 => 36,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 13,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 26,  88 => 12,  78 => 36,  46 => 9,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 59,  123 => 57,  120 => 52,  115 => 39,  111 => 27,  108 => 33,  101 => 34,  98 => 16,  96 => 34,  83 => 35,  74 => 19,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 10,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 89,  199 => 85,  193 => 81,  189 => 80,  187 => 89,  182 => 77,  176 => 78,  173 => 42,  168 => 79,  164 => 78,  162 => 65,  154 => 64,  149 => 68,  147 => 66,  144 => 53,  141 => 54,  133 => 45,  130 => 59,  125 => 42,  122 => 41,  116 => 56,  112 => 44,  109 => 34,  106 => 41,  103 => 34,  99 => 29,  95 => 41,  92 => 14,  86 => 39,  82 => 32,  80 => 18,  73 => 19,  64 => 25,  60 => 16,  57 => 12,  54 => 13,  51 => 12,  48 => 13,  45 => 8,  42 => 6,  39 => 5,  36 => 6,  33 => 3,  30 => 1,);
    }
}
