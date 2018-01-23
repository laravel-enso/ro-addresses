<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForCV extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (15, "","Aita Mare", NOW(), NOW()),
            (15, "","Baraolt", NOW(), NOW()),
            (15, "","Barcani", NOW(), NOW()),
            (15, "","Belin", NOW(), NOW()),
            (15, "","Bodoc", NOW(), NOW()),
            (15, "","Borosneu Mare", NOW(), NOW()),
            (15, "","Brates", NOW(), NOW()),
            (15, "","Bretcu", NOW(), NOW()),
            (15, "","Bradut", NOW(), NOW()),
            (15, "","Catalina", NOW(), NOW()),
            (15, "","Cernat", NOW(), NOW()),
            (15, "","Chichis", NOW(), NOW()),
            (15, "","Comandau", NOW(), NOW()),
            (15, "","Covasna", NOW(), NOW()),
            (15, "","Dobarlau", NOW(), NOW()),
            (15, "","Ghelinta", NOW(), NOW()),
            (15, "","Ghidfalau", NOW(), NOW()),
            (15, "","Haghig", NOW(), NOW()),
            (15, "","Ilieni", NOW(), NOW()),
            (15, "","Lemnia", NOW(), NOW()),
            (15, "","Malnas", NOW(), NOW()),
            (15, "","Moacsa", NOW(), NOW()),
            (15, "","Ojdula", NOW(), NOW()),
            (15, "","Ozun", NOW(), NOW()),
            (15, "","Poian", NOW(), NOW()),
            (15, "","Reci", NOW(), NOW()),
            (15, "","Sita Buzaului", NOW(), NOW()),
            (15, "","Sanzieni", NOW(), NOW()),
            (15, "","Turia", NOW(), NOW()),
            (15, "","Valea Crisului", NOW(), NOW()),
            (15, "","Valea Mare", NOW(), NOW()),
            (15, "","Valcele", NOW(), NOW()),
            (15, "","Varghis", NOW(), NOW()),
            (15, "","Zagon", NOW(), NOW()),
            (15, "","Zabala", NOW(), NOW()),
            (15, "","Intorsura Buzaului", NOW(), NOW()),
            (15, "Aita Mare","Aita Medie", NOW(), NOW()),
            (15, "Baraolt","Biborteni", NOW(), NOW()),
            (15, "Baraolt","Bodos", NOW(), NOW()),
            (15, "Baraolt","Capeni", NOW(), NOW()),
            (15, "Baraolt","Miclosoara", NOW(), NOW()),
            (15, "Baraolt","Racosul de Sus", NOW(), NOW()),
            (15, "Barcani","Ladauti", NOW(), NOW()),
            (15, "Barcani","Saramas", NOW(), NOW()),
            (15, "Batani","Aita Seaca", NOW(), NOW()),
            (15, "Batani","Batanii Mari", NOW(), NOW()),
            (15, "Batani","Batanii Mici", NOW(), NOW()),
            (15, "Batani","Herculian", NOW(), NOW()),
            (15, "Batani","Ozunca-Bai", NOW(), NOW()),
            (15, "Belin","Belin-Vale", NOW(), NOW()),
            (15, "Bodoc","Olteni", NOW(), NOW()),
            (15, "Bodoc","Zalan", NOW(), NOW()),
            (15, "Borosneu Mare","Borosneu Mic", NOW(), NOW()),
            (15, "Borosneu Mare","Dobolii de Sus", NOW(), NOW()),
            (15, "Borosneu Mare","Let", NOW(), NOW()),
            (15, "Borosneu Mare","Valea Mica", NOW(), NOW()),
            (15, "Borosneu Mare","Tufalau", NOW(), NOW()),
            (15, "Bradut","Doboseni", NOW(), NOW()),
            (15, "Bradut","Filia", NOW(), NOW()),
            (15, "Bradut","Talisoara", NOW(), NOW()),
            (15, "Brates","Pachia", NOW(), NOW()),
            (15, "Brates","Telechia", NOW(), NOW()),
            (15, "Bretcu","Martanus", NOW(), NOW()),
            (15, "Bretcu","Oituz", NOW(), NOW()),
            (15, "Catalina","Hatuica", NOW(), NOW()),
            (15, "Catalina","Imeni", NOW(), NOW()),
            (15, "Catalina","Marcusa", NOW(), NOW()),
            (15, "Catalina","Martineni", NOW(), NOW()),
            (15, "Cernat","Albis", NOW(), NOW()),
            (15, "Cernat","Icafalau", NOW(), NOW()),
            (15, "Chichis","Bacel", NOW(), NOW()),
            (15, "Covasna","Chiurus", NOW(), NOW()),
            (15, "Dobarlau","Lunca Marcusului", NOW(), NOW()),
            (15, "Dobarlau","Marcus", NOW(), NOW()),
            (15, "Dobarlau","Valea Dobarlaului", NOW(), NOW()),
            (15, "Ghelinta","Harale", NOW(), NOW()),
            (15, "Ghidfalau","Anghelus", NOW(), NOW()),
            (15, "Ghidfalau","Fotos", NOW(), NOW()),
            (15, "Ghidfalau","Zoltan", NOW(), NOW()),
            (15, "Haghig","Iaras", NOW(), NOW()),
            (15, "Ilieni","Dobolii de Jos", NOW(), NOW()),
            (15, "Ilieni","Sancraiu", NOW(), NOW()),
            (15, "Intorsura Buzaului","Bradet", NOW(), NOW()),
            (15, "Intorsura Buzaului","Floroaia", NOW(), NOW()),
            (15, "Intorsura Buzaului","Scradoasa", NOW(), NOW()),
            (15, "Lemnia","Lutoasa", NOW(), NOW()),
            (15, "Lemnia","Mereni", NOW(), NOW()),
            (15, "Malnas","Bixad", NOW(), NOW()),
            (15, "Malnas","Malnas-Bai", NOW(), NOW()),
            (15, "Malnas","Micfalau", NOW(), NOW()),
            (15, "Malnas","Valea Zalanului", NOW(), NOW()),
            (15, "Moacsa","Dalnic", NOW(), NOW()),
            (15, "Moacsa","Padureni", NOW(), NOW()),
            (15, "Ojdula","Hilib", NOW(), NOW()),
            (15, "Ozun","Bicfalau", NOW(), NOW()),
            (15, "Ozun","Lisnau", NOW(), NOW()),
            (15, "Ozun","Lisnau-Vale", NOW(), NOW()),
            (15, "Ozun","Lunca Ozunului", NOW(), NOW()),
            (15, "Ozun","Magherus", NOW(), NOW()),
            (15, "Ozun","Santionlunca", NOW(), NOW()),
            (15, "Poian","Belani", NOW(), NOW()),
            (15, "Poian","Carpinenii", NOW(), NOW()),
            (15, "Poian","Estelnic", NOW(), NOW()),
            (15, "Poian","Valea Scurta", NOW(), NOW()),
            (15, "Reci","Aninoasa", NOW(), NOW()),
            (15, "Reci","Bita", NOW(), NOW()),
            (15, "Reci","Saciova", NOW(), NOW()),
            (15, "Sanzieni","Casinu Mic", NOW(), NOW()),
            (15, "Sanzieni","Petriceni", NOW(), NOW()),
            (15, "Sanzieni","Valea Seaca", NOW(), NOW()),
            (15, "Sfantul Gheorghe","Chilieni", NOW(), NOW()),
            (15, "Sfantul Gheorghe","Coseni", NOW(), NOW()),
            (15, "Sfantul Gheorghe","Sfantu  Gheorghe", NOW(), NOW()),
            (15, "Sita Buzaului","Crasna", NOW(), NOW()),
            (15, "Sita Buzaului","Merisor", NOW(), NOW()),
            (15, "Sita Buzaului","Zabratau", NOW(), NOW()),
            (15, "Tirgu Secuiesc","Lunga", NOW(), NOW()),
            (15, "Tirgu Secuiesc","Targu Secuiesc", NOW(), NOW()),
            (15, "Turia","Alungeni", NOW(), NOW()),
            (15, "Valcele","Araci", NOW(), NOW()),
            (15, "Valcele","Ariusd", NOW(), NOW()),
            (15, "Valcele","Hetea", NOW(), NOW()),
            (15, "Valea Crisului","Arcus", NOW(), NOW()),
            (15, "Valea Crisului","Calnic", NOW(), NOW()),
            (15, "Zabala","Peteni", NOW(), NOW()),
            (15, "Zabala","Surcea", NOW(), NOW()),
            (15, "Zabala","Tamasfalau", NOW(), NOW()),
            (15, "Zagon","Papauti", NOW(), NOW())
          ;';
        if (config('app.env') !== 'testing') {
            DB::connection()->getPdo()->exec($sql);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = 'DELETE FROM localities WHERE county_id=15;';
        DB::connection()->getPdo()->exec($sql);
    }
}
