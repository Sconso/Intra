<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_093f70d573aa5b672e42039c72c558fb55ab5c9c97871c3a9420f76d703d69e7 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  104 => 40,  153 => 62,  124 => 52,  110 => 41,  65 => 26,  81 => 16,  76 => 32,  58 => 22,  263 => 104,  256 => 102,  249 => 98,  245 => 97,  239 => 94,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 79,  191 => 76,  175 => 72,  160 => 68,  155 => 66,  152 => 65,  146 => 63,  137 => 60,  126 => 45,  100 => 41,  97 => 39,  77 => 28,  34 => 18,  53 => 24,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 95,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 69,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 88,  219 => 76,  217 => 87,  208 => 68,  204 => 72,  179 => 72,  159 => 61,  143 => 56,  135 => 48,  119 => 42,  102 => 42,  71 => 29,  67 => 31,  63 => 15,  59 => 14,  38 => 18,  94 => 39,  89 => 37,  85 => 35,  75 => 33,  68 => 30,  56 => 21,  87 => 25,  21 => 2,  26 => 14,  93 => 28,  88 => 36,  78 => 31,  46 => 7,  27 => 14,  44 => 21,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 74,  171 => 61,  166 => 70,  163 => 68,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 56,  121 => 51,  117 => 50,  105 => 40,  91 => 38,  62 => 25,  49 => 19,  24 => 13,  25 => 12,  19 => 11,  79 => 18,  72 => 16,  69 => 32,  47 => 21,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 64,  145 => 59,  139 => 57,  131 => 52,  123 => 50,  120 => 40,  115 => 43,  111 => 45,  108 => 36,  101 => 32,  98 => 38,  96 => 19,  83 => 25,  74 => 14,  66 => 15,  55 => 25,  52 => 20,  50 => 25,  43 => 21,  41 => 20,  35 => 5,  32 => 16,  29 => 15,  209 => 82,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 64,  147 => 58,  144 => 62,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 43,  112 => 47,  109 => 44,  106 => 44,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 17,  82 => 33,  80 => 29,  73 => 19,  64 => 17,  60 => 24,  57 => 27,  54 => 26,  51 => 14,  48 => 13,  45 => 8,  42 => 16,  39 => 15,  36 => 19,  33 => 16,  30 => 15,);
    }
}
