<?php require_once("FileManager.php"); ?>
<div id="tableau">
    <table>
        <?php
            if((isset($_GET['tableau_header']))&&($_GET['tableau_header']=="Region")){
                include("region.php");
            }
            else if((isset($_GET['tableau_header']))&&($_GET['tableau_header']=="Rarity")){
                include("rarity");
            }else{
                echo "<p>Hello and welcome on my website !</p>";
            }
        ?>
    </table>
</div>