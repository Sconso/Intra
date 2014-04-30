<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_cf3e6046550a344cf93f52a948d82935652345fe3c072e82d888e0869c903faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<h4>";
        // line 12
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h4>

<div class=\"sonata-user-show\">

    <div class=\"span2 well\" style=\"padding: 8px 0;\">
        ";
        // line 17
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 20
        echo "    </div>

    <div class=\"span8\">
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "fos_user_success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "            <div class=\"alert alert-success\">
                ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "SonataUserBundle"), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 31
        echo "    </div>

</div>
";
    }

    // line 12
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
    }

    // line 17
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"))));
        echo "
        ";
    }

    // line 29
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 30
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  84 => 29,  77 => 18,  74 => 17,  68 => 12,  61 => 31,  59 => 29,  56 => 28,  47 => 25,  44 => 24,  40 => 23,  35 => 20,  33 => 17,  25 => 12,  22 => 11,  28 => 14,);
    }
}
