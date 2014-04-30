<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_fa71ac7cf4f823a69469eac2e84079cb69e55800a38a6a8094c57a6755fa4aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  29 => 2,  25 => 4,  23 => 2,  20 => 1,  82 => 40,  75 => 36,  65 => 29,  57 => 24,  53 => 23,  47 => 20,  43 => 19,  40 => 18,  34 => 16,  31 => 15,  28 => 14,);
    }
}
