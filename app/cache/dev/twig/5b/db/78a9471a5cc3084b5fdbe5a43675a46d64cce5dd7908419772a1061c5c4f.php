<?php

/* PagesBundle:Map:showMap.html.twig */
class __TwigTemplate_5bdb78a9471a5cc3084b5fdbe5a43675a46d64cce5dd7908419772a1061c5c4f extends Twig_Template
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
        echo "   
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
        return array (  102 => 51,  77 => 28,  61 => 25,  57 => 21,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
