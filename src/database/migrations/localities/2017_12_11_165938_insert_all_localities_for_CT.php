<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForCT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (14, "","23 August", NOW(), NOW()),
            (14, "","Adamclisi", NOW(), NOW()),
            (14, "","Agigea", NOW(), NOW()),
            (14, "","Albesti", NOW(), NOW()),
            (14, "","Aliman", NOW(), NOW()),
            (14, "","Amzacea", NOW(), NOW()),
            (14, "","Baneasa", NOW(), NOW()),
            (14, "","Baraganu", NOW(), NOW()),
            (14, "","Castelu", NOW(), NOW()),
            (14, "","Cerchezu", NOW(), NOW()),
            (14, "","Cernavoda", NOW(), NOW()),
            (14, "","Chirnogeni", NOW(), NOW()),
            (14, "","Ciobanu", NOW(), NOW()),
            (14, "","Ciocarlia", NOW(), NOW()),
            (14, "","Cobadin", NOW(), NOW()),
            (14, "","Cogealac", NOW(), NOW()),
            (14, "","Comana", NOW(), NOW()),
            (14, "","Constanta", NOW(), NOW()),
            (14, "","Corbu", NOW(), NOW()),
            (14, "","Costinesti", NOW(), NOW()),
            (14, "","Crucea", NOW(), NOW()),
            (14, "","Cumpana", NOW(), NOW()),
            (14, "","Deleni", NOW(), NOW()),
            (14, "","Dobromir", NOW(), NOW()),
            (14, "","Dumbraveni", NOW(), NOW()),
            (14, "","Ghindaresti", NOW(), NOW()),
            (14, "","Garliciu", NOW(), NOW()),
            (14, "","Horia", NOW(), NOW()),
            (14, "","Harsova", NOW(), NOW()),
            (14, "","Independenta", NOW(), NOW()),
            (14, "","Ion Corvin", NOW(), NOW()),
            (14, "","Istria", NOW(), NOW()),
            (14, "","Limanu", NOW(), NOW()),
            (14, "","Lipnita", NOW(), NOW()),
            (14, "","Lumina", NOW(), NOW()),
            (14, "","Mangalia", NOW(), NOW()),
            (14, "","Medgidia", NOW(), NOW()),
            (14, "","Mereni", NOW(), NOW()),
            (14, "","Mihai Viteazu", NOW(), NOW()),
            (14, "","Mihail Kogalniceanu", NOW(), NOW()),
            (14, "","Mircea Voda", NOW(), NOW()),
            (14, "","Negru Voda", NOW(), NOW()),
            (14, "","Nicolae Balcescu", NOW(), NOW()),
            (14, "","Navodari", NOW(), NOW()),
            (14, "","Oltina", NOW(), NOW()),
            (14, "","Ostrov", NOW(), NOW()),
            (14, "","Ovidiu", NOW(), NOW()),
            (14, "","Pantelimon", NOW(), NOW()),
            (14, "","Pecineaga", NOW(), NOW()),
            (14, "","Pestera", NOW(), NOW()),
            (14, "","Poarta Alba", NOW(), NOW()),
            (14, "","Rasova", NOW(), NOW()),
            (14, "","Saraiu", NOW(), NOW()),
            (14, "","Seimeni", NOW(), NOW()),
            (14, "","Silistea", NOW(), NOW()),
            (14, "","Sacele", NOW(), NOW()),
            (14, "","Techirghiol", NOW(), NOW()),
            (14, "","Topalu", NOW(), NOW()),
            (14, "","Topraisar", NOW(), NOW()),
            (14, "","Tortoman", NOW(), NOW()),
            (14, "","Tuzla", NOW(), NOW()),
            (14, "","Targusor", NOW(), NOW()),
            (14, "","Valu lui Traian", NOW(), NOW()),
            (14, "","Vulturu", NOW(), NOW()),
            (14, "23 August","Dulcesti", NOW(), NOW()),
            (14, "23 August","Mosneni", NOW(), NOW()),
            (14, "Adamclisi","Abrud", NOW(), NOW()),
            (14, "Adamclisi","Hateg", NOW(), NOW()),
            (14, "Adamclisi","Urluia", NOW(), NOW()),
            (14, "Adamclisi","Zorile", NOW(), NOW()),
            (14, "Agigea","Lazu", NOW(), NOW()),
            (14, "Agigea","Sanatoriul Agigea", NOW(), NOW()),
            (14, "Agigea","Statiunea Zoologica Marina Agigea", NOW(), NOW()),
            (14, "Albesti","Arsa", NOW(), NOW()),
            (14, "Albesti","Coroana", NOW(), NOW()),
            (14, "Albesti","Cotu Vaii", NOW(), NOW()),
            (14, "Albesti","Vartop", NOW(), NOW()),
            (14, "Aliman","Dunareni", NOW(), NOW()),
            (14, "Aliman","Floriile", NOW(), NOW()),
            (14, "Aliman","Vlahii", NOW(), NOW()),
            (14, "Amzacea","Casicea", NOW(), NOW()),
            (14, "Amzacea","General Scarisoreanu", NOW(), NOW()),
            (14, "Baneasa","Faurei", NOW(), NOW()),
            (14, "Baneasa","Negureni", NOW(), NOW()),
            (14, "Baneasa","Tudor Vladimirescu", NOW(), NOW()),
            (14, "Baraganu","Lanurile", NOW(), NOW()),
            (14, "Basarabi","Murfatlar", NOW(), NOW()),
            (14, "Basarabi","Siminoc", NOW(), NOW()),
            (14, "Castelu","Cuza Voda", NOW(), NOW()),
            (14, "Castelu","Nisipari", NOW(), NOW()),
            (14, "Cerchezu","Cascioarele", NOW(), NOW()),
            (14, "Cerchezu","Magura", NOW(), NOW()),
            (14, "Cerchezu","Viroaga", NOW(), NOW()),
            (14, "Chirnogeni","Credinta", NOW(), NOW()),
            (14, "Chirnogeni","Plopeni", NOW(), NOW()),
            (14, "Ciobanu","Miorita", NOW(), NOW()),
            (14, "Ciocarlia","Ciocarlia de Sus", NOW(), NOW()),
            (14, "Cobadin","Conacu", NOW(), NOW()),
            (14, "Cobadin","Curcani", NOW(), NOW()),
            (14, "Cobadin","Negresti", NOW(), NOW()),
            (14, "Cobadin","Viisoara", NOW(), NOW()),
            (14, "Cogealac","Fantanele", NOW(), NOW()),
            (14, "Cogealac","Gura Dobrogei", NOW(), NOW()),
            (14, "Cogealac","Ramnicu de Jos", NOW(), NOW()),
            (14, "Cogealac","Ramnicu de Sus", NOW(), NOW()),
            (14, "Cogealac","Tariverde", NOW(), NOW()),
            (14, "Comana","Pelinu", NOW(), NOW()),
            (14, "Comana","Tataru", NOW(), NOW()),
            (14, "Constanta","Mamaia", NOW(), NOW()),
            (14, "Constanta","Palazu Mare", NOW(), NOW()),
            (14, "Corbu","Luminita", NOW(), NOW()),
            (14, "Corbu","Vadu", NOW(), NOW()),
            (14, "Costinesti","Schitu", NOW(), NOW()),
            (14, "Crucea","Baltagesti", NOW(), NOW()),
            (14, "Crucea","Crisan", NOW(), NOW()),
            (14, "Crucea","Galbiori", NOW(), NOW()),
            (14, "Crucea","Stupina", NOW(), NOW()),
            (14, "Crucea","Siriu", NOW(), NOW()),
            (14, "Cumpana","Straja", NOW(), NOW()),
            (14, "Deleni","Petrosani", NOW(), NOW()),
            (14, "Deleni","Pietreni", NOW(), NOW()),
            (14, "Deleni","Sipotele", NOW(), NOW()),
            (14, "Dobromir","Cetatea", NOW(), NOW()),
            (14, "Dobromir","Dobromiru din Deal", NOW(), NOW()),
            (14, "Dobromir","Lespezi", NOW(), NOW()),
            (14, "Dobromir","Padureni", NOW(), NOW()),
            (14, "Dobromir","Valeni", NOW(), NOW()),
            (14, "Dumbraveni","Furnica", NOW(), NOW()),
            (14, "Eforie","Eforie Nord", NOW(), NOW()),
            (14, "Eforie","Eforie Sud", NOW(), NOW()),
            (14, "Harsova","Vadu Oii", NOW(), NOW()),
            (14, "Horia","Closca", NOW(), NOW()),
            (14, "Horia","Tichilesti", NOW(), NOW()),
            (14, "Independenta","Fantana Mare", NOW(), NOW()),
            (14, "Independenta","Movila Verde", NOW(), NOW()),
            (14, "Independenta","Olteni", NOW(), NOW()),
            (14, "Independenta","Tufani", NOW(), NOW()),
            (14, "Ion Corvin","Brebeni", NOW(), NOW()),
            (14, "Ion Corvin","Crangu", NOW(), NOW()),
            (14, "Ion Corvin","Raristea", NOW(), NOW()),
            (14, "Ion Corvin","Viile", NOW(), NOW()),
            (14, "Istria","Nuntasi", NOW(), NOW()),
            (14, "Limanu","2 Mai", NOW(), NOW()),
            (14, "Limanu","Hagieni", NOW(), NOW()),
            (14, "Limanu","Vama Veche", NOW(), NOW()),
            (14, "Lipnita","Canlia", NOW(), NOW()),
            (14, "Lipnita","Carvan", NOW(), NOW()),
            (14, "Lipnita","Coslugea", NOW(), NOW()),
            (14, "Lipnita","Cuiugiuc", NOW(), NOW()),
            (14, "Lipnita","Goruni", NOW(), NOW()),
            (14, "Lipnita","Izvoarele", NOW(), NOW()),
            (14, "Lumina","Oituz", NOW(), NOW()),
            (14, "Lumina","Sibioara", NOW(), NOW()),
            (14, "Mangalia","Cap Aurora", NOW(), NOW()),
            (14, "Mangalia","Jupiter", NOW(), NOW()),
            (14, "Mangalia","Neptun", NOW(), NOW()),
            (14, "Mangalia","Olimp", NOW(), NOW()),
            (14, "Mangalia","Saturn", NOW(), NOW()),
            (14, "Mangalia","Venus", NOW(), NOW()),
            (14, "Medgidia","Remus Opreanu", NOW(), NOW()),
            (14, "Medgidia","Valea Dacilor", NOW(), NOW()),
            (14, "Mereni","Ciobanita", NOW(), NOW()),
            (14, "Mereni","Miristea", NOW(), NOW()),
            (14, "Mereni","Osmancea", NOW(), NOW()),
            (14, "Mihai Viteazu","Sinoie", NOW(), NOW()),
            (14, "Mihail Kogalniceanu","Palazu Mic", NOW(), NOW()),
            (14, "Mihail Kogalniceanu","Piatra", NOW(), NOW()),
            (14, "Mircea Voda","Faclia", NOW(), NOW()),
            (14, "Mircea Voda","Gherghina", NOW(), NOW()),
            (14, "Mircea Voda","Saligny", NOW(), NOW()),
            (14, "Mircea Voda","Satu Nou", NOW(), NOW()),
            (14, "Mircea Voda","Stefan cel Mare", NOW(), NOW()),
            (14, "Mircea Voda","Tibrinu", NOW(), NOW()),
            (14, "Navodari","Mamaia-Sat", NOW(), NOW()),
            (14, "Negru Voda","Darabani", NOW(), NOW()),
            (14, "Negru Voda","Graniceru", NOW(), NOW()),
            (14, "Negru Voda","Valcelele", NOW(), NOW()),
            (14, "Nicolae Balcescu","Dorobantu", NOW(), NOW()),
            (14, "Oltina","Razoarele", NOW(), NOW()),
            (14, "Oltina","Satu Nou", NOW(), NOW()),
            (14, "Oltina","Strunga", NOW(), NOW()),
            (14, "Ostrov","Almalau", NOW(), NOW()),
            (14, "Ostrov","Bugeac", NOW(), NOW()),
            (14, "Ostrov","Esechioi", NOW(), NOW()),
            (14, "Ostrov","Galita", NOW(), NOW()),
            (14, "Ostrov","Garlita", NOW(), NOW()),
            (14, "Ovidiu","Poiana", NOW(), NOW()),
            (14, "Pantelimon","Calugareni", NOW(), NOW()),
            (14, "Pantelimon","Nistoresti", NOW(), NOW()),
            (14, "Pantelimon","Pantelimon de Jos", NOW(), NOW()),
            (14, "Pantelimon","Runcu", NOW(), NOW()),
            (14, "Pecineaga","Vanatori", NOW(), NOW()),
            (14, "Pestera","Ivrinezu Mare", NOW(), NOW()),
            (14, "Pestera","Ivrinezu Mic", NOW(), NOW()),
            (14, "Pestera","Izvoru Mare", NOW(), NOW()),
            (14, "Pestera","Veteranu", NOW(), NOW()),
            (14, "Poarta Alba","Nazarcea", NOW(), NOW()),
            (14, "Rasova","Cochirleni", NOW(), NOW()),
            (14, "Sacele","Traian", NOW(), NOW()),
            (14, "Saraiu","Dulgheru", NOW(), NOW()),
            (14, "Saraiu","Stejaru", NOW(), NOW()),
            (14, "Seimeni","Dunarea", NOW(), NOW()),
            (14, "Seimeni","Seimenii Mici", NOW(), NOW()),
            (14, "Silistea","Tepes Voda", NOW(), NOW()),
            (14, "Targusor","Casian", NOW(), NOW()),
            (14, "Targusor","Cheia", NOW(), NOW()),
            (14, "Targusor","Gradina", NOW(), NOW()),
            (14, "Targusor","Mireasa", NOW(), NOW()),
            (14, "Topalu","Capidava", NOW(), NOW()),
            (14, "Topraisar","Biruinta", NOW(), NOW()),
            (14, "Topraisar","Movilita", NOW(), NOW()),
            (14, "Topraisar","Potarnichea", NOW(), NOW()),
            (14, "Tortoman","Dropia", NOW(), NOW())
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

        $sql = "DELETE FROM localities WHERE county_id=14;";
        DB::connection()->getPdo()->exec($sql);
    }
}