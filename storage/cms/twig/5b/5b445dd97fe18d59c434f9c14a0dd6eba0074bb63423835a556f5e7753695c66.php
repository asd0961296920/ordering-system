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

/* D:\xampp\htdocs\food/themes/cms-sample/pages/register.htm */
class __TwigTemplate_16c7e8aea8f9c1055b0e1551bd53627280517f1a68432d1f7819dc946aea5952 extends \Twig\Template
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
        echo "<!--註冊新帳號網頁-->

<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">
        <div class=\"online\">
            <figure class=\"text-center\">
                <blockquote class=\"blockquote\">
                  <p><h1 class=\"display-6\">註冊新帳號</h1></p>
                </blockquote>
                
              </figure>
              <p class=\"lead\">
                ●所有欄位皆不得為空
            </p>
            <p class=\"lead\">
                ●電子郵件等同登入帳號，格式請填寫正確
            </p>
                <p class=\"lead\">
                ●密碼不低得於９個字元的英數字
            </p>      




        <form id=\"data_form\" data-request=\"onFormSubmit\"data-request-update=\"onin: '#ajaxDiv'\">

            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">暱稱</span>
                </div>
                <input name=\"account\" type=\"account\" class=\"form-control\">
            </div>


            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">電子郵件</span>
                </div>
                <input name=\"email\" type=\"email\" class=\"form-control\">
            </div>

            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">密碼</span>
                </div>
                <input name=\"password\" type=\"password\" class=\"form-control\">
            </div>


           
           
           
           
           
           
            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">連絡電話</span>
                </div>
                <input name=\"cellphone\" type=\"number\"　 class=\"form-control\"　>
            </div>


            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">送貨地點：</span>
                </div>
                <select  name=\"address\"  aria-label=\"Default select example\" class=\"form-select\">
                    <option value=\"高雄市鳳山區11巷11弄11號(鳳山分店)\">高雄市鳳山區11巷11弄11號(鳳山分店)</option>
                    <option value=\"高雄市苓雅區22巷2弄22號(苓雅分店)\">高雄市苓雅區22巷2弄22號(苓雅分店)</option>
                    <option value=\"高雄市旗山區33巷33弄33號(旗山分店)\">高雄市鳳山區33巷33弄33號(旗山分店)</option>
                    <option value=\"台北市忠孝東路111號(忠孝東路分店)\">台北市忠孝東路111號(忠孝東路分店</option>
                    <option value=\"台中市逢甲區11巷11弄11號(逢甲分店)\">台中市逢甲區11巷11弄11號(逢甲分店)</option>
    
                </select>
                        </div>

















            <button type=\"submit\" class=\"btn btn-outline-primary my-5 px-5\" style=\"border-radius:38px\">
                註冊
            </button>

        </form>
    
    </div>
    <div id=\"ajaxDiv\"></div>
        
    </div>
    
    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/register.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--註冊新帳號網頁-->

<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">
        <div class=\"online\">
            <figure class=\"text-center\">
                <blockquote class=\"blockquote\">
                  <p><h1 class=\"display-6\">註冊新帳號</h1></p>
                </blockquote>
                
              </figure>
              <p class=\"lead\">
                ●所有欄位皆不得為空
            </p>
            <p class=\"lead\">
                ●電子郵件等同登入帳號，格式請填寫正確
            </p>
                <p class=\"lead\">
                ●密碼不低得於９個字元的英數字
            </p>      




        <form id=\"data_form\" data-request=\"onFormSubmit\"data-request-update=\"onin: '#ajaxDiv'\">

            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">暱稱</span>
                </div>
                <input name=\"account\" type=\"account\" class=\"form-control\">
            </div>


            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">電子郵件</span>
                </div>
                <input name=\"email\" type=\"email\" class=\"form-control\">
            </div>

            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">密碼</span>
                </div>
                <input name=\"password\" type=\"password\" class=\"form-control\">
            </div>


           
           
           
           
           
           
            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">連絡電話</span>
                </div>
                <input name=\"cellphone\" type=\"number\"　 class=\"form-control\"　>
            </div>


            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">送貨地點：</span>
                </div>
                <select  name=\"address\"  aria-label=\"Default select example\" class=\"form-select\">
                    <option value=\"高雄市鳳山區11巷11弄11號(鳳山分店)\">高雄市鳳山區11巷11弄11號(鳳山分店)</option>
                    <option value=\"高雄市苓雅區22巷2弄22號(苓雅分店)\">高雄市苓雅區22巷2弄22號(苓雅分店)</option>
                    <option value=\"高雄市旗山區33巷33弄33號(旗山分店)\">高雄市鳳山區33巷33弄33號(旗山分店)</option>
                    <option value=\"台北市忠孝東路111號(忠孝東路分店)\">台北市忠孝東路111號(忠孝東路分店</option>
                    <option value=\"台中市逢甲區11巷11弄11號(逢甲分店)\">台中市逢甲區11巷11弄11號(逢甲分店)</option>
    
                </select>
                        </div>

















            <button type=\"submit\" class=\"btn btn-outline-primary my-5 px-5\" style=\"border-radius:38px\">
                註冊
            </button>

        </form>
    
    </div>
    <div id=\"ajaxDiv\"></div>
        
    </div>
    
    </div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/register.htm", "");
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
