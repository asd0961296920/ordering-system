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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/onin.htm */
class __TwigTemplate_a6dec1581831b83a93e73e2673aa2a168e5c4f41eba203d81dbe9f686e6f6346 extends \Twig\Template
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
\t\t  title: '您未登入',
\t\t  text: '請先到會員中心登入，再下訂單',
\t\t  icon: 'error',
\t\t  confirmButtonText: '繼續'
\t\t});
\t";
        }
        // line 12
        echo "</script>

<script>
\t";
        // line 15
        if ( !($context["account1"] ?? null)) {
            // line 16
            echo "\t\tSwal.fire({
\t\t  title: '未填寫暱稱，電子郵箱或密碼',
\t\t  text: '所有欄位皆不得為空，請確認是否有確實填寫',
\t\t  icon: 'error',
\t\t  confirmButtonText: '繼續'
\t\t});
\t";
        } else {
            // line 23
            echo "\t\tSwal.fire({
                title: \"註冊成功\",
                text: \"已經完成帳號註冊，立即登入吧！\",
\t\t\t\ticon: 'success',
\t\t\t\tconfirmButtonText: '登入',
            }).then(function(result) {

\t\t\t\twindow.location.href = 'http://localhost/food/on'; 


            });
\t";
        }
        // line 35
        echo "</script>


<script>
\t";
        // line 39
        if (($context["fc"] ?? null)) {
            // line 40
            echo "\t\tSwal.fire({
\t\t  title: '商品已加入購物車',
\t\t  text: '',
\t\t  icon: 'success',
\t\t  confirmButtonText: '完成'
\t\t});
\t";
        }
        // line 47
        echo "</script>

<script>
\t";
        // line 50
        if (($context["fcc"] ?? null)) {
            // line 51
            echo "\t\tSwal.fire({
\t\t  title: '商品已從購物車移除',
\t\t  text: '',
\t\t  icon: 'success',
\t\t  confirmButtonText: '關閉'
\t\t});
\t";
        }
        // line 58
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/onin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  111 => 51,  109 => 50,  104 => 47,  95 => 40,  93 => 39,  87 => 35,  73 => 23,  64 => 16,  62 => 15,  57 => 12,  48 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
\t{% if have_login %}
\t\twindow.location.href = \"/food/order\";
\t{% else %}
\t\tSwal.fire({
\t\t  title: '您未登入',
\t\t  text: '請先到會員中心登入，再下訂單',
\t\t  icon: 'error',
\t\t  confirmButtonText: '繼續'
\t\t});
\t{% endif %}
</script>

<script>
\t{% if not account1 %}
\t\tSwal.fire({
\t\t  title: '未填寫暱稱，電子郵箱或密碼',
\t\t  text: '所有欄位皆不得為空，請確認是否有確實填寫',
\t\t  icon: 'error',
\t\t  confirmButtonText: '繼續'
\t\t});
\t{% else %}
\t\tSwal.fire({
                title: \"註冊成功\",
                text: \"已經完成帳號註冊，立即登入吧！\",
\t\t\t\ticon: 'success',
\t\t\t\tconfirmButtonText: '登入',
            }).then(function(result) {

\t\t\t\twindow.location.href = 'http://localhost/food/on'; 


            });
\t{% endif %}
</script>


<script>
\t{% if fc %}
\t\tSwal.fire({
\t\t  title: '商品已加入購物車',
\t\t  text: '',
\t\t  icon: 'success',
\t\t  confirmButtonText: '完成'
\t\t});
\t{% endif %}
</script>

<script>
\t{% if fcc %}
\t\tSwal.fire({
\t\t  title: '商品已從購物車移除',
\t\t  text: '',
\t\t  icon: 'success',
\t\t  confirmButtonText: '關閉'
\t\t});
\t{% endif %}
</script>", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/onin.htm", "");
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
