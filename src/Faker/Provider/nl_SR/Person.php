<?php

namespace Faker\Provider\nl_SR;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Aaron', 'Abdul', 'Abdullah', 'Abraham', 'Adam', 'Adonis', 'Adrain', 'Adrian', 'Adriel', 'Adrien', 'Afton', 'Agustin', 'Ahmad', 'Ahmed', 'Aidan', 'Aiden', 'Akeem', 'Al', 'Alan', 'Albert', 'Alberto', 'Albin', 'Alden', 'Alec', 'Alejandrin', 'Alek', 'Alessandro', 'Alex', 'Alexander', 'Alexandre', 'Alexandro', 'Alexie', 'Alexis', 'Alexys', 'Alexzander', 'Alf', 'Alfonso', 'Alfonzo', 'Alford', 'Alfred', 'Alfredo', 'Ali', 'Allan', 'Allen', 'Alphonso', 'Alvah', 'Alvis', 'Amani', 'Amari', 'Ambrose', 'Americo', 'Amir', 'Amos', 'Amparo', 'Anastacio', 'Anderson', 'Andre', 'Andres', 'Andrew', 'Andy', 'Angel', 'Angelo', 'Angus', 'Anibal', 'Ansel', 'Ansley', 'Anthony', 'Antone', 'Antonio', 'Antwan', 'Antwon', 'Arch', 'Archibald', 'Arden', 'Arely', 'Ari', 'Aric', 'Ariel', 'Arjun', 'Arlo', 'Armand', 'Armando', 'Armani', 'Arnaldo', 'Arne', 'Arno', 'Arnold', 'Arnoldo', 'Arnulfo', 'Aron', 'Art', 'Arthur', 'Arturo', 'Arvel', 'Arvid', 'Ashton', 'August', 'Augustus', 'Aurelio', 'Austen', 'Austin', 'Austyn', 'Avery', 'Axel', 'Ayden',
        'Bailey', 'Barney', 'Baron', 'Barrett', 'Barry', 'Bart', 'Bartholome', 'Barton', 'Baylee', 'Beau', 'Bell', 'Ben', 'Benedict', 'Benjamin', 'Bennett', 'Bennie', 'Benny', 'Benton', 'Bernard', 'Bernardo', 'Bernhard', 'Bernie', 'Berry', 'Berta', 'Bertha', 'Bertram', 'Bertrand', 'Bill', 'Billy', 'Blair', 'Blaise', 'Blake', 'Blaze', 'Bo', 'Bobbie', 'Bobby', 'Boris', 'Boyd', 'Brad', 'Braden', 'Bradford', 'Bradley', 'Bradly', 'Brady', 'Braeden', 'Brain', 'Brando', 'Brandon', 'Brandt', 'Brannon', 'Branson', 'Brant', 'Braulio', 'Braxton', 'Brayan', 'Brendan', 'Brenden', 'Brendon', 'Brennan', 'Brennon', 'Brent', 'Bret', 'Brett', 'Brian', 'Brice', 'Brock', 'Broderick', 'Brody', 'Brook', 'Brooks', 'Brown', 'Bruce', 'Bryce', 'Brycen', 'Bryon', 'Buck', 'Bud', 'Buddy', 'Buford', 'Burley', 'Buster',
        'Cade', 'Caden', 'Caesar', 'Cale', 'Caleb', 'Camden', 'Cameron', 'Camren', 'Camron', 'Camryn', 'Candelario', 'Candido', 'Carey', 'Carleton', 'Carlo', 'Carlos', 'Carmel', 'Carmelo', 'Carmine', 'Carol', 'Carroll', 'Carson', 'Carter', 'Cary', 'Casey', 'Casimer', 'Casimir', 'Casper', 'Ceasar', 'Cecil', 'Cedrick', 'Celestino', 'Cesar', 'Chad', 'Chadd', 'Chadrick', 'Chaim', 'Chance', 'Chandler', 'Charles', 'Charley', 'Charlie', 'Chase', 'Chauncey', 'Chaz', 'Chelsey', 'Chesley', 'Chester', 'Chet', 'Chris', 'Christ', 'Christian', 'Christop', 'Christophe', 'Christopher', 'Cicero', 'Cielo', 'Clair', 'Clark', 'Claud', 'Claude', 'Clay', 'Clemens', 'Clement', 'Cleo', 'Cletus', 'Cleve', 'Cleveland', 'Clifford', 'Clifton', 'Clint', 'Clinton', 'Clovis', 'Cloyd', 'Clyde', 'Coby', 'Cody', 'Colby', 'Cole', 'Coleman', 'Colin', 'Collin', 'Colt', 'Colten', 'Colton', 'Columbus', 'Conner', 'Connor', 'Conor', 'Conrad', 'Constantin', 'Consuelo', 'Cooper', 'Corbin', 'Cordelia', 'Cordell', 'Cornelius', 'Cornell', 'Cortez', 'Cory', 'Coty', 'Coy', 'Craig', 'Crawford', 'Cristian', 'Cristina', 'Cristobal', 'Cristopher', 'Cruz', 'Cullen', 'Curt', 'Curtis', 'Cyril', 'Cyrus',
        'Dagmar', 'Dale', 'Dallas', 'Dallin', 'Dalton', 'Dameon', 'Damian', 'Damien', 'Damion', 'Damon', 'Dan', 'Dane', 'D\'angelo', 'Dangelo', 'Danial', 'Danny', 'Dante', 'Daren', 'Darian', 'Darien', 'Dario', 'Darion', 'Darius', 'Daron', 'Darrel', 'Darrell', 'Darren', 'Darrick', 'Darrin', 'Darrion', 'Darron', 'Darryl', 'Darwin', 'Daryl', 'Dashawn', 'Dave', 'David', 'Davin', 'Davion', 'Davon', 'Davonte', 'Dawson', 'Dax', 'Dayne', 'Dayton', 'Dean', 'Deangelo', 'Declan', 'Dedric', 'Dedrick', 'Dee', 'Deion', 'Dejon', 'Dejuan', 'Delaney', 'Delbert', 'Dell','Delmer', 'Demarco', 'Demarcus', 'Demario', 'Demetrius', 'Demond', 'Denis', 'Dennis', 'Deon', 'Deondre', 'Deontae', 'Deonte', 'Dereck', 'Derek', 'Derick', 'Deron', 'Derrick', 'Deshaun', 'Deshawn', 'Desmond', 'Destin', 'Devan', 'Devante', 'Deven', 'Devin', 'Devon', 'Devonte', 'Devyn', 'Dewayne', 'Dewitt', 'Dexter', 'Diamond', 'Diego', 'Dillan', 'Dillon', 'Dimitri', 'Dino', 'Dion', 'Dock','Domenic', 'Domenick', 'Domenico', 'Domingo', 'Dominic', 'Don', 'Donald', 'Donato', 'Donavon', 'Donnell', 'Donnie', 'Donny', 'Dorcas', 'Dorian', 'Doris', 'Dorthy', 'Doug', 'Douglas', 'Doyle', 'Drake', 'Dudley', 'Duncan', 'Durward', 'Dustin', 'Dusty', 'Dwight', 'Dylan',
        'Earl', 'Earnest', 'Easter', 'Easton', 'Ed', 'Edd', 'Eddie', 'Edgar', 'Edgardo', 'Edison', 'Edmond', 'Edmund', 'Eduardo', 'Edward', 'Edwardo', 'Edwin', 'Efrain', 'Efren', 'Einar', 'Eino', 'Eladio', 'Elbert', 'Eldon', 'Eldred', 'Eleazar', 'Eli', 'Elian', 'Elias', 'Eliezer', 'Elijah', 'Eliseo', 'Elliot', 'Elliott', 'Ellis', 'Ellsworth', 'Elmer', 'Elmo', 'Elmore', 'Eloy', 'Elroy', 'Elton', 'Elvis', 'Elwin', 'Elwyn', 'Emanuel', 'Emerald', 'Emerson', 'Emery', 'Emil', 'Emile', 'Emiliano', 'Emilio', 'Emmanuel', 'Emmet', 'Emmett', 'Emmitt', 'Emory', 'Enid', 'Enoch', 'Enos', 'Enrico', 'Enrique', 'Ephraim', 'Eriberto', 'Eric', 'Erich', 'Erick', 'Erik', 'Erin', 'Erling', 'Ernest', 'Ernesto', 'Ernie', 'Ervin', 'Erwin', 'Esteban', 'Estevan', 'Ethan', 'Ethel', 'Eugene', 'Eusebio', 'Evan', 'Evans', 'Everardo', 'Everett', 'Evert', 'Ewald', 'Ewell', 'Ezekiel', 'Ezequiel', 'Ezra',
        'Fabian', 'Faustino', 'Fausto', 'Favian', 'Federico', 'Felipe', 'Felix', 'Felton', 'Fermin', 'Fern', 'Fernando', 'Ferne', 'Fidel', 'Filiberto',  'Finn', 'Flavio','Fletcher', 'Florencio', 'Florian', 'Floy', 'Floyd', 'Ford', 'Forest', 'Forrest', 'Foster', 'Francesco', 'Francis', 'Francisco', 'Franco', 'Frank', 'Frankie', 'Franz', 'Fred', 'Freddie', 'Freddy', 'Frederic', 'Frederick', 'Frederik', 'Fredrick', 'Fredy', 'Freeman', 'Friedrich', 'Fritz', 'Furman',
        'Gabe', 'Gabriel', 'Gaetano', 'Gage', 'Gardner', 'Garett', 'Garfield', 'Garland', 'Garnet', 'Garnett', 'Garret', 'Garrett', 'Garrick', 'Garrison', 'Garry', 'Garth', 'Gaston', 'Gavin', 'Gay', 'Gayle', 'Gaylord', 'Gene', 'General', 'Gennaro', 'Geo', 'Geoffrey', 'George', 'Geovanni', 'Geovanny', 'Geovany', 'Gerald', 'Gerard', 'Gerardo', 'Gerhard', 'German', 'Gerson', 'Gianni', 'Gideon', 'Gilbert', 'Gilberto', 'Giles', 'Gillian', 'Gino', 'Giovani', 'Giovanni', 'Giovanny','Giuseppe', 'Glen', 'Glennie', 'Godfrey', 'Golden', 'Gonzalo', 'Gordon', 'Grady', 'Graham', 'Grant', 'Granville', 'Grayce', 'Grayson', 'Green', 'Greg', 'Gregg', 'Gregorio', 'Gregory', 'Greyson', 'Griffin', 'Grover', 'Guido', 'Guillermo', 'Guiseppe', 'Gunnar', 'Gunner', 'Gus', 'Gussie', 'Gust', 'Gustave', 'Guy',
        'Hadley', 'Hailey', 'Hal', 'Haleigh', 'Haley', 'Halle', 'Hank', 'Hans', 'Hardy', 'Harley', 'Harmon', 'Harold', 'Harrison', 'Harry', 'Harvey', 'Haskell', 'Hassan', 'Hayden', 'Hayley', 'Hazel', 'Hazle', 'Heber', 'Hector', 'Helmer', 'Henderson', 'Henri', 'Henry', 'Herbert', 'Herman', 'Hermann', 'Herminio', 'Hershel', 'Hester', 'Hilario', 'Hilbert', 'Hillard', 'Hilton', 'Hipolito', 'Hiram', 'Hobart', 'Holden', 'Hollis', 'Horace', 'Horacio', 'Houston', 'Howard', 'Howell', 'Hoyt', 'Hubert', 'Hudson', 'Hugh', 'Humberto', 'Hunter', 'Hyman',
        'Ian', 'Ibrahim', 'Ignacio', 'Ignatius', 'Ike', 'Imani', 'Immanuel', 'Irving', 'Irwin', 'Isaac', 'Isac', 'Isadore', 'Isai', 'Isaiah', 'Isaias', 'Isidro', 'Ismael', 'Isom', 'Israel', 'Issac', 'Izaiah',
        'Jabari', 'Jace', 'Jacey', 'Jacinto', 'Jack', 'Jackson', 'Jacques', 'Jaden', 'Jadon', 'Jaeden', 'Jaiden', 'Jaime', 'Jairo', 'Jake', 'Jakob', 'Jaleel', 'Jalen', 'Jalon', 'Jamaal', 'Jamal', 'Jamar', 'Jamarcus', 'Jamel', 'Jameson', 'Jamey', 'Jamie', 'Jamil', 'Jamir', 'Jamison', 'Jan', 'Janick', 'Jaquan', 'Jared', 'Jaren', 'Jarod', 'Jaron', 'Jarred', 'Jarrell', 'Jarret', 'Jarrett', 'Jarrod', 'Jarvis', 'Jasen', 'Jasmin', 'Jason', 'Jasper', 'Javier', 'Javon', 'Javonte', 'Jay', 'Jayce', 'Jaycee',  'Jayde', 'Jayden', 'Jaydon', 'Jaylan', 'Jaylen', 'Jaylin', 'Jaylon', 'Jayme', 'Jayson', 'Jean', 'Jed', 'Jedediah', 'Jedidiah', 'Jeff', 'Jefferey', 'Jeffery', 'Jeffrey', 'Jeffry', 'Jennings', 'Jensen', 'Jerad', 'Jerald', 'Jeramie', 'Jeramy', 'Jerel', 'Jeremie', 'Jeremy', 'Jermain', 'Jermey', 'Jerod', 'Jerome', 'Jeromy', 'Jerrell', 'Jerrod', 'Jerrold', 'Jerry', 'Jess', 'Jesse', 'Jessie', 'Jessy', 'Jesus', 'Jett', 'Jettie', 'Jevon', 'Jillian', 'Jimmie', 'Jimmy', 'Jo', 'Joan', 'Joany', 'Joaquin', 'Jocelyn', 'Joe', 'Joel',  'Joesph', 'Joey', 'Johan', 'Johann', 'Johathan', 'John', 'Johnathan', 'Johnathon', 'Johnnie', 'Johnny', 'Johnpaul', 'Johnson', 'Jon', 'Jonas', 'Jonatan', 'Jonathan', 'Jonathon', 'Jordan', 'Jordi', 'Jordon', 'Jordy', 'Jordyn', 'Jorge', 'Jose', 'Joseph', 'Josh', 'Joshua', 'Joshuah', 'Josiah', 'Josue', 'Jovan', 'Jovani', 'Jovanny', 'Jovany', 'Judah', 'Judd', 'Judge', 'Judson', 'Jules', 'Julian', 'Julien', 'Julio', 'Julius', 'Junior', 'Junius', 'Justen', 'Justice', 'Juston', 'Justus', 'Justyn', 'Juvenal', 'Juwan',
        'Kacey', 'Kade', 'Kaden', 'Kadin', 'Kale', 'Kaleb', 'Kaleigh', 'Kaley', 'Kameron', 'Kamren', 'Kamron', 'Kamryn', 'Kane', 'Kareem', 'Karl', 'Karley', 'Karson', 'Kay', 'Kayden', 'Kayleigh', 'Kayley', 'Keagan', 'Keanu', 'Keaton', 'Keegan', 'Keeley', 'Keenan', 'Keith', 'Kellen', 'Kelley', 'Kelton', 'Kelvin', 'Ken', 'Kendall', 'Kendrick', 'Kennedi', 'Kennedy', 'Kenneth', 'Kennith', 'Kenny', 'Kenton', 'Kenyon', 'Keon', 'Keshaun', 'Keshawn', 'Keven', 'Kevin', 'Kevon', 'Keyon', 'Keyshawn', 'Khalid', 'Khalil', 'Kian', 'Kiel', 'Kieran', 'Kiley', 'Kim', 'King', 'Kip', 'Kirk', 'Kobe', 'Koby', 'Kody', 'Kolby', 'Kole', 'Korbin', 'Korey', 'Kory', 'Kraig', 'Kris', 'Kristian', 'Kristofer', 'Kristoffer', 'Kristopher', 'Kurt', 'Kurtis', 'Kyle', 'Kyleigh', 'Kyler',
        'Ladarius', 'Lafayette', 'Lamar', 'Lambert', 'Lamont', 'Lance', 'Landen', 'Lane', 'Laron', 'Larry', 'Larue', 'Laurel', 'Lavern', 'Laverna', 'Laverne', 'Lavon', 'Lawrence', 'Lawson', 'Layne', 'Lazaro', 'Lee', 'Leif', 'Leland', 'Lemuel', 'Lennie', 'Lenny', 'Leo', 'Leon', 'Leonard', 'Leonardo', 'Leone', 'Leonel', 'Leopold', 'Leopoldo', 'Lesley', 'Lester', 'Levi', 'Lew', 'Lewis', 'Lexus', 'Liam', 'Lincoln', 'Lindsey', 'Linwood', 'Lionel', 'Lisandro', 'Llewellyn', 'Lloyd', 'Logan', 'Lon', 'London', 'Lonnie', 'Lonny', 'Lonzo', 'Lorenz', 'Lorenza', 'Lorenzo', 'Louie', 'Louisa', 'Lourdes', 'Louvenia', 'Lowell', 'Loy', 'Loyal', 'Lucas', 'Luciano', 'Lucio', 'Lucious', 'Lucius', 'Ludwig', 'Luigi', 'Luis', 'Lukas', 'Lula', 'Luther', 'Lyric',
        'Mac', 'Manuela', 'Marc', 'Marcel', 'Marcelino', 'Marcellus', 'Marcelo', 'Marco', 'Marcos', 'Marcus', 'Mariano', 'Mario', 'Mark', 'Markus', 'Marley', 'Marlin', 'Marlon', 'Marques', 'Marquis', 'Marshall', 'Martin', 'Marty', 'Marvin', 'Mason', 'Mateo', 'Mathew', 'Mathias', 'Matt', 'Matteo', 'Maurice', 'Mauricio', 'Maverick', 'Mavis', 'Max', 'Maxime', 'Maximilian', 'Maximillian', 'Maximo', 'Maximus', 'Maxine', 'Maxwell', 'Maynard', 'Mckenna', 'Mckenzie', 'Mekhi', 'Melany', 'Melvin', 'Melvina', 'Merl', 'Merle', 'Merlin', 'Merritt', 'Mervin', 'Micah', 'Michael', 'Michale', 'Micheal', 'Michel', 'Miguel', 'Mike', 'Mikel', 'Milan', 'Miles', 'Milford', 'Miller', 'Milo', 'Milton', 'Misael', 'Mitchel', 'Mitchell', 'Modesto', 'Mohamed', 'Mohammad', 'Mohammed', 'Moises', 'Monroe', 'Monserrat', 'Monserrate', 'Montana', 'Monte', 'Monty', 'Morgan', 'Moriah', 'Morris', 'Mortimer', 'Morton', 'Mose', 'Moses', 'Moshe', 'Muhammad', 'Murl', 'Murphy', 'Murray', 'Mustafa', 'Myles',  'Myrl', 'Myron',
        'Napoleon', 'Narciso', 'Nash', 'Nasir', 'Nat', 'Nathan', 'Nathanael', 'Nathanial', 'Nathaniel', 'Nathen', 'Neal', 'Ned', 'Neil', 'Nels', 'Nelson', 'Nestor', 'Newell', 'Newton', 'Nicholas', 'Nicholaus', 'Nick', 'Nicklaus', 'Nickolas', 'Nico', 'Nicola', 'Nicolas', 'Nigel', 'Nikko', 'Niko', 'Nikolas', 'Nils', 'Noah', 'Noble', 'Noe', 'Noel', 'Nolan', 'Norbert', 'Norberto', 'Norris', 'Norval', 'Norwood',
        'Obie', 'Oda', 'Odell', 'Oliver', 'Omari', 'Omer', 'Orlando', 'Orlo', 'Orrin', 'Orval', 'Orville', 'Osbaldo', 'Osborne', 'Oscar', 'Osvaldo', 'Oswald', 'Oswaldo', 'Otho', 'Otis', 'Ottis', 'Otto', 'Owen',
        'Pablo', 'Paolo', 'Paris', 'Parker', 'Patrick', 'Paul', 'Paxton', 'Payton', 'Pedro', 'Percival', 'Percy', 'Perry', 'Pete', 'Peter', 'Peyton', 'Philip', 'Pierce', 'Pierre', 'Pietro', 'Porter', 'Presley', 'Preston', 'Price', 'Prince',
        'Quentin', 'Quincy', 'Quinn', 'Quinten', 'Quinton',
        'Rafael', 'Raheem', 'Rahul', 'Raleigh', 'Ralph', 'Ramiro', 'Ramon', 'Randal', 'Randall', 'Randi', 'Randy', 'Ransom', 'Raoul', 'Raphael', 'Rashad', 'Rashawn', 'Rasheed', 'Raul', 'Raven', 'Ray', 'Raymond', 'Raymundo', 'Reagan', 'Reece', 'Reed', 'Reese', 'Regan', 'Reggie', 'Reginald', 'Reid', 'Reilly','Reinhold', 'Remington', 'Rene', 'Reuben', 'Rex', 'Rey', 'Reyes', 'Reymundo', 'Reynold', 'Rhett', 'Rhiannon', 'Ricardo', 'Richard', 'Richie', 'Richmond', 'Rick', 'Rickey', 'Rickie', 'Ricky', 'Rico', 'Rigoberto', 'Riley', 'Robb', 'Robbie', 'Robert', 'Roberto', 'Robin', 'Rocio', 'Rocky', 'Rod', 'Roderick', 'Rodger', 'Rodolfo', 'Rodrick', 'Rodrigo', 'Roel', 'Rogelio', 'Roger', 'Rogers', 'Rolando', 'Rollin', 'Roman', 'Ron', 'Ronaldo', 'Ronny', 'Roosevelt', 'Rory', 'Rosario', 'Roscoe', 'Rosendo', 'Ross', 'Rowan', 'Rowland', 'Roy', 'Royal', 'Royce', 'Ruben', 'Rudolph', 'Rudy', 'Rupert', 'Russ', 'Russel', 'Russell', 'Rusty', 'Ryan', 'Ryann', 'Ryder', 'Rylan', 'Ryleigh', 'Ryley',
        'Sage', 'Saige', 'Salvador', 'Salvatore', 'Sam', 'Samir', 'Sammie', 'Sammy', 'Samson', 'Sanford', 'Santa', 'Santiago', 'Santino', 'Santos', 'Saul', 'Savion', 'Schuyler', 'Scot', 'Scottie', 'Scotty', 'Seamus', 'Sean', 'Sebastian', 'Sedrick', 'Selmer', 'Seth', 'Shad', 'Shane', 'Shaun', 'Shawn', 'Shayne', 'Sheldon', 'Sheridan', 'Sherman', 'Sherwood', 'Sid', 'Sidney', 'Sigmund', 'Sigrid', 'Sigurd', 'Silas', 'Sim', 'Simeon', 'Skye', 'Skylar', 'Sofia', 'Soledad', 'Solon', 'Sonny', 'Spencer', 'Stan', 'Stanford', 'Stanley', 'Stanton', 'Stefan', 'Stephan', 'Stephen', 'Stephon', 'Sterling', 'Steve', 'Stevie', 'Stewart', 'Stone', 'Stuart', 'Sven', 'Sydney', 'Sylvan', 'Sylvester',
        'Tad', 'Talon', 'Tanner', 'Tate', 'Tatum', 'Taurean', 'Tavares', 'Taylor', 'Ted', 'Terence', 'Terrance', 'Terrell', 'Terrence', 'Terrill', 'Terry', 'Tevin', 'Thad', 'Thaddeus', 'Theo', 'Theodore', 'Theron', 'Thomas', 'Thurman', 'Tillman', 'Timmothy', 'Timmy', 'Timothy', 'Tito', 'Titus', 'Tobin', 'Toby', 'Tod', 'Tom', 'Tomas', 'Tommie', 'Toney', 'Toni', 'Tony', 'Torey', 'Torrance', 'Torrey', 'Toy', 'Trace', 'Tracey', 'Travis', 'Travon', 'Tre', 'Tremaine', 'Tremayne', 'Trent', 'Trenton', 'Trever', 'Trevion', 'Trevor', 'Trey',  'Tristian', 'Tristin', 'Triston', 'Troy', 'Trystan', 'Turner','Tyler', 'Tyree', 'Tyreek', 'Tyrel', 'Tyrell', 'Tyrese', 'Tyrique', 'Tyshawn', 'Tyson',
        'Ubaldo', 'Ulices', 'Ulises', 'Unique', 'Urban', 'Uriah', 'Uriel',
        'Valentin', 'Van', 'Vance', 'Vaughn', 'Vern', 'Verner', 'Vernon', 'Vicente', 'Victor', 'Vidal', 'Vince', 'Vincent', 'Vincenzo', 'Vinnie', 'Virgil', 'Vito', 'Vladimir',
        'Wade', 'Waino', 'Waldo', 'Walker', 'Wallace', 'Walter', 'Walton', 'Ward', 'Warren', 'Watson', 'Waylon', 'Wayne', 'Webster', 'Weldon', 'Wellington', 'Wendell', 'Werner', 'Westley', 'Weston', 'Wilber', 'Wilbert', 'Wilburn', 'Wiley', 'Wilford', 'Wilfred', 'Wilfredo', 'Wilfrid', 'Wilhelm', 'Will', 'Willard', 'William', 'Willis', 'Willy', 'Wilmer', 'Wilson', 'Wilton', 'Winfield', 'Winston', 'Woodrow', 'Wyatt', 'Wyman',
        'Xavier', 'Xzavier', 'Xander',
        'Zachariah', 'Zachary', 'Zachery', 'Zack', 'Zackary', 'Zackery', 'Zakary', 'Zander', 'Zane', 'Zechariah', 'Zion',
    );

    protected static $firstNameFemale = array(
        'Abigail', 'Adriana', 'Adrianna', 'Agnes', 'Aida', 'Aimee', 'Aisha', 'Alexandra', 'Alice', 'Alicia', 'Amanda', 'Amara', 'Amelia', 'Amelie',
        'Amie', 'Amy', 'Ana', 'Angela', 'Angelina', 'Angeline', 'Anita', 'Anna', 'Annamarie', 'Anne', 'Annette', 'Annie', 'Antoinette', 'Antonetta',
        'Antonette', 'Antonia', 'April', 'Aracely', 'Ardella', 'Ariane',  'Arlene','Asha', 'Ashlee', 'Ashleigh', 'Ashley', 'Astrid', 'Audrey',
        'Augusta', 'Augustine', 'Aurelia', 'Aurelie', 'Aurore', 'Autumn', 'Ava', 'Avis', 'Ayana', 'Ayla', 'Aylin',
        'Baby', 'Bailee', 'Barbara', 'Beatrice', 'Beaulah', 'Bella', 'Belle', 'Berenice', 'Bernadette', 'Bernadine', 'Berneice', 'Bernice',
        'Berniece', 'Bernita', 'Bert', 'Beryl', 'Betty', 'Brenda', 'Brigitte',
        'Caitlyn', 'Caleigh', 'Cali', 'Calista', 'Callie', 'Camila', 'Camilla', 'Camille', 'Candice', 'Carissa', 'Carmen', 'Carolina',
        'Caroline', 'Catharine', 'Catherine', 'Cathrine', 'Cathryn', 'Cathy', 'Cayla', 'Cecelia', 'Cecile', 'Cecilia', 'Celestine',
        'Celia', 'Celine', 'Chanel', 'Chanelle', 'Charity', 'Charlene', 'Charlotte', 'Chasity', 'Chaya', 'Chelsea', 'Chelsie',
        'Cheyanne', 'Cheyenne', 'Chloe', 'Christa', 'Christelle', 'Christiana', 'Christina', 'Christine', 'Christy', 'Chyna',
        'Ciara', 'Cierra', 'Cindy', 'Citlalli', 'Claire', 'Clara', 'Clarabelle', 'Clare', 'Clarissa', 'Claudia', 'Claudie',
        'Claudine', 'Clementina', 'Clementine', 'Clemmie', 'Cleora', 'Cleta', 'Clotilde', 'Colleen', 'Concepcion', 'Connie',
        'Constance', 'Cora', 'Coralie', 'Cordia', 'Cordie', 'Corene', 'Corine', 'Corrine', 'Cortney', 'Courtney', 'Creola',
        'Cristal', 'Crystal', 'Crystel', 'Cydney', 'Cynthia',
        'Daniela', 'Daniella', 'Danielle', 'Daphne', 'Deborah', 'Diana', 'Dolores', 'Dominique',
        'Ebony', 'Eden', 'Edna', 'Eileen', 'Elaina', 'Elena', 'Elisa', 'Elisabeth', 'Eliza', 'Elizabeth', 'Ellen', 'Ellie', 'Elouise', 'Elsa',
        'Else', 'Elvie', 'Elza', 'Esmeralda', 'Esther', 'Eunice', 'Eva', 'Evalyn', 'Evangeline', 'Eve', 'Eveline', 'Evelyn', 'Everette', 'Evie',
        'Fabiola', 'Fae', 'Fannie', 'Fanny', 'Faye', 'Felicia', 'Fiona', 'Florence', 'Frances', 'Francisca',
        'Gabriella', 'Gabrielle', 'Gail', 'Genevieve', 'Gerda', 'Germaine', 'Gerry', 'Gertrude',  'Gina', 'Gisselle', 'Gladyce',
        'Gladys', 'Glenda', 'Glenna', 'Gloria', 'Golda', 'Grace', 'Gracie', 'Graciela', 'Gregoria', 'Greta', 'Gretchen', 'Guadalupe',
        'Gudrun', 'Gwen', 'Gwendolyn',
        'Hailee', 'Hailie', 'Halie', 'Hallie', 'Heidi', 'Helen', 'Helena', 'Helene', 'Hellen', 'Heloise', 'Henriette', 'Hilda', 'Hope',
        'Icie', 'Ida', 'Idell', 'Idella', 'Ila', 'Ilene', 'Iliana', 'Ima', 'Imelda', 'Imogene', 'Ines', 'Irma', 'Isabel', 'Isabell',
        'Isabella', 'Isabelle', 'Isobel', 'Itzel', 'Iva', 'Ivah', 'Ivory', 'Ivy', 'Izabella',
        'Jacinthe', 'Jackeline', 'Jackie', 'Jacklyn', 'Jacky', 'Jade', 'Jane', 'Janet', 'Janice',
        'Jeanette', 'Jeanie', 'Jeanne', 'Jena', 'Jenifer', 'Jennie', 'Jennifer', 'Jennyfer', 'Jermaine', 'Jessica', 'Jessika', 'Jessyca',
        'Jewel', 'Jewell', 'Joana', 'Joanie', 'Joanne', 'Joannie', 'Joanny', 'Jodie', 'Jody', 'Joelle', 'Johanna', 'Jolie', 'Jordane',
        'Josefa', 'Josefina', 'Josephine', 'Josiane', 'Josianne', 'Josie', 'Joy', 'Joyce', 'Juana', 'Juanita', 'Jude', 'Judy', 'Julia',
        'Juliana', 'Julianne', 'Julie', 'Juliet', 'June', 'Justina', 'Justine',
        'Kaela', 'Kaelyn','Karen', 'Karina', 'Katherine', 'Kathleen', 'Kaylee', 'Kimberly', 'Krista', 'Krystal', 'Krystel',
        'Lacey', 'Lacy', 'Laila', 'Laisha', 'Laney', 'Larissa', 'Laura', 'Lauren', 'Laurence', 'Laurie', 'Laurine', 'Laury', 'Lauryn',
        'Lavada', 'Lavina', 'Lavinia', 'Lavonne', 'Layla', 'Lea', 'Leann', 'Leanna', 'Leanne', 'Leslie', 'Letitia', 'Lina', 'Linda',
        'Lindsay', 'Linnea', 'Linnie', 'Lisa', 'Lisette', 'Litzy', 'Liza', 'Lizeth', 'Lizzie', 'Lois', 'Lola', 'Lolita', 'Loma', 'Lonie',
        'Lora', 'Loraine', 'Loren', 'Lorena', 'Lori', 'Lorine', 'Lorna', 'Lottie', 'Lou', 'Loyce', 'Lucie', 'Lucienne', 'Lucile', 'Lucinda',
        'Lucy', 'Ludie', 'Lue', 'Luella', 'Luisa', 'Lulu', 'Luna', 'Lupe', 'Lura', 'Lurline', 'Luz', 'Lyda', 'Lydia', 'Lyla', 'Lynn', 'Lysanne',
        'Mabel', 'Mabelle', 'Mable', 'Maci', 'Macie', 'Macy', 'Madaline', 'Magdalena', 'Malinda', 'Mandy', 'Marcella', 'Marcia',
        'Marguerite', 'Maria', 'Marie', 'Mariela', 'Marielle', 'Marisa', 'Marisol', 'Maritza', 'Marjorie', 'Marjory',
        'Marlee', 'Marlen', 'Marlene', 'Marquise', 'Marta', 'Martina', 'Martine', 'Mary', 'Maryam', 'Maryjane', 'Maryse', 'Mathilde',
        'Matilda', 'Matilde', 'Mattie', 'Maud', 'Maude', 'Maudie', 'Maureen', 'Maurine', 'Maxie', 'Maximillia', 'May', 'Maya', 'Maybell',
        'Maybelle', 'Maye', 'Maymie', 'Mayra', 'Mazie', 'Mckayla', 'Meagan', 'Meaghan', 'Meda', 'Megane', 'Meggie', 'Meghan', 'Melba',
        'Melisa', 'Melissa', 'Mellie', 'Melody', 'Melyna', 'Melyssa', 'Mercedes', 'Meredith', 'Mertie', 'Meta', 'Mia', 'Micaela',
        'Michaela', 'Michele', 'Michelle', 'Mikayla', 'Millie', 'Mina', 'Minerva', 'Minnie', 'Miracle', 'Mireille', 'Mireya', 'Missouri',
        'Misty', 'Mittie', 'Modesta', 'Mollie', 'Molly', 'Mona', 'Monica', 'Monique', 'Mossie', 'Mozell', 'Mozelle', 'Muriel', 'Mya',
        'Myah', 'Mylene', 'Myra', 'Myriam', 'Myrna', 'Myrtice', 'Myrtie', 'Myrtis', 'Myrtle',
        'Nadia', 'Nakia', 'Name', 'Nannie', 'Naomi', 'Naomie', 'Natalia', 'Natalie', 'Natasha', 'Nettie', 'Nicole', 'Nikita', 'Nikki',
        'Noemie', 'Nola',
        'Paige', 'Palma', 'Pamela', 'Pansy', 'Pascale', 'Pasquale', 'Pat', 'Patience', 'Patricia', 'Patsy', 'Pattie', 'Paula', 'Pauline',
        'Pearl', 'Pearlie', 'Pearline', 'Peggie', 'Petra', 'Priscilla',
        'Rachael', 'Rachel', 'Rachelle', 'Rafaela', 'Raina', 'Ramona', 'Raquel', 'Reanna', 'Reba', 'Rebeca', 'Rebecca',
        'Rebeka', 'Rebekah', 'Reina', 'Renee', 'Ressie', 'Reta', 'Retha', 'Retta', 'Reva', 'Reyna', 'Rhea', 'Rhianna', 'Rhoda', 'Rita',
        'River', 'Roberta', 'Robyn', 'Roma', 'Romaine', 'Rosa',
        'Rosanna', 'Rose', 'Rosella', 'Roselyn', 'Rosemarie', 'Rowena',
        'Roxane', 'Roxanne', 'Rubie', 'Ruby', 'Ruth', 'Sabrina', 'Sallie', 'Sally', 'Samantha', 'Sandra', 'Sandy', 'Sarah', 'Sarina',
        'Sasha', 'Serena', 'Shanelle', 'Shanna',
        'Shannon', 'Shanon', 'Sharon', 'Sheila', 'Shemar', 'Shirley', 'Shyann', 'Shyanne', 'Sibyl', 'Sienna', 'Sierra', 'Simone', 'Sincere',
        'Sister', 'Skyla', 'Sonia', 'Sonya', 'Sophia', 'Sophie', 'Stacey', 'Stacy', 'Stefanie', 'Stella', 'Stephania', 'Stephanie',
        'Stephany', 'Summer', 'Sunny', 'Susan', 'Susana', 'Susanna', 'Susie', 'Suzanne', 'Syble', 'Sydnee', 'Sydni', 'Sydnie', 'Sylvia',
        'Tabitha', 'Talia', 'Tamara', 'Tania', 'Tanya', 'Tatyana', 'Telly', 'Thea', 'Thelma', 'Theresa', 'Therese', 'Tiara',
        'Tiffany', 'Tina', 'Tracy', 'Tyra', 'Ursula',
        'Valerie', 'Vanessa', 'Veronica', 'Victoria', 'Virginia', 'Vivian', 'Viviane', 'Vivianne', 'Vivien', 'Vivienne',
        'Wanda', 'Wendy', 'Whitney', 'Wilma', 'Zoey'
    );

    protected static $lastName = array(
        'Tjong A Hung', 'Ho', 'Zhong', 'Pinas', 'Ali', 'Wolf', 'Schaap', 'Ijzer', 'Zeng', 'Wong', 'Woei', 'Lieuw', 'Brahim', 'Pocorni', 'Idoe', 'Cabenda', 'Overeem', 'Ghafoerkhan', 'Uiterloo', 'Ori', 'Plein', 'Ligeon', 'Hiwat', 'Gopal', 'Derby', 'Jessurun', 'Zweers', 'Rusland', 'Peneux', 'Neslo', 'Nederbiel', 'Leckie', 'Gajadhar', 'Gaddum', 'Fraenk', 'Bijlhout', 'Best', 'Bechan', 'Douglas', 'Punwasi', 'Nahar', 'Jaikaran', 'Druiventak', 'Hieralal', 'Cotino', 'Pigot', 'Fatehmahomed', 'Abrahams', 'Heerenveen', 'Glans', 'Bilkerdijk', 'Vigelandzoon', 'Rogers', 'Paidin', 'Lobato', 'Kroes', 'Coblijn', 'Caldeira', 'Souprayen', 'Kluivert', 'Ghafoer', 'Dragman', 'Wittenberg', 'Groenefelt', 'Bochove', 'Sapoen', 'Reumel', 'Neijhorst', 'Kuster', 'Asgarali', 'Nekrui'
    );

    protected static $suffix = array('Jr.', 'Sr.', 'MD', 'DDS', 'PhD', 'DVM');

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * @example '123-45-6789'
     */
    public static function id()
    {
        return bothify('??######');
    }
}