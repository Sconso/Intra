<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_c36a8b3d66aebc2efe659b67a4afb74926b6d099dcd12ca9398e45a320665a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : null), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : null), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : null), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : null) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  361 => 97,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  280 => 69,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 27,  216 => 25,  192 => 23,  188 => 21,  185 => 20,  180 => 104,  174 => 60,  23 => 1,  83 => 35,  74 => 19,  12 => 34,  150 => 58,  120 => 48,  118 => 46,  129 => 42,  70 => 29,  113 => 39,  104 => 42,  157 => 58,  153 => 48,  145 => 56,  139 => 59,  124 => 43,  110 => 36,  65 => 15,  96 => 19,  81 => 34,  76 => 32,  58 => 22,  263 => 104,  256 => 102,  249 => 55,  245 => 97,  239 => 94,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 79,  191 => 76,  175 => 72,  160 => 52,  155 => 66,  152 => 63,  146 => 63,  137 => 47,  126 => 55,  100 => 36,  97 => 37,  77 => 20,  34 => 16,  53 => 24,  37 => 24,  52 => 24,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 70,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  111 => 41,  107 => 40,  61 => 28,  273 => 96,  269 => 94,  254 => 60,  246 => 54,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 88,  219 => 76,  217 => 87,  208 => 68,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 45,  119 => 39,  108 => 42,  102 => 39,  71 => 32,  67 => 31,  63 => 16,  59 => 29,  47 => 19,  38 => 14,  94 => 36,  89 => 37,  85 => 28,  79 => 33,  75 => 31,  68 => 24,  56 => 12,  50 => 23,  29 => 2,  87 => 38,  72 => 19,  55 => 18,  21 => 11,  26 => 14,  98 => 38,  93 => 28,  88 => 32,  78 => 21,  46 => 9,  27 => 14,  40 => 24,  44 => 20,  35 => 17,  31 => 23,  43 => 25,  41 => 19,  28 => 22,  201 => 92,  196 => 90,  183 => 74,  171 => 61,  166 => 57,  163 => 60,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  123 => 48,  121 => 42,  117 => 50,  115 => 40,  105 => 40,  101 => 40,  91 => 39,  69 => 24,  66 => 17,  62 => 25,  49 => 28,  24 => 13,  32 => 3,  25 => 12,  22 => 11,  19 => 11,  209 => 24,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 59,  154 => 58,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 51,  130 => 57,  125 => 40,  122 => 43,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 31,  95 => 37,  92 => 28,  86 => 25,  82 => 23,  80 => 28,  73 => 19,  64 => 17,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 26,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
