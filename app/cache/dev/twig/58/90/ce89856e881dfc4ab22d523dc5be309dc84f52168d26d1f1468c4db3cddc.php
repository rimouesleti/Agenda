<?php

/* PagesBundle:Entity:new.html.twig */
class __TwigTemplate_5890ce89856e881dfc4ab22d523dc5be309dc84f52168d26d1f1468c4db3cddc extends Twig_Template
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
                                   Type<span class=\"symbol required\"></span>
                                   ";
        // line 59
        echo $this->env->getExtension('translator')->trans($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort"), 'widget'), array(), "PagesBundle");
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                   ";
        // line 67
        echo $this->env->getExtension('translator')->getTranslator()->trans("Speciality", array(), "messages");
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speciality"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label" => "Email"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                                </div>


                                <div class=\"form-group\">
                                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label', array("label" => "Phone"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'label', array("label" => "Zip Code"));
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
                                    <i class=\"fa fa-floppy-o\"></i> ";
        // line 137
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit", array(), "messages");
        // line 138
        echo "                                </button>
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
        return array (  370 => 158,  326 => 155,  322 => 148,  310 => 138,  308 => 137,  302 => 134,  295 => 130,  290 => 128,  280 => 121,  269 => 113,  265 => 112,  259 => 109,  255 => 108,  249 => 105,  245 => 104,  237 => 99,  233 => 98,  223 => 91,  219 => 90,  213 => 87,  209 => 86,  202 => 82,  198 => 81,  192 => 78,  188 => 77,  180 => 72,  176 => 71,  170 => 68,  166 => 67,  159 => 63,  155 => 62,  149 => 59,  141 => 54,  137 => 53,  131 => 50,  123 => 45,  117 => 42,  107 => 37,  101 => 34,  91 => 27,  80 => 18,  60 => 16,  55 => 12,  52 => 11,  45 => 8,  41 => 6,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
