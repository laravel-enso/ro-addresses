<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForIF extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
          (26, "","1 Decembrie", NOW(), NOW()),
          (26, "","Afumati", NOW(), NOW()),
          (26, "","Balotesti", NOW(), NOW()),
          (26, "","Berceni", NOW(), NOW()),
          (26, "","Bragadiru", NOW(), NOW()),
          (26, "","Branesti", NOW(), NOW()),
          (26, "","Buftea", NOW(), NOW()),
          (26, "","Cernica", NOW(), NOW()),
          (26, "","Chiajna", NOW(), NOW()),
          (26, "","Chitila", NOW(), NOW()),
          (26, "","Ciolpani", NOW(), NOW()),
          (26, "","Ciorogarla", NOW(), NOW()),
          (26, "","Clinceni", NOW(), NOW()),
          (26, "","Corbeanca", NOW(), NOW()),
          (26, "","Cornetu", NOW(), NOW()),
          (26, "","Dascalu", NOW(), NOW()),
          (26, "","Domnesti", NOW(), NOW()),
          (26, "","Dragomiresti-Vale", NOW(), NOW()),
          (26, "","Darasti-Ilfov", NOW(), NOW()),
          (26, "","Glina", NOW(), NOW()),
          (26, "","Gruiu", NOW(), NOW()),
          (26, "","Gradistea", NOW(), NOW()),
          (26, "","Ganeasa", NOW(), NOW()),
          (26, "","Jilava", NOW(), NOW()),
          (26, "","Moara Vlasiei", NOW(), NOW()),
          (26, "","Mogosoaia", NOW(), NOW()),
          (26, "","Magurele", NOW(), NOW()),
          (26, "","Nuci", NOW(), NOW()),
          (26, "","Otopeni", NOW(), NOW()),
          (26, "","Pantelimon", NOW(), NOW()),
          (26, "","Peris", NOW(), NOW()),
          (26, "","Petrachioaia", NOW(), NOW()),
          (26, "","Popesti Leordeni", NOW(), NOW()),
          (26, "","Snagov", NOW(), NOW()),
          (26, "","Tunari", NOW(), NOW()),
          (26, "","Vidra", NOW(), NOW()),
          (26, "","Voluntari", NOW(), NOW()),
          (26, "","Stefanestii de Jos", NOW(), NOW()),
          (26, "1 Decembrie","Copaceni", NOW(), NOW()),
          (26, "Balotesti","Dumbraveni", NOW(), NOW()),
          (26, "Balotesti","Saftica", NOW(), NOW()),
          (26, "Branesti","Islaz", NOW(), NOW()),
          (26, "Branesti","Pasarea", NOW(), NOW()),
          (26, "Branesti","Vadu Anei", NOW(), NOW()),
          (26, "Buftea","Buciumeni", NOW(), NOW()),
          (26, "Cernica","Balaceanca", NOW(), NOW()),
          (26, "Cernica","Caldararu", NOW(), NOW()),
          (26, "Cernica","Posta", NOW(), NOW()),
          (26, "Cernica","Tanganu", NOW(), NOW()),
          (26, "Chiajna","Dudu", NOW(), NOW()),
          (26, "Chiajna","Rosu", NOW(), NOW()),
          (26, "Chitila","Rudeni", NOW(), NOW()),
          (26, "Ciolpani","Izvorani", NOW(), NOW()),
          (26, "Ciolpani","Luparia", NOW(), NOW()),
          (26, "Ciolpani","Piscu", NOW(), NOW()),
          (26, "Ciorogarla","Darvari", NOW(), NOW()),
          (26, "Clinceni","Olteni", NOW(), NOW()),
          (26, "Clinceni","Ordoreanu", NOW(), NOW()),
          (26, "Corbeanca","Ostratu", NOW(), NOW()),
          (26, "Corbeanca","Petresti", NOW(), NOW()),
          (26, "Corbeanca","Tamasi", NOW(), NOW()),
          (26, "Cornetu","Buda", NOW(), NOW()),
          (26, "Dascalu","Creata", NOW(), NOW()),
          (26, "Dascalu","Gagu", NOW(), NOW()),
          (26, "Dascalu","Runcu", NOW(), NOW()),
          (26, "Dobroiesti","Dobroesti", NOW(), NOW()),
          (26, "Dobroiesti","Fundeni", NOW(), NOW()),
          (26, "Domnesti","Teghes", NOW(), NOW()),
          (26, "Dragomiresti-Vale","Dragomiresti-Deal", NOW(), NOW()),
          (26, "Dragomiresti-Vale","Zurbaua", NOW(), NOW()),
          (26, "Ganeasa","Cozieni", NOW(), NOW()),
          (26, "Ganeasa","Moara Domneasca", NOW(), NOW()),
          (26, "Ganeasa","Piteasca", NOW(), NOW()),
          (26, "Ganeasa","Sindrilita", NOW(), NOW()),
          (26, "Glina","Catelu", NOW(), NOW()),
          (26, "Glina","Manolache", NOW(), NOW()),
          (26, "Gradistea","Sitaru", NOW(), NOW()),
          (26, "Gruiu","Lipia", NOW(), NOW()),
          (26, "Gruiu","Silistea Snagovului", NOW(), NOW()),
          (26, "Gruiu","Santu Floresti", NOW(), NOW()),
          (26, "Magurele","Alunisu", NOW(), NOW()),
          (26, "Magurele","Dumitrana", NOW(), NOW()),
          (26, "Magurele","Pruni", NOW(), NOW()),
          (26, "Magurele","Varteju", NOW(), NOW()),
          (26, "Moara Vlasiei","Caciulati", NOW(), NOW()),
          (26, "Nuci","Balta Neagra", NOW(), NOW()),
          (26, "Nuci","Merii Petchii", NOW(), NOW()),
          (26, "Nuci","Micsunestii Mari", NOW(), NOW()),
          (26, "Nuci","Micsunestii-Moara", NOW(), NOW()),
          (26, "Otopeni","Odaile", NOW(), NOW()),
          (26, "Peris","Burias", NOW(), NOW()),
          (26, "Peris","Balteni", NOW(), NOW()),
          (26, "Petrachioaia","Maineasca", NOW(), NOW()),
          (26, "Petrachioaia","Surlari", NOW(), NOW()),
          (26, "Petrachioaia","Vanatori", NOW(), NOW()),
          (26, "Snagov","Cioflinceni", NOW(), NOW()),
          (26, "Snagov","Ghermanesti", NOW(), NOW()),
          (26, "Snagov","Tancabesti", NOW(), NOW()),
          (26, "Snagov","Vladiceasca", NOW(), NOW()),
          (26, "Stefanestii De Jos","Cretuleasca", NOW(), NOW()),
          (26, "Stefanestii De Jos","Stefanestii de Sus", NOW(), NOW()),
          (26, "Tunari","Dimieni", NOW(), NOW()),
          (26, "Vidra","Cretesti", NOW(), NOW()),
          (26, "Vidra","Sintesti", NOW(), NOW())
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

        $sql = "DELETE FROM localities WHERE county_id=26;";
        DB::connection()->getPdo()->exec($sql);
    }
}
