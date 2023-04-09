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

/* D:\xampp\htdocs\food/themes/cms-sample/pages/cartemenu.htm */
class __TwigTemplate_5c65c966d700c5e80c21c8f7f3ce59c1e37a7e23ae1a6319859cb165d1ecf0a1 extends \Twig\Template
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
        echo "<!--點餐的網頁-->



<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">
        <div class=\"foodhg\">
            <ul>

            <li id=\"v01\"><a id=\"f01\" href=\"#\">單點</a></li>
            <li id=\"v02\"><a  id=\"f02\" href=\"#\">便當</a></li>
            </ul>

            </div>    
<div class=\"foodheader\">
    <script type=\"text/javascript\">
        var time=500;
          \$(function() {
              \$(\"#f01\").click(function(){
                  \$('#food2').css(\"display\", \"none\");
                  \$(\"#food1\").css(\"display\", \"block\");
                  \$(\"#f01\").css(\"color\", \"#d13834\");
                  \$(\"#f02\").css(\"color\", \"#e4e4e4\");

                  \$(\"#v01\").css(\"border-bottom\", \"5px#d13834 solid\");
                  \$(\"#v02\").css(\"border-bottom\", \"5px#e4e4e4 solid\");
                });

                \$(\"#f02\").click(function(){
                  \$('#food2').css(\"display\", \"block\");
                  \$(\"#food1\").css(\"display\", \"none\");
                  \$(\"#f02\").css(\"color\", \"#d13834\");
                  \$(\"#f01\").css(\"color\", \"#e4e4e4\");
                  \$(\"#v02\").css(\"border-bottom\", \"5px#d13834 solid\");
                  \$(\"#v01\").css(\"border-bottom\", \"5px#e4e4e4 solid\");
                });


            
            
            
            
            
            })
              
        

            </script>

</div>



        <div id=\"food1\" class=\"foodcook\">
    ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/tab"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "
    <div id=\"ajaxDiv\"></div>

</div>

<script>
    \$(document).ready(function(){
  \$(\"#DD\").click(function(){
    \$('#data_form1').request('onFonvenient', {
        success: function() {

            Swal.fire({
\t\t  title: '商品已加入購物車',
\t\t  text: '',
\t\t  icon: 'success',
\t\t  confirmButtonText: '完成'
\t\t});

        }
    })

});
});
    </script>

<div id=\"food2\" class=\"foodcook\">
<p>自選便當區，可自選1樣主菜和多樣配菜，每份便當都含主食，主菜，配菜</p>
<div class=\"mmm\">
<form id=\"data_form1\" data-request=\"onFonvenient\">
";
        // line 93
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/convenient"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 94
        echo "<input  type=\"hidden\" name=\"user\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["user"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null), 94, $this->source), "html", null, true);
        echo "\">



</form>
</div>





<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">

   
            
      </div>
      <div class=\"col\">
        <button id=\"DD\" type=\"submit\" class=\"btn btn-dark ffce de\" >加入購物車</button>


        </div>
        
      </div>
      <div class=\"col-sm-4\">

      </div>
      
    </div>
  </div>
















</div>




</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/cartemenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 94,  138 => 93,  107 => 64,  103 => 63,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--點餐的網頁-->



<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">
        <div class=\"foodhg\">
            <ul>

            <li id=\"v01\"><a id=\"f01\" href=\"#\">單點</a></li>
            <li id=\"v02\"><a  id=\"f02\" href=\"#\">便當</a></li>
            </ul>

            </div>    
<div class=\"foodheader\">
    <script type=\"text/javascript\">
        var time=500;
          \$(function() {
              \$(\"#f01\").click(function(){
                  \$('#food2').css(\"display\", \"none\");
                  \$(\"#food1\").css(\"display\", \"block\");
                  \$(\"#f01\").css(\"color\", \"#d13834\");
                  \$(\"#f02\").css(\"color\", \"#e4e4e4\");

                  \$(\"#v01\").css(\"border-bottom\", \"5px#d13834 solid\");
                  \$(\"#v02\").css(\"border-bottom\", \"5px#e4e4e4 solid\");
                });

                \$(\"#f02\").click(function(){
                  \$('#food2').css(\"display\", \"block\");
                  \$(\"#food1\").css(\"display\", \"none\");
                  \$(\"#f02\").css(\"color\", \"#d13834\");
                  \$(\"#f01\").css(\"color\", \"#e4e4e4\");
                  \$(\"#v02\").css(\"border-bottom\", \"5px#d13834 solid\");
                  \$(\"#v01\").css(\"border-bottom\", \"5px#e4e4e4 solid\");
                });


            
            
            
            
            
            })
              
        

            </script>

</div>



        <div id=\"food1\" class=\"foodcook\">
    {% partial 'site/tab' %}

    <div id=\"ajaxDiv\"></div>

</div>

<script>
    \$(document).ready(function(){
  \$(\"#DD\").click(function(){
    \$('#data_form1').request('onFonvenient', {
        success: function() {

            Swal.fire({
\t\t  title: '商品已加入購物車',
\t\t  text: '',
\t\t  icon: 'success',
\t\t  confirmButtonText: '完成'
\t\t});

        }
    })

});
});
    </script>

<div id=\"food2\" class=\"foodcook\">
<p>自選便當區，可自選1樣主菜和多樣配菜，每份便當都含主食，主菜，配菜</p>
<div class=\"mmm\">
<form id=\"data_form1\" data-request=\"onFonvenient\">
{% partial 'site/convenient' %}
<input  type=\"hidden\" name=\"user\" value=\"{{ user['name'] }}\">



</form>
</div>





<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">

   
            
      </div>
      <div class=\"col\">
        <button id=\"DD\" type=\"submit\" class=\"btn btn-dark ffce de\" >加入購物車</button>


        </div>
        
      </div>
      <div class=\"col-sm-4\">

      </div>
      
    </div>
  </div>
















</div>




</div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/cartemenu.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 63);
        static $filters = array("escape" => 94);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape'],
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
