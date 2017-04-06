<?php

/* PagesBundle:Todo:newTodo.html.twig */
class __TwigTemplate_cab559522f2b6aa75d36775ec46d97f480a2b8a5110b27ee8cea5c43a7bab52f extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("todos");
        echo "\">
            Todos list
        </a>
    </li>
    <li class=\"active\">   New Todo 
    </li>
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
            // line 17
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
        // line 19
        echo "
    <div class=\"container\" style=\"margin-top: 20px;\" >
        <div class=\"panel panel-white\">
            <div class=\"panel-body\">
                <div class=\"noteWrap col-md-8 col-md-offset-2\">
                    <h3>Add new todo</h3>
                    <div class=\"col-md-12\">
                        <div class=\"errorHandler alert alert-danger no-display\">
                            <i class=\"fa fa-times-sign\"></i>  ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        </div>
                    </div>
                    <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("todo/new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">                               
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'widget', array("attr" => array("placeholder" => "Subject ...")));
        echo "
                                </div>
                            </div>
                            <div class=\"no-all-day-range\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <div class=\"form-group\">
                                            <label for=\"endDate\"><i class=\"fa fa-fw fa-clock-o\"></i>Start Date</label>
                                            ";
        // line 42
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
                                            <label for=\"dueDate\"><i class=\"fa fa-fw fa-clock-o\"></i> Due Date</label>
                                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dueDate"), 'widget');
        echo "

                                        </div>       
                                    </div>
                                </div>
                            </div>  



                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'label', array("label" => "Status"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget', array("attr" => array("class" => "selectpicker form-control event-categories ")));
        echo "
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entity"), 'label', array("label" => "Entity Name"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entity"), 'widget', array("attr" => array("style" => "width:100% ")));
        echo "
                                </div> 
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'label', array("label" => "User Name"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'widget', array("attr" => array("style" => "width:100% ", "class" => "selectpicker form-control ")));
        echo "
                                </div> 
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label" => "Description"));
        echo "
                                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "summernote")));
        echo "
                                </div>
                            </div>

                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <button class=\"btn btn-green col-md-4 col-xs-12\" type=\"submit\" style=\"margin-top: 5%;float: right;\">
                                <i class=\"fa fa-floppy-o\"></i> Submit
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    ";
        // line 102
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a415305_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a415305_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a415305_jquery-2.1.1.min_1.js");
            // line 110
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "a415305_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a415305_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a415305_bootstrap-datetimepicker_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "a415305_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a415305_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a415305_summernote.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "a415305_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a415305_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a415305_bootstrap-select_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "a415305_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a415305_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a415305_select2.min_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "a415305_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a415305_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a415305_newTodo_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "a415305"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a415305") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a415305.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 113
        echo "
    ";
        // line 114
        if ((isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id"))) {
            // line 115
            echo "        <script>

            \$(\"#icgm2_pagesbundle_todos_entity\").select2(\"val\", \"";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")), "html", null, true);
            echo "\");

        </script>
    ";
        } else {
            // line 121
            echo "        <script>

            \$('#icgm2_pagesbundle_todos_entity').select2('val', \$('#icgm2_pagesbundle_todos_entity option:eq(1)').val());

        </script>  
    ";
        }
        // line 127
        echo "
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Todo:newTodo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 127,  267 => 117,  261 => 114,  180 => 85,  152 => 72,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 246,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 198,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 177,  326 => 175,  320 => 173,  318 => 172,  307 => 164,  286 => 149,  262 => 133,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 152,  270 => 114,  263 => 115,  248 => 104,  225 => 96,  215 => 111,  191 => 76,  184 => 73,  178 => 71,  113 => 43,  310 => 144,  280 => 141,  276 => 136,  260 => 122,  242 => 111,  234 => 106,  212 => 92,  206 => 105,  200 => 83,  194 => 96,  153 => 59,  146 => 73,  129 => 66,  304 => 127,  288 => 150,  284 => 119,  274 => 121,  259 => 109,  257 => 108,  251 => 129,  244 => 103,  233 => 120,  222 => 115,  218 => 92,  207 => 110,  185 => 80,  165 => 69,  155 => 75,  127 => 52,  104 => 39,  90 => 30,  211 => 91,  192 => 87,  181 => 89,  170 => 77,  84 => 27,  65 => 26,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 174,  302 => 125,  291 => 134,  255 => 108,  253 => 104,  249 => 103,  237 => 121,  232 => 94,  226 => 116,  216 => 88,  188 => 86,  167 => 54,  53 => 11,  114 => 57,  97 => 36,  81 => 29,  77 => 32,  23 => 3,  175 => 48,  172 => 80,  160 => 63,  110 => 42,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 240,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 207,  398 => 129,  393 => 126,  387 => 202,  384 => 121,  381 => 200,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 165,  305 => 95,  298 => 124,  294 => 90,  285 => 132,  283 => 131,  278 => 116,  268 => 85,  264 => 110,  258 => 113,  252 => 80,  247 => 128,  241 => 98,  229 => 97,  220 => 70,  214 => 91,  177 => 81,  169 => 70,  140 => 71,  132 => 50,  128 => 49,  107 => 40,  61 => 12,  273 => 96,  269 => 134,  254 => 130,  243 => 99,  240 => 102,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 82,  159 => 66,  143 => 66,  135 => 53,  119 => 50,  102 => 32,  71 => 28,  67 => 26,  63 => 15,  59 => 14,  87 => 31,  201 => 82,  196 => 90,  183 => 84,  171 => 61,  166 => 76,  163 => 80,  158 => 71,  156 => 73,  151 => 64,  142 => 59,  138 => 70,  136 => 51,  121 => 45,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 38,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 32,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 16,  69 => 27,  47 => 10,  40 => 11,  37 => 9,  22 => 1,  246 => 104,  157 => 56,  145 => 57,  139 => 65,  131 => 52,  123 => 51,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 47,  98 => 41,  96 => 34,  83 => 35,  74 => 19,  66 => 27,  55 => 15,  52 => 9,  50 => 8,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 102,  199 => 85,  193 => 82,  189 => 94,  187 => 89,  182 => 66,  176 => 84,  173 => 71,  168 => 79,  164 => 78,  162 => 57,  154 => 70,  149 => 58,  147 => 66,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 54,  122 => 54,  116 => 41,  112 => 46,  109 => 34,  106 => 46,  103 => 39,  99 => 34,  95 => 41,  92 => 34,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 25,  60 => 6,  57 => 20,  54 => 17,  51 => 19,  48 => 15,  45 => 9,  42 => 6,  39 => 6,  36 => 6,  33 => 3,  30 => 1,);
    }
}
