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

/* home/mentionLegal.html.twig */
class __TwigTemplate_7812e988280e49e3bbfeef72d4f1063acb8794f984578d5da0447213f504e302 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mentions' => [$this, 'block_mentions'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentionLegal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentionLegal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/mentionLegal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_mentions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mentions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mentions"));

        
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
        echo "\t<div class=\"container-fluid\">
\t\t<h2 class=\"mt-5\">I - Publication du site</h2>

Editeur : le présent site est édité par la société Do Sport France, SAS au capital de 41 509 983,00 €, immatriculée au Registre du Commerce et des Sociétés de Paris sous le numéro 000 000 000, dont le siège social est situé 1 Avenue des champs Elysees, 75000 Paris. TVA intracommunautaire : FR07000000000<br>
<br>
Téléphone : 01.01.01.01.01<br>
<br>
Contact mail : contactez nous<br>
<br>
Directeur de publication : Brice<br>
<br>
L’hébergement et le stockage du site sont assurés par :<br>
<br>
<br>
<br>
IONOS FRANCE<br>
<br>
2, Place de la Défense, Maison de la Défense<br>
<br>
92974, Paris La Défense, Cedex 7<br>
<br>
S.A.S.U au capital de 2 000 euros<br>
<br>
Nanterre B 750 118 895<br>



<h2 class=\"mt-5\">II - Données personnelles</h2>
<br>
La société Do Sport France collecte des données à caractère personnel, notamment : les noms, prénoms, date de naissance, adresse de messagerie électronique, numéro de carte de fidélité et adresse IP des internautes. A cette fin, le présent site a fait l’objet d’une déclaration auprès de la Commission Nationale de l’Informatique et des Libertés. Les données à caractère personnel ainsi recueillies sont collectées, traitées, enregistrées et stockées en conformité avec les dispositions légales en vigueur en France. Ces données sont nécessaires pour la gestion de la commande par la société Do Sport France et ses prestataires.<br>
<br>
<br>
<br>
Ces données pourront également être utilisées par la société Do Sport France et/ou ses partenaires afin de communiquer diverses informations, notamment commerciales (newsletters, email, …etc) sous réserve de l’acceptation préalable du destinataire.<br>
<br>
<br>
<br>
Les données collectées automatiquement (cookies…) ou non pourront également être utilisées à des fins techniques et statistiques, dans le cadre de l’administration du site (fréquence de consultation du site, statistiques de vente, …).<br>
<br>
<br>
<br>
Droit d’accès, de rectification ou de suppression<br>
<br>
Conformément aux dispositions de la loi Informatique et Libertés du 6 janvier 1978 modifiée, l’internaute dispose d’un droit d’accès de modification, de suppression des données le concernant en adressant un courrier à :<br>
<br>
<br>
<br>
Service Clients Do Sport,<br>
<br>
17 avenue de la Falaise<br>
<br>
38360 SASSENAGE<br>
<br>
<br>
<br>
ou via le lien de désabonnement contenu en bas de chacun des courriers électroniques envoyés par la société Do Sport France.<br>
<br>
<br>
<br>
L’internaute peut également consulter et modifier ses informations dans la rubrique « Mon compte » du site.<br>
<br>
<br>
<br>
Cookies<br>
<br>
Le présent site peut être amené à utiliser les systèmes de « cookies ». Le cookie ne permet pas de d’identifier mais permet de recueillir les informations relatives à sa visite sur le site internet (temps de connexion, pages visitées…). Ces « cookies » éviteront également de devoir fournir chaque fois des informations déjà communiquées dans la mesure où ils se souviendront des informations communiquées à une date antérieure. Il vous est possible de s’opposer à l’enregistrement de cookies en désactivant cette fonction du navigateur dans les préférences de celui-ci.<br>
<br>
<br>
<br>
Pour plus d’informations sur les cookies et leur utilisation, consulter le site de la Commission Nationale de l’ Informatique et des Libertés à l’adresse suivante : http.www.cnil.fr.<br>



<h2 class=\"mt-5\">III - Droits d’auteur/copyright</h2>

L’ensemble du site et chacun de ses éléments relèvent de la législation française et internationale sur la propriété intellectuelle, notamment droits d’auteurs, dessins et modèles, marques, noms de domaine, logiciels ou bases de données… (sans que cette liste ne soit exhaustive).<br>
<br>
<br>

A ce titre, tous les droit<br>s de reproduction, de représentation et de communication publique sont réservés y compris pour les documents téléchargeables et les représentations visuelles, photographiques, audiovisuelles ou autres.<br>
<br>
<br>
<br>
Seul le droit de consulter le site est conféré aux internautes. La reproduction de tout ou partie du contenu est seulement autorisé aux fins exclusives d’information pour un usage personnel et privé.<br>
<br>
<br>
<br>
Tout lien mise en place en direction du site de la société Do Sport France doit faire l’objet d’une autorisation préalable et écrite de la société Do Sport France. La société Do Sport France décline toute responsabilité concernant le contenu de ces liens.<br>
<br>
<br>
<br>
En toute hypothèse, les liens hypertextes renvoyant au site web devront être retirés à première demande de la société Do Sport France.<br>



<h2 class=\"mt-5\">IV - Responsabilité</h2>

La société Do Sport France s’efforce d’assurer aux mieux de ses possibilités, l’exactitude et la mise à jour des informations diffusées sur le site, dont elle se réserve le droit de corriger, à tout moment et sans préavis, le contenu.<br>
<br>
<br>
<br>
Le site contient des informations provenant de tierces personnes, la société Do Sport France ne donne donc aucune garantie quant à l’exactitude, la précision ou l’exhaustivité des informations mises à disposition sur le site. La responsabilité de la société Do Sport France ne pourra en aucun cas être engagée quant à d’éventuelles erreurs ponctuelles pouvant survenir sur le site.<br>



<h2 class=\"mt-5\">V - Loi applicable</h2>

Les présentes dispositions sont soumises à la loi française.</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/mentionLegal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 8,  77 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block mentions %}
{% endblock %}

{% block content %}
\t<div class=\"container-fluid\">
\t\t<h2 class=\"mt-5\">I - Publication du site</h2>

Editeur : le présent site est édité par la société Do Sport France, SAS au capital de 41 509 983,00 €, immatriculée au Registre du Commerce et des Sociétés de Paris sous le numéro 000 000 000, dont le siège social est situé 1 Avenue des champs Elysees, 75000 Paris. TVA intracommunautaire : FR07000000000<br>
<br>
Téléphone : 01.01.01.01.01<br>
<br>
Contact mail : contactez nous<br>
<br>
Directeur de publication : Brice<br>
<br>
L’hébergement et le stockage du site sont assurés par :<br>
<br>
<br>
<br>
IONOS FRANCE<br>
<br>
2, Place de la Défense, Maison de la Défense<br>
<br>
92974, Paris La Défense, Cedex 7<br>
<br>
S.A.S.U au capital de 2 000 euros<br>
<br>
Nanterre B 750 118 895<br>



<h2 class=\"mt-5\">II - Données personnelles</h2>
<br>
La société Do Sport France collecte des données à caractère personnel, notamment : les noms, prénoms, date de naissance, adresse de messagerie électronique, numéro de carte de fidélité et adresse IP des internautes. A cette fin, le présent site a fait l’objet d’une déclaration auprès de la Commission Nationale de l’Informatique et des Libertés. Les données à caractère personnel ainsi recueillies sont collectées, traitées, enregistrées et stockées en conformité avec les dispositions légales en vigueur en France. Ces données sont nécessaires pour la gestion de la commande par la société Do Sport France et ses prestataires.<br>
<br>
<br>
<br>
Ces données pourront également être utilisées par la société Do Sport France et/ou ses partenaires afin de communiquer diverses informations, notamment commerciales (newsletters, email, …etc) sous réserve de l’acceptation préalable du destinataire.<br>
<br>
<br>
<br>
Les données collectées automatiquement (cookies…) ou non pourront également être utilisées à des fins techniques et statistiques, dans le cadre de l’administration du site (fréquence de consultation du site, statistiques de vente, …).<br>
<br>
<br>
<br>
Droit d’accès, de rectification ou de suppression<br>
<br>
Conformément aux dispositions de la loi Informatique et Libertés du 6 janvier 1978 modifiée, l’internaute dispose d’un droit d’accès de modification, de suppression des données le concernant en adressant un courrier à :<br>
<br>
<br>
<br>
Service Clients Do Sport,<br>
<br>
17 avenue de la Falaise<br>
<br>
38360 SASSENAGE<br>
<br>
<br>
<br>
ou via le lien de désabonnement contenu en bas de chacun des courriers électroniques envoyés par la société Do Sport France.<br>
<br>
<br>
<br>
L’internaute peut également consulter et modifier ses informations dans la rubrique « Mon compte » du site.<br>
<br>
<br>
<br>
Cookies<br>
<br>
Le présent site peut être amené à utiliser les systèmes de « cookies ». Le cookie ne permet pas de d’identifier mais permet de recueillir les informations relatives à sa visite sur le site internet (temps de connexion, pages visitées…). Ces « cookies » éviteront également de devoir fournir chaque fois des informations déjà communiquées dans la mesure où ils se souviendront des informations communiquées à une date antérieure. Il vous est possible de s’opposer à l’enregistrement de cookies en désactivant cette fonction du navigateur dans les préférences de celui-ci.<br>
<br>
<br>
<br>
Pour plus d’informations sur les cookies et leur utilisation, consulter le site de la Commission Nationale de l’ Informatique et des Libertés à l’adresse suivante : http.www.cnil.fr.<br>



<h2 class=\"mt-5\">III - Droits d’auteur/copyright</h2>

L’ensemble du site et chacun de ses éléments relèvent de la législation française et internationale sur la propriété intellectuelle, notamment droits d’auteurs, dessins et modèles, marques, noms de domaine, logiciels ou bases de données… (sans que cette liste ne soit exhaustive).<br>
<br>
<br>

A ce titre, tous les droit<br>s de reproduction, de représentation et de communication publique sont réservés y compris pour les documents téléchargeables et les représentations visuelles, photographiques, audiovisuelles ou autres.<br>
<br>
<br>
<br>
Seul le droit de consulter le site est conféré aux internautes. La reproduction de tout ou partie du contenu est seulement autorisé aux fins exclusives d’information pour un usage personnel et privé.<br>
<br>
<br>
<br>
Tout lien mise en place en direction du site de la société Do Sport France doit faire l’objet d’une autorisation préalable et écrite de la société Do Sport France. La société Do Sport France décline toute responsabilité concernant le contenu de ces liens.<br>
<br>
<br>
<br>
En toute hypothèse, les liens hypertextes renvoyant au site web devront être retirés à première demande de la société Do Sport France.<br>



<h2 class=\"mt-5\">IV - Responsabilité</h2>

La société Do Sport France s’efforce d’assurer aux mieux de ses possibilités, l’exactitude et la mise à jour des informations diffusées sur le site, dont elle se réserve le droit de corriger, à tout moment et sans préavis, le contenu.<br>
<br>
<br>
<br>
Le site contient des informations provenant de tierces personnes, la société Do Sport France ne donne donc aucune garantie quant à l’exactitude, la précision ou l’exhaustivité des informations mises à disposition sur le site. La responsabilité de la société Do Sport France ne pourra en aucun cas être engagée quant à d’éventuelles erreurs ponctuelles pouvant survenir sur le site.<br>



<h2 class=\"mt-5\">V - Loi applicable</h2>

Les présentes dispositions sont soumises à la loi française.</div>
{% endblock %}
", "home/mentionLegal.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\home\\mentionLegal.html.twig");
    }
}
