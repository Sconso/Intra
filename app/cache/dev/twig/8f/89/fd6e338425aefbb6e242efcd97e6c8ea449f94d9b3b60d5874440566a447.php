<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_8f89fd6e338425aefbb6e242efcd97e6c8ea449f94d9b3b60d5874440566a447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,  179 => 72,  173 => 71,  169 => 69,  163 => 68,  157 => 64,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  135 => 55,  124 => 52,  121 => 51,  117 => 50,  112 => 47,  102 => 42,  100 => 41,  94 => 39,  89 => 37,  75 => 30,  71 => 29,  65 => 26,  62 => 25,  60 => 24,  57 => 23,  50 => 22,  41 => 20,  38 => 19,  29 => 15,  26 => 14,  159 => 49,  153 => 62,  147 => 46,  144 => 45,  140 => 44,  132 => 43,  129 => 42,  125 => 40,  119 => 39,  113 => 37,  110 => 46,  106 => 44,  103 => 34,  101 => 33,  97 => 31,  91 => 38,  85 => 28,  82 => 33,  78 => 31,  70 => 25,  67 => 24,  61 => 23,  58 => 22,  55 => 21,  52 => 20,  47 => 21,  45 => 18,  42 => 17,  39 => 16,  34 => 18,  28 => 14,);
    }
}
