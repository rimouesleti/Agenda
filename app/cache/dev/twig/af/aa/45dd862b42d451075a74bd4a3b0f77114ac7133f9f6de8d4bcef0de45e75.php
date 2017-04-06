<?php

/* PagesBundle:Entity:new.html.twig */
class __TwigTemplate_afaa45dd862b42d451075a74bd4a3b0f77114ac7133f9f6de8d4bcef0de45e75 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("entities");
        echo "\">
            ";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact list", array(), "messages");
        // line 6
        echo "        </a>
    </li>
    <li class=\"active\">   ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("New Contact", array(), "messages");
        echo "  
    </li>
";
    }

    // line 11
    public function block_mainContent($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7571dc4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7571dc4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7571dc4_summernote_1.css");
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7571dc4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7571dc4_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7571dc4_select2_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "7571dc4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7571dc4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7571dc4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "    <div class=\"container\" >

        <!-- start: PAGE CONTENT -->
        <div class=\"row\" style=\"margin-top: 20px;\">

            <div class=\"col-md-12\">
                <!-- start: DYNAMIC TABLE PANEL -->
                <div class=\"panel panel-white\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add new Contact", array(), "messages");
        echo "</h4>
                        <hr>
                    </div>
                    <div class=\"panel-body\">

                        <div class=\"col-md-12\">
                            <div class=\"errorHandler alert alert-danger no-display\">
                                <i class=\"fa fa-times-sign\"></i>  ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            </div>
                        </div>
                        <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("entities/new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >

                            <div class=\"col-md-6 \" style=\"border-right: 1px solid #DDDDDD; padding-right: 15px;\">
                                <div class=\"form-group\">
                                    <div class=\"thumbnail\">
                                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"50\" height=\"50\">
                                        <div class=\"caption\" style=\"text-align: center;\">
                                            <button id=\"uploadBTN\" class=\"btn btn-light-grey btn-file\">
                                                <i class=\"fa fa-picture-o\"></i> ";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Select image", array(), "messages");
        echo "    
                                            </button>

                                        </div>
                                    </div>
                                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
                                </div> 
                                <div class=\"form-group\">
                                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label" => "Name"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort"), 'label', array("label" => "Sort"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label" => "Type"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort"), 'label', array("label" => "Speciality"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speciality"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label" => "email"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                                </div>


                                <div class=\"form-group\">
                                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label', array("label" => "phone"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'label', array("label" => "Website"));
        echo "
                                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'widget');
        echo "
                                </div>

                                <div id=\"employeesLabel\" class=\"form-group\" style=\"display:none;\">
                                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employees_number"), 'label', array("label" => "Employees number"));
        echo "
                                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employees_number"), 'widget');
        echo "
                                </div>
                                <div id=\"faxLabel\" class=\"form-group\" style=\"display:none;\">
                                    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'label', array("label" => "Fax"));
        echo "
                                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'widget');
        echo "
                                </div>

                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label', array("label" => "Country"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "

                                </div>
                                <div class=\"form-group\">

                                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label" => "City"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'label', array("label" => "Zip code"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label" => "Address"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "
                                </div>


                                <button id=\"getPositionBTN\" class=\"btn btn-green btn-block\" style=\"display:none;\" >
                                    <i class=\"fa fa-map-marker\"></i> Check position
                                </button>

                                ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget', array("attr" => array("style" => "display:none")));
        echo "

                                <div class=\"clear\"></div>

                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label" => "Description"));
        echo "

                                    ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "summernote")));
        echo "

                                </div>

                                ";
        // line 134
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
    </div>
    ";
        // line 148
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f12e53_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_jquery-2.1.1.min_1.js");
            // line 155
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "4f12e53_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "4f12e53_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_summernote.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "4f12e53_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_select2.min_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "4f12e53_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_editEntity_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "4f12e53"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 158
        echo "


";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Entity:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 78,  148 => 58,  333 => 151,  303 => 148,  299 => 143,  266 => 117,  197 => 88,  289 => 130,  205 => 82,  137 => 53,  124 => 57,  118 => 55,  239 => 122,  190 => 91,  186 => 90,  282 => 127,  267 => 117,  261 => 114,  180 => 83,  152 => 59,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 246,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 198,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 177,  326 => 155,  320 => 173,  318 => 172,  307 => 164,  286 => 149,  262 => 109,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 96,  215 => 111,  191 => 77,  184 => 84,  178 => 71,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 115,  242 => 106,  234 => 118,  212 => 86,  206 => 101,  200 => 83,  194 => 90,  153 => 59,  146 => 73,  129 => 66,  304 => 127,  288 => 150,  284 => 119,  274 => 121,  259 => 109,  257 => 108,  251 => 129,  244 => 107,  233 => 120,  222 => 90,  218 => 95,  207 => 110,  185 => 80,  165 => 69,  155 => 70,  127 => 61,  104 => 39,  90 => 30,  211 => 91,  192 => 87,  181 => 83,  170 => 79,  84 => 27,  65 => 22,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 174,  302 => 125,  291 => 134,  255 => 112,  253 => 111,  249 => 110,  237 => 121,  232 => 94,  226 => 91,  216 => 87,  188 => 86,  167 => 79,  53 => 11,  114 => 57,  97 => 48,  81 => 29,  77 => 32,  23 => 3,  175 => 81,  172 => 80,  160 => 76,  110 => 42,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 240,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 207,  398 => 129,  393 => 126,  387 => 202,  384 => 121,  381 => 200,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 148,  314 => 146,  312 => 98,  309 => 165,  305 => 134,  298 => 130,  294 => 90,  285 => 132,  283 => 121,  278 => 116,  268 => 112,  264 => 116,  258 => 108,  252 => 105,  247 => 128,  241 => 98,  229 => 97,  220 => 70,  214 => 106,  177 => 82,  169 => 67,  140 => 68,  132 => 70,  128 => 69,  107 => 37,  61 => 12,  273 => 96,  269 => 134,  254 => 130,  243 => 99,  240 => 99,  238 => 105,  235 => 74,  230 => 93,  227 => 81,  224 => 96,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 71,  159 => 71,  143 => 66,  135 => 53,  119 => 67,  102 => 48,  71 => 28,  67 => 26,  63 => 15,  59 => 12,  87 => 31,  201 => 81,  196 => 90,  183 => 72,  171 => 61,  166 => 76,  163 => 74,  158 => 62,  156 => 73,  151 => 73,  142 => 59,  138 => 70,  136 => 71,  121 => 45,  117 => 42,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 38,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 32,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 27,  47 => 10,  40 => 6,  37 => 5,  22 => 1,  246 => 104,  157 => 75,  145 => 66,  139 => 65,  131 => 50,  123 => 45,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 34,  98 => 47,  96 => 47,  83 => 35,  74 => 19,  66 => 27,  55 => 12,  52 => 11,  50 => 8,  43 => 9,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 102,  199 => 85,  193 => 87,  189 => 86,  187 => 89,  182 => 66,  176 => 84,  173 => 68,  168 => 79,  164 => 78,  162 => 63,  154 => 70,  149 => 72,  147 => 66,  144 => 69,  141 => 54,  133 => 55,  130 => 59,  125 => 45,  122 => 54,  116 => 56,  112 => 55,  109 => 37,  106 => 51,  103 => 34,  99 => 34,  95 => 41,  92 => 34,  86 => 28,  82 => 22,  80 => 18,  73 => 19,  64 => 25,  60 => 16,  57 => 16,  54 => 17,  51 => 13,  48 => 12,  45 => 8,  42 => 6,  39 => 5,  36 => 6,  33 => 3,  30 => 1,);
    }
}
