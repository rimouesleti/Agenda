<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_975ae38be2a84f9ae667655484ed8a246a2e1ee80506bba7cbbb7ee564ff72cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  342 => 137,  335 => 134,  329 => 131,  315 => 125,  256 => 96,  174 => 74,  806 => 488,  803 => 487,  792 => 485,  784 => 482,  771 => 481,  723 => 472,  706 => 471,  694 => 467,  690 => 466,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  602 => 445,  597 => 442,  545 => 407,  528 => 406,  525 => 405,  518 => 402,  513 => 400,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  788 => 484,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 475,  742 => 474,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 469,  698 => 468,  696 => 476,  692 => 474,  686 => 465,  682 => 464,  678 => 463,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  616 => 447,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 410,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  356 => 330,  378 => 224,  300 => 121,  297 => 200,  279 => 182,  287 => 118,  338 => 135,  332 => 198,  202 => 94,  126 => 86,  76 => 25,  275 => 105,  245 => 80,  339 => 203,  223 => 96,  396 => 173,  352 => 170,  348 => 140,  324 => 145,  319 => 143,  210 => 93,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 180,  411 => 232,  401 => 172,  391 => 219,  377 => 212,  325 => 129,  295 => 151,  271 => 190,  265 => 116,  250 => 132,  228 => 94,  213 => 78,  370 => 158,  293 => 198,  272 => 113,  236 => 98,  195 => 59,  148 => 54,  333 => 151,  303 => 122,  299 => 125,  266 => 114,  197 => 71,  289 => 113,  205 => 82,  137 => 90,  124 => 85,  118 => 49,  239 => 127,  190 => 82,  186 => 65,  282 => 145,  267 => 101,  261 => 173,  180 => 116,  152 => 99,  575 => 330,  523 => 404,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 197,  434 => 235,  408 => 176,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 217,  354 => 329,  344 => 186,  334 => 178,  330 => 148,  326 => 145,  320 => 127,  318 => 136,  307 => 287,  286 => 112,  262 => 98,  150 => 55,  134 => 47,  100 => 36,  70 => 19,  364 => 149,  327 => 146,  306 => 130,  292 => 147,  270 => 102,  263 => 174,  248 => 94,  225 => 93,  215 => 111,  191 => 69,  184 => 84,  178 => 64,  113 => 38,  310 => 144,  280 => 194,  276 => 193,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 88,  200 => 72,  194 => 70,  153 => 56,  146 => 53,  129 => 54,  304 => 127,  288 => 124,  284 => 117,  274 => 119,  259 => 109,  257 => 171,  251 => 182,  244 => 100,  233 => 87,  222 => 90,  218 => 94,  207 => 75,  185 => 66,  165 => 60,  155 => 70,  127 => 58,  104 => 42,  90 => 27,  211 => 91,  192 => 84,  181 => 65,  170 => 84,  84 => 24,  65 => 11,  58 => 25,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 198,  400 => 197,  351 => 141,  343 => 182,  331 => 176,  323 => 128,  302 => 125,  291 => 186,  255 => 134,  253 => 170,  249 => 181,  237 => 78,  232 => 94,  226 => 84,  216 => 79,  188 => 76,  167 => 71,  53 => 12,  114 => 50,  97 => 24,  81 => 23,  77 => 20,  23 => 3,  175 => 68,  172 => 62,  160 => 76,  110 => 78,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 199,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 164,  384 => 228,  381 => 214,  379 => 181,  374 => 116,  368 => 340,  365 => 111,  362 => 221,  360 => 109,  355 => 143,  341 => 105,  337 => 179,  322 => 194,  314 => 146,  312 => 124,  309 => 288,  305 => 145,  298 => 120,  294 => 187,  285 => 184,  283 => 183,  278 => 106,  268 => 112,  264 => 116,  258 => 187,  252 => 105,  247 => 107,  241 => 90,  229 => 85,  220 => 81,  214 => 93,  177 => 74,  169 => 67,  140 => 53,  132 => 48,  128 => 46,  107 => 39,  61 => 17,  273 => 96,  269 => 117,  254 => 111,  243 => 109,  240 => 99,  238 => 105,  235 => 105,  230 => 93,  227 => 100,  224 => 121,  221 => 77,  219 => 105,  217 => 137,  208 => 89,  204 => 78,  179 => 73,  159 => 56,  143 => 93,  135 => 60,  119 => 40,  102 => 33,  71 => 13,  67 => 20,  63 => 18,  59 => 14,  87 => 34,  201 => 87,  196 => 92,  183 => 95,  171 => 73,  166 => 106,  163 => 82,  158 => 80,  156 => 58,  151 => 54,  142 => 57,  138 => 56,  136 => 71,  121 => 50,  117 => 83,  105 => 34,  91 => 33,  62 => 27,  49 => 14,  38 => 6,  31 => 4,  28 => 3,  26 => 3,  94 => 34,  89 => 30,  85 => 23,  75 => 24,  68 => 30,  56 => 17,  24 => 3,  25 => 5,  21 => 2,  19 => 1,  93 => 27,  88 => 32,  78 => 18,  46 => 13,  44 => 20,  27 => 3,  79 => 21,  72 => 17,  69 => 16,  47 => 21,  40 => 8,  37 => 6,  22 => 2,  246 => 93,  157 => 63,  145 => 74,  139 => 65,  131 => 89,  123 => 42,  120 => 43,  115 => 39,  111 => 47,  108 => 47,  101 => 43,  98 => 45,  96 => 30,  83 => 33,  74 => 19,  66 => 25,  55 => 13,  52 => 12,  50 => 22,  43 => 9,  41 => 19,  35 => 5,  32 => 5,  29 => 8,  209 => 85,  203 => 73,  199 => 93,  193 => 68,  189 => 66,  187 => 89,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 55,  149 => 68,  147 => 54,  144 => 53,  141 => 51,  133 => 45,  130 => 46,  125 => 51,  122 => 65,  116 => 39,  112 => 44,  109 => 52,  106 => 51,  103 => 34,  99 => 31,  95 => 39,  92 => 43,  86 => 39,  82 => 28,  80 => 27,  73 => 24,  64 => 17,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 12,  45 => 9,  42 => 11,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
