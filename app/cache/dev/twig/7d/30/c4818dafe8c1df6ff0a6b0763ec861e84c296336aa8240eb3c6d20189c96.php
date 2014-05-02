<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_7d30c4818dafe8c1df6ff0a6b0763ec861e84c296336aa8240eb3c6d20189c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\">
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : null), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 39
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"))) {
            // line 40
            echo "        ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : null), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 45
        echo "</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Logs</h2>

    ";
        // line 51
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 52
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY", "-100" => "DEPRECATION only"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 63
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : null) == (isset($context["priority"]) ? $context["priority"] : null))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 74
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs")) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((((isset($context["priority"]) ? $context["priority"] : null) >= 0) && ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= (isset($context["priority"]) ? $context["priority"] : null))) || (((isset($context["priority"]) ? $context["priority"] : null) < 0) && ((($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)) == (isset($context["priority"]) ? $context["priority"] : null))))) {
                    // line 77
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index")), "html", null, true);
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    echo $context["logger"]->getdisplay_message($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), (isset($context["log"]) ? $context["log"] : null));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 81
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </ul>
    ";
        } else {
            // line 85
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 92
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "
        ";
                // line 95
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : null));
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (((isset($context["index"]) ? $context["index"] : null) > 1)) {
                        // line 101
                        echo "            ";
                        if (((isset($context["index"]) ? $context["index"] : null) == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class", array(), "any", true, true)) {
                            // line 105
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function")));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function", array(), "any", true, true)) {
                            // line 107
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function"));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true)) {
                            // line 109
                            echo "                ";
                            $context["from"] = $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file");
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                ";
                            $context["from"] = "-";
                            // line 112
                            echo "            ";
                        }
                        // line 113
                        echo "
            <li>Called from ";
                        // line 114
                        echo ((($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file"), $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line"), (isset($context["from"]) ? $context["from"] : null))) : ((isset($context["from"]) ? $context["from"] : null)));
                        echo "</li>

            ";
                        // line 116
                        echo ((((isset($context["index"]) ? $context["index"] : null) == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "
        ";
                // line 120
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context"))))) {
                    // line 121
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 126
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
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 111,  255 => 93,  231 => 83,  212 => 78,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  647 => 336,  631 => 327,  629 => 326,  622 => 323,  609 => 319,  593 => 310,  591 => 309,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  548 => 292,  541 => 290,  531 => 283,  527 => 281,  522 => 279,  519 => 278,  489 => 262,  436 => 235,  418 => 224,  412 => 222,  397 => 213,  376 => 205,  353 => 121,  317 => 185,  439 => 195,  429 => 188,  422 => 226,  408 => 176,  351 => 120,  323 => 128,  306 => 107,  303 => 106,  248 => 94,  134 => 54,  399 => 158,  396 => 157,  383 => 207,  359 => 140,  345 => 135,  325 => 129,  308 => 118,  276 => 102,  270 => 102,  267 => 101,  237 => 85,  234 => 84,  218 => 77,  202 => 77,  170 => 96,  167 => 60,  194 => 70,  701 => 418,  692 => 412,  685 => 405,  675 => 402,  665 => 398,  654 => 389,  650 => 388,  644 => 335,  634 => 381,  624 => 374,  616 => 369,  599 => 358,  588 => 308,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 312,  497 => 267,  450 => 268,  433 => 258,  431 => 189,  416 => 248,  385 => 226,  348 => 140,  299 => 174,  284 => 167,  242 => 113,  232 => 83,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 225,  651 => 337,  645 => 219,  642 => 218,  640 => 334,  637 => 216,  632 => 213,  626 => 325,  623 => 210,  620 => 209,  606 => 318,  600 => 206,  595 => 203,  589 => 201,  581 => 305,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 293,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 276,  509 => 272,  503 => 303,  499 => 268,  496 => 154,  490 => 153,  485 => 293,  479 => 256,  471 => 253,  468 => 146,  464 => 145,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  432 => 135,  420 => 132,  417 => 130,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  366 => 142,  363 => 126,  354 => 119,  316 => 74,  281 => 61,  210 => 30,  198 => 22,  165 => 60,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 320,  608 => 187,  605 => 186,  602 => 317,  596 => 181,  592 => 354,  590 => 178,  585 => 307,  551 => 174,  547 => 173,  542 => 320,  539 => 171,  536 => 170,  533 => 284,  530 => 167,  528 => 167,  525 => 280,  516 => 161,  512 => 160,  510 => 158,  505 => 270,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 258,  473 => 254,  465 => 249,  462 => 202,  456 => 275,  451 => 140,  428 => 230,  425 => 135,  414 => 127,  403 => 121,  400 => 214,  394 => 168,  371 => 144,  358 => 106,  349 => 103,  342 => 137,  339 => 100,  336 => 189,  329 => 188,  326 => 76,  319 => 90,  311 => 89,  297 => 104,  289 => 113,  286 => 112,  274 => 97,  250 => 67,  233 => 87,  228 => 59,  200 => 72,  344 => 119,  338 => 135,  335 => 134,  321 => 112,  295 => 178,  292 => 135,  259 => 55,  215 => 32,  190 => 76,  184 => 101,  181 => 65,  178 => 66,  161 => 63,  90 => 26,  84 => 24,  114 => 23,  568 => 338,  557 => 295,  553 => 329,  545 => 291,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 248,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 255,  419 => 98,  415 => 180,  410 => 221,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 206,  377 => 147,  369 => 157,  357 => 123,  347 => 191,  333 => 112,  324 => 113,  307 => 71,  300 => 105,  291 => 102,  288 => 101,  282 => 79,  275 => 105,  272 => 76,  226 => 84,  205 => 108,  186 => 69,  172 => 64,  148 => 55,  127 => 45,  370 => 100,  367 => 198,  361 => 195,  352 => 138,  346 => 92,  343 => 91,  340 => 95,  332 => 116,  330 => 87,  327 => 114,  320 => 127,  315 => 110,  313 => 183,  310 => 81,  304 => 181,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 131,  277 => 59,  271 => 58,  265 => 96,  262 => 98,  260 => 124,  257 => 61,  223 => 58,  216 => 79,  192 => 88,  188 => 102,  185 => 74,  180 => 66,  174 => 65,  23 => 1,  12 => 34,  150 => 55,  118 => 49,  129 => 57,  70 => 19,  113 => 48,  104 => 32,  153 => 56,  124 => 26,  110 => 41,  65 => 39,  81 => 23,  76 => 25,  58 => 14,  263 => 95,  256 => 96,  249 => 89,  245 => 88,  239 => 86,  236 => 109,  225 => 89,  213 => 78,  207 => 75,  197 => 104,  191 => 67,  175 => 65,  160 => 76,  155 => 55,  152 => 56,  146 => 34,  137 => 59,  126 => 55,  100 => 39,  97 => 63,  77 => 20,  34 => 17,  53 => 12,  20 => 1,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 215,  398 => 236,  393 => 211,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 197,  362 => 141,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 184,  314 => 99,  312 => 109,  309 => 108,  305 => 175,  298 => 120,  294 => 111,  285 => 175,  283 => 100,  278 => 98,  268 => 127,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 63,  169 => 74,  140 => 58,  132 => 59,  128 => 30,  107 => 12,  61 => 15,  273 => 174,  269 => 75,  254 => 91,  243 => 92,  240 => 86,  238 => 139,  235 => 85,  230 => 106,  227 => 80,  224 => 81,  221 => 78,  219 => 101,  217 => 87,  208 => 74,  204 => 28,  179 => 98,  159 => 90,  143 => 51,  135 => 81,  119 => 40,  102 => 40,  71 => 55,  67 => 20,  63 => 18,  59 => 11,  38 => 7,  94 => 21,  89 => 37,  85 => 24,  75 => 19,  68 => 18,  56 => 28,  87 => 34,  21 => 12,  26 => 2,  93 => 27,  88 => 25,  78 => 27,  46 => 10,  27 => 3,  44 => 9,  31 => 4,  28 => 3,  201 => 106,  196 => 71,  183 => 74,  171 => 102,  166 => 95,  163 => 109,  158 => 62,  156 => 62,  151 => 59,  142 => 50,  138 => 51,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 12,  49 => 11,  24 => 14,  25 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 12,  40 => 7,  37 => 7,  22 => 1,  246 => 93,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 45,  115 => 50,  111 => 47,  108 => 48,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 29,  66 => 25,  55 => 13,  52 => 12,  50 => 20,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 5,  209 => 96,  203 => 73,  199 => 53,  193 => 70,  189 => 177,  187 => 75,  182 => 85,  176 => 63,  173 => 62,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 36,  147 => 54,  144 => 54,  141 => 51,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 40,  103 => 46,  99 => 31,  95 => 43,  92 => 27,  86 => 43,  82 => 28,  80 => 27,  73 => 24,  64 => 13,  60 => 24,  57 => 34,  54 => 23,  51 => 24,  48 => 20,  45 => 9,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
