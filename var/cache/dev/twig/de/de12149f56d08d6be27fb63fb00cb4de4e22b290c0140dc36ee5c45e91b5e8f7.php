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

/* home/cgv.html.twig */
class __TwigTemplate_fc6582a679b37f2c1a5d1286d7da0c591450d432ae60121b5cdb58da1b1e7486 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cgv' => [$this, 'block_cgv'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cgv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cgv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/cgv.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_cgv($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cgv"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cgv"));

        
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
\t\t<h2>ARTICLE 1 - OBJET</h2>
<p>Les présentes Conditions Générales de Vente sont conclues entre la société Do Sport France, SAS au capital de 41 509 983,00 € dont le siège social est situé 17 Avenue de la Falaise, 38360 Sassenage, immatriculée au RCS de Grenoble sous le numéro 428 560 031 (ci-après dénommée « la Société ») et toute personne physique effectuant un achat (ci-après dénommée « le Client ») sur le site www.DoSport.com (ci-après désigné « le Site »).<br>
<br>
Conformément aux dispositions du code de l’environnement, et en sa qualité de distributeur de produits générateurs de déchets, la Société est adhérente à plusieurs filières de Responsabilité Elargie des Producteurs de déchets (REP) et dispose à ce titre, d’un identifiant unique (IDU) pour chaque filière auprès de qui elle est rattachée, à savoir :<br>
<br>
<br> 
<br>
IDU Eléments d’Ameublement (DEA) : FR006076_10WIDG<br>
<br>
IDU Textile, Linge de maison et Chaussures (TLC) : FR218603_11IBJU<br>
<br>
IDU Déchets d’Equipements Electriques et Electroniques (DEEE) : FR006076_05NNP3<br>
<br>
IDU Piles et Accumulateurs : FR002491_06F8EN<br>

IDU Emballages Ménagers & Papiers (CITEO) : FR219498_01WCRR<br>

IDU Articles de Sport et de Loisirs (ASL) : FR231727_13JCWL<br>
<br>
<br>
<br>
Toutes les commandes passées par l’intermédiaire du Site sont soumises sans réserve aux présentes Conditions Générales de Vente.<br>
<br>
Les présentes Conditions Générales de Vente s’appliquent à l’exclusion de toutes autres conditions, notamment celles applicables aux ventes réalisées dans les magasins Do Sport.<br>
<br>
De même, il est précisé que les commandes effectuées par le biais de la Marketplace ne sont pas soumises aux présentes Conditions Générales de Ventes (il convient de se référer aux Conditions Générales de Vente de la Marketplace).<br>
<br>
Les présentes Conditions Générales de Vente représentent l’intégralité des engagements réciproques de la Société et du Client qui les accepte expressément.<br>
<br>
Les commandes ne peuvent être passées que par des personnes physiques majeures résidant en France métropolitaine agissant à des fins non professionnelles et achetant pour leurs besoins personnels.</p>



<h2 class=\"mt-5\">ARTICLE 2 - PRODUITS COMMERCIALISÉS</h2>
<p>Le Client peut sélectionner un ou plusieurs produits parmi les différentes catégories proposées sur le Site. Il est précisé que la Société est susceptible de modifier à tout moment l’assortiment de produits proposés sur le Site, sans préjudice des commandes passées par le Client.<br>
<br>
Conformément aux dispositions du code de la consommation, le Client peut, préalablement à sa commande, prendre connaissance sur le Site des caractéristiques essentielles du ou des produits qu’il désire commander sur la fiche produit correspondante.<br>
<br>
Les produits étant en constante évolution, il est précisé que les fabricants peuvent modifier sans préavis la composition technique et les caractéristiques des références produits.<br>
<br>
L'offre de produits proposée sur le Site peut être différente de celle proposée dans les magasins physiques à enseigne Do Sport.</p>
<br>
<br>
<br>
<h2 class=\"mt-5\">ARTICLE 3 - DISPONIBILITÉ ET PRIX</h2>
<p>Les offres de produits et de prix sont valables tant qu’elles sont visibles sur le Site. En cas d’offres promotionnelles, les prix indiqués seront valables pendant la période de l’offre, sur une sélection de produits.<br>
<br>
Lors du traitement de sa commande, le Client sera informé dans les meilleurs délais par courrier électronique en cas d’indisponibilité de produits commandés. Ces produits ne seront pas facturés au Client.<br>
<br>
Les prix affichés sur le Site sont, par défaut, indiqués en euros et toutes taxes comprises et sont applicables en France métropolitaine.<br>
<br>
Les prix pratiqués sur le site sont indépendants des prix pratiqués dans les magasins Do Sport, sauf mention contraire, ils s’appliquent exclusivement sur les produits achetés en ligne.<br>
<br>
La TVA est appliquée aux taux en vigueur au moment de la passation de la commande.<br>
<br>
La Société se réserve le droit de modifier ses prix à tout moment mais s’engage à appliquer les tarifs en vigueur lors de l’enregistrement de la commande du Client sous réserve de la disponibilité des produits à cette date.<br>
<br>
Les produits demeurent la propriété de la Société jusqu’au complet paiement du prix par le Client. Néanmoins, les risques seront transférés au Client à compter de la réception du(des) produit(s) par le Client.</p>



<h2 class=\"mt-5\">ARTICLE 4 - COMMANDE</h2>
<p>La disponibilité des produits ainsi que le délai de livraison sont affichés sur le Site.<br>
<br>
Toute commande sur le Site suppose l’acceptation expresse et sans réserve des présentes Conditions Générales de Vente, sans toutefois que cette acceptation soit conditionnée par une signature manuscrite de la part du Client.<br>
<br>
Toute passation de commande nécessite la création d’un compte client. Une fois le compte crée, le Client aura accès à son espace client. L’accès à cet espace client est conditionné à l’identification du Client à l’aide de son adresse mail indiquée lors de la création du compte ainsi que du mot de passe secret et personnel choisi. La Société ne saurait être tenue responsable de toute action réalisée sur l’espace client par un tiers auquel le Client aurait communiqué ses identifiants ou qui aurait eu accès au compte suite à une négligence du Client.<br>
<br>
Toutes les informations relatives à la commande seront consultables dans la rubrique « Le suivi de commande » de l’espace client.<br>
<br>
Le Client s’engage à ce que les informations communiquées lors de sa commande soient complètes, exactes et à jour. Dans le cas contraire, la Société se réserve le droit d’annuler purement et simplement la commande.<br>
<br>
La commande peut être effectuée pour une adresse de livraison distincte de l’adresse de facturation.<br>
<br>
Les commandes engagent le Client dès qu’il confirme son paiement en cliquant sur « Valider ».<br>
<br>
Suite à la réception de la commande, la Société adressera au Client un email de confirmation de commande comprenant le récapitulatif de la commande ainsi que son numéro, puis validera définitivement la commande en adressant un email de validation de commande. Ces emails seront envoyés à l’adresse mail renseignée lors de la création du compte client.<br>

La Société se réserve le droit de refuser ou d’annuler une commande si elle estime que le Client se livre à de la distribution ou exerce une activité économique grâce aux produits ainsi commandés ou pour tout autre motif.<br>
<br>
Cas de commande web payée en magasin :Les commandes web payées en magasin comprennent les commandes du client passées chez lui depuis son compte e-commerce et payées en caisse, les commandes du client passées dans le magasin depuis son compte e-commerce et payées en caisse et enfin les commandes du client passées dans le magasin depuis le compte e-commerce du magasin et payées en caisse.<br>
<br>
Une fois la commande passée, elle est en statut « en attente de paiement ». Le client dispose alors de trois jours (du lundi au samedi) pour venir payer sa commande en magasin. Au-delà de ce délai, la commande sera automatiquement annulée.<br>
<br>
Une fois la commande passée, le client devra obligatoirement imprimer le code barre délivré sur la page de confirmation de commande ou dans le mail de validation qui lui sera envoyé. Le numéro du code barre accompagné du numéro du bon de commande sont indispensable lors du paiement en caisse.<br>
<br>
Lorsque la commande est payée, le cycle de vie reste identique à celui des autres commandes passées en ligne.<br>
<br>
Le mode de paiement en caisse n’est pas disponible pour les clients souhaitant être livrés en Fedex Express ni pour les commandes de produit Market Place.<br>
<br>
Service d’e-réservation :Le service d’e-réservation proposé sur le Site par la Société permet au Client de réserver un produit en magasin de son choix, sous réserve de la disponibilité du produit choisi dans le magasin en question.<br>
<br>
Les modalités de fonctionnement de ce service sont accessibles au Client dès lors qu’il utilise le Service d’e-réservation.<br>
<br>
Avis fiche produits : Do Sport propose à ses clients par l’intermédiaire de son partenaire « Avis Vérifiés » la possibilité de laisser un avis à l’issu de son expérience sur le site DoSport.com. Vingt (20) jours après avoir passé sa commande sur le site marchand, le Client reçoit un email de demande d’avis. Le Client a alors la possibilité de laisser un avis sur son expérience achat.<br>
<br>
Le service Client de Do Sport dispose de 14 jours pour prendre connaissance de l’avis et vérifier qu’il respecte les critères de modération mis en place par Avis Vérifiés eu égard aux règlementations en vigueur applicable (non discriminatoire, non injurieux etc.).<br>
<br>
A expiration de ce délai, l’avis sera publié sur le site marchand. Un e-mail sera adressé au Client en cas de refus de publication de l’avis laissé ne respectant les règlementations en vigueur applicables.</p>



<h2 class=\"mt-5\">ARTICLE 5 - MODIFICATION DE LA COMMANDE</h2>
<p>Toute demande de modification de la commande effectuée ne peut être prise en compte par la Société que si elle a été formulée auprès du Service Clients et si la commande n’a pas encore eu un contrôle Adyen NV positif. (voir modalités de contact à l’Article 15 ci-après). Une fois la commande contrôlée par Adyen NV il n’est plus possible de modifier/annuler la commande.<br>
<br>
Dans un souci de rapidité, il est recommandé au Client de contacter le Service Clients par téléphone au numéro indiqué à l’article 15.<br>
<br>
Les commandes web payées en magasin ne sont pas soumises au contrôle Adyen NV et ne sont pas susceptibles de modification/annulation.</p>



<h2 class=\"mt-5\">ARTICLE 6 - RÉCLAMATIONS</h2>
<p>Toute réclamation relative à la réception de la commande (produit reçu abimé, pièce manquante, …) doit être effectuée auprès du Service Clients (voir modalités de contact à l’Article 15 ci-après) avant la fin du délai de rétractation, de quinze (15) jours suivant la réception de la commande pour les clients non adhérents au CLUB Do Sport et de trente (30) jours pour les clients adhérents.<br>
<br>
Passé ce délai, les réclamations ne pourront être prises en compte par la Société sauf celles relatives aux garanties telles que définies à l’Article 11 ci-après.</p>



<h2 class=\"mt-5\">ARTICLE 7 - DROIT DE RÉTRACTATION</h2>
<p>Le Client dispose d’un délai de quinze (15) jours francs à compter de la réception de sa commande pour notifier à la Société son intention de retourner tout produit ne lui convenant pas.<br>
<br>
Pour le Client adhérent au Club Do Sport , le délai de rétractation est porté à trente (30) jours francs.<br>
<br>
Lorsque le délai de rétractation expire un samedi, un dimanche ou un jour férié ou chômé, il est prorogé jusqu’au premier jour ouvrable suivant.<br>
<br>
Le Client devra notifier à la Société sa volonté de se rétracter au moyen d’une déclaration dénuée d’ambigüité. Pour ce faire, le Client pourra utiliser le modèle de formulaire de rétractation disponible en annexe des présentes Conditions Générales de Vente.<br>
<br>
Le Client pourra manifester sa volonté de se rétracter :<br>

- En se rendant dans l'un des magasins de la Société https://www.DoSport.com/magasins/ muni de sa facture d’achat et du produit qu’il souhaite retourner, un récépissé de sa rétractation lui sera alors remis ;<br>
<br>
- En contactant le Service Clients de la Société :<br>
<br>
Soit par mail à l'adresse suivante :<br>
<br>
-service.client@DoSport.fr<br>
<br>
via le formulaire de contact relatif au droit de rétractation en se rendant sur le Service Client en ligne (voir modalités de contact à l’Article 15 ci-après) dans la rubrique « Besoin d’Aide » de l’espace client en cliquant sur la question « je ne veux plus de mon article, je souhaite me rétracter ».<br>
<br>
Les conditions de retour sont accessibles via ce lien﻿<br>
<br>
Soit par courrier à l’adresse suivante :<br>
<br>
Service Clients Do Sport<br>
<br>
17 avenue de la falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Soit par téléphone : du lundi au vendredi de 9h à 20h et le samedi de 9h à 19h au 0970 83 05 05 (coût d'un appel local).<br>
<br>
S’il se rétracte en contactant le Service Clients, le Client devra alors indiquer ses coordonnées et les références de sa commande.<br>
<br>
Le Service Clients accusera réception de la demande du Client et l’informera des modalités de retour du/des produit(s).<br>
<br>
Le Client disposera d’un délai de 30 jours suite à sa notification de rétractation pour retourner son ou ses produit(s).<br>
<br>
Soit via son espace client sur le site www.DoSport.com :<br>
<br>
Conditions de retour d’un article par voie postale pour un « petit produit » ou via un transporteur pour un produit de plus de 30 kg et/ou volumineux (frais de retour à votre charge.<br>
<br>
En se connectant à son espace client, le client devra sélectionner la commande concernée dans la rubrique « Mes commandes » puis « Mes achats » et cliquer sur « Retourner mon produit ». Le Client devra ensuite indiquer le ou les produit(s) qu’il désire retourner et sélectionner le motif du retour avant d’envoyer sa demande.<br>
<br>
La Société n’accepte pas les colis adressés en port dû ou en contre remboursement.<br>
<br>
Le Client est responsable du mode d’emballage choisi pour le retour de son/ses produit(s).<br>
<br>
Le retour d'un colis doit être soigneusement préparé selon les indications mentionnées dans la FAQ Do Sport, disponible à l’adresse : clients.DoSport.com/Simple/Faq.aspx<br>
<br>
Produits exclus du droit de rétractation :Conformément aux dispositions de l’article L221-28 du Code de la Consommation, le droit de rétractation ne peut être exercé pour les biens confectionnés selon les spécifications du Client ou nettement personnalisés.<br>
<br>
De plus, pour des raisons d’hygiène et parce qu’ils ne pourront être re-commercialisés, les produits suivants ne peuvent faire l’objet d’un droit de rétractation dès lors leur emballage a été descellé : protège-dents, bouchons d’oreilles couches pour bébé ou tout autre article requérant des précautions d’hygiène particulières.<br>
<br>
Pour les mêmes raisons, les sous-vêtements, coquilles de protection, articles de sudation et maillots de bain sans protection hygiénique, s’ils ont déjà été utilisés et/ou portés en dehors d’un essai non abusif ne pourront faire l’objet d’une rétractation.<br>
<br>
Seuls les produits retournés complets, munis de leurs étiquettes, notices, garanties, cordons et autres accessoires en parfait état et dans leur emballage d’origine en état d’être commercialisés seront acceptés.<br>
<br>
Frais de renvoi :En cas d’exercice du droit de rétractation, les frais de renvoi du/des produit(s) sont à la charge du Client.<br>
<br>
La Société n’accepte pas les colis adressés en port dû ou en contre remboursement.<br>
<br>
Pour les produits ne pouvant être retournés par la Poste en raison de leur nature et/ou de leur taille, conformément à la règlementation en vigueur, une estimation des frais de retour, auprès d’un transporteur, est communiquée ci-dessous au Client à titre indicatif. Les frais de retour sont à la charge du Client.<br>
<br>
Le montant des frais de retour est calculé en fonction de la typologie de produit et de la distance à parcourir par le transporteur pour récupérer le produit et le ramener en entrepôt.
<br>
- Appareil de musculation : entre 65 € et 140 €<br>
<br>
- Vélo : entre 50 € et 70 €<br>
<br>
Attention, cette estimation de prix n’engage pas la Société. Le prix à payer pour le renvoi du produit sera fonction du transporteur choisi.<br>
<br>
Remboursement suite à la rétractation :Conformément au code de la consommation, la Société est tenue de rembourser la totalité des sommes versées, frais de port (aller) inclus (au tarif standard). Le remboursement sera effectué lors de la réception du/des produit(s) retourné(s). La Société procédera au remboursement selon le moyen de paiement utilisé pour la commande ou sous toute autre forme après accord exprès du Client.</p>



<h2 class=\"mt-5\">ARTICLE 8 - RETOUR</h2>
<p>En dehors du droit de rétractation, le produit pourra être retourné en cas de non-conformité à la commande (erreur de référence ou produit abimé) ou de défectuosité (cf Article 11 - Garantie).<br>
<br>
En cas de réception d’une référence différente de celle commandée ou d’un produit abimé, le Client est invité soit :<br>
<br>
- à se rendre dans l'un des magasins de la Société (https://www.DoSport.com/magasins/) muni de sa facture d’achat et du produit à retourner.<br>
<br>
Dans ce cas, la Société examinera le produit et si celui-ci est non-conforme, elle proposera alors au Client de le rembourser de sa commande et des frais de port associés sous forme d’avoir (seulement si le montant de la commande et des frais de port est supérieure à 5 €) soit sous forme d’espèces, le Client étant libre de choisir.<br>
<br>
- à contacter le Service Clients de la Société en se rendant sur le Service Client en ligne (voir modalités de contact à l’Article 15 ci-après) dans la rubrique « Besoin d’Aide » de l’espace client ou par téléphone : du lundi au vendredi de 9h à 20h et le samedi de 9h à 19h au 0970 83 05 05 (coût d'un appel local).<br>
<br>
Dans ce cas, le produit non conforme ou abîmé devra être retourné à la Société et celle-ci proposera de lui rembourser l’intégralité du montant de la commande (prix du produit + frais de livraison éventuellement payés) selon le même mode de règlement que celui utilisé lors de la commande dès réception du produit s’avérant non-conforme ou abîmé.<br>
<br>
Les frais de retour seront alors remboursés sur la base des tarifs appliqués par les services postaux pour les envois en colissimo suivi.<br>
<br>
En cas de défectuosité du produit commandé, le Client bénéficiera des garanties légales et devra se rendre dans le magasin Do Sport le plus proche pour la prise en charge de son produit soit dans un point Mondial Relay (service gratuit uniquement disponible pour les petits produits (moins de 30 kilos)) conformément à l’article 11 – Garantie des présentes Conditions Générales de Vente.<br>
<br>
Plus de précision sur la procédure via Mondial Relay, via le lien ci-après Conditions de retour</p>



<h2 class=\"mt-5\">ARTICLE 9 - PAIEMENT DU PRIX</h2>
<p>Le paiement est réalisé en ligne lors de la passation de la commande.<br>
<br>
Le paiement sera encaissé par la Société juste avant la transmission de la commande au service chargé de sa préparation.<br>
<br>
Modalités de paiement :<br>
<br>
Les modalités de paiement suivantes sont proposées au Client :<br>
<br>
Carte bancaire : les cartes bancaires acceptées sur le site sont Carte Bleue, Visa et MasterCard. Ces cartes de paiement doivent être délivrées par un établissement bancaire ou financier situé dans l’Union Européenne.<br>
<br>
Bons d’achat « e-commerce » : il est possible d’utiliser les bons d’achat délivrés par le Service Clients dans le cadre d’un achat sur le Site pour le paiement de toute ou partie de la commande. Ces bons d’achat ne sont utilisables qu’une seule fois.<br>
<br>
Paiement en magasin : il est possible de payer la commande en magasin Do Sport dans un délai de 72h après la prise en compte de cette dernière en statut « en attente de paiement », muni d’une pièce d’identité.<br>
<br>
Les modes de paiement acceptés sont les suivants : carte bleue, chèque bancaire, espèces, American Express, Avoir, bon d’achat, carte cadeau Do Sport et chèque cadeau.<br>
<br>
Paiement en 3 ou 4 X :<br>
<br>
Le service de « paiement en 3 ou 4 X » permet à certains internautes clients du site DoSport.com de payer leurs achats en trois ou quatre fois (trois ou quatre mensualités) avec leur carte bancaire.<br>
<br>
Le service de « paiement en 3 ou 4 X » est une opération de paiement échelonné qui n’est pas soumise aux dispositions de l’article L.311-1 et suivants du Code de la Consommation notamment en raison de sa durée et des frais négligeables qui y sont associés.<br>
<br>
Le présent service est réservé aux particuliers, personnes physiques majeures, résidant fiscalement en France Métropolitaine et utilisant une carte bancaire Visa ou MasterCard, pour le paiement de leur commande sur le site marchand. La durée de validité de la care utilisée doit être postérieure à la date de la dernière échéance du « paiement en 3 ou 4 X ».<br>
<br>
Les cartes à autorisation systématique de type Electron ou Maestro, les e-cards, les cartes Indigo et American Express ne sont pas acceptées.<br>
<br>
<br>
<br>
Sécurisation des paiements<br>
<br>
Les paiements effectués sur le Site sont entièrement sécurisés.<br>
<br>
Grâce aux caractéristiques techniques du logiciel de chiffrement utilisé sur le Site, les coordonnées bancaires (n° de la carte bancaire et date d’expiration) communiquées par le Client ne peuvent pas être interceptées par des tiers. En communiquant ses coordonnées bancaires, le Client accepte par avance et sans condition que la Société procède à la transaction sécurisée. Le Client autorise donc par avance sa banque à débiter son compte à la vue des relevés transmis par la Société, même en l’absence de factures signées de la main du titulaire de la carte. L’autorisation de débit du compte Client est toujours donnée pour le montant du produit acheté tel que facturé par la Société.<br>
<br>
Le Client est en droit de sauvegarder les informations relatives à sa carte de paiement, sous réserve de son consentement explicite.<br>
<br>
Contrôles anti FraudesLa Société, en collaboration avec Adyen NV, contrôle toutes les commandes qui ont été validées sur le Site à l’exception des commandes web payées en magasin. Dans le cadre de ces procédures, la Société pourra être amenée à demander au Client toutes les pièces nécessaires au déblocage de sa commande.<br>
<br>
Les informations en rapport avec sa commande font l'objet d'un traitement automatisé de données. Ce traitement automatisé de données a pour finalité de définir un niveau d'analyse d'une transaction et de lutter contre la fraude à la carte bancaire.<br>
<br>
La non-transmission des données en rapport avec sa commande empêche la réalisation et l'analyse de la transaction.<br>
<br>
La survenance d'un impayé au motif d'une utilisation frauduleuse d'une carte bancaire entraînera l'inscription des coordonnées en rapport avec la commande associée à cet impayé au sein d'un fichier incident de paiement mis en œuvre par la Société. Une déclaration irrégulière ou une anomalie pourra également faire l'objet d'un traitement spécifique.<br>
<br>
Conformément à la loi Informatique et Libertés et à la réglementation Européenne concernant la protection des données à caractère personnel , vous disposez d’un droit d’accès, de rectification, d’opposition et de suppression sur les données à caractère personnel vous concernant. Vous pouvez exercer ces droits sur simple demande accompagnée de la photocopie d’un justificatif d’identité à l’adresse e-mail suivante dpo@DoSport.fr ou l’adresse suivante postale suivante :<br>
<br>
GROUPE Do Sport<br>
<br>
DPO<br>
<br>
17 Avenue de la Falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Réductions applicablesIl est précisé que les réductions offertes aux salariés de la société Groupe Do Sport et toute autre société affiliée et les réductions partenaires ne sont pas valables pour les achats réalisés sur le site.<br>
<br>
Cumul d’€ fidélitéLes Clients ayant une carte de fidélité Club Do Sport pourront utiliser leur bons fidélités en magasin ou sur le site www.DoSport.com avec présentation de la carte de fidélité (ou connexion à l’espace fidélité sur le site www.DoSport.com ).<br>
<br>
Les bons de fidélité sont disponibles à partir de 5 euros, valables par tranche de 5€ jusqu’à 20€ et par tranche de 10€jusqu’à 100€ sans minimum d’achat dans l’ensemble des magasins Do Sport situés en France métropolitaine et sur le site Do Sport. Ils sont valables sur tous les articles, y compris les articles en soldes et en promotions. Hors coin des affaires, achat de carte cadeaux, prestations et frais de livraison.<br>
<br>
Offre strictement personnelle, valable une seule fois, non échangeable, non remboursable et non fractionnable. En cas d’oubli de la carte, les points peuvent être crédités par l’hôtesse de caisse sur présentation du ticket de caisse. L’adhérent dispose d’un espace personnel en ligne, rubrique « Mon espace fidélité » sur https://DoSport.com/eto/fidelity/index/ qui lui permet de consulter le montant de sa cagnotte fidélité, de commander sa carte physique, de modifier ou compléter ses informations personnelles et de retrouver l’historique de ses achats.</p>



<h2 class=\"mt-5\">ARTICLE 10 - LIVRAISONS</h2>
<p>Do Sport propose à ces Clients trois modes de livraison :<br>

- La livraison à domicile ou en relais colis<br>
<br>
- La livraison en magasin<br>
<br>
- Le retrait en magasin<br>
<br>
<br>
<br>
En cas de commande multi-produits, le Client peut choisir un mode de livraison différent par produits selon la disponibilité de services proposés par Do Sport pour ces produits.<br>
<br>
10.1. La livraison à domicile ou en relais colis : Les délais annoncés sur le Site sont calculés en jours ouvrés (sous réserve de validation de la commande par Adyen NV). La date de livraison est calculée en tenant compte du délai d’expédition de la commande auquel est ajouté le délai de livraison du transporteur (DPD La Poste / Mondial Relay/ Fedex / Transporteur).<br>
<br>
Le délai de livraison court à partir du départ du colis des entrepôts de la Société ; il s'ajoute donc au délai d'expédition de la commande. Le Client est informé par mail dès l’expédition de sa commande.<br>
<br>
Le délai de livraison dépend du mode de livraison choisi au passage de la commande.<br>
<br>
En cas de dépassement du délai indiqué, le Client sera informé par mail et il lui sera proposé une annulation de sa commande.<br>
<br>
Les produits sont livrés à l’adresse de livraison indiquée lors de la commande ou au relais colis indiqué. Les livraisons s’effectuent uniquement en France métropolitaine et en Corse.<br>
<br>
En cas de rupture de stock exceptionnelle, le Client sera averti par mail ou téléphone. La Société proposera au Client soit de retarder la livraison de l’intégralité de sa commande à la date de réapprovisionnement du produit concerné, soit d’accepter une livraison partielle, soit une annulation de sa commande.<br>
<br>
10.2. La livraison en magasin Do Sport propose un service de livraison gratuite en magasin permettant aux Clients de commander depuis le Site et de bénéficier d’une livraison gratuite en magasin.<br>
<br>
Les produits commandés pourront être payés depuis le Site ou directement en magasin selon les modalités précisées à l’article 4 ci-avant.<br>
<br>
La livraison en magasin est effectuée sous 10 jours ouvrés maximum après la validation de la commande en ligne. La date de livraison varie en fonction du magasin choisi.<br>
<br>
La livraison est disponible uniquement pour les produits expédiés et livrés par Do Sport et dans les magasins Do Sport hors magasins affiliés (voir liste en cliquant ici).
<br>
A tout moment le Client peut suivre sa commande sur son espace client.<br>
<br>
Le Client reçoit un SMS, s’il a fourni son numéro de téléphone, et/ou un email lorsque la commande est disponible en magasin, l’invitant à venir la réceptionner, en fournissant sa pièce d’identité ainsi que son nom ou son adresse ou le numéro de commande.<br>
<br>
La commande pourra être retirée à l’intérieur du magasin auprès d’une caisse identifiée « Retrait des commandes » ou sur le parking du magasin si ce service est disponible dans le magasin sélectionné.<br>
<br>
Le Client dispose alors d’un délai de 7 jours ouvrés pour récupérer sa commande. Passé ce délai, la commande sera annulée et remboursée au Client.<br>
<br>
En cas de rupture de stock exceptionnelle, le Client sera averti par mail.<br>
<br>
La Société proposera au Client :<br>
<br>
- soit de retarder la livraison de l’intégralité de sa commande à la date de réapprovisionnement du produit concerné,<br>
<br>
- soit d’accepter une livraison partielle, dans cette hypothèse le Client sera débité des seuls produits disponibles en cas de paiement effectué depuis le Site ou d’un un remboursement du prix d’achat du (des) produit(s) non livré(s) en cas de paiement en magasin,<br>
<br>
- soit une annulation et un remboursement de l’intégralité de sa commande.<br>
<br>
10.3. Le Service « Retrait 2h en magasin »Le Client peut bénéficier du service « Retrait 2h en magasin » pour certains produits commandés et payés depuis le Site. La fiche de ces produits, mentionne la possibilité de bénéficier de ce service. Le Client peut également choisir le Retrait 2h en magasin lors du choix du mode de livraison avant validation de la commande s’il est disponible pour les produits sélectionnés. Dans les deux cas, le Client doit renseigner sa location et vérifier la disponibilité de ce service. A défaut, le Client peut choisir la livraison en magasin.<br>
<br>
Si le client choisit le service Retrait 2h en magasin, le commande sera préparée par le magasin sélectionné dans un délai de 2 heures maximum.<br>
<br>
Le service Retrait 2h en magasin est disponible uniquement pour les produits expédiés et livrés par Do Sport et dans les magasins Do Sport hors magasins affiliés (voir liste en cliquant ici).<br>
<br>
En cas de commande multi-produits, le Client peut choisir la livraison en magasin telle que prévue à l’article 10.2 et le service Retrait 2h, à condition que le même magasin soit sélectionné pour les deux modes de livraison.<br>
<br>
Le service Retrait 2h en magasin est gratuit.
<br>
Le Client reçoit un SMS, s’il a fourni son numéro de téléphone, et/ou un email lorsque la commande est disponible en magasin, l’invitant à venir la réceptionner, en fournissant sa pièce d’identité ainsi que son nom ou son adresse ou le numéro de commande ou son code de retrait.<br>
<br>
La commande pourra être retirée à l’intérieur du magasin auprès d’une caisse identifiée « Retrait des commandes » ou sur le parking du magasin si ce service est disponible dans le magasin sélectionné.<br>
<br>
Le Client dispose alors d’un délai de 7 jours pour récupérer sa commande. Passé ce délai, la commande sera annulée et remboursée au Client.<br>
<br>
En cas de rupture de stock du produit dans le magasin sélectionné, le Client recevra un email l’informant de l’annulation totale de sa commande. Le Client ne sera pas débité du montant de sa commande, y compris lorsqu’il aura effectué une demande de paiement en 3 ou 4X fois sans frais. Il sera alors invité à vérifier la disponibilité sur le site internet www.DoSport.fr et choisir un autre magasin de retrait ou à choisir un autre mode de livraison.<br>
<br>
Dans l’hypothèse où seule une partie des produits commandés serait en rupture de stock dans le magasin choisi, le Client recevra un SMS et un email lui indiquant que la commande est partiellement disponible en magasin.<br>
<br>
Le Client ne sera alors débité que du montant des produits disponibles de sa commande. Pour les produits indisponibles, il sera alors invité vérifier la disponibilité sur le site internet www.DoSport.fr et à choisir un autre magasin de retrait ou à choisir un autre mode de livraison.</p>



<h2 class=\"mt-5\">ARTICLE 11 - GARANTIE LÉGALE</h2>
<p>Le consommateur dispose d'un délai de deux ans à compter de la délivrance du bien pour obtenir la mise en œuvre de la garantie légale de conformité en cas d'apparition d'un défaut de conformité. Durant ce délai, le consommateur n'est tenu d'établir que l'existence du défaut de conformité et non la date d'apparition de celui-ci.<br>
<br>
Lorsque le contrat de vente du bien prévoit la fourniture d'un contenu numérique ou d'un service numérique de manière continue pendant une durée supérieure à deux ans, la garantie légale est applicable à ce contenu numérique ou ce service numérique tout au long de la période de fourniture prévue. Durant ce délai, le consommateur n'est tenu d'établir que l'existence du défaut de conformité affectant le contenu numérique ou le service numérique et non la date d'apparition de celui-ci.<br>
<br>
La garantie légale de conformité emporte obligation pour le professionnel, le cas échéant, de fournir toutes les mises à jour nécessaires au maintien de la conformité du bien.<br>
<br>
La garantie légale de conformité donne au consommateur droit à la réparation ou au remplacement du bien dans un délai de trente jours suivant sa demande, sans frais et sans inconvénient majeur pour lui.<br>
<br>
Si le bien est réparé dans le cadre de la garantie légale de conformité, le consommateur bénéficie d'une extension de six mois de la garantie initiale.<br>
<br>
Si le consommateur demande la réparation du bien, mais que le vendeur impose le remplacement, la garantie légale de conformité est renouvelée pour une période de deux ans à compter de la date de remplacement du bien.<br>
<br>
Le consommateur peut obtenir une réduction du prix d'achat en conservant le bien ou mettre fin au contrat en se faisant rembourser intégralement contre restitution du bien, si :<br>
<br>
1° Le professionnel refuse de réparer ou de remplacer le bien ;<br>
<br>
2° La réparation ou le remplacement du bien intervient après un délai de trente jours ;<br>
<br>
3° La réparation ou le remplacement du bien occasionne un inconvénient majeur pour le consommateur, notamment lorsque le consommateur supporte définitivement les frais de reprise ou d'enlèvement du bien non conforme, ou s'il supporte les frais d'installation du bien réparé ou de remplacement ;<br>
<br>
4° La non-conformité du bien persiste en dépit de la tentative de mise en conformité du vendeur restée infructueuse.<br>
<br>
Le consommateur a également droit à une réduction du prix du bien ou à la résolution du contrat lorsque le défaut de conformité est si grave qu'il justifie que la réduction du prix ou la résolution du contrat soit immédiate. Le consommateur n'est alors pas tenu de demander la réparation ou le remplacement du bien au préalable.<br>
<br>
Le consommateur n'a pas droit à la résolution de la vente si le défaut de conformité est mineur.<br>
<br>
Toute période d'immobilisation du bien en vue de sa réparation ou de son remplacement suspend la garantie qui restait à courir jusqu'à la délivrance du bien remis en état.<br>
<br>
Les droits mentionnés ci-dessus résultent de l'application des articles L. 217-1 à L. 217-32 du code de la consommation.<br>
<br>
Le vendeur qui fait obstacle de mauvaise foi à la mise en œuvre de la garantie légale de conformité encourt une amende civile d'un montant maximal de 300 000 euros, qui peut être porté jusqu'à 10 % du chiffre d'affaires moyen annuel (article L. 241-5 du code de la consommation).<br>
<br>
Le consommateur bénéficie également de la garantie légale des vices cachés en application des articles 1641 à 1649 du code civil, pendant une durée de deux ans à compter de la découverte du défaut. Cette garantie donne droit à une réduction de prix si le bien est conservé ou à un remboursement intégral contre restitution du bien.<br>
<br>
Pour bénéficier de la garantie légale de conformité ou de la garantie des vices cachés, le Client devra se rendre au choix dans le magasin Do Sport le plus proche pour la prise en charge de son produit ou dans un point Mondial Relay (service gratuit uniquement disponible pour les produits de moins de 30 kilos et dont le développé -longueur + largeur + hauteur- ne doit pas excéder 150 cm).</p>



<h2 class=\"mt-5\">ARTICLE 12 - CAS SPÉCIFIQUE DES VÉLOS</h2>
<p>Conformément à la loi d’orientation des mobilités du 24 décembre 2019 et son décret d’application n°2020-1439 du 23 novembre 2020, à compter du 1er juillet 2021, les vélos de plus 16 pouces vendus neufs par des professionnels disposeront d’un identifiant unique auquel seront associées les coordonnées du propriétaire. Cette identification obligatoire des vélos permet d’associé un vélo à son propriétaire.<br>
<br>
L’identifiant est transmis par un opérateur agrée et choisi par Do Sport, lequel transmettra directement toutes les informations relatives à l’identification du vélo à l’acheteur.<br>
<br>
En cas de changement de propriétaire, les textes susvisés prévoient que l’acheteur doit en faire la déclaration auprès de l’opérateur agrée ayant transmis l’identifiant.<br>
<br>
En cas de retour du vélo dans le cadre des articles 7, 8 et 11 des présentes Conditions Générales de Vente ou dans l’hypothèse d’un colis qui n’aurait pas été livré ou retiré, le remboursement, le cas échéant, ne pourra intervenir qu’à compter de la déclaration faite auprès de l’opérateur du retour du vélo.</p>

ARTICLE 13 - DONNÉES PERSONNELLES
<p>Protection de vos données à caractère personnel<br>
<br>
Prenez connaissance de notre charte de protection des données personnelles des clients en cliquant ici .<br>
<br>
Conformément à la loi informatique et Libertés et à la règlementation Européenne concernant la protection des données à caractère personnel, vous disposez d’un droit d’accès, de rectification, d’opposition et de suppression sur les données à caractère personnel vous concernant. Vous pouvez exercer ces droits sur simple demande, accompagnée de la photocopie d’un justificatif d’identité à l’adresse suivante : dpo@DoSport.fr</p>



<h2 class=\"mt-5\">ARTICLE 14 - PROPRIÉTÉ INTELLECTUELLE</h2>
<p>L’ensemble du Site et chacun de ses éléments relèvent de la législation sur la propriété intellectuelle, notamment droits d’auteurs, dessins et modèles, marques, noms de domaine, logiciels ou bases de données… (sans que cette liste ne soit exhaustive).<br>
<br>
A ce titre, tous les droits de reproduction, de représentation et de communication publique sont réservés y compris pour les documents téléchargeables et les représentations visuelles, photographiques, audiovisuelles ou autres.<br>
<br>
Seul le droit de consulter le Site est conféré aux Clients. La reproduction de tout ou partie du contenu est seulement autorisée aux fins exclusives d’information pour un usage personnel et privé.<br>
<br>
Tout lien mis en place en direction du Site doit faire l’objet d’une autorisation préalable et écrite de la Société. La Société décline toute responsabilité concernant le contenu de ces liens.<br>
<br>
En toute hypothèse, les liens hypertextes renvoyant au Site devront être retirés à première demande de la Société.</p>



<h2 class=\"mt-5\">ARTICLE 15 - RESPONSABILITÉ</h2>
<p>La Société ne pourra être tenue responsable et aucune indemnité ne pourra lui être demandée au titre des retards de livraison ou conséquences dommageables dus à des cas de force majeure tels que définis par la jurisprudence des cours et tribunaux français.<br>
<br>
La Société ne pourra être tenue responsable des interruptions, retards ou indisponibilités du Site dus à des travaux de maintenance, des interruptions du réseau Internet, des pannes techniques, un cas de force majeure, le fait d’un tiers ou de toute circonstance quelle qu’elle soit.<br>
<br>
La Société s’efforce d’assurer au mieux de ses possibilités, l’exactitude et la mise à jour des informations diffusées sur le Site, dont elle se réserve le droit de corriger, à tout moment et sans préavis, le contenu.<br>
<br>
Le Site contient des informations provenant de tierces personnes, la Société ne donne donc aucune garantie quant à l’exactitude, la précision ou l’exhaustivité des informations mises à disposition sur le Site. La responsabilité de la Société ne pourra en aucun cas être engagée quant à d’éventuelles erreurs ponctuelles pouvant survenir sur le site.</p>



<h2 class=\"mt-5\">ARTICLE 16 - SERVICE CLIENTS</h2>
<p>Pour toute information ou conseil, le Client peut contacter le Service Clients,<br>
<br>
Par téléphone du lundi au vendredi de 9h à 20h et le samedi de 9h à 19h :au 0970 83 05 05 (n° non surtaxé, prix d’un appel local)<br>
<br>
Par mail- pour les clients ayant réalisé un achat : sur l’espace Client dans la rubrique « Vos achats en ligne » Besoin d’aide. Les informations relatives à la commande sont également disponible dans cet espace.<br>
<br>
- ou à l’adresse suivante : service.client@DoSport.fr<br>
<br>
Par courrier<br>
<br>
Service Clients Do Sport<br>
<br>
17 avenue de la falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Conformément à la loi Informatique et Libertés et à la règlementation Européenne concernant la protection des données à caractère personnel, toutes les conversations et coordonnées clients sont supprimées dans les quinze (15) jours suivant la clôture de la demande. De plus, les messages sont chiffrés de bout en bout, c’est-à-dire que seul le Client et le Service Client peuvent avoir accès aux messages.<br>
<br>
Vous disposez d’un droit d’accès, de rectification, d’opposition et de suppression sur les données à caractère personnel vous concernant. Vous pouvez exercer ces droits sur simple demande accompagnée de la photocopie d’un justificatif d’identité ou des données permettant à Do Sport de vous identifier sans équivoque à l’adresse suivante : dpo@DoSport.fr<br>
<br>
Attention : afin d’optimiser le traitement de ses demandes, le Client doit indiquer dans son courrier ses nom, prénom, email avec lesquels sa commande a été effectuée et le numéro de la commande concernée.</p>



<h2 class=\"mt-5\">ARTICLE 17 - LOI APPLICABLE</h2>
<p>Les présentes Conditions Générales de Vente sont soumises à la loi française.<br>
<br>
Tout litige n'ayant pas trouvé une solution amiable sera soumis à la compétence exclusive des tribunaux français.</p>



<h2 class=\"mt-5\">ARTICLE 18 - MÉDIATION DE LITIGES DE CONSOMMATION</h2>
<p>L’ordonnance du 20 août 2015 et le décret n°2015-1382 du 30 octobre 2015 relatifs à la médiation des litiges de la consommation et faisant application de la directive 2013/11/UE du Parlement européen du 21 mai 2013, relative au règlement extrajudiciaire des litiges de consommation, donne la possibilité au consommateur de se référer à la médiation afin de faciliter le règlement à l’amabile des litiges avec un professionnel à l’occasion d’une vente passée depuis le site DoSport.com<br>
<br>
Ainsi, pour tout litige qui n’aurait pas été réglé directement avec la Société, le Client est informé qu’il peut à présent recourir gratuitement au service de médiation mis en place par Médiation – Vivons mieux ensemble :<br>
<br>
- Adresse du site : www.mediation-vivons-mieux-ensemble.fr<br>
<br>
- Adresse du médiateur : MEDIATION – VIVONS MIEUX ENSEMBLE 465 avenue de la Libération 54 000 NANCY<br>
<br>
<br>
<br>
Plate-forme européenne de résolution en ligne des litiges : https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home.show&lng=FR<br>
<br>
Avant de saisir le médiateur de la consommation, le consommateur doit déjà avoir tenté de résoudre son litige directement auprès du professionnel par une réclamation écrite ou avoir fait une réclamation selon les termes du contrat conclu avec le professionnel.</p>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/cgv.html.twig";
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


{% block cgv %}
{% endblock %}

{% block content %}
\t<div class=\"container-fluid\">
\t\t<h2>ARTICLE 1 - OBJET</h2>
<p>Les présentes Conditions Générales de Vente sont conclues entre la société Do Sport France, SAS au capital de 41 509 983,00 € dont le siège social est situé 17 Avenue de la Falaise, 38360 Sassenage, immatriculée au RCS de Grenoble sous le numéro 428 560 031 (ci-après dénommée « la Société ») et toute personne physique effectuant un achat (ci-après dénommée « le Client ») sur le site www.DoSport.com (ci-après désigné « le Site »).<br>
<br>
Conformément aux dispositions du code de l’environnement, et en sa qualité de distributeur de produits générateurs de déchets, la Société est adhérente à plusieurs filières de Responsabilité Elargie des Producteurs de déchets (REP) et dispose à ce titre, d’un identifiant unique (IDU) pour chaque filière auprès de qui elle est rattachée, à savoir :<br>
<br>
<br> 
<br>
IDU Eléments d’Ameublement (DEA) : FR006076_10WIDG<br>
<br>
IDU Textile, Linge de maison et Chaussures (TLC) : FR218603_11IBJU<br>
<br>
IDU Déchets d’Equipements Electriques et Electroniques (DEEE) : FR006076_05NNP3<br>
<br>
IDU Piles et Accumulateurs : FR002491_06F8EN<br>

IDU Emballages Ménagers & Papiers (CITEO) : FR219498_01WCRR<br>

IDU Articles de Sport et de Loisirs (ASL) : FR231727_13JCWL<br>
<br>
<br>
<br>
Toutes les commandes passées par l’intermédiaire du Site sont soumises sans réserve aux présentes Conditions Générales de Vente.<br>
<br>
Les présentes Conditions Générales de Vente s’appliquent à l’exclusion de toutes autres conditions, notamment celles applicables aux ventes réalisées dans les magasins Do Sport.<br>
<br>
De même, il est précisé que les commandes effectuées par le biais de la Marketplace ne sont pas soumises aux présentes Conditions Générales de Ventes (il convient de se référer aux Conditions Générales de Vente de la Marketplace).<br>
<br>
Les présentes Conditions Générales de Vente représentent l’intégralité des engagements réciproques de la Société et du Client qui les accepte expressément.<br>
<br>
Les commandes ne peuvent être passées que par des personnes physiques majeures résidant en France métropolitaine agissant à des fins non professionnelles et achetant pour leurs besoins personnels.</p>



<h2 class=\"mt-5\">ARTICLE 2 - PRODUITS COMMERCIALISÉS</h2>
<p>Le Client peut sélectionner un ou plusieurs produits parmi les différentes catégories proposées sur le Site. Il est précisé que la Société est susceptible de modifier à tout moment l’assortiment de produits proposés sur le Site, sans préjudice des commandes passées par le Client.<br>
<br>
Conformément aux dispositions du code de la consommation, le Client peut, préalablement à sa commande, prendre connaissance sur le Site des caractéristiques essentielles du ou des produits qu’il désire commander sur la fiche produit correspondante.<br>
<br>
Les produits étant en constante évolution, il est précisé que les fabricants peuvent modifier sans préavis la composition technique et les caractéristiques des références produits.<br>
<br>
L'offre de produits proposée sur le Site peut être différente de celle proposée dans les magasins physiques à enseigne Do Sport.</p>
<br>
<br>
<br>
<h2 class=\"mt-5\">ARTICLE 3 - DISPONIBILITÉ ET PRIX</h2>
<p>Les offres de produits et de prix sont valables tant qu’elles sont visibles sur le Site. En cas d’offres promotionnelles, les prix indiqués seront valables pendant la période de l’offre, sur une sélection de produits.<br>
<br>
Lors du traitement de sa commande, le Client sera informé dans les meilleurs délais par courrier électronique en cas d’indisponibilité de produits commandés. Ces produits ne seront pas facturés au Client.<br>
<br>
Les prix affichés sur le Site sont, par défaut, indiqués en euros et toutes taxes comprises et sont applicables en France métropolitaine.<br>
<br>
Les prix pratiqués sur le site sont indépendants des prix pratiqués dans les magasins Do Sport, sauf mention contraire, ils s’appliquent exclusivement sur les produits achetés en ligne.<br>
<br>
La TVA est appliquée aux taux en vigueur au moment de la passation de la commande.<br>
<br>
La Société se réserve le droit de modifier ses prix à tout moment mais s’engage à appliquer les tarifs en vigueur lors de l’enregistrement de la commande du Client sous réserve de la disponibilité des produits à cette date.<br>
<br>
Les produits demeurent la propriété de la Société jusqu’au complet paiement du prix par le Client. Néanmoins, les risques seront transférés au Client à compter de la réception du(des) produit(s) par le Client.</p>



<h2 class=\"mt-5\">ARTICLE 4 - COMMANDE</h2>
<p>La disponibilité des produits ainsi que le délai de livraison sont affichés sur le Site.<br>
<br>
Toute commande sur le Site suppose l’acceptation expresse et sans réserve des présentes Conditions Générales de Vente, sans toutefois que cette acceptation soit conditionnée par une signature manuscrite de la part du Client.<br>
<br>
Toute passation de commande nécessite la création d’un compte client. Une fois le compte crée, le Client aura accès à son espace client. L’accès à cet espace client est conditionné à l’identification du Client à l’aide de son adresse mail indiquée lors de la création du compte ainsi que du mot de passe secret et personnel choisi. La Société ne saurait être tenue responsable de toute action réalisée sur l’espace client par un tiers auquel le Client aurait communiqué ses identifiants ou qui aurait eu accès au compte suite à une négligence du Client.<br>
<br>
Toutes les informations relatives à la commande seront consultables dans la rubrique « Le suivi de commande » de l’espace client.<br>
<br>
Le Client s’engage à ce que les informations communiquées lors de sa commande soient complètes, exactes et à jour. Dans le cas contraire, la Société se réserve le droit d’annuler purement et simplement la commande.<br>
<br>
La commande peut être effectuée pour une adresse de livraison distincte de l’adresse de facturation.<br>
<br>
Les commandes engagent le Client dès qu’il confirme son paiement en cliquant sur « Valider ».<br>
<br>
Suite à la réception de la commande, la Société adressera au Client un email de confirmation de commande comprenant le récapitulatif de la commande ainsi que son numéro, puis validera définitivement la commande en adressant un email de validation de commande. Ces emails seront envoyés à l’adresse mail renseignée lors de la création du compte client.<br>

La Société se réserve le droit de refuser ou d’annuler une commande si elle estime que le Client se livre à de la distribution ou exerce une activité économique grâce aux produits ainsi commandés ou pour tout autre motif.<br>
<br>
Cas de commande web payée en magasin :Les commandes web payées en magasin comprennent les commandes du client passées chez lui depuis son compte e-commerce et payées en caisse, les commandes du client passées dans le magasin depuis son compte e-commerce et payées en caisse et enfin les commandes du client passées dans le magasin depuis le compte e-commerce du magasin et payées en caisse.<br>
<br>
Une fois la commande passée, elle est en statut « en attente de paiement ». Le client dispose alors de trois jours (du lundi au samedi) pour venir payer sa commande en magasin. Au-delà de ce délai, la commande sera automatiquement annulée.<br>
<br>
Une fois la commande passée, le client devra obligatoirement imprimer le code barre délivré sur la page de confirmation de commande ou dans le mail de validation qui lui sera envoyé. Le numéro du code barre accompagné du numéro du bon de commande sont indispensable lors du paiement en caisse.<br>
<br>
Lorsque la commande est payée, le cycle de vie reste identique à celui des autres commandes passées en ligne.<br>
<br>
Le mode de paiement en caisse n’est pas disponible pour les clients souhaitant être livrés en Fedex Express ni pour les commandes de produit Market Place.<br>
<br>
Service d’e-réservation :Le service d’e-réservation proposé sur le Site par la Société permet au Client de réserver un produit en magasin de son choix, sous réserve de la disponibilité du produit choisi dans le magasin en question.<br>
<br>
Les modalités de fonctionnement de ce service sont accessibles au Client dès lors qu’il utilise le Service d’e-réservation.<br>
<br>
Avis fiche produits : Do Sport propose à ses clients par l’intermédiaire de son partenaire « Avis Vérifiés » la possibilité de laisser un avis à l’issu de son expérience sur le site DoSport.com. Vingt (20) jours après avoir passé sa commande sur le site marchand, le Client reçoit un email de demande d’avis. Le Client a alors la possibilité de laisser un avis sur son expérience achat.<br>
<br>
Le service Client de Do Sport dispose de 14 jours pour prendre connaissance de l’avis et vérifier qu’il respecte les critères de modération mis en place par Avis Vérifiés eu égard aux règlementations en vigueur applicable (non discriminatoire, non injurieux etc.).<br>
<br>
A expiration de ce délai, l’avis sera publié sur le site marchand. Un e-mail sera adressé au Client en cas de refus de publication de l’avis laissé ne respectant les règlementations en vigueur applicables.</p>



<h2 class=\"mt-5\">ARTICLE 5 - MODIFICATION DE LA COMMANDE</h2>
<p>Toute demande de modification de la commande effectuée ne peut être prise en compte par la Société que si elle a été formulée auprès du Service Clients et si la commande n’a pas encore eu un contrôle Adyen NV positif. (voir modalités de contact à l’Article 15 ci-après). Une fois la commande contrôlée par Adyen NV il n’est plus possible de modifier/annuler la commande.<br>
<br>
Dans un souci de rapidité, il est recommandé au Client de contacter le Service Clients par téléphone au numéro indiqué à l’article 15.<br>
<br>
Les commandes web payées en magasin ne sont pas soumises au contrôle Adyen NV et ne sont pas susceptibles de modification/annulation.</p>



<h2 class=\"mt-5\">ARTICLE 6 - RÉCLAMATIONS</h2>
<p>Toute réclamation relative à la réception de la commande (produit reçu abimé, pièce manquante, …) doit être effectuée auprès du Service Clients (voir modalités de contact à l’Article 15 ci-après) avant la fin du délai de rétractation, de quinze (15) jours suivant la réception de la commande pour les clients non adhérents au CLUB Do Sport et de trente (30) jours pour les clients adhérents.<br>
<br>
Passé ce délai, les réclamations ne pourront être prises en compte par la Société sauf celles relatives aux garanties telles que définies à l’Article 11 ci-après.</p>



<h2 class=\"mt-5\">ARTICLE 7 - DROIT DE RÉTRACTATION</h2>
<p>Le Client dispose d’un délai de quinze (15) jours francs à compter de la réception de sa commande pour notifier à la Société son intention de retourner tout produit ne lui convenant pas.<br>
<br>
Pour le Client adhérent au Club Do Sport , le délai de rétractation est porté à trente (30) jours francs.<br>
<br>
Lorsque le délai de rétractation expire un samedi, un dimanche ou un jour férié ou chômé, il est prorogé jusqu’au premier jour ouvrable suivant.<br>
<br>
Le Client devra notifier à la Société sa volonté de se rétracter au moyen d’une déclaration dénuée d’ambigüité. Pour ce faire, le Client pourra utiliser le modèle de formulaire de rétractation disponible en annexe des présentes Conditions Générales de Vente.<br>
<br>
Le Client pourra manifester sa volonté de se rétracter :<br>

- En se rendant dans l'un des magasins de la Société https://www.DoSport.com/magasins/ muni de sa facture d’achat et du produit qu’il souhaite retourner, un récépissé de sa rétractation lui sera alors remis ;<br>
<br>
- En contactant le Service Clients de la Société :<br>
<br>
Soit par mail à l'adresse suivante :<br>
<br>
-service.client@DoSport.fr<br>
<br>
via le formulaire de contact relatif au droit de rétractation en se rendant sur le Service Client en ligne (voir modalités de contact à l’Article 15 ci-après) dans la rubrique « Besoin d’Aide » de l’espace client en cliquant sur la question « je ne veux plus de mon article, je souhaite me rétracter ».<br>
<br>
Les conditions de retour sont accessibles via ce lien﻿<br>
<br>
Soit par courrier à l’adresse suivante :<br>
<br>
Service Clients Do Sport<br>
<br>
17 avenue de la falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Soit par téléphone : du lundi au vendredi de 9h à 20h et le samedi de 9h à 19h au 0970 83 05 05 (coût d'un appel local).<br>
<br>
S’il se rétracte en contactant le Service Clients, le Client devra alors indiquer ses coordonnées et les références de sa commande.<br>
<br>
Le Service Clients accusera réception de la demande du Client et l’informera des modalités de retour du/des produit(s).<br>
<br>
Le Client disposera d’un délai de 30 jours suite à sa notification de rétractation pour retourner son ou ses produit(s).<br>
<br>
Soit via son espace client sur le site www.DoSport.com :<br>
<br>
Conditions de retour d’un article par voie postale pour un « petit produit » ou via un transporteur pour un produit de plus de 30 kg et/ou volumineux (frais de retour à votre charge.<br>
<br>
En se connectant à son espace client, le client devra sélectionner la commande concernée dans la rubrique « Mes commandes » puis « Mes achats » et cliquer sur « Retourner mon produit ». Le Client devra ensuite indiquer le ou les produit(s) qu’il désire retourner et sélectionner le motif du retour avant d’envoyer sa demande.<br>
<br>
La Société n’accepte pas les colis adressés en port dû ou en contre remboursement.<br>
<br>
Le Client est responsable du mode d’emballage choisi pour le retour de son/ses produit(s).<br>
<br>
Le retour d'un colis doit être soigneusement préparé selon les indications mentionnées dans la FAQ Do Sport, disponible à l’adresse : clients.DoSport.com/Simple/Faq.aspx<br>
<br>
Produits exclus du droit de rétractation :Conformément aux dispositions de l’article L221-28 du Code de la Consommation, le droit de rétractation ne peut être exercé pour les biens confectionnés selon les spécifications du Client ou nettement personnalisés.<br>
<br>
De plus, pour des raisons d’hygiène et parce qu’ils ne pourront être re-commercialisés, les produits suivants ne peuvent faire l’objet d’un droit de rétractation dès lors leur emballage a été descellé : protège-dents, bouchons d’oreilles couches pour bébé ou tout autre article requérant des précautions d’hygiène particulières.<br>
<br>
Pour les mêmes raisons, les sous-vêtements, coquilles de protection, articles de sudation et maillots de bain sans protection hygiénique, s’ils ont déjà été utilisés et/ou portés en dehors d’un essai non abusif ne pourront faire l’objet d’une rétractation.<br>
<br>
Seuls les produits retournés complets, munis de leurs étiquettes, notices, garanties, cordons et autres accessoires en parfait état et dans leur emballage d’origine en état d’être commercialisés seront acceptés.<br>
<br>
Frais de renvoi :En cas d’exercice du droit de rétractation, les frais de renvoi du/des produit(s) sont à la charge du Client.<br>
<br>
La Société n’accepte pas les colis adressés en port dû ou en contre remboursement.<br>
<br>
Pour les produits ne pouvant être retournés par la Poste en raison de leur nature et/ou de leur taille, conformément à la règlementation en vigueur, une estimation des frais de retour, auprès d’un transporteur, est communiquée ci-dessous au Client à titre indicatif. Les frais de retour sont à la charge du Client.<br>
<br>
Le montant des frais de retour est calculé en fonction de la typologie de produit et de la distance à parcourir par le transporteur pour récupérer le produit et le ramener en entrepôt.
<br>
- Appareil de musculation : entre 65 € et 140 €<br>
<br>
- Vélo : entre 50 € et 70 €<br>
<br>
Attention, cette estimation de prix n’engage pas la Société. Le prix à payer pour le renvoi du produit sera fonction du transporteur choisi.<br>
<br>
Remboursement suite à la rétractation :Conformément au code de la consommation, la Société est tenue de rembourser la totalité des sommes versées, frais de port (aller) inclus (au tarif standard). Le remboursement sera effectué lors de la réception du/des produit(s) retourné(s). La Société procédera au remboursement selon le moyen de paiement utilisé pour la commande ou sous toute autre forme après accord exprès du Client.</p>



<h2 class=\"mt-5\">ARTICLE 8 - RETOUR</h2>
<p>En dehors du droit de rétractation, le produit pourra être retourné en cas de non-conformité à la commande (erreur de référence ou produit abimé) ou de défectuosité (cf Article 11 - Garantie).<br>
<br>
En cas de réception d’une référence différente de celle commandée ou d’un produit abimé, le Client est invité soit :<br>
<br>
- à se rendre dans l'un des magasins de la Société (https://www.DoSport.com/magasins/) muni de sa facture d’achat et du produit à retourner.<br>
<br>
Dans ce cas, la Société examinera le produit et si celui-ci est non-conforme, elle proposera alors au Client de le rembourser de sa commande et des frais de port associés sous forme d’avoir (seulement si le montant de la commande et des frais de port est supérieure à 5 €) soit sous forme d’espèces, le Client étant libre de choisir.<br>
<br>
- à contacter le Service Clients de la Société en se rendant sur le Service Client en ligne (voir modalités de contact à l’Article 15 ci-après) dans la rubrique « Besoin d’Aide » de l’espace client ou par téléphone : du lundi au vendredi de 9h à 20h et le samedi de 9h à 19h au 0970 83 05 05 (coût d'un appel local).<br>
<br>
Dans ce cas, le produit non conforme ou abîmé devra être retourné à la Société et celle-ci proposera de lui rembourser l’intégralité du montant de la commande (prix du produit + frais de livraison éventuellement payés) selon le même mode de règlement que celui utilisé lors de la commande dès réception du produit s’avérant non-conforme ou abîmé.<br>
<br>
Les frais de retour seront alors remboursés sur la base des tarifs appliqués par les services postaux pour les envois en colissimo suivi.<br>
<br>
En cas de défectuosité du produit commandé, le Client bénéficiera des garanties légales et devra se rendre dans le magasin Do Sport le plus proche pour la prise en charge de son produit soit dans un point Mondial Relay (service gratuit uniquement disponible pour les petits produits (moins de 30 kilos)) conformément à l’article 11 – Garantie des présentes Conditions Générales de Vente.<br>
<br>
Plus de précision sur la procédure via Mondial Relay, via le lien ci-après Conditions de retour</p>



<h2 class=\"mt-5\">ARTICLE 9 - PAIEMENT DU PRIX</h2>
<p>Le paiement est réalisé en ligne lors de la passation de la commande.<br>
<br>
Le paiement sera encaissé par la Société juste avant la transmission de la commande au service chargé de sa préparation.<br>
<br>
Modalités de paiement :<br>
<br>
Les modalités de paiement suivantes sont proposées au Client :<br>
<br>
Carte bancaire : les cartes bancaires acceptées sur le site sont Carte Bleue, Visa et MasterCard. Ces cartes de paiement doivent être délivrées par un établissement bancaire ou financier situé dans l’Union Européenne.<br>
<br>
Bons d’achat « e-commerce » : il est possible d’utiliser les bons d’achat délivrés par le Service Clients dans le cadre d’un achat sur le Site pour le paiement de toute ou partie de la commande. Ces bons d’achat ne sont utilisables qu’une seule fois.<br>
<br>
Paiement en magasin : il est possible de payer la commande en magasin Do Sport dans un délai de 72h après la prise en compte de cette dernière en statut « en attente de paiement », muni d’une pièce d’identité.<br>
<br>
Les modes de paiement acceptés sont les suivants : carte bleue, chèque bancaire, espèces, American Express, Avoir, bon d’achat, carte cadeau Do Sport et chèque cadeau.<br>
<br>
Paiement en 3 ou 4 X :<br>
<br>
Le service de « paiement en 3 ou 4 X » permet à certains internautes clients du site DoSport.com de payer leurs achats en trois ou quatre fois (trois ou quatre mensualités) avec leur carte bancaire.<br>
<br>
Le service de « paiement en 3 ou 4 X » est une opération de paiement échelonné qui n’est pas soumise aux dispositions de l’article L.311-1 et suivants du Code de la Consommation notamment en raison de sa durée et des frais négligeables qui y sont associés.<br>
<br>
Le présent service est réservé aux particuliers, personnes physiques majeures, résidant fiscalement en France Métropolitaine et utilisant une carte bancaire Visa ou MasterCard, pour le paiement de leur commande sur le site marchand. La durée de validité de la care utilisée doit être postérieure à la date de la dernière échéance du « paiement en 3 ou 4 X ».<br>
<br>
Les cartes à autorisation systématique de type Electron ou Maestro, les e-cards, les cartes Indigo et American Express ne sont pas acceptées.<br>
<br>
<br>
<br>
Sécurisation des paiements<br>
<br>
Les paiements effectués sur le Site sont entièrement sécurisés.<br>
<br>
Grâce aux caractéristiques techniques du logiciel de chiffrement utilisé sur le Site, les coordonnées bancaires (n° de la carte bancaire et date d’expiration) communiquées par le Client ne peuvent pas être interceptées par des tiers. En communiquant ses coordonnées bancaires, le Client accepte par avance et sans condition que la Société procède à la transaction sécurisée. Le Client autorise donc par avance sa banque à débiter son compte à la vue des relevés transmis par la Société, même en l’absence de factures signées de la main du titulaire de la carte. L’autorisation de débit du compte Client est toujours donnée pour le montant du produit acheté tel que facturé par la Société.<br>
<br>
Le Client est en droit de sauvegarder les informations relatives à sa carte de paiement, sous réserve de son consentement explicite.<br>
<br>
Contrôles anti FraudesLa Société, en collaboration avec Adyen NV, contrôle toutes les commandes qui ont été validées sur le Site à l’exception des commandes web payées en magasin. Dans le cadre de ces procédures, la Société pourra être amenée à demander au Client toutes les pièces nécessaires au déblocage de sa commande.<br>
<br>
Les informations en rapport avec sa commande font l'objet d'un traitement automatisé de données. Ce traitement automatisé de données a pour finalité de définir un niveau d'analyse d'une transaction et de lutter contre la fraude à la carte bancaire.<br>
<br>
La non-transmission des données en rapport avec sa commande empêche la réalisation et l'analyse de la transaction.<br>
<br>
La survenance d'un impayé au motif d'une utilisation frauduleuse d'une carte bancaire entraînera l'inscription des coordonnées en rapport avec la commande associée à cet impayé au sein d'un fichier incident de paiement mis en œuvre par la Société. Une déclaration irrégulière ou une anomalie pourra également faire l'objet d'un traitement spécifique.<br>
<br>
Conformément à la loi Informatique et Libertés et à la réglementation Européenne concernant la protection des données à caractère personnel , vous disposez d’un droit d’accès, de rectification, d’opposition et de suppression sur les données à caractère personnel vous concernant. Vous pouvez exercer ces droits sur simple demande accompagnée de la photocopie d’un justificatif d’identité à l’adresse e-mail suivante dpo@DoSport.fr ou l’adresse suivante postale suivante :<br>
<br>
GROUPE Do Sport<br>
<br>
DPO<br>
<br>
17 Avenue de la Falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Réductions applicablesIl est précisé que les réductions offertes aux salariés de la société Groupe Do Sport et toute autre société affiliée et les réductions partenaires ne sont pas valables pour les achats réalisés sur le site.<br>
<br>
Cumul d’€ fidélitéLes Clients ayant une carte de fidélité Club Do Sport pourront utiliser leur bons fidélités en magasin ou sur le site www.DoSport.com avec présentation de la carte de fidélité (ou connexion à l’espace fidélité sur le site www.DoSport.com ).<br>
<br>
Les bons de fidélité sont disponibles à partir de 5 euros, valables par tranche de 5€ jusqu’à 20€ et par tranche de 10€jusqu’à 100€ sans minimum d’achat dans l’ensemble des magasins Do Sport situés en France métropolitaine et sur le site Do Sport. Ils sont valables sur tous les articles, y compris les articles en soldes et en promotions. Hors coin des affaires, achat de carte cadeaux, prestations et frais de livraison.<br>
<br>
Offre strictement personnelle, valable une seule fois, non échangeable, non remboursable et non fractionnable. En cas d’oubli de la carte, les points peuvent être crédités par l’hôtesse de caisse sur présentation du ticket de caisse. L’adhérent dispose d’un espace personnel en ligne, rubrique « Mon espace fidélité » sur https://DoSport.com/eto/fidelity/index/ qui lui permet de consulter le montant de sa cagnotte fidélité, de commander sa carte physique, de modifier ou compléter ses informations personnelles et de retrouver l’historique de ses achats.</p>



<h2 class=\"mt-5\">ARTICLE 10 - LIVRAISONS</h2>
<p>Do Sport propose à ces Clients trois modes de livraison :<br>

- La livraison à domicile ou en relais colis<br>
<br>
- La livraison en magasin<br>
<br>
- Le retrait en magasin<br>
<br>
<br>
<br>
En cas de commande multi-produits, le Client peut choisir un mode de livraison différent par produits selon la disponibilité de services proposés par Do Sport pour ces produits.<br>
<br>
10.1. La livraison à domicile ou en relais colis : Les délais annoncés sur le Site sont calculés en jours ouvrés (sous réserve de validation de la commande par Adyen NV). La date de livraison est calculée en tenant compte du délai d’expédition de la commande auquel est ajouté le délai de livraison du transporteur (DPD La Poste / Mondial Relay/ Fedex / Transporteur).<br>
<br>
Le délai de livraison court à partir du départ du colis des entrepôts de la Société ; il s'ajoute donc au délai d'expédition de la commande. Le Client est informé par mail dès l’expédition de sa commande.<br>
<br>
Le délai de livraison dépend du mode de livraison choisi au passage de la commande.<br>
<br>
En cas de dépassement du délai indiqué, le Client sera informé par mail et il lui sera proposé une annulation de sa commande.<br>
<br>
Les produits sont livrés à l’adresse de livraison indiquée lors de la commande ou au relais colis indiqué. Les livraisons s’effectuent uniquement en France métropolitaine et en Corse.<br>
<br>
En cas de rupture de stock exceptionnelle, le Client sera averti par mail ou téléphone. La Société proposera au Client soit de retarder la livraison de l’intégralité de sa commande à la date de réapprovisionnement du produit concerné, soit d’accepter une livraison partielle, soit une annulation de sa commande.<br>
<br>
10.2. La livraison en magasin Do Sport propose un service de livraison gratuite en magasin permettant aux Clients de commander depuis le Site et de bénéficier d’une livraison gratuite en magasin.<br>
<br>
Les produits commandés pourront être payés depuis le Site ou directement en magasin selon les modalités précisées à l’article 4 ci-avant.<br>
<br>
La livraison en magasin est effectuée sous 10 jours ouvrés maximum après la validation de la commande en ligne. La date de livraison varie en fonction du magasin choisi.<br>
<br>
La livraison est disponible uniquement pour les produits expédiés et livrés par Do Sport et dans les magasins Do Sport hors magasins affiliés (voir liste en cliquant ici).
<br>
A tout moment le Client peut suivre sa commande sur son espace client.<br>
<br>
Le Client reçoit un SMS, s’il a fourni son numéro de téléphone, et/ou un email lorsque la commande est disponible en magasin, l’invitant à venir la réceptionner, en fournissant sa pièce d’identité ainsi que son nom ou son adresse ou le numéro de commande.<br>
<br>
La commande pourra être retirée à l’intérieur du magasin auprès d’une caisse identifiée « Retrait des commandes » ou sur le parking du magasin si ce service est disponible dans le magasin sélectionné.<br>
<br>
Le Client dispose alors d’un délai de 7 jours ouvrés pour récupérer sa commande. Passé ce délai, la commande sera annulée et remboursée au Client.<br>
<br>
En cas de rupture de stock exceptionnelle, le Client sera averti par mail.<br>
<br>
La Société proposera au Client :<br>
<br>
- soit de retarder la livraison de l’intégralité de sa commande à la date de réapprovisionnement du produit concerné,<br>
<br>
- soit d’accepter une livraison partielle, dans cette hypothèse le Client sera débité des seuls produits disponibles en cas de paiement effectué depuis le Site ou d’un un remboursement du prix d’achat du (des) produit(s) non livré(s) en cas de paiement en magasin,<br>
<br>
- soit une annulation et un remboursement de l’intégralité de sa commande.<br>
<br>
10.3. Le Service « Retrait 2h en magasin »Le Client peut bénéficier du service « Retrait 2h en magasin » pour certains produits commandés et payés depuis le Site. La fiche de ces produits, mentionne la possibilité de bénéficier de ce service. Le Client peut également choisir le Retrait 2h en magasin lors du choix du mode de livraison avant validation de la commande s’il est disponible pour les produits sélectionnés. Dans les deux cas, le Client doit renseigner sa location et vérifier la disponibilité de ce service. A défaut, le Client peut choisir la livraison en magasin.<br>
<br>
Si le client choisit le service Retrait 2h en magasin, le commande sera préparée par le magasin sélectionné dans un délai de 2 heures maximum.<br>
<br>
Le service Retrait 2h en magasin est disponible uniquement pour les produits expédiés et livrés par Do Sport et dans les magasins Do Sport hors magasins affiliés (voir liste en cliquant ici).<br>
<br>
En cas de commande multi-produits, le Client peut choisir la livraison en magasin telle que prévue à l’article 10.2 et le service Retrait 2h, à condition que le même magasin soit sélectionné pour les deux modes de livraison.<br>
<br>
Le service Retrait 2h en magasin est gratuit.
<br>
Le Client reçoit un SMS, s’il a fourni son numéro de téléphone, et/ou un email lorsque la commande est disponible en magasin, l’invitant à venir la réceptionner, en fournissant sa pièce d’identité ainsi que son nom ou son adresse ou le numéro de commande ou son code de retrait.<br>
<br>
La commande pourra être retirée à l’intérieur du magasin auprès d’une caisse identifiée « Retrait des commandes » ou sur le parking du magasin si ce service est disponible dans le magasin sélectionné.<br>
<br>
Le Client dispose alors d’un délai de 7 jours pour récupérer sa commande. Passé ce délai, la commande sera annulée et remboursée au Client.<br>
<br>
En cas de rupture de stock du produit dans le magasin sélectionné, le Client recevra un email l’informant de l’annulation totale de sa commande. Le Client ne sera pas débité du montant de sa commande, y compris lorsqu’il aura effectué une demande de paiement en 3 ou 4X fois sans frais. Il sera alors invité à vérifier la disponibilité sur le site internet www.DoSport.fr et choisir un autre magasin de retrait ou à choisir un autre mode de livraison.<br>
<br>
Dans l’hypothèse où seule une partie des produits commandés serait en rupture de stock dans le magasin choisi, le Client recevra un SMS et un email lui indiquant que la commande est partiellement disponible en magasin.<br>
<br>
Le Client ne sera alors débité que du montant des produits disponibles de sa commande. Pour les produits indisponibles, il sera alors invité vérifier la disponibilité sur le site internet www.DoSport.fr et à choisir un autre magasin de retrait ou à choisir un autre mode de livraison.</p>



<h2 class=\"mt-5\">ARTICLE 11 - GARANTIE LÉGALE</h2>
<p>Le consommateur dispose d'un délai de deux ans à compter de la délivrance du bien pour obtenir la mise en œuvre de la garantie légale de conformité en cas d'apparition d'un défaut de conformité. Durant ce délai, le consommateur n'est tenu d'établir que l'existence du défaut de conformité et non la date d'apparition de celui-ci.<br>
<br>
Lorsque le contrat de vente du bien prévoit la fourniture d'un contenu numérique ou d'un service numérique de manière continue pendant une durée supérieure à deux ans, la garantie légale est applicable à ce contenu numérique ou ce service numérique tout au long de la période de fourniture prévue. Durant ce délai, le consommateur n'est tenu d'établir que l'existence du défaut de conformité affectant le contenu numérique ou le service numérique et non la date d'apparition de celui-ci.<br>
<br>
La garantie légale de conformité emporte obligation pour le professionnel, le cas échéant, de fournir toutes les mises à jour nécessaires au maintien de la conformité du bien.<br>
<br>
La garantie légale de conformité donne au consommateur droit à la réparation ou au remplacement du bien dans un délai de trente jours suivant sa demande, sans frais et sans inconvénient majeur pour lui.<br>
<br>
Si le bien est réparé dans le cadre de la garantie légale de conformité, le consommateur bénéficie d'une extension de six mois de la garantie initiale.<br>
<br>
Si le consommateur demande la réparation du bien, mais que le vendeur impose le remplacement, la garantie légale de conformité est renouvelée pour une période de deux ans à compter de la date de remplacement du bien.<br>
<br>
Le consommateur peut obtenir une réduction du prix d'achat en conservant le bien ou mettre fin au contrat en se faisant rembourser intégralement contre restitution du bien, si :<br>
<br>
1° Le professionnel refuse de réparer ou de remplacer le bien ;<br>
<br>
2° La réparation ou le remplacement du bien intervient après un délai de trente jours ;<br>
<br>
3° La réparation ou le remplacement du bien occasionne un inconvénient majeur pour le consommateur, notamment lorsque le consommateur supporte définitivement les frais de reprise ou d'enlèvement du bien non conforme, ou s'il supporte les frais d'installation du bien réparé ou de remplacement ;<br>
<br>
4° La non-conformité du bien persiste en dépit de la tentative de mise en conformité du vendeur restée infructueuse.<br>
<br>
Le consommateur a également droit à une réduction du prix du bien ou à la résolution du contrat lorsque le défaut de conformité est si grave qu'il justifie que la réduction du prix ou la résolution du contrat soit immédiate. Le consommateur n'est alors pas tenu de demander la réparation ou le remplacement du bien au préalable.<br>
<br>
Le consommateur n'a pas droit à la résolution de la vente si le défaut de conformité est mineur.<br>
<br>
Toute période d'immobilisation du bien en vue de sa réparation ou de son remplacement suspend la garantie qui restait à courir jusqu'à la délivrance du bien remis en état.<br>
<br>
Les droits mentionnés ci-dessus résultent de l'application des articles L. 217-1 à L. 217-32 du code de la consommation.<br>
<br>
Le vendeur qui fait obstacle de mauvaise foi à la mise en œuvre de la garantie légale de conformité encourt une amende civile d'un montant maximal de 300 000 euros, qui peut être porté jusqu'à 10 % du chiffre d'affaires moyen annuel (article L. 241-5 du code de la consommation).<br>
<br>
Le consommateur bénéficie également de la garantie légale des vices cachés en application des articles 1641 à 1649 du code civil, pendant une durée de deux ans à compter de la découverte du défaut. Cette garantie donne droit à une réduction de prix si le bien est conservé ou à un remboursement intégral contre restitution du bien.<br>
<br>
Pour bénéficier de la garantie légale de conformité ou de la garantie des vices cachés, le Client devra se rendre au choix dans le magasin Do Sport le plus proche pour la prise en charge de son produit ou dans un point Mondial Relay (service gratuit uniquement disponible pour les produits de moins de 30 kilos et dont le développé -longueur + largeur + hauteur- ne doit pas excéder 150 cm).</p>



<h2 class=\"mt-5\">ARTICLE 12 - CAS SPÉCIFIQUE DES VÉLOS</h2>
<p>Conformément à la loi d’orientation des mobilités du 24 décembre 2019 et son décret d’application n°2020-1439 du 23 novembre 2020, à compter du 1er juillet 2021, les vélos de plus 16 pouces vendus neufs par des professionnels disposeront d’un identifiant unique auquel seront associées les coordonnées du propriétaire. Cette identification obligatoire des vélos permet d’associé un vélo à son propriétaire.<br>
<br>
L’identifiant est transmis par un opérateur agrée et choisi par Do Sport, lequel transmettra directement toutes les informations relatives à l’identification du vélo à l’acheteur.<br>
<br>
En cas de changement de propriétaire, les textes susvisés prévoient que l’acheteur doit en faire la déclaration auprès de l’opérateur agrée ayant transmis l’identifiant.<br>
<br>
En cas de retour du vélo dans le cadre des articles 7, 8 et 11 des présentes Conditions Générales de Vente ou dans l’hypothèse d’un colis qui n’aurait pas été livré ou retiré, le remboursement, le cas échéant, ne pourra intervenir qu’à compter de la déclaration faite auprès de l’opérateur du retour du vélo.</p>

ARTICLE 13 - DONNÉES PERSONNELLES
<p>Protection de vos données à caractère personnel<br>
<br>
Prenez connaissance de notre charte de protection des données personnelles des clients en cliquant ici .<br>
<br>
Conformément à la loi informatique et Libertés et à la règlementation Européenne concernant la protection des données à caractère personnel, vous disposez d’un droit d’accès, de rectification, d’opposition et de suppression sur les données à caractère personnel vous concernant. Vous pouvez exercer ces droits sur simple demande, accompagnée de la photocopie d’un justificatif d’identité à l’adresse suivante : dpo@DoSport.fr</p>



<h2 class=\"mt-5\">ARTICLE 14 - PROPRIÉTÉ INTELLECTUELLE</h2>
<p>L’ensemble du Site et chacun de ses éléments relèvent de la législation sur la propriété intellectuelle, notamment droits d’auteurs, dessins et modèles, marques, noms de domaine, logiciels ou bases de données… (sans que cette liste ne soit exhaustive).<br>
<br>
A ce titre, tous les droits de reproduction, de représentation et de communication publique sont réservés y compris pour les documents téléchargeables et les représentations visuelles, photographiques, audiovisuelles ou autres.<br>
<br>
Seul le droit de consulter le Site est conféré aux Clients. La reproduction de tout ou partie du contenu est seulement autorisée aux fins exclusives d’information pour un usage personnel et privé.<br>
<br>
Tout lien mis en place en direction du Site doit faire l’objet d’une autorisation préalable et écrite de la Société. La Société décline toute responsabilité concernant le contenu de ces liens.<br>
<br>
En toute hypothèse, les liens hypertextes renvoyant au Site devront être retirés à première demande de la Société.</p>



<h2 class=\"mt-5\">ARTICLE 15 - RESPONSABILITÉ</h2>
<p>La Société ne pourra être tenue responsable et aucune indemnité ne pourra lui être demandée au titre des retards de livraison ou conséquences dommageables dus à des cas de force majeure tels que définis par la jurisprudence des cours et tribunaux français.<br>
<br>
La Société ne pourra être tenue responsable des interruptions, retards ou indisponibilités du Site dus à des travaux de maintenance, des interruptions du réseau Internet, des pannes techniques, un cas de force majeure, le fait d’un tiers ou de toute circonstance quelle qu’elle soit.<br>
<br>
La Société s’efforce d’assurer au mieux de ses possibilités, l’exactitude et la mise à jour des informations diffusées sur le Site, dont elle se réserve le droit de corriger, à tout moment et sans préavis, le contenu.<br>
<br>
Le Site contient des informations provenant de tierces personnes, la Société ne donne donc aucune garantie quant à l’exactitude, la précision ou l’exhaustivité des informations mises à disposition sur le Site. La responsabilité de la Société ne pourra en aucun cas être engagée quant à d’éventuelles erreurs ponctuelles pouvant survenir sur le site.</p>



<h2 class=\"mt-5\">ARTICLE 16 - SERVICE CLIENTS</h2>
<p>Pour toute information ou conseil, le Client peut contacter le Service Clients,<br>
<br>
Par téléphone du lundi au vendredi de 9h à 20h et le samedi de 9h à 19h :au 0970 83 05 05 (n° non surtaxé, prix d’un appel local)<br>
<br>
Par mail- pour les clients ayant réalisé un achat : sur l’espace Client dans la rubrique « Vos achats en ligne » Besoin d’aide. Les informations relatives à la commande sont également disponible dans cet espace.<br>
<br>
- ou à l’adresse suivante : service.client@DoSport.fr<br>
<br>
Par courrier<br>
<br>
Service Clients Do Sport<br>
<br>
17 avenue de la falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Conformément à la loi Informatique et Libertés et à la règlementation Européenne concernant la protection des données à caractère personnel, toutes les conversations et coordonnées clients sont supprimées dans les quinze (15) jours suivant la clôture de la demande. De plus, les messages sont chiffrés de bout en bout, c’est-à-dire que seul le Client et le Service Client peuvent avoir accès aux messages.<br>
<br>
Vous disposez d’un droit d’accès, de rectification, d’opposition et de suppression sur les données à caractère personnel vous concernant. Vous pouvez exercer ces droits sur simple demande accompagnée de la photocopie d’un justificatif d’identité ou des données permettant à Do Sport de vous identifier sans équivoque à l’adresse suivante : dpo@DoSport.fr<br>
<br>
Attention : afin d’optimiser le traitement de ses demandes, le Client doit indiquer dans son courrier ses nom, prénom, email avec lesquels sa commande a été effectuée et le numéro de la commande concernée.</p>



<h2 class=\"mt-5\">ARTICLE 17 - LOI APPLICABLE</h2>
<p>Les présentes Conditions Générales de Vente sont soumises à la loi française.<br>
<br>
Tout litige n'ayant pas trouvé une solution amiable sera soumis à la compétence exclusive des tribunaux français.</p>



<h2 class=\"mt-5\">ARTICLE 18 - MÉDIATION DE LITIGES DE CONSOMMATION</h2>
<p>L’ordonnance du 20 août 2015 et le décret n°2015-1382 du 30 octobre 2015 relatifs à la médiation des litiges de la consommation et faisant application de la directive 2013/11/UE du Parlement européen du 21 mai 2013, relative au règlement extrajudiciaire des litiges de consommation, donne la possibilité au consommateur de se référer à la médiation afin de faciliter le règlement à l’amabile des litiges avec un professionnel à l’occasion d’une vente passée depuis le site DoSport.com<br>
<br>
Ainsi, pour tout litige qui n’aurait pas été réglé directement avec la Société, le Client est informé qu’il peut à présent recourir gratuitement au service de médiation mis en place par Médiation – Vivons mieux ensemble :<br>
<br>
- Adresse du site : www.mediation-vivons-mieux-ensemble.fr<br>
<br>
- Adresse du médiateur : MEDIATION – VIVONS MIEUX ENSEMBLE 465 avenue de la Libération 54 000 NANCY<br>
<br>
<br>
<br>
Plate-forme européenne de résolution en ligne des litiges : https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home.show&lng=FR<br>
<br>
Avant de saisir le médiateur de la consommation, le consommateur doit déjà avoir tenté de résoudre son litige directement auprès du professionnel par une réclamation écrite ou avoir fait une réclamation selon les termes du contrat conclu avec le professionnel.</p>
\t</div>
{% endblock %}
", "home/cgv.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\home\\cgv.html.twig");
    }
}
