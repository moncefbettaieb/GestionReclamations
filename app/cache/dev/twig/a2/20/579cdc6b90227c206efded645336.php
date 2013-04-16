<?php

/* EspritAdminBundle::layout.html.twig */
class __TwigTemplate_a220579cdc6b90227c206efded645336 extends Twig_Template
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
        echo "  Gestion des Mangers - ";
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
        return "EspritAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  50 => 15,  47 => 13,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  95 => 35,  88 => 31,  81 => 27,  73 => 23,  67 => 22,  62 => 19,  54 => 13,  51 => 16,  45 => 11,  42 => 9,  39 => 8,  32 => 6,  29 => 5,);
    }
}
