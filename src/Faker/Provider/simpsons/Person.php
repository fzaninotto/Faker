<?php

namespace Faker\Provider\simpsons;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Bart', 'Homer', 'Ned', 'Charles', 'Robert', 'Jeffrey', 'Milhouse', 'Nelson', 'Abraham', 'Seymour', 'Tony', 'Moe', 'Jimbo', 'Hugo',
        'Gerald', 'Herbert', 'Chip', 'Ralph', 'Waylon', 'Gil', 'Kearney', 'Carl', 'Lenny', 'Dolph', 'Tony', 'Martin', 'Hank', 'Gary', 'Apu',
        'Snake', 'Frank', 'Duffman', 'Cletus', 'Clancy', 'Melvin', 'Barney', 'Otto', 'Hans', 'Marvin', 'Kirk', 'Artie', 'Nick', 'Orville', 'Virgil',
        'Troy', 'Todd', 'Rod', 'Rainier', 'Uter', 'Kang', 'Stu', 'Jeremy', 'Lou', 'Julius', 'Jonathan', 'Lionel', 'Jasper', 'Timothy', 'Plopper',
        'Joe', 'Russ', 'Dewey', 'Rex', 'Wendell', 'Prius', 'Sheldon', 'Raphael', 'Horatio', 'Sanjay', 'Gino', 'Drederick', 'Colin', 'Larry', 'Jebediah',
        'Wayne', 'Nedward', 'Herman', 'Hiram', 'Grady', 'Itchy', 'McBain', 'Iggy', 'Coltrane', 'Clifford', 'Kodos', 'Kent', 'Sam', 'Scratchy', 'Andy',
        'Howland', 'Louie', 'Leopold', 'Johnny', 'Lester', 'Arnie', 'Lewis', 'Cyrus', 'Langdon', 'Tyrone', 'Leon', 'Walt', 'Lyle', 'Jay', 'Richard',
        'Jake', 'Stampy', 'Hugh', 'Neil', 'Milton', 'Chester', 'Bashir', 'Roy', 'Ted', 'Declan', 'Akira', 'Zachary', 'Milo', 'Edmund', 'Gabbo', 'Matt'
    );

    protected static $firstNameFemale = array(
        'Edna', 'Maggie', 'Lisa', 'Maude', 'Marge', 'Shauna', 'Marcia', 'Jenda', 'Selma', 'Zia', 'Mona', 'Mary', 'Patty', 'Nikki', 'Laura', 'Ling', 'Abbie',
        'Jessica', 'Amber', 'Maggie', 'Jacqueline', 'Kumiko', 'Ginger', 'Darcy', 'Snowball', 'Jenny', 'Agnes', 'Eleanor', 'Greta', 'Eliza', 'Sherri', 'Terri',
        'Gina', 'Helen', 'Lurleen', 'Mindy', 'Kamala', 'Lindsey', 'Rita', 'Allison', 'Becky', 'Mabel', 'Ruth', 'Isabel', 'Sara', 'Melody', 'Sarah', 'Verity',
        'Maude', 'Shary', 'Doris', 'Yuma', 'Rosemary', 'Lucille', 'Nediana', 'Agnes', 'Julie', 'Taffy', 'Gloria', 'Samantha', 'Daphne', 'Annie', 'Lyla', 'Titania',
        'Bernice', 'Edwina', 'Beatrice', 'Carol', 'Martha', 'Clara', 'Gretchen', 'Alex', 'Erin', 'Bambi', 'Tabitha', 'Renee', 'Francine', 'Sylvia', 'Angelica',
        'Belle', 'Gabby', 'Evelyn', 'Claretta', 'Trixie', 'Tumi', 'Dorit', 'Zelda'
    );

    protected static $lastName = array(
        'Krabappel', 'Simpson', 'Flanders', 'Burns', 'Terwilliger', 'Muntz', 'Chalmers', 'Albertson', 'Bouvier', 'Skinner', 'Szyslak', 'Jones', 'Samson', 'Powell',
        'Wiggum', 'Smithers', 'Spuckler', 'Gunderson', 'Zzyzwicz', 'Starbeam', 'Prince', 'Jailbird', 'Nahasapeemapetilon', 'Scorpio', 'Lovejoy', 'Grimes', 'Spuckler',
        'Gumble', 'Van Houten', 'Monroe', 'Ziff', 'Abernathy', 'Riviera', 'McClure', 'Wolfcastle', 'Mackleberry', 'Zorker', 'Frink', 'Lumpkin', 'Beardly', 'Quimby',
        'Grimes', 'Cargill', 'Largo', 'Krustofsky', 'Sloane', 'Juniper', 'Bobbins', 'Tatum', 'Bergstrom', 'Freedman', 'Botzcowski', 'Brockman'
    );
}
