<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForTR extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (37, "","Alexandria", NOW(), NOW()),
            (37, "","Balaci", NOW(), NOW()),
            (37, "","Blejesti", NOW(), NOW()),
            (37, "","Bogdana", NOW(), NOW()),
            (37, "","Botoroaga", NOW(), NOW()),
            (37, "","Bragadiru", NOW(), NOW()),
            (37, "","Branceni", NOW(), NOW()),
            (37, "","Bujoreni", NOW(), NOW()),
            (37, "","Bujoru", NOW(), NOW()),
            (37, "","Buzescu", NOW(), NOW()),
            (37, "","Babaita", NOW(), NOW()),
            (37, "","Cervenia", NOW(), NOW()),
            (37, "","Ciuperceni", NOW(), NOW()),
            (37, "","Contesti", NOW(), NOW()),
            (37, "","Cosmesti", NOW(), NOW()),
            (37, "","Crevenicu", NOW(), NOW()),
            (37, "","Crangeni", NOW(), NOW()),
            (37, "","Crangu", NOW(), NOW()),
            (37, "","Calinesti", NOW(), NOW()),
            (37, "","Calmatuiu", NOW(), NOW()),
            (37, "","Calmatuiu de Sus", NOW(), NOW()),
            (37, "","Didesti", NOW(), NOW()),
            (37, "","Dobrotesti", NOW(), NOW()),
            (37, "","Dracsenei", NOW(), NOW()),
            (37, "","Draganesti de Vede", NOW(), NOW()),
            (37, "","Draganesti-Vlasca", NOW(), NOW()),
            (37, "","Frumoasa", NOW(), NOW()),
            (37, "","Furculesti", NOW(), NOW()),
            (37, "","Gratia", NOW(), NOW()),
            (37, "","Galateni", NOW(), NOW()),
            (37, "","Islaz", NOW(), NOW()),
            (37, "","Izvoarele", NOW(), NOW()),
            (37, "","Lisa", NOW(), NOW()),
            (37, "","Lita", NOW(), NOW()),
            (37, "","Lunca", NOW(), NOW()),
            (37, "","Mavrodin", NOW(), NOW()),
            (37, "","Mosteni", NOW(), NOW()),
            (37, "","Marzanesti", NOW(), NOW()),
            (37, "","Magura", NOW(), NOW()),
            (37, "","Maldaeni", NOW(), NOW()),
            (37, "","Nanov", NOW(), NOW()),
            (37, "","Necsesti", NOW(), NOW()),
            (37, "","Nenciulesti", NOW(), NOW()),
            (37, "","Nasturelu", NOW(), NOW()),
            (37, "","Olteni", NOW(), NOW()),
            (37, "","Peretu", NOW(), NOW()),
            (37, "","Piatra", NOW(), NOW()),
            (37, "","Pietrosani", NOW(), NOW()),
            (37, "","Plopii-Slavitesti", NOW(), NOW()),
            (37, "","Plosca", NOW(), NOW()),
            (37, "","Poeni", NOW(), NOW()),
            (37, "","Poroschia", NOW(), NOW()),
            (37, "","Putineiu", NOW(), NOW()),
            (37, "","Rosiori de Vede", NOW(), NOW()),
            (37, "","Rasmiresti", NOW(), NOW()),
            (37, "","Salcia", NOW(), NOW()),
            (37, "","Scrioastea", NOW(), NOW()),
            (37, "","Scurtu Mare", NOW(), NOW()),
            (37, "","Seaca", NOW(), NOW()),
            (37, "","Segarcea-Vale", NOW(), NOW()),
            (37, "","Sfintesti", NOW(), NOW()),
            (37, "","Silistea", NOW(), NOW()),
            (37, "","Silistea-Gumesti", NOW(), NOW()),
            (37, "","Slobozia Mandra", NOW(), NOW()),
            (37, "","Smardioasa", NOW(), NOW()),
            (37, "","Stejaru", NOW(), NOW()),
            (37, "","Suhaia", NOW(), NOW()),
            (37, "","Sarbeni", NOW(), NOW()),
            (37, "","Saceni", NOW(), NOW()),
            (37, "","Traian", NOW(), NOW()),
            (37, "","Trivalea-Mosteni", NOW(), NOW()),
            (37, "","Troianul", NOW(), NOW()),
            (37, "","Turnu Magurele", NOW(), NOW()),
            (37, "","Tatarastii de Jos", NOW(), NOW()),
            (37, "","Tatarastii de Sus", NOW(), NOW()),
            (37, "","Vedea", NOW(), NOW()),
            (37, "","Videle", NOW(), NOW()),
            (37, "","Viisoara", NOW(), NOW()),
            (37, "","Vitanesti", NOW(), NOW()),
            (37, "","Zimnicea", NOW(), NOW()),
            (37, "","Zambreasca", NOW(), NOW()),
            (37, "","Storobaneasa", NOW(), NOW()),
            (37, "","Tiganesti", NOW(), NOW()),
            (37, "Babaita","Clanita", NOW(), NOW()),
            (37, "Babaita","Frasinet", NOW(), NOW()),
            (37, "Babaita","Merisani", NOW(), NOW()),
            (37, "Balaci","Burdeni", NOW(), NOW()),
            (37, "Balaci","Tecuci", NOW(), NOW()),
            (37, "Blejesti","Baciu", NOW(), NOW()),
            (37, "Blejesti","Sericu", NOW(), NOW()),
            (37, "Bogdana","Brosteanca", NOW(), NOW()),
            (37, "Bogdana","Ulmeni", NOW(), NOW()),
            (37, "Bogdana","Urluiu", NOW(), NOW()),
            (37, "Botoroaga","Calugaru", NOW(), NOW()),
            (37, "Botoroaga","Tunari", NOW(), NOW()),
            (37, "Botoroaga","Tarnava", NOW(), NOW()),
            (37, "Botoroaga","Valea Ciresului", NOW(), NOW()),
            (37, "Bujoreni","Darvas", NOW(), NOW()),
            (37, "Bujoreni","Prunaru", NOW(), NOW()),
            (37, "Calinesti","Antonesti", NOW(), NOW()),
            (37, "Calinesti","Copaceanca", NOW(), NOW()),
            (37, "Calinesti","Licuriciu", NOW(), NOW()),
            (37, "Calinesti","Marita", NOW(), NOW()),
            (37, "Calmatuiu","Bujoru", NOW(), NOW()),
            (37, "Calmatuiu","Caravaneti", NOW(), NOW()),
            (37, "Calmatuiu","Nicolae Balcescu", NOW(), NOW()),
            (37, "Calmatuiu De Sus","Bacalesti", NOW(), NOW()),
            (37, "Calmatuiu De Sus","Ionascu", NOW(), NOW()),
            (37, "Ciolanesti","Baldovinesti", NOW(), NOW()),
            (37, "Ciolanesti","Ciolanestii din Deal", NOW(), NOW()),
            (37, "Ciolanesti","Ciolanestii din Vale", NOW(), NOW()),
            (37, "Ciuperceni","Poiana", NOW(), NOW()),
            (37, "Cosmesti","Ciuperceni", NOW(), NOW()),
            (37, "Crangeni","Balta Sarata", NOW(), NOW()),
            (37, "Crangeni","Dorobantu", NOW(), NOW()),
            (37, "Crangeni","Stejaru", NOW(), NOW()),
            (37, "Crangu","Dracea", NOW(), NOW()),
            (37, "Crangu","Florica", NOW(), NOW()),
            (37, "Crangu","Secara", NOW(), NOW()),
            (37, "Crangu","Zlata", NOW(), NOW()),
            (37, "Crevenicu","Radulesti", NOW(), NOW()),
            (37, "Didesti","Satu Nou", NOW(), NOW()),
            (37, "Didesti","Insuratei", NOW(), NOW()),
            (37, "Dobrotesti","Merisani", NOW(), NOW()),
            (37, "Dracsenei","Beuca", NOW(), NOW()),
            (37, "Dracsenei","Dracsani", NOW(), NOW()),
            (37, "Dracsenei","Odobeasca", NOW(), NOW()),
            (37, "Dracsenei","Plopi", NOW(), NOW()),
            (37, "Dracsenei","Satul Vechi", NOW(), NOW()),
            (37, "Draganesti De Vede","Magura cu Liliac", NOW(), NOW()),
            (37, "Draganesti De Vede","Vacaresti", NOW(), NOW()),
            (37, "Draganesti-Vlasca","Comoara", NOW(), NOW()),
            (37, "Draganesti-Vlasca","Vaceni", NOW(), NOW()),
            (37, "Frumoasa","Pauleasca", NOW(), NOW()),
            (37, "Furculesti","Mosteni", NOW(), NOW()),
            (37, "Furculesti","Spatarei", NOW(), NOW()),
            (37, "Furculesti","Voievoda", NOW(), NOW()),
            (37, "Galateni","Bascoveni", NOW(), NOW()),
            (37, "Galateni","Gradisteanca", NOW(), NOW()),
            (37, "Gratia","Ciurari-Deal", NOW(), NOW()),
            (37, "Gratia","Draghinesti", NOW(), NOW()),
            (37, "Islaz","Moldoveni", NOW(), NOW()),
            (37, "Lisa","Vanatori", NOW(), NOW()),
            (37, "Lunca","Pleasov", NOW(), NOW()),
            (37, "Lunca","Prundu", NOW(), NOW()),
            (37, "Lunca","Saelele", NOW(), NOW()),
            (37, "Magura","Guruieni", NOW(), NOW()),
            (37, "Marzanesti","Cernetu", NOW(), NOW()),
            (37, "Marzanesti","Teleormanu", NOW(), NOW()),
            (37, "Marzanesti","Valea Parului", NOW(), NOW()),
            (37, "Mereni","Merenii de Jos", NOW(), NOW()),
            (37, "Mereni","Merenii de Sus", NOW(), NOW()),
            (37, "Mereni","Stefeni", NOW(), NOW()),
            (37, "Nasturelu","Zimnicele", NOW(), NOW()),
            (37, "Necsesti","Belciug", NOW(), NOW()),
            (37, "Necsesti","Gardesti", NOW(), NOW()),
            (37, "Nenciulesti","Paru Rotund", NOW(), NOW()),
            (37, "Olteni","Perii Brosteni", NOW(), NOW()),
            (37, "Orbeasca","Laceni", NOW(), NOW()),
            (37, "Orbeasca","Orbeasca de Jos", NOW(), NOW()),
            (37, "Orbeasca","Orbeasca de Sus", NOW(), NOW()),
            (37, "Plopii-Slavitesti","Beciu", NOW(), NOW()),
            (37, "Plopii-Slavitesti","Brancoveanca", NOW(), NOW()),
            (37, "Plopii-Slavitesti","Barsestii de Jos", NOW(), NOW()),
            (37, "Plopii-Slavitesti","Dudu", NOW(), NOW()),
            (37, "Plopii-Slavitesti","Smardan", NOW(), NOW()),
            (37, "Poeni","Banov", NOW(), NOW()),
            (37, "Poeni","Bratesti", NOW(), NOW()),
            (37, "Poeni","Catunu", NOW(), NOW()),
            (37, "Poeni","Preajba", NOW(), NOW()),
            (37, "Poeni","Vatasi", NOW(), NOW()),
            (37, "Poeni","Tavarlau", NOW(), NOW()),
            (37, "Poroschia","Calomfiresti", NOW(), NOW()),
            (37, "Putineiu","Baduleasa", NOW(), NOW()),
            (37, "Putineiu","Carlomanu", NOW(), NOW()),
            (37, "Radoiesti","Cetatea", NOW(), NOW()),
            (37, "Radoiesti","Radoiesti-Deal", NOW(), NOW()),
            (37, "Radoiesti","Radoiesti-Vale", NOW(), NOW()),
            (37, "Rasmiresti","Ludaneasca", NOW(), NOW()),
            (37, "Saceni","Butculesti", NOW(), NOW()),
            (37, "Saceni","Ciurari", NOW(), NOW()),
            (37, "Salcia","Baneasa", NOW(), NOW()),
            (37, "Salcia","Tudor Vladimirescu", NOW(), NOW()),
            (37, "Sarbeni","Sarbenii de Jos", NOW(), NOW()),
            (37, "Sarbeni","Udeni", NOW(), NOW()),
            (37, "Scrioastea","Brebina", NOW(), NOW()),
            (37, "Scrioastea","Cucueti", NOW(), NOW()),
            (37, "Scrioastea","Viile", NOW(), NOW()),
            (37, "Scurtu Mare","Albeni", NOW(), NOW()),
            (37, "Scurtu Mare","Dracesti", NOW(), NOW()),
            (37, "Scurtu Mare","Negrilesti", NOW(), NOW()),
            (37, "Scurtu Mare","Scurtu-Slavesti", NOW(), NOW()),
            (37, "Scurtu Mare","Valea Postei", NOW(), NOW()),
            (37, "Seaca","Navodari", NOW(), NOW()),
            (37, "Segarcea-Vale","Olteanca", NOW(), NOW()),
            (37, "Segarcea-Vale","Segarcea-Deal", NOW(), NOW()),
            (37, "Silistea","Butesti", NOW(), NOW()),
            (37, "Silistea","Purani", NOW(), NOW()),
            (37, "Silistea","Puranii de Sus", NOW(), NOW()),
            (37, "Silistea","Silistea Mica", NOW(), NOW()),
            (37, "Slobozia Mandra","Uda-Clocociov", NOW(), NOW()),
            (37, "Slobozia Mandra","Uda-Paciurea", NOW(), NOW()),
            (37, "Smardioasa","Soimu", NOW(), NOW()),
            (37, "Stejaru","Bratcovu", NOW(), NOW()),
            (37, "Stejaru","Gresia", NOW(), NOW()),
            (37, "Stejaru","Socetu", NOW(), NOW()),
            (37, "Storobaneasa","Beiu", NOW(), NOW()),
            (37, "Suhaia","Fantanele", NOW(), NOW()),
            (37, "Talpa","Linia Costii", NOW(), NOW()),
            (37, "Talpa","Rotaresti", NOW(), NOW()),
            (37, "Talpa","Talpa Postei", NOW(), NOW()),
            (37, "Talpa","Talpa-Bascoveni", NOW(), NOW()),
            (37, "Talpa","Talpa-Ograzile", NOW(), NOW()),
            (37, "Tatarastii De Jos","Lada", NOW(), NOW()),
            (37, "Tatarastii De Jos","Negreni", NOW(), NOW()),
            (37, "Tatarastii De Jos","Negrenii de Sus", NOW(), NOW()),
            (37, "Tatarastii De Jos","Negrenii-Osebiti", NOW(), NOW()),
            (37, "Tatarastii De Jos","Obartu", NOW(), NOW()),
            (37, "Tatarastii De Jos","Slavesti", NOW(), NOW()),
            (37, "Tatarastii De Sus","Dobreni", NOW(), NOW()),
            (37, "Tatarastii De Sus","Udupu", NOW(), NOW()),
            (37, "Trivalea-Mosteni","Bratasani", NOW(), NOW()),
            (37, "Trivalea-Mosteni","Deparati", NOW(), NOW()),
            (37, "Troianul","Dulceni", NOW(), NOW()),
            (37, "Troianul","Vatra", NOW(), NOW()),
            (37, "Vartoape","Garagau", NOW(), NOW()),
            (37, "Vartoape","Vartoapele de Jos", NOW(), NOW()),
            (37, "Vartoape","Vartoapele de Sus", NOW(), NOW()),
            (37, "Vedea","Albesti", NOW(), NOW()),
            (37, "Vedea","Cosoteni", NOW(), NOW()),
            (37, "Vedea","Dulceanca", NOW(), NOW()),
            (37, "Vedea","Meri", NOW(), NOW()),
            (37, "Videle","Cosoaia", NOW(), NOW()),
            (37, "Vitanesti","Purani", NOW(), NOW()),
            (37, "Vitanesti","Schitu Poienari", NOW(), NOW()),
            (37, "Vitanesti","Silistea", NOW(), NOW())
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
        $sql = "DELETE FROM localities WHERE county_id=37;";
        DB::connection()->getPdo()->exec($sql);
    }
}
