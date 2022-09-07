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

/* cart/index.html.twig */
class __TwigTemplate_1b0d1aae0fcef8f7f6dc2346003cdec08e32551dab7ba98989e15f9de8ad281c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier -Do Sport
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
        echo "\t<h1>Mon panier</h1>
\tRetrouvez l'ensemble des produits que vous avez ajouté à votre panier

\t";
        // line 13
        echo "
\t";
        // line 15
        echo "\t";
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 15, $this->source); })())) > 0)) {
            // line 16
            echo "
\t\t<table class=\"table mt-3\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>

\t\t\t\t";
            // line 33
            echo "
\t\t\t\t";
            // line 34
            $context["total"] = null;
            // line 35
            echo "
\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 37
                echo "
\t\t\t\t\t<tr>

\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t<img src=\"/uploads/";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "illustration", [], "any", false, false, false, 41), "html", null, true);
                echo "\" alt=\"/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
                echo "\" height=\"75px\"><br>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t<small>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 45), "subtitle", [], "any", false, false, false, 45), "html", null, true);
                echo "</small>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/minus-sign.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Retirer\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\tx ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51), "html", null, true);
                echo "
\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-to-cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Ajouter\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
                // line 56
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 56), "price", [], "any", false, false, false, 56) / 100), 2, ",", "."), "html", null, true);
                echo "€</td>
\t\t\t\t\t\t<td>";
                // line 57
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 57), "price", [], "any", false, false, false, 57) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 57)) / 100), 2, ",", "."), "html", null, true);
                echo "€</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo " \" onclick=\"return confirm('Etes vous sur de vouloir supprimer ?');\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\" height=\"18px\" alt=\"Supprimer mon produit\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                // line 64
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 64, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 64), "price", [], "any", false, false, false, 64) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 64)));
                // line 65
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"text-right\">
\t\t\t<b>Nombre de produit(s) :
\t\t\t\t";
            // line 71
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 71, $this->source); })())), "html", null, true);
            echo "</b><br>
\t\t\t<b>Total de mon panier :</b>
\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 73, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo "
\t\t\t€<br>
\t\t\t<a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>
\t\t</div>

\t";
        } else {
            // line 79
            echo "
\t\t<hr>
\t\t<h3 class=\"mt-5 mb-5\">Vous n'avez rien dans votre panier !</h3>
\t\t<hr>


\t";
        }
        // line 86
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 86,  227 => 79,  220 => 75,  215 => 73,  210 => 71,  204 => 67,  197 => 65,  195 => 64,  188 => 60,  184 => 59,  179 => 57,  175 => 56,  169 => 53,  165 => 52,  161 => 51,  156 => 49,  152 => 48,  146 => 45,  142 => 44,  134 => 41,  128 => 37,  124 => 36,  121 => 35,  119 => 34,  116 => 33,  100 => 16,  97 => 15,  94 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier -Do Sport
{% endblock %}

{% block content %}
\t<h1>Mon panier</h1>
\tRetrouvez l'ensemble des produits que vous avez ajouté à votre panier

\t{# <pre>
\t\t\t{{ dump(cart) }}
\t\t</pre> #}

\t{# {% if not (cart is empty) %} #}
\t{% if cart|length > 0 %}

\t\t<table class=\"table mt-3\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>

\t\t\t\t{# <pre>
\t\t\t\t\t\t\t{{ dump(cart) }}
\t\t\t\t\t\t</pre> #}

\t\t\t\t{% set total = null %}

\t\t\t\t{% for product in cart %}

\t\t\t\t\t<tr>

\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t<img src=\"/uploads/{{ product.product.illustration }}\" alt=\"/uploads/{{ product.product.name }}\" height=\"75px\"><br>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{  product.product.name }}<br>
\t\t\t\t\t\t\t<small>{{ product.product.subtitle }}</small>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('decrease_to_cart', { 'id' : product.product.id }) }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/minus-sign.png') }}\" height=\"12px\" alt=\"Retirer\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\tx {{  product.quantity }}
\t\t\t\t\t\t\t<a href=\"{{ path('add-to-cart', { 'id' : product.product.id }) }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/plus.png') }}\" height=\"12px\" alt=\"Ajouter\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ (product.product.price / 100)|number_format(2, ',', '.') }}€</td>
\t\t\t\t\t\t<td>{{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '.') }}€</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('delete_to_cart', { 'id' :product.product.id}) }} \" onclick=\"return confirm('Etes vous sur de vouloir supprimer ?');\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/delete.png') }}\" height=\"18px\" alt=\"Supprimer mon produit\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% set total = total + (product.product.price * product.quantity) %}

\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"text-right\">
\t\t\t<b>Nombre de produit(s) :
\t\t\t\t{{ cart|length }}</b><br>
\t\t\t<b>Total de mon panier :</b>
\t\t\t{{ (total / 100)|number_format(2, ',', '.') }}
\t\t\t€<br>
\t\t\t<a href=\"{{ path('order') }}\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>
\t\t</div>

\t{% else %}

\t\t<hr>
\t\t<h3 class=\"mt-5 mb-5\">Vous n'avez rien dans votre panier !</h3>
\t\t<hr>


\t{% endif %}

{% endblock %}
", "cart/index.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\cart\\index.html.twig");
    }
}
