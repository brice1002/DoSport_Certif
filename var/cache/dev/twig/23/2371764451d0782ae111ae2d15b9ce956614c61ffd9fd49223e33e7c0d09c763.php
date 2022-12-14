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

Editeur : le pr??sent site est ??dit?? par la soci??t?? Do Sport France, SAS au capital de 41 509 983,00 ???, immatricul??e au Registre du Commerce et des Soci??t??s de Paris sous le num??ro 000 000 000, dont le si??ge social est situ?? 1 Avenue des champs Elysees, 75000 Paris. TVA intracommunautaire : FR07000000000<br>
<br>
T??l??phone : 01.01.01.01.01<br>
<br>
Contact mail : contactez nous<br>
<br>
Directeur de publication : Brice<br>
<br>
L???h??bergement et le stockage du site sont assur??s par :<br>
<br>
<br>
<br>
IONOS FRANCE<br>
<br>
2, Place de la D??fense, Maison de la D??fense<br>
<br>
92974, Paris La D??fense, Cedex 7<br>
<br>
S.A.S.U au capital de 2 000 euros<br>
<br>
Nanterre B 750 118 895<br>



<h2 class=\"mt-5\">II - Donn??es personnelles</h2>
<br>
La soci??t?? Do Sport France collecte des donn??es ?? caract??re personnel, notamment : les noms, pr??noms, date de naissance, adresse de messagerie ??lectronique, num??ro de carte de fid??lit?? et adresse IP des internautes. A cette fin, le pr??sent site a fait l???objet d???une d??claration aupr??s de la Commission Nationale de l???Informatique et des Libert??s. Les donn??es ?? caract??re personnel ainsi recueillies sont collect??es, trait??es, enregistr??es et stock??es en conformit?? avec les dispositions l??gales en vigueur en France. Ces donn??es sont n??cessaires pour la gestion de la commande par la soci??t?? Do Sport France et ses prestataires.<br>
<br>
<br>
<br>
Ces donn??es pourront ??galement ??tre utilis??es par la soci??t?? Do Sport France et/ou ses partenaires afin de communiquer diverses informations, notamment commerciales (newsletters, email, ???etc) sous r??serve de l???acceptation pr??alable du destinataire.<br>
<br>
<br>
<br>
Les donn??es collect??es automatiquement (cookies???) ou non pourront ??galement ??tre utilis??es ?? des fins techniques et statistiques, dans le cadre de l???administration du site (fr??quence de consultation du site, statistiques de vente, ???).<br>
<br>
<br>
<br>
Droit d???acc??s, de rectification ou de suppression<br>
<br>
Conform??ment aux dispositions de la loi Informatique et Libert??s du 6 janvier 1978 modifi??e, l???internaute dispose d???un droit d???acc??s de modification, de suppression des donn??es le concernant en adressant un courrier ?? :<br>
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
ou via le lien de d??sabonnement contenu en bas de chacun des courriers ??lectroniques envoy??s par la soci??t?? Do Sport France.<br>
<br>
<br>
<br>
L???internaute peut ??galement consulter et modifier ses informations dans la rubrique ?? Mon compte ?? du site.<br>
<br>
<br>
<br>
Cookies<br>
<br>
Le pr??sent site peut ??tre amen?? ?? utiliser les syst??mes de ?? cookies ??. Le cookie ne permet pas de d???identifier mais permet de recueillir les informations relatives ?? sa visite sur le site internet (temps de connexion, pages visit??es???). Ces ?? cookies ?? ??viteront ??galement de devoir fournir chaque fois des informations d??j?? communiqu??es dans la mesure o?? ils se souviendront des informations communiqu??es ?? une date ant??rieure. Il vous est possible de s???opposer ?? l???enregistrement de cookies en d??sactivant cette fonction du navigateur dans les pr??f??rences de celui-ci.<br>
<br>
<br>
<br>
Pour plus d???informations sur les cookies et leur utilisation, consulter le site de la Commission Nationale de l??? Informatique et des Libert??s ?? l???adresse suivante : http.www.cnil.fr.<br>



<h2 class=\"mt-5\">III - Droits d???auteur/copyright</h2>

L???ensemble du site et chacun de ses ??l??ments rel??vent de la l??gislation fran??aise et internationale sur la propri??t?? intellectuelle, notamment droits d???auteurs, dessins et mod??les, marques, noms de domaine, logiciels ou bases de donn??es??? (sans que cette liste ne soit exhaustive).<br>
<br>
<br>

A ce titre, tous les droit<br>s de reproduction, de repr??sentation et de communication publique sont r??serv??s y compris pour les documents t??l??chargeables et les repr??sentations visuelles, photographiques, audiovisuelles ou autres.<br>
<br>
<br>
<br>
Seul le droit de consulter le site est conf??r?? aux internautes. La reproduction de tout ou partie du contenu est seulement autoris?? aux fins exclusives d???information pour un usage personnel et priv??.<br>
<br>
<br>
<br>
Tout lien mise en place en direction du site de la soci??t?? Do Sport France doit faire l???objet d???une autorisation pr??alable et ??crite de la soci??t?? Do Sport France. La soci??t?? Do Sport France d??cline toute responsabilit?? concernant le contenu de ces liens.<br>
<br>
<br>
<br>
En toute hypoth??se, les liens hypertextes renvoyant au site web devront ??tre retir??s ?? premi??re demande de la soci??t?? Do Sport France.<br>



<h2 class=\"mt-5\">IV - Responsabilit??</h2>

La soci??t?? Do Sport France s???efforce d???assurer aux mieux de ses possibilit??s, l???exactitude et la mise ?? jour des informations diffus??es sur le site, dont elle se r??serve le droit de corriger, ?? tout moment et sans pr??avis, le contenu.<br>
<br>
<br>
<br>
Le site contient des informations provenant de tierces personnes, la soci??t?? Do Sport France ne donne donc aucune garantie quant ?? l???exactitude, la pr??cision ou l???exhaustivit?? des informations mises ?? disposition sur le site. La responsabilit?? de la soci??t?? Do Sport France ne pourra en aucun cas ??tre engag??e quant ?? d?????ventuelles erreurs ponctuelles pouvant survenir sur le site.<br>



<h2 class=\"mt-5\">V - Loi applicable</h2>

Les pr??sentes dispositions sont soumises ?? la loi fran??aise.</div>
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

Editeur : le pr??sent site est ??dit?? par la soci??t?? Do Sport France, SAS au capital de 41 509 983,00 ???, immatricul??e au Registre du Commerce et des Soci??t??s de Paris sous le num??ro 000 000 000, dont le si??ge social est situ?? 1 Avenue des champs Elysees, 75000 Paris. TVA intracommunautaire : FR07000000000<br>
<br>
T??l??phone : 01.01.01.01.01<br>
<br>
Contact mail : contactez nous<br>
<br>
Directeur de publication : Brice<br>
<br>
L???h??bergement et le stockage du site sont assur??s par :<br>
<br>
<br>
<br>
IONOS FRANCE<br>
<br>
2, Place de la D??fense, Maison de la D??fense<br>
<br>
92974, Paris La D??fense, Cedex 7<br>
<br>
S.A.S.U au capital de 2 000 euros<br>
<br>
Nanterre B 750 118 895<br>



<h2 class=\"mt-5\">II - Donn??es personnelles</h2>
<br>
La soci??t?? Do Sport France collecte des donn??es ?? caract??re personnel, notamment : les noms, pr??noms, date de naissance, adresse de messagerie ??lectronique, num??ro de carte de fid??lit?? et adresse IP des internautes. A cette fin, le pr??sent site a fait l???objet d???une d??claration aupr??s de la Commission Nationale de l???Informatique et des Libert??s. Les donn??es ?? caract??re personnel ainsi recueillies sont collect??es, trait??es, enregistr??es et stock??es en conformit?? avec les dispositions l??gales en vigueur en France. Ces donn??es sont n??cessaires pour la gestion de la commande par la soci??t?? Do Sport France et ses prestataires.<br>
<br>
<br>
<br>
Ces donn??es pourront ??galement ??tre utilis??es par la soci??t?? Do Sport France et/ou ses partenaires afin de communiquer diverses informations, notamment commerciales (newsletters, email, ???etc) sous r??serve de l???acceptation pr??alable du destinataire.<br>
<br>
<br>
<br>
Les donn??es collect??es automatiquement (cookies???) ou non pourront ??galement ??tre utilis??es ?? des fins techniques et statistiques, dans le cadre de l???administration du site (fr??quence de consultation du site, statistiques de vente, ???).<br>
<br>
<br>
<br>
Droit d???acc??s, de rectification ou de suppression<br>
<br>
Conform??ment aux dispositions de la loi Informatique et Libert??s du 6 janvier 1978 modifi??e, l???internaute dispose d???un droit d???acc??s de modification, de suppression des donn??es le concernant en adressant un courrier ?? :<br>
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
ou via le lien de d??sabonnement contenu en bas de chacun des courriers ??lectroniques envoy??s par la soci??t?? Do Sport France.<br>
<br>
<br>
<br>
L???internaute peut ??galement consulter et modifier ses informations dans la rubrique ?? Mon compte ?? du site.<br>
<br>
<br>
<br>
Cookies<br>
<br>
Le pr??sent site peut ??tre amen?? ?? utiliser les syst??mes de ?? cookies ??. Le cookie ne permet pas de d???identifier mais permet de recueillir les informations relatives ?? sa visite sur le site internet (temps de connexion, pages visit??es???). Ces ?? cookies ?? ??viteront ??galement de devoir fournir chaque fois des informations d??j?? communiqu??es dans la mesure o?? ils se souviendront des informations communiqu??es ?? une date ant??rieure. Il vous est possible de s???opposer ?? l???enregistrement de cookies en d??sactivant cette fonction du navigateur dans les pr??f??rences de celui-ci.<br>
<br>
<br>
<br>
Pour plus d???informations sur les cookies et leur utilisation, consulter le site de la Commission Nationale de l??? Informatique et des Libert??s ?? l???adresse suivante : http.www.cnil.fr.<br>



<h2 class=\"mt-5\">III - Droits d???auteur/copyright</h2>

L???ensemble du site et chacun de ses ??l??ments rel??vent de la l??gislation fran??aise et internationale sur la propri??t?? intellectuelle, notamment droits d???auteurs, dessins et mod??les, marques, noms de domaine, logiciels ou bases de donn??es??? (sans que cette liste ne soit exhaustive).<br>
<br>
<br>

A ce titre, tous les droit<br>s de reproduction, de repr??sentation et de communication publique sont r??serv??s y compris pour les documents t??l??chargeables et les repr??sentations visuelles, photographiques, audiovisuelles ou autres.<br>
<br>
<br>
<br>
Seul le droit de consulter le site est conf??r?? aux internautes. La reproduction de tout ou partie du contenu est seulement autoris?? aux fins exclusives d???information pour un usage personnel et priv??.<br>
<br>
<br>
<br>
Tout lien mise en place en direction du site de la soci??t?? Do Sport France doit faire l???objet d???une autorisation pr??alable et ??crite de la soci??t?? Do Sport France. La soci??t?? Do Sport France d??cline toute responsabilit?? concernant le contenu de ces liens.<br>
<br>
<br>
<br>
En toute hypoth??se, les liens hypertextes renvoyant au site web devront ??tre retir??s ?? premi??re demande de la soci??t?? Do Sport France.<br>



<h2 class=\"mt-5\">IV - Responsabilit??</h2>

La soci??t?? Do Sport France s???efforce d???assurer aux mieux de ses possibilit??s, l???exactitude et la mise ?? jour des informations diffus??es sur le site, dont elle se r??serve le droit de corriger, ?? tout moment et sans pr??avis, le contenu.<br>
<br>
<br>
<br>
Le site contient des informations provenant de tierces personnes, la soci??t?? Do Sport France ne donne donc aucune garantie quant ?? l???exactitude, la pr??cision ou l???exhaustivit?? des informations mises ?? disposition sur le site. La responsabilit?? de la soci??t?? Do Sport France ne pourra en aucun cas ??tre engag??e quant ?? d?????ventuelles erreurs ponctuelles pouvant survenir sur le site.<br>



<h2 class=\"mt-5\">V - Loi applicable</h2>

Les pr??sentes dispositions sont soumises ?? la loi fran??aise.</div>
{% endblock %}
", "home/mentionLegal.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\home\\mentionLegal.html.twig");
    }
}
