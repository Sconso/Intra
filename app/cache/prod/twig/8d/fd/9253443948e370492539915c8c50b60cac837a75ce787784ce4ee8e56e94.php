<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_8dfd9253443948e370492539915c8c50b60cac837a75ce787784ce4ee8e56e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"span5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : null), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"span7 revision-detail\">

    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  361 => 97,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  280 => 69,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 27,  216 => 25,  192 => 23,  188 => 21,  185 => 20,  180 => 104,  174 => 60,  23 => 1,  83 => 35,  74 => 19,  12 => 34,  150 => 58,  120 => 48,  118 => 46,  129 => 42,  70 => 29,  113 => 39,  104 => 42,  157 => 58,  153 => 48,  145 => 56,  139 => 59,  124 => 43,  110 => 36,  65 => 15,  96 => 19,  81 => 34,  76 => 32,  58 => 22,  263 => 104,  256 => 102,  249 => 55,  245 => 97,  239 => 94,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 79,  191 => 76,  175 => 72,  160 => 52,  155 => 66,  152 => 63,  146 => 63,  137 => 47,  126 => 55,  100 => 36,  97 => 37,  77 => 20,  34 => 16,  53 => 24,  37 => 24,  52 => 24,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 70,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  111 => 41,  107 => 40,  61 => 28,  273 => 96,  269 => 94,  254 => 60,  246 => 54,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 88,  219 => 76,  217 => 87,  208 => 68,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 45,  119 => 39,  108 => 42,  102 => 39,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  47 => 19,  38 => 18,  94 => 36,  89 => 37,  85 => 28,  79 => 33,  75 => 31,  68 => 24,  56 => 12,  50 => 23,  29 => 2,  87 => 38,  72 => 30,  55 => 18,  21 => 11,  26 => 14,  98 => 38,  93 => 28,  88 => 32,  78 => 36,  46 => 9,  27 => 14,  40 => 6,  44 => 20,  35 => 17,  31 => 23,  43 => 14,  41 => 19,  28 => 22,  201 => 92,  196 => 90,  183 => 74,  171 => 61,  166 => 57,  163 => 60,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  123 => 48,  121 => 42,  117 => 50,  115 => 40,  105 => 40,  101 => 40,  91 => 39,  69 => 24,  66 => 23,  62 => 25,  49 => 23,  24 => 13,  32 => 3,  25 => 12,  22 => 12,  19 => 11,  209 => 24,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 59,  154 => 58,  149 => 62,  147 => 46,  144 => 45,  141 => 61,  133 => 51,  130 => 57,  125 => 40,  122 => 43,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 31,  95 => 37,  92 => 21,  86 => 17,  82 => 36,  80 => 28,  73 => 19,  64 => 17,  60 => 13,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
