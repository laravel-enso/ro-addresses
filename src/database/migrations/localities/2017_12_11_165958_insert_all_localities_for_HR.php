<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForHR extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (20, "","Atid", NOW(), NOW()),
            (20, "","Avramesti", NOW(), NOW()),
            (20, "","Bilbor", NOW(), NOW()),
            (20, "","Borsec", NOW(), NOW()),
            (20, "","Bradesti", NOW(), NOW()),
            (20, "","Baile Tusnad", NOW(), NOW()),
            (20, "","Balan", NOW(), NOW()),
            (20, "","Ciucsangeorgiu", NOW(), NOW()),
            (20, "","Ciumani", NOW(), NOW()),
            (20, "","Corbu", NOW(), NOW()),
            (20, "","Corund", NOW(), NOW()),
            (20, "","Cozmeni", NOW(), NOW()),
            (20, "","Cristuru Secuiesc", NOW(), NOW()),
            (20, "","Carta", NOW(), NOW()),
            (20, "","Capalnita", NOW(), NOW()),
            (20, "","Dealu", NOW(), NOW()),
            (20, "","Ditrau", NOW(), NOW()),
            (20, "","Darjiu", NOW(), NOW()),
            (20, "","Danesti", NOW(), NOW()),
            (20, "","Frumoasa", NOW(), NOW()),
            (20, "","Gheorgheni", NOW(), NOW()),
            (20, "","Galautas", NOW(), NOW()),
            (20, "","Joseni", NOW(), NOW()),
            (20, "","Lueta", NOW(), NOW()),
            (20, "","Lunca de Jos", NOW(), NOW()),
            (20, "","Lunca de Sus", NOW(), NOW()),
            (20, "","Lupeni", NOW(), NOW()),
            (20, "","Lazarea", NOW(), NOW()),
            (20, "","Meresti", NOW(), NOW()),
            (20, "","Miercurea Ciuc", NOW(), NOW()),
            (20, "","Mihaileni", NOW(), NOW()),
            (20, "","Mugeni", NOW(), NOW()),
            (20, "","Madaras", NOW(), NOW()),
            (20, "","Martinis", NOW(), NOW()),
            (20, "","Ocland", NOW(), NOW()),
            (20, "","Odorheiu Secuiesc", NOW(), NOW()),
            (20, "","Plaiesii de Jos", NOW(), NOW()),
            (20, "","Praid", NOW(), NOW()),
            (20, "","Pauleni-Ciuc", NOW(), NOW()),
            (20, "","Remetea", NOW(), NOW()),
            (20, "","Secuieni", NOW(), NOW()),
            (20, "","Siculeni", NOW(), NOW()),
            (20, "","Subcetate", NOW(), NOW()),
            (20, "","Suseni", NOW(), NOW()),
            (20, "","Sancraieni", NOW(), NOW()),
            (20, "","Sandominic", NOW(), NOW()),
            (20, "","Sanmartin", NOW(), NOW()),
            (20, "","Sansimion", NOW(), NOW()),
            (20, "","Sacel", NOW(), NOW()),
            (20, "","Sarmas", NOW(), NOW()),
            (20, "","Tomesti", NOW(), NOW()),
            (20, "","Toplita", NOW(), NOW()),
            (20, "","Tulghes", NOW(), NOW()),
            (20, "","Tusnad", NOW(), NOW()),
            (20, "","Ulies", NOW(), NOW()),
            (20, "","Vlahita", NOW(), NOW()),
            (20, "","Voslabeni", NOW(), NOW()),
            (20, "","Varsag", NOW(), NOW()),
            (20, "","Zetea", NOW(), NOW()),
            (20, "","Simonesti", NOW(), NOW()),
            (20, "Atid","Criseni", NOW(), NOW()),
            (20, "Atid","Cusmed", NOW(), NOW()),
            (20, "Atid","Inlaceni", NOW(), NOW()),
            (20, "Atid","Siclod", NOW(), NOW()),
            (20, "Avramesti","Andreeni", NOW(), NOW()),
            (20, "Avramesti","Cechesti", NOW(), NOW()),
            (20, "Avramesti","Firtanus", NOW(), NOW()),
            (20, "Avramesti","Goagiu", NOW(), NOW()),
            (20, "Avramesti","Laz-Firtanus", NOW(), NOW()),
            (20, "Avramesti","Laz-Soimus", NOW(), NOW()),
            (20, "Avramesti","Medisoru Mic", NOW(), NOW()),
            (20, "Baile Tusnad","Carpitus", NOW(), NOW()),
            (20, "Bilbor","Rachitis", NOW(), NOW()),
            (20, "Bradesti","Satu Mare", NOW(), NOW()),
            (20, "Bradesti","Tarnovita", NOW(), NOW()),
            (20, "Carta","Ineu", NOW(), NOW()),
            (20, "Ciucsangeorgiu","Armaseni", NOW(), NOW()),
            (20, "Ciucsangeorgiu","Armasenii Noi", NOW(), NOW()),
            (20, "Ciucsangeorgiu","Bancu", NOW(), NOW()),
            (20, "Ciucsangeorgiu","Ciobanis", NOW(), NOW()),
            (20, "Ciucsangeorgiu","Cotormani", NOW(), NOW()),
            (20, "Ciucsangeorgiu","Eghersec", NOW(), NOW()),
            (20, "Ciucsangeorgiu","Ghiurche", NOW(), NOW()),
            (20, "Ciucsangeorgiu","Potiond", NOW(), NOW()),
            (20, "Corbu","Capu Corbului", NOW(), NOW()),
            (20, "Corund","Atia", NOW(), NOW()),
            (20, "Corund","Calonda", NOW(), NOW()),
            (20, "Corund","Fantana Brazilor", NOW(), NOW()),
            (20, "Corund","Valea lui Pavel", NOW(), NOW()),
            (20, "Cozmeni","Lazaresti", NOW(), NOW()),
            (20, "Cristuru Secuiesc","Filias", NOW(), NOW()),
            (20, "Darjiu","Mujna", NOW(), NOW()),
            (20, "Dealu","Fancel", NOW(), NOW()),
            (20, "Dealu","Sancrai", NOW(), NOW()),
            (20, "Dealu","Tibod", NOW(), NOW()),
            (20, "Dealu","Tamasu", NOW(), NOW()),
            (20, "Dealu","Ulcani", NOW(), NOW()),
            (20, "Dealu","Valea Rotunda", NOW(), NOW()),
            (20, "Ditrau","Jolotca", NOW(), NOW()),
            (20, "Ditrau","Tengheler", NOW(), NOW()),
            (20, "Felicieni","Alexandrita", NOW(), NOW()),
            (20, "Felicieni","Arvateni", NOW(), NOW()),
            (20, "Felicieni","Cireseni", NOW(), NOW()),
            (20, "Felicieni","Feliceni", NOW(), NOW()),
            (20, "Felicieni","Forteni", NOW(), NOW()),
            (20, "Felicieni","Hoghia", NOW(), NOW()),
            (20, "Felicieni","Oteni", NOW(), NOW()),
            (20, "Felicieni","Polonita", NOW(), NOW()),
            (20, "Felicieni","Teleac", NOW(), NOW()),
            (20, "Felicieni","Taureni", NOW(), NOW()),
            (20, "Felicieni","Valeni", NOW(), NOW()),
            (20, "Frumoasa","Barzava", NOW(), NOW()),
            (20, "Frumoasa","Fagetel", NOW(), NOW()),
            (20, "Frumoasa","Nicolesti", NOW(), NOW()),
            (20, "Galautas","Dealu Armanului", NOW(), NOW()),
            (20, "Galautas","Galautas-Parau", NOW(), NOW()),
            (20, "Galautas","Nuteni", NOW(), NOW()),
            (20, "Galautas","Plopis", NOW(), NOW()),
            (20, "Galautas","Preluca", NOW(), NOW()),
            (20, "Galautas","Toleseni", NOW(), NOW()),
            (20, "Galautas","Zapodea", NOW(), NOW()),
            (20, "Gheorgheni","Covacipeter", NOW(), NOW()),
            (20, "Gheorgheni","Lacu Rosu", NOW(), NOW()),
            (20, "Gheorgheni","Vargatac", NOW(), NOW()),
            (20, "Gheorgheni","Visafolio", NOW(), NOW()),
            (20, "Joseni","Borzont", NOW(), NOW()),
            (20, "Joseni","Bucin", NOW(), NOW()),
            (20, "Lazarea","Ghidut", NOW(), NOW()),
            (20, "Lueta","Baile Chirui", NOW(), NOW()),
            (20, "Lunca De Jos","Baratcos", NOW(), NOW()),
            (20, "Lunca De Jos","Poiana Fagului", NOW(), NOW()),
            (20, "Lunca De Jos","Puntea Lupului", NOW(), NOW()),
            (20, "Lunca De Jos","Valea Boros", NOW(), NOW()),
            (20, "Lunca De Jos","Valea Capelei", NOW(), NOW()),
            (20, "Lunca De Jos","Valea Rece", NOW(), NOW()),
            (20, "Lunca De Jos","Valea lui Antaloc", NOW(), NOW()),
            (20, "Lunca De Jos","Valea Intunecoasa", NOW(), NOW()),
            (20, "Lunca De Sus","Comiat", NOW(), NOW()),
            (20, "Lunca De Sus","Izvorul Trotusului", NOW(), NOW()),
            (20, "Lunca De Sus","Paltinis-Ciuc", NOW(), NOW()),
            (20, "Lunca De Sus","Valea Garbea", NOW(), NOW()),
            (20, "Lunca De Sus","Valea Ugra", NOW(), NOW()),
            (20, "Lupeni","Bisericani", NOW(), NOW()),
            (20, "Lupeni","Bulgareni", NOW(), NOW()),
            (20, "Lupeni","Firtusu", NOW(), NOW()),
            (20, "Lupeni","Morareni", NOW(), NOW()),
            (20, "Lupeni","Paltinis", NOW(), NOW()),
            (20, "Lupeni","Pauleni", NOW(), NOW()),
            (20, "Lupeni","Satu Mic", NOW(), NOW()),
            (20, "Lupeni","Sancel", NOW(), NOW()),
            (20, "Martinis","Aldea", NOW(), NOW()),
            (20, "Martinis","Badeni", NOW(), NOW()),
            (20, "Martinis","Chinusu", NOW(), NOW()),
            (20, "Martinis","Comanesti", NOW(), NOW()),
            (20, "Martinis","Calugareni", NOW(), NOW()),
            (20, "Martinis","Ghipes", NOW(), NOW()),
            (20, "Martinis","Locodeni", NOW(), NOW()),
            (20, "Martinis","Oraseni", NOW(), NOW()),
            (20, "Martinis","Petreni", NOW(), NOW()),
            (20, "Martinis","Rares", NOW(), NOW()),
            (20, "Martinis","Sanpaul", NOW(), NOW()),
            (20, "Miercurea Ciuc","Ciba", NOW(), NOW()),
            (20, "Miercurea Ciuc","Harghita-Bai", NOW(), NOW()),
            (20, "Miercurea Ciuc","Jigodin-Bai", NOW(), NOW()),
            (20, "Mihaileni","Livezi", NOW(), NOW()),
            (20, "Mihaileni","Nadejdea", NOW(), NOW()),
            (20, "Mihaileni","Vacaresti", NOW(), NOW()),
            (20, "Mugeni","Alunis", NOW(), NOW()),
            (20, "Mugeni","Beta", NOW(), NOW()),
            (20, "Mugeni","Betesti", NOW(), NOW()),
            (20, "Mugeni","Dejutiu", NOW(), NOW()),
            (20, "Mugeni","Dobeni", NOW(), NOW()),
            (20, "Mugeni","Lutita", NOW(), NOW()),
            (20, "Mugeni","Matiseni", NOW(), NOW()),
            (20, "Mugeni","Porumbenii Mari", NOW(), NOW()),
            (20, "Mugeni","Porumbenii Mici", NOW(), NOW()),
            (20, "Mugeni","Taietura", NOW(), NOW()),
            (20, "Ocland","Craciunel", NOW(), NOW()),
            (20, "Ocland","Satu Nou", NOW(), NOW()),
            (20, "Pauleni-Ciuc","Delnita", NOW(), NOW()),
            (20, "Pauleni-Ciuc","Soimeni", NOW(), NOW()),
            (20, "Plaiesii De Jos","Casinu Nou", NOW(), NOW()),
            (20, "Plaiesii De Jos","Iacobeni", NOW(), NOW()),
            (20, "Plaiesii De Jos","Imper", NOW(), NOW()),
            (20, "Plaiesii De Jos","Plaiesii de Sus", NOW(), NOW()),
            (20, "Praid","Becas", NOW(), NOW()),
            (20, "Praid","Bucin", NOW(), NOW()),
            (20, "Praid","Ocna de Jos", NOW(), NOW()),
            (20, "Praid","Ocna de Sus", NOW(), NOW()),
            (20, "Praid","Sasveres", NOW(), NOW()),
            (20, "Remetea","Fagetel", NOW(), NOW()),
            (20, "Remetea","Martonca", NOW(), NOW()),
            (20, "Remetea","Sineu", NOW(), NOW()),
            (20, "Sacel","Uilac", NOW(), NOW()),
            (20, "Sacel","Vidacut", NOW(), NOW()),
            (20, "Sacel","Soimusu Mare", NOW(), NOW()),
            (20, "Sacel","Soimusu Mic", NOW(), NOW()),
            (20, "Sancraieni","Fitod", NOW(), NOW()),
            (20, "Sancraieni","Hosasau", NOW(), NOW()),
            (20, "Sancraieni","Leliceni", NOW(), NOW()),
            (20, "Sancraieni","Misentea", NOW(), NOW()),
            (20, "Sancraieni","Santimbru", NOW(), NOW()),
            (20, "Sancraieni","Santimbru-Bai", NOW(), NOW()),
            (20, "Sanmartin","Ciucani", NOW(), NOW()),
            (20, "Sanmartin","Valea Uzului", NOW(), NOW()),
            (20, "Sansimion","Cetatuia", NOW(), NOW()),
            (20, "Sarmas","Fundoaia", NOW(), NOW()),
            (20, "Sarmas","Hodosa", NOW(), NOW()),
            (20, "Sarmas","Platonesti", NOW(), NOW()),
            (20, "Sarmas","Runc", NOW(), NOW()),
            (20, "Secuieni","Bodogaia", NOW(), NOW()),
            (20, "Secuieni","Eliseni", NOW(), NOW()),
            (20, "Siculeni","Ciaracio", NOW(), NOW()),
            (20, "Siculeni","Ciceu", NOW(), NOW()),
            (20, "Siculeni","Racu", NOW(), NOW()),
            (20, "Siculeni","Satu Nou", NOW(), NOW()),
            (20, "Simonesti","Bentid", NOW(), NOW()),
            (20, "Simonesti","Cehetel", NOW(), NOW()),
            (20, "Simonesti","Chedia Mare", NOW(), NOW()),
            (20, "Simonesti","Chedia Mica", NOW(), NOW()),
            (20, "Simonesti","Cobatesti", NOW(), NOW()),
            (20, "Simonesti","Cadaciu Mare", NOW(), NOW()),
            (20, "Simonesti","Cadaciu Mic", NOW(), NOW()),
            (20, "Simonesti","Medisoru Mare", NOW(), NOW()),
            (20, "Simonesti","Mihaileni", NOW(), NOW()),
            (20, "Simonesti","Nicoleni", NOW(), NOW()),
            (20, "Simonesti","Ruganesti", NOW(), NOW()),
            (20, "Simonesti","Turdeni", NOW(), NOW()),
            (20, "Simonesti","Tarcesti", NOW(), NOW()),
            (20, "Subcetate","Calnaci", NOW(), NOW()),
            (20, "Subcetate","Duda", NOW(), NOW()),
            (20, "Subcetate","Filpea", NOW(), NOW()),
            (20, "Suseni","Chileni", NOW(), NOW()),
            (20, "Suseni","Liban", NOW(), NOW()),
            (20, "Suseni","Senetea", NOW(), NOW()),
            (20, "Suseni","Valea Stramba", NOW(), NOW()),
            (20, "Toplita","Calimanel", NOW(), NOW()),
            (20, "Toplita","Luncani", NOW(), NOW()),
            (20, "Toplita","Moglanesti", NOW(), NOW()),
            (20, "Toplita","Magherus", NOW(), NOW()),
            (20, "Toplita","Secu", NOW(), NOW()),
            (20, "Toplita","Vale", NOW(), NOW()),
            (20, "Toplita","Vagani", NOW(), NOW()),
            (20, "Toplita","Zencani", NOW(), NOW()),
            (20, "Tulghes","Hagota", NOW(), NOW()),
            (20, "Tulghes","Pintic", NOW(), NOW()),
            (20, "Tulghes","Recea", NOW(), NOW()),
            (20, "Tusnad","Tusnadu Nou", NOW(), NOW()),
            (20, "Tusnad","Vrabia", NOW(), NOW()),
            (20, "Ulies","Daia", NOW(), NOW()),
            (20, "Ulies","Iasu", NOW(), NOW()),
            (20, "Ulies","Ighiu", NOW(), NOW()),
            (20, "Ulies","Nicolesti", NOW(), NOW()),
            (20, "Ulies","Obranesti", NOW(), NOW()),
            (20, "Ulies","Petecu", NOW(), NOW()),
            (20, "Ulies","Vasileni", NOW(), NOW()),
            (20, "Vlahita","Baile Homorod", NOW(), NOW()),
            (20, "Vlahita","Minele Lueta", NOW(), NOW()),
            (20, "Voslabeni","Izvoru Muresului", NOW(), NOW()),
            (20, "Zetea","Desag", NOW(), NOW()),
            (20, "Zetea","Izvoare", NOW(), NOW()),
            (20, "Zetea","Poiana Tarnavei", NOW(), NOW()),
            (20, "Zetea","Sub Cetate", NOW(), NOW()),
            (20, "Zetea","Sicasau", NOW(), NOW())
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

        $sql = "DELETE FROM localities WHERE county_id=20;";
        DB::connection()->getPdo()->exec($sql);
    }
}
