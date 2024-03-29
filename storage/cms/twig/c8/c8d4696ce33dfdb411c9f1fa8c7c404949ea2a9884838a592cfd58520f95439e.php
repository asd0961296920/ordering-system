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

/* D:\xampp\htdocs\food/themes/cms-sample/pages/introduce.htm */
class __TwigTemplate_d4c5e321602fc50238d271ab2403bc20a82ab5d0b116d27583f12cde0a9537ff extends \Twig\Template
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
        echo "<!--公司介紹-->


<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">


        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js\"></script>


<div class=\"cdf\">
        <div class=\"d-flex align-items-start\">
            <div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
              <button class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">關於我們</button>
              <button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">營業據點</button>
              <button class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-messages\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">聯絡資訊</button>
             
            
            
            
            
            
            </div>
            <div class=\"tab-content vv\" id=\"v-pills-tabContent\">
              <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
                  <p>本公司是以健康，不油膩飲食為原則，將人工醬料的使用減到最低，少油水炒蔬菜、煎烤肉類海鮮，呈現食材本身的美味！</p>
                  <p> 每道菜都有清楚的熱量標示，好吃之外，熱量不爆表吃起來更安心，最優質的健康餐盒首選三夜草新概念健康餐盒。</p>
                
            </div>
              <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
                <p>    高雄市鳳山區11巷11弄11號(鳳山分店)</p>
                <p>    高雄市苓雅區22巷2弄22號(苓雅分店)</p>
                <p>    高雄市旗山區33巷33弄33號(旗山分店)</p>
                <p>    台北市忠孝東路111號(忠孝東路分店)</p>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1841.037620889622!2d120.34938044059521!3d22.65098311458608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5q2j5L-u!5e0!3m2!1szh-TW!2stw!4v1642230926618!5m2!1szh-TW!2stw\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
              </div>
              <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">
<p>聯絡電話；０８００－０００－０８７</p>
<p>電子郵件：１２３００＠ｙａｈｏｏ。ｃｏｍ。ｔｗ</p>
<p>總公司地址：高雄市鳥松區澄清路840號</p>



              </div>
             
            
            
            
            
            
            </div>
          </div>


        </div>











        </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/introduce.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--公司介紹-->


<div class=\"atuo\">


    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">


        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js\"></script>


<div class=\"cdf\">
        <div class=\"d-flex align-items-start\">
            <div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
              <button class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">關於我們</button>
              <button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">營業據點</button>
              <button class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-messages\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">聯絡資訊</button>
             
            
            
            
            
            
            </div>
            <div class=\"tab-content vv\" id=\"v-pills-tabContent\">
              <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
                  <p>本公司是以健康，不油膩飲食為原則，將人工醬料的使用減到最低，少油水炒蔬菜、煎烤肉類海鮮，呈現食材本身的美味！</p>
                  <p> 每道菜都有清楚的熱量標示，好吃之外，熱量不爆表吃起來更安心，最優質的健康餐盒首選三夜草新概念健康餐盒。</p>
                
            </div>
              <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
                <p>    高雄市鳳山區11巷11弄11號(鳳山分店)</p>
                <p>    高雄市苓雅區22巷2弄22號(苓雅分店)</p>
                <p>    高雄市旗山區33巷33弄33號(旗山分店)</p>
                <p>    台北市忠孝東路111號(忠孝東路分店)</p>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1841.037620889622!2d120.34938044059521!3d22.65098311458608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5q2j5L-u!5e0!3m2!1szh-TW!2stw!4v1642230926618!5m2!1szh-TW!2stw\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
              </div>
              <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">
<p>聯絡電話；０８００－０００－０８７</p>
<p>電子郵件：１２３００＠ｙａｈｏｏ。ｃｏｍ。ｔｗ</p>
<p>總公司地址：高雄市鳥松區澄清路840號</p>



              </div>
             
            
            
            
            
            
            </div>
          </div>


        </div>











        </div>
        </div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/introduce.htm", "");
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
