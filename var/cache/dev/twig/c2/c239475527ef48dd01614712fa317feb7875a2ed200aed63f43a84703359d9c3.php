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

/* order/index.html.twig */
class __TwigTemplate_6d86633f7b7b2689cb58ee7577477b3411499d8f22e345fbc07ccf3f38ef56db extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
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

        echo "Valider ma commande - Do Sport";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<h2>Je passe ma commande</h2>
<p>Choisissez vos pr??f??rences avant de passer votre commande sur Do Sport.</p>
<hr>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 13
        echo "        ";
        ob_start();
        // line 14
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_recap")]);
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "addresses", [], "any", false, false, false, 15), 'label', ["label" => "Choisissez votre adresse de livraison"]);
        echo "
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_add");
        echo "\">Ajouter une nouvelle adresse</a>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
        ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo "        ";
        echo twig_replace_filter((isset($context["formHtml"]) || array_key_exists("formHtml", $context) ? $context["formHtml"] : (function () { throw new RuntimeError('Variable "formHtml" does not exist.', 19, $this->source); })()), ["[br]" => "<br>"]);
        echo "
    </div>
    <div class=\"col-md-6\">
        <div class=\"text-center\">
            <b>R??cap de ma commande</b><br>
            <p>Retrouvez le r??capitulatif de vos produits</p>
        </div>
        
        <div class=\"order-summary\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 29
            echo "                <div class=\"row ";
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
                    <div class=\"col-2\">
                        <img src=\"/uploads/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "illustration", [], "any", false, false, false, 31), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "\" height=\"75px\">
                    </div>
                    <div class=\"col-8 my-auto\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "<br>
                        <small>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "subtitle", [], "any", false, false, false, 35), "html", null, true);
            echo "</small>
                    </div>
                    <div class=\"col-2 my-auto\">
                        x ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " 
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 41,  160 => 38,  154 => 35,  150 => 34,  142 => 31,  134 => 29,  130 => 28,  117 => 19,  112 => 17,  108 => 16,  104 => 15,  99 => 14,  96 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Valider ma commande - Do Sport{% endblock %}

{% block content %}

<h2>Je passe ma commande</h2>
<p>Choisissez vos pr??f??rences avant de passer votre commande sur Do Sport.</p>
<hr>
<div class=\"row\">
    <div class=\"col-md-6\">
        {# <b>Choisir son adresse de livraison</b><br> #}
        {% set formHtml %}
            {{ form_start(form, {action:path('order_recap')}) }}
                {{ form_label(form.addresses, 'Choisissez votre adresse de livraison')}}
                <a href=\"{{ path('account_address_add') }}\">Ajouter une nouvelle adresse</a>
            {{ form_end(form) }}
        {% endset %}
        {{ formHtml|replace({'[br]' : '<br>'})|raw }}
    </div>
    <div class=\"col-md-6\">
        <div class=\"text-center\">
            <b>R??cap de ma commande</b><br>
            <p>Retrouvez le r??capitulatif de vos produits</p>
        </div>
        
        <div class=\"order-summary\">
            {% for key,product in cart %}
                <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                    <div class=\"col-2\">
                        <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\">
                    </div>
                    <div class=\"col-8 my-auto\">
                        {{ product.product.name }}<br>
                        <small>{{ product.product.subtitle }}</small>
                    </div>
                    <div class=\"col-2 my-auto\">
                        x {{ product.quantity }}
                    </div>
                </div>
            {% endfor %} 
        </div>
    </div>
</div>

{% endblock %}
", "order/index.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/order/index.html.twig");
    }
}
