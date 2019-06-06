<?php

namespace Faker\Provider\en_GB;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
    );

    /**
     * @link http://www.ons.gov.uk/ons/rel/vsob1/baby-names--england-and-wales/2013/index.html
     */
    protected static $firstNameMale = array(
        'Aaron', 'Adam', 'Adrian', 'Aiden', 'Alan', 'Alex', 'Alexander', 'Alfie', 'Andrew', 'Andy', 'Anthony', 'Archie', 'Arthur',
        'Barry', 'Ben', 'Benjamin', 'Bradley', 'Brandon', 'Bruce',
        'Callum', 'Cameron', 'Charles', 'Charlie', 'Chris', 'Christian', 'Christopher', 'Colin', 'Connor', 'Craig',
        'Dale', 'Damien', 'Dan', 'Daniel', 'Darren', 'Dave', 'David', 'Dean', 'Dennis', 'Dominic', 'Duncan', 'Dylan',
        'Edward', 'Elliot', 'Elliott', 'Ethan',
        'Finley', 'Frank', 'Fred', 'Freddie',
        'Gary', 'Gavin', 'George', 'Gordon', 'Graham', 'Grant', 'Greg',
        'Harley', 'Harrison', 'Harry', 'Harvey', 'Henry',
        'Ian', 'Isaac',
        'Jack', 'Jackson', 'Jacob', 'Jake', 'James', 'Jamie', 'Jason', 'Jayden', 'Jeremy', 'Jim', 'Joe', 'Joel', 'John', 'Jonathan', 'Jordan', 'Joseph', 'Joshua',
        'Karl', 'Keith', 'Ken', 'Kevin', 'Kieran', 'Kyle',
        'Lee', 'Leo', 'Lewis', 'Liam', 'Logan', 'Louis', 'Lucas', 'Luke',
        'Mark', 'Martin', 'Mason', 'Matthew', 'Max', 'Michael', 'Mike', 'Mohammed', 'Muhammad',
        'Nathan', 'Neil', 'Nick', 'Noah',
        'Oliver', 'Oscar', 'Owen',
        'Patrick', 'Paul', 'Pete', 'Peter', 'Philip',
        'Quentin',
        'Ray', 'Reece', 'Riley', 'Rob', 'Ross', 'Ryan',
        'Samuel', 'Scott', 'Sean', 'Sebastian', 'Stefan', 'Stephen', 'Steve',
        'Theo', 'Thomas', 'Tim', 'Toby', 'Tom', 'Tony', 'Tyler',
        'Wayne', 'Will', 'William',
        'Zachary', 'Zach'
    );

    protected static $firstNameFemale = array(
        'Abbie', 'Abigail', 'Adele', 'Alexa', 'Alexandra', 'Alice', 'Alison', 'Amanda', 'Amber', 'Amelia', 'Amy', 'Anna', 'Ashley', 'Ava',
        'Beth', 'Bethany', 'Becky',
        'Caitlin', 'Candice', 'Carlie', 'Carmen', 'Carole', 'Caroline', 'Carrie', 'Charlotte', 'Chelsea', 'Chloe', 'Claire', 'Courtney',
        'Daisy', 'Danielle', 'Donna',
        'Eden', 'Eileen', 'Eleanor', 'Elizabeth', 'Ella', 'Ellie', 'Elsie', 'Emily', 'Emma', 'Erin', 'Eva', 'Evelyn', 'Evie',
        'Faye', 'Fiona', 'Florence', 'Francesca', 'Freya',
        'Georgia', 'Grace',
        'Hannah', 'Heather', 'Helen', 'Helena', 'Hollie', 'Holly',
        'Imogen', 'Isabel', 'Isabella', 'Isabelle', 'Isla', 'Isobel',
        'Jade', 'Jane', 'Jasmine', 'Jennifer', 'Jessica', 'Joanne', 'Jodie', 'Julia', 'Julie', 'Justine',
        'Karen', 'Karlie', 'Katie', 'Keeley', 'Kelly', 'Kimberly', 'Kirsten', 'Kirsty',
        'Laura', 'Lauren', 'Layla', 'Leah', 'Leanne', 'Lexi', 'Lilly', 'Lily', 'Linda', 'Lindsay', 'Lisa', 'Lizzie', 'Lola', 'Lucy',
        'Maisie', 'Mandy', 'Maria', 'Mary', 'Matilda', 'Megan', 'Melissa', 'Mia', 'Millie', 'Molly',
        'Naomi', 'Natalie', 'Natasha', 'Nicole', 'Nikki',
        'Olivia',
        'Patricia', 'Paula', 'Pauline', 'Phoebe', 'Poppy',
        'Rachel', 'Rebecca', 'Rosie', 'Rowena', 'Roxanne', 'Ruby', 'Ruth',
        'Sabrina', 'Sally', 'Samantha', 'Sarah', 'Sasha', 'Scarlett', 'Selina', 'Shannon', 'Sienna', 'Sofia', 'Sonia', 'Sophia', 'Sophie', 'Stacey', 'Stephanie','Suzanne', 'Summer',
        'Tanya', 'Tara', 'Teagan', 'Theresa', 'Tiffany', 'Tina', 'Tracy',
        'Vanessa', 'Vicky', 'Victoria',
        'Wendy',
        'Yasmine', 'Yvette', 'Yvonne',
        'Zoe',
    );

    /**
     * @link https://surnames.behindthename.com/top/lists/england-wales/1991
     */
    protected static $lastName = array(
        'Abbott', 'Adams', 'Ahmed', 'Akhtar', 'Alexander', 'Ali', 'Allan', 'Allen', 'Anderson', 'Andrews', 'Archer', 'Armstrong', 'Arnold', 'Ashton', 'Atkins', 'Atkinson', 'Austin',
        'Bailey', 'Baker', 'Baldwin', 'Ball', 'Banks', 'Barber', 'Barker', 'Barlow', 'Barnes', 'Barnett', 'Barrett', 'Barry', 'Bartlett', 'Barton', 'Bates', 'Baxter', 'Begum', 'Bell', 'Bennett', 'Benson', 'Bentley', 'Berry', 'Bevan', 'Bibi', 'Birch', 'Bird', 'Bishop', 'Black', 'Blackburn', 'Blake', 'Bolton', 'Bond', 'Booth', 'Bowen', 'Boyle', 'Bradley', 'Bradshaw', 'Brady', 'Bray', 'Brennan', 'Briggs', 'Brookes', 'Brooks', 'Brown', 'Browne', 'Bruce', 'Bryan', 'Bryant', 'Buckley', 'Bull', 'Burgess', 'Burke', 'Burns', 'Burrows', 'Burton', 'Butcher', 'Butler', 'Byrne',
        'Cameron', 'Campbell', 'Carey', 'Carpenter', 'Carr', 'Carroll', 'Carter', 'Cartwright', 'Chadwick', 'Chamberlain', 'Chambers', 'Chan', 'Chandler', 'Chapman', 'Charlton', 'Clark', 'Clarke', 'Clayton', 'Clements', 'Coates', 'Cole', 'Coleman', 'Coles', 'Collier', 'Collins', 'Connolly', 'Connor', 'Conway', 'Cook', 'Cooke', 'Cooper', 'Cox', 'Craig', 'Crawford', 'Cross', 'Cunningham', 'Curtis',
        'Dale', 'Daly', 'Daniels', 'Davey', 'Davidson', 'Davies', 'Davis', 'Davison', 'Dawson', 'Day', 'Dean', 'Dennis', 'Dickinson', 'Dixon', 'Dobson', 'Dodd', 'Doherty', 'Donnelly', 'Douglas', 'Doyle', 'Duffy', 'Duncan', 'Dunn', 'Dyer',
        'Edwards', 'Elliott', 'Ellis', 'Evans', 'Farmer', 'Farrell', 'Faulkner', 'Ferguson', 'Field', 'Finch', 'Fisher', 'Fitzgerald', 'Fleming', 'Fletcher', 'Flynn', 'Ford', 'Forster', 'Foster', 'Fowler', 'Fox', 'Francis', 'Franklin', 'Fraser', 'Freeman', 'French', 'Frost', 'Fry', 'Fuller',
        'Gallagher', 'Gardiner', 'Gardner', 'Garner', 'George', 'Gibbons', 'Gibbs', 'Gibson', 'Gilbert', 'Giles', 'Gill', 'Glover', 'Goddard', 'Godfrey', 'Goodwin', 'Gordon', 'Gough', 'Gould', 'Graham', 'Grant', 'Gray', 'Green', 'Greenwood', 'Gregory', 'Griffin', 'Griffiths',
        'Hale', 'Hall', 'Hamilton', 'Hammond', 'Hancock', 'Hanson', 'Harding', 'Hardy', 'Hargreaves', 'Harper', 'Harris', 'Harrison', 'Hart', 'Hartley', 'Harvey', 'Hawkins', 'Hayes', 'Haynes', 'Hayward', 'Heath', 'Henderson', 'Henry', 'Herbert', 'Hewitt', 'Hicks', 'Higgins', 'Hill', 'Hilton', 'Hobbs', 'Hodgson', 'Holden', 'Holland', 'Holloway', 'Holmes', 'Holt', 'Hooper', 'Hope', 'Hopkins', 'Horton', 'Houghton', 'Howard', 'Howarth', 'Howe', 'Howell', 'Howells', 'Hudson', 'Hughes', 'Humphreys', 'Humphries', 'Hunt', 'Hunter', 'Hurst', 'Hussain', 'Hutchinson', 'Hyde',
        'Ingram', 'Iqbal',
        'Jackson', 'James', 'Jarvis', 'Jenkins', 'Jennings', 'John', 'Johnson', 'Johnston', 'Jones', 'Jordan', 'Joyce',
        'Kaur', 'Kay', 'Kelly', 'Kemp', 'Kennedy', 'Kent', 'Kerr', 'Khan', 'King', 'Kirby', 'Kirk', 'Knight', 'Knowles',
        'Lamb', 'Lambert', 'Lane', 'Law', 'Lawrence', 'Lawson', 'Leach', 'Lee', 'Lees', 'Leonard', 'Lewis', 'Little', 'Lloyd', 'Long', 'Lord', 'Lowe', 'Lucas', 'Lynch', 'Lyons',
        'Macdonald', 'Mahmood', 'Mann', 'Manning', 'Marsden', 'Marsh', 'Marshall', 'Martin', 'Mason', 'Matthews', 'May', 'Mccarthy', 'Mcdonald', 'Mckenzie', 'Mclean', 'Mellor', 'Metcalfe', 'Miah', 'Middleton', 'Miles', 'Miller', 'Mills', 'Mistry', 'Mitchell', 'Moore', 'Moran', 'Morgan', 'Morley', 'Morris', 'Morrison', 'Morton', 'Moss', 'Murphy', 'Murray', 'Myers',
        'Nash', 'Naylor', 'Nelson', 'Newman', 'Newton', 'Nicholls', 'Nicholson', 'Nixon', 'Noble', 'Nolan', 'Norman', 'Norris', 'North', 'Norton',
        'Obrien', 'Oconnor', 'Odonnell', 'Oliver', 'Oneill', 'Osborne', 'Osullivan', 'Owen', 'Owens',
        'Page', 'Palmer', 'Parker', 'Parkes', 'Parkin', 'Parkinson', 'Parry', 'Parsons', 'Patel', 'Patterson', 'Payne', 'Peacock', 'Pearce', 'Pearson', 'Perkins', 'Perry', 'Peters', 'Phillips', 'Pickering', 'Pollard', 'Poole', 'Pope', 'Porter', 'Potter', 'Potts', 'Powell', 'Power', 'Pratt', 'Preston', 'Price', 'Pritchard', 'Pugh',
        'Quinn',
        'Rahman', 'Randall', 'Read', 'Reed', 'Rees', 'Reeves', 'Reid', 'Reynolds', 'Rhodes', 'Rice', 'Richards', 'Richardson', 'Riley', 'Roberts', 'Robertson', 'Robinson', 'Robson', 'Rogers', 'Rose', 'Ross', 'Rowe', 'Rowley', 'Russell', 'Ryan',
        'Sanders', 'Sanderson', 'Saunders', 'Savage', 'Schofield', 'Scott', 'Shah', 'Sharp', 'Sharpe', 'Shaw', 'Shepherd', 'Sheppard', 'Short', 'Simmons', 'Simpson', 'Sims', 'Sinclair', 'Singh', 'Skinner', 'Slater', 'Smart', 'Smith', 'Spencer', 'Stanley', 'Steele', 'Stephens', 'Stephenson', 'Stevens', 'Stevenson', 'Stewart', 'Stokes', 'Stone', 'Storey', 'Sullivan', 'Summers', 'Sutton', 'Swift', 'Sykes',
        'Talbot', 'Taylor', 'Thomas', 'Thompson', 'Thomson', 'Thornton', 'Thorpe', 'Todd', 'Tomlinson', 'Townsend', 'Tucker', 'Turnbull', 'Turner', 'Tyler',
        'Vaughan', 'Vincent',
        'Wade', 'Walker', 'Wall', 'Wallace', 'Wallis', 'Walsh', 'Walters', 'Walton', 'Ward', 'Warner', 'Warren', 'Waters', 'Watkins', 'Watson', 'Watts', 'Webb', 'Webster', 'Welch', 'Wells', 'West', 'Weston', 'Wheeler', 'White', 'Whitehead', 'Whitehouse', 'Whittaker', 'Wilkins', 'Wilkinson', 'Williams', 'Williamson', 'Willis', 'Wilson', 'Winter', 'Wong', 'Wood', 'Woods', 'Woodward', 'Wright', 'Wyatt',
        'Yates', 'Young'
    );
}
