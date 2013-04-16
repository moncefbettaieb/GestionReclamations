<?php

/* ::layout.html.twig */
class __TwigTemplate_a0f9d51621b311120ad69ab6476c6d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"Alexandre Bacco\">
    <meta name=\"keywords\" content=\"Symfony2, Symfony, Symfony2.1, Symfony2.2, tutoriel, tutorial, blog, checklist, livre, cours\">
  ";
        // line 7
        echo "
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "  </head>

  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Notre Projet Symfony2</h1>
        <p>Ce projet est propulsé par Symfony2, et construit par le groupe C de 3A5</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.esprit-tn.com/fr/\" target=\"blank\">
          Site Esprit
        </a></p>
      </div>

      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Menu</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espritmanager_accueil"), "html", null, true);
        echo "\">Accueil </a></li>
            ";
        // line 35
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espritmanager_ajouter"), "html", null, true);
            echo "\">Ajouter un Manager</a></li>
            ";
        }
        // line 38
        echo "          </ul>

          <!-- winzouCoreBundle::injectAdsense -->

          ";
        // line 43
        echo "         ";
        // line 44
        echo "
          ";
        // line 48
        echo "          ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "            <h3>Membre</h3>
            <ul class=\"nav nav-pills nav-stacked\">
              <li>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "</li>
              <li><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
            </ul>
          ";
            // line 55
            echo "          ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") != "fos_user_security_login")) {
            // line 56
            echo "            <h3>Identification</h3>
           ";
            // line 58
            echo "          ";
        }
        // line 59
        echo "        </div>

        ";
        // line 62
        echo "        <div id=\"content\" class=\"span9\">
          ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p>
        ";
        // line 73
        echo "          -
          <a href=\"https://twitter.com/salgado777\" class=\"twitter-follow-button\" data-show-count=\"false\" data-lang=\"fr\" data-dnt=\"true\">Suivre @salgado777</a>
        </p>
      </footer>
    </div>

    ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Tutoriel-Symfony2";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b82e02f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b82e02f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_bootstrap_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
            // asset "b82e02f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b82e02f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_main_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "b82e02f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b82e02f") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    ";
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "          ";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "      ";
        // line 81
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js\"></script>
      <script>window.jQuery || document.write('<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>

      ";
        // line 85
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "90defe4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_90defe4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_bootstrap_1.js");
            // line 88
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "90defe4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_90defe4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 90
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 90,  205 => 88,  200 => 85,  195 => 82,  192 => 81,  190 => 80,  187 => 79,  183 => 64,  180 => 63,  176 => 16,  156 => 14,  151 => 11,  148 => 10,  142 => 8,  137 => 91,  135 => 79,  127 => 73,  118 => 65,  116 => 63,  113 => 62,  109 => 59,  106 => 58,  103 => 56,  100 => 55,  93 => 52,  89 => 51,  85 => 49,  82 => 48,  79 => 44,  77 => 43,  71 => 38,  65 => 36,  62 => 35,  58 => 33,  40 => 17,  38 => 10,  33 => 8,  30 => 7,  23 => 1,);
    }
}
