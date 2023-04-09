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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/site/jstable.htm */
class __TwigTemplate_a561dd6e94296e26ce6c6b2c9aab5964a00a71b4ca6a5d09977670f156bcddca extends \Twig\Template
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
        echo "<script type=\"text/javascript\">      
    // 客服機器人後端
        window.onload = function(){
            var Words = document.getElementById(\"words\");
            var Who = document.getElementById(\"who\");
            var TalkWords = document.getElementById(\"talkwords\");
            var TalkSub = document.getElementById(\"talksub\");


            TalkSub.onclick = function(){
                //定義空字串
                var str = \"\";
                if(TalkWords.value == \"\"){
                     // 訊息為空時彈窗
                //    alert(\"訊息不能為空\");
                    return;
                }

                    //如果Who.value為0n那麼是 A說
                    str = '<div class=\"btalk\"><span>' + TalkWords.value +'</span></div>' ;  

              //將之前的內容與要發的內容拼接好 提交
                Words.innerHTML = Words.innerHTML + str;


//js用ajax呼叫php
 \$().request('onFormSubmit', {
    type: \"POST\",
    data:{Text1:TalkWords.value},
    success: function(cc) {
    
        setTimeout(function() { 


if(cc==''){

    str = '<div class=\"atalk\"><div  class=\"talk_img\"></div><span id=\"asay\">' + '我聽不懂喔!' +'</span></div>';

}else{
    str = '<div class=\"atalk\"><div  class=\"talk_img\"></div><span id=\"asay\">' +cc.result +'</span></div>';
}


            Words.innerHTML = Words.innerHTML + str;
},1000); 

    }
})


/*


    
if(TalkWords.value.search(\"你好\")!= -1 ||TalkWords.value.search(\"您好\")!= -1){
str = '<div class=\"atalk\"><div  class=\"talk_img\"></div><span id=\"asay\">' + '請問需要什麼幫助0.0?' +'</span></div>';

}else{
str = '<div class=\"atalk\"><div  class=\"talk_img\"></div><span id=\"asay\">' + '我聽不懂喔!' +'</span></div>';

}
*/
document.getElementById(\"talkwords\").value=\"\";


            }

        }


    </script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/jstable.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">      
    // 客服機器人後端
        window.onload = function(){
            var Words = document.getElementById(\"words\");
            var Who = document.getElementById(\"who\");
            var TalkWords = document.getElementById(\"talkwords\");
            var TalkSub = document.getElementById(\"talksub\");


            TalkSub.onclick = function(){
                //定義空字串
                var str = \"\";
                if(TalkWords.value == \"\"){
                     // 訊息為空時彈窗
                //    alert(\"訊息不能為空\");
                    return;
                }

                    //如果Who.value為0n那麼是 A說
                    str = '<div class=\"btalk\"><span>' + TalkWords.value +'</span></div>' ;  

              //將之前的內容與要發的內容拼接好 提交
                Words.innerHTML = Words.innerHTML + str;


//js用ajax呼叫php
 \$().request('onFormSubmit', {
    type: \"POST\",
    data:{Text1:TalkWords.value},
    success: function(cc) {
    
        setTimeout(function() { 


if(cc==''){

    str = '<div class=\"atalk\"><div  class=\"talk_img\"></div><span id=\"asay\">' + '我聽不懂喔!' +'</span></div>';

}else{
    str = '<div class=\"atalk\"><div  class=\"talk_img\"></div><span id=\"asay\">' +cc.result +'</span></div>';
}


            Words.innerHTML = Words.innerHTML + str;
},1000); 

    }
})


/*


    
if(TalkWords.value.search(\"你好\")!= -1 ||TalkWords.value.search(\"您好\")!= -1){
str = '<div class=\"atalk\"><div  class=\"talk_img\"></div><span id=\"asay\">' + '請問需要什麼幫助0.0?' +'</span></div>';

}else{
str = '<div class=\"atalk\"><div  class=\"talk_img\"></div><span id=\"asay\">' + '我聽不懂喔!' +'</span></div>';

}
*/
document.getElementById(\"talkwords\").value=\"\";


            }

        }


    </script>", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/jstable.htm", "");
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
