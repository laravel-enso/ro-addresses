<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllCounties extends Migration
{
    public function up()
    {
        $now = now();
        $sql = "INSERT INTO counties (id, abbreviation, name, created_at, updated_at) VALUES
            (1, 'AB', 'Alba', '".$now."', '".$now."'),
            (2, 'AR', 'Arad', '".$now."', '".$now."'),
            (3, 'AG', 'Arges', '".$now."', '".$now."'),
            (4, 'B' , 'Bucuresti', '".$now."', '".$now."'),
            (5, 'BC', 'Bacau', '".$now."', '".$now."'),
            (6, 'BH', 'Bihor', '".$now."', '".$now."'),
            (7, 'BN', 'Bistrita-Nasaud', '".$now."', '".$now."'),
            (8, 'BT', 'Botosani', '".$now."', '".$now."'),
            (9, 'BV', 'Brasov', '".$now."', '".$now."'),
            (10, 'BR', 'Braila', '".$now."', '".$now."'),
            (11, 'BZ', 'Buzau', '".$now."', '".$now."'),
            (12, 'CS', 'Caras-Severin', '".$now."', '".$now."'),
            (13, 'CJ', 'Cluj', '".$now."', '".$now."'),
            (14, 'CT', 'Constanta', '".$now."', '".$now."'),
            (15, 'CV', 'Covasna', '".$now."', '".$now."'),
            (16, 'DB', 'Dambovita', '".$now."', '".$now."'),
            (17, 'DJ', 'Dolj', '".$now."', '".$now."'),
            (18, 'GL', 'Galati', '".$now."', '".$now."'),
            (19, 'GJ', 'Gorj', '".$now."', '".$now."'),
            (20, 'HR', 'Harghita', '".$now."', '".$now."'),
            (21, 'HD', 'Hunedoara', '".$now."', '".$now."'),
            (22, 'CL', 'Calarasi', '".$now."', '".$now."'),
            (23, 'IL', 'Ialomita', '".$now."', '".$now."'),
            (24, 'IS', 'Iasi', '".$now."', '".$now."'),
            (25, 'GR', 'Giurgiu', '".$now."', '".$now."'),
            (26, 'IF', 'Ilfov', '".$now."', '".$now."'),
            (27, 'MM', 'Maramures', '".$now."', '".$now."'),
            (28, 'MH', 'Mehedinti', '".$now."', '".$now."'),
            (29, 'MS', 'Mures', '".$now."', '".$now."'),
            (30, 'NT', 'Neamt', '".$now."', '".$now."'),
            (31, 'OT', 'Olt', '".$now."', '".$now."'),
            (32, 'PH', 'Prahova', '".$now."', '".$now."'),
            (33, 'SM', 'Satu Mare', '".$now."', '".$now."'),
            (34, 'SJ', 'Salaj', '".$now."', '".$now."'),
            (35, 'SB', 'Sibiu', '".$now."', '".$now."'),
            (36, 'SV', 'Suceava', '".$now."', '".$now."'),
            (37, 'TR', 'Teleorman', '".$now."', '".$now."'),
            (38, 'TM', 'Timis', '".$now."', '".$now."'),
            (39, 'TL', 'Tulcea', '".$now."', '".$now."'),
            (40, 'VS', 'Vaslui', '".$now."', '".$now."'),
            (41, 'VL', 'Valcea', '".$now."', '".$now."'),
            (42, 'VN', 'Vrancea', '".$now."', '".$now."')
        ";
        DB::connection()->getPdo()->exec($sql);
    }

    public function down()
    {
        $sql = 'DELETE FROM counties WHERE 1=1;';
        DB::connection()->getPdo()->exec($sql);
    }
}
