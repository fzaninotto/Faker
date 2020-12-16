<?php

namespace Faker\Provider\sk_SK;

class Text extends \Faker\Provider\Text
{
    public function realText($maxNbChars = 200, $indexSize = 2)
    {
        $text = parent::realText($maxNbChars, $indexSize);
        $text = str_replace('„', '', $text);

        return str_replace('“', '', $text);
    }

    /**
     * License: PD old 70
     *
     * Title: Hájnikova žena
     * Author: Pavol Országh-Hviezdoslav
     * Release Date: 1884/1886
     * Language: Slovak
     *
     * @see https://sk.wikisource.org/wiki/Hájnikova_žena
     * @var string
     *
     * Pavol Országh-Hviezdoslav
     * Hájnikova žena
     * Dielo digitalizoval Tomáš Ulej.
     * Ďalšie diela Pavla Országha-Hviezdoslava nájdete online na www stránkách
     * Zlatého fondu denníka SME: https://zlatyfond.sme.sk
     */
    protected static $baseText = <<<'EOT'
Pozdrav

Pozdravujem vás, lesy, hory,
z tej duše pozdravujem vás!
Čo mrcha svet v nás skvári, zmorí,
zrak jeho urknul, zmámila
lož, ohlušila presila:
vy k žitiu privediete zas,
vy vzkriesite, vy zotavíte,
z jatrivých vyliečite rán,
v opravdu priamom, bratskom cite
otvoriac lono dokorán,
a srdečnosť kde odveká,
kde nikdy nevyspela zrada,
bez dotazu, kto on, čo hľadá,
na lono to, hľa, v objem sladký
ramenom láskyplnej matky
pritúliac verne človeka...
Len okamih tam pobudnutia:
už mŕtvie bôľ, už slabnú putá,
zrak čistí sa, tlak voľneje,
i oživujú nádeje;
len jeden pokyn, zášum lesný,
len jeden horskej riavy skok:
a duša už sa ladí k piesni,
tkne sa jej bičík prečudesný —
a srdce hupká vozvysok;
len jedno orla skolotanie,
len jeden švihot sokola,
prez horu mužné zahvízdanie,
na holiach jeden záblesk vatry:
a nás už chváce povoľa,
duch už sa zažal, už sa jatrí,
plamenným krídlom šibe hor’,
jak v nebo naspäť meteor;
len chvíľka, ako vzdušný vlas
čo preletí nám ponad hlavu —
a už ju máme, myseľ hravú:
zmladenej duše prez dúbravu
tak strie sa, ako dúhy pás...
...Z tej duše pozdravujem vás!

I.

Jak hniezdo v tesnu parutí
v úkryte košatého krovia:
v hôr neprehľadnom zákutí
chalupa čuší hájnikova.
Tak bezpečne si stáva tu,
bez prepychu, bez závratu,
uprostred okrúhleho lázku,
rozvitom jak by na obrázku:
istejšie, pyšný nežli hrad,
čo predkov neslýchaná sila
do výše — by ho nedostať —
však v strachu, že by podkopali —
i tam na samorostlý sklad,
na tvrdé temä žulo-skaly
z balvanov skalných postavila,
skiaď večne pozoruje, číha
— pod sebou majúc šíry kraj,
kút každý jeho, záhyb, taj —
na postup snažieb, udalostí,
na príchod dobrých i zlých hostí,
jak a čo veští kraja kniha...
A obadal-li zlovesť v diali,
mrak pochybný že blíž sa valí,
že čos’ sa jak lesk zbroje mihá,
jak vzbury, války skiaďsi hluk —
hneď tisíc hotových má rúk:
tie dvíhajú už vzletné mosty,
kým v strmé hradu temeno
tie zas tam prápor sadia rudý
i ohne vatria v náhlivosti
na pokyn kraju, v popud ľudí;
tie, by i v diali vzrušeno —
na vežiach v spechu búrlivom
o zvony tlčú kladivom;
tu opasujú v broň a meč,
tam v ústa titlú suriem reč;
tie zo sklepov zas smrť a skazu
o závod vlečú k otvorom,
tie odpínajú na reťazu
hradových šelmí toporom,
tie... každá činí, každá stihne —
až všetko v odpor zriadeno,
obrana tak je pripravená,
že na prvý znak povelenia
na valoch, u brán, všade zrazu
hrad — horu zbrojných ramien zdvihne,
a každé jeho rameno
na úder, k paľbe vzťaženo
čnie, pokým vraha dočaká,
až kŕdeľ dôjde čiernych zrád...

Chalupa — tá sa neľaká
nič takého. Bo nezastala
si vyzývavo na štít brala,
nadutá vzdorom krutovlád,
nuž nemá príčiny sa báť,
že mam ju zvráti, podtne pád.
Zem sama je, jej nízky kút,
no ale pevná zeme hruď,
kam údy svoje poskladala.
A zem? — Ó, tá je verná, stála,
tá nejde spod nej ubehnúť!
A potom: tichá, skromná schrana,
do diaľnych zahrabaná hôr,
necíti k sláve povolania,
nie vôle revniť, sily v spor;
z tých úzkych svojich oblokov
nestrká vo svet bučné hlavy
kdejakých spupných nárokov,
nie hrvoľ zdutý, dravčí zor;
nevedie ošemetnej vravy —
v myšlienkach, túžbach, v hlase, slovu
tá výška zavše, čo jej krovu,
cit prostý, krotučké v nej mravy,
bez kalných sveta prítokov...
Po bleskoch veru nebaží,
svit ranný dosť ju oblaží;
slniečko bielej na podstene:
jej celé žitia pozlátenie,
a luny v okno padlá lúč —
tá k pokladom: ku mieru kľúč.
Pri beláskach a kúsku chleba
nežiada viacej — naskrz dosť —,
len krúžok blankytného neba,
tak jak ho nečujnými tesy,
by zrak mal kade k bohu dôjsť,
ponad ňu vykrojili lesy.
Veď preto ustúpila z cesty,
po ktorej búrou ženie svet,
že vyhnúť mu ni stihu niet;
hej, skromnosť i tu dosť sa vmiesti,
a bezpeč je, kde spokojnosť...
(Nuž nesypte smeť potupy
na skromné naše chalupy;
sú, pravda, hniezda, iba hniezda
z kostonkov, uschlých letorostov:
no vzácne detvou svojou prostou —
nad nimi klenbou samá hviezda;
nechajte byt ich voľným bytím,
ať žijú vlastným, rýdzim žitím!)

No ináč tiež je uistená
tam chalupa, má zruby tiež.
V úzadí: vrchu strmá vež,
časť nezborného ohradenia.
On chráni drsným pred severom,
jak obrovský by vztýčil štít;
i ženú nehody tým smerom,
však musejú sa odraziť.
On ako vojak na stráži,
čo k zemi primrel nepohnute;
dosť všeličo ho podráži,
no svaly predsa v pokoj skuté.
Tvár tuho, hrubo zbrázdená:
hja, tvrdú službu znamená;
a mnohý šrám sa černie v čele:
zas stopy zhubnej od ocele.
Tam stojí strážou od počiatku,
zbraň nikdy neschodí mu z pliec:
to ona, šišak, chocholec —
čo stupňovanom pri poriadku
vše na ňom zligoce sa, skmitá
podvečer ako k dňu keď svitá,
a v noci jasný nebom bod
tiež jeho jagotavý hrot...
Tak stojí strážou do merava,
zrak v jedno miesto upretý:
Na chalupu, či ozaj pláva
si ešte tam, čo labuť biela,
bezpečne v temnom smrečín mori?
Či ticho hrajú vlny hory?
Či za labuťou vzápätí
loď tajná zradu nevysiela?
A obadal-li zo strážnice,
že čos’ sa kol chalupy kutí:
priam skaboní sa jeho líce,
pŕs šírych postriebrená broň
sa zdme, zrak mrkne na pohon —
i strhne sa, a jako ľúty
popadne z pleca desnú zbraň
vo svoju starú, chrabrú dlaň
a už naň mieri, už naň cieli —
vtom durk! — i sype, mece strely,
jak ohnivý by pršal dážď.
A aby ešte preľstil zášť,
čo spásu hľadá na úteku:
prez more smrečín v ťažkom vleku
rozprestrie oblak, svoj to plášť...

Navôkol zase bujné lesy:
smrek, jedľa, sosna v družnej zmesi,
opreté husto bok o bok,
tak dvíhajúc sa vozvysok
pretekom ku nebeskej báni,
ich úber války nestrhaný...
Sú ako prsteň, kruho-stena,
kam chalupa je uzavrená,
múr preširoký, pavéza
pevnejšia nežli z železa,
tvŕdz tvrdšia z púhych než by skál:
bo hradbou ony, ony val,
zábradlia, stĺpy, bašty, zruby,
čo neporúcha, nepohubí
hocktorý zápas, ledaký
boj nevyvráti svojím vztekom,
čas nezavalí v priekopu,
a ktoré — pravé zázraky —
čím diaľ, tým väčšmi tuhnú vekom,
a ako čierne oblaky
odkiaľsi spoza obzoru —
tak vzchodia, rastú šírym vlekom
vždy vyšej nebies ku stropu.
Tie otáčajú chalupu
a bdením svojho pozoru
vždy sviežim neustále strežú...
I ježe-li sa niekdy stane,
že vrchu nebotyčnú vežu
vrah-víchor obehol a v bráne
horského zručal zástupu
od zlosti vztekle, nafúkane,
a v strmom, ťažkom postupu,
na černohrivom búro-vranci
tu ťarbavo, tam v bujnom tanci,
v podskoku samý po vrchovec
čo divý, pomätený lovec
— blesk a hrom zbrojou u boku —
sa zabral lesom poľovať,
štvať, márniť všetko, čo v ňom žije:
tu celá vôkol horovať,
jak obrov ríša odokliata,
hne z miest sa razom, rušia, chváta
na odpor, na zmar útoku,
rekovné šumiac harmónie;
smrek, jedľa, sosna jak by vlny
vo večnom vzraste, prítoku
sa rozkolíšu, a keď plný
už nimi jäz, až k prelevu
keď zježili a zdvihli šije:
hať sama zachce úlevu,
rozstúpi sa čo velevráta — —
a vlny lesa švistia, plynú
víťazne, víchru k potupe,
naprosto k slabej chalupe,
zo všetkých strán ju obstúpä
a vo chvoj takoj pozavinú...
Vrah-víchor môž’ už potom metať
z tetivy kuše, z pušky tlamy
šíp rudý, biele behanice,
brok, gule a prach chumelice,
môž’ jak chce trepať peruťami,
môž’ škubať spárom lačných supov:
to všetko márne pokusy;
čo zhrčil v krov sa nad chalupou,
hôr uzol neľzä porozpletať!
Ba celá víchra svevoľa
— čo v chate smelo plápolá —
ni svetielka ver’ nezdusí.
To skúsiv, v hanbe pod chvoj šupol — —

Jak hniezdo v skrytu parutí:
tak chalupa v hôr zákutí
uprostred zeleného lázku,
rozvitom sťa by na obrázku.
Kút ozaj skromný, ale milý...
Veď neveľmi sa grámorili,
po smrti starca hájnika
keď oprave ho podrobili.
Kde inde starosť všeliká,
tu — v žiadnej neoctli sa núdzi:
les klady mal už naporúdzi,
tie navalili, pokresali
hrbolce kde-tu tešlicami,
zdĺž odmerali kročajami,
vtom zápory a hever vzali,
obratne pritkli ku uhlom
a zakrútili, podvážili —
zvrt jeden-dva, i sfrungal dom,
jak koho zrazu podronili —
a keď už visel na šibeni,
vykopli spráchnivelé steny,
hneď brvná, klady dopratali
a šmykli novým podvalom —
ni raz si nepopľujúc dlane,
ni nezakľajúc, by ho hrom — —
Dom tupým praskom sadol na ne,
na brvná totiž. Keď už stál
na mieste pevne, bez kyvotu:
hoj, čo tam zvučných zrazu chvál
ho potkalo! A bez chichotu —
ten to, ten onô povedal —
napríklad: na tom piedestále
vraj tak si sedí jak na skale,
krt veraže ho nepodryje;
ni žiaden príval nepodmyje;
bezmála vraj tak vyzerá,
jak z vaječnej by zo škrupiny;
bezpečne môž’ vraj do dediny,
ba čoby — zrovna do mesta!
Len tomu nie, kto preberá —
lež všetkým ni boh nevyhovie!
Tak jeden-druhý staviteľ,
až všetci v tom sa zhodli slove,
že nech si hockto, čo chce, povie,
bársaký pravdy rušiteľ:
ten starý hájnik starobu
i chalupy vzal do hrobu,
tak ver’! Kto ináč mieni, súdi,
nech odpustí, lež zrejme blúdi —
obnažil vlastnú chudobu,
ver’ potu práce ešte nepil,
ni hniezda nikdy neulepil,
je turoň — mamľas, ochlasta...!
A potom, ak dač ešte chybí
— a ľudské dielo kde bez chyby? —
keď les tu, chvoj v ňom, mäkký moch
i hojnosť pružnej rašeliny,
hafirčia, páper feračiny:
jak vták-samička v jarných dňoch
doplní snadno nevesta,
nech má len rezkosť horskej ryby.
— Tesárom teda dosť sa zdalo,
že vteružili podstavec,
ostatné to vraj gazdu vec,
nech pláce, lepí, ondie šaľo —
tak dudrali. No nakoniec,
či chceli, či nie, preds’ sa stalo
— jak? čo po tom? — že staré jedly
odľava chaty povalili,
hej, povalili rukou zlobnou,
na biele dosky popílili,
a chalupu, sťa zásterou,
povláčkou opásali zdobnou.
Keď i tá bola hotová,
tu potom si len ešte viedli,
jak nedostižní majstrovia
s najvyššou sebadôverou;
tvrdili a sa zadušali:
že kresaná je jak zo skaly,
vraj i sto chlapov že by zvládla —
s tým hneď aj riadkom vyšli na ňu,
na próbu všetci podupkali,
a nájduc, že je dokonalá,
že nekývla sa pri tanci,
sťa roztopašní šarvanci
vraz chytili sa operadla,
a v horskú zatúkajúc stranu:
„Hohó! hop, chlapci! tuľalala!“
dol’ krepkým hupkom poskákali;
zem ťažko zdunela a stuhla —
širákmi tisina sa uhla...
— I okná obrúbili mriežkou,
štít zase cifrovanou strieškou,
a v stredok štítnej polohy
pribili zrutné parohy.
Konečne k dverám dali schody,
šesť schodkov z dosák jedľových
jak papier bielych, po ktorých
priam z pažitného zo dvora
tak hybko v pitvorec sa vchodí,
tak ľahko v stínoch polahody
nakloneného javora...
Napravo záhradôčka malá,
čo treba, aby dochovala —
No bárs je malá, pri tom všetkom,
či dvierkami, či prez plot letkom
i kvetinám dnu voľno vnísť:
toť tam noc čaká fiala,
noc, aby vôňou dýchala —
tu jozefček — tam rozmajrín
(ten pospolitej lásky syn)
sa vánkom milo kyvotá —
stred hriadky cyprus pobratim
zas kudlí sa jak chvoje dym —
po krajoch opäť klincov chvist —
tam v kúte božedrievä zase
si drieme, nechtík tuto v jase —
tam panimáriový list —
a iná kvietkov prostota.
Za plôtkom horská riava hučí,
jak z kotla čo by do kotliny
ju prelieval — až zmĺkne v bučí,
obstatá býlím lopušiny.
Čo zvisla plotom, na povoji
jej fŕskot sa to skvie a rojí.
Len ona, ten jej hron a šum,
keď z podmôľ van ho vychytil,
čo preruší vše, prerazí
velebnú tichosť lesných dúm,
jak rinkotanie reťazi —
reťazi, čo však neväzí,
neputná nohy, ani um,
nezviera v svoj kruh ducha, ktorý
sem orlom vletel medzi hory,
by slobodou sa nasýtil,
a duchom že je, pocítil...
Len ona, často čo sa vmieša
vo švihotavý halúz zun,
keď vánkov prsty hravo spešia
náladou ihličových strún —
len ona, čo sa v súzvuk tiesni,
jak drsný, temný barytón,
ku vzletnej penkava keď piesni
najvyšší narazila tón,
keď kolotavá kvíčala,
tá lesa trúchla píšťala,
zapískla tiahlo ponad stráne,
v haluziach zvrelo hrkútanie
jak sprievodom, sťa rujné dudy —
v to hlasný zvonkot hrdlice
sa ozval, v kúre živice
jak v chráme spiež, čo k vzdychu budí,
či švehol zjasal poľnice —,
keď havran roztúžil sa v chválach,
na grúni splašiac srniek zhon,
a drozd, jak na poľane valach
na prste, zhvízdal napokon...
keď... Ináč — ticho: naslúchanie
jak v celom lesnom okrese,
kyv bezhlučný a kolimbanie;
len z holí prudké vetrov vanie
ak ponad les vše prinesie
so zvesťou zavždy dažďo-sľubnou
tu zvoncov kvil, zas tlkot bubnov —
len vtedy tiež čo vzruch sa stane,
ak totiž poozvú sa jare,
keď statky ženú na košiare,
a vtedy čo sa zvíri znovu,
keď, avšak zriedka, prídu k lovu —
ináčej tichosť, naslúchanie...
Jak v hniezde v skrytu parutí:
tak iste, pokojne tu scela.
Niet pohnutí, niet napnutí —
tu hluku sveta odumrela
naprosto myseľ človeka;
niet vášne, ktorá dopeká
a iskry zloby kreše z čela,
niet citu, ktorý srdce kruší
sťa krehký kameň v nič a v nič,
neznámy zisku pohonič —
niet ostňa, ktorý pára v duši — —
Z doliny úzka ciestka len
čo vedie krivolako k chate:
priúzka, aby vtrielil plen,
jak zvyknul, spupne, prerohate,
širokým, drzým pochodom;
a tajná, klenbou hustej smreči
nadobro skrytá, privalená,
bez svetla, ukazadla, mena —
a poneváč sa hadí, prieči
— i sama jaksi sa len krade,
jak keby bola v nebezpečí —
viac podobá sa podvodom
než pravde, že by viedla tade:
je cestou, ale — poblúdenia.

Nuž možno-li sem pristúpiť?!
Možno-li sem sa dostať zrade
a kút ten blaha olúpiť? —
Kde pokoj sám je zavrelý,
sám v svojej ticho sedá rade,
nič neuzavrel ku závade;
kde dvorcom čudies deväťsíl
a v krov sa netresk privesil;
kde hory svoj stín rozstreli,
vchod húšťou svojou zapratali —
v ten svet tak utiahnutý, malý
zhúb príval vrútiť — možné-li...?

— Ach, zloba dvere nájde všade!

II.

Keď starý Čajka zosnul v Pánu —
a jeho zvláštna, nenadála
smrť ozaj bola jaksi snom —
o Jána stalo sa. Včas k ránu,
keď požltkavým východom
len slabá ešte zora hrala,
vstal z loža celkom čulý, zdravý.
Ač rokov mal už osemdesiat
— tak aspoň udával svoj vek,
keď mimochodom na salaš
tu i tu zbočil na kus vravy,
či aby pipku zapiekol,
i videl chasu krepčať, plesať
a šanty stvárať navôkol;
keď bača fúknul do fujary
a ona, sťa by srdce mala,
tak živo-bôľne zaplakala
tou „Ja som bača veľmi starý —“
a jeden-druhý zurvalec
keď skríknul: „Nu, jak, ňanko náš?“
a skokmo k strunge utiekol — —
Ač teda liet mal osemdesiat,
kde obťažou je čokoľvek,
dosť skoro zredikal sa preds’,
vyšnôril dlhej bez šipľavy,
krpčeky zotknul novej spravy,
okrútiac pekne remenec,
obvyklý vtiahol kožuštek
i pozapäl dosť istou rukou,
čos’ do kešienok jeho šukol
— snáď, aby mal čím ohňa skresať;
vtom — znať mu bolo, že má spech,
najskôr sa náhlil na postreh —
poštáral tu-tam, ťapil, kutal
a pritom mrmkal si a hútal,
až spamätal sa: blízko peca
hneď líščiu kapsu z klinka sňal
(ňou, či dnu všetko, pohrkal)
i pušku (tú, čo ženou zval,
odkedy vdovčil — dávno tomu —,
o ktorej neraz znela chvála,
že ešte nikdy nezlyhala)
a jak sa patrí, poriadkom
oboje prehodil cez plecia,
trošíčka pritom zastenajúc.
Tak vystrojiv sa, vyšiel z domu,
za sebou tíško zatvárajúc
(bo vari šianal čísi sen)
dveriatka staré, vrzgotavé
a zakolkajúc kolčiatkom —
Tu vzozrel: nebo vôkol plavé,
oblohou nikde mrak a tieň;
dennice lúč mu šibla v zrak
a slzu žmykla — vetché líce
vtom ovial svieži horský chlad,
i strmo začal rozvievať
chvist šedín — nedbal, nechal tak,
už po inom sa obzerajúc.
Na dvorci klada rozvalená,
k tej stetelil sa od prístenia,
sem-tam sa strknul hmatave,
až vťatú našiel valašku;
tú vyvážil, ač poťažku,
i za obušok do pravice
vzal, a na ňu sa opierajúc,
drobčivým krokom, drgave
— striasajúc rosu po tráve —
hor’ porastenou mýtinou
uháňal prosto v úval lesný...
Škovránok zahral nad ním v piesni
a vzbúril svitu tíšinou;
to nečiní však prekážku:
sluch starca dební sa a tiesni —
Z hôr tuhý dychot zo živice
sa vyrútil jak vetra val;
ten ocítil, ho zakašlal,
alebo, že kus putoval,
snáď znava — nápad dýchavice...
Jak prišlo, prešlo; snáď bol klam,
bo po prestávke veľmi malej
zas šinie sa vpred, v ruke páku,
ovinka drnčí na širáku
a kapsa lengá strapcom k hrám —
Tma zívla hory — i bol tam,
zaniknul. Les však, ten i ďalej
si odfukoval v lone vesny,
a škovran pokračoval v piesni...
— Čo a jak potom, nevedieť.
Dosť na tom: došiel na poľanu.
A poneváč to cesta hodná
i príkra, ťažká, znojoplodná —
chcel spočinúť var’, posedieť
— jak známo, mal liet osemdesiat,
nuž nečudo, po ukonaniu
ak uložil sa na oddech —
alebo ohňa chcel si skresať
do pípočky, bo fajčiar-človek,
ba zrovna tam snáď čupnul v streh —
to všetko možné... Akokoľvek
sa stalo, bo sa neodstane
skrz žiadne mienok zápasy —
sám príbeh nech sa ohlási:
v ten ešte deň, keď k totej strane
zvrátili oviec kŕdeľ biely
na pastvu, hej, v ten ešte deň,
tam, kde prť hlavná v dve sa delí,
pramienok zurčí hneď povedľa,
pod košatinou starej jedle
natrafili naň valasi.
Na zžlklom mochu o jej peň
si sedel, hovel opretý,
tvár nahor majúc obrátenú,
jak ku pátraniu, k postreženiu —
Kol neho tichosť nemá, pustá —
Napolo otvorené ústa
zrieť, avšak siné; oči vpadlé;
pár krôpok ihrá zžlklým čelom
s pableskmi, ktoré predrali
sa práve sieťou povaly,
by zasvitli tiež pri divadle;
a strúčky vlasov biele, zredlé
vo vánku vedľa prešumelom
tak tuľkajú sa k starej jedle,
jak keby boli lišajníkom —
Mlk, studenosť a údy schradlé —
Po strane valaška i puška
sú pohodené, tejto kres
nie, nebol tknutý ešte dnes —
Z rúk: ľavá jakby do kožúška
siahala ešte častým zvykom;
no pravá sklesla, v nej však fajka
vždy ešte jakby v objeme,
bár ohník dávno vytletý —
Hneď priskočili, skríkli krikom,
volali menom, drmali,
z pramienka vodou fŕskali
i treli, zdvihli zo zeme —
lež nadarmo — bol umretý.
Tu chvojeť splietli pospolu,
a stádo zveriac stráži Besa,
okáľom jeho jastrivým —
postupom tichým, vláčivým,
postretú čiernym stínom lesa,
k chalupe niesli mŕtvolu...

Keď teda starý hájnik Čajka
sa pominul sťa horský stín,
jak lesa zvuk, jak detská bájka:
tu Michal, hodný jeho syn
(a jedináčik), neotáľal,
neváhal, mnoho neopálal
vo prostom ume, čo a jak?
Bol sám jak palec, neborák,
tým ľahšie mohol uzavierať.
— Ech, nebudem sa ponevierať
— pomyslel — nie viac sem a tam
po službách, dnes tu — zajtra inde,
a kto zná, akej pri merinde,
a s čím sa všetkým postretám?
Nie ďalej hlivieť, schválne zmierať —
sťa stromec kdesi na ohrade:
korienky mocné vpustil dnu
v tú zeme trápnu tesnotu,
rozzelenal sa, zvenčil on,
veď míval, v svojskom že je sade,
kde rozkladať môž’ údy mladé —
však prešiel rok a práve v zime,
kde sto ráz zmrzne, kým sa prijme —
však prešiel rok: i musel von,
a zvädlý odnášal sa stade...
Kto viac chce, než má, musí zbierať,
dosť vzduchom lieta vzácnych pierat;
ver’ líha každý, jak si stelie,
a prv kto vsypal, i prv melie —
tak otec dobrý neraz... Nuž
— tu dupnul nohou ako muž,
podsúkal lepšie svalné ruky,
jak keby hodlal váľať buky,
a čelom zmraštil, naposledy
jak chcel by ešte pňom hnúť biedy —
odstrknuv stranou bičisko —
keď kade kráčam, borcujem,
ni jak dlaň, mojou neni zem;
ni nejde, by ňou vládli všetcia;
môj otec bez nej vyžil predsa —
nemajúc ani solisko,
zval svojím aspoň porisko;
keď súdené mi, bych sa plúžil
— že súd to, len sa vrkne vše;
boh delí všetko najlepšie —
ak služba zas, bych lepšiu užil,
nu, inam zvrátim práce snahu:
pod jedno stanem ústrešie,
k jednému prirastiem sa prahu!
Boh vidí, že chcem pracovať,
česť moja pritom zachovaná —
nuž zdaru dá i požehnania
a napomôže milerád...
Tak asi dumal v letnom znoji,
opretý na vozovom oji.
Vyhútal i priam uzavrel.

Len pánu svojmu, polesnému,
u ktorého týmže časom slúžil,
čo zdelil skorý úmysel,
rozložil, za čím prahnúc túžil,
Ten, počujúc to, čelo zhrúžil
v mrak, prísnym okom fľochnul naň,
pokrútil fúzmi, ústy žmýka
— hja, najlepšieho čeľadníka
prepustiť nikdy nenie milo —,
chcel káravú s ním počať vravu;
lež prenechal — bol dobrý pán —
i v ňom hneď srdce zvíťazilo,
sluhovi svojmu poriadnemu
prial vďačne polepšenie stavu.
Odobril teda predsavzatie,
dotušiac, že to nie od veci;
a dobro jeho zaujate
sám súriť počal, kázal ísť
priam, čo viac, vtisol do rúk jemu
i odporučný ešte list.

A Michal veraž’ nemeškal.
Sviatočné šaty pošukal
(jak sluha volský, kdesi v stajni
pre svoje veci skryt mal tajný),
len lichý oblek z valaštiny,
no bol jak z ľalíj — bezo špiny,
tá hadiaca sa po ňom šnôra
jak keby dneska bola zhora
zo smreka spadla — čečimlaď,
nu, vedel dobre šanovať —
Za otčenáš sa prezliekol,
vyriadil, ozrel, ofúkol;
vtom čosi vyňal zo schovánky
— zrkalko bolo, dvermi kmit,
ten sponáhľal sa prezradiť —
upravil spešne tmavý vlas,
tvár poobzeral, prešiel skránky
a zrkalce spať ukryl zas —
I vskutku rúči bol a šumný,
jak len ten jasen na záhumní,
keď ranné slnko po ňom liece...
Vzal širák nový, hunku novú
— tú len tak prehodil prez plece —
a v cestu dal sa; skäroval
zo dvora dolu dedinou.
So žiadnym nepozastal k slovu,
ač mnohých stretal po obci
— vozili sená parobci —,
nuž vetil rečou povinnou,
keď niektorý naň povolal,
a ešte tuhšie stúpal znovu.
V žart s ním sa nikdy nepustili,
zdal sa im jaksi zasmušilý
i znali jeho päsť a sval,
krem toho mali na pamäti,
že toť len otca pochoval...
Len ako popri jednom dome
prechádzal, stíšil náhle krok,
jak človek, ktorý pobadal
dosť ešte včas, že niečo tratí,
znať, že to zrobil povedome:
zrak kradmo hodil na oblok,
paličkou pritom v cestu pichol
a štáral — inu, hľadal zrok —,
lež iste veľkej ku nehode
nezazrel nič, bo valne vzdychol,
na chodník zbočiac popri vode.
Než slnce stálo na poludní,
tam bol už v diaľnej dedine
vo dvoroch panských. Aby kľudný
sa zjavil, úctypovinne,
u brány ešte zašiel v tiene
líp a dubiskov košatých,
kde striasol prach, pot zotrel z čela,
vyfúkal teplo, unavenie —
No druhá chvíľka neminie:
hnul — a po cestách kľukatých
ta zrovna rušal do kaštieľa.
Že musel čakať hodne veľa,
kým prístup bol mu dovolený,
sa rozumie; to ináč neni.
(Za jedno, ľud je iba ľud —
ten čakať môže dokiaľkoľvek,
až vďaka príde vyššej vôli
ku práci: prstom pokynúť —
a toho, ktorý už tam stojí
u dvier a i len stáť sa bojí,
konečne opýtať sa tiahle
a v istom s nevrlosťou boji,
čo búri takto strmo, náhle,
on iste zmýlil chod a púť,
čo chce, čo hľadá, čo ho bolí?
Bo ak sa nezdá vyššia vôľa,
že čakať nechá dokiaľkoľvek,
a čo by bol rok, alebo vek —
tak — počo prišiel? Kto ho volal!? —
A potom je to sprostý človek:
keď klope — trepe na dveroch;
v hovädských hnije pomeroch;
nič nevie: i keď bozká ruku,
len zašpiní ju, nekľuda;
je divoch, horská obluda,
poklonou síc’ čo plaz sa vláči,
no prosí-li: on prosiť „ráči“ —
do ohnusenia každý mrav!
Praškoda každé vlákno práv!
A jeho reč — hach, chaos zvuku!
To ucha škripec opravdový —
hles každý trápnu vreští muku —
nie, ňou sa nič, nič nevysloví,
ni slovka, jednoho ni tónu,
čo oprávňuje do salónu!
Veď kdeže diela, skvosty spisby,
čo môžu na stôl panskej izby,
kde? Povedz, tvore! — Nikde nič;
nu, paholok, nu, pohonič —
Ech, chrobač, šereď zemeplazu,
brúk, ktorý buní podvečer:
preč s tebou! Ta s ním odo dvier!
S ním spolu dýchať tenže vzduch
znamená istú dýchať skazu...
— Hej, ťažký prístup do tých múrov,
pre ľud ten ťažký ešte vždy!
Nečudo: múry sú a skaly,
ohradili sa, zapratali —
vypreli zvonku nový ruch
a pohrdli ním; že však žije
vzdor tomu, i prez žalúzie
sa predierajú jeho chóry,
predsudkov zariekajúc puch
a zeleň novej, sviežej vesny
metajúc v staré koridory:
to už ich zlobí, už sú desní!
Na víchor sadli, zúria búrou —
chceli by zdusiť chladom, chmúrou,
kde aký svit sa zhromaždí;
no on má krídla, svoj vzduch stály,
krídlami ľahko kúdol pretne
i ponad múry k nebu vzlietne
a tam sa slncom pozapáli,
či požehnaním zadaždí:
ten lživo pomlúvaný duch...!)
Lež všade predsa len tak nenie —
náš Michal dostal dovolenie,
bárs tiež len kedy-netedy,
keď viac ráz súril prezvedy;
no ani nešlo to bez pôtky:
kýs’ sluha (sprvu myslel, pán,
mal predsa krásny dolomán,
ním samý blysk, a žlté botky)
mu cestu zastal, zbránil dnu;
keď avšak zvedel, že to sluha —
tu i on prestal hneď byť krotký,
odložil ostych na stranu
a prístup k pánu žiadal stuha,
odvrknúc, že on musí vnísť,
a čo by sluhov celý trh —
má osobnú vec, nesie list —
pričom sa schvel jak perná spruha,
i obdržal nad sluhom vrch.
Zaklepal teda smelo, rázne,
súc plný sebadôvery,
vlas prihladil, odkašlal stupa —
odchýlil krídlo u dverí
a (v krpcoch sa tak ľahko stúpa)
jak stín by, tíško šupnul dnuka
do veľkej, skvostnej do svetlice.
Na klzkej kľučke ešte ruka,
len jeden pohľad, nímž dnu zrel:
odrazu jak by skamenel,
žas pojal ho či niečo z bázne
(podivno, bol preds’ chlap a smelý!),
hneď vzbĺklo mu, zas zbledlo líce
a oči jak by zaslepneli,
tma — závrat bral ho nehorázne,
i jak by tonul, do halieny
zadrapil prsty... cúvnuť chcel,
lež ako by bol primrazený
na pôde z ľadu, ani hnúť —
I zostal teda... Prešla zmuť.
Čo predtým nikdy nevidel,
a kde by aj? — na tisíc skiel
ho žiarnym pooblietlo svetlom,
jak kŕdeľ vtáčat rozdurený,
keď každé peruť lesklú ustrie
a na obzore dúhou skvetlom
sa zligá (bezpochyby lustre);
a ich svit vrtel sa a víril,
až ťažko očiam prehliadnuť,
nehasnul, vzrastal a sa šíril —
jak riavy prúd o klenbu, steny
vtom narazil, hra zapadla:
no (vinou iste zrkadlá,
z úbeľu rímsy, stĺpce, rezby,
hranoly kryštálne a kresby,
skvost farieb v rámcov zášerí
a iné čačky nádhery,
keď slnka tvár v ne nahliadla)
len chvíľka, a už odrazený
a v množstve prúdov znásobený
späť vrhá sa, späť v siene stred;
tam trysknul ako vodomet,
i hviezdnym vencom spadá, rinie
prv na ligotné, štíhle skrine,
na jejich sloň a obruby,
z tých k operadlám, na stoly,
na pozlátené konzoly,
na skupy kresiel divnej spleti,
leňošky, lemy, taburety,
nábytok všakej obľuby
a iný prepych, rozhodený
sem-tam na odiv v svevoli —
tak spadá nižej a vždy užšie:
včuľ v podstavcov, hľa, lezie kruh
a závitky čo lesklý had,
trepení ťažkú zriasil zlať,
s tým mžikom myknul medzi ruže
čalúnov, v purpur-činovať,
a viac — ho niet, sťa svetlý duch
sa rozplynul, alebo snáď
ho zhltla temným svojím okom
parketná, hladká podlaha...
Stál v zadivení prehlbokom
vždy ešte. Len keď svetiel brod,
oslňujúca nástraha,
čo najskôr jeho zvinil vchod,
zanikla, stuchla: obzrel sa —
Tu videl seba votrelca,
jak stojí, videl tuto, tam —
v stých podobách a všade sám,
sám ako dlhým radom stojí,
sťa vojakov šík na pochod,
i čudno mu; no zjav hneď známy:
hej, krpcov to rad s návlakami,
a vyšej šmúha dlhá, čierna,
tiež jeho halienka to verná —
a to, hľa, hneď ho uspokojí.
Blíž okien ostro klenutých,
v nádobách stácich, visutých
(tie zveri tvar, tie krídla mali)
zas celé stromy hájom stáli.
Tak čudesné ich vetvy, zrosty —
Tie vzpäli sa až do povaly,
kde roztáčajú letorosty
a maľujú jak štetce strop;
tie ako labuť zdvihli šíj
a noria do vĺn draperíj;
tie záclon chytili sa zdôb
i stýkajú ich na ihlice;
tie hupkajú jak veverice,
kým tie zas listov zvisnutých
tak skydajú jak vodopád —
Ten na výklenok hlavu sklonil,
ten veľkým kvetom jak by zvonil,
ten skvie sa, jak by slzy ronil —
Ten chmúrny, tlstý, územčistý,
ten štíhly, samá odvaha,
ten chlpatec, ten holobrad,
ten rebrino-, ten piestolistý
Keď Michal toto uvidel:
Jak, hora v izbe? — pomyslel,
aj, ľa! — i stvrdla, oživela
hneď sedliacka v ňom povaha;
vynašiel sa. Zrak ako strela
už šprihá, liece povoľne.
Tu napnúc, tu zas uhnúc sa,
jak slnečnica kvetúca
sa obracia a zvŕta v strany:
a zvšadiaľ nový, maľovaný
a skvúci s ním sa stretá svet —
Nie, týmto krásam, tomu čaru,
tým tvarom nikde páru niet,
sú viac než zdoby kostolné,
viac nežli krásy na oltáru.
Kdes’ búrne zvuky zašumeli,
jak keby kŕdeľ zlatých včiel
z tých hájikov bol vyletel
a rozbzučal sa okolne:
i naslúchal, bol uchom celý,
stál čujnej plný lakoty —
no zmĺkli skoro, uleteli
snáď portálom, čo oproti
je rozkrídlený dokorán,
ta v ďatelinokvetný lán,
či ľadník kde sa v rozkvet spukal...
Tu nahnul sa, jak keby kukal,
kam delí sa tak vraz zo siene —
lež, ajhľa, nové prekvapenie,
zas iné kúzlo púta zrak!
Čo videl, bolo: ako mrak
keď za mrakom sa gúľa, valí
po nebies pláni diaľ a diaľ,
do nekonečna nivou hnali
tam bujných stromov paralely,
jak klbká keby kotúľal
kýs’ obor, klbká zo zelene —
pomedzi zase biele pruhy,
jak medzi brehmi tokov stuhy,
pableskami slnca pozlátené,
dnom jejich samý drahokam,
sihôtky po nich sem a tam,
na každej biele postavy,
jak príšer nočných skamenelý
by pochod — včuľ v stín miznú stmelý,
no onedlho denný plam
zas obliekne ich v šaty z dúhy,
brilantmi zdaždí na hlavy:
uprostred lesklá hladina
jak zrkadlo, ním svetla let:
tu k spánku víko pritkýna
a hneď zas žiarivo hľadí —
a kde sa stromov schodia rady
tam v diali, ako v gloriet
sa viažu, v oblúk slávy klenú,
až nebies čnejúc ku sklepeniu,
a na každého žhavom štíte
čos’ krídly mácha neurčite,
jak postava by anjela...
I ponoril sa docela
do vidma — díva sa a díva;
i zdá sa mu, že sníva, sníva —
že raja zastal na prahu.

Len v sieni čos’ keď zašumelo,
sa vzchopil. Dlaňou prehnal čelo.
Šum očul, ostrý, náhly švist
jak padal, otrel podlahu,
sťa papier chvatom povržený.
I skiaď sa ruch a pohyb skytal,
ta zvrátil zrak pri onom hesle;
vtom vzpriamil sa jak pri velení —
Dnu vo vlnistom, veľkom kresle
pán hovel si; bol schradlý, malý
a lysák. Noviny bol čítal,
i pohodil; tie sšuchotali,
jak keď zo stromu spadá list
„Pochválen Ježiš —“, spešne riekol
tu Michal, smele uprúc zrak,
a čakal — Čas sa míňal, tiekol,
lež odpovede ani mak.
„Pochválen Kristus!“ vetil znova
a silno, pery počal hrýzť,
jak koho nedočkavosť páli —
i stŕpal... Siná v kresle tvár
sa strmo zdvihla — udivená,
opierajúc sa na ramená,
na nose zblýskal okuliar,
a „Kto to!? —“ chriplé hlesli slová,
až skoro sluch mu sprerážali.
„Som, prosím pekne, ponížene —
som Michal Čajka, sirota“
— priam chvatom myknul do kešene:
list vyňal trocha ukrkvalý;
na palcoch šupol prez dvoranu,
tam podal lístok k rukám pánu
a na miesto sa vrátil späť —
„var’ veľkomožná dobrota
ma neodženie odo dverí —“
„Si drzec —“ vrkla odpoveď,
a bola príkra, omrzelá —
„Kto vpustil ťa sem!? Lebo veď
tá vôľa posiaľ nevelela!
Tamvon má priestor žobrota;
tam dá sa jej, oč zuby cerí.
Ty votieraš sa prez závory,
ty vpálils’ ako vietor divý,
jak z hradskej neposedná smeť —
čo teda chceš!?“ — Slov týchto rez
ocítil Michal neomylne,
znať bolo, že sa zachvel silne;
o srdce rafli ako kres,
zrak jeho prudkým ohňom srší —
no súdil: pán je iste chorý,
na odpor sú mu rozhovory —
i skrotnul. „Pane milostivý,“
— tak vetil — „v lese na Podvrší
(a k panstvu patrí onen les)
nedávno zomrel hájnik Čajka.
Boh osláv ho. Bol otcom mojím —“
„No, krátko!“ — pán mu tak do reči —
„vieš? Vkrátce — k veci! A skôr preč.“
„Odpusťte! — Sedliak dlhú reč
mal vždy — hej, nevie, čo sa svedčí —
Som sám a sám, jak tu, hľa, stojím.
Nuž, akže neni chýr len bájka,
čo zmyslel svet — svet zmýšľa rád,
a ja bych nechcel dokladať —
že otec môj, jak nenie zvykom,
bol zvláštnej priazne účastníkom,
že služobník ač, veľa razy
(ó, nech sa panstvo neurazí!)
nejednu lásky skyvu vzal,
mal prítul, voľné slovo mal —
nuž, kde on odprvoti slúžil,
kde započal i dokonal,
kde otec jeho a môj ded
podobne v tejže trval službe,
kde i ja mladý strávil svet:
to miesto je, hľa, oč bych túžil!
Ku tej sa prosím pridať družbe
jak ohnivôčko do reťazi —
Nu, nech ho panstvo nevyrazí!
Ja vtrielil iste ako smeť —
však kto mi tamvon porozumie?“
Pán chvíľku v nemej meškal dume.
V pamäti prebral zbehy všaké,
jak zašli dobou minulou.
Tak prišiel i na jeden lov:
kde mladým žitím už-už platil;
no zavčas ktos’ ta pribehol,
a keď už ináč nemohol:
nasadiac vlastné svoje žitie,
sám vbehnul v objem drápov hbite
a nožom ľútu šelmu sklátil...
To pripomenúc si, zistil: Tak je!
Roztvoril, spešne prešiel list
a riekol: „Inam mal si ísť:
do úradu, tam sluhov berú.
Lež zostaň, v tom sám rozhodnem —
Nuž zomrel Čajka?“
„Zomrel veru,
a v službe. V lese na poľani
ho našli —“
„Buď mu ľahká zem.
Chceš teda miesto jeho?“ — „Chcem!
Ba prosím — pekne ďakujem —
som k všetkým službám odhodlaný —“

„Kdes’ slúžil, povedz, posaváď?“

„Ver’, bože, ťažko povedať —
jak z kŕdľa vylúčené zviera
sa sluha sem-tam poneviera;
hrdluje, zháňa, službu cení —
preds’ rečú však: Si prepustený!
Pán horár —“
„— No, dosť. A či vieš,
čo so službou tou podujmeš?
Poď bližej, synak. — Otec tvoj
bol statočný, bol verný sluha,
nie, nikdy nebol podliakom,
bár prostý človek, znal sa stuha
do toho, čím je poctivosť —
Máš ducha, vieš-li chytať zbroj?“

Tu Michal strmšie vztýčil zrost,
jak v šíku by — bár skryť ho chcel,
mrak náhle tvár mu preletel,
veď nemilo to zneje sluchu,
keď pochybovať chcú o duchu,
jak bol by plachým oblakom —
„Ja za čas bol som vojakom“,
nakrátce vetil.
„Dobre tedy,
vieš to i to, si mladý, zdravý —
jak smrek sa hodíš do dúbravy,
jak jeleň budeš si tam chodiť;
lež znáš-li s cudzím zaobchodiť
a neskĺzneš sa voľakedy?
Čo? —“

Michal mlčky sklopil zrak,
bol zarazený. Tvárou mrak
zamenil takoj zápyr studu.
No vzozrel priam: plam vždy viac sála,
kol úst mu hrdosť duše zhrala,
z pozoru srdný oheň srší —

Pán, vidiac pečať česti rudú,
sám skoro koniec zrobil trudu,
s úsmevom vpred sa naklonil
a riekol: „Zajtras’ na Podvrší!“
S tým na posluhu zazvonil
(ten vstúpil, jak by prihnal strelu),
čos’ naznačil na kartu bielu
a podajúc ju služebníku,
naložil hlasom, jak to v zvyku
— medzitým hladiac sivú bradu:
„S tým chlapom zájď hneď do úradu!“

III.

Tak Michal dosiahol, hľa, cieľa,
ku nemuž zamieril bol smele
s chtivosťou tuhšou od ocele —
i bol mu veľmi, veľmi rád.
Kráčajúc svižko od kaštieľa
cez dvory jeho, trávniky,
ni nevedel, či stúpa a či
perute dostal, ako vták —
tak stešený bol, neborák;
len jedno sa mu v očiach zračí,
to svieti pred ním naporád
a obraz stavia všeliký:
jak bude mu v tom novom hniezde,
jak na nebesku božej hviezde,
jak vtáčku v tichom, temnom lese...!
I všetko, kadiaľ letí, kráča,
kol neho zdá sa jasať v plese,
brať účasť z jeho radosti:
ju na dubisku hlása vtáča,
na vonných lipách bzučí včela,
kvet ňou sa chlúbi, sviežosti
jas ona luhmi rozostrela,
ňou vôkol ruch a kyn a vzmach,
chodníkmi ona zláti prach;
i slnko jasnejšie sa skveje,
vetierok hravšou svevoľou
si hupká, šumot topoľov
tiež jemu „Nazdar!“ prez aleje,
len jemu hudba v olšinách
a v húšti rakýt žurčot kradmý...
Tak zajala ho tá, hľa, vec
(a bol už hodne za ohradmi,
bol skoro hradskej na okľuke),
že až i širák zabol v ruke;
len keď mu hunka šupla z pliec,
obadal sa i pokryl hlavu,
ináče nezmýlil ho ani
pal slnka, ani nečul v pláni
na ďatelinách koscov vravu,
cveng, škripot osiel preboľastný,
nie výskot dievok kol ostŕv —
tak zaujal ho osud vlastný.
Znal síce, že to ako prv
tiež služba len, len cudzí chlad
a kút, kam sebe poustiela;
no bol mu predsa veľmi rád:
bo vedel i to, že keď scela
sa oddá službe a vždy riadne
sa bude pritom spravovať,
že do smrti z nej nevypadne,
len vtedy že z nej vystúpi,
keď vynesú ho z chalupy
tria a tria súdruhovia zrutní
a rechtor verš odspieval smutný,
i hora vzdychla naposled,
len vtedy prejde v službu inú
(i toho nie on znesie vinu),
jak otec jeho, ba i ded...

Znal služby novej povinnosti;
a bolo ich tiež do sýtosti.
No skúsil: keď sa riadne vlní
na žliebku, kadiaľ steká pot,
niet nádoby, bár jak sa volá
a čo by morskej hĺbky bola,
ktorá sa časom nenaplní.
Znal obtiaž svojho povolania;
lež posiaľ či od svitu rána
nenosil po pozdný ju mrk,
až plecia stŕpli, zmŕtvel krk,
a nedvíhal ju svitom znova
tak vďačne trudnej zo zeme,
by zas ju trímal v objeme,
bárs ťažšia bola od olova...?
Hej, vedel on, kde, čo a jaká
ho povinnosť a ťarcha čaká;
no mužne poddával jej plece
a v jarmo vďačne stoknul väz.
Na horách ľahšie sa to liece
( od mladi les mal za obraz,
za obraz v duše svojej ráme);
tam mlčia pomluvy, jak v chráme,
a to tak srdcu lahodí —
tam nespútané slobody —
tam každá haluz perute
jak brk a každé dýchnutie
vetríka prajná kási sila:
keď človek už-už nevláda,
hneď oboje sa podkladá
na podnos, podlet, zdvihnutie
tej noše, čo ho prikvačila —
i vtáča preto šveholí
tam, by nám bolo po vôli,
a preto zahovára riava,
by v ceste nenastala znava —
ba grúne samy tam jak schody
sa poskladali popred štít,
čo rebrík k vrchu, v jehož temä
tra balvan žitia vyložiť,
skiaď nikdy viac sa nepovalí
(bo rebrík je, nímž, ako vieme,
odhora húf anjelský schodí
na pomoc nemotornej zeme) —
tam ešte posteľou i skaly,
veď preto machom zobrastali —
a celá hviezdna noci tma,
keď rozprestrie sa nad horami,
na žrdiach smrečín zvislý stín,
jak veľký, slávny baldachýn;
to prítul iba tam, hľa, známy,
jediný, čo, keď zhasnul deň,
je vstave pravý podať sen,
sen, ktorý všetky slasti má...

Lež človek nazdá sa a míva,
že pozrel-li v tvár, na oko
druhovi, s nímž sa stretnul v žití —
že už ho spoznal, všetek taj
že duše jeho odokrytý,
už vie, čo v nútri svojom skrýva.
Prenáhly výrok nebodaj!
Nečudo, keď sa potom javí,
že súdilo sa plane, bludne;
hej, človek súdi skoro, ťahy
vystrežúc, hľadiac na oko,
držanie sprevádzajúc hlavy —
i myslí: už má pojem pravý;
a predsa díval sa — do studne,
kopanej v zemi hlboko...
— Nuž kto by mohol všetko znať,
kto trúfal by si osnovať
každučký mysle vzruch a dej,
čo a jak Michal uvažoval,
čo všetko hútal, plánil, koval
dnu duchom svojím stešeným
do budúcnosti aké snahy
si predsavzal i aké dráhy,
čo všetko pozacítil — kým
na ceste kráčal spiatočnej...!?
Dosť na tom: stúpal strmo, stuha
už potom prašnej po hradskej;
nezastal nikde ani chvíle —
Pot rinul mu po skráňach, v tyle,
však nedbal nič, len trielil, hnal,
jak keby ho bol poháňal —
zaiste mnohá v duši vzpruha
to pôsobila. Slnka púť
vtom krátila sa očividne,
pal miernil sa, prach usadal —
od západu už zľahka, vlídne
sa žiare letné opierali;
kol cesty vŕby sšepotali,
jak keby chceli vydýchnuť
po sparnu čím skôr, jejich stíny
tiež hodne sa už ustierali
briežkami, poľom zmĺkal ľud —
keď došiel svojej do dediny.
Či vedľa domku známeho
i teraz postál a jak predtým
len kradmo kuknul do neho,
to prvé zistiť snadno mi,
to druhé nechám pod otázkou —
Viem, každý, čo i neposvietim,
bez všetkých úvah, čela vráskov
nahliadne: že ver’ šuhaj, jak
dnes Michal, v takom položení
nesklopí k zemi mužný zrak,
nezľakne s’ žiadnej pohromy;
a jak je k tomu naladený:
spred ktorejkoľvek chalupy
si voľne prútik ulomí,
a čo by bola z rozmarínu;
i nik ho preto nestupí,
ni neprireže mu za vinu.
I pohoničov stretal iste,
lež sotva s nimi reči snoval;
tak bude: po „Pochválen-Kriste“
privolal „Amen“ (krátka to vec),
obišiel ťažký drabinovec
a druhov v duši poľutoval...

Ni na tom veľa nezáleží
— svet, známo, i tak chytro beží —
jak odobral sa od horára?
Jak vystrojil sa v novú postať,
zozbieral zvyšku krupäje?
Či zdržiaval ho kto? Či riekli
mu prísne: že veď nedohára —
bo žartom: že veď neutiekli
tí, za nimiž tak čenichá,
tak rúti sa a pachteje
jak grúňmi chmúrna ulicha?
A či on predsa nechcel zostať...?
Dosť na tom, nedbal, či je pekne,
alebo či tam búri, prší
a lávky zajme povodeň,
či ten tak, iný inak riekne:
čo bezprostredne nastal, deň
už tam ho vítal na Podvrší.

Tam udomácnil sa aj hneď,
jak vták keď z klietky umknul, z vädby
nie, netreba tam zažehnatby,
zbytočná každá prípoveď.
Koleso, predsa je len kolo,
je vrtké, švižké, frní, hraje,
na cestách sto a sto ráz bolo:
no nevbehne, nie, nevkäruje
tak iste v starý zárez sluje,
jak on ač novej do koľaje. —
Čo vystal chuďas hnedky sprva,
kým oprávali vetchý dom!
Chcel čím skôr rozložiť sa v ňom,
a to tak vlečie sa a trvá!
I nechcel dáky stôs len, klietku
z dŕv, búdu vlčom na odstredku —
Jak duril, súril neprestajne!
(Pán, u ktorho bol práve slúžil,
pán horár, oč len Michal túžil
a prosil, zvolil dobroprajne.)
Ponúkal k práci tu i tam;
konečne prichytil sa sám,
a len on pristal silou, v radu,
už išlo to, priam zdvihli kladu
a pricvíkali v zásek trám,
hneď opäť jednu strhli vadu.
Podvečer, keď už stíchol kres
a klopot s každou inou vecou,
píl škripot, chrupot nebožiecov —
vše strihol hor’ pod dumný les,
skiaď na domec sa súdne díva,
až doznal: ba sa pomkol dnes;
to pribudlo, to ešte zbýva.
A ani nešiel do koliby
na nocľah: tam si ustlal dnu
v tom nehotovom domčeku
jak keby sa bol toho ľakal,
že v noci ktos’ sa prikradne
a jeho navždy podsadne...
Konečne domu niet viac chyby,
stál tam, za akým dychtil, čakal,
stál, nadvihujúc bielu šiju.
Bez meškania ho zriadi zdnuká;
priam u dvier novú almariu
postavil, zdobný pribil rám,
kol zo stien mnohý svätec kuká
a v sviežom rúchu potobôž
(hej, usporil bol ktorýs’ groš,
nuž z toho prúdik cvrknul rúči,
hľa, i vo stajni krava mučí),
len stôl ponechal dubový,
kto zná, po ktorom otcovi —
a keď už každé stálo tam,
kde miesto jeho každým časom
a povolanie neináč:
tu vystúpil von na povlač
(slniečko práve zapadalo
za hory, pozdný pozdrav slalo),
i zaslzený vďakou zor
do zlatých pruhov zaslal hor’,
ta, kde sa už-už porozplynú,
na nebies nanajvyššie bralo —
a šepotavým, traslým hlasom
privolal: „Chvála Hospodinu!“
Bol spokojný.
No myšlienku
mal on i inú zavše pritom,
tú kŕmil horúcim on citom
a kojil duše nápojom,
kdekoľvek postál, kadiaľ chodil;
jak hviezdu pred sebou ju vodil;
potajmu jej sa prihovára,
ju budí, i zas sčičíka,
pokryje hustým pokojom,
by zas z nej závoj poodhodil,
keď závisť odtiaľ uniká —
hej, mal i inú myšlienku.
Keď ešte slúžil u horára,
ba prvej: poznal dievenku
tak rúču ako kvietok z jara,
jak kvietok, nie však makový,
s nímž prvý van je hotový,
lež čerstvý, zdravý, jak vzduch zrána,
tak jak ho vychovala stráňa.
V tom známom domku býva práve,
obhnatom plôtku patyčou,
u boku dobrých rodičov,
čo chránia ju jak oči v hlave.
Snáď nevedeli ani sami,
kde, kedy, jak sa poznali —
no jeden stret: i boli známi,
zrak jeden, hlások prehodený,
prask biča, zhúkanie na tráve:
a osud ich bol spečadený,
je zapísaný do skaly.
Ba tak sa duše jaksi schodia
v tej zemskej šírej oblasti,
jak prášky vzduchu, v mori voda,
kde potom jedným vánkom hrajú,
i jednou vlnkou žblnkotajú
o večnom blahu, o šťastí...
Jak škoda jejich súzvuk skaziť,
medzi ne klinom búry vraziť,
keď neľzä zdolať nožom, dlátom,
do skupy smrtným praštiť mlatom,
jak škoda...! Ona bola dcéra
dosť majetná a jediná,
i mala zalietačov vera
do božej vôle, i bohatých,
no žiaden neobdržal pera;
bol pytač dnes, bol pytač včera —
Rodičov už to omína,
mať nutká, otec pohýna:
vraj nadajú jej do rohatých —
už toľko rokov na Všechsvätých —
mať, otec v sile zhasína —
lež nadarmo sú všetky reči,
či láskajúc, či odudrúc;
neskube sa, len ticho sprieči
zakaždým, švíček krkvajúc —
i kľučka vrzgla za pytačom
zas, keď ta pošiel nestrebúc...
Tu ozvala sa rodina
(a tú len počúvnuť sa svedčí);
pošepli skoro jazyčnice,
čo značí dievky váhavosť:
i nastal krik a hrozba s plačom,
karhali, kliali celé dni
a nedochádzal posledný —
Tu zaplálo jej studom líce,
na prípecok si u dvier sadla,
tvár v zásterke, tak lkala, vädla —
preds’ nezvolila. Dosť to, dosť
od prostej dievky, dosť to, iste
na dôkaz, že ver’ ľúbi čiste,
jarmačný nezvedie ju hlas —
A predsa málo! Ešte próba:
Michala k vojsku zabrali
(snáď i pri tomto vrtla zloba),
kde tráviť musel drahný čas;
i jej sa míňal pomaly,
jak jarček tiekol, ktormu skala
bo koľaj cestu zarezala —
preds’ prečkala ho, dočakala,
že zišli, videli sa zas.

Lež, pravda, vídali sa zriedka,
len chvatom-letkom, ukrývave.
„Šak ľúbiš?“ „Hej!“ to vrava všetka,
rúk podaj, to ich celý styk,
a trval tiež len okamžik,
však bol jak voda na žeravé
by železo, ním stvrdla vôľa,
akže by ozaj zmäkla bola.
Jak chuďas sluha, paholok
ni netrúfal si ver’ ju pýtať;
popredku videl následok,
jak zhŕkli by sa hneď ho zvítať;
hej, znal on z knihy biedy čítať,
pokázal každý na riadok:
kde otázok je trpká veta,
v čom háčik, reťaz záhadok
a čierny bod kde jeho sveta...
A potom, jak ho miloval,
natoľko šetril, ľutoval,
i ľutoval ho: dobré dieťa —
nu, devu, ktorej veľká láska
len zaviní, keď ani kláska
už potom pre ňu neurodí
to šíre pole rodiča.
Jak!? — Schválne do biedy ju hodí?
Má urobiť ju nádennicou
len preto, bo mu prišla k stihu
a v jednom prudkom okamihu
sa stala jeho nevoľnicou?
Za lásku má-li z púhej lásky
jej temné zavčas zbieliť vlásky?
Mal zrieť ju a bez krvácania:
jak jednou choré decko pleká
a druhou lobodienku seká —
korienok žujúc sladiča
(by decku osladila stravu),
čo našla, dnes keď bola svitom
kdes’ v rúbanisku zbierať šmáňa,
by mala pri čom uvariť...?
Ó, to by krutosť neslýchaná!
To značilo by samým citom
chcieť kvieťa zmraziť, opariť —
To rozčeslo by srdce, hlavu!
Nie, nechcel z jednej biedy dve,
nie aspoň núdzu jej, i čakal —
snáď blesne lampa vodiča
v tme, v ktorej kľakal, ba i plakal...
A ona blesla konečne,
jak iste nechcel. — Vtedy kmitla,
keď otcovej plam búra schytla,
keď otec umrel; lež či môže
kto za riadenie vyššie, božie?
Kto smel by s tým sa boriť, hádať? —
Dnes teda môž’ už pýtať, žiadať
i slobodne i výrečne
o ruku švárnej svojej Hanky;
má spôsob k tomu, službu istú,
tam obsevok, tu bývať kde — —
Z povlače hľadiac na červánky,
ich hasnúce už pochodne,
vtom vzchopil sa a výsknul: „Bisťu...“

Nadpriadol skoro návštev niť.
Jaknáhle služba dovolila
(nech bola akákoľvek chvíľa),
zalietal ako sokol mladý
prez hory, grúňov prez závady,
by zas sa mohol ponapiť
zo zdroja, ktorý jemu vrie
pod skvitlým šípom v dúbrave,
len jemu v osvež šelestí —
Nie od záhumnia, od záhrady,
nie presádzajúc večer plot,
na očiach klobúk pritlačený,
by, ak ho stretnú, nepoznali —
už zamiera on od cesty,
je zjavný každý jeho vchod.
Domáci sprvu — prekvapení
sa zmiatli trochu, okúňali
mu v smelý pozrieť obličaj:
jak keby si čo vyčítali,
to — onô, že ver’ nemúdre.
No prijali ho, uvítali,
pýtali bližej ku stolu,
na štíte miesto vykázali —
triafali v reči na vôľu.
Vše zhovor zapliesť chceli iný,
zvlášť jestli dcéra vošla dnu
(činiac sa, že má robotu,
a horký! — len sa pretvárala,
i zvonku iba naslúchala),
však márne: na vec na šteklivú
zas narazili ku podivu —
Tak prešli prvé vohľadiny.
Keď onedlho skrsnul zas:
hneď bolo ináč. Mätež, škripce
sa pozabudli, zmäknul hlas —
a boli mysľou pospolu.
S tým zrovnali sa, a on chodí,
viac neštítiac sa nepríhody.
Mať sama neraz speší štipce
mu otvoriť, keď sa tak zavdá.
No, otec — čo je pravda, pravda —
ten v tichu ešte podudre
i potom — nu, var’ obyčaj.
A Hanka? Kto by sa i pýtal!?
Tej zavše nový život svital;
tá lúčinou sa raja brodí:
keď príde on, do silných rúk
keď zabral neveľké jej rúčky,
tu zase objal potichúčky
jak obručou jej hybký driek,
do ušiek milší rečí zvuk
jej slal než všetky vtáčie chóry —
keď zraky sňali jak by v priek
a zamĺkli, že prez komory
tíš nečuť iba srdca tluk...
ó, jak jej vtedy bolo, jak!
A odchádza-li v nočnom čase:
vše prelietne ju kýsi ľak,
jak hviezda tamhor’, schvie sa, strasie,
jak v ťažobe sa lapá kľučky,
kým nadobro ho vyprevodí —
no skoro octne späť sa v štestí,
keď privolá jej ešte z cesty:
„Hej, zajtra prídem iste zase!“
Aj závidia mu, vera, mnohí,
i mrzké lužú klebety;
však on už dávno otužel,
on hľadí na to ako v šero,
čo za dňom musí nasledovať.
Nu, nech sa páči oprobovať,
kto silnejší je na parohy —
nech prehradiť mu zálety,
nech okom škúľnuť mu na pero,
na priadkach siahnuť na kužeľ
a čokoľvek si osobovať:
tú papľuž o uhol tak praští,
že zapíše si v pamäť každý
a večite! A klebiet kliatba? —
Ech, kto by válčil s bublinami?
Prv-neskôr rozpľasknú sa samy...

S tým prešla dlhá zimy doba.
A jaro svitlo. S jarom svadba —
i boli svoji večne oba.
Tri dni vraj svadba trvala,
tri dlhé dni sa veselili,
tančili, hojne jedli, pili,
o svojich bavili sa zvykoch:
až na štvrtý len nastala
hodina smutnej odberačky,
oddavač sám sa pustil v plačky,
starejšia hlasne fikala —
Pri slovách takej odobierky
nečudo teda, keďže mať
začala žiaľne vykladať,
objímuc dcéru svoju drahú —
i keď už boli na vozíkoch,
a spievajúc, jak navykli,
na ošatkaných na koníkoch
zo dvora skoro unikli
a tam už boli bez znamenia,
len pieseň čo sa ozývala:
i vtedy ešte že na prahu,
jak jabloň v jaseň obronená,
meškala, stála, vrávorala,
stierajúc slzy do zásterky.

V poludnie boli na Podvrší.
Keď viezli truhlu maľovanú
po ciestke temným, veľkým lesom
a na nej zhúkla rúšnica,
les celý ozývnul sa plesom,
jak k radostnému uvítaniu;
z čečiny krupaj slasti prší —
v to riava zanôtila zhruba,
jak k oslave, jak v pochod trúba;
hej, celý les sa rozšumel,
jak keby ľuďom rozumel,
bol vzrušený. Len jedlica,
čo stála kde-tu popri ceste,
tá mlčí, čosi zvlášte hľadá:
istotne sliedi po neveste;
i zočiac ju: ha, to je mladá!
hneď zatlieska tiež vetvicami,
na pozdrav šumí, kloní sa,
sťa keby dáka rečnica,
že: vitaj, vitaj medzi nami —
K večeru vrátili sa spiatky,
nechajúc párik osamote.
No bolo skoro po sobote,
i prišli v nedeľný zas deň:
na úctu, rodinka však len,
veselín stroviť pozostatky.
Pobavili sa v svojskom krúžku,
tak jak sa svoji pozabavia.
Tesť-otec už viac nedudre,
skryl navždy zdutý mechúrik;
hľa, sivá týči sa mu hlava —
vstal, plný vznesúc kocúrik,
vtom odkašlal, by prišiel k dúšku,
či aby bolo po múdre,
a riekol: „Drahé moje deti!
Nech božia milosť vám vždy svieti!
Kto všetkých darov pôvodca:
nezabúdajte na Otca,
na otca, ktorý býva v nebi,
skiaď delí, spúšťa dľa potreby
dar všaký do podolka detí,
však, pravda, tých len, čo sú dobré,
čo žijú podľa prikázaní
a k práci neľutujú dlaní —
povrheľ nikda nedožobre,
a planec vždy mal výplat planý!
Ty, zaťku — ja sa s tebou zmieril,
bo videl som, že vytrváš —
i spoznal som ťa — inu dobre!
maj dcéru, ja ju vďačne zveril —
však buď i potom Tobiáš!
Ty zasa, dcéro, keďže žena
si už, i pošla tvoja parta —
i tebe nech tu malý výklad:
Buď verná, prvý poklad z vena,
a starostlivá ako Marta;
tam máš, hľa, matky svojej príklad —
(tá v slzách sedí roztúžená).
A keďby predsa nezdar, zloba —
nu, spomnite na muža — Jóba —
boh zvráti, len ho majte radi
i milujte sa vospolok —“
S tým vypil samý po spodok
a sadnul, vytrúc čosi z oka.
Za ním vstal kmotor, od obloka
čo sedel pri pokrytom stole
(bol starší, lež vždy dobrej vôle,
na tvári žartu rumenec
a na nose mal pupenec),
a vetil, myknúc na opasku
i k ušiam pozahrnúc vlasy:
„Po otcovi sa krstný hlási.
Keď na ten stôl, hľa, hojný hľadí:
nemôže ni on darmo žiť,
za toľké nuky, toľkú lásku
tiež musí niečím osožiť.
Nuž, manželia vy rúči, mladí,
počujte! Ja vám, moji milí,
tiež radu dávam: ovšem, radi
sa majte, nekukajte inam —
tak radi — a to napomínam —
by, než sa jeden rôčik schýli,
jak dnes sme — všetkých, moji milí,
ste pozvali nás — na odmlady!
Len toľko som chcel doložiť.“
Smiech nastal vôkol, búrny smiech
jak u stola, tak pri kachliech,
ženičky v päsť sa schichotali,
len nevesta sa pŕli, páli,
až Michal všetko zahovorí...
A keď sa takto uhostili,
keď popili i pojedli:
von vyšli; dvorom, pokraj hory
sa porozpŕchli na zhovory,
i aby si tam pofajčili.
(Zhon detí rozbehal sa v šante —)
Pozatým zas si obozreli
hájnický spôsob vôkol celý,
nu, všetky spady; i vo stajni
sa octli, aby uvideli,
jak s tým, čo venom priviedli;
ba neťažilo sa im ani
obsevok pozrieť v ďalšej stráni —
I kde čo — všetko pochválili,
dodajúc prívinš dobroprajný.
A keď už bolo po ovrante,
i slnko dosť na nízkom pánte,
po požehnaní skrz a prez,
po obapolnom ďakovaní
rozlúčili sa. Povysadli
do vozov — a už skryl ich les.

Tu mladí zas sa sami zhliadli —
im tichý nastal žitia ples.

IV.

Svet nazdá sa, že k žitia blahu
je treba zbytok všetkých vecí:
skvost, prepych, nádhera a hoj,
dážď zlata, požehnaní príval —
hneď v splnku, o čom človek sníval;
že tra mať vyleštenú dráhu,
z baršúnu lôžko na pokoj,
z vĺn sedadlo na posedenie
a miesto božej oblohy
klenutím šarlát baldachýnu,
noc tráviť nie pri jednej svieci
či kahánku, lež v svetiel mori,
kde potom už nadobro zhorí
tma, kľud i sen — ten motýľ stínu,
vždy šumieť šatou ako v pene
a voňať masťou drahých ruží;
že tra hrať zástoj, úlohy
už v kolíske pod krajok krovom
a vážiť už i prvým slovom,
tra podnož držať širokú,
čo otrocky a slepo slúži,
po nejž liezť možno k vysoku,
a kde už i vták zmdlieva, hyne,
ľzä zablýskať sa vo výšine —
že vôbec tra byť povýšeným
na podstavec, byť modlou cteným,
tam plytvať mocou, skvieť sa v sláve;
že treba vedieť a môcť v malej
chvíľočke všetok užiť tuk,
čo tisíc nastrádalo rúk,
i sto liet len čo znalo stvoriť,
to v jednej ľahkej dobe zboriť,
a ak chtíč z hnusu nevylokal,
nuž o skalisko mrštiť pokál
tak z rozmaru, veď v ňom len pot,
i spení sa zas v rozkaz: nalej —
Že tra hluk, rozkoš, haravara,
mľask, šaľba sirén, panny zvod
a žitím letieť ako para —
tra zmysel zvláštny, v srdci — v hlave
len hýrenie, buj... a tak ďalej —
Hej, svet tak súdi: k žitia blahu
že nezbytné sú tieto veci
tu v ťažkom háve, tu zas v nahu.
To avšak omyl. — Blaho pravé
vždy iné malo podmienky,
a navzdor, že je klenotom,
čo najviac váži životom,
napospol skrovné boli predsi.
Je včielkou — a tá, ajhľa, letí
ta najradšej so bzučným plesom,
kde čisté rinú pramienky,
kde poľné domov majú kvety,
ta k stráňam vonným, k sviežim lesom
na božskej manny pašienky.
Tam potom liece bez závady,
a sajúc med, ním zápäť sladí.
Je slávikom, čo zmiera v kleci,
i bárs ho zavrú v zlatú, v drahú —
čo sám sa odel v halienky
šat jednoduchý, i čo nyje
a spieva čarné melódie
až vtedy, keď už zmĺkli všetci,
mrk drsnú uchlácholil snahu,
keď do dier lesklé vliezli zmije,
usadli mrzké myšlienky...
Len potom nôti v kútku kríčka,
až slasťou slzia noci víčka.
Je zásvitom — jas rajskej ruže,
čo neopŕcha do kaluže;
čo vôkol chalúp radšej lieta:
bo s rôjom ich sa zavše stretá,
bo, keď svet ešte v zápači,
im svetlo jeho dostačí,
im, aby v každom hli sa členku,
dosť jeho plápol na okienku.
Je vôbec vtáčik — divný, plachý,
čo radšej v tiché zlieta dachy,
namiesto v prútí rubínovom
tam hniezdi v týní vrbinovom,
po jedľovom si skacká prahu,
i obadal-li zradnú snahu,
k jednoduchému sadá pleci...
— Nu, nie moc treba k žitia blahu,
len spokojnôstky drobné veci...

Kde z jednej misky berú, jedia,
z jedného krčiažka kde pijú:
k tým ono ako vtáča sedá
čo tretie v tichú harmóniu;
a keď si vpadli kolo šije:
im hudie rajské melódie.

— Sú šťastní mladí Čajkovia;
je, pravda, doba medová —
Ni nevedia, jak miznú dni,
len keď tu mrk, ich bez pomoci,
a po rozkošnej, sladkej noci
keď opätne sa rozvidní —
len to, čo zazrú: skorý prechod —
a z borby tmy s dňom čujú vzdechot...

On troška horu zanedbal,
nie zanedbal — len menej chodí,
i neskôr ide, i prv príde,
as’ ako by sa prechádzal.
Lež kto by mu to za zle mal
toť v čase, plnom v dome vnady!?
Pozdejšie snadno vynahradí;
dnes v kratšom dosť tam zazrieť vide.
I jak tak lecikedy chodí,
tu ona ho vše vyprevodí
na pokraj lesa — veľká práca:
tak ťažko sa s ním lúči, vracia.
No len že čula štek a šust,
štek psa: už letí dolu schody,
kol krku chvatom sa mu hodí,
i nedajbože jeho úst
sa v dostač najesť — toľká pláca —
boh chráň, by zvolal tiež, že: pusť!
S tým vedie si ho hore schody —
pýtajúc: jak sa mu tam vodí?
Čo nového? Na čo on rekne
(kým sviežosť jej mu oči slepí
a kol úst iskra žartu hrá):
„Pán zajac vo varštati kra
tam pilne na oplecku štepí,
i vzkazuje ti rúče, pekne,
že zhotovené tebe dá —
nablízku srna rohatá
niť navlieka mu do črtiny,
niť, ktorá visí zo svrčiny,
kde z kejsi tajnej, zlatej cievy
ju veverička odvíja.
U kolien majstra medveď sedí,
pysk rozzevujúc na prezvedy,
je učňom chtivým na všecko;
on drží majstru oplecko,
a poneváč doň tuho palec
pozaťal, z všetkých tríma síl,
i škúli, mrnčí ako znalec —
by poslabil a popustil:
ten hodne ho vše — tu plač, revy —
nečuješ, ako zavýja!? —“
Zasmiala sa a v skráň ho šuchla.
— „I aby si sa nepreslúchla:
poľanou saňa brodí ľúta,
ktos’ — hrozná opovážlivosť! —
jej šteňa vzal, to hľadá, hľadá,
a môž’ byť — óvy! Akás’ bľadá!
Nie? Zakázal som — teda dosť!“
— „No, neboj! nevleziem do kúta —“
tu vzpriamila svoj lepý zrost
(kol zriasila sa tlačenica),
i pokázala hmkom, schválky
na ramien tuhé, bujné války,
srd znamenajúci poľom líca.
Vtom vstúpiac razom v pitvorec,
jak keby to jej povinnosť:
už sníma kapsu, zbroj mu z pliec
(hoc na pušku ju upomína)
a vešia rezko v záves klina.
Pot sama stiera z jeho čela,
i vlasy zriadi. A keď už
ním všetko bolo, jak mať chcela,
izbené dvere otvorí —
Popredku, núka, aby muž —
len za ním ona, prečo? Nuž
po prvé to znak pokory;
po druhé: by snáď uzavrela
nadobro dvere, mniac, jak strela
že muž zas bzikne do hory.
Ináčej žena ona vážna
i stydná, voždy prácna, snažná.
Tam potom kŕmia s’, hrkútajú
o tom, o inom dľa zvyčaju. —

Keď slnce nie moc má za horu
a na javore veľký list,
sťa keby povystrel bol dlane,
sa kovom zleskne: zavše vyjsť
ich vidno prez prah odmerane —
Jak vychádzajú, na pozoru
ich tiež sa západ zrkadlí —
I dnes na schodkoch zasadli:
tam ona a on trochu nižej.
Navyklá práci, ona šije
i teraz — domáceho plátna,
čo belšie je však od ľalie;
včuľ v purpur zrudlo: palúč zvratná
ho poliala, jej farbí prsty,
ba i tá vzletná, tenká niť
je jak kmit skrvavenej zmije —
Tu musela sa popraviť;
i šije zas len, ďalej šije —
(on opäť širák krúti v hrsti).
Tvár jej je k šitiu nachýlená
a šatkou z hlavy priclonená
bieluškou, včude badiek kmit —
No ten, čo sedí trocha nižej,
ten dobre vidí šumnú tvár,
spod riasy víček očí čar
jak vylieta a prsty rídi,
sťa hviezda z temna ľuďom k púti;
ten vidí, áno, dobre vidí
pel líčiek ako nádych svetlý,
tak ľahce zabronelý v žiar,
vlas tmavý jak sa k čielcu rúti
a ústok prúžok ružou skvetlý,
jak stuľkať zdá sa s každým bodom —
ten vidí každý krásy dar,
i nôžku bosú mimochodom.
I obzerá ich v snivej dume,
obzerá, chutná, polyká
a všeličo má na rozume —
Vtom strhol sa i sadnul bližej,
ním túžba pohla veliká,
je roztržený, rozochvený...
Tu začal spytovať sa ženy
sťa holub tiahlym, vábnym hlasom:
„— Čos’, žienko, dneska robila?“
A čaká — až mu vetila:
„Hej, vodu v koši nosila
a merala čas rífom: časom.“
Nečakal takej odpovede,
i ďalej túžny zhovor vedie.
„Či privykáš mi, dušo drahá?
Však ver’? Oj, kvietok môjho blaha!
Však hej? —“ A ona plecmi stisla.
„Jak? — Neľúbiš viac vrele, cele —
no? —“ S tým sa opäť primknul bližej.
„Tak od soboty do nedele —“
mu odsekla a chcela vyšej,
pričom sa vážnou stanôvala,
hoc vpravde iba žartovala
(i neraz, ako nevidel,
ho kradmo zrakom pošibala),
lež nepustil — „Ej, strela blysla!
Nuž aby si i v týždňa stred
ma znovu a vždy milovala:
sem pyštek tvoj, bo môj je, hneď,
ja muž tvoj, mužov na povel
sem, lebo hrmen! lebo keď...
(plam búrny z očí jeho sála),
sem takojúčko, rezko, friško!“
Tu navzdor zdanlivému prieku
ju zobjal tuho kolo drieku,
pretrhnul schválne z ihly niť
a k ústam dral sa — poľúbiť,
bez milosrdia... „Ale! Miško!
Daj pokoj! Nekrtuš! Pusť — priam!
Uvidíš, že ťa pobodnem!
Jaj, šatka všetka ukrkvaná!
I šitie — pusť — nech zodvihnem!“
Zvŕtala hlávkou sem a tam,
i zdala sa byť nahnevaná:
preds’ postihol — no objedz’ malá,
bo vtom mu vyrvala sa z rúk.
Keď ubehla, sa schachotala,
i ako by ho posmievala,
mu vrkla: „Ženským slabostiam,
chlap, podľahols’ — Ach! Srdca tluk;
vidz, ako som sa zadychčala...
No, počkaj —“

„Ba hneď pribehnem —“
Tak škádlili sa. Porovnali
však onedlho; ako deti
keď tu už jara rozvitok
a každé chce mať prvé kvety.
Medzitým tíško zhasnul deň;
posledných bleskov povodeň
sa celá ponad lesy plaví —
Pastierik tiež už dohnal kravy,
praskajúc bičom na znamenie
(bol pásol ich kdes’ v kopaniciach).
Tu, jak tra k noci, pozriadzali
po vonku hnedky to i to;
a keď už kravy podojené,
ich dônos sšumel v širaniciach
a všetko rúče opatrené
(dva svity mrku prez sito):
nevdojak zas sa zišli, sňali
na schodkoch, kde sa pousmiali
už teraz v súzvuk, vo dôvere;
stúlení tuho bok o bok
a ruka v ruke hor’ sa brali —
tak vyšli a sa usmievali,
i za sebou keď pritkli dvere...

Nad dvermi luny zásvitok
sa jak by v nápis krúži, valí:
Tu láska má svoj príbytok!

V.

Zas svätá svitla nedeľa,
jak slza, deň tak krásny, čistý.
Hmla z dolín spešne mizela,
sťa v povedomí: poodhaliť
že kraj tra, nímž má slnce králiť —
do výšin v chlpoch, v ruslín tvaru,
kde v modrú rozplýva sa paru.
Len jeden ešte podlet hmlistý,
jak veľká bielych vetríl loď,
pustená na nesmierny brod,
a svet už oku odhalený
nadobro: znikli plachty, steny,
odkryl sa morom po chobot —
spriezračnel jak sklo z každej strany,
jak sklo, keď utrú z neho pot,
je svieži, v každom ťahu ranný,
jak obraz novomaľovaný...
Na východ tiahnúci sa les,
v polovál stredkom prehĺbený,
z smaragdu rámom zdá sa dnes,
v ňom v kúzle božskom, v božskom čaru,
jak v katedrále na oltáru,
sa obraz nanajvyššej ceny
skvie v barvách slávy, bez premeny,
skvie: Slnce — tá plň boho-daru,
ten obraz krásou večný, istý,
jak nestvoril ho Rafael,
ten obraz dobra pozlátistý —
On: v službu zeme postavený,
on — pravý nebies archanjel...!
Svet samá mladosť. Vzduchom spev
tiež novší, krajší vznáša sa;
po holiach zvláštna okrasa,
ich každá v novej parte hlava;
jak organ k sviatku zuní riava:
i kam len zazrieť dookola
a začuť: zvšadiaľ krásy zjäv,
dych vonný z ústok neviny
odvšadiaľ zvonom zve a volá —
tá trávka dvorcom, drobná byľ,
jak novo by ju ozdobil,
tých smrekov vôkol vzletné šije,
jak zástavy by procesie;
ba chaty krov tiež v komsi jase,
a drahšia perla skvie sa, trasie
pred dvermi na javora listí.

Čajkovci idú do kostola
dol’ do dosť diaľnej dediny.
(Ta patria farou.) Chcú včas prísť, i
spech majú. Ranné hodiny
sú vždy tak krátke, bystré v letku,
nemožno púť im zahájiť —
a v dome, v ktorom chce byť lad
i sklad, kde vzorná gazdiná
spravuje, ruky prihýna:
čo všetko tam tra sporajiť
zvlášť pri nedeli, poskladať,
očistiť, zdvihnúť každú smietku!
A potom — mladomanželia,
chrám k tomu, krásna nedeľa:
nemenej príde do ohľadu;
v kostole tisíc očí hľadí —
I ktorá mladá nevesta,
majúca v truhle mnohú vnadu,
sa práve vtedy potrestá
a nevrhne sa do parády?
Nu, ktorá — driečna, šumná, riadna?
Vy tak? — Ja ale vravím: žiadna!

Včuľ vyšli z domu, na cestu
už zhotovení, zatvárajú —
Popredku ona. Ako sen
z tmy, vylupla sa z chaty taju,
sen vo vznešenom šelestu,
sen luzný, aby zdobil deň...
i díva sa po jasnom kraju.
Na hlave podvíku má bielu,
jak z hmly, tak riedku — dobre zrieť
libačky prez ňu hrou sa skvieť,
i čepca kraj, čo zbieha k čelu,
jak ohnivej by žiare pruh —
a bárs kol hrdla ovinutá
je, spenený čo vodotok,
čo v kadlubine dlho zvieral:
preds’ vidno skvelé vojky perál,
čo hrdielce jej jali v putá —
I hoc je spredu ovisnutá,
po ňadrách riasou splýva dol’,
jak dol’ úpustou šumné vlny,
sťa perutí pár podťatý:
jednako čisto badať stúh
spleť čarnú, slučiek ružo-kruh,
jagotný tu-tam sponiek tmol,
čo pritužujú živôtok,
živôtok bujných ňadier plný...
Ni oplecka kvet nezakrýva
— nad pliecky i tak hovieť má kde —
to voľne kolo ramien splýva
vo vlnách snežných až po lakte
a stužky plecníc v sebe stápä,
kým van ich stadiaľ nevylapá,
jak rybiek zlať i ružoväť.
Zásterka jej zas činovať
je samá, jak by z ľalij biela,
okrajmi umná krumlovať,
a tak ju vôkol obletela
jej nevädzovej sukne stráň,
jak oblak modrú nebies báň,
len spodkom, čo zbyl modrý jas,
jak hneď nad zemou neba pás...
Obrúštek jemný, na rameni
na ľavom zľahka prehodený;
v ľavici zdobná knižočka,
v nejž mnohý obrazec sa kryje,
i taký, čo sa stúli, zvije,
keď dýchneš naň; pri knižke hneď
voňačky práve strhlý kvet;
a medzi slnka splápolaním,
čo zbadajúc ju na podstene,
priam bolo tam, a zásvitom
ju ofŕskalo čerstvým, ranným,
nezabúdajúc popritom
ni prstienkov jej na očká —
tak zjavila sa, vyjdúc von
z dvier na povláčku schodkovanú,
zhovejúc, kým snáď zavrie on...
S tým hla sa. Schádza dolu schody,
čižmičky vrždia z kordovánu,
vlek sukieň zase jak šum vody —
i zišla. Ciestkou ušliapanou
bez meškania priam stúpa v les
popredku — on zas zápäť za ňou
v tej istej hunke, akú mal,
Keď o službu sa uchádzal,
keď nebol ešte, čím je dnes,
tak šťastným, nemal svojho chleba,
nie vatru svoju roztomilú,
ni tej, juž vo sviatočnej kráse,
v obletu stužiek, v partíc jase,
hľa, kráčať vidí napred seba,
jak keby horskú stíhal vílu —
v tej hunke, lenže naskrz iný,
hoj, iný! — jehož v tejto chvíli,
jak kráča: nik — nič nepomýli,
nie srnec, plaché holuby,
nie celá hora maľovaná
nevyrvú z dumy, podívania
na žienku, predmet záľuby...
Tak spešia lesom do doliny.
Len kus však zašli do hory
(v nejž plným hrdlom vtače práve
sa ozývalo ráno smavé),
už zastala. Na priekory
tam cesta zhusta porastená
a pažiť hodne zarosená;
i smrečná sklenky roní riasa,
ač žiadne nehýbu ňou vánky —
Tu vyzuť chcela kordovánky:
že škoda ich; k nim siahla už;
no skoro spozoroval muž
a zbránil jej. Sám prešiel vpred,
ponúknuc: aby za ním hneď
šla, on vraj rosu pootriasa;
o iné by sa netrápila.
Obrúsok predsa rozkrídlila,
jak nevidel, na veľké poly,
hneď doň sa celá zababolí,
že zdá sa byť jak príšera,
čo utajená lesná panna,
blúdiaca horskou temnotou;
no neminula krátka chvíľa,
muž obzrel sa (jak obzerá
sa často v túžbe ukochania
so všetkou srdca vrelotou),
i nemálo sa zakabonil
nevôľou — ťažko, ledva nesie
(chcel popýšiť sa ňou i v lese)
jej spotvorenie, prvý mrak
v manželstve dnes mu čelo sclonil;
však spamätal sa, nechal tak
výčitky v spánku prehlbokom,
i tak ho opäť okúzlila,
pousmial sa i tváril ľak:
„Vidz, koľme si ma prestrašila!“
Vzozrela tmavomodrým okom,
lež ani slovka nemá na to;
jej úsmev tiež tak plachý, horký —
Stúpala za ním poubrato
i ďalej, no vždy mlčanlivá.
To napadlo mu. Zastal v chode,
obrátil sa, v tvár jej sa díva:
„Čos’, Hanka, taká starostlivá,“
— tak všaké počal rozhovorky,
„čo mlčíš, v hlbokej jak vode
tá mrenička? I čo ti? Povedz!
Ty predsa štebotávaš rada,
a dnes si jak tá jedľa v tíši —
nesšumie, ni keď vietor vyšší —
Nebodaj, tejto noci sen
ti ešte vždycky vrtí v hlave!
Čo? Uhádol som, no? — Ba hada!
Tak veru, zvláštna, smiešna to vec
ty z jahôd schválne varíš blen —
Premýšľaš o zlom, a to práve
v nedeľný tichý, svätý deň,
od svitu — i keď do kostola,
a ani sa mi nezdôveríš;
nu, nebuď detská, zapuď strachy!“

„Ach, Miško, ty mi neuveríš“,
vetila sticha; smutná bola,
„a predsa strašný to bol sen!
Mne tiekli slzy ako hrachy —
a trudím sa i teraz preň.
Od rána mi tak bôľne, ľúto:
boh odpustí mi vinu túto —
Ni som ti všetko nedoriekla.
Keď totá obluda ma vliekla
ku priepasti, kam zavaliť
ma asnáď chcela — už len chvíľa:
tu tys’ mi prišiel na pomoc.
Chceš z pušky do nej vypáliť,
lež nemožno; tu do úmoru
už vrhol si sa na potvoru —
a dlho ste sa rimovali
na miestku, ako odtiaľ potiaľ —
konečne oba v priepasť z brala!
Ja skríkla, vzlykom zaplakala,
lež darmo — hrozná, strašná noc! —
tma priepasťou sa rozložila,
i darmo volám, nárky strojím.
Mať moja tiež tak kedys’ snila,
a hneď sa otec v hore poťal.
O teba jedine sa bojím,
o teba, Miško...!“

„Nevídali!
I bolo to tam! — Cit už, cit!
Veď vieš sa predsa pomodliť?
Poď — Chacha, nikdy v takom žiali!
Sny: bubliny — kto by im veril?
Nik múdry, iba poverčivý
a deti, deti v komore,
keď deň sa mátohami sšeril.
Sen, vidz ho tam, hľa: holub divý!
Sen, vidz ho: horou slnka svit;
sen: inu, motýľ ponad zbožím —
jak môže komu poškodiť?
Blázonko! — Nikdy v takom žiali!
Poď — ešte viac ti porozložím...“
A zahováral, rozhováral,
hneď vážne, hneď zas žarty stváral,
jak zmyslieť stačil naspore
a jak bol k tomu umelý —
Konečne reči prospeli,
sen ostal snom, hoc ešte páli,
kde stopy jeho utkveli.
Šli, teraz už však v zhovore.

Z cestičky skärovali k riave.
Tá prúdila sa hukotave,
až pobrežím to dunelo;
kde-tu sa roztekala v cestu
a drave krovím drmotala.
Keď ku takému prišli miestu,
a prejsť ho tra, lež lávky niet:
čo bolo robiť? — I čas schádzal,
i Michal bŕdnuť pozakázal —
čo robiť? — Zhoda bola hneď,
hneď: Hanka vrtko, veselo,
ba už i s žartovnými slovy,
podala rúčku Michalovi,
a z prúdov, kade čneje skala
blíž skaly (vzdorná čeliadka):
nuž po tých potok preskackala,
hupkajúc zápäť v mužov sled
jak šantovlivá strnádka.
A ešte rezkejšie si viedla,
keď nižej došli ku lavici.
Tou jedinká len slula jedľa,
no dvojka, vo pni zrastnutá;
i poneváč ju neskresanú
len tak cez brehy prehodili,
jak kväcla bola v povíchrici,
podstavca nedali, ni na ňu
nepriložili operadla;
poneváč bola prehnutá
i kývala sa pod krokom,
popod ňu ale rozbesilý
hnal potok v pádu divokom,
i točila sa zákruta
vĺn, hlcúcich sa v zvade, v hluku:
nuž Michal, by dák’ neupadla
mu Hanka, podával jej ruku
a chcel ju previesť. Ona však
odmietla pomoc, radu — všecko,
štebocúc: že veď neni decko,
je predsa dávno obutá —
Prebrnkla hrave ani vták,
nad valiacim sa poľa zbožím
sťa veselého mráčka tieň...
Tak mizne, hľa, z jej duše sen,
i ač ho zvala poslom božím,
v nedeľný čo k nej vstúpil deň.

Les prejdúc, pašienky a lazy,
zbočili poľným chodníkom.
Tu slnko nič viac neodrazí:
plá voľne skvetlým ľadníkom,
poslednú sajúc krupaj rosy.
Už predtým v lese čuli čosi,
jak zvona hlahol okázalý:
tým viac sa teda ponáhľali.
Vtom opäť zvukot: trojný výraz —
hej teraz zvonia po tretí raz!

Chodníček vedie ku kostolu
(ten nad obcou na vŕšku stál
stred košatých líp, jejichž stín
sa šíro-šíre rozstielal
po hrobitove — štíhla väž,
kríž ramenatý u vrcholu —
nu, obyčajný Sion náš);
tým došli priam. Prez cintorín
sa berú zrovna; v stromov stínu
však pozastanú trocha — inu,
tra jedno-druhé popraviť:
jak v kostole, na takom mieste
preds’ všetko skladným musí byť
pri ľuďoch, no a na neveste!
Hej, prišlaže by do výmoľu!
I celkom slušne — — Keď do chrámu
vstúpili (bo vraz vnišli, spolu):
už velebný znel introit,
na krídlach spevu celý zbor
sa vznášal v ducha vytržení;
naproti oltár v svetiel plamu,
kňaz pri ňom práve v uklonení,
odetý v brokát, aksamit —
Kam zazrieť: zvšadiaľ plápol, kmit,
sťa zlaté v letku holubice;
i slnko okny žiarny zor,
hľa, vsiela božej do posluhy,
kostola vnútrom skvelé dúhy
spájajúc, anjelské jak mosty;
tvár svätých vzňatá od milosti —
On ešte u dvier zvrtnul hor’
ku chóru; ale ona zrovna
stred chrámom stúpa vpred a vpred,
tak ľahce ako podlet stuhy,
jak keby to tam kráčal kvet,
kvetina krásou nevýslovná —
Keď sadla neviest do stolice
(a pomkli sa jej milerady),
ostychom kýmsi rudlo líce,
bol v ohni obličaj jej mladý;
nečudo: kostol vzozrel celý,
sšeptali žienky ani včely;
i v kostole dosť zvedavosti,
zrak všade rád sa vnadou hostí —
Ostydla skoro chrámu chladom,
knižočku svoju otvorila
a modlitbičiek rajským sadom
sa berúc, duša čistá, biela,
v tom okamihu bola celá
tam — v svätom kraji nábožnosti,
kde slncom svieti boží súd.
Len varhanov ples z vysokosti
keď sšumel vše, ten zvukov krst:
sa z hlbín duše prebrala,
do spevu tiež sa vmiešala;
naproti službám u oltáru,
v česť Beránka a jeho daru,
jak chvelá klonila sa trsť,
vzdychala, ráňala sa v hruď...
Tu znenazdania skrsnul sen
jej opäť v mysli, hrknul v pamäť
a sladkosť duše zhorčil blen;
nie, nevedela seba klamať:
i kľakla v dlažbu studenú,
k vrelšiemu citov prameňu,
skiaď čerpá znova, čerpá opäť
chvelými ústy, vznáša v obeť,
vzdych k vzdychu, slzu k slzičke,
obeťou — Bohorodičke;
a ona, nebies kráľovná
a zeme-dcéry najlepšia mať,
vyčula vzdychy, slzy vzala,
pravicou lásky pokývala,
plášť upustila riasnatý
a jeho lemom, čo je hladší
nad všetok sveta toho zamat,
sna škvrnu, ktorá mučí, vláči,
nadobro, navždy vymazala
z dcérinej duše, pamäti.
S tým vstala, šaty urovná,
i spokojená sadla znova;
vzozrela k chóru, ku povlači:
snáď aby videl, jak sa chová,
že nezabudla jeho slová,
v modlitbe že sa vyrovná
i jemu — aby súdil, videl,
že veru zdolá, veru stačí,
že pôjde s ním i po bodľači,
že viera jej je orlích krídel.

Naproti, bližej ku oltáru,
od pospolitých oddelene,
jak na sihoti, vyvýšene,
s podstavcom čudesného tvaru,
pod práporcami z šarlátu,
čo stropom zvisli rozkrídlené
sťa palmy, riasu bohatú
pooprúc v štíty vytýčené,
pod hviezdovitou vôkol strieškou,
nad ktorou erbu skvie sa pych,
za pozlátenou hustou mriežkou —
tam sedadlo má patronát.
No sotva niekto z týchtam ľudí
(a mnoho ich je, vera mnoho)
s istotou môže povedať:
že videl v ňom raz sedieť koho.
Dnes predsa kýs’ tam stín a mih;
vše vzrušia sa, jak znamenať —
nu, iste dlhá chvíľa, nudy...
Diaľ modlila sa, spievala
a vďačnou dušou jasala.
Ku vzdychom, v hlahol piesne svieži
jak sprievodom jej srdce tlčie;
na bohoslužbe visí celá,
je jak to kladivôčko v spieži.
Prez závoj skrúšenosti vonný,
prez kadidlo, čo v strop sa roní —
nie, nebadala, nevidela,
zo stolice tam húšťou mreží
čo predrali sa ako strela
a strehotali: oči vlčie — —
Keď spiatky išli po kostole,
už celkom bola dobrej vôle;
zapadli mračné myšlienky.
I bola zase šťastná žena,
jak kvietok skvetlý u prameňa,
blíž vody cítiac korienky.
Šli, len tak lesom šumelo;
on, pramáličko chybelo,
že nezabral ju na ramená...

VI - PIESEŇ

Ona

Dobre mi, dobre mi — mužíček šepce mi,
jak holub mi hudie: že ma ľúbiť bude,
kým len živý bude.

A ja mu povedám, povedám mu hlasom:
vrť sa či nevrť sa, neumkneš zo srdca
nikdy, žiadnym časom!

Na tom mojom hrobe v každej jara dobe
zotaví sa, zbujnie trávniček zelený,
bude býľkou kývať, rosičkou sa dívať —
Uver mi, lebo nie: ale tak je, on je
láska tvojej ženy.

On

Dobre mi, dobre mi — ženička šepce mi,
jak holúbka hudie: že ma ľúbiť bude,
kým len živá bude.

A ja jej zas vravím hlasom prenikavým:
vrkaj či nevrkaj, v srdci budeš skrytá,
kým mrká a svitá!

Na tom mojom hrobe v každej jara dobe
vypučí, rozvije šípová sa ruža,
bude hlávku kloniť, bôľom kvietky roniť —
Uver, lebo never: ale ona je ver’
láska tvojho muža.

Oba

Dobre nám, sladko nám, ako na konárku.
Hora šumí vôkol, nad ňou krúži sokol —
my tu v tesnom párku.

Dolu letí hviezda — prosto k nám do hniezda.
Vitaj, hniezdo z neba! Čo chceš? Čo nám z teba?
— Nesiem, čo vám treba...

VII.

(Bár v duši horkú tuchu čujem,
dňov blízkych sparno, dus a tlak —
preds’ pokračujem, pokračujem...)

Žiaľbohu, tak je, neinak!
U nás sa čudno hospodári;
úprimne vraviac: naopak,
pri stálom ,čary-nepodary’,
s postupom, akým lezie rak.
Už koľkí vyšli na minďary,
na nivoč, holoť, mizinu —
už koľkí! V bridkú barinu
bied skĺzli v ľahkom okamžení.
skiaď vybŕdnutia viacej neni:
bo trasoviskom ona je,
čo bezdnú tají hlbinu,
umŕtviac výstrah ručaje,
je močarinou hnisu, kvasu,
nad ktorou k zrade bujnú riasu
šaš šíro-šíre rozprestrel
a vábnym blkom bez únavy
si hupká svetlý zvoditeľ,
by zhasol, čas keď k tomu pravý.
Z tej darmo by sa vymykal,
ktokoľvek zapadol raz v ňu,
v jej okáľ hnusný, zelenavý:
v blať zmelkli pevné okraje,
hlien zdŕža, lipne, ťažký kal
polyká, hlce stupaje;
puch skazy vyrutnul sa sťa z vrát
by pekla — liece kolo hlavy
vždy užším kruhom, ťažobu
nerestí všetkých, šiaľ i závrat
čo mračno posunujúc k duši;
na prsia čos’ zas ako had
sa teperí, kút hľadá ľavý,
a pripijúc sa ku srdcu:
hneď dľa toho, jak ono búši,
doň ponáhľa sa zajedať;
i aby stav viac zúfalý:
spomienok búrky, žúžaly
mu ešte horšia trampotu,
výčitkou bzučiac stále v uši —
nie, stadiaľ nemožný je návrat,
len jedna cesta: hlbšie k dnu...
— Už koľkí zašli nočným šerom,
ako bys’ po nich čiarnul perom!
A mali predsa zeme postať:
úvratí ani nedozrieť —
a čo ňou vídať bolo vzrostať,
bol požehnania zlatý kvet;
pomedzi smavá nevädza,
v znak, že čo ponad ňu sa kníše,
to more, klaso-prúdov let,
to more z onej modrej výše
až na tú krupaj pochádza.
No príval zhučal márnotraty:
rozsácal hatí závory;
plen zarachotil od úvratí.
Z postate iba franfory.
Kus po kuse ju vlna strebla —
je po žni, stohoch, po piesni;
po majiteľoch ani stebla.
Len kameň zbudol pomezný,
len kameň trudnej ku pamäti:
naň dumný havran časom zletí
a o koristi skrákorí...
— Už koľkí zhasli o poludní
v nezbedných vášní víchrici,
a s nimi: meno, vehlas cudný!
Na veľkej sveta ulici,
kým ešte v rovnováhe stáli,
jak mocne jejich slovo znelo!
Jak jasalo sa slávou čelo
pri poradách im, na snemoch
v pošmúrnych sieňach, teremoch;
jak vývodili púhym zrakom,
na krídlach jak sa niesli chvály!
Siahali zrovna ku oblakom,
svit stálic v hrdom pohľade;
kol obežníc vrt po vôli —
hej, oni boli topoli
vo spoločenstva záhrade!
No vietor nepostihne zobrať
tak skoro prášok zo zeme,
jak rýchlo kmitnul karty obrat;
jak, čo by pavučinné plachty,
sa rozrusala prelesť šľachty...
Rozkoší zavítali chvíľky,
motýle zápäť nádhery;
i aby úplň na sneme:
poslato žravé po kobylky.
A kde sa táto ruje čeľaď,
tam upíry hneď úžery:
ó, po tých netra sliediť, peľať,
nie vábiť k hodu onomu!
Tí ovoňajú pohromu;
tí dostavia sa hurtom sami
so všetkým svojím hydom, hmyzom
i s hriechy, šabľami a klamy.
Tých práca potom trvá zhubná,
až vírot neutuchnul bubna.
I možno-li je dobrej snahe
pred týchto niečo schrániť hryzom,
z paznechtov vydrieť, vyrvať z tlamy!?
Nie, ach! bárs sväté je, bárs drahé:
na újesť musí, na korisť!
Roň, strome, ovoc, ba i list! —
Čo? Konáre už holé, nahé?
Jak? Niet čo troviť, niet čo jesť?
Už všetko v pažrák hlváňom?
Hach, strome biedny, ošarpaný,
— kedysi pyšný rodostrom —
ta s tebou v ďasy za parkany!
Prv ale ešte miazgu: česť...
A slovo moci odzunelo,
hľa, ako púšťou znova hlas;
tmy závoj zletel na povesť;
zo slávy, ktorá krážom čelo
zdobila, mrzký sadnul kvas;
z topoľa skrpatelý peň,
nesúci leda na oheň.
V tom bújania, hľa, spupný zmysel,
čo pohodlných spríkri dráhu;
keď v misku hupla ľahkomyseľ,
tá druhá už stratila váhu,
už brní, frungá, pochyl častý,
v neistom ihrá vo vzruchu,
len jeden povej zo vzduchu:
a obsah — skydnul do priepasti.
To osud sladko-žitia modly;
tak hýrivosti pekný boh:
z hlinených skrbalí sa nôh,
a podeň zbožňovateľ podlý,
vytrúbiv hojnostenský roh...
Tak v zhubných vášní víchrici — —
No nezhynuli ešte cele.
Znak, čo im utkvel na líci,
u sklonku čo im rudnul v čele,
tá pečať súdu potrvá
vzdor zmaru časov do posledných:
kol rovu večná koprva —
tá strvá desnej ku výstrahe;
ináčej závej po ich dráhe...
Už koľkí! A to z prvých, predných!
Už koľkí spustlých do radov,
do šíku, jemuž satan velí —
a predsa nie dosť príkladov!
Jak stíny skoro preleteli.
Náuky ešte vždycky málo.
Jak keby viac už nesvitalo:
i diaľ sa mrhá, hrá a hýri
v oplzlom hetér objeme,
až pozbavený základov,
dedičnej vbitých do zeme,
zas ten-ten v nič sa rozčapýri.
Za štrngom, vreskom, za lomozom,
nu, pokoj, ale — pod závozom.
Kam zájdeme? Kam zájdeme!?
Nie, schválne nechcú počtovať,
do kúta zašmierili kráť;
nie, nechcú zmúdrieť, nie sa kárať:
chcú prudko, blčným blkom zhárať;
nie trvať, konať, poosožiť:
len čím skôr zažiť, vyžiť, požiť!
By nezreli, jak s nimi stojí,
beh zmiatli vlastnom na orloji;
by nepočuli o polnoci
stráživých duchov tklivý tón,
lesť privolali ku pomoci:
o čaší ostrý bijú zvon,
i zavýskajú ku posmechu,
tleskocú hnusným hovorom;
s tým odvlečú sa do pelechu,
a otupejú — mámorom.
Skvost ducha, myseľ veľkých dúm
a srdca kúzla: peny šum,
dym, kúdol — skoro porozplynie,
jak perla rosy na barine...
Konečne dôjde na pykanie:
Čo vtedy? Zaslúžený trest?
Sú baby, i tu zovú lesť:
vír, slučku abo durkot zbrane.
I čo z nich? Skáľaťa tu hŕby,
tam bútle, ošumelé vŕby,
po dvoroch bolehlavu zel
a v múroch povyk strašidiel;
erb v prachu, rímsy na terasu —
púšť, jak by počas zemetrasu.
Inode — jastrab držiteľ.
Čo po nich? Mračná veta, beda!
Ver’ smutné, ale pravdivé,
ku trpkej chuti, požive;
však ináč sa ni myslieť nedá.
Kde na iné sa nehľadí,
len skadiaľ rozkoš, koristenie,
lieň dňa a noci oslady;
kde srdca k citu, rúk niet k dielu,
niet duchu vzletných perutí,
niet rázov tvrdších nad kremenie,
ni snahy ku šumnému cieľu;
kde slova nieto, nieto viery,
krem onej zmeniek na papieri:
tam zásada je povrheľ,
zaznané ľudské ohľady,
tam výkruty a prekruty
o mrvu, prachom každý pel,
tam neľzä nosiť šatu bielu;
tam všetko v jedno bahno tenie
a norí sa jak na povel,
tam zloreč, kliatba, zatratenie...!
I jak môž’ deň tam slávy skvitnúť
a jeho slnce, čo jak včera
tak i dnes rovno delí, meria —
jak môže slnce pravdy svitnúť!?

A potom vzduch náš plný je.
jak prachom kalich ľalie,
viet kadejakých o slobode
(tej pravej k ujme, k zrade, k škode),
či vlastne o slobodnej mysli.
Komusi hrozna chvist bol kyslý
(čo rečieš na to, bledý tieň,
ty, ktorý denne chlipkáš blen
a mocuješ sa v strastí brode?),
chvist hrozna komusi bol kyslý —
posledná hojných tabúl kosť,
snop zabudnutý na záhone
(sám mal už iné všetko v lone),
i aby ku tým mohol dôjsť,
kým nepominú orgie
a triezvych nepritrieli deň:
zaspieval o slobodo-mysli,
jak v púšť keď šakal zavyje.
Nuž žvasty, šumy, pomyje...
Lež vskutku, ony ženú kolá;
jak ich chór vreští, nutká, volá,
tak brdú oje, rafie.
Pokrytstva, sebeckosti viechy!
Závoje mrzké na nešplechy;
pod nivou krtčí, šťurčí plen,
chrup červov hudbou sprevádzaný...
Ó, blud! Ó, podvod, hlúpy sen!
Ó, koľko krahulcov a kaní!
Ó, koľko krkavcov tu kráče
a krúži v strehu kol a kol,
mrak krídel metajúc na lány —
Zor zažlčený, hrvoľ mechy —
Zobáky práve vyostrili
na tvrdých skalách úrazu
a pritom úklad umluvili:
tak tiahnu od ďalekých hôľ.
Hej, v spare lovom otuhlom
smrť nesú hniezdísk zo zápače,
smrť iste... Za čas kolimbanie,
jak na lúčovom povrazu,
cez blankyt otok ešte kol,
hra, dovádivé pomeškanie:
až znenazdania, odrazu,
strmhlavým, kolmým výstrelom,
vtom celý roj sa k zemi švihne,
sťa iskry zo satanskej vyhne...
Plach, piskot medzi kuriatkami
nastane síce v totej chvíli,
sú spamätané, ale bôľ! —
to dravcov nijak nepomýli.
A stráž, tá drichme, pokľud známy,
alebo inej vodcom vtače —
I vidiac, že sú sirotami,
že márny krik ich, boj a lom,
že spáru sotvy ktoré vyhne:
nuž — do hrtana lecú samy...
....................
Tu tomu srdce nad tým plače;
ten však sa rechtí za uhlom.

Žiaľbohu, u nás pustne, hynie
napospol všetko! Sťa by svet
konečný točil vôkol let,
tak neustajnej na hostine
sa troví, márni. Keď nám včera
rozkoší nevytlela vatra
(a spálili sme hodne vera,
faklili do nej skrz a prez),
nuž hurtom vatrime i dnes!
Čo po tom, zmrzneme-li zajtra?!
Tak dôvodí sa. Dobrobyt,
ach, ďalekej to hviezdy kmit,
neznámy onom na obzore,
kdes’ v mračnom trčí závoji;
a v kalendári nestojí
tiež: kedy, skadiaľ vyjde hore?
A čo by hvezdárici oni
sa takých pleták domáhali?
Čo nebeskej ich do povaly?
Nech kocka súdi, lós ať zvoní;
keď tma, nuž všetko v pokoji! —
Jest cesta k totej dobrej hviezde,
jest možnosť lúč jej odokryť,
nie diaľny má ju nebokryt,
je bližej nežli orol v hniezde,
je bližej, lenže — zatmená.
Hoj, dalo by sa spôsobiť,
ó, dalo časom, dalo i tu,
že v splnku by sa zligotala,
vystúpiac v sláve na zenit,
v zmar nesnádz, súžieb, trápenia!
Len modlu strhnúť tamto z brala,
prekotiť v priepasť molocha,
strašidlá zahnať do ich skrytu,
trón zboriť boha leňocha;
prevetriť vozduch víchra prúdom,
vyprášiť z neho puch a pach
a kúdol s všetkým brudom, bludom:
tak obliecť v čisté prádlo zem,
už v zrodku zdrtiac každú lož,
hmyz, čo sa driape na jej lem,
zmíj, hadov háveď potobôž —
hej, dalo by sa, dalo i tu
i najtmavšieho do domu
posvietiť trudných po nociach
dňa zlatom; ale ku tomu
tra lásky k pravde, k právu citu,
a týchto — nieto, nieto...! Hach!
Kde i len právo berú žitia,
i právo žitia tají lož,
tvoj krik nad krivdou vetry schytia,
sĺz tvojich hrnot márny hrach;
bárs i mrieš, s tvárou stoja nemou,
ba neštítia sa zarechtiť
nad bôľom, jak sa kŕčom snuje,
ba prajú, aby hlbšie nôž —
nie, nad tou zemou, nad tou zemou,
tam nemá oka blahobyt;
tam nebom rudne Smrtonoš,
až dopanuje — dopanuje!

Bohužiaľ, pustne, mizne, hynie:
bo hreší sa a mrhá, lení.
Ach, smutná, trúchla, trápna vec!
Ach, neresť zbrklých pokolení;
osveta: slnko na barine.
Kde aký vrchol, pahorec:
toť hurhaj, vráb-váb, ujuju!
A potom sa mu čudujú:
že pleseň, hnitie na koreni,
že ruží nieto na doline!
Povedia: — ľud sám si na vine
za svoje bôrgy, handry, špiny,
za brloh, vo ktorom sa váľa,
čmud bytu svojho, nízky lós,
mrav drsný, v suk jalovca stuhlý —
nech, keď tra robiť, nezaháľa,
nech vetché nepodpiera uhly,
diaľ hľadí, ako siaha nos.
Nech stráži, varuje a bedlí.
Nech neplantá sa, nebrúsi
po cestách, kade nemusí,
nekutá čertov, by ho zviedli,
v hrsť tisnúc čašu machuliny.
Nech chápe sa a rušia, činí;
nech neni večný hory kos,
brat hrudy, milovníkom jedli;
nech starú pleseň vytrúsi
a z vyšších žriedel okúsi;
nech neni blbcom-krpcom vôbec...
Tak múdrych radcov slávna obec —
I ovšem, nie on bez príčiny,
nie bez vady, má slabosti,
čo siahli mu až do kostí,
a sprostiť sa ich nenie vstave.
Lež vy ste múdri iba v hlave!
Povedzte: z vášho naladenia
celého ktorý, aký tón
sa ozval kedy v mysli jeho?
Snáď zdieľali ste utrpenia
a očúvali jeho ston?
Hrádz postavili, aby zlého
tok nepovylial v jeho polia,
pokúšok nestydatý zhon?
Čo dosiaľ vzal z vás, čo sa volá
a volať môže dobročinom
a svetlom, teplom, súcitom
i láskou, ktorá jedna je,
jak pod jedným sme Hospodinom?
V čom jeho prospech skrz vás inom?
Kde krvi jeho krupaje,
sĺz, potu s vašimi sa poja?
Kde zväzky, úprimnosti styky?
Snáď, kde by volil prospievať,
kde túžby matersky sa koja
a prírode nekladie hať,
pod šírym boha blankytom
čo aký chrámček neveliký
ste zbudovali jeho synom?
Kde? Recte...! Tam však rumy stoja...
Tiež vstal bol novým úsvitom
a vyšiel ako na jar dieťa
(ním pre vás je i posaváď)
na podstenu, na úslnie.
Túh ohňom mladé oči svietia,
hruď voľnej dme sa vo vlne:
Chce žiť! Chce rásť prez všetky hate,
čo veky v priek mu nakládli,
i ktoré uplietol si sám!
Už krídla počal vystierať
na podlet k ľudstva výšinám,
chcel z vyšších žriedel načierať,
myšlienky, čo mu napadli,
chcel rúchom odiať v podiv sveta...
A vy...? Snáď chvatom pomáhate,
by perute vzduch ovládli?
Vy spravujúci na člne...?
Nu, pravda, viac ho nepriahate;
lež ďalej nestačí vám sily!
Sám zostal, jak to poľné kvieťa,
sám — osiralé, bledé dieťa,
čo skoro k zášti zamĺka;
zaznali ste ho úplne,
odriekli sa ho, odstrčili...
i nie div, že sa potĺka,
že klesá, padá v zradnej chvíli.
Váš príklad tiež nie ku osohu.
Jak vrávoráte, vidí vás;
jak mriete, vidí zas a zas —
ach, vidí, nemilo však bohu.
Ba zazriete-li krásu panny
a neviest rumeň cudný, ranný,
hniezd lastovičích blahý jas:
i vtedy, áno, vidí vás,
jak podrážate jemu nohu.

Nie, nezáleží na ľude
vám onakvejším menom, rodom.
O jeho čiernom osude
ak povravíte mimochodom,
nuž najviac v posmech sa to stáva;
vy znáte ho len pohaniť:
vám jeho zúbožená hlava
je cieľom jakby vtipných chvíľ,
je kýsi večný nezmysel
ten celý jeho biedny byt —
hoc ešte hučí kárna vrava,
ňouž veľduch raz už zahrozil:
„Nehaňte, zlobci, sprava-zľava!“
— Lež ani to by neželel,
nie; to už jeho naladenie,
ten jeho mysle zvláštny svit,
čo nemôž’ nikdy zatajiť —
On odpúšťa vám pohanenie,
preminie vďačne v každej chvíli,
čo kedy od vás podstúpil;
nepýta v pomoc slamku malú;
a ešte by vás obľúbil,
ba tlieskal by vám za to chválu:
len keby ste ho nehatili
už aspoň v púti, ňouž chcel ísť
hneď, ako ste ho odstrčili!
Ó, on má srdce, plné túhy
po krásnych ducha záletoch!
Má myseľ sedmobarvej dúhy,
má nevystihlej hĺbky cit;
sprievodčí do duše mu list
už v žití matky dobrý boh
sám vlastnoručne uložil;
má pevnej vôle osteň tuhý...
Z tých nesnádz všakých, ktoré kruhy
ho železnými otočili,
keď voľno sa mu napružiť,
jak skoro by sa vymanil,
vymanil z vlastnej svojej sily!
I vlastné osnoval by deje —
a obliekol sa v blahobyt.
Priam prestali by hanobiť;
ba peli by mu epopeje;
i nebol by viac povržený...
Niet plesne, hnitia na koreni,
a ruže kvetú na doline...
Jak...? Čo...?

Ba — pustne, mizne, hynie
napospol všetko! Nebadať
navôkol nikde, že by obrat —
Jak bolo včera, tak je dnes.
Deň v zorách sa už odsúdil;
a budúcnosť? — Nech ide žobrať!
Ach, prevrat, vývrat, závrat, obrat...
Lež, haló! — Kam som zablúdil?
Klbečko — kde ho pohľadať?
Kdes’ musel som ho upustiť,
kdes’ v húšti abo na čistine —
I schlpila sa piesne niť —
vlnením dlhých skr a prez
a osýpajúc rozmotala
od jedle k jedli, k bralu z brala
a z grúňov až po nebokryt...
Vec neslýchaná jak-ťa živ...
No nečudo i žiaden div!
Veď naraz počujem vám les,
počujem v horovitej diali —
var’ šumieť, ako inokedy,
keď každou vetvou vánok sedí
a v ihličine preberá
jak v strunách čarotajných husieľ?
I horkýž’-horký, nie vera!
Ja čul vám — ťažký jeho kles!
I stŕpnul som a dumať musel.
Či čuli ste už padať les?
Videli kedy, jak sa valí,
videli pád a čuli ston!?
Ó, to zjav hrôzy neskonalý,
to v rozštiepení sviatku zvon,
to nárek, čo ti uberá
dych, v tlkot srdca prieči hate,
to dusot, ktorý ducha mätie!
To...! Ó, ty ľúte, kruté plemä,
i rúcho zvliekaš z matky-zeme!?
Posledných chceš ju zbaviť krás,
z temena dráhy kmášeš vlas?
Ó, keď tak víchor ostrý zhudie,
jak zimomravieť, krahnúť bude!
Keď leják zhučí, sšuští dážď:
jak márne hľadať bude plášť,
svoj plášť, plášť tkatý v brde-čude;
i slnko keď o Jáne vzplanie:
nebude jedlicovej dlane...
A s vtačou čo si počne jarom,
kam umiesti ju osiralú?
Čo zrobí s božím rosy darom?
Či ponúkne ním mŕtvu skalu?
Pramene vyschnú: tie jej oči,
ret zmĺkne spevný, zvetšie hruď;
zornička inej do úboči
sa presťahuje, na peruť
zaberúc všetky noci skvosty,
nejeden slávy diadém,
i posteľ z bielych svitu hmlí,
v nejž, ach, tak sladunko sa sníva —
Perlové, hľa, už zberá mosty,
skiaď v posvit rudé liala víno;
nie; v kút ten spustlý, zholený
ni hviezdka sa viac nepodíva...
— Čo stváraš, hohó! ledačino?
— zavolám — ustaň, prestaň hneď,
ni ívera viac, lebo keď —
Či nevieš, jak ti vzácnou hora?
Či nedáva ti v lete chlad,
nezvykla v zime zahrievať,
nevanie zdravím na ta zhora?
Čos’ prišiel rozľútený sem?
A tvoja roľa, keď sa dovie,
v čas žížne ozaj čo ti povie,
žes’ horských mračien strhal lem...?
Však ďaleko sú od ľútosti.
Nadarmo vzdychá, tesklí zem:
tnú, rúbu ďalej bez milosti;
hluk horou duní — počujem...
I duma zajala ma ťažká,
akýsi pocit bolestný,
stiaď to ten odchyl vo piesni;
z tej hory, čo tam strmohlav
sa rúti: žitia nášho stav
čo obraz vzlietnul v barvách dneška,
i rozvinul sa široko
a popred obzor rozkrídlený,
rán tisíc kresliec v rozjatrení,
mi stanul duše pred oko.
Do tých, hľa, strastí do divadla
duch vhrúžil sa mi strápený
a celá bôľna vnikla hruď;
v tej dume čiernych videní
mi nitka spevu poupadla.
Vraj kôrovec, vraj lykožrút —
vraj prales — Známe sú tie heslá,
pod nimiž v zlomkrk hreší sa!
Nejedna hora-mladica
už posaváď im v obeť klesla;
nejedna klesla — stratou vesla,
tam mladá, hybká sťaby panna,
hja, lykožrúta na nej hana...
Hach, nestačia viac hony, dvory:
v tom zmysel — hajde tedy v hory!
Na hory rediká sa plen,
tam zajedá sa, ryje, borí,
až prehryzie sa — po hrebeň,
kde už len vetchá, lysá skala;
hor’ skala, dolu bútly peň
a vprostred biedy priehlbeň —
by loď sa naskrz stroskotala.
Tie holé rebrá bŕd a brala,
ich vrásky, rany, kyptenie,
kostruby vôkol Kykymory:
to prápor, ale čiernej zory;
to stĺpy, z ktorých deň po deň
ďaleko čítať odsúdenie!
To známka v pravde neskonalá:
že svet ten v hrobný vchádza tieň,
je chorý, chorý, veľmi chorý...

No ďalekí sú od ľútosti.
Nadarmo vzdychá, tesklí zem;
tnú, kácu ďalej lesa skvosty,
pád horou duní — počujem.
Ozónom vše to zhúkne, sšviští —
Jak keby klesal jeden národ
v poslednom vzdore na bojišti,
ach, národ — slávnych činov zárod...
Ozvenou stukne to a skvíli,
kde aký úval, aká sluj,
ozvenou rujnou v častej chvíli,
za každým výskom: „Uvaruj — !“

Od západu vbok vrchu zruty,
do vznešeného úplazu
jak ramena by jeho — ľúty
tam vkúsnul plen stých tešlíc zuby
a toporcami úrazu:
i kosí jakby steblá slamy
v žni krutej čarokrásny les.
Tam zrúknul lačný anjel zhuby!
Tam poobjate vrcholcami
sa v sklonku jedľa k smreku druží,
kým svojeť vôkol dumá, smúti
tam... kde ten mráčkov ľahký stih,
tam, krahulcov kde splašených
sa hajno úzkostlive krúži.
Ó, vrch, jak zmrzačený budeš! Šutý...

Ta Michal podišiel i dnes,
súc službou k tomu povolaný,
by pri rúbanke dozeral.
Ináčej šlo by skrz a prez —
Tá chasa kupcom prenajatá,
keď si tak hrvoľ preleje,
až k vzteklosti sa vyhreje:
na čierťaž paromaže dbá tá,
na linaj, jak ju panský úrad
bol dľa turnusu vymeral;
ach, tá je majster v pretínaní,
tá nedbala by všetko zbúrať,
tej nepostačí celý les,
to hlvač, krutač — nech boh bráni!
A faktor? Tiež len uchvátiť,
kde čo sa dá, nu v lese, v lese —
les bez žaloby všetko znesie.
On však to nemôž’ dopustiť,
on, hájnik, nemôž’ nijak, nijak;
vie, komu patrí i ten kyjak,
ten šúľok márny, mochu chvit;
zná, službou svojou komu dluží,
čo by i nebol sprisahaný.
A preto bedlí aj a chráni
les svoj, jak oka svojho zrak;
les za ním, on za lesom túži —
Tak sliedi ním sťa vlkodlak,
sťa v poviestke tí lesní muži;
je všadebol. Vraz v každej stráni
ho zazrieš. Teraz hen sa šerí,
šutruje v Paratovie laz,
na otčenáš len — tuť je zas,
jak srnec práši do Kýčery;
lež — čert to slýchal! ako kopov
už trieli zas hor’ Líšťou kopou;
nebodaj pytliak, drvokaz —
i nad tým ako sokol krúži.
Oj, jeho oku neujde
nič — pozná všetky kúty, spady;
priam vyčenichá stopu zrady
už z diale ako ostrovid,
a stihol-li ju polapiť:
viac iste škúliť nebude,
tak haluzou ju vyprevadí.
Na lesné kváry, výstupky
zvlášť prísny je, bez milosrdia.
Záškodník ešte sa len plúži
čo háďa tajmo v zápač brda,
by prezrel staré podlupky:
a tuliti on, už ho má!
„Hej, švagre, čo tu pašmeš, há!?“
tak pristúpil mu takoj stvrda —
„Chceš voňačku var’ z borôvčia,
chceš rázštep? Môj háj hneď ti slúži!“
Mladého chvatnul odronca
a na skúšku vzal bez konca,
len tak mu parila sa käčka.
Daromná rvačka, povytáčka,
nič naplat sľuby, žebroty —
vraj gribky hľadá, tanečnice,
vraj pelech našiel veverice —
„A sekera, há, načo ti,
i povraz, čos’ pod kožuch schoval,
há!? —“ tak zas hájnik k ponauke:
vtom zvirgal v chlapskej jeho ruke.
No zariekol sa, oľutoval
raz navždy svoje lakoty.
A koľkých už tak vyobcoval
z hôr panských šmahom v prajnú chvíľu,
že obchodia ho dnes na míľu,
bohujúc pritom cifrovane
a preklínajúc hlaveň, dlane,
a zatínajúc hrozbou päste:
že veď i inde sochor rastie —
tiež nepreskočil za prielaz,
i príde zvíjač raz do paste,
hoj, príde, hrivko, na psa mráz —
Ó, koľkých premlel, vykopcoval!
V úrade lesnom pisár híka:
čo práce toho od hájnika!
— S rubačmi tiež má denne pôtky.
Tu naopak strom podtínajú,
že k stojacemu kväcne háju,
kde potom skorý vývrat, lom;
alebo veľké vatria ohne
a opáľajú živý strom,
a všaké iné pášu zlotky.
Náš Michal nenie zas tak krotký;
i skoro ho to zmrzí, pohne.
Tak včera sa bol nahneval
na jedného, až krv v ňom zvrela,
Dosť čankal ho a varoval;
však frfotal len, frfotal
a bunčal pod nos ani čmela.
Napomínali ho i kamaráti,
i faktor: „Jano, daj pokoj!“
„Čo?“ zreval. „Hrmen bohovatý!
Var’ ľakám sa ho? Tuť ho ľaď:
odkundes, panská šušomäť —
poď, sto striel! — nech ti natriem hnáty!“ —
a hrozbou zvŕtal topor svoj.
Tu Michal sškrípal, i jak strela
sa vrhnul naň, z rúk vykrútil
mu topor a v lese zarútil
(má sa ho onen nahľadať!),
v opasok chytil odbojníka,
podrmal ním jak povesnom,
vtom skrtúšil ho do kozlíka,
tak pľaštil o hrčavý strom,
o jedľu, ktorá práve klesla —
„Lež, čerte! — Jaba, ridajže sa,
priam rušaj svojho do remesla!
Len malý cvik za odkundesa;
ja naučím ťa —“ hlas mu zmieral.
Ten stenal a sa ťažko zbieral;
opasku stúžil remienky
a bez slovíčka, spomienky
sa pratal kutať toporec.
Ostatní zhíkli na tú vec;
to obor — pomysleli — ameň,
ten zmárni ho! — hľa, kosa v kameň.
Lež žiaden nepohnul sa preds’,
jak stĺpy meravo tam stáli,
niektorý dlubnul očistom,
akoby ďalej kliesnil strom,
však tvárka — zdúpnel každý z nich;
až keď už došlo na koniec,
a čo viac, z krížov bolestných
ten tam sa prebral na útechu
a odkuľhal, nos držiac v dlani,
i oni vydýchli si k smiechu:
„Hej, Miško, ale ste mu dali!
Ten iste vás viac nepohaní —“
S tým pípky znovu pozapiekali,
popľuli ruky mozoľné
a zase rúbu nezdolne.
I onen zbitec došiel spiatky
do práce. „Na drholci jatky,
hej, Jano, ako sa ti snilo?“
tak tí, tí iné k nemu riekli.
Len Michal nedbal na vtipky;
ba zdá sa, že mu neni milo.
Nebodaj sa mu uľútilo
človeka, ktorý preň sa súži —
Súd hnevných zrak má často krátky.
„Ty, Jano“, zvolal, „poď len sem:
vidz, treba ti to robiť zmätky? —
Ak nechceš zapiecť, nakrešem:
na, dohánu ber do pípky.“
— Má srdce! — lež aj verne slúži,
bdie, bedlí horský na okres.

K rubačom tedy šiel i dnes.
Dážď šústal v noci neslýchaný
sťa z vreca, víchor veliký
vyl vôkol ani zbitý pes;
jak v ohni stáli hôrne strany,
smrek každý fakľou rozjaganý;
hrom bez ustania rachotí —
i iste zmelkli chodníky
a prte neschodnými budú
(čuj, riava koľký strojí kvíl,
a v lese jak tam rýpu, hudú!):
lež čo tam po tom? Nevídali!
Viac horších prežil on už chvíľ!
Tmou blúdil — v polnoc? Ačidali! —
Riek valných brodil cez krútňavy;
i v chumeľ sa bol zatáral;
blesk boží tiež raz zapáral
bol ponadeň, jak čupel v smreči;
a iné koľké nehody
ho potkali, kým paholčil!
Tu do vojny ho boli vzali,
a vojak, známe dôvody,
vždy druhom býval nebezpeči.
Ó, koľme sa tam plahočil!
Stráž, cviky, dlhé pochody —
Ba jeden raz i do výpravy
to došlo, k válečnému prieku —
Hnal vraha divom na úteku —
I čo mu? — Tu je pevný, zdravý!
Tak úzkostlivé zvracal reči
Hankine, vstanúc na svitaní,
kým ešte oblak honil vraný
blesk krídel svojich šibotom
a nebo vrelo hrmotom,
nemajúc znáčku po zorách.
Čo po tom? Bisťu, nevídali!
To zbehne, to sa stratí, vzdiali —
to prejde grúňmi, páč len, páč!
Dážď ranný, inu, ženský plač,
to anjelikov v tlesku dlánky —
odvŕkal na úpenie Hanky.
Tá triasla sa sťa osika:
veď to, hľa, bola na horách
búr prvá, hrozná, veliká,
čo tejto noci prežila,
búr lomcujúca sveta články...
No oňho sa len súžila,
len preňho strach ju preniká:
jaj, aj tak i deň s burácaním —
To neprenesie! Pôjde za ním,
hej, za ním, čo by za chotár až —
„A vidíš, Hanka, veď ty zváraš,
a keď ty zváraš: búrka tam;
nech jak chcú v noci hromy bijú:
deň musí zjasnieť na ľaliu!
Či nie? Či mrcha ženu mám?
To by mi treba, to bych rád!“ —
Tak začal sa s ňou nakárať.
Mlčala. Veko zvárky zdvihla.
Tu obadal sa, že už čas.
(Hrom medzitým sa vzdialil zas,
oblaky vidomočí redli,
svit predieral sa ač i zbľadlý.)
I ledva merindu dať stihla
do kapsy — onej po otcu —
by na celý deň v dostač mal:
tak súril, náhlil, burcoval.
„Čuj, lastovičky štebocú!
Ej, ženo, ženo! Ty si vina,
vidz, ako si ma pribavila —“
a chvatom schytil pušku z klina.
Však kým mu kapsu prevesila,
s pozorom, ktorý slzou hral,
preds’ opätne ho zaprosila:
by nebol vraj tak náramný,
by šianal sa, bo zdravie, zdravie —
To nerád počul i sa zopäl:
„Hja, pravda, to ti vždycky v hlave.
Ja len tak poroznášať dni
mám, pán môj mne je služobný,
ja pánom jeho — však tak, duško?“ —
a horký úsmev zhral mu ústy.
„Muž, vidím, slovka nepripustí“,
vetila trpko v odpoveď
i vzdychla pritom — lebo veď
reč ženy ihneď ožeh, opal;
jej starostlivosť strach je pustý.
„Už zabudols’, jak schodil Muško,
tiež hájnik? Sám si zavčerom
rozprával, jak ho zdrúzgal strom —
ach, Miško, Miško —“ „Čo? — Ten slopal!
Ten šudil — i šiel za čertom!“
Vtom zobral sa, až trochu clivý
súc tieto lásky na poryvy,
výstrahy úzkostlivé, ľúbe;
no prv, než mihol pitvorom,
späť predsa hodil pozorom
do kuchynky, späť zrakom milým
za strážcom svojím za spanilým:
i ešte z dvorca opodiaľ
jej „Dobre sa maj!“ privolal,
stojacej žiarnom pri kozube...

Tak zostala zas doma sama.
To však neraz sa už stalo.
Jej postať žitia dobre známa —
a ženám pospolitým, nízkym
nemožno, by sa zunovalo.
Tým každá chvíľka hosťom blízkym,
tu práce jest, čo hodina;
vrtielka každá gazdiná,
vše z noci urve, keď dňa málo.
Kút každý na ňu volá, vrčí:
Čo nepríde? Kde v sitne trčí?
V sopúchu sliepka kotkodáče,
v kolíske decko frnká, plače;
zo stajne hlási sa zas teľa,
v chlieviku burci-turci, kvik,
tu kŕdeľ gagotavých husí;
na pôjde kocúr kurča dusí —
a iných hlasov veľa, veľa,
hneď žalostivé, hneď zas divé;
a ona predsa nesšedivie,
len bzuká pritom ani včela...
Že richtár? Že vraj boženík?
Ba! — krem gazdinej tu ver’ nik
sa nevyzná, nie, prisámboh,
a čo by s hlavou ani stoh,
tu richtárčiť môž’ iba ona!
Jak šarkan, tak sa rúti, krúti:
vraz všetky zvítajú ju kúty,
je samý vrzg a hurt a myk;
hneď dúcha, lepí pirohy,
tu kŕmi zas tie mátohy;
vtom papek schytí napochytre,
pôjdový umkne na rebrík
a kocúrovi frňúz vytrie;
až všetko ticho, mier a vôňa.
Hej, také kúzla ona koná!
Ver’ neuverí nejeden...

I vskutku vyjasnil sa deň.
Mal Michal pravdu. Jak je rada
mu Hanka! Ľahko sa to háda,
kde srdce samo predpovie;
bo srdce ľúbe všetko vie
a duša láskou všetko badá.
I nezvárala tedy márne,
nie. Slnko ako oko švárne
sa nesie šírym blankytom,
i ručaj nie viac v kalnom šere.
Sponáhľala sa. S úchytom
teruží háby ku riave,
kde v búrnej hučí krútňave;
a sukienku keď poupiala,
na skalný pokraj vody stala,
piest zjagal sa, i perie, perie...

Hučí potok, hučí dolu dolinami —
rada ho počúvam, je môj dobrý známy.

Čo hučíš, potoku? — Vodu mám hlbokú. —
Hĺbka trci-frci; hlbšia láska v srdci.

Čo to hudieš zase? — Ligocem sa v kráse. —
Nemáš sa čím chlúbiť; nemá ťa kto ľúbiť.

Čo, už tratíš vôľu? — Musím dolu, dolu —
Moja myseľ biela dávno uletela...

Tu „ťapy-tľapy“ súria, spešia —
Čo oprala, i splákla hneď
i žmykla jak by ľalíj kvet,
a plôtkom záhradočky vešia.
Van figliar letnicou sa šúľa,
len očul šuchot, musel prísť,
a slnko opleckom sa gúľa;
i javor chcel by priletieť,
tak mihá-šprihá jeho list,
že nemôž’, jedlice sa tešia...
K jej nôžkam hajno vĺn sa derie
pretekom blýska ako hviezdy let,
kol perál frsk — i perie, perie...

Hučí potok, hučí tu v smrečí, tam v bučí;
zo skaly na kameň, priepasti do ramien.

Keď som šaty prala, tu on chváce-chyce:
nemáš svokry, nemáš, ani len zolvice.

Nemám, ale nedám... Netrať mi, navráť mi
čepiec krumpovaný, ručník maľovaný!

Ak mi nenavrátiš, uvidíš, čo stratíš!
Ja kosičku tenkú, ty však — slobodienku.

Príde ktosi, príde: nebude ti smiechot;
sekerienku vezme, pozatína priechod.

Priechod pozatína, pokáre zlosyna;
dve-tri jedle zrazí, tak ťa zareťazí.

Navalí kamenia, aby ťa zahatil...
— Zľakol sa, skrútil sa, čo uchvátil, vrátil.

I jak tak perie v nárazu
(deň hodne je už pokročilý)
a potok hučí v strminách:
tu znenazdania, odrazu,
na bujných, skočných koninách
dva jazdci z hôr sa vyronili
za ciestkou, ktorá zdola vedie,
tak strmo, jak by kamsi v plach.
Čo vyhupol sa prvý, vprede:
jun ešte, jará chlapina
s počerným fúzkom, okom tmavým
a s líkom trochu pobledavým —
no v sedle pravý hrdina,
tak hybký ani trstina,
jak rytiera zjav strojný, čilý.
Má šumný myslivecký šat
s výložky ani čečina,
klobúčkom tetrovcove kosy,
kde sponky sťaby trpyt rosy;
čabraka skvostná činovať,
z bôt slnko mihotave kuká —
Sťa žúžoľ čierna paripa,
hej, dobre zná ver’, koho nosí;
šantuje, hrivu rozsýpa,
jaknáhle uzdou trhne ruka.
Sťa víchor švihla z hlbín háju,
plam z nozdier sála, nohy hrajú,
i zatáča sa v čarný kruh,
tancujúc jakby na turnaju.
„Pst, Havran —“ jazdec zašvastal
a komoň strmo pozastal,
potrasúc hviezdnou hlavou. Druh,
čo za jazdcom tým tichšie klusal,
je, badať, sluhom toho tam,
napodiv skvelý, vyšnôrený;
na hlave kolpak, zlatý prám
s chocholom, čo sa riasne kýva;
mentieka priliehave splýva
mu k purpurovej nohavici;
vypuklou hruďou prevesený
zas pás sa skvie, ním taršolka
si sem-tam lengá, povoľká,
a čačky iné... Jak by husár
si hovie pyšno vo strmeni,
pravicou v bielej rukavici,
kým do perí si hrdo kúsal,
fúz zakrucujúc poznovu;
istotne zdal sa sebe sám.
On nesie zbroj, snáď ku lovu,
kôň jeho plavák, kydá peny —
„He, Janči! — Kde sme? Hľaď...“ tu pýtal
sa panic — Artuš Villáni,
a jemným sšmihal bičíkom,
že Havran hneď zas lelky chytal,
rval pažiť podkov dotykom.
„Pst! — Janči, planý si mi vodca“
— znel ďalej oslov trhaný,
tlumený predných návykom —
„ba planý! V lese tolikom
som posaváď nič nezočil,
ni ušiaka len, sapperlot!
Ach, to tu špatne sa mi vedie.
Ó, Švýcar lesy! Diany
kráľovskej božský chorovod! —
Nu — kde sme...? Tys’ mi nádej skytal!“
Ten, bodnuv koňa, priskočil
a zhačkal, cúvnul jakby v gliede:
„Les, prosím, milosťpána otca
vždy ešte, pane, ešte vždy!
Ten vrch tam, ten, hľa, od polnocia
(a prstom poukázal naň),
ten hranicou len; nekaždý
má toľko lesín ako pán,
jak osvietený — ajajaj!
čo toho vôkol!“ — „Netáraj“,
odsekol panic. „Hľadám zvere!“ —
a zimničný bol jeho hlas.
Tu sluha znovu na dotaz,
na ktorý nedal odpovede,
bo pán mu skočil do reči:
„Musíme vyšej, milosťpane!
Hej, vyšej k totej poľani,
kde oné skaly visia šedé,
tam srncov kŕdle rozmotané —
tam skorej budú v bezpečí;
tu dolu, jak by zamknul dvere:
zlá hájnič, pane, oplani
(tak zalíškal sa v súry čas),
zlá hájnič, hniloba a kvas,
tu dolu sedľač pašu žerie...“
„Kto hájnikom tu?“ — „Bedák, pane,
aj mamľas, kýsi Mišo Čajka.
Istotne doma mädlí dlane,
pod pecou háji panské stráne,
darebák! — Hohó! kto tu doma?“
a pouskočil na preddomia.
„Ha! na potoku jeho lajka“,
zavýsknul, „pláče strap a niť!
Ja rád bych stiaď ju podroniť...!
Ak rozkážete, priam sa stane...
Tým zvlášte doomrzel pána
(cieľ mala drsná jeho hana,
za čosi chcel sa vypomstiť);
ten okríkol ho: „Sluho, čit!“
a hnevným zmŕskal po ňom okom,
vraníka bodnúc opäť v skok.
I skrotnul prísny na porok,
fúz zvesil, a skärujúc bokom
— nebodaj, bál sa štipu hada,
zrel hrozivý tam biča kmit —
odklusal víťaz do pozadia.

Snáď čula pokrik i na riave,
snáď s praním bola hotová —
dosť na tom: Hanka vtedy práve
sa objavila na briežku
a v tvári celá ružová
(však pracovala ukonave),
dlaň pritknúc k čelu za striešku,
sa k domku brala... Vzozrela.
Juj! Kto to? — skoro skríkla v núdzi:
dva jazdci, vojak, páni cudzí!
Jak? Sen to? Dobre videla...?
Ach...! Z ruky už tam pošla vaňa,
pažiťou voda sšumela.
Skryť chcela sa, kam? Útul zháňa;
lež nikde kríčka naporúdzi.
Snáď v záhradke sa učupiť,
za plôtkom istá pre ňu schrana,
či v rieke rybkou potopiť —
no skalou k zemi primrela,
hej, skalou — márny duše nuk!
Tak aspoň sukňu odopäť,
švik — skoro! ach, veď po kolená —
Tí budú chcieť ju potupiť —
Však sto by musela mať rúk,
nie dve, tie klesli — biedna žena!
Len kde sa vzal strach ledaký,
kde pri nej takmer do umdlenia?
I prečo...? Však má viery svit,
je čistá, vie sa prežehnať...!
— Haj, mnohé neľzä pochopiť,
kýs’ duše mimovoľný chvat...
Pán Artuš, vidiac rozpaky
jej, usmial sa a kľučkou hravou
sa prihnal: Havran zmiatal trávou,
ušima strihal, točil zor.
„I vidíš, Janči, jak si strašný“,
— žartovný začal rozhovor,
„včuľ aleže hneď tešiť začni,
ti povedám; i rušaj skôr! —
Hop!“ — tu mu v pamäť kýsi kmit —
„Mlč! — Ty si medveď, vlčí tvor;
ty hájnič iba pohaniť...
Vbok! — Ale odvráť pozor lačný,
ti povedám, kým vhodná chvíľa...“
(I odcúval na pokyn včasný;
no zrak ver’ nešiel zacloniť...)
Vtom Hanka preds’ sa zrepetila,
ľak stihla cele podmaniť;
i vlasy ponarovnať stihla,
ihlicu, čo sa z kyčky vyhla —
no dlela len, sťa horská víla,
keď škriatkov sieť ju otočila.
Nemohla vyhnúť nikam viac —
aj smiali by sa, že sa bojí,
že zdivela, i preto stojí.
Sklopila zraky, zahoriac;
čo pivonka sa sčervenala.
Hneď zásteročky chytla lem,
hneď zas ho v polet popustila...

Tu Artuš, ešte doskočiac
blíž v čarnom hraní na komoni,
keď zazrel, jak sa pýri, kloní:
„Á, zora“, splesal, „kvietok brala!
Nuž tys’ sa bola naľakala;
mňa azdaj? Či ťa urečiem?
Na horách bývať, a sa báť:
jak čudno, smiešno! — Poď len sem,
ja vedel bych ti ducha dať!
Viem, hosťov málo v horskej tôni —
niet ani s kým sa zhovárať;
jak hlúpo sem sa zatvárať,
jak škoda ťa tu v divej hore!
— Pst, Havran! — Neboj! Nech ťa zriem:
hľaď predsa šumným okom hore!
— Jak? Chaha! Ešte ustráchaná?
Tak trnúť mieniš až do rána?
Neverím — ó, ja rozumiem!
To fígle; znáš sa pretvárať —
Tie ruže vedia byť i zvädlé,
až sparno začne umárať,
a rúčky súce na objem,
však, švárna moja? — Rozumiem!“
S tým ku nej ponahnul sa v sedle;
štrng ostrôh pritom zavíril,
kôň strhol sa, späl, uzdu zbrotil,
no potľapkal ho, stlumil, skrotil.
A zas jak démon do jej bytu
sa vpil, úst žmýkal okraje
a hlboko sa zapýril,
a jak by hltal spore, spore —
vtom pozachvel sa v dravca chvitu,
pousmial, výsknul: „Ona je!“
U Hanky srdnosť pobadať.
Hruď dme sa ako malé more,
až ťažko sa jej ovládať.
I s dotazom jak: čo len chce —
čo hájnickým tu dvorom hľadá?
nač tieto reči blúznivé?
ten smiechot, sipot jak by hada?
čo nejde, kadiaľ zabočil?
čo sliedi? čiže na nej hana? —
tak spytujúcim, divným zorom
ho spešne, trpko zmerala,
a vyhybujúc v okruh dvorom,
nevrlá, v dom sa zabrala.
Lež vtom jej priechod zaskočil,
i schachotal sa pritom znova.
„Jak?“ skríkol, „ty hôr zdurná sova!
He, Janči!“ — Širák potočil;
pot zotrel, bolo na úpeku —
„Späť! Zostaň“, kynul, „neni saňa!
Ó, iné ja už stihol zdolať...
Čo, pre mňa nemáš ani slova?
Si srna adaj na úteku?
Ba, láry-fáry — neujdeš...“
Tu strhala sa, pľaskla v dlane,
osrdla ani zlobný jež.
„Čo chcete“, vrkla, „pánku milý?
Ste veru horší od úreku!
Ja že ste cestu poblúdili...
Tajdite, keďže známa vám.
Sedliačke nie na zabávanie;
ustúpte, ach, čo práce mám!
Hľa, šaty sa mi povalili —
tajdite, ak nie... budem volať!“
„Ech“, stočil znova koňom k prieku,
„len vidz ju! Tedy predsa mluva?
A badám, sa i hnevať vieš.
Nu, pekne, ale hlúpa schrana:
les kriky tvoje nepočúva!
Nepôjdeš: šteboc-nešteboc!
Máš prácu... Chceš mňa na pomoc?
Hneď skočím, pôjdem, kde len chceš —
ó, vďačne, vďačne do mrkania,
i ďalej, ľúba — celú noc!“
„Ach“, stŕpla, „pekne ďakujem;
ach, vaše ruky ľutujem.
Var’ háby zberať?... Božechráň!
I pusťte — Vám niet konca-kraja;
tentam je veru lepší pán,
netrúdi, pletky nevystrája...“
Komoňa reznul bičíkom —
„Hoj, nie tak! — Kto tu hájnikom?
Rec, nevesta si, a či panna?“
Videla, že sa márne zlostí,
i hútala: keď zodpovie
mu všetko, jak len krotko vie,
že potom tým skôr sa ho sprostí.
„Tu býva, prosím pekne pána“,
tak riekla, „keďže vedieť chcete:
nu, hájnik Čajka, môj to muž.
I choďte — domov príde v chvíli;
ver’ lepšie, keď tu nebudete.“
„Čo“, stiahol brvy, „ty už žena...?“
I pošinul sa do strmeňa
a dumal. „Ach, no — vás to mýli?“
prevrkla v duši zradostená,
bo bláhala si: pôjde už.
„Už ženou... dlho?“ „Hen od jari!“
Tu zahľadel sa do jej tvári
a opäť zašiel k mysle radám;
kôň jastril, hrabčil nešeredno.
„Nuž ženou“, hmkal, „a tak mladá? —
I rada muža?“ — „Veru hádam!“
Zas hútal; ale krátka rada,
prehodil skoro: „Všetko jedno! —
Ó, driečne...! A jak sa vám darí?
Ste spokojní, i v pohodlí...?
Či máte dostač vôkol seba...?
Niet medzi vami nezhody,
vždy ešte ste sa dohodli?“
Zľakla sa slov tých lahody;
no dotvrdila pritom v duši:
hľa, on je predsa nie tak zlý;
i odvetila, jak sa sluší,
úprimne, milo, prívetive:
„Ďakujem, že tak milostive —
chváľ-bohu, máme, čo nám treba,
a iné — žena odmodlí...“
„Bo vedz“, vtom skočil jej do reči,
jak koho páli záujem,
„ja vstave som i pomáhať,
akže by v niečom nedostatky —
i odpomôžem milerád...“
To duši jej sa zjavne prieči;
vykríkla: „Môj ty bože sladký!
Ach, pane, vy ste jeden z ľudí...
Nie, nie, my máme zdravé údy —
za všetko navždy ďakujem;
ach, choďte, iných v potrebe...’
„Už zas...? Ni nedáš kvapku vody?
Mám smädom zhynúť pri tebe!?“ —
Jak srnka uskočila vbok
a stínom mykla hore schody.
Vyniesla kvetný krčiažťok
už plný rezkej spod Sihľavy
(tam prameň len tak blboce;
prez zimu nikdy nezamŕza,
i odvracia vraj nemoce,
jak povesť o tom zdávna vraví),
vyniesla, a jak zbehla dol’
(nejedna frskla z neho slza),
i takoj podala ho pánu.
Pil-nepil; možno, iba zrok,
snáď, aby tým si vymohol
na čase, strvať ešte kus tam —
no toľko stojí: džbánok vzal
a hneď i podniesol si k ústam,
i pil, či aspoň piť sa zdal,
zrak medzitým svoj uprúc na ňu,
len na ňu stĺpkom, zmeravele,
Vlas vánkom zihral v jeho čele;
líc avšak nehybnou je pleť,
fúz síce tienky po nej stelie,
no že by sa hli, nevidieť;
ni známky tam o polykaniu...
Kým pil, či aspoň piť sa zdal,
Čajková trpezlive stála;
poblízku drobný králičok:
tým bielou nôžkou zhybovala.
Zrak k jazdcu ni raz nepozdvihla.
Nač? Iste hroznú žížeň má,
nie div, tak v lete na úpeku,
a kto zná, koľký prehnal bok
hôr — i nech si tam pochutná,
jak ľudia istia, bez úreku.
Len keď už drahná doba švihla,
a predsa nenavracal džbán,
jej vrtlo v hlave v galamuty,
i pomyslela: „Smiešny pán!
Či chlípať mieni celý rok?
Chce, bych tu daromnikovala —
ach, pliaga, už až do poroby!“
Veď nevidela, nebadala:
či pije a či čo tam robí,
so zrakom dlela sklopeným —
A on pil-nepil medzitým;
nu, v mysli iné drážil chuti.
„Ďakujem!“ zvolal konečne,
„ďakujem, žes’ ma občerstvila!
Tvoj džbánok skoro so mnou zlipol,
snáď vnady si doň nadrobila —“
i podával ho všetečne.
Jak čiahla, vtom ju v líce štipol —
„Ba vnady,“ dodal, „prisámboh!“
Ucúvla chvatom, s hrôzou: „Och!
To nejde,“ hlesla, „ja mám muža!“
a zlobným mrskla pozorom.
„A predsa ešte ako ruža!“
on zjasal k tomu odporom
a zachechtal sa, bodnul koňa,
i hupnul priečky — Tu v krik ona,
že len tak okolite znelo:
„Mne pokoj dajte sväto-sväte!
Ja nie som žiadna pobehlica;
mňa netknite sa — lebo ver’,
až muž môj príde navečer,
ten...! Vy sa tomu vysmievate?
No, počkajte si, aký hrom —“
a vzteklila sa ani ľvica.
I Jančiho to domrzelo;
keď nevoľno mu pristúpiť,
nuž aspoň zmrmlal: „Jašterica!“
Pán Artuš smial sa tomu len,
smial chutne, časom pomnul čelo,
pokrútil fúzkom počerným,
udidlom spružil nádherným —
a mľasknul; inu, znateľ žien...
Nemohol by ju potupiť;
ba jaksi ho to dráži, teší —
kým ona zúri, hrozí, hreší —
„Nu, pôjdeme,“ vetil napokon,
„už pôjdem, neboj, nemaj strach;
lež jedno je, čo mýli, mätie
ma... (jeho hlas sa tupo znížil
a z pŕs sa vydral sťaby ston)
ty hneváš sa! I ťažko mi,
i bude, keď mi na um zíde;
a ja ti predsa neublížil,
nie! — Prečo teda hnev tvoj...?“ „Ach,
vy iste o to málo dbáte,
ba pranič...“ riekla ticho, kľudne;
reč jeho znela jej tak čudne,
tak trpko; čosi v svedomí
ju bodlo, vari oželela —
Veď stála jak by ku ostyde,
čo počať, ani nevedela;
prst darmo na rtoch pobyt hľadal,
i kvietka pošiel rozvitok —
Pán Artuš zvláštny pôžitok
mal pritom, šťastný skoro zbadal:
jak žihol pal ju výčitok,
v kých nesnádzach sa zanáša,
jak vzchopila sa, zmiatla celá;
i zvolal: „Ako? — Hneváš sa
vždy ešte...?“ Sladla jeho reč.
„Ach“, vzdychla, „čo mi z toho príde?
Nie...! Len už choďte čím skôr preč.“
„Ha!“ splesal, zháčiac komoňa,
čo opäť skoknul v nepokoji,
v cval ďalší chtivý, hotový;
„s tým tedy vec sa pokoná,
priatelia zostaneme svoji!
Lež, drahá, kde znak na zmierenie?
V čom dôkaz, ktorý stvrdí hneď...?
Bo slovo, nahliadneš, je vetrík,
vzdych: priam ho chvíľka uloví;
šum: potok tentam hneď ho zhltí...
V záhradke tvojej mnohý kvet;
čo myslíš?“ — „Ejha, číry nechtík
to tam...“ „Tvoj nechtík ružový!?“
„Nie, pánku, kvet to mrzký, žltý...!“
„Hoc — no dáš z neho na znamenie,
že pominul huky-fuky?
Dáš? A hneď odberiem sa stiaď...“
„Ó, môžete si natrhať!
Ďaleko naše kostoly...“
„Hja, ale ja chcem z tvojej ruky!
Čo?“ — „Dobre, nech vám po vôli —
lež potom choďte v božom mene!
Pôjdete?“ — „Áno, iste už...“
Šla. Krátke mrklo okamženie;
zvrzali po dva razy vrátka —
i prišla v náhlivosti späť,
a zlatý kvietok podáva.
„Ďakujem, žes’ tak láskavá“,
privetil vľúdne, berúc kvet;
a strkal si ho do kabátka.
Kým strkal, dodal: „A tvoj muž
kde predsa blúdi, v ktorej stráni? —
Je dobrý hájnik, ako čujem,
i strelec: takých rád, hľa, mám...“
„Ja sama neviem, kde je tam.
Kdes’ ďaleko vraj pri stínaní —
Ach, mnoho ustáva sa ver’;
lež darmo žehrem, zabraňujem...“
„I ak ho predsa postretám,
čo odkážeš mu? Poviem rád.“
Riecť chcela, zajakla sa ale —
veď nikdy pán tak láskavý:
na všetko vie sa dozvedať,
i o jej stojí pozdravy!
Má? Nemá...? Že však čakal stále,
nuž rozhodla sa dorieknuť:
„Keď chcete... nono, nastokrát
ho pozdravujem, pozdravujem!
Tak mnoho ustáva sa ver’,
ach, mnoho na svojej má hlave:
tí druhí ani palcom hnúť —
I to mu tedy odkazujem:
nech šanuje sa, dbá o zdravie;
nech, povedzte mu, sem a tam
nehoní, ako — ako zver,
hoc naskrz neprimeriavam —
A nezmeškajte podotknúť:
by prišiel ešte podvečer!“
Pán Artuš vyčul usmievave.
S tým kývnul: „Dobre, stane sa!“
Kôň zaržal, trysknul dupotave.
Privolal ešte: „Zdravá buď!“
a oba vtrhli do lesa
vtom oba jazdci jakby víchor...

Keď cvalot paríp trocha stíchol
pod zrázom v temných smrečinách,
tu Artuš, jak by povydýchol,
sa prebral z dosavádnych dúm,
prehodil mimovoľne: „Bah!
Čo po tom...? Hatí nepoznám! —
Veď predsa šukal som a hľadal,
odkedy zočil som ju tam:
a teraz by som ledač zadal?
Bah!“ mľasknul. „Život vína šum...
Hé, Janči,“ kríkol, „čuješ! Kde si?
Mne práve prišlo na rozum:
že tuhľa predsa jesto zver!
Nie?“ — „Áno, pane, jesto ver’!“
„Čo alpské, apenínske lesy!?
To maľba-šaľba, cudzí dym!
Tu rozkoš honby, sladkosť jadra!“
„Uverím, pane, uverím!“
„Mlč! hlupák — nevolám viac: kde si? —
Ó, nôžka, rúčka, líčko, ňadrá...!“
„No chválaž’ bohu za slobodu!“
Tak vzdychla Hanka v totej chvíli,
keď jazdci v les sa zatratili,
že po nich ani znamenia.
Krčiažok zdvihla z podstenia,
i takoj povyliala vodu
do kvapky z neho pažiti
po dvornej: nech sa ocíti,
vraj, keďže ju tak podlávili.
Lež jak sa škubla zdesená!
Sťa hada — tak sa razom zľakla,
s výkrikom odskočila vbok:
drn, kade sšumel vody tok,
peniažky žltnul pokrytý...
„Hach, čo to!?“ ledvaž’ povyjakla.
„I čo to zase znamená!?
Čo s tým chce hosť ten ledajaký?“
meravo vyvalila zraky —
„Nač? Komu on to všetko platí?
Jej? — Lež zač taká odmena?
Žart niaky a či podchytok?“ —
Sto úzkostí sa na ňu valí!
Sto skalísk k hlave sa jej chýli
a hrozí zmyslov zdrtením!
Dúfala, že sa azdaj vráti
a nájde, čo tak ľahko tratí,
i vezme spiatky v úžitok;
no darmo hľadí na úvaly,
tie skoro v stín ho zahrabali —
on pošiel! — Beda! Čože s tým
si počne, s oným, ledačím,
čo? Kto jej rady dodá v chvíli? —
Sťa v búri už-už mrúca fakľa:
tak stojí, v duši plná múk,
necítiac zalomených rúk,
sĺz, sinú čo tvár zarosili...
„Ach,“ šepla, ľavý tisnúc bok,
„ach, Matko božia, ty daj sily...!“
A vskutku: blesnul rozsudok.
„Hoj, pánku,“ výskla, „chyba, chyba!
Ja hájničkou som iba, iba,
no (srdne ronila sa v hruď),
no zle ste predsa natrafili,
zle veru, roztomilý zmok!
Čajkova žena neni ryba —
Oj, hanba... avšak boh vás súď!“
I neradno bár zla sa tknúť,
bár práca nado všetky ťažká,
preds’ premohla sa, zohla, kľakla,
a čoho sa tak prvej ľakla,
už zbiera, zmetá — do krčiažka.
Keď pozbierala, ešte sepla,
utrela ruky, ak by čar —
S tým beží, beží ku ručaju,
i skaliská kde vyčnievajú,
kde neprestajný prúdov var,
tam do kotliny všetko trepla.
Vzdor hluku riavy bolo čuť:
„Tu, diable, máš svoj všetek dar!“ —
S tým búrka prešla. Skoro vera!
Už v práci je zas, šaty zberá...

K večeru na prah vysadla.
Pravicou podoprúc si briadku,
do broniaceho hľadí šera:
až celá v mysliach zapadla
v akomsi duše neporiadku.
Var’ smúti — za čím? Za krčahom,
či zlatým jeho za obsahom...?

Mrak čierno snul sa vôkol stromov;
i hviezdka žmurkla na sklepení —
keď Michal navrátil sa domov.
Bol ale hodne unavený.
Nečudo: predsa nejeden
laz prešiel, prťami to práca —
a pri rubačoch celý deň;
nu, človek sa ver’ utrmáca.
Tým sladší potom nočný sen;
ten všetky trudy povypláca;
sme sťaby znovunarodení...
Len vnišiel do pitvorca dnu,
z kuchynky oviala ho vôňa;
ženuška chystá večeru,
pravdaže: vie, čo treba, ona,
keď muž sa vráti pozde z hôr!
Vykukla, počujúc ho skladať —
„Len toľko,“ riekla, „že som hľadať
ťa nepošla... čo nejdeš skôr?
Ba ty bys’ tam i ponocoval,
hej, ponocoval, tak to badať —“
a žiarny zdvihla obličaj,
pooprúc k dvier sa obrubisku.
Keď ale ani netúrnul,
len usadil sa na schodisku
u pôjda, jak to obyčaj
mal, večeru kým pripravila,
a širák k tylu posunul —
nemohla preniesť, že tak čuší:
„Jak viedlo sa ti?“ doložila.
„Nu — dobre,“ ceknul, odfukoval
a čelo stieral rukávom.
„Nuž — a ty si sa vybázlila?
Hľa, vidíš, aký krásny deň —
ba úpek, sťa by čelom koval;
ver’ horel ešte i ten moch,
nestačil ani hory tieň,
kdekoľvek ako na pecisku —
No, nepovedal pravdu som...?“
„A videl si dvoch na koňoch?“
skočila do reči mu hrave.
I pozrel na ňu vyzvedave:
„Hej, videl — stáli nad stavom.
Nuž...?“ Vtom však uhla do kuchyne,
bo skypelo čos’ na ohnisku.
On vytiahol sa, ako sluší —
vstal, zabočil zrovna do izby,
kde kahanček už svietkal sine.
Po večeri, keď brala riad
— on práve kládol do pípky,
i pripálil, by tlelo všadeľ —
zas začala sa spytovať:
„A nevieš, kto tí dvaja boli...?“
Hlas jej znel v kejsi vo svevoli,
až nemilo sa týkal uší —
No Michal sťa by neslúchal;
len trnul sebou, skúril... Šla;
bo že mu nejde na vtipky,
i že sa zmŕštil, zazrela.
Len pukal, časom odkašlal,
žval čútor a — do svetla hľadel...

VIII.

Čas beží ako horský prúd:
tak bystro, svižko, neustále.
Udalosť kde-tu, jak na skale
by trknul, zdá sa podržať
chod jeho, silu zvrátiť vĺn,
vo výmoľ ho jať, do krútňavy —
lež verte mi: to liché zdanie!
On zastihne sa vyhatať!
Jaknáhle vôlička mu vzplanie,
vyborí žalár, stuhy pút
— či z železa sú a či z ruží —
tak prerve, márnu čo by niť;
prekážok spupné zborí stavy:
len ďaky nech mu bleskne spln,
nech zajagá sa jeho svit,
za prívalom nech pozatúži!
A keď sa vzmuží, keď sa vzpruží,
až praskla pramizerná hať:
tu potom len tým prudší spád —
do milión spräží vlny združí
a v Niagary prejde rut;
tým plnšími sa zájme splavy,
nik — nič ho viacej nepristaví...
Sám zvíri víry: do krútňavy
pochytí vetchý ľudstva čln,
i započne ním pometať,
vzdor kriku pyšných jeho synov
pometať jakby so škrupinou,
že nezbýva len zahynúť,
dnu pohrobiť sa v bezdno vĺn...
No nieto správy, nieto hlavy,
niet viery, ktorá uspeje
včas ulapiť sa spásy vesla;
niet hviezdy, ponadšenia hesla;
niet ani kotvy nádeje:
tá dávno v temnej hĺbke leží,
a veslo sem-tam zlomeninou —
Duch-génij zostal na pobreží;
nepozvali ho, nepozvali,
ba odstrčili, zapredali:
sám pláva smutný cestou inou...
I kolocú sa v smrti stínu
tí, čo vraj hlbeň premerali,
čo nazreli sa v mora dno
a nad ním hviezdy počítali:
tí slávni, vzatí na slovo,
tí — stĺpy, viechy, rázsochy —
čo delili ho v epochy,
čo zmysleli si, že nie on,
lež oni tlčú jemu v zvon,
by, jak chcú, rušal na hodinu,
im zrkadlom bol, trúbou chvály,
im ozvenu pel v diaľnej diali,
tí... ajhľa, v prvej chvíľke hynú!

Že zastavil sa, že by stál
jak zvírený tok...? Iba zdanie!
On šumí ďalej, mizne v diaľ:
čas... Darmo staviaš, kľúčiš dlane,
by nepredral sa, netrhal:
neodoláš mu, šumné dieťa,
nie, hoc i slzou oči svietia.
Nezadrží ho zeleň stráne,
nie kvetín vôkol milota,
nie jelšín vábne kyvotanie,
ni slávik, čo v nich klokotá;
nie, čo mu sadli na brežinu,
rôj bucliat smavých, rusovlasých,
nie šanty trávnic milohlasých —
Naopak: ony za ním letia,
jak obrazy ho zamieňal,
jak fátle keby vánok bral;
hej, samy letia za ním, hynú...
Hja: deti ktoré odchoval.
Čas plynie ako horský tok,
či zrána, či pod klenbou noci,
či v búri a či v lahody
tíšine, vovždy tenže krok,
krok istý, pádny, neomylný.
Nepočuješ ho, preds’ je silný
v šľapajach svojich jakby hrom,
nečuješ, a on kýva v moci
preds’ žitia tvojho príkrovom;
no krídel jeho rozvitok,
jak z vrchu zletel budúcnosti
čo večne bludný, ťažný vták,
ten zazrieť môžeš, áno, áno!
To on, čo v zárne tvoje ráno
vše večera stín zahodí,
stín švihotavých perutí,
kým nesie v kraj sa minulosti;
on, čo už schválil úst ti vravu,
než vyznel si ju ako-tak,
čo šat ti rusá, belie hlavu;
on, čo sa tukom tvojím hostí,
čo fakľu v prach ti privodí;
on v slnca dennom hasnutí,
on, ktorým spŕcha poľný mak...!
Nedávno kvitli jahody,
nedávno tamhor’ v rúbanisku,
že plávalo jak v mlieka brode,
sihôtka ledalen na pnisku.
Tu náhle zrudlo bielo more,
krvavý zrudlo na šarlát:
lež že tak zrudlo rýchlo, skore,
ni nad tým niet čo banovať.
(Ó, to je krásne, tešné more!)
Skôr príčinou je banovania,
skôr horko-ťažko ľutovať,
ba áno, to tá zrejmá rana:
že dnes už i po tomto brode
je veta, stiekol starý laz,
po kvete — v tom i po úrode!
No nič to: tu zas malín čas!
Za tými dôjdu černice,
za černicami čučoriedky
a s korčubkami na ne dietky —
čím diaľ, tým tmavší na líce
plam, v líce dobrej zeme-matky...
Ó, čas vie, hľa, i barvám velieť!
S tým obráti sa kolo spiatky:
tvár zeme zas sa začne belieť,
až skvitne, zapáli sa zas
a — sčernie, zhasne...

Malín čas!
Tu malín čarné usmievanie!
Čo nohy mladé — všetko na ne!
Po rúbanisku zvonný jas,
ples, žvavot, zmaľované dlane
i duše, duše rajskou rosou...
To bŕdne, hmýri nôžkou bosou
z kra do kra; ten sa takoj schýli
sám svojou ťarchou. Bože milý,
čo na ňom tvojho požehnania!
Sirôtka ani nevie v chvíli,
kam prvej čiahnuť do zbierania.
Veď celé kystky, kytky, kôpky
po snetiach visia, páč len, páč!
I predstihujú chvatom, zobky
sa ako vrabacia by vtač...
A jak sa hrnky, dbanky plnia,
medzitým sa i ňadrá zvlnia
k jagavej, vonnej ku piesni
a k iskrennému výsknutiu,
a chorál v čarnom vinutiu
jak nebožiec sa nesie k bralu:
tam rovno v srdce bodne skalu,
že zhúka i tá cituplná.
Tak platí ľud ten čudesný:
keď berie, navzájom i dáva,
zadarmo neprijíma dar;
jak vtáča tichý za konár,
kde spočinula jeho hlava,
za zrnce, ktoré zoblo v poli,
i on vše vďakou zašveholí,
dá peniaz duše čudesný:
za malinôčku po piesni!

Maliniarky
Chór

Keď stínali horu chlapci Valihoru,
bláhali si časte: Už viac nenarastie.

Jeden zdupkal vedľa: Kopŕcaj sa, jedľa!
Druhý plecom k prieku: Ustúp z cesty, smreku!

Tretí popľul dlane: Ba ťa i s koreňom —
Štvrtý práchno pritlel: Ja hneď i plameňom —

Piaty gamby odul a zatriasol šticou:
Nože, vaľ sa, lebo fúknem — povíchricou!

Šiesty: Hohou! Hohó! Bolo to tam toho!
Na mňa hľaďte, na mňa: hneď vyleziem na pňa!

Siedmy len že rubnul, takoj sa i uhnul:
Varuj, skoku priber, privalí ťa — íver!

Ôsmeho odbili: Čo nám z teba, vdovca?
Hybaj, iď si dlubať tamok do jalovca! —

Tak rúbali horu chlapci Valihoru,
dušali sa časte, že viac nenarastie.

Horký nenarástol! — Eha, za proroci!
Na dni ju zoťali, vyhučala v noci!

Šibla ako z vody — Len, len vetrík zduje:
už sa zelenými pradenami snuje.

Čo jeden peň, to kmeň hybký, konáristý;
namiesto čečiny zúbkaté má listy;

namiesto živice krôpka tu-tam zlatá,
miesto šúľkov pekné sladké bomboľatá...

Chlapci Valihoru, proroci do misy,
veru sa vám každá dievka vysmiať musí!

Chlapci Valihoru, hneď sa practe dolu!
To je paša naša, vy si žujte smolu!




Podaj mi, vetríčku, čo visí na kríčku:
nech si ho odnesiem v červenom ručníčku.

Keď podáš, dobre máš; odmením ti službu:
budem sa vydávať, pozvem ťa za družbu.

S venčekom mladuchy budeš sa zabávať,
alebo na márach plachtičkou pohrávať...




Oj, ten pánbožko náš ver’ je samá láska:
navešel v konárky, nastýbal do kláska.

Ani rúbanisko neobišiel okom;
videl, i uzavrel v súde prevysokom:

Zasejem ho znova, požehnám chudobe,
príde hladná, príde; nechže si pozobe!

Tak súdil, tak žehnal pánbožko náš z neba...
Hopsa, nôžky! — Rúčky, naráňajte chleba!

Prvá
Malina, malina, sladká si —
Dievčina, dievčina, švárna si!
Malina, malina, podaj sa —
Dievčina, dievčina, nedaj sa!
Ihuhú!

Druhá
Oberajte, prstočky, každý nech z vás ďubká:
nakŕmim si, nakŕmim na večer holúbka!

Mesiačik sám nad lipkou, my pod lipkou spolu.
Zakaždým mu privolám: hoľúš, hoľúš, hoľú!

I roztvorí pyštíček ako púček z ruže,
a bude mi hrkútať — Verím, že neluže!

Hr-hrk, hrkút-hrkútik: hneď vzdychne, hneď riekne;
krídelkom ma pohladí, i poláska pekne.

I jak pyštek otvorí a zanôtka slovo:
zakaždým mu zobnúť dám — zrnko malinovô.

Tretia
Včera som sa nahnevala,
šuhajko, na teba,
ej, veru nahnevala!
Sľúbil si sa, a neprišiel.
Čože si to zase zmyslel?
A ja ťa čakala,
čakala, žiadala:
ej, sťa ten kúštik chleba!

Všakove som pomýšľala,
čo sa ti mohlo stať,
ej, veru rozmýšľala!
Ak si kvietok, že si zvädol;
vtáčik ak: žes’ inam sadol —
Srdce mi kálalo,
dušu mi páralo,
ej, nedalo mi zaspať!

Včera som sa nahnevala;
Dnes už mám vôličku,
ej, ňou mi hučia bralá!
Môj milý mi to odkázal:
na dni kosil, v noci viazal...
Odkázal svitajúc,
do okna kukajúc,
ej, skrze zoreničku!

Štvrtá
Daj ma, mamko, daj ma šuhajovi:
švárny je jak stromec javorový,
ako javor na dúbrave;
slniečko ho zláti.
Daj ma jemu skoro, náhlo!
Sto citov sa vo mne spriahlo,
spriahlo, ťahá nedočkave —
srdiečko mi schváli.
Daj ma, mamko, daj ma šuhajovi:
milý je jak kvietok fialkový,
fialkový v tichej noci;
mesiačik naň svieti.
Daj ma jemu skoro, náhlo!
Tisíc túh sa vo mne spriahlo,
spriahlo, berú — niet pomoci:
duša s nimi letí...

Piata
Sokolíčku, sokol,
otáčaj sa vôkol,
ako sokol poriadny.
A keď sa nakrútiš,
hlavičku pomútiš:
v náručie mi upadni.

Počul volať sokol:
začal krúžiť vôkol,
krúžil dlho — ale bôľ!
Bo keď sa nakrútil,
hlavičku pomútil:
u susedov zapadol.

Šiesta
Bodaj bych o tebe, bodaj
nikdy bola neslýchala!
Ty vraj srdce si mi podal —
a čo bolo? — Bola skala.
Bodaj! Bodaj —

Ale boh ťa bude súdiť,
vyrkne súďbu neskonalú:
pôjdeš svetom srdcia lúdiť —
no všade ti dajú skalu.
Bodaj! Bodaj —

Siedma
Sadla na pňa
a plakala:
Hoj, mati moja milá!
prečo ste ma
tak naskore,
hej, prečo opustila,
alebo ma sebou,
hej, prečo nepojala?

Predsa som vás
milovala,
hoj, milovala vrele;
stála neraz
v čiernej noci,
hej, vašej u postele:
skočila, liečila,
hej, jak ste zastenala.

Noc pomíja...
Pri tom všetkom,
hej, ste ma opustila.
„Idem i ja!“
volám, kričím,
hej, rubáš som si šila —
Ale vy: hneď vtedy
huš! umkla ste mi letkom!

Od tých čias, hľa,
v zdranom rúšku,
hej, blúdim osiralá!
Moja vôľa,
moja mladosť,
hej, celá pozvädala.
Vzniesla bych žaloby...
hej, ani mi len dúšku!

Ôsma
Chudobná som, chudobná som;
ale preto spokojná som!
Pánboh boháč! Čo mi chybí,
nahradí mi svojím časom.

Chudobná som, chudobná som;
ale preto veselá som!
Akže mi svet hluchý, prázdny:
naplním ho piesní hlasom.

Chudobná som, chudobná som;
ale pritom dosť hodná som!
Chlapci šepcú: vidz len, zora!
otočená dúhy pásom...

Chudobná som, chudobná som;
ale zato statočná som!
Príde vĺčik, schytím tĺčik:
„Čo tu sliediš v dvore našom...!?“

Chór
Sloboda, sloboda, lepšia ako voda,
ako kus chlebíčka... Drž si ju, dievčička!

Vodou smäd zahasíš, chlebom sa zasýtiš:
ale že žiješ len v slobode zacítiš.

V slobode: že žiješ, že máš i kus duše —
I lieceš sťa strela vyronená z kuše...




„...Na maliny slnko svieti,
a na dievča krása letí...“

— Tak platí ľud ten čudesný:
za malinôčku po piesni!

— Slniečko stúpa k poludniu;
les, sparnom privalený všetok,
tak tupo dýše, ani v snu.
Kol hájnikovej chalupy
je ticho. (Hanka iste dnu
sa kutí, všako zamestnáva;
on čajsi podnes dozerá,
jak kácu tam tie otupy.)
Dus leta vzduchom preberá
nad dvorom: ním, hľa, zmiera kvietok
na záhradke a páchne paliň
až k omdletiu. Tíš. Len čo riava
sa ruve s nepriateľstvom skalín;
len riavy klokotavý brod
čo očuť, jak sa zadrháva —
Vtom dvoje u nej skrslo dietok:
dva chlapci v lichých plátenkách,
bez odiedzky i bez bruslíčkov
a boso, celkom dľa zvyčaju,
jak keď sa v sadoch potĺkajú,
jak brúsili by zdĺž uličkou
tamdolu v svojich dedinách.
Krušinou, býlím poza plot
(kde leda trčala im hlava,
či vlastne vetché klobúčky)
sa predrali a tuliti!
prikvitli ani kozľatá,
vedúc sa svorne za rúčky;
obadva stupky, bucľatá,
jak buček tuhý, valitý.
Na prskách obom celembajú
v šij oviazané hrnčíčky;
no ústka, dlánky, tváričky
tiež nepochybne znamenajú,
že z rúbaniska idú — z malín.
Zastali na pokraji toku.
Tu menší skubnul sa a pruh
sfafrených rtíkov nakrivil,
opakom pravej trel si v oku —
tak frnkal. Starší nedbal však,
pojastril, šupnul do úskalín,
tam potíšku sa nachýlil
a do priehlbne uprel zrak.
„Hí“, hlesnul, „koliký tu pstruh!“
a prstom kýval na onoho:
„Sem, hybaj skoro, hybaj sem —“
No mladší nerobil si z toho
nič, nepocítil záujem,
len durdil sa diaľ. Starší tedy
zodvihol kameň potíšku
a po rybe ho v hlbeň metnul;
fľusk vody hodne povylietnul:
však žugan už stál stranou vtedy
na briežku, včas sa uchýlil,
tam pohvízdkal si, poskakoval.
„Poď, Janko“, riekol o chvíľku
a potúžil si kosílku,
„poď, braček, lebo ver’ už čas —
mať bude kliať i zbije nás;
pôjdeme tamok dolu hájmi.
Poď, ukážem ti vevericu,
i vyberiem pipíšku“,
a pojímal ho za pravicu.
Ten strhal sa však, studlikoval,
rozmazal sĺz tok po líci
a k hrnku brata čiahnul: „Daj mi!
daj —“ zvrieskal. Ondrej dlaňou skryl —
„Čo?“ — nemálo sa podivil,
„tys’ zo svojho už vyjel všetky?
I čo dáš malej Anici,
há? Kotloš —“ za ním pokročil,
„chceš, aby som ťa vybuchnoval —
chceš?“ Janík ale vykäroval
sťa guľka, vrešťal: „Ale no —
Daj!“ — „Plno!“ drážili sa dietky.
S tým Ondrej, tľapnúc v koleno
sa, skoknul a poď dvorom v nohy
„Hej, Janko,“ zvýskal, „lap ho, lap!
Ak lapíš, dobre: zobni si;
ak nie, nuž noštek utri si;
hop, capku! tu máš papu, pap —“
a mrkev strúhal s uškieraním.
Tu Janíček sa nahneval:
dlánočky popľul, ani chlap,
a drobčiac kotuľkal sa za ním.
I dochytil ho za pôdlohy
chvist, zdrmal, aby skoro dal —
No vlastne Ondrej pozastal
bol zvedavosťou na preddomí.
„Vidz, Janko,“ hneď i zažvastal,
„hľa, u nás nie sú také domy!
Okolo samé zúbky, kvety —
A v štíte, vidíš, koľké rohy!?
Náš baran veru takých nemá,
nie —“, sliediac zrakmi švitoril.
„A nepokole, Ondro, nie ma?“
tak Janko k nemu bázlive,
zavzdychnúc pritom v podive.
„Nie, neboj,“ Ondrej srdne vetil,
„ten baran nie viac nažive.“
Hľadeli oba dohora,
zrak sivý len tak sa im svietil;
skrúcali hlávky bez prívety,
mladší i ústka otvoril...

Jak dívali sa na parohy:
hájnička vyšla z pitvora.
„— Kde vzali ste sa tuná, deti?“
zhíkala, zazrúc maličkých.
Ondrejko, smelý vezmúc dych,
odvetil: „Veru na malinách
sme boli, v sekanisku, hej —“
„A sami!?“ tleskla rukami,
„vy fagani!?“ — Tak do hôr! í, ach!
no, nikdy! To ty, kolodej —“
Ondrejko ihneď pobadal
a v odpoveď sa sponáhľal:
„Nie, boli sme tam s dievkami —“
„A skadiaľ ste, há?“ — „Z Osady.“
„I čí tam?“ — „Jana Závady.“
„Že Závadovi? Poznám ho.
A pustili vás? Ó, vy, ó! —
Ty tam, čo plačeš?“ ku menšiemu
sa privrávala, zíduc dolu.
„Kto zrobil ti čo? Dám ja temu —
no, čo ti? Povedz, synak môj“,
s tým pohladila ho po čielku.
Janíček tisknul pery spolu
a fikal, hrniec jak by svoj
kryl, natiahol sa za košieľku
a k bratu ťupkal pomykom.
„Rec, čo ti?“ pýtala sa znova,
„však totkou som vám obidvom —
no?“ Pod nos skuknul: „Jel by som —“,
a očká zdvihnul zarosené.
„Totčička,“ Ondrej začal vtom,
„Janíka nik ver’ nevychová,
ten vždy vám myslí na jedenie!
Čo v rúbanisku nazbieral,
hneď cestou všetko vyzobal,
i odo mňa drel neustále.
Nie, neverte mu ani slova —
Ty priezočivec, koťuho!“
a ukradomky šturknul ho.
Ten, bôček hmatnúc, zvrešťal: „Ale!“
Tu ona: „Biť sa nevoľno!
No, počkaj, dám ja tebe, starý,
žes’ Janíčka tak poranil.
Nuž a ty vypľul by si vari,
keď dostal by si pod zuby,
há? Ľaľaď, aký ti to tam —
Poď, Janíčko, pre teba mám —
Tvoj brat ver’ sa mi neľúbi,
i zato, že ťa pohanil.“
Ondrejko, zostávajúc sám,
pomiatol sa a zagánil,
i ledva plaču ubránil —
„No,“ obzrela sa v smiechu spiatky,
„i ty tam už len rušaj hore:
ste oba deti jednej matky.“
A Ondrej rušal skokmo, spore.
Na prah sa posadili oba,
jak na koníka, čakali
a strežali, jak deti robia —
Nedlho bola na komore:
priniesla placka rúči oval,
už nalomený na dvoje;
bol maslom hrubo ponatretý
i žiaril ponad hlavy detí,
jak luzný kvietok povoje.
Jak podávala kavaly:
o závod vystrčili rúčky,
Janíček medzitým i mľasol,
a zrakmi k chvatu zaiskrili —
„Jankovi“, riekla, „aby rástol,
hej, väčší — na, môj synček milý!
Ty, Ondrej — tys’ mu ubližoval.
No, jedzte, žujte potichučky...“
I svitli obom štyri svety,
nastala doba pamlsiek
v kabáčkoch maslom natretých;
i rumádzgali opretek,
hej, hlvom — inu, zdravé deti!
Janíček najprv oči pásol
po onom, čím ho uderili
do dlánky; však len okamih
to trvalo, kým chuť si tvoril:
hneď i on vhrýzol sa a moril
ho riadkom zúbkov myšacích
a nôžkami vtom šimrikoval.
„Či dobrý je —?“ tu pýtala sa
ho Hanka, hľadiac s úľubkou
naň, jabká zdutej tváričky
jak hrajú mu, kým žve a zjedá.
Ten, polizkujúc prstičky,
„mh,“ kývnul, rusých kostrúbkov
(širáčky boli odložili)
otrasúc podrost roztomilý,
a nôžkou durknul do suseda,
že Ondrej odmykol sa zasa...
No, živô striebro, neposeda.

Keď pojedla si hladná chasa,
hájnička sama upomla
ich: „No, už choďte poľahučky,
hej, — bojsa by vás išli hľadať!
Za ciestkou prosto dodola
si iďte — Ondrej, povoli,
vieš, by i Janko mohol vládať.
I nebavte sa nikde tam;
a obíďte si Vlčiu jamu...“
Hneď siahli k zemi po klobúčky
a vstali. Janka vycmukala.
„ — A ďakujeme pekne vám,“
tak Ondrej. „Vďačne... Do školy
že chodíš, badať. Len sa uč,“
mu privetila, hladiac vlas,
„uč, môj syn, môž’ byť z teba kňaz...“
Šli. Pohľadom ich sprevádzala,
na prste pokrucujúc kľúč;
ba ešte im i privolala:
„A pozdravte mi vašu mamu!“
Lež sotva vnikli do lesa:
späť prifrňali zdurne, v kriku,
jak poplašené kurčatá
a než sa stihla dopýtať,
čo im? — čo ozaj deje sa?
chvoj pokryla ich riasnatá,
zmizeli vpravo vo smrečníku.
Zdúpnela: aké čudesá? —
Strmela; čula klopýtať...
I chvíľka len: a na vraníku
tu jazdec letkom trysknul z hory!
Nebodaj ten, čo oňahdy:
čo urobil jej na priekory —
ver’ on! — Veď ho tá uriadi! —
Vraníka bodnul, posmelil,
a zjastriac vôkol pohľady,
keď postihol ju predo dvermi,
k chalupe hravo zamieril,
pousmial sa a Hanke kýval
širáčkom zdobným k prívetu
(snáď bláhal si už, už sa míval...)
Neznala v prvom okamihu,
čo počať, jak sa zachovať,
tak zmiatlo ju to — veľmi, veľmi!
No skoro dopadla však stihu:
jej oňahdajší duše príval
vtom začal hruďou lomcovať,
hnev zvrel... I rúkla v odvetu:
„Čo chcete, pane, zase tu,
čo...? Znovek k zlosti, na trápenia...?
Ak s mužom mojím máte dač:
to príďte, keď on doma bude;
alebo cváľte si ta za ním...“
„I hroma! Nač mi tvoj muž, nač? —
Ja s tebou mám len do činenia,
prisámboh, s tebou!“ odpovedal
jej zhurta, medzi chachotaním
a s oka čarným pomihaním,
i z komoňa sa takoj zvedal,
„Jak? So mnou!?“ prekríkla ho žena.
„Vy chcete mne byť ku ostude,
ma vovliecť mrzkých do rečí,
na posmech priviesť, zohaviť,
o lásku muža pripraviť...?
Ó, to sa veru nesvedčí:
to mrzko... každý súdiť bude!
I iďte stadiaľ razom preč,
rušajte, kade drží cesta,
kým šianam ešte vašu hlavu!
Ja nie som... (Zlyhala jej reč
pomyslom, čo sa mu o nej zdá?)
Oňahdy, pán vy ledáky,
ste potratili šupáky:
tak naschvál — panská vôlička...
Sú v truhle, sa var’ nazdávate?
Hej (pokázala vtom na riavu),
tam v kadlubine vaše zlaté —
ta iďte si a vylapajte!
Ja Čajkuľa len, hájnička —
no mne s tým svätý pokoj dajte!“
Sršiacim fľochla pozorom,
poskubla zlobne na zástere;
s tým nazad šmykla otvorom
a treskom pripľaštila dvere.

Pán Artuš nehýbal však z miesta.
Jaknáhle z koňa zosadol,
za udidlo ho popadol
a nutkal žvastom ku javoru.
Ten zdráhal sa a zatínal,
i fučal, lesklú ježiac hrivu,
tu vzpial sa, tu zas trhnul k sporu
a žhavo točil zrakov pár.
No pán je jazdec ku podivu!
Len pokázal bič, kýsi čar —
a Havran stŕpol, pohýnal —
Však Artuš, i kým harce stváral
kôň, neraz stihnul kuknúť na ňu:
jak jazýček jej žihal, páral,
jak zmietala sa do úmoru;
vzdor, s Havranom že zápasil,
obzrel sa, vysmial zášť i hanu
a vášňou nedočkave zháral,
i neraz sa jej ohlásil:
ej, akú má reč rezkú, sporú!
Ej, aleže je za nevesta!
Vtom javorový o konár
pripínal koňa za kantár.
Keď pripútal, hneď k nej sa berie —
Však na druhý než stupil schod,
už treskom pozapadli dvere.
Na nenadály na hrmot
kôň zduril sa a stranou vrhol:
rozorval kantár, konár strhol
a uskočil. — Pán zžvastal však
a zašmihotal ku dôvere:
i zastal ani búre mrak,
len hlavou šumne pohadzoval.
Pán Artuš zatým hore schody
sa bral čo neúprosný hosť,
nedbajúc liché na nehody;
mal pôtok on už takých dosť,
a predsa zavše zvíťazil:
vrch obdržala dychtivosť,
bár anjelských sĺz tiekli brody,
bár kliatby naň sa sypal plam,
i neznal často ani sám,
čo všetko boril, otravoval...
(Nu, jedným slovom: vilný drak...)
Bol lepý ani letorost;
i kým si hrdo vykračoval
čo démon, zhubnej slávy jun:
ostrôžok zhral mu vírny zun,
sťa v pokyn, že tam istý šľak —
No, aké u dvier prekvapenie
ho stihlo, jak sa zarazil!
Chcel vnísť: a ajhľa, uzamčené
nadobro, pozde dorazil!
To urážka i potupa!
I búchal, volal, rozkazoval —
mnel vyvážiť a vyboriť...
Lež márne vzteky, úsilie;
v čas tvŕdze tvŕdz i chalupa,
ni chatrč neľzä otvoriť!
Zdnu ani šuchu, ani hláska —
Čupela kdesi zavile,
čupela — zhavranelá kráska!
— S tým vľavo uhnul ku pavlači
a ťukal, kukal do okien;
lež i dnu po nej ani slychu,
len ružová sa posteľ zračí...
Liezť, drať sa: predsa neni preň,
po takej nemôž’ po bodľači.
A kto zná, kam sa prepadla,
vo ktorú hniezda priehlbeň? —
Dlel, skúšal trápnu za hodinu.
Snáď šiky tratí, žarty strojí,
snáď... všako hútal, pomyslel;
stál, dochytiac sa zábradlia,
a dumal, v ťažkom dumal znoji —
Ver’ inú čakal na hostinu!
Až nezdarom sa domrzel
(i Havran šantil v nepokoji);
a urazenú stajac pýchu,
tvár zmraštil zhrdy návykom,
pošmihal rezko bičíkom,
a zostúpil.

Keď povysadol
na koňa, ešte poohliadol
sa k domu. Ten však ticho čnel,
jak prestál by bol nehodu.
Tíš — potoka len rujný špľachot;
nad horou prchlý chmáry let —
Hnul tedy ihneď k pochodu;
len vtom sluch zarazil mu chachot,
smiech uštipačný na dôvet.
I obrátil sa: zasinel
(smiech iste z onej tvŕdze znel),
päsť zbalil v útok, hnevom skypel;
s tým zahrozil sa, kliatbou ssipel —
a cestou zbočil búrne späť...

Kým skúška trvala tá hrozná,
kde, ako a čo Hanka — kto zná?
Jak oná panna v povesti,
snáď pod koryto tiež sa skryla,
tam dumala si o štestí: —
„Ej, ale som ho vyplatila!“
Nuž a ten chachot vyzývavý,
ten výskot ozaj nač bol, keď
vták ulietal už inam dravý...?
— Ach, ženám ťažko rozumieť —

Po všetkom zase išla k dielu.
I zdalo sa, že zosilnela. —
Jak páper schvatla vaňu bielu
u potoka, keď ponačrela,
a niesla, jakby v ruke nič —
sťa znôšku k úľu bystrá včela.
Jak cipulienka kochlatá
brúsila z kúta do kúta,
vo tvári celá vysmiata;
tu i tu si zhrkúta,
zanôti... Nu, a myseľ dobrá
je pravou rukou i u obra;
tá k práci — šťastný pohonič!

I podvečer keď povysadla
si na prah, jak to jej bol zvyk:
tiež radosťou jak keby mladla,
smev rôjil úst sa na kútik,
zrak časom k hore zaletuje —
Čistila gribky, kuriatka —
a v každom jak by pohádka,
jejž zmysel v duši rozrešuje —
Mužovi iste vyžaluje,
až príde, všetko — istotne.
Ó, ten sa zhrozí, čelo zmraští,
valašku hnevne pod schod praští
i zabohuje hrmotne!
A nech si popod nebo lieta
ten zbojec, čo mu mátal ženu:
neujde jeho postiženiu;
on vyhľadá ho, kde je koľvek,
a beda...! stratený to človek
za svoje chúťky lakotné!

Žalovať...? A či ona dieťa...?
Jej, možno, tiež by mrkotne —
Toť oňahdy jak mrzko zrel!
Snáď ešte by si namyslel —
Zná ho už, netýkané kvieťa!

Keď Michal došiel, nemálo
sa začudoval bol na dvore,
uvidiac, milom na javore
jak visel konár ulomený.
I takoj spytoval sa ženy,
čo javor jeho potkalo,
či vadil, ubližoval komu? —
Lež Hanka plecom kývla k tomu:
„Nuž, čo by?“ vrkla, „iste vietor...“
„Čo?“ Michal na to v zadivení.
„Netáraj! Už si zlyhala,
hej, potkla si sa, moja milá;
veď chvojka sa dnes nerušila,
dnes tíša...“ Jazyk sa mu plietol —
a Hanka sa mu — vysmiala.

IX POĽOVNÍCKE

Les moja ríša, grúň je môj trón:
tam samodržec postávam zhrda.
Puška mi berlou,
ohnivý drahokam zdobí ju s perlou.
Len okom mrknem: lapajov zhon,
jakby ich splašil hromový zvon,
už kutá zbojcov do brda z brda.

A zbojci radom musejú v púť,
k podnoži trónu kajní sa derú;
trnú im nôžky,
v pokore želejú, skláňajú rožky...
Ja berlu vezmem: prevádzam súd.
Mnohý že šťastne uvrzol...? Blud!
Z tých každý milosť obdržal — veru!




Ani neoriem, ani nesejem,
predsa žnem!
Môj záhon tamok zelený les:
podsypal včera, podsype dnes!
Kedy chcem:
Výplaš durí, Zahraj skolí;
zakosia divoko,
zodvihnú na oko:
ponarazia do stodoly —
Pif! paf!

Nie som roľníkom, nie nevoľníkom
od pluha.
V lete či v zime rodí môj les!
Jak bola včera, taká i dnes
zásluha:
Zahraj skolí, Morho morí;
zachytia divoko,
podnesú na oko,
a ja sádžem do komory —
Pif! paf!




Za klobúčkom tetrovec,
ej, tetrovcove kosy;
pristanú mi — milá vec!
Ej, svet ma o ne prosí!
Prútik tisinový
hodím valachovi;
ej, nech si ho tam nosí
a starie sa do oviec!

U boku mi ručnica,
ej, zlatom vybíjaná;
ona moja družica,
ej, môjho do skonania!
Kyjak javorový
hodím valachovi,
ej, nechže sa obháňa,
keď prikúri vlčica.

Nielen ty, môj valaše,
ej, kŕdeľ pasiem i ja;
zavraciam ho do paše,
ej, kde samá ľalia;
ľalij-palij biela:
jasná-riasna strela...
Jak les kol sa ovíja:
potiaľ moje salaše!

Za klobúčkom tetrovec,
ej, tetrovcove kosy!
Skadiaľ ich mám? Moja vec.
Ej, pár ich nebo nosí,
nebo, keď sa brieždi;
keď číha na hviezdy,
ej, Mliečnou cestou ktosi,
ligotavý poľovec...




Ja som lovec spod Kriváňa,
nerobte mi krivdy!
Môj zrak je lúč slnka zrána —
moja puška isto ráňa,
nechybil som nikdy,
prisám, nikdy!

Skorej zájdem do dúbravy
než vy na záhumnie.
K vám zhon husí gagotavý,
ku mne sokol kolotavý
šibne, kráčuc šumne.
Prisám, ku mne!

Trielim, miznem cez úplazy,
sťa keď tôňa beží.
Tu ti roháč povyrazí!
Ja priam durk! veň poza väzy,
postlal som mu: leží —
Prisám, leží —

Vidím noci do hlboka,
jak len deň by žiaril.
Na polome ženích toká,
ona zhudrí, túžbou skroká —
Ihneď som ich spáril!
Prisám, spáril!

Na končiari zakrepčím si,
zatočím sa v klbku...
Zhvízda kamzík: nelením si,
nad priepasť odvisnem z rímsy,
tak ho spálim v hĺbku!
Prisám, v hĺbku!

Oňahdy ďas kýsi v hory —
každý smrek ostrvou.
Rypnem — že doň? Čerta! — Zory
krídlo spadlo; Kriváň horí,
pozaliaty krvou...
Prisám, krvou!




Jedlina, jedlina, ako tá noc tmavá,
nikde hviezdy, nikde svetla,
zajala ma, pooplietla;
či napred, či nazad, v cestu sa mi stavia.

Jedlina, jedlina, ako tá noc tichá,
nikde ruchu, nikde hlásku;
na môj postup, na otázku
ledaže osŕkne, ledaže zavzdychá.

Skoro ma domrzí, i vypálim do tmy:
v jedline sa ziskrí, zjatrí;
kročím, skočím jeden-dva-tri,
a stoj! — Zase sa len okolo mňa zotmí.

Pálim tedy, pálim, tak si sviecam v cestu,
svietim, snietim zlatým kvietím,
na plamenných krídlach letím,
letím z kraja kúzel k bezpečnému miestu...

Doletel som, tu som; jedľa pri chodníku —
U tej stál som na postrehu:
prišla srnka v hravom behu,
uľakla sa, zvrtla ako na zvrtlíku.

Za ňou, strelče, za ňou...! Šiel som, jak ma viedla,
búrkou trielim po jedline,
až mi každá stopa zhynie,
jej i moja... Ale svedkom si mi, jedľa!

V podobe srdiečka režem sľub svoj tu, hľa:
neustanem, neustanem,
kým tú srnku nedostanem!
Ľúbosť strelca nezná hraníc, sveta uhla...




Jak pútnik letom znavený
do chládku, kde zas okräje,
keď rozložil sa v spočin scela,
prach striasol, znojné krupaje
povytrel z brázdic svojho čela:
čas uchýlil sa k jaseni,
V dúbravách šticou, kremeninou,
na lieštinovom tu-tam kroví
a čistín drobnej travine
už hodne badať jeho stôp
tyk žhavý s čiernou spáleninou,
jak žeravej by od podkovy,
až lístok žihom stupaje
sa celkom stúli, zavinie,
sám v sebe, takhľa, nájduc hrob;
ostatné víchor dohotoví.
Po svahoch čo deň menej zdôb:
jak keby milou za rodinou,
toť v kŕdľoch letia k bystrine,
za klenom porost svíbinový.
Len les, les vyšej smrečinový,
jak raz sa v plášť svoj odeje,
ten nemení sa, nemení,
bol, je i bude zelený:
on obraz večnej nádeje!

Však jaseň má tiež svoje krásy,
kým zbojné neprikúria vetry,
tí zodievači prírody
a zhubci, vrazi — veru má!
I nad ňou v čar sa ony splietli;
je plná kúzel, lahody.
Hľa, nebo viac sa modreje,
má krajší zrak než v dusné časy
za leta: hneď sa usmeje,
hneď opäť v túžbach zadumá,
oblačných sklopiac víček riasy.
Slniečko, nebies kráľovná,
sťa kráčalo by v plesu sieň,
rozpustí dlhé lúčo-vlasy,
že liecu ani zlatý sen
prez obzor duše obrazový,
či ako hajná slučiek, stúh,
keď z ramien umkla šuhajovi
devica v tanci laškovná.
Na stráne jak by ohne zlietli:
dvoranou plesu do kola
sneť každá svieti, plápolá;
i lístky v ruže porozkvetli.
I lístky v ruže... Po chvíli
už zazrieš ich však plávať vzduchom
čo motýľov roj spanilý;
s tak prenikavým švistom, šuchom
sa točia, sťa by nôtili;
až poľnej klesnú do studnice,
snáď aby sa tam napili,
či ten svoj zánet zhasili,
ním vodné zafarbili líce.
Alebo v chodník vrhnú sa ti,
tak vyzdobia ti zemskú púť;
ty ale súcitom si jatý,
čos’ sladko-bôľne zvlní hruď,
čos’ nedá ti, bys’ po nich stúpal:
i zastaneš a nahliadneš,
že ony vencom boli tiež,
čo kedys’ nad tebou sa húpal,
kým blúdils’ slávou rozožatý.
Ó, jaseň má tiež svoje krásy,
má! Oko zrie ich, čuje sluch.
Nejedna rozkoš zavolá:
Poď užiť slasti, slobodienky!
Poď, svetom mieru zvládol duch;
čo sváru krešú o kremienky,
nezbedných živlov ustal ruch,
hrom válok sa viac neohlási.
I ovociny hojnosť koľká!
Žiadosti požehnaný spln
tak smavo žiari z vrchola
a vábne z vetvíc kuká vĺn,
poď, natrasiem ti do podolka!
A srdce ide plné túh,
jak zmyslov tiahne ľahký čln,
to chváta s prudkým tlkotom
posledné blaha požiť kúsky;
no ináč s duše životom:
bár zory tvár sa usmieva,
bár slnko zlatí vlákno sietí,
čo pavúk z nebies povaly
vždy ešte spriada ponad svety,
van ošmieta sa o halúzky,
kol liesok poskakujú deti
a grúňom pastier zaspieva —
v nej horkosť nebodajných túh,
jej vnady už-už skonali.
Tá želie, lebo pozná časy.
Blankytom, ajhľa, prchlý pruh
a gagot clivý — divé húsky,
hej, ony duši upomienky...

Ó, jaseň má tiež svoje krásy!

Na poliach spešný práce ruch,
hrabáčok výsky, piesne vienky —
až zaorie zas všetko pluh;
na horách v dozvuk bodré hlasy
a záblesk vatry večerom,
až sukovitú strávi kladu
a zasne až po jara vzruch.

Na horách v dozvuk plesy, hlasy...
— Veď ústredného od úradu
ten rozkaz došiel zavčerom
na polesného poslom v letku
pod vlastnou panstva pečaťou
(že polesný až uľakol sa,
uvidiac listu pyšný znak,
kás’ strela — uznal mimoďak —
kás’ strela priamo od vrcholca
podistým zamierila naň,
hja, obeť snadná z úkladov...),
ten rozkaz došiel krátkoslový:
Pozajtre nabok prácu všetku!
Tak dedič budúci a pán:
pán Artuš káže. Do Zápače
a Podvršianskych úvalov
prísť hodlá k honbe na roháče.
Nech tedy všetko vo zhode
sa pristrojí, nič povytáčka —
kde aký hájnik v obvode,
nech každý tak sa prihotoví,
by neminul sa s pochvaloul

A dnes je práve poľovačka.

Deň chmúrny nastal, popolavý;
prez lesy clivý tiahne švist.
Však len že došla družina,
vyniknul z húštin šumný voj
s pokrikom: „Tu sme! — Pánboh s nami“,
na čele statný Borivoj;
mrak, snáď že zazrel lesklú zbroj
i videl: samý hrdina,
hneď rozkyvotal peruťami
a už sa od bŕd pohýna;
i bleslo svetlo myslivcovi,
by zdarne cieľal na korisť.

Pán Artuš celý lovu plán
sám osnoval, od polesného
a sluhov zvedev všetky spady.
Ni jeden netrúfal si naň
dač poznamenať opravného;
pán, možno, nerád trpí rady.
Len Čajka hájnik, ten nám známy
(tiež rozkaz mal psov zapustiť,
i mocoval sa so svorkami),
súc predsa v svojom obvode,
kde všetky dokorán mu kúty,
ten rád by sa bol poozval,
prehodil jedno-druhé slovo
jak načim útok upraviť,
zvlášť by tok honby zodvihnutý
narazil stanie na pánovo;
no vidiac, sťa hláč vo vode
že každý mlčí, ba i sám
polesný radšej v torbe kutí:
prežuval skoro, prenechal —
len nevoľou čo zmnul si líce.
Veď sfrfrú iste i tí tam:
za mudrák, eha — zanovit!
(Bo darmo: prečo, prečo nie —
snáď ráznosť svoju pre strmokú,
že nedá zviesť sa do žranice,
je verný v svojom výkone,
i nemôž’ preňho šaľbiariť —
súdruhom stal sa tŕňom v oku.)
A v nestarosti o olovo,
i pušku že si vyskúšal,
už každý strmel nahotovo;
psov rákoš skučal, čenichal.
Vtom povel: „Hajde, na stanice!“
I rozpŕchli sa o závod
(v nádeji každý lovu kráľ):
ten rígľom k Paratovie lazu,
ten v Zápače skrýš hlbokú,
ten v úžľabinu, onen k rieke,
a každý inam v chorovod,
jak ohnivá by na reťazu;
sám Artuš zastal na paseke,
svit bdelý hrdom na oku.
Len chvíľka: a roh zahlaholil
i ostrý sponáhľal sa pisk,
psí zápäť ďavkot, štek a hles,
stá ozvien v priečnych vzbudiac bralách;
no skoro zobracal i pes
kol svojho kŕdľa — skôr než valach —
na stope stuha pozaskolil:
i mykla z tajných ležavísk
zver naplašená, vystrúc nohy.
Však štváč tiež neni lenivý:
nadarmo srnec zvrátil rohy,
by kolotavom po turnaju
uvrzol chuďas v temno chvoje —
i márny poston ,žitie daruj’
a pohľad očú smútivý:
vrah jeho nezná protivy,
zmôž’ všetky, aké zbehlec zvolil.
A strelci strážnej na postati,
vydýchnuc túhou hlboko,
splesali: „Ehe, už ho majú!“
a šepkajúc si: „Sem, sem käruj —“,
napätý každý tríma kres
i číha srdne rozožatý.
Tu razom paľba, durkot zbroje,
výsk, lomoz, kúdol široko,
ohlasov neskonalé roje —
v to tiahly výkrik heslom: „Varuj !“ —
Tak honom vzali celý les.

Pán Artuš striehol tiež a dychtil,
však márne. Práve v jeho cieľ
nič povyraziť nechce z chvoje,
ni stín sa dosiaľ nepriplichtil.
Smreč nehybne len kol sa ježí
a kláty drichmú ani bravy —
I jakže by sa nemrzel
on, ináč lovec šťastia pravý,
on, čarodej, on, vodca vojny:
kde zastal, že niet diela preň,
že honby prúd, tak bujný, svieži,
len jeho hradby obišiel!?
A zasmušilý, nespokojný,
dlaň ľavej tlačiac na hlaveň
(skvost pažby v slnku len tak háral),
zapískal súrne k obratu
(polesný len čul, už sa staral,
cez húšť sa kliesniac rohatú) —
podistým tak si umyslel:
šík lovu ináč rozostaví.
Vtom streľba znova a výsk: „Leží!“
a jak by všetko v priehlbeň:
len tupý hukot temnej vravy,
netedy záštek zašlých fén — —

Dosť opieral sa šeliem vzdoru
neborák srnec, zháňal dosť
všelijaké umy, povytáčky,
jak tých tam kŕdeľ zbesilý
ho stíhať vzal sa bez únavy.
Prv, ako by len tropil hračky,
sa skrúcal, fígeľ struhnúc mnohý —
No skoro zbadal vážnosť sporu:
i na znak, že má zmužilosť,
zdupotal ako obor pravý
a poukázal na parohy.
Nič naplat, dravcom: krv a kosť...
Čo tu? Kam? — Šibnul naspäť v horu:
tam, úfal, nájde posily,
tam utají sa, vypočinie,
a jestli ni tam bezpečnosť,
je poblíž v rieke, ňou sa splaví.
Tak hútal asi, jestli hútal,
keď zvirgal v háj svoj rozmilý;
však holub mu už odhrkútal:
jednako len ho trafili,
a, žiaľboh, rovno na komoru.
Ustrel sa, krôpky po travine...
— A strelci hneď ho obskočili,
pochlubujúc sa víťazstvom,
parohy chvojou ovenčili,
na pušky zdvihli s jasotom,
a pokrikujúc od povole
(nu, strebli iste tardimole),
ho nesú dolu závozom,
zaiste niekam do mohyly?
Jačoby! Nižej na poľan,
kde salaš boli rozložili,
ta niesli ho len, krížne-krážne
sa otáčajúc úvalom,
až došli k miestu, kde už pán
dlel v rozčúlení nemalom;
tam potom ticho, celkom vážne
na pažiť slávnou korisťou
ho jemu k nohám uložili.

Pán Artuš pomiatol sa zrejme;
konečne vďakou neistou
sa uškrnul, a trknúc v šij
roháča, vrkol: „Pekné zviera.“
Tu Habáň, hájnik na Čierťaži
(rád habe, i rád hrtan vlaží,
a vtedy on je všade kyj),
už nezdržal sa, slovo prejme:
„Hej, pekný, prosím ponížene,
zver,“ riekol, „pekný, ale vera
i hodne bol už otlčený;
nech čerti ma“, a tu odpľuvnul,
„tak predchodil mi ohlúpene,
sťa skrútená by dáka lajka!
Tak“, vtom na Čajku zaškuľnul.
„Na Viechach, prosím ponížene,
bisťuže iná hostina —“
„Jak?“ Artuš na to, podráždený,
„a čo je toho príčina?
Kto hájnik tu?“ — zrel vôkol hnevne.
Polesný stŕpol, preriecť chcel;
však Michal predišiel ho pevne:
„Ja, prosím, hájnikom tu, Čajka!“
a predstúpil jak na povel.
„On,“ ohlásil sa Habáň znova
(bár zrakom mrskal nejeden
naň, svrbelo ho na jazyku;
pomyslel: počkaj, neznesníku,
dnes priložím ti pod paveň —),
„on,“ žvastal tedy uštipačne,
„pán Čajka tu, hľa, hájničí;
veď poznať to i vpravo, vľavo —
Ak smreky o tom neráčia
rozprávať svetu prezázračne,
zver sama dáva tiež najavo:
tak zvláštne ku nemu sa chová,
jak kŕmil by ju vo chlieviku,
len on nech v cieľ si zastane:
bez toho, že by koho pýtal,
ba!“ posepnul sa za brucho,
„priam sama sa mu dožičí.
To majster, ale fígle schová —
pán môže obísť nasucho —
len jemu nech sa štedre zavdá,
nech, poznám dobre hrdláča:
pán-nepán,“ skýchal, „toť je pravda!“
„Hach, ty mne laješ, ožrane!?
Ty planec, dušo satanova,
ty? —“ vriesknul Michal a už chytal
hlavište. „Ticho!“ Artuš mračne.
„Kto spálil tohto roháča?“
„Ja, prosím —“ Čajka vetil chvele,
pot vyrážal mu v zrudlom čele,
tak zlosť ho pohla ledačia.
„Ty?“ pán naň zraky uprel lačné,
„ty? — Tu máš tedy lovčie právo!“
a vysolil mu zaucho.
Stál Michal čo stĺp zmeravele.
A rákoš jak sa počal hravo,
tak znevoľnene utuchol.
No skoro rozjaril sa zase
roj lovcov. (Michal, pravda, nie:
on trpel vnútra na otrase
a k tomu hany nadanie,
to pálilo ho zvlášte, škrelo;
lež darmo: onen jeho pán,
a nech si ho i zhanobili,
v svedomí nepocítil rán,
nuž nezronené dvíhal čelo,
na postať šibúc k poľane.)
Opätne hájmi zapustili
na útok, náraz skr a prez,
napružiac k tomu všetky sily.
Sťa na bojišti zvíril des
a prívalom jak vzduchom vrelo;
i oblak časom ľahostajne
sa vzňal a sadol na útes.
Niet kúta, kam by zradotajne
sa nevplantali, vetriac plen,
niet; prieval a či priehlbeň:
im všetko jedno — urrá, smelo!
zve rozmanitý hluk a tón.
A veru šťastne pochodili.
Les roztvoril sa napokon,
rozchliapil vzdorné hradieb brány:
i z obrovskej jakby zo stajne
sa statky jeho vyrútili,
hľadajúc spásu — nájduc skon.
Ten hurhaj na to rozháraný,
jak tleskol, šum hôr miliónlistý,
ten — kto by všetko opísal!?
Nu, niet viac príčin ku závisti;
nadostač zlatých mihlo chvíľ
pred zrakom, ktorý strehotal.
Kto strelec jak tra, neschybil —
kto ťarbák, zostal trčať v brynde,
hoc v mešku vláčil deväťsíl.
Pán Artuš tiež blist takej chvíle,
hľa, schvátil (hja, bol zastal inde):
i na tróne jak svojom kráľ,
zbroj u nôh, širák s perom v tyle,
zasadnul šumnej na koristi
a spokojne ju potľapkal.

S tým lov sa slávne ukončil.
Roh zatukotal v zvúcom výsku:
a strelci, čujúc známy kvil
(nejeden po ňom zatúžil)
prťami, dielmi krížne-krážne
(pojedni už aj so svorkami,
kto psinu šťastne dolapil,
keď skrsla, jazyk plaziac z pysku),
hneď nadol skärovali z miest
a podperení tisinkami
sa zhromaždili k stanovisku.
I takoj siahli ku merinde.
Tí ohňa v skoku nakládli,
tí opäť pripravili ražne;
dva (bezpochyby ťažko niesť)
zas kotál zdvihli, na parohy
by vztýčili ho na počesť;
tí... inu, každý dlubal inde,
jak rozumel sa do úlohy.
A než sa päť ráz ohliadli
pohorským svetom kolotavo,
už v nos ich udrel vonný kúr,
na raty zaškvrčalo právo.
Zasadli tedy k hostinám
(pes sliedil, jastril okáľom)
bez ponúkania do kolesa
(pán Artuš medzi nich i sám)
a chutnali si, v pozdrav lesa
pozdvihnúc občas veleždúr,
jak popadli ho poriadkom,
či jedni druhým ukradli.
No vôľa oná dobrá, pravá
len vtedy vlastne ako zmij
na slnku zhrala do liskava,
žvast, žarty, smiechy zavládli,
keď Artuš v jarej nálade
(bár polesnému k závade,
bo tento zmŕštil sa v tom čase,
jak malo by to do pomýj —)
rozkázal v pospas celej chase
zo svojich zvláštnych bateríj.
„Hľa, to pán!“ mľaskli, okúsiac,
a zápäť lepšie, dlhšie prihli —
Ich rozmar bujnel kamdiaľ viac.
„Hore ho, chlapci!“ povýsknutím
sa zhŕkli, „tuľa! hore ho!“
a už šij nahli pod neho,
i hneď by ver’ ho boli zdvihli,
vyniesli na štít vrchola —
lež zbránil zavčas pokynutím.
„Veselo radšej, do kola!“
zval ich a prstom skreslil kľučky.
Viac nedali sa ponúkať:
čo mladší hybaj poza bučky
sa rozskákali dubasive,
jak zajac začnúc prepletať
či hupkať, jak keď žaba skacká,
,mrň, fuzko!’ ,kŕ-kŕk’ žvastnúc k tomu,
i nezabudnúc zatúkať,
či valachovej na píštelce
zahvizdnúť dolín do prielomu.
Jak kde ktorému napadlo,
tak harcuje: ten stvára macka,
až psiny zvyli úzkostlive;
ten zasa sádže kotrmelce;
ten krepčí, podstaviac si klát;
tu-tam zas v borbu za pasy,
s pokrikom: „Hrmen... nevídali!“
dva chytili sa kamasi,
len tak im povievali käčky,
zväz stavcov prašťal posunutý:
tak zvŕtali sa, rimovali —
Opravdu herské divadlo,
pánovi zvláštnej ku požive;
smial sa, až vše mu zapadlo.
A starší, v ústach zapekačky,
povaľujúc sa na klesti,
tí dodávali ešte chuti;
ten staviť sa chcel o dukát,
ten jalovicu ku protive
zas núkal, dušajúc sa: nik
vraj z tých tam nezmôž’ jeho chlapa,
to Valibuk vraj z povesti,
stonoha pestvá na všetky.
To ešte viacej do ruvačky
ich popudilo, v tuhší cvik
sa zakvačkali ani v hänec;
no márna medvedia tam tlapa,
daromný úpor zrutecký,
kde líška otvorila tanec
a pribrala sa cifrovať:
konečne preds’ len jalovica
vrch obdržala; na dukát
však mráčok sadol zahanbený,
či závisť. Víťaz-zápasník
toť drží soka o hrdúsky
(dosť kričal: eha, iba krík...)
a vaľká čo smrek povalený;
i netiekla bár súkrvica,
priam karmen zaznel lovecký.
S tým na poľovné prešli kúsky
a čudné pristrihujú žarty,
jak to už medzi nimi zvyk.
„Hop!“ — zavýsknul vtom šibal Grapa —
„hop! — hybaj v drdy na komprdy!“
a Klockom, ktorý vedľa stál
a ústa zeviac v užasnutí
tam výmyslom ich naslúchal,
jak obrtačkou zakrútil,
len toľko, že ho nezrútil,
„šak,“ tážuc sa ho, vážne zdmutý,
„šak tys’ to dneska zabil capa?“
Ten zozbieral sa jaks’ a hrdý
sa rozkročil mu oproti
(istotne myslel: vážna vec),
i v pŕs sa buchnúc opach tvrdý.
„To verím, že ja —“ zmrmlal. „Var’ ty?“
ozval sa znovek nezbedník.
„Mhm... viem už, toho od tej šuty,
čo na Vida sa okotí,
šak, Juro? — Chacha, tetrovec! —
Hop! varuj!“ skríkol ihneď zase,
a než sa Klocok obhodil
a vyhnúť stihol, už v tom čase
sa cezeň hupkom prehodil,
čapice mu v tvár schľapiac party,
i spratal sa do rozsedliny.
Smiech, až sa skoro váľali —
(Pán Artuš k ústam vzniesol ruku;
veď bolo to tam do popuku.)
No vidiac, Klocok jak sa srdí
a skrúca, kde ten posmešník:
„Ba, pravda!“ razom zvolali,
„on zabil capa... nikto iný!
A poneváč to prvý zver
(diktoval starý poľovník),
čo Klocok zmoril mužnosrdý:
staň sa mu právu po starom!“
Priam obstali ho na výber:
dva veniec splietli z borievčiny,
dva zatrúbili na slávu,
dva Klocka rúče pozdravili,
dva ale chvatli ohavu,
na mravčí kopeň uložili,
a Grapa po ňom ramárom...
Smiech, chachot znova nehorázny —
Tak šantovali. Iba Čajka,
ustlav si blízko k pahrebe,
bol tichý, mierny, zdržanlivý.
Jak práve stvárali tie divy
a Klocok držal... (hľa, tá lajka!),
usmial sa síce chutne tiež,
no zvrtel hlavou, vrknúc: „Blázni!
A Habáň? — Inu v kotrbe
on vláčil dosť, až tŕpli plecia,
mal ďasa, aký vše ho zhuckal,
i dosť sa plantal spočiatku,
kde Čajka meškal zavalený,
dym z pípky kudliac vo svet prázdny:
no (snáď že viac lial na lemeš,
alebo trímal pamiatku
a videl krížik naznačený),
včuľ darmo, k Michalovi predsa
sa neosmelil prehovoriť;
u jalovca sa hniezdil, kľuckal.
Napokon ale predsa len,
keď driemot prevliekla sa šajka,
si ducha pridal ticho zboriť,
zahundrúc: čo ten kuje hen?
„He, Mišo, vyhasla mi fajka,
skoč, dones uhlík!“ poozval sa.
„Nehliv tam ako trckoreň —“
Ten avšak leda mrdnul plecom,
ba ani sa len neobzrel.
„I, nedurdi sa,“ Habáň zas;
„či urval som ti i len palca,
ha? — Bolo to tam! na lopate —
a tu ti s vredom hneď i kvas!
Alebo voľakto si myslí,
že ja už celý povrheľ,
i prídem čajsi zajtra s vrecom?
Nu, uvidíme totú psotu,
na koho prvej príde mráz!
A potom — hanbiť sa môž’ veru! —
môj roztomilý kamaráte:
čí chlieb ješ, toho skáč i nôtu,
vieš...?“ (Artuš zakúsnul sa v peru.)
„Hej, chlapci!“ žvastal Habáň ďalej,
„mne práve skrslo čos’ na mysli,
to hlávka! zasvitla mi vraz!
Viete čo...?“ Čeľaď hádala.
„Iď, Grapo, takojúčko nalej —
tuž dneska máme Michala!
Čajkovi nášmu toť deň mena!“
„Tak je! živ...“ priskočili všetci.
„Cit, kompánia veľactená,
myšlienka u mňa povstala:
ja hoden prvý preriecť k veci!“
tak Habáň, stojac nahrbený.
„Michale, počuj — nesrď sa,“
započal, „hnevy v čerty ta daj!
Vieš predsa: slnko nezapadaj —
Hrom doňho, kto je zanovit! —
Tu vinšujem ti zo srdca:
čokoľvek žiadaš, nech sa splní,
a čo by bolo ako moc!
Tvoj život dĺž sa ani niť
cez zimu z kužľa tvojej ženy,
tej rúčej — hech, jej mužom byť!
Huj, bisťu! — Nono, neškrť sa,
radš’ vypľuj, čo ti zalíha;
čert ho vie, žes’ tak presolený! —
Však skončme: inu, dobrých vecí
maj v každom kúte dostatok,
štok vrchovatý, hrniec plný
a nevykyp ti — V ostatok:
zbroj nech ti nikdy nezlyhá,
ni, čuješ...“ „Ale, blázne, iď!“
prerval ho Michal, „nebľaboc!“
a už sa titlal do halieny.
„Ba múdre rečnil —“ tí zas všetci
v krik, Habáňovi na pomoc,
i radom slopú prípitok...

Pán Artuš bol vo vytržení...

Ďavk skvílil v brdách. Túlaví
psi prudkým honom zaskolili,
a poľovci kde salašili,
skúšajúc dúškov priestrannosti:
oproti z priečnej húšťavy
tu jeleň, desaťparožniak,
vyskočil s okom rozháraným,
a vidiac, medzi akých hostí
to vkĺzol, hybaj hore rígľom,
ozlomkrk trielil v divokosti!
Kruh strelcov skoro zrazil šľak,
v dycháčoch zmrzli ohlasy;
neznali: ako? čo s tým fígľom?
„Marš!“ zreval Artuš, „rušaj za ním!
Či oslepli ste, mamľasi!? —
Hej, Čajko! Keďže pašmeš rád
a zver ti prívetivá ovca:
tož ukáž týmtam ochlastaným,
jak treba divoč pestovať!
Chcem, aby padol — rozumieš?
A čo bys’ za ním na kraj sveta —
zlyháš-li, nie fľask potupy,
lež — skúsiš potom, ká ti veta...“
Ni nedoriekol, boli preč,
hor’ strminami do vrchovca
frňali zdivelá čo spräž.
Polesný hľadal okolky —
no vidiac, ako ho pán zmeral
pozorom zvláštnej otupy:
zobral sa voľky-nevoľky,
a fučiac (inu, hodne bol
upaslý, i toť rozmohol sa),
zdýmajúc čajsi ako jež,
do vrchu ťarbave sa štveral.
Pán Artuš ale do jalovca
zašmaril pušku odporne,
so sebou tajnú zviedol reč,
a hvizdnúc si švitorne,
skäroval vľahce lesom vdol...
Kam? — Čomu ozaj strojil lieč? —

Kol hájnikovej chalupy
je ticho; nikde žiadna vrava.
Len prievan čo vše vystúpi
z pŕs horských a v hre zvedie švist
nádvorím: teraz javora
zažlklý porozčechre list
a opäť k dverám pitvora
sa oprie, tými povrzgáva.
Len ten zvuk — no a tamto riava,
jej jesenný stesk, clivý bôľ —
ináčej pusto navôkol.
Kde Hanka? A čo asi stvára? —
Nu, kde by bola: v izbe dnu;
a jak vždy, má i robotu:
zle pokŕpala, nuž, hľa, pára,
i nemálo sa pritom zlobí.
Veď to i vskutku kási kára:
čo jedna ihla, bez ucha,
alebo prask! sa ti jej zlomí —
No, to by ešte bez pohromy:
napokon dobrú našla predsa;
lež vtom tá lósu pleťucha,
to pád, nebodaj letel drak —
jak len tra, všetko rúče zrobí,
poskladá, bedlí na všecko,
i zbodne, by sa nehlo z miesta,
tak hmyrká štepkom, kadiaľ znak,
tož oná zajačkova cesta;
došila — skúša oplecko:
rukávce boli naopak!
„Bodaj ťa, bodaj!“ stisla plecia
od divu, „veď to do poroby...
To Michal zavinil, len on!“ —
Keď ráno bral sa na pohon:
poharkali sa. Ona riekla:
„Ty, Miško, abys’ rozum mal —
vieš? Poľovačka hračka z pekla...“
„Ľaď!“ spurne on sa poozval,
až zdesila sa neborká,
„hm, kedy ja bol bez rozumu?
Ba!“ výsmešne ju premeral,
„ba pravda, chluplo mi do umu:
od teba, Dorka-sýkorka,
som zavše si ho požičal!
Šak? — Dáš mi i dnes z neho, dáš?
Daj, šupni semok do taršule,
a zmudrieme ti ja i gule;
daj, prosím — “ Pomaňkal ju v čelo.
„Iď!“ trhla sebou, „netkni sa ma!
Iď,“ v duši sa jej vpravde cnelo,
„ty iba vždy sa posmievaš,
to zato, že o teba stojím!“ —
„Hej, by ťa roháč nepoklal,“
on hlasom dodal plačlivým,
„nuž preto sa tak veľmi bojím;
a potom — cez deň zase sama,
neblázon! dvojstý naraz strach!
Ak by tak z hory dáka saňa
či černokňažník, Rarach-kraľ,
alebo lesný muž, či panna —
a chlapa doma nemáš: ach,
ach! to by bolo do zblaznenia...“
„No,“ pretrhla ho, „mlč mi s tým!
Nie dieťa som, a bárs len žena:
o seba sa ja netrápim;
ta z očú mi! choď, háj si iné!
Kam zabral si sa, skoro ruš’,
a kľap tam trebárs i do týždňa!“ —
Stál Michal, žmurkal, nosom krčil.
„Hneváš sa?“ zvolal, ale už
vtom pleskom mykla do kuchyne,
až kloptov okraj podletel,
jak sršeň, v tvári blkot ruží —
Oželel, že ju napaprčil
(toť priekami sa láska tuží);
i bol by iste ešte šiel
ju udobriť, nech zora vidná
ho neupomnie na povel
ku honbe; privolal len ,zbohom!’ —
Ledaže ušiel, Hanka tiež
sa prebrala. Ten pozdrav krátky,
snáď práve, že len ledabol,
hnev pritlačil jej celým stohom
a ľútosť z neho vymohol;
tvár pred ňou vlastnej tichej matky,
keď otec ju bol okríkol —
I karhala sa: „Ó, ty jež!
Ty dudok! Bunkotavá čmeľa!
Ty už pre pletky ľúta saň? —
Nič po nič ty už hnedky chren
bys’ trela pod nos? — Pekná láska!
Var’ vsadil ti bol ogrgeň?
Ba, neskrivil ti ani vláska! —
A ak slov tvojich nezabudne
a k túlankám by navykol:
čo potom?“ — Žasla: „Božechráň!“
a chvatla k srdcu: ťažko — trudne —
Deň celý bola omrzelá —
a trval ozaj za týždeň,
bez konca-kraja. Napoludnie,
myslela, naraz odbaví
i trochu rannej potravy;
no jak ju vniesla na almaru,
tam svieti, bŕzne poteraz:
chuť nedošla, ač slnko bludné
už hodne kväclo k hlavám hôľ.
A práca? — Horký z miesta chcela!
Či počala dač dnu či von:
nič od rúk — plno nepodaru,
sťa keby bola okľavela.
To hrúza! — Zmeravele stála;
priam však ju oko svrblo zas —
to trela, až jej celky zrudne —
I havranisko sadlo raz
jej na povlač, pred oblok práve,
a ,kŕkŕ!’ vrieska brbotave —
Juj! preletel ju ľak i mráz;
tĺk chvatla, že ho trepne doň:
tak konečne ho zažehnala —
A predsa — obrátila v hlave —
nech súdi veci, ak chce kto:
len Michal príčina, len on!
On spôsobil tú haravaru,
vzal um jej, vôľu, kľúčik zdaru —
istila, skubúc oplecko...

Navonku tíš... Až spoza riavy,
kde krovín mítor s jedlinami,
ktos’ zadruzgotal porostom
a začernal sa príkrov hlavy
(podistým sliedič za ryndzami),
však hneď zmizol: lebo vtom
pohorským svahom oproti
tu strelec vylupnul sa z hory,
muž strmý čarnej lepoty —
pán Artuš... Sťa by koho stíhal,
zobracal sem-tam palné zory;
načúval — kročil a zas číhal —
S tým obkolesiac chalupu,
keď videl, že nič na priekory,
na dvorec šupol kradmým zvykom
tak doplužil sa ku schodíkom;
a tými hybaj hurtom dnu! —
Čo a jak Hanka, keď hosť vkročil:
nevedieť (iste skamenelá,
zabudla uvítania vďak,
keď zrak jej úšker diabla zočil,
stál známy pred ňou vlkodlak
a okáľama žhavo stočil).
No pár ak bleslo okamihov
kol domku v rezkom šumení,
javora sčeriac okrasou:
už vrava zahrmela smelá,
až oblôčok sa otriasol.
Podistým výčitiek sa zdvihol
roj osí, z hniezda zdurený,
rozdrážil v iskier kololet:
by vzteku svojho obsah zlostný,
žihadiel všetky tŕne, ostni
vraz metnul vo tvár zvoditeľa,
či zapudil ho k sitnu späť.
Po zvade chláchol pochlebný
zas — vábny lákot na oprátky
a čankot, podchyt ohebný:
vzdor zápäť, cuvot strmý, vrátky,
i odvrk, zvyklý povŕhať —
Vtom živý, súrny, prosebný
vzlyk; sťa by toho, ktorý vidí,
že veľa síl tam premrhať
mu — i viac než ich v sebe tuší,
by stačil zvrátiť úpadok,
a komu ďalších nadávok
zbroj planá v čistej jeho duši
už rozhodne sa hnusí, bridí.
Však márne: prudší svár a krik,
a lomozu sa strhlo vrenie;
za okny mihotavé tiene;
poľuje čajsi svevoľník...
Rut, dusot, hrmot jak v deň súdny;
v to ,rata!’ všetkých nerestí,
že skaly by sa pukla blana;
ozvenou však len chechot, besy.
No pablesk, čo jak tenký, vľúdny
zatleje v každom neštestí,
svetielce mušky medzi kermi —
i obeť už-už doráňaná
uvrzla izbenými dvermi
preds’; s povýkrikom: ,Miško, kde si?’
útekom hnala cez pitvor.
Lež, žiaľboh, ni tam spása, schrana:
ďas už jej zastal na odpor,
a „Hohó!“ vresknúc, „okovaná!
Ja nezdolať ťa, potvoru!?
Ba prisám —“ znova neochable
boj podujímal k úmoru.
„Stoj!“ krikla žena rozzúrená,
„späť! Netkni sa ma, hnusný diable!
Na boha zručím svoju vec,
ty nútiš, bych sa prehrešila!
Vidz!“ z klina schvatla záražec —
„Ak neustaneš, jak som žena,
viac neprekročíš toho prahu,
bezbožník... varuj!“ Postupnutie —
„Ľaď! amazonka roztomilá —“
„Hach! — Zbojník! — Tu máš napokon...“
Pán Artuš zrúknul, schrčal dute,
zvrávoral — skydol na podlahu —
„Juj!“ — Hanka desnú kviľbu vzniesla,
„krv! — Pomóc! Miško! — On mrie, on —
Môj bože, čo som urobila...!“
a kŕčovite cez prah sklesla.

Tu Michal — celý uzváraný.
(Pán zmiznul: to ho pokoja
zbavilo, hneď čos’ zlého šípil.)
Dorazil hronom príboja.
Za chvíľku obzeral sa v strany,
naslúchal — skoro však sa vtípil
a hurtom šibol k chalupe.
Lež už hor’ schody — čo tam zrel!?
Na prahu krížom žena zbľadlá;
v pitvorci Artuš ustretý,
a v krvi — siný, umretý —
záražec — zrovna vraždu hlása —
Ver’ hrozné! Obraz nevídaný!
A všetko k jeho potupe,
nezmazateľná škvrna hany —
I nediv, toho od divadla
že kryhou skrahnul, skamenel.
„Ach, Miško,“ — žena prebrala sa —
„tys to? — Ó, že len teraz, ach —
hľa, vidíš — to ja vykázala,
ja skántrila ho — hrôza, strach!
Ja, beda mojej sirej hlave —
Ó, že som prv ti zamlčala...“
Vzlykala pritom usedave.
„Šak neľutuj ma, nechcem, nie —
pošliapaj po mne po ohave
za mena tvojho stupenie!
Vedz však: ja vernosť zachovala —
ten nútil... huch!“ — „Cit! Všetko viem,“
dovŕšil súrnym spechom Michal
(zrieť bolo, slobodnejšie dýchal,
i tvárou zvláštny zhral mu svit),
a zdvihnúc Hanku k sebe: „Sem!
sem, ženo moja —“ pevne riekol,
„poď k svetlu, bár aj pri pokore —
Tam k totým žiaram, v boží byt
(prúd pozdných lúčov nebom tiekol),
ta, babo, ihneď vzhliadni hore!
Dva prsty zdvihni pekne spolne,
i prisahaj mi v božie meno,
na blahú Bohorodičku:
že všetko, čo len vykonám
za svoju — tvoju dušičku,
prikryješ i ty sväto-sväte,
ni neprezradíš nikomu —
Prisahaj tedy! — Čuješ, ženo!?“
Bo náhlil, ona mimovoľne
(v jej mysli svet, ach, tak sa mätie,
pohroma stíha pohromu)
pokľakla chvelé na koleno,
i vyrkla slovo: ,prisahám’.

Nedlho došli poľovníci.
Vesť Artušovho zablúdenia
rozkúrila ich vo víchrici
po horách kutajúcich, až
konečne Podvršiansky svah
ich zlúčil, kde mdlí od trápenia
sa spovedajú: „Niet ho!? — Máš! —
Var’ macko dáky — ale, bah!“
Tu Čajka, srdný vzdor na líci,
bez otáľania povlačou
popošiel, očujúc ich zbeh,
a zrovna, jak by to len hračka:
„Daromnô brúsiť po pekliech;
sem,“ kývnul, „tuť je panák váš! —
Nepravda, vydarený lov?
Mňa vedel pohnať za roháčom;
sám ale — čo tam poľovačka? —
medzitým kul už na ledačom,
kul, ďablec, zháňal svevoľu.
Vraj lepšia korisť moja baba —
a hybaj cudzí na chodník!
Hájnička, myslel, vábcu zvykla —
tak hútal hádik a šuch! — Jaba!
Poľahlo — hrmen prabohov!
Nu, skolil som ho pospolu...
Zaplatil pokus, záškodník!“

Hanka len teraz zvedela:
nač prisahala. Krušno zhíkla
a k operadlu primrela...

Ostatní stáli ani skaly.
Des rozletel sa po tvárach;
i slovko prehodiť sa báli.
Až Habáň odvážil sa: „Jach!“
zabručal, „predsa si raz postlal,
preds’! — Driečny hájnik, ačidali!
Šak bisťu sme už doskákali —“
Od Čajku však hneď svoje dostal:
„Čuš, ľabo! Čo ťa do teho...?“

Polesný, čo tiež stĺpkom zostal
bol stáť, i súžil sa a mučil —
už nezdržal sa. „Chycte ho!“
zareval. „Ešte brechať má tu?
Hneď a hneď svorku — slučky naň —
A tuho ruky ku chrbátu
mu skvačte, by sa škripcu učil!
Že nezvirgá vám, boh vás chráň —
— Och, že som vraha odporučil!“

Lež Michal: „Pane, netreba.
Nebojte, nie! — Mňa vešať budú,
ste svedci všetci, že mňa len...
Viem, kam mám, ručím za seba!“

A leda svitlo v druhý deň,
sám rúče oznámil sa súdu.

X.

Ach, zloba dvere nájde všade!

Daromne bezpečíš sa zhrda,
že veď val rieky obteká
či plotom obstali ťa brdá:
ver, všetko márna opeka,
kde ona rozhodla sa k zrade,
sieť klamnú k činu rozvlieka.

Aj k Čajkovcom toť prerobila
si otvor hustej na ohrade.
Bárs hora ho tmou priclonila:
odkryla tichý lásky kút
preds’, vetvy zdvihnúc priliehavé;
a jak len diabol sám je vstave
človeka blahom povrhnúť:
bez šetrnosti, milosrdia
na onen strom sa oborila,
kde hniezdo uvili si práve,
v ňomž, až ich práca zmohla tvrdá,
tak radi učupli sa vše
ku srdcu srdce, hlava k hlave —
sťa holúbky dva hrkútavé,
v sny prejdúc plné rozkoše;
i jak sa tak naň oborila,
drmala, triasla potiaľ ním,
až s koreňom ho vytruštila...
To koniec jedle. — Nuž a z hniezda
čo? — Strapy jeho pošli v ples
veterný, v háj sa rozleteli —
Tak v nociach, keď sa zrumí hviezda,
vše vídať nebom jesenným
úlomkov kŕdeľ bleskoskvelý
v ten istý čierny padať les.
Jak ináč razom na Podvrší!
Púšť, mŕtvota — a z mračien prší —
na okne havran krákoce,
a víchor dvermi vrzgoce — —

— Po onej strašnej udalosti
a uväznení Michala
čo zbudlo Hanke? — Čo by iné?
Bárs nevedela od starosti —
ku rodičom sa zabrala.
Chýr predišiel ju — ako by nie?
Už dobrý ako frčí v svet —
a zlý? Och, to rut divokosti —
nie, takých krídel vtáčích niet!
Len o ňom melie po dedine
jazykov rezká praktika:
kde, kedy, čo a jak sa stalo.
Pod uhly len to totožno,
v mizierkach tej len o novine —
a pravda, kamdiaľ v horšej sline —
„Veď to aj hrôza veliká,
k tej pridať veraž’ nemožno,
keď skutok sám už celé bralo!
Toť pýcha — už jej úložno
(tak tu-tam kmotry pri trlici),
máš! Sebevoľnosť potrestaná:
z Podvršia rušaj k šibenici!
A ako sa ti vypínalo —
Habáňka dobre veštila:
čľup v kaluž žaba z močila —“
— Ach, v ľuďoch nieto zľutovania...

Ač noc už bola zvesila
údolím temné svoje stíny,
i mesiac v oblak skryl sa dumný
a poľom iba vetra švist:
preds’ Hanka k sadom zbočila,
pominúc cestu do dediny.
Sťa zlodej vyšlý na korisť,
tak plúžila sa poza ploty
a potkýnala opreteky,
až skok! — i bola na záhumní.

Tam povydýchla z úzkosti:
že ak tak preds’ sa s niekým stretne;
ten vidiac stvoru zbabušenú
sa chvieť jak osikový list,
priam prikradne sa ošemetne
a strhá, zlapá, pozná ju —
i skríkne: „Hohou! sem sa, ľudia,
sem! držím zbojníkovu ženu!“ —
a ľudia sa už zbiehajú,
ten povraz, onen nesúc vily,
a v chvíľke v kruh ju obskočili,
päsť zatínajú, hrozia, súdia,
jak čítali by vo svedomiu —
i richtár došiel v náhlosti;
ten, akže ináč nerozhodne
— tiež pytač kedys’ opozdilý —
tož aspoň vycuzdí ju hodne
a bársi z otcovského domu
palicou vo svet vyhostí.
Od toho pooddýchla, hľa,
nešťastná, blízko čujúc vráta,
by zavčasu sa schovala;
i takoj otvoriť ich chváta.
No teraz len čo zbadala,
v jak krušnom nachodí sa stave!
Len teraz zhliadla ťažkosti,
až v boľnej zvírilo jej hlave,
ťažkosti, strasti opravdové:
jak asi pád ten znesie mať?
A otec čo na všetko povie? —
Mať uzná, utíši sa snáď —
lež otec? — Ó, ten vztekom zháka
a vzblčí hnevom ani šarkan!
Podchytí obuch ako kôl
a — darmo rata z všetkých strán —
zdrúzga ju sťaby v medzi kriaka!
To však by krátky pre ňu bôľ,
i sama v tomže okamžení
by stihla v mlynskú hupnúť pláň,
či hlavou trepnúť hen o parkan;
lež Michal, Michal! — ako s tým!? —
A na toho tesť rozzlobený
sa oborí len s všetkým zlým,
čo na jazyk mu podá slina.
Bude mu strašne bohovať;
zahreší, až ho poldedina
počuje: ,Ver pekný zať,
hej! — bodaj by bol zlámal väzy,
keď prvý raz sa zabral k nim! —
By žalárnej zhnil na reťazi,
a keď ho styknú na šibeň,
by zdochýnal tam za týždeň!
By... zbojník, mordár...!’ Také veci
a horšie otec bude stvárať,
a ona musí mlčať predsi,
vyvolať nesmie: ,Mrzká lož!
Môj muž je jak ten mladý deň...’
A to jej bude dušu párať,
to v srdci ostrý zvŕtať nôž! —
— Ó, ako dlho v humne stála,
nevediac, vrátiť sa, či ísť —
kde, ako stroviť trýzeň, žiale?
O prielaz lakeť — vzdychala:
ach, keby nebo chcelo kárať,
i vôdra ťažká povala
by prasknúť mohla... áno, ale...!
Jak dlho... než sa odhodlala:
nech príde s bohom, čo má prísť!
Pitvorom ohník kozubový
žiar vrhol prez dvor prejarkú
a rozstrel na plot lesinový,
keď vošla Hanka. Chudina,
len toľko, že nepadla z nôh.
Mať upustila topárku
a skríkla divom: „Hana! Och —
och, dievka moja jediná! —
Nuž pravda predsa, od susedy
čo počula som na mrku,
že Mišo, Mišo hrozný pád!? —
Ja, že len mrcha sveta zvedy...
Och! (ruky lomiť počala)
i snilo sa mi, hľa, to samo.
Joj! keď tak otec príde z hory —
poď, ukryjem ťa do komory!
môj bože...“ A jak naposledy
už mali by sa uvídať,
kvíliac si padli kol krku —
mať: „Veď som si ťa vydala...“
a dcéra: „Mamo moja, mamo...“

O chvíľu vtiahol gazda s drevom.
I len že pozastavil spräž,
zhôkajúc hlasom mrzutým,
už obrátil sa k izbe revom:
„Hej, stará! Kde si? — Počuješ!?
Vieš, tvoj zať čo vyviedol hlavný?
Sto bohov v jeho materi...!
Máš kaše na čertovej pavni,
navarila si obžery,
chlíp teraz i s tým štencom svojím!
Ty... (pridrhol sa pohnutím) —
Nech fľochne mi len do dverí
ten pačrev, len nech — jak tu stojím,
tej suke hlavu odkrútim! —
— Hô! — kdeže zase kľapčíš, Števo!?
(Parobok — nebodaj sa schoval.)
Čo neodbíjaš kramlice?
Var’ z kolies samo skočí drevo,
há?“ a už kmásal ho za käčku —
„hej, tebe tvojej do štice,
trúp!“ hodil reťaz, zahromoval —
I frflal-mrmlal, pri mesiačku
jak skladal, dvíhal, uvaľoval.
No pravých súžieb, nerestí
len potom nastúpili dni
pre obe zúbožené ženy;
sťa dračisko tam v povesti,
tak riadil gazda rozzúrený
po dome, kamkoľvek sa schýlil,
klial, hromžil, drúzgal, sekal, pílil —
Čo deň, to nové bolesti,
a nedochádzal posledný.
A aby miera zvrchovaná,
zmut nový ťažkej do úlohy,
keď súdne došlo pozvanie
(v otcových očiach strašná hana!):
tu Hanka k svojej obrane,
hoc lomili sa pod ňou nohy,
chtiac-nechtiac i to vykonala:
luhala drzo, vedome —
by sľub svoj krehký zachovala,
svoj zločin zniesla na Michala,
na toho, ktor’ho milovala
nad všetko... Ó, jej svedomie!
I v tom zas nová žravá rana...

Otec
Či zdostač som ti netrúbil
do tvojich zadubených uší,
dievčisko: daj si pokoj s ním!?
Už parsún sa mi neľúbil
s pozorom sťa vlk gánistým —
hneď znal som, zlý duch že v ňom čuší!
Ale ty, krutý zanovit,
čo? — vždycky len zaň si sa drela,
v dedine len on jediný,
sťa vedel by bol porobiť —
paholok — aby v jeho duši!
Mám zaťa teraz — vyvrheľa,
mám! Uctil tesťa šediny,
i poustlal mu — na tŕninu!
Raf doňho jarabatá strela,
v pažerák jeho zločinný...!

Dcéra
...Och, ňaňo: mne pripíšte vinu,
len mne...

Otec
Čo, — tristo hrmených,
ty zastávať ho budeš ešte!?
Sem, lemeš vyskubať ti, kliešte!
Sem topor, ostatný tvoj dych —
Alebo keď ho zastávaš,
si hriechu jeho spoločnicou,
dom obraciaš mi na Sodomu?
No, breš! — To nechcem tvojej pary,
šak ani bývať s takou zlicou;
hneď a hneď prac sa z môjho domu
a nikdy sa mi neukáž,
ináče beda, beda ti...

Tu buchnul o stôl, až sa uhnul
pod ťažkým päste úderom;
na dcéru palný hodiac zrak,
hrozive zastal, skalou stuhnul.

Kol úst hra, potrh desnej muky,
sĺz výron z očí bohatý —
postúpla Hanka od almary
i plúžila sa ku dverom
a bez márneho slovíčka,
len skľúčiac ponad hlavu ruky
a zafikajúc trošíčka,
šla...

Mať vtom skríkla zúfalá:
„Čo stváraš — bože! — starý, starý!?
Máš rozum? — Horký! ani mak —
tys’ otec? Ibák — vlkolak!
Joj...!“ a za dcérou bežala —
Divákov tu-tam plné špáry —

Tak išlo to, hľa, v tomto dome:
deň svital, mrkal zmráčený.
Nuž nediv, toľkej po pohrome,
čo rodinku v ňom zasiahla,
po toľkých zmutkoch haravary,
hryzavých súžbach, trápení:
mať, neborka, že obľahla.
„Oj, dievka moja,“ riekla raz
oslablá, bledá ani stena,
„ten otec preds’ má pravdu v mnohom...
Na reči toľkých, na odkaz
mali sme riecť len ,spánombohom’
Mišovi, a nie sa s ním pliesť;
nebola bys’ sa zaväzila.
Do akých pýtali ťa miest!
Sťa vtáča by si bola žila —
Dnes? — Ani hniezda ani mena,
si biedna, nešťastlivá žena,
ach, bože... čo to za potrest?“
Hanka len hlavu zalomila,
oprela sťažka o pelesť,
i zaupela usedave;
a tak jej prívet ten v sluch tlúkol
(mať hladkala ju chudou rukou),
tak do duše znel dotierave:
len toľko, že sa nezradila!

A darmo zelín viazanica —
nadarmo próby ľudských rád,
nič nevedeli tentokrát:
mať skoro na to umrela,
zachvátila ju úložnica.
Bôľ Hanky, jak to videla,
keď drahú mater zrela stuhlú
na doske, milosť anjela
v komore mrku pod tieňami...
bôľ nemožno jej opísať!
Jak zobjímala tú jej truhlu
a bozkávala zas a zas,
v čas pohrebu! Jak vykladala!
Pri odobierke rechtora
bez miery jatá neresťami
jak vztýčila sa kŕčovite
— až húfy vôkol prejal mráz —
a chvatnúc k srdcu, zbedákala!
Verš každý tak doň ťal a pichal!
A keď už tajšli zo dvora
pri krušných zvukoch: ,Miserere’ —
pod kviľbou hrany v ten breh známy
keď skärovali dohora...?
I vrhla by sa ver’ do jamy,
ku matke ľahla okamžite —
však Michal, bože! — chudák Michal —

Otec, jak keby každá spona
sa razom bola prervala,
zanemel, stupel na pocite;
zmraštený mlčky chodí, koná —
len silnejšie ak pľaští dvere.
Raz predsa jednou dobou rannou
prerušil pokoj domáci
a k Hanke, utrápenej dcére,
hoc už jak kameň mlčala
i tmolila sa ani tôňa,
zrak uprúc rudo horiaci,
pošmúrne tieto slová riekol:
„Len vzdychaj, žaluj a sa súž,
len — paromovská hostina!
(Pot desný tvárou dol’ mu tiekol.)
Máš príčin veľa-neveľa —
Tiež líham-vstávam s veľkou ranou,
tiež: dobrá žena, gazdiná
toť (slzu zmliaždil tvrdou dlaňou)
dnes týždeň jak mi umrela.
Hej, vzdychaj, dievko, a sa zmáraj,
mať tvoja — čože? — Nikdy! Čuš!
Všaks’ sama zo sveta ju zniesla,
ty, ty a galgan ten, tvoj muž! —
Rozumiete sa do remesla;
ja tiež dosť skoro pôjdem za ňou,
nu, skoro — boh vás súď a skáraj!“

Vykríkla, na kolená sklesla...

Keď prebrala sa z poumdlenia
a spomla hrôzu na všetku:
skočila ako najašená,
schytila z žŕdky plachetku
a, mihnúc dvermi, šla...
Kam? — Ktovie?
No zjavila sa skoro znove.
Sprvu u Sedembolestnej
pred bránkou vídali ju mnohí
v podobe divnej, nerestnej:
jak kľakala tam pohotove
vzdor vetrom sychravým a pľúšti
a pomykala pátričky.
Však len že víchor hnul sa v húšti
líp, lístím zhrkal cestičky:
už z kolien hupla a poď vnohy,
frčala — pravá pobehlica.
A zima pritrielila. Raz,
ač strašná viala chumelica,
až v hore nadišli ju chlapi,
hej; tí, že raždie zbiera — horký!
od krovia ku kru povoľky
sa krúti, zobe borôvky —
I nakliali jej do bosorky;
jeden poď bokom, že ju lapí:
zbadala, hybaj krížom v laz!
Ba i k domu sa priplichtila:
u okna, sťaby k výskumu,
ju videli stáť mrazným ránom:
len tak ju zima drvolila,
tvár hrozná, kostrubatý vlas,
plachetka skoro iba strapy —
I stála sťaby k výskumu
u okna, už-už prsty na ňom,
by zaťukali v prítlumu:
ach, milosť, otvor — hlad a mráz;
vtom zadupkala súrne-náhle,
do okna päsťou trepla vraz,
zachechtala sa, ráňa ciagle...

— Vraj podstúpila z rozumu.

XI.

Po skrutách-zvratoch vyšetrenia,
po výsluchoch šírej osnovy,
po dlhých trapiech, nemociach
a stuchlej väzby polnociach
konečne svitol väzňovi
deň záverného prelíčenia.

Ďaleko ešte okamih,
až prenikavý zaznie zvonec,
by zodvihla sa opona,
z podzemia človek vyvstal padlý,
z výšin zas anjel zákona
zostúpil, a než oči zhádli,
divadlu mečom zrobil koniec.

Ďaleko ešte okamih —
no ruch už ľudstva, tlak a stih,
sťa vlny rieky rozprúdené
sa hrnú do súdobnej siene;
jak sa to obyčajne stáva
v čas riešby hrdelného práva.

A doba prišla. Sviece vzpláli
kol muky sťaby v kostole.
Stranou sa dvere rozostali:
rad sudcov vkročil strmo, vážne,
a kolo stola nepreťažne
zasadli v prísnom úkole.
Hen žalobník sa v aktách štára,
tam obhajca zas čaká, zhára — —

Tíš zvládla sieňou, mlkot tupý,
že mušky prelet by si čul.
Predseda spešne pokynul:
obvinený ať predostúpi.
A okamih než bŕkol slabý
dokola v zvedavosti hrách:
tu Čajka! — Ozbrojení drábi,
prez zástup pracne kliesňac cestu,
už šikujú ho v okovách;
strkajú k zvyčajnému miestu,
až pri samučkom zábradlí
sa octnul, zoči-voči súdu.
Len toľko, že sa neprešinul
cez prejmu totú, tak bol mdlý,
tak zbitý všakým šľahom trudu,
čo v žalára tmách hlivel, hynul.
Jak vzozrel, zase tisíc zrakov
ho zasypalo žihadly
a žravou túžbou ledajakou,
sťa havrani by vyhladlí
sa zlietli k jeho potupe:
tiež nediv, že sa zgalamutil;
nevediac, jak im vyhnúť, kam,
zrel k stropu a zas ku nohám,
i premínal sa, zbĺkal, sinul —
Konečne sily zobral preds’,
putami srdne drmol, rútil,
až zachrešťalo v retiazkach;
vlas prišuchnul si rozcuchaný;
s tým zrakom mračným, že až strach
(až obecenstvom zhralo hnutie),
tak zlobne šmaril do divákov,
že — — I jak pravý zločinec,
povysmejúc sa nástrahám
a k vzdoru utieknuc sa zbrani,
po ráznom k prejme postupe
pozastal strmo, nepohnute.
S tým započalo vypočutie.
Predseda slovo prejal prvý,
po všeobecných otázkach
skúšajúc väzňa takto sám:
„O tomto čase práve vlani
— lež čistú pravdu povedz nám —
v hôr podvršianskych ústraní
a čo viac v tvojej chalupe
bol nalezený mŕtvy, v krvi,
pán mladý, Artuš Villáni.
Že násilie mu vzalo život,
je svetlá, neodškriepna vec;
nasviedča miesto — jakosť rany —
a iných okolností prívod,
zvlášť ale, vidz, tvoj záražec! —
Ty ihneď priznal si sa skutku,
sám oznámil si hrozný pád,
spravedlnosti vyzvúc činy;
nuž udaj — na tú muku hľaď:
tys’ zavraždil ho, abo iný?“
Tu Michal, zazrúc sviece vzpláť
jak prihrozením: Pravdu pravú
rec! božím pozeráme jasom —
len-len sa vydrel zo zámutku;
srdnate spechom vzpriamil hlavu
(— v zástupe živosť pobadať —),
i vetil odhodlaným hlasom:
„Ja vraždil — páchateľ som viny,
ja, prosím pekne, nikto iný...“
„Keď tak,“ diaľ prézes pokračuje,
„nuž oznám hneď i príčinu,
čo ku strašnému zločinu
ťa pohlo? — Predsa synom pána
bol, ktorý službu, chlieb ti dal —
to, myslím, k úcte povzbudzuje?
Tým väčší nevďak, zvrhlosť, hana —
— No, prečo? Tu čas, udaj voľne,
na tebe ťarcha veliká:
ký diabolský ťa strhol nával?
Už v hore si sa zakladal
vraj — pre chatrný oflinok,
hm, sluha — drzosť neslýchaná,
po pletke to by účinok!
Ty tedy vraždils’ úmyselne —
čo? Hovor!“ Vidno bolo, že
nešťastník horič polyká;
ten podstrk dych mu zadrhával —
„Ja bil som, no nie z úmyslu,
tej škvrny nemám na svedomiu!
Nik lepšie slúžiť nemôže,
tak slúžieval som domu tomu;
neblížil ani v pomyslu —
A čo sa týče samej vraždy,
ľutovať musím večito:
no ja ho nezval, nekutil —
pán pristúpil mi, kde ma bolí,
i červiak sprotiví sa zavždy;
pán začal...“ a hneď vyrozprával,
jak v prvom stálo protokoli.
„— Svedkovia ale vravia proti,“
predseda prerval v reči ho;
„keď k hájnickému prišli domu
a nad nešťastím strnuli:
tys’ zúril-búril oprekoty,
i všelijak sa rúhal panstvu!
Pokážuc drzo k dielu tomu,
dals’ vraj, jak všetci počuli
— ale zvlášť jeden svedčí to —
radostný výraz svojmu planstvu;
i bez každého okolku
vraj splesals’: Badal ja to, šípil,
kam škúli lakotný môj hosť!
Ej, počkaj, brachu! — nuveď, reku,
čo len sa vlečie, neutečie —
bzik! — ja ryp doň, než sa vtípil...!
Jak? — Čo máš na to, nečloveče!?“
„— Že všetko možné; v ohni vzteku
človeku ťažko sa je nájsť...“
„A ešte jedna okolnosť,“
ozval sa náhle prísediaci:
„pod stolom našli tobolku
a pod almarou prsteň zlatý,
patrné, odkiaľ pochodiaci —“
„Čo!?“ skočil Michal opodiaľ
a zreval; húfom zarazenie —
„Ja mal bych zbíjať? Bych mal krasť?
Ja!? — “ tnul sa do pŕs. „Oj, ten kliaty!“
I ďalej by sa bol tam zvíjal,
nech obranca sa neozve:
„Pst! — Pravda, našli veci tie
tam, ale skryté neboli,
najskorej len tak pohodené,
nu, bezpochyby v svevoli —
nebolo, kto by ich bol prijal...“

Pán štátny tiež čos’ prežúval,
mniac v pôtku vtrhnúť náhodilú;
trel okuliare pozájdené,
i už sa sepnul, aby vstal,
pohodil pravou, odkašlal;
no — nechal, mŕštne sklopiac zraky.

Tíš sieňou znova, mlkot z chvíľu.

„Sú ale svedkovia i takí“,
nadpriadol prézes výsluch vtom,
„zejmena dvaja pastieri,
čo v čase onom nešťastnom,
už slnce hodne bolo nízko,
vraj videli ťa v Kýčeri,
jak trielils’ popod sekanisko...“
„To už nie! — Kde by? — Ani byle —
tí ľudkovia sú na omyle...
„A žena tvoja...?“ — Osŕkol;
prez čelo chvatom prehnal ruku
i prestupil sa nanáhlo,
že putá štrkli v ostrom zvuku.
„No, prečo si tak zamĺkol?
Vrav, tvoja žena bola kde?“
„Tá“ — zmeravele v božiu muku
vzpial oči čierno otočené —
„tá bola tiež tam, pravda je,
hej, pravda — pravda zvrchovaná;
však prosím pekne, ponížene:
ni palcom nehla... Strachoš to,
a koľký bojko moja Hana!?
Tá,“ z čela zajal krupaje,
„vari by kurča zmárnila?
Ba! — Bárs by samo pýtalo,
bárs... Ešte sama prosila
ma: ,—Nerob, nerob! — Rata, ľudia!
Veď zabije ho... kríkla neraz —“
„Dosť — účastenstvo tajila,
to vieme...“ Jak mu odľahlo,
že to čul, pravá posila —
moc rezkejšie sa ozval teraz:
„Bo zoznať nemala ver’ čo!
Nie — viem, sa bála, chúďa, chúďa...“
„Na dnes tiež bola predvolaná,
však neprišla...“ „Nač by aj, nač?
Čo nás tu po nevinnej žene?
Mal slávny súd by slúchať plač
a fiky-vzlyky vykladania?
To ešte! Nech tam doma kríka...“

A svedkovia jak vypočutí
i sprisahaní boli už,
predseda vpravo prikynul:
„No, prosím pána žalobníka —“

Vstal, pritknúc k očiam okuliare,
už starší, chudorľavý muž
(preds’ pivonka mu kuká z tváre,
kostrnkov brady brní šteť —);
a po hlbokom vydýchnutí,
sťa keby zodvihnúť mal svet
(nejaký nový Archimed)
či aspoň kynožiť šiel chraste,
keď nad stolkom sa prešinul,
kostnaté na ňom zoprel päste,
predniesol toto s dôrazom:
„— Ten (obrátil sa ku Čajkovi,
i ustrel hrozivý doň prst),
ten — onô — lotor opravdový,
jak svedok Habáň mu dal krst:
zoznal svoj — onô — zbojský skutok,
čo spáchal veľký na zármutok
celému — onô — vidieku,
keď — onô — zvrhľa horskej zmije
(zmnul náhle čelo k dômyslu)
zavraždil zrejme z úmyslu
potomka slávnej famílie!
Tu — onô — nieto inej rady,
niet — Takémuto bezdeku
smrť! Slučku — onô — povrazom...“

„Pán štátny ver’ má krátke reči,
prikrátke vskutku, slávny súd —“
švihol sa z miesta junák mladý,
blesk v oku, povedomá hruď,
reč zvonná, plná sily, vnady;
a pokračoval v brannej seči:
„Nie že by, jak to vyžaduje
veliký dosah obžaloby,
sa vhĺbil v temno previny,
pohnútku odkryl, tajné vzpruhy,
tak doznal, zvážil mieru zloby
i trestu údel povinný:
on prehnal zreteľ prez to každý,
len površím si vľahce pluje;
tam karhá, záhroz vrhne tuhý,
tu zvelebuje, horekuje,
jak keby to smer jediný —
Priznávam i ja ochotne,
že vznešený rod stratil člena,
v ňomž hrdosť jeho založená
a túžob nebo ligotné;
sám želiem príbeh neblahý:
no proti tomu spriem sa navždy,
by ten vzhľad bral sa do váhy
za dôvod umyslenej vraždy!
Tu človek stretá človeka,
len ľudia pozemskom sa schodia;
i osožia si abo škodia,
tam zmier — tu kliatba odveká.
Viem, ináč sa to hľadí z štítu,
kam dospel šťastím ten a ten,
na svahy nizučkého bytu,
v tú veľkú ľudu priehlbeň:
no prietrž totá nemá práva,
pred umom nemá podstaty;
vysoko nad ňou z pravej výše
duch-zákon skrz anjela píše
súd rovnovážnej odplaty...
A k tomu zmätená to hlava,
ju závrat pojal vrchola:
hu! priepasť — peleš, šeliem vrava —
čo nerve sa, tým ochlast kníše —
hyd pustošiaci dokola...
Tak! — Lebo ďalekí sú citu,
čo ľudskosťou sa menuje;
bez vôle, hlbín skúmať tieň,
bez priazne, zniesť dol’ plápol svitu,
zjagotať fakľou do sluje,
v predsudkov polnoc úrečitú...
A predsa: jestli priehlbeň
tá vlnami sa rozkolíše
a čiernym rmutom zakalí,
najskorej vtedy sa to stáva,
keď práve z pyšných strmín ríše
v ňu zaburcujú prívaly!
Aj, pôvod terajšieho práva,
toť príklad — nemám pravdu predsi?
Bo nález oných cenných vecí
dľa mňa je nezdarená lesť,
je podvod, ako úklad — bájka;
pečlivý dobrú o povesť,
môj klient toho schopný neni!
Do služby vstúpil Mišo Čajka;
tu stojí ako obvinený,
zač? — Spreneveril sa snáď službe,
koristil a bral z cudzieho?
Nie! — Zbíjať pošiel sám, či v družbe?
Nie! — Verne cudzím mozolí,
či právu, či ich svevoli —
najlepší hájnik na obvode;
i čo nás tedy do neho?
Prenajmúc sily, najal päsť —
Hej, pravda — no nie v každom bode,
nie! — Žena jeho prislabá —
za svojej ženy vzbĺknul česť,
česť preds’ i jeho samého —
a tam päsť jeho na slobode!
Za tú sa vzchopil, zrieme všetci,
i skolil vilca-jastraba —“
Predseda vtrhol: „Prosím k veci...“

„Som pri nej,“ — obhajca zas ďalej —
„Tu vraždou by bol smrti trest
a škvrnou hany neskonalej
na pravde! — Ba i väzby muka
sa zdá mi ukrutný čo trap...
On síce zoznal vraždy vinu:
no kási nevidomá ruka
ma vedie v cestu celkom inú;
kýs’ neúprimný je to chlap...
Dva chlapci z obce Osady —“
Neskončil, lebo: „Čo to? — Inu!“
už Čajka šprihnul ani had,
naňž stúpla noha znezrady.
„Čo to má zase znamenať?
Kam chcete zvaliť moju vinu,
há? — Varujte sa, rečný pane...!“

A u dvier hrmot, durkotanie
vtom, rykot, vrava čudesná,
že všetkých zraky zabočili
k nim. — Tuho vzpečoval sa dráb,
no dvere preds’ sa rozborili:
a nimi žena nerestná,
zmut v ťahoch, telom veteš háb,
do siene vbehla ani strela,
až zdrapy ňou sa rozkrídlili;
zhačkla sa — strmla sťaby týka
(poblízki strachom uskočili),
očami točí, ústy žmýka —
dlaň nadložila — čosi zrela,
a hybaj jedným skokom vpred!
Huk vôkol, pohyb, zarazenie.
I Čajka zbočil naposled,
zrel — skúmal — revnul: „Moja Hana!“ —
„Hej, ona,“ muky na znamenie
kríž vrhla. „Vidíš? Ešte žije,
by mohla ťažkú na spoveď —
och!“ — metla sa mu kolo šije,
„ty mrcha, mrcha, mrcha muž!
Ó, koľká v duši mojej rana...!
No vidím slnka zlatú pruž,
hľa, jak sa oknom z kužľa vije;
i prvej než sa zase skryje,
než zatvorí sa čierna brána:
tu si mi, našla som ťa už,
a nepustím ťa nikdy, nikdy! —
Miškovi nerobte mi krivdy!
Ja pána sklala — ale no!
Ja veru — ojoj! — svetlo — huš!“

Odstrkla muža, tleskla v dlane,
a ako švižké vreteno
sa vrtí, nôtiac udychčane:

„Nechoď, dievča,
k potoku,
bys’ nepadlo,
bys’ nepadlo
v tú vodičku hlbokú,
hlbokú...
Pluh a riadlo!
Ach, hrdielce mi zasmädlo —
Mojou budeš po roku...
Ihuhú! tuľaľa!
ha, rúca sa povala,
von, von, tralala, tra...“

S tým brnkla von i vbehla zas,
sťa vták do klietky polapený
sa zmieta, od úst polet peny — —

Keď utíšil sa hluk a žas
a znamenali úkaz znalci,
predseda Čajku na pretras —
„No!“ vrieskol, „ty čo na to, chlape!? —
Tys’, zdá sa, vrchnosť ošudil,
zaskočil pravdy pokroku!?
A žena tvoja za to kape —
vrav!“ Čajka trnul, hrýzol v palci —
zardel sa, vzdychnul, vzozrel vraz —
zosŕkal — slza na oku — —

Súd vyrkol: Spor boh rozsúdil! —

— Šiel Michal, koniec po väzneniu —
šiel, pojmúc ženu pomätenú...

XII.

Sláviček, sláviček, sláviček, žaloba:
chorá som ja, chorá, samá som choroba —

„Môj milý, premilý, už svitá, vstaň!
Kohútik jarabý spieva:
kikirikí! —

Do okna, okienka, kukni len, saň
sto plazí jazykov, ó, bráň ma, bráň!
Nie — zora pahriebku vlieva:
ši-ši-šiky! —
Nevidíš, leňochu, jak horí noc?
Aha, hen! Aha, tam! Blk-blk-blk moc!
Rušaj, ty! —
Strecha sa chytila, skoč na pomoc!
Na, plachtu, letnicu a chytro hodz!
Podo mnou, nado mnou žeravé drievä —“

„— Ale spi!“

— Mať moja, mať moja, pod zeme hrudami,
už ma hlávka bolí, čo plačem za vami —

„Môj milý, premilý, poviem ti sen:
mať moja zdvihla sa z jamy,
šuchy-duchy —
Otvor mi, dievčisko, či odchýľ len —
Bojím sa — Nechaj tak — Ľaľaď hu, hen!
špárkou myk — rastie po trámy!
ruchy-buchy —
Kríži sa, blíži sa — rubáš sťa sneh,
zrúva sa, zdúva sa — vo vyhni mech!
i habká už!
Ha, nie mať — otec to! — Pokárať hriech...
ha, ruka ľadová — žihavý dech —
čis’ z boha, čis’ z čerta, po-pomáhaj mi —“

„— Ale čuš“

Láska, bože, láska, kde ju ľudia berú?
Na hore nerastie, v poli ju nesejú —

„Môj milý, premilý: i otec i mať
spia ticho tichučko spolu,
bože-bože!
Ľúbil ach, ľúbil si; prišiels’ ma vziať,
chceli či nechceli, museli dať;
my hore — oni zas dolu
v čierno lože...
Ľúbila, zhrešila pre teba — och!
Počuješ, hluchý ty, jak hrozí bôh?
hŕ-hŕm-bach!
Mesiačik! obušek! — ber, zraz ma z nôh,
rezivkom zas odtni na medzi lôh
a na hrob k hlavičke zasaď kriak bôľu...“

„Hrúza, hach! —“

XIII.

Ó, strašná, desná musí byť
tma ducha, polnoc pomätenia! —
Nevidieť, nečuť, necítiť!
Ni jednej hviezdy neznať svit,
čo vyviedol by z čiernosnenia,
sporiadal priadzu balušenia;
len komét zierať kolotanie,
bludičiek skoky, besný rôj
pomyslov, jak sa jatrí, planie,
jak schumelí sa, spŕška riasne:
a razom práve vtedy zhasne,
keď zívla priepasť — boh ty môj!
No ešte hroznejším byť musí
stav, kto je k tomu určený:
by hľadel na to bez pomoci;
zrel nezbedníka, splašený
čo or jak rve sa vo dne, v noci;
čul kvíľbu ducha, nepokoj,
jak kýs’ sup driape ho a dusí,
i videl temna zášerom:
jak — hnutím kejsi pekla moci —
sťa čiernym sopky kráterom,
vše z neho záblesk šľahne siný,
šinú sa žhavé mysle kusy
a citu láva, trosky, špiny...

Čo mohol proti tomu Michal,
čo? Márna pomoc, opeka!
Zve ženu — ona uteká
sťa od cudzieho: jednak zúri,
bárs láska, prosí, zarieka;
zrie do očí jej, samé chmúry,
zornička večne ďaleká,
kvet duše všetek pousychal —
Nemohol, chuďas, počať nič;
i trampotil sa, zhrýzal, vzdychal —
Hľa — chľuplo mu v um — boží bič!
Hľa, ako zápäť stihne kára
každého, kto sa vľavo stára,
púť pravdy tŕním prevlieka...

Tak súdil, hľadiac na Sodomu,
a trpel, trpel, trpiteľ —
Napokon však sa oželel
a jednou nocou — ušiel z domu.

Noc ako v rohu. Hrmavica
toť len že prešla dolinou,
jagotné utŕčajúc líca;
i včuľ vše v diaľke posvieti sa
zhasne —

Dolu dedinou
sa zrovna podal, stúpa — fára;
jak kročí, vše chlust do kaluže —
Zdĺž cesty hudie stromov švist,
trh vetra. — Huňu stiahol užšie,
širák zas zvykom zlosynov
pritlačil — nemal s kým sa zísť —
(Jak ináč bolo, od horára
keď niesol známy tadiaľ list...)

Až dočliapkal sa do chotára,
kde rieka dávnou hranicou.
Už z diaľky čuť ju, jak sa valí,
pokojných dolín hlučný hosť,
jak durká obra kiahnicou
do brehov, hať rve, štiepa skaly —
Čo? — Jäk vĺn jemu na radosť?
Keď všetko pošlo s víchricou,
tie útechou mu privolali...?
Zblýskalo práve proti v brali,
a videl: rieka vzala most.
Tam motal sa. Čo kutí asi?
Chce azda na protejší breh?
Či rozrýva sa s trápnym svetom,
a čujúc rieku hrnúť letom,
jej mieni zveriť žitia zbeh...?
Blesk: širák zložil, vetrom vlasy...

Poniže cesty na strelenie
pobrežím rieky v rákosí
vtom vatra vzplála, víchorenie
ju oživilo akosi.
Ta strihnul, jaknáhle svit zočil.
Hja, svedkami by bludári
snáď — domov pošli, koniari —
či svietiť si chce, kam by skočil?
Tu naraz hrmot, hradskou z diale
zahrčal povoz rachotný:
že kočiar, svedčí dokonale
i postup paríp dupotný;
lampáše jeho vyhasené,
podistým ho tiež stihol víchor,
a nie to žeby, keď tma, stíchol,
len frčí, trieli ku rieke,
na nocľah kamsi unáhlene —
„Ej, budeže to prekvapenie,“
— zajachtal Michal — „prisámboh!
(a rieky sštekotali ústa);
tí premelú sa utešene,
vo priepasť až tak cupnú — och! —
po sláve — tisíc vĺn ju chrústa!“ —
Veď ký čert to i slýchal kedy
tak sitnom tmy sa trmácať!?
Čo neloptejú v bezpeke?
Hja, páni — to ti neposedí;
dňom drichme, v noci: ichú! vivat! —
Hrom...! pre tých má tiež utrácať
čas, prečkať veľký kotrmelec? —
Nie, nešťastiu sa nemôž’ dívať
ni teraz, hoc cit zotlelý —
pochytil hlaveň, beží — kričí:
„Hop! varuj! kroka nepokročíš...“
Zastali. „Ký to reve smelec?“
zabručal zarazený kočiš,
„čo je? —“ (I čo dnu sedeli,
tiež bezpochyby mysleli,
že v zbojníckej sa octli pasti;
kvil aspoň zaznel holubičí.)
„Čo je!?“ tu druhý z kozla zas.
„Čo je? Si mne ty za kočiša,
bys’ postlal pánom ozaj rúče,
hej, maliže by perín dosť!
Nevidíš!“ skýval hlavňou vbok —
„toť, rieka uchytila most —
Nech neprivolám ešte včas:
len jedna chvíľka, jeden skok —
si s všetkým činom vo priepasti!“ —
Krik ženskej z koča: „Pre Ježiša! —“
„Cit —“ hlas v to hrubší, čajsi muž —
„Sem,“ chríple dodal, „kto si koľvek,
viac anjelom si nežli človek!
Sem hybaj —“
Vzpláli hlavne lúče:
hneď vpravo dáma čarnej krásy,
sťa holubica jatá už,
sa túlila, tvár dojmom strasti
(jak badať fátľa prez kotúče)
jej zbledla valne, víčiek riasy
zas postriebrila slzná pruž,
až zmdlela, anjel zľakaný —
ručníček umkol z rúčky asi,
včuľ siaha po ňom; naľavo
zas pán si hovel — brada sivá —
sústrastne hnul sa k ženštine
a šepnul nežne, láskavo:
„Ach, dieťa moje jediné...“
Michal len díval sa a díva —
až doznal: starý Villáni!
Pán vtom už čiahol po tobolku;
podáva: „Vezmi, človeče! —
I vďak môj za ochranu toľkú —“
No Michal, vzdychnúc, odrečie:
„Nie, pane, pekne ďakujem
za všetko — ja nič nezaslúžil;
nech, kým som živ, vás varujem:
vždy ešte, pán môj, bych vám dlužil!
Nie,“ chvel sa celom na tele,
„ja peniaz nepošiel som žobrať,
ach, u mňa iné veselie...“
„— A kto si?“ okríkol ho pán.
„— Som Mišo Čajka“ „—Ah-ha, to ty? —“
zajaknul ako omráčený.
„A čo chceš“ — vzlyknul od tesknoty —
„Čo? Povedz!“ dodal nevrle.
„Nič nechcem, nič ver’, božechráň,“
— tak Michal — „vašej od štedroty,
len prosím vrúcne, pre päť rán
Kristových! akže urazený
vám nebráni v tom otca cit:
udeľte svoje odpustenie
mne — mojej zúboženej žene!
Len odpustenie obom nám,
to, to... ak chcete odmeniť!
O peniaz neprišiel som žobrať —“
Pán dumal, váhal v rozčúlení —
až vetil: „Zbohom! — Odpúšťam —
a — o ostatné ku mne príď!“
S tým na kočiša: „Andriš, obráť!“

A kočiar už bol v hodnej diali
hrmotal cestou spiatočnou,
čo Michal ešte svietil im,
mávajúc hlavňou, až z nej prší
dážď iskier mihom jagotným;
stál — širák ešte vždycky v krši —
stál, hútal — stíny tvárou hrali —
Čo zmýšľal? Zmysel oných slov,
čo len že v uchu odzvučali,
snáď hádal? Či svoj zámer zbiera,
zapadlý na čas v duše taj...?
Jas hviezd vzplál mračien prez trhliny —
Precitnul, spešil na pokraj;
tam smoliar mrštil do vĺn šera,
skäroval — šibol do dediny.

XIV - PIESEŇ HVIEZD
Chór

Lúče, lúče! zlaté lúče,
zo strminy do hlbiny,
v zemských strastí mítor siný,
čiernych zmutov cez kotúče;
strelou zhora v lono mora,
ešte hlbšie: na dno sŕdc!
kým nezaškrú škvarom viny,
nezavrú sa — za horúca
skok! v ich zámky sťaby kľúče!
Tiahne pleseň, číha hŕdz...

Prvá hviezda

Spletám v letku kúzla činy,
nitky blesku, pavučiny —
zlatý pavúk v bežku;
motám v krúžok — sladké miestko —
povesím ho ako hniezdko
nad okno pod striešku...

Druhá hviezda

Svetlo moje ružou skvitá,
krása na ňom rozmanitá,
pel a krôpky svieže;
pomaľovať bľadé líka,
neboj, vniknem bez rebríka,
bársi husté mreže...

Tretia hviezda

Môj svit blankyt modročistý,
spravodlivý, vždy ten istý
v tichom slávy toku;
zúbožený ľudský tvore,
kde si koľvek, vzozri hore,
svitnem v kalnom oku...

Štvrtá hviezda

Moje lúče biele, skvelé...
na kajúcom ziskria čele
splnom vrúcnej túhy;
zmyjem, zotriem škvrny hriechu,
svetom duše na útechu
rozkrídlim pás dúhy...

Piata hviezda

A ja zlietnem na posluhu.
Rozkrídlenú tebou dúhu
stiahnem dolu, dolu —
spustím srdca do priehlbne —
ono to tam ešte šklbne,
ale beda bôľu!

Šiesta hviezda

Ostrie jeho ulomené,
jeho žialo vyštrbené,
osti iba mrvy;
nepobodne, nezavŕta,
neprerazí, nevyškrtá —
nezabúri v krvi...

Siedma hviezda

Tíško, tíško zamrie, schradne —
V zbožnom srdci pokoj zvládne,
pokoj sladký, svätý;
v duši žblnká vlnka k vlnce,
vo milostné zmieru slnce
blyslo v jej rmut — svieti!

Chór

Lúče, lúče! zlaté lúče,
božej priazne pravé kľúče,
lúče v otvor srdca rúče...

XV.

A sme zas hore na Podvrší!
Zas v šumných lesov dvorane,
pod klenbou, z ktorej balzam prší;
kde, príde-li hosť ustatý,
priam kŕdeľ vánkov privanie,
až posluha sa zhŕkla celá
kol pútnika; ten vyzlieka —
ten ručníčkom pot stiera z čela,
onen zas k zdroju uteká,
kým na moch zvábia vystlatý
ho opäť iní, sclonia tôňou
i uspia hudbou, ambrou vonnou...
Hej, tak je, tu sme — pánboh s nami!
A zrovna na tom mieste znova,
kde videli sme pred rokami:
jak v snietok čupí objatí
sťa hniezdko chatrč hájnikova.

Hľadíme — v čarnej panoráme,
no žiadnych novôt, premeny —
tak všetko, ako to už známe;
záhradka v kvetín plameni —
nechtík sa sklonil: azda panne
ružičke, čo tam kynie z kríka
a zostúpiť chce, v ústrety,
alebo riava, čo kol bzíka,
tej laškujúce prívety,
povesti, žartovlivé kúsky
ho pohli k smiechu, učupol sa
i chichce do zelenej dlane —
či skryl sa, bo pod plotom húsky?
Len javor hodne zodvihol sa,
ten vzrástol ozaj na juna;
tá šumná jeho koruna
až po parohy siaha samé,
sťa vencom jímajúc ich kol,
že hovejú si ani v ráme.
I jeho stín sa rozšíril,
a ako! Celým štítom domku
— nech tak van vŕšky zavíril —
vše prevesí svoj tmavý fáteľ
a ďubká vo štít ani ďateľ;
uhnúť sa ale hodne dol’
tra, spred schodov keď človek kuká:
i vtedy však len v svetiel zlomku,
čo prebleskujú konármi
sťa strapky, prúžky ľalie,
uvidí obraz nad dverami,
obrázok Panny Márie,
jak k srdcu bôľmi zjatrenému
jej siná pokazuje ruka.

Na horskom poznať ťažkom lemu,
že poludnia je mŕtvy čas;
vo sparne slnca smreky driemu...

Vtom zo dvier zásterôčky jas
sa kmitol — vyšla hájnička.
Kto? pýtate sa; inu, žena
Čajkova — čudno trošička,
lež tak je! V dumu pohrúžená
sa brala; zostúpila dol’
a na poslednom schodíku
prikľakla tvárou ku obrazu.
S tým ku zbožnému podniku
skľúčila tuho chvelé ruky,
povzdychla — a pred slzným zrakom,
Bohorodičky majúc bôľ,
jej všetky kríže, všetky muky,
sa modlí, modlí... Jakby ľakom,
že obrad bojsa naruší,
i potok pozamĺkol zrazu,
sťa prikovaný na reťazu —
kdes’ chŕka v stínnom lopuší.
Len javor sšumel kyvom vánku,
ním v harmónie tichých hrách
kýs’ sviatočný sa prehnal švist:
a jak by zrovna vežou bol,
tak zuní-buní každý list...

— O chvíľu zase vidieť Hanku
vo dverách v inom úkone:
dieťatko niesla na lone,
precitlo z anjelského spánku,
kým vonku dlela — škrn na rtíku,
v ružovom drugá vankúšiku.
Zasadla na bielený prah
a v očiek modro zierajúca,
v ňomž všetka jej slasť, túha vrúca,
nemluvňa drahé kojí, kŕmi...

Vtom pažitnatom na chodníku
krok zašuchotal krpca strmý
a ku chalupe dochádza.
Vzozrela Hanka nedočkave:
„Kto as’ tak prudko stúpa k nám...?“
Bol Michal. Z lesa zbehnul práve;
pokonal včaššie prácu tam,
i prišiel domov, hodne v znoji,
no za širákom tisy chvoj.
Oprel sa o valašku — stojí,
i ziera, tvárou slastný ťah:
jak toten červík rumádza,
nôžkami v neprestajnom boji.
Zrel šťastný otec, v nádejach —
a hľa, naň vzozrel Janíček,
naň očiek rosná nevädza!
Jak zradoval sa, splesal — hoj!
„Ej, tisíc-kyslíc!“ prsty pukol,
i pouhnúc sa k decku priam
smavému, sšimral a mu cmukol:
„Tam si — ej!“ štipnúc do líček...
I matka mľaskla: „Skoro — ham...!
no vzdychla ihneď tichou mukou,
osŕkla, kryjúc duše taj —
pamiatky čierne nebodaj —

Tak tešia sa, hľa, z ratolesti...

I javor zuní o ich štestí...

Podivno! — Tedy neresť stá
už prehrmela nad tým párom
a opäť blaha svitnul máj?
Sú tajné božie cesty veru!
Keď polnoc zhliadne hviezdnatá:
ten javor, jak by ožil čarom,
čudesné šumí o tom vesti;
ba mne sa všetko tak ver’ zdá:
že totam krídly zašelestí
vše z neba zletlý anjel zmieru...

Zbohom

Pozdravujem vás, lesy, hory,
pri odobierke nastokráť!
Zvú života ma prísne chóry,
zve starosť tvrdú na postať —
no i tam budem spomínať:
váš pokľud, až zas musím v boj —
v čas sporu vaše rozhovory —
vo smútku vašich spevcov roj —
a balzam, keď zas budem chorý...
Hej, máte i vy hrmavice,
oblohou čierny žiaľov pás:
no oblak vyplače sa vraz,
zavzlyká, vzlietne — ide ďalej;
a po prestávke krátkej, malej
nad vami vzchádzajúcej zory
tým krajšie zabroneje líce.
Mier privanie zas zhora, zdola,
ihličkou každou perla krás
odvisne, jak by hviezdou bola;
vtom hrdiel zaznie na tisíce
kol, všetko v speve, grúň i laz,
halúzky jak by boli šmytce...
Kam kročíš, myseľ prijme jas
a duša krídla od sokola...
..............
z tej duše pozdravujem vás!
EOT;
}
