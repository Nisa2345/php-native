<?php
if (isset($_POST ['pilih'])){
    $pilihan = $_POST ['program'];
    if ($pilihan == 1){
        header("location:segitigapro.php");
    }
    else if ($pilihan == 2){
        header("location:lingkaranpro.php");
    }
    else if ($pilihan == 3){
        header("location:persegipro.php");
    }
    else{
        header("location:persegipanjangpro.php");
    }
}
?>
