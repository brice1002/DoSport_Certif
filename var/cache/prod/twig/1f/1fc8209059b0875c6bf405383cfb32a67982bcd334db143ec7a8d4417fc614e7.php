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
class __TwigTemplate_f2e2a8975a5f22623fc2089311ae2a1151e9cd93104a58ad34453fc62a82f89b extends Template
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
        // line 2
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2);
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
        if ((($context["route_name"] ?? null) == "home")) {
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
        if ((($context["route_name"] ?? null) == "products")) {
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
        if ((($context["route_name"] ?? null) == "nous")) {
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
        if ((($context["route_name"] ?? null) == "contact")) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 84)) {
            // line 85
            echo "\t\t\t\t\t\t\t<li ";
            if ((($context["route_name"] ?? null) == "account")) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 87), "firstname", [], "any", false, false, false, 87), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li ";
            // line 91
            if ((($context["route_name"] ?? null) == "app_logout")) {
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
            if ((($context["route_name"] ?? null) == "app_login")) {
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
            if ((($context["route_name"] ?? null) == "app_register")) {
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
        if ((($context["route_name"] ?? null) == "cart")) {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "verify_email_error"], "method", false, false, false, 114));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 119));
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
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
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
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 252
        $this->displayBlock('content', $context, $blocks);
        // line 254
        echo "\t\t\t</div>

\t\t\t";
        // line 257
        echo "\t\t\t<!-- /.container -->

\t\t\t<!-- FOOTER -->
\t\t\t<footer class=\"container mt-5\"> 
\t\t\t\t<p class=\"float-right\">
\t\t\t\t\t<a href=\"#\">Revenir en haut</a>
\t\t\t\t</p>
\t\t\t\t<p>&copy; 2022 Do Sport &middot;
\t\t\t\t\t<a href=\"#\">Privacy</a>
\t\t\t\t\t\t&middot;
\t\t\t\t\t<a href=\"#\">Terms</a>
\t\t\t\t</p>
\t\t\t</footer>
\t\t</main>
\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t\t<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t\t\t\tDo Sport
\t\t\t";
    }

    // line 25
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
\t\t";
    }

    // line 252
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        echo "\t\t\t\t";
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
        return array (  492 => 253,  488 => 252,  483 => 26,  479 => 25,  474 => 14,  470 => 13,  462 => 272,  445 => 257,  441 => 254,  439 => 252,  435 => 250,  427 => 244,  425 => 243,  422 => 242,  418 => 177,  410 => 170,  395 => 157,  381 => 151,  376 => 149,  372 => 148,  361 => 145,  357 => 144,  353 => 142,  340 => 140,  336 => 139,  331 => 136,  329 => 135,  322 => 130,  316 => 129,  303 => 123,  298 => 121,  293 => 120,  289 => 119,  285 => 117,  276 => 115,  272 => 114,  260 => 105,  256 => 104,  248 => 103,  245 => 102,  239 => 99,  231 => 98,  226 => 96,  217 => 95,  211 => 92,  203 => 91,  196 => 87,  192 => 86,  183 => 85,  181 => 84,  173 => 79,  165 => 78,  160 => 76,  152 => 75,  147 => 73,  139 => 72,  132 => 68,  124 => 67,  108 => 56,  96 => 47,  75 => 28,  73 => 25,  68 => 23,  64 => 22,  56 => 16,  54 => 13,  42 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\base.html.twig");
    }
}
