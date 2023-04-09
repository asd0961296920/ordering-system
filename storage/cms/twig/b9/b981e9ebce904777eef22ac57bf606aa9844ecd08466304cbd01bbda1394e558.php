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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/hcc.htm */
class __TwigTemplate_b1aabfb6f851b94e444d686eb48ee22475585305261a499f18b0f1a106a20eac extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["pss"]);
        foreach ($context['_seq'] as $context["_key"] => $context["pss"]) {
            // line 2
            echo "   

<div class=\"accordion-item\">
  <h2 class=\"accordion-header\" id=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "orderid", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\">
    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#cc";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "orderid", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"cc";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "orderid", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\">
      訂單編號： ";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "orderid", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo " 用戶編號： ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "username", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "  　訂貨日期：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "date", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "　出貨狀態：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "shippingstatus", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
    </button>
  </h2>
  <div id=\"cc";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "orderid", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "orderid", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" data-bs-parent=\"#accordionFlushExample\">
    <div class=\"accordion-body\">
      <p>單點:</p>
      ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["tt"]);
            foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                // line 14
                echo "           
      ";
                // line 15
                if ((twig_get_attribute($this->env, $this->source, $context["pss"], "orderid", [], "any", false, false, true, 15) == twig_get_attribute($this->env, $this->source, $context["tt"], "id", [], "any", false, false, true, 15))) {
                    // line 16
                    echo "
      ";
                    // line 17
                    if ((twig_get_attribute($this->env, $this->source, $context["tt"], "nature", [], "any", false, false, true, 17) == "單點")) {
                        // line 18
                        echo "
<p>菜名:";
                        // line 19
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "chname", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo " 數量:";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "number", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo "</p>
   
";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo " 


<p>便當:</p>


";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["tt"]);
            foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                // line 30
                echo "           
";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, $context["pss"], "orderid", [], "any", false, false, true, 31) == twig_get_attribute($this->env, $this->source, $context["tt"], "id", [], "any", false, false, true, 31))) {
                    // line 32
                    echo "
";
                    // line 33
                    if ((twig_get_attribute($this->env, $this->source, $context["tt"], "nature", [], "any", false, false, true, 33) == "便當")) {
                        // line 34
                        echo "
<p>菜名:";
                        // line 35
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "chname", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                        echo " 數量:";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "number", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                        echo "</p>

";
                    }
                    // line 38
                    echo "


";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo " 
      送達地址： ";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pss"], "address", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
   </div>
</div>
</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pss'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/hcc.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  151 => 42,  141 => 38,  133 => 35,  130 => 34,  128 => 33,  125 => 32,  123 => 31,  120 => 30,  116 => 29,  108 => 23,  95 => 19,  92 => 18,  90 => 17,  87 => 16,  85 => 15,  82 => 14,  78 => 13,  70 => 10,  58 => 7,  52 => 6,  48 => 5,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for pss in pss %}
   

<div class=\"accordion-item\">
  <h2 class=\"accordion-header\" id=\"{{pss.orderid}}\">
    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#cc{{pss.orderid}}\" aria-expanded=\"false\" aria-controls=\"cc{{pss.orderid}}\">
      訂單編號： {{pss.orderid}} 用戶編號： {{pss.username}}  　訂貨日期：{{pss.date}}　出貨狀態：{{pss.shippingstatus}}
    </button>
  </h2>
  <div id=\"cc{{pss.orderid}}\" class=\"accordion-collapse collapse\" aria-labelledby=\"{{pss.orderid}}\" data-bs-parent=\"#accordionFlushExample\">
    <div class=\"accordion-body\">
      <p>單點:</p>
      {% for tt in tt %}
           
      {% if pss.orderid == tt.id %}

      {% if tt.nature == '單點' %}

<p>菜名:{{tt.chname}} 數量:{{tt.number}}</p>
   
{% endif %}
{% endif %}
{% endfor %} 


<p>便當:</p>


{% for tt in tt %}
           
{% if pss.orderid == tt.id %}

{% if tt.nature == '便當' %}

<p>菜名:{{tt.chname}} 數量:{{tt.number}}</p>

{% endif %}



{% endif %}
{% endfor %} 
      送達地址： {{pss.address}}
   </div>
</div>
</div>


{% endfor %}", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/hcc.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 15);
        static $filters = array("escape" => 5);
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
