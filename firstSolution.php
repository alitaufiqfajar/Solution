<?php
    class firstSolution {
        var $highSchool;
        var $University;
        var $skills;

        function biodata(){
            $name = "Ali Taufiqfajar";
            $address = "Selaawi RT 03 RW 10 Desa Imbanagara Raya Kec.Ciamis Kab. Ciamis";
            $hobbies = array("Baca Komik", "Baca Novel", "Nonton");
            $is_married = False;
            $array_bio = array($name, $address, $hobbies, $is_married);
            return $array_bio;
        }

        
    }
    $obj_1 = new firstSolution();
        $obj_1->highSchool = "SMK Bustanul Ulum Tasikmalaya";
        $obj_1->University = "Universitas Ibn Khaldun Bogor";
        $obj_1->skills = "HTML";
        
    $obj_2 = new firstSolution();
        $obj_2->skills = "CSS";
        
    $array_obt = array($obj_1->biodata(), $obj_1, $obj_2);
    echo json_encode($array_obt);
?>