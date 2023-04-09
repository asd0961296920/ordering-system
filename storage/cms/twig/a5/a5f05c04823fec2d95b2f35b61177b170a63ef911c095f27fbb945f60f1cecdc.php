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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/site/footer.htm */
class __TwigTemplate_914c745eb8b6f8712a40e3d564b1f5571660b4e06e014233c753dfdcc9525cda extends \Twig\Template
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
        echo "<div class=\"fooder\">
<!--網頁尾端-->
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 fv\">
<div class=\"txtttet fv\"><h3>三夜草新概念健康餐盒</h3></div>



<p>@本網頁由三夜草公司版權所有</p>
      
    
    
    
    
    
    
    </div>

    <div class=\"col-sm-4 fv\">
      <div class=\"txtttet fv\"><h3>聯絡資訊</h3></div>
      
      
      
      <p>電子郵件:yes2000414@yahoo.com.tw</p>
            
      <p>GitHub:<a href=\"https://github.com/asd0961296920/ordering-system\">https://github.com/asd0961296920/ordering-system</a></p>
          
          
          
          
          
          </div>
      


      <div class=\"col-sm-4 fv\">

        <div class=\"col-sm-12 fv\">





          <h4> 幫助</h4>
           <p> <a href=\"/food/customer\">簡易客服機器人</a></p>
            <p> <a href=\"/food/introduce\">公司介紹/宗旨</a></p>
                <p> <a href=\"/food/mem\">會員服務中心</a></p>
    
    
            
          </div>


          <div class=\"col-sm-12 \">





            <h4>   其他資訊</h4>
    
            <p><a>製作人：林冠廷</a></p>
            <p>本網站只做展示用途</p>
            <p> <a></a></p>
    



          </div>





      </div>




      
    </div>
  </div>






    
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"fooder\">
<!--網頁尾端-->
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 fv\">
<div class=\"txtttet fv\"><h3>三夜草新概念健康餐盒</h3></div>



<p>@本網頁由三夜草公司版權所有</p>
      
    
    
    
    
    
    
    </div>

    <div class=\"col-sm-4 fv\">
      <div class=\"txtttet fv\"><h3>聯絡資訊</h3></div>
      
      
      
      <p>電子郵件:yes2000414@yahoo.com.tw</p>
            
      <p>GitHub:<a href=\"https://github.com/asd0961296920/ordering-system\">https://github.com/asd0961296920/ordering-system</a></p>
          
          
          
          
          
          </div>
      


      <div class=\"col-sm-4 fv\">

        <div class=\"col-sm-12 fv\">





          <h4> 幫助</h4>
           <p> <a href=\"/food/customer\">簡易客服機器人</a></p>
            <p> <a href=\"/food/introduce\">公司介紹/宗旨</a></p>
                <p> <a href=\"/food/mem\">會員服務中心</a></p>
    
    
            
          </div>


          <div class=\"col-sm-12 \">





            <h4>   其他資訊</h4>
    
            <p><a>製作人：林冠廷</a></p>
            <p>本網站只做展示用途</p>
            <p> <a></a></p>
    



          </div>





      </div>




      
    </div>
  </div>






    
</div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
