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
<p>Les pr??sentes Conditions G??n??rales de Vente sont conclues entre la soci??t?? Do Sport France, SAS au capital de 41 509 983,00 ??? dont le si??ge social est situ?? 17 Avenue de la Falaise, 38360 Sassenage, immatricul??e au RCS de Grenoble sous le num??ro 428 560 031 (ci-apr??s d??nomm??e ?? la Soci??t?? ??) et toute personne physique effectuant un achat (ci-apr??s d??nomm??e ?? le Client ??) sur le site www.DoSport.com (ci-apr??s d??sign?? ?? le Site ??).<br>
<br>
Conform??ment aux dispositions du code de l???environnement, et en sa qualit?? de distributeur de produits g??n??rateurs de d??chets, la Soci??t?? est adh??rente ?? plusieurs fili??res de Responsabilit?? Elargie des Producteurs de d??chets (REP) et dispose ?? ce titre, d???un identifiant unique (IDU) pour chaque fili??re aupr??s de qui elle est rattach??e, ?? savoir :<br>
<br>
<br> 
<br>
IDU El??ments d???Ameublement (DEA) : FR006076_10WIDG<br>
<br>
IDU Textile, Linge de maison et Chaussures (TLC) : FR218603_11IBJU<br>
<br>
IDU D??chets d???Equipements Electriques et Electroniques (DEEE) : FR006076_05NNP3<br>
<br>
IDU Piles et Accumulateurs : FR002491_06F8EN<br>

IDU Emballages M??nagers & Papiers (CITEO) : FR219498_01WCRR<br>

IDU Articles de Sport et de Loisirs (ASL) : FR231727_13JCWL<br>
<br>
<br>
<br>
Toutes les commandes pass??es par l???interm??diaire du Site sont soumises sans r??serve aux pr??sentes Conditions G??n??rales de Vente.<br>
<br>
Les pr??sentes Conditions G??n??rales de Vente s???appliquent ?? l???exclusion de toutes autres conditions, notamment celles applicables aux ventes r??alis??es dans les magasins Do Sport.<br>
<br>
De m??me, il est pr??cis?? que les commandes effectu??es par le biais de la Marketplace ne sont pas soumises aux pr??sentes Conditions G??n??rales de Ventes (il convient de se r??f??rer aux Conditions G??n??rales de Vente de la Marketplace).<br>
<br>
Les pr??sentes Conditions G??n??rales de Vente repr??sentent l???int??gralit?? des engagements r??ciproques de la Soci??t?? et du Client qui les accepte express??ment.<br>
<br>
Les commandes ne peuvent ??tre pass??es que par des personnes physiques majeures r??sidant en France m??tropolitaine agissant ?? des fins non professionnelles et achetant pour leurs besoins personnels.</p>



<h2 class=\"mt-5\">ARTICLE 2 - PRODUITS COMMERCIALIS??S</h2>
<p>Le Client peut s??lectionner un ou plusieurs produits parmi les diff??rentes cat??gories propos??es sur le Site. Il est pr??cis?? que la Soci??t?? est susceptible de modifier ?? tout moment l???assortiment de produits propos??s sur le Site, sans pr??judice des commandes pass??es par le Client.<br>
<br>
Conform??ment aux dispositions du code de la consommation, le Client peut, pr??alablement ?? sa commande, prendre connaissance sur le Site des caract??ristiques essentielles du ou des produits qu???il d??sire commander sur la fiche produit correspondante.<br>
<br>
Les produits ??tant en constante ??volution, il est pr??cis?? que les fabricants peuvent modifier sans pr??avis la composition technique et les caract??ristiques des r??f??rences produits.<br>
<br>
L'offre de produits propos??e sur le Site peut ??tre diff??rente de celle propos??e dans les magasins physiques ?? enseigne Do Sport.</p>
<br>
<br>
<br>
<h2 class=\"mt-5\">ARTICLE 3 - DISPONIBILIT?? ET PRIX</h2>
<p>Les offres de produits et de prix sont valables tant qu???elles sont visibles sur le Site. En cas d???offres promotionnelles, les prix indiqu??s seront valables pendant la p??riode de l???offre, sur une s??lection de produits.<br>
<br>
Lors du traitement de sa commande, le Client sera inform?? dans les meilleurs d??lais par courrier ??lectronique en cas d???indisponibilit?? de produits command??s. Ces produits ne seront pas factur??s au Client.<br>
<br>
Les prix affich??s sur le Site sont, par d??faut, indiqu??s en euros et toutes taxes comprises et sont applicables en France m??tropolitaine.<br>
<br>
Les prix pratiqu??s sur le site sont ind??pendants des prix pratiqu??s dans les magasins Do Sport, sauf mention contraire, ils s???appliquent exclusivement sur les produits achet??s en ligne.<br>
<br>
La TVA est appliqu??e aux taux en vigueur au moment de la passation de la commande.<br>
<br>
La Soci??t?? se r??serve le droit de modifier ses prix ?? tout moment mais s???engage ?? appliquer les tarifs en vigueur lors de l???enregistrement de la commande du Client sous r??serve de la disponibilit?? des produits ?? cette date.<br>
<br>
Les produits demeurent la propri??t?? de la Soci??t?? jusqu???au complet paiement du prix par le Client. N??anmoins, les risques seront transf??r??s au Client ?? compter de la r??ception du(des) produit(s) par le Client.</p>



<h2 class=\"mt-5\">ARTICLE 4 - COMMANDE</h2>
<p>La disponibilit?? des produits ainsi que le d??lai de livraison sont affich??s sur le Site.<br>
<br>
Toute commande sur le Site suppose l???acceptation expresse et sans r??serve des pr??sentes Conditions G??n??rales de Vente, sans toutefois que cette acceptation soit conditionn??e par une signature manuscrite de la part du Client.<br>
<br>
Toute passation de commande n??cessite la cr??ation d???un compte client. Une fois le compte cr??e, le Client aura acc??s ?? son espace client. L???acc??s ?? cet espace client est conditionn?? ?? l???identification du Client ?? l???aide de son adresse mail indiqu??e lors de la cr??ation du compte ainsi que du mot de passe secret et personnel choisi. La Soci??t?? ne saurait ??tre tenue responsable de toute action r??alis??e sur l???espace client par un tiers auquel le Client aurait communiqu?? ses identifiants ou qui aurait eu acc??s au compte suite ?? une n??gligence du Client.<br>
<br>
Toutes les informations relatives ?? la commande seront consultables dans la rubrique ?? Le suivi de commande ?? de l???espace client.<br>
<br>
Le Client s???engage ?? ce que les informations communiqu??es lors de sa commande soient compl??tes, exactes et ?? jour. Dans le cas contraire, la Soci??t?? se r??serve le droit d???annuler purement et simplement la commande.<br>
<br>
La commande peut ??tre effectu??e pour une adresse de livraison distincte de l???adresse de facturation.<br>
<br>
Les commandes engagent le Client d??s qu???il confirme son paiement en cliquant sur ?? Valider ??.<br>
<br>
Suite ?? la r??ception de la commande, la Soci??t?? adressera au Client un email de confirmation de commande comprenant le r??capitulatif de la commande ainsi que son num??ro, puis validera d??finitivement la commande en adressant un email de validation de commande. Ces emails seront envoy??s ?? l???adresse mail renseign??e lors de la cr??ation du compte client.<br>

La Soci??t?? se r??serve le droit de refuser ou d???annuler une commande si elle estime que le Client se livre ?? de la distribution ou exerce une activit?? ??conomique gr??ce aux produits ainsi command??s ou pour tout autre motif.<br>
<br>
Cas de commande web pay??e en magasin :Les commandes web pay??es en magasin comprennent les commandes du client pass??es chez lui depuis son compte e-commerce et pay??es en caisse, les commandes du client pass??es dans le magasin depuis son compte e-commerce et pay??es en caisse et enfin les commandes du client pass??es dans le magasin depuis le compte e-commerce du magasin et pay??es en caisse.<br>
<br>
Une fois la commande pass??e, elle est en statut ?? en attente de paiement ??. Le client dispose alors de trois jours (du lundi au samedi) pour venir payer sa commande en magasin. Au-del?? de ce d??lai, la commande sera automatiquement annul??e.<br>
<br>
Une fois la commande pass??e, le client devra obligatoirement imprimer le code barre d??livr?? sur la page de confirmation de commande ou dans le mail de validation qui lui sera envoy??. Le num??ro du code barre accompagn?? du num??ro du bon de commande sont indispensable lors du paiement en caisse.<br>
<br>
Lorsque la commande est pay??e, le cycle de vie reste identique ?? celui des autres commandes pass??es en ligne.<br>
<br>
Le mode de paiement en caisse n???est pas disponible pour les clients souhaitant ??tre livr??s en Fedex Express ni pour les commandes de produit Market Place.<br>
<br>
Service d???e-r??servation :Le service d???e-r??servation propos?? sur le Site par la Soci??t?? permet au Client de r??server un produit en magasin de son choix, sous r??serve de la disponibilit?? du produit choisi dans le magasin en question.<br>
<br>
Les modalit??s de fonctionnement de ce service sont accessibles au Client d??s lors qu???il utilise le Service d???e-r??servation.<br>
<br>
Avis fiche produits : Do Sport propose ?? ses clients par l???interm??diaire de son partenaire ?? Avis V??rifi??s ?? la possibilit?? de laisser un avis ?? l???issu de son exp??rience sur le site DoSport.com. Vingt (20) jours apr??s avoir pass?? sa commande sur le site marchand, le Client re??oit un email de demande d???avis. Le Client a alors la possibilit?? de laisser un avis sur son exp??rience achat.<br>
<br>
Le service Client de Do Sport dispose de 14 jours pour prendre connaissance de l???avis et v??rifier qu???il respecte les crit??res de mod??ration mis en place par Avis V??rifi??s eu ??gard aux r??glementations en vigueur applicable (non discriminatoire, non injurieux etc.).<br>
<br>
A expiration de ce d??lai, l???avis sera publi?? sur le site marchand. Un e-mail sera adress?? au Client en cas de refus de publication de l???avis laiss?? ne respectant les r??glementations en vigueur applicables.</p>



<h2 class=\"mt-5\">ARTICLE 5 - MODIFICATION DE LA COMMANDE</h2>
<p>Toute demande de modification de la commande effectu??e ne peut ??tre prise en compte par la Soci??t?? que si elle a ??t?? formul??e aupr??s du Service Clients et si la commande n???a pas encore eu un contr??le Adyen NV positif. (voir modalit??s de contact ?? l???Article 15 ci-apr??s). Une fois la commande contr??l??e par Adyen NV il n???est plus possible de modifier/annuler la commande.<br>
<br>
Dans un souci de rapidit??, il est recommand?? au Client de contacter le Service Clients par t??l??phone au num??ro indiqu?? ?? l???article 15.<br>
<br>
Les commandes web pay??es en magasin ne sont pas soumises au contr??le Adyen NV et ne sont pas susceptibles de modification/annulation.</p>



<h2 class=\"mt-5\">ARTICLE 6 - R??CLAMATIONS</h2>
<p>Toute r??clamation relative ?? la r??ception de la commande (produit re??u abim??, pi??ce manquante, ???) doit ??tre effectu??e aupr??s du Service Clients (voir modalit??s de contact ?? l???Article 15 ci-apr??s) avant la fin du d??lai de r??tractation, de quinze (15) jours suivant la r??ception de la commande pour les clients non adh??rents au CLUB Do Sport et de trente (30) jours pour les clients adh??rents.<br>
<br>
Pass?? ce d??lai, les r??clamations ne pourront ??tre prises en compte par la Soci??t?? sauf celles relatives aux garanties telles que d??finies ?? l???Article 11 ci-apr??s.</p>



<h2 class=\"mt-5\">ARTICLE 7 - DROIT DE R??TRACTATION</h2>
<p>Le Client dispose d???un d??lai de quinze (15) jours francs ?? compter de la r??ception de sa commande pour notifier ?? la Soci??t?? son intention de retourner tout produit ne lui convenant pas.<br>
<br>
Pour le Client adh??rent au Club Do Sport , le d??lai de r??tractation est port?? ?? trente (30) jours francs.<br>
<br>
Lorsque le d??lai de r??tractation expire un samedi, un dimanche ou un jour f??ri?? ou ch??m??, il est prorog?? jusqu???au premier jour ouvrable suivant.<br>
<br>
Le Client devra notifier ?? la Soci??t?? sa volont?? de se r??tracter au moyen d???une d??claration d??nu??e d???ambig??it??. Pour ce faire, le Client pourra utiliser le mod??le de formulaire de r??tractation disponible en annexe des pr??sentes Conditions G??n??rales de Vente.<br>
<br>
Le Client pourra manifester sa volont?? de se r??tracter :<br>

- En se rendant dans l'un des magasins de la Soci??t?? https://www.DoSport.com/magasins/ muni de sa facture d???achat et du produit qu???il souhaite retourner, un r??c??piss?? de sa r??tractation lui sera alors remis ;<br>
<br>
- En contactant le Service Clients de la Soci??t?? :<br>
<br>
Soit par mail ?? l'adresse suivante :<br>
<br>
-service.client@DoSport.fr<br>
<br>
via le formulaire de contact relatif au droit de r??tractation en se rendant sur le Service Client en ligne (voir modalit??s de contact ?? l???Article 15 ci-apr??s) dans la rubrique ?? Besoin d???Aide ?? de l???espace client en cliquant sur la question ?? je ne veux plus de mon article, je souhaite me r??tracter ??.<br>
<br>
Les conditions de retour sont accessibles via ce lien???<br>
<br>
Soit par courrier ?? l???adresse suivante :<br>
<br>
Service Clients Do Sport<br>
<br>
17 avenue de la falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Soit par t??l??phone : du lundi au vendredi de 9h ?? 20h et le samedi de 9h ?? 19h au 0970 83 05 05 (co??t d'un appel local).<br>
<br>
S???il se r??tracte en contactant le Service Clients, le Client devra alors indiquer ses coordonn??es et les r??f??rences de sa commande.<br>
<br>
Le Service Clients accusera r??ception de la demande du Client et l???informera des modalit??s de retour du/des produit(s).<br>
<br>
Le Client disposera d???un d??lai de 30 jours suite ?? sa notification de r??tractation pour retourner son ou ses produit(s).<br>
<br>
Soit via son espace client sur le site www.DoSport.com :<br>
<br>
Conditions de retour d???un article par voie postale pour un ?? petit produit ?? ou via un transporteur pour un produit de plus de 30 kg et/ou volumineux (frais de retour ?? votre charge.<br>
<br>
En se connectant ?? son espace client, le client devra s??lectionner la commande concern??e dans la rubrique ?? Mes commandes ?? puis ?? Mes achats ?? et cliquer sur ?? Retourner mon produit ??. Le Client devra ensuite indiquer le ou les produit(s) qu???il d??sire retourner et s??lectionner le motif du retour avant d???envoyer sa demande.<br>
<br>
La Soci??t?? n???accepte pas les colis adress??s en port d?? ou en contre remboursement.<br>
<br>
Le Client est responsable du mode d???emballage choisi pour le retour de son/ses produit(s).<br>
<br>
Le retour d'un colis doit ??tre soigneusement pr??par?? selon les indications mentionn??es dans la FAQ Do Sport, disponible ?? l???adresse : clients.DoSport.com/Simple/Faq.aspx<br>
<br>
Produits exclus du droit de r??tractation :Conform??ment aux dispositions de l???article L221-28 du Code de la Consommation, le droit de r??tractation ne peut ??tre exerc?? pour les biens confectionn??s selon les sp??cifications du Client ou nettement personnalis??s.<br>
<br>
De plus, pour des raisons d???hygi??ne et parce qu???ils ne pourront ??tre re-commercialis??s, les produits suivants ne peuvent faire l???objet d???un droit de r??tractation d??s lors leur emballage a ??t?? descell?? : prot??ge-dents, bouchons d???oreilles couches pour b??b?? ou tout autre article requ??rant des pr??cautions d???hygi??ne particuli??res.<br>
<br>
Pour les m??mes raisons, les sous-v??tements, coquilles de protection, articles de sudation et maillots de bain sans protection hygi??nique, s???ils ont d??j?? ??t?? utilis??s et/ou port??s en dehors d???un essai non abusif ne pourront faire l???objet d???une r??tractation.<br>
<br>
Seuls les produits retourn??s complets, munis de leurs ??tiquettes, notices, garanties, cordons et autres accessoires en parfait ??tat et dans leur emballage d???origine en ??tat d?????tre commercialis??s seront accept??s.<br>
<br>
Frais de renvoi :En cas d???exercice du droit de r??tractation, les frais de renvoi du/des produit(s) sont ?? la charge du Client.<br>
<br>
La Soci??t?? n???accepte pas les colis adress??s en port d?? ou en contre remboursement.<br>
<br>
Pour les produits ne pouvant ??tre retourn??s par la Poste en raison de leur nature et/ou de leur taille, conform??ment ?? la r??glementation en vigueur, une estimation des frais de retour, aupr??s d???un transporteur, est communiqu??e ci-dessous au Client ?? titre indicatif. Les frais de retour sont ?? la charge du Client.<br>
<br>
Le montant des frais de retour est calcul?? en fonction de la typologie de produit et de la distance ?? parcourir par le transporteur pour r??cup??rer le produit et le ramener en entrep??t.
<br>
- Appareil de musculation : entre 65 ??? et 140 ???<br>
<br>
- V??lo : entre 50 ??? et 70 ???<br>
<br>
Attention, cette estimation de prix n???engage pas la Soci??t??. Le prix ?? payer pour le renvoi du produit sera fonction du transporteur choisi.<br>
<br>
Remboursement suite ?? la r??tractation :Conform??ment au code de la consommation, la Soci??t?? est tenue de rembourser la totalit?? des sommes vers??es, frais de port (aller) inclus (au tarif standard). Le remboursement sera effectu?? lors de la r??ception du/des produit(s) retourn??(s). La Soci??t?? proc??dera au remboursement selon le moyen de paiement utilis?? pour la commande ou sous toute autre forme apr??s accord expr??s du Client.</p>



<h2 class=\"mt-5\">ARTICLE 8 - RETOUR</h2>
<p>En dehors du droit de r??tractation, le produit pourra ??tre retourn?? en cas de non-conformit?? ?? la commande (erreur de r??f??rence ou produit abim??) ou de d??fectuosit?? (cf Article 11 - Garantie).<br>
<br>
En cas de r??ception d???une r??f??rence diff??rente de celle command??e ou d???un produit abim??, le Client est invit?? soit :<br>
<br>
- ?? se rendre dans l'un des magasins de la Soci??t?? (https://www.DoSport.com/magasins/) muni de sa facture d???achat et du produit ?? retourner.<br>
<br>
Dans ce cas, la Soci??t?? examinera le produit et si celui-ci est non-conforme, elle proposera alors au Client de le rembourser de sa commande et des frais de port associ??s sous forme d???avoir (seulement si le montant de la commande et des frais de port est sup??rieure ?? 5 ???) soit sous forme d???esp??ces, le Client ??tant libre de choisir.<br>
<br>
- ?? contacter le Service Clients de la Soci??t?? en se rendant sur le Service Client en ligne (voir modalit??s de contact ?? l???Article 15 ci-apr??s) dans la rubrique ?? Besoin d???Aide ?? de l???espace client ou par t??l??phone : du lundi au vendredi de 9h ?? 20h et le samedi de 9h ?? 19h au 0970 83 05 05 (co??t d'un appel local).<br>
<br>
Dans ce cas, le produit non conforme ou ab??m?? devra ??tre retourn?? ?? la Soci??t?? et celle-ci proposera de lui rembourser l???int??gralit?? du montant de la commande (prix du produit + frais de livraison ??ventuellement pay??s) selon le m??me mode de r??glement que celui utilis?? lors de la commande d??s r??ception du produit s???av??rant non-conforme ou ab??m??.<br>
<br>
Les frais de retour seront alors rembours??s sur la base des tarifs appliqu??s par les services postaux pour les envois en colissimo suivi.<br>
<br>
En cas de d??fectuosit?? du produit command??, le Client b??n??ficiera des garanties l??gales et devra se rendre dans le magasin Do Sport le plus proche pour la prise en charge de son produit soit dans un point Mondial Relay (service gratuit uniquement disponible pour les petits produits (moins de 30 kilos)) conform??ment ?? l???article 11 ??? Garantie des pr??sentes Conditions G??n??rales de Vente.<br>
<br>
Plus de pr??cision sur la proc??dure via Mondial Relay, via le lien ci-apr??s Conditions de retour</p>



<h2 class=\"mt-5\">ARTICLE 9 - PAIEMENT DU PRIX</h2>
<p>Le paiement est r??alis?? en ligne lors de la passation de la commande.<br>
<br>
Le paiement sera encaiss?? par la Soci??t?? juste avant la transmission de la commande au service charg?? de sa pr??paration.<br>
<br>
Modalit??s de paiement :<br>
<br>
Les modalit??s de paiement suivantes sont propos??es au Client :<br>
<br>
Carte bancaire : les cartes bancaires accept??es sur le site sont Carte Bleue, Visa et MasterCard. Ces cartes de paiement doivent ??tre d??livr??es par un ??tablissement bancaire ou financier situ?? dans l???Union Europ??enne.<br>
<br>
Bons d???achat ?? e-commerce ?? : il est possible d???utiliser les bons d???achat d??livr??s par le Service Clients dans le cadre d???un achat sur le Site pour le paiement de toute ou partie de la commande. Ces bons d???achat ne sont utilisables qu???une seule fois.<br>
<br>
Paiement en magasin : il est possible de payer la commande en magasin Do Sport dans un d??lai de 72h apr??s la prise en compte de cette derni??re en statut ?? en attente de paiement ??, muni d???une pi??ce d???identit??.<br>
<br>
Les modes de paiement accept??s sont les suivants : carte bleue, ch??que bancaire, esp??ces, American Express, Avoir, bon d???achat, carte cadeau Do Sport et ch??que cadeau.<br>
<br>
Paiement en 3 ou 4 X :<br>
<br>
Le service de ?? paiement en 3 ou 4 X ?? permet ?? certains internautes clients du site DoSport.com de payer leurs achats en trois ou quatre fois (trois ou quatre mensualit??s) avec leur carte bancaire.<br>
<br>
Le service de ?? paiement en 3 ou 4 X ?? est une op??ration de paiement ??chelonn?? qui n???est pas soumise aux dispositions de l???article L.311-1 et suivants du Code de la Consommation notamment en raison de sa dur??e et des frais n??gligeables qui y sont associ??s.<br>
<br>
Le pr??sent service est r??serv?? aux particuliers, personnes physiques majeures, r??sidant fiscalement en France M??tropolitaine et utilisant une carte bancaire Visa ou MasterCard, pour le paiement de leur commande sur le site marchand. La dur??e de validit?? de la care utilis??e doit ??tre post??rieure ?? la date de la derni??re ??ch??ance du ?? paiement en 3 ou 4 X ??.<br>
<br>
Les cartes ?? autorisation syst??matique de type Electron ou Maestro, les e-cards, les cartes Indigo et American Express ne sont pas accept??es.<br>
<br>
<br>
<br>
S??curisation des paiements<br>
<br>
Les paiements effectu??s sur le Site sont enti??rement s??curis??s.<br>
<br>
Gr??ce aux caract??ristiques techniques du logiciel de chiffrement utilis?? sur le Site, les coordonn??es bancaires (n?? de la carte bancaire et date d???expiration) communiqu??es par le Client ne peuvent pas ??tre intercept??es par des tiers. En communiquant ses coordonn??es bancaires, le Client accepte par avance et sans condition que la Soci??t?? proc??de ?? la transaction s??curis??e. Le Client autorise donc par avance sa banque ?? d??biter son compte ?? la vue des relev??s transmis par la Soci??t??, m??me en l???absence de factures sign??es de la main du titulaire de la carte. L???autorisation de d??bit du compte Client est toujours donn??e pour le montant du produit achet?? tel que factur?? par la Soci??t??.<br>
<br>
Le Client est en droit de sauvegarder les informations relatives ?? sa carte de paiement, sous r??serve de son consentement explicite.<br>
<br>
Contr??les anti FraudesLa Soci??t??, en collaboration avec Adyen NV, contr??le toutes les commandes qui ont ??t?? valid??es sur le Site ?? l???exception des commandes web pay??es en magasin. Dans le cadre de ces proc??dures, la Soci??t?? pourra ??tre amen??e ?? demander au Client toutes les pi??ces n??cessaires au d??blocage de sa commande.<br>
<br>
Les informations en rapport avec sa commande font l'objet d'un traitement automatis?? de donn??es. Ce traitement automatis?? de donn??es a pour finalit?? de d??finir un niveau d'analyse d'une transaction et de lutter contre la fraude ?? la carte bancaire.<br>
<br>
La non-transmission des donn??es en rapport avec sa commande emp??che la r??alisation et l'analyse de la transaction.<br>
<br>
La survenance d'un impay?? au motif d'une utilisation frauduleuse d'une carte bancaire entra??nera l'inscription des coordonn??es en rapport avec la commande associ??e ?? cet impay?? au sein d'un fichier incident de paiement mis en ??uvre par la Soci??t??. Une d??claration irr??guli??re ou une anomalie pourra ??galement faire l'objet d'un traitement sp??cifique.<br>
<br>
Conform??ment ?? la loi Informatique et Libert??s et ?? la r??glementation Europ??enne concernant la protection des donn??es ?? caract??re personnel , vous disposez d???un droit d???acc??s, de rectification, d???opposition et de suppression sur les donn??es ?? caract??re personnel vous concernant. Vous pouvez exercer ces droits sur simple demande accompagn??e de la photocopie d???un justificatif d???identit?? ?? l???adresse e-mail suivante dpo@DoSport.fr ou l???adresse suivante postale suivante :<br>
<br>
GROUPE Do Sport<br>
<br>
DPO<br>
<br>
17 Avenue de la Falaise<br>
<br>
38360 SASSENAGE<br>
<br>
R??ductions applicablesIl est pr??cis?? que les r??ductions offertes aux salari??s de la soci??t?? Groupe Do Sport et toute autre soci??t?? affili??e et les r??ductions partenaires ne sont pas valables pour les achats r??alis??s sur le site.<br>
<br>
Cumul d?????? fid??lit??Les Clients ayant une carte de fid??lit?? Club Do Sport pourront utiliser leur bons fid??lit??s en magasin ou sur le site www.DoSport.com avec pr??sentation de la carte de fid??lit?? (ou connexion ?? l???espace fid??lit?? sur le site www.DoSport.com ).<br>
<br>
Les bons de fid??lit?? sont disponibles ?? partir de 5 euros, valables par tranche de 5??? jusqu????? 20??? et par tranche de 10???jusqu????? 100??? sans minimum d???achat dans l???ensemble des magasins Do Sport situ??s en France m??tropolitaine et sur le site Do Sport. Ils sont valables sur tous les articles, y compris les articles en soldes et en promotions. Hors coin des affaires, achat de carte cadeaux, prestations et frais de livraison.<br>
<br>
Offre strictement personnelle, valable une seule fois, non ??changeable, non remboursable et non fractionnable. En cas d???oubli de la carte, les points peuvent ??tre cr??dit??s par l???h??tesse de caisse sur pr??sentation du ticket de caisse. L???adh??rent dispose d???un espace personnel en ligne, rubrique ?? Mon espace fid??lit?? ?? sur https://DoSport.com/eto/fidelity/index/ qui lui permet de consulter le montant de sa cagnotte fid??lit??, de commander sa carte physique, de modifier ou compl??ter ses informations personnelles et de retrouver l???historique de ses achats.</p>



<h2 class=\"mt-5\">ARTICLE 10 - LIVRAISONS</h2>
<p>Do Sport propose ?? ces Clients trois modes de livraison :<br>

- La livraison ?? domicile ou en relais colis<br>
<br>
- La livraison en magasin<br>
<br>
- Le retrait en magasin<br>
<br>
<br>
<br>
En cas de commande multi-produits, le Client peut choisir un mode de livraison diff??rent par produits selon la disponibilit?? de services propos??s par Do Sport pour ces produits.<br>
<br>
10.1. La livraison ?? domicile ou en relais colis : Les d??lais annonc??s sur le Site sont calcul??s en jours ouvr??s (sous r??serve de validation de la commande par Adyen NV). La date de livraison est calcul??e en tenant compte du d??lai d???exp??dition de la commande auquel est ajout?? le d??lai de livraison du transporteur (DPD La Poste / Mondial Relay/ Fedex / Transporteur).<br>
<br>
Le d??lai de livraison court ?? partir du d??part du colis des entrep??ts de la Soci??t?? ; il s'ajoute donc au d??lai d'exp??dition de la commande. Le Client est inform?? par mail d??s l???exp??dition de sa commande.<br>
<br>
Le d??lai de livraison d??pend du mode de livraison choisi au passage de la commande.<br>
<br>
En cas de d??passement du d??lai indiqu??, le Client sera inform?? par mail et il lui sera propos?? une annulation de sa commande.<br>
<br>
Les produits sont livr??s ?? l???adresse de livraison indiqu??e lors de la commande ou au relais colis indiqu??. Les livraisons s???effectuent uniquement en France m??tropolitaine et en Corse.<br>
<br>
En cas de rupture de stock exceptionnelle, le Client sera averti par mail ou t??l??phone. La Soci??t?? proposera au Client soit de retarder la livraison de l???int??gralit?? de sa commande ?? la date de r??approvisionnement du produit concern??, soit d???accepter une livraison partielle, soit une annulation de sa commande.<br>
<br>
10.2. La livraison en magasin Do Sport propose un service de livraison gratuite en magasin permettant aux Clients de commander depuis le Site et de b??n??ficier d???une livraison gratuite en magasin.<br>
<br>
Les produits command??s pourront ??tre pay??s depuis le Site ou directement en magasin selon les modalit??s pr??cis??es ?? l???article 4 ci-avant.<br>
<br>
La livraison en magasin est effectu??e sous 10 jours ouvr??s maximum apr??s la validation de la commande en ligne. La date de livraison varie en fonction du magasin choisi.<br>
<br>
La livraison est disponible uniquement pour les produits exp??di??s et livr??s par Do Sport et dans les magasins Do Sport hors magasins affili??s (voir liste en cliquant ici).
<br>
A tout moment le Client peut suivre sa commande sur son espace client.<br>
<br>
Le Client re??oit un SMS, s???il a fourni son num??ro de t??l??phone, et/ou un email lorsque la commande est disponible en magasin, l???invitant ?? venir la r??ceptionner, en fournissant sa pi??ce d???identit?? ainsi que son nom ou son adresse ou le num??ro de commande.<br>
<br>
La commande pourra ??tre retir??e ?? l???int??rieur du magasin aupr??s d???une caisse identifi??e ?? Retrait des commandes ?? ou sur le parking du magasin si ce service est disponible dans le magasin s??lectionn??.<br>
<br>
Le Client dispose alors d???un d??lai de 7 jours ouvr??s pour r??cup??rer sa commande. Pass?? ce d??lai, la commande sera annul??e et rembours??e au Client.<br>
<br>
En cas de rupture de stock exceptionnelle, le Client sera averti par mail.<br>
<br>
La Soci??t?? proposera au Client :<br>
<br>
- soit de retarder la livraison de l???int??gralit?? de sa commande ?? la date de r??approvisionnement du produit concern??,<br>
<br>
- soit d???accepter une livraison partielle, dans cette hypoth??se le Client sera d??bit?? des seuls produits disponibles en cas de paiement effectu?? depuis le Site ou d???un un remboursement du prix d???achat du (des) produit(s) non livr??(s) en cas de paiement en magasin,<br>
<br>
- soit une annulation et un remboursement de l???int??gralit?? de sa commande.<br>
<br>
10.3. Le Service ?? Retrait 2h en magasin ??Le Client peut b??n??ficier du service ?? Retrait 2h en magasin ?? pour certains produits command??s et pay??s depuis le Site. La fiche de ces produits, mentionne la possibilit?? de b??n??ficier de ce service. Le Client peut ??galement choisir le Retrait 2h en magasin lors du choix du mode de livraison avant validation de la commande s???il est disponible pour les produits s??lectionn??s. Dans les deux cas, le Client doit renseigner sa location et v??rifier la disponibilit?? de ce service. A d??faut, le Client peut choisir la livraison en magasin.<br>
<br>
Si le client choisit le service Retrait 2h en magasin, le commande sera pr??par??e par le magasin s??lectionn?? dans un d??lai de 2 heures maximum.<br>
<br>
Le service Retrait 2h en magasin est disponible uniquement pour les produits exp??di??s et livr??s par Do Sport et dans les magasins Do Sport hors magasins affili??s (voir liste en cliquant ici).<br>
<br>
En cas de commande multi-produits, le Client peut choisir la livraison en magasin telle que pr??vue ?? l???article 10.2 et le service Retrait 2h, ?? condition que le m??me magasin soit s??lectionn?? pour les deux modes de livraison.<br>
<br>
Le service Retrait 2h en magasin est gratuit.
<br>
Le Client re??oit un SMS, s???il a fourni son num??ro de t??l??phone, et/ou un email lorsque la commande est disponible en magasin, l???invitant ?? venir la r??ceptionner, en fournissant sa pi??ce d???identit?? ainsi que son nom ou son adresse ou le num??ro de commande ou son code de retrait.<br>
<br>
La commande pourra ??tre retir??e ?? l???int??rieur du magasin aupr??s d???une caisse identifi??e ?? Retrait des commandes ?? ou sur le parking du magasin si ce service est disponible dans le magasin s??lectionn??.<br>
<br>
Le Client dispose alors d???un d??lai de 7 jours pour r??cup??rer sa commande. Pass?? ce d??lai, la commande sera annul??e et rembours??e au Client.<br>
<br>
En cas de rupture de stock du produit dans le magasin s??lectionn??, le Client recevra un email l???informant de l???annulation totale de sa commande. Le Client ne sera pas d??bit?? du montant de sa commande, y compris lorsqu???il aura effectu?? une demande de paiement en 3 ou 4X fois sans frais. Il sera alors invit?? ?? v??rifier la disponibilit?? sur le site internet www.DoSport.fr et choisir un autre magasin de retrait ou ?? choisir un autre mode de livraison.<br>
<br>
Dans l???hypoth??se o?? seule une partie des produits command??s serait en rupture de stock dans le magasin choisi, le Client recevra un SMS et un email lui indiquant que la commande est partiellement disponible en magasin.<br>
<br>
Le Client ne sera alors d??bit?? que du montant des produits disponibles de sa commande. Pour les produits indisponibles, il sera alors invit?? v??rifier la disponibilit?? sur le site internet www.DoSport.fr et ?? choisir un autre magasin de retrait ou ?? choisir un autre mode de livraison.</p>



<h2 class=\"mt-5\">ARTICLE 11 - GARANTIE L??GALE</h2>
<p>Le consommateur dispose d'un d??lai de deux ans ?? compter de la d??livrance du bien pour obtenir la mise en ??uvre de la garantie l??gale de conformit?? en cas d'apparition d'un d??faut de conformit??. Durant ce d??lai, le consommateur n'est tenu d'??tablir que l'existence du d??faut de conformit?? et non la date d'apparition de celui-ci.<br>
<br>
Lorsque le contrat de vente du bien pr??voit la fourniture d'un contenu num??rique ou d'un service num??rique de mani??re continue pendant une dur??e sup??rieure ?? deux ans, la garantie l??gale est applicable ?? ce contenu num??rique ou ce service num??rique tout au long de la p??riode de fourniture pr??vue. Durant ce d??lai, le consommateur n'est tenu d'??tablir que l'existence du d??faut de conformit?? affectant le contenu num??rique ou le service num??rique et non la date d'apparition de celui-ci.<br>
<br>
La garantie l??gale de conformit?? emporte obligation pour le professionnel, le cas ??ch??ant, de fournir toutes les mises ?? jour n??cessaires au maintien de la conformit?? du bien.<br>
<br>
La garantie l??gale de conformit?? donne au consommateur droit ?? la r??paration ou au remplacement du bien dans un d??lai de trente jours suivant sa demande, sans frais et sans inconv??nient majeur pour lui.<br>
<br>
Si le bien est r??par?? dans le cadre de la garantie l??gale de conformit??, le consommateur b??n??ficie d'une extension de six mois de la garantie initiale.<br>
<br>
Si le consommateur demande la r??paration du bien, mais que le vendeur impose le remplacement, la garantie l??gale de conformit?? est renouvel??e pour une p??riode de deux ans ?? compter de la date de remplacement du bien.<br>
<br>
Le consommateur peut obtenir une r??duction du prix d'achat en conservant le bien ou mettre fin au contrat en se faisant rembourser int??gralement contre restitution du bien, si :<br>
<br>
1?? Le professionnel refuse de r??parer ou de remplacer le bien ;<br>
<br>
2?? La r??paration ou le remplacement du bien intervient apr??s un d??lai de trente jours ;<br>
<br>
3?? La r??paration ou le remplacement du bien occasionne un inconv??nient majeur pour le consommateur, notamment lorsque le consommateur supporte d??finitivement les frais de reprise ou d'enl??vement du bien non conforme, ou s'il supporte les frais d'installation du bien r??par?? ou de remplacement ;<br>
<br>
4?? La non-conformit?? du bien persiste en d??pit de la tentative de mise en conformit?? du vendeur rest??e infructueuse.<br>
<br>
Le consommateur a ??galement droit ?? une r??duction du prix du bien ou ?? la r??solution du contrat lorsque le d??faut de conformit?? est si grave qu'il justifie que la r??duction du prix ou la r??solution du contrat soit imm??diate. Le consommateur n'est alors pas tenu de demander la r??paration ou le remplacement du bien au pr??alable.<br>
<br>
Le consommateur n'a pas droit ?? la r??solution de la vente si le d??faut de conformit?? est mineur.<br>
<br>
Toute p??riode d'immobilisation du bien en vue de sa r??paration ou de son remplacement suspend la garantie qui restait ?? courir jusqu'?? la d??livrance du bien remis en ??tat.<br>
<br>
Les droits mentionn??s ci-dessus r??sultent de l'application des articles L. 217-1 ?? L. 217-32 du code de la consommation.<br>
<br>
Le vendeur qui fait obstacle de mauvaise foi ?? la mise en ??uvre de la garantie l??gale de conformit?? encourt une amende civile d'un montant maximal de 300 000 euros, qui peut ??tre port?? jusqu'?? 10 % du chiffre d'affaires moyen annuel (article L. 241-5 du code de la consommation).<br>
<br>
Le consommateur b??n??ficie ??galement de la garantie l??gale des vices cach??s en application des articles 1641 ?? 1649 du code civil, pendant une dur??e de deux ans ?? compter de la d??couverte du d??faut. Cette garantie donne droit ?? une r??duction de prix si le bien est conserv?? ou ?? un remboursement int??gral contre restitution du bien.<br>
<br>
Pour b??n??ficier de la garantie l??gale de conformit?? ou de la garantie des vices cach??s, le Client devra se rendre au choix dans le magasin Do Sport le plus proche pour la prise en charge de son produit ou dans un point Mondial Relay (service gratuit uniquement disponible pour les produits de moins de 30 kilos et dont le d??velopp?? -longueur + largeur + hauteur- ne doit pas exc??der 150 cm).</p>



<h2 class=\"mt-5\">ARTICLE 12 - CAS SP??CIFIQUE DES V??LOS</h2>
<p>Conform??ment ?? la loi d???orientation des mobilit??s du 24 d??cembre 2019 et son d??cret d???application n??2020-1439 du 23 novembre 2020, ?? compter du 1er juillet 2021, les v??los de plus 16 pouces vendus neufs par des professionnels disposeront d???un identifiant unique auquel seront associ??es les coordonn??es du propri??taire. Cette identification obligatoire des v??los permet d???associ?? un v??lo ?? son propri??taire.<br>
<br>
L???identifiant est transmis par un op??rateur agr??e et choisi par Do Sport, lequel transmettra directement toutes les informations relatives ?? l???identification du v??lo ?? l???acheteur.<br>
<br>
En cas de changement de propri??taire, les textes susvis??s pr??voient que l???acheteur doit en faire la d??claration aupr??s de l???op??rateur agr??e ayant transmis l???identifiant.<br>
<br>
En cas de retour du v??lo dans le cadre des articles 7, 8 et 11 des pr??sentes Conditions G??n??rales de Vente ou dans l???hypoth??se d???un colis qui n???aurait pas ??t?? livr?? ou retir??, le remboursement, le cas ??ch??ant, ne pourra intervenir qu????? compter de la d??claration faite aupr??s de l???op??rateur du retour du v??lo.</p>

ARTICLE 13 - DONN??ES PERSONNELLES
<p>Protection de vos donn??es ?? caract??re personnel<br>
<br>
Prenez connaissance de notre charte de protection des donn??es personnelles des clients en cliquant ici .<br>
<br>
Conform??ment ?? la loi informatique et Libert??s et ?? la r??glementation Europ??enne concernant la protection des donn??es ?? caract??re personnel, vous disposez d???un droit d???acc??s, de rectification, d???opposition et de suppression sur les donn??es ?? caract??re personnel vous concernant. Vous pouvez exercer ces droits sur simple demande, accompagn??e de la photocopie d???un justificatif d???identit?? ?? l???adresse suivante : dpo@DoSport.fr</p>



<h2 class=\"mt-5\">ARTICLE 14 - PROPRI??T?? INTELLECTUELLE</h2>
<p>L???ensemble du Site et chacun de ses ??l??ments rel??vent de la l??gislation sur la propri??t?? intellectuelle, notamment droits d???auteurs, dessins et mod??les, marques, noms de domaine, logiciels ou bases de donn??es??? (sans que cette liste ne soit exhaustive).<br>
<br>
A ce titre, tous les droits de reproduction, de repr??sentation et de communication publique sont r??serv??s y compris pour les documents t??l??chargeables et les repr??sentations visuelles, photographiques, audiovisuelles ou autres.<br>
<br>
Seul le droit de consulter le Site est conf??r?? aux Clients. La reproduction de tout ou partie du contenu est seulement autoris??e aux fins exclusives d???information pour un usage personnel et priv??.<br>
<br>
Tout lien mis en place en direction du Site doit faire l???objet d???une autorisation pr??alable et ??crite de la Soci??t??. La Soci??t?? d??cline toute responsabilit?? concernant le contenu de ces liens.<br>
<br>
En toute hypoth??se, les liens hypertextes renvoyant au Site devront ??tre retir??s ?? premi??re demande de la Soci??t??.</p>



<h2 class=\"mt-5\">ARTICLE 15 - RESPONSABILIT??</h2>
<p>La Soci??t?? ne pourra ??tre tenue responsable et aucune indemnit?? ne pourra lui ??tre demand??e au titre des retards de livraison ou cons??quences dommageables dus ?? des cas de force majeure tels que d??finis par la jurisprudence des cours et tribunaux fran??ais.<br>
<br>
La Soci??t?? ne pourra ??tre tenue responsable des interruptions, retards ou indisponibilit??s du Site dus ?? des travaux de maintenance, des interruptions du r??seau Internet, des pannes techniques, un cas de force majeure, le fait d???un tiers ou de toute circonstance quelle qu???elle soit.<br>
<br>
La Soci??t?? s???efforce d???assurer au mieux de ses possibilit??s, l???exactitude et la mise ?? jour des informations diffus??es sur le Site, dont elle se r??serve le droit de corriger, ?? tout moment et sans pr??avis, le contenu.<br>
<br>
Le Site contient des informations provenant de tierces personnes, la Soci??t?? ne donne donc aucune garantie quant ?? l???exactitude, la pr??cision ou l???exhaustivit?? des informations mises ?? disposition sur le Site. La responsabilit?? de la Soci??t?? ne pourra en aucun cas ??tre engag??e quant ?? d?????ventuelles erreurs ponctuelles pouvant survenir sur le site.</p>



<h2 class=\"mt-5\">ARTICLE 16 - SERVICE CLIENTS</h2>
<p>Pour toute information ou conseil, le Client peut contacter le Service Clients,<br>
<br>
Par t??l??phone du lundi au vendredi de 9h ?? 20h et le samedi de 9h ?? 19h :au 0970 83 05 05 (n?? non surtax??, prix d???un appel local)<br>
<br>
Par mail- pour les clients ayant r??alis?? un achat : sur l???espace Client dans la rubrique ?? Vos achats en ligne ?? Besoin d???aide. Les informations relatives ?? la commande sont ??galement disponible dans cet espace.<br>
<br>
- ou ?? l???adresse suivante : service.client@DoSport.fr<br>
<br>
Par courrier<br>
<br>
Service Clients Do Sport<br>
<br>
17 avenue de la falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Conform??ment ?? la loi Informatique et Libert??s et ?? la r??glementation Europ??enne concernant la protection des donn??es ?? caract??re personnel, toutes les conversations et coordonn??es clients sont supprim??es dans les quinze (15) jours suivant la cl??ture de la demande. De plus, les messages sont chiffr??s de bout en bout, c???est-??-dire que seul le Client et le Service Client peuvent avoir acc??s aux messages.<br>
<br>
Vous disposez d???un droit d???acc??s, de rectification, d???opposition et de suppression sur les donn??es ?? caract??re personnel vous concernant. Vous pouvez exercer ces droits sur simple demande accompagn??e de la photocopie d???un justificatif d???identit?? ou des donn??es permettant ?? Do Sport de vous identifier sans ??quivoque ?? l???adresse suivante : dpo@DoSport.fr<br>
<br>
Attention : afin d???optimiser le traitement de ses demandes, le Client doit indiquer dans son courrier ses nom, pr??nom, email avec lesquels sa commande a ??t?? effectu??e et le num??ro de la commande concern??e.</p>



<h2 class=\"mt-5\">ARTICLE 17 - LOI APPLICABLE</h2>
<p>Les pr??sentes Conditions G??n??rales de Vente sont soumises ?? la loi fran??aise.<br>
<br>
Tout litige n'ayant pas trouv?? une solution amiable sera soumis ?? la comp??tence exclusive des tribunaux fran??ais.</p>



<h2 class=\"mt-5\">ARTICLE 18 - M??DIATION DE LITIGES DE CONSOMMATION</h2>
<p>L???ordonnance du 20 ao??t 2015 et le d??cret n??2015-1382 du 30 octobre 2015 relatifs ?? la m??diation des litiges de la consommation et faisant application de la directive 2013/11/UE du Parlement europ??en du 21 mai 2013, relative au r??glement extrajudiciaire des litiges de consommation, donne la possibilit?? au consommateur de se r??f??rer ?? la m??diation afin de faciliter le r??glement ?? l???amabile des litiges avec un professionnel ?? l???occasion d???une vente pass??e depuis le site DoSport.com<br>
<br>
Ainsi, pour tout litige qui n???aurait pas ??t?? r??gl?? directement avec la Soci??t??, le Client est inform?? qu???il peut ?? pr??sent recourir gratuitement au service de m??diation mis en place par M??diation ??? Vivons mieux ensemble :<br>
<br>
- Adresse du site : www.mediation-vivons-mieux-ensemble.fr<br>
<br>
- Adresse du m??diateur : MEDIATION ??? VIVONS MIEUX ENSEMBLE 465 avenue de la Lib??ration 54 000 NANCY<br>
<br>
<br>
<br>
Plate-forme europ??enne de r??solution en ligne des litiges : https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home.show&lng=FR<br>
<br>
Avant de saisir le m??diateur de la consommation, le consommateur doit d??j?? avoir tent?? de r??soudre son litige directement aupr??s du professionnel par une r??clamation ??crite ou avoir fait une r??clamation selon les termes du contrat conclu avec le professionnel.</p>
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
<p>Les pr??sentes Conditions G??n??rales de Vente sont conclues entre la soci??t?? Do Sport France, SAS au capital de 41 509 983,00 ??? dont le si??ge social est situ?? 17 Avenue de la Falaise, 38360 Sassenage, immatricul??e au RCS de Grenoble sous le num??ro 428 560 031 (ci-apr??s d??nomm??e ?? la Soci??t?? ??) et toute personne physique effectuant un achat (ci-apr??s d??nomm??e ?? le Client ??) sur le site www.DoSport.com (ci-apr??s d??sign?? ?? le Site ??).<br>
<br>
Conform??ment aux dispositions du code de l???environnement, et en sa qualit?? de distributeur de produits g??n??rateurs de d??chets, la Soci??t?? est adh??rente ?? plusieurs fili??res de Responsabilit?? Elargie des Producteurs de d??chets (REP) et dispose ?? ce titre, d???un identifiant unique (IDU) pour chaque fili??re aupr??s de qui elle est rattach??e, ?? savoir :<br>
<br>
<br> 
<br>
IDU El??ments d???Ameublement (DEA) : FR006076_10WIDG<br>
<br>
IDU Textile, Linge de maison et Chaussures (TLC) : FR218603_11IBJU<br>
<br>
IDU D??chets d???Equipements Electriques et Electroniques (DEEE) : FR006076_05NNP3<br>
<br>
IDU Piles et Accumulateurs : FR002491_06F8EN<br>

IDU Emballages M??nagers & Papiers (CITEO) : FR219498_01WCRR<br>

IDU Articles de Sport et de Loisirs (ASL) : FR231727_13JCWL<br>
<br>
<br>
<br>
Toutes les commandes pass??es par l???interm??diaire du Site sont soumises sans r??serve aux pr??sentes Conditions G??n??rales de Vente.<br>
<br>
Les pr??sentes Conditions G??n??rales de Vente s???appliquent ?? l???exclusion de toutes autres conditions, notamment celles applicables aux ventes r??alis??es dans les magasins Do Sport.<br>
<br>
De m??me, il est pr??cis?? que les commandes effectu??es par le biais de la Marketplace ne sont pas soumises aux pr??sentes Conditions G??n??rales de Ventes (il convient de se r??f??rer aux Conditions G??n??rales de Vente de la Marketplace).<br>
<br>
Les pr??sentes Conditions G??n??rales de Vente repr??sentent l???int??gralit?? des engagements r??ciproques de la Soci??t?? et du Client qui les accepte express??ment.<br>
<br>
Les commandes ne peuvent ??tre pass??es que par des personnes physiques majeures r??sidant en France m??tropolitaine agissant ?? des fins non professionnelles et achetant pour leurs besoins personnels.</p>



<h2 class=\"mt-5\">ARTICLE 2 - PRODUITS COMMERCIALIS??S</h2>
<p>Le Client peut s??lectionner un ou plusieurs produits parmi les diff??rentes cat??gories propos??es sur le Site. Il est pr??cis?? que la Soci??t?? est susceptible de modifier ?? tout moment l???assortiment de produits propos??s sur le Site, sans pr??judice des commandes pass??es par le Client.<br>
<br>
Conform??ment aux dispositions du code de la consommation, le Client peut, pr??alablement ?? sa commande, prendre connaissance sur le Site des caract??ristiques essentielles du ou des produits qu???il d??sire commander sur la fiche produit correspondante.<br>
<br>
Les produits ??tant en constante ??volution, il est pr??cis?? que les fabricants peuvent modifier sans pr??avis la composition technique et les caract??ristiques des r??f??rences produits.<br>
<br>
L'offre de produits propos??e sur le Site peut ??tre diff??rente de celle propos??e dans les magasins physiques ?? enseigne Do Sport.</p>
<br>
<br>
<br>
<h2 class=\"mt-5\">ARTICLE 3 - DISPONIBILIT?? ET PRIX</h2>
<p>Les offres de produits et de prix sont valables tant qu???elles sont visibles sur le Site. En cas d???offres promotionnelles, les prix indiqu??s seront valables pendant la p??riode de l???offre, sur une s??lection de produits.<br>
<br>
Lors du traitement de sa commande, le Client sera inform?? dans les meilleurs d??lais par courrier ??lectronique en cas d???indisponibilit?? de produits command??s. Ces produits ne seront pas factur??s au Client.<br>
<br>
Les prix affich??s sur le Site sont, par d??faut, indiqu??s en euros et toutes taxes comprises et sont applicables en France m??tropolitaine.<br>
<br>
Les prix pratiqu??s sur le site sont ind??pendants des prix pratiqu??s dans les magasins Do Sport, sauf mention contraire, ils s???appliquent exclusivement sur les produits achet??s en ligne.<br>
<br>
La TVA est appliqu??e aux taux en vigueur au moment de la passation de la commande.<br>
<br>
La Soci??t?? se r??serve le droit de modifier ses prix ?? tout moment mais s???engage ?? appliquer les tarifs en vigueur lors de l???enregistrement de la commande du Client sous r??serve de la disponibilit?? des produits ?? cette date.<br>
<br>
Les produits demeurent la propri??t?? de la Soci??t?? jusqu???au complet paiement du prix par le Client. N??anmoins, les risques seront transf??r??s au Client ?? compter de la r??ception du(des) produit(s) par le Client.</p>



<h2 class=\"mt-5\">ARTICLE 4 - COMMANDE</h2>
<p>La disponibilit?? des produits ainsi que le d??lai de livraison sont affich??s sur le Site.<br>
<br>
Toute commande sur le Site suppose l???acceptation expresse et sans r??serve des pr??sentes Conditions G??n??rales de Vente, sans toutefois que cette acceptation soit conditionn??e par une signature manuscrite de la part du Client.<br>
<br>
Toute passation de commande n??cessite la cr??ation d???un compte client. Une fois le compte cr??e, le Client aura acc??s ?? son espace client. L???acc??s ?? cet espace client est conditionn?? ?? l???identification du Client ?? l???aide de son adresse mail indiqu??e lors de la cr??ation du compte ainsi que du mot de passe secret et personnel choisi. La Soci??t?? ne saurait ??tre tenue responsable de toute action r??alis??e sur l???espace client par un tiers auquel le Client aurait communiqu?? ses identifiants ou qui aurait eu acc??s au compte suite ?? une n??gligence du Client.<br>
<br>
Toutes les informations relatives ?? la commande seront consultables dans la rubrique ?? Le suivi de commande ?? de l???espace client.<br>
<br>
Le Client s???engage ?? ce que les informations communiqu??es lors de sa commande soient compl??tes, exactes et ?? jour. Dans le cas contraire, la Soci??t?? se r??serve le droit d???annuler purement et simplement la commande.<br>
<br>
La commande peut ??tre effectu??e pour une adresse de livraison distincte de l???adresse de facturation.<br>
<br>
Les commandes engagent le Client d??s qu???il confirme son paiement en cliquant sur ?? Valider ??.<br>
<br>
Suite ?? la r??ception de la commande, la Soci??t?? adressera au Client un email de confirmation de commande comprenant le r??capitulatif de la commande ainsi que son num??ro, puis validera d??finitivement la commande en adressant un email de validation de commande. Ces emails seront envoy??s ?? l???adresse mail renseign??e lors de la cr??ation du compte client.<br>

La Soci??t?? se r??serve le droit de refuser ou d???annuler une commande si elle estime que le Client se livre ?? de la distribution ou exerce une activit?? ??conomique gr??ce aux produits ainsi command??s ou pour tout autre motif.<br>
<br>
Cas de commande web pay??e en magasin :Les commandes web pay??es en magasin comprennent les commandes du client pass??es chez lui depuis son compte e-commerce et pay??es en caisse, les commandes du client pass??es dans le magasin depuis son compte e-commerce et pay??es en caisse et enfin les commandes du client pass??es dans le magasin depuis le compte e-commerce du magasin et pay??es en caisse.<br>
<br>
Une fois la commande pass??e, elle est en statut ?? en attente de paiement ??. Le client dispose alors de trois jours (du lundi au samedi) pour venir payer sa commande en magasin. Au-del?? de ce d??lai, la commande sera automatiquement annul??e.<br>
<br>
Une fois la commande pass??e, le client devra obligatoirement imprimer le code barre d??livr?? sur la page de confirmation de commande ou dans le mail de validation qui lui sera envoy??. Le num??ro du code barre accompagn?? du num??ro du bon de commande sont indispensable lors du paiement en caisse.<br>
<br>
Lorsque la commande est pay??e, le cycle de vie reste identique ?? celui des autres commandes pass??es en ligne.<br>
<br>
Le mode de paiement en caisse n???est pas disponible pour les clients souhaitant ??tre livr??s en Fedex Express ni pour les commandes de produit Market Place.<br>
<br>
Service d???e-r??servation :Le service d???e-r??servation propos?? sur le Site par la Soci??t?? permet au Client de r??server un produit en magasin de son choix, sous r??serve de la disponibilit?? du produit choisi dans le magasin en question.<br>
<br>
Les modalit??s de fonctionnement de ce service sont accessibles au Client d??s lors qu???il utilise le Service d???e-r??servation.<br>
<br>
Avis fiche produits : Do Sport propose ?? ses clients par l???interm??diaire de son partenaire ?? Avis V??rifi??s ?? la possibilit?? de laisser un avis ?? l???issu de son exp??rience sur le site DoSport.com. Vingt (20) jours apr??s avoir pass?? sa commande sur le site marchand, le Client re??oit un email de demande d???avis. Le Client a alors la possibilit?? de laisser un avis sur son exp??rience achat.<br>
<br>
Le service Client de Do Sport dispose de 14 jours pour prendre connaissance de l???avis et v??rifier qu???il respecte les crit??res de mod??ration mis en place par Avis V??rifi??s eu ??gard aux r??glementations en vigueur applicable (non discriminatoire, non injurieux etc.).<br>
<br>
A expiration de ce d??lai, l???avis sera publi?? sur le site marchand. Un e-mail sera adress?? au Client en cas de refus de publication de l???avis laiss?? ne respectant les r??glementations en vigueur applicables.</p>



<h2 class=\"mt-5\">ARTICLE 5 - MODIFICATION DE LA COMMANDE</h2>
<p>Toute demande de modification de la commande effectu??e ne peut ??tre prise en compte par la Soci??t?? que si elle a ??t?? formul??e aupr??s du Service Clients et si la commande n???a pas encore eu un contr??le Adyen NV positif. (voir modalit??s de contact ?? l???Article 15 ci-apr??s). Une fois la commande contr??l??e par Adyen NV il n???est plus possible de modifier/annuler la commande.<br>
<br>
Dans un souci de rapidit??, il est recommand?? au Client de contacter le Service Clients par t??l??phone au num??ro indiqu?? ?? l???article 15.<br>
<br>
Les commandes web pay??es en magasin ne sont pas soumises au contr??le Adyen NV et ne sont pas susceptibles de modification/annulation.</p>



<h2 class=\"mt-5\">ARTICLE 6 - R??CLAMATIONS</h2>
<p>Toute r??clamation relative ?? la r??ception de la commande (produit re??u abim??, pi??ce manquante, ???) doit ??tre effectu??e aupr??s du Service Clients (voir modalit??s de contact ?? l???Article 15 ci-apr??s) avant la fin du d??lai de r??tractation, de quinze (15) jours suivant la r??ception de la commande pour les clients non adh??rents au CLUB Do Sport et de trente (30) jours pour les clients adh??rents.<br>
<br>
Pass?? ce d??lai, les r??clamations ne pourront ??tre prises en compte par la Soci??t?? sauf celles relatives aux garanties telles que d??finies ?? l???Article 11 ci-apr??s.</p>



<h2 class=\"mt-5\">ARTICLE 7 - DROIT DE R??TRACTATION</h2>
<p>Le Client dispose d???un d??lai de quinze (15) jours francs ?? compter de la r??ception de sa commande pour notifier ?? la Soci??t?? son intention de retourner tout produit ne lui convenant pas.<br>
<br>
Pour le Client adh??rent au Club Do Sport , le d??lai de r??tractation est port?? ?? trente (30) jours francs.<br>
<br>
Lorsque le d??lai de r??tractation expire un samedi, un dimanche ou un jour f??ri?? ou ch??m??, il est prorog?? jusqu???au premier jour ouvrable suivant.<br>
<br>
Le Client devra notifier ?? la Soci??t?? sa volont?? de se r??tracter au moyen d???une d??claration d??nu??e d???ambig??it??. Pour ce faire, le Client pourra utiliser le mod??le de formulaire de r??tractation disponible en annexe des pr??sentes Conditions G??n??rales de Vente.<br>
<br>
Le Client pourra manifester sa volont?? de se r??tracter :<br>

- En se rendant dans l'un des magasins de la Soci??t?? https://www.DoSport.com/magasins/ muni de sa facture d???achat et du produit qu???il souhaite retourner, un r??c??piss?? de sa r??tractation lui sera alors remis ;<br>
<br>
- En contactant le Service Clients de la Soci??t?? :<br>
<br>
Soit par mail ?? l'adresse suivante :<br>
<br>
-service.client@DoSport.fr<br>
<br>
via le formulaire de contact relatif au droit de r??tractation en se rendant sur le Service Client en ligne (voir modalit??s de contact ?? l???Article 15 ci-apr??s) dans la rubrique ?? Besoin d???Aide ?? de l???espace client en cliquant sur la question ?? je ne veux plus de mon article, je souhaite me r??tracter ??.<br>
<br>
Les conditions de retour sont accessibles via ce lien???<br>
<br>
Soit par courrier ?? l???adresse suivante :<br>
<br>
Service Clients Do Sport<br>
<br>
17 avenue de la falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Soit par t??l??phone : du lundi au vendredi de 9h ?? 20h et le samedi de 9h ?? 19h au 0970 83 05 05 (co??t d'un appel local).<br>
<br>
S???il se r??tracte en contactant le Service Clients, le Client devra alors indiquer ses coordonn??es et les r??f??rences de sa commande.<br>
<br>
Le Service Clients accusera r??ception de la demande du Client et l???informera des modalit??s de retour du/des produit(s).<br>
<br>
Le Client disposera d???un d??lai de 30 jours suite ?? sa notification de r??tractation pour retourner son ou ses produit(s).<br>
<br>
Soit via son espace client sur le site www.DoSport.com :<br>
<br>
Conditions de retour d???un article par voie postale pour un ?? petit produit ?? ou via un transporteur pour un produit de plus de 30 kg et/ou volumineux (frais de retour ?? votre charge.<br>
<br>
En se connectant ?? son espace client, le client devra s??lectionner la commande concern??e dans la rubrique ?? Mes commandes ?? puis ?? Mes achats ?? et cliquer sur ?? Retourner mon produit ??. Le Client devra ensuite indiquer le ou les produit(s) qu???il d??sire retourner et s??lectionner le motif du retour avant d???envoyer sa demande.<br>
<br>
La Soci??t?? n???accepte pas les colis adress??s en port d?? ou en contre remboursement.<br>
<br>
Le Client est responsable du mode d???emballage choisi pour le retour de son/ses produit(s).<br>
<br>
Le retour d'un colis doit ??tre soigneusement pr??par?? selon les indications mentionn??es dans la FAQ Do Sport, disponible ?? l???adresse : clients.DoSport.com/Simple/Faq.aspx<br>
<br>
Produits exclus du droit de r??tractation :Conform??ment aux dispositions de l???article L221-28 du Code de la Consommation, le droit de r??tractation ne peut ??tre exerc?? pour les biens confectionn??s selon les sp??cifications du Client ou nettement personnalis??s.<br>
<br>
De plus, pour des raisons d???hygi??ne et parce qu???ils ne pourront ??tre re-commercialis??s, les produits suivants ne peuvent faire l???objet d???un droit de r??tractation d??s lors leur emballage a ??t?? descell?? : prot??ge-dents, bouchons d???oreilles couches pour b??b?? ou tout autre article requ??rant des pr??cautions d???hygi??ne particuli??res.<br>
<br>
Pour les m??mes raisons, les sous-v??tements, coquilles de protection, articles de sudation et maillots de bain sans protection hygi??nique, s???ils ont d??j?? ??t?? utilis??s et/ou port??s en dehors d???un essai non abusif ne pourront faire l???objet d???une r??tractation.<br>
<br>
Seuls les produits retourn??s complets, munis de leurs ??tiquettes, notices, garanties, cordons et autres accessoires en parfait ??tat et dans leur emballage d???origine en ??tat d?????tre commercialis??s seront accept??s.<br>
<br>
Frais de renvoi :En cas d???exercice du droit de r??tractation, les frais de renvoi du/des produit(s) sont ?? la charge du Client.<br>
<br>
La Soci??t?? n???accepte pas les colis adress??s en port d?? ou en contre remboursement.<br>
<br>
Pour les produits ne pouvant ??tre retourn??s par la Poste en raison de leur nature et/ou de leur taille, conform??ment ?? la r??glementation en vigueur, une estimation des frais de retour, aupr??s d???un transporteur, est communiqu??e ci-dessous au Client ?? titre indicatif. Les frais de retour sont ?? la charge du Client.<br>
<br>
Le montant des frais de retour est calcul?? en fonction de la typologie de produit et de la distance ?? parcourir par le transporteur pour r??cup??rer le produit et le ramener en entrep??t.
<br>
- Appareil de musculation : entre 65 ??? et 140 ???<br>
<br>
- V??lo : entre 50 ??? et 70 ???<br>
<br>
Attention, cette estimation de prix n???engage pas la Soci??t??. Le prix ?? payer pour le renvoi du produit sera fonction du transporteur choisi.<br>
<br>
Remboursement suite ?? la r??tractation :Conform??ment au code de la consommation, la Soci??t?? est tenue de rembourser la totalit?? des sommes vers??es, frais de port (aller) inclus (au tarif standard). Le remboursement sera effectu?? lors de la r??ception du/des produit(s) retourn??(s). La Soci??t?? proc??dera au remboursement selon le moyen de paiement utilis?? pour la commande ou sous toute autre forme apr??s accord expr??s du Client.</p>



<h2 class=\"mt-5\">ARTICLE 8 - RETOUR</h2>
<p>En dehors du droit de r??tractation, le produit pourra ??tre retourn?? en cas de non-conformit?? ?? la commande (erreur de r??f??rence ou produit abim??) ou de d??fectuosit?? (cf Article 11 - Garantie).<br>
<br>
En cas de r??ception d???une r??f??rence diff??rente de celle command??e ou d???un produit abim??, le Client est invit?? soit :<br>
<br>
- ?? se rendre dans l'un des magasins de la Soci??t?? (https://www.DoSport.com/magasins/) muni de sa facture d???achat et du produit ?? retourner.<br>
<br>
Dans ce cas, la Soci??t?? examinera le produit et si celui-ci est non-conforme, elle proposera alors au Client de le rembourser de sa commande et des frais de port associ??s sous forme d???avoir (seulement si le montant de la commande et des frais de port est sup??rieure ?? 5 ???) soit sous forme d???esp??ces, le Client ??tant libre de choisir.<br>
<br>
- ?? contacter le Service Clients de la Soci??t?? en se rendant sur le Service Client en ligne (voir modalit??s de contact ?? l???Article 15 ci-apr??s) dans la rubrique ?? Besoin d???Aide ?? de l???espace client ou par t??l??phone : du lundi au vendredi de 9h ?? 20h et le samedi de 9h ?? 19h au 0970 83 05 05 (co??t d'un appel local).<br>
<br>
Dans ce cas, le produit non conforme ou ab??m?? devra ??tre retourn?? ?? la Soci??t?? et celle-ci proposera de lui rembourser l???int??gralit?? du montant de la commande (prix du produit + frais de livraison ??ventuellement pay??s) selon le m??me mode de r??glement que celui utilis?? lors de la commande d??s r??ception du produit s???av??rant non-conforme ou ab??m??.<br>
<br>
Les frais de retour seront alors rembours??s sur la base des tarifs appliqu??s par les services postaux pour les envois en colissimo suivi.<br>
<br>
En cas de d??fectuosit?? du produit command??, le Client b??n??ficiera des garanties l??gales et devra se rendre dans le magasin Do Sport le plus proche pour la prise en charge de son produit soit dans un point Mondial Relay (service gratuit uniquement disponible pour les petits produits (moins de 30 kilos)) conform??ment ?? l???article 11 ??? Garantie des pr??sentes Conditions G??n??rales de Vente.<br>
<br>
Plus de pr??cision sur la proc??dure via Mondial Relay, via le lien ci-apr??s Conditions de retour</p>



<h2 class=\"mt-5\">ARTICLE 9 - PAIEMENT DU PRIX</h2>
<p>Le paiement est r??alis?? en ligne lors de la passation de la commande.<br>
<br>
Le paiement sera encaiss?? par la Soci??t?? juste avant la transmission de la commande au service charg?? de sa pr??paration.<br>
<br>
Modalit??s de paiement :<br>
<br>
Les modalit??s de paiement suivantes sont propos??es au Client :<br>
<br>
Carte bancaire : les cartes bancaires accept??es sur le site sont Carte Bleue, Visa et MasterCard. Ces cartes de paiement doivent ??tre d??livr??es par un ??tablissement bancaire ou financier situ?? dans l???Union Europ??enne.<br>
<br>
Bons d???achat ?? e-commerce ?? : il est possible d???utiliser les bons d???achat d??livr??s par le Service Clients dans le cadre d???un achat sur le Site pour le paiement de toute ou partie de la commande. Ces bons d???achat ne sont utilisables qu???une seule fois.<br>
<br>
Paiement en magasin : il est possible de payer la commande en magasin Do Sport dans un d??lai de 72h apr??s la prise en compte de cette derni??re en statut ?? en attente de paiement ??, muni d???une pi??ce d???identit??.<br>
<br>
Les modes de paiement accept??s sont les suivants : carte bleue, ch??que bancaire, esp??ces, American Express, Avoir, bon d???achat, carte cadeau Do Sport et ch??que cadeau.<br>
<br>
Paiement en 3 ou 4 X :<br>
<br>
Le service de ?? paiement en 3 ou 4 X ?? permet ?? certains internautes clients du site DoSport.com de payer leurs achats en trois ou quatre fois (trois ou quatre mensualit??s) avec leur carte bancaire.<br>
<br>
Le service de ?? paiement en 3 ou 4 X ?? est une op??ration de paiement ??chelonn?? qui n???est pas soumise aux dispositions de l???article L.311-1 et suivants du Code de la Consommation notamment en raison de sa dur??e et des frais n??gligeables qui y sont associ??s.<br>
<br>
Le pr??sent service est r??serv?? aux particuliers, personnes physiques majeures, r??sidant fiscalement en France M??tropolitaine et utilisant une carte bancaire Visa ou MasterCard, pour le paiement de leur commande sur le site marchand. La dur??e de validit?? de la care utilis??e doit ??tre post??rieure ?? la date de la derni??re ??ch??ance du ?? paiement en 3 ou 4 X ??.<br>
<br>
Les cartes ?? autorisation syst??matique de type Electron ou Maestro, les e-cards, les cartes Indigo et American Express ne sont pas accept??es.<br>
<br>
<br>
<br>
S??curisation des paiements<br>
<br>
Les paiements effectu??s sur le Site sont enti??rement s??curis??s.<br>
<br>
Gr??ce aux caract??ristiques techniques du logiciel de chiffrement utilis?? sur le Site, les coordonn??es bancaires (n?? de la carte bancaire et date d???expiration) communiqu??es par le Client ne peuvent pas ??tre intercept??es par des tiers. En communiquant ses coordonn??es bancaires, le Client accepte par avance et sans condition que la Soci??t?? proc??de ?? la transaction s??curis??e. Le Client autorise donc par avance sa banque ?? d??biter son compte ?? la vue des relev??s transmis par la Soci??t??, m??me en l???absence de factures sign??es de la main du titulaire de la carte. L???autorisation de d??bit du compte Client est toujours donn??e pour le montant du produit achet?? tel que factur?? par la Soci??t??.<br>
<br>
Le Client est en droit de sauvegarder les informations relatives ?? sa carte de paiement, sous r??serve de son consentement explicite.<br>
<br>
Contr??les anti FraudesLa Soci??t??, en collaboration avec Adyen NV, contr??le toutes les commandes qui ont ??t?? valid??es sur le Site ?? l???exception des commandes web pay??es en magasin. Dans le cadre de ces proc??dures, la Soci??t?? pourra ??tre amen??e ?? demander au Client toutes les pi??ces n??cessaires au d??blocage de sa commande.<br>
<br>
Les informations en rapport avec sa commande font l'objet d'un traitement automatis?? de donn??es. Ce traitement automatis?? de donn??es a pour finalit?? de d??finir un niveau d'analyse d'une transaction et de lutter contre la fraude ?? la carte bancaire.<br>
<br>
La non-transmission des donn??es en rapport avec sa commande emp??che la r??alisation et l'analyse de la transaction.<br>
<br>
La survenance d'un impay?? au motif d'une utilisation frauduleuse d'une carte bancaire entra??nera l'inscription des coordonn??es en rapport avec la commande associ??e ?? cet impay?? au sein d'un fichier incident de paiement mis en ??uvre par la Soci??t??. Une d??claration irr??guli??re ou une anomalie pourra ??galement faire l'objet d'un traitement sp??cifique.<br>
<br>
Conform??ment ?? la loi Informatique et Libert??s et ?? la r??glementation Europ??enne concernant la protection des donn??es ?? caract??re personnel , vous disposez d???un droit d???acc??s, de rectification, d???opposition et de suppression sur les donn??es ?? caract??re personnel vous concernant. Vous pouvez exercer ces droits sur simple demande accompagn??e de la photocopie d???un justificatif d???identit?? ?? l???adresse e-mail suivante dpo@DoSport.fr ou l???adresse suivante postale suivante :<br>
<br>
GROUPE Do Sport<br>
<br>
DPO<br>
<br>
17 Avenue de la Falaise<br>
<br>
38360 SASSENAGE<br>
<br>
R??ductions applicablesIl est pr??cis?? que les r??ductions offertes aux salari??s de la soci??t?? Groupe Do Sport et toute autre soci??t?? affili??e et les r??ductions partenaires ne sont pas valables pour les achats r??alis??s sur le site.<br>
<br>
Cumul d?????? fid??lit??Les Clients ayant une carte de fid??lit?? Club Do Sport pourront utiliser leur bons fid??lit??s en magasin ou sur le site www.DoSport.com avec pr??sentation de la carte de fid??lit?? (ou connexion ?? l???espace fid??lit?? sur le site www.DoSport.com ).<br>
<br>
Les bons de fid??lit?? sont disponibles ?? partir de 5 euros, valables par tranche de 5??? jusqu????? 20??? et par tranche de 10???jusqu????? 100??? sans minimum d???achat dans l???ensemble des magasins Do Sport situ??s en France m??tropolitaine et sur le site Do Sport. Ils sont valables sur tous les articles, y compris les articles en soldes et en promotions. Hors coin des affaires, achat de carte cadeaux, prestations et frais de livraison.<br>
<br>
Offre strictement personnelle, valable une seule fois, non ??changeable, non remboursable et non fractionnable. En cas d???oubli de la carte, les points peuvent ??tre cr??dit??s par l???h??tesse de caisse sur pr??sentation du ticket de caisse. L???adh??rent dispose d???un espace personnel en ligne, rubrique ?? Mon espace fid??lit?? ?? sur https://DoSport.com/eto/fidelity/index/ qui lui permet de consulter le montant de sa cagnotte fid??lit??, de commander sa carte physique, de modifier ou compl??ter ses informations personnelles et de retrouver l???historique de ses achats.</p>



<h2 class=\"mt-5\">ARTICLE 10 - LIVRAISONS</h2>
<p>Do Sport propose ?? ces Clients trois modes de livraison :<br>

- La livraison ?? domicile ou en relais colis<br>
<br>
- La livraison en magasin<br>
<br>
- Le retrait en magasin<br>
<br>
<br>
<br>
En cas de commande multi-produits, le Client peut choisir un mode de livraison diff??rent par produits selon la disponibilit?? de services propos??s par Do Sport pour ces produits.<br>
<br>
10.1. La livraison ?? domicile ou en relais colis : Les d??lais annonc??s sur le Site sont calcul??s en jours ouvr??s (sous r??serve de validation de la commande par Adyen NV). La date de livraison est calcul??e en tenant compte du d??lai d???exp??dition de la commande auquel est ajout?? le d??lai de livraison du transporteur (DPD La Poste / Mondial Relay/ Fedex / Transporteur).<br>
<br>
Le d??lai de livraison court ?? partir du d??part du colis des entrep??ts de la Soci??t?? ; il s'ajoute donc au d??lai d'exp??dition de la commande. Le Client est inform?? par mail d??s l???exp??dition de sa commande.<br>
<br>
Le d??lai de livraison d??pend du mode de livraison choisi au passage de la commande.<br>
<br>
En cas de d??passement du d??lai indiqu??, le Client sera inform?? par mail et il lui sera propos?? une annulation de sa commande.<br>
<br>
Les produits sont livr??s ?? l???adresse de livraison indiqu??e lors de la commande ou au relais colis indiqu??. Les livraisons s???effectuent uniquement en France m??tropolitaine et en Corse.<br>
<br>
En cas de rupture de stock exceptionnelle, le Client sera averti par mail ou t??l??phone. La Soci??t?? proposera au Client soit de retarder la livraison de l???int??gralit?? de sa commande ?? la date de r??approvisionnement du produit concern??, soit d???accepter une livraison partielle, soit une annulation de sa commande.<br>
<br>
10.2. La livraison en magasin Do Sport propose un service de livraison gratuite en magasin permettant aux Clients de commander depuis le Site et de b??n??ficier d???une livraison gratuite en magasin.<br>
<br>
Les produits command??s pourront ??tre pay??s depuis le Site ou directement en magasin selon les modalit??s pr??cis??es ?? l???article 4 ci-avant.<br>
<br>
La livraison en magasin est effectu??e sous 10 jours ouvr??s maximum apr??s la validation de la commande en ligne. La date de livraison varie en fonction du magasin choisi.<br>
<br>
La livraison est disponible uniquement pour les produits exp??di??s et livr??s par Do Sport et dans les magasins Do Sport hors magasins affili??s (voir liste en cliquant ici).
<br>
A tout moment le Client peut suivre sa commande sur son espace client.<br>
<br>
Le Client re??oit un SMS, s???il a fourni son num??ro de t??l??phone, et/ou un email lorsque la commande est disponible en magasin, l???invitant ?? venir la r??ceptionner, en fournissant sa pi??ce d???identit?? ainsi que son nom ou son adresse ou le num??ro de commande.<br>
<br>
La commande pourra ??tre retir??e ?? l???int??rieur du magasin aupr??s d???une caisse identifi??e ?? Retrait des commandes ?? ou sur le parking du magasin si ce service est disponible dans le magasin s??lectionn??.<br>
<br>
Le Client dispose alors d???un d??lai de 7 jours ouvr??s pour r??cup??rer sa commande. Pass?? ce d??lai, la commande sera annul??e et rembours??e au Client.<br>
<br>
En cas de rupture de stock exceptionnelle, le Client sera averti par mail.<br>
<br>
La Soci??t?? proposera au Client :<br>
<br>
- soit de retarder la livraison de l???int??gralit?? de sa commande ?? la date de r??approvisionnement du produit concern??,<br>
<br>
- soit d???accepter une livraison partielle, dans cette hypoth??se le Client sera d??bit?? des seuls produits disponibles en cas de paiement effectu?? depuis le Site ou d???un un remboursement du prix d???achat du (des) produit(s) non livr??(s) en cas de paiement en magasin,<br>
<br>
- soit une annulation et un remboursement de l???int??gralit?? de sa commande.<br>
<br>
10.3. Le Service ?? Retrait 2h en magasin ??Le Client peut b??n??ficier du service ?? Retrait 2h en magasin ?? pour certains produits command??s et pay??s depuis le Site. La fiche de ces produits, mentionne la possibilit?? de b??n??ficier de ce service. Le Client peut ??galement choisir le Retrait 2h en magasin lors du choix du mode de livraison avant validation de la commande s???il est disponible pour les produits s??lectionn??s. Dans les deux cas, le Client doit renseigner sa location et v??rifier la disponibilit?? de ce service. A d??faut, le Client peut choisir la livraison en magasin.<br>
<br>
Si le client choisit le service Retrait 2h en magasin, le commande sera pr??par??e par le magasin s??lectionn?? dans un d??lai de 2 heures maximum.<br>
<br>
Le service Retrait 2h en magasin est disponible uniquement pour les produits exp??di??s et livr??s par Do Sport et dans les magasins Do Sport hors magasins affili??s (voir liste en cliquant ici).<br>
<br>
En cas de commande multi-produits, le Client peut choisir la livraison en magasin telle que pr??vue ?? l???article 10.2 et le service Retrait 2h, ?? condition que le m??me magasin soit s??lectionn?? pour les deux modes de livraison.<br>
<br>
Le service Retrait 2h en magasin est gratuit.
<br>
Le Client re??oit un SMS, s???il a fourni son num??ro de t??l??phone, et/ou un email lorsque la commande est disponible en magasin, l???invitant ?? venir la r??ceptionner, en fournissant sa pi??ce d???identit?? ainsi que son nom ou son adresse ou le num??ro de commande ou son code de retrait.<br>
<br>
La commande pourra ??tre retir??e ?? l???int??rieur du magasin aupr??s d???une caisse identifi??e ?? Retrait des commandes ?? ou sur le parking du magasin si ce service est disponible dans le magasin s??lectionn??.<br>
<br>
Le Client dispose alors d???un d??lai de 7 jours pour r??cup??rer sa commande. Pass?? ce d??lai, la commande sera annul??e et rembours??e au Client.<br>
<br>
En cas de rupture de stock du produit dans le magasin s??lectionn??, le Client recevra un email l???informant de l???annulation totale de sa commande. Le Client ne sera pas d??bit?? du montant de sa commande, y compris lorsqu???il aura effectu?? une demande de paiement en 3 ou 4X fois sans frais. Il sera alors invit?? ?? v??rifier la disponibilit?? sur le site internet www.DoSport.fr et choisir un autre magasin de retrait ou ?? choisir un autre mode de livraison.<br>
<br>
Dans l???hypoth??se o?? seule une partie des produits command??s serait en rupture de stock dans le magasin choisi, le Client recevra un SMS et un email lui indiquant que la commande est partiellement disponible en magasin.<br>
<br>
Le Client ne sera alors d??bit?? que du montant des produits disponibles de sa commande. Pour les produits indisponibles, il sera alors invit?? v??rifier la disponibilit?? sur le site internet www.DoSport.fr et ?? choisir un autre magasin de retrait ou ?? choisir un autre mode de livraison.</p>



<h2 class=\"mt-5\">ARTICLE 11 - GARANTIE L??GALE</h2>
<p>Le consommateur dispose d'un d??lai de deux ans ?? compter de la d??livrance du bien pour obtenir la mise en ??uvre de la garantie l??gale de conformit?? en cas d'apparition d'un d??faut de conformit??. Durant ce d??lai, le consommateur n'est tenu d'??tablir que l'existence du d??faut de conformit?? et non la date d'apparition de celui-ci.<br>
<br>
Lorsque le contrat de vente du bien pr??voit la fourniture d'un contenu num??rique ou d'un service num??rique de mani??re continue pendant une dur??e sup??rieure ?? deux ans, la garantie l??gale est applicable ?? ce contenu num??rique ou ce service num??rique tout au long de la p??riode de fourniture pr??vue. Durant ce d??lai, le consommateur n'est tenu d'??tablir que l'existence du d??faut de conformit?? affectant le contenu num??rique ou le service num??rique et non la date d'apparition de celui-ci.<br>
<br>
La garantie l??gale de conformit?? emporte obligation pour le professionnel, le cas ??ch??ant, de fournir toutes les mises ?? jour n??cessaires au maintien de la conformit?? du bien.<br>
<br>
La garantie l??gale de conformit?? donne au consommateur droit ?? la r??paration ou au remplacement du bien dans un d??lai de trente jours suivant sa demande, sans frais et sans inconv??nient majeur pour lui.<br>
<br>
Si le bien est r??par?? dans le cadre de la garantie l??gale de conformit??, le consommateur b??n??ficie d'une extension de six mois de la garantie initiale.<br>
<br>
Si le consommateur demande la r??paration du bien, mais que le vendeur impose le remplacement, la garantie l??gale de conformit?? est renouvel??e pour une p??riode de deux ans ?? compter de la date de remplacement du bien.<br>
<br>
Le consommateur peut obtenir une r??duction du prix d'achat en conservant le bien ou mettre fin au contrat en se faisant rembourser int??gralement contre restitution du bien, si :<br>
<br>
1?? Le professionnel refuse de r??parer ou de remplacer le bien ;<br>
<br>
2?? La r??paration ou le remplacement du bien intervient apr??s un d??lai de trente jours ;<br>
<br>
3?? La r??paration ou le remplacement du bien occasionne un inconv??nient majeur pour le consommateur, notamment lorsque le consommateur supporte d??finitivement les frais de reprise ou d'enl??vement du bien non conforme, ou s'il supporte les frais d'installation du bien r??par?? ou de remplacement ;<br>
<br>
4?? La non-conformit?? du bien persiste en d??pit de la tentative de mise en conformit?? du vendeur rest??e infructueuse.<br>
<br>
Le consommateur a ??galement droit ?? une r??duction du prix du bien ou ?? la r??solution du contrat lorsque le d??faut de conformit?? est si grave qu'il justifie que la r??duction du prix ou la r??solution du contrat soit imm??diate. Le consommateur n'est alors pas tenu de demander la r??paration ou le remplacement du bien au pr??alable.<br>
<br>
Le consommateur n'a pas droit ?? la r??solution de la vente si le d??faut de conformit?? est mineur.<br>
<br>
Toute p??riode d'immobilisation du bien en vue de sa r??paration ou de son remplacement suspend la garantie qui restait ?? courir jusqu'?? la d??livrance du bien remis en ??tat.<br>
<br>
Les droits mentionn??s ci-dessus r??sultent de l'application des articles L. 217-1 ?? L. 217-32 du code de la consommation.<br>
<br>
Le vendeur qui fait obstacle de mauvaise foi ?? la mise en ??uvre de la garantie l??gale de conformit?? encourt une amende civile d'un montant maximal de 300 000 euros, qui peut ??tre port?? jusqu'?? 10 % du chiffre d'affaires moyen annuel (article L. 241-5 du code de la consommation).<br>
<br>
Le consommateur b??n??ficie ??galement de la garantie l??gale des vices cach??s en application des articles 1641 ?? 1649 du code civil, pendant une dur??e de deux ans ?? compter de la d??couverte du d??faut. Cette garantie donne droit ?? une r??duction de prix si le bien est conserv?? ou ?? un remboursement int??gral contre restitution du bien.<br>
<br>
Pour b??n??ficier de la garantie l??gale de conformit?? ou de la garantie des vices cach??s, le Client devra se rendre au choix dans le magasin Do Sport le plus proche pour la prise en charge de son produit ou dans un point Mondial Relay (service gratuit uniquement disponible pour les produits de moins de 30 kilos et dont le d??velopp?? -longueur + largeur + hauteur- ne doit pas exc??der 150 cm).</p>



<h2 class=\"mt-5\">ARTICLE 12 - CAS SP??CIFIQUE DES V??LOS</h2>
<p>Conform??ment ?? la loi d???orientation des mobilit??s du 24 d??cembre 2019 et son d??cret d???application n??2020-1439 du 23 novembre 2020, ?? compter du 1er juillet 2021, les v??los de plus 16 pouces vendus neufs par des professionnels disposeront d???un identifiant unique auquel seront associ??es les coordonn??es du propri??taire. Cette identification obligatoire des v??los permet d???associ?? un v??lo ?? son propri??taire.<br>
<br>
L???identifiant est transmis par un op??rateur agr??e et choisi par Do Sport, lequel transmettra directement toutes les informations relatives ?? l???identification du v??lo ?? l???acheteur.<br>
<br>
En cas de changement de propri??taire, les textes susvis??s pr??voient que l???acheteur doit en faire la d??claration aupr??s de l???op??rateur agr??e ayant transmis l???identifiant.<br>
<br>
En cas de retour du v??lo dans le cadre des articles 7, 8 et 11 des pr??sentes Conditions G??n??rales de Vente ou dans l???hypoth??se d???un colis qui n???aurait pas ??t?? livr?? ou retir??, le remboursement, le cas ??ch??ant, ne pourra intervenir qu????? compter de la d??claration faite aupr??s de l???op??rateur du retour du v??lo.</p>

ARTICLE 13 - DONN??ES PERSONNELLES
<p>Protection de vos donn??es ?? caract??re personnel<br>
<br>
Prenez connaissance de notre charte de protection des donn??es personnelles des clients en cliquant ici .<br>
<br>
Conform??ment ?? la loi informatique et Libert??s et ?? la r??glementation Europ??enne concernant la protection des donn??es ?? caract??re personnel, vous disposez d???un droit d???acc??s, de rectification, d???opposition et de suppression sur les donn??es ?? caract??re personnel vous concernant. Vous pouvez exercer ces droits sur simple demande, accompagn??e de la photocopie d???un justificatif d???identit?? ?? l???adresse suivante : dpo@DoSport.fr</p>



<h2 class=\"mt-5\">ARTICLE 14 - PROPRI??T?? INTELLECTUELLE</h2>
<p>L???ensemble du Site et chacun de ses ??l??ments rel??vent de la l??gislation sur la propri??t?? intellectuelle, notamment droits d???auteurs, dessins et mod??les, marques, noms de domaine, logiciels ou bases de donn??es??? (sans que cette liste ne soit exhaustive).<br>
<br>
A ce titre, tous les droits de reproduction, de repr??sentation et de communication publique sont r??serv??s y compris pour les documents t??l??chargeables et les repr??sentations visuelles, photographiques, audiovisuelles ou autres.<br>
<br>
Seul le droit de consulter le Site est conf??r?? aux Clients. La reproduction de tout ou partie du contenu est seulement autoris??e aux fins exclusives d???information pour un usage personnel et priv??.<br>
<br>
Tout lien mis en place en direction du Site doit faire l???objet d???une autorisation pr??alable et ??crite de la Soci??t??. La Soci??t?? d??cline toute responsabilit?? concernant le contenu de ces liens.<br>
<br>
En toute hypoth??se, les liens hypertextes renvoyant au Site devront ??tre retir??s ?? premi??re demande de la Soci??t??.</p>



<h2 class=\"mt-5\">ARTICLE 15 - RESPONSABILIT??</h2>
<p>La Soci??t?? ne pourra ??tre tenue responsable et aucune indemnit?? ne pourra lui ??tre demand??e au titre des retards de livraison ou cons??quences dommageables dus ?? des cas de force majeure tels que d??finis par la jurisprudence des cours et tribunaux fran??ais.<br>
<br>
La Soci??t?? ne pourra ??tre tenue responsable des interruptions, retards ou indisponibilit??s du Site dus ?? des travaux de maintenance, des interruptions du r??seau Internet, des pannes techniques, un cas de force majeure, le fait d???un tiers ou de toute circonstance quelle qu???elle soit.<br>
<br>
La Soci??t?? s???efforce d???assurer au mieux de ses possibilit??s, l???exactitude et la mise ?? jour des informations diffus??es sur le Site, dont elle se r??serve le droit de corriger, ?? tout moment et sans pr??avis, le contenu.<br>
<br>
Le Site contient des informations provenant de tierces personnes, la Soci??t?? ne donne donc aucune garantie quant ?? l???exactitude, la pr??cision ou l???exhaustivit?? des informations mises ?? disposition sur le Site. La responsabilit?? de la Soci??t?? ne pourra en aucun cas ??tre engag??e quant ?? d?????ventuelles erreurs ponctuelles pouvant survenir sur le site.</p>



<h2 class=\"mt-5\">ARTICLE 16 - SERVICE CLIENTS</h2>
<p>Pour toute information ou conseil, le Client peut contacter le Service Clients,<br>
<br>
Par t??l??phone du lundi au vendredi de 9h ?? 20h et le samedi de 9h ?? 19h :au 0970 83 05 05 (n?? non surtax??, prix d???un appel local)<br>
<br>
Par mail- pour les clients ayant r??alis?? un achat : sur l???espace Client dans la rubrique ?? Vos achats en ligne ?? Besoin d???aide. Les informations relatives ?? la commande sont ??galement disponible dans cet espace.<br>
<br>
- ou ?? l???adresse suivante : service.client@DoSport.fr<br>
<br>
Par courrier<br>
<br>
Service Clients Do Sport<br>
<br>
17 avenue de la falaise<br>
<br>
38360 SASSENAGE<br>
<br>
Conform??ment ?? la loi Informatique et Libert??s et ?? la r??glementation Europ??enne concernant la protection des donn??es ?? caract??re personnel, toutes les conversations et coordonn??es clients sont supprim??es dans les quinze (15) jours suivant la cl??ture de la demande. De plus, les messages sont chiffr??s de bout en bout, c???est-??-dire que seul le Client et le Service Client peuvent avoir acc??s aux messages.<br>
<br>
Vous disposez d???un droit d???acc??s, de rectification, d???opposition et de suppression sur les donn??es ?? caract??re personnel vous concernant. Vous pouvez exercer ces droits sur simple demande accompagn??e de la photocopie d???un justificatif d???identit?? ou des donn??es permettant ?? Do Sport de vous identifier sans ??quivoque ?? l???adresse suivante : dpo@DoSport.fr<br>
<br>
Attention : afin d???optimiser le traitement de ses demandes, le Client doit indiquer dans son courrier ses nom, pr??nom, email avec lesquels sa commande a ??t?? effectu??e et le num??ro de la commande concern??e.</p>



<h2 class=\"mt-5\">ARTICLE 17 - LOI APPLICABLE</h2>
<p>Les pr??sentes Conditions G??n??rales de Vente sont soumises ?? la loi fran??aise.<br>
<br>
Tout litige n'ayant pas trouv?? une solution amiable sera soumis ?? la comp??tence exclusive des tribunaux fran??ais.</p>



<h2 class=\"mt-5\">ARTICLE 18 - M??DIATION DE LITIGES DE CONSOMMATION</h2>
<p>L???ordonnance du 20 ao??t 2015 et le d??cret n??2015-1382 du 30 octobre 2015 relatifs ?? la m??diation des litiges de la consommation et faisant application de la directive 2013/11/UE du Parlement europ??en du 21 mai 2013, relative au r??glement extrajudiciaire des litiges de consommation, donne la possibilit?? au consommateur de se r??f??rer ?? la m??diation afin de faciliter le r??glement ?? l???amabile des litiges avec un professionnel ?? l???occasion d???une vente pass??e depuis le site DoSport.com<br>
<br>
Ainsi, pour tout litige qui n???aurait pas ??t?? r??gl?? directement avec la Soci??t??, le Client est inform?? qu???il peut ?? pr??sent recourir gratuitement au service de m??diation mis en place par M??diation ??? Vivons mieux ensemble :<br>
<br>
- Adresse du site : www.mediation-vivons-mieux-ensemble.fr<br>
<br>
- Adresse du m??diateur : MEDIATION ??? VIVONS MIEUX ENSEMBLE 465 avenue de la Lib??ration 54 000 NANCY<br>
<br>
<br>
<br>
Plate-forme europ??enne de r??solution en ligne des litiges : https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home.show&lng=FR<br>
<br>
Avant de saisir le m??diateur de la consommation, le consommateur doit d??j?? avoir tent?? de r??soudre son litige directement aupr??s du professionnel par une r??clamation ??crite ou avoir fait une r??clamation selon les termes du contrat conclu avec le professionnel.</p>
\t</div>
{% endblock %}
", "home/cgv.html.twig", "C:\\wamp64\\www\\RecupServerDosoprt4\\dosport\\templates\\home\\cgv.html.twig");
    }
}
