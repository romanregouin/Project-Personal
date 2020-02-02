<?php

    function my_open_file($file_name){
        $file = fopen($file_name,"r");
        return $file;
    }
    
    function my_close_file($file){
        fclose($file);
    }

    function my_read_file($file){
        $i=1;
        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            if($i==1){
                echo "<thead>";
            }else{
                echo "<tr>";
            }
            foreach($data as $cle => $valeur){
                echo "<td> $valeur </td>";
            }
            if($i==1){
                echo "</thead>";
            }else{
                echo "<tr>";
            }
            $i++;
        }
    }

    function get_id_by_region($file,$region){
        $row = 0;
        $tab = [];
        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            if($row!=0){
                $id = $data[0];
                if(strcmp($data[3],$region)==0){

                }
            }
        }
    }

    function get_id_by_rarity($rarity){

    }

    function my_read_by_arg($file,$region,$rarity){
        $i=1;
        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            if($i==1){
                echo "<thead>";
            }else{
                echo "<tr>";
            }
            foreach($data as $cle => $valeur){
                echo "<td> $valeur </td>";
            }
            if($i==1){
                echo "</thead>";
            }else{
                echo "<tr>";
            }
            $i++;
        }
    }
?>