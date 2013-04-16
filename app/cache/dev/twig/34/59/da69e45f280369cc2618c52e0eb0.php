<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_3459da69e45f280369cc2618c52e0eb0 extends Twig_Template
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
        // line 1
        $context["__internal_c6e43b5742b6899a5184f9dc6e86522357835626"] = "FOSUserBundle";
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), (isset($context["__internal_c6e43b5742b6899a5184f9dc6e86522357835626"]) ? $context["__internal_c6e43b5742b6899a5184f9dc6e86522357835626"] : $this->getContext($context, "__internal_c6e43b5742b6899a5184f9dc6e86522357835626"))), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  24 => 3,  21 => 2,  19 => 1,  31 => 4,  28 => 3,);
    }
}
