<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5f7a47b0985a7f8ac76f6523a3beb22e21cce80558a5960ad11001ba0c4d73ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  304 => 127,  288 => 124,  284 => 121,  274 => 117,  259 => 109,  257 => 108,  251 => 105,  244 => 103,  233 => 98,  222 => 93,  218 => 92,  207 => 87,  185 => 80,  165 => 69,  155 => 65,  127 => 52,  104 => 47,  90 => 39,  211 => 97,  192 => 87,  181 => 82,  170 => 77,  84 => 36,  65 => 26,  58 => 22,  34 => 5,  704 => 263,  699 => 243,  693 => 9,  681 => 316,  511 => 313,  507 => 282,  487 => 264,  485 => 263,  481 => 261,  472 => 258,  465 => 256,  451 => 244,  449 => 243,  400 => 197,  351 => 164,  343 => 159,  331 => 153,  323 => 150,  302 => 139,  291 => 134,  255 => 105,  253 => 104,  249 => 103,  237 => 99,  232 => 94,  226 => 92,  216 => 88,  188 => 86,  167 => 54,  53 => 13,  114 => 23,  97 => 36,  81 => 33,  77 => 32,  23 => 3,  175 => 48,  172 => 47,  160 => 60,  110 => 47,  20 => 1,  480 => 162,  474 => 161,  469 => 257,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 181,  374 => 116,  368 => 175,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 156,  322 => 101,  314 => 146,  312 => 98,  309 => 97,  305 => 95,  298 => 137,  294 => 90,  285 => 132,  283 => 131,  278 => 118,  268 => 85,  264 => 110,  258 => 81,  252 => 80,  247 => 78,  241 => 98,  229 => 97,  220 => 70,  214 => 91,  177 => 81,  169 => 70,  140 => 59,  132 => 57,  128 => 56,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 93,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 66,  143 => 65,  135 => 53,  119 => 50,  102 => 32,  71 => 28,  67 => 26,  63 => 15,  59 => 14,  87 => 35,  201 => 82,  196 => 90,  183 => 82,  171 => 61,  166 => 76,  163 => 52,  158 => 71,  156 => 66,  151 => 64,  142 => 59,  138 => 54,  136 => 58,  121 => 52,  117 => 51,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  38 => 6,  31 => 4,  28 => 3,  26 => 11,  94 => 40,  89 => 38,  85 => 25,  75 => 19,  68 => 14,  56 => 21,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 37,  78 => 32,  46 => 9,  44 => 15,  27 => 4,  79 => 34,  72 => 16,  69 => 27,  47 => 14,  40 => 7,  37 => 9,  22 => 1,  246 => 104,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 40,  115 => 43,  111 => 22,  108 => 45,  101 => 47,  98 => 41,  96 => 34,  83 => 35,  74 => 14,  66 => 27,  55 => 15,  52 => 9,  50 => 17,  43 => 8,  41 => 10,  35 => 4,  32 => 3,  29 => 2,  209 => 85,  203 => 86,  199 => 85,  193 => 82,  189 => 81,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 70,  149 => 51,  147 => 66,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 46,  103 => 49,  99 => 42,  95 => 41,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 20,  54 => 12,  51 => 19,  48 => 11,  45 => 24,  42 => 8,  39 => 6,  36 => 4,  33 => 3,  30 => 1,);
    }
}
