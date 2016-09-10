<?php

namespace Faker\Provider\ng_NG;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
    );

    /**
     * An array of typical Nigerian male firstnames.
     */
    protected static $firstNameMale = array(
        'Abimbola','Abisola','Abisoye','Adaobi', 'Adaugo','Adeboye','Adedayo','Adegoke', 'Akande', 'Akanni', 'Akunna', 'Alade', 'Aminat', 'Aminu', 'Augustina', 'Ayebatari', 'Ayinde', 'Azubuike',
        'Banji', 'Bankole', 'Buchi', 'Bukola',
        'Cherechi', 'Chiamaka', 'Chimamanda', 'Chinedu', 'Chinyere', 'Chisom', 'Chizoba', 'Chukwu',
        'Damilare', 'Damilola', 'Danjuma',
        'Ebiere', 'Ebiowei', 'Efe', 'Emeka', 'Emmanuel', 'Esse',
        'Fatima', 'Funmilade', 'Funmilayo',
        'Gbeminiyi', 'Gbemisola',
        'Habiba', 'Ifeanyichukwu',
        'Ifeoma', 'Ifunanya', 'Ikenna', 'Ikhidie', 'Ireti', 'Isioma',
        'Jadesola', 'Johnson', 'Jolayemi',
        'Kayode', 'Kemi', 'Kubra', 'Kubura',
        'Lola', 'Lolade',
        'Makinwa', 'Mohammed', 'Musa', 'Muyiwa',
        'Nnamdi',
        'Obioma', 'Olaide', 'Olufunmi', 'Olumide', 'Oluwunmi', 'Omawunmi', 'Omolara', 'Onome', 'Onoriode',
        'Rasheedah', 'Remilekun', 'Rotimi',
        'Sekinat', 'Shade', 'Shalewa', 'Simisola', 'Sname', 'Sumayyah',
        'Tari', 'Temitope', 'Titi', 'Titilayo', 'Titilope', 'Tobiloba', 'Toke', 'Toluwani', 'Tomiloba', 'Tope',
        'Uzodimma',
        'Wale',
        'Yakubu', 'Yusuf', 'Yusuf',
        'Zainab'
    );

    /**
     * An array of typical Nigerian female firstnames.
     */
    protected static $firstNameFemale = array(
        'Abimbola','Abisola','Abisoye','Adaobi', 'Adaugo','Adeboye','Adedayo','Adegoke', 'Akande', 'Akanni', 'Akunna', 'Alade', 'Aminat', 'Aminu', 'Augustina', 'Ayebatari', 'Ayinde', 'Azubuike',
        'Banji', 'Bankole', 'Buchi', 'Bukola',
        'Cherechi', 'Chiamaka', 'Chimamanda', 'Chinedu', 'Chinyere', 'Chisom', 'Chizoba', 'Chukwu',
        'Damilare', 'Damilola', 'Danjuma',
        'Ebiere', 'Ebiowei', 'Efe', 'Emeka', 'Emmanuel', 'Esse',
        'Fatima', 'Funmilade', 'Funmilayo',
        'Gbeminiyi', 'Gbemisola',
        'Habiba', 'Ifeanyichukwu',
        'Ifeoma', 'Ifunanya', 'Ikenna', 'Ikhidie', 'Ireti', 'Isioma',
        'Jadesola', 'Johnson', 'Jolayemi',
        'Kayode', 'Kemi', 'Kubra', 'Kubura',
        'Lola', 'Lolade',
        'Makinwa', 'Mohammed', 'Musa', 'Muyiwa',
        'Nnamdi',
        'Obioma', 'Olaide', 'Olufunmi', 'Olumide', 'Oluwunmi', 'Omawunmi', 'Omolara', 'Onome', 'Onoriode',
        'Rasheedah', 'Remilekun', 'Rotimi',
        'Sekinat', 'Shade', 'Shalewa', 'Simisola', 'Sname', 'Sumayyah',
        'Tari', 'Temitope', 'Titi', 'Titilayo', 'Titilope', 'Tobiloba', 'Toke', 'Toluwani', 'Tomiloba', 'Tope',
        'Uzodimma',
        'Wale',
        'Yakubu', 'Yusuf', 'Yusuf',
        'Zainab'
        'Chioma', 'Omawunmi', 'Fatima'
    );

    /**
     * An array of typical Nigerian lastnames.
     */
    protected static $lastName = array(
        'Abiodun', 'Abiola', 'Abodunrin', 'Abosede', 'Adaobi', 'Adebayo', 'Adegboye', 'Adegoke', 'Ademayowa', 'Ademola', 'Adeniyan', 'Adeoluwa', 'Aderinsola', 'Aderonke', 'Adesina', 'Adewale', 'Adewale', 'Adewale', 'Adewunmi', 'Adewura', 'Adeyemo', 'Afolabi', 'Afunku', 'Agboola', 'Agboola', 'Agnes', 'Aigbiniode', 'Ajakaiye', 'Ajose-adeogun', 'Akeem-omosanya', 'Akerele', 'Akintade', 'Aligbe', 'Amaechi', 'Aminat', 'Aremu', 'Atanda', 'Ayisat', 'Ayobami', 'Ayomide', 'Ayomide',
        'Babalola', 'Babatunde', 'Balogun', 'Bamisebi', 'Bello', 'Busari',
        'Chibike', 'Chibuike', 'Chidinma', 'Chidozie', 'Christian', 'Clare',
        'David', 'David',
        'Ebubechukwu', 'Egbochukwu', 'Ehigiator', 'Ekwueme', 'Elebiyo', 'Elizabeth', 'Elizabeth', 'Elizabeth', 'Emmanuel', 'Emmanuel', 'Esther',
        'Funmilayo',
        'Gbadamosi', 'Gbogboade', 'Grace',
        'Habeeb', 'Hanifat', 'Isaac',
        'Ismail', 'Isokun', 'Isreal', 'Iyalla',
        'Jamiu', 'Jimoh', 'Joshua', 'Justina',
        'Katherine', 'Kayode', 'Kayode', 'Kimberly',
        'Ladega', 'Latifat', 'Lawal', 'Leonard',
        'Makuachukwu', 'Maryam', 'Maryjane', 'Mayowa', 'Miracle', 'Mobolaji', 'Mogbadunade', 'Motalo', 'Muinat', 'Mukaram', 'Mustapha', 'Mutiat',
        'Ndukwu', 'Ngozi', 'Nojeem', 'Nwachukwu', 'Nwogu', 'Nwuzor',
        'Obiageli', 'Obianuju', 'Odunayo', 'Odunayo', 'Ogunbanwo', 'Ogunwande', 'Okonkwo', 'Okunola', 'Oladeji', 'Oladimeji', 'Olaoluwa', 'Olasunkanmi', 'Olasunkanmi-fasayo', 'Olawale', 'Olubukola', 'Olubunmi', 'Olufeyikemi', 'Olumide', 'Olutola', 'Oluwakemi', 'Oluwanisola', 'Oluwaseun', 'Oluwaseyi', 'Oluwashina', 'Oluwatosin', 'Omobolaji', 'Omobolanle', 'Omolara', 'Omowale', 'Onohinosen', 'Onose', 'Onyinyechukwu', 'Opeyemi', 'Osuagwu', 'Oyebola', 'Oyelude', 'Oyinkansola',
        'Peter',
        'Sabdat', 'Saheed', 'Salami', 'Samuel', 'Sanusi', 'Sarah', 'Segunmaru', 'Sekinat', 'Sulaimon', 'Sylvester',
        'Taiwo', 'Tamunoemi', 'Tella', 'Temitope', 'Tolulope', 
        'Uchechi',
        'Wasiu', 'Wilcox', 'Wuraola',
        'Yaqub', 'Yussuf' );
}
