<?php

/* FTDefaultBundle:Default:index.html.twig */
class __TwigTemplate_4a690365365afc71f5359dee889df302f83854145102709b980c3cce78cf2a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'menu' => array($this, 'block_menu'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Born To Code";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ftdefault/css/index.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <header>
        ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "    </header>

    <nav>
        ";
        // line 17
        $this->displayBlock('nav', $context, $blocks);
        // line 20
        echo "    </nav>

    <div id=\"content\">
        <aside>
            ";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "        </aside>
        
        <main>
            ";
        // line 29
        $this->displayBlock('main', $context, $blocks);
        // line 32
        echo "        </main>
    </div>

    <footer>
        ";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "        <div id=\"copyright\">
            <span>
                Best intra ever.<br />
                &copy;Sconso for 42 School.
            </span>
        </div>
    </footer>
";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "
        ";
    }

    // line 17
    public function block_nav($context, array $blocks = array())
    {
        // line 18
        echo "        
        ";
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        // line 25
        echo "            ";
    }

    // line 29
    public function block_main($context, array $blocks = array())
    {
        // line 30
        echo "
            ";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "FTDefaultBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  135 => 36,  130 => 30,  127 => 29,  123 => 25,  120 => 24,  115 => 18,  112 => 17,  107 => 12,  104 => 11,  93 => 39,  91 => 36,  85 => 32,  83 => 29,  78 => 26,  76 => 24,  70 => 20,  68 => 17,  63 => 14,  61 => 11,  58 => 10,  55 => 9,  49 => 6,  44 => 5,  41 => 4,  35 => 3,);
    }
}
