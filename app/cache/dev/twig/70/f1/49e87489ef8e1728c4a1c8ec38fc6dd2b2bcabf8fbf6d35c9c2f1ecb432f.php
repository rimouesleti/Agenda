<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_70f149e87489ef8e1728c4a1c8ec38fc6dd2b2bcabf8fbf6d35c9c2f1ecb432f extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 3
            echo "    <div class=\"col-md-12\">
        <div class=\"alert alert-danger\">";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "</div>
    </div>

";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">

    <div class=\"col-md-6 \" style=\"border-right: 1px solid #DDDDDD; padding-right: 15px;\">
         <div class=\"form-group\">
            <div class=\"thumbnail\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"50\" height=\"50\">
                <div class=\"caption\" style=\"text-align: center;\">
                    <button id=\"uploadBTN\" class=\"btn btn-light-grey btn-file\">
                        <i class=\"fa fa-picture-o\"></i> Select image     
                    </button>

                </div>
            </div>
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "

        </div> 
        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label', array("label" => "Username"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">

            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label" => "Email"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'label', array("label" => "Role"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'label', array("label" => "FirstName"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'label', array("label" => "LastName"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'label', array("label" => "Departement"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'widget');
        echo "

        </div>
       

    </div>
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label', array("label" => "Phone"));
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mphone"), 'label', array("label" => "Mobile Phone"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mphone"), 'widget');
        echo "

        </div>

        <div class=\"form-group\">
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label', array("label" => "Country"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label" => "City"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'label', array("label" => "Zip Code"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'widget');
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label" => "Address"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "

        </div>
       
    </div>
        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <div class=\"col-md-12\">
        <button class=\"btn btn-green col-md-4 col-xs-12\" type=\"submit\" style=\"margin-top: 5%;float: right;\">
            <i class=\"fa fa-floppy-o\"></i> Submit
        </button>
    </div>

</form>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 97,  192 => 87,  181 => 82,  170 => 77,  84 => 36,  65 => 26,  58 => 22,  34 => 8,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 282,  487 => 264,  485 => 263,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 150,  302 => 139,  291 => 134,  255 => 105,  253 => 104,  249 => 103,  237 => 97,  232 => 94,  226 => 92,  216 => 88,  188 => 86,  167 => 54,  53 => 50,  114 => 23,  97 => 36,  81 => 33,  77 => 32,  23 => 3,  175 => 48,  172 => 47,  160 => 60,  110 => 47,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 97,  305 => 95,  298 => 137,  294 => 90,  285 => 132,  283 => 131,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 73,  220 => 70,  214 => 69,  177 => 81,  169 => 60,  140 => 55,  132 => 57,  128 => 56,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 65,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 21,  63 => 15,  59 => 14,  87 => 35,  201 => 82,  196 => 90,  183 => 82,  171 => 61,  166 => 76,  163 => 52,  158 => 71,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 52,  117 => 51,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  38 => 6,  31 => 4,  28 => 3,  26 => 11,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  24 => 3,  25 => 4,  21 => 2,  19 => 1,  93 => 28,  88 => 37,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 27,  47 => 14,  40 => 7,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 22,  108 => 21,  101 => 47,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 9,  50 => 10,  43 => 8,  41 => 9,  35 => 5,  32 => 9,  29 => 3,  209 => 85,  203 => 92,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 70,  149 => 51,  147 => 66,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 46,  103 => 49,  99 => 42,  95 => 41,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 13,  54 => 12,  51 => 14,  48 => 11,  45 => 24,  42 => 8,  39 => 6,  36 => 4,  33 => 3,  30 => 1,);
    }
}
