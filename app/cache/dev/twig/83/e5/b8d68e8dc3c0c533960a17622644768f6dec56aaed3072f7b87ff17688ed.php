<?php

/* WebProfilerBundle:Profiler:profiler.css.twig */
class __TwigTemplate_83e5b8d68e8dc3c0c533960a17622644768f6dec56aaed3072f7b87ff17688ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}
html, body {
    background-color: #efefef;
}
body {
    font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
    text-align: left;
}
p {
    font-size: 14px;
    line-height: 20px;
    color: #313131;
    padding-bottom: 20px
}
strong {
    color: #313131;
    font-weight: bold;
}
em {
    font-style: italic;
}
a {
    color: #6c6159;
}
a img {
    border: none;
}
a:hover {
    text-decoration: underline;
}
button::-moz-focus-inner {
    padding: 0;
    border: none;
}
button {
    overflow: visible;
    width: auto;
    background-color: transparent;
    font-weight: bold;
}
caption {
    margin-bottom: 7px;
}
table, tr, th, td {
    border-collapse: collapse;
    border: 1px solid #d0dbb3;
}
table {
    width: 100%;
    margin: 10px 0 30px;
}
table th {
    font-weight: bold;
    background-color: #f1f7e2;
}
table th, table td {
    font-size: 12px;
    padding: 8px 10px;
}
fieldset {
    border: none;
}
abbr {
    border-bottom: 1px dotted #000;
    cursor: help;
}
.clear {
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
}
.clear-fix:after
{
    content: \"\\0020\";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
* html .clear-fix
{
    height: 1%;
}
.clear-fix
{
    display: block;
}
#content {
    padding: 0 50px;
    margin: 0 auto 20px;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 970px;
}
#header {
    padding: 20px 30px 20px;
}
#header h1 {
    float: left;
}
.search {
    float: right;
}
#menu-profiler {
    border-right: 1px solid #dfdfdf;
}
#menu-profiler li {
    border-bottom: 1px solid #dfdfdf;
    position: relative;
    padding-bottom: 0;
    display: block;
    background-color: #f6f6f6;
    z-index: 10000;
}
#menu-profiler li a {
    color: #404040;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}
#menu-profiler li a span.label {
    display: block;
    padding: 20px 0px 16px 65px;
    min-height: 16px;
    overflow: hidden;
}
#menu-profiler li a span.icon {
    display: block;
    position: absolute;
    left: 0;
    top: 12px;
    width: 60px;
    text-align: center;
}
#menu-profiler li.selected a,
#menu-profiler li a:hover {
    background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;
}
#navigation div:first-child,
#menu-profiler li:first-child,
#menu-profiler li:first-child a,
#menu-profiler li:first-child a span.label {
    border-radius: 16px 0 0 0;
}
#menu-profiler li a span.count {
    padding: 0;
    position: absolute;
    right: 10px;
    top: 20px;
}
#collector-wrapper {
    float: left;
    width: 100%;
}
#collector-content {
    margin-left: 250px;
    padding: 30px 40px 40px;
}
#navigation {
    float: left;
    width: 250px;
    margin-left: -100%;
}
#collector-content table td {
    background-color: white;
}
h1 {
    font-family: Georgia, \"Times New Roman\", Times, serif;
    color: #404040;
}
h2, h3 {
    font-weight: bold;
    margin-bottom: 20px;
}
li {
    padding-bottom: 10px;
}
#main {
    border-radius: 16px;
    margin-bottom: 20px;
}
#menu-profiler span.count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: #fff;
    margin-right: 2px;
    font-size: 11px;
}
#resume {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dfdfdf;
    padding: 18px 10px 0px;
    margin-left: 250px;
    height: 34px;
    color: #313131;
    font-size: 12px;
    border-top-right-radius: 16px;
}
a#resume-view-all {
    display: inline-block;
    padding: 0.2em 0.7em;
    margin-right: 0.5em;
    background-color: #666;
    border-radius: 16px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
table th.value {
    width: 450px;
    background-color: #dfeeb8;
}
#content h2 {
    font-size: 24px;
    color: #313131;
    font-weight: bold;
}
#content #main {
    padding: 0;
    background-color: #FFF;
    border: 1px solid #dfdfdf;
}
#content #main p {
    color: #313131;
    font-size: 14px;
    padding-bottom: 20px;
}
.sf-toolbarreset {
    border-top: 0;
    padding: 0;
}
.sf-reset .block-exception-detected .text-exception {
    left: 10px;
    right: 10px;
    width: 95%;
}
.sf-reset .block-exception-detected .illustration-exception {
    display: none;
}
ul.alt {
    margin: 10px 0 30px;
}
ul.alt li {
    padding: 5px 7px;
    font-size: 13px;
}
ul.alt li.even {
    background: #f1f7e2;
}
ul.alt li.error {
    background-color: #f66;
    margin-bottom: 1px;
}
ul.alt li.warning {
    background-color: #ffcc00;
    margin-bottom: 1px;
}
ul.sf-call-stack li {
    text-size: small;
    padding: 0 0 0 20px;
}
td.main, td.menu {
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: top;
}
.search {
    float: right;
    padding-top: 20px;
}
.search label {
    line-height: 28px;
    vertical-align: middle;
}
.search input {
    width: 195px;
    font-size: 12px;
    border: 1px solid #dadada;
    background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
    padding: 5px 6px;
    color: #565656;
}
.search input[type=\"search\"] {
    -webkit-appearance: textfield;
}
#navigation div:first-child {
    margin: 0 0 20px;
    border-top: 0;
}
#navigation .search {
    padding-top: 15px;
    float: none;
    background: none repeat scroll 0 0 #f6f6f6;
    color: #333;
    margin: 20px 0;
    border: 1px solid #dfdfdf;
    border-left: none;
}
#navigation .search h3 {
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-left: 10px;
    font-size: 13px;
}
#navigation .search form {
    padding: 15px 0;
}
#navigation .search button {
    float: right;
    margin-right: 20px;
}
#navigation .search label {
    display: block;
    float: left;
    width: 50px;
}
#navigation .search input,
#navigation .search select,
#navigation .search label,
#navigation .search a {
    font-size: 12px;
}
#navigation .search form {
    padding-left: 10px;
}
#navigation .search input {
    width: 160px;
}
#navigation .import label {
    float: none;
    display: inline;
}
#navigation .import input {
    width: 100px;
}
.timeline {
    background-color: #fbfbfb;
    margin-bottom: 15px;
    margin-top: 5px;
}
#collector-content .routing tr.matches td {
    background-color: #0e0;
}
#collector-content .routing tr.almost td {
    background-color: #fa0;
}
.loading {
    background: transparent url(data:image/gif;base64,R0lGODlhGAAYAPUmAAQCBFxeXBwaHOzq7JSWlAwODCQmJPT29JyenJSSlCQiJPTy9BQWFCwuLAQGBKyqrBweHOzu7Ly+vHx+fGxubLy6vMTCxMzKzBQSFKSmpLSytJyanAwKDHRydPz+/HR2dCwqLMTGxPz6/Hx6fISGhGxqbGRmZOTi5DQyNDw6PKSipFxaXExOTLS2tISChIyKjERCRMzOzOTm5Nze3FRSVNza3FRWVKyurExKTNTS1ERGRNTW1GRiZIyOjDQ2NDw+PCH/C05FVFNDQVBFMi4wAwEAAAAh+QQJBgAmACwAAAAAGAAYAAAGykCTcGhaRIiL0uNIbAoXEwaCeOAAMJ+Fc3hRAAAkogfzBUAsW43jC6k0BwQvwPFohqwAymFrOoy+DmhPcgl8RAhsTBNfFIZNiwAdRQxme45DByAABREPX4WXRBIkGwMlDgUDoXwDESKrsLGys7EeB1q0RQIcAZ0JgrCIAAgLBQAGlqEiDXOqH18jsCSMQhEQX1OXGV8MqkIWawATr1sH019uRBnhBsR2zNhbEgJlBeRCCdzpWxEUxg5MhDxwQMGbowgIAhg0MWDhkCAAIfkECQYAHQAsAAAAABgAGAAABsDAjnBI7AQMKdNjUWx2RMUXYArAjCJO4aUBHc5SBioAYnFqOICbc0BQTB2P4sUx3WQ7h9G7LFyEAQl3QwhTBl0TUxSCRAg3B30MY4+LTg9TgZROJlMnmU4pAAqeTmEpo0MnCTY0EzWnQiwAAq9EKAANtH10K7kdKlMIuQcNAA4DQiIVGZ5SAIpPtgDBixlTDMdCFnQAE12VVBVFGdsGCExNLcBOEgJUDg00rkMiBhJ3ERQFYi5Fk4IRCFY0gMBiURAAIfkECQYAGQAsAAAAABgAGAAABr/AjHAovJhSBkPK9FgQn9CdA0CtYkYRqDYzUqRgkCoAYtGenh7igKCgFmrPC2a3HR5Gqdxz0dal60J/RBNUHYB1CwxjB4dbD1QJjVEWJlRnkkMkDgEpAAqYRA0AKAYAKaBDLAACpTCoQqoCnQavGaINlRSCkgtTKxYxtSpUCLUZB6IOA8YkVBRQu1seOAAMy0QzNBMihzsFFU8nGFQGCE51cFASAlUODTQsKCOYERQFYlQOevQIKw0CAhqskLAlCAAh+QQJBgAVACwAAAAAGAAYAAAGvcCKcFhZPEwpgyFleiyI0OFiwgBYr1bGLArlYSGwpJXEhYoCit6AKNN4ylDPAU6vR0WliFBmj1MAHUUCCW99FSIgAAURD1YahkIIVggmVnyQC1YrKQAKkEMNAA0GACmfQiwAEKQwpxWpApwGrqENXgB6mA4AKxlWBJ8SkwsFAAYikB49BWsfADaFkFsVEStzrkPRdCLadBJPUiq2yHUbAA4NLCwou5rdUCdVWFcOFGt1EQgrDQICDTYI7kEJAgAh+QQJBgAiACwAAAAAGAAYAAAGvUCRcChaPEwpgyG1ITqdiwkDQK1KntiLogqAwFIBD1H81DiokIQMK3w9nJ5JAUA5sIURjMPylLXuQxJoEYCAE1QdhXcHIAAFhIpYCFQIKhdkkXhUKykAJplEDQANBgApoEMsAAKlMKhCqgKdBq8iJqO3AAOvHiEJGVQEtUILcwZ2wx9UE8NFEFR/hRa7ThIOHCeABy+OLphCDx93CyqilFjfIh0sLChnVAwVkTHvVQ4U1IobDQICDSsI8hEJAgAh+QQFBgAYACwAAAAAGAAYAAAGv0CMcIhZPEy/n4fIbBYnDIDUxqwsnMKLQipVZJgoiMWpcUghiVMzYnY8mBczgHLAHkZSx1i4gEgTWEQIZxFCLSBzgUwTUh1DHid1ikMHiAWFk1iDAAiZWBFSAZ5YDQANo04PNj44PDeoTB4pAAawTDxSmLYYGVIEu3wFtJKZIgNLQh9SI6MkDg0tQhF+nJm9AAwDQxZyEyJ2JFwVTBlyakwLCChcnU0SAgbIhihy2OOfr0S4eRTasDANbCDwxyQIADs=) scroll no-repeat 50% 50%;
    height: 30px;
    display: none;
}
.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left-width: 10px;
    border-left-style: solid;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #999;
    border-width: 1px 0;
}
.collapsed-menu-parents #resume,
.collapsed-menu-parents #collector-content {
    margin-left: 60px !important;
}
.collapsed-menu {
    width: 60px !important;
}
.collapsed-menu span :not(.icon) {
    display: none !important;
}
.collapsed-menu span.icon img {
    display: inline !important;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:profiler.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  706 => 472,  694 => 468,  682 => 465,  678 => 464,  673 => 462,  630 => 455,  625 => 453,  621 => 452,  565 => 414,  244 => 136,  389 => 160,  378 => 157,  334 => 141,  331 => 140,  328 => 139,  290 => 119,  253 => 100,  222 => 83,  318 => 111,  255 => 101,  231 => 83,  212 => 78,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  647 => 336,  631 => 327,  629 => 326,  622 => 323,  609 => 319,  593 => 310,  591 => 309,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  548 => 292,  541 => 290,  531 => 283,  527 => 409,  522 => 279,  519 => 278,  489 => 262,  436 => 235,  418 => 224,  412 => 222,  397 => 213,  376 => 205,  353 => 149,  317 => 185,  439 => 195,  429 => 188,  422 => 226,  408 => 176,  351 => 120,  323 => 128,  306 => 107,  303 => 106,  248 => 97,  134 => 39,  399 => 158,  396 => 157,  383 => 207,  359 => 140,  345 => 147,  325 => 129,  308 => 118,  276 => 111,  270 => 102,  267 => 101,  237 => 85,  234 => 84,  218 => 77,  202 => 77,  170 => 84,  167 => 60,  194 => 68,  701 => 418,  692 => 412,  685 => 405,  675 => 463,  665 => 398,  654 => 389,  650 => 388,  644 => 335,  634 => 381,  624 => 374,  616 => 450,  599 => 358,  588 => 308,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 406,  497 => 267,  450 => 268,  433 => 258,  431 => 189,  416 => 248,  385 => 226,  348 => 140,  299 => 174,  284 => 167,  242 => 113,  232 => 88,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 473,  717 => 186,  708 => 183,  703 => 182,  698 => 469,  695 => 180,  690 => 467,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 461,  651 => 337,  645 => 460,  642 => 218,  640 => 334,  637 => 216,  632 => 213,  626 => 325,  623 => 210,  620 => 209,  606 => 318,  600 => 206,  595 => 203,  589 => 201,  581 => 305,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 293,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 404,  509 => 272,  503 => 303,  499 => 268,  496 => 154,  490 => 153,  485 => 293,  479 => 256,  471 => 253,  468 => 146,  464 => 145,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  432 => 135,  420 => 132,  417 => 130,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  366 => 142,  363 => 153,  354 => 119,  316 => 74,  281 => 114,  210 => 77,  198 => 22,  165 => 83,  713 => 214,  707 => 211,  704 => 210,  702 => 470,  696 => 206,  686 => 466,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 451,  613 => 320,  608 => 187,  605 => 186,  602 => 449,  596 => 181,  592 => 354,  590 => 178,  585 => 307,  551 => 174,  547 => 411,  542 => 320,  539 => 171,  536 => 170,  533 => 284,  530 => 410,  528 => 167,  525 => 408,  516 => 161,  512 => 160,  510 => 158,  505 => 270,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 258,  473 => 254,  465 => 249,  462 => 202,  456 => 275,  451 => 140,  428 => 230,  425 => 135,  414 => 127,  403 => 121,  400 => 214,  394 => 168,  371 => 156,  358 => 151,  349 => 103,  342 => 137,  339 => 100,  336 => 189,  329 => 188,  326 => 138,  319 => 90,  311 => 89,  297 => 104,  289 => 113,  286 => 112,  274 => 110,  250 => 67,  233 => 87,  228 => 59,  200 => 72,  344 => 119,  338 => 135,  335 => 134,  321 => 135,  295 => 178,  292 => 135,  259 => 103,  215 => 32,  190 => 76,  184 => 63,  181 => 65,  178 => 59,  161 => 63,  90 => 42,  84 => 40,  114 => 23,  568 => 338,  557 => 295,  553 => 329,  545 => 291,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 248,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 255,  419 => 98,  415 => 180,  410 => 221,  395 => 84,  392 => 83,  388 => 117,  386 => 159,  382 => 93,  380 => 158,  377 => 147,  369 => 157,  357 => 123,  347 => 191,  333 => 112,  324 => 113,  307 => 128,  300 => 105,  291 => 102,  288 => 118,  282 => 79,  275 => 105,  272 => 76,  226 => 84,  205 => 108,  186 => 69,  172 => 57,  148 => 55,  127 => 35,  370 => 100,  367 => 155,  361 => 152,  352 => 138,  346 => 92,  343 => 146,  340 => 145,  332 => 116,  330 => 87,  327 => 114,  320 => 127,  315 => 131,  313 => 183,  310 => 81,  304 => 181,  302 => 125,  296 => 121,  293 => 120,  287 => 64,  280 => 131,  277 => 59,  271 => 58,  265 => 105,  262 => 98,  260 => 124,  257 => 61,  223 => 58,  216 => 79,  192 => 88,  188 => 90,  185 => 74,  180 => 66,  174 => 65,  23 => 1,  12 => 34,  150 => 55,  118 => 49,  129 => 57,  70 => 15,  113 => 48,  104 => 32,  153 => 77,  124 => 26,  110 => 41,  65 => 11,  81 => 23,  76 => 34,  58 => 25,  263 => 95,  256 => 96,  249 => 89,  245 => 88,  239 => 86,  236 => 109,  225 => 89,  213 => 78,  207 => 75,  197 => 69,  191 => 67,  175 => 58,  160 => 76,  155 => 47,  152 => 46,  146 => 34,  137 => 59,  126 => 55,  100 => 39,  97 => 63,  77 => 20,  34 => 5,  53 => 12,  20 => 1,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 215,  398 => 236,  393 => 211,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 197,  362 => 141,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 184,  314 => 99,  312 => 130,  309 => 129,  305 => 175,  298 => 120,  294 => 111,  285 => 175,  283 => 115,  278 => 98,  268 => 127,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 63,  169 => 74,  140 => 58,  132 => 59,  128 => 30,  107 => 12,  61 => 12,  273 => 174,  269 => 107,  254 => 91,  243 => 92,  240 => 86,  238 => 139,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 78,  219 => 101,  217 => 87,  208 => 76,  204 => 28,  179 => 98,  159 => 90,  143 => 51,  135 => 81,  119 => 40,  102 => 33,  71 => 13,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 37,  85 => 23,  75 => 19,  68 => 12,  56 => 16,  87 => 41,  21 => 12,  26 => 2,  93 => 27,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 74,  171 => 102,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 50,  138 => 51,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 14,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 7,  37 => 6,  22 => 1,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 50,  111 => 47,  108 => 48,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 29,  66 => 25,  55 => 38,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 5,  32 => 4,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 70,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 36,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 46,  99 => 23,  95 => 43,  92 => 28,  86 => 43,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 24,  57 => 39,  54 => 23,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
