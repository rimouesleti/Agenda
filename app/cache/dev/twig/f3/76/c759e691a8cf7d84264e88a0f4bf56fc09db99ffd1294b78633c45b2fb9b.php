<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_f376c759e691a8cf7d84264e88a0f4bf56fc09db99ffd1294b78633c45b2fb9b extends Twig_Template
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
<div class=\"col-md-12\">
    <div class=\"errorHandler alert alert-danger no-display\">
        <i class=\"fa fa-times-sign\"></i>  ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
</div>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >


    <div class=\"col-md-6 \">
        
          <div class=\"form-group\">
            <div class=\"thumbnail\">
                ";
        // line 14
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")) {
            // line 15
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/user/profilepics/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path")), "html", null, true);
            echo "\" alt=\"user-picture\" width=\"150\" height=\"150\">
                ";
        } else {
            // line 17
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"user-picture\" width=\"150\" height=\"150\" ></td>

                ";
        }
        // line 20
        echo "                <div class=\"caption\" style=\"text-align: center;\">
                    <button id=\"uploadBTN\" class=\"btn btn-light-grey btn-file\">
                        <i class=\"fa fa-picture-o\"></i> Select image     
                    </button>

                </div>
            </div>
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
        </div> 

        
        
        <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("Last Name", array(), "messages");
        echo "<span class=\"symbol required\"></span>
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("First Name", array(), "messages");
        echo "<span class=\"symbol required\"></span>
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
           ";
        // line 44
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "messages");
        echo "<span class=\"symbol required\"></span>
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "  
        </div>

        <div class=\"form-group\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label" => "Email"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "

        </div>

        <div class=\"form-group\">

            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'label', array("label" => "Role"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'errors');
        echo " 
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'widget');
        echo "

        </div>
             <div class=\"form-group\">
           ";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "<span class=\"symbol required\"></span>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language"), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language"), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'label', array("label" => "Departement"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'errors');
        echo "
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'widget');
        echo "
        </div>

      
    </div>

    <div class=\"col-md-6\">

        <div class=\"form-group\">
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label', array("label" => "Phone"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
        echo "
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mphone"), 'label', array("label" => "Mobile"));
        echo "<span class=\"symbol required\"></span>
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mphone"), 'errors');
        echo "
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mphone"), 'widget');
        echo "
        </div>
        <div class=\"form-group\">

            ";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("Address", array(), "messages");
        echo "<span class=\"symbol required\"></span>
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors');
        echo "
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Zip Code", array(), "messages");
        echo "<span class=\"symbol required\"></span>
            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'errors');
        echo "
            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code"), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
           ";
        // line 103
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country", array(), "messages");
        // line 104
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'errors');
        echo "
            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 108
        echo $this->env->getExtension('translator')->getTranslator()->trans("City", array(), "messages");
        // line 109
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "
            ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
        </div>
        



    </div>
    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" value=\"";
        // line 118
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit", array(), "messages");
        echo "\"  class=\"btn btn-success\" style=\"margin-top: 5%;float: right;\"/>
</form>

";
        // line 121
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "693f760_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760_jquery-2.1.1.min_1.js");
            // line 124
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        } else {
            // asset "693f760"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        }
        unset($context["asset_url"]);
        // line 127
        echo "
<script>
    \$(\"#uploadBTN\").bind(\"click\", function (event) {
        event.stopPropagation();
        event.preventDefault();
        \$(\"#fos_user_profile_form_file\").click();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 127,  288 => 124,  284 => 121,  274 => 117,  259 => 109,  257 => 108,  251 => 105,  244 => 103,  233 => 98,  222 => 93,  218 => 92,  207 => 87,  185 => 80,  165 => 69,  155 => 65,  127 => 52,  104 => 44,  90 => 39,  211 => 97,  192 => 87,  181 => 82,  170 => 77,  84 => 36,  65 => 26,  58 => 22,  34 => 8,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 282,  487 => 264,  485 => 263,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 150,  302 => 139,  291 => 134,  255 => 105,  253 => 104,  249 => 103,  237 => 99,  232 => 94,  226 => 92,  216 => 88,  188 => 86,  167 => 54,  53 => 50,  114 => 23,  97 => 36,  81 => 33,  77 => 32,  23 => 3,  175 => 48,  172 => 47,  160 => 60,  110 => 47,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 97,  305 => 95,  298 => 137,  294 => 90,  285 => 132,  283 => 131,  278 => 118,  268 => 85,  264 => 110,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 97,  220 => 70,  214 => 91,  177 => 81,  169 => 70,  140 => 59,  132 => 57,  128 => 56,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 66,  143 => 65,  135 => 53,  119 => 50,  102 => 32,  71 => 19,  67 => 21,  63 => 15,  59 => 14,  87 => 35,  201 => 82,  196 => 90,  183 => 82,  171 => 61,  166 => 76,  163 => 52,  158 => 71,  156 => 66,  151 => 64,  142 => 59,  138 => 54,  136 => 58,  121 => 52,  117 => 51,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  38 => 6,  31 => 4,  28 => 3,  26 => 11,  94 => 40,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 9,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  93 => 28,  88 => 37,  78 => 21,  46 => 7,  44 => 15,  27 => 4,  79 => 34,  72 => 16,  69 => 27,  47 => 14,  40 => 7,  37 => 9,  22 => 2,  246 => 104,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 40,  115 => 43,  111 => 22,  108 => 45,  101 => 47,  98 => 41,  96 => 31,  83 => 35,  74 => 14,  66 => 27,  55 => 15,  52 => 9,  50 => 17,  43 => 8,  41 => 9,  35 => 5,  32 => 9,  29 => 3,  209 => 85,  203 => 86,  199 => 85,  193 => 82,  189 => 81,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 70,  149 => 51,  147 => 66,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 46,  103 => 49,  99 => 42,  95 => 41,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 20,  54 => 12,  51 => 14,  48 => 11,  45 => 24,  42 => 14,  39 => 6,  36 => 4,  33 => 3,  30 => 7,);
    }
}
