<?php

/* SonataUserBundle:Admin\Core:user_block.html.twig */
class __TwigTemplate_af76d40d738f7a222b6314fc56c77b20205f74eafbaf9e2762e93c9c4739f66d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "parameters"), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin\\Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  35 => 5,  20 => 1,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 178,  683 => 272,  681 => 265,  676 => 262,  674 => 232,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 208,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  540 => 188,  537 => 178,  534 => 177,  530 => 167,  521 => 163,  515 => 161,  512 => 160,  509 => 159,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  456 => 142,  454 => 141,  451 => 140,  448 => 139,  441 => 138,  438 => 137,  435 => 136,  432 => 135,  426 => 134,  423 => 133,  420 => 132,  417 => 130,  410 => 129,  407 => 128,  401 => 127,  398 => 126,  393 => 125,  390 => 124,  387 => 123,  381 => 122,  375 => 168,  373 => 159,  369 => 157,  366 => 156,  363 => 123,  361 => 122,  357 => 120,  354 => 119,  347 => 115,  341 => 114,  336 => 113,  333 => 112,  326 => 76,  320 => 75,  316 => 74,  313 => 73,  307 => 71,  305 => 70,  300 => 68,  295 => 66,  291 => 65,  287 => 64,  281 => 61,  277 => 59,  271 => 58,  263 => 57,  259 => 55,  256 => 54,  249 => 50,  245 => 49,  241 => 47,  226 => 36,  224 => 35,  219 => 33,  215 => 32,  210 => 30,  207 => 29,  204 => 28,  198 => 22,  191 => 273,  189 => 177,  182 => 172,  179 => 171,  177 => 119,  174 => 118,  172 => 112,  165 => 110,  163 => 109,  151 => 99,  145 => 97,  141 => 95,  138 => 94,  135 => 93,  118 => 91,  114 => 89,  111 => 88,  94 => 87,  91 => 86,  88 => 85,  82 => 83,  80 => 82,  75 => 80,  71 => 78,  69 => 54,  66 => 53,  64 => 28,  55 => 22,  52 => 21,  50 => 20,  46 => 9,  44 => 17,  42 => 16,  40 => 15,  38 => 14,  36 => 13,  34 => 12,  89 => 37,  81 => 32,  68 => 22,  60 => 17,  54 => 14,  48 => 19,  45 => 10,  39 => 8,  37 => 6,  32 => 11,  29 => 3,  26 => 2,);
    }
}
