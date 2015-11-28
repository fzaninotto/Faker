<?php

namespace Faker\Provider\en_US;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}}',
        '{{lastName}} {{firstNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{lastName}} {{firstNameFemale}} {{firstNameMale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    );

    protected static $firstNameMale = array('Shrikant','Rahul','Abhishek','Aditya','Amit','Yash','Rohit','Mahesh','Shyam','Arjun','Raj','Mayank','Manoj','Kumar','Karan','Deepak','Parth','Ankur','Abhinav','Ankit','Neeraj','Ajay','Vinay','Aryan','Rakesh','Rishabh','Akash','Rohan','Shivam','Abhi','Mohit','Pranav','Vaibhav','Anish','Jay','Nitin','Vivek','Soham','Sunny','Ajith','Krishna','Varun','Siddharth','Aaditya','Raju','Abdul','Deepro','Deep','Sam','Sumit','Vishal','Kartik','Vedant','Dhruv','Sanchit','Shashank','Himanshu','Anand','Ajeet','Tushar','Ashish','Nishant','Anurag','Lipun','Naveen','Shaan','Dinesh','Atul','Manish','Nitesh','Ramanan','Manu','Avinash','Paaus','Prince','Raghav','Harish','Rajeev','Girish','Rishi','Prateek','Pankaj','Jatin','Aniket','Suresh','Pratik','Arun','Aman','Anirudh','Vijay','Anubhav','Arnab','Praveen','Sumeet','Mayur','Gokul','Brijesh','Siddu','Saravanan','Jenson','Sachin');

    protected static $firstNameFemale = array('Anita','Priyanka','Tanya','Tanvi','Divya','Riya','Aishwarya','Sneha','Shreya','Priya','Gayatri','Varsha','Leah','Ananya','Pavithra','Vani','Nishi','Krithika','Suhani','Shivangi','Shivani','Anjali','Ishita','Anushri','Radhika','Niharika','Anusha','Sakshi','Seema','Rhea','Aditi','Niti','Anu','Isabel','Lala','Natasha','Kamalika','Khushi','Tisha','Crowny','Sam','Akansha','Angel','Dawn','Neha','Aswini','Ria','Anisha','Urvashi','Diya','Jiffy','Neelam','Lavanya','Manasa','Hannah','Kalyani','Binita','Alice','Arti','Sonam','Sadaf','Isha','Aarushi','Gitanjali','Nishita','Vidhya','Rutuja','Namrata','Debbie','Indhumathi','Sowmya','Mahima','Siya','Ayushi','Shrinidhi','Ira','Archita','Manasi','Lily','Chandralekha','Suvi','Sasashy','Jasmine','Prachi','Krittika','Sanjana','Deepa','Diksha','Mitali','Ramya','N.priyanka','Pradeepa','Lish','Anushree','Papuii','Ishika','Manisha','Arya','Chanchal','Apoorva','Juvina');

    protected static $lastName = array('Sonone','Garje','Kumar','Lal','Sharma','Shan','Jai','Pal','Aggarwal','Raje','Chande','Chander','Nara','Rai','Nath','Goel','Bhat','Raji','Anand','Suri','Kapoor','Chandra','Patel','Verma','Malhotra','Sai','Engineer','Arun','Madan','Srini','Prasad','Sara','Rana','Raman','Subram','Mehta','Subramani','Sethi','Vijaya','Malik','Narayan','Mittal','Nita','Kishore','Roy','Chaudhary','Charan','Nigam','Sen','Subramanian','Nirmal','Pawan','Manohar','Sahni','Lalit','Rajan','Sehgal','Uddin','Saini','Neel','Jana','Darsha','Ranga','Vish','Mehra','Puri','Muthu','Gandhi','Lata','Chauhan','Saxena','Swami','Neela','Chandrasekar','Soni','Dhawan','Nagpal','Joshi','Krishnamurthy','Persaud','Punj','Veena','Mahajan','Manju','Dutta','Sandeep','Narang','Naran','Veer','Tyagi','Samuel','Srivastava','Sudha','Srivas','Mati','Neelam','Rastogi','Bhatt','Rajagopal','Srivastav','Ganesh','Jindal');

    private static $suffix = array('Patil','Vala','Wala','Kar');

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
