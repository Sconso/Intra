<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_0ff7ab6811dbf02b38aa617084b314868291a7398706b6595f5946bd4e3cf6a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : null));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "catalogue"));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "safe")) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  84 => 34,  114 => 50,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  282 => 80,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  186 => 54,  172 => 52,  148 => 44,  127 => 34,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  216 => 25,  192 => 55,  188 => 21,  185 => 20,  180 => 104,  174 => 53,  23 => 11,  83 => 32,  74 => 29,  12 => 34,  150 => 58,  120 => 46,  118 => 46,  129 => 56,  70 => 29,  113 => 42,  104 => 42,  157 => 47,  153 => 48,  145 => 53,  139 => 51,  124 => 43,  110 => 41,  65 => 29,  96 => 44,  81 => 33,  76 => 35,  58 => 25,  263 => 104,  256 => 102,  249 => 70,  245 => 97,  239 => 94,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 56,  191 => 76,  175 => 72,  160 => 48,  155 => 66,  152 => 63,  146 => 63,  137 => 47,  126 => 55,  100 => 43,  97 => 41,  77 => 30,  34 => 15,  53 => 18,  37 => 16,  52 => 23,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  111 => 43,  107 => 40,  61 => 26,  273 => 96,  269 => 75,  254 => 60,  246 => 69,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 88,  219 => 76,  217 => 87,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 48,  119 => 44,  108 => 45,  102 => 43,  71 => 28,  67 => 33,  63 => 25,  59 => 29,  47 => 20,  38 => 18,  94 => 40,  89 => 34,  85 => 37,  79 => 34,  75 => 31,  68 => 27,  56 => 27,  50 => 21,  29 => 15,  87 => 35,  72 => 30,  55 => 21,  21 => 11,  26 => 14,  98 => 36,  93 => 40,  88 => 38,  78 => 36,  46 => 19,  27 => 14,  40 => 17,  44 => 19,  35 => 20,  31 => 14,  43 => 18,  41 => 20,  28 => 13,  201 => 57,  196 => 90,  183 => 74,  171 => 61,  166 => 50,  163 => 49,  158 => 67,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  123 => 47,  121 => 52,  117 => 45,  115 => 40,  105 => 44,  101 => 37,  91 => 39,  69 => 33,  66 => 26,  62 => 30,  49 => 20,  24 => 13,  32 => 14,  25 => 13,  22 => 12,  19 => 11,  209 => 24,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 59,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 45,  106 => 35,  103 => 38,  99 => 45,  95 => 19,  92 => 35,  86 => 33,  82 => 38,  80 => 31,  73 => 34,  64 => 27,  60 => 24,  57 => 23,  54 => 22,  51 => 21,  48 => 22,  45 => 21,  42 => 18,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
