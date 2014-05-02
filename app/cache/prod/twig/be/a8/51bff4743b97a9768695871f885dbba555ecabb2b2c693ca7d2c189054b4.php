<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_bea851bff4743b97a9768695871f885dbba555ecabb2b2c693ca7d2c189054b4 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : null), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').replaceWith(html); // replace the html
                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 54
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 55
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 62
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 66
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 88,  701 => 418,  692 => 412,  685 => 405,  675 => 402,  665 => 398,  654 => 389,  650 => 388,  644 => 385,  634 => 381,  624 => 374,  616 => 369,  599 => 358,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 312,  497 => 300,  450 => 268,  433 => 258,  431 => 257,  416 => 248,  385 => 226,  348 => 198,  299 => 174,  284 => 167,  242 => 140,  232 => 136,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 384,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 362,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 310,  509 => 159,  503 => 303,  499 => 155,  496 => 154,  490 => 153,  485 => 293,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 269,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  366 => 156,  363 => 210,  354 => 119,  316 => 74,  281 => 61,  210 => 30,  198 => 22,  165 => 110,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 354,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 320,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 314,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 275,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 118,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  339 => 100,  336 => 189,  329 => 95,  326 => 76,  319 => 90,  311 => 89,  297 => 84,  289 => 81,  286 => 80,  274 => 77,  250 => 67,  233 => 62,  228 => 59,  200 => 55,  344 => 97,  338 => 94,  335 => 93,  321 => 91,  295 => 66,  292 => 170,  259 => 55,  215 => 32,  190 => 50,  184 => 47,  181 => 80,  178 => 45,  161 => 71,  90 => 27,  84 => 39,  114 => 71,  568 => 338,  557 => 177,  553 => 329,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 280,  460 => 132,  449 => 123,  446 => 266,  441 => 138,  426 => 255,  419 => 98,  415 => 97,  410 => 245,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 157,  357 => 120,  347 => 115,  333 => 112,  324 => 92,  307 => 71,  300 => 68,  291 => 65,  288 => 85,  282 => 79,  275 => 77,  272 => 76,  226 => 36,  205 => 59,  186 => 83,  172 => 112,  148 => 64,  127 => 56,  370 => 100,  367 => 131,  361 => 122,  352 => 121,  346 => 92,  343 => 91,  340 => 95,  332 => 188,  330 => 87,  327 => 186,  320 => 75,  315 => 90,  313 => 178,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 82,  277 => 59,  271 => 58,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 58,  216 => 25,  192 => 55,  188 => 21,  185 => 20,  180 => 104,  174 => 118,  23 => 18,  83 => 32,  74 => 34,  12 => 34,  150 => 58,  120 => 46,  118 => 91,  129 => 24,  70 => 29,  113 => 46,  104 => 67,  157 => 41,  153 => 35,  145 => 97,  139 => 31,  124 => 23,  110 => 48,  65 => 30,  96 => 71,  81 => 62,  76 => 13,  58 => 19,  263 => 57,  256 => 54,  249 => 50,  245 => 49,  239 => 94,  236 => 63,  225 => 89,  213 => 126,  207 => 29,  197 => 119,  191 => 273,  175 => 77,  160 => 48,  155 => 66,  152 => 92,  146 => 34,  137 => 59,  126 => 55,  100 => 43,  97 => 63,  77 => 27,  34 => 26,  53 => 80,  37 => 54,  52 => 21,  20 => 11,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 236,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 114,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 90,  285 => 84,  283 => 70,  278 => 86,  268 => 157,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 47,  229 => 73,  220 => 56,  214 => 61,  177 => 119,  169 => 74,  140 => 28,  132 => 58,  128 => 47,  111 => 88,  107 => 24,  61 => 26,  273 => 159,  269 => 75,  254 => 149,  246 => 69,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 35,  221 => 88,  219 => 129,  217 => 87,  208 => 124,  204 => 28,  179 => 107,  159 => 70,  143 => 29,  135 => 81,  131 => 25,  119 => 44,  108 => 45,  102 => 17,  71 => 55,  67 => 54,  63 => 27,  59 => 49,  47 => 75,  38 => 32,  94 => 87,  89 => 40,  85 => 30,  79 => 31,  75 => 80,  68 => 31,  56 => 40,  50 => 20,  29 => 14,  87 => 17,  72 => 199,  55 => 22,  21 => 11,  26 => 20,  98 => 44,  93 => 39,  88 => 66,  78 => 36,  46 => 35,  27 => 16,  40 => 15,  44 => 17,  35 => 16,  31 => 22,  43 => 19,  41 => 20,  28 => 13,  201 => 57,  196 => 52,  183 => 74,  171 => 102,  166 => 100,  163 => 109,  158 => 37,  156 => 93,  151 => 99,  142 => 61,  138 => 94,  136 => 39,  123 => 30,  121 => 53,  117 => 45,  115 => 50,  105 => 75,  101 => 37,  91 => 86,  69 => 30,  66 => 53,  62 => 29,  49 => 112,  24 => 13,  32 => 11,  25 => 12,  22 => 12,  19 => 11,  209 => 24,  203 => 122,  199 => 53,  193 => 51,  189 => 177,  187 => 49,  182 => 172,  176 => 45,  173 => 42,  168 => 72,  164 => 72,  162 => 59,  154 => 67,  149 => 36,  147 => 90,  144 => 33,  141 => 95,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 69,  106 => 35,  103 => 46,  99 => 30,  95 => 43,  92 => 61,  86 => 33,  82 => 83,  80 => 36,  73 => 32,  64 => 28,  60 => 26,  57 => 22,  54 => 154,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 18,  36 => 13,  33 => 15,  30 => 15,);
    }
}
