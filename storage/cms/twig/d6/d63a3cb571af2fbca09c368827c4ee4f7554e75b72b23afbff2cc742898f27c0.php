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

/* D:\xampp\htdocs\food/themes/cms-sample/pages/on.htm */
class __TwigTemplate_1be9ed12ac7af30831382aba5045b311dbc8d9d2146c343089ffd15449945f40 extends \Twig\Template
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
        if (($context["user"] ?? null)) {
            // line 2
            echo "\t<script>
\t\twindow.location.href = \"/food/order\";
\t</script>
";
        }
        // line 6
        echo "<!--會員登入頁面-->
<script type=\"text/javascript\">
    \$(function() {
        \$('.atuo').fadeIn();
      })
    </script>
    
    <div class=\"atuo\">
    
    
    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">

        
        <script type=\"text/javascript\">
          var time=500;
 \$(function() {
    \$(\"#register\").click(function(){
                  \$('.atuo').fadeOut();
                  setTimeout(\"top.location.href = '/food/register' \",time);
                });
})
</script>

        <div class=\"online\">

            <form id=\"data_form\" data-request=\"onFormSubmit\" data-request-update=\"result: '#ajaxDiv'\">
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">帳號</span>
                    </div>
                    <input name=\"account\" type=\"text\" class=\"form-control\">
                </div>
            
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">密碼</span>
                    </div>
                    <input name=\"password\" type=\"password\" class=\"form-control\">
                </div>
                

                
                <div class=\"col-md-12\">
                    <div class=\"row justify-content-center\">
                        <button type=\"submit\" class=\"btn btn-outline-primary my-5 px-5\" style=\"border-radius:38px\">
                            登入
                        </button>
                        
                    </div>
                </div>
            
            </form>
            <div id=\"ajaxDiv\"></div>
            </div>



                <div class=\"row\">
                  <div class=\"col\">

                  </div>
                  <div class=\"col-3\">
                    <div class=\"col-md-12\">
                        <div class=\"row justify-content-center\">
                            <button id=\"register\" class=\"btn btn-outline-primary\" style=\"border-radius:38px\">
                                註冊
                            </button>
                            
                        </div>
                    </div>
                  </div>
                  <div class=\"col\">

                  </div>
                </div>

                <div class=\"container text-center\">

                </div>



    </div>
    
    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/on.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user %}
\t<script>
\t\twindow.location.href = \"/food/order\";
\t</script>
{% endif %}
<!--會員登入頁面-->
<script type=\"text/javascript\">
    \$(function() {
        \$('.atuo').fadeIn();
      })
    </script>
    
    <div class=\"atuo\">
    
    
    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">

        
        <script type=\"text/javascript\">
          var time=500;
 \$(function() {
    \$(\"#register\").click(function(){
                  \$('.atuo').fadeOut();
                  setTimeout(\"top.location.href = '/food/register' \",time);
                });
})
</script>

        <div class=\"online\">

            <form id=\"data_form\" data-request=\"onFormSubmit\" data-request-update=\"result: '#ajaxDiv'\">
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">帳號</span>
                    </div>
                    <input name=\"account\" type=\"text\" class=\"form-control\">
                </div>
            
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">密碼</span>
                    </div>
                    <input name=\"password\" type=\"password\" class=\"form-control\">
                </div>
                

                
                <div class=\"col-md-12\">
                    <div class=\"row justify-content-center\">
                        <button type=\"submit\" class=\"btn btn-outline-primary my-5 px-5\" style=\"border-radius:38px\">
                            登入
                        </button>
                        
                    </div>
                </div>
            
            </form>
            <div id=\"ajaxDiv\"></div>
            </div>



                <div class=\"row\">
                  <div class=\"col\">

                  </div>
                  <div class=\"col-3\">
                    <div class=\"col-md-12\">
                        <div class=\"row justify-content-center\">
                            <button id=\"register\" class=\"btn btn-outline-primary\" style=\"border-radius:38px\">
                                註冊
                            </button>
                            
                        </div>
                    </div>
                  </div>
                  <div class=\"col\">

                  </div>
                </div>

                <div class=\"container text-center\">

                </div>



    </div>
    
    </div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/on.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
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
