<?php

/* PagesBundle:Event:edit.html.twig */
class __TwigTemplate_ab990310282f4286436574406ee713fa4574a92296e68ffe569ff1a1a389c33e extends Twig_Template
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
    <li>
        <a href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo ">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
        echo "
        </a>
    </li>
    <li class=\"active\">    ";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo " 
    </li>
";
    }

    // line 16
    public function block_mainContent($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b0ebfe2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b0ebfe2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b0ebfe2_summernote_1.css");
            // line 22
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "b0ebfe2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b0ebfe2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b0ebfe2_bootstrap-select_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "b0ebfe2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b0ebfe2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b0ebfe2_select2_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "b0ebfe2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b0ebfe2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b0ebfe2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "
    <div class=\"container\" >
        <!-- start: PAGE CONTENT -->
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-md-12\">
                <!-- start: DYNAMIC TABLE PANEL -->
                <div class=\"panel panel-white\">

                    <div class=\"panel-body\">
                        <div class=\"noteWrap col-md-8 col-md-offset-2\">
                            <h3>";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
        echo "</h3>
                            <div class=\"col-md-12\">
                                <div class=\"errorHandler alert alert-danger no-display\">
                                    <i class=\"fa fa-times-sign\"></i>  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                </div>
                            </div>


                            <form action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">                               
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'widget');
        echo "
                                    </div>
                                </div>

                                <div class=\"no-all-day-range\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <div class=\"form-group\">
                                                <label for=\"endDate\" style=\"font-weight: bold;\"><i class=\"fa fa-fw fa-clock-o\"></i> ";
        // line 53
        echo $this->env->getExtension('translator')->getTranslator()->trans("Start Date", array(), "messages");
        echo "</label><span class=\"symbol required\"></span>
                                                ";
        // line 54
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
        // line 65
        echo $this->env->getExtension('translator')->getTranslator()->trans("End Date", array(), "messages");
        echo "</label><span class=\"symbol required\"></span>
                                                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate"), 'widget');
        echo "

                                            </div>       
                                        </div>
                                    </div>
                                </div>  
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"status\" style=\"font-weight: bold;\">";
        // line 74
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "<span class=\"symbol required\"></span></label>
                                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget', array("attr" => array("class" => "selectpicker  form-control event-categories ")));
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"callback\" style=\"font-weight: bold;\">";
        // line 80
        echo $this->env->getExtension('translator')->getTranslator()->trans("Callback", array(), "messages");
        echo "</label>
                                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "callback"), 'widget');
        echo "
                                    </div>
                                </div>

                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"entity\" style=\"font-weight: bold;\">";
        // line 87
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact Name", array(), "messages");
        echo "</label>
                                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entity"), 'widget', array("attr" => array("style" => "width:100% ")));
        echo "
                                    </div> 
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"user\" style=\"font-weight: bold;\">";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Assigned To", array(), "messages");
        echo "</label>
                                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'widget', array("attr" => array("style" => "width:100% ")));
        echo "
                                    </div> 
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"description\" style=\"font-weight: bold;\">Description</label>
                                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "summernote")));
        echo "
                                    </div>
                                </div>

                                <div class=\"clear\"></div>
                                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                                <button class=\"btn btn-green col-md-4 col-xs-12\" type=\"submit\" style=\"margin-top: 5%;float: right;\">
                                    <i class=\"fa fa-floppy-o\"></i> ";
        // line 108
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit", array(), "messages");
        // line 109
        echo "                                </button>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 
";
        // line 121
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "93c8695_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_jquery-2.1.1.min_1.js");
            // line 130
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "93c8695_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_bootstrap-datetimepicker_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "93c8695_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_summernote.min_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "93c8695_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_bootstrap-select_4.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "93c8695_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_select2.min_5.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "93c8695_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695_newEvent_6.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        } else {
            // asset "93c8695"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93c8695") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93c8695.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        }
        unset($context["asset_url"]);
        // line 133
        echo "
<script>


    \$(document).ready(function () {
        \$(\"#icgm2_pagesbundle_events_startDate\").datetimepicker();
        \$(\"#icgm2_pagesbundle_events_endDate\").datetimepicker();
        
         \$('#icgm2_pagesbundle_events_user').select2();
        \$(\"#icgm2_pagesbundle_events_status option\").each(function (index, value) {
            var option = \$(this);
            if (option.val() === \"planned\") {
                option.attr('data-content', \"<span class='label label-info'>";
        // line 145
        echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
        echo "</span>\");
            }
            else if (option.val() === \"cancelled\") {
                option.attr('data-content', \"<span class='label label-danger'>";
        // line 148
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
        echo "</span>\");
            }
            else if (option.val() === \"held\") {
                option.attr('data-content', \"<span class='label label-warning'>";
        // line 151
        echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
        echo "</span>\");
            }

        });

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 151,  332 => 148,  326 => 145,  312 => 133,  261 => 130,  257 => 121,  243 => 109,  241 => 108,  235 => 105,  227 => 100,  218 => 94,  214 => 93,  206 => 88,  202 => 87,  193 => 81,  189 => 80,  181 => 75,  177 => 74,  166 => 66,  162 => 65,  148 => 54,  144 => 53,  133 => 45,  125 => 42,  117 => 37,  109 => 34,  97 => 24,  71 => 22,  66 => 17,  63 => 16,  56 => 13,  50 => 10,  46 => 9,  41 => 6,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
