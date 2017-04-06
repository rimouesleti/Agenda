<?php

/* PagesBundle:Event:show.html.twig */
class __TwigTemplate_68561a8c187a86b20c1d999f3b0663b7c87f68e82ca6dede6c3e1273a2f6d540 extends Twig_Template
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

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("events");
        echo "\">
            ";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Events list", array(), "messages");
        // line 7
        echo "        </a>
    </li>
    <li class=\"active\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
        echo "</li>
    ";
    }

    // line 12
    public function block_mainContent($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class=\"panel panel-white\">
        <div class=\"panel-body\">
            <div id=\"readEvent\" style=\"display: block;\">
                <div class=\"noteWrap col-md-8 col-md-offset-2\">
                    <div class=\"panel panel-note\">

                        <div class=\"panel-heading\">
                            <div class=\"col-md-12\">
                                <div class=\"col-md-6\">
                                    <h2 class=\"event-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "subject"), "html", null, true);
        echo "</h2>
                                </div>
                                <div class=\"col-md-6\">

                                    <div class=\"btn-group options-toggle pull-right\">
                                        <button class=\"btn dropdown-toggle btn-transparent-grey\" data-toggle=\"dropdown\">
                                            <i class=\"fa fa-cog\"></i>
                                            <span class=\"caret\"></span>
                                        </button>
                                        <ul role=\"menu\" class=\"dropdown-menu dropdown-light pull-right\">
                                            <li>
                                                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\" class=\"edit-event\">
                                                    <i class=\"fa fa-pencil\"></i> ";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        // line 36
        echo "                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event/delete", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\" class=\"delete-event\">
                                                    <i class=\"fa fa-times\"></i> ";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Remove", array(), "messages");
        // line 41
        echo "                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class=\"panel-body\" style=\"background: transparent;\">

                            <div class=\"note-content\">   
                                ";
        // line 52
        if (((isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")) > 0)) {
            // line 53
            echo "                                    <div class=\"col-md-12\">
                                        <div class=\"alert alert-danger\" role=\"alert\">
                                            ";
            // line 55
            echo $this->env->getExtension('translator')->getTranslator()->trans("This appointment was not confirmed by all the guests", array(), "messages");
            // line 56
            echo "                                           
                                        </div>
                                    </div>
                                ";
        }
        // line 60
        echo "
                                <div class=\"col-md-6\">




                                    ";
        // line 66
        if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "planned")) {
            echo "                            
                                        <span class=\"label label-sm label-success\">";
            // line 67
            echo $this->env->getExtension('translator')->getTranslator()->trans("Planned", array(), "messages");
            echo "</span>
                                    ";
        } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status") == "cancelled")) {
            // line 69
            echo "                                        <span class=\"label label-sm label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Cancelled", array(), "messages");
            echo "</span>
                                    ";
        } else {
            // line 71
            echo "                                        <span class=\"label label-sm label-warning\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Held", array(), "messages");
            echo "</span>
                                    ";
        }
        // line 72
        echo " 
                                    <span class=\"event-allday\" style=\"display: inline;\">";
        // line 73
        if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "callback") == 0)) {
            echo "<i class=\"fa fa-check\"></i>
                                        ";
        } else {
            // line 74
            echo $this->env->getExtension('translator')->getTranslator()->trans("No", array(), "messages");
            // line 75
            echo "                                            ";
        }
        echo " ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Callback", array(), "messages");
        echo "</span>
                                        </div>
                                        <div class=\"col-md-12\">

                                            <div class=\"event-start\"><p>";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("Start", array(), "messages");
        echo ":</p>
                                                <div class=\"event-day\"><h2>";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "d"), "html", null, true);
        echo "</h2></div>
                                                <div class=\"event-date\"><h3>";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "m-Y"), "html", null, true);
        echo "</h3></div>
                                                <div class=\"event-time\"><h3><i class=\"fa fa-clock-o\"></i> ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate"), "H:i"), "html", null, true);
        echo "</h3></div>
                                            </div>
                                            <div class=\"event-end\" style=\"display: block;\"><p>";
        // line 84
        echo $this->env->getExtension('translator')->getTranslator()->trans("End", array(), "messages");
        echo ":</p>
                                                <div class=\"event-day\"><h2>";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "d"), "html", null, true);
        echo "</h2></div>
                                                <div class=\"event-date\"><h3>";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "m-Y"), "html", null, true);
        echo "</h3></div>
                                                <div class=\"event-time\"><h3><i class=\"fa fa-clock-o\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate"), "H:i"), "html", null, true);
        echo "</h3></div>

                                            </div>
                                        </div>


                                        <div class=\"col-md-12\">
                                            <hr>
                                            <span class=\"author-note\">";
        // line 95
        echo $this->env->getExtension('translator')->getTranslator()->trans("Appointment with", array(), "messages");
        echo ": <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity", array("id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "entity"), "html", null, true);
        echo "</a></span></br>
                                            <span class=\"author-note\">";
        // line 96
        echo $this->env->getExtension('translator')->getTranslator()->trans("Assigned To", array(), "messages");
        echo ": 
                                                ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "user"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 98
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contributor", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
            echo "</a>
                                                    ";
            // line 99
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                echo ", ";
            }
            // line 100
            echo "                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                            </span>
                                        </div>

                                        <div class=\"col-md-12\" style=\"margin-bottom: 5%;\">
                                            <hr>
                                            <div>";
        // line 106
        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description");
        echo "</div>
                                        </div>
                                    </div>
                                </div>    

                            </div>
                        </div>
                    </div>
                </div>

            </div>


            ";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 106,  269 => 101,  255 => 100,  251 => 99,  242 => 98,  225 => 97,  221 => 96,  213 => 95,  202 => 87,  198 => 86,  194 => 85,  190 => 84,  185 => 82,  181 => 81,  177 => 80,  173 => 79,  163 => 75,  161 => 74,  156 => 73,  153 => 72,  147 => 71,  141 => 69,  136 => 67,  132 => 66,  124 => 60,  118 => 56,  116 => 55,  112 => 53,  110 => 52,  97 => 41,  95 => 40,  91 => 39,  86 => 36,  84 => 35,  80 => 34,  66 => 23,  54 => 13,  51 => 12,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
