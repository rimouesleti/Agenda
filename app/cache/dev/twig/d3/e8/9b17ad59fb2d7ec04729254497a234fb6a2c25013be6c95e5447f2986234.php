<?php

/* PagesBundle:Entity:edit.html.twig */
class __TwigTemplate_d3e89b17ad59fb2d7ec04729254497a234fb6a2c25013be6c95e5447f2986234 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("entities");
        echo "\">
            Contact list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "
        </a>
    </li>
    <li class=\"active\"> edit
    </li>
";
    }

    // line 18
    public function block_mainContent($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7571dc4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7571dc4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7571dc4_summernote_1.css");
            // line 23
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7571dc4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7571dc4_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7571dc4_select2_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "7571dc4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7571dc4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7571dc4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "    <div class=\"container\" >

        <!-- start: PAGE CONTENT -->
        <div class=\"row\" style=\"margin-top: 20px;\">

            <div class=\"col-md-12\">
                <!-- start: DYNAMIC TABLE PANEL -->
                <div class=\"panel panel-white\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">Edit <span class=\"text-bold\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</span></h4>
                        <hr>
                    </div>
                    <div class=\"panel-body\">

                        <div class=\"col-md-12\">
                            <div class=\"errorHandler alert alert-danger no-display\">
                                <i class=\"fa fa-times-sign\"></i>  ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            </div>
                        </div>
                        <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entity/edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >

                            <div class=\"col-md-6 \" style=\"border-right: 1px solid #DDDDDD; padding-right: 15px;\">
                                <div class=\"form-group\">
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label" => "Name"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort"), 'label', array("label" => "Sort"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label" => "Type"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort"), 'label', array("label" => "Speciality"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "speciality"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label" => "email"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                                </div>


                                <div class=\"form-group\">
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label', array("label" => "phone"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'label', array("label" => "Website"));
        echo "
                                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'widget');
        echo "
                                </div>

                                <div id=\"employeesLabel\" class=\"form-group\" style=\"display:none;\">
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employees_number"), 'label', array("label" => "Employees number"));
        echo "
                                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employees_number"), 'widget');
        echo "
                                </div>
                                <div id=\"faxLabel\" class=\"form-group\" style=\"display:none;\">
                                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'label', array("label" => "Fax"));
        echo "
                                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"thumbnail\">
                                        ";
        // line 90
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")) {
            // line 91
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")), "html", null, true);
            echo " \" alt=\"\" width=\"150\" height=\"150\" >
                                        ";
        } else {
            // line 93
            echo "                                            ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sort") == "company")) {
                // line 94
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/Company.png"), "html", null, true);
                echo " \" alt=\"\" width=\"150\" height=\"150\">

                                            ";
            } else {
                // line 97
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
                echo " \" alt=\"\"  width=\"150\" height=\"150\">
                                            ";
            }
            // line 99
            echo "                                        ";
        }
        // line 100
        echo "                                        <div class=\"caption\" style=\"text-align: center;\">
                                            <button id=\"uploadBTN\" class=\"btn btn-light-grey btn-file\">
                                                <i class=\"fa fa-picture-o\"></i> Select image     
                                            </button>

                                        </div>
                                    </div>
                                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
                                </div> 
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label', array("label" => "Country"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "

                                </div>
                                <div class=\"form-group\">

                                    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label" => "City"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'label', array("label" => "Zip code"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label" => "Address"));
        echo "<span class=\"symbol required\"></span>
                                    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "
                                </div>


                                <button id=\"getPositionBTN\" class=\"btn btn-green btn-block\" style=\"display:none;\" >
                                    <i class=\"fa fa-map-marker\"></i> Check position
                                </button>

                                ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget', array("attr" => array("style" => "display:none")));
        echo "

                                <div class=\"clear\"></div>

                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label" => "Description"));
        echo "

                                    ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "summernote")));
        echo "

                                </div>
                                ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                                <button class=\"btn btn-green col-md-4 col-xs-12\" type=\"submit\" style=\"margin-top: 5%;float: right;\">
                                    <i class=\"fa fa-floppy-o\"></i> Submit
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 163
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f12e53_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_jquery-2.1.1.min_1.js");
            // line 170
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "4f12e53_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "4f12e53_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_summernote.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "4f12e53_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_select2.min_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
            // asset "4f12e53_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53_editEntity_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "4f12e53"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f12e53") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4f12e53.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 173
        echo "    <script type=\"text/javascript\" src=\"http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0&mkt=fr-fr\"></script>
    <script>

        \$(\"#";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), "vars"), "id"), "html", null, true);
        echo "\").bind('input', function () {
            console.log(\$(this).val());
            var position = \"45.76055268567687,4.850619065547882\";
            \$(\"#";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), "vars"), "id"), "html", null, true);
        echo "\").val(position);
        });

        window.onload = GetMap;
        map = null;
        function GetMap() {

            console.log(\"GetMap\");
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

                            validateForm();
                        }

                    });

        }

        function validateForm() {
            console.log(\"validateForm\");
            var ClientAdr = \"Tunisie\" + ' ' + \"Sousse\";
            Microsoft.Maps.loadModule('Microsoft.Maps.Search', {callback: searchRequestClientPosition(ClientAdr)});
        }


        function searchRequestClientPosition(ClientAdr) {
            console.log(\"searchRequestClientPosition\");
            map.addComponent('searchManager', new Microsoft.Maps.Search.SearchManager(map));
            var searchManager = map.getComponent('searchManager');
            var query = ClientAdr;
            if (query != \"\")
            {
                var request = {
                    query: query,
                    count: 20,
                    startIndex: 0,
                    bounds: map.getBounds(),
                    callback: search_onSearchSuccessClient,
                    errorCallback: search_onSearchFailureClient
                };
                searchManager.search(request);

            }

        }


        function search_onSearchSuccessClient(result, userData) {
            var searchResults = result && result.searchResults;
            if (result['searchRegion']['mapBounds'] != null)
            {

                if (searchResults) {
                    position = result['searchRegion']['mapBounds']['locationRect']['center']['latitude'] + ',' + result['searchRegion']['mapBounds']['locationRect']['center']['longitude'];
                    console.log(\"position is :\" + position);

                }
            }
            else
                alert('pas de resultat pour cette adresse !');
        }



        function search_onSearchFailureClient(result, userData) {
            alert('pas de resultat pour cette adresse !');
        }

    </script>


";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Entity:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 173,  352 => 170,  348 => 163,  324 => 145,  319 => 143,  210 => 86,  612 => 352,  569 => 311,  561 => 308,  556 => 305,  524 => 275,  517 => 270,  505 => 266,  501 => 264,  495 => 263,  489 => 261,  484 => 259,  464 => 249,  447 => 244,  438 => 241,  432 => 239,  426 => 237,  420 => 235,  415 => 233,  411 => 232,  401 => 176,  391 => 219,  377 => 212,  325 => 173,  295 => 151,  271 => 141,  265 => 138,  250 => 132,  228 => 94,  213 => 116,  370 => 158,  293 => 128,  272 => 113,  236 => 98,  195 => 78,  148 => 58,  333 => 151,  303 => 148,  299 => 152,  266 => 114,  197 => 88,  289 => 130,  205 => 82,  137 => 53,  124 => 57,  118 => 55,  239 => 127,  190 => 91,  186 => 90,  282 => 145,  267 => 117,  261 => 137,  180 => 83,  152 => 79,  575 => 330,  523 => 280,  503 => 275,  479 => 257,  471 => 252,  459 => 248,  452 => 243,  446 => 241,  434 => 235,  408 => 211,  390 => 203,  375 => 211,  369 => 196,  363 => 194,  358 => 192,  354 => 191,  344 => 186,  334 => 178,  330 => 148,  326 => 155,  320 => 173,  318 => 172,  307 => 164,  286 => 149,  262 => 113,  150 => 73,  134 => 63,  100 => 38,  70 => 24,  364 => 149,  327 => 146,  306 => 126,  292 => 147,  270 => 114,  263 => 115,  248 => 104,  225 => 93,  215 => 111,  191 => 100,  184 => 84,  178 => 93,  113 => 43,  310 => 144,  280 => 126,  276 => 136,  260 => 115,  242 => 106,  234 => 118,  212 => 86,  206 => 85,  200 => 82,  194 => 90,  153 => 62,  146 => 58,  129 => 66,  304 => 127,  288 => 124,  284 => 123,  274 => 119,  259 => 109,  257 => 135,  251 => 129,  244 => 100,  233 => 120,  222 => 90,  218 => 95,  207 => 110,  185 => 76,  165 => 86,  155 => 70,  127 => 61,  104 => 39,  90 => 30,  211 => 91,  192 => 87,  181 => 83,  170 => 88,  84 => 27,  65 => 23,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 278,  487 => 264,  485 => 260,  481 => 261,  472 => 255,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 182,  331 => 176,  323 => 174,  302 => 125,  291 => 149,  255 => 134,  253 => 107,  249 => 110,  237 => 121,  232 => 94,  226 => 91,  216 => 87,  188 => 86,  167 => 67,  53 => 11,  114 => 57,  97 => 48,  81 => 29,  77 => 32,  23 => 3,  175 => 72,  172 => 80,  160 => 76,  110 => 42,  20 => 1,  480 => 258,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 179,  402 => 207,  398 => 129,  393 => 126,  387 => 218,  384 => 121,  381 => 214,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 179,  322 => 148,  314 => 146,  312 => 98,  309 => 136,  305 => 155,  298 => 128,  294 => 127,  285 => 132,  283 => 121,  278 => 120,  268 => 112,  264 => 116,  258 => 108,  252 => 105,  247 => 128,  241 => 99,  229 => 97,  220 => 70,  214 => 106,  177 => 82,  169 => 67,  140 => 73,  132 => 53,  128 => 67,  107 => 37,  61 => 12,  273 => 96,  269 => 134,  254 => 130,  243 => 99,  240 => 99,  238 => 105,  235 => 97,  230 => 93,  227 => 81,  224 => 121,  221 => 77,  219 => 91,  217 => 90,  208 => 68,  204 => 72,  179 => 73,  159 => 71,  143 => 66,  135 => 53,  119 => 67,  102 => 45,  71 => 28,  67 => 26,  63 => 15,  59 => 12,  87 => 31,  201 => 81,  196 => 81,  183 => 95,  171 => 61,  166 => 76,  163 => 66,  158 => 62,  156 => 73,  151 => 73,  142 => 57,  138 => 70,  136 => 54,  121 => 48,  117 => 42,  105 => 46,  91 => 27,  62 => 23,  49 => 12,  38 => 6,  31 => 3,  28 => 2,  26 => 11,  94 => 34,  89 => 40,  85 => 25,  75 => 19,  68 => 24,  56 => 12,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 33,  78 => 36,  46 => 11,  44 => 15,  27 => 4,  79 => 28,  72 => 29,  69 => 30,  47 => 11,  40 => 6,  37 => 5,  22 => 1,  246 => 131,  157 => 63,  145 => 66,  139 => 65,  131 => 50,  123 => 45,  120 => 60,  115 => 43,  111 => 22,  108 => 45,  101 => 34,  98 => 47,  96 => 34,  83 => 35,  74 => 19,  66 => 27,  55 => 12,  52 => 11,  50 => 8,  43 => 10,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 85,  203 => 102,  199 => 85,  193 => 87,  189 => 77,  187 => 89,  182 => 66,  176 => 84,  173 => 68,  168 => 79,  164 => 78,  162 => 63,  154 => 70,  149 => 72,  147 => 66,  144 => 74,  141 => 54,  133 => 69,  130 => 59,  125 => 49,  122 => 54,  116 => 56,  112 => 44,  109 => 37,  106 => 41,  103 => 34,  99 => 34,  95 => 41,  92 => 34,  86 => 39,  82 => 22,  80 => 37,  73 => 19,  64 => 25,  60 => 19,  57 => 18,  54 => 17,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 5,  36 => 6,  33 => 3,  30 => 1,);
    }
}
