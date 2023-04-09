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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/site/convenient.htm */
class __TwigTemplate_347b003b89083915718182b6bd63a7f29546522c8c698382d765b176523b397b extends \Twig\Template
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
        echo "<!--將菜列出來-->




    <p class=\"de\">主食區</p>
    <div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "
";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, true, 10) == "主食")) {
                // line 11
                echo "


<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">
    <img style=\"height: 150px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "imager", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo ".jpg\" class=\"card-img-top\" >
    <div class=\"card-body\">
    
    
        <div class=\"fdd\">
            <div class=\"cx\" ><input  class=\"form-check-input\" type=\"radio\" value=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\" name=\"fcer\" checked> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "<br></div>
            <div class=\"cx\">
                熱量：";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cc", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
            </div>
            
            </div>
    
    
    

    
    </div>
  </div>
</div>





";
            }
            // line 42
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</div>












<p class=\"de\">主菜區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 60
            echo "
";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, true, 61) == "主菜")) {
                // line 62
                echo "


<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">
    <img style=\"height: 150px;\"  src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/";
                // line 68
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "imager", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo ".jpg\" class=\"card-img-top\" >
    <div class=\"card-body\">
    
    
        <div class=\"fdd\">
            <div class=\"cx\" ><input  class=\"form-check-input\" type=\"radio\" value=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "\" name=\"fvt\"checked> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "<br></div>
            <div class=\"cx\">
                熱量：";
                // line 75
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cc", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo "
            </div>
            
            </div>
    
    
    

    
    </div>
  </div>
</div>





";
            }
            // line 93
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</div>





<p class=\"de\">配菜區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 104
            echo "
";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, true, 105) == "配菜")) {
                // line 106
                echo "


<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">
<img style=\"height: 150px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/";
                // line 112
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "imager", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo ".jpg\" class=\"card-img-top\" >
<div class=\"card-body\">


    <div class=\"fdd\">
        <div class=\"cx\" ><input  class=\"form-check-input\" type=\"checkbox\" value=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "\" name=\"CCC[]\"> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "<br></div>
        <div class=\"cx\">
            熱量：";
                // line 119
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cc", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "
        </div>
        
        </div>





</div>
</div>
</div>





";
            }
            // line 137
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/convenient.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 139,  248 => 137,  227 => 119,  220 => 117,  212 => 112,  204 => 106,  202 => 105,  199 => 104,  195 => 103,  185 => 95,  178 => 93,  157 => 75,  150 => 73,  142 => 68,  134 => 62,  132 => 61,  129 => 60,  125 => 59,  108 => 44,  101 => 42,  80 => 24,  73 => 22,  65 => 17,  57 => 11,  55 => 10,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--將菜列出來-->




    <p class=\"de\">主食區</p>
    <div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
    {% for post in posts %}

{% if post.type == '主食' %}



<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">
    <img style=\"height: 150px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/{{post.imager}}.jpg\" class=\"card-img-top\" >
    <div class=\"card-body\">
    
    
        <div class=\"fdd\">
            <div class=\"cx\" ><input  class=\"form-check-input\" type=\"radio\" value=\"{{post.id}}\" name=\"fcer\" checked> {{post.name}}<br></div>
            <div class=\"cx\">
                熱量：{{post.cc}}
            </div>
            
            </div>
    
    
    

    
    </div>
  </div>
</div>





{% endif %}

{% endfor %}
</div>












<p class=\"de\">主菜區</p>
<div class=\"row row-cols-1 row-cols-md-4 g-4 row-cols-sm-2\">
    {% for post in posts %}

{% if post.type == '主菜' %}



<div class=\"col\">

<div class=\"card\" style=\"width: 200px;\">
    <img style=\"height: 150px;\"  src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/{{post.imager}}.jpg\" class=\"card-img-top\" >
    <div class=\"card-body\">
    
    
        <div class=\"fdd\">
            <div class=\"cx\" ><input  class=\"form-check-input\" type=\"radio\" value=\"{{post.id}}\" name=\"fvt\"checked> {{post.name}}<br></div>
            <div class=\"cx\">
                熱量：{{post.cc}}
            </div>
            
            </div>
    
    
    

    
    </div>
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
<img style=\"height: 150px;\" src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/{{post.imager}}.jpg\" class=\"card-img-top\" >
<div class=\"card-body\">


    <div class=\"fdd\">
        <div class=\"cx\" ><input  class=\"form-check-input\" type=\"checkbox\" value=\"{{post.id}}\" name=\"CCC[]\"> {{post.name}}<br></div>
        <div class=\"cx\">
            熱量：{{post.cc}}
        </div>
        
        </div>





</div>
</div>
</div>





{% endif %}

{% endfor %}
</div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/convenient.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8, "if" => 10);
        static $filters = array("escape" => 17);
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
