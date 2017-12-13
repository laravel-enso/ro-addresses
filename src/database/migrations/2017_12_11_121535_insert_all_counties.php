<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAllCounties extends Migration
{

    public function up()
    {
        $sql="INSERT INTO counties (id, abbreviation, name, created_at, updated_at) VALUES
            (1, 'AB', 'Alba', NOW(), NOW()),
            (2, 'AR', 'Arad', NOW(), NOW()),
            (3, 'AG', 'Arges', NOW(), NOW()),
            (4, 'B' , 'Bucuresti', NOW(), NOW()),
            (5, 'BC', 'Bacau', NOW(), NOW()),
            (6, 'BH', 'Bihor', NOW(), NOW()),
            (7, 'BN', 'Bistrita-Nasaud', NOW(), NOW()),
            (8, 'BT', 'Botosani', NOW(), NOW()),
            (9, 'BV', 'Brasov', NOW(), NOW()),
            (10, 'BR', 'Braila', NOW(), NOW()),
            (11, 'BZ', 'Buzau', NOW(), NOW()),
            (12, 'CS', 'Caras-Severin', NOW(), NOW()),
            (13, 'CJ', 'Cluj', NOW(), NOW()),
            (14, 'CT', 'Constanta', NOW(), NOW()),
            (15, 'CV', 'Covasna', NOW(), NOW()),
            (16, 'DB', 'Dambovita', NOW(), NOW()),
            (17, 'DJ', 'Dolj', NOW(), NOW()),
            (18, 'GL', 'Galati', NOW(), NOW()),
            (19, 'GJ', 'Gorj', NOW(), NOW()),
            (20, 'HR', 'Harghita', NOW(), NOW()),
            (21, 'HD', 'Hunedoara', NOW(), NOW()),
            (22, 'CL', 'Calarasi', NOW(), NOW()),
            (23, 'IL', 'Ialomita', NOW(), NOW()),
            (24, 'IS', 'Iasi', NOW(), NOW()),
            (25, 'GR', 'Giurgiu', NOW(), NOW()),
            (26, 'IF', 'Ilfov', NOW(), NOW()),
            (27, 'MM', 'Maramures', NOW(), NOW()),
            (28, 'MH', 'Mehedinti', NOW(), NOW()),
            (29, 'MS', 'Mures', NOW(), NOW()),
            (30, 'NT', 'Neamt', NOW(), NOW()),
            (31, 'OT', 'Olt', NOW(), NOW()),
            (32, 'PH', 'Prahova', NOW(), NOW()),
            (33, 'SM', 'Satu Mare', NOW(), NOW()),
            (34, 'SJ', 'Salaj', NOW(), NOW()),
            (35, 'SB', 'Sibiu', NOW(), NOW()),
            (36, 'SV', 'Suceava', NOW(), NOW()),
            (37, 'TR', 'Teleorman', NOW(), NOW()),
            (38, 'TM', 'Timis', NOW(), NOW()),
            (39, 'TL', 'Tulcea', NOW(), NOW()),
            (40, 'VS', 'Vaslui', NOW(), NOW()),
            (41, 'VL', 'Valcea', NOW(), NOW()),
            (42, 'VN', 'Vrancea', NOW(), NOW())
        ";
        DB::connection()->getPdo()->exec($sql);
    }


    public function down()
    {
        $sql="DELETE FROM counties WHERE 1=1;";
        DB::connection()->getPdo()->exec($sql);
    }
}
