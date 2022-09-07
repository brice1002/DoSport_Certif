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
class __TwigTemplate_77cbec51db78441c8cfab26d318c87c228b2d6e380a53ed26d88e8ef703780e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productCategory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productCategory.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/productCategory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nos produits - Do Sport
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
\t<div class=\"container-fluid mt-5\">
\t\t";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 9, $this->source); })()), 0, [], "array", false, false, false, 9), "category", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "1")) {
            // line 10
            echo "\t\t\t<h2 class=\"card-title\">Nos produits pour hommes</h2>
\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 11, $this->source); })()), 0, [], "array", false, false, false, 11), "category", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == "2")) {
            // line 12
            echo "\t\t\t<h2 class=\"card-title\">Nos produits pour femmes</h2>
\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 13, $this->source); })()), 0, [], "array", false, false, false, 13), "category", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13) == "3")) {
            // line 14
            echo "\t\t\t<h2 class=\"card-title\">Nos produits pour enfants</h2>
\t\t";
        }
        // line 16
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_VAC/leslie-jones-urBiLDuUhMU-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"Image vêtement\">
\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "category", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23) == "1")) {
            // line 24
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements hommes</h5>
\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 25, $this->source); })()), 0, [], "array", false, false, false, 25), "category", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) == "2")) {
            // line 26
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements femmes</h5>
\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 27, $this->source); })()), 0, [], "array", false, false, false, 27), "category", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27) == "3")) {
            // line 28
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements enfants</h5>
\t\t\t\t\t\t";
        }
        // line 30
        echo "
\t\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab velit sunt perspiciatis!</p>
\t\t\t\t\t\t";
        // line 34
        echo "\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_categoryVAC", ["category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "category", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "categoryVAC" => 1]), "html", null, true);
        echo "\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_VAC/luis-felipe-lins-LG88A2XgIXY-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"Image chaussure\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 42, $this->source); })()), 0, [], "array", false, false, false, 42), "category", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) == "1")) {
            // line 43
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures hommes</h5>
\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 44, $this->source); })()), 0, [], "array", false, false, false, 44), "category", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44) == "2")) {
            // line 45
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures femmes</h5>
\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 46, $this->source); })()), 0, [], "array", false, false, false, 46), "category", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46) == "3")) {
            // line 47
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures enfants</h5>
\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iste maxime voluptatum.</p>
\t\t\t\t\t\t<a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_categoryVAC", ["category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 50, $this->source); })()), 0, [], "array", false, false, false, 50), "category", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "categoryVAC" => 3]), "html", null, true);
        echo "\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_VAC/onur-binay-4401uqU9bf8-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"Image accessoire\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 58, $this->source); })()), 0, [], "array", false, false, false, 58), "category", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58) == "1")) {
            // line 59
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires hommes</h5>
\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 60, $this->source); })()), 0, [], "array", false, false, false, 60), "category", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) == "2")) {
            // line 61
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires femmes</h5>
\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 62, $this->source); })()), 0, [], "array", false, false, false, 62), "category", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62) == "3")) {
            // line 63
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires enfants</h5>
\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptas adipisci quas.</p>
\t\t\t\t\t\t<a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_categoryVAC", ["category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 66, $this->source); })()), 0, [], "array", false, false, false, 66), "category", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "categoryVAC" => 2]), "html", null, true);
        echo "\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  210 => 66,  207 => 65,  203 => 63,  201 => 62,  198 => 61,  196 => 60,  193 => 59,  191 => 58,  186 => 56,  177 => 50,  174 => 49,  170 => 47,  168 => 46,  165 => 45,  163 => 44,  160 => 43,  158 => 42,  153 => 40,  143 => 34,  140 => 32,  137 => 30,  133 => 28,  131 => 27,  128 => 26,  126 => 25,  123 => 24,  121 => 23,  115 => 20,  109 => 16,  105 => 14,  103 => 13,  100 => 12,  98 => 11,  95 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos produits - Do Sport
{% endblock %}

{% block content %}

\t<div class=\"container-fluid mt-5\">
\t\t{% if products[0].category.id == '1' %}
\t\t\t<h2 class=\"card-title\">Nos produits pour hommes</h2>
\t\t{% elseif products[0].category.id == '2' %}
\t\t\t<h2 class=\"card-title\">Nos produits pour femmes</h2>
\t\t{% elseif products[0].category.id == '3' %}
\t\t\t<h2 class=\"card-title\">Nos produits pour enfants</h2>
\t\t{% endif %}

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/img_VAC/leslie-jones-urBiLDuUhMU-unsplash.jpg') }}\" alt=\"Image vêtement\">
\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t{% if products[0].category.id == '1' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements hommes</h5>
\t\t\t\t\t\t{% elseif products[0].category.id == '2' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements femmes</h5>
\t\t\t\t\t\t{% elseif products[0].category.id == '3' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements enfants</h5>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{# <h5 class=\"card-title\">Vêtements</h5> #}
\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab velit sunt perspiciatis!</p>
\t\t\t\t\t\t{# <a href=\"{{ path('products_categoryVAC', {'category': products[0].category.id, 'categoryVAC' : products[0].categoryVAC.id }) }}\" class=\"btn btn-primary\">En savoir +</a> #}
\t\t\t\t\t\t<a href=\"{{ path('products_categoryVAC', {'category' : products[0].category.id, 'categoryVAC' : 1} ) }}\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/img_VAC/luis-felipe-lins-LG88A2XgIXY-unsplash.jpg') }}\" alt=\"Image chaussure\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t{% if products[0].category.id == '1' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures hommes</h5>
\t\t\t\t\t\t{% elseif products[0].category.id == '2' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures femmes</h5>
\t\t\t\t\t\t{% elseif products[0].category.id == '3' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures enfants</h5>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iste maxime voluptatum.</p>
\t\t\t\t\t\t<a href=\"{{ path('products_categoryVAC', {'category' : products[0].category.id, 'categoryVAC' : 3} ) }}\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/img_VAC/onur-binay-4401uqU9bf8-unsplash.jpg') }}\" alt=\"Image accessoire\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t{% if products[0].category.id == '1' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires hommes</h5>
\t\t\t\t\t\t{% elseif products[0].category.id == '2' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires femmes</h5>
\t\t\t\t\t\t{% elseif products[0].category.id == '3' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires enfants</h5>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptas adipisci quas.</p>
\t\t\t\t\t\t<a href=\"{{ path('products_categoryVAC', {'category' : products[0].category.id, 'categoryVAC' : 2} ) }}\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "product/productCategory.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\product\\productCategory.html.twig");
    }
}
