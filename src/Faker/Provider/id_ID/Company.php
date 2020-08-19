<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{lastName}} {{companySuffix}}',
    );

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companyPrefix = array('PT', 'CV', 'UD', 'PD', 'Perum');

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companySuffix = array('(Persero) Tbk', 'Tbk');

    /**
     * @link https://id.wikipedia.org/wiki/Daftar_pekerjaan
     */
    protected static $jobTitleFormat = array(
        'Administrator', 'Agen Asuransi', 'Agen Perjalanan', 'Agen Rahasia', 'Ahli Cuaca', 'Ahli Gizi', 'Aktor / Aktris', 'Akuntan', 'Antariksawan', 'Apoteker', 'Arsitek', 'Arkeolog', 'Asisten Rumah Tangga', 'Atlet',
        'Bartender', 'Biarawan / Biarawati', 'Bidan', 'Biksu', 'Blogger', 'Bupati', 'Buruh',
        'Camat', 'Calo',
        'Desainer', 'Detektif', 'Direktur', 'Dokter', 'Dosen', 'Dukun',
        'Editor',
        'Fotografer',
        'Gubernur', 'Guru',
        'Hakim',
        'Ilmuwan', 'Ilustrator', 'Inspektur', 'Insinyur', 'Ibu Rumah Tangga', 'Instruktur Olahraga',
        'Jaksa', 'Jurnalis',
        'Karyawan', 'Kasir', 'Koki', 'Komikus', 'Komisaris', 'Kondektur', 'Konsultan', 'Kurir',
        'Lurah',
        'Makelar', 'Manajer', 'Marketing', 'Marinir', 'Masinis', 'Model', 'Montir', 'Musisi',
        'Nahkoda', 'Nelayan', 'Novelis', 'Notaris',
        'Operator',
        'Pedagang', 'Pegawai Negri', 'Pelaut', 'Pelayan', 'Pelawak', 'Pelukis', 'Pemadam Kebakaran', 'Pemahat', 'Pemain Bulu Tangkis', 'Pemain Basket', 'Pemain Musik', 'Pemain Sepak Bola', 'Pemeran Pengganti', 'Penagih Hutang', 'Penari', 'Pendeta', 'Peneliti', 'Penerjemah', 'Pengacara', 'Pengasuh Anak', 'Pengawal', 'Pengisi Acara', 'Pengisi Suara', 'Pengrajin', 'Pengusaha', 'Penulis', 'Penyanyi', 'Perancang Busana', 'Perancang Grafis', 'Perawat', 'Perdana Menteri', 'Peretas', 'Perias Wajah', 'Petani', 'Peternak', 'Pesulap', 'Petugas Kebersihan', 'Petugas Forensik', 'Petinju', 'Polisi', 'Politikus', 'Pramugara / Pramugari', 'Psikiater', 'Psikolog', 'Pilot', 'Pramusaji', 'Presiden', 'Pustakawan',
        'Raja', 'Ratu', 'Resepsionis',
        'Satpam', 'Sekretaris', 'Seniman', 'Sipir', 'Supir', 'Supir Angkot', 'Supir Bus', 'Supir Taksi', 'Supir Truk', 'Sutradara',
        'Tengkulak', 'Tentara', 'Tukang AC', 'Tukang Bangunan', 'Tukang Bakso', 'Tukang Batu', 'Tukang Cuci Mobil', 'Tukang Cukur', 'Tukang Kayu', 'Tukang Kebun', 'Tukang Las', 'Tukang Ledeng', 'Tukang Listrik', 'Tukang Parkir', 'Tukang Pijat', 'Tukang Sate', 'Tukang Sayur', 'Tukang Tambal Ban',
        'Ulama',
        'Walikota', 'Wartawan', 'Wasit', 'Wirausahawan',
        'Youtuber'
    );

    /**
     * Get company prefix
     *
     * @return string company prefix
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Get company suffix
     *
     * @return string company suffix
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }
}
