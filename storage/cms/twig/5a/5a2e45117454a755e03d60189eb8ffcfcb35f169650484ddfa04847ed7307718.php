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

/* E:\xampp\htdocs\food/themes/cms-sample/partials/site/member.htm */
class __TwigTemplate_e4dd03806eb85c538c503f1bea038719e87ebb37bf8d753f26125659d19b94a2 extends \Twig\Template
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
        echo "<div class=\"member\">
<!--會員資料的查詢與修改-->


    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "

    <form id=\"data_form3\" class=\"fdd\" data-request=\"onFccc\">

    <div class=\"mb-3 row\">
        <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">會員名稱:</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" readonly class=\"form-control-plaintext\" id=\"staticEmail\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "accountname", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">
        </div>
      </div>
      
        <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員電話:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"cellphone\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cellphone", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\">
            </div>
          </div>



          <div class=\"mb-3 row\">

            <label for=\"inputPassword\"  class=\"col-sm-2 col-form-label\">送貨地點：</label>
            <div class=\"col-sm-10\">
            <select  name=\"add\"  aria-label=\"Default select example\" class=\"form-select\">
                <option value=\"高雄市鳳山區11巷11弄11號(鳳山分店)\">高雄市鳳山區11巷11弄11號(鳳山分店)</option>
                <option value=\"高雄市苓雅區22巷2弄22號(苓雅分店)\">高雄市苓雅區22巷2弄22號(苓雅分店)</option>
                <option value=\"高雄市旗山區33巷33弄33號(旗山分店)\">高雄市鳳山區33巷33弄33號(旗山分店)</option>
                <option value=\"台北市忠孝東路111號(忠孝東路分店)\">台北市忠孝東路111號(忠孝東路分店</option>
                <option value=\"台中市逢甲區11巷11弄11號(逢甲分店)\">台中市逢甲區11巷11弄11號(逢甲分店)</option>

            </select>
          </div>
        </div>






<!--

          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員住址:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"add\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "\">
            </div>
          </div>
-->
          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員年齡:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"old\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "old", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "\">
            </div>
          </div>

          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員血型:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"blood\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "blood", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "\">
            </div>
          </div>

          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">最近一餐熱量攝取:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"blood\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "blood", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "\">
            </div>
          </div>
         
         
          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員性別:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"gender\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "gender", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "\">
            </div>
          </div>


</form>
<button type=\"submit\" id=\"wss\" class=\"btn btn-outline-secondary\">修改資料</button>








<script>
  \$(document).ready(function(){
\$(\"#wss\").click(function(){
  \$('#data_form3').request('onFccc', {
      success: function() {

          Swal.fire({
    title: '資料已修改',
    text: '',
    icon: 'success',
    confirmButtonText: '完成'
  });

      }
  })

});
});



</script>








";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo " 
















</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/member.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 125,  143 => 80,  132 => 72,  122 => 65,  112 => 58,  102 => 51,  68 => 20,  58 => 13,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"member\">
<!--會員資料的查詢與修改-->


    {% for post in cc %}


    <form id=\"data_form3\" class=\"fdd\" data-request=\"onFccc\">

    <div class=\"mb-3 row\">
        <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">會員名稱:</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" readonly class=\"form-control-plaintext\" id=\"staticEmail\" value=\"{{post.accountname}}\">
        </div>
      </div>
      
        <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員電話:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"cellphone\" value=\"{{post.cellphone}}\">
            </div>
          </div>



          <div class=\"mb-3 row\">

            <label for=\"inputPassword\"  class=\"col-sm-2 col-form-label\">送貨地點：</label>
            <div class=\"col-sm-10\">
            <select  name=\"add\"  aria-label=\"Default select example\" class=\"form-select\">
                <option value=\"高雄市鳳山區11巷11弄11號(鳳山分店)\">高雄市鳳山區11巷11弄11號(鳳山分店)</option>
                <option value=\"高雄市苓雅區22巷2弄22號(苓雅分店)\">高雄市苓雅區22巷2弄22號(苓雅分店)</option>
                <option value=\"高雄市旗山區33巷33弄33號(旗山分店)\">高雄市鳳山區33巷33弄33號(旗山分店)</option>
                <option value=\"台北市忠孝東路111號(忠孝東路分店)\">台北市忠孝東路111號(忠孝東路分店</option>
                <option value=\"台中市逢甲區11巷11弄11號(逢甲分店)\">台中市逢甲區11巷11弄11號(逢甲分店)</option>

            </select>
          </div>
        </div>






<!--

          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員住址:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"add\" value=\"{{post.address}}\">
            </div>
          </div>
-->
          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員年齡:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"old\" value=\"{{post.old}}\">
            </div>
          </div>

          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員血型:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"blood\" value=\"{{post.blood}}\">
            </div>
          </div>

          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">最近一餐熱量攝取:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"blood\" value=\"{{post.blood}}\">
            </div>
          </div>
         
         
          <div class=\"mb-3 row\">
            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">會員性別:</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"gender\" value=\"{{post.gender}}\">
            </div>
          </div>


</form>
<button type=\"submit\" id=\"wss\" class=\"btn btn-outline-secondary\">修改資料</button>








<script>
  \$(document).ready(function(){
\$(\"#wss\").click(function(){
  \$('#data_form3').request('onFccc', {
      success: function() {

          Swal.fire({
    title: '資料已修改',
    text: '',
    icon: 'success',
    confirmButtonText: '完成'
  });

      }
  })

});
});



</script>








{% endfor %} 
















</div>", "E:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/member.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
