<?php

/* EspritClientBundle:Client:modifier.html.twig */
class __TwigTemplate_4409701f797078ce2ab7c86ec6e4cee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritClientBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'espritadmin_body' => array($this, 'block_espritadmin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritClientBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Modifier un Client - ";
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
        echo "  <h1>Gestion des Clients</h1>
 
  <hr>
  <h2>Modifier un Client </h2>
 
  ";
        // line 17
        $this->env->loadTemplate("EspritClientBundle:Client:formulaire.html.twig")->display($context);
        // line 18
        echo " 
  
 
  <p>
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espritclient_voir", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la Description de Client
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "EspritClientBundle:Client:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  54 => 18,  52 => 17,  45 => 12,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
