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
        // line 15
        echo "    </header>

    <nav>
        ";
        // line 18
        $this->displayBlock('nav', $context, $blocks);
        // line 21
        echo "    </nav>

    <div id=\"content\">
        <aside>
            ";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "        </aside>
        
        <main>
            ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 33
        echo "        </main>
    </div>

    <footer>
        ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 40
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
        echo "        <div id=\"account\">
        </div>
        ";
    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        // line 19
        echo "        <a id=\"home\" href=\"/\"></a>
        ";
    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        // line 26
        echo "            ";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "
            ";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
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
        return array (  139 => 38,  136 => 37,  131 => 31,  128 => 30,  124 => 26,  121 => 25,  116 => 19,  113 => 18,  107 => 12,  104 => 11,  93 => 40,  91 => 37,  85 => 33,  83 => 30,  78 => 27,  76 => 25,  70 => 21,  68 => 18,  63 => 15,  61 => 11,  58 => 10,  55 => 9,  49 => 6,  44 => 5,  41 => 4,  35 => 3,);
    }
}
