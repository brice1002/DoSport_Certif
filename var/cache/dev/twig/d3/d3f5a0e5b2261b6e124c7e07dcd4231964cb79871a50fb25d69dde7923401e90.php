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
class __TwigTemplate_e203391bdbe48789d20944a1d8a8b8c77ddf15a5ba7da9f904681d1864308ee4 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "category", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) == "1")) {
            // line 41
            echo "\t\t\t\t\t\t\t<h2 class=\"card-title\">Nos produits pour hommes</h2>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 42, $this->source); })()), 0, [], "array", false, false, false, 42), "category", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) == "2")) {
            // line 43
            echo "\t\t\t\t\t\t\t<h2 class=\"card-title\">Nos produits pour femmes</h2>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 44, $this->source); })()), 0, [], "array", false, false, false, 44), "category", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44) == "3")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 54, $this->source); })()), 0, [], "array", false, false, false, 54), "category", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) == "1")) {
            // line 55
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements hommes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 56, $this->source); })()), 0, [], "array", false, false, false, 56), "category", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56) == "2")) {
            // line 57
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements femmes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 58, $this->source); })()), 0, [], "array", false, false, false, 58), "category", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58) == "3")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 72, $this->source); })()), 0, [], "array", false, false, false, 72), "category", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72) == "1")) {
            // line 73
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures hommes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 74, $this->source); })()), 0, [], "array", false, false, false, 74), "category", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74) == "2")) {
            // line 75
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures femmes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 76, $this->source); })()), 0, [], "array", false, false, false, 76), "category", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76) == "3")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 88, $this->source); })()), 0, [], "array", false, false, false, 88), "category", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88) == "1")) {
            // line 89
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires hommes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 90
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 90, $this->source); })()), 0, [], "array", false, false, false, 90), "category", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90) == "2")) {
            // line 91
            echo "\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires femmes</h5>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 92, $this->source); })()), 0, [], "array", false, false, false, 92), "category", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92) == "3")) {
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
        return array (  211 => 95,  207 => 93,  205 => 92,  202 => 91,  200 => 90,  197 => 89,  195 => 88,  190 => 86,  181 => 79,  177 => 77,  175 => 76,  172 => 75,  170 => 74,  167 => 73,  165 => 72,  160 => 70,  151 => 63,  148 => 61,  144 => 59,  142 => 58,  139 => 57,  137 => 56,  134 => 55,  132 => 54,  126 => 51,  119 => 46,  115 => 45,  113 => 44,  110 => 43,  108 => 42,  105 => 41,  103 => 40,  98 => 37,  95 => 33,  93 => 19,  91 => 16,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos produits - Do Sport
{% endblock %}

{% block content %}
\t{# <div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<h3>Filtrer</h3>
\t\t\t\t{{ form(form) }}
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<h1>Nos produits</h1>
\t
\t\t\t\t<div class=\"row product-container\"> #}
\t{# <pre>
\t    {{ dump(products) }}
\t</pre> #}
\t{# {% for product in products %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"product-item text-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('product', {'slug': product.slug} ) }}\"><img src=\"/uploads/{{ product.illustration}}\" alt=\"{{ product.name }}\" class=\"img-fluid\"></a>
\t\t\t\t\t\t\t\t<h5>{{ product.name }}</h5>
\t\t\t\t\t\t\t\t<span class=\"product-subtitle\">{{ product.subtitle}}</span>
\t\t\t\t\t\t\t\t<span class=\"product-price\">{{ (product.price / 100)|number_format(2, ',', '.') }}
\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> #}

\t\t{# <pre>
\t\t\t{{ dump(products[0].category.id) }}
\t\t</pre> #}


\t\t<div class=\"container-fluid mt-5\"> 
\t\t{% if products[0].category.id == '1' %}
\t\t\t\t\t\t\t<h2 class=\"card-title\">Nos produits pour hommes</h2>
\t\t\t\t\t\t\t{% elseif products[0].category.id == '2' %}
\t\t\t\t\t\t\t<h2 class=\"card-title\">Nos produits pour femmes</h2>
\t\t\t\t\t\t\t{% elseif products[0].category.id == '3' %}
\t\t\t\t\t\t\t<h2 class=\"card-title\">Nos produits pour enfants</h2>
\t\t\t\t\t\t\t{% endif %} 
\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/img_VAC/leslie-jones-urBiLDuUhMU-unsplash.jpg') }}\" alt=\"Image vêtement\">
\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t{% if products[0].category.id == '1' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements hommes</h5>
\t\t\t\t\t\t\t{% elseif products[0].category.id == '2' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements femmes</h5>
\t\t\t\t\t\t\t{% elseif products[0].category.id == '3' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Vêtements enfants</h5>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{# <h5 class=\"card-title\">Vêtements</h5> #}
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab velit sunt perspiciatis!</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/img_VAC/luis-felipe-lins-LG88A2XgIXY-unsplash.jpg') }}\" alt=\"Image chaussure\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t{% if products[0].category.id == '1' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures hommes</h5>
\t\t\t\t\t\t\t{% elseif products[0].category.id == '2' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures femmes</h5>
\t\t\t\t\t\t\t{% elseif products[0].category.id == '3' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures enfants</h5>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iste maxime voluptatum.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/img_VAC/onur-binay-4401uqU9bf8-unsplash.jpg') }}\" alt=\"Image accessoire\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t{% if products[0].category.id == '1' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires hommes</h5>
\t\t\t\t\t\t\t{% elseif products[0].category.id == '2' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires femmes</h5>
\t\t\t\t\t\t\t{% elseif products[0].category.id == '3' %}
\t\t\t\t\t\t\t<h5 class=\"card-title\">Accessoires enfants</h5>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptas adipisci quas.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir +</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
{% endblock %}
", "product/productCategory.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/product/productCategory.html.twig");
    }
}
