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

/* D:\xampp\htdocs\food/themes/cms-sample/partials/site/shop.htm */
class __TwigTemplate_c2be165d7ded30943d06d4602ac364883988eecbed622ef93db6090e5ac6d1d4 extends \Twig\Template
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
                title: \"訂單已成立\",
                text: \"出貨時請到您選擇的地點領取，付款請在取貨時現付，可以在訂單紀錄中查詢訂單狀態，要更改每次出貨地點請到個人資料修改\",
\t\t\t\ticon: 'success',
\t\t\t\tconfirmButtonText: '完成',
            }).then(function(result) {

\t\t\t\tlocation.reload();


            });


        }
    })

});
});

\$(document).ready(function(){
  \$(\"#tw\").click(function(){
    \$.request('onFor', {
        success: function() {

\t\tSwal.fire({
                title: \"購物車已清除\",
                text: \"\",
\t\t\t\ticon: 'success',
\t\t\t\tconfirmButtonText: '完成',
            }).then(function(result) {

\t\t\t\tlocation.reload();


            });






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
        // line 80
        if ((($context["posts"] ?? null) == "[]")) {
            // line 81
            echo "
        <p>暫無資料</p>
";
        }
        // line 84
        echo "

        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 87
            echo "
      <div class=\"connern\">
            <div class=\"row\">
                <input  type=\"hidden\" name=\"moneyname\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cookname", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "\">
                <div class=\"col\">
                    <img src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/";
            // line 92
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cookname", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo ".jpg\"alt=\"\" style=\"width: 70px;height: 70px;\">
                </div>
                <div class=\"col\">
                  <p>  ";
            // line 95
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "cookname", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "</p>
                </div>
                <div class=\"col\">
                    <p>  ";
            // line 98
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "number", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "份</p>
                  </div>
                  <div class=\"col\">
                    <p>  \$";
            // line 101
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "money", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "元</p>
                  </div>
              </div>
            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo " 






        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["wer"]);
        foreach ($context['_seq'] as $context["_key"] => $context["wer"]) {
            // line 115
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["wer"], "bentonumber", [], "any", false, false, true, 115) != 0)) {
                // line 116
                echo "


<div class=\"connern\">
    <div class=\"row\">
        <div class=\"col\">
            <img src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/便當.jpg\"alt=\"\" style=\"width: 70px;height: 70px;\">

            </div>





<div class=\"col\">
    ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["ptt"]);
                foreach ($context['_seq'] as $context["_key"] => $context["ptt"]) {
                    // line 132
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["wer"], "bentonumber", [], "any", false, false, true, 132) == twig_get_attribute($this->env, $this->source, $context["ptt"], "bentonumber", [], "any", false, false, true, 132))) {
                        // line 133
                        echo "
<input  type=\"hidden\" name=\"moneyname\" value=\"";
                        // line 134
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ptt"], "name", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                        echo "\">

<p>  ";
                        // line 136
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ptt"], "cookname", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo "</p>


";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ptt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo " 
</div>
<div class=\"col\">
    ";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["ptt"]);
                foreach ($context['_seq'] as $context["_key"] => $context["ptt"]) {
                    // line 144
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["wer"], "bentonumber", [], "any", false, false, true, 144) == twig_get_attribute($this->env, $this->source, $context["ptt"], "bentonumber", [], "any", false, false, true, 144))) {
                        // line 145
                        echo "
<p>  ";
                        // line 146
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ptt"], "number", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
                        echo "份</p>

";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ptt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo " 
</div>
<div class=\"col\">

<p>  \$60元</p>


</div>


            </div>
        </div>


            ";
            }
            // line 163
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo " 

        ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 167
            echo "        <input  type=\"hidden\" name=\"address\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "\">
        <input  type=\"hidden\" name=\"moneyff\" value=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ff"] ?? null), 168, $this->source), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo " 

</form>



</div>


</div>
<div class=\"col-sm-4\">

    <div class=\"hedd\"><h4>購物總金額</h4></div>



    <p>總金額：";
        // line 185
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ff"] ?? null), 185, $this->source), "html", null, true);
        echo "元</p>
    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 187
            echo "    <p>地址:";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "address", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo " 
    <div class=\"hedd\"></div>
    <p> 所選菜單:";
        // line 190
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["vv"] ?? null), 190, $this->source), "html", null, true);
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
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 190,  340 => 188,  331 => 187,  327 => 186,  323 => 185,  305 => 169,  297 => 168,  292 => 167,  288 => 166,  284 => 164,  277 => 163,  260 => 149,  250 => 146,  247 => 145,  244 => 144,  240 => 143,  235 => 140,  224 => 136,  219 => 134,  216 => 133,  213 => 132,  209 => 131,  192 => 116,  189 => 115,  185 => 114,  176 => 107,  163 => 101,  157 => 98,  151 => 95,  145 => 92,  140 => 90,  135 => 87,  131 => 86,  127 => 84,  122 => 81,  120 => 80,  39 => 1,);
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
                title: \"訂單已成立\",
                text: \"出貨時請到您選擇的地點領取，付款請在取貨時現付，可以在訂單紀錄中查詢訂單狀態，要更改每次出貨地點請到個人資料修改\",
\t\t\t\ticon: 'success',
\t\t\t\tconfirmButtonText: '完成',
            }).then(function(result) {

\t\t\t\tlocation.reload();


            });


        }
    })

});
});

\$(document).ready(function(){
  \$(\"#tw\").click(function(){
    \$.request('onFor', {
        success: function() {

\t\tSwal.fire({
                title: \"購物車已清除\",
                text: \"\",
\t\t\t\ticon: 'success',
\t\t\t\tconfirmButtonText: '完成',
            }).then(function(result) {

\t\t\t\tlocation.reload();


            });






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
                    <img src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/{{post.cookname}}.jpg\"alt=\"\" style=\"width: 70px;height: 70px;\">
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
            <img src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/便當.jpg\"alt=\"\" style=\"width: 70px;height: 70px;\">

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





</div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/partials/site/shop.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 80, "for" => 86);
        static $filters = array("escape" => 90);
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
