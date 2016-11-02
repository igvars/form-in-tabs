<?php

//require_once ('functions.php');
function getYearsArray() {
    return ['2016'];
}
if (isset($_REQUEST['reference']))
    $reference = $_REQUEST['reference'];


// CONFIGURATION
$user_name          = "toto";
$user_passphrase    = "6ac5c848beb3b4fe3154661be332ae918606ef61"; // Secret Passphrase, keep it safe.

$site_url           = "actes-de-naissance.com";
$return_url         = "http://". $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

$token              = sha1($user_passphrase . ':' . $_SERVER['REMOTE_ADDR'] . ':' . $site_url . ':' . $return_url); // Generate token

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="eo-iframe">
        <ul class="steps">
            <li class="step active">
                <div class="display-table">
                    <div class="display-table-cell">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-pencil fa-stack-1x icon-color"></i>
                        </span>
                    </div>
                    <div class="display-table-cell">
                        <a class="step-name" href="#" data-tab-index="1">étape 1</a>
                    </div>
                </div>
            </li>
            <li class="step">
                <div class="display-table">
                    <div class="display-table-cell">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-credit-card-alt fa-stack-1x icon-color"></i>
                        </span>
                    </div>
                    <div class="display-table-cell">
                        <a class="step-name" href="#" data-tab-index="2">étape 2</a>
                    </div>
                </div>
            </li>
            <li class="step">
                <div class="display-table">
                    <div class="display-table-cell">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-paper-plane-o fa-stack-1x icon-color"></i>
                        </span>
                    </div>
                    <div class="display-table-cell">
                        <a class="step-name" href="#" data-tab-index="3">étape 3</a>
                    </div>
                </div>
            </li>
        </ul>

        <form id="eo-form" action="http://aff.easy-formalites.com/">

            <input type="hidden" name="aff_action" value="new_lead">
            <input type="hidden" name="aff_name" value="<?php echo $user_name ?>">
            <input type="hidden" name="type" value="actedenaissance">

            <input type="hidden" name="site_url" value="<?php echo $site_url ?>">
            <input type="hidden" name="return_url" value="<?php echo $return_url ?>">
            <input type="hidden" name="token" value="<?php echo $token ?>">

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab1">
                    <div class="left-column">
                        <div class="form-header">
                            <div class="block-title">Détails sur l’extrait d’acte de naissance</div>
                        </div>
                        <div class="form-body">
                            <div class="radio-group form-group">
                                <div class="label">Civilité</div>
                                <div class="radio-input">
                                    <input required id="Madame" class="radio-input-field" type="radio" name="actedenaissance_gender" value="Madame">
                                    <label class="label radio-label" for="Madame">Madame</label>
                                </div>
                                <div class="radio-input">
                                    <input required id="Monsieur" class="radio-input-field" type="radio" name="actedenaissance_gender" value="Monsieur">
                                    <label class="label radio-label" for="Monsieur">Monsieur</label>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_surname">Prénom(s)</label>
                                <input id="actedenaissance_surname" type="text" required name="actedenaissance_surname">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_name">Nom</label>
                                <input id="actedenaissance_name" type="text" required name="actedenaissance_name">

                            </div>
                            <div class="date-container">
                                <div class="label">Date de naissance</div>
                                <div class="dropdown-group">
                                    <div class="form-group">
                                        <select class="form-control" name="actedenaissance_birth_day" required>
                                            <option value="">Jour</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="dropdown-group">
                                    <div class="form-group">
                                        <select name="actedenaissance_birth_month" required>
                                            <option value="">Mois</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="dropdown-group">
                                    <div class="form-group">
                                        <select name="actedenaissance_birth_year" required>
                                            <option value="">Année</option>
                                            <?php foreach (getYearsArray() as $year) : ?>
                                                <option value="<?php echo $year ?>"><?php echo $year ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="dropdown-group">
                                    <label class="label" for="actedenaissance_country_birth">Pays de naissance</label>
                                    <select class="select-long" name="actedenaissance_country_birth" required=""
                                            id="actedenaissance_country_birth">
                                        <option value="">--</option>
                                        <option value="Afghanistan">Afghanistan (AFG)</option>
                                        <option value="Afrique du Sud">Afrique du Sud (ZAF)</option>
                                        <option value="Albanie">Albanie (ALB)</option>
                                        <option value="Algérie">Algérie (DZA)</option>
                                        <option value="Allemagne">Allemagne (DEU)</option>
                                        <option value="Andorre">Andorre (AND)</option>
                                        <option value="Angola">Angola (AGO)</option>
                                        <option value="Anguilla">Anguilla (AIA)</option>
                                        <option value="Antarctique">Antarctique (ATA)</option>
                                        <option value="Antigua-et-Barbuda">Antigua-et-Barbuda (ATG)</option>
                                        <option value="Antilles Néerlandaises">Antilles Néerlandaises (ANT)</option>
                                        <option value="Arabie Saoudite">Arabie Saoudite (SAU)</option>
                                        <option value="Argentine">Argentine (ARG)</option>
                                        <option value="Arménie">Arménie (ARM)</option>
                                        <option value="Aruba">Aruba (ABW)</option>
                                        <option value="Australie">Australie (AUS)</option>
                                        <option value="Autriche">Autriche (AUT)</option>
                                        <option value="Azerbaïdjan">Azerbaïdjan (AZE)</option>
                                        <option value="Bahamas">Bahamas (BHS)</option>
                                        <option value="Bahreïn">Bahreïn (BHR)</option>
                                        <option value="Bangladesh">Bangladesh (BGD)</option>
                                        <option value="Barbade">Barbade (BRB)</option>
                                        <option value="Bélarus">Bélarus (BLR)</option>
                                        <option value="Belgique">Belgique (BEL)</option>
                                        <option value="Belize">Belize (BLZ)</option>
                                        <option value="Bénin">Bénin (BEN)</option>
                                        <option value="Bermudes">Bermudes (BMU)</option>
                                        <option value="Bhoutan">Bhoutan (BTN)</option>
                                        <option value="Bolivie">Bolivie (BOL)</option>
                                        <option value="Bosnie-Herzégovine">Bosnie-Herzégovine (BIH)</option>
                                        <option value="Botswana">Botswana (BWA)</option>
                                        <option value="Brésil">Brésil (BRA)</option>
                                        <option value="Brunéi Darussalam">Brunéi Darussalam (BRN)</option>
                                        <option value="Bulgarie">Bulgarie (BGR)</option>
                                        <option value="Burkina Faso">Burkina Faso (BFA)</option>
                                        <option value="Burundi">Burundi (BDI)</option>
                                        <option value="Cambodge">Cambodge (KHM)</option>
                                        <option value="Cameroun">Cameroun (CMR)</option>
                                        <option value="Canada">Canada (CAN)</option>
                                        <option value="Cap-vert">Cap-vert (CPV)</option>
                                        <option value="Chili">Chili (CHL)</option>
                                        <option value="Chine">Chine (CHN)</option>
                                        <option value="Chypre">Chypre (CYP)</option>
                                        <option value="Colombie">Colombie (COL)</option>
                                        <option value="Comores">Comores (COM)</option>
                                        <option value="Costa Rica">Costa Rica (CRI)</option>
                                        <option value="Côte d'Ivoire">Côte d'Ivoire (CIV)</option>
                                        <option value="Croatie">Croatie (HRV)</option>
                                        <option value="Cuba">Cuba (CUB)</option>
                                        <option value="Danemark">Danemark (DNK)</option>
                                        <option value="Djibouti">Djibouti (DJI)</option>
                                        <option value="Dominique">Dominique (DMA)</option>
                                        <option value="Égypte">Égypte (EGY)</option>
                                        <option value="El Salvador">El Salvador (SLV)</option>
                                        <option value="Émirats Arabes Unis">Émirats Arabes Unis (ARE)</option>
                                        <option value="Équateur">Équateur (ECU)</option>
                                        <option value="Érythrée">Érythrée (ERI)</option>
                                        <option value="Espagne">Espagne (ESP)</option>
                                        <option value="Estonie">Estonie (EST)</option>
                                        <option value="États Fédérés de Micronésie">États Fédérés de Micronésie (FSM)
                                        </option>
                                        <option value="États-Unis">États-Unis (USA)</option>
                                        <option value="Éthiopie">Éthiopie (ETH)</option>
                                        <option value="Fédération de Russie">Fédération de Russie (RUS)</option>
                                        <option value="Fidji">Fidji (FJI)</option>
                                        <option value="Finlande">Finlande (FIN)</option>
                                        <option value="France" selected="selected">France (FRA)</option>
                                        <option value="Gabon">Gabon (GAB)</option>
                                        <option value="Gambie">Gambie (GMB)</option>
                                        <option value="Géorgie">Géorgie (GEO)</option>
                                        <option value="Géorgie du Sud et les Îles Sandwich du Sud">Géorgie du Sud et les
                                            Îles Sandwich du Sud (SGS)
                                        </option>
                                        <option value="Ghana">Ghana (GHA)</option>
                                        <option value="Gibraltar">Gibraltar (GIB)</option>
                                        <option value="Grèce">Grèce (GRC)</option>
                                        <option value="Grenade">Grenade (GRD)</option>
                                        <option value="Groenland">Groenland (GRL)</option>
                                        <option value="Guadeloupe">Guadeloupe (GLP)</option>
                                        <option value="Guam">Guam (GUM)</option>
                                        <option value="Guatemala">Guatemala (GTM)</option>
                                        <option value="Guinée">Guinée (GIN)</option>
                                        <option value="Guinée Équatoriale">Guinée Équatoriale (GNQ)</option>
                                        <option value="Guinée-Bissau">Guinée-Bissau (GNB)</option>
                                        <option value="Guyana">Guyana (GUY)</option>
                                        <option value="Guyane Française">Guyane Française (GUF)</option>
                                        <option value="Haïti">Haïti (HTI)</option>
                                        <option value="Honduras">Honduras (HND)</option>
                                        <option value="Hong-Kong">Hong-Kong (HKG)</option>
                                        <option value="Hongrie">Hongrie (HUN)</option>
                                        <option value="Île Bouvet">Île Bouvet (BVT)</option>
                                        <option value="Île Christmas">Île Christmas (CXR)</option>
                                        <option value="Île de Man">Île de Man (IMN)</option>
                                        <option value="Île Norfolk">Île Norfolk (NFK)</option>
                                        <option value="Îles (malvinas) Falkland">Îles (malvinas) Falkland (FLK)</option>
                                        <option value="Îles Åland">Îles Åland (ALA)</option>
                                        <option value="Îles Caïmanes">Îles Caïmanes (CYM)</option>
                                        <option value="Îles Cocos (Keeling)">Îles Cocos (Keeling) (CCK)</option>
                                        <option value="Îles Cook">Îles Cook (COK)</option>
                                        <option value="Îles Féroé">Îles Féroé (FRO)</option>
                                        <option value="Îles Heard et Mcdonald">Îles Heard et Mcdonald (HMD)</option>
                                        <option value="Îles Mariannes du Nord">Îles Mariannes du Nord (MNP)</option>
                                        <option value="Îles Marshall">Îles Marshall (MHL)</option>
                                        <option value="Îles Mineures Éloignées des États-Unis">Îles Mineures Éloignées
                                            des États-Unis (UMI)
                                        </option>
                                        <option value="Îles Salomon">Îles Salomon (SLB)</option>
                                        <option value="Îles Turks et Caïques">Îles Turks et Caïques (TCA)</option>
                                        <option value="Îles Vierges Britanniques">Îles Vierges Britanniques (VGB)
                                        </option>
                                        <option value="Îles Vierges des États-Unis">Îles Vierges des États-Unis (VIR)
                                        </option>
                                        <option value="Inde">Inde (IND)</option>
                                        <option value="Indonésie">Indonésie (IDN)</option>
                                        <option value="Iraq">Iraq (IRQ)</option>
                                        <option value="Irlande">Irlande (IRL)</option>
                                        <option value="Islande">Islande (ISL)</option>
                                        <option value="Israël">Israël (ISR)</option>
                                        <option value="Italie">Italie (ITA)</option>
                                        <option value="Jamahiriya Arabe Libyenne">Jamahiriya Arabe Libyenne (LBY)
                                        </option>
                                        <option value="Jamaïque">Jamaïque (JAM)</option>
                                        <option value="Japon">Japon (JPN)</option>
                                        <option value="Jordanie">Jordanie (JOR)</option>
                                        <option value="Kazakhstan">Kazakhstan (KAZ)</option>
                                        <option value="Kenya">Kenya (KEN)</option>
                                        <option value="Kirghizistan">Kirghizistan (KGZ)</option>
                                        <option value="Kiribati">Kiribati (KIR)</option>
                                        <option value="Koweït">Koweït (KWT)</option>
                                        <option value="L'ex-République Yougoslave de Macédoine">L'ex-République
                                            Yougoslave de Macédoine (MKD)
                                        </option>
                                        <option value="Lesotho">Lesotho (LSO)</option>
                                        <option value="Lettonie">Lettonie (LVA)</option>
                                        <option value="Liban">Liban (LBN)</option>
                                        <option value="Libéria">Libéria (LBR)</option>
                                        <option value="Liechtenstein">Liechtenstein (LIE)</option>
                                        <option value="Lituanie">Lituanie (LTU)</option>
                                        <option value="Luxembourg">Luxembourg (LUX)</option>
                                        <option value="Macao">Macao (MAC)</option>
                                        <option value="Madagascar">Madagascar (MDG)</option>
                                        <option value="Malaisie">Malaisie (MYS)</option>
                                        <option value="Malawi">Malawi (MWI)</option>
                                        <option value="Maldives">Maldives (MDV)</option>
                                        <option value="Mali">Mali (MLI)</option>
                                        <option value="Malte">Malte (MLT)</option>
                                        <option value="Maroc">Maroc (MAR)</option>
                                        <option value="Martinique">Martinique (MTQ)</option>
                                        <option value="Maurice">Maurice (MUS)</option>
                                        <option value="Mauritanie">Mauritanie (MRT)</option>
                                        <option value="Mayotte">Mayotte (MYT)</option>
                                        <option value="Mexique">Mexique (MEX)</option>
                                        <option value="Monaco">Monaco (MCO)</option>
                                        <option value="Mongolie">Mongolie (MNG)</option>
                                        <option value="Montserrat">Montserrat (MSR)</option>
                                        <option value="Mozambique">Mozambique (MOZ)</option>
                                        <option value="Myanmar">Myanmar (MMR)</option>
                                        <option value="Namibie">Namibie (NAM)</option>
                                        <option value="Nauru">Nauru (NRU)</option>
                                        <option value="Népal">Népal (NPL)</option>
                                        <option value="Nicaragua">Nicaragua (NIC)</option>
                                        <option value="Niger">Niger (NER)</option>
                                        <option value="Nigéria">Nigéria (NGA)</option>
                                        <option value="Niué">Niué (NIU)</option>
                                        <option value="Norvège">Norvège (NOR)</option>
                                        <option value="Nouvelle-Calédonie">Nouvelle-Calédonie (NCL)</option>
                                        <option value="Nouvelle-Zélande">Nouvelle-Zélande (NZL)</option>
                                        <option value="Oman">Oman (OMN)</option>
                                        <option value="Ouganda">Ouganda (UGA)</option>
                                        <option value="Ouzbékistan">Ouzbékistan (UZB)</option>
                                        <option value="Pakistan">Pakistan (PAK)</option>
                                        <option value="Palaos">Palaos (PLW)</option>
                                        <option value="Panama">Panama (PAN)</option>
                                        <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée (PNG)
                                        </option>
                                        <option value="Paraguay">Paraguay (PRY)</option>
                                        <option value="Pays-Bas">Pays-Bas (NLD)</option>
                                        <option value="Pérou">Pérou (PER)</option>
                                        <option value="Philippines">Philippines (PHL)</option>
                                        <option value="Pitcairn">Pitcairn (PCN)</option>
                                        <option value="Pologne">Pologne (POL)</option>
                                        <option value="Polynésie Française">Polynésie Française (PYF)</option>
                                        <option value="Porto Rico">Porto Rico (PRI)</option>
                                        <option value="Portugal">Portugal (PRT)</option>
                                        <option value="Qatar">Qatar (QAT)</option>
                                        <option value="République Arabe Syrienne">République Arabe Syrienne (SYR)
                                        </option>
                                        <option value="République Centrafricaine">République Centrafricaine (CAF)
                                        </option>
                                        <option value="République de Corée">République de Corée (KOR)</option>
                                        <option value="République de Moldova">République de Moldova (MDA)</option>
                                        <option value="République Démocratique du Congo">République Démocratique du
                                            Congo (COD)
                                        </option>
                                        <option value="République Démocratique Populaire Lao">République Démocratique
                                            Populaire Lao (LAO)
                                        </option>
                                        <option value="République Dominicaine">République Dominicaine (DOM)</option>
                                        <option value="République du Congo">République du Congo (COG)</option>
                                        <option value="République Islamique d'Iran">République Islamique d'Iran (IRN)
                                        </option>
                                        <option value="République Populaire Démocratique de Corée">République Populaire
                                            Démocratique de Corée (PRK)
                                        </option>
                                        <option value="République Tchèque">République Tchèque (CZE)</option>
                                        <option value="République-Unie de Tanzanie">République-Unie de Tanzanie (TZA)
                                        </option>
                                        <option value="Réunion">Réunion (REU)</option>
                                        <option value="Roumanie">Roumanie (ROU)</option>
                                        <option value="Royaume-Uni">Royaume-Uni (GBR)</option>
                                        <option value="Rwanda">Rwanda (RWA)</option>
                                        <option value="Sahara Occidental">Sahara Occidental (ESH)</option>
                                        <option value="Saint-Kitts-et-Nevis">Saint-Kitts-et-Nevis (KNA)</option>
                                        <option value="Saint-Marin">Saint-Marin (SMR)</option>
                                        <option value="Saint-Pierre-et-Miquelon">Saint-Pierre-et-Miquelon (SPM)</option>
                                        <option value="Saint-Siège (état de la Cité du Vatican)">Saint-Siège (état de la
                                            Cité du Vatican) (VAT)
                                        </option>
                                        <option value="Saint-Vincent-et-les Grenadines">Saint-Vincent-et-les Grenadines
                                            (VCT)
                                        </option>
                                        <option value="Sainte-Hélène">Sainte-Hélène (SHN)</option>
                                        <option value="Sainte-Lucie">Sainte-Lucie (LCA)</option>
                                        <option value="Samoa">Samoa (WSM)</option>
                                        <option value="Samoa Américaines">Samoa Américaines (ASM)</option>
                                        <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe (STP)</option>
                                        <option value="Sénégal">Sénégal (SEN)</option>
                                        <option value="Serbie-et-Monténégro">Serbie-et-Monténégro (SCG)</option>
                                        <option value="Seychelles">Seychelles (SYC)</option>
                                        <option value="Sierra Leone">Sierra Leone (SLE)</option>
                                        <option value="Singapour">Singapour (SGP)</option>
                                        <option value="Slovaquie">Slovaquie (SVK)</option>
                                        <option value="Slovénie">Slovénie (SVN)</option>
                                        <option value="Somalie">Somalie (SOM)</option>
                                        <option value="Soudan">Soudan (SDN)</option>
                                        <option value="Sri Lanka">Sri Lanka (LKA)</option>
                                        <option value="Suède">Suède (SWE)</option>
                                        <option value="Suisse">Suisse (CHE)</option>
                                        <option value="Suriname">Suriname (SUR)</option>
                                        <option value="Svalbard etÎle Jan Mayen">Svalbard etÎle Jan Mayen (SJM)</option>
                                        <option value="Swaziland">Swaziland (SWZ)</option>
                                        <option value="Tadjikistan">Tadjikistan (TJK)</option>
                                        <option value="Taïwan">Taïwan (TWN)</option>
                                        <option value="Tchad">Tchad (TCD)</option>
                                        <option value="Terres Australes Françaises">Terres Australes Françaises (ATF)
                                        </option>
                                        <option value="Territoire Britannique de l'Océan Indien">Territoire Britannique
                                            de l'Océan Indien (IOT)
                                        </option>
                                        <option value="Territoire Palestinien Occupé">Territoire Palestinien Occupé
                                            (PSE)
                                        </option>
                                        <option value="Thaïlande">Thaïlande (THA)</option>
                                        <option value="Timor-Leste">Timor-Leste (TLS)</option>
                                        <option value="Togo">Togo (TGO)</option>
                                        <option value="Tokelau">Tokelau (TKL)</option>
                                        <option value="Tonga">Tonga (TON)</option>
                                        <option value="Trinité-et-Tobago">Trinité-et-Tobago (TTO)</option>
                                        <option value="Tunisie">Tunisie (TUN)</option>
                                        <option value="Turkménistan">Turkménistan (TKM)</option>
                                        <option value="Turquie">Turquie (TUR)</option>
                                        <option value="Tuvalu">Tuvalu (TUV)</option>
                                        <option value="Ukraine">Ukraine (UKR)</option>
                                        <option value="Uruguay">Uruguay (URY)</option>
                                        <option value="Vanuatu">Vanuatu (VUT)</option>
                                        <option value="Venezuela">Venezuela (VEN)</option>
                                        <option value="Viet Nam">Viet Nam (VNM)</option>
                                        <option value="Wallis et Futuna">Wallis et Futuna (WLF)</option>
                                        <option value="Yémen">Yémen (YEM)</option>
                                        <option value="Zambie">Zambie (ZMB)</option>
                                        <option value="Zimbabwe">Zimbabwe (ZWE)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_town_birth">Ville de naissance</label>
                                <input id="actedenaissance_town_birth" type="text" required name="actedenaissance_town_birth">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_postcode_birth">Code postal</label>
                                <input id="actedenaissance_postcode_birth" type="text" required
                                       name="actedenaissance_postcode_birth">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_father_name">Nom du père</label>
                                <input id="actedenaissance_father_name" type="text" required name="actedenaissance_father_name">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_father_surname">Prénom(s) du père</label>
                                <input id="actedenaissance_father_surname" type="text" required
                                       name="actedenaissance_father_surname">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_mother_name">Nom de jeune fille de la
                                    mère</label>
                                <input id="actedenaissance_mother_name" type="text" required name="actedenaissance_mother_name">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_mother_surname">Prénom(s) de la mère</label>
                                <input id="actedenaissance_mother_surname" type="text" required
                                       name="actedenaissance_mother_surname">

                            </div>
                        </div>
                        <div class="form-footer">
                            <div class="submit-button">
                                <a href="#tab2" aria-controls="payment" role="tab" data-toggle="tab" data-tab-index="1">Continuer</a>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="block-title">
                            Vous faites un demande d’un extrait d’acte de naissance pour :
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab2">
                    <div class="left-column">
                        <div class="form-header">
                            <div class="block-title">Détails sur l’extrait d’acte de naissance</div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <div class="dropdown-group">
                                    <label class="label" for="actedenaissance-element-24">Type d'acte demandé</label>
                                    <select class="select-long" name="actedenaissance_type" required
                                            id="actedenaissance-element-24">
                                        <option value="Copie intégrale de l'acte">Copie intégrale de l'acte</option>
                                        <option value="Extrait d'acte avec filiation">Extrait d'acte avec filiation
                                        </option>
                                        <option value="Extrait d'acte sans filiation">Extrait d'acte sans filiation
                                        </option>
                                        <option value="Extrait plurilingue">Extrait plurilingue</option>
                                    </select>
                                    <span class="tooltip-container" data-toggle="tooltip"
                                          data-placement="right" title="<p>Précisez la nature du document.
                                            <u>Une copie intégrale</u> est une reproduction de l’acte original, mentions légales comprises
                                            <br>/
                                            <u>Un extrait sans filiation</u> ne contient pas les noms et prénoms des parents de l’intéressé
                                            <br>/
                                            <u>Un extrait avec filiation</u> regroupe l’identité de l’intéressé, celles de ses parents, et les dernières mentions concernant sa vie et sa situation familiale (décès, mariage, divorce)
                                            <br>/
                                            <u>Un acte plurilingue</u> est un acte de naissance traduit dans plusieurs langues
                                        </p>">
                                        <i class="fa fa-question-circle"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_use">Usage</label>
                                <input id="actedenaissance_use" type="text" required name="actedenaissance_use">
                            </div>
                            <div class="radio-group form-group">
                                <div class="label">Nombre d'exemplaires</div>
                                <div class="radio-input">
                                    <input required id="r1" class="radio-input-field" type="radio" name="actedenaissance_quantity" value="1" selected>
                                    <label class="label radio-label" for="r1">1</label>
                                </div>
                                <div class="radio-input">
                                    <input required id="r2" class="radio-input-field" type="radio" name="actedenaissance_quantity" value="2">
                                    <label class="label radio-label" for="r2">2</label>
                                </div>
                                <div class="radio-input">
                                    <input required id="r3" class="radio-input-field" type="radio" name="actedenaissance_quantity" value="3">
                                    <label class="label radio-label" for="r3">3</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer">
                            <div class="submit-button">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab" data-tab-index="2">Continuer</a>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="block-title">
                            Vous faites un demande d’un extrait d’acte de naissance pour :
                        </div>
                        <ul class="entered-params entered-params-block-1">
                        </ul>
                        <div class="block-revert">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" data-tab-index="2"><i class="fa fa-pencil"></i> Modifier</a>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab3">
                    <div class="left-column">
                        <div class="form-header">
                            <div class="block-title">Coordonnées d'expédition de l'acte de naissance</div>
                        </div>
                        <div class="form-body">
                            <div class="radio-group form-group">
                                <div class="label">Civilité</div>
                                <div class="radio-input">
                                    <input required id="actedenaissance_delivery_gender1" class="radio-input-field" type="radio"
                                           name="actedenaissance_delivery_gender" value="Madame">
                                    <label class="label radio-label"
                                           for="actedenaissance_delivery_gender1">Madame</label>
                                </div>
                                <div class="radio-input">
                                    <input required id="actedenaissance_delivery_gender2" class="radio-input-field" type="radio"
                                           name="actedenaissance_delivery_gender" value="Monsieur">
                                    <label class="label radio-label"
                                           for="actedenaissance_delivery_gender2">Monsieur</label>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_delivery_surname">Prénom(s)</label>
                                <input id="actedenaissance_delivery_surname" type="text" required
                                       name="actedenaissance_delivery_surname">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_delivery_name">Nom</label>
                                <input id="actedenaissance_delivery_name" type="text" required
                                       name="actedenaissance_delivery_name">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_delivery_address">Adresse</label>
                                <input id="actedenaissance_delivery_address" type="text" required
                                       name="actedenaissance_delivery_address">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_delivery_town">Ville</label>
                                <input id="actedenaissance_delivery_town" type="text" required
                                       name="actedenaissance_delivery_town">
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_delivery_postcode">Code postal</label>
                                <input id="actedenaissance_delivery_postcode" type="text" required
                                       name="actedenaissance_delivery_postcode">
                            </div>

                            <div class="dropdown-group form-group">
                                <label class="label" for="actedenaissance_delivery_country">Pays</label>
                                <select class="select-long" name="actedenaissance_delivery_country" required
                                        id="actedenaissance_delivery_country">
                                    <option value="">--</option>
                                    <option value="Afghanistan">Afghanistan (AFG)</option>
                                    <option value="Afrique du Sud">Afrique du Sud (ZAF)</option>
                                    <option value="Albanie">Albanie (ALB)</option>
                                    <option value="Algérie">Algérie (DZA)</option>
                                    <option value="Allemagne">Allemagne (DEU)</option>
                                    <option value="Andorre">Andorre (AND)</option>
                                    <option value="Angola">Angola (AGO)</option>
                                    <option value="Anguilla">Anguilla (AIA)</option>
                                    <option value="Antarctique">Antarctique (ATA)</option>
                                    <option value="Antigua-et-Barbuda">Antigua-et-Barbuda (ATG)</option>
                                    <option value="Antilles Néerlandaises">Antilles Néerlandaises (ANT)</option>
                                    <option value="Arabie Saoudite">Arabie Saoudite (SAU)</option>
                                    <option value="Argentine">Argentine (ARG)</option>
                                    <option value="Arménie">Arménie (ARM)</option>
                                    <option value="Aruba">Aruba (ABW)</option>
                                    <option value="Australie">Australie (AUS)</option>
                                    <option value="Autriche">Autriche (AUT)</option>
                                    <option value="Azerbaïdjan">Azerbaïdjan (AZE)</option>
                                    <option value="Bahamas">Bahamas (BHS)</option>
                                    <option value="Bahreïn">Bahreïn (BHR)</option>
                                    <option value="Bangladesh">Bangladesh (BGD)</option>
                                    <option value="Barbade">Barbade (BRB)</option>
                                    <option value="Bélarus">Bélarus (BLR)</option>
                                    <option value="Belgique">Belgique (BEL)</option>
                                    <option value="Belize">Belize (BLZ)</option>
                                    <option value="Bénin">Bénin (BEN)</option>
                                    <option value="Bermudes">Bermudes (BMU)</option>
                                    <option value="Bhoutan">Bhoutan (BTN)</option>
                                    <option value="Bolivie">Bolivie (BOL)</option>
                                    <option value="Bosnie-Herzégovine">Bosnie-Herzégovine (BIH)</option>
                                    <option value="Botswana">Botswana (BWA)</option>
                                    <option value="Brésil">Brésil (BRA)</option>
                                    <option value="Brunéi Darussalam">Brunéi Darussalam (BRN)</option>
                                    <option value="Bulgarie">Bulgarie (BGR)</option>
                                    <option value="Burkina Faso">Burkina Faso (BFA)</option>
                                    <option value="Burundi">Burundi (BDI)</option>
                                    <option value="Cambodge">Cambodge (KHM)</option>
                                    <option value="Cameroun">Cameroun (CMR)</option>
                                    <option value="Canada">Canada (CAN)</option>
                                    <option value="Cap-vert">Cap-vert (CPV)</option>
                                    <option value="Chili">Chili (CHL)</option>
                                    <option value="Chine">Chine (CHN)</option>
                                    <option value="Chypre">Chypre (CYP)</option>
                                    <option value="Colombie">Colombie (COL)</option>
                                    <option value="Comores">Comores (COM)</option>
                                    <option value="Costa Rica">Costa Rica (CRI)</option>
                                    <option value="Côte d'Ivoire">Côte d'Ivoire (CIV)</option>
                                    <option value="Croatie">Croatie (HRV)</option>
                                    <option value="Cuba">Cuba (CUB)</option>
                                    <option value="Danemark">Danemark (DNK)</option>
                                    <option value="Djibouti">Djibouti (DJI)</option>
                                    <option value="Dominique">Dominique (DMA)</option>
                                    <option value="Égypte">Égypte (EGY)</option>
                                    <option value="El Salvador">El Salvador (SLV)</option>
                                    <option value="Émirats Arabes Unis">Émirats Arabes Unis (ARE)</option>
                                    <option value="Équateur">Équateur (ECU)</option>
                                    <option value="Érythrée">Érythrée (ERI)</option>
                                    <option value="Espagne">Espagne (ESP)</option>
                                    <option value="Estonie">Estonie (EST)</option>
                                    <option value="États Fédérés de Micronésie">États Fédérés de Micronésie (FSM)</option>
                                    <option value="États-Unis">États-Unis (USA)</option>
                                    <option value="Éthiopie">Éthiopie (ETH)</option>
                                    <option value="Fédération de Russie">Fédération de Russie (RUS)</option>
                                    <option value="Fidji">Fidji (FJI)</option>
                                    <option value="Finlande">Finlande (FIN)</option>
                                    <option value="France" selected="selected">France (FRA)</option>
                                    <option value="Gabon">Gabon (GAB)</option>
                                    <option value="Gambie">Gambie (GMB)</option>
                                    <option value="Géorgie">Géorgie (GEO)</option>
                                    <option value="Géorgie du Sud et les Îles Sandwich du Sud">Géorgie du Sud et les Îles Sandwich du Sud (SGS)</option>
                                    <option value="Ghana">Ghana (GHA)</option>
                                    <option value="Gibraltar">Gibraltar (GIB)</option>
                                    <option value="Grèce">Grèce (GRC)</option>
                                    <option value="Grenade">Grenade (GRD)</option>
                                    <option value="Groenland">Groenland (GRL)</option>
                                    <option value="Guadeloupe">Guadeloupe (GLP)</option>
                                    <option value="Guam">Guam (GUM)</option>
                                    <option value="Guatemala">Guatemala (GTM)</option>
                                    <option value="Guinée">Guinée (GIN)</option>
                                    <option value="Guinée Équatoriale">Guinée Équatoriale (GNQ)</option>
                                    <option value="Guinée-Bissau">Guinée-Bissau (GNB)</option>
                                    <option value="Guyana">Guyana (GUY)</option>
                                    <option value="Guyane Française">Guyane Française (GUF)</option>
                                    <option value="Haïti">Haïti (HTI)</option>
                                    <option value="Honduras">Honduras (HND)</option>
                                    <option value="Hong-Kong">Hong-Kong (HKG)</option>
                                    <option value="Hongrie">Hongrie (HUN)</option>
                                    <option value="Île Bouvet">Île Bouvet (BVT)</option>
                                    <option value="Île Christmas">Île Christmas (CXR)</option>
                                    <option value="Île de Man">Île de Man (IMN)</option>
                                    <option value="Île Norfolk">Île Norfolk (NFK)</option>
                                    <option value="Îles (malvinas) Falkland">Îles (malvinas) Falkland (FLK)</option>
                                    <option value="Îles Åland">Îles Åland (ALA)</option>
                                    <option value="Îles Caïmanes">Îles Caïmanes (CYM)</option>
                                    <option value="Îles Cocos (Keeling)">Îles Cocos (Keeling) (CCK)</option>
                                    <option value="Îles Cook">Îles Cook (COK)</option>
                                    <option value="Îles Féroé">Îles Féroé (FRO)</option>
                                    <option value="Îles Heard et Mcdonald">Îles Heard et Mcdonald (HMD)</option>
                                    <option value="Îles Mariannes du Nord">Îles Mariannes du Nord (MNP)</option>
                                    <option value="Îles Marshall">Îles Marshall (MHL)</option>
                                    <option value="Îles Mineures Éloignées des États-Unis">Îles Mineures Éloignées des États-Unis (UMI)</option>
                                    <option value="Îles Salomon">Îles Salomon (SLB)</option>
                                    <option value="Îles Turks et Caïques">Îles Turks et Caïques (TCA)</option>
                                    <option value="Îles Vierges Britanniques">Îles Vierges Britanniques (VGB)</option>
                                    <option value="Îles Vierges des États-Unis">Îles Vierges des États-Unis (VIR)</option>
                                    <option value="Inde">Inde (IND)</option>
                                    <option value="Indonésie">Indonésie (IDN)</option>
                                    <option value="Iraq">Iraq (IRQ)</option>
                                    <option value="Irlande">Irlande (IRL)</option>
                                    <option value="Islande">Islande (ISL)</option>
                                    <option value="Israël">Israël (ISR)</option>
                                    <option value="Italie">Italie (ITA)</option>
                                    <option value="Jamahiriya Arabe Libyenne">Jamahiriya Arabe Libyenne (LBY)</option>
                                    <option value="Jamaïque">Jamaïque (JAM)</option>
                                    <option value="Japon">Japon (JPN)</option>
                                    <option value="Jordanie">Jordanie (JOR)</option>
                                    <option value="Kazakhstan">Kazakhstan (KAZ)</option>
                                    <option value="Kenya">Kenya (KEN)</option>
                                    <option value="Kirghizistan">Kirghizistan (KGZ)</option>
                                    <option value="Kiribati">Kiribati (KIR)</option>
                                    <option value="Koweït">Koweït (KWT)</option>
                                    <option value="L'ex-République Yougoslave de Macédoine">L'ex-République Yougoslave de Macédoine (MKD)</option>
                                    <option value="Lesotho">Lesotho (LSO)</option>
                                    <option value="Lettonie">Lettonie (LVA)</option>
                                    <option value="Liban">Liban (LBN)</option>
                                    <option value="Libéria">Libéria (LBR)</option>
                                    <option value="Liechtenstein">Liechtenstein (LIE)</option>
                                    <option value="Lituanie">Lituanie (LTU)</option>
                                    <option value="Luxembourg">Luxembourg (LUX)</option>
                                    <option value="Macao">Macao (MAC)</option>
                                    <option value="Madagascar">Madagascar (MDG)</option>
                                    <option value="Malaisie">Malaisie (MYS)</option>
                                    <option value="Malawi">Malawi (MWI)</option>
                                    <option value="Maldives">Maldives (MDV)</option>
                                    <option value="Mali">Mali (MLI)</option>
                                    <option value="Malte">Malte (MLT)</option>
                                    <option value="Maroc">Maroc (MAR)</option>
                                    <option value="Martinique">Martinique (MTQ)</option>
                                    <option value="Maurice">Maurice (MUS)</option>
                                    <option value="Mauritanie">Mauritanie (MRT)</option>
                                    <option value="Mayotte">Mayotte (MYT)</option>
                                    <option value="Mexique">Mexique (MEX)</option>
                                    <option value="Monaco">Monaco (MCO)</option>
                                    <option value="Mongolie">Mongolie (MNG)</option>
                                    <option value="Montserrat">Montserrat (MSR)</option>
                                    <option value="Mozambique">Mozambique (MOZ)</option>
                                    <option value="Myanmar">Myanmar (MMR)</option>
                                    <option value="Namibie">Namibie (NAM)</option>
                                    <option value="Nauru">Nauru (NRU)</option>
                                    <option value="Népal">Népal (NPL)</option>
                                    <option value="Nicaragua">Nicaragua (NIC)</option>
                                    <option value="Niger">Niger (NER)</option>
                                    <option value="Nigéria">Nigéria (NGA)</option>
                                    <option value="Niué">Niué (NIU)</option>
                                    <option value="Norvège">Norvège (NOR)</option>
                                    <option value="Nouvelle-Calédonie">Nouvelle-Calédonie (NCL)</option>
                                    <option value="Nouvelle-Zélande">Nouvelle-Zélande (NZL)</option>
                                    <option value="Oman">Oman (OMN)</option>
                                    <option value="Ouganda">Ouganda (UGA)</option>
                                    <option value="Ouzbékistan">Ouzbékistan (UZB)</option>
                                    <option value="Pakistan">Pakistan (PAK)</option>
                                    <option value="Palaos">Palaos (PLW)</option>
                                    <option value="Panama">Panama (PAN)</option>
                                    <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée (PNG)</option>
                                    <option value="Paraguay">Paraguay (PRY)</option>
                                    <option value="Pays-Bas">Pays-Bas (NLD)</option>
                                    <option value="Pérou">Pérou (PER)</option>
                                    <option value="Philippines">Philippines (PHL)</option>
                                    <option value="Pitcairn">Pitcairn (PCN)</option>
                                    <option value="Pologne">Pologne (POL)</option>
                                    <option value="Polynésie Française">Polynésie Française (PYF)</option>
                                    <option value="Porto Rico">Porto Rico (PRI)</option>
                                    <option value="Portugal">Portugal (PRT)</option>
                                    <option value="Qatar">Qatar (QAT)</option>
                                    <option value="République Arabe Syrienne">République Arabe Syrienne (SYR)</option>
                                    <option value="République Centrafricaine">République Centrafricaine (CAF)</option>
                                    <option value="République de Corée">République de Corée (KOR)</option>
                                    <option value="République de Moldova">République de Moldova (MDA)</option>
                                    <option value="République Démocratique du Congo">République Démocratique du Congo (COD)</option>
                                    <option value="République Démocratique Populaire Lao">République Démocratique Populaire Lao (LAO)</option>
                                    <option value="République Dominicaine">République Dominicaine (DOM)</option>
                                    <option value="République du Congo">République du Congo (COG)</option>
                                    <option value="République Islamique d'Iran">République Islamique d'Iran (IRN)</option>
                                    <option value="République Populaire Démocratique de Corée">République Populaire Démocratique de Corée (PRK)</option>
                                    <option value="République Tchèque">République Tchèque (CZE)</option>
                                    <option value="République-Unie de Tanzanie">République-Unie de Tanzanie (TZA)</option>
                                    <option value="Réunion">Réunion (REU)</option>
                                    <option value="Roumanie">Roumanie (ROU)</option>
                                    <option value="Royaume-Uni">Royaume-Uni (GBR)</option>
                                    <option value="Rwanda">Rwanda (RWA)</option>
                                    <option value="Sahara Occidental">Sahara Occidental (ESH)</option>
                                    <option value="Saint-Kitts-et-Nevis">Saint-Kitts-et-Nevis (KNA)</option>
                                    <option value="Saint-Marin">Saint-Marin (SMR)</option>
                                    <option value="Saint-Pierre-et-Miquelon">Saint-Pierre-et-Miquelon (SPM)</option>
                                    <option value="Saint-Siège (état de la Cité du Vatican)">Saint-Siège (état de la Cité du Vatican) (VAT)</option>
                                    <option value="Saint-Vincent-et-les Grenadines">Saint-Vincent-et-les Grenadines (VCT)</option>
                                    <option value="Sainte-Hélène">Sainte-Hélène (SHN)</option>
                                    <option value="Sainte-Lucie">Sainte-Lucie (LCA)</option>
                                    <option value="Samoa">Samoa (WSM)</option>
                                    <option value="Samoa Américaines">Samoa Américaines (ASM)</option>
                                    <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe (STP)</option>
                                    <option value="Sénégal">Sénégal (SEN)</option>
                                    <option value="Serbie-et-Monténégro">Serbie-et-Monténégro (SCG)</option>
                                    <option value="Seychelles">Seychelles (SYC)</option>
                                    <option value="Sierra Leone">Sierra Leone (SLE)</option>
                                    <option value="Singapour">Singapour (SGP)</option>
                                    <option value="Slovaquie">Slovaquie (SVK)</option>
                                    <option value="Slovénie">Slovénie (SVN)</option>
                                    <option value="Somalie">Somalie (SOM)</option>
                                    <option value="Soudan">Soudan (SDN)</option>
                                    <option value="Sri Lanka">Sri Lanka (LKA)</option>
                                    <option value="Suède">Suède (SWE)</option>
                                    <option value="Suisse">Suisse (CHE)</option>
                                    <option value="Suriname">Suriname (SUR)</option>
                                    <option value="Svalbard etÎle Jan Mayen">Svalbard etÎle Jan Mayen (SJM)</option>
                                    <option value="Swaziland">Swaziland (SWZ)</option>
                                    <option value="Tadjikistan">Tadjikistan (TJK)</option>
                                    <option value="Taïwan">Taïwan (TWN)</option>
                                    <option value="Tchad">Tchad (TCD)</option>
                                    <option value="Terres Australes Françaises">Terres Australes Françaises (ATF)</option>
                                    <option value="Territoire Britannique de l'Océan Indien">Territoire Britannique de l'Océan Indien (IOT)</option>
                                    <option value="Territoire Palestinien Occupé">Territoire Palestinien Occupé (PSE)</option>
                                    <option value="Thaïlande">Thaïlande (THA)</option>
                                    <option value="Timor-Leste">Timor-Leste (TLS)</option>
                                    <option value="Togo">Togo (TGO)</option>
                                    <option value="Tokelau">Tokelau (TKL)</option>
                                    <option value="Tonga">Tonga (TON)</option>
                                    <option value="Trinité-et-Tobago">Trinité-et-Tobago (TTO)</option>
                                    <option value="Tunisie">Tunisie (TUN)</option>
                                    <option value="Turkménistan">Turkménistan (TKM)</option>
                                    <option value="Turquie">Turquie (TUR)</option>
                                    <option value="Tuvalu">Tuvalu (TUV)</option>
                                    <option value="Ukraine">Ukraine (UKR)</option>
                                    <option value="Uruguay">Uruguay (URY)</option>
                                    <option value="Vanuatu">Vanuatu (VUT)</option>
                                    <option value="Venezuela">Venezuela (VEN)</option>
                                    <option value="Viet Nam">Viet Nam (VNM)</option>
                                    <option value="Wallis et Futuna">Wallis et Futuna (WLF)</option>
                                    <option value="Yémen">Yémen (YEM)</option>
                                    <option value="Zambie">Zambie (ZMB)</option>
                                    <option value="Zimbabwe">Zimbabwe (ZWE)</option>
                                </select>
                            </div>
                            <div class="input-group form-group">
                                <label class="label" for="actedenaissance_tel">Téléphone</label>
                                <input id="actedenaissance_tel" type="text" required name="actedenaissance_tel">
                            </div>
                            <div class="check-box-group form-group">
                                <input id="CGV[]" class="checkbox-input" type="checkbox" required value="Oui">
                                <label class="checkbox-label" for="CGV[]">
                                    En cliquant sur le bouton “Valider ma commande”, je déclare avoir lu et accepté
                                    les <a
                                        href="http://www.acte-naisssance-en-ligne.com/conditions-generales-de-ventes/">conditions
                                    générales</a> de la société Web Admin Global Services Ltd éditrice
                                    du service. Je valide ma demande d'assistance et j'accepte les frais d'accès
                                    au service d'assistance pour un euro ainsi que les frais de traitement
                                    administratifs de soixante neuf euros prélevés sur ma carte bancaire.
                                </label>
                            </div>
                        </div>
                        <div class="form-footer">
                            <div class="submit-button">
                                <button type="submit">
                                    <span class="price">1<i class="fa fa-eur"></i></span>
                                    <span class="text">Finaliser ma commande</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="block-title">
                            Vous faites un demande d’un extrait d’acte de naissance pour :
                        </div>
                        <ul class="entered-params entered-params-block-1">
                        </ul>
                        <ul class="entered-params entered-params-block-2">
                        </ul>
                        <div class="block-revert">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" data-tab-index="3"><i class="fa fa-pencil"></i> Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>