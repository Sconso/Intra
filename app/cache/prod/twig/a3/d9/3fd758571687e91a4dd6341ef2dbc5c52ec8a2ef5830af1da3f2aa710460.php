<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_a3d93fd758571687e91a4dd6341ef2dbc5c52ec8a2ef5830af1da3f2aa710460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ((isset($context["name"]) ? $context["name"] : null)) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), (isset($context["object"]) ? $context["object"] : null));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  282 => 80,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  186 => 54,  172 => 52,  148 => 44,  127 => 34,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  216 => 25,  192 => 55,  188 => 21,  185 => 20,  180 => 104,  174 => 53,  23 => 12,  83 => 64,  74 => 19,  12 => 34,  150 => 58,  120 => 48,  118 => 46,  129 => 42,  70 => 29,  113 => 39,  104 => 42,  157 => 47,  153 => 48,  145 => 43,  139 => 59,  124 => 43,  110 => 36,  65 => 25,  96 => 139,  81 => 30,  76 => 32,  58 => 22,  263 => 104,  256 => 102,  249 => 70,  245 => 97,  239 => 94,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 56,  191 => 76,  175 => 72,  160 => 48,  155 => 66,  152 => 63,  146 => 63,  137 => 47,  126 => 55,  100 => 42,  97 => 37,  77 => 20,  34 => 16,  53 => 24,  37 => 18,  52 => 24,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  111 => 41,  107 => 44,  61 => 28,  273 => 96,  269 => 75,  254 => 60,  246 => 69,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 88,  219 => 76,  217 => 87,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 45,  119 => 31,  108 => 144,  102 => 142,  71 => 30,  67 => 31,  63 => 16,  59 => 26,  47 => 22,  38 => 14,  94 => 40,  89 => 38,  85 => 37,  79 => 33,  75 => 32,  68 => 26,  56 => 25,  50 => 23,  29 => 14,  87 => 38,  72 => 19,  55 => 18,  21 => 11,  26 => 13,  98 => 140,  93 => 138,  88 => 74,  78 => 29,  46 => 9,  27 => 14,  40 => 15,  44 => 20,  35 => 20,  31 => 15,  43 => 20,  41 => 19,  28 => 14,  201 => 57,  196 => 90,  183 => 74,  171 => 61,  166 => 50,  163 => 49,  158 => 67,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  123 => 33,  121 => 42,  117 => 50,  115 => 40,  105 => 143,  101 => 40,  91 => 75,  69 => 29,  66 => 28,  62 => 27,  49 => 23,  24 => 13,  32 => 3,  25 => 13,  22 => 12,  19 => 11,  209 => 24,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 59,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 51,  130 => 35,  125 => 40,  122 => 43,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 31,  95 => 37,  92 => 39,  86 => 65,  82 => 36,  80 => 28,  73 => 27,  64 => 17,  60 => 19,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
