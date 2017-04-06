<?php

/* UserBundle:Contributors:EditContributors.html.twig */
class __TwigTemplate_dd7035a8325877eed668aac60b008b3d8f5392d00c80b4db5332fda7f6d4c233 extends Twig_Template
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

    // line 2
    public function block_mainContent($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "54defac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_54defac_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/54defac_summernote_1.css");
            // line 6
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "54defac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_54defac") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/54defac.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "    <div class=\"container\" >

        <!-- start: PAGE CONTENT -->
        <div class=\"row\" style=\"margin-top: 20px;\">

            <div class=\"col-md-12\">
                <!-- start: DYNAMIC TABLE PANEL -->
                <div class=\"panel panel-white\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">Edit <span class=\"text-bold\">Contibutor</span></h4>
                        <hr>
                    </div>
                    <div class=\"panel-body\">

                        <div class=\"col-md-12\">
                            <div class=\"errorHandler alert alert-danger no-display\">
                                <i class=\"fa fa-times-sign\"></i>  ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            </div>
                        </div>
                        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor/edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >


                            <div class=\"col-md-6 \">
                                <div class=\"form-group\">
                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'label', array("label" => "Last Name"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors');
        echo "
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'label', array("label" => "First Name"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors');
        echo "
                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label', array("label" => "Username"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "  
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label" => "Email"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "

                                </div>

                                <div class=\"form-group\">

                                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'label', array("label" => "Role"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'errors');
        echo " 
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'widget');
        echo "

                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'label', array("label" => "Departement"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'errors');
        echo "
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"thumbnail\">
                                        ";
        // line 70
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")) {
            // line 71
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/user/profilepics/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")), "html", null, true);
            echo "\" alt=\"user-picture\" width=\"150\" height=\"150\">
                                        ";
        } else {
            // line 73
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"user-picture\" width=\"150\" height=\"150\" ></td>

                                        ";
        }
        // line 76
        echo "                                        <div class=\"caption\" style=\"text-align: center;\">
                                            <button id=\"uploadBTN\" class=\"btn btn-light-grey btn-file\">
                                                <i class=\"fa fa-picture-o\"></i> Select image     
                                            </button>

                                        </div>
                                    </div>
                                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
                                </div> 

                            </div>

                            <div class=\"col-md-6\">

                                <div class=\"form-group\">
                                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label', array("label" => "Phone"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
        echo "
                                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mphone"), 'label', array("label" => "Mobile Phone"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mphone"), 'errors');
        echo "
                                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mphone"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">

                                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label" => "Address"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors');
        echo "
                                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'label', array("label" => "Zip Code"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'errors');
        echo "
                                    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label', array("label" => "Country"));
        echo "
                                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'errors');
        echo "
                                    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label" => "City"));
        echo "
                                    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "
                                    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company_name"), 'label', array("label" => "Company Name"));
        echo "
                                    ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company_name"), 'errors');
        echo "
                                    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company_name"), 'widget');
        echo "
                                </div>



                            </div>

                            <input type=\"submit\" value=\"Submit\"  class=\"btn btn-success\" style=\"margin-top: 5%;float: right;\"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 140
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0d3dab6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d3dab6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d3dab6_jquery-2.1.1.min_1.js");
            // line 146
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "0d3dab6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d3dab6_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d3dab6_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "0d3dab6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d3dab6_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d3dab6_summernote.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "0d3dab6_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d3dab6_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d3dab6_editUser_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "0d3dab6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d3dab6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d3dab6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 149
        echo "
    <script>


    </script>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Contributors:EditContributors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 149,  327 => 146,  306 => 126,  292 => 121,  270 => 114,  263 => 110,  248 => 104,  225 => 96,  215 => 92,  191 => 76,  184 => 73,  178 => 71,  113 => 43,  310 => 144,  280 => 141,  276 => 136,  260 => 122,  242 => 111,  234 => 106,  212 => 92,  206 => 91,  200 => 83,  194 => 86,  153 => 59,  146 => 73,  129 => 66,  304 => 127,  288 => 120,  284 => 119,  274 => 115,  259 => 109,  257 => 108,  251 => 105,  244 => 103,  233 => 98,  222 => 93,  218 => 92,  207 => 87,  185 => 80,  165 => 69,  155 => 65,  127 => 52,  104 => 47,  90 => 39,  211 => 91,  192 => 87,  181 => 82,  170 => 77,  84 => 32,  65 => 26,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 282,  487 => 264,  485 => 263,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 140,  302 => 125,  291 => 134,  255 => 108,  253 => 104,  249 => 103,  237 => 99,  232 => 94,  226 => 101,  216 => 88,  188 => 86,  167 => 54,  53 => 13,  114 => 57,  97 => 36,  81 => 33,  77 => 32,  23 => 3,  175 => 48,  172 => 80,  160 => 63,  110 => 47,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 97,  305 => 95,  298 => 124,  294 => 90,  285 => 132,  283 => 131,  278 => 116,  268 => 85,  264 => 110,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 97,  220 => 70,  214 => 91,  177 => 81,  169 => 70,  140 => 71,  132 => 50,  128 => 49,  107 => 40,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 99,  240 => 102,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 82,  159 => 66,  143 => 65,  135 => 53,  119 => 50,  102 => 32,  71 => 28,  67 => 26,  63 => 15,  59 => 14,  87 => 35,  201 => 82,  196 => 90,  183 => 84,  171 => 61,  166 => 76,  163 => 52,  158 => 71,  156 => 66,  151 => 64,  142 => 59,  138 => 70,  136 => 51,  121 => 45,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 40,  89 => 38,  85 => 25,  75 => 19,  68 => 24,  56 => 21,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 32,  46 => 14,  44 => 15,  27 => 4,  79 => 34,  72 => 16,  69 => 27,  47 => 10,  40 => 11,  37 => 9,  22 => 1,  246 => 104,  157 => 56,  145 => 57,  139 => 45,  131 => 52,  123 => 51,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 47,  98 => 41,  96 => 34,  83 => 35,  74 => 27,  66 => 27,  55 => 15,  52 => 9,  50 => 8,  43 => 8,  41 => 10,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 86,  199 => 85,  193 => 82,  189 => 81,  187 => 85,  182 => 66,  176 => 70,  173 => 71,  168 => 65,  164 => 64,  162 => 57,  154 => 70,  149 => 58,  147 => 66,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 46,  103 => 39,  99 => 38,  95 => 41,  92 => 34,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 25,  60 => 6,  57 => 20,  54 => 17,  51 => 19,  48 => 15,  45 => 24,  42 => 6,  39 => 5,  36 => 6,  33 => 3,  30 => 1,);
    }
}
