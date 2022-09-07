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
class __TwigTemplate_792671f90d7c3475b80f8c4ae76f42260c6c67eea90ef7773497fa7771c64ea0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig_original"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig_original"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 289, $this->source); })()), "user", [], "any", false, false, false, 289)) {
            // line 290
            echo "                                <a class=\"nav-link active\" aria-current=\"page\" href=href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "user", [], "any", false, false, false, 290), "firstname", [], "any", false, false, false, 290), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "\t\t\t\tDo Sport
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 485
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  400 => 485,  389 => 13,  379 => 12,  362 => 506,  348 => 494,  339 => 486,  333 => 485,  325 => 479,  267 => 423,  265 => 422,  259 => 418,  257 => 417,  252 => 374,  242 => 334,  240 => 314,  233 => 298,  228 => 296,  222 => 294,  217 => 292,  209 => 290,  207 => 289,  199 => 283,  188 => 272,  185 => 271,  181 => 265,  173 => 255,  171 => 254,  164 => 249,  108 => 194,  105 => 86,  97 => 41,  73 => 20,  69 => 19,  65 => 18,  60 => 15,  58 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
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
\t\t\t{% block title %}
\t\t\t\tDo Sport
\t\t\t{% endblock %}
\t\t</title>

\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/css/styles.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/css/script.js') }}\" rel=\"stylesheet\">
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
\t\t<link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<div class=\"container-fluid\">

\t\t\t{# <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('home') }}\">Do Sport</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('home') }}\">Home
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Nos produits</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline mt-2 mt-md-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Votre recherche\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('account') }}\">Mon compte</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</nav> #}

\t\t\t{# <div class=\"col-md-2\">
\t\t\t\t\t\t<nav class=\"side-nav\">
\t\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t\t<div class=\"three-dots-container\">
\t\t\t\t\t\t\t\t\t<div class=\"dot d1\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"dot d2\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"dot d3\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"nav-bloc n-1\">
\t\t\t\t\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"file\" class=\"svg-inline--fa fa-file fa-w-12\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 384 512\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<div class=\"sub-nav\">
\t\t\t\t\t\t\t\t\t\t<h2>HOMME</h2>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Vêtements</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Chaussures</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Accessoires</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"nav-bloc n-2\">
\t\t\t\t\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"user-alt\" class=\"svg-inline--fa fa-user-alt fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<div class=\"sub-nav\">
\t\t\t\t\t\t\t\t\t\t<h2>FEMME</h2>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Vêtements</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Chaussures</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Accessoires</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"nav-bloc n-3\">
\t\t\t\t\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"image\" class=\"svg-inline--fa fa-image fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm-6 336H54a6 6 0 0 1-6-6V118a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v276a6 6 0 0 1-6 6zM128 152c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zM96 352h320v-80l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L192 304l-39.515-39.515c-4.686-4.686-12.284-4.686-16.971 0L96 304v48z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<div class=\"sub-nav\">
\t\t\t\t\t\t\t\t\t\t<h2>ENFANT</h2>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Vêtements</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Chaussures</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Accessoires</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Link</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"nav-bloc n-4\">
\t\t\t\t\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"cog\" class=\"svg-inline--fa fa-cog fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<div class=\"sub-nav\">
\t\t\t\t\t\t\t\t\t\t<h2>SPORTS</h2>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Cycle</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Fitness-Musculation</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Football</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Randonnée</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Sports d'hiver</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Natation-Piscine</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Running</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Sports de raquette</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Glisse Urbaine</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Sports d'Équipe</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Sports d'Éxtérieur</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>Sports de Combat</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"nav-bloc n-5\">
\t\t\t\t\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"cog\" class=\"svg-inline--fa fa-cog fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<div class=\"sub-nav\">
\t\t\t\t\t\t\t\t\t\t<h2>MARQUES</h2>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a>NIKE</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>ADIDAS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>ASICS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>ATHLITECH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>BABOLAT</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>BROOKS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>CARE</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>CHAMPION</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>COLUMBIA</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>CONVERSE</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>FILA</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a>LE COQ SPORTIF</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t</div> #}
\t\t\t<div class=\"container \">
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
                        {# <a class=\"navbar-brand\" href=\"{{ path('home') }}\">DO SPORT</a> #}
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('home') }}\"><img class=\"img-fluid\" src=\"assets/img/DoSport_Logo.png\" alt=\"logo Do Sport\"></a>
\t\t\t        </div>

                    {# <div class=\"col\">
                    </div> #}
\t\t\t\t\t{# <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\"> #}




<nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
  <div class=\"container-fluid d-flex justify-content-end\">
    {# <a class=\"navbar-brand\" href=\"#\">TP - CREATION D'UN SITE</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button> #}
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            {# <li class=\"nav-item\">
                                <a href=\"{{ path('home') }}\">Home
                                    <span class=\"sr-only\">(current)</span>                                    </a>
                            </li> #}
                            <li class=\"nav-item \" >
                                <a  class=\"me-3\" href=\"{{ path(\"products\") }}\">Nos produits</a>
                            </li>
                            <li class=\"nav-item \" >
                                <a  class=\"me-3\" href=\"#\">Qui sommes nous ?</a>
                            </li>
\t\t\t\t\t\t\t<li class=\"nav-item \" >
                                <a  class=\"me-3\" href=\"#\">Contact</a>
                            </li>
                            {# <li >
                                <a href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
                            </li> #}
                        </ul>
                        <form class=\"form-inline mt-2 mt-md-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Votre recherche\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                        </form>
                        <div class=\"navbar-item-custom d-flex\">
                            {% if app.user %}
                                <a class=\"nav-link active\" aria-current=\"page\" href=href=\"{{ path('account') }}\">Mon compte <small>({{ app.user.firstname }})</small></a>
                                |
                                <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                            {% else %}
                                <a href=\"{{ path('app_login') }}\">Connexion</a>
                                |
                                <a href=\"{{ path('app_register') }}\">Inscription</a>
                            {% endif %}
                        </div>
                    </div>
\t
\t

\t\t\t\t\t\t{# <div class=\"navbar-item-custom d-flex\">
                            {% if app.user %}
                                <a href=\"{{ path('account') }}\">Mon compte</a>
                                |
                                <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                            {% else %}
                                <a href=\"{{ path('app_login') }}\">Connexion</a>
                                |
                                <a href=\"{{ path('app_register') }}\">Inscription</a>
                            {% endif %}
                        </div> #}
    {# <div class=\"collapse navbar-collapse me-0\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t  {% if app.user %}
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=href=\"{{ path('account') }}\">Mon compte <small>({{ app.user.firstname }})</small></a>
        </li>
\t\t|
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
        </li>
\t\t{% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Inscription</a>
        </li>
\t\t{% endif %}
      </ul>
    </div> #}
  </div>
</nav>






                    {# <div class=\"d-flex align-items-center\">
                        <ul class=\"d-flex justify-content-around\">
                            <li>
                                <a href=\"{{ path('home') }}\">Home
                                    <span class=\"sr-only\">(current)</span>                                    </a>
                            </li>
                            <li >
                                <a  href=\"#\">Nos produits</a>
                            </li>
                            <li >
                                <a  href=\"#\">Contact</a>
                            </li>
                            <li >
                                <a href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
                            </li>
                        </ul>
                        <form class=\"form-inline mt-2 mt-md-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Votre recherche\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                        </form>
                        <div class=\"navbar-item-custom d-flex\">
                            {% if app.user %}
                                <a href=\"{{ path('account') }}\">Mon compte</a>
                                |
                                <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                            {% else %}
                                <a href=\"{{ path('app_login') }}\">Connexion</a>
                                |
                                <a href=\"{{ path('app_register') }}\">Inscription</a>
                            {% endif %}
                        </div>
                    </div> #}
\t\t\t\t</div>
            </div>      

\t\t\t{# <div class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('home') }}\">Do Sport</a>
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('home') }}\">Home
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Nos produits</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<form class=\"form-inline mt-2 mt-md-0\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Votre recherche\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('account') }}\">Mon compte</a>
\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> #}
\t\t\t{# </div> #}

\t\t</div>
\t\t<main role=\"main\">

\t\t\t{% if block('carousel') is defined %}

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

\t\t\t{% endif %}


\t\t\t<!-- Marketing messaging and featurettes
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ================================================== -->
\t\t\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t\t<div class=\"container marketing {% if block('carousel') is not defined %}mt-5{% endif %}\"> {% block content %}{% endblock %}

\t\t\t\t</div>
\t\t\t\t<!-- /.container -->

\t\t\t\t<!-- FOOTER -->
\t\t\t\t<footer class=\"footer-custom\">
\t\t\t\t\t<p class=\"float-right\">
\t\t\t\t\t\t{# <a href=\"#\">Back to top</a> #}
\t\t\t\t\t</p>
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
\t\t\t<script src={{ asset('assets/js/bootstrap.bundle.js') }}></script>

\t\t\t<script src=\"https://use.fontawesome.com/04fd9d0789.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t\t</body>
\t</html>
", "base.html.twig_original", "/homepages/9/d914851249/htdocs/dosport/templates/base.html.twig_original");
    }
}
