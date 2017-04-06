<?php

/* MessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_0ea0c5a5e4fbbc866f6d3c51b3fb40132d6eb64721efced7c0ce4d27e78d1114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table>

    <thead>
        <tr>
            <th>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("subject", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("starter", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("startdate", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("messages", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("last_message", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("actions", array(), "FOSMessageBundle");
        echo "</th>
        </tr>
    </thead>

    <tbody>

    ";
        // line 16
        if ((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 18
                echo "            <tr>
                <td>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"))), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "subject"), "html", null, true);
                echo "
                    </a>

                    ";
                // line 24
                if ((!$this->env->getExtension('fos_message')->isRead((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread"))))) {
                    // line 25
                    echo "                        (";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("new", array(), "FOSMessageBundle");
                    echo ")
                    ";
                }
                // line 27
                echo "                </td>
                <td>
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdBy"), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdAt")), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 35
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages")), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 38
                if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lastMessage")) {
                    // line 39
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"))), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lastMessage"), "id"), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                    echo "\">
                            →
                        </a>
                        ";
                    // line 42
                    echo $this->env->getExtension('translator')->getTranslator()->trans("on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lastMessage"), "createdAt"))), "FOSMessageBundle");
                    // line 43
                    echo "                        <br />
                        ";
                    // line 44
                    echo $this->env->getExtension('translator')->getTranslator()->trans("by", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lastMessage"), "sender"))), "FOSMessageBundle");
                    // line 45
                    echo "                    ";
                } else {
                    // line 46
                    echo "                        ----
                    ";
                }
                // line 48
                echo "                </td>
                <td>
                    ";
                // line 50
                if ($this->env->getExtension('fos_message')->canDeleteThread((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")))) {
                    // line 51
                    echo "                        ";
                    if ($this->env->getExtension('fos_message')->isThreadDeletedByParticipant((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")))) {
                        // line 52
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('translator')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 54
                        echo "                        ";
                    } else {
                        // line 55
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 56
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('translator')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 57
                        echo "                        ";
                    }
                    // line 58
                    echo "                        <form action=\"";
                    echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"submit\" value=\"";
                    // line 59
                    echo twig_escape_filter($this->env, (isset($context["submitValue"]) ? $context["submitValue"] : $this->getContext($context, "submitValue")), "html", null, true);
                    echo "\" />
                        </form>
                    ";
                }
                // line 62
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        } else {
            // line 66
            echo "        <tr>
            <td colspan=\"6\">
                ";
            // line 68
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
            </td>
        </tr>
    ";
        }
        // line 72
        echo "
    </tbody>

</table>
";
    }

    public function getTemplateName()
    {
        return "MessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 224,  300 => 189,  297 => 188,  279 => 182,  287 => 118,  338 => 151,  332 => 198,  202 => 128,  126 => 86,  76 => 30,  275 => 180,  245 => 80,  339 => 203,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 93,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 178,  265 => 116,  250 => 132,  228 => 94,  213 => 136,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 59,  148 => 54,  333 => 151,  303 => 190,  299 => 125,  266 => 114,  197 => 60,  289 => 130,  205 => 82,  137 => 90,  124 => 85,  118 => 42,  239 => 127,  190 => 82,  186 => 65,  282 => 145,  267 => 176,  261 => 173,  180 => 116,  152 => 99,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 217,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 145,  320 => 173,  318 => 136,  307 => 192,  286 => 128,  262 => 113,  150 => 61,  134 => 55,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 130,  292 => 147,  270 => 114,  263 => 174,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 62,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 88,  200 => 72,  194 => 83,  153 => 70,  146 => 53,  129 => 54,  304 => 127,  288 => 124,  284 => 117,  274 => 119,  259 => 109,  257 => 171,  251 => 129,  244 => 100,  233 => 114,  222 => 90,  218 => 94,  207 => 110,  185 => 97,  165 => 79,  155 => 70,  127 => 58,  104 => 39,  90 => 50,  211 => 91,  192 => 84,  181 => 75,  170 => 71,  84 => 27,  65 => 20,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 186,  255 => 134,  253 => 170,  249 => 81,  237 => 78,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 58,  53 => 11,  114 => 50,  97 => 24,  81 => 14,  77 => 25,  23 => 3,  175 => 68,  172 => 59,  160 => 76,  110 => 78,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 228,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 221,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 194,  314 => 146,  312 => 133,  309 => 150,  305 => 145,  298 => 128,  294 => 187,  285 => 184,  283 => 183,  278 => 120,  268 => 112,  264 => 116,  258 => 84,  252 => 105,  247 => 107,  241 => 108,  229 => 106,  220 => 70,  214 => 93,  177 => 74,  169 => 67,  140 => 53,  132 => 48,  128 => 46,  107 => 39,  61 => 18,  273 => 96,  269 => 117,  254 => 111,  243 => 109,  240 => 99,  238 => 105,  235 => 105,  230 => 93,  227 => 100,  224 => 121,  221 => 77,  219 => 105,  217 => 137,  208 => 89,  204 => 88,  179 => 73,  159 => 56,  143 => 93,  135 => 60,  119 => 56,  102 => 51,  71 => 22,  67 => 12,  63 => 16,  59 => 12,  87 => 29,  201 => 87,  196 => 81,  183 => 95,  171 => 67,  166 => 106,  163 => 65,  158 => 65,  156 => 73,  151 => 54,  142 => 57,  138 => 51,  136 => 50,  121 => 84,  117 => 83,  105 => 38,  91 => 36,  62 => 23,  49 => 12,  38 => 6,  31 => 4,  28 => 3,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 24,  68 => 24,  56 => 17,  24 => 6,  25 => 5,  21 => 2,  19 => 1,  93 => 32,  88 => 49,  78 => 36,  46 => 9,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 21,  47 => 12,  40 => 10,  37 => 8,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 89,  123 => 44,  120 => 43,  115 => 39,  111 => 59,  108 => 77,  101 => 34,  98 => 16,  96 => 34,  83 => 27,  74 => 19,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 11,  41 => 9,  35 => 4,  32 => 4,  29 => 6,  209 => 85,  203 => 89,  199 => 85,  193 => 68,  189 => 66,  187 => 89,  182 => 77,  176 => 78,  173 => 42,  168 => 79,  164 => 57,  162 => 65,  154 => 55,  149 => 68,  147 => 66,  144 => 53,  141 => 52,  133 => 45,  130 => 69,  125 => 45,  122 => 65,  116 => 62,  112 => 44,  109 => 34,  106 => 41,  103 => 34,  99 => 35,  95 => 41,  92 => 14,  86 => 39,  82 => 32,  80 => 18,  73 => 19,  64 => 25,  60 => 16,  57 => 21,  54 => 16,  51 => 12,  48 => 14,  45 => 10,  42 => 6,  39 => 7,  36 => 6,  33 => 7,  30 => 1,);
    }
}
