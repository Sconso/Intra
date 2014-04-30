<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_395dbe98aa9732a65cf27cb0be3d680e2666753414e9ce545f46a0ffca460d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email")), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 141,  303 => 140,  248 => 116,  134 => 59,  399 => 158,  396 => 157,  383 => 150,  359 => 140,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  267 => 98,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  170 => 79,  167 => 60,  194 => 87,  701 => 418,  692 => 412,  685 => 405,  675 => 402,  665 => 398,  654 => 389,  650 => 388,  644 => 385,  634 => 381,  624 => 374,  616 => 369,  599 => 358,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 312,  497 => 300,  450 => 268,  433 => 258,  431 => 257,  416 => 248,  385 => 226,  348 => 136,  299 => 174,  284 => 167,  242 => 113,  232 => 83,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 384,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 362,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 310,  509 => 159,  503 => 303,  499 => 155,  496 => 154,  490 => 153,  485 => 293,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 269,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  366 => 142,  363 => 210,  354 => 119,  316 => 74,  281 => 61,  210 => 30,  198 => 22,  165 => 77,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 354,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 320,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 314,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 275,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 156,  371 => 144,  358 => 106,  349 => 103,  342 => 133,  339 => 100,  336 => 189,  329 => 126,  326 => 76,  319 => 90,  311 => 89,  297 => 84,  289 => 109,  286 => 133,  274 => 129,  250 => 67,  233 => 62,  228 => 59,  200 => 55,  344 => 97,  338 => 94,  335 => 129,  321 => 124,  295 => 66,  292 => 135,  259 => 55,  215 => 32,  190 => 50,  184 => 47,  181 => 80,  178 => 45,  161 => 71,  90 => 34,  84 => 29,  114 => 23,  568 => 338,  557 => 177,  553 => 329,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 280,  460 => 132,  449 => 123,  446 => 266,  441 => 138,  426 => 255,  419 => 98,  415 => 97,  410 => 245,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  377 => 147,  369 => 157,  357 => 139,  347 => 115,  333 => 112,  324 => 92,  307 => 71,  300 => 139,  291 => 65,  288 => 85,  282 => 79,  275 => 77,  272 => 76,  226 => 36,  205 => 59,  186 => 82,  172 => 112,  148 => 53,  127 => 45,  370 => 100,  367 => 131,  361 => 122,  352 => 138,  346 => 92,  343 => 91,  340 => 95,  332 => 188,  330 => 87,  327 => 186,  320 => 75,  315 => 90,  313 => 178,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 131,  277 => 59,  271 => 58,  265 => 126,  262 => 63,  260 => 124,  257 => 61,  223 => 58,  216 => 100,  192 => 88,  188 => 68,  185 => 86,  180 => 104,  174 => 118,  23 => 3,  83 => 32,  74 => 17,  12 => 34,  150 => 65,  120 => 56,  118 => 91,  129 => 57,  70 => 33,  113 => 46,  104 => 49,  157 => 41,  153 => 72,  145 => 97,  139 => 60,  124 => 23,  110 => 51,  65 => 30,  96 => 71,  81 => 62,  76 => 20,  58 => 23,  263 => 125,  256 => 121,  249 => 89,  245 => 88,  239 => 86,  236 => 109,  225 => 89,  213 => 126,  207 => 29,  197 => 90,  191 => 69,  175 => 77,  160 => 76,  155 => 55,  152 => 92,  146 => 34,  137 => 59,  126 => 55,  100 => 22,  97 => 63,  77 => 18,  34 => 16,  53 => 80,  37 => 17,  52 => 20,  20 => 1,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 236,  393 => 125,  387 => 152,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 114,  337 => 103,  322 => 184,  314 => 99,  312 => 143,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 127,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 47,  229 => 73,  220 => 56,  214 => 99,  177 => 63,  169 => 74,  140 => 28,  132 => 59,  128 => 58,  111 => 88,  107 => 24,  61 => 31,  273 => 101,  269 => 75,  254 => 91,  246 => 69,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 106,  227 => 80,  224 => 103,  221 => 78,  219 => 101,  217 => 87,  208 => 74,  204 => 28,  179 => 107,  159 => 70,  143 => 29,  135 => 81,  131 => 25,  119 => 42,  108 => 48,  102 => 39,  71 => 55,  67 => 32,  63 => 24,  59 => 29,  47 => 25,  38 => 6,  94 => 21,  89 => 40,  85 => 30,  79 => 31,  75 => 39,  68 => 12,  56 => 28,  50 => 17,  29 => 2,  87 => 30,  72 => 37,  55 => 21,  21 => 12,  26 => 2,  98 => 47,  93 => 39,  88 => 66,  78 => 40,  46 => 21,  27 => 4,  40 => 23,  44 => 24,  35 => 20,  31 => 4,  43 => 20,  41 => 18,  28 => 3,  201 => 57,  196 => 71,  183 => 74,  171 => 102,  166 => 100,  163 => 109,  158 => 75,  156 => 68,  151 => 99,  142 => 50,  138 => 61,  136 => 60,  123 => 57,  121 => 53,  117 => 51,  115 => 50,  105 => 47,  101 => 37,  91 => 86,  69 => 24,  66 => 25,  62 => 29,  49 => 21,  24 => 13,  32 => 3,  25 => 12,  22 => 2,  19 => 1,  209 => 96,  203 => 93,  199 => 53,  193 => 70,  189 => 177,  187 => 87,  182 => 85,  176 => 82,  173 => 62,  168 => 72,  164 => 72,  162 => 71,  154 => 67,  149 => 36,  147 => 69,  144 => 68,  141 => 67,  133 => 49,  130 => 46,  125 => 44,  122 => 45,  116 => 43,  112 => 52,  109 => 69,  106 => 40,  103 => 46,  99 => 38,  95 => 43,  92 => 45,  86 => 43,  82 => 83,  80 => 41,  73 => 19,  64 => 26,  60 => 22,  57 => 22,  54 => 25,  51 => 24,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 17,  30 => 15,);
    }
}
