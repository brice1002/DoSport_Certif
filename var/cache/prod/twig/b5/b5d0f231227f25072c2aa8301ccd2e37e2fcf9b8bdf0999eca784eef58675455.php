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

/* product/productCategory.html.twig */
class __TwigTemplate_1e6c2bcd8f169a92d9c756facb390460ddb2c031ae2a039a199b36061ca92d2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "product/productCategory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nos produits - Do Sport
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t";
        // line 16
        echo "\t";
        // line 19
        echo "\t";
        // line 33
        echo "
\t\t";
        // line 37
        echo "

\t\t<div class=\"container-fluid mt-5\"> 
\t\t";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["products"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "category", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) == "1")) {
            // line 41
            echo "\t\t\t\t\t\t\t<h2 class=\"card-title\">Nos produits pour hommes</h2>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 =         // line 42
($context["products"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "category", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) == "2")) {
            // line 43
            echo "\t\t\t\t\t\t\t<h2 class=\"card-title\">Nos produits pour femmes</h2>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 =         // line 44
($context["products"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "category", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44) == "3")) {
            // line 45
            echo "\t\t\t\t\t\t\t<h2 class=\"card-title\">Nos produits pour enfants</h2>
\t\t\t\t\t\t\t";
        }
        // line 46
        echo " 
\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_VAC/leslie-jones-urBiLDuUhMU-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"Image vêtement\">
\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["products"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "category", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) == "1")) {
            // line 55
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements hommes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 =         // line 56
($context["products"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "category", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56) == "2")) {
            // line 57
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements femmes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 =         // line 58
($context["products"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "category", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58) == "3")) {
            // line 59
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements enfants</h5>
\t\t\t\t\t\t\t";
        }
        // line 61
        echo "
\t\t\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab velit sunt perspiciatis!</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_VAC/luis-felipe-lins-LG88A2XgIXY-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"Image chaussure\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["products"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "category", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72) == "1")) {
            // line 73
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures hommes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 =         // line 74
($context["products"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "category", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74) == "2")) {
            // line 75
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures femmes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 =         // line 76
($context["products"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), "category", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76) == "3")) {
            // line 77
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures enfants</h5>
\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iste maxime voluptatum.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_VAC/onur-binay-4401uqU9bf8-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"Image accessoire\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["products"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "category", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88) == "1")) {
            // line 89
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires hommes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 =         // line 90
($context["products"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "category", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90) == "2")) {
            // line 91
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires femmes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 =         // line 92
($context["products"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), "category", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92) == "3")) {
            // line 93
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires enfants</h5>
\t\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptas adipisci quas.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "product/productCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 95,  177 => 93,  175 => 92,  172 => 91,  170 => 90,  167 => 89,  165 => 88,  160 => 86,  151 => 79,  147 => 77,  145 => 76,  142 => 75,  140 => 74,  137 => 73,  135 => 72,  130 => 70,  121 => 63,  118 => 61,  114 => 59,  112 => 58,  109 => 57,  107 => 56,  104 => 55,  102 => 54,  96 => 51,  89 => 46,  85 => 45,  83 => 44,  80 => 43,  78 => 42,  75 => 41,  73 => 40,  68 => 37,  65 => 33,  63 => 19,  61 => 16,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/productCategory.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/product/productCategory.html.twig");
    }
}
