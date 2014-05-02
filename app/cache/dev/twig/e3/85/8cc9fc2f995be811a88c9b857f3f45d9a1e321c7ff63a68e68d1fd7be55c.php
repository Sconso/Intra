<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_e3858cc9fc2f995be811a88c9b857f3f45d9a1e321c7ff63a68e68d1fd7be55c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : null), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br />
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  361 => 97,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  280 => 69,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 27,  216 => 25,  192 => 23,  188 => 21,  185 => 20,  180 => 104,  174 => 60,  23 => 1,  12 => 34,  150 => 58,  118 => 46,  129 => 42,  70 => 29,  113 => 39,  104 => 42,  153 => 48,  124 => 43,  110 => 36,  65 => 15,  81 => 34,  76 => 32,  58 => 22,  263 => 104,  256 => 102,  249 => 55,  245 => 97,  239 => 94,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 79,  191 => 76,  175 => 72,  160 => 52,  155 => 66,  152 => 63,  146 => 63,  137 => 47,  126 => 55,  100 => 36,  97 => 37,  77 => 20,  34 => 16,  53 => 24,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 70,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 58,  140 => 53,  132 => 43,  128 => 44,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 60,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 88,  219 => 76,  217 => 87,  208 => 68,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 39,  102 => 42,  71 => 25,  67 => 28,  63 => 20,  59 => 14,  38 => 18,  94 => 36,  89 => 37,  85 => 28,  75 => 31,  68 => 24,  56 => 12,  87 => 38,  21 => 11,  26 => 14,  93 => 28,  88 => 32,  78 => 26,  46 => 9,  27 => 14,  44 => 21,  31 => 23,  28 => 22,  201 => 92,  196 => 90,  183 => 74,  171 => 61,  166 => 57,  163 => 60,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  121 => 42,  117 => 50,  105 => 40,  91 => 39,  62 => 25,  49 => 10,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 30,  69 => 24,  47 => 19,  40 => 6,  37 => 24,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 48,  120 => 48,  115 => 40,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 19,  83 => 35,  74 => 19,  66 => 23,  55 => 18,  52 => 23,  50 => 23,  43 => 14,  41 => 20,  35 => 4,  32 => 3,  29 => 2,  209 => 24,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 57,  154 => 58,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 51,  130 => 57,  125 => 40,  122 => 43,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 31,  95 => 40,  92 => 21,  86 => 17,  82 => 36,  80 => 28,  73 => 19,  64 => 17,  60 => 13,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
