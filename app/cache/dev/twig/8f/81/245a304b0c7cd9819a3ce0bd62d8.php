<?php

/* EspritMangerBundle:Manger:index.html.twig */
class __TwigTemplate_8f81245a304b0c7cd9819a3ce0bd62d8 extends Twig_Template
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
        echo "  <h1>Gestion des Managers</h1>
 
  <hr>
 
  <h2>Liste des Managers </h2>
 
  <ul>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["managers"]) ? $context["managers"] : $this->getContext($context, "managers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manager"]) {
            // line 20
            echo "      <li>
        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espritmanager_voir", array("id" => $this->getAttribute((isset($context["manager"]) ? $context["manager"] : $this->getContext($context, "manager")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["manager"]) ? $context["manager"] : $this->getContext($context, "manager")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["manager"]) ? $context["manager"] : $this->getContext($context, "manager")), "prenom"), "html", null, true);
            echo "</a>
        ";
            // line 23
            echo "        le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["manager"]) ? $context["manager"] : $this->getContext($context, "manager")), "date"), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "      <li>Pas (encore !) de manager</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "
  </ul>
 
";
    }

    public function getTemplateName()
    {
        return "EspritMangerBundle:Manger:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  78 => 26,  69 => 23,  61 => 21,  58 => 20,  53 => 19,  44 => 12,  42 => 11,  39 => 10,  32 => 7,  29 => 6,);
    }
}
