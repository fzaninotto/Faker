<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(            
        '{{companyPrefix}} {{companyName}}',
        '{{companyPrefix}} {{companyName}}',
        '{{companyPrefix}} {{companyName}}',
        '{{companyPrefix}} {{companyName}} {{companySuffix}}'
    );    

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companyPrefix = array('PT', 'CV', 'UD', 'PD', 'Perum');

    protected static $companySuffix = array('Tbk');

    /**
     * @link http://www.idx.co.id/id-id/beranda/perusahaantercatat/profilperusahaantercatat.aspx
     */
    protected static $companyName = array(
        'Astra Agro Lestari', 'Air Asia', 'Axis', 'Angkasa Pura', 'Antam', 
        'Ace Hardware', 'Adaro Energy', 'ABM Investama', 'Adhi Karya',
        'Akbar Indomakmur', 'Asuransi Bina Dana Arta', 'Adira Finance',
        'Acset Indonusa', 'Akasha Wira', 'Asuransi Harta Aman', 'Alakasa',
        'Argha Karya Prima', 'Alkindo Naratama',
        'Bank Rakyat Indonesia', 'Bank Mandiri', 'Bank Permata', 
        'Borneo Lumbung Energi', 'Batavia Prosperindo', 'Berau Coal', 'Berlina',
        'Bumi Serpong Damai', 'Bakrie Telecom', 'Barito Pacific', 
        'Bank Sinarmas', 'Baramulti Sukses', 'Bumi Teknokultura',
        'Capitol Nusantara Indonesia', 'Cardig Aero Services', 'Cita Mineral',
        'Clipan Finance Indonesia', 'Cakra Mineral', 'Colorpark Indonesia',
        'Centex', 'Cowell Development', 'Cipaganti Citra Graha', 'Centris',
        'Dwi Aneka Jaya', 'Duta Anggada Realty', 'Davomas Abadi', 'Darma Henwa',
        'Delta Djakarta', 'Delta Dunia Makmur', 'Duta Perwiti Nusantara',
        'Dharma Samudra', 'Dharma Satya Nusantara', 'Darya Varia Laboratoria',
        'Electronic City Indonesia', 'Ekadharma International', 'Elnusa',
        'Elang Mahkota Teknologi', 'Energi Mega Persada', 'Erajaya Swasembada',
        'Eratex Djaja', 'Ever Shine Textile', 'Eterindo Wahanatama',
        'Fast Food Indonesia', 'Fajar Surya Wisesa', 'FKS Multi Argo', 
        'Fortune Mate Indonesia', 'Fortune Indonesia',
        'Garuda Indonesia', 'Gading Development', 'Gunawan Dianjaya Steel',
        'Goodyear Indonesia', 'Gema Grahasarana', 'Golden Energy Mines',
        'Gudang Garam', 'Gajah Tunggal', 'Global Teleshop', 'Grahamas Citra',
        'Gowa Makassar Tourism', 'Golden Retailindo', 'Garda Tujuh Buana',
        'HD Capital', 'HD Finance', 'Hero Supermarket', 'HM Sampoerna', 
        'Harum Energy', 'Humpuss Intermoda Transportasi', 'Hotel Mandarine',
        'Indonesia Transport', 'Inti Bangun Sejahtera', 'Indofood CBP Sukses' ,
        'Island Concepts Indonesia', 'Intikeramik Alamasri', 'Indomobil Sukses',
        'Indofarma', 'Indal Alumunium', 'Intanwijaya Internasional', 'Indosat',
        'Jaya Agra Wattie', 'Jemblo Cable Company', 'Jakarta International',
        'Jakarta Kyoei Steel Works', 'JAPFA Comfeed', 'Jaya Pari Steel', 
        'Jaya Real Property', 'Jasa Marga', 'Jakarta Setiabudi Internasional',
        'Kimia Farma', 'KMI Wire and Cable', 'Kabelindo Murni', 'Kertas Basuki',
        'Keramika Indonesia', 'Kedaung Indah', 'Kawasan Industri Jababeka', 
        'Kalbe Farma', 'Kobexindo Tractors', 'Kokoh Inti Arebama', 'Kereta Api',
        'Lamicitra Nusantara', 'Leyand International', 'Logindo Samudramakmur',
        'Link Net', 'Lion Metal Works', 'Limas Centric Indonesia', 'Lionmesh', 
        'Lotte Indonesia', 'Lippo General Insurance', 'Lippo Karawaci',
        'Multi Agro Gemilang Plantation', 'Malindo Feedmill', 
        'Matahari Department Store', 'Mahaka Media', 'Mitra Adiperkasa',
        'Modernland Realty', 'Modern International', 'Medco Energi',
        'PLN', 'Pegadaian', 'Pos Indonesia', 'Polychem Indonesia', 
        'Pacific Strategic', 'Panin Sekuritas', 'Pelangi Indah Canindo',
        'Pembangunan Jaya Ancol', 'Polaris Investama', 'Plaza Indonesia Realty',
        'Ratu Prabu Energi', 'Rukun Raharja', 'Ramayana Lestari', 
        'Roda Vivatex', 'Reliance Securities', 'Rig Tenders', 'Radiant Utama',
        'Steady Safe', 'Supreme Cable', 'Sarana Meditama', 'Sampoerna Agro',
        'Smart', 'Sumber Alfaria Trijaya', 'Siloam International Hospital',
        'Telkom', 'Telkomsel', 'Tiga Pillar', 'Tri Banyan Tirta', 'Tunas Alfin',
        'Tower Bersama Infrastructure', 'Tigaraksa Satria', 'Timah', 
        'Ultra Jaya Milk Industry', 'Unggul Indah Cahaya', 'United Tractors', 
        'Unixtex', 'Unilever Indonesia',
        'Victoria Investama', 'Visi Media Asia', 'Voksel Electric',
        'Verena Multi Finance',
        'Wahana Pronatural', 'Wicaksana Overseas International', 
        'Waskita Karya', 'Wismilak Inti Makmur', 'Wijaya Karya', 
        'Wijaya Karya Beton', 'Wintermar Offshore Marine',
        'XL Axiata',
        'Yanaprima Hastapersada', 'Yulie Sekurindo',
        'Zebra Nusantara'
    );
    
    /**
     * Get company prefix
     * @return string company prefix
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }    

    /**
     * Get company name
     * @return string company name
     */
    public static function companyName()
    {
        return static::randomElement(static::$companyName);
    }
}
