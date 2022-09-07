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
class __TwigTemplate_6e1af8fdf5a337df9227db833003f9cf42a1ae0b966e5664c35538e6ba64b349 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/nous.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/nous.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/nous.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_cover($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cover"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cover"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  165 => 80,  161 => 77,  143 => 61,  141 => 60,  136 => 57,  117 => 40,  112 => 38,  94 => 21,  92 => 14,  90 => 13,  87 => 8,  77 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block cover %}
{% endblock %}

{% block content %}

\t{# <div class=\"container-fluid mb-5\" >
\t\t<div class=\"row\" style=\"background-color: #000000;\">
\t\t\t<div style=\"container\">
\t\t\t\t<img class='img-fluid ms-0' src=\"{{ asset('assets/img/pexels-helena-lopes-1015568_modif.png') }}\"> #}
\t\t\t\t{# <div style=\"position:absolute;top:10%; width:100%; height:100%; z-index:2;font-size:5.9vw\"> #}
\t\t\t\t{# <div class=\"img-fluid \" style=\"position:absolute;top:10%; width:100%; height:auto; z-index:2;font-size:5.9vw\">
\t\t\t\t\t<center class=\"text-white\"><b>Notre sport préféré :<br>Faire baisser les prix du vôtre</b></center>
\t\t\t\t</div> 
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div> #}


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
\t\t\t{# <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"> #}
\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/pexels-jopwell-2422290_500x500.png') }}\" alt=\"groupe\">
\t\t\t\t{# <title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text> #}
\t\t\t</svg>
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
\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/pexels-elevate-1267697_500x500.png') }}\" alt=\"groupe\">

\t\t\t{# <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"> #}
\t\t\t\t{# <title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text> #}
\t\t\t</svg>
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
\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/pexels-run-ffwpu-1571939_500x500.jpg') }}\" alt=\"groupe\">
\t\t\t{# <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\">
\t\t\t\t<title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text> #}
\t\t\t</svg>
\t\t</div>
\t</div>

\t<hr class=\"featurette-divider\">
\t</div>
{% endblock %}
", "home/nous.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\home\\nous.html.twig");
    }
}
