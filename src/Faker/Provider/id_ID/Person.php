<?php

namespace Faker\Provider\id_ID;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{middleNameMale}} {{lastNameMale}}'
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{middleNameFemale}} {{lastNameFemale}}'
    );

    /**
     * This list is more or less the same as in \Faker\Provider\fr_FR\Person.php
     * Some common names were added and other removed.
     */
    protected static $firstNameMale = array(
        'Ahmad', 'Adi', 'Aditya', 'Agung', 'Agus', 'Angga', 'Arif', 'Asep', 
        'Bagus', 'Bayu', 'Budi', 
        'Chandra',
        'Dani', 'Dimas', 'Dede', 'Dedi',
        'Eko',
        'Fajar', 'Fahri', 'Firman', 'Fauzi',
        'Gading', 'Gilang',
        'Hadi', 'Halim', 'Hasim', 'Hendra', 'Heryanto',
        'Imam', 'Indra', 'Irwan',
        'Johan', 'Joko',
        'Kurnia',
        'Lukman', 'Luthfi',
        'Muhammad', 'Mustofa',
        'Prima', 'Putu',
        'Rahmat', 'Rendy', 'Reza', 'Rizki', 'Ridwan', 'Rudi',
        'Saiful', 'Surya',
        'Taufik', 'Tomi',
        'Wahyu', 'Wira', 'Wisnu', 
        'Yusuf', 'Yono', 'Yoga',
        'Zainal'
    );

    protected static $firstNameFemale = array(
        'Ade', 'Agnes', 'Ajeng', 'Amalia', 'Anita', 'Ayu', 
        'Citra', 
        'Devi', 'Dewi','Dian', 'Diah', 'Diana', 'Dina', 'Dinda',
        'Eka', 'Eva', 'Endah',
        'Fitria', 'Fitriani',
        'Hesti',
        'Ika', 'Indah', 'Intan', 'Irma',
        'Maria', 'Maya', 'Mutia',
        'Novi', 'Nova', 'Nurul',
        'Olivia',
        'Putri',
        'Ratih', 'Ratna', 'Restu', 'Rini', 'Rika', 'Rina', 'Rahayu',
        'Sari', 'Siti', 'Siska', 'Suci', 'Syahrini', 
        'Winda', 'Widya', 'Wulan'
        'Yani', 'Yessi', 'Yulia', 'Yuni', 'Yunita',
    );

    protected static $middleNameMale = array(
        'Ali',
        'Abu',
        'Ari',
        'Akbar',
        'Guntur',
        'Iqbal',
        'Setyo',
        'Winata'
    );

    protected static $middleNameFemale = array(
        'Ayu',
        'Dwi',
        'Esa',
        'Eka',
        'ika',
        'Nur',
        'Sri',
        'Tri'
    );

    /**
     * These last names come from this list of most common family names in Québec (1 to 130)
     * http://fr.wikipedia.org/wiki/Liste_des_noms_de_famille_les_plus_courants_au_Québec
     */
    protected static $lastNameMale = array(        
        'Adriansyah', 'Ardianto', 'Anggriawan',
        'Budiman', 'Budiyanto',
        'Firmansyah',
        'Gunarto', 'Gunawan', 
        'Hardiansyah', 'Habibi', 'Hakim', 'Halim', 'Haryanto', 'Hidayat', 'Hidayanto', 
        'Irawan', 'Iswahyudi',     
        'Januar',
        'Kurniawan', 'Kusumo',
        'Mahendra', 'Mustofa',
        'Natsir', 'Nugroho',
        'Putra', 'Pranowo', 'Prabowo', 'Prasetya', 'Prasetyo',
        'Ramadan',
        'Saptono', 'Saputra', 'Saefullah', 'Setiawan', 'Suryono', 'Suwarno', 'Siregar',
        'Utama',
        'Wibowo', 'Winarno', 'Wibisono', 'Wijaya', 'Widodo',
        'Zulkarnain'
    );

    /**
     * These last names come from this list of most common family names in Québec (1 to 130)
     * http://fr.wikipedia.org/wiki/Liste_des_noms_de_famille_les_plus_courants_au_Québec
     */
    protected static $lastNameFemale = array(
        'Agustina', 'Andriani', 'Anggraini', 'Aryani', 'Astuti',
        'Fujiati',
        'Handayani', 'Hassanah',
        'Kusmawati', 'Kuswandari',
        'Lestari',
        'Mayasari', 'Mulyani',
        'Nurdiyanti',
        'Puspasari', 'Puspita', 'Purwanti', 'Pratiwi', 'Purnawati',
        'Rahmawati', 'Rahayu', 'Riyanti', 
        'Suartini', 'Sudiati', 'Suryatmi', 'Susanti',
        'Oktaviani',
        'Utami',
        'Yuliarti', 'Yulianti', 'Yolanda',
        'Wahyuni', 'Wijayanti', 'Widiastuti', 'Winarsih', 'Wulandari',
        'Zulaika'
    );
}
