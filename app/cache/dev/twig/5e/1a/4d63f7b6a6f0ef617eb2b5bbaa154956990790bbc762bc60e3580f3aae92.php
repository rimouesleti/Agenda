<?php

/* PagesBundle:Event:newEvt.html.twig */
class __TwigTemplate_5e1a4d63f7b6a6f0ef617eb2b5bbaa154956990790bbc762bc60e3580f3aae92 extends Twig_Template
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
        echo "</label><span class=\"symbol required\"></span>
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



                            <div class=\"col-md-12\" >
                                <label  style=\"font-weight: bold;\">";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("Appointment Location", array(), "messages");
        echo "</label>
                                <hr>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"inlineRadioOptions\" id=\"contactLocation\" value=\"option1\" checked> ";
        // line 94
        echo $this->env->getExtension('translator')->getTranslator()->trans("Use contact location", array(), "messages");
        // line 95
        echo "                                </label>
                                ";
        // line 96
        if (((isset($context["emptyLocation"]) ? $context["emptyLocation"] : $this->getContext($context, "emptyLocation")) == false)) {
            // line 97
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"inlineRadioOptions\" id=\"existingLocation\" value=\"option2\"> ";
            // line 98
            echo $this->env->getExtension('translator')->getTranslator()->trans("Use existing Location", array(), "messages");
            // line 99
            echo "                                    </label>
                                ";
        }
        // line 101
        echo "
                                <button type=\"button\" class=\"btn btn-default btn-xs pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">
                                    <i class=\"fa fa-plus\"></i> ";
        // line 103
        echo $this->env->getExtension('translator')->getTranslator()->trans("New Location", array(), "messages");
        // line 104
        echo "                                </button>

                            </div>
                            <div class=\"col-md-12\" style=\"display: none;\" id=\"existingLocationForm\">


                                <div class=\"form-group\"  >
                                    <label for=\"location\" style=\"font-weight: bold;\">";
        // line 111
        echo $this->env->getExtension('translator')->getTranslator()->trans("Location", array(), "messages");
        echo "</label>
                                    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location"), 'widget', array("attr" => array("style" => "width:100% ")));
        echo "

                                </div> 


                            </div>









                            <div class=\"col-md-12\">
                                <hr>
                                <div class=\"form-group\">
                                    <label for=\"description\" style=\"font-weight: bold;\">Description</label>
                                    ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "summernote")));
        echo "
                                </div>
                            </div>
                        </div>
                        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


                        <button class=\"btn btn-green col-md-4 col-xs-12\" type=\"submit\" style=\"margin-top: 5%;float: right;\">
                            <i class=\"fa fa-floppy-o\"></i> ";
        // line 139
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit", array(), "messages");
        // line 140
        echo "                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    ";
        // line 148
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "93c8695_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_jquery-2.1.1.min_1.js");
            // line 156
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
        // line 159
        echo "    ";
        if ((isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id"))) {
            // line 160
            echo "        <script>

            \$(\"#icgm2_pagesbundle_events_entity\").select2(\"val\", \"";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")), "html", null, true);
            echo "\");

        </script>

    ";
        }
        // line 167
        echo "    <script>
        \$('#icgm2_pagesbundle_events_user').select2();
        \$(\"#icgm2_pagesbundle_events_status option\").each(function (index, value) {
            var option = \$(this);
            if (option.val() === \"planned\") {
                option.attr('data-content', \"<span class='label label-info'>";
        // line 172
        echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
        echo "</span>\");
            }
            else if (option.val() === \"cancelled\") {
                option.attr('data-content', \"<span class='label label-danger'>";
        // line 175
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
        echo "</span>\");
            }
            else if (option.val() === \"held\") {
                option.attr('data-content', \"<span class='label label-warning'>";
        // line 178
        echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
        echo "</span>\");
            }

        });
    </script>


    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 192
        echo $this->env->getExtension('translator')->getTranslator()->trans("New Location", array(), "messages");
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <form>

                        <div class=\"form-group col-md-12\">
                            <label for=\"name\" style=\"font-weight: bold;\">";
        // line 198
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "<span class=\"symbol required\"></span></label>
                                ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocation"]) ? $context["formLocation"] : $this->getContext($context, "formLocation")), "name"), 'widget');
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"country\" style=\"font-weight: bold;\">";
        // line 202
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country", array(), "messages");
        echo "<span class=\"symbol required\"></span></label>
                                ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocation"]) ? $context["formLocation"] : $this->getContext($context, "formLocation")), "country"), 'widget');
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"city\" style=\"font-weight: bold;\">";
        // line 206
        echo $this->env->getExtension('translator')->getTranslator()->trans("City", array(), "messages");
        echo "<span class=\"symbol required\"></span></label>
                                ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocation"]) ? $context["formLocation"] : $this->getContext($context, "formLocation")), "city"), 'widget');
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label for=\"address\" style=\"font-weight: bold;\">";
        // line 210
        echo $this->env->getExtension('translator')->getTranslator()->trans("Address", array(), "messages");
        echo "<span class=\"symbol required\"></span></label>
                                ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocation"]) ? $context["formLocation"] : $this->getContext($context, "formLocation")), "address"), 'widget');
        echo "
                        </div>
                        <div class=\"form-group col-md-6\" >
                            <label for=\"zipCode\" style=\"font-weight: bold;\">";
        // line 214
        echo $this->env->getExtension('translator')->getTranslator()->trans("Zip Code", array(), "messages");
        echo "<span class=\"symbol required\"></span></label>
                                ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocation"]) ? $context["formLocation"] : $this->getContext($context, "formLocation")), "zipCode"), 'widget');
        echo "
                        </div>

                        ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocation"]) ? $context["formLocation"] : $this->getContext($context, "formLocation")), "position"), 'widget', array("attr" => array("style" => "display:none")));
        echo "


                        ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLocation"]) ? $context["formLocation"] : $this->getContext($context, "formLocation")), 'rest');
        echo "





                        <div class=\"row\" style=\"padding: 2%\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                            <button type=\"submit\" class=\"btn btn-green\">";
        // line 229
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit", array(), "messages");
        echo "</button>
                        </div>


                    </form> 
                </div>
            </div>
        </div>
    </div>
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
        return array (  476 => 229,  465 => 221,  459 => 218,  453 => 215,  449 => 214,  443 => 211,  439 => 210,  433 => 207,  429 => 206,  423 => 203,  419 => 202,  413 => 199,  409 => 198,  400 => 192,  383 => 178,  377 => 175,  371 => 172,  364 => 167,  356 => 162,  352 => 160,  349 => 159,  298 => 156,  294 => 148,  284 => 140,  282 => 139,  275 => 135,  268 => 131,  246 => 112,  242 => 111,  233 => 104,  231 => 103,  227 => 101,  223 => 99,  221 => 98,  218 => 97,  216 => 96,  213 => 95,  211 => 94,  205 => 91,  194 => 83,  190 => 82,  182 => 77,  178 => 76,  170 => 71,  166 => 70,  158 => 65,  154 => 64,  140 => 53,  136 => 52,  122 => 41,  118 => 40,  108 => 33,  99 => 29,  93 => 26,  87 => 23,  80 => 18,  60 => 16,  55 => 12,  52 => 11,  47 => 9,  45 => 8,  41 => 6,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
