<?php

namespace Faker\Provider\fa_AF;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @example 'a.sherzad'
     * @example 'ab.sherzad'
     * @example 'sherzad20'
     */
    protected static $userNameFormats = array(
        '{{firstNameAsciiFirstChars}}.{{lastNameAscii}}',
        '{{lastNameAscii}}##',
    );

    /**
     * @example 'a.sherzad@yahoo.com'
     * @example 'ab.sherzad@gmail.com'
     * @example 'sherzad20@sherzad.af'
     */
    protected static $emailFormats = array(
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{freeEmailDomain}}',
    );

    /**
     * @example 'http://www.sherzad.com'
     * @example 'http://www.ab.sherzad.af'
     * @example 'http://www.sherzad.edu.af'
     */
    protected static $urlFormats = array(
        'http://www.{{domainName}}',
        'https://www.{{domainName}}',
    );

    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', 'aol.com', 'outlook.com', 'mail.com'
    );

    protected static $tld = array(
        'com', 'gov', 'org', 'af', 'com.af', 'net', 'info', 'edu.af', 'gov.af',
    );

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @link https://sites.google.com/view/absherzad/family-names
     * @license: Creative Commons Attribution-ShareAlike License
     */
    protected static $lastNameAscii = array(
        "Abbasi", "Abdali", "Abedi", "Achakzai", "Adib", "Afghan", "Afghanyar", "Afshar", "Afzali", "Ahadi", "Ahmadi", "Akrami", "Alekozai", "Alizai", "Aminzadeh", "Amiri", "Ansari", "Arbabzadeh", "Askarzadeh", "Aslami", "Ataei", "Atefi", "Ayazi", "Ayoubi", "Azimi",
        "Bahadori", "Bahar", "Baheer", "Bahrami", "Bakhtiari", "Balkhi", "Baraki", "Barakzai", "Bariz", "Basharat", "Bashardoost", "Bashiri", "Basiri", "Bawar",
        "Chakari",
        "Danishyar", "Delawari", "Didar", "Dilsuz", "Dorrani", "Dost",
        "Ebrahimi", "Ehrari", "Ehsas", "Elham", "Erfan", "Esmaeilzadeh", "Ezati",
        "Fadaei", "Fahimi", "Faizi", "Faqiri", "Farahi", "Farahmand", "Farhang", "Farhat", "Farooqi", "Fazli", "Fitrat", "Fiyaz", "Fooladi", "Frotan", "Frough",
        "Gailani", "Gardizi", "Ghafouri", "Ghairat", "Ghanizadeh", "Gharibyar", "Ghayor", "Ghaznavi", "Ghori", "Ghulami", "Golzar",
        "Habib", "Habibi", "Habibyar", "Habibzadeh", "Habibzai", "Haddad", "Hafez", "Haidari", "Hajizadeh", "Hakimi", "Hamdard", "Hamidi", "Hamkar", "Hamnava", "Hamraz", "Hanifi", "Hashimi", "Herawi", "Hijran", "Hosseinzadeh", "Hotak",
        "Ibrahimi", "Ibrahimkhil", "Iftakhari", "Ikhlas", "Imamzadeh", "Iqbali", "Isar", "Ishaqzai", "Islami",
        "Jailani", "Jalali", "Jalalzai", "Jamali", "Jamalzadeh", "Jami", "Jamshidi", "Joya",
        "Kabiri", "Kakar", "Kamalzadeh", "Kargar", "Karimi", "Kayhan", "Kazemi", "Khademi",  "Khairkhaa", "Khajazadeh", "Khaksar", "Khaliqyar", "Khamosh", "Khanzadeh", "Khatibi", "Khosravi", "Kiani", "Kohi",
        "Langari", "Lashkari", "Latifi", "Lodin", "Lutfi",
        "Madadi", "Mahboubi", "Mahmoodi", "Maiwand", "Majidi", "Majroh", "Malekzadeh", "Malekzai", "Maliki", "Mangal", "Mashal", "Masjidi", "Masroor", "Mayar", "Mehraban", "Mesbah",  "Mirzaei", "Mohammadi", "Mohaqiq", "Mojahid", "Mokhles", "Molavizadeh", "Momand", "Momem", "Moradi", "Mosaddiq", "Mubariz", "Mujadadi", "Mumtaz", "Munib",
        "Nabavi", "Nabizadeh", "Naderi", "Najafi", "Najm", "Najmi", "Najrabi", "Naqshbandi", "Naseri", "Nawabi", "Nayab", "Nazari", "Nazhat", "Noorzad", "Noorzaei", "Nuristani",
        "Olfat", "Omarzadeh", "Omarzai", "Omerkhil", "Osmani",
        "Panahi", "Parsa", "Payendah", "Payman", "Peroz", "Popal", "Popalzai", "Poya",
        "Qaderi", "Qaiumi", "Qalandar", "Qamari", "Qambari", "Qanit", "Qanoni", "Qattali", "Qobadi", "Quraishi", "Qurbani",
        "Rabbani", "Rafat", "Raheen", "Rahimi", "Rahimzadeh", "Rahmani", "Rajabzadeh", "Ramazani", "Ranjbar", "Rasa", "Rashad", "Rashidi", "Rasikh", "Rasooli", "Rastagar", "Raufi", "Rawan", "Rezaei", "Rizwan", "Rohani", "Rohi", "Roshan", "Rustami", "Rustamzadeh",
        "Sabit", "Sadaqat", "Sadat", "Sadid", "Saeedi", "Safa", "Safdari", "Safi", "Sahadat", "Sahar", "Sahibzadeh", "Sahil", "Saifi", "Sajjadi", "Sakha", "Sakhizadeh", "Saljoqi", "Samim", "Sangari", "Sarwari", "Sekandari", "Shams", "Sherzad", "Siddiqi", "Sirat",
        "Taaj", "Tabish", "Taheri", "Tajik", "Talash", "Tanha", "Taraki", "Tavakoli", "Tawana", "Tokhi", "Torabi", "Totakhil",
        "Wafa", "Wahabzadeh", "Wahdat", "Wahidi", "Wakili", "Walizadeh", "Wardak", "Wasal", "Watandost", "Waziri",
        "Yaqubi", "Yari", "Yarmal", "Yarzadeh", "Yawar", "Yawari", "Yousufzadeh", "Yusufi", "Yusufzai", "Yusufzai",
        "Zahedi", "Zaheer", "Zahid", "Zaki", "Zamani", "Zarifi", "Ziaei", "Zirak", "Ziwari"
    );

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @link https://sites.google.com/view/absherzad/male-names
     * @link https://sites.google.com/view/absherzad/female-names
     * @license: Creative Commons Attribution-ShareAlike License
     */
    protected static $firstNameAscii = array(
        "Abdul Rahman", "Abdul Salam", "Abdul Sattar", "Abdul Wahid", "Abdullah", "Abedeh", "Adeleh", "Afsana", "Afsoon", "Ajmal", "Akbar", "Akmal", "Ali Ahmad", "Amanullah", "Anisa", "Anita", "Arash", "Asadullah", "Ashiqullah", "Asra", "Ataullah", "Atefeh",
        "Bahara", "Bahram", "Banafsha", "Bashir Ahmad", "Basir Ahamed", "Basira", "Behnaz", "Behrouz", "Belghis", "Bibi Gul", "Bilal Ahmad", "Binazir", "Bismillah",
        "Chaman Gul",
        "Diana", "Diba", "Dil Aqa", "Dilawar", "Din Mohammad", "Dina", "Dost Mohammad", "Dunya", "Dur Mohammad",
        "Ehsanullah", "Elaha", "Eleena", "Elham", "Elnaz", "Elyas", "Esmail", "Esmatullah", "Ezatullah", "Ezmaray",
        "Fahim", "Fahimah", "Faiqah", "Faisal", "Faiz Ahmad", "Fakhria", "Farah", "Farahnaz", "Faramarz", "Farangis", "Fardin", "Fardina", "Farhad", "Fariba", "Farid Ahmad", "Fraidoon", "Freshteh", "Froozan", "Frouhar",
        "Ghazaal", "Ghazalah", "Gholam Abbas", "Gholam Hossein", "Ghulam Farooq", "Gina","Gita", "Giti", "Gul Afrooz", "Gul Ahmad", "Gul Aqa", "Gul Naaz", "Gul Pari", "Gulnar", "Gulsom",
        "Habib Rahman", "Habib", "Habiba", "Habibullah", "Hadi", "Hadya", "Hafizah", "Halima", "Hamid", "Hamideh", "Hanifa", "Haris", "Haroon", "Hasamuddin", "Hasan", "Hassina", "Hawa", "Homa", "Homayoun", "Hossein", "Humaira",
        "Ibrahim", "Idris", "Iqbal", "Irshad", "Ishaq", "Islamuddin", "Ismail",
        "Jalil Ahmad", "Jamaluddin", "Jamil", "Jamila", "Jamshid", "Jan Aqa", "Javad", "Juma Khan",
        "Kamran", "Karim", "Karima", "Katayon", "Kazem", "Khadijah", "Khairullah", "Khalid", "Khalideh", "Khalil Ahmad", "Khatereh", "Khorshid", "Khosrow", "Kobra",
        "Lailoma", "Laiqah", "Lal Mohammad", "Lalah", "Latifeh", "Leila", "Lida", "Lily", "Lima", "Lina", "Liza",
        "Madina", "Mah Jabin", "Mah Jan", "Mah Rukh", "Mahboob", "Mahboubeh", "Mahilah", "Mahjubah", "Mahmood", "Mahnaz", "Mahtab", "Mansoureh", "Maria", "Marina", "Marjan", "Marwa", "Maryam",
        "Naaz Gul", "Nader Shah", "Nadia", "Nadima", "Nadir", "Nadira", "Nafas Gul", "Nafiseh", "Naghma", "Nagin", "Nagina", "Nagita", "Naheda", "Nahid", "Nahida", "Nahila", "Najibullah", "Najla", "Naqibullah", "Narges", "Nasar Ahmad",
        "Obaidullah", "Omar", "Omid", "Osman", "Ozra",
        "Pakeezah", "Palwasha", "Parastoo", "Pari Gul", "Pari", "Parisa", "Parvin", "Parviz", "Parwana", "Pashtanah", "Payman", "Permila",
        "Qadirah", "Qais", "Qandi Gul", "Qasim", "Qudsia", "Qurban Ali", "Qurban", "Qutratullah",
        "Rabia", "Rafiqullah", "Rafiullah", "Raheleh", "Rahimah", "Rahimullah", "Reza", "Rezwan", "Rika", "Rima", "Rina", "Rita", "Rohina", "Rohullah", "Romina", "Rommel", "Rona", "Roqia", "Roya", "Rozita",
        "Saber", "Sabna", "Sabria", "Sabrina", "Sabzah", "Sadaf", "Shaima", "Shakila", "Shir Mohammad", "Shirin Gul",
        "Tabassom", "Tahereh", "Tahir", "Tamana", "Tamim", "Tania", "Taqi", "Taranah", "Tariq", "Tayebeh", "Tofan", "Toor Pekai", "Toryalay", "Tuba",
        "Ulfatullah", "Uliaa", "Umulbanin", "Uranus", "Uzma",
        "Venus", "Vida",
        "Wahid Ahmad", "Wahideh", "Wais", "Wajiah", "Wakil Ahmad", "Wali Ahmad", "Wasim", "Wasima", "Wazhma", "Wazir Ahmad",
        "Yaganah", "Yahya", "Yalda", "Yama", "Yasamin", "Yasin", "Yulduz", "Yusuf",
        "Zabihullah", "Zahir Shah", "Zahra", "Zainab", "Zaker Hussein", "Zakia", "Zakirullah", "Zalmai", "Zarlasht", "Zhila", "Zia Gul", "Ziaulhaq", "Ziba", "Zikiullah", "Zinat", "Zohal", "Zohra", "Zoya"
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * Getting first character each of word from fristName
     */
    public static function firstNameAsciiFirstChars()
    {
        $string = static::randomElement(static::$firstNameAscii);
        $result = '';
        foreach (preg_split('#[^a-z]+#i', $string, -1, PREG_SPLIT_NO_EMPTY) as $word) {
            $result .= $word[0];
        }
        return static::toLower($result);
    }

    /**
     * @example 'a.sherzad'
     * @example 'ab.sherzad'
     * @example 'sherzad17'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);
        return static::toLower(static::numerify($this->generator->parse($format)));
    }

    /**
     * @example 'sherzad.af'
     * @example 'sherzad.edu.af'
     * @example 'sherzad.gov'
     * @example 'sherzad.gov.af'
     */
    public function domainName()
    {
        return static::toLower(static::randomElement(static::$lastNameAscii) . '.' . $this->tld());
    }
}
