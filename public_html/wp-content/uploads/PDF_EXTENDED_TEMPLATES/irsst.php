<?php

/**
 * Template Name: IRSST - Guide
 * Version: 1.1
 * Author: Kryzalid
 * Author URI: https://kryzalid.net
 * Required PDF Version: 4.0
 */

/* Prevent direct access to the template (always good to include this) */
if (!class_exists('GFForms')) {
    return;
}

$font1 = 'bitter, sans-serif';
$font2 = 'opensans, sans-serif';
$fontSize = '12px';

// Colors
$blue = '#252A34';
$yellow = '#FFC236';
$red = '#971C14';
$grey = '#E1DED5';
$altgrey = '#A8A8A8';

// TODO: Change before push prod
$current_url = 'http://irsst.kryzastage3.com';
?>

<style>
    /* Base styles */
    body {
        font-family: <?= $font2 ?>;
        font-size: <?= $fontSize ?>;
        color: <?= $blue ?>;
    }

    * {
        font-size: <?= $fontSize ?>;
        color: <?= $blue ?>;
        font-weight: 400;
        margin: 0;
        padding: 0;
    }

    h1, h2, h3, h4 {
        font-family: <?= $font1 ?>;
    }

    h1 { 
        margin: 40px 0 -20px;
        font-weight: bold;
    }

    h2 { 
        margin: 40px 0 0;
        font-weight: bold;
    }

    h3 { 
        margin: 20px 0 0;
        font-weight: bold;
        font-size: 14px;
    }

    ul {
        margin-top: 0;
        padding-left: 20px;
    }

    a {
        color: <?=$blue ?>;
    }

    hr {
        margin: 40px 0 30px;
    }

    table th { text-align: left; }
    table td { padding-right: 20px; }

    /* Header images */
    .header {
        padding: 0 0 40px;
        border-bottom: 1px solid <?=$blue;?>;
    }

    /* Hide some stuff */
    .pdf-hidden,
    summary,
    .precision, 
    .extra { display: none; }

    /* Show column fields side-by-side */
    .gfpdf-field.grid { 
        width: 50%; 
        float: left;
        padding-top: 10px;
    }

    /* Hide all labels by default, and only show those with pdf-show-label class */
    .gfpdf-field .label { display: none; }
    .gfpdf-field.pdf-show-label .label { display: block; }
    
    /* Adjust 'other' fields position */
    .link-previous-field .value { margin-top: -4px; }
    .link-previous-field.pdf-checkbox .value { 
        margin-top: -14px; 
        margin-left: 20px;
    }

    .value { padding: 2px 0; }


    /* Format custom added html content */
    .custom-content p,
    .custom-content p strong,
    .custom-content h5 {
        font-family: <?= $font2 ?>;
        font-size: <?= $fontSize ?>;
        color: <?= $blue ?>;
    }
    .custom-content h5 {
        margin-bottom: -40px;
    }
    .custom-content ol ol {
        margin-bottom: 10px;
        list-style: lower-alpha;
    }

    /* Hide section titles */
    .hero, h2, .title { display: none; }

    /* Format infoboxes */
    .infobox {
        padding: 30px 20px 10px;
        background-color: <?= $yellow ?>;
    }
    .infobox h3 { margin: 0; }

    .nb-page{
        text-align: center;
    }

    @page {
        footer: html_MyCustomFooter; /* display <htmlpagefooter name="MyCustomFooter"> on all pages */
    }
</style>

<?php
$html_config = array(
    'settings' => $settings,
    'meta'     => array(
        'echo'                     => false, /* whether to output the HTML or return it */
        'exclude'                  => true, /* whether we should exclude fields with a CSS value of 'exclude'. Default to true */
        'empty'                    => false, /* whether to show empty fields or not. Default is false */
        'conditional'              => true, /* whether we should skip fields hidden with conditional logic. Default to true. */
        'show_title'               => false, /* whether we should show the form title. Default to true */
        'section_content'          => false, /* whether we should include a section breaks content. Default to false */
        'page_names'               => false, /* whether we should show the form's page names. Default to false */
        'html_field'               => true, /* whether we should show the form's html fields. Default to false */
        'individual_products'      => false, /* Whether to show individual fields in the entry. Default to false - they are grouped together at the end of the form */
        'enable_css_ready_classes' => true /* Whether to enable or disable Gravity Forms CSS Ready Class support in your PDF */
    )
);
?>

<div class="page">
    <div class="header">
        <img src="<?= PDF_TEMPLATE_URL_LOCATION; ?>images/logo-boite_a_gants.png" width="120" />
        <img src="<?= PDF_TEMPLATE_URL_LOCATION; ?>images/new_logo.png" width="200" style="float:right;" />
    </div>

    <div class="custom-content">
        <h1>Voici votre trousse d’aide à la sélection de gants de protection</h1>
        <p>Votre trousse personnalisée contient les éléments clés pour faciliter vos échanges avec votre fournisseur. Vous y trouverez aussi des conseils et des outils pour évaluer les modèles de gants sélectionnés et les prochaines étapes pour les implanter efficacement dans votre milieu de travail.</p>
        <div class="infobox">
            <h3>Vous souhaitez éliminer le risque à la source ou être guidé dans votre démarche de sélection de gants ?</h3>
            <p>Contactez votre Association sectorielle paritaire (si applicable) ou un expert en sécurité dans votre domaine. Vous trouverez la liste des ASP et des liens vers des sites web reconnus qui peuvent vous aider sur notre page Ressources. </p>
        </div>

        <h1>Vos objectifs, besoins, risques et critères</h1>
        <p>Voici les réponses du questionnaire. Elles vous seront pratiques dans vos discussions avec votre fournisseur, elles faciliteront vos achats!</p>
    </div>

    <hr>    

    <div class="form-content">
        <?php
            // dd($entry);
            // dd($form_data);

            $pdf = GPDFAPI::get_pdf_class();
            $html = $pdf->process_html_structure($entry, GPDFAPI::get_pdf_class('model'), $html_config);
            echo($html);
        ?>
    </div>
    
    <hr>    
    
    <div class="custom-content">
        <h1>Points importants à surveiller lors de votre sélection</h1>

        <h3>Toujours préconiser l’élimination à la source</h3>
        <p>La protection offerte par les gants est limitée. Tous les phénomènes dangereux ne peuvent pas être gérés par l’usage d’ÉPI. Tentez d’éliminer le risque à la source d’abord.</p>

        <h3>Pour les risques associés à des produits chimiques</h3>
        <h5>Choisir le type de matériau résistant aux produits chimiques en trois étapes</h5>
        <p>Trouver les bons gants de protection contre les risques chimiques demande une compréhension approfondie des produits auxquels les travailleurs sont exposés.</p>
        <p>Voici une liste d’outils et d’éléments à considérer pour vous aider dans votre démarche de sélection et vos discussions avec votre fournisseur. </p>
        <ol>
            <li>Consulter la <a href="https://simdut.org/fds/s8/" target="_blank">fiche de données de sécurité (FDS), section 8 : « protection individuelle »</a>
                <ol>
                    <li>Pour un seul produit chimique ou un mélange composé de deux produits chimiques : vérifier si un type de matériau est suggéré.</li>
                    <li>Pour deux produits chimiques différents ou plus ou pour des mélanges composés de plus de deux produits chimiques : consulter les FDS de chacun des produits pour vérifier si un même type de matériau est suggéré</li>
                </ol>
            </li>
            <li>Consulter la <a href="https://simdut.org/fds/s3/" target="_blank">fiche de données de sécurité (FDS), section 3 : « composition/informations sur les composants »</a>
                <ol>
                    <li>Noter le nom chimique des composants, leurs numéros CAS ainsi que leur concentration/proportion et consulter les outils énumérés au point 3, au besoin. </li>
                </ol>
            </li>
            <li>Consulter le répertoire toxicologique <a href="https://reptox.cnesst.gouv.qc.ca/Pages/repertoire-toxicologique.aspx" target="_blank">REPTOX</a>, le logiciel <a href="https://www.irsst.qc.ca/publications-et-outils/outil/i/100051/n/protecpo" target="_blank">ProtecPo</a>, la base de données <a href="https://www.cdc.gov/niosh/ncpc/default.html" target="_blank">NIOSH</a> ou les sites de fabricants.
                <ol>
                    <li>Pour un seul produit chimique ou un mélange composé de deux produits chimiques : vérifier si un type de matériau est suggéré.</li>
                    <li>Pour deux produits chimiques différents ou plus ou pour des mélanges composés de plus de deux produits chimiques : consulter les FDS de chacun des produits pour vérifier si un même type de matériau est suggéré (notez que le répertoire toxicologique REPTOX est moins adapté aux recherches portant sur les risques d’exposition liés à plus de deux produits chimiques différents ou à des mélanges de produits chimiques comprenant deux composants et plus). </li>
                </ol>
            </li>
        </ol>

        <h3>Pour les risques associés à des matières biologiques</h3>
        <h5>L’importance d’un gant intègre</h5>
        <p>L’efficacité de la protection contre le risque biologique dépend de l’intégrité physique du gant.</p>
        <p>Si le gant est rompu (à la suite d’un accroc, d’une coupure, d’une usure excessive, d’une détérioration chimique ou par abrasion, par exemple), la protection contre le risque de contamination biologique sera compromise. </p>
        <h5>Privilégiez des matériaux imperméables et résistants aux autres risques présents</h5>
        <p>En cas de risque de contamination biologique, privilégiez les matériaux imperméables qui sont également résistants aux autres risques présents lors des tâches à effectuer (ex. : piqûre, coupure, etc.).</p>
        <h5>Une utilisation adaptée en fonction des conditions des mains</h5>
        <p>Lorsque la peau des mains du travailleur est endommagée (ex. : plaie, coupure, ampoule, gerçures, dermatite, etc.), le risque de contact avec les micro-organismes est augmenté. Les affections de la peau et le travail en laboratoire peuvent nécessiter le port de sous-gants. Parlez-en à votre fournisseur !</p>

        <h3>Pour les risques associés aux risques mécaniques et physiques</h3>
        <h5>Risque d’entraînement ?</h5>
        <p>Rappel : s’il y a un risque d’entraînement (par exemple, en présence d’une machine rotative en mouvement et non protégée), <strong>le port de gants de protection n’est pas recommandé.</strong></p>
        <h5>Concernant les gants di électriques</h5>
        <p>Lors de l’achat de gants diélectriques, le fournisseur doit proposer les surgants en cuir adaptés à ces derniers. Si les surgants doivent être achetés séparément (pour remplacer un surgant abîmé, par exemple), il faut commander la même taille que le surgant en cuir à remplacer et non la taille du gant diélectrique. Les gants et surgants doivent aussi être de la même marque.</p>
        <h5>La protection contre les flammes, dans une classe à part</h5>
        <p>Les exigences relatives aux flammes (normes ANSI/ISEA 105-2016 ou EN 407) sont adaptées aux manipulations <strong>proches des flammes</strong> (ex. : un foyer, une cheminée, un poêle), mais ne sont pas adaptées contre les risques spécifiques liés aux incendies. </p>
        <p>Pour le type de gants <strong>résistants aux flammes</strong> (autres que celles de soudure), vous devez vous référer aux normes NFPA.</p>

        <h3>Optez pour le meilleur compromis entre la dextérité et la protection</h3>
        <p><strong>ATTENTION !</strong> Les gants de protection fabriqués à partir de matériaux plus épais ou rigides réduisent la dextérité. Le port de gants de protection ne devrait pas empêcher les travailleurs de remplir leurs tâches de façon sécuritaire.</p>
        <p>Les risques liés aux mauvaises manœuvres (ex. échapper des pièces ou des matériaux) peuvent être évités par le port de gants adaptés. </p>

        <h3>Se protéger efficacement peut être aussi bon pour la tirelire</h3>
        <p>Lors de vos discussions, considérez le coût des gants… mais la durabilité aussi ! </p>
        <p>Le coût des gants est un facteur important dans la démarche de sélection. Le matériau, la construction et la technologie utilisée peuvent faire varier les prix de quelques sous (modèles jetables) à une centaine de dollars (modèles haute performance). </p>
        <p>N’oubliez pas de voir au-delà du prix d’achat en pensant aussi à la fréquence d’utilisation, à la qualité (durabilité) et à l’entretien des gants. </p>

        <h1>Prochaines étapes pour une démarche de sélection réussie</h1>
        <p>La conception de votre trousse est une étape cruciale dans la démarche, mais pas la dernière. Pour réussir votre projet, les étapes suivantes sont déterminantes : </p>
        <ul>
            <li><a href="<?=$current_url ?>/trousse#trouver" target="_blank">Trouver des modèles de gants de protection</a></li>
            <li><a href="<?=$current_url ?>/trousse#evaluer" target="_blank">Évaluer les modèles de gants sélectionnés</li>
            <li><a href="<?=$current_url ?>/trousse#choisir" target="_blank">Choisir un modèle de gants de protection </li>
            <li><a href="<?=$current_url ?>/trousse#implanter" target="_blank">Implanter le modèle de gants choisi</li>
            <li><a href="<?=$current_url ?>/trousse#suivi" target="_blank">Faire le suivi</li>
        </ul>

        <h1>Voilà, vous avez tout en main pour réussir votre démarche de sélection de gants !</h1>
        <p>Vous pouvez toujours retourner sur notre site pour trouver des informations et des ressources supplémentaires.</p>
        <p>Nous vous souhaitons une bonne démarche !</p>

    </div>
</div>

<htmlpagefooter name="MyCustomFooter">
    <div class="nb-page">{PAGENO}/{nbpg}</div>
</htmlpagefooter>