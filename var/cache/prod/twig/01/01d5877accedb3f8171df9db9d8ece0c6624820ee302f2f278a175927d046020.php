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

/* base.html.twig_original */
class __TwigTemplate_a2fd763fda8f36b86b56531f91781bdd2fc887a97c5878bae92fa793fc8517e6 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"Vente de matériels sportifs pour tous\">
\t\t<meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t<title>
\t\t\t";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "\t\t</title>

\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/script.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

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
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<div class=\"container-fluid\">

\t\t\t";
        // line 86
        echo "
\t\t\t";
        // line 194
        echo "\t\t\t<div class=\"container \">
                <div class=\"row\">
                    <div class=\"d-flex ms-0 align-items-center me-2 hamber-logo\">
\t\t\t\t        <nav role=\"navigation\"> 
                            <div id=\"menuToggle\">
\t\t\t\t\t<!--
\t\t\t\t\t    A fake / hidden checkbox is used as click reciever,
\t\t\t\t\t    so you can use the :checked selector on it.
\t\t\t\t\t    -->
\t\t\t\t\t            <input type=\"checkbox\"/>

\t\t\t\t\t<!--
\t\t\t\t\t    Some spans to act as a hamburger.
\t\t\t\t\t    
\t\t\t\t\t    They are acting like a real hamburger,
\t\t\t\t\t    not that McDonalds stuff.
\t\t\t\t\t    -->
                                <span></span>
                                <span></span>
                                <span></span>

\t\t\t\t\t<!--
\t\t\t\t\t    Too bad the menu has to be inside of the button
\t\t\t\t\t    but hey, it's pure CSS magic.
\t\t\t\t\t    -->
                                <ul id=\"menu\">
\t\t\t\t\t\t\t\t\t<h2>HOMME</h2>

                                    <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Vêtements</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
                                    <a href=\"#\"><li>Chaussures</li></a>
                                    <a href=\"#\"><li>Accessoires</li></a>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<h2>FEMME</h2>

                                    <a href=\"#\"><li>Vêtements</li></a>
                                    <a href=\"#\"><li>Chaussures</li></a>
                                    <a href=\"#\"><li>Accessoires</li></a>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<h2>ENFANT</h2>

                                    <a href=\"#\"><li>Vêtements</li></a>
                                    <a href=\"#\"><li>Chaussures</li></a>
                                    <a href=\"#\"><li>Accessoires</li></a>
                                </ul>
\t\t\t\t\t\t\t\t
                            </div>
                        </nav>
                        ";
        // line 249
        echo "\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img class=\"img-fluid\" src=\"assets/img/DoSport_Logo.png\" alt=\"logo Do Sport\"></a>
\t\t\t        </div>

                    ";
        // line 254
        echo "\t\t\t\t\t";
        // line 255
        echo "



<nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
  <div class=\"container-fluid d-flex justify-content-end\">
    ";
        // line 265
        echo "\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            ";
        // line 271
        echo "                            <li class=\"nav-item \" >
                                <a  class=\"me-3\" href=\"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Nos produits</a>
                            </li>
                            <li class=\"nav-item \" >
                                <a  class=\"me-3\" href=\"#\">Qui sommes nous ?</a>
                            </li>
\t\t\t\t\t\t\t<li class=\"nav-item \" >
                                <a  class=\"me-3\" href=\"#\">Contact</a>
                            </li>
                            ";
        // line 283
        echo "                        </ul>
                        <form class=\"form-inline mt-2 mt-md-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Votre recherche\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                        </form>
                        <div class=\"navbar-item-custom d-flex\">
                            ";
        // line 289
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 289)) {
            // line 290
            echo "                                <a class=\"nav-link active\" aria-current=\"page\" href=href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 290), "firstname", [], "any", false, false, false, 290), "html", null, true);
            echo ")</small></a>
                                |
                                <a href=\"";
            // line 292
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                            ";
        } else {
            // line 294
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                                |
                                <a href=\"";
            // line 296
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
                            ";
        }
        // line 298
        echo "                        </div>
                    </div>
\t
\t

\t\t\t\t\t\t";
        // line 314
        echo "    ";
        // line 334
        echo "  </div>
</nav>






                    ";
        // line 374
        echo "\t\t\t\t</div>
            </div>      

\t\t\t";
        // line 417
        echo "\t\t\t";
        // line 418
        echo "
\t\t</div>
\t\t<main role=\"main\">

\t\t\t";
        // line 422
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 423
            echo "
\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t\t\t<h1>Example headline.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Sign up today</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t<h1>Another example headline.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-right\">
\t\t\t\t\t\t\t\t\t<h1>One more for good measure.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t";
        }
        // line 479
        echo "

\t\t\t<!-- Marketing messaging and featurettes
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ================================================== -->
\t\t\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t\t<div class=\"container marketing ";
        // line 485
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\"> ";
        $this->displayBlock('content', $context, $blocks);
        // line 486
        echo "
\t\t\t\t</div>
\t\t\t\t<!-- /.container -->

\t\t\t\t<!-- FOOTER -->
\t\t\t\t<footer class=\"footer-custom\">
\t\t\t\t\t<p class=\"float-right\">
\t\t\t\t\t\t";
        // line 494
        echo "\t\t\t\t\t</p>
\t\t\t\t\t<p>&copy; 2017-2020 Do Sport<br/>
\t\t\t\t\t<small>Just do it !
\t\t\t\t\t\t<a href=\"#\">Conditions générales</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\">Politique de vente</a></small>
\t\t\t\t\t</p>
\t\t\t\t</footer>
\t\t\t</main>

\t\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "></script>

\t\t\t<script src=\"https://use.fontawesome.com/04fd9d0789.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t\t</body>
\t</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t\t\t\tDo Sport
\t\t\t";
    }

    // line 485
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig_original";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 485,  371 => 13,  367 => 12,  356 => 506,  342 => 494,  333 => 486,  327 => 485,  319 => 479,  261 => 423,  259 => 422,  253 => 418,  251 => 417,  246 => 374,  236 => 334,  234 => 314,  227 => 298,  222 => 296,  216 => 294,  211 => 292,  203 => 290,  201 => 289,  193 => 283,  182 => 272,  179 => 271,  175 => 265,  167 => 255,  165 => 254,  158 => 249,  102 => 194,  99 => 86,  91 => 41,  67 => 20,  63 => 19,  59 => 18,  54 => 15,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig_original", "/homepages/9/d914851249/htdocs/dosport/templates/base.html.twig_original");
    }
}
