<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_aec8a5aac4e3f6935474d4d3ee0585c2 extends Twig_Template
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
        $context["__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"] = "FOSUserBundle";
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email"), "html", null, true);
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), (isset($context["__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"]) ? $context["__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"] : $this->getContext($context, "__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"))), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), (isset($context["__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"]) ? $context["__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"] : $this->getContext($context, "__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"))), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), (isset($context["__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"]) ? $context["__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"] : $this->getContext($context, "__internal_0bf5aa83fc679b7637732457ade249ac2ed8fd32"))), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  82 => 27,  69 => 23,  53 => 18,  99 => 27,  87 => 25,  62 => 19,  20 => 1,  40 => 8,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 28,  67 => 20,  61 => 22,  47 => 13,  105 => 24,  93 => 29,  76 => 16,  72 => 21,  68 => 12,  27 => 4,  91 => 27,  84 => 28,  94 => 39,  88 => 31,  79 => 17,  59 => 22,  21 => 2,  44 => 9,  31 => 6,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 27,  78 => 26,  75 => 23,  71 => 19,  58 => 18,  34 => 11,  26 => 7,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 14,  22 => 1,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 35,  83 => 18,  80 => 24,  74 => 28,  66 => 23,  55 => 15,  52 => 10,  50 => 12,  43 => 9,  41 => 7,  37 => 8,  35 => 4,  32 => 2,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 28,  98 => 31,  95 => 35,  92 => 33,  89 => 31,  85 => 28,  81 => 24,  73 => 23,  64 => 17,  60 => 22,  57 => 14,  54 => 16,  51 => 16,  48 => 13,  45 => 12,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,);
    }
}
