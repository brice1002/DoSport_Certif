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

/* home/nous.html.twig */
class __TwigTemplate_bc78b881eea6e82800a846440a85f3151c3328fa21f0af6ccce5d53953c48dcc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cover' => [$this, 'block_cover'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/nous.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cover($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
\t";
        // line 13
        echo "\t\t\t\t";
        // line 14
        echo "\t\t\t\t";
        // line 21
        echo "

\t

\t<div class=\"container\">
    <div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">On partage
\t\t\t\t<span class=\"text-muted\">tous la même vision.</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Un jour, on s’est posé une question :<br>
\t\t\t« Pourquoi payer cher la pratique d’un sport alors que c’est pour notre bien ? ».<br>
\t\t\tC’est avec cette idée qu’on a lancé DoSport.<br>
\t\t\tLe but : rendre accessible au plus grand nombre et à moindre coût l’équipement du sportif. Et avec les années, on a fini par inventer notre propre sport : celui de faire baisser les prix du vôtre.</p>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t";
        // line 38
        echo "\t\t\t<img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pexels-jopwell-2422290_500x500.png"), "html", null, true);
        echo "\" alt=\"groupe\">
\t\t\t\t";
        // line 40
        echo "\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t<h2 class=\"featurette-heading\">On a une technique

\t\t\t\t<span class=\"text-muted\">pour trouver les meilleurs prix</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">C’est du sport ! On rassemble tous les stocks excédentaires des meilleures marques en Europe. Une partie de ces surplus sont destinés à la destruction et pourraient représenter de futurs déchets environnementaux.<br>
\t\t\tNous, on les négocie au meilleur prix pour vous offrir les meilleures offres, sur du matériel de grande qualité.<br>
\t\t\tPourquoi se priver ?</p>
\t\t</div>
\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t<img class=\"img-fluid\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pexels-elevate-1267697_500x500.png"), "html", null, true);
        echo "\" alt=\"groupe\">

\t\t\t";
        // line 60
        echo "\t\t\t\t";
        // line 61
        echo "\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">

\t<div class=\"row featurette\">
\t\t<div class=\"col-md-7\">
\t\t\t<h2 class=\"featurette-heading\">On a des performances
\t\t\t\t<span class=\"text-muted\">qui parlent de nous</span>
\t\t\t</h2>
\t\t\t<p class=\"lead\">Sans trop se la raconter, on affiche de bonnes performances.<br>
\t\t\tAujourd’hui, DoSport est devenu leader dans sa catégorie en Europe. 14 millions de nos membres profitent chaque jour de nos offres, des offres jusqu’à -80% sur une centaine de disciplines. Plus de 3000 marques nous ont déjà fait confiance.<br>
\t\t\tOn se la raconte un peu quand même.</p>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<img class=\"img-fluid\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pexels-run-ffwpu-1571939_500x500.jpg"), "html", null, true);
        echo "\" alt=\"groupe\">
\t\t\t";
        // line 80
        echo "\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "home/nous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 80,  131 => 77,  113 => 61,  111 => 60,  106 => 57,  87 => 40,  82 => 38,  64 => 21,  62 => 14,  60 => 13,  57 => 8,  53 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/nous.html.twig", "/homepages/9/d914851249/htdocs/dosport/templates/home/nous.html.twig");
    }
}
