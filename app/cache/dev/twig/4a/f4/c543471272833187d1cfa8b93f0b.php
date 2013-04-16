<?php

/* EspritMangerBundle:Manger:formulaire.html.twig */
class __TwigTemplate_4af4c543471272833187d1cfa8b93f0b extends Twig_Template
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
        // line 2
        echo " 
<h3>Formulaire  Manager</h3>
 
<div class=\"well\">
  <form method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "EspritMangerBundle:Manger:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  54 => 18,  52 => 17,  45 => 12,  42 => 10,  39 => 9,  32 => 6,  29 => 7,);
    }
}
