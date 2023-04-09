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

/* D:\xampp\htdocs\food/themes/cms-sample/layouts/default.htm */
class __TwigTemplate_686b07e74cafcd7aef523cfa2176dafe91d80725c954a0b2c105c1aa73933715 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_description", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
        <link rel=\"icon\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/images/favicon.ico");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/css/app.css");
        echo "\">
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js\"></script>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"slick/slick.min.js\"></script>
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/plubic.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("https://fonts.googleapis.com/earlyaccess/cwtexyen.css");
        echo "\" rel=\"stylesheet\">
\t
        <!-- Bootstrap 4 -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap-4.4.1/css/bootstrap.min.css");
        echo "\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t
        ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 22
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 23
        echo "        <link href=\"assets/css/plubic.css\" rel=\"stylesheet\" />    
        <link href=\"https://fonts.googleapis.com/earlyaccess/cwtexyen.css\" rel=\"stylesheet\" />   


    ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 28
        echo "    <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/layout.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/framework.css");
        echo "\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">

\t\t<!-- jQuery & SweetAalert -->
        <script type=\"text/javascript\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/jquery-3.4.1.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/sweetalert2.all.min.js");
        echo "\"></script>

        <!-- 台灣三層式地址 TWZipCode -->
        <script type=\"text/javascript\" src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/jquery.twzipcode.min.js");
        echo "\"></script>

    </head>
<body>

    <header id=\"app-header\" class=\"app-header\">
        ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "    </header>



    <main id=\"app-content\" class=\"app-content\" role=\"main\">
        ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/content"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "    </main>

    <footer id=\"app-footer\" class=\"app-footer\">
        ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "    </footer>
    
</div>

<script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/manifest.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/vendor.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/app.js");
        echo "\"></script>


";
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 64
        echo "
";
        // line 65
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 66
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 68
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\food/themes/cms-sample/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 68,  192 => 67,  181 => 66,  177 => 65,  174 => 64,  171 => 63,  165 => 60,  161 => 59,  157 => 58,  151 => 54,  147 => 53,  142 => 50,  138 => 49,  131 => 44,  127 => 43,  118 => 37,  112 => 34,  108 => 33,  101 => 29,  96 => 28,  94 => 22,  88 => 23,  85 => 22,  82 => 21,  77 => 19,  71 => 16,  67 => 15,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <link rel=\"icon\" href=\"{{ 'assets/public/images/favicon.ico'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/public/css/app.css'|theme }}\">
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js\"></script>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"slick/slick.min.js\"></script>
        <link href=\"{{ 'assets/css/plubic.css' |theme}}\" rel=\"stylesheet\">
        <link href=\"{{ 'https://fonts.googleapis.com/earlyaccess/cwtexyen.css' |theme}}\" rel=\"stylesheet\">
\t
        <!-- Bootstrap 4 -->
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/bootstrap-4.4.1/css/bootstrap.min.css'|theme }}\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t
        {% styles %}
        {% put styles %}
        <link href=\"assets/css/plubic.css\" rel=\"stylesheet\" />    
        <link href=\"https://fonts.googleapis.com/earlyaccess/cwtexyen.css\" rel=\"stylesheet\" />   


    {% endput %}
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/layout.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/framework.css'|theme }}\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">

\t\t<!-- jQuery & SweetAalert -->
        <script type=\"text/javascript\" src=\"{{ 'assets/public/js/jquery-3.4.1.min.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/public/js/sweetalert2.all.min.js'|theme }}\"></script>

        <!-- 台灣三層式地址 TWZipCode -->
        <script type=\"text/javascript\" src=\"{{ 'assets/public/js/jquery.twzipcode.min.js'|theme }}\"></script>

    </head>
<body>

    <header id=\"app-header\" class=\"app-header\">
        {% partial 'site/header' %}
    </header>



    <main id=\"app-content\" class=\"app-content\" role=\"main\">
        {% partial 'site/content' %}
    </main>

    <footer id=\"app-footer\" class=\"app-footer\">
        {% partial 'site/footer' %}
    </footer>
    
</div>

<script type=\"text/javascript\" src=\"{{ 'assets/public/js/manifest.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/public/js/vendor.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/public/js/app.js'|theme }}\"></script>


{% scripts %}

{% framework %}
{% framework extras %}
{% scripts %}


</body>
</html>", "D:\\xampp\\htdocs\\food/themes/cms-sample/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 21, "put" => 22, "partial" => 43, "scripts" => 63, "framework" => 65);
        static $filters = array("escape" => 7, "theme" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'put', 'partial', 'scripts', 'framework'],
                ['escape', 'theme'],
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
