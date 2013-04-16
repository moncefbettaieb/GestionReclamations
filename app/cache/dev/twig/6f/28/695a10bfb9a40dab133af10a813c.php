<?php

/* EspritClientBundle::layout.html.twig */
class __TwigTemplate_6f28695a10bfb9a40dab133af10a813c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'espritadmin_body' => array($this, 'block_espritadmin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Gestion des Clients - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo " 
 
  ";
        // line 13
        echo "  ";
        $this->displayBlock('espritadmin_body', $context, $blocks);
        // line 15
        echo " ";
    }

    // line 13
    public function block_espritadmin_body($context, array $blocks = array())
    {
        // line 14
        echo "  ";
    }

    public function getTemplateName()
    {
        return "EspritClientBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  54 => 13,  50 => 15,  47 => 13,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  85 => 28,  78 => 26,  69 => 23,  61 => 21,  58 => 20,  53 => 19,  44 => 12,  42 => 11,  39 => 10,  32 => 7,  29 => 6,);
    }
}
