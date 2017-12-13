<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForCJ extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql='INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (13, "","Aghiresu", NOW(), NOW()),
            (13, "","Aiton", NOW(), NOW()),
            (13, "","Alunis", NOW(), NOW()),
            (13, "","Apahida", NOW(), NOW()),
            (13, "","Baciu", NOW(), NOW()),
            (13, "","Belis", NOW(), NOW()),
            (13, "","Bobalna", NOW(), NOW()),
            (13, "","Bontida", NOW(), NOW()),
            (13, "","Borsa", NOW(), NOW()),
            (13, "","Buza", NOW(), NOW()),
            (13, "","Baisoara", NOW(), NOW()),
            (13, "","Ceanu Mare", NOW(), NOW()),
            (13, "","Chinteni", NOW(), NOW()),
            (13, "","Chiuiesti", NOW(), NOW()),
            (13, "","Ciucea", NOW(), NOW()),
            (13, "","Ciurila", NOW(), NOW()),
            (13, "","Cluj-Napoca", NOW(), NOW()),
            (13, "","Cojocna", NOW(), NOW()),
            (13, "","Cornesti", NOW(), NOW()),
            (13, "","Cuzdrioara", NOW(), NOW()),
            (13, "","Campia Turzii", NOW(), NOW()),
            (13, "","Catcau", NOW(), NOW()),
            (13, "","Caianu", NOW(), NOW()),
            (13, "","Calarasi", NOW(), NOW()),
            (13, "","Calatele", NOW(), NOW()),
            (13, "","Camarasu", NOW(), NOW()),
            (13, "","Capusu Mare", NOW(), NOW()),
            (13, "","Catina", NOW(), NOW()),
            (13, "","Caseiu", NOW(), NOW()),
            (13, "","Dej", NOW(), NOW()),
            (13, "","Dabaca", NOW(), NOW()),
            (13, "","Feleacu", NOW(), NOW()),
            (13, "","Fizesu Gherlii", NOW(), NOW()),
            (13, "","Floresti", NOW(), NOW()),
            (13, "","Frata", NOW(), NOW()),
            (13, "","Geaca", NOW(), NOW()),
            (13, "","Gherla", NOW(), NOW()),
            (13, "","Gilau", NOW(), NOW()),
            (13, "","Garbau", NOW(), NOW()),
            (13, "","Huedin", NOW(), NOW()),
            (13, "","Iara", NOW(), NOW()),
            (13, "","Iclod", NOW(), NOW()),
            (13, "","Izvoru Crisului", NOW(), NOW()),
            (13, "","Jichisu de Jos", NOW(), NOW()),
            (13, "","Luna", NOW(), NOW()),
            (13, "","Mica", NOW(), NOW()),
            (13, "","Mihai Viteazu", NOW(), NOW()),
            (13, "","Mintiu Gherlii", NOW(), NOW()),
            (13, "","Mociu", NOW(), NOW()),
            (13, "","Moldovenesti", NOW(), NOW()),
            (13, "","Maguri-Racatau", NOW(), NOW()),
            (13, "","Manastireni", NOW(), NOW()),
            (13, "","Margau", NOW(), NOW()),
            (13, "","Marisel", NOW(), NOW()),
            (13, "","Negreni", NOW(), NOW()),
            (13, "","Panticeu", NOW(), NOW()),
            (13, "","Petrestii de Jos", NOW(), NOW()),
            (13, "","Ploscos", NOW(), NOW()),
            (13, "","Poieni", NOW(), NOW()),
            (13, "","Palatca", NOW(), NOW()),
            (13, "","Recea-Cristur", NOW(), NOW()),
            (13, "","Risca", NOW(), NOW()),
            (13, "","Sic", NOW(), NOW()),
            (13, "","Suatu", NOW(), NOW()),
            (13, "","Sancraiu", NOW(), NOW()),
            (13, "","Sanmartin", NOW(), NOW()),
            (13, "","Sanpaul", NOW(), NOW()),
            (13, "","Sacuieu", NOW(), NOW()),
            (13, "","Sandulesti", NOW(), NOW()),
            (13, "","Savadisla", NOW(), NOW()),
            (13, "","Tritenii de Jos", NOW(), NOW()),
            (13, "","Turda", NOW(), NOW()),
            (13, "","Tureni", NOW(), NOW()),
            (13, "","Unguras", NOW(), NOW()),
            (13, "","Vad", NOW(), NOW()),
            (13, "","Valea Ierii", NOW(), NOW()),
            (13, "","Viisoara", NOW(), NOW()),
            (13, "","Vultureni", NOW(), NOW()),
            (13, "","Taga", NOW(), NOW()),
            (13, "Aghiresu","Aghiresu-Fabrici", NOW(), NOW()),
            (13, "Aghiresu","Arghisu", NOW(), NOW()),
            (13, "Aghiresu","Bagara", NOW(), NOW()),
            (13, "Aghiresu","Doroltu", NOW(), NOW()),
            (13, "Aghiresu","Dancu", NOW(), NOW()),
            (13, "Aghiresu","Inucu", NOW(), NOW()),
            (13, "Aghiresu","Leghia", NOW(), NOW()),
            (13, "Aghiresu","Macau", NOW(), NOW()),
            (13, "Aghiresu","Ticu", NOW(), NOW()),
            (13, "Aghiresu","Ticu-Colonie", NOW(), NOW()),
            (13, "Aiton","Rediu", NOW(), NOW()),
            (13, "Alunis","Corneni", NOW(), NOW()),
            (13, "Alunis","Ghirolt", NOW(), NOW()),
            (13, "Alunis","Pruneni", NOW(), NOW()),
            (13, "Alunis","Vale", NOW(), NOW()),
            (13, "Apahida","Bodrog", NOW(), NOW()),
            (13, "Apahida","Corpadea", NOW(), NOW()),
            (13, "Apahida","Campenesti", NOW(), NOW()),
            (13, "Apahida","Dezmir", NOW(), NOW()),
            (13, "Apahida","Pata", NOW(), NOW()),
            (13, "Apahida","Sub Coasta", NOW(), NOW()),
            (13, "Apahida","Sannicoara", NOW(), NOW()),
            (13, "Aschileu","Cristorel", NOW(), NOW()),
            (13, "Aschileu","Dorna", NOW(), NOW()),
            (13, "Aschileu","Fodora", NOW(), NOW()),
            (13, "Aschileu","Aschileu Mare", NOW(), NOW()),
            (13, "Aschileu","Aschileu Mic", NOW(), NOW()),
            (13, "Baciu","Corusu", NOW(), NOW()),
            (13, "Baciu","Mera", NOW(), NOW()),
            (13, "Baciu","Popesti", NOW(), NOW()),
            (13, "Baciu","Radaia", NOW(), NOW()),
            (13, "Baciu","Suceagu", NOW(), NOW()),
            (13, "Baciu","Salistea Noua", NOW(), NOW()),
            (13, "Baisoara","Frasinet", NOW(), NOW()),
            (13, "Baisoara","Moara de Padure", NOW(), NOW()),
            (13, "Baisoara","Muntele Bocului", NOW(), NOW()),
            (13, "Baisoara","Muntele Baisorii", NOW(), NOW()),
            (13, "Baisoara","Muntele Cacovei", NOW(), NOW()),
            (13, "Baisoara","Muntele Filii", NOW(), NOW()),
            (13, "Baisoara","Muntele Sacelului", NOW(), NOW()),
            (13, "Baisoara","Sacel", NOW(), NOW()),
            (13, "Belis","Balcesti", NOW(), NOW()),
            (13, "Belis","Dealu Botii", NOW(), NOW()),
            (13, "Belis","Giurcuta de Jos", NOW(), NOW()),
            (13, "Belis","Giurcuta de Sus", NOW(), NOW()),
            (13, "Belis","Poiana Horea", NOW(), NOW()),
            (13, "Belis","Smida", NOW(), NOW()),
            (13, "Bobalna","Antas", NOW(), NOW()),
            (13, "Bobalna","Blidaresti", NOW(), NOW()),
            (13, "Bobalna","Babdiu", NOW(), NOW()),
            (13, "Bobalna","Cremenea", NOW(), NOW()),
            (13, "Bobalna","Maia", NOW(), NOW()),
            (13, "Bobalna","Osorhel", NOW(), NOW()),
            (13, "Bobalna","Pruni", NOW(), NOW()),
            (13, "Bobalna","Razbuneni", NOW(), NOW()),
            (13, "Bobalna","Suaras", NOW(), NOW()),
            (13, "Bobalna","Valcelele", NOW(), NOW()),
            (13, "Bontida","Coasta", NOW(), NOW()),
            (13, "Bontida","Rascruci", NOW(), NOW()),
            (13, "Bontida","Tauseni", NOW(), NOW()),
            (13, "Borsa","Borsa-Crestaia", NOW(), NOW()),
            (13, "Borsa","Borsa-Catun", NOW(), NOW()),
            (13, "Borsa","Ciumafaia", NOW(), NOW()),
            (13, "Borsa","Giula", NOW(), NOW()),
            (13, "Buza","Rotunda", NOW(), NOW()),
            (13, "Caianu","Barai", NOW(), NOW()),
            (13, "Caianu","Caianu Mic", NOW(), NOW()),
            (13, "Caianu","Caianu-Vama", NOW(), NOW()),
            (13, "Caianu","Vaida-Camaras", NOW(), NOW()),
            (13, "Caianu","Valeni", NOW(), NOW()),
            (13, "Calarasi","Bogata", NOW(), NOW()),
            (13, "Calarasi","Calarasi-Gara", NOW(), NOW()),
            (13, "Calatele","Calata", NOW(), NOW()),
            (13, "Calatele","Dealu Negru", NOW(), NOW()),
            (13, "Calatele","Finciu", NOW(), NOW()),
            (13, "Calatele","Valeni", NOW(), NOW()),
            (13, "Camarasu","Naoiu", NOW(), NOW()),
            (13, "Camarasu","Samboleni", NOW(), NOW()),
            (13, "Capusu Mare","Agarbiciu", NOW(), NOW()),
            (13, "Capusu Mare","Balcesti", NOW(), NOW()),
            (13, "Capusu Mare","Capusu Mic", NOW(), NOW()),
            (13, "Capusu Mare","Dumbrava", NOW(), NOW()),
            (13, "Capusu Mare","Dangau Mare", NOW(), NOW()),
            (13, "Capusu Mare","Dangau Mic", NOW(), NOW()),
            (13, "Capusu Mare","Paniceni", NOW(), NOW()),
            (13, "Capusu Mare","Straja", NOW(), NOW()),
            (13, "Caseiu","Comorata", NOW(), NOW()),
            (13, "Caseiu","Coplean", NOW(), NOW()),
            (13, "Caseiu","Custura", NOW(), NOW()),
            (13, "Caseiu","Guga", NOW(), NOW()),
            (13, "Caseiu","Garbau Dejului", NOW(), NOW()),
            (13, "Caseiu","Leurda", NOW(), NOW()),
            (13, "Caseiu","Rugasesti", NOW(), NOW()),
            (13, "Caseiu","Salatruc", NOW(), NOW()),
            (13, "Caseiu","Urisor", NOW(), NOW()),
            (13, "Catcau","Muncel", NOW(), NOW()),
            (13, "Catcau","Salisca", NOW(), NOW()),
            (13, "Catina","Copru", NOW(), NOW()),
            (13, "Catina","Feldioara", NOW(), NOW()),
            (13, "Catina","Hagau", NOW(), NOW()),
            (13, "Catina","Hodaie", NOW(), NOW()),
            (13, "Catina","Valea Calda", NOW(), NOW()),
            (13, "Ceanu Mare","Andici", NOW(), NOW()),
            (13, "Ceanu Mare","Boian", NOW(), NOW()),
            (13, "Ceanu Mare","Boldut", NOW(), NOW()),
            (13, "Ceanu Mare","Ciurgau", NOW(), NOW()),
            (13, "Ceanu Mare","Dosu Napului", NOW(), NOW()),
            (13, "Ceanu Mare","Fanate", NOW(), NOW()),
            (13, "Ceanu Mare","Hodai Boian", NOW(), NOW()),
            (13, "Ceanu Mare","Iacobeni", NOW(), NOW()),
            (13, "Ceanu Mare","Mortesti", NOW(), NOW()),
            (13, "Ceanu Mare","Strucut", NOW(), NOW()),
            (13, "Ceanu Mare","Starcu", NOW(), NOW()),
            (13, "Ceanu Mare","Valea lui Cati", NOW(), NOW()),
            (13, "Chinteni","Deusu", NOW(), NOW()),
            (13, "Chinteni","Feiurdeni", NOW(), NOW()),
            (13, "Chinteni","Macicasu", NOW(), NOW()),
            (13, "Chinteni","Padureni", NOW(), NOW()),
            (13, "Chinteni","Satu Lung", NOW(), NOW()),
            (13, "Chinteni","Sanmartin", NOW(), NOW()),
            (13, "Chinteni","Salistea Veche", NOW(), NOW()),
            (13, "Chinteni","Vechea", NOW(), NOW()),
            (13, "Chiuiesti","Dosu Bricii", NOW(), NOW()),
            (13, "Chiuiesti","Huta", NOW(), NOW()),
            (13, "Chiuiesti","Magoaja", NOW(), NOW()),
            (13, "Chiuiesti","Strambu", NOW(), NOW()),
            (13, "Chiuiesti","Valea Caseielului", NOW(), NOW()),
            (13, "Chiuiesti","Valea lui Opris", NOW(), NOW()),
            (13, "Ciucea","Vanatori", NOW(), NOW()),
            (13, "Ciurila","Filea de Jos", NOW(), NOW()),
            (13, "Ciurila","Filea de Sus", NOW(), NOW()),
            (13, "Ciurila","Prunis", NOW(), NOW()),
            (13, "Ciurila","Padureni", NOW(), NOW()),
            (13, "Ciurila","Salicea", NOW(), NOW()),
            (13, "Ciurila","Saliste", NOW(), NOW()),
            (13, "Ciurila","Sutu", NOW(), NOW()),
            (13, "Cojocna","Boj-Catun", NOW(), NOW()),
            (13, "Cojocna","Boju", NOW(), NOW()),
            (13, "Cojocna","Cara", NOW(), NOW()),
            (13, "Cojocna","Huci", NOW(), NOW()),
            (13, "Cojocna","Iuriu de Campie", NOW(), NOW()),
            (13, "Cojocna","Moristi", NOW(), NOW()),
            (13, "Cojocna","Straja", NOW(), NOW()),
            (13, "Cornesti","Barlea", NOW(), NOW()),
            (13, "Cornesti","Igritia", NOW(), NOW()),
            (13, "Cornesti","Lujerdiu", NOW(), NOW()),
            (13, "Cornesti","Morau", NOW(), NOW()),
            (13, "Cornesti","Stoiana", NOW(), NOW()),
            (13, "Cornesti","Tiocu de Jos", NOW(), NOW()),
            (13, "Cornesti","Tiocu de Sus", NOW(), NOW()),
            (13, "Cornesti","Tioltiur", NOW(), NOW()),
            (13, "Cuzdrioara","Manasturel", NOW(), NOW()),
            (13, "Cuzdrioara","Valea Garboului", NOW(), NOW()),
            (13, "Dabaca","Luna de Jos", NOW(), NOW()),
            (13, "Dabaca","Paglisa", NOW(), NOW()),
            (13, "Dej","Ocna Dejului", NOW(), NOW()),
            (13, "Dej","Pestera", NOW(), NOW()),
            (13, "Dej","Pintic", NOW(), NOW()),
            (13, "Dej","Somcutu Mic", NOW(), NOW()),
            (13, "Feleacu","Casele Micesti", NOW(), NOW()),
            (13, "Feleacu","Gheorghieni", NOW(), NOW()),
            (13, "Feleacu","Saradis", NOW(), NOW()),
            (13, "Feleacu","Valcele", NOW(), NOW()),
            (13, "Fizesu Gherlii","Bont", NOW(), NOW()),
            (13, "Fizesu Gherlii","Lunca Bontului", NOW(), NOW()),
            (13, "Fizesu Gherlii","Nicula", NOW(), NOW()),
            (13, "Fizesu Gherlii","Sacalaia", NOW(), NOW()),
            (13, "Floresti","Luna de Sus", NOW(), NOW()),
            (13, "Floresti","Tauti", NOW(), NOW()),
            (13, "Frata","Berchiesu", NOW(), NOW()),
            (13, "Frata","Oas", NOW(), NOW()),
            (13, "Frata","Olariu", NOW(), NOW()),
            (13, "Frata","Poiana Fratii", NOW(), NOW()),
            (13, "Frata","Padurea Iacobeni", NOW(), NOW()),
            (13, "Frata","Razoare", NOW(), NOW()),
            (13, "Frata","Soporu de Campie", NOW(), NOW()),
            (13, "Garbau","Cornesti", NOW(), NOW()),
            (13, "Garbau","Nadaselu", NOW(), NOW()),
            (13, "Garbau","Turea", NOW(), NOW()),
            (13, "Garbau","Vistea", NOW(), NOW()),
            (13, "Geaca","Chiris", NOW(), NOW()),
            (13, "Geaca","Lacu", NOW(), NOW()),
            (13, "Geaca","Legii", NOW(), NOW()),
            (13, "Geaca","Puini", NOW(), NOW()),
            (13, "Geaca","Sucutard", NOW(), NOW()),
            (13, "Gherla","Baita", NOW(), NOW()),
            (13, "Gherla","Hasdate", NOW(), NOW()),
            (13, "Gherla","Silivas", NOW(), NOW()),
            (13, "Gilau","Somesu Cald", NOW(), NOW()),
            (13, "Gilau","Somesu Rece", NOW(), NOW()),
            (13, "Huedin","Bicalatu", NOW(), NOW()),
            (13, "Iara","Agris", NOW(), NOW()),
            (13, "Iara","Borzesti", NOW(), NOW()),
            (13, "Iara","Buru", NOW(), NOW()),
            (13, "Iara","Cacova Ierii", NOW(), NOW()),
            (13, "Iara","Fagetu Ierii", NOW(), NOW()),
            (13, "Iara","Lungesti", NOW(), NOW()),
            (13, "Iara","Masca", NOW(), NOW()),
            (13, "Iara","Magura Ierii", NOW(), NOW()),
            (13, "Iara","Ocolisel", NOW(), NOW()),
            (13, "Iara","Surduc", NOW(), NOW()),
            (13, "Iara","Valea Agrisului", NOW(), NOW()),
            (13, "Iara","Valea Vadului", NOW(), NOW()),
            (13, "Iclod","Fundatura", NOW(), NOW()),
            (13, "Iclod","Iclozel", NOW(), NOW()),
            (13, "Iclod","Livada", NOW(), NOW()),
            (13, "Iclod","Orman", NOW(), NOW()),
            (13, "Izvoru Crisului","Nadasu", NOW(), NOW()),
            (13, "Izvoru Crisului","Nearsova", NOW(), NOW()),
            (13, "Izvoru Crisului","Saula", NOW(), NOW()),
            (13, "Jichisu De Jos","Codor", NOW(), NOW()),
            (13, "Jichisu De Jos","Jichisu de Sus", NOW(), NOW()),
            (13, "Jichisu De Jos","Tarpiu", NOW(), NOW()),
            (13, "Jichisu De Jos","Sigau", NOW(), NOW()),
            (13, "Jucu","Gadalin", NOW(), NOW()),
            (13, "Jucu","Juc-Herghelie", NOW(), NOW()),
            (13, "Jucu","Jucu de Mijloc", NOW(), NOW()),
            (13, "Jucu","Jucu de Sus", NOW(), NOW()),
            (13, "Jucu","Visea", NOW(), NOW()),
            (13, "Luna","Gligoresti", NOW(), NOW()),
            (13, "Luna","Luncani", NOW(), NOW()),
            (13, "Maguri-Racatau","Muntele Rece", NOW(), NOW()),
            (13, "Maguri-Racatau","Maguri", NOW(), NOW()),
            (13, "Manastireni","Ardeova", NOW(), NOW()),
            (13, "Manastireni","Bedeciu", NOW(), NOW()),
            (13, "Manastireni","Bica", NOW(), NOW()),
            (13, "Manastireni","Dretea", NOW(), NOW()),
            (13, "Manastireni","Manasturu Romanesc", NOW(), NOW()),
            (13, "Margau","Bociu", NOW(), NOW()),
            (13, "Margau","Buteni", NOW(), NOW()),
            (13, "Margau","Ciuleni", NOW(), NOW()),
            (13, "Margau","Rachitele", NOW(), NOW()),
            (13, "Margau","Scrind-Frasinet", NOW(), NOW()),
            (13, "Mica","Dambu Mare", NOW(), NOW()),
            (13, "Mica","Manastirea", NOW(), NOW()),
            (13, "Mica","Nires", NOW(), NOW()),
            (13, "Mica","Sanmarghita", NOW(), NOW()),
            (13, "Mica","Valea Ciresoii", NOW(), NOW()),
            (13, "Mica","Valea Luncii", NOW(), NOW()),
            (13, "Mihai Viteazu","Cheia", NOW(), NOW()),
            (13, "Mihai Viteazu","Cornesti", NOW(), NOW()),
            (13, "Mintiu Gherlii","Bunesti", NOW(), NOW()),
            (13, "Mintiu Gherlii","Nima", NOW(), NOW()),
            (13, "Mintiu Gherlii","Petresti", NOW(), NOW()),
            (13, "Mintiu Gherlii","Padurenii", NOW(), NOW()),
            (13, "Mintiu Gherlii","Salatiu", NOW(), NOW()),
            (13, "Mociu","Boteni", NOW(), NOW()),
            (13, "Mociu","Chesau", NOW(), NOW()),
            (13, "Mociu","Criseni", NOW(), NOW()),
            (13, "Mociu","Falca", NOW(), NOW()),
            (13, "Mociu","Ghirisu Roman", NOW(), NOW()),
            (13, "Mociu","Rosieni", NOW(), NOW()),
            (13, "Mociu","Turmasi", NOW(), NOW()),
            (13, "Mociu","Zorenii de Vale", NOW(), NOW()),
            (13, "Moldovenesti","Badeni", NOW(), NOW()),
            (13, "Moldovenesti","Pietroasa", NOW(), NOW()),
            (13, "Moldovenesti","Plaiesti", NOW(), NOW()),
            (13, "Moldovenesti","Podeni", NOW(), NOW()),
            (13, "Moldovenesti","Stejeris", NOW(), NOW()),
            (13, "Negreni","Bucea", NOW(), NOW()),
            (13, "Negreni","Prelucele", NOW(), NOW()),
            (13, "Palatca","Bagaciu", NOW(), NOW()),
            (13, "Palatca","Muresenii de Campie", NOW(), NOW()),
            (13, "Palatca","Petea", NOW(), NOW()),
            (13, "Palatca","Sava", NOW(), NOW()),
            (13, "Panticeu","Cublesu Somesan", NOW(), NOW()),
            (13, "Panticeu","Catalina", NOW(), NOW()),
            (13, "Panticeu","Darja", NOW(), NOW()),
            (13, "Panticeu","Sarata", NOW(), NOW()),
            (13, "Petrestii De Jos","Craesti", NOW(), NOW()),
            (13, "Petrestii De Jos","Deleni", NOW(), NOW()),
            (13, "Petrestii De Jos","Livada", NOW(), NOW()),
            (13, "Petrestii De Jos","Petrestii de Mijloc", NOW(), NOW()),
            (13, "Petrestii De Jos","Petrestii de Sus", NOW(), NOW()),
            (13, "Petrestii De Jos","Plaiuri", NOW(), NOW()),
            (13, "Ploscos","Crairat", NOW(), NOW()),
            (13, "Ploscos","Lobodas", NOW(), NOW()),
            (13, "Ploscos","Valea Florilor", NOW(), NOW()),
            (13, "Poieni","Bologa", NOW(), NOW()),
            (13, "Poieni","Cerbesti", NOW(), NOW()),
            (13, "Poieni","Hodisu", NOW(), NOW()),
            (13, "Poieni","Lunca Visagului", NOW(), NOW()),
            (13, "Poieni","Morlaca", NOW(), NOW()),
            (13, "Poieni","Tranisu", NOW(), NOW()),
            (13, "Poieni","Valea Draganului", NOW(), NOW()),
            (13, "Recea-Cristur","Ciubanca", NOW(), NOW()),
            (13, "Recea-Cristur","Ciubancuta", NOW(), NOW()),
            (13, "Recea-Cristur","Caprioara", NOW(), NOW()),
            (13, "Recea-Cristur","Elciu", NOW(), NOW()),
            (13, "Recea-Cristur","Escu", NOW(), NOW()),
            (13, "Recea-Cristur","Jurca", NOW(), NOW()),
            (13, "Recea-Cristur","Osoi", NOW(), NOW()),
            (13, "Recea-Cristur","Pustuta", NOW(), NOW()),
            (13, "Risca","Dealu Mare", NOW(), NOW()),
            (13, "Risca","Lapustesti", NOW(), NOW()),
            (13, "Risca","Marcesti", NOW(), NOW()),
            (13, "Sacuieu","Rogojel", NOW(), NOW()),
            (13, "Sacuieu","Visagu", NOW(), NOW()),
            (13, "Sancraiu","Alunisu", NOW(), NOW()),
            (13, "Sancraiu","Braisoru", NOW(), NOW()),
            (13, "Sancraiu","Domosu", NOW(), NOW()),
            (13, "Sancraiu","Horlacea", NOW(), NOW()),
            (13, "Sandulesti","Copaceni", NOW(), NOW()),
            (13, "Sanmartin","Ceaba", NOW(), NOW()),
            (13, "Sanmartin","Cutca", NOW(), NOW()),
            (13, "Sanmartin","Diviciorii Mari", NOW(), NOW()),
            (13, "Sanmartin","Diviciorii Mici", NOW(), NOW()),
            (13, "Sanmartin","Mahal", NOW(), NOW()),
            (13, "Sanmartin","Samboieni", NOW(), NOW()),
            (13, "Sanmartin","Targusor", NOW(), NOW()),
            (13, "Sanpaul","Berindu", NOW(), NOW()),
            (13, "Sanpaul","Mihaiesti", NOW(), NOW()),
            (13, "Sanpaul","Sumurducu", NOW(), NOW()),
            (13, "Sanpaul","Topa Mica", NOW(), NOW()),
            (13, "Sanpaul","Sardu", NOW(), NOW()),
            (13, "Savadisla","Finisel", NOW(), NOW()),
            (13, "Savadisla","Hasdate", NOW(), NOW()),
            (13, "Savadisla","Lita", NOW(), NOW()),
            (13, "Savadisla","Liteni", NOW(), NOW()),
            (13, "Savadisla","Stolna", NOW(), NOW()),
            (13, "Savadisla","Vlaha", NOW(), NOW()),
            (13, "Savadisla","Valisoara", NOW(), NOW()),
            (13, "Suatu","Aruncuta", NOW(), NOW()),
            (13, "Suatu","Damburile", NOW(), NOW()),
            (13, "Taga","Nasal", NOW(), NOW()),
            (13, "Taga","Santejude", NOW(), NOW()),
            (13, "Taga","Santejude Vale", NOW(), NOW()),
            (13, "Taga","Santioana", NOW(), NOW()),
            (13, "Tritenii De Jos","Clapa", NOW(), NOW()),
            (13, "Tritenii De Jos","Colonia", NOW(), NOW()),
            (13, "Tritenii De Jos","Padureni", NOW(), NOW()),
            (13, "Tritenii De Jos","Tritenii de Sus", NOW(), NOW()),
            (13, "Tritenii De Jos","Tritenii-Hotar", NOW(), NOW()),
            (13, "Tureni","Ceanu Mic", NOW(), NOW()),
            (13, "Tureni","Comsesti", NOW(), NOW()),
            (13, "Tureni","Micesti", NOW(), NOW()),
            (13, "Tureni","Martinesti", NOW(), NOW()),
            (13, "Unguras","Batin", NOW(), NOW()),
            (13, "Unguras","Darot", NOW(), NOW()),
            (13, "Unguras","Sicfa", NOW(), NOW()),
            (13, "Unguras","Valea Ungurasului", NOW(), NOW()),
            (13, "Vad","Bogata de Jos", NOW(), NOW()),
            (13, "Vad","Bogata de Sus", NOW(), NOW()),
            (13, "Vad","Calna", NOW(), NOW()),
            (13, "Vad","Cetan", NOW(), NOW()),
            (13, "Vad","Curtuiusu Dejului", NOW(), NOW()),
            (13, "Vad","Valea Grosilor", NOW(), NOW()),
            (13, "Valea Ierii","Cerc", NOW(), NOW()),
            (13, "Valea Ierii","Plopi", NOW(), NOW()),
            (13, "Viisoara","Urca", NOW(), NOW()),
            (13, "Vultureni","Babutiu", NOW(), NOW()),
            (13, "Vultureni","Badesti", NOW(), NOW()),
            (13, "Vultureni","Chidea", NOW(), NOW()),
            (13, "Vultureni","Faureni", NOW(), NOW()),
            (13, "Vultureni","Soimeni", NOW(), NOW())
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
        $sql="DELETE FROM localities WHERE county_id=13;";
        DB::connection()->getPdo()->exec($sql);
    }
}