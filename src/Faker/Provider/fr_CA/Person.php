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

    protected static $lastName = array(
        'Allard', 'Arsenault', 'Audet',
        'Beaudoin', 'Beaulieu', 'Bédard', 'Bélanger', 'Bergeron', 'Bernier', 'Bérubé', 'Blais', 'Boivert', 'Bolduc',
        'Bouchard', 'Boucher', 'Boudreau',
        'Caron', 'Cloutier', 'Côté', 'Couture', 'Cyr',
        'Demers', 'Desjardins', 'Dion', 'Dubé', 'Dufour',
        'Fortin', 'Fournier',
        'Gagné', 'Gagnon', 'Gauthier', 'Girard', 'Gosselin', 'Grenier',
        'Hamel', 'Hébert',
        'Jean',
        'Lachance', 'Landry', 'Langlois', 'Lapointe', 'Lavoie', 'Leblanc', 'Leclerc', 'Lefebvre', 'Lemieux', 'Lessard',
        'Lévesque',
        'Martel', 'Martin', 'Ménard', 'Mercier', 'Michaud', 'Morin',
        'Nadeau',
        'Ouellet',
        'Paquette', 'Parent', 'Pelletier', 'Perreault', 'Perron', 'Plante', 'Poirier', 'Poulin', 'Proulx',
        'Richard', 'Roy',
        'Savard', 'Simard', 'St-Pierre',
        'Therrien', 'Thibault', 'Tremblay', 'Turcotte',
    );
}
