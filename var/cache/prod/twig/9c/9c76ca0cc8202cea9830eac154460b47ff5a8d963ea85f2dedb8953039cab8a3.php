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
class __TwigTemplate_da66b9e3437b3ae123ee8a07b7b37710287a59da542cbbe3be4d8505474f82fb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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

\t<hr class=\"featurette-divider\">

<!-- /END THE FEATURETTES -->


";
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
        return array (  225 => 126,  184 => 78,  180 => 75,  168 => 69,  162 => 67,  157 => 64,  152 => 62,  148 => 61,  141 => 59,  137 => 57,  134 => 53,  130 => 52,  123 => 47,  111 => 37,  101 => 32,  93 => 27,  83 => 22,  75 => 17,  64 => 12,  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/home/index.html.twig");
    }
}
