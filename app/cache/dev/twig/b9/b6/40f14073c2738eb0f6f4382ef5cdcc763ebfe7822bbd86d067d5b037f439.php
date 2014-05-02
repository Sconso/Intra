<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_b9b640f14073c2738eb0f6f4382ef5cdcc763ebfe7822bbd86d067d5b037f439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  28 => 14,  69 => 34,  67 => 33,  64 => 31,  62 => 30,  54 => 26,  43 => 21,  36 => 18,  33 => 17,  114 => 23,  100 => 22,  94 => 21,  76 => 20,  73 => 19,  59 => 29,  50 => 17,  32 => 16,  52 => 25,  47 => 23,  41 => 17,  37 => 20,  35 => 20,  23 => 12,  20 => 11,  34 => 16,  31 => 15,  29 => 15,  26 => 14,  22 => 12,  19 => 11,);
    }
}
