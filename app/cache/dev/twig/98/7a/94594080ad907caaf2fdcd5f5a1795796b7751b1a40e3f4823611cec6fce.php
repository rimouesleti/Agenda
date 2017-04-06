<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_987a94594080ad907caaf2fdcd5f5a1795796b7751b1a40e3f4823611cec6fce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'mainContent' => array($this, 'block_mainContent'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("contributors");
        echo "\">
            ";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contributors List", array(), "messages");
        // line 6
        echo "        </a>
    </li>

    <li class=\"active\">   ";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add contributor", array(), "messages");
        // line 10
        echo "    </li>
";
    }

    // line 12
    public function block_mainContent($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class=\"container\" >
        <!-- start: PAGE CONTENT -->
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-md-12\">
                <!-- start: DYNAMIC TABLE PANEL -->
                <div class=\"panel panel-white\">
                    <div class=\"panel-body\">
                        ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                            ";
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 25
            echo "                        ";
        } else {
            // line 26
            echo "                            <div class=\"alert alert-danger\" role=\"alert\">
                                <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 27
            echo $this->env->getExtension('translator')->getTranslator()->trans("You don't have enough privilege", array(), "messages");
            echo ".

                            </div>
                        ";
        }
        // line 31
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "693f760_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_693f760_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/693f760_jquery-2.1.1.min_1.js");
            // line 39
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
        // line 42
        echo "    <script>
        \$(\"#uploadBTN\").bind(\"click\", function (event) {
            event.stopPropagation();
            event.preventDefault();
            \$(\"#fos_user_registration_form_file\").click();
        });
    </script>
";
    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 23
        echo "                                ";
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 24
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 24,  126 => 23,  123 => 22,  112 => 42,  96 => 39,  92 => 36,  85 => 31,  78 => 27,  75 => 26,  72 => 25,  69 => 22,  67 => 21,  57 => 13,  54 => 12,  49 => 10,  47 => 9,  42 => 6,  40 => 5,  36 => 4,  33 => 3,  30 => 2,);
    }
}
