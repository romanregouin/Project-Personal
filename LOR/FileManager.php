<?php

    function my_open_file($file_name){
        $file = fopen($file_name,"r");
        return $file;
    }
    
    function my_close_file($file){
        fclose($file);
    }

    function my_read_file($file){
        $file = my_open_file("champion.csv");
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
        my_close_file($file);
    }

    function get_id_by_region($file,$region){
        $file = my_open_file("champion.csv");
        $row = 0;
        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            if($row!=0){
                $id = $data[0];
                if(strcmp($data[3],$region)==0){
                    $tab[] = $id;
                }
            }
            $row++;
        }
        var_dump($tab);
        my_close_file($file);
    }

    function get_id_by_rarity($file,$rarity){
        $file = my_open_file("champion.csv");
        $row = 0;
        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            if($row!=0){
                $id = $data[0];
                if(strcmp($data[2],$rarity)==0){
                    $tab[] = $id;
                }
            }
            $row++;
        }
        var_dump($tab);
        my_close_file($file);
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