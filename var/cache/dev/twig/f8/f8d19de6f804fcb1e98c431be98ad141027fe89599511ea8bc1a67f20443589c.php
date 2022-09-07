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

/* base.html.twig */
class __TwigTemplate_aa9f913ada256dedd9468595affa542444c4e5f458d57344f32ca79029bb5df8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2);
        // line 3
        echo "
<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"Do Sport - La boutique du sport\">


\t\t<title>
\t\t\t";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "\t\t</title>
\t
\t\t<link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.1/examples/carousel/\">


\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t";
        // line 25
        $this->displayBlock('javascript', $context, $blocks);
        // line 28
        echo "
\t\t<style>
\t\t\t.bd-placeholder-img {
\t\t\t\tfont-size: 1.125rem;
\t\t\t\ttext-anchor: middle;
\t\t\t\t-webkit-user-select: none; 
\t\t\t\t-moz-user-select: none;
\t\t\t\t-ms-user-select: none;
\t\t\t\tuser-select: none;
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.bd-placeholder-img-lg {
\t\t\t\t\tfont-size: 3.5rem;
\t\t\t\t}
\t\t\t}
\t\t</style>

\t\t<!-- Custom styles for this template -->
\t\t<link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>

\t<body class=\"pt-0\">
\t
\t
\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark mt-0 bg-dark\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/DoSport_Logo.png"), "html", null, true);
        echo "\" alt=\"Logo Do Sport\"></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<form class=\"form-inline mt-2 mt-md-0\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"Rechercher\">
\t\t\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
\t\t\t\t\t</form>

\t\t\t\t\t<ul id=\"nav\" class=\"navbar-nav mr-auto me-0\">
\t\t\t\t\t\t<li ";
        // line 67
        if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 67, $this->source); })()) == "home")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span> 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 72
        if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 72, $this->source); })()) == "products")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Nos produits</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 75
        if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 75, $this->source); })()) == "nous")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nous");
        echo "\">Qui sommes nous ?</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 78
        if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 78, $this->source); })()) == "contact")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo " >
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"navbar-item d-flex\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t";
        // line 84
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) {
            // line 85
            echo "\t\t\t\t\t\t\t<li ";
            if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 85, $this->source); })()) == "account")) {
                echo " class=\"nav-item active\" ";
            } else {
                echo " class=\"nav-item\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<a class=\"nav-link active btn btn-outline-success \" aria-current=\"page\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte
\t\t\t\t\t\t\t\t\t<small class=\"me-0\">(";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "firstname", [], "any", false, false, false, 87), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li ";
            // line 91
            if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 91, $this->source); })()) == "app_logout")) {
                echo " class=\"nav-item active\" ";
            } else {
                echo " class=\"nav-item\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"nav-link btn btn-outline-danger \" href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t\t<li ";
            if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 95, $this->source); })()) == "app_login")) {
                echo " class=\"nav-item active\" ";
            } else {
                echo " class=\"nav-item\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"nav-link btn btn-outline-success \" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
            // line 98
            if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 98, $this->source); })()) == "app_register")) {
                echo " class=\"nav-item active\" ";
            } else {
                echo " class=\"nav-item\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"nav-link btn btn-outline-primary \" href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t<li ";
        // line 103
        if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 103, $this->source); })()) == "cart")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/shopping-cart.png"), "html", null, true);
        echo "\" alt=\"Mon panier\" class=\"cart-icon\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</nav>

\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 115
            echo "        \t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo " </div>
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "flashes", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 120
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 121
                echo "\t\t\t\t\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t";
                // line 123
                echo "\t\t\t\t\t\t\t ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo " .
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "\t\t\t</div> 
\t\t</header> 

\t\t<main role=\"main\" >

\t\t\t";
        // line 135
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 136
            echo "
\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 139, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 140
                echo "\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($context["key"] == 0)) {
                    echo " class=\"active\" ";
                }
                echo "></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 144, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 145
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
                if (($context["key"] == 0)) {
                    echo " active ";
                }
                echo "\" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 145), "html", null, true);
                echo "');background-size:cover;\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t\t\t\t<h1>";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 148), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 149), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-info\" href=\"";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 151), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 151), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
        }
        // line 170
        echo "

\t\t\t<!-- Marketing messaging and featurettes
\t\t\t\t\t\t    ================================================== -->
\t\t\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t\t";
        // line 177
        echo "
\t\t\t\t<!-- Three columns of text below the carousel -->
\t\t\t\t";
        // line 242
        echo "
\t\t\t";
        // line 243
        if (        $this->hasBlock("cover", $context, $blocks)) {
            // line 244
            echo "\t\t\t\t<div id=\"cover\" class=\"text-container_nous img-fluid mb-5\">
\t\t\t\t\t<span>
\t\t\t\t\t\t<p class=\"text_cover\"><b>Notre sport préféré :<br>Faire baisser les prix du vôtre</b></p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t";
        }
        // line 250
        echo "
\t\t\t";
        // line 251
        if (        $this->hasBlock("cgv", $context, $blocks)) {
            // line 252
            echo "\t\t\t\t<div id=\"cgv\" class=\"text-container_cgv img-fluid mb-5\">
\t\t\t\t\t<span>
\t\t\t\t\t\t<h1 class=\"text_cgv text-center mt-5\"><b>CONDITIONS GENERALES DE VENTE</b></h1>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t";
        }
        // line 258
        echo "
\t\t\t";
        // line 259
        if (        $this->hasBlock("mentions", $context, $blocks)) {
            // line 260
            echo "\t\t\t\t<div id=\"mentions\" class=\"text-container_mentions img-fluid mb-5\">
\t\t\t\t\t<span>
\t\t\t\t\t\t<h1 class=\"text_mention text-center mt-5\"><b>MENTIONS LEGALES</b></h1>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t";
        }
        // line 266
        echo "
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 268
        $this->displayBlock('content', $context, $blocks);
        // line 270
        echo "\t\t\t</div>

\t\t\t";
        // line 273
        echo "\t\t\t<!-- /.container -->

\t\t\t<!-- FOOTER -->
\t\t\t<footer class=\"container mt-5\"> 
\t\t\t\t<p class=\"float-right\">
\t\t\t\t\t<a href=\"#\">Revenir en haut</a>
\t\t\t\t</p>
\t\t\t\t<p>&copy; 2022 Do Sport &middot;
\t\t\t\t\t<a href=\"";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions Légales</a>
\t\t\t\t\t\t&middot;
\t\t\t\t\t<a href=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgv");
        echo "\">Conditions générales de vente</a>
\t\t\t\t</p>
\t\t\t</footer>
\t\t</main>
\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t\t<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "\t\t\t\tDo Sport
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 26
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 268
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 269
        echo "\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 269,  556 => 268,  545 => 26,  535 => 25,  524 => 14,  514 => 13,  500 => 288,  492 => 283,  487 => 281,  477 => 273,  473 => 270,  471 => 268,  467 => 266,  459 => 260,  457 => 259,  454 => 258,  446 => 252,  444 => 251,  441 => 250,  433 => 244,  431 => 243,  428 => 242,  424 => 177,  416 => 170,  401 => 157,  387 => 151,  382 => 149,  378 => 148,  367 => 145,  363 => 144,  359 => 142,  346 => 140,  342 => 139,  337 => 136,  335 => 135,  328 => 130,  322 => 129,  309 => 123,  304 => 121,  299 => 120,  295 => 119,  291 => 117,  282 => 115,  278 => 114,  266 => 105,  262 => 104,  254 => 103,  251 => 102,  245 => 99,  237 => 98,  232 => 96,  223 => 95,  217 => 92,  209 => 91,  202 => 87,  198 => 86,  189 => 85,  187 => 84,  179 => 79,  171 => 78,  166 => 76,  158 => 75,  153 => 73,  145 => 72,  138 => 68,  130 => 67,  114 => 56,  102 => 47,  81 => 28,  79 => 25,  74 => 23,  70 => 22,  62 => 16,  60 => 13,  48 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Pour activer le menu en active #}
{% set route_name = app.request.attributes.get('_route') %}

<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"Do Sport - La boutique du sport\">


\t\t<title>
\t\t\t{% block title %}
\t\t\t\tDo Sport
\t\t\t{% endblock %}
\t\t</title>
\t
\t\t<link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.1/examples/carousel/\">


\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/css/styles.css') }}\" rel=\"stylesheet\">

\t\t{% block javascript %}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
\t\t{% endblock %}

\t\t<style>
\t\t\t.bd-placeholder-img {
\t\t\t\tfont-size: 1.125rem;
\t\t\t\ttext-anchor: middle;
\t\t\t\t-webkit-user-select: none; 
\t\t\t\t-moz-user-select: none;
\t\t\t\t-ms-user-select: none;
\t\t\t\tuser-select: none;
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.bd-placeholder-img-lg {
\t\t\t\t\tfont-size: 3.5rem;
\t\t\t\t}
\t\t\t}
\t\t</style>

\t\t<!-- Custom styles for this template -->
\t\t<link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
\t</head>

\t<body class=\"pt-0\">
\t
\t
\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark mt-0 bg-dark\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('home') }}\"><img class=\"img-fluid\" src=\"{{ asset('assets/img/DoSport_Logo.png') }}\" alt=\"Logo Do Sport\"></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<form class=\"form-inline mt-2 mt-md-0\">
\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"Rechercher\">
\t\t\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
\t\t\t\t\t</form>

\t\t\t\t\t<ul id=\"nav\" class=\"navbar-nav mr-auto me-0\">
\t\t\t\t\t\t<li {% if route_name == \"home\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span> 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li {% if route_name == \"products\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('products') }}\">Nos produits</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li {% if route_name == \"nous\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('nous') }}\">Qui sommes nous ?</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li {% if route_name == \"contact\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %} >
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{  path('contact') }}\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"navbar-item d-flex\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<li {% if route_name == \"account\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t\t<a class=\"nav-link active btn btn-outline-success \" aria-current=\"page\" href=\"{{ path('account') }}\">Mon compte
\t\t\t\t\t\t\t\t\t<small class=\"me-0\">({{ app.user.firstname }})</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li {% if route_name == \"app_logout\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"nav-link btn btn-outline-danger \" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li {% if route_name == \"app_login\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"nav-link btn btn-outline-success \" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li {% if route_name == \"app_register\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"nav-link btn btn-outline-primary \" href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t\t\t<li {% if route_name == \"cart\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t\t<a href=\"{{  path('cart') }}\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/shopping-cart.png') }}\" alt=\"Mon panier\" class=\"cart-icon\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</nav>

\t\t\t{% for flash_error in app.flashes('verify_email_error') %}
        \t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }} </div>
    \t\t{% endfor %}

\t\t\t<div class=\"container\">
\t\t\t\t{% for type, messages in app.flashes %}
\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t<div class=\"alert alert-{{ type }} alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t{# <strong>{{ type }}</strong> {{ message }} . #}
\t\t\t\t\t\t\t {{ message }} .
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t</div> 
\t\t</header> 

\t\t<main role=\"main\" >

\t\t\t{% if block('carousel') is defined %}

\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t{% for key,header in headers %}
\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"{{ key }}\" {% if key == 0 %} class=\"active\" {% endif %}></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t{% for key,header in headers %}
\t\t\t\t\t\t\t<div class=\"carousel-item {% if key == 0 %} active {% endif %}\" style=\"background: url('/uploads/{{ header.illustration }}');background-size:cover;\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t\t\t\t<h1>{{ header.title }}</h1>
\t\t\t\t\t\t\t\t\t\t<p>{{ header.content }}</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-info\" href=\"{{ header.btnUrl }}\" role=\"button\">{{ header.btnTitle }}</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% endif %}


\t\t\t<!-- Marketing messaging and featurettes
\t\t\t\t\t\t    ================================================== -->
\t\t\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t\t{# <div class=\"container marketing\"> #}

\t\t\t\t<!-- Three columns of text below the carousel -->
\t\t\t\t{# <div class=\"row\">
\t\t\t\t\t\t\t\t            <div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
\t\t\t\t\t\t\t\t                <h2>Heading</h2>
\t\t\t\t\t\t\t\t                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
\t\t\t\t\t\t\t\t                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
\t\t\t\t\t\t\t\t            </div><!-- /.col-lg-4 -->
\t\t\t\t\t\t\t\t            <div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
\t\t\t\t\t\t\t\t                <h2>Heading</h2>
\t\t\t\t\t\t\t\t                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
\t\t\t\t\t\t\t\t                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
\t\t\t\t\t\t\t\t            </div><!-- /.col-lg-4 -->
\t\t\t\t\t\t\t\t            <div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
\t\t\t\t\t\t\t\t                <h2>Heading</h2>
\t\t\t\t\t\t\t\t                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
\t\t\t\t\t\t\t\t                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
\t\t\t\t\t\t\t\t            </div><!-- /.col-lg-4 -->
\t\t\t\t\t\t\t\t        </div><!-- /.row -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <!-- START THE FEATURETTES -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <hr class=\"featurette-divider\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <div class=\"row featurette\">
\t\t\t\t\t\t\t\t            <div class=\"col-md-7\">
\t\t\t\t\t\t\t\t                <h2 class=\"featurette-heading\">First featurette heading. <span class=\"text-muted\">It’ll blow your mind.</span></h2>
\t\t\t\t\t\t\t\t                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            <div class=\"col-md-5\">
\t\t\t\t\t\t\t\t                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text></svg>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <hr class=\"featurette-divider\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <div class=\"row featurette\">
\t\t\t\t\t\t\t\t            <div class=\"col-md-7 order-md-2\">
\t\t\t\t\t\t\t\t                <h2 class=\"featurette-heading\">Oh yeah, it’s that good. <span class=\"text-muted\">See for yourself.</span></h2>
\t\t\t\t\t\t\t\t                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            <div class=\"col-md-5 order-md-1\">
\t\t\t\t\t\t\t\t                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text></svg>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <hr class=\"featurette-divider\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <div class=\"row featurette\">
\t\t\t\t\t\t\t\t            <div class=\"col-md-7\">
\t\t\t\t\t\t\t\t                <h2 class=\"featurette-heading\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>
\t\t\t\t\t\t\t\t                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            <div class=\"col-md-5\">
\t\t\t\t\t\t\t\t                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text></svg>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <hr class=\"featurette-divider\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <!-- /END THE FEATURETTES --> #}

\t\t\t{% if block('cover') is defined %}
\t\t\t\t<div id=\"cover\" class=\"text-container_nous img-fluid mb-5\">
\t\t\t\t\t<span>
\t\t\t\t\t\t<p class=\"text_cover\"><b>Notre sport préféré :<br>Faire baisser les prix du vôtre</b></p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if block('cgv') is defined %}
\t\t\t\t<div id=\"cgv\" class=\"text-container_cgv img-fluid mb-5\">
\t\t\t\t\t<span>
\t\t\t\t\t\t<h1 class=\"text_cgv text-center mt-5\"><b>CONDITIONS GENERALES DE VENTE</b></h1>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if block('mentions') is defined %}
\t\t\t\t<div id=\"mentions\" class=\"text-container_mentions img-fluid mb-5\">
\t\t\t\t\t<span>
\t\t\t\t\t\t<h1 class=\"text_mention text-center mt-5\"><b>MENTIONS LEGALES</b></h1>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<div class=\"container\">
\t\t\t\t{% block content %}
\t\t\t\t{% endblock %}
\t\t\t</div>

\t\t\t{# </div> #}
\t\t\t<!-- /.container -->

\t\t\t<!-- FOOTER -->
\t\t\t<footer class=\"container mt-5\"> 
\t\t\t\t<p class=\"float-right\">
\t\t\t\t\t<a href=\"#\">Revenir en haut</a>
\t\t\t\t</p>
\t\t\t\t<p>&copy; 2022 Do Sport &middot;
\t\t\t\t\t<a href=\"{{ path('mentions') }}\">Mentions Légales</a>
\t\t\t\t\t\t&middot;
\t\t\t\t\t<a href=\"{{ path('cgv') }}\">Conditions générales de vente</a>
\t\t\t\t</p>
\t\t\t</footer>
\t\t</main>
\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t\t<script src=\"{{ asset(\"assets/js/bootstrap.bundle.js\") }}\"></script>
\t</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\base.html.twig");
    }
}
