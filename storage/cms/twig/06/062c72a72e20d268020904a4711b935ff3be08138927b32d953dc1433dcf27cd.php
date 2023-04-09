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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/result.htm */
class __TwigTemplate_5a72cb82949d23f3bf2986537f938288bb51315918490b1a8c72efabfea07f3d extends \Twig\Template
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
        echo "<script>
\t";
        // line 2
        if (($context["have_login"] ?? null)) {
            // line 3
            echo "\t\twindow.location.href = \"/food/order\";
\t";
        } else {
            // line 5
            echo "\t\tSwal.fire({
\t\t  title: '輸入不正確',
\t\t  text: '帳號或密碼錯誤，請重新輸入!!',
\t\t  icon: 'error',
\t\t  confirmButtonText: '繼續'
\t\t});
\t\t
\t";
        }
        // line 13
        echo "</script>




<script>
\t";
        // line 19
        if (($context["orders"] ?? null)) {
            // line 20
            echo "\t\tSwal.fire({
                title: \"訂單已出貨\",
                text: \"已出貨訂單歷史可以到訂單查詢頁面查找\",
\t\t\t\ticon: 'success',
\t\t\t\tconfirmButtonText: '完成',
            }).then(function(result) {

\t\t\t\tlocation.reload();


            });
\t";
        }
        // line 32
        echo "</script>


<script>
\t";
        // line 36
        if (($context["nono"] ?? null)) {
            // line 37
            echo "\t\tSwal.fire({
                title: \"未選取訂單\",
                text: \"請至少勾選一項訂單\",
\t\t\t\ticon: 'error',
\t\t\t\tconfirmButtonText: '結束',
            })
\t";
        }
        // line 44
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/result.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  90 => 37,  88 => 36,  82 => 32,  68 => 20,  66 => 19,  58 => 13,  48 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
\t{% if have_login %}
\t\twindow.location.href = \"/food/order\";
\t{% else %}
\t\tSwal.fire({
\t\t  title: '輸入不正確',
\t\t  text: '帳號或密碼錯誤，請重新輸入!!',
\t\t  icon: 'error',
\t\t  confirmButtonText: '繼續'
\t\t});
\t\t
\t{% endif %}
</script>




<script>
\t{% if  orders %}
\t\tSwal.fire({
                title: \"訂單已出貨\",
                text: \"已出貨訂單歷史可以到訂單查詢頁面查找\",
\t\t\t\ticon: 'success',
\t\t\t\tconfirmButtonText: '完成',
            }).then(function(result) {

\t\t\t\tlocation.reload();


            });
\t{% endif %}
</script>


<script>
\t{% if  nono %}
\t\tSwal.fire({
                title: \"未選取訂單\",
                text: \"請至少勾選一項訂單\",
\t\t\t\ticon: 'error',
\t\t\t\tconfirmButtonText: '結束',
            })
\t{% endif %}
</script>", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/result.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
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
