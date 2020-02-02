<?php require_once("FileManager.php"); ?>
<div id="tableau">
    <table>
        <?php
            $file = my_open_file("ressource.csv");
            //my_read_by_arg($file,"Demacia",1);
            get_id_by_region($file,"Demacia");
            my_close_file($file);
        ?>
    </table>
</div>