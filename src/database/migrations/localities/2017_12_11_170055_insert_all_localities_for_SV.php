<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForSV extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (36, "","Adancata", NOW(), NOW()),
            (36, "","Arbore", NOW(), NOW()),
            (36, "","Baia", NOW(), NOW()),
            (36, "","Bilca", NOW(), NOW()),
            (36, "","Bogdanesti", NOW(), NOW()),
            (36, "","Boroaia", NOW(), NOW()),
            (36, "","Bosanci", NOW(), NOW()),
            (36, "","Botosana", NOW(), NOW()),
            (36, "","Breaza", NOW(), NOW()),
            (36, "","Brodina", NOW(), NOW()),
            (36, "","Brosteni", NOW(), NOW()),
            (36, "","Bunesti", NOW(), NOW()),
            (36, "","Balcauti", NOW(), NOW()),
            (36, "","Cacica", NOW(), NOW()),
            (36, "","Cajvana", NOW(), NOW()),
            (36, "","Calafindesti", NOW(), NOW()),
            (36, "","Capu Campului", NOW(), NOW()),
            (36, "","Ciocanesti", NOW(), NOW()),
            (36, "","Ciprian Porumbescu", NOW(), NOW()),
            (36, "","Comanesti", NOW(), NOW()),
            (36, "","Cornu Luncii", NOW(), NOW()),
            (36, "","Cosna", NOW(), NOW()),
            (36, "","Crucea", NOW(), NOW()),
            (36, "","Campulung Moldovenesc", NOW(), NOW()),
            (36, "","Carlibaba", NOW(), NOW()),
            (36, "","Dolhasca", NOW(), NOW()),
            (36, "","Dorna Candrenilor", NOW(), NOW()),
            (36, "","Dorna-Arini", NOW(), NOW()),
            (36, "","Dornesti", NOW(), NOW()),
            (36, "","Dragoiesti", NOW(), NOW()),
            (36, "","Draguseni", NOW(), NOW()),
            (36, "","Dumbraveni", NOW(), NOW()),
            (36, "","Darmanesti", NOW(), NOW()),
            (36, "","Forasti", NOW(), NOW()),
            (36, "","Frasin", NOW(), NOW()),
            (36, "","Frumosu", NOW(), NOW()),
            (36, "","Fratautii Noi", NOW(), NOW()),
            (36, "","Fratautii Vechi", NOW(), NOW()),
            (36, "","Fundu Moldovei", NOW(), NOW()),
            (36, "","Fantana Mare", NOW(), NOW()),
            (36, "","Fantanele", NOW(), NOW()),
            (36, "","Falticeni", NOW(), NOW()),
            (36, "","Gramesti", NOW(), NOW()),
            (36, "","Granicesti", NOW(), NOW()),
            (36, "","Gura Humorului", NOW(), NOW()),
            (36, "","Galanesti", NOW(), NOW()),
            (36, "","Horodnic de Sus", NOW(), NOW()),
            (36, "","Horodniceni", NOW(), NOW()),
            (36, "","Hantesti", NOW(), NOW()),
            (36, "","Iacobeni", NOW(), NOW()),
            (36, "","Iaslovat", NOW(), NOW()),
            (36, "","Ipotesti", NOW(), NOW()),
            (36, "","Izvoarele Sucevei", NOW(), NOW()),
            (36, "","Liteni", NOW(), NOW()),
            (36, "","Marginea", NOW(), NOW()),
            (36, "","Milisauti", NOW(), NOW()),
            (36, "","Mitocu Dragomirnei", NOW(), NOW()),
            (36, "","Moldova-Sulita", NOW(), NOW()),
            (36, "","Moldovita", NOW(), NOW()),
            (36, "","Musenita", NOW(), NOW()),
            (36, "","Malini", NOW(), NOW()),
            (36, "","Manastirea Humorului", NOW(), NOW()),
            (36, "","Ostra", NOW(), NOW()),
            (36, "","Panaci", NOW(), NOW()),
            (36, "","Poiana Stampei", NOW(), NOW()),
            (36, "","Pojorata", NOW(), NOW()),
            (36, "","Preutesti", NOW(), NOW()),
            (36, "","Putna", NOW(), NOW()),
            (36, "","Partestii de Jos", NOW(), NOW()),
            (36, "","Paltinoasa", NOW(), NOW()),
            (36, "","Patrauti", NOW(), NOW()),
            (36, "","Rasca", NOW(), NOW()),
            (36, "","Radauti", NOW(), NOW()),
            (36, "","Radaseni", NOW(), NOW()),
            (36, "","Sadova", NOW(), NOW()),
            (36, "","Salcea", NOW(), NOW()),
            (36, "","Satu Mare", NOW(), NOW()),
            (36, "","Siminicea", NOW(), NOW()),
            (36, "","Siret", NOW(), NOW()),
            (36, "","Slatina", NOW(), NOW()),
            (36, "","Solca", NOW(), NOW()),
            (36, "","Straja", NOW(), NOW()),
            (36, "","Stroiesti", NOW(), NOW()),
            (36, "","Stulpicani", NOW(), NOW()),
            (36, "","Suceava", NOW(), NOW()),
            (36, "","Sucevita", NOW(), NOW()),
            (36, "","Todiresti", NOW(), NOW()),
            (36, "","Udesti", NOW(), NOW()),
            (36, "","Ulma", NOW(), NOW()),
            (36, "","Vadu Moldovei", NOW(), NOW()),
            (36, "","Valea Moldovei", NOW(), NOW()),
            (36, "","Vama", NOW(), NOW()),
            (36, "","Vatra Dornei", NOW(), NOW()),
            (36, "","Vatra Moldovitei", NOW(), NOW()),
            (36, "","Veresti", NOW(), NOW()),
            (36, "","Vicovu de Jos", NOW(), NOW()),
            (36, "","Vicovu de Sus", NOW(), NOW()),
            (36, "","Volovat", NOW(), NOW()),
            (36, "","Vulturesti", NOW(), NOW()),
            (36, "","Zamostea", NOW(), NOW()),
            (36, "","Zvoristea", NOW(), NOW()),
            (36, "","Scheia", NOW(), NOW()),
            (36, "","Serbauti", NOW(), NOW()),
            (36, "Adancata","Calugareni", NOW(), NOW()),
            (36, "Adancata","Fetesti", NOW(), NOW()),
            (36, "Arbore","Bodnareni", NOW(), NOW()),
            (36, "Arbore","Clit", NOW(), NOW()),
            (36, "Baia","Bogata", NOW(), NOW()),
            (36, "Balcauti","Gropeni", NOW(), NOW()),
            (36, "Balcauti","Negostina", NOW(), NOW()),
            (36, "Boroaia","Barasti", NOW(), NOW()),
            (36, "Boroaia","Giulesti", NOW(), NOW()),
            (36, "Boroaia","Moisa", NOW(), NOW()),
            (36, "Boroaia","Sacuta", NOW(), NOW()),
            (36, "Bosanci","Cumparatura", NOW(), NOW()),
            (36, "Breaza","Breaza de Sus", NOW(), NOW()),
            (36, "Breaza","Parau Negrei", NOW(), NOW()),
            (36, "Brodina","Brodina de Jos", NOW(), NOW()),
            (36, "Brodina","Cununschi", NOW(), NOW()),
            (36, "Brodina","Dubiusca", NOW(), NOW()),
            (36, "Brodina","Ehreste", NOW(), NOW()),
            (36, "Brodina","Falcau", NOW(), NOW()),
            (36, "Brodina","Norocu", NOW(), NOW()),
            (36, "Brodina","Paltin", NOW(), NOW()),
            (36, "Brodina","Sadau", NOW(), NOW()),
            (36, "Brodina","Zalomestra", NOW(), NOW()),
            (36, "Brosteni","Cotargasi", NOW(), NOW()),
            (36, "Brosteni","Darmoxa", NOW(), NOW()),
            (36, "Brosteni","Frasin", NOW(), NOW()),
            (36, "Brosteni","Holda", NOW(), NOW()),
            (36, "Brosteni","Holdita", NOW(), NOW()),
            (36, "Brosteni","Haleasa", NOW(), NOW()),
            (36, "Brosteni","Lungeni", NOW(), NOW()),
            (36, "Brosteni","Neagra", NOW(), NOW()),
            (36, "Brosteni","Pietroasa", NOW(), NOW()),
            (36, "Bunesti","Petia", NOW(), NOW()),
            (36, "Bunesti","Podeni", NOW(), NOW()),
            (36, "Bunesti","Uncesti", NOW(), NOW()),
            (36, "Bunesti","Ses", NOW(), NOW()),
            (36, "Cacica","Maidan", NOW(), NOW()),
            (36, "Cacica","Partestii de Sus", NOW(), NOW()),
            (36, "Cacica","Runcu", NOW(), NOW()),
            (36, "Cacica","Solonetu Nou", NOW(), NOW()),
            (36, "Cajvana","Codru", NOW(), NOW()),
            (36, "Calafindesti","Botosanita Mare", NOW(), NOW()),
            (36, "Carlibaba","Carlibaba Noua", NOW(), NOW()),
            (36, "Carlibaba","Iedu", NOW(), NOW()),
            (36, "Carlibaba","Valea Stanei", NOW(), NOW()),
            (36, "Carlibaba","Sesuri", NOW(), NOW()),
            (36, "Carlibaba","Tibau", NOW(), NOW()),
            (36, "Ciocanesti","Botos", NOW(), NOW()),
            (36, "Ciprian Porumbescu","Brasca", NOW(), NOW()),
            (36, "Ciprian Porumbescu","Balaceana", NOW(), NOW()),
            (36, "Ciprian Porumbescu","Ilisesti", NOW(), NOW()),
            (36, "Comanesti","Humoreni", NOW(), NOW()),
            (36, "Cornu Luncii","Braiesti", NOW(), NOW()),
            (36, "Cornu Luncii","Baisesti", NOW(), NOW()),
            (36, "Cornu Luncii","Dumbrava", NOW(), NOW()),
            (36, "Cornu Luncii","Paiseni", NOW(), NOW()),
            (36, "Cornu Luncii","Sasca Mare", NOW(), NOW()),
            (36, "Cornu Luncii","Sasca Mica", NOW(), NOW()),
            (36, "Cornu Luncii","Sasca Noua", NOW(), NOW()),
            (36, "Cornu Luncii","Sinca", NOW(), NOW()),
            (36, "Cosna","Podu Cosnei", NOW(), NOW()),
            (36, "Cosna","Romanesti", NOW(), NOW()),
            (36, "Cosna","Tesna", NOW(), NOW()),
            (36, "Cosna","Valea Bancului", NOW(), NOW()),
            (36, "Crucea","Chiril", NOW(), NOW()),
            (36, "Crucea","Cojoci", NOW(), NOW()),
            (36, "Crucea","Satu Mare", NOW(), NOW()),
            (36, "Darmanesti","Calinesti", NOW(), NOW()),
            (36, "Darmanesti","Calinesti-Vasilache", NOW(), NOW()),
            (36, "Darmanesti","Danila", NOW(), NOW()),
            (36, "Darmanesti","Maritei", NOW(), NOW()),
            (36, "Darmanesti","Mariteia Mica", NOW(), NOW()),
            (36, "Dolhasca","Budeni", NOW(), NOW()),
            (36, "Dolhasca","Gulia", NOW(), NOW()),
            (36, "Dolhasca","Poiana", NOW(), NOW()),
            (36, "Dolhasca","Poienari", NOW(), NOW()),
            (36, "Dolhasca","Probota", NOW(), NOW()),
            (36, "Dolhasca","Silistea Noua", NOW(), NOW()),
            (36, "Dolhasca","Valea Poienei", NOW(), NOW()),
            (36, "Dolhesti","Dolhestii Mici", NOW(), NOW()),
            (36, "Dolhesti","Dolhestii-Mari", NOW(), NOW()),
            (36, "Dolhesti","Valea Bourei", NOW(), NOW()),
            (36, "Dorna Candrenilor","Dealu Floreni", NOW(), NOW()),
            (36, "Dorna Candrenilor","Poiana Negrii", NOW(), NOW()),
            (36, "Dorna-Arini","Cozanesti", NOW(), NOW()),
            (36, "Dorna-Arini","Gheorghiteni", NOW(), NOW()),
            (36, "Dorna-Arini","Ortoaia", NOW(), NOW()),
            (36, "Dorna-Arini","Rusca", NOW(), NOW()),
            (36, "Dorna-Arini","Sunatori", NOW(), NOW()),
            (36, "Dornesti","Iaz", NOW(), NOW()),
            (36, "Dragoiesti","Berchisesti", NOW(), NOW()),
            (36, "Dragoiesti","Corlata", NOW(), NOW()),
            (36, "Dragoiesti","Lucacesti", NOW(), NOW()),
            (36, "Dragoiesti","Mazanaesti", NOW(), NOW()),
            (36, "Draguseni","Brosteni", NOW(), NOW()),
            (36, "Draguseni","Gara Leu", NOW(), NOW()),
            (36, "Dumbraveni","Salageni", NOW(), NOW()),
            (36, "Falticeni","Soldanesti", NOW(), NOW()),
            (36, "Falticeni","Tarna Mare", NOW(), NOW()),
            (36, "Fantana Mare","Cotu Baii", NOW(), NOW()),
            (36, "Fantana Mare","Praxia", NOW(), NOW()),
            (36, "Fantana Mare","Spataresti", NOW(), NOW()),
            (36, "Fantanele","Banesti", NOW(), NOW()),
            (36, "Fantanele","Cotu Dobei", NOW(), NOW()),
            (36, "Fantanele","Slobozia", NOW(), NOW()),
            (36, "Fantanele","Stamate", NOW(), NOW()),
            (36, "Forasti","Antoceni", NOW(), NOW()),
            (36, "Forasti","Boura", NOW(), NOW()),
            (36, "Forasti","Manolea", NOW(), NOW()),
            (36, "Forasti","Oniceni", NOW(), NOW()),
            (36, "Forasti","Rosiori", NOW(), NOW()),
            (36, "Forasti","Rusi", NOW(), NOW()),
            (36, "Forasti","Uidesti", NOW(), NOW()),
            (36, "Forasti","Tolesti", NOW(), NOW()),
            (36, "Frasin","Bucsoaia", NOW(), NOW()),
            (36, "Frasin","Doroteia", NOW(), NOW()),
            (36, "Frasin","Plutonita", NOW(), NOW()),
            (36, "Fratautii Noi","Costisa", NOW(), NOW()),
            (36, "Fratautii Vechi","Maneuti", NOW(), NOW()),
            (36, "Frumosu","Deia", NOW(), NOW()),
            (36, "Frumosu","Dragosa", NOW(), NOW()),
            (36, "Fundu Moldovei","Botus", NOW(), NOW()),
            (36, "Fundu Moldovei","Botusel", NOW(), NOW()),
            (36, "Fundu Moldovei","Branistea", NOW(), NOW()),
            (36, "Fundu Moldovei","Colacu", NOW(), NOW()),
            (36, "Fundu Moldovei","Delnita", NOW(), NOW()),
            (36, "Fundu Moldovei","Delut", NOW(), NOW()),
            (36, "Fundu Moldovei","Obcina", NOW(), NOW()),
            (36, "Fundu Moldovei","Plai", NOW(), NOW()),
            (36, "Fundu Moldovei","Smida Ungurenilor", NOW(), NOW()),
            (36, "Galanesti","Hurjuieni", NOW(), NOW()),
            (36, "Galanesti","Voitinel", NOW(), NOW()),
            (36, "Gramesti","Botosanita Mica", NOW(), NOW()),
            (36, "Gramesti","Balinesti", NOW(), NOW()),
            (36, "Gramesti","Rudesti", NOW(), NOW()),
            (36, "Gramesti","Verbia", NOW(), NOW()),
            (36, "Granicesti","Dumbrava", NOW(), NOW()),
            (36, "Granicesti","Gura Solcii", NOW(), NOW()),
            (36, "Granicesti","Iacobesti", NOW(), NOW()),
            (36, "Granicesti","Romanesti", NOW(), NOW()),
            (36, "Granicesti","Slobozia Sucevei", NOW(), NOW()),
            (36, "Gura Humorului","Voronet", NOW(), NOW()),
            (36, "Hantesti","Artari", NOW(), NOW()),
            (36, "Hantesti","Beresti", NOW(), NOW()),
            (36, "Horodnic","Horodnic de Jos", NOW(), NOW()),
            (36, "Horodniceni","Botesti", NOW(), NOW()),
            (36, "Horodniceni","Bradatel", NOW(), NOW()),
            (36, "Horodniceni","Mihaiesti", NOW(), NOW()),
            (36, "Horodniceni","Rotopanesti", NOW(), NOW()),
            (36, "Iacobeni","Mestecanis", NOW(), NOW()),
            (36, "Ipotesti","Lisaura", NOW(), NOW()),
            (36, "Ipotesti","Tisauti", NOW(), NOW()),
            (36, "Izvoarele Sucevei","Bobeica", NOW(), NOW()),
            (36, "Izvoarele Sucevei","Brodina", NOW(), NOW()),
            (36, "Liteni","Corni", NOW(), NOW()),
            (36, "Liteni","Rotunda", NOW(), NOW()),
            (36, "Liteni","Roscani", NOW(), NOW()),
            (36, "Liteni","Silistea", NOW(), NOW()),
            (36, "Liteni","Vercicani", NOW(), NOW()),
            (36, "Malini","Iesle", NOW(), NOW()),
            (36, "Malini","Poiana Marului", NOW(), NOW()),
            (36, "Malini","Paraie", NOW(), NOW()),
            (36, "Malini","Valeni-Stanisoara", NOW(), NOW()),
            (36, "Manastirea Humorului","Plesa", NOW(), NOW()),
            (36, "Manastirea Humorului","Poiana Micului", NOW(), NOW()),
            (36, "Milisauti","Badeuti", NOW(), NOW()),
            (36, "Milisauti","Gara", NOW(), NOW()),
            (36, "Milisauti","Lunca", NOW(), NOW()),
            (36, "Mitocu Dragomirnei","Dragomirna", NOW(), NOW()),
            (36, "Mitocu Dragomirnei","Lipoveni", NOW(), NOW()),
            (36, "Mitocu Dragomirnei","Mitocasi", NOW(), NOW()),
            (36, "Moara","Bulai", NOW(), NOW()),
            (36, "Moara","Frumoasa", NOW(), NOW()),
            (36, "Moara","Groapa Vladichii", NOW(), NOW()),
            (36, "Moara","Liteni", NOW(), NOW()),
            (36, "Moara","Moara Carp", NOW(), NOW()),
            (36, "Moara","Moara Nica", NOW(), NOW()),
            (36, "Moara","Vornicenii Mari", NOW(), NOW()),
            (36, "Moara","Vornicenii Mici", NOW(), NOW()),
            (36, "Moldova-Sulita","Benia", NOW(), NOW()),
            (36, "Moldovita","Argel", NOW(), NOW()),
            (36, "Moldovita","Demacusa", NOW(), NOW()),
            (36, "Moldovita","Rasca", NOW(), NOW()),
            (36, "Musenita","Bainet", NOW(), NOW()),
            (36, "Musenita","Bancesti", NOW(), NOW()),
            (36, "Musenita","Climauti", NOW(), NOW()),
            (36, "Musenita","Vicsani", NOW(), NOW()),
            (36, "Musenita","Vascauti", NOW(), NOW()),
            (36, "Ostra","Tarnicioara", NOW(), NOW()),
            (36, "Paltinoasa","Capu Codrului", NOW(), NOW()),
            (36, "Panaci","Catrinari", NOW(), NOW()),
            (36, "Panaci","Coverca", NOW(), NOW()),
            (36, "Panaci","Dragoiasa", NOW(), NOW()),
            (36, "Panaci","Glodu", NOW(), NOW()),
            (36, "Panaci","Paltinis", NOW(), NOW()),
            (36, "Partestii De Jos","Deleni", NOW(), NOW()),
            (36, "Partestii De Jos","Varvata", NOW(), NOW()),
            (36, "Partestii De Jos","Varfu Dealului", NOW(), NOW()),
            (36, "Poiana Stampei","Casoi", NOW(), NOW()),
            (36, "Poiana Stampei","Dornisoara", NOW(), NOW()),
            (36, "Poiana Stampei","Pilugani", NOW(), NOW()),
            (36, "Poiana Stampei","Praleni", NOW(), NOW()),
            (36, "Poiana Stampei","Tesna", NOW(), NOW()),
            (36, "Poiana Stampei","Tataru", NOW(), NOW()),
            (36, "Pojorata","Valea Putnei", NOW(), NOW()),
            (36, "Preutesti","Arghira", NOW(), NOW()),
            (36, "Preutesti","Bahna Arin", NOW(), NOW()),
            (36, "Preutesti","Basarabi", NOW(), NOW()),
            (36, "Preutesti","Husi", NOW(), NOW()),
            (36, "Preutesti","Hartop", NOW(), NOW()),
            (36, "Preutesti","Leucusesti", NOW(), NOW()),
            (36, "Putna","Gura Putnei", NOW(), NOW()),
            (36, "Radaseni","Lamaseni", NOW(), NOW()),
            (36, "Radaseni","Pocoleni", NOW(), NOW()),
            (36, "Rasca","Buda", NOW(), NOW()),
            (36, "Rasca","Dumbraveni", NOW(), NOW()),
            (36, "Rasca","Jahalia", NOW(), NOW()),
            (36, "Rasca","Slatioara", NOW(), NOW()),
            (36, "Salcea","Mereni", NOW(), NOW()),
            (36, "Salcea","Plopeni", NOW(), NOW()),
            (36, "Salcea","Prelipca", NOW(), NOW()),
            (36, "Salcea","Varatec", NOW(), NOW()),
            (36, "Saru Dornei","Gura Haitii", NOW(), NOW()),
            (36, "Saru Dornei","Neagra Sarului", NOW(), NOW()),
            (36, "Saru Dornei","Plaiu Sarului", NOW(), NOW()),
            (36, "Saru Dornei","Sarisor", NOW(), NOW()),
            (36, "Saru Dornei","Sarisoru Mare", NOW(), NOW()),
            (36, "Saru Dornei","Saru Bucovinei", NOW(), NOW()),
            (36, "Saru Dornei","Sarul Dornei", NOW(), NOW()),
            (36, "Satu Mare","Tibeni", NOW(), NOW()),
            (36, "Scheia","Florinta", NOW(), NOW()),
            (36, "Scheia","Mihoveni", NOW(), NOW()),
            (36, "Scheia","Sfantu Ilie", NOW(), NOW()),
            (36, "Scheia","Trei Movile", NOW(), NOW()),
            (36, "Serbauti","Calinesti", NOW(), NOW()),
            (36, "Siminicea","Grigoresti", NOW(), NOW()),
            (36, "Siret","Manastioara", NOW(), NOW()),
            (36, "Siret","Padureni", NOW(), NOW()),
            (36, "Slatina","Gainesti", NOW(), NOW()),
            (36, "Slatina","Herla", NOW(), NOW()),
            (36, "Solca","Poieni-Solca", NOW(), NOW()),
            (36, "Stroiesti","Valcelele", NOW(), NOW()),
            (36, "Stroiesti","Zaharesti", NOW(), NOW()),
            (36, "Stulpicani","Gemenea", NOW(), NOW()),
            (36, "Stulpicani","Negrileasa", NOW(), NOW()),
            (36, "Stulpicani","Slatioara", NOW(), NOW()),
            (36, "Stulpicani","Vadu Negrilesei", NOW(), NOW()),
            (36, "Sucevita","Voievodeasa", NOW(), NOW()),
            (36, "Todiresti","Costana", NOW(), NOW()),
            (36, "Todiresti","Parhauti", NOW(), NOW()),
            (36, "Todiresti","Solonet", NOW(), NOW()),
            (36, "Todiresti","Sarghiesti", NOW(), NOW()),
            (36, "Udesti","Chiliseni", NOW(), NOW()),
            (36, "Udesti","Luncusoara", NOW(), NOW()),
            (36, "Udesti","Manastioara", NOW(), NOW()),
            (36, "Udesti","Plavalari", NOW(), NOW()),
            (36, "Udesti","Poieni-Suceava", NOW(), NOW()),
            (36, "Udesti","Racova", NOW(), NOW()),
            (36, "Udesti","Reuseni", NOW(), NOW()),
            (36, "Udesti","Rusii-Manastioara", NOW(), NOW()),
            (36, "Udesti","Securiceni", NOW(), NOW()),
            (36, "Udesti","Stirbat", NOW(), NOW()),
            (36, "Ulma","Costileva", NOW(), NOW()),
            (36, "Ulma","Lupcina", NOW(), NOW()),
            (36, "Ulma","Magura", NOW(), NOW()),
            (36, "Ulma","Nisipitu", NOW(), NOW()),
            (36, "Vadu Moldovei","Ciumulesti", NOW(), NOW()),
            (36, "Vadu Moldovei","Camarzani", NOW(), NOW()),
            (36, "Vadu Moldovei","Dumbravita", NOW(), NOW()),
            (36, "Vadu Moldovei","Ioneasa", NOW(), NOW()),
            (36, "Vadu Moldovei","Mesteceni", NOW(), NOW()),
            (36, "Vadu Moldovei","Movileni", NOW(), NOW()),
            (36, "Vadu Moldovei","Nigotesti", NOW(), NOW()),
            (36, "Valea Moldovei","Mironu", NOW(), NOW()),
            (36, "Vama","Molid", NOW(), NOW()),
            (36, "Vama","Prisaca Dornei", NOW(), NOW()),
            (36, "Vama","Stramtura", NOW(), NOW()),
            (36, "Vatra Dornei","Argestru", NOW(), NOW()),
            (36, "Vatra Dornei","Rosu", NOW(), NOW()),
            (36, "Vatra Dornei","Todireni", NOW(), NOW()),
            (36, "Vatra Moldovitei","Ciumarna", NOW(), NOW()),
            (36, "Vatra Moldovitei","Paltinu", NOW(), NOW()),
            (36, "Veresti","Bursuceni", NOW(), NOW()),
            (36, "Veresti","Corocaiesti", NOW(), NOW()),
            (36, "Veresti","Hancea", NOW(), NOW()),
            (36, "Vicovu De Sus","Bivolaria", NOW(), NOW()),
            (36, "Volovat","Burla", NOW(), NOW()),
            (36, "Vulturesti","Giurgesti", NOW(), NOW()),
            (36, "Vulturesti","Hreatca", NOW(), NOW()),
            (36, "Vulturesti","Jacota", NOW(), NOW()),
            (36, "Vulturesti","Meresti", NOW(), NOW()),
            (36, "Vulturesti","Osoi", NOW(), NOW()),
            (36, "Vulturesti","Plesesti", NOW(), NOW()),
            (36, "Vulturesti","Valea Glodului", NOW(), NOW()),
            (36, "Zamostea","Badragi", NOW(), NOW()),
            (36, "Zamostea","Ciomartan", NOW(), NOW()),
            (36, "Zamostea","Cojocareni", NOW(), NOW()),
            (36, "Zamostea","Corpaci", NOW(), NOW()),
            (36, "Zamostea","Lunca", NOW(), NOW()),
            (36, "Zamostea","Nicani", NOW(), NOW()),
            (36, "Zamostea","Rauteni", NOW(), NOW()),
            (36, "Zamostea","Tautesti", NOW(), NOW()),
            (36, "Zvoristea","Buda", NOW(), NOW()),
            (36, "Zvoristea","Dealu", NOW(), NOW()),
            (36, "Zvoristea","Poiana", NOW(), NOW()),
            (36, "Zvoristea","Slobozia", NOW(), NOW()),
            (36, "Zvoristea","Stanca", NOW(), NOW()),
            (36, "Zvoristea","Stancuta", NOW(), NOW()),
            (36, "Zvoristea","Serbanesti", NOW(), NOW())
        ;';
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = "DELETE FROM localities WHERE county_id=36;";
        DB::connection()->getPdo()->exec($sql);
    }
}