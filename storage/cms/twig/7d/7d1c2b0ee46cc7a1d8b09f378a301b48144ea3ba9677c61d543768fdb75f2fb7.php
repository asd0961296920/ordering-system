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

/* E:\xampp\htdocs\food/themes/cms-sample/pages/index.htm */
class __TwigTemplate_05b1fca41ed4b6d3276a36ba2d53c3a7534073ca4f99ee8ec095c769c6e07170 extends \Twig\Template
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
        echo "<!--這是首頁，沒什麼系統就是個靜態頁面-->





<div class=\"atuo\">


<div class=\"banner\"></div>

    <div class=\"tt\">
    <h1>三夜草新概念健康餐盒</h1>
</div>

<div class=\"man\">



    <div class=\"wrapper row2\">
        <div class=\"container clear\"> 
           <ul id=\"stats\" class=\"nospace group\">
            <li class=\"one_quarter first\"><i class=\"fa fa-3x fa-mars\"></i>
              <p><a >健康</a></p>
              <p>提供最健康的料理</p>
            </li>
            <li class=\"one_quarter\"><i class=\"fa fa-3x fa-mars-double\"></i>
              <p><a >新鮮</a></p>
              <p>新鮮食材產地直送</p>
            </li>
            <li class=\"one_quarter\"><i class=\"fa fa-3x fa-mars-stroke\"></i>
              <p><a >輕食</a></p>
              <p>各式美味料理</p>
            </li>
            <li class=\"one_quarter\"><i class=\"fa fa-3x fa-mars-stroke-h\"></i>
              <p><a >低熱量</a></p>
              <p>不油膩的減肥餐點</p>
            </li>
          </ul>
        </div>
      </div>





    <div class=\"split clear\" >
        <div class=\"box\"> 
           <div class=\"nospace group\">
            <article class=\"one_half first btmspace-50\">
              <h4><a>健康飲食</a></h4>
              <p class=\"nospace\">健康且新鮮的食材，以最新鮮的狀態為您呈上 &hellip;</p>
            </article>
            <article class=\"one_half btmspace-50\">
              <h4><a >減肥低熱量</a></h4>
              <p class=\"nospace\">低油，低鹽，低脂，不會過於油膩的料理 &hellip;</p>
            </article>
            <article class=\"one_half first\">
              <h4><a>美味</a></h4>
              <p class=\"nospace\">兼顧美味的料理，豐富多樣的菜色吃起來不會膩口 &hellip;</p>
            </article>
            <article class=\"one_half\">
              <h4><a>不添加過多的添加物</a></h4>
              <p class=\"nospace\">不僅用香料和天然食材取代味精、鹽巴&hellip;</p>
            </article>
          </div>
        </div>
      </div>



      <div class=\"split clear light rightaligned\" style=\"background-image:url('https://upload.cc/i1/2021/11/23/sdvVrC.jpg');\">
        <div class=\"box\"> 
          <article class=\"btmspace-50\">
            <h4>料理</h4>
            <p class=\"nospace\">本公司以純粹的信念為大家帶來健康又美味的料理&raquo;</a></p>
          </article>
          <article>
            <h4>服務</h4>
            <p class=\"nospace\"> 周全的服務讓您在點餐的過程中能以最輕鬆的狀態完成</p>
          </article>
        </div>
      </div>

<!--
      <div class=\"wrapper row2\">
        <div id=\"latest\"> 
           <div class=\"titlebox\">
            <h2 class=\"font-x3 uppercase nospace\">Curabitur ut enim in quam</h2>
            <p class=\"nospace\">Sed urna orci, facilisis nec nulla at, maximus fringilla massa.</p>
          </div>
          <div class=\"nospace group\">
            <figure><img src=\"images/demo/latest/01.png\" alt=\"\">
              <figcaption>
                <time datetime=\"2045-04-06\">6<sup>th</sup> April 2045</time>
                <p>Quisque dignissim dapibus</p>
                <p><a href=\"#\">More &raquo;</a></p>
              </figcaption>
            </figure>
            <figure><img src=\"images/demo/latest/02.png\" alt=\"\">
              <figcaption>
                <time datetime=\"2045-04-06\">6<sup>th</sup> April 2045</time>
                <p>Vitae suscipit erat sodales</p>
                <p><a href=\"#\">More &raquo;</a></p>
              </figcaption>
            </figure>
            <figure><img src=\"images/demo/latest/01.png\" alt=\"\">
              <figcaption>
                <time datetime=\"2045-04-06\">6<sup>th</sup> April 2045</time>
                <p>Massa ac hendrerit pulvinar</p>
                <p><a href=\"#\">More &raquo;</a></p>
              </figcaption>
            </figure>
            <figure><img src=\"images/demo/latest/02.png\" alt=\"\">
              <figcaption>
                <time datetime=\"2045-04-06\">6<sup>th</sup> April 2045</time>
                <p>Sapien leo bibendum lectus</p>
                <p><a href=\"#\">More &raquo;</a></p>
              </figcaption>
            </figure>
          </div>
         </div>
      </div>
-->






    
</div>

</div>


<!--
<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>料理</h1>
    </div>
    
    <div class=\"man\">
    
    
    
    
    
        
    </div>
    
    </div>
-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\food/themes/cms-sample/pages/index.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--這是首頁，沒什麼系統就是個靜態頁面-->





<div class=\"atuo\">


<div class=\"banner\"></div>

    <div class=\"tt\">
    <h1>三夜草新概念健康餐盒</h1>
</div>

<div class=\"man\">



    <div class=\"wrapper row2\">
        <div class=\"container clear\"> 
           <ul id=\"stats\" class=\"nospace group\">
            <li class=\"one_quarter first\"><i class=\"fa fa-3x fa-mars\"></i>
              <p><a >健康</a></p>
              <p>提供最健康的料理</p>
            </li>
            <li class=\"one_quarter\"><i class=\"fa fa-3x fa-mars-double\"></i>
              <p><a >新鮮</a></p>
              <p>新鮮食材產地直送</p>
            </li>
            <li class=\"one_quarter\"><i class=\"fa fa-3x fa-mars-stroke\"></i>
              <p><a >輕食</a></p>
              <p>各式美味料理</p>
            </li>
            <li class=\"one_quarter\"><i class=\"fa fa-3x fa-mars-stroke-h\"></i>
              <p><a >低熱量</a></p>
              <p>不油膩的減肥餐點</p>
            </li>
          </ul>
        </div>
      </div>





    <div class=\"split clear\" >
        <div class=\"box\"> 
           <div class=\"nospace group\">
            <article class=\"one_half first btmspace-50\">
              <h4><a>健康飲食</a></h4>
              <p class=\"nospace\">健康且新鮮的食材，以最新鮮的狀態為您呈上 &hellip;</p>
            </article>
            <article class=\"one_half btmspace-50\">
              <h4><a >減肥低熱量</a></h4>
              <p class=\"nospace\">低油，低鹽，低脂，不會過於油膩的料理 &hellip;</p>
            </article>
            <article class=\"one_half first\">
              <h4><a>美味</a></h4>
              <p class=\"nospace\">兼顧美味的料理，豐富多樣的菜色吃起來不會膩口 &hellip;</p>
            </article>
            <article class=\"one_half\">
              <h4><a>不添加過多的添加物</a></h4>
              <p class=\"nospace\">不僅用香料和天然食材取代味精、鹽巴&hellip;</p>
            </article>
          </div>
        </div>
      </div>



      <div class=\"split clear light rightaligned\" style=\"background-image:url('https://upload.cc/i1/2021/11/23/sdvVrC.jpg');\">
        <div class=\"box\"> 
          <article class=\"btmspace-50\">
            <h4>料理</h4>
            <p class=\"nospace\">本公司以純粹的信念為大家帶來健康又美味的料理&raquo;</a></p>
          </article>
          <article>
            <h4>服務</h4>
            <p class=\"nospace\"> 周全的服務讓您在點餐的過程中能以最輕鬆的狀態完成</p>
          </article>
        </div>
      </div>

<!--
      <div class=\"wrapper row2\">
        <div id=\"latest\"> 
           <div class=\"titlebox\">
            <h2 class=\"font-x3 uppercase nospace\">Curabitur ut enim in quam</h2>
            <p class=\"nospace\">Sed urna orci, facilisis nec nulla at, maximus fringilla massa.</p>
          </div>
          <div class=\"nospace group\">
            <figure><img src=\"images/demo/latest/01.png\" alt=\"\">
              <figcaption>
                <time datetime=\"2045-04-06\">6<sup>th</sup> April 2045</time>
                <p>Quisque dignissim dapibus</p>
                <p><a href=\"#\">More &raquo;</a></p>
              </figcaption>
            </figure>
            <figure><img src=\"images/demo/latest/02.png\" alt=\"\">
              <figcaption>
                <time datetime=\"2045-04-06\">6<sup>th</sup> April 2045</time>
                <p>Vitae suscipit erat sodales</p>
                <p><a href=\"#\">More &raquo;</a></p>
              </figcaption>
            </figure>
            <figure><img src=\"images/demo/latest/01.png\" alt=\"\">
              <figcaption>
                <time datetime=\"2045-04-06\">6<sup>th</sup> April 2045</time>
                <p>Massa ac hendrerit pulvinar</p>
                <p><a href=\"#\">More &raquo;</a></p>
              </figcaption>
            </figure>
            <figure><img src=\"images/demo/latest/02.png\" alt=\"\">
              <figcaption>
                <time datetime=\"2045-04-06\">6<sup>th</sup> April 2045</time>
                <p>Sapien leo bibendum lectus</p>
                <p><a href=\"#\">More &raquo;</a></p>
              </figcaption>
            </figure>
          </div>
         </div>
      </div>
-->






    
</div>

</div>


<!--
<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>料理</h1>
    </div>
    
    <div class=\"man\">
    
    
    
    
    
        
    </div>
    
    </div>
-->", "E:\\xampp\\htdocs\\food/themes/cms-sample/pages/index.htm", "");
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
