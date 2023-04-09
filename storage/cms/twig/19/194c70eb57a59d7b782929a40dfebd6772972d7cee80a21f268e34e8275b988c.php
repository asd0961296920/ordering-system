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

/* D:\xampp\htdocs\food/themes/cms-sample/pages/backstage.htm */
class __TwigTemplate_f57bd86ce80a62747512cb08145837a8c0e7660ba3feb8c9e1864b10a8892ae0 extends \Twig\Template
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
        if ((($context["usered"] ?? null) != "管理員")) {
            // line 2
            echo "\t<script>
\t\twindow.location.href = \"/food/on\";
\t</script>
";
        }
        // line 6
        echo "





";
        // line 12
        if ((($context["usered"] ?? null) == "管理員")) {
            // line 13
            echo "<div class=\"look\">
  <!--後台 只有管理員能進-->
<h2>後台</h2>

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js\"></script>
<script>
  \$(document).ready(function(){
\$(\"#refresh01\").click(function(){


  location.reload();

});
});


  </script>

















<ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#home\">未出貨訂單</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#menu1\">所有訂單查詢</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#menu2\">添加菜色</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#menu3\">所有菜色列表</a>
      </li>
  </ul>




  <div class=\"tab-content\">
    <div id=\"home\" class=\"container tab-pane active\"><br>
     

      <div class=\"col-12 p-3 mb-2\">

        <form id=\"data_form\" data-request=\"onFormSubmit\" data-request-update=\"result: '#ajaxDiv'\">
          <div class=\"accordion\" id=\"accordionExample\">
          ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 75
                echo "
<div class=\"\"><p>客戶編號：";
                // line 76
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["post"], 76, $this->source), "html", null, true);
                echo "</p></div>
              ";
                // line 77
                $context["c"] = 0;
                // line 78
                echo "      
              ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pt"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ps"]) {
                    // line 80
                    echo "
              ";
                    // line 81
                    if (($context["post"] == twig_get_attribute($this->env, $this->source, $context["ps"], "username", [], "any", false, false, true, 81))) {
                        // line 82
                        echo "              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"";
                        // line 83
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                        echo "\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#cc";
                        // line 84
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        echo "\" aria-expanded=\"false\" aria-controls=\"cc";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        echo "\">
                    <input type=\"checkbox\" value=\"";
                        // line 85
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "id", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo ",\" name=\"xx[]\">
                    訂單編號： ";
                        // line 86
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "  送達地址： ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "address", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "　訂貨日期：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "date", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "　總金額：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "money", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "
                  </button>
                </h2>
                <div id=\"cc";
                        // line 89
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "\" data-bs-parent=\"#accordionFlushExample\">
                  <div class=\"accordion-body\">
                    <p>單點:</p>
                    ";
                        // line 92
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["tt"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                            // line 93
                            echo "                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["tt"], "id", [], "any", false, false, true, 93) == twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 93))) {
                                // line 94
                                echo "                


";
                                // line 97
                                if ((twig_get_attribute($this->env, $this->source, $context["tt"], "nature", [], "any", false, false, true, 97) == "單點")) {
                                    // line 98
                                    echo "
<p>菜名:";
                                    // line 99
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "chname", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                                    echo " 數量:";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "number", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                                    echo "</p>
   
";
                                }
                                // line 102
                                echo "

                    ";
                            }
                            // line 105
                            echo "
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 106
                        echo " 
                    <p>便當:</p>

                    ";
                        // line 109
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["tt"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                            // line 110
                            echo "                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["tt"], "id", [], "any", false, false, true, 110) == twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 110))) {
                                // line 111
                                echo "                


";
                                // line 114
                                if ((twig_get_attribute($this->env, $this->source, $context["tt"], "nature", [], "any", false, false, true, 114) == "便當")) {
                                    // line 115
                                    echo "
<p>菜名:";
                                    // line 116
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "chname", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                                    echo " 數量:";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "number", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                                    echo "</p>
   
";
                                }
                                // line 119
                                echo "

                    ";
                            }
                            // line 122
                            echo "
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 123
                        echo " 


                  </div>
              </div>
            </div>
              ";
                    }
                    // line 130
                    echo "
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ps'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo " 
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo " 
          
            </div> 

            

          
          
          
          <!--
          <table>
                <tr>
                <td>用戶名</td>
                  <td>訂單編號</td>
                  <td>送達地址</td>
                  <td>訂貨日期</td>
                  <td>金額</td>      
                </tr>
                ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 151
                echo "                <tr>
            
                    <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["post"], 153, $this->source), "html", null, true);
                echo "</td>
                    ";
                // line 154
                $context["c"] = 0;
                // line 155
                echo "            
                    ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pt"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ps"]) {
                    // line 157
                    echo "                    ";
                    if (($context["post"] == twig_get_attribute($this->env, $this->source, $context["ps"], "username", [], "any", false, false, true, 157))) {
                        // line 158
                        echo "            
                
                    <tr>
                        <td></td>
            
                    <td><input type=\"checkbox\" value=\"";
                        // line 163
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "id", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                        echo ",\" name=\"xx[]\"> ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                        echo "</td>
                    <td>";
                        // line 164
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "address", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                        echo "</td>
                    <td>";
                        // line 165
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "date", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                        echo "</td>
                    <td>";
                        // line 166
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "money", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                        echo "</td>
                </tr>
            
            
            
            
            
                    ";
                    }
                    // line 174
                    echo "            
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ps'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo " 
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo " 
            </table>
            -->
            
                <button type=\"submit\" class=\"btn btn-outline-primary px-5\">出貨
                </button>
            </form>
          </div>
          <div class=\"col-12 p-3 mb-2\">
            <button type=\"submit\" id=\"refresh01\" class=\"btn btn-outline-primary px-5 mm\">刷新
            </button>

          </div>


            <div id=\"ajaxDiv\"></div>

    </div>

    <div id=\"menu1\" class=\"container tab-pane fade\"><br>




      <div class=\"historical\">
                            
        <form id=\"data_form\" data-request=\"onFormSubmit2\" data-request-update=\"hcc.htm: '#resultDiv2'\">
            
            <div class=\"container\">
                <div class=\"row\">
                <div class=\"col mb-3\">
                    <div class=\"form-label\">
                        <span class=\"\">訂貨日期:</span>
                    </div>
                    
                    <input name=\"datas\"  type=\"date\" class=\"form-control\">
                </div>
                <div class=\"col mb-3\">

                  <div class=\"form-label\">
                      <span class=\"\">用戶編號:</span>
                  </div>
                  
                  <input name=\"texxtt\"  type=\"text\" class=\"form-control\">
              </div>



                <div class=\"col mb-3\">

                    <label for=\"inputPassword\"  class=\"form-label\">送貨地點：</label>
                    <div class=\"col-sm-10\">
                    <select  name=\"addresses\"  aria-label=\"Default select example\" class=\"form-select\">
                        <option value=\"\">無選擇</option>
                        <option value=\"高雄市鳳山區11巷11弄11號(鳳山分店)\">高雄市鳳山區11巷11弄11號(鳳山分店)</option>
                        <option value=\"高雄市苓雅區22巷2弄22號(苓雅分店)\">高雄市苓雅區22巷2弄22號(苓雅分店)</option>
                        <option value=\"高雄市旗山區33巷33弄33號(旗山分店)\">高雄市鳳山區33巷33弄33號(旗山分店)</option>
                        <option value=\"台北市忠孝東路111號(忠孝東路分店)\">台北市忠孝東路111號(忠孝東路分店</option>
                        <option value=\"台中市逢甲區11巷11弄11號(逢甲分店)\">台中市逢甲區11巷11弄11號(逢甲分店)</option>
        
                    </select>
                  </div>
                </div>

                <div class=\"col mb-3\">

                    <label for=\"inputPassword\"  class=\"form-label\">出貨狀態:</label>
                    <div class=\"col-sm-10\">
                    <select  name=\"shippingstatus\"  aria-label=\"Default select example\" class=\"form-select\">
                        <option value=\"\">無選擇</option>
                        <option value=\"未出貨\">未出貨</option>
                        <option value=\"已出貨\">已出貨</option>

        
                    </select>
                  </div>
                </div>



                <!-- 查詢 -->
                <div class=\"col input-group mb-3\">
                    <button type=\"submit\" class=\"btn btn-outline-primary px-5\">
                        查詢
                    </button>
                </div>
                
            </div>
        </div>


<div id=\"resultDiv2\">


</div>


</form>


</div> 













    
    
    </div>
    <div id=\"menu2\" class=\"container tab-pane fade\"><br>
     







      <form id=\"data_form\" data-request=\"onFormSubmiteeting\" enctype=\"multipart/form-data\">



      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">菜名</label>
        <div class=\"col-sm-10\">
          <input type=\"cooknames\" class=\"form-control\" id=\"inputPassword\" name=\"cooknames\">
        </div>
      </div>


      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">價格</label>
        <div class=\"col-sm-10\">
          <input type=\"moneys\" class=\"form-control\" id=\"inputPassword\" name=\"moneyes\">
        </div>
      </div>

      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">熱量</label>
        <div class=\"col-sm-10\">
          <input type=\"cckg\" class=\"form-control\" id=\"inputPassword\" name=\"kkkkg\">
        </div>
      </div>

      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">類型</label>
        <div class=\"col-sm-10\">
          <select  name=\"type\"  aria-label=\"Default select example\" class=\"form-select\">
            <option value=\"主菜\">主菜</option>
            <option value=\"主食\">主食</option>
            <option value=\"配菜\">配菜</option>
        </select>
      
      
      </div>
      </div>

      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">圖片名稱</label>
        <div class=\"col-sm-10\">
          <input type=\"cckg\" class=\"form-control\" id=\"inputPassword\" name=\"jpgname\">
        </div>
        <p>圖片本體請自行上傳到food\\themes\\cms-sample\\assets\\img中</p>
      </div>






      <button data-request=\"onFormSubmiteeting\"  class=\"btn btn-outline-primary px-5\" type=\"submit\">
        存檔
                </button>
                
                </form> 

      <!--
        
\t\t\t<div class=\"row mb-3\">
\t\t\t\t<div class=\"col input-group\">
\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t<span class=\"input-group-text\">菜色圖片上傳</span>
\t\t\t\t\t</div>
\t\t\t\t\t<input name=\"myfile\" class=\"btn btn-outline-primary\" type=\"file\" accept=\"\" id=\"myfile\">
          

        
  
          <button data-request=\"onLookUploadFile\" data-request-update=\"look_upload_file: '#uploadFileDiv'\"
\t\t\t\t\t\tdata-request-flash class=\"btn btn-outline-primary px-5\" type=\"submit\">
\t\t\t\t\t\t查看檔案
\t\t\t\t\t</button>

\t\t\t\t</div>
\t\t\t</div>
   
           -->
    </div>

    <div id=\"menu3\" class=\"container tab-pane fade\"><br>
     

        


      <table>
        <tr>
        <td>菜名</td>
          <td>價格</td>
          <td>熱量</td>
          <td>圖片</td>

        </tr>
        ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["psser"]);
            foreach ($context['_seq'] as $context["_key"] => $context["psser"]) {
                // line 399
                echo "

    
        
            <tr>

            <td>";
                // line 405
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["psser"], "name", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
                echo "</td>
            <td>";
                // line 406
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["psser"], "cc", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                echo "</td>
            <td>";
                // line 407
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["psser"], "money", [], "any", false, false, true, 407), 407, $this->source), "html", null, true);
                echo "</td>
            <td><img src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/";
                // line 408
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["psser"], "name", [], "any", false, false, true, 408), 408, $this->source), "html", null, true);
                echo ".jpg\"  style=\"height: 150px;width: 200px;\"></td>
        </tr>
    
    
    
    

        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['psser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 416
            echo " 
    </table>








    
    </div>







  </div>









</div>


";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/backstage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 416,  622 => 408,  618 => 407,  614 => 406,  610 => 405,  602 => 399,  598 => 398,  375 => 177,  367 => 175,  360 => 174,  349 => 166,  345 => 165,  341 => 164,  335 => 163,  328 => 158,  325 => 157,  321 => 156,  318 => 155,  316 => 154,  312 => 153,  308 => 151,  304 => 150,  284 => 132,  277 => 131,  270 => 130,  261 => 123,  254 => 122,  249 => 119,  241 => 116,  238 => 115,  236 => 114,  231 => 111,  228 => 110,  224 => 109,  219 => 106,  212 => 105,  207 => 102,  199 => 99,  196 => 98,  194 => 97,  189 => 94,  186 => 93,  182 => 92,  174 => 89,  162 => 86,  158 => 85,  152 => 84,  148 => 83,  145 => 82,  143 => 81,  140 => 80,  136 => 79,  133 => 78,  131 => 77,  127 => 76,  124 => 75,  120 => 74,  57 => 13,  55 => 12,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if usered != \"管理員\" %}
\t<script>
\t\twindow.location.href = \"/food/on\";
\t</script>
{% endif %}






{% if usered == \"管理員\" %}
<div class=\"look\">
  <!--後台 只有管理員能進-->
<h2>後台</h2>

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js\"></script>
<script>
  \$(document).ready(function(){
\$(\"#refresh01\").click(function(){


  location.reload();

});
});


  </script>

















<ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#home\">未出貨訂單</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#menu1\">所有訂單查詢</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#menu2\">添加菜色</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#menu3\">所有菜色列表</a>
      </li>
  </ul>




  <div class=\"tab-content\">
    <div id=\"home\" class=\"container tab-pane active\"><br>
     

      <div class=\"col-12 p-3 mb-2\">

        <form id=\"data_form\" data-request=\"onFormSubmit\" data-request-update=\"result: '#ajaxDiv'\">
          <div class=\"accordion\" id=\"accordionExample\">
          {% for post in posts %}

<div class=\"\"><p>客戶編號：{{post}}</p></div>
              {% set c=0 %}
      
              {% for ps in pt %}

              {% if post == ps.username %}
              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"{{ps.orderid}}\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#cc{{ps.orderid}}\" aria-expanded=\"false\" aria-controls=\"cc{{ps.orderid}}\">
                    <input type=\"checkbox\" value=\"{{ps.id}},\" name=\"xx[]\">
                    訂單編號： {{ps.orderid}}  送達地址： {{ps.address}}　訂貨日期：{{ps.date}}　總金額：{{ps.money}}
                  </button>
                </h2>
                <div id=\"cc{{ps.orderid}}\" class=\"accordion-collapse collapse\" aria-labelledby=\"{{ps.orderid}}\" data-bs-parent=\"#accordionFlushExample\">
                  <div class=\"accordion-body\">
                    <p>單點:</p>
                    {% for tt in tt %}
                    {% if tt.id == ps.orderid %}
                


{% if tt.nature == '單點' %}

<p>菜名:{{tt.chname}} 數量:{{tt.number}}</p>
   
{% endif %}


                    {% endif %}

                    {% endfor %} 
                    <p>便當:</p>

                    {% for tt in tt %}
                    {% if tt.id == ps.orderid %}
                


{% if tt.nature == '便當' %}

<p>菜名:{{tt.chname}} 數量:{{tt.number}}</p>
   
{% endif %}


                    {% endif %}

                    {% endfor %} 


                  </div>
              </div>
            </div>
              {% endif %}

              {% endfor %} 
              {% endfor %} 
          
            </div> 

            

          
          
          
          <!--
          <table>
                <tr>
                <td>用戶名</td>
                  <td>訂單編號</td>
                  <td>送達地址</td>
                  <td>訂貨日期</td>
                  <td>金額</td>      
                </tr>
                {% for post in posts %}
                <tr>
            
                    <td>{{post}}</td>
                    {% set c=0 %}
            
                    {% for ps in pt %}
                    {% if post == ps.username %}
            
                
                    <tr>
                        <td></td>
            
                    <td><input type=\"checkbox\" value=\"{{ps.id}},\" name=\"xx[]\"> {{ps.orderid}}</td>
                    <td>{{ps.address}}</td>
                    <td>{{ps.date}}</td>
                    <td>{{ps.money}}</td>
                </tr>
            
            
            
            
            
                    {% endif %}
            
                    {% endfor %} 
                </tr>
                {% endfor %} 
            </table>
            -->
            
                <button type=\"submit\" class=\"btn btn-outline-primary px-5\">出貨
                </button>
            </form>
          </div>
          <div class=\"col-12 p-3 mb-2\">
            <button type=\"submit\" id=\"refresh01\" class=\"btn btn-outline-primary px-5 mm\">刷新
            </button>

          </div>


            <div id=\"ajaxDiv\"></div>

    </div>

    <div id=\"menu1\" class=\"container tab-pane fade\"><br>




      <div class=\"historical\">
                            
        <form id=\"data_form\" data-request=\"onFormSubmit2\" data-request-update=\"hcc.htm: '#resultDiv2'\">
            
            <div class=\"container\">
                <div class=\"row\">
                <div class=\"col mb-3\">
                    <div class=\"form-label\">
                        <span class=\"\">訂貨日期:</span>
                    </div>
                    
                    <input name=\"datas\"  type=\"date\" class=\"form-control\">
                </div>
                <div class=\"col mb-3\">

                  <div class=\"form-label\">
                      <span class=\"\">用戶編號:</span>
                  </div>
                  
                  <input name=\"texxtt\"  type=\"text\" class=\"form-control\">
              </div>



                <div class=\"col mb-3\">

                    <label for=\"inputPassword\"  class=\"form-label\">送貨地點：</label>
                    <div class=\"col-sm-10\">
                    <select  name=\"addresses\"  aria-label=\"Default select example\" class=\"form-select\">
                        <option value=\"\">無選擇</option>
                        <option value=\"高雄市鳳山區11巷11弄11號(鳳山分店)\">高雄市鳳山區11巷11弄11號(鳳山分店)</option>
                        <option value=\"高雄市苓雅區22巷2弄22號(苓雅分店)\">高雄市苓雅區22巷2弄22號(苓雅分店)</option>
                        <option value=\"高雄市旗山區33巷33弄33號(旗山分店)\">高雄市鳳山區33巷33弄33號(旗山分店)</option>
                        <option value=\"台北市忠孝東路111號(忠孝東路分店)\">台北市忠孝東路111號(忠孝東路分店</option>
                        <option value=\"台中市逢甲區11巷11弄11號(逢甲分店)\">台中市逢甲區11巷11弄11號(逢甲分店)</option>
        
                    </select>
                  </div>
                </div>

                <div class=\"col mb-3\">

                    <label for=\"inputPassword\"  class=\"form-label\">出貨狀態:</label>
                    <div class=\"col-sm-10\">
                    <select  name=\"shippingstatus\"  aria-label=\"Default select example\" class=\"form-select\">
                        <option value=\"\">無選擇</option>
                        <option value=\"未出貨\">未出貨</option>
                        <option value=\"已出貨\">已出貨</option>

        
                    </select>
                  </div>
                </div>



                <!-- 查詢 -->
                <div class=\"col input-group mb-3\">
                    <button type=\"submit\" class=\"btn btn-outline-primary px-5\">
                        查詢
                    </button>
                </div>
                
            </div>
        </div>


<div id=\"resultDiv2\">


</div>


</form>


</div> 













    
    
    </div>
    <div id=\"menu2\" class=\"container tab-pane fade\"><br>
     







      <form id=\"data_form\" data-request=\"onFormSubmiteeting\" enctype=\"multipart/form-data\">



      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">菜名</label>
        <div class=\"col-sm-10\">
          <input type=\"cooknames\" class=\"form-control\" id=\"inputPassword\" name=\"cooknames\">
        </div>
      </div>


      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">價格</label>
        <div class=\"col-sm-10\">
          <input type=\"moneys\" class=\"form-control\" id=\"inputPassword\" name=\"moneyes\">
        </div>
      </div>

      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">熱量</label>
        <div class=\"col-sm-10\">
          <input type=\"cckg\" class=\"form-control\" id=\"inputPassword\" name=\"kkkkg\">
        </div>
      </div>

      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">類型</label>
        <div class=\"col-sm-10\">
          <select  name=\"type\"  aria-label=\"Default select example\" class=\"form-select\">
            <option value=\"主菜\">主菜</option>
            <option value=\"主食\">主食</option>
            <option value=\"配菜\">配菜</option>
        </select>
      
      
      </div>
      </div>

      <div class=\"mb-3 row\">
        <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">圖片名稱</label>
        <div class=\"col-sm-10\">
          <input type=\"cckg\" class=\"form-control\" id=\"inputPassword\" name=\"jpgname\">
        </div>
        <p>圖片本體請自行上傳到food\\themes\\cms-sample\\assets\\img中</p>
      </div>






      <button data-request=\"onFormSubmiteeting\"  class=\"btn btn-outline-primary px-5\" type=\"submit\">
        存檔
                </button>
                
                </form> 

      <!--
        
\t\t\t<div class=\"row mb-3\">
\t\t\t\t<div class=\"col input-group\">
\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t<span class=\"input-group-text\">菜色圖片上傳</span>
\t\t\t\t\t</div>
\t\t\t\t\t<input name=\"myfile\" class=\"btn btn-outline-primary\" type=\"file\" accept=\"\" id=\"myfile\">
          

        
  
          <button data-request=\"onLookUploadFile\" data-request-update=\"look_upload_file: '#uploadFileDiv'\"
\t\t\t\t\t\tdata-request-flash class=\"btn btn-outline-primary px-5\" type=\"submit\">
\t\t\t\t\t\t查看檔案
\t\t\t\t\t</button>

\t\t\t\t</div>
\t\t\t</div>
   
           -->
    </div>

    <div id=\"menu3\" class=\"container tab-pane fade\"><br>
     

        


      <table>
        <tr>
        <td>菜名</td>
          <td>價格</td>
          <td>熱量</td>
          <td>圖片</td>

        </tr>
        {% for psser in psser %}


    
        
            <tr>

            <td>{{psser.name}}</td>
            <td>{{psser.cc}}</td>
            <td>{{psser.money}}</td>
            <td><img src=\"http://clovershopping.epizy.com/food/themes/cms-sample/assets/img/{{psser.name}}.jpg\"  style=\"height: 150px;width: 200px;\"></td>
        </tr>
    
    
    
    

        </tr>
        {% endfor %} 
    </table>








    
    </div>







  </div>









</div>


{% endif %}", "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/backstage.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 74, "set" => 77);
        static $filters = array("escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
