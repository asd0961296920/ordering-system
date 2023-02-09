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

/* E:\xampp\htdocs\food/themes/cms-sample/partials/site/shop.htm */
class __TwigTemplate_2e54ce1d4da68e4d340128ace40a9b60c8795d8ecfc5dbe69da84ffa67409eb9 extends \Twig\Template
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
        echo "<div class=\"shopping\">
<!--列出購物車中有甚麼東西-->

<script>
    \$(document).ready(function(){
  \$(\"#rr\").click(function(){
    \$('#data_form2').request('onFormSubmit', {
        success: function() {

            Swal.fire({
\t\t  title: '訂單已成立',
\t\t  text: '出貨時請到您選擇的地點領取，付款請在取貨時現付，可以在訂單紀錄中查詢訂單狀態，要更改每次出貨地點請到個人資料修改',
\t\t  icon: 'success',
\t\t  confirmButtonText: '完成'
\t\t});

        }
    })

});
});

\$(document).ready(function(){
  \$(\"#tw\").click(function(){
    \$.request('onFor', {
        success: function() {

            Swal.fire({
\t\t  title: '購物車已清除',
\t\t  text: '',
\t\t  icon: 'success',
\t\t  confirmButtonText: '完成'
\t\t});

        }
    })

});
});





    </script>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-sm-8\">
            
<div class=\"foodtab\">


        <form id=\"data_form2\" data-request=\"onFormSubmit\">







        <div class=\"hedd\"><h4>我的購物車</h4></div>
        ";
        // line 64
        if ((($context["posts"] ?? null) == "[]")) {
            // line 65
            echo "
        <p>暫無資料</p>
";
        }
        // line 68
        echo "

        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 71
            echo "
      <div class=\"connern\">
            <div class=\"row\">
                <input  type=\"hidden\" name=\"moneyname\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cookname", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "\">
                <div class=\"col\">
                    <img src=\"http://localhost/food/themes/cms-sample/assets/img/";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cookname", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo ".jpg\"alt=\"\" style=\"width: 70px;height: 70px;\">
                </div>
                <div class=\"col\">
                  <p>  ";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cookname", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "</p>
                </div>
                <div class=\"col\">
                    <p>  ";
            // line 82
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "number", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "份</p>
                  </div>
                  <div class=\"col\">
                    <p>  \$";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "money", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "元</p>
                  </div>
              </div>
            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo " 






        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["wer"]);
        foreach ($context['_seq'] as $context["_key"] => $context["wer"]) {
            // line 99
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["wer"], "bentonumber", [], "any", false, false, true, 99) != 0)) {
                // line 100
                echo "


<div class=\"connern\">
    <div class=\"row\">
        <div class=\"col\">
            <img src=\"http://localhost/food/themes/cms-sample/assets/img/便當.jpg\"alt=\"\" style=\"width: 70px;height: 70px;\">

            </div>





<div class=\"col\">
    ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["ptt"]);
                foreach ($context['_seq'] as $context["_key"] => $context["ptt"]) {
                    // line 116
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["wer"], "bentonumber", [], "any", false, false, true, 116) == twig_get_attribute($this->env, $this->source, $context["ptt"], "bentonumber", [], "any", false, false, true, 116))) {
                        // line 117
                        echo "
<input  type=\"hidden\" name=\"moneyname\" value=\"";
                        // line 118
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ptt"], "name", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                        echo "\">

<p>  ";
                        // line 120
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ptt"], "cookname", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "</p>


";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ptt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo " 
</div>
<div class=\"col\">
    ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["ptt"]);
                foreach ($context['_seq'] as $context["_key"] => $context["ptt"]) {
                    // line 128
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["wer"], "bentonumber", [], "any", false, false, true, 128) == twig_get_attribute($this->env, $this->source, $context["ptt"], "bentonumber", [], "any", false, false, true, 128))) {
                        // line 129
                        echo "
<p>  ";
                        // line 130
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ptt"], "number", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                        echo "份</p>

";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ptt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo " 
</div>
<div class=\"col\">

<p>  \$60元</p>


</div>


            </div>
        </div>


            ";
            }
            // line 147
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo " 

        ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 151
            echo "        <input  type=\"hidden\" name=\"address\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "\">
        <input  type=\"hidden\" name=\"moneyff\" value=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ff"] ?? null), 152, $this->source), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo " 

</form>



</div>


</div>
<div class=\"col-sm-4\">

    <div class=\"hedd\"><h4>購物總金額</h4></div>



    <p>總金額：";
        // line 169
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ff"] ?? null), 169, $this->source), "html", null, true);
        echo "元</p>
    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 171
            echo "    <p>地址:";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo " 
    <div class=\"hedd\"></div>
    <p> 所選菜單:";
        // line 174
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["vv"] ?? null), 174, $this->source), "html", null, true);
        echo " </p>
    <p> 糖量正常 </p>
    <p> 澱粉量正常 </p>
    <button type=\"submit\" id=\"rr\" class=\"btn btn-outline-primary px-5\" >結帳</button>

    <button type=\"submit\" id=\"tw\" class=\"btn btn-outline-primary px-5\">取消購物


  </div>


</div>
</div>





</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 174,  324 => 172,  315 => 171,  311 => 170,  307 => 169,  289 => 153,  281 => 152,  276 => 151,  272 => 150,  268 => 148,  261 => 147,  244 => 133,  234 => 130,  231 => 129,  228 => 128,  224 => 127,  219 => 124,  208 => 120,  203 => 118,  200 => 117,  197 => 116,  193 => 115,  176 => 100,  173 => 99,  169 => 98,  160 => 91,  147 => 85,  141 => 82,  135 => 79,  129 => 76,  124 => 74,  119 => 71,  115 => 70,  111 => 68,  106 => 65,  104 => 64,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"shopping\">
<!--列出購物車中有甚麼東西-->

<script>
    \$(document).ready(function(){
  \$(\"#rr\").click(function(){
    \$('#data_form2').request('onFormSubmit', {
        success: function() {

            Swal.fire({
\t\t  title: '訂單已成立',
\t\t  text: '出貨時請到您選擇的地點領取，付款請在取貨時現付，可以在訂單紀錄中查詢訂單狀態，要更改每次出貨地點請到個人資料修改',
\t\t  icon: 'success',
\t\t  confirmButtonText: '完成'
\t\t});

        }
    })

});
});

\$(document).ready(function(){
  \$(\"#tw\").click(function(){
    \$.request('onFor', {
        success: function() {

            Swal.fire({
\t\t  title: '購物車已清除',
\t\t  text: '',
\t\t  icon: 'success',
\t\t  confirmButtonText: '完成'
\t\t});

        }
    })

});
});





    </script>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-sm-8\">
            
<div class=\"foodtab\">


        <form id=\"data_form2\" data-request=\"onFormSubmit\">







        <div class=\"hedd\"><h4>我的購物車</h4></div>
        {% if posts == \"[]\" %}

        <p>暫無資料</p>
{% endif %}


        {% for post in posts %}

      <div class=\"connern\">
            <div class=\"row\">
                <input  type=\"hidden\" name=\"moneyname\" value=\"{{post.cookname}}\">
                <div class=\"col\">
                    <img src=\"http://localhost/food/themes/cms-sample/assets/img/{{post.cookname}}.jpg\"alt=\"\" style=\"width: 70px;height: 70px;\">
                </div>
                <div class=\"col\">
                  <p>  {{post.cookname}}</p>
                </div>
                <div class=\"col\">
                    <p>  {{post.number}}份</p>
                  </div>
                  <div class=\"col\">
                    <p>  \${{post.money}}元</p>
                  </div>
              </div>
            </div>


        {% endfor %} 






        {% for wer in wer %}
            {% if wer.bentonumber != 0 %}



<div class=\"connern\">
    <div class=\"row\">
        <div class=\"col\">
            <img src=\"http://localhost/food/themes/cms-sample/assets/img/便當.jpg\"alt=\"\" style=\"width: 70px;height: 70px;\">

            </div>





<div class=\"col\">
    {% for ptt in ptt %}
    {% if wer.bentonumber == ptt.bentonumber %}

<input  type=\"hidden\" name=\"moneyname\" value=\"{{ptt.name}}\">

<p>  {{ptt.cookname}}</p>


{% endif %}
{% endfor %} 
</div>
<div class=\"col\">
    {% for ptt in ptt %}
    {% if wer.bentonumber == ptt.bentonumber %}

<p>  {{ptt.number}}份</p>

{% endif %}
{% endfor %} 
</div>
<div class=\"col\">

<p>  \$60元</p>


</div>


            </div>
        </div>


            {% endif %} 
        {% endfor %} 

        {% for post in cc %}
        <input  type=\"hidden\" name=\"address\" value=\"{{post.address}}\">
        <input  type=\"hidden\" name=\"moneyff\" value=\"{{ff}}\">
        {% endfor %} 

</form>



</div>


</div>
<div class=\"col-sm-4\">

    <div class=\"hedd\"><h4>購物總金額</h4></div>



    <p>總金額：{{ff}}元</p>
    {% for post in cc %}
    <p>地址:{{post.address}}</p>
    {% endfor %} 
    <div class=\"hedd\"></div>
    <p> 所選菜單:{{vv}} </p>
    <p> 糖量正常 </p>
    <p> 澱粉量正常 </p>
    <button type=\"submit\" id=\"rr\" class=\"btn btn-outline-primary px-5\" >結帳</button>

    <button type=\"submit\" id=\"tw\" class=\"btn btn-outline-primary px-5\">取消購物


  </div>


</div>
</div>





</div>", "E:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/shop.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 64, "for" => 70);
        static $filters = array("escape" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
