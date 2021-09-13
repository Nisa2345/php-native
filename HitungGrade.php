<?php
$nilai = 90;
$grade =
        if ( nilai >= 90 ) {
            $grade = "A";
        } else if ( nilai >= 80 ){
            $grade = "B";
        } else if ( nilai >= 70 ){
            $grade = "C";
        } else if ( nilai >= 60 ){
            $grade = "D";
        } else if ( nilai <= 60 ){
            $grade = "E";
        } else {
            $grade = 

        }


        switch($grade){
            case "Grade A":
                System.out.println("Pertahankan");
                break;
            case "Grade B":
                System.out.println("Harus Lebih Baik Lagi");
                break;
            case "Grade C":
                System.out.println("Perbanyak Belajar");
                break;
            case "Grade D":
                System.out.println("Jangan Keseringan main");
                break;
            case "Grade E":
                System.out.println("Kebanyakan Bolos")
            default:
                System.out.println("Tidak Ada Pilihan");
                break;
 
           echo "Nilai: <b>$nilai</b><br>";
           echo "Grade: <b>$grade</b><br>";
           echo "Keterangan : <b>$ket</b><br>";
            }
      ?>
        
    }
}