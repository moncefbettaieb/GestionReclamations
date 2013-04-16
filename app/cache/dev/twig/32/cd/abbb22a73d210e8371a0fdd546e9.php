<?php

/* EspritMangerBundle:Manger:ajouter.html.twig */
class __TwigTemplate_32cdabbb22a73d210e8371a0fdd546e9 extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Ajouter un Manager - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_espritadmin_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Gestion des Managers</h1>
 
  <hr>
  <h2>Ajouter un Manager </h2>
 
  ";
        // line 17
        $this->env->loadTemplate("EspritMangerBundle:Manger:formulaire.html.twig")->display($context);
        // line 18
        echo " 
  
  
 
";
    }

    public function getTemplateName()
    {
        return "EspritMangerBundle:Manger:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  52 => 17,  45 => 12,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
