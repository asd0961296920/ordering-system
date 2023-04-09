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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/site/historical.htm */
class __TwigTemplate_55f14279eba6da2ece6922fdeb1a3b8db1f47cb788d94c44fe8b5c4e161f2d92 extends \Twig\Template
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
        echo "<!--歷史訂單-->



<div class=\"accordion\" id=\"accordionExample\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "   

        <div class=\"accordion-item\">
          <h2 class=\"accordion-header\" id=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "orderid", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">
            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#cc";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "orderid", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"cc";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "orderid", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">
              訂單編號： ";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "orderid", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "  送達地址： ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "　訂貨日期：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "　出貨狀態：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "shippingstatus", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
            </button>
          </h2>
          <div id=\"cc";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "orderid", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "orderid", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" data-bs-parent=\"#accordionFlushExample\">
            <div class=\"accordion-body\">
              ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["tt"]);
            foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                // line 18
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["tt"], "id", [], "any", false, false, true, 18) == twig_get_attribute($this->env, $this->source, $context["post"], "orderid", [], "any", false, false, true, 18))) {
                    // line 19
                    echo "<p>菜名:";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "chname", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo " 數量:";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "number", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "</p>
           
";
                }
                // line 22
                echo "
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo " 
            </div>
        </div>
      </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " 
  





<!--



        <table>
    
        <tr>
            <td>訂單編號</td>
        <td>地址</td>
        <td>日期</td>
    </tr>
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 48
            echo "    <tr>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "orderid", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</td>
    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "</td>
    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo " 
    </table>

-->";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/historical.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  154 => 51,  150 => 50,  146 => 49,  143 => 48,  139 => 47,  119 => 29,  107 => 23,  100 => 22,  91 => 19,  88 => 18,  84 => 17,  77 => 15,  65 => 12,  59 => 11,  55 => 10,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--歷史訂單-->



<div class=\"accordion\" id=\"accordionExample\">
    {% for post in posts %}
   

        <div class=\"accordion-item\">
          <h2 class=\"accordion-header\" id=\"{{post.orderid}}\">
            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#cc{{post.orderid}}\" aria-expanded=\"false\" aria-controls=\"cc{{post.orderid}}\">
              訂單編號： {{post.orderid}}  送達地址： {{post.address}}　訂貨日期：{{post.date}}　出貨狀態：{{post.shippingstatus}}
            </button>
          </h2>
          <div id=\"cc{{post.orderid}}\" class=\"accordion-collapse collapse\" aria-labelledby=\"{{ps.orderid}}\" data-bs-parent=\"#accordionFlushExample\">
            <div class=\"accordion-body\">
              {% for tt in tt %}
              {% if tt.id == post.orderid %}
<p>菜名:{{tt.chname}} 數量:{{tt.number}}</p>
           
{% endif %}

              {% endfor %} 
            </div>
        </div>
      </div>


        {% endfor %} 
  





<!--



        <table>
    
        <tr>
            <td>訂單編號</td>
        <td>地址</td>
        <td>日期</td>
    </tr>
    {% for post in posts %}
    <tr>
        <td>{{post.orderid}}</td>
    <td>{{post.address}}</td>
    <td>{{post.date}}</td>
    </tr>
    {% endfor %} 
    </table>

-->", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/historical.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6, "if" => 18);
        static $filters = array("escape" => 10);
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
