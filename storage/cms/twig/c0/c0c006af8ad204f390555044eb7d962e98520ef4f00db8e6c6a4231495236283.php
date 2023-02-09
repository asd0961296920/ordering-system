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

/* E:\xampp\htdocs\food/themes/cms-sample/partials/site/footer.htm */
class __TwigTemplate_887f6ba8005107e09b3a7cfc3888f6605db9a3e7136e2ce2671f0f78d66e718e extends \Twig\Template
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




      <div class=\"col-sm-8 fv\">

        <div class=\"col-sm-12 fv\">





          <h4> 幫助</h4>
           <p> <a href=\"#\">簡易客服機器人</a></p>
            <p> <a href=\"#\">公司介紹/宗旨</a></p>
                <p> <a href=\"#\">會員服務中心</a></p>
    
    
            
          </div>


          <div class=\"col-sm-12 \">





            <h4>   其他資訊</h4>
    
            <p><a>指導老師:吳錦昂</a></p>
    
            <p> <a>小組成員:林冠廷，黃嘉誠，薛宇宏</a></p>
    



          </div>





      </div>
    </div>
  </div>






    
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/footer.htm";
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




      <div class=\"col-sm-8 fv\">

        <div class=\"col-sm-12 fv\">





          <h4> 幫助</h4>
           <p> <a href=\"#\">簡易客服機器人</a></p>
            <p> <a href=\"#\">公司介紹/宗旨</a></p>
                <p> <a href=\"#\">會員服務中心</a></p>
    
    
            
          </div>


          <div class=\"col-sm-12 \">





            <h4>   其他資訊</h4>
    
            <p><a>指導老師:吳錦昂</a></p>
    
            <p> <a>小組成員:林冠廷，黃嘉誠，薛宇宏</a></p>
    



          </div>





      </div>
    </div>
  </div>






    
</div>", "E:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/footer.htm", "");
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
