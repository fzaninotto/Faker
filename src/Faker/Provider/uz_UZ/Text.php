<?php

namespace Faker\Provider\uz_UZ;

/**
 * Class Text
 * Description: CONGRATULATIONS BY PRESIDENT ISLAM KARIMOV AT THE CEREMONY
 * DEDICATED TO THE 20TH ANNIVERSARY OF INDEPENDENCE OF THE REPUBLIC OF UZBEKISTAN
 *
 * @category  Classes
 * @package   Faker\Provider\uz_UZ
 * @author    Erkin Pardayev <erkin.pardayev@gmail.com>
 * @copyright 2020 Erkin Pardayev
 * @license   GNU https://ru.wikipedia.org/wiki/GNU_General_Public_License
 * @link      https://pardayev.uz
 */

class Text extends \Faker\Provider\Text
{
    /**
     * @param int $maxNbChars
     * @param int $indexSize
     * @return false|string
     */
    public function realText($maxNbChars = 200, $indexSize = 2)
    {
        $realText = parent::realText($maxNbChars, $indexSize);

        return iconv('UTF-8', 'UTF-8//IGNORE', $realText);
    }
    
    /**
     * From http://old.president.uz
     * @see http://old.president.uz/uz/news/184/
     *
     * Title: PREZIDENT ISLOM KARIMOVNING O‘ZBEKISTON RESPUBLIKASI MUSTAQILLIGINING 20 YILLIGIGA BAG‘ISHLANGAN TANTANALI MAROSIMDAGI TABRIK SO‘ZI
     *
     * Author: Islom Karimov
     *
     * Posting Date: 31.08.2011
     *
     * Language: Uzbek
     *
     * @see     https://wikimediafoundation.org/wiki/Terms_of_Use/
     * @link    http://ru.wikisource.org/wiki/%D0%9C%D1%91%D1%80%D1%82%D0%B2%D1%8B%D0%B5_%D0%B4%D1%83%D1%88%D0%B8_(%D0%93%D0%BE%D0%B3%D0%BE%D0%BB%D1%8C)/%D0%A2%D0%BE%D0%BC_I/%D0%93%D0%BB%D0%B0%D0%B2%D0%B0_I
     * @var string
     */
    protected static $baseText = <<<'EOT'
Assalomu alaykum, aziz vatandoshlar!
Hurmatli mehmonlar!
Bugun – barcha shahar va qishloqlarimizda, butun mamlakatimizda muborak ayyom, unutilmas tarixiy sana – O‘zbekistonimiz mustaqillikka erishganining yigirma yillik buyuk bayrami.
Bundan yigirma yil muqaddam biz yurtimizda mustamlaka zulmi va qaramlik davriga barham berib, asrlar davomida xalqimiz intilib kelgan erkin va ozod hayot qurish yo‘lida tarixiy taraqqiyotning yangi bosqichiga qadam qo‘ydik.
Biz uchun eng buyuk va eng aziz bo‘lgan ana shu qutlug‘ bayram bilan siz azizlarni, sizlar orqali butun xalqimizni chin qalbimdan tabriklab, yuksak hurmat va ehtiromimni bildirishdan cheksiz baxtiyorman.
O‘zining necha ming yillik ko‘hna tarixida ne-ne voqealarni boshidan kechirgan xalqimiz uchun O‘zbekiston mustaqilligi, hayotimizni, ongu shuurimizni tubdan o‘zgartirgan bu ulug‘ sana ko‘p yillar, zamonlar o‘tsa-da, o‘z ahamiyati, qadr-qimmati va mohiyatini yo‘qotmaydigan, tom ma’noda olamshumul voqea bo‘lib abadiy saqlanib qolajak.
Muhtaram do‘stlar!
Biz o‘tgan davr mobaynida mustaqillikka erishish, erkin nafas olib, o‘z taqdiri va kelajagini o‘z qo‘li bilan qurish jahondagi bironta xalq, bironta mamlakat uchun hech qachon, hech qayerda oson bo‘lmagan, degan achchiq haqiqatni o‘z hayotimizdan o‘tkazdik, o‘z misolimizda chuqur angladik.
Darhaqiqat, bugun vaqt o‘tishi bilan yurtimizda o‘zini oqlamagan, eski mustabid tuzum asoratlari va zanjirlaridan ozod bo‘lish naqadar og‘ir kechganini, istiqlol arafasida respublikamizdagi vaziyat tobora keskinlashib, tahlikali va o‘ta xavfli tus olganini yana va yana bir bor o‘zimizga tasavvur qilishimiz o‘rinli bo‘ladi.
Biryoqlama rivojlangan, faqat xomashyo yetkazib berishga, mutlaq paxta yakkahokimligiga asoslangan iqtisodiyotimiz g‘oyat nochor ahvolga tushib qolgani, qashshoqlik va bedodlikka duchor bo‘lgan aholimizning sabr-kosasi to‘lib, o‘lkamiz jar yoqasiga, portlab ketish holatiga yetib borganini, odamlarimizning ta’minoti, jamiyatda sog‘lom muhitni qaror toptirish muammolari naqadar o‘tkir bo‘lib turganini eslaydigan bo‘lsak, ayni shu yillardagi mavjud vaziyat butun murakkabligi bilan ayon bo‘ladi.
Bugun bir haqiqatni sira ikkilanmasdan, baland ovoz bilan aytish uchun barcha asoslarimiz bor: istiqlol yo‘lida qanday suronli kunlarni, qiyinchilik va to‘siqlarni yengishga to‘g‘ri kelmasin, yurtimizga nisbatan qanday xuruj, zug‘um va po‘pisalar bo‘lmasin, biz eng og‘ir va mashaqqatli damlarda ham mustaqillik g‘oyasiga sodiq qolib, O‘zbekiston manfaatini hamma narsadan ustun qo‘yib, o‘z tanlagan yo‘limizdan qaytmadik va bu yo‘ldan hech qachon qaytmaymiz.
Biz yurtimizda yangi hayot barpo etishning birinchi kunlaridan boshlab haqiqiy erkinlik va istiqlolga erishish – bu faqat mustaqillikni qo‘lga kiritish emas, balki uni ham siyosiy, ham iqtisodiy jihatdan qurish va mustahkamlash, xalqaro hamjamiyatda o‘zimizga munosib o‘rin egallash va hurmat qozonishdan iborat ekanini teran anglab oldik.
Ana shunday ezgu maqsadlarga erishish yo‘li esa barchamizga yaxshi ma’lum: bu – o‘zimizning yer osti va yer usti boyliklarimizdan, ishlab chiqarish va intellektual salohiyatimiz, kuch-qudratimizdan foydalanib, ko‘pni ko‘rgan, mehnatkash xalqimizning aql-zakovati, g‘ayrat-shijoatiga va xalqaro hamjamiyat hamkorligiga tayanib, dunyodagi zamonaviy rivojlangan demokratik davlatlar qatoriga kirish yo‘lidir.
Aholimizning hayot sifati va darajasini yangi, yuksak bosqichga ko‘tarish, shu maqsadda mamlakatimiz hayotining barcha jabhalarini demokratik yangilash, liberallashtirish va modernizatsiya qilish, ushbu jarayonlarning sur’atini imkon darajasida tezlashtirish – biz uchun eng maqbul yo‘ldir.
Ayni shu yo‘l yigirma yillik yangi tariximiz davomida har tomonlama o‘zini oqlab, isbotlab bergan, jahonda “O‘zbek modeli” deb nom olgan eng to‘g‘ri yo‘l, desam, mana shu muhtasham maydonda o‘tirgan siz azizlarning, keng jamoatchiligimiz, butun xalqimizning fikrini ifoda etgan bo‘laman.
O‘tgan davr mobaynida biz erishgan yuksak marralar haqida uzoq gapirish, ko‘plab raqamlarni olib kelish mumkin. Shular qatorida O‘zbekiston iqtisodiyoti yigirma yil mobaynida qariyb 3,4 barobar, o‘rtacha ish haqi 14 barobar o‘sgani, aholining yalpi daromadi taxminan 9 marta oshgani bizning mustaqillik yillarida qanday ulkan marralarni qo‘lga kiritganimizni namoyon etmoqda.
Jahon moliyaviy-iqtisodiy inqirozi hali-beri davom etayotganiga qaramasdan, O‘zbekistonimizning yalpi ichki mahsulotining o‘sish sur’atlari oxirgi besh yil davomida dunyodagi sanoqli davlatlar qatorida o‘rtacha 8,5 foizni tashkil etgani va bu yil ham undan kam bo‘lmasligi kutilayotgani iqtisodiyotimizning izchil va barqaror rivojlanib, taraqqiy topayotganining yaqqol dalilidir.
Istiqlol yillarida ijtimoiy soha uchun davlat xarajatlari 5 barobardan ziyod ko‘paygani, uning 60 foizdan ko‘prog‘i sog‘liqni saqlash, ta’lim, kommunal xo‘jalik, aholini ijtimoiy muhofaza qilish va boshqa sohalarga yo‘naltirilgani ham dunyo miqyosida kamdan-kam uchraydigan ko‘rsatkich bo‘lib, bizning bosh maqsadimiz avvalambor inson hayotini, uning manfaatlarini ta’minlash va himoya qilishga qaratilganini har tomonlama isbotlab beradi.
Aynan shu asosda yigirma yil davomida yurtimizda bir yoshgacha bo‘lgan go‘daklar va onalar o‘limi 3 barobardan ko‘proq kamaygani, odamlarimizning o‘rtacha umr ko‘rish darajasi 7 yilga uzayib, erkaklar o‘rtasida 73 yoshga, ayollar o‘rtasida esa 75 yoshga yetgani, bugungi kunda aholimiz soni 28,5 million kishini tashkil qilayotgani, hech shubhasiz, buni yana bir bor tasdiqlab beradi.
Aziz do‘stlarim, birodarlarim!
Biz qo‘lga kiritgan bu yuksak marralarning ildizi, zamini nimada, degan savolga har birimiz hech ikkilanmasdan, bularni barchasining zamirida avvalo mustaqillik deb atalgan bebaho ne’mat, xalqimizning fidokorona mehnati, uning tobora yuksalib borayotgan ongu tafakkuri, ertangi kunga bo‘lgan ishonchi, ezgu orzu-intilishlari mujassam, deb katta g‘urur va iftixor bilan aytishimiz tabiiydir.
Bugun mana shu saxovatli zaminda “O‘zbekiston – yagona uyimiz” deb yashayotgan, qaysi kasb egasi, qaysi millat va elat vakili bo‘lmasin, barcha yurtdoshlarimiz Vatanimiz qo‘lga kiritgan yutuqlar, erishgan marralarda mening ham munosib mehnatim, munosib hissam bor, deb boshini baland ko‘tarib, mag‘rurlanib gapirishga to‘la haqlidir, desak, ayni haqiqatni aytgan bo‘lamiz.
Mana shu yuksak minbardan turib, bizga doimo xayrixoh bo‘lib, qo‘llab-quvvatlab, yordam va ko‘mak berib kelayotgan do‘stu birodarlarimizga, yurtimiz bilan samarali hamkorlik qilayotgan mamlakatlar va xalqlarga minnatdorlik bildirib, qizg‘in salomlarimizni yo‘llashga, ularga baxt va ravnaq tilashga ruxsat bergaysiz.
Fursatdan foydalanib, shu muazzam maydonda jam bo‘lgan xorijiy davlatlarning elchilari va xalqaro tashkilotlarning vakillariga, barcha aziz mehmonlarimizga, bizning bugungi bayramimiz – sizlarning ham bayramingizdir, deb, ularni chin yurakdan qutlab, samimiy hurmat va ehtiromimizni izhor etsak, ayni muddao bo‘ladi.
Qadrli yurtdoshlar!
Istiqlol bizga bergan bebaho boylik va imkoniyatlar, erishgan natijalarimiz haqida ko‘p so‘z yuritish mumkin. Ayni vaqtda mustaqillik tarixiga aslo o‘chmaydigan, yorqin sahifa bo‘lib yoziladigan ulkan marralarimiz qatorida shunday buyuk bir yutug‘imiz borki, uning ahamiyatini hech narsa bilan o‘lchab, baholab bo‘lmaydi.
Men buni zamonaviy bilim va kasb-hunarlarni puxta egallagan, mustaqil fikrlaydigan, hayotimizda tobora hal qiluvchi kuchga aylanib borayotgan sog‘lom va barkamol avlodimiz timsolida ko‘raman.
Bugun mana shu keng maydonni to‘ldirib, o‘zining navqiron azmu shijoatini namoyon etib o‘tirgan, mening farzandlarim bo‘lgan siz o‘g‘il-qizlarimga, sizlar orqali butun yurtimiz yoshlariga qarata aytmoqchiman:
Aziz bolalarim, Ollohning nazari tushgan, O‘zbekiston deb atalmish go‘zal va betakror o‘lkada tug‘ilish, uning bag‘rida kamol topish har kimga ham nasib etmaydi. Ana shu haqiqat har biringizning qalbingizdan, yuragingizdan chuqur joy olishini istardim. Vatan sevgisi, Vatanga sadoqat tuyg‘usi sizlarga umrbod yor bo‘lsin.
Ne-ne og‘ir sinovlar, to‘fon va suronlarni boshdan kechirib, qancha-qancha qurbonlar berib, ona yurtimizni omon saqlagan, bizga bezavol yetkazgan ajdodlarimiz, ota-bobolarimizning bu yo‘lda qanday katta mehnatlari singganini hech qachon unutmaslik, ularning xotirasi va hurmatini joyiga qo‘yish biz uchun ham qarz, ham farzdir.
Mana shunday hissiyotlarni qalbdan o‘tkazib, barchamiz uchun yakkayu yagona bo‘lgan Vatanimizni yanada gullatib-yashnatish, uning yorug‘ va farovon kelajagi uchun butun borlig‘imizni bag‘ishlab, kerak bo‘lsa, jonimizni fido etishga ham tayyor bo‘lish – har birimizning muqaddas burchimizdir, desam, o‘ylaymanki, siz aziz farzandlarimning dilida bo‘lgan olijanob tuyg‘ularni ifoda etgan bo‘laman.
Aziz do‘stlarim, qadrli vatandoshlarim!
Bugungi ulug‘ ayyomning muborak Ramazon hayiti bilan aynan bir paytga to‘g‘ri kelgani ham Yaratganimizning el-yurtimizga ko‘rsatgan yana bir inoyati va marhamati, desam, o‘ylaymanki, sizlar ham bu fikrga qo‘shilasiz.
Barchangizni bag‘rimga bosib, Mustaqillik bayrami bilan, Ramazon hayiti bilan chin qalbimdan muborakbod etib, hammangizga sihat-salomatlik, baxt va omad, xonadonlaringizga fayzu baraka tilayman.
Buyuk va muqaddas Vatanimiz mangu bor bo‘lsin!
Yurtimiz tinch, osmonimiz musaffo, xalqimiz omon bo‘lsin!
Mustaqilligimiz abadiy bo‘lsin!
EOT;
}
