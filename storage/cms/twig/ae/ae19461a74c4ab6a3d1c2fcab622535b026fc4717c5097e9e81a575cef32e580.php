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

/* D:\xampp\htdocs\food/themes/cms-sample/pages/customer.htm */
class __TwigTemplate_52255a7f66a8a5070cd37a11c4bafe475c65b70ea91f8a9c977589047b2a2ae1 extends \Twig\Template
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
        echo "<!--客服機器人 用來回答客人一些簡單的問題-->


<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">
    


        <style type=\"text/css\">
        .ppp{
            width: 100%;
            height: 700px;
        }
            .talk_con{
                overflow: hidden;
position: absolute;
                width:600px;
                height:500px;
 
top: 25%;
left: 25%;
                margin:0px auto;
                background:#f3f3f3;
          border-radius:10px;
            }
            .talk_show{
                width:580px;
                height:420px;
                margin:10px auto 0;
                overflow:auto;
            }
            .talk_input{
                width:580px;
                margin:10px auto 0;
            }
            .whotalk{
                width:80px;
                height:30px;
                float:left;
                outline:none;
            }
            .talk_word{
                width:510px;
                height:26px;
                padding:0px;
                float:left;
                outline:none;
                text-indent:10px;
            }        
            .talk_sub{
                width:56px;
                height:30px;
                float:left;
                margin-left:10px;
            }
            .atalk{
               margin:10px; 
            }
            .atalk span{
                border-radius:10px;
                color:#000;
                padding:5px 10px;
            }
            .btalk{
                margin:10px;
                text-align:right;
            }
            .btalk span{
                display:inline-block;
                background:#3679ee;
                border-radius:10px;
                color:#fff;
                padding:5px 10px;
            }
          .talk_img{
            width:25px;height:25px; 
border-radius:999em;
padding: 5px 0;
background-size:contain;

          margin:0 7px;
          background-image: url('http://qn.ivybaby.me/img/knowledge/small/20190527/20190527183606/d88d248d0ef24dcab3748c470e053e28.png');
float: left;

          }
          #asay{background-color: #fff;}
        </style>


";
        // line 98
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/jstable"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 99
        echo "



    <div class=\"container\">
        <div class=\"row\">

          <div class=\"col\">

            <div class=\"ppp\">
                <figure class=\"text-center\">
                    <blockquote class=\"blockquote\">
                        <p class=\"h1\">自動回答客服</p>
                    </blockquote>
                    <figcaption class=\"blockquote-footer\">
                      可以回答妳問題的自動機器人
                      
                    </figcaption>
                  </figure>
        
                <div class=\"talk_con\">
                    <div class=\"talk_show\" id=\"words\">
                        <div class=\"atalk\"><div  class=\"talk_img\"></div>
                          <span id=\"asay\">您好，這邊是客服機器人，要真人客服請打１，要故障回報請打２，要聊天請打３，謝謝！　</span></div>
        
                    </div>
                    <div class=\"talk_input\">
                        <input type=\"text\" class=\"talk_word\" id=\"talkwords\" name=\"words\">
                        <input type=\"button\" value=\"傳送\" class=\"talk_sub\" id=\"talksub\">
                    </div>
                </div>
        
            </div>
          </div>

        </div>
      </div>








    
    
    
        
    </div>
    
    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/customer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 99,  138 => 98,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--客服機器人 用來回答客人一些簡單的問題-->


<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">
    


        <style type=\"text/css\">
        .ppp{
            width: 100%;
            height: 700px;
        }
            .talk_con{
                overflow: hidden;
position: absolute;
                width:600px;
                height:500px;
 
top: 25%;
left: 25%;
                margin:0px auto;
                background:#f3f3f3;
          border-radius:10px;
            }
            .talk_show{
                width:580px;
                height:420px;
                margin:10px auto 0;
                overflow:auto;
            }
            .talk_input{
                width:580px;
                margin:10px auto 0;
            }
            .whotalk{
                width:80px;
                height:30px;
                float:left;
                outline:none;
            }
            .talk_word{
                width:510px;
                height:26px;
                padding:0px;
                float:left;
                outline:none;
                text-indent:10px;
            }        
            .talk_sub{
                width:56px;
                height:30px;
                float:left;
                margin-left:10px;
            }
            .atalk{
               margin:10px; 
            }
            .atalk span{
                border-radius:10px;
                color:#000;
                padding:5px 10px;
            }
            .btalk{
                margin:10px;
                text-align:right;
            }
            .btalk span{
                display:inline-block;
                background:#3679ee;
                border-radius:10px;
                color:#fff;
                padding:5px 10px;
            }
          .talk_img{
            width:25px;height:25px; 
border-radius:999em;
padding: 5px 0;
background-size:contain;

          margin:0 7px;
          background-image: url('http://qn.ivybaby.me/img/knowledge/small/20190527/20190527183606/d88d248d0ef24dcab3748c470e053e28.png');
float: left;

          }
          #asay{background-color: #fff;}
        </style>


{% partial 'site/jstable' %}




    <div class=\"container\">
        <div class=\"row\">

          <div class=\"col\">

            <div class=\"ppp\">
                <figure class=\"text-center\">
                    <blockquote class=\"blockquote\">
                        <p class=\"h1\">自動回答客服</p>
                    </blockquote>
                    <figcaption class=\"blockquote-footer\">
                      可以回答妳問題的自動機器人
                      
                    </figcaption>
                  </figure>
        
                <div class=\"talk_con\">
                    <div class=\"talk_show\" id=\"words\">
                        <div class=\"atalk\"><div  class=\"talk_img\"></div>
                          <span id=\"asay\">您好，這邊是客服機器人，要真人客服請打１，要故障回報請打２，要聊天請打３，謝謝！　</span></div>
        
                    </div>
                    <div class=\"talk_input\">
                        <input type=\"text\" class=\"talk_word\" id=\"talkwords\" name=\"words\">
                        <input type=\"button\" value=\"傳送\" class=\"talk_sub\" id=\"talksub\">
                    </div>
                </div>
        
            </div>
          </div>

        </div>
      </div>








    
    
    
        
    </div>
    
    </div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/customer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 98);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
