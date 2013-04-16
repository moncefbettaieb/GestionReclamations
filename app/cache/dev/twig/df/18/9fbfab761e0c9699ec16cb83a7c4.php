<?php

/* EspritCollaborateurBundle:Collaborateur:index.html.twig */
class __TwigTemplate_df189fbfab761e0c9699ec16cb83a7c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritMangerBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'espritadmin_body' => array($this, 'block_espritadmin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritMangerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  Admin - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_espritadmin_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        // line 12
        echo "  <h1>Gestion des Collaborateurs</h1>
 
  <hr>
 
  <h2>Liste des Collaborateurs </h2>
 
  <ul>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaborateurs"]) ? $context["collaborateurs"] : $this->getContext($context, "collaborateurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 20
            echo "      <li>
        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espritcollaborateur_voir", array("id" => $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "prenom"), "html", null, true);
            echo "</a>
        ";
            // line 23
            echo "        le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "date"), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "      <li>Pas (encore !) de collaborateur</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "
  </ul>
 
";
    }

    public function getTemplateName()
    {
        return "EspritCollaborateurBundle:Collaborateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  69 => 23,  53 => 19,  99 => 27,  87 => 25,  62 => 19,  20 => 1,  40 => 9,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 22,  61 => 21,  47 => 13,  105 => 24,  93 => 29,  76 => 16,  72 => 21,  68 => 12,  27 => 4,  91 => 27,  84 => 28,  94 => 39,  88 => 28,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 9,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 26,  75 => 23,  71 => 19,  58 => 20,  34 => 11,  26 => 6,  24 => 3,  25 => 6,  19 => 2,  70 => 20,  63 => 24,  46 => 14,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 35,  83 => 18,  80 => 24,  74 => 28,  66 => 23,  55 => 15,  52 => 17,  50 => 15,  43 => 10,  41 => 7,  37 => 8,  35 => 5,  32 => 7,  29 => 6,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 28,  98 => 31,  95 => 34,  92 => 33,  89 => 31,  85 => 28,  81 => 26,  73 => 23,  64 => 17,  60 => 22,  57 => 14,  54 => 13,  51 => 16,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 10,  33 => 6,  30 => 5,);
    }
}
