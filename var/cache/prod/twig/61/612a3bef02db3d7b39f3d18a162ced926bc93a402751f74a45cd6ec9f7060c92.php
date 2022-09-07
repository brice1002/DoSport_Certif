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

/* order/add.html.twig */
class __TwigTemplate_2ae05907233ede0e7006211300b1e51955487621fedd979c48fecc9dd9d2efaa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paiement de ma commande - Do Sport";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<h2>Mon récapitulatif</h2>
<p>Vérifiez vos informations avant de payer votre commande sur Do Sport.</p>
<hr>
<div class=\"row\">

    <div class=\"col-md-6\">
        <strong>Mon adresse de livraison</strong><br>
        <div class=\"form-check mt-3\">
            ";
        // line 19
        echo ($context["delivery"] ?? null);
        echo "
        </div>

        <hr>
        
        <strong>Transporteur</strong><br>
        <div class=\"form-check\">
            ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "<br>
            ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "<br>
            ";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 28) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
        </div>
    </div>


    <div class=\"col-md-6\">
        <div class=\"text-center\">
            <b>Ma commande</b><br>
        </div>
        <div class=\"order-summary\">

            ";
        // line 39
        $context["total"] = null;
        // line 40
        echo "            
            ";
        // line 44
        echo "
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 46
            echo "                <div class=\"row ";
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
                    <div class=\"col-2\">
                        <img src=\"/uploads/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 48), "illustration", [], "any", false, false, false, 48), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "\" height=\"75px\">
                    </div>
                    <div class=\"col-8 my-auto\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "<br>
                        <small>
                            ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 53), "subtitle", [], "any", false, false, false, 53), "html", null, true);
            echo "
                            <br>
                            x ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55), "html", null, true);
            echo "
                        </small>
                    </div>
                    <div class=\"col-2 my-auto\">
                        ";
            // line 59
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 59), "price", [], "any", false, false, false, 59) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 59)) / 100), 2, ",", "."), "html", null, true);
            echo " €
                    </div>

                    ";
            // line 62
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 62), "price", [], "any", false, false, false, 62) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 62)));
            // line 63
            echo "                    
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo " 

            <hr>
            
            <strong>Sous-total : </strong>";
        // line 69
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
        echo "<br>
            <strong>Livraison : </strong>";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 70) / 100), 2, ",", "."), "html", null, true);
        echo " €
            <hr>
            <strong>Total : </strong>";
        // line 72
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 72) / 100)), 2, ",", "."), "html", null, true);
        echo " €
            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stripe_create_session", ["reference" => ($context["reference"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer | ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 73) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 73,  187 => 72,  182 => 70,  178 => 69,  172 => 65,  164 => 63,  162 => 62,  156 => 59,  149 => 55,  144 => 53,  139 => 51,  131 => 48,  123 => 46,  119 => 45,  116 => 44,  113 => 40,  111 => 39,  97 => 28,  93 => 27,  89 => 26,  79 => 19,  68 => 10,  64 => 9,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/order/add.html.twig");
    }
}
