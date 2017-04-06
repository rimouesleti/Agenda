<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_452395af041f3517712c3ca4c1d35d18aa924dee673ac876a7235f214db08c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "


<div class=\"row\">
    <div class=\"main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">

        <!-- start: LOGIN BOX -->
        <div class=\"box-login\">
            <div class=\"logo\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/images//icgm-logo.png"), "html", null, true);
        echo "\" >
            </div>
            
            
            
        
            <form  action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                 ";
        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "                <div class=\"errorHandler alert alert-danger \">
                    <i class=\"fa fa-remove-sign\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
                </div>
                 ";
        }
        // line 26
        echo "
                <fieldset>
                      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <div class=\"form-group\">
                        <span class=\"input-icon\">

                            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                            <i class=\"fa fa-user\"></i> </span>
                    </div>
                    <div class=\"form-group form-actions\">
                        <span class=\"input-icon\">
                            <input class=\"form-control password\" type=\"password\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password", array(), "FOSUserBundle"), "html", null, true);
        echo "\"  id=\"password\" name=\"_password\" required=\"required\" />
                            <i class=\"fa fa-lock\"></i>
                            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">
                                I forgot my password
                            </a> </span>
                    </div>
                    <div class=\"form-actions\">
                        <label for=\"remember\" class=\"checkbox-inline\">
                            <input type=\"checkbox\" class=\"grey remember\"  id=\"remember_me\"  name=\"_remember_me\" value=\"on\">
                           ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        </label>
                        <button type=\"submit\" class=\"btn btn-green pull-right\"  id=\"_submit\" name=\"_submit\"  >
                         Go <i class=\"fa fa-arrow-circle-right\"></i>
                        </button>
                    </div>

                </fieldset>
            </form>
            <!-- start: COPYRIGHT -->
            <div class=\"copyright\">
                2014 &copy; GeosoftDev.
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- end: LOGIN BOX -->
        <!-- start: FORGOT BOX -->
        <div class=\"box-forgot\">
            <h3>Forget Password?</h3>
            <p>
                Enter your e-mail address below to reset your password.
            </p>
            <form class=\"form-forgot\">
                <div class=\"errorHandler alert alert-danger no-display\">
                    <i class=\"fa fa-remove-sign\"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class=\"form-group\">
                        <span class=\"input-icon\">
                            <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
                            <i class=\"fa fa-envelope\"></i> </span>
                    </div>
                    <div class=\"form-actions\">
                        <a class=\"btn btn-light-grey go-back\">
                            <i class=\"fa fa-chevron-circle-left\"></i> Log-In
                        </a>
                        <button type=\"submit\" class=\"btn btn-green pull-right\">
                            Submit <i class=\"fa fa-arrow-circle-right\"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
        
        </div>
        <!-- end: FORGOT BOX -->

    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 127,  288 => 124,  284 => 121,  274 => 117,  259 => 109,  257 => 108,  251 => 105,  244 => 103,  233 => 98,  222 => 93,  218 => 92,  207 => 87,  185 => 80,  165 => 69,  155 => 65,  127 => 52,  104 => 47,  90 => 39,  211 => 97,  192 => 87,  181 => 82,  170 => 77,  84 => 36,  65 => 26,  58 => 22,  34 => 8,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 282,  487 => 264,  485 => 263,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 150,  302 => 139,  291 => 134,  255 => 105,  253 => 104,  249 => 103,  237 => 99,  232 => 94,  226 => 92,  216 => 88,  188 => 86,  167 => 54,  53 => 13,  114 => 23,  97 => 36,  81 => 33,  77 => 32,  23 => 3,  175 => 48,  172 => 47,  160 => 60,  110 => 47,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 97,  305 => 95,  298 => 137,  294 => 90,  285 => 132,  283 => 131,  278 => 118,  268 => 85,  264 => 110,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 97,  220 => 70,  214 => 91,  177 => 81,  169 => 70,  140 => 59,  132 => 57,  128 => 56,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 66,  143 => 65,  135 => 53,  119 => 50,  102 => 32,  71 => 28,  67 => 26,  63 => 15,  59 => 14,  87 => 35,  201 => 82,  196 => 90,  183 => 82,  171 => 61,  166 => 76,  163 => 52,  158 => 71,  156 => 66,  151 => 64,  142 => 59,  138 => 54,  136 => 58,  121 => 52,  117 => 51,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  38 => 6,  31 => 4,  28 => 3,  26 => 2,  94 => 40,  89 => 38,  85 => 25,  75 => 19,  68 => 14,  56 => 21,  24 => 4,  25 => 4,  21 => 2,  19 => 1,  93 => 28,  88 => 37,  78 => 32,  46 => 9,  44 => 15,  27 => 4,  79 => 34,  72 => 16,  69 => 27,  47 => 14,  40 => 7,  37 => 9,  22 => 2,  246 => 104,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 40,  115 => 43,  111 => 22,  108 => 45,  101 => 47,  98 => 41,  96 => 34,  83 => 35,  74 => 14,  66 => 27,  55 => 15,  52 => 9,  50 => 17,  43 => 8,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 86,  199 => 85,  193 => 82,  189 => 81,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 70,  149 => 51,  147 => 66,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 46,  103 => 49,  99 => 42,  95 => 41,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 20,  54 => 12,  51 => 19,  48 => 10,  45 => 24,  42 => 13,  39 => 5,  36 => 4,  33 => 3,  30 => 7,);
    }
}
