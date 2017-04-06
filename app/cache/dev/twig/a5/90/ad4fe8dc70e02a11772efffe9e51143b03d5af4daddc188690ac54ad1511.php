<?php

/* WebProfilerBundle:Profiler:toolbar.css.twig */
class __TwigTemplate_a590ad4fe8dc70e02a11772efffe9e51143b03d5af4daddc188690ac54ad1511 extends Twig_Template
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
        echo ".sf-minitoolbar {
    display: none;

    position: fixed;
    bottom: 0;
    right: 0;

    padding: 5px 5px 0;

    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    border-radius: 16px 0 0 0;

    z-index: 6000000;
}

.sf-toolbarreset * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    vertical-align: baseline;
}

.sf-toolbarreset {
    position: fixed;
    background-color: #f7f7f7;
    left: 0;
    right: 0;
    height: 38px;
    margin: 0;
    padding: 0 40px 0 0;
    z-index: 6000000;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    color: #2f2f2f;

    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    bottom: 0;
    border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
    border-bottom: 1px dotted #000000;
    cursor: help;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
    font-size: 11px;
}
.sf-toolbarreset img {
    width: auto;
    display: inline;
}

.sf-toolbarreset .hide-button {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: 13px 11px;
}

.sf-toolbar-block {
    white-space: nowrap;
    color: #2f2f2f;
    display: block;
    min-height: 28px;
    border-right: 1px solid #e4e4e4;
    padding: 0;
    float: left;
    cursor: default;
}

.sf-toolbar-block span {
    display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
    line-height: 19px;
    margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 0px 5px;
    border-radius: 5px;
    margin-bottom: 0px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
    color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    display: inline-block;
    width: 110px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
    content: ' :: ';
    color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
    border-right: 1px solid #999;
    padding-right: 5px;
    margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #bbb;
    padding: 9px 0;
    margin-left: -1px;

    bottom: 38px;
    border-bottom-width: 0;
    border-bottom: 1px solid #bbb;
    border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
    right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #fff;
    background-color: #666;
    padding: 3px 6px;
    border-radius: 3px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 6px;
    min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
    color: #fff;
    border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
    background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: #ffcc00;
    color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
    background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
    display: block;
    font-weight: normal;
    text-decoration: none;
    margin: 0;
    padding: 5px 8px;
    min-width: 20px;
    text-align: center;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
    color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon > a[href]:after {
    content: \"\";
}

.sf-toolbar-block .sf-toolbar-icon img {
    border-width: 0;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
    margin-left: 5px;
    margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
    border-radius: 12px;
    border-bottom-left-radius: 0;
    margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
    border-bottom: 1px dashed #ccc;
    cursor: help;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
    border-bottom: none;
    cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
    margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
    margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
    display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
    display: none;
}

.sf-toolbarreset:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
    border-right: none;
    margin-right: 1px;
    position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #fff;
    border-top: 1px dotted #DDD;
    position: relative;
    margin-top: -1px;
    z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    min-width: -webkit-calc(100% + 2px);
    min-width: calc(100% + 2px);
    z-index: 10001;
    box-sizing: border-box;
    padding: 9px;
    line-height: 19px;
}

/***** Override the setting when the toolbar is on the top *****/
";
        // line 287
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 288
            echo "    .sf-minitoolbar {
        top: 0;
        bottom: auto;
        right: 0;

        background-color: #f7f7f7;

        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        border-radius: 0 0 0 16px;
    }

    .sf-toolbarreset {
        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        top: 0;
        bottom: auto;
        border-bottom: 1px solid #bbb;
    }

    .sf-toolbar-block .sf-toolbar-info {
        top: 39px;
        bottom: auto;
        border-top-width: 0;
        border-radius: 0 0 4px 4px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        border-top: none;
        border-bottom: 1px dotted #DDD;
        margin-top: 0;
        margin-bottom: -1px;
    }
";
        }
        // line 328
        echo "
";
        // line 329
        if ((!(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable")))) {
            // line 330
            echo "    .sf-toolbarreset {
        position: static;
        background: #cbcbcb;

        background-image: -moz-linear-gradient(90deg, #cbcbcb, #e8e8e8) !important;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#cbcbcb), to(#e8e8e8)) !important;
        background-image: -o-linear-gradient(180deg, #cbcbcb, #e8e8e8) !important;
        background: linear-gradient(90deg, #cbcbcb, #e8e8e8) !important;
    }
";
        }
        // line 340
        echo "
/***** Media query *****/
@media screen and (max-width: 779px) {
    .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
        display: none;
    }

    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none !important;
    }
}

@media screen and (min-width: 880px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (min-width: 980px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (max-width: 1179px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
        display: none;
    }
}

@media screen and (max-width: 1439px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none;
    }
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none;
        visibility: hidden;
    }
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 330,  378 => 224,  300 => 189,  297 => 188,  279 => 182,  287 => 118,  338 => 151,  332 => 198,  202 => 128,  126 => 86,  76 => 27,  275 => 180,  245 => 80,  339 => 203,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 93,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 178,  265 => 116,  250 => 132,  228 => 94,  213 => 136,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 59,  148 => 54,  333 => 151,  303 => 190,  299 => 125,  266 => 114,  197 => 60,  289 => 130,  205 => 82,  137 => 90,  124 => 85,  118 => 42,  239 => 127,  190 => 82,  186 => 65,  282 => 145,  267 => 176,  261 => 173,  180 => 116,  152 => 99,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 217,  354 => 329,  344 => 186,  334 => 178,  330 => 148,  326 => 145,  320 => 173,  318 => 136,  307 => 287,  286 => 128,  262 => 113,  150 => 61,  134 => 55,  100 => 36,  70 => 26,  364 => 149,  327 => 146,  306 => 130,  292 => 147,  270 => 114,  263 => 174,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 62,  113 => 40,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 88,  200 => 72,  194 => 83,  153 => 70,  146 => 53,  129 => 54,  304 => 127,  288 => 124,  284 => 117,  274 => 119,  259 => 109,  257 => 171,  251 => 129,  244 => 100,  233 => 114,  222 => 90,  218 => 94,  207 => 110,  185 => 97,  165 => 79,  155 => 70,  127 => 58,  104 => 37,  90 => 50,  211 => 91,  192 => 84,  181 => 75,  170 => 71,  84 => 27,  65 => 22,  58 => 18,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 328,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 186,  255 => 134,  253 => 170,  249 => 81,  237 => 78,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 58,  53 => 15,  114 => 50,  97 => 24,  81 => 14,  77 => 25,  23 => 3,  175 => 68,  172 => 59,  160 => 76,  110 => 78,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 228,  381 => 214,  379 => 181,  374 => 116,  368 => 340,  365 => 111,  362 => 221,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 194,  314 => 146,  312 => 133,  309 => 288,  305 => 145,  298 => 128,  294 => 187,  285 => 184,  283 => 183,  278 => 120,  268 => 112,  264 => 116,  258 => 84,  252 => 105,  247 => 107,  241 => 108,  229 => 106,  220 => 70,  214 => 93,  177 => 74,  169 => 67,  140 => 53,  132 => 48,  128 => 46,  107 => 39,  61 => 18,  273 => 96,  269 => 117,  254 => 111,  243 => 109,  240 => 99,  238 => 105,  235 => 105,  230 => 93,  227 => 100,  224 => 121,  221 => 77,  219 => 105,  217 => 137,  208 => 89,  204 => 88,  179 => 73,  159 => 56,  143 => 93,  135 => 60,  119 => 56,  102 => 51,  71 => 22,  67 => 18,  63 => 16,  59 => 12,  87 => 32,  201 => 87,  196 => 81,  183 => 95,  171 => 67,  166 => 106,  163 => 65,  158 => 65,  156 => 73,  151 => 54,  142 => 57,  138 => 51,  136 => 50,  121 => 84,  117 => 83,  105 => 38,  91 => 35,  62 => 24,  49 => 11,  38 => 12,  31 => 8,  28 => 6,  26 => 3,  94 => 34,  89 => 40,  85 => 25,  75 => 28,  68 => 24,  56 => 17,  24 => 2,  25 => 5,  21 => 2,  19 => 1,  93 => 32,  88 => 49,  78 => 36,  46 => 14,  44 => 15,  27 => 4,  79 => 29,  72 => 29,  69 => 21,  47 => 15,  40 => 8,  37 => 8,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 89,  123 => 44,  120 => 43,  115 => 39,  111 => 59,  108 => 77,  101 => 34,  98 => 34,  96 => 35,  83 => 30,  74 => 19,  66 => 25,  55 => 12,  52 => 11,  50 => 15,  43 => 8,  41 => 8,  35 => 4,  32 => 6,  29 => 2,  209 => 85,  203 => 89,  199 => 85,  193 => 68,  189 => 66,  187 => 89,  182 => 77,  176 => 78,  173 => 42,  168 => 79,  164 => 57,  162 => 65,  154 => 55,  149 => 68,  147 => 66,  144 => 53,  141 => 52,  133 => 45,  130 => 69,  125 => 45,  122 => 65,  116 => 62,  112 => 44,  109 => 34,  106 => 41,  103 => 34,  99 => 35,  95 => 41,  92 => 14,  86 => 39,  82 => 32,  80 => 18,  73 => 23,  64 => 21,  60 => 20,  57 => 19,  54 => 16,  51 => 12,  48 => 12,  45 => 14,  42 => 12,  39 => 7,  36 => 7,  33 => 6,  30 => 5,);
    }
}
