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
class __TwigTemplate_3e696dbef7d42255bb2d43aa8cf1bff5de2b60fd5eea279470e77c9539d9968f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon panier -Do Sport
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<h1>Mon panier</h1>
\tRetrouvez l'ensemble des produits que vous avez ajouté à votre panier

\t";
        // line 13
        echo "
\t";
        // line 15
        echo "\t";
        if ((twig_length_filter($this->env, ($context["cart"] ?? null)) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 64), "price", [], "any", false, false, false, 64) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 64)));
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
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["cart"] ?? null)), "html", null, true);
            echo "</b><br>
\t\t\t<b>Total de mon panier :</b>
\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
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
        return array (  206 => 86,  197 => 79,  190 => 75,  185 => 73,  180 => 71,  174 => 67,  167 => 65,  165 => 64,  158 => 60,  154 => 59,  149 => 57,  145 => 56,  139 => 53,  135 => 52,  131 => 51,  126 => 49,  122 => 48,  116 => 45,  112 => 44,  104 => 41,  98 => 37,  94 => 36,  91 => 35,  89 => 34,  86 => 33,  70 => 16,  67 => 15,  64 => 13,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/cart/index.html.twig");
    }
}
