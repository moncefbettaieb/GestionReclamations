<?php

/* EspritClientBundle:Client:voir.html.twig */
class __TwigTemplate_4530cd1f7809d889bb4c778d1e79ef73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'espritadmin_body' => array($this, 'block_espritadmin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_espritadmin_body($context, array $blocks = array())
    {
        // line 9
        echo "
  ";
        // line 11
        echo "  <h1>Gestion des Clients</h1>
 
  <hr>
<h2>
  ";
        // line 16
        echo "  ";
        if ((!(null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "image")))) {
            // line 17
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "image"), "url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "image"), "alt"), "html", null, true);
            echo "\" />
  ";
        }
        // line 19
        echo "
</h2>
 <div class=\"well\">
  <h2>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom"), "html", null, true);
        echo " </h2>
  <i>  ";
        // line 23
        echo " ajouter le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "date"), "d/m/Y"), "html", null, true);
        echo "</i>
 </div>
 
  <p>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espritclient_accueil"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espritclient_modifier", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier Client
    </a>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espritclient_supprimer", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer Client
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "EspritClientBundle:Client:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  88 => 31,  81 => 27,  73 => 23,  67 => 22,  62 => 19,  54 => 17,  51 => 16,  45 => 11,  42 => 9,  39 => 8,  32 => 6,  29 => 5,);
    }
}
