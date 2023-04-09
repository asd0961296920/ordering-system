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

/* D:\xampp\htdocs\food/themes/cms-sample/pages/order.htm */
class __TwigTemplate_e1613c5c49ca09ae84a604c7ae13bb1ec53b6588e281fea254008b2f4cc686b9 extends \Twig\Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "\t<script>
\t\twindow.location.href = \"/food/on\";
\t</script>
";
        }
        // line 6
        echo "

<input  type=\"hidden\" name=\"user\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["user"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null), 8, $this->source), "html", null, true);
        echo "\">

    <div class=\"atuo\">

        <div class=\"banner\"></div>
        
            <div class=\"tt\">
            <h1>三夜草新概念健康餐盒</h1>
        </div>
        
        <div class=\"man\">

            <div class=\"out\">
<div class=\"sign\">      
    
    
    <script type=\"text/javascript\">
        var time=500;
          \$(function() {
              \$('.atuo').fadeIn();
              \$(\"#cv01\").click(function(){
                \$('.atuo').fadeOut();
                setTimeout(\"top.location.href = '/food/backstage' \",time);
              });
            })
            </script>

";
        // line 35
        if ((($context["useres"] ?? null) == "管理員")) {
            // line 36
            echo "<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"button\" id=\"cv01\">
<!--管理員才看得到的後台按鈕-->
        管理後台
</button>


";
        }
        // line 43
        echo "
<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"button\">
    <a data-request=\"onLogout\" data-request-data=\"redirect: '/on'\">
        登出
    </a>
</button>

</div>   


                <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js\"></script>


                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#home\">購物車</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#menu1\">歷史紀錄</a>
                    </li>





                  </ul>
                








<div class=\"button\">




                <!--分頁內容-->
                  <div class=\"tab-content\">
                    <div id=\"home\" class=\"container tab-pane active\"><br>
                     
                        ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/shop"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "

                    </div>
                    <div id=\"menu1\" class=\"container tab-pane fade\"><br>
                        <div class=\"historical\">
                            
                            <form id=\"data_form\" data-request=\"onFormSubmit2\" data-request-update=\"historical.htm: '#resultDiv'\">
                                
                                <div class=\"container\">
                                    <div class=\"row\">
                                    <div class=\"col mb-3\">
                                        <div class=\"form-label\">
                                            <span class=\"\">訂貨日期:</span>
                                        </div>
                                        
                                        <input name=\"datas\"  type=\"date\" class=\"form-control\">
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


                <div id=\"resultDiv\">

                    ";
        // line 154
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/historical"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 155
        echo "                </div>

     
            </form>














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
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/order.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 155,  210 => 154,  143 => 89,  139 => 88,  92 => 43,  83 => 36,  81 => 35,  51 => 8,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}
\t<script>
\t\twindow.location.href = \"/food/on\";
\t</script>
{% endif %}


<input  type=\"hidden\" name=\"user\" value=\"{{ user['name'] }}\">

    <div class=\"atuo\">

        <div class=\"banner\"></div>
        
            <div class=\"tt\">
            <h1>三夜草新概念健康餐盒</h1>
        </div>
        
        <div class=\"man\">

            <div class=\"out\">
<div class=\"sign\">      
    
    
    <script type=\"text/javascript\">
        var time=500;
          \$(function() {
              \$('.atuo').fadeIn();
              \$(\"#cv01\").click(function(){
                \$('.atuo').fadeOut();
                setTimeout(\"top.location.href = '/food/backstage' \",time);
              });
            })
            </script>

{% if useres == \"管理員\" %}
<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"button\" id=\"cv01\">
<!--管理員才看得到的後台按鈕-->
        管理後台
</button>


{% endif %}

<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"button\">
    <a data-request=\"onLogout\" data-request-data=\"redirect: '/on'\">
        登出
    </a>
</button>

</div>   


                <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js\"></script>


                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#home\">購物車</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#menu1\">歷史紀錄</a>
                    </li>





                  </ul>
                








<div class=\"button\">




                <!--分頁內容-->
                  <div class=\"tab-content\">
                    <div id=\"home\" class=\"container tab-pane active\"><br>
                     
                        {% partial 'site/shop' %}


                    </div>
                    <div id=\"menu1\" class=\"container tab-pane fade\"><br>
                        <div class=\"historical\">
                            
                            <form id=\"data_form\" data-request=\"onFormSubmit2\" data-request-update=\"historical.htm: '#resultDiv'\">
                                
                                <div class=\"container\">
                                    <div class=\"row\">
                                    <div class=\"col mb-3\">
                                        <div class=\"form-label\">
                                            <span class=\"\">訂貨日期:</span>
                                        </div>
                                        
                                        <input name=\"datas\"  type=\"date\" class=\"form-control\">
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


                <div id=\"resultDiv\">

                    {% partial 'site/historical' %}
                </div>

     
            </form>














            </div> 
                    </div>

                </div>
         </div>
    </div>
</div>
        
</div>", "D:\\xampp\\htdocs\\food/themes/cms-sample/pages/order.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "partial" => 88);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
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
