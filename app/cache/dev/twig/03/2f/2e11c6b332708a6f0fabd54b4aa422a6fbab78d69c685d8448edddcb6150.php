<?php

/* PagesBundle:Entity:edit.html.twig */
class __TwigTemplate_032f2e11c6b332708a6f0fabd54b4aa422a6fbab78d69c685d8448edddcb6150 extends Twig_Template
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
            ";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact list", array(), "messages");
        // line 7
        echo "        </a>
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
                                    Type<span class=\"symbol required\"></span>
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort"), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
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
        return array (  407 => 179,  401 => 176,  396 => 173,  352 => 170,  348 => 163,  330 => 148,  324 => 145,  319 => 143,  309 => 136,  298 => 128,  294 => 127,  288 => 124,  284 => 123,  278 => 120,  274 => 119,  266 => 114,  262 => 113,  253 => 107,  244 => 100,  241 => 99,  235 => 97,  228 => 94,  225 => 93,  219 => 91,  217 => 90,  210 => 86,  206 => 85,  200 => 82,  196 => 81,  189 => 77,  185 => 76,  179 => 73,  175 => 72,  167 => 67,  163 => 66,  157 => 63,  153 => 62,  146 => 58,  142 => 57,  136 => 54,  128 => 49,  124 => 48,  115 => 44,  109 => 41,  99 => 34,  88 => 25,  68 => 23,  63 => 19,  60 => 18,  50 => 11,  46 => 10,  41 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
