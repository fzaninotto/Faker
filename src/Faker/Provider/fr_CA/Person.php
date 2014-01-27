<?php

namespace Faker\Provider\fr_CA;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}-{{lastName}}',
        '{{firstName}}-{{firstName}} {{lastName}}',
    );

    /**
     * This list is more or less the same as in \Faker\Provider\fr_FR\Person.php
     * Some common names were added and other removed.
     */
    protected static $firstName = array(
        'Adrien', 'Adrienne', 'Adèle', 'Agathe', 'Alice', 'Alysson', 'Aimé', 'Aimée', 'Alain', 'Albert', 'Aline',
        'Alexandre', 'Alexandra', 'Alfred', 'Alphonse', 'Amélie', 'Anaïs', 'André', 'Andrée', 'Ann', 'Anne', 'Annette',
        'Annie', 'Anouk', 'Antoine', 'Anthony', 'Arthur', 'Audrey', 'Auguste', 'Augustin',
        'Augustine', 'Arianne', 'Aurélie', 'Aurore',
        'Benjamin', 'Benoît', 'Benoit', 'Bernard', 'Bernadette', 'Bertrand', 'Brigitte',
        'Caroline', 'Catherine', 'Camille', 'Cécile', 'Céline', 'Chantal', 'Charles', 'Charlotte', 'Christian',
        'Christiane', 'Christine', 'Christophe', 'Claire', 'Claude', 'Claudine', 'Colette', 'Corrine',
        'Daniel', 'Danielle', 'David', 'Denis', 'Denise', 'Dominic', 'Dominique',
        'Édith', 'Édouard', 'Élisabeth', 'Élise', 'Élodie', 'Émile', 'Émilie', 'Emmanuel', 'Émanuelle', 'Éric', 'Érika',
        'Étienne', 'Eugène', 'Eugénie', 'Eve',
        'François', 'Françoise', 'Françis', 'Frédéric', 'Frédérique',
        'Gabriel', 'Gabrielle', 'Geneviève', 'Georges', 'Gérard', 'Gilbert', 'Gilles', 'Grégory', 'Guillaume', 'Guy',
        'Hélène', 'Henri', 'Honoré', 'Honorée', 'Hugues',
        'Isaac', 'Isabelle',
        'Jacques', 'Jacqueline', 'Jean', 'Jeanne', 'Jeannine', 'Jérôme', 'Joseph', 'Joséphine', 'Jules', 'Julie', 'Julien',
        'Laurent', 'Laurence', 'Léon', 'Louis', 'Louise', 'Luc', 'Luce', 'Lucie', 'Lucas',
        'Madeleine', 'Manon', 'Marc', 'Marcel', 'Margot', 'Marguerite', 'Maggie', 'Marianne', 'Marie', 'Marthe',
        'Martin', 'Martine', 'Maryse', 'Mathieu', 'Mathilde', 'Matthieu', 'Maurice', 'Michel', 'Michèle', 'Michelle',
        'Monique',
        'Nancy', 'Nathalie', 'Nicolas', 'Nicole', 'Noël', 'Noémie',
        'Olivier', 'Olivia', 'Odette',
        'Patrick', 'Patrice', 'Patricia', 'Paul', 'Paule', 'Paulette', 'Pauline', 'Pénélope', 'Philippe', 'Pierre',
        'Raymond', 'Rémy', 'René', 'Renée', 'Richard', 'Robert', 'Roger', 'Roland', 'Rolande',
        'Sébastien', 'Simone', 'Sophie', 'Stéphane', 'Stéphanie', 'Susanne', 'Suzanne', 'Sylvie',
        'Théo', 'Théophile', 'Thérèse', 'Thierry', 'Thomas', 'Timothée', 'Tristan',
        'Valérie', 'Véronique', 'Victor', 'Vincent', 'Virginie',
        'William',
        'Xavier',
        'Yves', 'Yvon', 'Yvonne', 'Yvan',
        'Zacharie', 'Zoé',
    );

    /**
     * These last names come from this list of most common family names in Québec (1 to 130)
     * http://fr.wikipedia.org/wiki/Liste_des_noms_de_famille_les_plus_courants_au_Québec
     */
    protected static $lastName = array(
        'Allard', 'Arsenault', 'Audet',
        'Beaudoin', 'Beaulieu', 'Bédard', 'Bélanger', 'Benoît', 'Bergeron', 'Bernard', 'Bernier', 'Bertrand', 'Bérubé',
        'Bilodeau', 'Blais', 'Blanchette', 'Boisvert', 'Boivin', 'Bolduc', 'Bouchard', 'Boucher', 'Boudreau',
        'Caron', 'Carrier', 'Champagne', 'Charbonneau', 'Cloutier', 'Côté', 'Couture', 'Cyr',
        'Demers', 'Deschênes', 'Desjardins', 'Desrosiers', 'Dion', 'Dionne', 'Drouin', 'Dubé', 'Dubois', 'Dufour', 'Dupuis',
        'Fillion', 'Fontaine', 'Fortier', 'Fortin', 'Fournier',
        'Gagné', 'Gagnon', 'Gaudreault', 'Gauthier', 'Giguère', 'Gilbert', 'Gingras', 'Girard', 'Giroux', 'Goulet',
        'Gosselin', 'Gravel', 'Grenier', 'Guay',
        'Hamel', 'Harvey', 'Hébert', 'Houle',
        'Jean', 'Jacques',
        'Labelle', 'Lachance', 'Lacroix', 'Lalonde', 'Lambert', 'Landry', 'Langlois', 'Lapierre', 'Lapointe', 'Larouche',
        'Lauzon', 'Lavoie', 'Leblanc', 'Leduc', 'Leclerc', 'Lefebvre', 'Legault', 'Lemay', 'Lemieux', 'Lepage', 'Lessard',
        'Lévesque',
        'Martel', 'Martin', 'Ménard', 'Mercier', 'Michaud', 'Moreau', 'Morin',
        'Nadeau', 'Nguyen',
        'Ouellet',
        'Paquette', 'Paradis', 'Parent', 'Pelletier', 'Perreault', 'Perron', 'Picard', 'Plante', 'Poirier', 'Poulin',
        'Proulx',
        'Raymond', 'Renaud', 'Richard', 'Rioux', 'Robert', 'Rousseau', 'Roy',
        'Savard', 'Simard', 'St-Pierre',
        'Tardif', 'Tessier', 'Thériault', 'Therrien', 'Thibault', 'Tremblay', 'Trudel', 'Turcotte',
        'Vachon', 'Vaillancourt', 'Villeneuve'
    );
}
