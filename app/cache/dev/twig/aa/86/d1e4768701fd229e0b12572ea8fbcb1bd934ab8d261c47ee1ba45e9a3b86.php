<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_aa86d1e4768701fd229e0b12572ea8fbcb1bd934ab8d261c47ee1ba45e9a3b86 extends Twig_Template
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
        return array (  104 => 47,  94 => 40,  89 => 38,  78 => 32,  71 => 28,  67 => 26,  61 => 23,  58 => 22,  56 => 21,  51 => 19,  42 => 13,  31 => 4,  28 => 3,);
    }
}
