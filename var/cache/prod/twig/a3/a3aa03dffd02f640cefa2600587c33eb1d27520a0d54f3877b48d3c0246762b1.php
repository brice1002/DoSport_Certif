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

/* account/order.html.twig */
class __TwigTemplate_1d7b3fc5648b64e3841de189cc6933d721b7d095e8980143946f687539ff2c3f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes commandes - Do Sport
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "

\t<h1>Mes commandes</h1>
\tC'est ici que vous pourrez gérer toutes vos commandes.<br>
\t
\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retour</a>


    ";
        // line 16
        echo "


    ";
        // line 19
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) == 0)) {
            // line 20
            echo "    \t<hr>

        <p class=\"text-center\">
            Vous n'avez pas encore passé de commande.  
        </p>
    ";
        } else {
            // line 26
            echo "        <table class=\"table mt-4\">
            <thead>
                <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Passée le</th>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 38
                echo " 
";
                // line 42
                echo "                  <tr>
                        <td><span class=\"badge badge-secondary\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 43), "html", null, true);
                echo "</span></td>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 45)), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 46) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 46)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                        <td class=\"text-right\"><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">Voir ma commande</a></td>
                    </tr>

                          
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>
        
    ";
        }
    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  126 => 47,  122 => 46,  118 => 45,  114 => 44,  110 => 43,  107 => 42,  104 => 38,  100 => 37,  87 => 26,  79 => 20,  77 => 19,  72 => 16,  66 => 12,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/account/order.html.twig");
    }
}
