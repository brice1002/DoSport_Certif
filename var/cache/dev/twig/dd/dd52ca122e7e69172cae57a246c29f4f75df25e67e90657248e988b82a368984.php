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

/* home/index.html.twig */
class __TwigTemplate_37c200ce7e6da275e49a08f14044d2e0c0269428542c2beb913a46169b355f23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
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
\t<!-- Three columns of text below the carousel -->
\t<div class=\"card-group mb-0\">
\t\t<div
\t\t\tclass=\"card\">
\t\t\t";
        // line 12
        echo "\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_category", ["category" => 1]);
        echo "\"><img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_front/box-g7266728f4_1920 (Personnalisé).jpg"), "html", null, true);
        echo "\" alt=\"photo homme boxeur\"></a>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title text-center\">Homme</h5>
\t\t\t\t<p class=\"card-text\">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_category", ["category" => 1]);
        echo "\" role=\"button\">Voir + &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card\">
\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_category", ["category" => 2]);
        echo "\"><img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_front/karate-g29e4d0e74_1920 (Personnalisé).jpg"), "html", null, true);
        echo "\" alt=\"photo femme boxeur\"></a>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title text-center\">Femme</h5>
\t\t\t\t<p class=\"card-text\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_category", ["category" => 2]);
        echo "\" role=\"button\">Voir + &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card\">
\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_category", ["category" => 3]);
        echo "\"><img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img_front/tennis-g42ed02b39_1920 (Personnalisé).jpg"), "html", null, true);
        echo "\" alt=\"photo femme boxeur\"></a>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title text-center\">Enfant</h5>
\t\t\t\t<p class=\"card-text\">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_category", ["category" => 3]);
        echo "\" role=\"button\">Voir + &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- les promotions -->

\t";
        // line 47
        echo "
\t<h2 class=\"featurette-heading\">Nos produits du moment</h2>

\t<div class=\"card-group mb-0\">

\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 53
            echo "
\t\t\t";
            // line 57
            echo "
\t\t\t<div class=\"card me-2 mb-5\">
\t\t\t\t<img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 59))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</h5>
\t\t\t\t\t<p class=\"card-text\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 64), "html", null, true);
            echo "</small>
\t\t\t\t\t</p>
\t\t\t\t\t";
            // line 67
            echo "\t\t\t\t\t<strong><p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67) / 100), 2, ",", "."), "html", null, true);
            echo "€</p></strong><br>

\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-to-cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Ajouter au panier</a>

\t\t\t\t</div>
\t\t\t</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t</div>

\t";
        // line 78
        echo "
\t<h2 class=\"featurette-heading mb-3 mt-0\">Tous nos sports</h2>

\t<div class=\"row d-flex justify-content-between mb-3\">
\t\t<div id=\"sportCo\" class=\"col-md-3 text-container img-fluid me-2\">
\t\t\t<span>
\t\t\t\t<h1>Sports collectifs</h1>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"muscuFit\" class=\"col-md-3 text-container img-fluid me-2\">
\t\t\t<span>
\t\t\t\t<h1>Musculation & Fitness</h1>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"sportComb\" class=\"col-md-3 text-container img-fluid\">
\t\t\t<span>
\t\t\t\t<h1>Sports de combat</h1>
\t\t\t</span>
\t\t</div>
\t</div>
\t<div class=\"row d-flex justify-content-between\">
\t\t<div id=\"raquette\" class=\"col-md-3 text-container img-fluid me-2\">
\t\t\t<span>
\t\t\t\t<h1>Sports de raquette</h1>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"equitation\" class=\"col-md-3 text-container img-fluid me-2\">
\t\t\t<span>
\t\t\t\t<h1>Equitation</h1>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"aquatique\" class=\"col-md-3 text-container img-fluid\">
\t\t\t<span>
\t\t\t\t<h1>Sport aquatique</h1>
\t\t\t</span>
\t\t</div>
\t</div>


\t";
        // line 126
        echo "

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">First featurette heading.
\t\t\t\t<span class=\"text-muted\">It’ll blow your mind.</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\">
\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t<h2 class=\"featurette-heading\">Oh yeah, it’s that good.
\t\t\t\t<span class=\"text-muted\">See for yourself.</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t</div>
\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\">
\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">And lastly, this one.
\t\t\t\t<span class=\"text-muted\">Checkmate.</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\">
\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr
\tclass=\"featurette-divider\">

<!-- /END THE FEATURETTES -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 126,  214 => 78,  210 => 75,  198 => 69,  192 => 67,  187 => 64,  182 => 62,  178 => 61,  171 => 59,  167 => 57,  164 => 53,  160 => 52,  153 => 47,  141 => 37,  131 => 32,  123 => 27,  113 => 22,  105 => 17,  94 => 12,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block carousel %}{% endblock %}

{% block content %}

\t<!-- Three columns of text below the carousel -->
\t<div class=\"card-group mb-0\">
\t\t<div
\t\t\tclass=\"card\">
\t\t\t{# <img src=\"...\" class=\"card-img-top\" alt=\"...\"> #}
\t\t\t<a href=\"{{ path('products_category', {'category' : 1}) }}\"><img class=\"img-fluid\" src=\"{{asset(\"assets/img/img_front/box-g7266728f4_1920 (Personnalisé).jpg\")}}\" alt=\"photo homme boxeur\"></a>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title text-center\">Homme</h5>
\t\t\t\t<p class=\"card-text\">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"{{ path('products_category', {'category' : 1}) }}\" role=\"button\">Voir + &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card\">
\t\t\t<a href=\"{{ path('products_category', {'category' : 2}) }}\"><img class=\"img-fluid\" src=\"{{asset(\"assets/img/img_front/karate-g29e4d0e74_1920 (Personnalisé).jpg\")}}\" alt=\"photo femme boxeur\"></a>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title text-center\">Femme</h5>
\t\t\t\t<p class=\"card-text\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"{{ path('products_category', {'category' : 2}) }}\" role=\"button\">Voir + &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card\">
\t\t\t<a href=\"{{ path('products_category', {'category' : 3}) }}\"><img class=\"img-fluid\" src=\"{{asset(\"assets/img/img_front/tennis-g42ed02b39_1920 (Personnalisé).jpg\")}}\" alt=\"photo femme boxeur\"></a>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title text-center\">Enfant</h5>
\t\t\t\t<p class=\"card-text\">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"{{ path('products_category', {'category' : 3}) }}\" role=\"button\">Voir + &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- les promotions -->

\t{# <hr class=\"featurette-divider\"> #}

\t<h2 class=\"featurette-heading\">Nos produits du moment</h2>

\t<div class=\"card-group mb-0\">

\t\t{% for product in products %}

\t\t\t{# <pre>
\t\t\t\t\t\t        {{ dump(product.illustration) }}
\t\t\t\t\t\t    </pre> #}

\t\t\t<div class=\"card me-2 mb-5\">
\t\t\t\t<img src=\"{{ asset('uploads/' ~ product.illustration) }}\" class=\"card-img-top\" alt=\"{{ product.name }}\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">{{ product.name }}</h5>
\t\t\t\t\t<p class=\"card-text\">{{ product.description }}</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t<small class=\"text-muted\">{{ product.subtitle }}</small>
\t\t\t\t\t</p>
\t\t\t\t\t{# <p class=\"card-text\">{{ product.price }} </p> #}
\t\t\t\t\t<strong><p class=\"card-text\">{{ (product.price / 100)|number_format(2, ',', '.') }}€</p></strong><br>

\t\t\t\t\t<a href=\"{{ path('add-to-cart', {'id' : product.id}) }}\" class=\"btn btn-primary\">Ajouter au panier</a>

\t\t\t\t</div>
\t\t\t</div>

\t\t{% endfor %}
\t</div>

\t{# <hr class=\"featurette-divider\"> #}

\t<h2 class=\"featurette-heading mb-3 mt-0\">Tous nos sports</h2>

\t<div class=\"row d-flex justify-content-between mb-3\">
\t\t<div id=\"sportCo\" class=\"col-md-3 text-container img-fluid me-2\">
\t\t\t<span>
\t\t\t\t<h1>Sports collectifs</h1>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"muscuFit\" class=\"col-md-3 text-container img-fluid me-2\">
\t\t\t<span>
\t\t\t\t<h1>Musculation & Fitness</h1>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"sportComb\" class=\"col-md-3 text-container img-fluid\">
\t\t\t<span>
\t\t\t\t<h1>Sports de combat</h1>
\t\t\t</span>
\t\t</div>
\t</div>
\t<div class=\"row d-flex justify-content-between\">
\t\t<div id=\"raquette\" class=\"col-md-3 text-container img-fluid me-2\">
\t\t\t<span>
\t\t\t\t<h1>Sports de raquette</h1>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"equitation\" class=\"col-md-3 text-container img-fluid me-2\">
\t\t\t<span>
\t\t\t\t<h1>Equitation</h1>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"aquatique\" class=\"col-md-3 text-container img-fluid\">
\t\t\t<span>
\t\t\t\t<h1>Sport aquatique</h1>
\t\t\t</span>
\t\t</div>
\t</div>


\t{# <section id=\"slider\">
\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/img_sports/equitation.jpg') }}\" alt=\"slider\"/>
\t\t<div id=\"conteneur_slider\">
\t\t 
\t\t<h1>WEBAGENCY:L'AGENCE DE TOUS </br> VOS PROJETS! </h1>
\t\t<p>Vous avez un projet web ? La WebAgency vous aide à le réaliser! </p>
\t\t<a href=\"#\">Plus d'infos</a>
\t\t</div>
\t\t</section> #}


\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">First featurette heading.
\t\t\t\t<span class=\"text-muted\">It’ll blow your mind.</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\">
\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t<h2 class=\"featurette-heading\">Oh yeah, it’s that good.
\t\t\t\t<span class=\"text-muted\">See for yourself.</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t</div>
\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\">
\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">And lastly, this one.
\t\t\t\t<span class=\"text-muted\">Checkmate.</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\">
\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr
\tclass=\"featurette-divider\">

<!-- /END THE FEATURETTES -->


{% endblock %}
", "home/index.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/home/index.html.twig");
    }
}
