<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_5d52a3a46354068be881e66f660b3f250b5d8c791dac60c96b210a7b88767c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 14
        echo "    ";
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : null)) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : null)) > 0))) {
            // line 22
            echo "        <div class=\"row-fluid\">
            <div class=\"sonata-ba-list span10\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
            </div>

            <div class=\"sonata-ba-filter span2\">
                ";
            // line 28
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
            echo "
            </div>
        </div>
    ";
        }
        // line 32
        echo "
";
    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  81 => 16,  76 => 32,  58 => 22,  263 => 104,  256 => 102,  249 => 98,  245 => 97,  239 => 94,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 79,  191 => 76,  175 => 72,  160 => 68,  155 => 66,  152 => 65,  146 => 63,  137 => 60,  126 => 51,  100 => 40,  97 => 39,  77 => 28,  34 => 4,  53 => 20,  37 => 18,  52 => 20,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 95,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 71,  140 => 55,  132 => 51,  128 => 49,  111 => 45,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 88,  219 => 76,  217 => 87,  208 => 68,  204 => 72,  179 => 73,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 41,  71 => 19,  67 => 25,  63 => 15,  59 => 14,  47 => 18,  38 => 6,  94 => 38,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 22,  56 => 21,  50 => 19,  29 => 15,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 14,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 12,  40 => 19,  44 => 17,  35 => 5,  31 => 3,  43 => 8,  41 => 18,  28 => 3,  201 => 92,  196 => 90,  183 => 74,  171 => 61,  166 => 70,  163 => 69,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 50,  121 => 46,  117 => 47,  115 => 43,  105 => 40,  101 => 32,  91 => 18,  69 => 28,  66 => 15,  62 => 24,  49 => 19,  24 => 11,  32 => 16,  25 => 12,  22 => 2,  19 => 1,  209 => 82,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 64,  147 => 58,  144 => 62,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 44,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 17,  82 => 22,  80 => 29,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 14,  51 => 14,  48 => 13,  45 => 8,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 7,);
    }
}
