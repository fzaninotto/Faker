<?php

namespace Faker\Provider\fr_CI;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{lastName}} {{firstNameMale}}',
        '{{lastName}} {{firstNameMale}}',
        '{{lastName}} {{firstNameMale}}',
        '{{lastName}} {{firstNameMale}}',
        '{{lastName}} {{firstNameMale}}',
        '{{firstNameMale}} {{prefix}} {{lastName}}',
        '{{lastName}} {{firstNameMale}}-{{lastName}}',
        '{{firstNameMale}}-{{lastName}} {{firstNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{lastName}} {{firstNameFemale}}',
        '{{lastName}} {{firstNameFemale}}',
        '{{lastName}} {{firstNameFemale}}',
        '{{lastName}} {{firstNameFemale}}',
        '{{lastName}} {{firstNameFemale}}',
        '{{firstNameFemale}} {{prefix}} {{lastName}}',
        '{{lastName}} {{firstNameFemale}}-{{lastName}}',
        '{{firstNameFemale}}-{{lastName}} {{firstNameFemale}}',
    );

    protected static $firstNameMale = array(
        'Adrien', 'Aimé', 'Alain', 'Alexandre', 'Alfred', 'Alphonse', 'André', 'Antoine', 'Arthur', 'Auguste', 'Augustin',
        'Benjamin', 'Benoît', 'Bernard', 'Bertrand', 'Charles', 'Christophe', 'Daniel', 'David', 'Didier', 'Édouard', 'Émile',
        'Emmanuel', 'Éric', 'Étienne', 'Eugène', 'François', 'Franck', 'Frédéric', 'Fabrice', 'Gabriel', 'Georges', 'Gérard', 'Gilbert',
        'Gilles', 'Grégoire', 'Guillaume', 'Guy', 'William', 'Henri', 'Honoré', 'Hugues', 'Isaac', 'Jacques', 'Jean', 'Jérôme',
        'Joseph', 'Jules', 'Julien', 'Laurent', 'Léon', 'Louis', 'Luc', 'Lucas', 'Marc', 'Marcel', 'Martin', 'Matthieu',
        'Maurice', 'Michel', 'Nicolas', 'Noël', 'Olivier', 'Patrick', 'Paul', 'Philippe', 'Pierre', 'Raymond', 'Rémy', 'René',
        'Richard', 'Robert', 'Roger', 'Roland', 'Sébastien', 'Stéphane', 'Théodore', 'Théophile', 'Thibaut', 'Thibault', 'Thierry',
        'Thomas', 'Timothée', 'Tristan', 'Victor', 'Vincent', 'Xavier', 'Yves', 'Zacharie', 'Claude', 'Dominique',
        'Adama', 'Mohamed', 'Mamadou','Konan','Kouame', 'Kouadio','Yao','Koffi','Cherif','Amara','Issouf','Yaya', 'Ibrahim','Serges',
        'Alassane','Aboubakar','Souleyman','Bakary','Gaoussou'
    );

    protected static $firstNameFemale = array(
        'Adélaïde', 'Adèle', 'Adrienne', 'Agathe', 'Agnès', 'Aimée', 'Alexandrie', 'Alix', 'Alexandria', 'Alex', 'Alice',
        'Amélie', 'Anaïs', 'Anastasie', 'Andrée', 'Anne', 'Anouk', 'Antoinette', 'Arnaude', 'Astrid', 'Audrey', 'Aurélie',
        'Aurore', 'Bernadette', 'Brigitte', 'Caroline', 'Catherine', 'Cécile', 'Céline', 'Chantal','Charlotte', 'Christelle', 
        'Christiane', 'Christine', 'Claire', 'Claudine', 'Clémence', 'Colette', 'Constance','Corinne', 'Danielle', 'Denise', 
        'Diane', 'Dorothée', 'Édith', 'Éléonore', 'Élisabeth', 'Élise', 'Élodie', 'Émilie', 'Emmanuelle', 'Françoise', 
        'Frédérique', 'Gabrielle', 'Geneviève', 'Hélène', 'Henriette', 'Hortense', 'Inès', 'Isabelle', 'Jacqueline', 'Jeanne', 
        'Jeannine', 'Joséphine', 'Josette', 'Julie', 'Juliette', 'Laetitia', 'Laure', 'Laurence', 'Lorraine', 'Louise', 'Luce', 
        'Lucie', 'Madeleine', 'Manon', 'Marcelle', 'Margaux', 'Margaud', 'Margot', 'Marguerite', 'Margot', 'Margaret', 'Maggie', 
        'Marianne', 'Marie', 'Marine', 'Marthe', 'Martine', 'Maryse','Mathilde', 'Michèle', 'Michelle', 'Michelle', 'Monique', 
        'Nathalie', 'Nicole', 'Noémi', 'Océane','Odette', 'Olivie', 'Patricia', 'Paulette', 'Pauline', 'Pénélope', 'Philippine', 
        'Renée', 'Sabine', 'Simone', 'Sophie','Stéphanie', 'Susanne', 'Suzanne', 'Susan', 'Suzanne', 'Sylvie', 'Thérèse', 
        'Valentine', 'Valérie', 'Véronique','Victoire', 'Virginie', 'Zoé', 'Camille', 'Dominique',
        'Aya', 'Awa', 'Akissi','Amoin','Api','Apo', 'Bintou','Yedm','Adjoua','Lou','Ebah','Fatou','Fatoumata','Kadi','Maïmouna',
        'Fanta','Mariam','Esme','Yeble','Yehi','Metchm','Meley','Matogoman','Affou','Affouet'
    );

    protected static $lastName = array(
        'Akpa', 'Agnimel', 'Adjessi', 'Meless', 'Danho', 'Mobio', 'Afran', 'Yapi', 'Yapo', 'Achi', 'Atsain', 'Beda', 'Kadio',
        'Bossoh', 'Gboco', 'Gbaka', 'Obrou', 'Ebi', 'Ekissi', 'Hie', 'Hine', 'Bawa', 'Boyou', 'Koudou', 'Gnaoré', 'Digbeu', 
        'Zamble', 'Zanli', 'Meledje', 'Memel', 'Lasm', 'Zoukpo', 'Tapa', 'Krignon', 'Krioua', 'Sika', 'Aboussou', 'Amoussou', 
        'Djadja', 'Lorng', 'Outtara', 'Cissé', 'Fofana', 'Bakayoko', 'Touré', 'Bamba', 'Kone', 'Keïta', 'Borba', 'Agnissan', 
        'Kouame', 'Kouakou', 'Kouadio', 'Konan', 'Yao', 'Manzere', 'Atta', 'Brou', 'Ahissan', 'Lowes', 'Agnes', 'Soro', 
        'Coulibaly', 'Palenfo', 'Gueu', 'Gueï', 'Diomande', 'Metchro', 'Dosso', 'Pale', 'N\'guettia', 'Guet', 'Sialou', 
        'Houphouët', 'Boigny', 'Manzan', 'Titikpeu', 'Boya', 'Topka', 'Irié', 'Esmel', 'Essoh', 'Sebim', 'Sylla', 'Sery', 
        'Akoun', 'Aka', 'Alleh', 'Koffi', 'Komenan', 'Kamenan', 'Tebili', 'Drogba', 'Degre', 'Diagou', 'Gomon', 'Ayaké', 
        'Abrogoua', 'Nangui', 'Yedess', 'Akmel', 'Konate', 'Liade', 'Louga', 'Wognin', 'Soumahoro', 'Ahui', 'Ehui', 'Gbla', 
        'Kla', 'Zou', 'Zoulou', 'Die', 'Doweh', 'Dano', 'Essis', 'Essy', 'Bany', 'Konian', 'Affi', 'Graud', 'Bouaffo', 'Diakite', 
        'Bonzi', 'Bouazi', 'Sidibe', 'Dely', 'Bictogo', 'Adjessi', 'Dakoury', 'Gnakoury', 'Karamoko', 'Dabo', 'Ahounou', 
        'Tiemele', 'Gouamene', 'Sie', 'Anzian', 'Eivhet', 'Djonwan', 'Teké', 'Sansan', 'Kouao', 'Kablan', 'Dothy', 'Abé', 
        'Gnamien', 'Herve', 'Ahoussou', 'Mambo', 'Gon', 'Silué', 'Savané', 'Tia', 'Droh', 'Flindé', 'Siki ', 'Blon', 
        'Domoraud', 'Deli', 'Dangbeu', 'Zengbé', 'Noutoua', 'Youdé', 'Diampleon', 'Oule', 'Blé', 'Goudé', 'Zézé', 
        'Tapé', 'Gbro', 'Yablé', 'Kouadja', 'Diby', 'Gnrangbé', 'Baudoua', 'Lehie', 'Guessan', 'Houga', 'Boti', 
        'Thizier', 'Seya', 'Gnegbo', 'Zahi', 'Zadi', 'Zoro', 'Koko', 'Recolt', 'Assamoa', 'Seka', 'Aboua', 'Faye', 
        'Dondoh', 'Niamba', 'Assahi', 'Grah', 'Bleu', 'Diaby', 'Bayé', 'Gbai', 'Bailly', 'Boni', 'Bedi', 'Bedié', 
        'Bah', 'Allo', 'Niazalé', 'Kodja', 'Manglé', 'Agnero', 'Sepou', 'Kamano', 'Kata', 'Bouéka', 'Nabo', 'Fétigué', 
        'Dapa', 'Kigbafory', 'Tiékoura', 'Nambelessini', 'Dikebie', 'Abo', 'Sahoré', 'Kensi', 'Kassi', 'Djibo', 'Fanny', 
        'Zahiri', 'Guédé', 'Kipré', 'Donwahi', 'Yro', 'Zéan', 'Djike', 'Sess', 'Gnagne', 'Metchess', 'Metch', 'Sokou', 
        'Zokou', 'Yedagne', 'Yedess', 'Zouzoua', 'Gnepa', 'Kanon', 'M\'bra', 'M\'boua', 'Boua', 'Siriki', 'Komara','Duncan'
        );

    protected static $titleMale = array('M.', 'Dr.', 'Pr.', 'Me.');

    protected static $titleFemale = array('Mme.', 'Mlle', 'Dr.', 'Pr.', 'Me.');

    protected static $prefix = array('de', 'de la', 'Le', 'du');

    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

}
