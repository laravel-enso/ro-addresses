<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForCS extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (12, "","Anina", NOW(), NOW()),
            (12, "","Armenis", NOW(), NOW()),
            (12, "","Berliste", NOW(), NOW()),
            (12, "","Berzasca", NOW(), NOW()),
            (12, "","Berzovia", NOW(), NOW()),
            (12, "","Bocsa", NOW(), NOW()),
            (12, "","Bolvasnita", NOW(), NOW()),
            (12, "","Bozovici", NOW(), NOW()),
            (12, "","Brebu", NOW(), NOW()),
            (12, "","Brebu Nou", NOW(), NOW()),
            (12, "","Buchin", NOW(), NOW()),
            (12, "","Bucosnita", NOW(), NOW()),
            (12, "","Baile Herculane", NOW(), NOW()),
            (12, "","Bania", NOW(), NOW()),
            (12, "","Bautar", NOW(), NOW()),
            (12, "","Caransebes", NOW(), NOW()),
            (12, "","Carasova", NOW(), NOW()),
            (12, "","Ciclova Romana", NOW(), NOW()),
            (12, "","Ciuchici", NOW(), NOW()),
            (12, "","Ciudanovita", NOW(), NOW()),
            (12, "","Copacele", NOW(), NOW()),
            (12, "","Cornea", NOW(), NOW()),
            (12, "","Cornereva", NOW(), NOW()),
            (12, "","Coronini", NOW(), NOW()),
            (12, "","Carbunari", NOW(), NOW()),
            (12, "","Dalboset", NOW(), NOW()),
            (12, "","Doclin", NOW(), NOW()),
            (12, "","Dognecea", NOW(), NOW()),
            (12, "","Domasnea", NOW(), NOW()),
            (12, "","Eftimie Murgu", NOW(), NOW()),
            (12, "","Ezeris", NOW(), NOW()),
            (12, "","Forotic", NOW(), NOW()),
            (12, "","Farliug", NOW(), NOW()),
            (12, "","Glimboca", NOW(), NOW()),
            (12, "","Goruia", NOW(), NOW()),
            (12, "","Gradinari", NOW(), NOW()),
            (12, "","Garnic", NOW(), NOW()),
            (12, "","Iablanita", NOW(), NOW()),
            (12, "","Luncavita", NOW(), NOW()),
            (12, "","Lupac", NOW(), NOW()),
            (12, "","Lapusnicel", NOW(), NOW()),
            (12, "","Lapusnicu Mare", NOW(), NOW()),
            (12, "","Marga", NOW(), NOW()),
            (12, "","Mehadia", NOW(), NOW()),
            (12, "","Mehadica", NOW(), NOW()),
            (12, "","Moldova Noua", NOW(), NOW()),
            (12, "","Maureni", NOW(), NOW()),
            (12, "","Naidas", NOW(), NOW()),
            (12, "","Obreja", NOW(), NOW()),
            (12, "","Ocna de Fier", NOW(), NOW()),
            (12, "","Oravita", NOW(), NOW()),
            (12, "","Otelu Rosu", NOW(), NOW()),
            (12, "","Pojejena", NOW(), NOW()),
            (12, "","Prigor", NOW(), NOW()),
            (12, "","Paltinis", NOW(), NOW()),
            (12, "","Ramna", NOW(), NOW()),
            (12, "","Resita", NOW(), NOW()),
            (12, "","Rusca Montana", NOW(), NOW()),
            (12, "","Racasdia", NOW(), NOW()),
            (12, "","Sacu", NOW(), NOW()),
            (12, "","Sasca Montana", NOW(), NOW()),
            (12, "","Sichevita", NOW(), NOW()),
            (12, "","Slatina-Timis", NOW(), NOW()),
            (12, "","Socol", NOW(), NOW()),
            (12, "","Teregova", NOW(), NOW()),
            (12, "","Ticvaniu Mare", NOW(), NOW()),
            (12, "","Toplet", NOW(), NOW()),
            (12, "","Turnu Ruieni", NOW(), NOW()),
            (12, "","Tarnova", NOW(), NOW()),
            (12, "","Vermes", NOW(), NOW()),
            (12, "","Vrani", NOW(), NOW()),
            (12, "","Valiug", NOW(), NOW()),
            (12, "","Varadia", NOW(), NOW()),
            (12, "","Zorlentu Mare", NOW(), NOW()),
            (12, "","Zavoi", NOW(), NOW()),
            (12, "","Sopotu Nou", NOW(), NOW()),
            (12, "Anina","Steierdorf", NOW(), NOW()),
            (12, "Armenis","Fenes", NOW(), NOW()),
            (12, "Armenis","Plopu", NOW(), NOW()),
            (12, "Armenis","Sat Batran", NOW(), NOW()),
            (12, "Armenis","Sub Margine", NOW(), NOW()),
            (12, "Baile Herculane","Pecinisca", NOW(), NOW()),
            (12, "Bania","Garbovat", NOW(), NOW()),
            (12, "Bautar","Bucova", NOW(), NOW()),
            (12, "Bautar","Cornisoru", NOW(), NOW()),
            (12, "Bautar","Preveciori", NOW(), NOW()),
            (12, "Berliste","Iam", NOW(), NOW()),
            (12, "Berliste","Milcoveni", NOW(), NOW()),
            (12, "Berliste","Rusova Noua", NOW(), NOW()),
            (12, "Berliste","Rusova Veche", NOW(), NOW()),
            (12, "Berzasca","Bigar", NOW(), NOW()),
            (12, "Berzasca","Cozla", NOW(), NOW()),
            (12, "Berzasca","Drencova", NOW(), NOW()),
            (12, "Berzasca","Liubcova", NOW(), NOW()),
            (12, "Berzovia","Fizes", NOW(), NOW()),
            (12, "Berzovia","Ghertenis", NOW(), NOW()),
            (12, "Bolvasnita","Varciorova", NOW(), NOW()),
            (12, "Bozovici","Poneasca", NOW(), NOW()),
            (12, "Bozovici","Prilipet", NOW(), NOW()),
            (12, "Bozovici","Valea Minisului", NOW(), NOW()),
            (12, "Brebu","Apadia", NOW(), NOW()),
            (12, "Brebu","Valeadeni", NOW(), NOW()),
            (12, "Brebu Nou","Garana", NOW(), NOW()),
            (12, "Buchin","Lindenfeld", NOW(), NOW()),
            (12, "Buchin","Poiana", NOW(), NOW()),
            (12, "Buchin","Prisian", NOW(), NOW()),
            (12, "Buchin","Valea Timisului", NOW(), NOW()),
            (12, "Bucosnita","Golet", NOW(), NOW()),
            (12, "Bucosnita","Petrosnita", NOW(), NOW()),
            (12, "Bucosnita","Valisoara", NOW(), NOW()),
            (12, "Caransebes","Jupa", NOW(), NOW()),
            (12, "Carasova","Iabalcea", NOW(), NOW()),
            (12, "Carasova","Nermed", NOW(), NOW()),
            (12, "Carbunari","Stinapari", NOW(), NOW()),
            (12, "Ciclova Romana","Ilidia", NOW(), NOW()),
            (12, "Ciclova Romana","Socolari", NOW(), NOW()),
            (12, "Ciuchici","Macoviste", NOW(), NOW()),
            (12, "Ciuchici","Nicolint", NOW(), NOW()),
            (12, "Ciuchici","Petrilova", NOW(), NOW()),
            (12, "Ciudanovita","Jitin", NOW(), NOW()),
            (12, "Constantin Daicoviciu","Cavaran", NOW(), NOW()),
            (12, "Constantin Daicoviciu","Maciova", NOW(), NOW()),
            (12, "Constantin Daicoviciu","Matnicu Mare", NOW(), NOW()),
            (12, "Constantin Daicoviciu","Pestere", NOW(), NOW()),
            (12, "Constantin Daicoviciu","Prisaca", NOW(), NOW()),
            (12, "Constantin Daicoviciu","Zagujeni", NOW(), NOW()),
            (12, "Copacele","Ohaba-Matnic", NOW(), NOW()),
            (12, "Copacele","Ruginosu", NOW(), NOW()),
            (12, "Copacele","Zorile", NOW(), NOW()),
            (12, "Cornea","Crusovat", NOW(), NOW()),
            (12, "Cornea","Cuptoare", NOW(), NOW()),
            (12, "Cornea","Macoviste", NOW(), NOW()),
            (12, "Cornereva","Arsuri", NOW(), NOW()),
            (12, "Cornereva","Bogaltin", NOW(), NOW()),
            (12, "Cornereva","Bojia", NOW(), NOW()),
            (12, "Cornereva","Borugi", NOW(), NOW()),
            (12, "Cornereva","Camena", NOW(), NOW()),
            (12, "Cornereva","Ciresel", NOW(), NOW()),
            (12, "Cornereva","Costis", NOW(), NOW()),
            (12, "Cornereva","Cozia", NOW(), NOW()),
            (12, "Cornereva","Cracu Mare", NOW(), NOW()),
            (12, "Cornereva","Cracu Teiului", NOW(), NOW()),
            (12, "Cornereva","Dobraia", NOW(), NOW()),
            (12, "Cornereva","Dolina", NOW(), NOW()),
            (12, "Cornereva","Gruni", NOW(), NOW()),
            (12, "Cornereva","Hora Mare", NOW(), NOW()),
            (12, "Cornereva","Hora Mica", NOW(), NOW()),
            (12, "Cornereva","Inelet", NOW(), NOW()),
            (12, "Cornereva","Izvor", NOW(), NOW()),
            (12, "Cornereva","Lunca Florii", NOW(), NOW()),
            (12, "Cornereva","Lunca Zaicii", NOW(), NOW()),
            (12, "Cornereva","Mesteacan", NOW(), NOW()),
            (12, "Cornereva","Negiudin", NOW(), NOW()),
            (12, "Cornereva","Obita", NOW(), NOW()),
            (12, "Cornereva","Pogara", NOW(), NOW()),
            (12, "Cornereva","Pogara de Sus", NOW(), NOW()),
            (12, "Cornereva","Poiana Lunga", NOW(), NOW()),
            (12, "Cornereva","Prisacina", NOW(), NOW()),
            (12, "Cornereva","Prislop", NOW(), NOW()),
            (12, "Cornereva","Rustin", NOW(), NOW()),
            (12, "Cornereva","Scarisoara", NOW(), NOW()),
            (12, "Cornereva","Strugasca", NOW(), NOW()),
            (12, "Cornereva","Studena", NOW(), NOW()),
            (12, "Cornereva","Sub Crang", NOW(), NOW()),
            (12, "Cornereva","Sub Plai", NOW(), NOW()),
            (12, "Cornereva","Topla", NOW(), NOW()),
            (12, "Cornereva","Zbegu", NOW(), NOW()),
            (12, "Cornereva","Zmogotin", NOW(), NOW()),
            (12, "Cornereva","Zoina", NOW(), NOW()),
            (12, "Cornereva","Zanogi", NOW(), NOW()),
            (12, "Cornereva","Tatu", NOW(), NOW()),
            (12, "Coronini","Sfanta Elena", NOW(), NOW()),
            (12, "Dalboset","Boina", NOW(), NOW()),
            (12, "Dalboset","Boinita", NOW(), NOW()),
            (12, "Dalboset","Barz", NOW(), NOW()),
            (12, "Dalboset","Prislop", NOW(), NOW()),
            (12, "Dalboset","Resita Mica", NOW(), NOW()),
            (12, "Dalboset","Sopotu Vechi", NOW(), NOW()),
            (12, "Doclin","Binis", NOW(), NOW()),
            (12, "Doclin","Tirol", NOW(), NOW()),
            (12, "Dognecea","Calina", NOW(), NOW()),
            (12, "Domasnea","Canicea", NOW(), NOW()),
            (12, "Ezeris","Soceni", NOW(), NOW()),
            (12, "Farliug","Dezesti", NOW(), NOW()),
            (12, "Farliug","Duleu", NOW(), NOW()),
            (12, "Farliug","Remetea-Poganici", NOW(), NOW()),
            (12, "Farliug","Scaius", NOW(), NOW()),
            (12, "Farliug","Valea Mare", NOW(), NOW()),
            (12, "Forotic","Brezon", NOW(), NOW()),
            (12, "Forotic","Comoraste", NOW(), NOW()),
            (12, "Forotic","Surducu Mare", NOW(), NOW()),
            (12, "Garnic","Padina Matei", NOW(), NOW()),
            (12, "Goruia","Giurgiova", NOW(), NOW()),
            (12, "Goruia","Garliste", NOW(), NOW()),
            (12, "Gradinari","Greoni", NOW(), NOW()),
            (12, "Iablanita","Globu Craiovei", NOW(), NOW()),
            (12, "Iablanita","Petnic", NOW(), NOW()),
            (12, "Lapusnicel","Parvova", NOW(), NOW()),
            (12, "Lapusnicel","Sumita", NOW(), NOW()),
            (12, "Lapusnicu Mare","Moceris", NOW(), NOW()),
            (12, "Luncavita","Verendin", NOW(), NOW()),
            (12, "Lupac","Clocotici", NOW(), NOW()),
            (12, "Lupac","Rafnic", NOW(), NOW()),
            (12, "Lupac","Vodnic", NOW(), NOW()),
            (12, "Marga","Vama Marga", NOW(), NOW()),
            (12, "Maureni","Sosdea", NOW(), NOW()),
            (12, "Mehadia","Globurau", NOW(), NOW()),
            (12, "Mehadia","Plugova", NOW(), NOW()),
            (12, "Mehadia","Valea Bolvasnita", NOW(), NOW()),
            (12, "Moldova Noua","Moldova Veche", NOW(), NOW()),
            (12, "Moldova Noua","Moldovita", NOW(), NOW()),
            (12, "Moldova Noua","Macesti", NOW(), NOW()),
            (12, "Naidas","Lescovita", NOW(), NOW()),
            (12, "Obreja","Ciuta", NOW(), NOW()),
            (12, "Obreja","Iaz", NOW(), NOW()),
            (12, "Obreja","Var", NOW(), NOW()),
            (12, "Oravita","Agadici", NOW(), NOW()),
            (12, "Oravita","Brosteni", NOW(), NOW()),
            (12, "Oravita","Bradisoru de Jos", NOW(), NOW()),
            (12, "Oravita","Ciclova Montana", NOW(), NOW()),
            (12, "Oravita","Marila", NOW(), NOW()),
            (12, "Oravita","Rachitova", NOW(), NOW()),
            (12, "Otelu Rosu","Ciresa", NOW(), NOW()),
            (12, "Otelu Rosu","Mal", NOW(), NOW()),
            (12, "Paltinis","Cornutel", NOW(), NOW()),
            (12, "Paltinis","Delinesti", NOW(), NOW()),
            (12, "Paltinis","Ohabita", NOW(), NOW()),
            (12, "Paltinis","Rugi", NOW(), NOW()),
            (12, "Pojejena","Belobresca", NOW(), NOW()),
            (12, "Pojejena","Divici", NOW(), NOW()),
            (12, "Pojejena","Radimna", NOW(), NOW()),
            (12, "Pojejena","Susca", NOW(), NOW()),
            (12, "Prigor","Borlovenii Noi", NOW(), NOW()),
            (12, "Prigor","Borlovenii Vechi", NOW(), NOW()),
            (12, "Prigor","Putna", NOW(), NOW()),
            (12, "Prigor","Patas", NOW(), NOW()),
            (12, "Racasdia","Vraniut", NOW(), NOW()),
            (12, "Ramna","Barbosu", NOW(), NOW()),
            (12, "Ramna","Valeapai", NOW(), NOW()),
            (12, "Resita","Cuptoare", NOW(), NOW()),
            (12, "Resita","Calnic", NOW(), NOW()),
            (12, "Resita","Doman", NOW(), NOW()),
            (12, "Resita","Moniom", NOW(), NOW()),
            (12, "Resita","Secu", NOW(), NOW()),
            (12, "Resita","Terova", NOW(), NOW()),
            (12, "Rusca Montana","Ruschita", NOW(), NOW()),
            (12, "Sacu","Salbagelu Nou", NOW(), NOW()),
            (12, "Sacu","Tincova", NOW(), NOW()),
            (12, "Sasca Montana","Bogodint", NOW(), NOW()),
            (12, "Sasca Montana","Potoc", NOW(), NOW()),
            (12, "Sasca Montana","Sasca Romana", NOW(), NOW()),
            (12, "Sasca Montana","Slatina-Nera", NOW(), NOW()),
            (12, "Sichevita","Brestelnic", NOW(), NOW()),
            (12, "Sichevita","Camenita", NOW(), NOW()),
            (12, "Sichevita","Cracu Almaj", NOW(), NOW()),
            (12, "Sichevita","Crusovita", NOW(), NOW()),
            (12, "Sichevita","Curmatura", NOW(), NOW()),
            (12, "Sichevita","Carsie", NOW(), NOW()),
            (12, "Sichevita","Frasinis", NOW(), NOW()),
            (12, "Sichevita","Gornea", NOW(), NOW()),
            (12, "Sichevita","Liborajdea", NOW(), NOW()),
            (12, "Sichevita","Lucacevat", NOW(), NOW()),
            (12, "Sichevita","Martinovat", NOW(), NOW()),
            (12, "Sichevita","Ogasu Podului", NOW(), NOW()),
            (12, "Sichevita","Streneac", NOW(), NOW()),
            (12, "Sichevita","Valea Orevita", NOW(), NOW()),
            (12, "Sichevita","Valea Ravensca", NOW(), NOW()),
            (12, "Sichevita","Valea Sichevitei", NOW(), NOW()),
            (12, "Sichevita","Zanou", NOW(), NOW()),
            (12, "Sichevita","Zasloane", NOW(), NOW()),
            (12, "Slatina-Timis","Ilova", NOW(), NOW()),
            (12, "Slatina-Timis","Sadova Noua", NOW(), NOW()),
            (12, "Slatina-Timis","Sadova Veche", NOW(), NOW()),
            (12, "Socol","Bazias", NOW(), NOW()),
            (12, "Socol","Campia", NOW(), NOW()),
            (12, "Socol","Parneaura", NOW(), NOW()),
            (12, "Socol","Zlatita", NOW(), NOW()),
            (12, "Sopotu Nou","Carsa Rosie", NOW(), NOW()),
            (12, "Sopotu Nou","Dristie", NOW(), NOW()),
            (12, "Sopotu Nou","Poienile Boinei", NOW(), NOW()),
            (12, "Sopotu Nou","Ravensca", NOW(), NOW()),
            (12, "Sopotu Nou","Rachita", NOW(), NOW()),
            (12, "Sopotu Nou","Stancilova", NOW(), NOW()),
            (12, "Sopotu Nou","Urcu", NOW(), NOW()),
            (12, "Sopotu Nou","Valea Rosie", NOW(), NOW()),
            (12, "Sopotu Nou","Valea Rachitei", NOW(), NOW()),
            (12, "Tarnova","Bratova", NOW(), NOW()),
            (12, "Teregova","Rusca", NOW(), NOW()),
            (12, "Ticvaniu Mare","Carnecea", NOW(), NOW()),
            (12, "Ticvaniu Mare","Secaseni", NOW(), NOW()),
            (12, "Ticvaniu Mare","Ticvaniu Mic", NOW(), NOW()),
            (12, "Toplet","Barza", NOW(), NOW()),
            (12, "Turnu Ruieni","Borlova", NOW(), NOW()),
            (12, "Turnu Ruieni","Cicleni", NOW(), NOW()),
            (12, "Turnu Ruieni","Dalci", NOW(), NOW()),
            (12, "Turnu Ruieni","Zervesti", NOW(), NOW()),
            (12, "Turnu Ruieni","Zlagna", NOW(), NOW()),
            (12, "Varadia","Mercina", NOW(), NOW()),
            (12, "Vermes","Ersig", NOW(), NOW()),
            (12, "Vermes","Izgar", NOW(), NOW()),
            (12, "Vrani","Ciortea", NOW(), NOW()),
            (12, "Vrani","Iertof", NOW(), NOW()),
            (12, "Zavoi","23 August", NOW(), NOW()),
            (12, "Zavoi","Magura", NOW(), NOW()),
            (12, "Zavoi","Maru", NOW(), NOW()),
            (12, "Zavoi","Poiana Marului", NOW(), NOW()),
            (12, "Zavoi","Valea Bistrei", NOW(), NOW()),
            (12, "Zavoi","Voislova", NOW(), NOW()),
            (12, "Zorlentu Mare","Zorlencior", NOW(), NOW())
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

        $sql = "DELETE FROM localities WHERE county_id=12;";
        DB::connection()->getPdo()->exec($sql);
    }
}