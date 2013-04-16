<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cc612de189d60716883c79d1c93fb68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"] = "FOSUserBundle";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), (isset($context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"]) ? $context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"] : $this->getContext($context, "__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"))), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), (isset($context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"]) ? $context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"] : $this->getContext($context, "__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"))), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), (isset($context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"]) ? $context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"] : $this->getContext($context, "__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"))), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), (isset($context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"]) ? $context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"] : $this->getContext($context, "__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"))), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), (isset($context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"]) ? $context["__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"] : $this->getContext($context, "__internal_4f4047c0b3a1b1354e57b10241a00398b05ab27b"))), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  69 => 20,  62 => 16,  57 => 14,  53 => 13,  48 => 11,  44 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
