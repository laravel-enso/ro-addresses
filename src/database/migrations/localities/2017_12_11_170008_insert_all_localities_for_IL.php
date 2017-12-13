<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForIL extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (23, "","Adancata", NOW(), NOW()),
            (23, "","Albesti", NOW(), NOW()),
            (23, "","Alexeni", NOW(), NOW()),
            (23, "","Amara", NOW(), NOW()),
            (23, "","Andrasesti", NOW(), NOW()),
            (23, "","Armasesti", NOW(), NOW()),
            (23, "","Axintele", NOW(), NOW()),
            (23, "","Balaciu", NOW(), NOW()),
            (23, "","Bordusani", NOW(), NOW()),
            (23, "","Brazii", NOW(), NOW()),
            (23, "","Bucu", NOW(), NOW()),
            (23, "","Barcanesti", NOW(), NOW()),
            (23, "","Ciochina", NOW(), NOW()),
            (23, "","Ciocarlia", NOW(), NOW()),
            (23, "","Ciulnita", NOW(), NOW()),
            (23, "","Cocora", NOW(), NOW()),
            (23, "","Cosambesti", NOW(), NOW()),
            (23, "","Cosereni", NOW(), NOW()),
            (23, "","Cazanesti", NOW(), NOW()),
            (23, "","Dridu", NOW(), NOW()),
            (23, "","Dragoesti", NOW(), NOW()),
            (23, "","Fetesti", NOW(), NOW()),
            (23, "","Fierbinti-Targ", NOW(), NOW()),
            (23, "","Facaeni", NOW(), NOW()),
            (23, "","Gheorghe Doja", NOW(), NOW()),
            (23, "","Gheorghe Lazar", NOW(), NOW()),
            (23, "","Giurgeni", NOW(), NOW()),
            (23, "","Grindu", NOW(), NOW()),
            (23, "","Grivita", NOW(), NOW()),
            (23, "","Garbovi", NOW(), NOW()),
            (23, "","Ion Roata", NOW(), NOW()),
            (23, "","Jilavele", NOW(), NOW()),
            (23, "","Manasia", NOW(), NOW()),
            (23, "","Mihail Kogalniceanu", NOW(), NOW()),
            (23, "","Milosesti", NOW(), NOW()),
            (23, "","Movila", NOW(), NOW()),
            (23, "","Movilita", NOW(), NOW()),
            (23, "","Munteni-Buzau", NOW(), NOW()),
            (23, "","Perieti", NOW(), NOW()),
            (23, "","Reviga", NOW(), NOW()),
            (23, "","Scanteia", NOW(), NOW()),
            (23, "","Sfantu Gheorghe", NOW(), NOW()),
            (23, "","Sinesti", NOW(), NOW()),
            (23, "","Slobozia", NOW(), NOW()),
            (23, "","Stelnica", NOW(), NOW()),
            (23, "","Suditi", NOW(), NOW()),
            (23, "","Salcioara", NOW(), NOW()),
            (23, "","Saveni", NOW(), NOW()),
            (23, "","Traian", NOW(), NOW()),
            (23, "","Urziceni", NOW(), NOW()),
            (23, "","Valea Ciorii", NOW(), NOW()),
            (23, "","Valea Macrisului", NOW(), NOW()),
            (23, "","Vladeni", NOW(), NOW()),
            (23, "","Tandarei", NOW(), NOW()),
            (23, "Adancata","Patru Frati", NOW(), NOW()),
            (23, "Albesti","Bataluri", NOW(), NOW()),
            (23, "Albesti","Buesti", NOW(), NOW()),
            (23, "Albesti","Marsilieni", NOW(), NOW()),
            (23, "Amara","Amara Noua", NOW(), NOW()),
            (23, "Andrasesti","Orboesti", NOW(), NOW()),
            (23, "Armasesti","Barbulesti", NOW(), NOW()),
            (23, "Armasesti","Malu Rosu", NOW(), NOW()),
            (23, "Armasesti","Nenisori", NOW(), NOW()),
            (23, "Axintele","Barbatescu", NOW(), NOW()),
            (23, "Axintele","Horia", NOW(), NOW()),
            (23, "Balaciu","Copuzu", NOW(), NOW()),
            (23, "Balaciu","Crasanii de Jos", NOW(), NOW()),
            (23, "Balaciu","Crasanii de Sus", NOW(), NOW()),
            (23, "Balaciu","Sarateni", NOW(), NOW()),
            (23, "Barcanesti","Condeesti", NOW(), NOW()),
            (23, "Bordusani","Cegani", NOW(), NOW()),
            (23, "Brazii","Maia", NOW(), NOW()),
            (23, "Brazii","Movileanca", NOW(), NOW()),
            (23, "Brazii","Rasimnicea", NOW(), NOW()),
            (23, "Bucu","Ograda", NOW(), NOW()),
            (23, "Ciocarlia","Cotorca", NOW(), NOW()),
            (23, "Ciochina","Borduselu", NOW(), NOW()),
            (23, "Ciochina","Orezu", NOW(), NOW()),
            (23, "Ciochina","Piersica", NOW(), NOW()),
            (23, "Ciulnita","Ion Ghica", NOW(), NOW()),
            (23, "Ciulnita","Ivanesti", NOW(), NOW()),
            (23, "Ciulnita","Poiana", NOW(), NOW()),
            (23, "Cocora","Colelia", NOW(), NOW()),
            (23, "Cosambesti","Gimbasani", NOW(), NOW()),
            (23, "Cosambesti","Marculesti", NOW(), NOW()),
            (23, "Cosereni","Boranesti", NOW(), NOW()),
            (23, "Cosereni","Sintesti", NOW(), NOW()),
            (23, "Dragoesti","Chiroiu-Pamanteni", NOW(), NOW()),
            (23, "Dragoesti","Chiroiu-Satu Nou", NOW(), NOW()),
            (23, "Dragoesti","Chiroiu-Ungureni", NOW(), NOW()),
            (23, "Dragoesti","Valea Bisericii", NOW(), NOW()),
            (23, "Dridu","Dridu-Snagov", NOW(), NOW()),
            (23, "Dridu","Moldoveni", NOW(), NOW()),
            (23, "Facaeni","Progresu", NOW(), NOW()),
            (23, "Fetesti","Buliga", NOW(), NOW()),
            (23, "Fetesti","Fetesti-Gara", NOW(), NOW()),
            (23, "Fetesti","Vlasca", NOW(), NOW()),
            (23, "Fierbinti-Targ","Fierbintii de Jos", NOW(), NOW()),
            (23, "Fierbinti-Targ","Fierbintii de Sus", NOW(), NOW()),
            (23, "Fierbinti-Targ","Grecii de Jos", NOW(), NOW()),
            (23, "Grivita","Smirna", NOW(), NOW()),
            (23, "Ion Roata","Brosteni", NOW(), NOW()),
            (23, "Jilavele","Slatioarele", NOW(), NOW()),
            (23, "Mihail Kogalniceanu","Gura Ialomitei", NOW(), NOW()),
            (23, "Mihail Kogalniceanu","Hagieni", NOW(), NOW()),
            (23, "Mihail Kogalniceanu","Luciu", NOW(), NOW()),
            (23, "Milosesti","Nicolesti", NOW(), NOW()),
            (23, "Milosesti","Tovarasia", NOW(), NOW()),
            (23, "Movilita","Bitina-Pamanteni", NOW(), NOW()),
            (23, "Movilita","Bitina-Ungureni", NOW(), NOW()),
            (23, "Movilita","Rosiori", NOW(), NOW()),
            (23, "Perieti","Fundata", NOW(), NOW()),
            (23, "Perieti","Misleanu", NOW(), NOW()),
            (23, "Perieti","Paltinisu", NOW(), NOW()),
            (23, "Perieti","Stejaru", NOW(), NOW()),
            (23, "Reviga","Crunti", NOW(), NOW()),
            (23, "Reviga","Mircea cel Batran", NOW(), NOW()),
            (23, "Reviga","Rovine", NOW(), NOW()),
            (23, "Salcioara","Rasi", NOW(), NOW()),
            (23, "Saveni","Fratilesti", NOW(), NOW()),
            (23, "Saveni","Lacusteni", NOW(), NOW()),
            (23, "Saveni","Platonesti", NOW(), NOW()),
            (23, "Scanteia","Iazu", NOW(), NOW()),
            (23, "Sfantu Gheorghe","Butoiu", NOW(), NOW()),
            (23, "Sfantu Gheorghe","Malu", NOW(), NOW()),
            (23, "Sinesti","Boteni", NOW(), NOW()),
            (23, "Sinesti","Catrunesti", NOW(), NOW()),
            (23, "Sinesti","Hagiesti", NOW(), NOW()),
            (23, "Sinesti","Lilieci", NOW(), NOW()),
            (23, "Sinesti","Livedea", NOW(), NOW()),
            (23, "Slobozia","Bora", NOW(), NOW()),
            (23, "Slobozia","Slobozia Noua", NOW(), NOW()),
            (23, "Stelnica","Maltezi", NOW(), NOW()),
            (23, "Stelnica","Retezatu", NOW(), NOW()),
            (23, "Suditi","Gura Vaii", NOW(), NOW()),
            (23, "Valea Ciorii","Bucsa", NOW(), NOW()),
            (23, "Valea Ciorii","Dumitresti", NOW(), NOW()),
            (23, "Valea Ciorii","Murgeanca", NOW(), NOW()),
            (23, "Valea Macrisului","Grindasi", NOW(), NOW())
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

        $sql = "DELETE FROM localities WHERE county_id=23;";
        DB::connection()->getPdo()->exec($sql);
    }
}

