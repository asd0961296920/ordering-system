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

/* E:\xampp\htdocs\food/themes/cms-sample/pages/backstage.htm */
class __TwigTemplate_04a68a1d6fd938362539af28fc546b6757f83e5059e910869ee26e76b9e66998 extends \Twig\Template
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
     
        <form id=\"data_form\" data-request=\"onFormSubmit\">
          <div class=\"accordion\" id=\"accordionExample\">
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 45
                echo "
<div class=\"\"><p>客戶編號：";
                // line 46
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["post"], 46, $this->source), "html", null, true);
                echo "</p></div>
              ";
                // line 47
                $context["c"] = 0;
                // line 48
                echo "      
              ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pt"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ps"]) {
                    // line 50
                    echo "
              ";
                    // line 51
                    if (($context["post"] == twig_get_attribute($this->env, $this->source, $context["ps"], "username", [], "any", false, false, true, 51))) {
                        // line 52
                        echo "              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#cc";
                        // line 54
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                        echo "\" aria-expanded=\"false\" aria-controls=\"cc";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                        echo "\">
                    <input type=\"checkbox\" value=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "id", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo ",\" name=\"xx[]\">
                    訂單編號： ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                        echo "  送達地址： ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "address", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                        echo "　訂貨日期：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "date", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                        echo "　總金額：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "money", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                        echo "
                  </button>
                </h2>
                <div id=\"cc";
                        // line 59
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo "\" data-bs-parent=\"#accordionFlushExample\">
                  <div class=\"accordion-body\">
                    <p>單點:</p>
                    ";
                        // line 62
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["tt"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                            // line 63
                            echo "                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["tt"], "id", [], "any", false, false, true, 63) == twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 63))) {
                                // line 64
                                echo "                


";
                                // line 67
                                if ((twig_get_attribute($this->env, $this->source, $context["tt"], "nature", [], "any", false, false, true, 67) == "單點")) {
                                    // line 68
                                    echo "
<p>菜名:";
                                    // line 69
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "chname", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                                    echo " 數量:";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "number", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                                    echo "</p>
   
";
                                }
                                // line 72
                                echo "

                    ";
                            }
                            // line 75
                            echo "
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo " 
                    <p>便當:</p>

                    ";
                        // line 79
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["tt"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
                            // line 80
                            echo "                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["tt"], "id", [], "any", false, false, true, 80) == twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 80))) {
                                // line 81
                                echo "                


";
                                // line 84
                                if ((twig_get_attribute($this->env, $this->source, $context["tt"], "nature", [], "any", false, false, true, 84) == "便當")) {
                                    // line 85
                                    echo "
<p>菜名:";
                                    // line 86
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "chname", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                                    echo " 數量:";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tt"], "number", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                                    echo "</p>
   
";
                                }
                                // line 89
                                echo "

                    ";
                            }
                            // line 92
                            echo "
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 93
                        echo " 


                  </div>
              </div>
            </div>
              ";
                    }
                    // line 100
                    echo "
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ps'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo " 
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
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
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 121
                echo "                <tr>
            
                    <td>";
                // line 123
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["post"], 123, $this->source), "html", null, true);
                echo "</td>
                    ";
                // line 124
                $context["c"] = 0;
                // line 125
                echo "            
                    ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pt"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ps"]) {
                    // line 127
                    echo "                    ";
                    if (($context["post"] == twig_get_attribute($this->env, $this->source, $context["ps"], "username", [], "any", false, false, true, 127))) {
                        // line 128
                        echo "            
                
                    <tr>
                        <td></td>
            
                    <td><input type=\"checkbox\" value=\"";
                        // line 133
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "id", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                        echo ",\" name=\"xx[]\"> ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "orderid", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                        echo "</td>
                    <td>";
                        // line 134
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "address", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                        echo "</td>
                    <td>";
                        // line 135
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "date", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                        echo "</td>
                    <td>";
                        // line 136
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ps"], "money", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo "</td>
                </tr>
            
            
            
            
            
                    ";
                    }
                    // line 144
                    echo "            
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ps'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo " 
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo " 
            </table>
            -->
            
                <button type=\"submit\" class=\"btn btn-outline-primary px-5\">出貨
                </button>
            </form>


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
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["psser"]);
            foreach ($context['_seq'] as $context["_key"] => $context["psser"]) {
                // line 361
                echo "

    
        
            <tr>

            <td>";
                // line 367
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["psser"], "name", [], "any", false, false, true, 367), 367, $this->source), "html", null, true);
                echo "</td>
            <td>";
                // line 368
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["psser"], "cc", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
                echo "</td>
            <td>";
                // line 369
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["psser"], "money", [], "any", false, false, true, 369), 369, $this->source), "html", null, true);
                echo "</td>
            <td><img src=\"http://localhost/food/themes/cms-sample/assets/img/";
                // line 370
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["psser"], "name", [], "any", false, false, true, 370), 370, $this->source), "html", null, true);
                echo ".jpg\"  style=\"height: 150px;width: 200px;\"></td>
        </tr>
    
    
    
    

        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['psser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 378
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
        return "E:\\xampp\\htdocs\\food/themes/cms-sample/pages/backstage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 378,  584 => 370,  580 => 369,  576 => 368,  572 => 367,  564 => 361,  560 => 360,  345 => 147,  337 => 145,  330 => 144,  319 => 136,  315 => 135,  311 => 134,  305 => 133,  298 => 128,  295 => 127,  291 => 126,  288 => 125,  286 => 124,  282 => 123,  278 => 121,  274 => 120,  254 => 102,  247 => 101,  240 => 100,  231 => 93,  224 => 92,  219 => 89,  211 => 86,  208 => 85,  206 => 84,  201 => 81,  198 => 80,  194 => 79,  189 => 76,  182 => 75,  177 => 72,  169 => 69,  166 => 68,  164 => 67,  159 => 64,  156 => 63,  152 => 62,  144 => 59,  132 => 56,  128 => 55,  122 => 54,  118 => 53,  115 => 52,  113 => 51,  110 => 50,  106 => 49,  103 => 48,  101 => 47,  97 => 46,  94 => 45,  90 => 44,  57 => 13,  55 => 12,  47 => 6,  41 => 2,  39 => 1,);
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
     
        <form id=\"data_form\" data-request=\"onFormSubmit\">
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
            <td><img src=\"http://localhost/food/themes/cms-sample/assets/img/{{psser.name}}.jpg\"  style=\"height: 150px;width: 200px;\"></td>
        </tr>
    
    
    
    

        </tr>
        {% endfor %} 
    </table>








    
    </div>







  </div>









</div>


{% endif %}", "E:\\xampp\\htdocs\\food/themes/cms-sample/pages/backstage.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 44, "set" => 47);
        static $filters = array("escape" => 46);
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
