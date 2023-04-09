<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\xampp\htdocs\food/themes/cms-sample/partials/site/tab.htm */
class __TwigTemplate_8ff5f1ac989e64fd42ff4af02c569173e56a60c068cf1bc01ae4d6ebfe3c7ca7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<p class=\"de\">主食區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "
";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, true, 5) == "主食")) {
                // line 6
                echo "


<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">

        <img style=\"height: 150px;width: 200px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "imager", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo ".jpg\" class=\"card-img-top\" >

<form id=\"data_form\" class=\"fdd\" data-request=\"onFormSubmit\"data-request-update=\"onin: '#ajaxDiv'\">

    <input  type=\"hidden\" name=\"namefood\" value=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"cookname\" value=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"money\" value=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "money", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"user\" value=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["user"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null), 20, $this->source), "html", null, true);
                echo "\">


<div class=\"cx\" >";
                // line 23
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</div>
<div class=\"cx\">\$";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "money", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
</div>



<div class=\"d-grid gap-2 kk\">
    <select name=\"pets\" class=\"form-select\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\" >3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
    </select>
<button type=\"submit\" class=\"btn btn-dark ffce\" >加入購物車</button>

</div>
</form>
</div>
</div>





";
            }
            // line 54
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</div>






<p class=\"de\"> 主菜區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 66
            echo "
";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, true, 67) == "主菜")) {
                // line 68
                echo "


<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">

        <img style=\"height: 150px;width: 200px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/";
                // line 75
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "imager", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo ".jpg\" class=\"card-img-top\" >

<form id=\"data_form\" class=\"fdd\" data-request=\"onFormSubmit\"data-request-update=\"onin: '#ajaxDiv'\">

    <input  type=\"hidden\" name=\"namefood\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"cookname\" value=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"money\" value=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "money", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"user\" value=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["user"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null), 82, $this->source), "html", null, true);
                echo "\">


<div class=\"cx\" >";
                // line 85
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</div>
<div class=\"cx\">\$";
                // line 86
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "money", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "
</div>



<div class=\"d-grid gap-2 kk\">
    <select name=\"pets\" class=\"form-select\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\" >3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
    </select>
<button type=\"submit\" class=\"btn btn-dark ffce\" >加入購物車</button>

</div>
</form>
</div>
</div>





";
            }
            // line 116
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "</div>







<p class=\"de\">配菜區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 129
            echo "
";
            // line 130
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, true, 130) == "配菜")) {
                // line 131
                echo "


<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">

        <img style=\"height: 150px;width: 200px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/";
                // line 138
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "imager", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                echo ".jpg\" class=\"card-img-top\" >

<form id=\"data_form\" class=\"fdd\" data-request=\"onFormSubmit\"data-request-update=\"onin: '#ajaxDiv'\">

    <input  type=\"hidden\" name=\"namefood\" value=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"cookname\" value=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"money\" value=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "money", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
                echo "\">
    <input  type=\"hidden\" name=\"user\" value=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["user"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null), 145, $this->source), "html", null, true);
                echo "\">


<div class=\"cx\" >";
                // line 148
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                echo "</div>
<div class=\"cx\">\$";
                // line 149
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "money", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "
</div>



<div class=\"d-grid gap-2 kk\">
    <select name=\"pets\" class=\"form-select\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\" >3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
    </select>
<button type=\"submit\" class=\"btn btn-dark ffce\" >加入購物車</button>

</div>
</form>
</div>
</div>





";
            }
            // line 179
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/tab.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 181,  320 => 179,  287 => 149,  283 => 148,  277 => 145,  273 => 144,  269 => 143,  265 => 142,  258 => 138,  249 => 131,  247 => 130,  244 => 129,  240 => 128,  228 => 118,  221 => 116,  188 => 86,  184 => 85,  178 => 82,  174 => 81,  170 => 80,  166 => 79,  159 => 75,  150 => 68,  148 => 67,  145 => 66,  141 => 65,  130 => 56,  123 => 54,  90 => 24,  86 => 23,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  61 => 13,  52 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"de\">主食區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
{% for post in posts %}

{% if post.type == '主食' %}



<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">

        <img style=\"height: 150px;width: 200px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/{{post.imager}}.jpg\" class=\"card-img-top\" >

<form id=\"data_form\" class=\"fdd\" data-request=\"onFormSubmit\"data-request-update=\"onin: '#ajaxDiv'\">

    <input  type=\"hidden\" name=\"namefood\" value=\"{{post.name}}\">
    <input  type=\"hidden\" name=\"cookname\" value=\"{{post.id}}\">
    <input  type=\"hidden\" name=\"money\" value=\"{{post.money}}\">
    <input  type=\"hidden\" name=\"user\" value=\"{{ user['name'] }}\">


<div class=\"cx\" >{{post.name}}</div>
<div class=\"cx\">\${{post.money}}
</div>



<div class=\"d-grid gap-2 kk\">
    <select name=\"pets\" class=\"form-select\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\" >3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
    </select>
<button type=\"submit\" class=\"btn btn-dark ffce\" >加入購物車</button>

</div>
</form>
</div>
</div>





{% endif %}

{% endfor %}
</div>






<p class=\"de\"> 主菜區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
{% for post in posts %}

{% if post.type == '主菜' %}



<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">

        <img style=\"height: 150px;width: 200px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/{{post.imager}}.jpg\" class=\"card-img-top\" >

<form id=\"data_form\" class=\"fdd\" data-request=\"onFormSubmit\"data-request-update=\"onin: '#ajaxDiv'\">

    <input  type=\"hidden\" name=\"namefood\" value=\"{{post.name}}\">
    <input  type=\"hidden\" name=\"cookname\" value=\"{{post.id}}\">
    <input  type=\"hidden\" name=\"money\" value=\"{{post.money}}\">
    <input  type=\"hidden\" name=\"user\" value=\"{{ user['name'] }}\">


<div class=\"cx\" >{{post.name}}</div>
<div class=\"cx\">\${{post.money}}
</div>



<div class=\"d-grid gap-2 kk\">
    <select name=\"pets\" class=\"form-select\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\" >3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
    </select>
<button type=\"submit\" class=\"btn btn-dark ffce\" >加入購物車</button>

</div>
</form>
</div>
</div>





{% endif %}

{% endfor %}
</div>







<p class=\"de\">配菜區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
{% for post in posts %}

{% if post.type == '配菜' %}



<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">

        <img style=\"height: 150px;width: 200px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/{{post.imager}}.jpg\" class=\"card-img-top\" >

<form id=\"data_form\" class=\"fdd\" data-request=\"onFormSubmit\"data-request-update=\"onin: '#ajaxDiv'\">

    <input  type=\"hidden\" name=\"namefood\" value=\"{{post.name}}\">
    <input  type=\"hidden\" name=\"cookname\" value=\"{{post.id}}\">
    <input  type=\"hidden\" name=\"money\" value=\"{{post.money}}\">
    <input  type=\"hidden\" name=\"user\" value=\"{{ user['name'] }}\">


<div class=\"cx\" >{{post.name}}</div>
<div class=\"cx\">\${{post.money}}
</div>



<div class=\"d-grid gap-2 kk\">
    <select name=\"pets\" class=\"form-select\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\" >3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
    </select>
<button type=\"submit\" class=\"btn btn-dark ffce\" >加入購物車</button>

</div>
</form>
</div>
</div>





{% endif %}

{% endfor %}
</div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/tab.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "if" => 5);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
