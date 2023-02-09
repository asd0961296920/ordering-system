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

/* E:\xampp\htdocs\food/themes/cms-sample/partials/result.htm */
class __TwigTemplate_66b16bc63ebee6e19beb7fa1c591356ce310bf8724a0fdd1e16e40bad4f58782 extends \Twig\Template
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
\t";
        }
        // line 12
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\food/themes/cms-sample/partials/result.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  48 => 5,  44 => 3,  42 => 2,  39 => 1,);
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
\t{% endif %}
</script>", "E:\\xampp\\htdocs\\food/themes/cms-sample/partials/result.htm", "");
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
