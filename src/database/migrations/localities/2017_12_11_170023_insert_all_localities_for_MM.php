<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForMM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (27, "","Ardusat", NOW(), NOW()),
            (27, "","Arinis", NOW(), NOW()),
            (27, "","Asuaju de Sus", NOW(), NOW()),
            (27, "","Baia Mare", NOW(), NOW()),
            (27, "","Baia Sprie", NOW(), NOW()),
            (27, "","Bicaz", NOW(), NOW()),
            (27, "","Bistra", NOW(), NOW()),
            (27, "","Bocicoiu Mare", NOW(), NOW()),
            (27, "","Bogdan Voda", NOW(), NOW()),
            (27, "","Boiu Mare", NOW(), NOW()),
            (27, "","Borsa", NOW(), NOW()),
            (27, "","Botiza", NOW(), NOW()),
            (27, "","Budesti", NOW(), NOW()),
            (27, "","Barsana", NOW(), NOW()),
            (27, "","Baiut", NOW(), NOW()),
            (27, "","Baita de Sub Codru", NOW(), NOW()),
            (27, "","Basesti", NOW(), NOW()),
            (27, "","Cavnic", NOW(), NOW()),
            (27, "","Cernesti", NOW(), NOW()),
            (27, "","Cicarlau", NOW(), NOW()),
            (27, "","Copalnic-Manastur", NOW(), NOW()),
            (27, "","Coroieni", NOW(), NOW()),
            (27, "","Cupseni", NOW(), NOW()),
            (27, "","Campulung la Tisa", NOW(), NOW()),
            (27, "","Calinesti", NOW(), NOW()),
            (27, "","Desesti", NOW(), NOW()),
            (27, "","Dragomiresti", NOW(), NOW()),
            (27, "","Dumbravita", NOW(), NOW()),
            (27, "","Farcasa", NOW(), NOW()),
            (27, "","Giulesti", NOW(), NOW()),
            (27, "","Grosi", NOW(), NOW()),
            (27, "","Grosii Tiblesului", NOW(), NOW()),
            (27, "","Ieud", NOW(), NOW()),
            (27, "","Leordina", NOW(), NOW()),
            (27, "","Lapus", NOW(), NOW()),
            (27, "","Miresu Mare", NOW(), NOW()),
            (27, "","Moisei", NOW(), NOW()),
            (27, "","Oarta de Jos", NOW(), NOW()),
            (27, "","Ocna Sugatag", NOW(), NOW()),
            (27, "","Petrova", NOW(), NOW()),
            (27, "","Poienile Izei", NOW(), NOW()),
            (27, "","Poienile de Sub Munte", NOW(), NOW()),
            (27, "","Recea", NOW(), NOW()),
            (27, "","Remetea Chioarului", NOW(), NOW()),
            (27, "","Remeti", NOW(), NOW()),
            (27, "","Repedea", NOW(), NOW()),
            (27, "","Rona de Jos", NOW(), NOW()),
            (27, "","Rona de Sus", NOW(), NOW()),
            (27, "","Rozavlea", NOW(), NOW()),
            (27, "","Ruscova", NOW(), NOW()),
            (27, "","Sarasau", NOW(), NOW()),
            (27, "","Satulung", NOW(), NOW()),
            (27, "","Seini", NOW(), NOW()),
            (27, "","Sighetu Marmatiei", NOW(), NOW()),
            (27, "","Stramtura", NOW(), NOW()),
            (27, "","Suciu de Sus", NOW(), NOW()),
            (27, "","Sacel", NOW(), NOW()),
            (27, "","Sacalaseni", NOW(), NOW()),
            (27, "","Salistea de Sus", NOW(), NOW()),
            (27, "","Salsig", NOW(), NOW()),
            (27, "","Sapanta", NOW(), NOW()),
            (27, "","Targu Lapus", NOW(), NOW()),
            (27, "","Tautii-Magheraus", NOW(), NOW()),
            (27, "","Ulmeni", NOW(), NOW()),
            (27, "","Vadu Izei", NOW(), NOW()),
            (27, "","Valea Chioarului", NOW(), NOW()),
            (27, "","Vima Mica", NOW(), NOW()),
            (27, "","Viseu de Jos", NOW(), NOW()),
            (27, "","Viseu de Sus", NOW(), NOW()),
            (27, "","Sieu", NOW(), NOW()),
            (27, "","Sisesti", NOW(), NOW()),
            (27, "","Somcuta Mare", NOW(), NOW()),
            (27, "Ardusat","Ariesu de Camp", NOW(), NOW()),
            (27, "Ardusat","Coltirea", NOW(), NOW()),
            (27, "Arinis","Rodina", NOW(), NOW()),
            (27, "Arinis","Tamasesti", NOW(), NOW()),
            (27, "Asuaju De Sus","Asuaju de Jos", NOW(), NOW()),
            (27, "Baia Mare","Blidari", NOW(), NOW()),
            (27, "Baia Mare","Firiza", NOW(), NOW()),
            (27, "Baia Mare","Valea Neagra", NOW(), NOW()),
            (27, "Baia Sprie","Chiuzbaia", NOW(), NOW()),
            (27, "Baia Sprie","Satu Nou de Sus", NOW(), NOW()),
            (27, "Baia Sprie","Tautii de Sus", NOW(), NOW()),
            (27, "Baita De Sub Codru","Urmenis", NOW(), NOW()),
            (27, "Baiut","Poiana Botizii", NOW(), NOW()),
            (27, "Baiut","Strambu-Baiut", NOW(), NOW()),
            (27, "Barsana","Nanesti", NOW(), NOW()),
            (27, "Barsana","Oncesti", NOW(), NOW()),
            (27, "Basesti","Odesti", NOW(), NOW()),
            (27, "Basesti","Stremt", NOW(), NOW()),
            (27, "Basesti","Saliste", NOW(), NOW()),
            (27, "Bicaz","Ciuta", NOW(), NOW()),
            (27, "Bicaz","Corni", NOW(), NOW()),
            (27, "Bistra","Crasna Viseului", NOW(), NOW()),
            (27, "Bistra","Valea Viseului", NOW(), NOW()),
            (27, "Bocicoiu Mare","Craciunesti", NOW(), NOW()),
            (27, "Bocicoiu Mare","Lunca la Tisa", NOW(), NOW()),
            (27, "Bocicoiu Mare","Tisa", NOW(), NOW()),
            (27, "Bogdan Voda","Bocicoel", NOW(), NOW()),
            (27, "Boiu Mare","Francenii Boiului", NOW(), NOW()),
            (27, "Boiu Mare","Prislop", NOW(), NOW()),
            (27, "Boiu Mare","Romanesti", NOW(), NOW()),
            (27, "Borsa","Baile Borsa", NOW(), NOW()),
            (27, "Budesti","Sarbi", NOW(), NOW()),
            (27, "Calinesti","Cornesti", NOW(), NOW()),
            (27, "Calinesti","Valeni", NOW(), NOW()),
            (27, "Cernesti","Brebeni", NOW(), NOW()),
            (27, "Cernesti","Ciocotis", NOW(), NOW()),
            (27, "Cernesti","Fanate", NOW(), NOW()),
            (27, "Cernesti","Izvoarele", NOW(), NOW()),
            (27, "Cernesti","Magureni", NOW(), NOW()),
            (27, "Cernesti","Trestia", NOW(), NOW()),
            (27, "Cicarlau","Bargau", NOW(), NOW()),
            (27, "Cicarlau","Handalu Ilbei", NOW(), NOW()),
            (27, "Cicarlau","Ilba", NOW(), NOW()),
            (27, "Copalnic-Manastur","Berinta", NOW(), NOW()),
            (27, "Copalnic-Manastur","Copalnic", NOW(), NOW()),
            (27, "Copalnic-Manastur","Copalnic-Deal", NOW(), NOW()),
            (27, "Copalnic-Manastur","Curtuiusu Mic", NOW(), NOW()),
            (27, "Copalnic-Manastur","Carpinis", NOW(), NOW()),
            (27, "Copalnic-Manastur","Fauresti", NOW(), NOW()),
            (27, "Copalnic-Manastur","Laschia", NOW(), NOW()),
            (27, "Copalnic-Manastur","Preluca Noua", NOW(), NOW()),
            (27, "Copalnic-Manastur","Preluca Veche", NOW(), NOW()),
            (27, "Copalnic-Manastur","Rusor", NOW(), NOW()),
            (27, "Copalnic-Manastur","Vad", NOW(), NOW()),
            (27, "Coroieni","Baba", NOW(), NOW()),
            (27, "Coroieni","Dealu Mare", NOW(), NOW()),
            (27, "Coroieni","Draghia", NOW(), NOW()),
            (27, "Coroieni","Valenii Lapusului", NOW(), NOW()),
            (27, "Cupseni","Costeni", NOW(), NOW()),
            (27, "Cupseni","Libotin", NOW(), NOW()),
            (27, "Cupseni","Ungureni", NOW(), NOW()),
            (27, "Desesti","Harnicesti", NOW(), NOW()),
            (27, "Desesti","Mara", NOW(), NOW()),
            (27, "Dumbravita","Chechis", NOW(), NOW()),
            (27, "Dumbravita","Carbunari", NOW(), NOW()),
            (27, "Dumbravita","Rus", NOW(), NOW()),
            (27, "Dumbravita","Unguras", NOW(), NOW()),
            (27, "Dumbravita","Sindresti", NOW(), NOW()),
            (27, "Farcasa","Buzesti", NOW(), NOW()),
            (27, "Farcasa","Sarbi", NOW(), NOW()),
            (27, "Farcasa","Tamaia", NOW(), NOW()),
            (27, "Giulesti","Berbesti", NOW(), NOW()),
            (27, "Giulesti","Feresti", NOW(), NOW()),
            (27, "Giulesti","Manastirea", NOW(), NOW()),
            (27, "Grosi","Ocolis", NOW(), NOW()),
            (27, "Grosi","Satu Nou de Jos", NOW(), NOW()),
            (27, "Miresu Mare","Danestii Chioarului", NOW(), NOW()),
            (27, "Miresu Mare","Iadara", NOW(), NOW()),
            (27, "Miresu Mare","Lucacesti", NOW(), NOW()),
            (27, "Miresu Mare","Remeti pe Somes", NOW(), NOW()),
            (27, "Miresu Mare","Stejera", NOW(), NOW()),
            (27, "Miresu Mare","Tulghies", NOW(), NOW()),
            (27, "Oarta De Jos","Oarta de Sus", NOW(), NOW()),
            (27, "Oarta De Jos","Ortita", NOW(), NOW()),
            (27, "Ocna Sugatag","Breb", NOW(), NOW()),
            (27, "Ocna Sugatag","Hoteni", NOW(), NOW()),
            (27, "Ocna Sugatag","Sat-Sugatag", NOW(), NOW()),
            (27, "Recea","Bozanta Mica", NOW(), NOW()),
            (27, "Recea","Lapusel", NOW(), NOW()),
            (27, "Recea","Mocira", NOW(), NOW()),
            (27, "Recea","Sasar", NOW(), NOW()),
            (27, "Remetea Chioarului","Berchez", NOW(), NOW()),
            (27, "Remetea Chioarului","Berchezoaia", NOW(), NOW()),
            (27, "Remetea Chioarului","Posta", NOW(), NOW()),
            (27, "Remetea Chioarului","Remecioara", NOW(), NOW()),
            (27, "Remeti","Piatra", NOW(), NOW()),
            (27, "Remeti","Teceu Mic", NOW(), NOW()),
            (27, "Rona De Sus","Costiui", NOW(), NOW()),
            (27, "Rozavlea","Salta", NOW(), NOW()),
            (27, "Sacalaseni","Coas", NOW(), NOW()),
            (27, "Sacalaseni","Coltau", NOW(), NOW()),
            (27, "Sacalaseni","Coruia", NOW(), NOW()),
            (27, "Sacalaseni","Culcea", NOW(), NOW()),
            (27, "Sacalaseni","Catalina", NOW(), NOW()),
            (27, "Sacalaseni","Intrerauri", NOW(), NOW()),
            (27, "Salsig","Gardani", NOW(), NOW()),
            (27, "Satulung","Ariesu de Padure", NOW(), NOW()),
            (27, "Satulung","Fersig", NOW(), NOW()),
            (27, "Satulung","Finteusu Mic", NOW(), NOW()),
            (27, "Satulung","Hideaga", NOW(), NOW()),
            (27, "Satulung","Mogosesti", NOW(), NOW()),
            (27, "Satulung","Pribilesti", NOW(), NOW()),
            (27, "Seini","Sabisa", NOW(), NOW()),
            (27, "Seini","Viile Apei", NOW(), NOW()),
            (27, "Sighetu Marmatiei","Iapa", NOW(), NOW()),
            (27, "Sighetu Marmatiei","Lazu Baciului", NOW(), NOW()),
            (27, "Sighetu Marmatiei","Valea Cufundoasa", NOW(), NOW()),
            (27, "Sighetu Marmatiei","Valea Hotarului", NOW(), NOW()),
            (27, "Sighetu Marmatiei","Sugau", NOW(), NOW()),
            (27, "Sisesti","Bontaieni", NOW(), NOW()),
            (27, "Sisesti","Cetatele", NOW(), NOW()),
            (27, "Sisesti","Danesti", NOW(), NOW()),
            (27, "Sisesti","Negreia", NOW(), NOW()),
            (27, "Sisesti","Plopis", NOW(), NOW()),
            (27, "Sisesti","Surdesti", NOW(), NOW()),
            (27, "Somcuta Mare","Buciumi", NOW(), NOW()),
            (27, "Somcuta Mare","Buteasa", NOW(), NOW()),
            (27, "Somcuta Mare","Ciolt", NOW(), NOW()),
            (27, "Somcuta Mare","Codru Butesii", NOW(), NOW()),
            (27, "Somcuta Mare","Finteusu Mare", NOW(), NOW()),
            (27, "Somcuta Mare","Hovrila", NOW(), NOW()),
            (27, "Somcuta Mare","Valenii Somcutei", NOW(), NOW()),
            (27, "Stramtura","Glod", NOW(), NOW()),
            (27, "Stramtura","Slatioara", NOW(), NOW()),
            (27, "Suciu De Sus","Larga", NOW(), NOW()),
            (27, "Suciu De Sus","Suciu de Jos", NOW(), NOW()),
            (27, "Targu Lapus","Boiereni", NOW(), NOW()),
            (27, "Targu Lapus","Borcut", NOW(), NOW()),
            (27, "Targu Lapus","Cufoaia", NOW(), NOW()),
            (27, "Targu Lapus","Dobricu Lapusului", NOW(), NOW()),
            (27, "Targu Lapus","Dumbrava", NOW(), NOW()),
            (27, "Targu Lapus","Damacuseni", NOW(), NOW()),
            (27, "Targu Lapus","Fantanele", NOW(), NOW()),
            (27, "Targu Lapus","Groape", NOW(), NOW()),
            (27, "Targu Lapus","Inau", NOW(), NOW()),
            (27, "Targu Lapus","Rogoz", NOW(), NOW()),
            (27, "Targu Lapus","Rohia", NOW(), NOW()),
            (27, "Targu Lapus","Razoare", NOW(), NOW()),
            (27, "Targu Lapus","Stoiceni", NOW(), NOW()),
            (27, "Tautii-Magheraus","Bozanta Mare", NOW(), NOW()),
            (27, "Tautii-Magheraus","Busag", NOW(), NOW()),
            (27, "Tautii-Magheraus","Baita", NOW(), NOW()),
            (27, "Tautii-Magheraus","Merisor", NOW(), NOW()),
            (27, "Tautii-Magheraus","Nistru", NOW(), NOW()),
            (27, "Tautii-Magheraus","Ulmoasa", NOW(), NOW()),
            (27, "Ulmeni","Arduzel", NOW(), NOW()),
            (27, "Ulmeni","Chelinta", NOW(), NOW()),
            (27, "Ulmeni","Manau", NOW(), NOW()),
            (27, "Ulmeni","Somes-Uileac", NOW(), NOW()),
            (27, "Ulmeni","Tohat", NOW(), NOW()),
            (27, "Ulmeni","Vicea", NOW(), NOW()),
            (27, "Ulmeni","Ticau", NOW(), NOW()),
            (27, "Vadu Izei","Valea Stejarului", NOW(), NOW()),
            (27, "Valea Chioarului","Curtuiusu Mare", NOW(), NOW()),
            (27, "Valea Chioarului","Durusa", NOW(), NOW()),
            (27, "Valea Chioarului","Fericea", NOW(), NOW()),
            (27, "Valea Chioarului","Mesteacan", NOW(), NOW()),
            (27, "Valea Chioarului","Varai", NOW(), NOW()),
            (27, "Vima Mica","Aspra", NOW(), NOW()),
            (27, "Vima Mica","Dealu Corbului", NOW(), NOW()),
            (27, "Vima Mica","Jugastreni", NOW(), NOW()),
            (27, "Vima Mica","Peteritea", NOW(), NOW()),
            (27, "Vima Mica","Salnita", NOW(), NOW()),
            (27, "Vima Mica","Vima Mare", NOW(), NOW()),
            (27, "Viseu De Sus","Viseu de Mijloc", NOW(), NOW())
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
        $sql = "DELETE FROM localities WHERE county_id=27;";
        DB::connection()->getPdo()->exec($sql);
    }
}

