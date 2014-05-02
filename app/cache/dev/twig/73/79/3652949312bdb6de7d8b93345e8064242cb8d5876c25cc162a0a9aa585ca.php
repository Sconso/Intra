<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_73793652949312bdb6de7d8b93345e8064242cb8d5876c25cc162a0a9aa585ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 195,  429 => 188,  422 => 184,  408 => 176,  351 => 141,  323 => 128,  306 => 141,  303 => 122,  248 => 94,  134 => 54,  399 => 158,  396 => 157,  383 => 150,  359 => 140,  345 => 135,  325 => 129,  308 => 118,  276 => 102,  270 => 102,  267 => 101,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  170 => 79,  167 => 60,  194 => 70,  701 => 418,  692 => 412,  685 => 405,  675 => 402,  665 => 398,  654 => 389,  650 => 388,  644 => 385,  634 => 381,  624 => 374,  616 => 369,  599 => 358,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 312,  497 => 300,  450 => 268,  433 => 258,  431 => 189,  416 => 248,  385 => 226,  348 => 140,  299 => 174,  284 => 167,  242 => 113,  232 => 83,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 384,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 362,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 310,  509 => 159,  503 => 303,  499 => 155,  496 => 154,  490 => 153,  485 => 293,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 269,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  366 => 142,  363 => 210,  354 => 119,  316 => 74,  281 => 61,  210 => 30,  198 => 22,  165 => 60,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 354,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 320,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 314,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 202,  456 => 275,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 168,  371 => 144,  358 => 106,  349 => 103,  342 => 137,  339 => 100,  336 => 189,  329 => 131,  326 => 76,  319 => 90,  311 => 89,  297 => 84,  289 => 113,  286 => 112,  274 => 129,  250 => 67,  233 => 87,  228 => 59,  200 => 72,  344 => 97,  338 => 135,  335 => 134,  321 => 124,  295 => 66,  292 => 135,  259 => 55,  215 => 32,  190 => 70,  184 => 47,  181 => 65,  178 => 66,  161 => 63,  90 => 27,  84 => 24,  114 => 23,  568 => 338,  557 => 177,  553 => 329,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 280,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 255,  419 => 98,  415 => 180,  410 => 245,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 160,  377 => 147,  369 => 157,  357 => 139,  347 => 115,  333 => 112,  324 => 92,  307 => 71,  300 => 121,  291 => 65,  288 => 85,  282 => 79,  275 => 105,  272 => 76,  226 => 84,  205 => 59,  186 => 69,  172 => 64,  148 => 55,  127 => 45,  370 => 100,  367 => 131,  361 => 146,  352 => 138,  346 => 92,  343 => 91,  340 => 95,  332 => 188,  330 => 87,  327 => 186,  320 => 127,  315 => 125,  313 => 178,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 131,  277 => 59,  271 => 58,  265 => 126,  262 => 98,  260 => 124,  257 => 61,  223 => 58,  216 => 79,  192 => 88,  188 => 68,  185 => 66,  180 => 66,  174 => 118,  23 => 1,  12 => 34,  150 => 55,  118 => 49,  129 => 57,  70 => 19,  113 => 48,  104 => 11,  153 => 56,  124 => 26,  110 => 41,  65 => 39,  81 => 23,  76 => 25,  58 => 10,  263 => 125,  256 => 96,  249 => 89,  245 => 88,  239 => 86,  236 => 109,  225 => 89,  213 => 78,  207 => 75,  197 => 71,  191 => 67,  175 => 65,  160 => 76,  155 => 55,  152 => 56,  146 => 34,  137 => 59,  126 => 55,  100 => 39,  97 => 63,  77 => 18,  34 => 17,  53 => 12,  20 => 1,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 199,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 236,  393 => 125,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 143,  341 => 114,  337 => 103,  322 => 184,  314 => 99,  312 => 124,  309 => 97,  305 => 175,  298 => 120,  294 => 111,  285 => 84,  283 => 106,  278 => 106,  268 => 127,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 63,  169 => 74,  140 => 58,  132 => 59,  128 => 30,  107 => 12,  61 => 17,  273 => 101,  269 => 75,  254 => 91,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 106,  227 => 80,  224 => 103,  221 => 78,  219 => 101,  217 => 87,  208 => 74,  204 => 28,  179 => 107,  159 => 70,  143 => 29,  135 => 81,  119 => 40,  102 => 40,  71 => 55,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 21,  89 => 37,  85 => 33,  75 => 36,  68 => 18,  56 => 28,  87 => 34,  21 => 12,  26 => 2,  93 => 40,  88 => 32,  78 => 27,  46 => 13,  27 => 3,  44 => 11,  31 => 4,  28 => 3,  201 => 57,  196 => 71,  183 => 74,  171 => 102,  166 => 61,  163 => 109,  158 => 62,  156 => 58,  151 => 59,  142 => 50,  138 => 51,  136 => 37,  121 => 50,  117 => 51,  105 => 34,  91 => 33,  62 => 23,  49 => 14,  24 => 14,  25 => 3,  19 => 1,  79 => 31,  72 => 37,  69 => 11,  47 => 12,  40 => 7,  37 => 7,  22 => 1,  246 => 93,  157 => 41,  145 => 97,  139 => 38,  131 => 31,  123 => 42,  120 => 45,  115 => 50,  111 => 47,  108 => 48,  101 => 37,  98 => 47,  96 => 37,  83 => 33,  74 => 29,  66 => 25,  55 => 13,  52 => 12,  50 => 20,  43 => 12,  41 => 4,  35 => 6,  32 => 5,  29 => 5,  209 => 96,  203 => 73,  199 => 53,  193 => 70,  189 => 177,  187 => 87,  182 => 85,  176 => 63,  173 => 62,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 36,  147 => 54,  144 => 54,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 45,  116 => 39,  112 => 52,  109 => 69,  106 => 40,  103 => 46,  99 => 31,  95 => 43,  92 => 35,  86 => 43,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 24,  57 => 34,  54 => 23,  51 => 24,  48 => 20,  45 => 9,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
