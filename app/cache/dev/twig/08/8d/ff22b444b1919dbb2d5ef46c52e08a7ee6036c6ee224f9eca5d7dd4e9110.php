<?php

/* PagesBundle:Map:showMap.html.twig */
class __TwigTemplate_088dff22b444b1919dbb2d5ef46c52e08a7ee6036c6ee224f9eca5d7dd4e9110 extends Twig_Template
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
        echo "    <li class=\"active\"> My Map</li>
    ";
    }

    // line 5
    public function block_mainContent($context, array $blocks = array())
    {
        // line 6
        echo "

    <div class=\"well\">
        <div data-role=\"content\">
            <div style=\"padding:1em;\">
                <div id=\"divMap\" style=\"height:400px;position:relative;\"></div>
            </div>
           


        </div><!-- /content -->

    </div>

    <script type=\"text/javascript\" src=\"http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0&mkt=fr-fr\"></script>
    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "693f760_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760_jquery-2.1.1.min_1.js");
            // line 25
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
        // line 28
        echo "


    <script>



        \$(document).ready(function () {
        window.onload = GetMap;
                var map = null;
               
                function get_clients()
                {

                boundsMap = new Array();  
                
                        
                                    var locE = \"48.8534100,2.3488000\";
                                    var l = new Array();
                                    l = locE.split(\",\");
                                    var longitude = parseFloat(l[0]);
                                    var lattitude = parseFloat(l[1]);
                                    boundsMap.push(new Microsoft.Maps.Location(longitude, lattitude));
                                    var pushpinOptions = {icon:\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/default.png"), "html", null, true);
        echo "\", width: 34, height: 50, draggable: false};
                                    var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(longitude, lattitude), pushpinOptions);
                                    map.entities.push(pushpin);
                                    map.entities.push(new Microsoft.Maps.Infobox(pushpin.getLocation(),
                                    {
                                    title: '<font color=\"#FF9900\"> test </font>',
                                            description: '<a href=\"mailto: test  \"> E-mail : test  </a><br><br>',
                                            pushpin: pushpin
                                    }
                                    ));
                                    
                       
                                    map.setView({bounds: Microsoft.Maps.LocationRect.fromLocations(boundsMap), padding: 100});
                            }


                    function GetMap() {


                    Microsoft.Maps.loadModule('Microsoft.Maps.Themes.BingTheme',
                    {
                    callback: function () {
                    map = new Microsoft.Maps.Map(document.getElementById('divMap'),
                    {
                    credentials: \"AoqgNgDfcQ1C-pSBC6q8hJj9jxslNxwEzb8sySpQJtOZSCtg3GXWy11AFqx_5--Z\",
                            mapTypeId: Microsoft.Maps.MapTypeId.road,
                            enableClickableLogo: false,
                            enableSearchLogo: false,
                            center: new Microsoft.Maps.GeoLocationProvider(map).getCurrentPosition({showAccuracyCircle: false}),
                            zoom: 5,
                            showBreadcrumb: false,
                            theme: new Microsoft.Maps.Themes.BingTheme()
                    });
                            get_clients();
                    }
                    });
                          
                    }


                    });



        </script>  




        ";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Map:showMap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 224,  300 => 189,  297 => 188,  279 => 182,  287 => 118,  338 => 151,  332 => 198,  202 => 128,  126 => 86,  76 => 30,  275 => 180,  245 => 80,  339 => 203,  223 => 96,  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 93,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 178,  265 => 116,  250 => 132,  228 => 94,  213 => 136,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 59,  148 => 54,  333 => 151,  303 => 190,  299 => 125,  266 => 114,  197 => 60,  289 => 130,  205 => 82,  137 => 90,  124 => 85,  118 => 63,  239 => 127,  190 => 82,  186 => 117,  282 => 145,  267 => 176,  261 => 173,  180 => 116,  152 => 99,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 217,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 145,  320 => 173,  318 => 136,  307 => 192,  286 => 128,  262 => 113,  150 => 61,  134 => 55,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 130,  292 => 147,  270 => 114,  263 => 174,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 76,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 113,  242 => 106,  234 => 77,  212 => 86,  206 => 88,  200 => 82,  194 => 83,  153 => 70,  146 => 60,  129 => 54,  304 => 127,  288 => 124,  284 => 117,  274 => 119,  259 => 109,  257 => 171,  251 => 129,  244 => 100,  233 => 114,  222 => 90,  218 => 94,  207 => 110,  185 => 97,  165 => 79,  155 => 70,  127 => 58,  104 => 39,  90 => 30,  211 => 91,  192 => 84,  181 => 75,  170 => 71,  84 => 27,  65 => 22,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 186,  255 => 134,  253 => 170,  249 => 81,  237 => 78,  232 => 94,  226 => 91,  216 => 87,  188 => 82,  167 => 66,  53 => 11,  114 => 50,  97 => 24,  81 => 14,  77 => 28,  23 => 3,  175 => 68,  172 => 110,  160 => 76,  110 => 78,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 228,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 221,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 194,  314 => 146,  312 => 133,  309 => 150,  305 => 145,  298 => 128,  294 => 187,  285 => 184,  283 => 183,  278 => 120,  268 => 112,  264 => 116,  258 => 84,  252 => 105,  247 => 107,  241 => 108,  229 => 106,  220 => 70,  214 => 93,  177 => 74,  169 => 67,  140 => 53,  132 => 53,  128 => 67,  107 => 58,  61 => 25,  273 => 96,  269 => 117,  254 => 111,  243 => 109,  240 => 99,  238 => 105,  235 => 105,  230 => 93,  227 => 100,  224 => 121,  221 => 77,  219 => 105,  217 => 137,  208 => 89,  204 => 88,  179 => 73,  159 => 101,  143 => 93,  135 => 60,  119 => 56,  102 => 51,  71 => 22,  67 => 12,  63 => 16,  59 => 12,  87 => 23,  201 => 87,  196 => 81,  183 => 95,  171 => 67,  166 => 106,  163 => 65,  158 => 65,  156 => 73,  151 => 73,  142 => 57,  138 => 70,  136 => 52,  121 => 84,  117 => 83,  105 => 47,  91 => 36,  62 => 23,  49 => 12,  38 => 6,  31 => 5,  28 => 4,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 13,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 26,  88 => 12,  78 => 36,  46 => 9,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 63,  145 => 67,  139 => 65,  131 => 89,  123 => 57,  120 => 52,  115 => 39,  111 => 59,  108 => 77,  101 => 34,  98 => 16,  96 => 34,  83 => 35,  74 => 19,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 10,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 89,  199 => 85,  193 => 81,  189 => 102,  187 => 89,  182 => 77,  176 => 78,  173 => 42,  168 => 79,  164 => 78,  162 => 65,  154 => 64,  149 => 68,  147 => 66,  144 => 53,  141 => 54,  133 => 45,  130 => 69,  125 => 42,  122 => 65,  116 => 62,  112 => 44,  109 => 34,  106 => 41,  103 => 34,  99 => 29,  95 => 41,  92 => 14,  86 => 39,  82 => 32,  80 => 18,  73 => 19,  64 => 25,  60 => 16,  57 => 21,  54 => 13,  51 => 12,  48 => 13,  45 => 10,  42 => 6,  39 => 11,  36 => 6,  33 => 3,  30 => 1,);
    }
}
