<?php

namespace Faker\Provider\fr_FR;

use Faker\Calculator\Luhn;

class Company extends \Faker\Provider\Company
{
    /**
     * @var array French company name formats.
     */
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    /**
     * @var array French catch phrase formats.
     */
    protected static $catchPhraseFormats = array(
        '{{catchPhraseNoun}} {{catchPhraseVerb}} {{catchPhraseAttribute}}',
    );

    /**
     * @var array French nouns (used by the catch phrase format).
     */
    protected static $noun = array(
        'la sécurité', 'le plaisir', 'le confort', 'la simplicité', "l'assurance", "l'art", 'le pouvoir', 'le droit',
        'la possibilité', "l'avantage", 'la liberté'
    );

    /**
     * @var array French verbs (used by the catch phrase format).
     */
    protected static $verb = array(
        'de rouler', "d'avancer", "d'évoluer", 'de changer', "d'innover", 'de louer', "d'atteindre vos buts",
        'de concrétiser vos projets'
    );

    /**
     * @var array End of sentences (used by the catch phrase format).
     */
    protected static $attribute = array(
        'de manière efficace', 'plus rapidement', 'plus facilement', 'plus simplement', 'en toute tranquilité',
        'avant-tout', 'autrement', 'naturellement', 'à la pointe', 'sans soucis', "à l'état pur",
        'à sa source', 'de manière sûre', 'en toute sécurité'
    );

    /**
     * @var array Company suffixes.
     */
    protected static $companySuffix = array('SA', 'S.A.', 'SARL', 'S.A.R.L.', 'SAS', 'S.A.S.', 'et Fils');

    protected static $siretNicFormats = array('####', '0###', '00#%');

    /**
     * Source - http://www.emploi.com/emploi/index-metiers.html
     */
    protected static $jobTitleFormat = array(
        'Acheteur', 'Acheteur d\'espaces pub', 'Acheteur Informatique Et Télécom', 'Actuaire', 'Adjoint administratif', 'Adjoint administratif d\'administration centrale', 'Adjoint administratif territorial', 'Adjoint technique de recherche et de formation', 'Adjoint territorial d\'animation', 'Administrateur base de données', 'Administrateur De Bases De Données', 'Administrateur de biens', 'Administrateur De Réseau', 'Administrateur judiciaire', 'Affréteur', 'Agent administratif et agent des services techniques', 'Agent d\'entretien d\'ascenseurs', 'Agent d\'exploitation des équipements audiovisuels', 'Agent de maintenance en mécanique', 'Agent de maîtrise', 'Agent de police municipale', 'Agent de réservation', 'Agent des services techniques d\'administration centrale', 'Agent des services techniques de préfecture', 'Agent des systèmes d\'information et de communication', 'Agent immobilier', 'Agent spécialisé de police technique et scientifique', 'Agent technique de recherche et de formation', 'Aide comptable', 'Aide de laboratoire', 'Aide médico-psychologique', 'Aide soignant', 'Aide soignant', 'Aide technique de laboratoire', 'Ambulancier', 'Analyste D\'Exploitation', 'Analyste financier', 'Analyste programmeur', 'Animateur', 'Animateur', 'Animateur de club de vacances', 'Animateur de formation', 'animateur environnement', 'Animateur socioculturel', 'Antiquaire', 'Archéologue', 'Architecte', 'Architecte d\'intérieur', 'Architecte De Bases De Données', 'Architecte De Réseau', 'Architecte De Système D\'Information', 'Architecte Matériel', 'Archiviste', 'Artiste-peintre', 'Assistant de conservation', 'Assistant de justice', 'Assistant de ressources humaines', 'Assistant de service social', 'Assistant de service social', 'Assistant des bibliothèques', 'Assistant ingénieur', 'Assistant médico-technique', 'Assistant socio-éducatif', 'Assistant son', 'Assistant vétérinaire', 'Assistante de gestion PMI/PME', 'Assistante maternelle', 'Assistante sociale', 'Astronome', 'Attaché d\'administration et d\'intendance', 'Attaché d\'administration hospitalière', 'Attaché d\'administration centrale', 'Attaché d\'administration scolaire et universitaire', 'Attaché de conservateur de patrimoine', 'Attaché de police', 'Attaché de préfecture', 'Attaché de presse', 'Auditeur Informatique', 'Auteur-scénariste multimédia', 'Auxiliaire de puériculture', 'Auxiliaire de vie sociale', 'Auxilliaire de vie', 'Avocat',
        'Barman', 'Bibliothécaire', 'Bibliothécaire adjoint spécialisé', 'Bijoutier joaillier', 'Billettiste', 'Bio-informaticien', 'Biologiste, Vétérinaire, Pharmacien', 'Bobinier de la construction électrique', 'Boucher', 'Boulanger', 'Brasseur malteur', 'Bronzier', 'Bûcheron',
        'Cadreur', 'Capitaine de Sapeur-Pompier', 'Carreleur', 'Carrossier réparateur', 'Caviste', 'Charcutier-traiteur', 'Chargé de clientèle', 'Chargé De Référencement', 'Chargé de relations publiques', 'Charpentier', 'Chaudronnier', 'Chef d\'atelier des industries graphiques', 'Chef de chantier', 'Chef de comptoir', 'Chef de fabrication', 'Chef de produits voyages', 'Chef De Projet - Project Manager', 'Chef de projet informatique', 'Chef de projet multimedia', 'Chef de publicité', 'Chef de rayon', 'Chef de service de Police municipale', 'Chef opérateur', 'Chercheur', 'Chercheur En Informatique', 'Chirurgien-dentiste', 'Chocolatier confiseur', 'Clerc de notaire', 'Coiffeur', 'Comédien', 'Commis de cuisine', 'Commissaire de police', 'Commissaire priseur', 'comportementaliste', 'Comptable', 'Concepteur De Jeux Électroniques', 'Concepteur rédacteur', 'Concierge d\'hôtel', 'Conducteur', 'Conducteur d\'appareils', 'Conducteur d\'autobus', 'Conducteur d\'automobile', 'Conducteur d\'engins en BTP', 'Conducteur de machine à imprimer d\'exploitation complexe', 'Conducteur de machine à imprimer simple', 'Conducteur de machines', 'Conducteur de machines agro', 'Conducteur de station d\'épuration', 'Conducteur de taxi', 'conducteur de train', 'Conducteur de travaux', 'Conducteur routier', 'Conseil En Assistance À Maitrise D\'Ouvrage', 'Conseiller d\'insertion et de probation', 'Conseiller d\'orientation', 'Conseiller d\'orientation-psychologue', 'Conseiller en développement touristique', 'Conseiller en économie sociale et familiale', 'Conseiller socio-éducatif', 'Conseiller territorial des activités physiques et sportives', 'Conseillers principaux d\'éducation', 'Conservateur de bibliothèque', 'Conservateur du patrimoine', 'Consultant Communication & Réseaux', 'Consultant E-Business', 'Consultant En Conduite Du Changement', 'Consultant En E-Learning', 'Consultant En Gestion De La Relation Client', 'Consultant En Organisation Des Systèmes D\'Information', 'Consultant En Technologies', 'Consultant Erp', 'Consultant Fonctionnel', 'Consultant Informatique', 'Contrôleur aérien', 'Contrôleur de gestion', 'Contrôleur de travaux', 'Contrôleur des services techniques du matériel', 'Contrôleur des systèmes d\'information et de communication', 'Contrôleur du travail', 'Contrôleur en électricité et électronique', 'Convoyeur de fonds', 'Coordinatrice de crèches', 'Correcteur', 'Costumier-habilleur', 'Courtier d\'assurances', 'Couvreur', 'Créateur de parfum', 'Cuisinier', 'Cyberdocumentaliste',
        'Danseur', 'Décorateur-scénographe', 'Délégué médical', 'Déménageur', 'Démographe', 'Dépanneur tv électroménager', 'Designer automobile', 'Dessinateur de presse', 'Dessinateur industriel', 'Détective privé', 'Développeur', 'Diététicien', 'Directeur artistique', 'Directeur Commercial', 'Directeur d\'établissement social et médico-social', 'Directeur d\'hôpital', 'Directeur d\'établissement d\'enseignement artistique', 'Directeur d\'établissement sanitaire et social', 'Directeur d\'office de tourisme', 'Directeur de collection', 'Directeur de parc naturel', 'Directeur De Projet', 'Directeur de ressources humaines', 'Directeur des soins', 'Directeur Des Systèmes D\'Information', 'Directeur Technique', 'Docker', 'Documentaliste', 'Douanier',
        'Ebéniste', 'Eboueur', 'Eco-conseiller', 'Ecotoxicologue', 'Educateur de jeunes enfants', 'Educateur spécialisé', 'Educateur sportif', 'Educateur technique spécialisé', 'Educateur territorial des activités physiques et sportives', 'Electricien de maintenance', 'Electricien du bâtiment', 'Electricien électronicien auto', 'Employé de groupage', 'Employé de restauration rapide', 'Employés du hall des hôtels', 'Encadreur', 'Enseignant Chercheur', 'Entraîneur sportif', 'Ergonome', 'Ergonome', 'Ergothérapeute', 'Esthéticienne-cosméticienne', 'Etalagiste décorateur', 'Ethnologue', 'Expert automobile', 'Expert comptable', 'Expert En Sécurité Informatique',
        'Facteur instrumental', 'Femme de chambre ou valet de chambre', 'Fleuriste', 'Forfaitiste', 'Formateur En Informatique',
        'Game designer', 'Garçon de café', 'Garde du corps', 'Garde-champêtre', 'Gardien d\'immeuble', 'Gardien de la paix', 'Gendarme', 'Géographe', 'Géologue', 'Géomètre topographe', 'Gérant d\'hôtel', 'Gestionnaire De Parc Micro-Informatique', 'Graphiste multimédia', 'Greffier', 'Guichetetier', 'Guide accompagnateur', 'Guide de haute montagne', 'Guide Interprète',
        'Horiculteur', 'Hot-Liner Technicien Help-Desk', 'Hôtesse d\'accueil', 'Hôtesse de l\'air', 'Hotliner', 'Huissier de justice',
        'Iconographe', 'Infirmier', 'Infirmier anesthésiste diplômé d\'Etat', 'Infirmier chef', 'Infirmier de bloc opératoire diplômé d\'Etat', 'Infirmier diplômé d\'Etat', 'Infirmiere', 'Ingénieur agroalimentaire', 'Ingénieur Commercial', 'Ingénieur d\'études sanitaires', 'Ingénieur d\'étude et de développement', 'Ingénieur d\'études', 'Ingénieur De Construction De Réseaux', 'Ingénieur de laboratoire', 'Ingénieur de production', 'Ingénieur de recherche', 'Ingénieur de recherche produit', 'Ingénieur Déploiement De Réseau', 'Ingénieur des services techniques du matériel', 'Ingénieur des travaux', 'Ingénieur Développement De Composants', 'Ingénieur Développement Logiciels', 'Ingénieur Développement Matériel Électronique', 'ingénieur du génie rural des eaux et forêts', 'Ingénieur du génie sanitaire', 'Ingénieur du son', 'Ingénieur en chef', 'Ingénieur Intégration', 'Ingénieur logistique', 'Ingénieur Qualités Méthodes', 'Ingénieur Sécurité', 'Ingénieur Support Technique', 'Ingénieur système-réseau', 'Ingénieur Systèmes Et Réseaux', 'Ingénieur Technico-Commercial', 'Ingénieur Validation', 'Inspecteur de l\'action sanitaire et sociale', 'Inspecteur des systèmes d\'information et de communication', 'Inspecteurs du travail', 'Installateur en télécommunications', 'Intégrateur Web', 'Interprète',
        'Jeunes sapeurs-pompiers', 'Journaliste', 'Journaliste d\'entreprise', 'Journaliste radio', 'Journaliste reporter', 'Juge d\'Instance', 'Juge d\'instruction', 'Juge de Grande Instance', 'Juge de l\'application des peines', 'Juge de l\'exécution', 'Juge des affaires familiales', 'Juge des enfants', 'Juriste Informatique',
        'Les adjoints administratifs de la police nationale', 'Les adjoints de sécurité', 'Les Directeurs de services pénitentiaires', 'Les greffiers', 'Les personnels de la protection judiciaire de la jeunesse', 'Libraire', 'Lieutenant de police', 'Lieutenant de sapeurs-pompiers', 'Livreur',
        'Maçon', 'Magasinier en chef des bibliothèques', 'Magistrat', 'Maître chien', 'Maître d\'hôtel', 'Maître de conférence', 'Maître ouvrier des établissements d\'enseignement', 'Maître-nageur sauveteur', 'Maîtres des établissements d\'enseignement privés sous contrat', 'Major de sapeur-pompier', 'Manipulateur d\'électroradiologie médicale', 'Manutentionnaire cariste', 'Maquettiste', 'Masseur kinésithérapeute', 'Mécanicien 2 roues', 'Mécanicien auto', 'Médecin', 'Médecin de l\'éducation nationale', 'Médecin inspecteur de santé publique', 'Médecin pharmacien de Sapeur-pompier', 'Médecin Territorial', 'Média-planner', 'Médiateur social', 'Menuisier', 'Météorologue', 'Métiers de la production', 'Moniteur d\'auto-école', 'Moniteur de ski', 'Moniteur éducateur', 'Monteur', 'Monteur électricien réseau edf', 'Monteur en installations thermiques chauffagiste', 'Musicien',
        'Netsurfer', 'Notaire',
        'Océanographe', 'Opérateur sur machine de production électrique', 'Opérateur territorial des activités physiques et sportives', 'Opératrice de saisie', 'Opticien lunetier', 'Orthophoniste', 'Orthoptiste', 'Ouvrier agricole', 'Ouvrier d\'entretien et d\'accueil (OEA)', 'Ouvrier d\'État', 'Ouvrier professionnel (OP)', 'Ouvrier professionnel, maître-ouvrier',
        'Paramétreur De Progiciels', 'Pâtissier', 'Paysagiste', 'Pédicure podologue', 'Peintre en bâtiment', 'Pépinieriste', 'Personnel de surveillance', 'Personnel pénitentaire d\'insertion et de probation', 'Personnel technique de l\'administration pénitentiaire', 'Pharmacien', 'Pharmacien inspecteur de santé publique', 'Photographe', 'Pigiste', 'Pilote d\'avion', 'Planneur stratégique', 'Plombier', 'Poissonnier', 'Préparateur en pharmacie', 'Préparateur en pharmacie avec Pub', 'Professeur agrégé', 'Professeur certifié', 'Professeur d\'arts plastiques', 'Professeur d\'éducation physique et sportive', 'Professeur d\'Université', 'Professeur de lycée et collège', 'Professeur de lycée professionnel', 'Professeur de musique', 'Professeur des écoles', 'Professeur FLE', 'Projectionniste', 'Prothésiste', 'Prothésiste dentaire', 'Psychanalyste', 'Psychologue', 'Psychomotricien', 'Puéricultrice',
        'Réalisateur', 'Réceptionniste', 'Rédacteur chef', 'Rédacteur en assurances', 'Rédacteur en chef', 'Rédacteur Technique', 'Rééducateur', 'Régisseur', 'Relieur-doreur', 'Responsable d\'agence bancaire', 'Responsable D\'Exploitation', 'Responsable D\'Un Système D\'Information Métier', 'Responsable de communication', 'Responsable De Compte', 'Responsable De Marketing Opérationnel', 'Responsable De Service Informatique', 'Responsable Des Études', 'Responsable logistique', 'Responsable marketing', 'Responsable Sécurité Informatique',
        'Sage-Femme', 'Sapeur pompier', 'Sapeur-pompier', 'Sapeur-Pompier Volontaire', 'Scripte', 'Secrétaire administratif', 'Secrétaire administratif des affaires sanitaires et sociales', 'Secrétaire assistante', 'Secrétaire de Mairie', 'Secrétaire de rédaction', 'Secrétaire juridique', 'Secrétaire médico-sociale', 'Secrétariat administratif d\'administration centrale', 'Sécurité civile', 'Serveur de restaurant', 'Skippeur', 'Sociologue', 'Solier moquettiste', 'Sommelier', 'Soudeur', 'Standardiste', 'Stenotypiste', 'Story-boarder', 'Styliste', 'Superviseur De Hot-Line',
        'Taxidermiste', 'Technicien', 'Technicien biologiste', 'Technicien Chimiste', 'Technicien de fabrication', 'Technicien de l\'éducation nationale', 'Technicien de l\'intervention sociale et familiale', 'Technicien de labo photo', 'Technicien de laboratoire', 'Technicien en analyses biomédicales', 'Technicien en mécanique', 'Technicien forestier', 'Technicien ligne haute tension', 'Technicien maintenance auto', 'Technicien Micro', 'Technicien Réseau', 'Technicien traitement déchets', 'Techniciens de recherche et de formation', 'Télévendeur', 'Toiletteur', 'Tôlier', 'Tourneur-fraiseur', 'Trader', 'Traducteur', 'Traffic Manager',
        'Urbaniste',
        'Vendeur en magasin', 'Vendeur En Micro-Informatique', 'Verrier', 'Vétérinaire', 'Viticulteur', 'VRP',
        'Webdesigner', 'Webmarketeur', 'Webmaster', 'Webmestre', 'Webplanner',
    );

    /**
     * Returns a random catch phrase noun.
     *
     * @return string
     */
    public function catchPhraseNoun()
    {
        return static::randomElement(static::$noun);
    }

    /**
     * Returns a random catch phrase attribute.
     *
     * @return string
     */
    public function catchPhraseAttribute()
    {
        return static::randomElement(static::$attribute);
    }

    /**
     * Returns a random catch phrase verb.
     *
     * @return string
     */
    public function catchPhraseVerb()
    {
        return static::randomElement(static::$verb);
    }

    /**
     * Generates a french catch phrase.
     *
     * @return string
     */
    public function catchPhrase()
    {
        do {
            $format = static::randomElement(static::$catchPhraseFormats);
            $catchPhrase = ucfirst($this->generator->parse($format));

            if ($this->isCatchPhraseValid($catchPhrase)) {
                break;
            }
        } while (true);

        return $catchPhrase;
    }

    /**
     * Generates a siret number (14 digits) that passes the Luhn check.
     *
     * @see http://fr.wikipedia.org/wiki/Syst%C3%A8me_d'identification_du_r%C3%A9pertoire_des_%C3%A9tablissements
     * @return string
     */
    public function siret($formatted = true)
    {
        $siret = $this->siren(false);
        $nicFormat = static::randomElement(static::$siretNicFormats);
        $siret .= $this->numerify($nicFormat);
        $siret .= Luhn::computeCheckDigit($siret);
        if ($formatted) {
            $siret = substr($siret, 0, 3) . ' ' . substr($siret, 3, 3) . ' ' . substr($siret, 6, 3) . ' ' . substr($siret, 9, 5);
        }

        return $siret;
    }

    /**
     * Generates a siren number (9 digits) that passes the Luhn check.
     *
     * @see http://fr.wikipedia.org/wiki/Syst%C3%A8me_d%27identification_du_r%C3%A9pertoire_des_entreprises
     * @return string
     */
    public function siren($formatted = true)
    {
        $siren = $this->numerify('%#######');
        $siren .= Luhn::computeCheckDigit($siren);
        if ($formatted) {
            $siren = substr($siren, 0, 3) . ' ' . substr($siren, 3, 3) . ' ' . substr($siren, 6, 3);
        }

        return $siren;
    }

    /**
     * @var array An array containing string which should not appear twice in a catch phrase.
     */
    protected static $wordsWhichShouldNotAppearTwice = array('sécurité', 'simpl');

    /**
     * Validates a french catch phrase.
     *
     * @param string $catchPhrase The catch phrase to validate.
     *
     * @return boolean (true if valid, false otherwise)
     */
    protected static function isCatchPhraseValid($catchPhrase)
    {
        foreach (static::$wordsWhichShouldNotAppearTwice as $word) {
            // Fastest way to check if a piece of word does not appear twice.
            $beginPos = strpos($catchPhrase, $word);
            $endPos = strrpos($catchPhrase, $word);

            if ($beginPos !== false && $beginPos != $endPos) {
                return false;
            }
        }

        return true;
    }

    /**
     * @link http://www.pole-emploi.fr/candidat/le-code-rome-et-les-fiches-metiers-@/article.jspz?id=60702
     * @note Randomly took 300 from this list
     */
    protected static $jobTitleFormat = array(
        'Agent d\'accueil',
        'Agent d\'enquêtes',
        'Agent d\'entreposage',
        'Agent de curage',
        'Agro-économiste',
        'Aide couvreur',
        'Aide à domicile',
        'Aide-déménageur',
        'Ambassadeur',
        'Analyste télématique',
        'Animateur d\'écomusée',
        'Animateur web',
        'Appareilleur-gazier',
        'Archéologue',
        'Armurier d\'art',
        'Armurier spectacle',
        'Artificier spectacle',
        'Artiste dramatique',
        'Aspigiculteur',
        'Assistant de justice',
        'Assistant des ventes',
        'Assistant logistique',
        'Assistant styliste',
        'Assurance',
        'Auteur-adaptateur',
        'Billettiste voyages',
        'Brigadier',
        'Bruiteur',
        'Bâtonnier d\'art',
        'Bûcheron',
        'Cameraman',
        'Capitaine de pêche',
        'Carrier',
        'Caviste',
        'Chansonnier',
        'Chanteur',
        'Chargé de recherche',
        'Chasseur-bagagiste',
        'Chef de fabrication',
        'Chef de scierie',
        'Chef des ventes',
        'Chef du personnel',
        'Chef géographe',
        'Chef monteur son',
        'Chef porion',
        'Chiropraticien',
        'Choréologue',
        'Chromiste',
        'Cintrier-machiniste',
        'Clerc hors rang',
        'Coach sportif',
        'Coffreur béton armé',
        'Coffreur-ferrailleur',
        'Commandant de police',
        'Commandant marine',
        'Commis de coupe',
        'Comptable unique',
        'Conception et études',
        'Conducteur de jumbo',
        'Conseiller culinaire',
        'Conseiller funéraire',
        'Conseiller relooking',
        'Consultant ergonome',
        'Contrebassiste',
        'Convoyeur garde',
        'Copiste offset',
        'Corniste',
        'Costumier-habilleur',
        'Coutelier d\'art',
        'Cueilleur de cerises',
        'Céramiste concepteur',
        'Danse',
        'Danseur',
        'Data manager',
        'Dee-jay',
        'Designer produit',
        'Diététicien conseil',
        'Diététique',
        'Doreur sur métaux',
        'Décorateur-costumier',
        'Défloqueur d\'amiante',
        'Dégustateur',
        'Délégué vétérinaire',
        'Délégué à la tutelle',
        'Désamianteur',
        'Détective',
        'Développeur web',
        'Ecotoxicologue',
        'Elagueur-botteur',
        'Elagueur-grimpeur',
        'Elastiqueur',
        'Eleveur d\'insectes',
        'Eleveur de chats',
        'Eleveur de volailles',
        'Embouteilleur',
        'Employé d\'accueil',
        'Employé d\'étage',
        'Employé de snack-bar',
        'Endivier',
        'Endocrinologue',
        'Epithésiste',
        'Essayeur-retoucheur',
        'Etainier',
        'Etancheur',
        'Etancheur-bardeur',
        'Etiqueteur',
        'Expert back-office',
        'Exploitant de tennis',
        'Extraction',
        'Facteur',
        'Facteur de clavecins',
        'Facteur de secteur',
        'Fantaisiste',
        'Façadier-bardeur',
        'Façadier-ravaleur',
        'Feutier',
        'Finance',
        'Flaconneur',
        'Foreur pétrole',
        'Formateur d\'italien',
        'Fossoyeur',
        'Fraiseur',
        'Fraiseur mouliste',
        'Frigoriste maritime',
        'Fromager',
        'Galeriste',
        'Gardien de résidence',
        'Garçon de chenil',
        'Garçon de hall',
        'Gendarme mobile',
        'Guitariste',
        'Gynécologue',
        'Géodésien',
        'Géologue prospecteur',
        'Géomètre',
        'Géomètre du cadastre',
        'Gérant d\'hôtel',
        'Gérant de tutelle',
        'Gériatre',
        'Hydrothérapie',
        'Hématologue',
        'Hôte de caisse',
        'Ingénieur bâtiment',
        'Ingénieur du son',
        'Ingénieur géologue',
        'Ingénieur géomètre',
        'Ingénieur halieute',
        'Ingénieur logistique',
        'Instituteur',
        'Jointeur de placage',
        'Juge des enfants',
        'Juriste financier',
        'Kiwiculteur',
        'Lexicographe',
        'Liftier',
        'Litigeur transport',
        'Logistique',
        'Logopède',
        'Magicien',
        'Manager d\'artiste',
        'Mannequin détail',
        'Maquilleur spectacle',
        'Marbrier-poseur',
        'Marin grande pêche',
        'Matelassier',
        'Maçon',
        'Maçon-fumiste',
        'Maçonnerie',
        'Maître de ballet',
        'Maïeuticien',
        'Menuisier',
        'Miroitier',
        'Modéliste industriel',
        'Moellonneur',
        'Moniteur de sport',
        'Monteur audiovisuel',
        'Monteur de fermettes',
        'Monteur de palettes',
        'Monteur en siège',
        'Monteur prototypiste',
        'Monteur-frigoriste',
        'Monteur-truquiste',
        'Mouleur sable',
        'Mouliste drapeur',
        'Mécanicien-armurier',
        'Médecin du sport',
        'Médecin scolaire',
        'Médiateur judiciaire',
        'Médiathécaire',
        'Net surfeur surfeuse',
        'Oenologue',
        'Opérateur de plateau',
        'Opérateur du son',
        'Opérateur géomètre',
        'Opérateur piquage',
        'Opérateur vidéo',
        'Ouvrier d\'abattoir',
        'Ouvrier serriste',
        'Ouvrier sidérurgiste',
        'Palefrenier',
        'Paléontologue',
        'Pareur en abattoir',
        'Parfumeur',
        'Parqueteur',
        'Percepteur',
        'Photographe d\'art',
        'Pilote automobile',
        'Pilote de soutireuse',
        'Pilote fluvial',
        'Piqueur en ganterie',
        'Pisteur secouriste',
        'Pizzaïolo',
        'Plaquiste enduiseur',
        'Plasticien',
        'Plisseur',
        'Poissonnier-traiteur',
        'Pontonnier',
        'Porion',
        'Porteur de hottes',
        'Porteur de journaux',
        'Portier',
        'Poseur de granit',
        'Posticheur spectacle',
        'Potier',
        'Praticien dentaire',
        'Praticiens médicaux',
        'Premier clerc',
        'Preneur de son',
        'Primeuriste',
        'Professeur d\'italien',
        'Projeteur béton armé',
        'Promotion des ventes',
        'Présentateur radio',
        'Pyrotechnicien',
        'Pédicure pour bovin',
        'Pédologue',
        'Pédopsychiatre',
        'Quincaillier',
        'Radio chargeur',
        'Ramasseur d\'asperges',
        'Ramasseur d\'endives',
        'Ravaleur-ragréeur',
        'Recherche',
        'Recuiseur',
        'Relieur-doreur',
        'Responsable de salle',
        'Responsable télécoms',
        'Revenue Manager',
        'Rippeur spectacle',
        'Rogneur',
        'Récupérateur',
        'Rédacteur des débats',
        'Régleur funéraire',
        'Régleur sur tour',
        'Sapeur-pompier',
        'Scannériste',
        'Scripte télévision',
        'Sculpteur sur verre',
        'Scénariste',
        'Second de cuisine',
        'Secrétaire juridique',
        'Semencier',
        'Sertisseur',
        'Services funéraires',
        'Solier-moquettiste',
        'Sommelier',
        'Sophrologue',
        'Staffeur',
        'Story boarder',
        'Stratifieur',
        'Stucateur',
        'Styliste graphiste',
        'Surjeteur-raseur',
        'Séismologue',
        'Technicien agricole',
        'Technicien bovin',
        'Technicien géomètre',
        'Technicien plateau',
        'Technicien énergie',
        'Terminologue',
        'Testeur informatique',
        'Toiliste',
        'Topographe',
        'Toréro',
        'Traducteur d\'édition',
        'Traffic manager',
        'Trieur de métaux',
        'Turbinier',
        'Téléconseiller',
        'Tôlier-traceur',
        'Vendeur carreau',
        'Vendeur en lingerie',
        'Vendeur en meubles',
        'Vendeur en épicerie',
        'Verrier d\'art',
        'Verrier à la calotte',
        'Verrier à la main',
        'Verrier à main levée',
        'Vidéo-jockey',
        'Vitrier',
    );
}
