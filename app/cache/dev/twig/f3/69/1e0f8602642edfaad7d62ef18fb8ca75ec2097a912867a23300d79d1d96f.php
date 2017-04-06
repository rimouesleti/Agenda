<?php

/* PagesBundle:Default:index.html.twig */
class __TwigTemplate_f3691e0f8602642edfaad7d62ef18fb8ca75ec2097a912867a23300d79d1d96f extends Twig_Template
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

    // line 4
    public function block_mainContent($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"container\">
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"panel panel-red panel-calendar\">
                    <div class=\"panel-heading border-light\">
                        <h4 class=\"panel-title\">";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Today Appointments", array(), "messages");
        echo "</h4>
                        <div class=\"panel-tools\">
                            <div class=\"dropdown\">
                                <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                    <i class=\"fa fa-cog\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                    <li>
                                        <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                    </li>
                                    <li>
                                        <a class=\"panel-refresh\" href=\"#\">
                                            <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class=\"panel-expand\" href=\"#\">
                                            <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"height-300\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <div class=\"actual-date\">
                                        <span class=\"actual-day\"></span>
                                        <span class=\"actual-month\"></span>
                                    </div>
                                </div>
                                <div class=\"col-xs-6\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <div class=\"clock-wrapper\">
                                                <div class=\"clock\">
                                                    <div class=\"circle\">
                                                        <div class=\"face\">
                                                            <div id=\"hour\"></div>
                                                            <div id=\"minute\"></div>
                                                            <div id=\"second\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <div class=\"weather text-light\">
                                                <i class=\"wi-day-sunny\"></i>
                                                25°
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"row\">
                                        ";
        // line 77
        if (((isset($context["appointement"]) ? $context["appointement"] : $this->getContext($context, "appointement")) == "true")) {
            // line 78
            echo "                                            <div class=\"appointments border-top border-bottom border-light space15\">
                                                <a class=\"btn btn-sm owl-prev text-light\">
                                                    <i class=\"fa fa-chevron-left\"></i>
                                                </a>
                                                <div class=\"e-slider owl-carousel owl-theme\" data-plugin-options='{\"transitionStyle\": \"goDown\", \"pagination\": false}'>
                                                    ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 84
                echo "
                                                        ";
                // line 85
                if ((twig_date_format_filter($this->env, (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")), "d-m-Y") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "d-m-Y"))) {
                    // line 86
                    echo "                                                            <div class=\"item\">

                                                                <div class=\"inline-block padding-10\">
                                                                    <span class=\"bold-text text-small\"><a style=\"color:white;\" href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
                    echo "</a></span>
                                                                    <span class=\"text-light text-small\">with ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "entity"), "html", null, true);
                    echo "</span>
                                                                </div>
                                                                <div class=\"inline-block padding-10 border-left border-light\">
                                                                    <span class=\"bold-text text-small\"><i class=\"fa fa-clock-o\"></i> ";
                    // line 93
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "H:i"), "html", null, true);
                    echo "</span>

                                                                </div>
                                                            </div>

                                                        ";
                }
                // line 99
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
                                                </div>
                                                <a class=\"btn btn-sm owl-next text-light\"><i class=\"fa fa-chevron-right\"></i> </a>
                                            </div>
                                        ";
        } else {
            // line 106
            echo "                                            <hr>
                                            <span class=\"bold-text text-small\" style=\"padding:5px\"><i class=\"fa fa-fw fa-exclamation\"></i> ";
            // line 107
            echo $this->env->getExtension('translator')->getTranslator()->trans("No appointement for today", array(), "messages");
            echo "</span>
                                            <hr>
                                        ";
        }
        // line 110
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"pull-right\">
                                        <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("event/new");
        echo "\" class=\"btn btn-sm btn-transparent-white new-event\"><i class=\"fa fa-plus\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("New Event", array(), "messages");
        echo " </a>
                                        <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "Id"))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-transparent-white show-calendar\"><i class=\"fa fa-calendar-o\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calendar", array(), "messages");
        echo " </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                    ";
        // line 125
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 126
            echo "  

            <div class=\"col-lg-4 col-md-4\">
                <div class=\"panel panel-white\">
                    <div class=\"panel-heading border-light\">
                        <h4 class=\"panel-title\">";
            // line 131
            echo $this->env->getExtension('translator')->getTranslator()->trans("History", array(), "messages");
            echo "</h4>
                        <div class=\"panel-tools\">
                            <div class=\"dropdown\">
                                <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                    <i class=\"fa fa-cog\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                    <li>
                                        <a class=\"panel-all\" href=\"";
            // line 139
            echo $this->env->getExtension('routing')->getPath("histories");
            echo "\">
                                            <i class=\"fa fa-list\"></i> <span>";
            // line 140
            echo $this->env->getExtension('translator')->getTranslator()->trans("Show All", array(), "messages");
            echo "</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                    </li>
                                    <li>
                                        <a class=\"panel-refresh\" href=\"#\">
                                            <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class=\"panel-expand\" href=\"#\">
                                            <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"panel-body no-padding\">

                        <div class=\"tabbable no-margin no-padding partition-dark\">

                            <div class=\"tab-content partition-white\">
                                <div id=\"users_tab_example1\" class=\"tab-pane padding-bottom-5 active\">
                                    <div class=\"panel-scroll height-317 ps-container\" style=\"height: 317px;\">
                                        <table class=\"table table-striped table-hover\">
                                            <tbody>
                                                ";
            // line 173
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : $this->getContext($context, "histories")));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 174
                echo "                                                    <tr>
                                                        <td class=\"center\" style=\"color: #ADADAD;\">
                                                            ";
                // line 176
                if (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType") == "entity")) {
                    // line 177
                    echo "                                                                <i class=\"fa fa-user\"></i>
                                                            ";
                } elseif (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType") == "event")) {
                    // line 179
                    echo "                                                                <i class=\"fa fa-clock-o\"></i>
                                                            ";
                } else {
                    // line 181
                    echo "                                                                <i class=\"fa fa-tasks\"></i>
                                                            ";
                }
                // line 183
                echo "                                                        </td>
                                                        <td>
                                                            <span class=\"bold-text text-small\">";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "user"), "html", null, true);
                echo " 
                                                                ";
                // line 186
                if (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "action") == "updated")) {
                    // line 187
                    echo "                                                                    ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("updated", array(), "messages");
                    echo " 
                                                                ";
                } elseif (($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "action") == "deleted")) {
                    // line 189
                    echo "                                                                    ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "messages");
                    // line 190
                    echo "                                                                ";
                } else {
                    // line 191
                    echo "                                                                    ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("created", array(), "messages");
                    // line 192
                    echo "                                                                ";
                }
                // line 193
                echo "

                                                                ";
                // line 195
                if ($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureId")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureType"), array("id" => $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureId"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureName"), "html", null, true);
                    echo "</a>";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "featureName"), "html", null, true);
                    echo " ";
                }
                echo " </span>
                                                        </td>
                                                        <td class=\"center\" style=\"color: #ADADAD;\">";
                // line 197
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")), "date"), "d-m-Y H:i"), "html", null, true);
                echo "</td>

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "
                                            </tbody>
                                        </table>
                                        <div class=\"center\">
                                            <hr>
                                            <a href=\"";
            // line 206
            echo $this->env->getExtension('routing')->getPath("histories");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Show All history", array(), "messages");
            echo "</a>
                                        </div>
                                        <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px; width: 320px; display: none;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px; height: 230px; display: inherit;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 152px;\"></div></div></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                        ";
        }
        // line 218
        echo "        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-7\">
                <div class=\"panel panel-white\">
                    <div class=\"panel-heading border-light partition-green\">
                        <h4 class=\"panel-title\"><i class=\"fa fa-calendar\"></i> ";
        // line 223
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pending appointments", array(), "messages");
        echo " :  ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Check your availability and confirm your appointments", array(), "messages");
        echo "</h4>
                        <ul class=\"panel-heading-tabs border-light\">


                            <li class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"panel-body panel-scroll height-155 partition-white\">
                       
                            

                           
                                <table class=\"table table-striped table-hover\">
                                    <tbody>
                                        ";
        // line 262
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 263
            echo "                                            <tr>
                                                <td class=\"center\" style=\"color: #ADADAD;\">
                                                    <i class=\"fa fa-clock-o\"></i>
                                                </td>

                                                <td>
                                                    <span class=\"bold-text text-small\"><a href=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
            echo "</a> </span>
                                                </td>
                                                <td>
                                                    ";
            // line 272
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "planned")) {
                echo "                            
                                                        <span class=\"label label-sm label-success\">";
                // line 273
                echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
                echo "</span>
                                                    ";
            } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "cancelled")) {
                // line 275
                echo "                                                        <span class=\"label label-sm label-danger\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
                echo "</span>
                                                    ";
            } else {
                // line 277
                echo "                                                        <span class=\"label label-sm label-warning\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
                echo "</span>
                                                    ";
            }
            // line 278
            echo " 
                                                </td>
                                                <td class=\"center\" style=\"color: #ADADAD;\"><strong>";
            // line 280
            echo $this->env->getExtension('translator')->getTranslator()->trans("Start", array(), "messages");
            echo " :</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "d-m-Y H:i"), "html", null, true);
            echo " <strong>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("End", array(), "messages");
            echo " :</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "d-m-Y H:i"), "html", null, true);
            echo "</td>

                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                                    </tbody>
                                </table>


                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 294
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "693f760_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760_jquery-2.1.1.min_1.js");
            // line 298
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "693f760"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 301
        echo "    <script>
        \$('.panel-refresh').click(function (e) {
            e.preventDefault();
            \$.ajax({
                url: '";
        // line 305
        echo $this->env->getExtension('routing')->getPath("history/reload");
        echo "',
                type: \"POST\",
                cache: \"false\",
                dataType: \"html\",
                success: function (data) {
                    \$(\"tbody\").html(data);
                }
            });
        });


    </script>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 305,  509 => 301,  493 => 298,  489 => 294,  477 => 284,  461 => 280,  457 => 278,  451 => 277,  445 => 275,  440 => 273,  436 => 272,  428 => 269,  420 => 263,  416 => 262,  372 => 223,  365 => 218,  348 => 206,  341 => 201,  331 => 197,  316 => 195,  312 => 193,  309 => 192,  306 => 191,  303 => 190,  300 => 189,  294 => 187,  292 => 186,  288 => 185,  284 => 183,  280 => 181,  276 => 179,  272 => 177,  270 => 176,  266 => 174,  262 => 173,  226 => 140,  222 => 139,  211 => 131,  204 => 126,  202 => 125,  189 => 117,  183 => 116,  175 => 110,  169 => 107,  166 => 106,  159 => 101,  152 => 99,  143 => 93,  137 => 90,  131 => 89,  126 => 86,  124 => 85,  121 => 84,  117 => 83,  110 => 78,  108 => 77,  39 => 11,  31 => 5,  28 => 4,);
    }
}
