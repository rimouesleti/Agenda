<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1c25fa3207bf3c95857781e9ccf6d9538410222532f1a21bb7f4bbe38ff00d21 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  94 => 22,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  24 => 3,  25 => 5,  21 => 2,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  44 => 9,  27 => 4,  79 => 18,  72 => 16,  69 => 12,  47 => 18,  40 => 7,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 24,  98 => 40,  96 => 31,  83 => 25,  74 => 14,  66 => 11,  55 => 16,  52 => 21,  50 => 8,  43 => 8,  41 => 7,  35 => 4,  32 => 9,  29 => 4,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 41,  73 => 19,  64 => 12,  60 => 6,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 17,  42 => 16,  39 => 6,  36 => 7,  33 => 6,  30 => 3,);
    }
}
