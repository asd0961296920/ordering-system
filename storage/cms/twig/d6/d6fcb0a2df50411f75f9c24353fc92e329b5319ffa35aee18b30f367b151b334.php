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

/* E:\xampp\htdocs\food/themes/cms-sample/pages/mem.htm */
class __TwigTemplate_a109a9f1b57d943b17d5bee0d3b0db2dd06ec4d1c5f913099eb875eaf8be461a extends \Twig\Template
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
<div class=\"atuo\">

    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">

        <div class=\"out\">







            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js\"></script>
              <nav>
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                  <button class=\"nav-link active\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-home\" type=\"button\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">個人資料</button>
   <button class=\"nav-link\" id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-profile\" type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">健康資料</button>
              </nav>








                    


                <!--分頁內容-->
                <div class=\"tab-content\" id=\"nav-tabContent\">
                  <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                    
                    ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/member"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "
                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cccd"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 52
            echo "                    <form id=\"data_form4\" class=\"fdd\" data-request=\"onFccc\">















                    <div class=\"mb-3 row\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">是否有三高:</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"threehigh\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "threehigh", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "\">
                      </div>
                    </div>
                    <div class=\"mb-3 row\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">是否有糖尿病:</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"diabetes\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "diabetes", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\">
                      </div>
                    </div>

                    <div class=\"mb-3 row\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">身高:</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"tell\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "tell", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "\">
                      </div>
                    </div>
                    <div class=\"mb-3 row\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">體重:</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"high\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "high", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "\">
                      </div>
                    </div>



                    </form>


                    <button type=\"submit\" id=\"wss2\" class=\"btn btn-outline-secondary\">修改資料</button>




                    <script>
                      \$(document).ready(function(){
                    \$(\"#wss2\").click(function(){
                      \$('#data_form4').request('onFcccc', {
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
        // line 133
        echo " 







                  </div>
                                  </div>












</div>

</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\food/themes/cms-sample/pages/mem.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 133,  152 => 90,  143 => 84,  133 => 77,  124 => 71,  103 => 52,  99 => 51,  94 => 48,  90 => 47,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}
\t<script>
\t\twindow.location.href = \"/food/on\";
\t</script>
{% endif %}

<div class=\"atuo\">

    <div class=\"banner\"></div>
    
        <div class=\"tt\">
        <h1>三夜草新概念健康餐盒</h1>
    </div>
    
    <div class=\"man\">

        <div class=\"out\">







            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js\"></script>
              <nav>
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                  <button class=\"nav-link active\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-home\" type=\"button\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">個人資料</button>
   <button class=\"nav-link\" id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-profile\" type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">健康資料</button>
              </nav>








                    


                <!--分頁內容-->
                <div class=\"tab-content\" id=\"nav-tabContent\">
                  <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                    
                    {% partial 'site/member' %}

                  </div>
                  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    {% for post in cccd %}
                    <form id=\"data_form4\" class=\"fdd\" data-request=\"onFccc\">















                    <div class=\"mb-3 row\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">是否有三高:</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"threehigh\" value=\"{{post.threehigh}}\">
                      </div>
                    </div>
                    <div class=\"mb-3 row\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">是否有糖尿病:</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"diabetes\" value=\"{{post.diabetes}}\">
                      </div>
                    </div>

                    <div class=\"mb-3 row\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">身高:</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"tell\" value=\"{{post.tell}}\">
                      </div>
                    </div>
                    <div class=\"mb-3 row\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">體重:</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword\" name=\"high\" value=\"{{post.high}}\">
                      </div>
                    </div>



                    </form>


                    <button type=\"submit\" id=\"wss2\" class=\"btn btn-outline-secondary\">修改資料</button>




                    <script>
                      \$(document).ready(function(){
                    \$(\"#wss2\").click(function(){
                      \$('#data_form4').request('onFcccc', {
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







                  </div>
                                  </div>












</div>

</div>", "E:\\xampp\\htdocs\\food/themes/cms-sample/pages/mem.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "partial" => 47, "for" => 51);
        static $filters = array("escape" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial', 'for'],
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
