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

/* product/productCategoryVAC.html.twig */
class __TwigTemplate_e0675b63fcccba559eb7c4c2c5804d2e1d0777b7ead71561d9cb3fb354380013 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productCategoryVAC.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productCategoryVAC.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/productCategoryVAC.html.twig", 1);
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
        echo "\t


\t\t<div class=\"container-fluid mt-5\"> 
\t\t\t";
        // line 36
        echo "
\t\t\t<h2 class=\"card-title\">Nos ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 37, $this->source); })()), 0, [], "array", false, false, false, 37), "categoriesVAC", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 37, $this->source); })()), 0, [], "array", false, false, false, 37), "category", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "</h2>

\t\t";
        // line 42
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4 \">

\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 46
            echo "\t\t\t\t\t<div class=\"col mb-3\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"><img src=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<span class=\"product-subtitle\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 51), "html", null, true);
            echo "</span><br>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<span class=\"product-price\">";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53) / 100), 2, ",", "."), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-to-cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-success mb-3 mt-0\">Ajouter au panier</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/productCategoryVAC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 62,  144 => 57,  141 => 56,  136 => 53,  131 => 51,  127 => 50,  118 => 48,  114 => 46,  110 => 45,  105 => 42,  98 => 37,  95 => 36,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos produits - Do Sport
{% endblock %}

{% block content %}
\t


\t\t<div class=\"container-fluid mt-5\"> 
\t\t\t{# {% if products[0].category.id == '1' %}
\t\t\t\t{% if products[0].categoriesVAC.id == '1' %}
\t\t\t\t\t<h2 class=\"card-title\">Nos vêtements hommes</h2>
\t\t\t\t{% elseif products[0].categoriesVAC.id == '2'  %}
\t\t\t\t\t<h2 class=\"card-title\">Nos accessoires hommes</h2>
\t\t\t\t{% elseif products[0].categoriesVAC.id == '3'  %}
\t\t\t\t\t<h2 class=\"card-title\">Nos chaussures hommes</h2>
\t\t\t\t{% endif %}
\t\t\t{% elseif products[0].category.id == '2' %}
\t\t\t\t{% if products[0].categoriesVAC.id == '1' %}
\t\t\t\t\t<h2 class=\"card-title\">Nos vêtements femmes</h2>
\t\t\t\t{% elseif products[0].categoriesVAC.id == '2'  %}
\t\t\t\t\t<h2 class=\"card-title\">Nos accessoires femmes</h2>
\t\t\t\t{% elseif products[0].categoriesVAC.id == '3'  %}
\t\t\t\t\t<h2 class=\"card-title\">Nos chaussures femmes</h2>
\t\t\t\t{% endif %}
\t\t\t{% elseif products[0].category.id == '3' %}
\t\t\t\t{% if products[0].categoriesVAC.id == '1' %}
\t\t\t\t\t<h2 class=\"card-title\">Nos vêtements enfants</h2>
\t\t\t\t{% elseif products[0].categoriesVAC.id == '2'  %}
\t\t\t\t\t<h2 class=\"card-title\">Nos accessoires enfants</h2>
\t\t\t\t{% elseif products[0].categoriesVAC.id == '3'  %}
\t\t\t\t\t<h2 class=\"card-title\">Nos chaussures enfants</h2>
\t\t\t\t{% endif %}
\t\t\t{% endif %} #}

\t\t\t<h2 class=\"card-title\">Nos {{ products[0].categoriesVAC.name }} {{ products[0].category.name }}</h2>

\t\t{# <pre>
\t\t\t{{ dump(products) }}
\t\t</pre> #}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4 \">

\t\t\t\t{% for product in products %}
\t\t\t\t\t<div class=\"col mb-3\">
\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t<a href=\"{{ path('product', {'slug': product.slug} ) }}\"><img src=\"/uploads/{{ product.illustration}}\" class=\"card-img-top\" alt=\"{{ product.name }}\"></a>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ product.name }}</h5>
\t\t\t\t\t\t\t\t<span class=\"product-subtitle\">{{ product.subtitle}}</span><br>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<span class=\"product-price\">{{ (product.price / 100)|number_format(2, ',', '.') }}</strong>
\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t\t{# <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"{{ path('add-to-cart', {'id' : product.id}) }}\" class=\"btn btn-success mb-3 mt-0\">Ajouter au panier</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
{% endblock %}
", "product/productCategoryVAC.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\product\\productCategoryVAC.html.twig");
    }
}
