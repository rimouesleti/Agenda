<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_3f976c37e0ab90da04b9a6853b10de1dd1abdf225fe733822743f4109c38bd81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams")) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 45
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"))) {
            // line 46
            echo "        ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams"));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "priorities"));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (((!(isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority"))) && ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) > 100))) {
                // line 70
                echo "                                ";
                $context["priority"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "name"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "count"), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
            // line 75
            echo "                            ";
            if ((!(isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            echo ((("-100" == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs")) {
            // line 90
            echo "        <ul class=\"alt\">
            ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) >= 0) && ($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) || (((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) < 0) && ((($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))))) {
                    // line 92
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                        echo " warning";
                    }
                    if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "scream", array(), "any", true, true)) {
                        echo " scream";
                    }
                    echo "\">
                    ";
                    // line 93
                    echo $context["logger"]->getdisplay_message($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), (isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 96
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </ul>
    ";
        } else {
            // line 100
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 107
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 109
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 110
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : $this->getContext($context, "log_index")));
                // line 111
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 113
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) > 1)) {
                        // line 116
                        echo "            ";
                        if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == 2)) {
                            // line 117
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 119
                        echo "            ";
                        if ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class", array(), "any", true, true)) {
                            // line 120
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function")));
                            // line 121
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function", array(), "any", true, true)) {
                            // line 122
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function"));
                            // line 123
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true)) {
                            // line 124
                            echo "                ";
                            $context["from"] = $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file");
                            // line 125
                            echo "            ";
                        } else {
                            // line 126
                            echo "                ";
                            $context["from"] = "-";
                            // line 127
                            echo "            ";
                        }
                        // line 128
                        echo "
            <li>Called from ";
                        // line 129
                        echo ((($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file"), $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "line"), (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) : ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 131
                        if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack")) - 1))) {
                            // line 132
                            echo "                </ul>
            ";
                        }
                        // line 134
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "    ";
            } else {
                // line 136
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 137
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"))))) {
                    // line 138
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 140
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 143
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 143,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  371 => 127,  359 => 123,  353 => 121,  350 => 120,  347 => 119,  328 => 113,  313 => 110,  308 => 109,  281 => 98,  161 => 58,  462 => 202,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  342 => 137,  335 => 134,  329 => 131,  315 => 111,  256 => 96,  174 => 74,  806 => 488,  803 => 487,  792 => 485,  784 => 482,  771 => 481,  723 => 472,  706 => 471,  694 => 467,  690 => 466,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  602 => 445,  597 => 442,  545 => 407,  528 => 406,  525 => 405,  518 => 402,  513 => 400,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  788 => 484,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 475,  742 => 474,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 469,  698 => 468,  696 => 476,  692 => 474,  686 => 465,  682 => 464,  678 => 463,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  616 => 447,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 410,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  356 => 122,  378 => 224,  300 => 121,  297 => 200,  279 => 182,  287 => 118,  338 => 116,  332 => 198,  202 => 94,  126 => 86,  76 => 25,  275 => 105,  245 => 80,  339 => 203,  223 => 96,  396 => 173,  352 => 170,  348 => 140,  324 => 112,  319 => 143,  210 => 77,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 180,  411 => 140,  401 => 172,  391 => 219,  377 => 129,  325 => 129,  295 => 151,  271 => 190,  265 => 116,  250 => 132,  228 => 94,  213 => 78,  370 => 158,  293 => 107,  272 => 113,  236 => 98,  195 => 59,  148 => 54,  333 => 115,  303 => 122,  299 => 125,  266 => 114,  197 => 71,  289 => 113,  205 => 82,  137 => 90,  124 => 85,  118 => 49,  239 => 127,  190 => 82,  186 => 72,  282 => 145,  267 => 101,  261 => 173,  180 => 70,  152 => 54,  575 => 330,  523 => 404,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 197,  434 => 235,  408 => 176,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 217,  354 => 329,  344 => 186,  334 => 178,  330 => 148,  326 => 145,  320 => 127,  318 => 136,  307 => 287,  286 => 112,  262 => 93,  150 => 55,  134 => 47,  100 => 36,  70 => 19,  364 => 149,  327 => 146,  306 => 130,  292 => 147,  270 => 102,  263 => 174,  248 => 94,  225 => 93,  215 => 111,  191 => 69,  184 => 84,  178 => 64,  113 => 38,  310 => 144,  280 => 194,  276 => 193,  260 => 113,  242 => 106,  234 => 90,  212 => 86,  206 => 88,  200 => 72,  194 => 70,  153 => 56,  146 => 53,  129 => 54,  304 => 127,  288 => 124,  284 => 117,  274 => 96,  259 => 109,  257 => 171,  251 => 182,  244 => 100,  233 => 87,  222 => 90,  218 => 94,  207 => 76,  185 => 66,  165 => 60,  155 => 55,  127 => 58,  104 => 31,  90 => 27,  211 => 91,  192 => 84,  181 => 65,  170 => 84,  84 => 24,  65 => 11,  58 => 14,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 198,  400 => 197,  351 => 141,  343 => 182,  331 => 176,  323 => 128,  302 => 125,  291 => 186,  255 => 134,  253 => 170,  249 => 92,  237 => 91,  232 => 89,  226 => 84,  216 => 79,  188 => 76,  167 => 71,  53 => 12,  114 => 36,  97 => 24,  81 => 23,  77 => 20,  23 => 3,  175 => 68,  172 => 68,  160 => 76,  110 => 78,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 199,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 207,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 214,  379 => 181,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 143,  341 => 117,  337 => 179,  322 => 194,  314 => 146,  312 => 124,  309 => 288,  305 => 108,  298 => 120,  294 => 187,  285 => 100,  283 => 183,  278 => 106,  268 => 112,  264 => 116,  258 => 187,  252 => 105,  247 => 107,  241 => 90,  229 => 85,  220 => 81,  214 => 93,  177 => 69,  169 => 67,  140 => 53,  132 => 48,  128 => 42,  107 => 39,  61 => 15,  273 => 96,  269 => 117,  254 => 111,  243 => 109,  240 => 99,  238 => 105,  235 => 105,  230 => 93,  227 => 100,  224 => 121,  221 => 80,  219 => 105,  217 => 137,  208 => 89,  204 => 75,  179 => 73,  159 => 57,  143 => 93,  135 => 46,  119 => 40,  102 => 33,  71 => 13,  67 => 20,  63 => 18,  59 => 14,  87 => 34,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 106,  163 => 82,  158 => 80,  156 => 58,  151 => 54,  142 => 57,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 34,  91 => 25,  62 => 27,  49 => 11,  38 => 7,  31 => 4,  28 => 3,  26 => 3,  94 => 34,  89 => 30,  85 => 23,  75 => 18,  68 => 30,  56 => 17,  24 => 3,  25 => 5,  21 => 2,  19 => 1,  93 => 27,  88 => 24,  78 => 19,  46 => 10,  44 => 9,  27 => 3,  79 => 21,  72 => 17,  69 => 16,  47 => 21,  40 => 8,  37 => 6,  22 => 2,  246 => 93,  157 => 63,  145 => 74,  139 => 65,  131 => 89,  123 => 42,  120 => 38,  115 => 39,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 30,  83 => 33,  74 => 19,  66 => 25,  55 => 13,  52 => 12,  50 => 22,  43 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 8,  209 => 85,  203 => 73,  199 => 93,  193 => 68,  189 => 66,  187 => 89,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 55,  149 => 68,  147 => 51,  144 => 53,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 65,  116 => 39,  112 => 44,  109 => 52,  106 => 51,  103 => 34,  99 => 31,  95 => 27,  92 => 43,  86 => 39,  82 => 21,  80 => 27,  73 => 24,  64 => 17,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 12,  45 => 9,  42 => 11,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
