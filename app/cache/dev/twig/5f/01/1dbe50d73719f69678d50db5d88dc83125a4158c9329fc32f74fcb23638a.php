<?php

/* PagesBundle:Event:showCalendar.html.twig */
class __TwigTemplate_5f011dbe50d73719f69678d50db5d88dc83125a4158c9329fc32f74fcb23638a extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calendar", array(), "messages");
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
            // asset "2fcf575_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2fcf575_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2fcf575_jquery-2.1.1.min_1.js");
            // line 38
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "2fcf575_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2fcf575_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2fcf575_jquery.mousewheel_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "2fcf575_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2fcf575_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2fcf575_bootstrap-timepicker_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "2fcf575_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2fcf575_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2fcf575_moment.min_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "2fcf575_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2fcf575_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2fcf575_jquery-ui.custom.min_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "2fcf575_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2fcf575_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2fcf575_fullcalendar_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "2fcf575"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2fcf575") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2fcf575.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 41
        echo "


    <script>



        \$(document).ready(function () {

            function redirect() {
                window.location = \"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("event/new");
        echo "\";
            }
            var _mn = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            var _mns = ['janv.', 'févr.', 'mars', 'avr.', 'mai', 'juin', 'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'];
            var _dn = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
            var _dns = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];

            \$('#calendar').fullCalendar({                ";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "language") == "fr")) {
            // line 59
            echo "    


                monthNames: _mn,
                monthNamesShort: _mns,
                dayNames: _dn,
                dayNamesShort: _dns,";
        }
        // line 66
        echo "                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'all,mandatory,not_mandatory,month,agendaWeek,agendaDay'
                },
                editable: true,
                selectable: true,
                selectHelper: true,
                eventLimit: true,
                events: [";
        // line 75
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
            // line 76
            echo "                    {
                        id: '";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "id"), "html", null, true);
            echo "',
                        title: '";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "subject"), "html", null, true);
            echo "',
                        start: '";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "startDate"), "m/d/Y H:m:s"), "html", null, true);
            echo "',
                        end: '";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "endDate"), "m/d/Y H:m:s"), "html", null, true);
            echo "',
                        description: '";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evt"]) ? $context["evt"] : $this->getContext($context, "evt")), "status"), "html", null, true);
            echo "'
                    }
    ";
            // line 83
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
        // line 84
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
                eventClick: function (calEvent, jsEvent, view) {

                    

                    var url = '";
        // line 107
        echo $this->env->getExtension('routing')->getPath("event", array("id" => "id"));
        echo "';
                    url = url.replace(\"id\", calEvent.id);
                    window.location = url;
                    \$(this).css('border-color', 'red');

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
        return array (  293 => 107,  268 => 84,  251 => 83,  246 => 81,  242 => 80,  238 => 79,  234 => 78,  230 => 77,  227 => 76,  210 => 75,  199 => 66,  190 => 59,  188 => 58,  178 => 51,  166 => 41,  115 => 38,  111 => 27,  98 => 16,  92 => 14,  88 => 12,  81 => 14,  77 => 12,  71 => 14,  67 => 12,  61 => 14,  57 => 12,  51 => 14,  47 => 12,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
