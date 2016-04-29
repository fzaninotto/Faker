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
    protected static $companySuffix = array('SA', 'S.A.', 'SARL', 'S.A.R.L.', 'S.A.S.', 'et Fils');

    protected static $siretNicFormats = array('####', '0###', '00#%');

    /**
     * Source - https://fr.wikipedia.org/wiki/Cat%C3%A9gorie:M%C3%A9tier_par_secteur
     */
    protected static $jobTitleFormat = array(
        'Accompagnateur du changement', 'Actuaire', 'Adjoint de sécurité', 'Administrateur de bases de données', 'Administrateur de société', 'Administrateur judiciaire', 'Administrateur sécurité', 'Agent de calcul', 'Agent de change', 'Agent de police judiciaire', 'Agent de police judiciaire adjoint', 'Agent général d\'assurance', 'Agréé près le tribunal de commerce', 'Analyste (informatique)', 'Analyste d\'affaires', 'Architecte de données', 'Architecte informatique', 'Architecte logiciel', 'Archéologue', 'Assembleur d\'ordinateur', 'Assermentation', 'Assesseur', 'Asset manager', 'Assistant de justice', 'Assistant hospitalo-universitaire', 'Assistant juridique', 'Attaché de recherche clinique', 'Avocat de la couronne', 'Avoué', 'Banquier', 'Banquier d\'affaires', 'Barrister', 'Bio-informaticien', 'Bio-informaticien', 'Biologiste', 'Bourreau', 'Brandon Wade', 'Brigade de vérification des comptabilités informatisées', 'Bureau de change', 'Cadet de la République', 'Cambiste', 'Certified Accountant', 'Certified Management Accountant', 'Changeur', 'Chargé d\'affaires', 'Chargé de clientèle', 'Chercheur', 'Chief Data Officer', 'Chief Data Officer', 'Chimiste', 'Citoyen assesseur en droit français', 'Clerc de commissaire-priseur', 'Clerc de notaire', 'Commercial (métier)', 'Commissaire aux comptes', 'Commissaire-priseur', 'Comptabilité d\'entreprise', 'Comptable', 'Comptable agréé', 'Concepteur', 'Concepteur développeur informatique', 'Conférence Saint-Yves', 'Conseil des ventes volontaires de meubles aux enchères publiques', 'Conseiller de cour d\'appel', 'Conseiller de la reine', 'Conseiller du salarié', 'Conseiller en gestion de patrimoine', 'Conseiller en investissements financiers', 'Conseiller financier', 'Conseiller fiscal', 'Consolideur', 'Consultant', 'Contrôleur de gestion', 'Contrôleur de gestion', 'Corps supérieur des avocats de l\'État', 'Courtage en ligne', 'Courtier d\'assurances', 'Courtier en bourse', 'Courtier en crédits', 'Courtier en services bancaires et d\'investissement', 'Courtier piqueur juré', 'Credit Manager', 'Crown Prosecution Service', 'Demomaker', 'Directeur administratif et financier', 'Directeur administratif et financier', 'Directeur commercial', 'Directeur d\'agence', 'Directeur de l\'exploitation', 'Directeur de la création', 'Directeur de marché', 'Directeur de réseau d\'agences', 'Directeur de thèse', 'Directeur des engagements', 'Directeur des systèmes d\'information', 'Directeur des systèmes d\'information', 'Directeur général', 'Directeur général délégué', 'Dirigeant', 'Doctorant', 'Domaineur', 'Détective', 'Développeur', 'Développeur graphique', 'Développeur logiciel', 'ESOMAR', 'Employé de banque', 'Entrepreneur', 'Expert judiciaire', 'Exploitation informatique', 'Fonctions dans la maîtrise d\'ouvrage', 'Formateur en informatique', 'Friendly User Test', 'Garde chasse particulier', 'Garde des Sceaux', 'Garde particulier', 'Gardien de prison', 'Gestionnaire de données biomédicales', 'Greffier', 'Géologue', 'Huissier de justice', 'Hébergement de nom de domaine', 'Infogérance', 'Informaticien', 'Informaticien de gestion', 'Ingénierie culturelle', 'Ingénierie patrimoniale', 'Ingénierie touristique et culturelle', 'Ingénieur commercial', 'Ingénieur financier', 'Ingénieur système', 'Institut européen de l\'expertise et de l\'expert', 'Institute of Management Accountants', 'Intermédiaire bancaire', 'Intermédiaire en financement participatif', 'Intermédiaire en opérations de banque et en services de paiement', 'Intermédiaire financier', 'Intégrateur', 'Intégrateur web', 'Juge', 'Juge aux affaires familiales', 'Juge d\'instance', 'Juge de droit', 'Juge de l\'application des peines', 'Juge des tutelles', 'Juge placé auprès du premier président d\'une cour d\'appel', 'Juge-commissaire', 'Juricomptabilité', 'Juriste', 'Juriste de banque', 'Lecteur (université)', 'Magistrat', 'Mandat ad hoc', 'Mandataire judiciaire', 'Mandataire judiciaire à la protection des majeurs', 'Mayaniste', 'Maître de conférences des universités – praticien hospitalier', 'Maître des requêtes', 'Maîtrise d\'ouvrage', 'Maîtrise d\'œuvre', 'Mentorat d\'entreprise', 'Miseur', 'Modérateur (internet)', 'Médiamaticien', 'Médiateur (métier)', 'Mésoaméricaniste', 'Métiers du web', 'Notaire', 'Notaire public', 'Officier de police judiciaire', 'Officier du ministère public', 'Officier ministériel', 'Opérateur de marché', 'Paléontologue', 'Parajuriste', 'Paralégal', 'Personnalité du monde des affaires', 'Peseurs jurés de Marseille', 'Physicien', 'Pia Poppenreiter', 'Pilote opérationnel d\'exploitation', 'Planificateur financier', 'Premier président du Parlement de Paris', 'Procureur', 'Procureur d\'État', 'Procureur général', 'Procureur général associé des États-Unis', 'Professeur titulaire', 'Président-directeur général', 'Psychologue', 'Receveur (impôt)', 'Remisier', 'Responsable d\'exploitation', 'Responsable de la sécurité des systèmes d\'information', 'Rédacteur de documentation', 'Rédacteur web', 'Réviseur d\'entreprise', 'SORAP', 'Sciences biomédicales', 'Société marocaine d\'ingénierie touristique', 'Solliciteur', 'Substitut du procureur général', 'Surveillance (informatique)', 'Syntec', 'Syntec Conseil en Management', 'Technicien d\'assistance en informatique', 'Technicien de laboratoire', 'Technicien en informatique', 'Technicien supérieur de support en informatique', 'Technicien supérieur en réseaux informatiques et télécommunications', 'Technicien supérieur gestionnaire de ressources informatiques', 'Testeur', 'Titularisation (éducation)', 'Trésorier', 'Trésorier', 'Webmestre', 'Échevinage', 'Établissement financier');

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
}
