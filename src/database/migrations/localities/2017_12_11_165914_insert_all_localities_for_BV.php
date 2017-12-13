<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForBV extends Migration
{

    public function up()
    {
        $sql='INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
          (9, "","Apata", NOW(), NOW()),
          (9, "","Beclean", NOW(), NOW()),
          (9, "","Bod", NOW(), NOW()),
          (9, "","Bran", NOW(), NOW()),
          (9, "","Brasov", NOW(), NOW()),
          (9, "","Budila", NOW(), NOW()),
          (9, "","Bunesti", NOW(), NOW()),
          (9, "","Cata", NOW(), NOW()),
          (9, "","Cincu", NOW(), NOW()),
          (9, "","Codlea", NOW(), NOW()),
          (9, "","Cristian", NOW(), NOW()),
          (9, "","Crizbav", NOW(), NOW()),
          (9, "","Dumbravita", NOW(), NOW()),
          (9, "","Feldioara", NOW(), NOW()),
          (9, "","Fundata", NOW(), NOW()),
          (9, "","Fagaras", NOW(), NOW()),
          (9, "","Ghimbav", NOW(), NOW()),
          (9, "","Hoghiz", NOW(), NOW()),
          (9, "","Homorod", NOW(), NOW()),
          (9, "","Harseni", NOW(), NOW()),
          (9, "","Halchiu", NOW(), NOW()),
          (9, "","Harman", NOW(), NOW()),
          (9, "","Jibert", NOW(), NOW()),
          (9, "","Lisa", NOW(), NOW()),
          (9, "","Mandra", NOW(), NOW()),
          (9, "","Maierus", NOW(), NOW()),
          (9, "","Ormenis", NOW(), NOW()),
          (9, "","Poiana Marului", NOW(), NOW()),
          (9, "","Predeal", NOW(), NOW()),
          (9, "","Prejmer", NOW(), NOW()),
          (9, "","Parau", NOW(), NOW()),
          (9, "","Racos", NOW(), NOW()),
          (9, "","Recea", NOW(), NOW()),
          (9, "","Rupea", NOW(), NOW()),
          (9, "","Rasnov", NOW(), NOW()),
          (9, "","Sambata de Sus", NOW(), NOW()),
          (9, "","Sanpetru", NOW(), NOW()),
          (9, "","Sacele", NOW(), NOW()),
          (9, "","Teliu", NOW(), NOW()),
          (9, "","Tarlungeni", NOW(), NOW()),
          (9, "","Ungra", NOW(), NOW()),
          (9, "","Vama Buzaului", NOW(), NOW()),
          (9, "","Victoria", NOW(), NOW()),
          (9, "","Voila", NOW(), NOW()),
          (9, "","Vulcan", NOW(), NOW()),
          (9, "","Zarnesti", NOW(), NOW()),
          (9, "","Sercaia", NOW(), NOW()),
          (9, "","Sinca Noua", NOW(), NOW()),
          (9, "","Soars", NOW(), NOW()),
          (9, "Beclean","Boholt", NOW(), NOW()),
          (9, "Beclean","Calbor", NOW(), NOW()),
          (9, "Beclean","Hurez", NOW(), NOW()),
          (9, "Beclean","Luta", NOW(), NOW()),
          (9, "Bod","Colonia Bod", NOW(), NOW()),
          (9, "Bran","Predelut", NOW(), NOW()),
          (9, "Bran","Sohodol", NOW(), NOW()),
          (9, "Bran","Simon", NOW(), NOW()),
          (9, "Brasov","Poiana Brasov", NOW(), NOW()),
          (9, "Bunesti","Crit", NOW(), NOW()),
          (9, "Bunesti","Mesendorf", NOW(), NOW()),
          (9, "Bunesti","Roades", NOW(), NOW()),
          (9, "Bunesti","Viscri", NOW(), NOW()),
          (9, "Cata","Beia", NOW(), NOW()),
          (9, "Cata","Drauseni", NOW(), NOW()),
          (9, "Cata","Ionesti", NOW(), NOW()),
          (9, "Cata","Palos", NOW(), NOW()),
          (9, "Cincu","Toarcla", NOW(), NOW()),
          (9, "Comana","Comana de Jos", NOW(), NOW()),
          (9, "Comana","Comana de Sus", NOW(), NOW()),
          (9, "Comana","Crihalma", NOW(), NOW()),
          (9, "Comana","Ticusu Nou", NOW(), NOW()),
          (9, "Crizbav","Cutus", NOW(), NOW()),
          (9, "Dumbravita","Vladeni", NOW(), NOW()),
          (9, "Feldioara","Colonia Reconstructia", NOW(), NOW()),
          (9, "Feldioara","Rotbav", NOW(), NOW()),
          (9, "Fundata","Fundatica", NOW(), NOW()),
          (9, "Fundata","Sirnea", NOW(), NOW()),
          (9, "Halchiu","Satu Nou", NOW(), NOW()),
          (9, "Harman","Podu Oltului", NOW(), NOW()),
          (9, "Harseni","Copacel", NOW(), NOW()),
          (9, "Harseni","Malinis", NOW(), NOW()),
          (9, "Harseni","Margineni", NOW(), NOW()),
          (9, "Harseni","Sebes", NOW(), NOW()),
          (9, "Hoghiz","Bogata Olteana", NOW(), NOW()),
          (9, "Hoghiz","Cuciulata", NOW(), NOW()),
          (9, "Hoghiz","Dopca", NOW(), NOW()),
          (9, "Hoghiz","Fantana", NOW(), NOW()),
          (9, "Hoghiz","Lupsa", NOW(), NOW()),
          (9, "Homorod","Jimbor", NOW(), NOW()),
          (9, "Homorod","Mercheasa", NOW(), NOW()),
          (9, "Jibert","Dacia", NOW(), NOW()),
          (9, "Jibert","Granari", NOW(), NOW()),
          (9, "Jibert","Lovnic", NOW(), NOW()),
          (9, "Jibert","Valeni", NOW(), NOW()),
          (9, "Lisa","Breaza", NOW(), NOW()),
          (9, "Lisa","Pojorta", NOW(), NOW()),
          (9, "Maierus","Arini", NOW(), NOW()),
          (9, "Mandra","Ileni", NOW(), NOW()),
          (9, "Mandra","Rausor", NOW(), NOW()),
          (9, "Mandra","Toderita", NOW(), NOW()),
          (9, "Mandra","Sona", NOW(), NOW()),
          (9, "Moieciu","Cheia", NOW(), NOW()),
          (9, "Moieciu","Drumul Carului", NOW(), NOW()),
          (9, "Moieciu","Moieciu de Jos", NOW(), NOW()),
          (9, "Moieciu","Moieciu de Sus", NOW(), NOW()),
          (9, "Moieciu","Magura", NOW(), NOW()),
          (9, "Moieciu","Pestera", NOW(), NOW()),
          (9, "Ormenis","Augustin", NOW(), NOW()),
          (9, "Parau","Grid", NOW(), NOW()),
          (9, "Parau","Venetia de Jos", NOW(), NOW()),
          (9, "Parau","Venetia de Sus", NOW(), NOW()),
          (9, "Predeal","Paraul Rece", NOW(), NOW()),
          (9, "Predeal","Timisu de Jos", NOW(), NOW()),
          (9, "Predeal","Timisu de Sus", NOW(), NOW()),
          (9, "Prejmer","Lunca Calnicului", NOW(), NOW()),
          (9, "Prejmer","Stupinii Prejmerului", NOW(), NOW()),
          (9, "Racos","Mateias", NOW(), NOW()),
          (9, "Recea","Berivoi", NOW(), NOW()),
          (9, "Recea","Dejani", NOW(), NOW()),
          (9, "Recea","Gura Vaii", NOW(), NOW()),
          (9, "Recea","Iasi", NOW(), NOW()),
          (9, "Recea","Sasciori", NOW(), NOW()),
          (9, "Recea","Savastreni", NOW(), NOW()),
          (9, "Rupea","Fiser", NOW(), NOW()),
          (9, "Sambata De Sus","Statiunea Climaterica Sambata", NOW(), NOW()),
          (9, "Sercaia","Halmeag", NOW(), NOW()),
          (9, "Sercaia","Vad", NOW(), NOW()),
          (9, "Sinca","Bucium", NOW(), NOW()),
          (9, "Sinca","Ohaba", NOW(), NOW()),
          (9, "Sinca","Persani", NOW(), NOW()),
          (9, "Sinca","Valcea", NOW(), NOW()),
          (9, "Sinca","Sercaita", NOW(), NOW()),
          (9, "Sinca","Sinca Veche", NOW(), NOW()),
          (9, "Sinca Noua","Paltin", NOW(), NOW()),
          (9, "Soars","Barcut", NOW(), NOW()),
          (9, "Soars","Felmer", NOW(), NOW()),
          (9, "Soars","Rodbav", NOW(), NOW()),
          (9, "Soars","Selistat", NOW(), NOW()),
          (9, "Tarlungeni","Carpinis", NOW(), NOW()),
          (9, "Tarlungeni","Purcareni", NOW(), NOW()),
          (9, "Tarlungeni","Zizin", NOW(), NOW()),
          (9, "Ticusu","Cobor", NOW(), NOW()),
          (9, "Ticusu","Ticusu Vechi", NOW(), NOW()),
          (9, "Ucea","Corbi", NOW(), NOW()),
          (9, "Ucea","Feldioara", NOW(), NOW()),
          (9, "Ucea","Ucea de Jos", NOW(), NOW()),
          (9, "Ucea","Ucea de Sus", NOW(), NOW()),
          (9, "Ungra","Daisoara", NOW(), NOW()),
          (9, "Vama Buzaului","Acris", NOW(), NOW()),
          (9, "Vama Buzaului","Buzaiel", NOW(), NOW()),
          (9, "Vama Buzaului","Dalghiu", NOW(), NOW()),
          (9, "Vistea","Dragus", NOW(), NOW()),
          (9, "Vistea","Oltet", NOW(), NOW()),
          (9, "Vistea","Rucar", NOW(), NOW()),
          (9, "Vistea","Vistea de Jos", NOW(), NOW()),
          (9, "Vistea","Vistea de Sus", NOW(), NOW()),
          (9, "Vistea","Vistisoara", NOW(), NOW()),
          (9, "Voila","Cincsor", NOW(), NOW()),
          (9, "Voila","Dridif", NOW(), NOW()),
          (9, "Voila","Ludisor", NOW(), NOW()),
          (9, "Voila","Sambata de Jos", NOW(), NOW()),
          (9, "Voila","Voivodeni", NOW(), NOW()),
          (9, "Vulcan","Colonia 1 Mai", NOW(), NOW()),
          (9, "Vulcan","Holbav", NOW(), NOW()),
          (9, "Zarnesti","Tohanu Nou", NOW(), NOW())
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
        $sql="DELETE FROM localities WHERE county_id=9;";
        DB::connection()->getPdo()->exec($sql);
    }
}