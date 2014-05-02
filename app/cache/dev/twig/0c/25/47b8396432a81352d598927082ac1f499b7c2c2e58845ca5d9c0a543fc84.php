<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_0c2547b8396432a81352d598927082ac1f499b7c2c2e58845ca5d9c0a543fc84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : null))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : null)), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : null))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : null))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : null)))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  706 => 472,  694 => 468,  682 => 465,  678 => 464,  673 => 462,  630 => 455,  625 => 453,  621 => 452,  565 => 414,  244 => 136,  389 => 160,  378 => 157,  334 => 141,  331 => 140,  328 => 139,  290 => 119,  253 => 100,  222 => 83,  318 => 111,  255 => 101,  231 => 83,  212 => 78,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  647 => 336,  631 => 327,  629 => 326,  622 => 323,  609 => 319,  593 => 310,  591 => 309,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  548 => 292,  541 => 290,  531 => 283,  527 => 409,  522 => 279,  519 => 278,  489 => 262,  436 => 235,  418 => 224,  412 => 222,  397 => 213,  376 => 205,  353 => 149,  317 => 185,  439 => 195,  429 => 188,  422 => 226,  408 => 176,  351 => 120,  323 => 128,  306 => 107,  303 => 106,  248 => 97,  134 => 39,  399 => 158,  396 => 157,  383 => 207,  359 => 140,  345 => 147,  325 => 129,  308 => 118,  276 => 111,  270 => 102,  267 => 101,  237 => 85,  234 => 84,  218 => 77,  202 => 77,  170 => 84,  167 => 60,  194 => 68,  701 => 418,  692 => 412,  685 => 405,  675 => 463,  665 => 398,  654 => 389,  650 => 388,  644 => 335,  634 => 381,  624 => 374,  616 => 450,  599 => 358,  588 => 308,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 406,  497 => 267,  450 => 268,  433 => 258,  431 => 189,  416 => 248,  385 => 226,  348 => 140,  299 => 174,  284 => 167,  242 => 113,  232 => 88,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 473,  717 => 186,  708 => 183,  703 => 182,  698 => 469,  695 => 180,  690 => 467,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 461,  651 => 337,  645 => 460,  642 => 218,  640 => 334,  637 => 216,  632 => 213,  626 => 325,  623 => 210,  620 => 209,  606 => 318,  600 => 206,  595 => 203,  589 => 201,  581 => 305,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 293,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 404,  509 => 272,  503 => 303,  499 => 268,  496 => 154,  490 => 153,  485 => 293,  479 => 256,  471 => 253,  468 => 146,  464 => 145,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  432 => 135,  420 => 132,  417 => 130,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  366 => 142,  363 => 153,  354 => 119,  316 => 74,  281 => 114,  210 => 77,  198 => 22,  165 => 83,  713 => 214,  707 => 211,  704 => 210,  702 => 470,  696 => 206,  686 => 466,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 451,  613 => 320,  608 => 187,  605 => 186,  602 => 449,  596 => 181,  592 => 354,  590 => 178,  585 => 307,  551 => 174,  547 => 411,  542 => 320,  539 => 171,  536 => 170,  533 => 284,  530 => 410,  528 => 167,  525 => 408,  516 => 161,  512 => 160,  510 => 158,  505 => 270,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 258,  473 => 254,  465 => 249,  462 => 202,  456 => 275,  451 => 140,  428 => 230,  425 => 135,  414 => 127,  403 => 121,  400 => 214,  394 => 168,  371 => 156,  358 => 151,  349 => 323,  342 => 137,  339 => 100,  336 => 189,  329 => 188,  326 => 138,  319 => 90,  311 => 89,  297 => 104,  289 => 113,  286 => 112,  274 => 110,  250 => 67,  233 => 87,  228 => 59,  200 => 72,  344 => 321,  338 => 135,  335 => 134,  321 => 135,  295 => 178,  292 => 135,  259 => 103,  215 => 32,  190 => 76,  184 => 63,  181 => 65,  178 => 59,  161 => 63,  90 => 37,  84 => 27,  114 => 23,  568 => 338,  557 => 295,  553 => 329,  545 => 291,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 248,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 255,  419 => 98,  415 => 180,  410 => 221,  395 => 84,  392 => 83,  388 => 117,  386 => 159,  382 => 93,  380 => 158,  377 => 147,  369 => 157,  357 => 123,  347 => 322,  333 => 112,  324 => 113,  307 => 128,  300 => 280,  291 => 102,  288 => 118,  282 => 79,  275 => 105,  272 => 76,  226 => 84,  205 => 108,  186 => 69,  172 => 57,  148 => 55,  127 => 35,  370 => 100,  367 => 155,  361 => 333,  352 => 138,  346 => 92,  343 => 146,  340 => 145,  332 => 116,  330 => 87,  327 => 114,  320 => 127,  315 => 131,  313 => 183,  310 => 81,  304 => 181,  302 => 281,  296 => 121,  293 => 120,  287 => 64,  280 => 131,  277 => 59,  271 => 58,  265 => 105,  262 => 98,  260 => 124,  257 => 61,  223 => 58,  216 => 79,  192 => 88,  188 => 90,  185 => 74,  180 => 66,  174 => 65,  23 => 1,  12 => 34,  150 => 55,  118 => 49,  129 => 57,  70 => 26,  113 => 40,  104 => 37,  153 => 77,  124 => 26,  110 => 38,  65 => 17,  81 => 23,  76 => 28,  58 => 14,  263 => 95,  256 => 96,  249 => 89,  245 => 88,  239 => 86,  236 => 109,  225 => 89,  213 => 78,  207 => 75,  197 => 69,  191 => 67,  175 => 58,  160 => 76,  155 => 47,  152 => 46,  146 => 34,  137 => 59,  126 => 55,  100 => 36,  97 => 63,  77 => 25,  34 => 5,  53 => 17,  20 => 1,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 215,  398 => 236,  393 => 211,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 197,  362 => 141,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 184,  314 => 99,  312 => 130,  309 => 129,  305 => 175,  298 => 120,  294 => 111,  285 => 175,  283 => 115,  278 => 98,  268 => 127,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 63,  169 => 74,  140 => 58,  132 => 59,  128 => 30,  107 => 37,  61 => 23,  273 => 174,  269 => 107,  254 => 91,  243 => 92,  240 => 86,  238 => 139,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 78,  219 => 101,  217 => 87,  208 => 76,  204 => 28,  179 => 98,  159 => 90,  143 => 51,  135 => 81,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 22,  38 => 7,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 106,  196 => 92,  183 => 74,  171 => 102,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 50,  138 => 51,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 16,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 70,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 36,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 46,  99 => 23,  95 => 39,  92 => 31,  86 => 43,  82 => 26,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
