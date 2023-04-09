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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/site/header.htm */
class __TwigTemplate_6e5ecfb5be80318671877088964ddce5fc3453c7800e0260b80c661edfd3d96a extends \Twig\Template
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
        echo "<!--網頁最上面的導航欄-->
<div class=\"containe\">

      <div class=\"bcn\">
        <div class=\"tab\">
            <a id=\"tab01\" style=\"font-weight:800; \" href=\"#\">三夜草</a>
        </div>
      </div>





      <script type=\"text/javascript\">
        \$(function(){
      var c=0;
          \$(\".m-title\").click(function(){
              \$(\"#cc\").slideToggle();
    
              if(c==0){
                \$(\".m-title\").css(\"background-image\", \"url('https://pic.pimg.tw/weilife/1622533546-1227418643-g.png')\");

                    c=c+1;  
          }else{
            \$(\".m-title\").css(\"background-image\", \"url('https://pic.pimg.tw/weilife/1622460424-397400884-g.png')\");

                   c=0; 
          }

            });
      
        });
          
        </script>






      <div class=\"m-title\">  </div>















        <div class=\"header\" id=\"cc\">
          ";
        // line 58
        if (($context["user"] ?? null)) {
            // line 59
            echo "          <a id=\"tab08\" data-request=\"onLogout\" data-request-data=\"redirect: '/on'\">登出</a>
        ";
        }
        // line 61
        echo "





";
        // line 67
        if ((($context["useres"] ?? null) == "管理員")) {
            // line 68
            echo "          <a id=\"tab99\" href=\"#\">後臺管理</a>
          ";
        }
        // line 70
        echo "          ";
        if ( !($context["user"] ?? null)) {
            // line 71
            echo "          <a id=\"tab07\" href=\"#\">登入/註冊</a>
        ";
        }
        // line 73
        echo "






          <a id=\"tab00\" href=\"#\">購物車</a>
          <a id=\"tab66\" href=\"#\">會員中心</a>
          <a id=\"tab05\" href=\"#\">客服機器人</a>
          <!-- <a id=\"tab04\" href=\"#\">PORTFOLIO</a>-->
          <a id=\"tab04\" href=\"#\">關於我們</a>
     <a id=\"tab09\" href=\"#\">幫您選擇</a>
          <a id=\"tab02\" href=\"#\">點餐菜單</a>
          <a id=\"tab03\" href=\"#\" >首頁</a>   


          <script type=\"text/javascript\">
          var time=500;
            \$(function() {
                \$('.atuo').fadeIn();
                \$(\"#tab00\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/on' \",time);
                });

                \$(\"#tab01\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/' \",time);
                });

                \$(\"#tab02\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/cartemenu' \",time);
                });

                \$(\"#tab03\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/' \",time);
                });
                
                \$(\"#tab04\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/introduce' \",time);
                });

                \$(\"#tab05\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/customer' \",time);
                });
                \$(\"#tab07\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/on' \",time);
                });

                \$(\"#tab66\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/mem' \",time);
                });


                \$(\"#tab09\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/wisdom' \",time);
                });


                \$(\"#tab99\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/backstage' \",time);
                });
              })
              
        

            </script>




          


          </div>


  </div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 73,  121 => 71,  118 => 70,  114 => 68,  112 => 67,  104 => 61,  100 => 59,  98 => 58,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--網頁最上面的導航欄-->
<div class=\"containe\">

      <div class=\"bcn\">
        <div class=\"tab\">
            <a id=\"tab01\" style=\"font-weight:800; \" href=\"#\">三夜草</a>
        </div>
      </div>





      <script type=\"text/javascript\">
        \$(function(){
      var c=0;
          \$(\".m-title\").click(function(){
              \$(\"#cc\").slideToggle();
    
              if(c==0){
                \$(\".m-title\").css(\"background-image\", \"url('https://pic.pimg.tw/weilife/1622533546-1227418643-g.png')\");

                    c=c+1;  
          }else{
            \$(\".m-title\").css(\"background-image\", \"url('https://pic.pimg.tw/weilife/1622460424-397400884-g.png')\");

                   c=0; 
          }

            });
      
        });
          
        </script>






      <div class=\"m-title\">  </div>















        <div class=\"header\" id=\"cc\">
          {% if user %}
          <a id=\"tab08\" data-request=\"onLogout\" data-request-data=\"redirect: '/on'\">登出</a>
        {% endif %}






{% if useres == \"管理員\" %}
          <a id=\"tab99\" href=\"#\">後臺管理</a>
          {% endif %}
          {% if not user %}
          <a id=\"tab07\" href=\"#\">登入/註冊</a>
        {% endif %}







          <a id=\"tab00\" href=\"#\">購物車</a>
          <a id=\"tab66\" href=\"#\">會員中心</a>
          <a id=\"tab05\" href=\"#\">客服機器人</a>
          <!-- <a id=\"tab04\" href=\"#\">PORTFOLIO</a>-->
          <a id=\"tab04\" href=\"#\">關於我們</a>
     <a id=\"tab09\" href=\"#\">幫您選擇</a>
          <a id=\"tab02\" href=\"#\">點餐菜單</a>
          <a id=\"tab03\" href=\"#\" >首頁</a>   


          <script type=\"text/javascript\">
          var time=500;
            \$(function() {
                \$('.atuo').fadeIn();
                \$(\"#tab00\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/on' \",time);
                });

                \$(\"#tab01\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/' \",time);
                });

                \$(\"#tab02\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/cartemenu' \",time);
                });

                \$(\"#tab03\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/' \",time);
                });
                
                \$(\"#tab04\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/introduce' \",time);
                });

                \$(\"#tab05\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/customer' \",time);
                });
                \$(\"#tab07\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/on' \",time);
                });

                \$(\"#tab66\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/mem' \",time);
                });


                \$(\"#tab09\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/wisdom' \",time);
                });


                \$(\"#tab99\").click(function(){
                  \$('.atuo').fadeOut();
                  \$('.fooder').fadeOut();
                  setTimeout(\"top.location.href = '/food/backstage' \",time);
                });
              })
              
        

            </script>




          


          </div>


  </div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 58);
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
