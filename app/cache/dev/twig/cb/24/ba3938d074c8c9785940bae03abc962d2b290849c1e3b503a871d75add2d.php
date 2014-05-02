<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_cb24ba3938d074c8c9785940bae03abc962d2b290849c1e3b503a871d75add2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_ec6c9cc510363ebe74ea467c49c42a001c9b5194091b01a6ddd631208d2057c4"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\"></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $context["__internal_ec6c9cc510363ebe74ea467c49c42a001c9b5194091b01a6ddd631208d2057c4"]->getdisplay_listener((isset($context["listener"]) ? $context["listener"] : null));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    ";
        // line 39
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "notcalledlisteners")) {
            // line 40
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "notcalledlisteners");
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : null), (isset($context["listener"]) ? $context["listener"] : null), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $context["__internal_ec6c9cc510363ebe74ea467c49c42a001c9b5194091b01a6ddd631208d2057c4"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : null), (isset($context["listener"]) ? $context["listener"] : null), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        }
    }

    // line 58
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "type") == "Closure")) {
                // line 60
                echo "        Closure
    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "type") == "Function")) {
                // line 62
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "line"));
                // line 63
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "function"), "html", null, true);
                }
                // line 64
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "type") == "Method")) {
                // line 65
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "line"));
                // line 66
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "class"));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : null), "method"), "html", null, true);
                }
                // line 67
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 195,  429 => 188,  422 => 184,  408 => 176,  351 => 141,  323 => 128,  306 => 141,  303 => 122,  248 => 94,  134 => 54,  399 => 158,  396 => 157,  383 => 150,  359 => 140,  345 => 135,  325 => 129,  308 => 118,  276 => 102,  270 => 102,  267 => 101,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  170 => 79,  167 => 60,  194 => 70,  701 => 418,  692 => 412,  685 => 405,  675 => 402,  665 => 398,  654 => 389,  650 => 388,  644 => 385,  634 => 381,  624 => 374,  616 => 369,  599 => 358,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 312,  497 => 300,  450 => 268,  433 => 258,  431 => 189,  416 => 248,  385 => 226,  348 => 140,  299 => 174,  284 => 167,  242 => 113,  232 => 83,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 384,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 362,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 310,  509 => 159,  503 => 303,  499 => 155,  496 => 154,  490 => 153,  485 => 293,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 269,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  366 => 142,  363 => 210,  354 => 119,  316 => 74,  281 => 61,  210 => 30,  198 => 22,  165 => 60,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 354,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 320,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 314,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 202,  456 => 275,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 168,  371 => 144,  358 => 106,  349 => 103,  342 => 137,  339 => 100,  336 => 189,  329 => 131,  326 => 76,  319 => 90,  311 => 89,  297 => 84,  289 => 113,  286 => 112,  274 => 129,  250 => 67,  233 => 87,  228 => 59,  200 => 72,  344 => 97,  338 => 135,  335 => 134,  321 => 124,  295 => 66,  292 => 135,  259 => 55,  215 => 32,  190 => 70,  184 => 47,  181 => 65,  178 => 66,  161 => 63,  90 => 27,  84 => 24,  114 => 23,  568 => 338,  557 => 177,  553 => 329,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 280,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 255,  419 => 98,  415 => 180,  410 => 245,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 160,  377 => 147,  369 => 157,  357 => 139,  347 => 115,  333 => 112,  324 => 92,  307 => 71,  300 => 121,  291 => 65,  288 => 85,  282 => 79,  275 => 105,  272 => 76,  226 => 84,  205 => 59,  186 => 69,  172 => 64,  148 => 55,  127 => 45,  370 => 100,  367 => 131,  361 => 146,  352 => 138,  346 => 92,  343 => 91,  340 => 95,  332 => 188,  330 => 87,  327 => 186,  320 => 127,  315 => 125,  313 => 178,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 131,  277 => 59,  271 => 58,  265 => 126,  262 => 98,  260 => 124,  257 => 61,  223 => 58,  216 => 79,  192 => 88,  188 => 68,  185 => 66,  180 => 66,  174 => 118,  23 => 1,  12 => 34,  150 => 55,  118 => 49,  129 => 57,  70 => 19,  113 => 48,  104 => 11,  153 => 56,  124 => 26,  110 => 41,  65 => 39,  81 => 23,  76 => 31,  58 => 10,  263 => 125,  256 => 96,  249 => 89,  245 => 88,  239 => 86,  236 => 109,  225 => 89,  213 => 78,  207 => 75,  197 => 71,  191 => 67,  175 => 65,  160 => 76,  155 => 55,  152 => 56,  146 => 34,  137 => 59,  126 => 55,  100 => 39,  97 => 63,  77 => 18,  34 => 17,  53 => 12,  20 => 1,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 199,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 236,  393 => 125,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 143,  341 => 114,  337 => 103,  322 => 184,  314 => 99,  312 => 124,  309 => 97,  305 => 175,  298 => 120,  294 => 111,  285 => 84,  283 => 106,  278 => 106,  268 => 127,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 63,  169 => 74,  140 => 58,  132 => 59,  128 => 30,  107 => 12,  61 => 11,  273 => 101,  269 => 75,  254 => 91,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 106,  227 => 80,  224 => 103,  221 => 78,  219 => 101,  217 => 87,  208 => 74,  204 => 28,  179 => 107,  159 => 70,  143 => 29,  135 => 81,  119 => 40,  102 => 40,  71 => 55,  67 => 24,  63 => 15,  59 => 14,  38 => 6,  94 => 21,  89 => 37,  85 => 33,  75 => 36,  68 => 18,  56 => 28,  87 => 34,  21 => 12,  26 => 2,  93 => 40,  88 => 34,  78 => 27,  46 => 13,  27 => 3,  44 => 11,  31 => 4,  28 => 3,  201 => 57,  196 => 71,  183 => 74,  171 => 102,  166 => 61,  163 => 109,  158 => 62,  156 => 58,  151 => 59,  142 => 50,  138 => 51,  136 => 37,  121 => 50,  117 => 51,  105 => 34,  91 => 37,  62 => 23,  49 => 14,  24 => 14,  25 => 3,  19 => 11,  79 => 31,  72 => 37,  69 => 11,  47 => 12,  40 => 7,  37 => 7,  22 => 1,  246 => 93,  157 => 41,  145 => 97,  139 => 38,  131 => 31,  123 => 42,  120 => 45,  115 => 50,  111 => 47,  108 => 48,  101 => 37,  98 => 47,  96 => 37,  83 => 33,  74 => 29,  66 => 25,  55 => 16,  52 => 21,  50 => 20,  43 => 12,  41 => 4,  35 => 6,  32 => 5,  29 => 5,  209 => 96,  203 => 73,  199 => 53,  193 => 70,  189 => 177,  187 => 87,  182 => 85,  176 => 63,  173 => 62,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 36,  147 => 54,  144 => 54,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 45,  116 => 39,  112 => 52,  109 => 69,  106 => 40,  103 => 46,  99 => 31,  95 => 43,  92 => 35,  86 => 43,  82 => 31,  80 => 32,  73 => 20,  64 => 23,  60 => 24,  57 => 34,  54 => 23,  51 => 24,  48 => 20,  45 => 10,  42 => 10,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
