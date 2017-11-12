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
        '{{firstNameAsciiFirstChar}}.{{lastNameAscii}}',
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

    /**
     * @source The data collected by Abdul Rahman Sherzad (absherzad@gmail.com).
    */
    protected static $tld = array(
        'com', 'gov', 'org', 'af', 'com.af', 'net', 'info', 'edu.af', 'gov.af',
    );

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @license: Creative Commons Attribution-ShareAlike License
    */
    protected static $lastNameAscii = array("Ahmadi", "Mohammadi", "Noori", "Rahimi", "Amiri", "Haidari", "Azizi", "Siddiqi", "Hosseini", "Nazari", "Karimi", "Rahmani", "Hashemi",
    "Sadat", "Rasooli", "Safi", "Sharifi", "Akbari", "Hamidi", "Faizi", "Habibi", "Yusufi", "Sultani", "Hakimi", "Sarwari", "Ebrahimi", "Azimi",
    "Amini", "Niyazi", "Ahmadzai", "Moradi", "Naseri", "Qaderi", "Omari", "Nabizadeh", "Sherzad", "Ghafouri", "Hamdard", "Yaqubi", "Rezaei",
    "Ayoubi", "Osmani", "Alizadeh", "Anwari", "Saeedi", "Faqiri", "Samadi", "Wahidi", "Qaseemi", "Afzali", "Hasani", "Rezaei", "Fazli",
    "Sahadat", "Wafa", "Jafari", "Sherzai", "Mahmoodi", "Sakhizadeh", "Abed", "Walizadeh", "Mousavi", "Quraishi", "Saidi", "Salehi", "Raufi",
    "Hemat", "Taheri", "Stanakzai", "Qaiumi", "Amani", "Naderi", "Ahadi", "Ataei", "Barakzai", "Kohistani", "Yusufzai", "Alemi", "Naeemi",
    "Sadeqi", "Rashidi", "Ansari", "Jalali", "Hassanzadeh", "Ghulami", "Alekozai", "Kakar", "Sahil", "Amin", "Hotak", "Ataei", "Rahmani",
    "Danish", "Malekzadeh", "Shams", "Popal", "Adel", "Khalili", "Afghan", "Ibrahimkhil", "Mohmand", "Kazemi", "Momand", "Nezami", "Majidi",
    "Haqyar", "Joya", "Zahid", "Waziri", "Khaliqi", "Abbasi", "Mangal", "Frotan", "Aslami", "Ghaffari", "Timorri", "Khairkhaa", "Khaksar",
    "Shinwari", "Zamani", "Amarkhil", "Halimi", "Nikzad", "Nawabi", "Saberi", "Mohseni", "Ghiyahi", "Latifi", "Qurbani", "Safari", "Mirzadeh",
    "Samim", "Ghazizadeh", "Noorzai", "Azami", "Haqmal", "Sekandari", "Zahiri", "Miakhil", "Akrami", "Rajabi", "Mirzaei", "Wardak", "Mansouri",
    "Hajizadeh", "Alizadeh", "Saleh", "Sirat", "Ehsan", "Mirzaei", "Salimi", "Nusrat", "Bahadori", "Bakhshi", "Hanifi", "Faqirzadeh", "Hafizi",
    "Tanha", "Farahmand", "Nawrouzi", "Mujadadi", "Sahibzadeh", "Mayar", "Nasimi", "Arifi", "Asadi", "Darwish", "Bashardoost", "Oryakhil",
    "Elham", "Samimi", "Sadiqi", "Sahak", "Saifi", "Rasikh", "Rustami", "Tokhi", "Esmati", "Zarifi", "Zafari", "Ghanizadeh", "Hosseinzadeh",
    "Saeedzadeh", "Haqani", "Zaki", "Rohani", "Jalili", "Sufizadeh", "Obaidi", "Masoumi", "Jamshidi", "Khajazadeh", "Mubariz", "Khairi",
    "Safdari", "Bayat", "Mohebi", "Khawari", "Omerkhil", "Qarizadeh", "Jami", "Mirzad", "Kabiri", "Wardak", "Lodin", "Shakori", "Ghawsi",
    "Habib", "Mokhles", "Olfat", "Shahab", "Bahrami", "Khaliqyar", "Sattari", "Hosseinkhil", "Yusufzai", "Fakhry", "Ziaei", "Alawi",
    "Jabarkhil", "Omid", "Noorzad", "Emami", "Naziri", "Jamal", "Erfan", "Maqsodi", "Naqshbandi", "Nikzad", "Dilsuz", "Nasiri", "Dost", "Bahar",
    "Ehsas", "Farooqi", "Asghari", "Sabouri", "Ebadi", "Aziz", "Payman", "Arab", "Akhtari", "Ashori", "Imaq", "Wahdat", "Ziaei", "Hamraz",
    "Parsa", "Shamsi", "Haqjo", "Mozafari", "Dorrani", "Ghaznavi", "Ehsani", "Hazrati", "Najafi", "Ahmadiyar", "Noor", "Behzad", "Saqib",
    "Babikrkhil", "Sahar", "Abedi", "Shahi", "Jamali", "Zaheer", "Fiyaz", "Barati", "Totakhil", "Omar", "Nemati", "Shahin", "Jalal", "Hairan",
    "Shafaq", "Firozi", "Arian", "Arabzadeh", "Poya", "Dowlatzai", "Soroush", "Mojahid", "Shadab", "Mahboubi", "Borhani", "Danishjo",
    "Walizadeh", "Zia", "Hijran", "Irfani", "Qalandari", "Mashal", "Sadid", "Halim", "Frough", "Zahedi", "Akhlaqi", "Jabari", "Khadim",
    "Razaei", "Solaimani", "Ayar", "Hamkar", "Afshar", "Talash", "Rasa", "Miri", "Shojahi", "Saber", "Atel", "Tavakoli", "Qadiri", "Wali",
    "Madadi", "Ashrafi", "Hayat", "Sohrabi", "Bakhtiar", "Khorrami", "Mohebat", "Kamal", "Hayati", "Molavizadeh", "Popalzai", "Habibzadeh",
    "Qani", "Kamran", "Shaker", "Gohari", "Mehrabi", "Shoja", "Masoud", "Safa", "Omarzai", "Bakhtiari", "Elmi", "Sherzadeh", "Nuristani",
    "Ziarmal", "Noorzaei", "Popalzai", "Saddiq", "Moshfiq", "Akhunzadeh", "Ander", "Mirzaei", "Danishyar", "Hasan", "Khorram", "Hamid",
    "Hekmat", "Sadaqat", "Adib", "Azimi", "Younesi", "Aman", "Armani", "Hossein", "Sajjadi", "Formalie", "Watandost", "Solaimankhil", "Abdali",
    "Moslem", "Abdullah", "Yarzadeh", "Orya", "Samsour", "Massoudi", "Nusrati", "Ishaqzai", "Esmaeili", "Darwishi", "Yari", "Khamosh", "Sakhi",
    "Hedayat", "Saeed", "Khapalwak", "Noorani", "Hanafi", "Jalalzai", "Alemyar", "Faiz", "Mazlomyar", "Mohammadzai", "Qambari", "Navid",
    "Saraj", "Dawoodzai", "Najrabi", "Hamnava", "Samandry", "Mansour", "Hadi", "Barak", "Hassanzai", "Parvani", "Tarin", "Haqparast", "Haqyar",
    "Faiq", "Payendah", "Khaiandish", "Faiz", "Nadim", "Arif", "Askari", "Mullahkhil", "Intazar", "Matin", "Basiri", "Salehzadeh", "Adeli",
    "Azami", "Kamali", "Hoteki", "Fitrat", "Kohi", "Wahabzadeh", "Stanzakzai", "Baheer", "Yawari", "Silab", "Lahli", "Hamra", "Wakili",
    "Bigzad", "Sharafat", "Atef", "Fadaei", "Maftoon", "Ehrari", "Farhat", "Rafat", "Asefi", "Panahi", "Rashid", "Ahmad", "Amirzadeh", "Hamedi",
    "Sahebi", "Mahboob", "Malikzadeh", "Hoshmand", "Ramazani", "Golestani", "Akhunzadeh", "Malekzai", "Raziqi", "Fahim", "Yasini", "Arya",
    "Rahami", "Sabawon", "Bikzad", "Azizyar", "Najibi", "Hahi", "Hadran", "Javid", "Haqjo", "Arian", "Habibzai", "Mirzaei", "Javadi", "Arman",
    "Shahid", "Farhadi", "Fadaei", "Sharif", "Shahzad", "Alikhil", "Momemzadeh", "Baqiri", "Sahadat", "Sahdi", "Tasel", "Roshan", "Fazil",
    "Fazeli", "Nasar", "Iqbal", "Davoudi", "Zermati", "Joyendeh", "Nazeri", "Torabi", "Shaqahiq", "Balkhi", "Toofan", "Amirzai", "Khosravi",
    "Wasal", "Qodusi", "Mahdavi", "Mehraban", "Zakeri", "Rayhan", "Shafiq", "Rahimzai", "Alemi", "Maroof", "Bismil", "Hakimzadeh", "Farhad",
    "Mirzaei", "Moslemyar", "Shahabi", "Jahid", "Khushal", "Hanif", "Shakib", "Taraki", "Sangin", "Noorzadeh", "Nikmal", "Mirkhil", "Zaheer",
    "Mamozai", "Tabish", "Khalil", "Dawari", "Farhang", "Wahidi", "Baraki", "Masoom", "Mehdi", "Haider", "Helal", "Heidarzadeh", "Masroor",
    "Ranjbar", "Sarhadi", "Qobadi", "Saeed", "Nahil", "Javad", "Kharwati", "Najmi", "Aminzadeh", "Bigzad", "Sadri", "Zahir", "Majroh",
    "Yadegari", "Wasiq", "Bashiri", "Khalid", "Almayyar", "Behrouz", "Liwal", "Mottaqi", "Bakhtari", "Tawhidi", "Rezvani", "Daqiq", "Kargar",
    "Esmaeilzadeh", "Sajid", "Sakha", "Ayazi", "Baloch", "Sajad", "Alizai", "Kuchi", "Lutfi", "Mosleh", "Munib", "Razavi", "Asifi", "Hamed",
    "Qiam", "Wahab", "Haqmal", "Hakami", "Salarzai", "Musazai", "Mohibzadeh", "Mehri", "Bawari", "Baha", "Paradise", "Khademi", "Jahani",
    "Dosti", "Borhani", "Bikzaeh", "Qiami", "Morad", "Delawar", "Zalmai", "Mehrzad", "Mohib", "Faiz", "Fazl", "Weqar", "Wakilzadeh",
    "Akbarzadeh", "Fafihi", "Rafiqi", "Mandozi", "Pashtun", "Sarfaraz", "Saljoqi", "Almas", "Jamilli", "Sobhani", "Sayyad", "Naibi", "Bawar",
    "Khaja", "Rahmat", "Chakari", "Qarizadeh", "Nabavi", "Roozi", "Shaida", "Moqbil", "Soheil", "Zafar", "Golzar", "Dawlati", "Saraji", "Elm",
    "Noorzai", "Bariz", "Delawari", "Zahin", "Khan", "Sabri", "Faizan", "Mokhtar", "Mawhid", "Etamadi", "Bostani", "Khanzadeh", "Momeni",
    "Paykar", "Alizai", "Khatibi", "Bahram", "Ali", "Enayat", "Fada", "Wahizi", "Shakeri", "Omarzadeh", "Saidkhil", "Qarliq", "Kashifi",
    "Islami", "Basharmal", "Ikhlas", "Basharat", "Esmat", "Qalamyar", "Ezmaray", "Sherzoi", "Zaimiri", "Nikzadeh", "Rabbani", "Sardari",
    "Zarif", "Firooz", "Niyazmand", "Azad", "Jailani", "Salim", "Ghairat", "Farahi", "Bidar", "Ziwari", "Obaid", "Faryadi", "Kohdamani",
    "Najib", "Yazdani", "Ahmadzadeh", "Bik", "Lashkari", "Mohammad", "Mokhtari", "Ishaqzai", "Jalalzai", "Zahori", "Mutawakil", "Moshtaq",
    "Bahador", "Dawrani", "Omran", "Herawi", "Elyasi", "Bahavi", "Hesari", "Sahibzadeh", "Malekzai", "Nayab", "Irshad", "Rahmani", "Abdi",
    "Hamdam", "Babari", "Rashad", "Atefi", "Hatami", "Aini", "Momem", "Paktyawal", "Raziqi", "Mesbah", "Hemati", "Amir", "Baromand", "Rahimz",
    "Rastagar", "Rafi", "Manori", "Jamalzadeh", "Hasami", "Arghandival", "Arman", "Paykan", "Zaland", "Khairzadeh", "Zaheed", "Rawan", "Roshan",
    "Zirak", "Abdollahi", "Masjidi", "Ariya", "Khanzadeh", "Wafadar", "Pirzadeh", "Saiyar", "Mosaddiq", "Tajik", "Sorabi", "Ezati", "Maroofi",
    "Maliki", "Nijat", "Akhgar", "Baryalay", "Danishyar", "Faqiryar", "Katwazi", "Naser", "Khogiyani", "Fahimi", "Andarabi", "Shikhzadeh",
    "Moriwat", "Mehraj", "Hasam", "Hasanyar", "Rasoul", "Sakhizadeh", "Ghani", "Ahmadzai", "Ataei", "Kayhan", "Iqbali", "Omidi", "Haqbin",
    "Ghori", "Farzam", "Helali", "Khalwati", "Rahmatzadeh", "Maiwand", "Wahdiyar", "Wasiq", "Sabit", "Safari", "Wafaei", "Hafezi", "Hekmati",
    "Sahi", "Mohsen", "Najati", "Aminzai", "Salik", "Salami", "Sangar", "Mawdodi", "Haqbin", "Kamalzadeh", "Gardizi", "Achakzai", "Ariyubi",
    "Taaj", "Zakir", "Sabour", "Nabil", "Ahmadi", "Isar", "Haqiqi", "Hakim", "Sarwar", "Arazo", "Bashari", "Sharifzadeh", "Shaheer", "Farzan",
    "Karim", "Mahmood", "Nasari", "Torab", "Qamari", "Jawhari", "Sahar", "Aliyar", "Nahibkhil", "Hofiyani", "Bonyadi", "Shahbazi", "Nabil",
    "Sultan", "Sultanzadeh", "Shabab", "Shamal", "Aajiz", "Alemyar", "Alipor", "Motahari", "Nikmal", "Sekandari", "Shahidi", "Essazadeh",
    "Mirzaei", "Mustafa", "Barakzai", "Behboudi", "Khawarin", "Saighani", "Shahbaz", "Faisal", "Hashimi", "Hasrat", "Rashid", "Reza", "Zaman",
    "Shinwari", "Asem", "Askarzadeh", "Fayyazi", "Gulzad", "Munir", "Asil", "Afghanyar", "Faqirzai", "Ibrahim", "Amanyar", "Bayan", "Adil",
    "Allahyar", "Rahil", "Solaiman", "Mahir", "Naziri", "Ibrahimi", "Tawfiq", "Samar", "Ramin", "Rizwan", "Saie", "Shifaei", "Shahzadeh",
    "Modabbir", "Wafaei", "Asad", "Elyas", "Joyan", "Khairkhaa", "Sami", "Kiani", "Ibrahimzadeh", "Hammas", "Darman", "Tariq", "Qattali",
    "Yawar", "Bigi", "Hamidzadeh", "Mohaqiq", "Mohammadi", "Nashat", "Nomani", "Hazim", "Khodadadi", "Fooladi", "Gowhar", "Malang", "Musazadeh",
    "Najm", "Harooni", "Ashna", "Haqdost", "Rustamzadeh", "Rauf", "Ezmaray", "Arabzai", "Ata", "Haddad", "Hassas", "Hamdi", "Rajabzadeh",
    "Langari", "Najmi", "Bayani", "Tany", "Haqdost", "Khushiwal", "Dildar", "Didar", "Salangi", "Shayan", "Qanit", "Nazhat", "Aminyar",
    "Habibyar", "Dashti", "Solaimankhil", "Samandar", "Qalandar", "Gailani", "Mirza", "Nasri", "Nazimi", "Wahaj", "Yuldash", "Binawa", "Tawana",
    "Khaliqyar", "Shahidzadeh", "Farzad", "Mobashir", "Big", "Bigzad", "Rohi", "Shadan", "Kazemi", "Modassir", "Ikrami", "Iltaf", "Tabasom",
    "Sangari", "Ashraf", "Mumtaz", "Yarmal", "Arbabzadeh", "Afzal", "Azami", "Iftakhari", "Peroz", "Shefaei", "Shiva", "Ghorbandi", "Ghayor",
    "Mashal", "Yousufzadeh", "Atmar", "Batori", "Hafez", "Rafiq", "Sadiqyar", "Tayeb", "Qanoni", "Mehr", "Howaida", "Khosti", "Rahmani",
    "Rahimzadeh", "Atiq", "Gharibyar", "Mirazazadeh", "Eshaqzadeh", "Borna", "Ramaki", "Saleemi", "Stooman", "Osman", "Mahil", "Mohammadzadeh",
    "Mirzakhil", "Naseh", "Watanyar", "Ikhtiyari", "Ashna", "Imamzadeh", "with each", "Bigzadeh", "Hasanyar", "Raheen", "Sahim");

    /**
     * @source Afghanistan Kankor (University Entrance Exam) 2003-2017 data.
     * The data collected, preprocessed and prepared by Abdul Rahman Sherzad (absherzad@gmail.com).
     * @license: Creative Commons Attribution-ShareAlike License
    */
    protected static $firstNameAscii = array("Zabihullah", "Najibullah", "Abdullah", "Samiullah", "Hamidullah", "Rohullah", "Ehsanullah", "Naqibullah", "Rahmatullah", "Asadullah",
    "Habibullah", "Nematullah", "Esmatullah", "Hassibullah", "Vahidullah", "Safiullah", "Mostafa", "Mohammad", "Obeidullah", "Javid",
    "Hikmatullah", "Mirwais", "Naseer Ahmad", "Farhad", "Ezatullah", "Atiqullah", "Noorullah", "Shafiqullah", "Abdul Rahman", "Heshmatullah",
    "Nusratullah", "Abdul Basir", "Omid", "Azizullah", "Ajmal", "Hamed", "Khalid", "Mohibullah", "Qutratullah", "Hedayatullah", "Nasar Ahmad",
    "Amanullah", "Mohammad Aref", "Rafiullah", "Matiullah", "Masoud", "Morteza", "Enayatullah", "Aminullah", "Jamshid", "Rahimullah",
    "Hafizullah", "Abdul Sabour", "Hayatullah", "Mohammed Hussain", "Shafiullah", "Sebghatullah", "Ahmad Shah", "Fraidoon", "Abdul Hamid",
    "Saddiqullah", "Homayoun", "Sefatullah", "Mohammad Haroon", "Bashir Ahmad", "Mohammad Ali", "Mohammadullah", "Bismillah", "Emal", "Navid",
    "Mohammad Yusuf", "Mojtaba", "Mohammad Amin", "Mohammad Nahim", "Abdul Wahid", "Mohammad Nasir", "Javad", "Sharifullah", "Mohammad Ebrahim",
    "Mohammad Nasim", "Habib Rahman", "Mohammad Reza", "Ahmadullah", "Farid Ahmad", "Abdul Matin", "Ramin", "Mohammad Javid", "Shokrullah",
    "Abdul Qadir", "Parviz", "Abdul Rahim", "Nasrullah", "Abdul Hadi", "Muhammad Fahim", "Ahmad", "Mohammad Sharif", "Abdul Baset", "Mohammad 
    Asif", "Mohammad Daoud", "Noor Ahmad", "Mohammad Yasin", "Faridullah", "Saifullah", "Mohammad Rafi", "Beryalai", "Mohammad Hassan", "Abdul 
    Bashir", "Solaiman", "Ahmad Javid", "Mehdi", "Ahmad Zia", "Fawad", "Mujib Rahman", "Mohammad Saber", "Mahmood", "Mohammad Khaled", "Mohammad 
    Idress", "Abdul Wahab", "Abdul Khaleq", "Haroon", "Noor Mohammad", "Ibrahim", "Abdul Hakim", "Lutfullah", "Idris", "Mohammad Hamed",
    "Mohammad Saleem", "Mohammad Yunis", "Zekrullah", "Abdul Karim", "Mansour", "Mohammad Javad", "Ali Reza", "Abdul Qadir", "Karimullah",
    "Mohammad Sadegh", "Faisal", "Omran", "Abdul Majid", "Mohammad Omer", "Fahim", "Abdul Qaium", "Masiullah", "Faizullah", "Mohammad Taher",
    "Ali Ahmad", "Abdul Aziz", "Ahmad Reshad", "Abdul Sattar", "Islamuddin", "Abdul Wali", "Sohrab", "Khairullah", "Mohibullah", "Reza", "Abdul 
    Ghaffar", "Shamsur Rahman", "Abdul Samad", "Hossein", "Saif Rahman", "Sayed Ahmad", "Zalmai", "Abdul Rauf", "Abdul Latif", "Mohammad 
    Ismaeil", "Qais", "Ghulam Sakhi", "Shamsullah", "Fazlur Rahman", "Mujibullah", "Mohammad Qasem", "Abdul Haq", "Farid", "Muhammad Hanif",
    "Mohammad Nabi", "Mohammad Asif", "Zahedullah", "Zakaria", "Sayed Mohammad", "Abdul Ahad", "Abdul Rashid", "Abdul Wasi", "Ali", "Nazir 
    Ahmad", "Ahmad Fawad", "Navidullah", "Mohammad Shoaib", "Nasibullah", "Mahbubullah", "Abdul Sami", "Abdul Ghafoor", "Mohammad Rahim",
    "Ziaulhaq", "Juma Khan", "Gul Ahmad", "Abdul Malik", "Shamsuddin", "Basir Ahamed", "Mohammad Akbar", "Mohammad Zahir", "Abdul Shakor",
    "Ahmad Siar", "Salahuddin", "Abdul Naser", "Samim", "Ahmed Farid", "Abdul Jamil", "Jamaluddin", "Fazl Ahmad", "Abdul Jalil", "Ezmaray",
    "Abdul Waris", "Gul Mohammad", "Jalaluddin", "Shir Mohammad", "Toryalay", "Burhanuddin", "Mohammad Essa", "Ahmad Khalid", "Abdul Khalil",
    "Khan Mohammad", "Maiwand", "Abdul Jabbar", "Hezbullah", "Aziz Rahman", "Fardin", "Ismail", "Omidullah", "Mohammad Hashim", "Abdul Raziq",
    "Mohammad Shahfaei", "Sirajdin", "Jan Mohammad", "Faiz Mohammad", "Hijratullah", "Ahmad Navid", "Abdul Wakil", "Nik Muhammad", "Mohammad 
    Zarif", "Bilal", "Firooz", "Abdul Bari", "Mohammad Anwar", "Mohammad Shafiq", "Khalilullah", "Ahmad Fahim", "Abdul Munir", "Mohammad 
    Ashraf", "Abdul Mannan", "Shabir Ahmad", "Ashiqullah", "Mohammad Ishaq", "Mohammad Bashir", "Mohammad Mustafa", "Abdul Qahar", "Nizamuddin",
    "Nooradin", "Irfanullah", "Noorulhaq", "Aziz Ahmad", "Raz Mohammad", "Ali Mohammad", "Abdul Fattah", "Tamim", "Shir Ahmad", "Zia Rahman",
    "Ebadullah", "Amrullah", "Mohammad Alam", "Ahmad Shakib", "Abdul Mobin", "Fada Mohammad", "Mohammad Azim", "Mohammad Nader", "Nabiullah",
    "Muhammad Samim", "Najmuddin", "Mohammad Mahdi", "Nangialay", "Khaybar", "Taj Mohammad", "Shah Mohammad", "Noor Rahman", "Din Mohammad",
    "Wahedullah", "Abbas", "Abdul Wahid", "Mohammad Tariq", "Shoaib", "Mohammad Wali", "Shahabuddin", "Merajuddin", "Hasan", "Amir Mohammad",
    "Khair Mohammad", "Mohammad Osman", "Mohammad Qasim", "Milad", "Ahmad Shoaib", "Dost Mohammad", "Ataullah", "Mohammed Ayub", "Anhamullah",
    "Mohammad Musa", "Abdul Qoddus", "Lal Mohammad", "Mohammad Yaqub", "Mohammad Zaman", "Yar Mohammad", "Mohammad Nazir", "Nazifullah",
    "Mohammad Zia", "Yama", "Kifayatullah", "Khalil Ahmad", "Ahmad Jawad", "Ramadan", "Abdul Razaq", "Rommel", "Mohammad Nasir", "Mohammad 
    Farid", "Barkatullah", "Waisuddin", "Ghulam Mohammad", "Qayamuddin", "Abdul Musawir", "Ziauddin", "Mohammad Elyas", "Zakirullah", "Abdul 
    Wadood", "Ramish", "Ghulam Nabi", "Mohammad Salem", "Mohammad Sediq", "Fazlul Haq", "Abdul Salam", "Mohammad Ehsan", "Mohammad Karim",
    "Mohammad Tamim", "Ikramullah", "Zainullah", "Subhanallah", "Noor Aqa", "Rahmanullah", "Abdul Hai", "Mohammad Ismail", "Saifuddin", "Ghulam 
    Rasoul", "Ahmed Wali", "Hamid", "Ghulam Ali", "Mohammad Ajmal", "Abdul Maarof", "Akhtar Mohammad", "Baz Mohammad", "Zubair", "Munir Ahmad",
    "Waliullah", "Mir Ahmad", "Mohammad Kazem", "Mohammad Navid", "Wali Mohammad", "Fazlullah", "Hamdullah", "Mohammad Iqbal", "Abdul Ahmad",
    "Shamsul Haq", "Mohammad Zubair", "Niaz Mohammad", "Mohammad Mansour", "Hazratullah", "Ghulam Reza", "Mohammad Rasoul", "Ikramuddin",
    "Hossein Ali", "Nazar Mohammad", "Imamuddin", "Sayed Mostafa", "Abdul Hussib", "Abdul Ghani", "Abdul Halim", "Mokhtar", "Khudadad", "Khushal 
    Khan", "Abdul Rabiq", "Azimullah", "Sardar Wali", "Allah Mohammad", "Saleh Mohammad", "Ghulam Mustafa", "Ahmad Samim", "Naser", "Ali Jan",
    "Khalil Rahman", "Farzad", "Kamaluddin", "Shujauddin", "Ghulam Farooq", "Abdul Ali", "Eid Mohammad", "Mohammad Hadi", "Mohammad Aman",
    "Jalil Ahmad", "Abdul Baghi", "Ferdows", "Elyas", "Shahidullah", "Mohammad Kabir", "Abdul Nasir", "Amruddin", "Ahmad Zubair", "Dawoud",
    "Ghulam Hazrat", "Tariq", "Aref", "Hakimullah", "Abdul Azim", "Abdul Kabir", "Hasamuddin", "Sayed Al-Rahman", "Abdulmutallab", "Mohammad 
    Shahkar", "Wahid", "Abdul Hafez", "Ahmad Farhad", "Khal Mohammad", "Faizur Rahman", "Ainadin", "Mohammad Hakim", "Zabihullah", "Ghulam 
    Haidar", "Ziaullah", "Muhammad Monir", "Gholam Abbas", "Ali Khan", "Musa", "Khairuddin", "Navid Ahmad", "Shakerullah", "Mohammad Rafiq",
    "Sadraddin", "Mohammad Omid", "Gholam Hossein", "Muhammad Fawad", "Juma Gul", "Sanaullah", "Haji Mohammad", "Gulbuddin", "Bakhtiar",
    "Abedullah", "Rizwanullah", "Mohammad Zakir", "Shah Wali", "Mohammad Baqir", "Mohammad Gul", "Mohammad Omran", "Esmail", "Fazluddin",
    "Mehrabuddin", "Ainullah", "Mohamed Bilal", "Ali Sina", "Mohammad Khan", "Sher Shah", "Bilal Ahmad", "Ahmad Zaki", "Amir Khan", "Mohammad 
    Sarwar", "Jafar", "Sultan Mohammad", "Fakhraddin", "Wahid Ahmad", "Abdul Zahir", "Mohammad Reza", "Sayed Ali", "Mozamel", "Noor Aqa",
    "Mohammad Aslam", "Wakil Ahmad", "Abdul Hanan", "Mohammad Abed", "Mohammad Taqi", "Yasin", "Shah Mahmood", "Javid Ahmad", "Aref Allah",
    "Mojahid", "Abdul Tawab", "Alawaddin", "Ali Akbar", "Ahmad Zai", "Ahmed Waleed", "Sabawon", "Sadiq", "Khyal Mohammad", "Saeedullah",
    "Mohammad Akram", "Sayed Morteza", "Abdul Malik", "Firooz Ahmad", "Fatima", "Freshteh", "Maryam", "Zahra", "Farzaneh", "Morsal", "Tamana",
    "Marzieh", "Samira", "Khatereh", "Shukria", "Massoumeh", "Narges", "Shabana", "Farideh", "Shagofeh", "Arezo", "Mozhgan", "Nilofar",
    "Raziyeh", "Fariba", "Soheila", "Zakie", "Fahimeh", "Noria", "Wahideh", "Khalideh", "Zainab", "Basira", "Khadijah", "Hamideh", "Fawziah",
    "Somayeh", "Shakila", "Zohra", "Najibeh", "Shakiba", "Saddiqa", "Nadia", "Shabnam", "Froozan", "Soraya", "Massouda", "Latifeh", "Parwana",
    "Sharifa", "Aziza", "Madina", "Munizha", "Yalda", "Lida", "Jamila", "Humaira", "Sakineh", "Najiyah", "Nazifa", "Nasima", "Rahimah", "Zohal",
    "Nilab", "Farahnaz", "Sonia", "Karima", "Atefeh", "Palwasha", "Sowita", "Roya", "Amina", "Zermina", "Reyhaneh", "Nagina", "Nebila",
    "Habiba", "Adeleh", "Tahereh", "Lina", "Halima", "Roqia", "Leila", "Shafiqa", "Firoza", "Raheleh", "Banafsha", "Nasrin", "Lily", "Nafiseh",
    "Mahboubeh", "Yasmin", "Saleyah", "Baheshta", "Mozhda", "Zarghona", "Wazhma", "Hassina", "Hussaina", "Saeedeh", "Sabira", "Parisa", "Rabia",
    "Kamela", "Tahmineh", "Sadaf", "Aqela", "Safiyah", "Monira", "Friha", "Malalai", "Homa", "Maliha", "Anisa", "Nahida", "Shima", "Shamilla",
    "Sima", "Shaziah", "Arefeh", "Sahar", "Nazanin", "Hanifa", "Zarifa", "Mina", "Sadiah", "Tayebeh", "Parvin", "Nazia", "Kobra", "Mina",
    "Asma", "Sonita", "Farkhunda", "Lima", "Shiba", "Alia", "Ayesha", "Abedeh", "Vida", "Maleka", "Samia", "Lailoma", "Salma", "Shila", "Gita",
    "Sodabeh", "Fattana", "Breshna", "Zakira", "Arezo", "Shahista", "Setareh", "Gulalai", "Anita", "Anjila", "Qudsia", "Vijayah", "Hadya",
    "Salima", "Rokhsar", "Rona", "Nijila", "Diba", "Gulsom", "Nasiba", "Freema", "Nahid", "Bahara", "Marina", "Ziba", "Fazila", "Hussna",
    "Marwah", "Nazila", "Najla", "Elaha", "Belghis", "Soma", "Hakima", "Ramzia", "Zobaida", "Maria", "Sara", "Hussnia", "Sarah", "Afsana",
    "Nadira", "Tuba", "Krishma", "Anahita", "Shahla", "Sona", "Hengameh", "Mastoura", "Zia Gul", "Fakhria", "Fayeza", "Fazila", "Diana",
    "Hajra", "Mahnaz", "Nabileh", "Haley", "Spozhmai", "Shamsia", "Moska", "Amina", "Hafizah", "Hussi", "Sajideh", "Asyah", "Mawlodah", "Sima 
    Gul", "Wajia", "Nasira", "Navideh", "Rohina", "Hasiba", "Zarlasht", "Bibi Maryam", "Hadiseh", "Anooshe", "Mah Jabin", "Hasiba", "Mitra",
    "Maria", "Rohidah", "Khatimah", "Shahnaz", "Nazira", "Momina", "Sajiah", "Rokhana", "Marjan", "Monisa", "Giti", "Khujistah", "Mahriah",
    "Liza", "Asifa", "Rohina", "Rowina", "Amena", "Aazita", "Adiba", "Lily", "Parastoo", "Khushboo", "Rubina", "Soghra", "Tabassom", "Elham",
    "Permila", "Moslema", "Rahna", "Siyamoo", "Shakira", "Rozma", "Mahdieh", "Mahtab", "Shokofeh", "Salsalah", "Bibi Fatema", "Dina", "Sayera",
    "Bibi Gul", "Zahira", "Hasila", "Somin", "Shahrbanoo", "Melina", "Marina", "Wasima", "Mah Gul", "Najmah", "Khorshid", "Fardina", "Amina",
    "Anis Gul", "Roqia", "Mahjubah", "Zulaikha", "Yasamin", "Sonam", "Mary", "Binazir", "Trina", "Sultanah", "Zamirah", "Pakeezah", "Soriah",
    "Nazdana", "Shamim", "Mahjabin", "Hilah", "Azadeh", "Zar Afshan", "Mansoureh", "Laiqah", "Stouri", "Hamasa", "Simin", "Rita", "Hajirah",
    "Nikbakht", "Hooria", "Devah", "Ghazaal", "Farhat", "Nazi", "Faiqah", "Bibi Zahra", "Samina", "Umulbanin", "Raqibah", "Pari Gul", "Sagher",
    "Mumtaz", "Nafas Gul", "Paymanah", "Hawa", "Basmina", "Frouhar", "Malika", "Riza Gul", "Zarrina", "Mahrofeh", "Sabria", "Robabeh",
    "Safoura", "Uranus", "Toor Pekai", "Mashal", "Bibi Ayesha", "Aqlima", "Alina", "Liza", "Shoghla", "Roma", "Monica", "Sabza Gul",
    "Mahmoodah", "Elaha", "Rooh Afza", "Bibi Zainab", "Bibi Hawa", "Sanam", "Maqbulah", "Lalah", "Shamahil", "Gina", "Angizeh", "Farizah",
    "Moshtari", "Hussna", "Lailoma", "Pashtanah", "Sabrina", "Samaneh", "Rakiya", "Qamar Gul", "Ruhina", "Zahidah", "Mina Gul", "Siamoua",
    "Ariya", "Nadima", "Rangina", "Noorzia", "Roshan", "Hayedeh", "Shahirah", "Nila", "Sonila", "Shirin Gul", "Zulaikha", "Shah Gul", "Bibi 
    Amina", "Binazir", "Sina", "Qodria", "Hajar", "Sabar Gul", "Shayeqa", "Noorzia", "Pari", "Hamidah", "Ozra", "Moqadisa", "Bas Bibi", "Bibi 
    Khadijah", "Bashira", "Gul Jan", "Rika", "Shahzadah", "Bakhtawar", "Gulshan", "Nahima", "Shahidah", "Aziz Gul", "Kimia", "Wahedah",
    "Mohsena", "Anila", "Bibi Hawa", "Sophia", "Samar Gul", "Qandi Gul", "Gul Chehra", "Mohadisa", "Tania", "Yaganah", "Stouri", "Omidah", "Pari 
    Gul", "Dunya", "Zhila", "Rahisah", "Kobra", "Gul Afrooz", "Atiqah", "Morwarid", "Momina", "Sahima", "Afifah", "Arghawan", "Bashra",
    "Jahidah", "Sana", "Sita", "Atia", "Frough", "Sharara", "Faryal", "Farahnaz", "Nooshin", "Shirin Gul", "Asiyeh", "Zinat", "Mahira",
    "Alemah", "Qamar", "Elhama", "Bas Gul", "Bibi Halima", "Zulfia", "Tuba", "Mubaraka", "Arian", "Prima", "Kousar", "Asifeh", "Nazira",
    "Sayedah", "Zarina", "Zakia", "Walwala", "Ronaa", "Munawira", "Nazoo", "Nikbakht", "Bahar", "Ghazalah", "Nasteran", "Farangis", "Shirin",
    "Farzia", "Mah Jan", "Hawa Gul", "Sanobar", "Asma", "Zohal", "Soriah", "Sumiyah", "Najma", "Patoni", "Ziba Gul", "Qandi Gul", "Madiha",
    "Nazima", "Hafizah", "Lima", "Sonbul", "Shah Pari", "Zhila", "Mazari", "Wajiah", "Azita", "Bibi Khatira", "Gul Andam", "Naseereh", "Shiva",
    "Sahiba", "Kawkaba", "Nilam", "Bas Gul", "Bibi Hajra", "Lamia", "Behnaz", "Bibi Rabia", "Rashidah", "Rozita", "Romina");

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * Only getting first character of fristName
    */
    public static function firstNameAsciiFirstChar()
    {
        return static::randomElement(static::$firstNameAscii)[0];
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
