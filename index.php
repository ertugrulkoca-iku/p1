<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJE-1 - Rock Scissors Paper</title>
</head>
<body>
<?php
        global $d,$aWin,$bWin;

    for ($round = 1; $round <= 10; $round++) {
        $rsp = rand(0,2);
        $rsp2 = rand(0,2);

        echo"Round $round: <br>";
        // BERABERLİK DURUMLARI
        if($rsp==0 && $rsp2==0) {
            echo"Player A: Rock. <br>";
            echo"Player B: Rock. <br>";
            echo"Same choice: It is a draw... <br>";  
            $d++;
        }
        elseif($rsp==1 && $rsp2==1) {
            echo"Player A: Scissors. <br>";
            echo"Player B: Scissors. <br>";
            echo"Same choice: It is a draw... <br>";  
            $d++;
        }
        elseif($rsp==2 && $rsp2==2) {
            echo"Player A: Paper. <br>";
            echo"Player B: Paper. <br>";
            echo"Same choice: It is a draw... <br>";  
            $d++;
        }
        // PLAYER A TAŞ GELME DURUMLARI
        elseif($rsp==0 && $rsp2==1) {
            echo"Player A: Rock.  <br>";
            echo"Player B: Scissors. <br>";
            echo"Rock crushes Scissors: Player A wins.. <br>";  
            $aWin++;
        }
        elseif($rsp==0 && $rsp2==2) {
            echo"Player A: Rock.  <br>";
            echo"Player B: Paper. <br>";
            echo"Paper covers Rock: Player B wins.. <br>";  
            $bWin++;
        }
         // PLAYER A MAKAS GELME DURUMLARI
        elseif($rsp==1 && $rsp2==0) {
            echo"Player A: Scissors.  <br>";
            echo"Player B: Rock. <br>";
            echo"Rock crushes Scissors: Player B wins.. <br>";  
            $bWin++;
        }
        elseif($rsp==1 && $rsp2==2) {
            echo"Player A: Scissors.  <br>";
            echo"Player B: Rock. <br>";
            echo"Rock crushes Scissors: Player B wins.. <br>";  
            $bWin++;
        }
         // PLAYER A KAĞIT GELME DURUMLARI
        elseif($rsp==2 && $rsp2==0) {
            echo"Player A: Paper.  <br>";
            echo"Player B: Rock. <br>";
            echo"Paper covers Rock: Player A wins.. <br>"; 
            $aWin++; 
        }
        elseif($rsp==2 && $rsp2==1) {
            echo"Player A: Paper.  <br>";
            echo"Player B: Scissors. <br>";
            echo"Scissors cut Paper: Player B wins.. <br>";  
            $bWin++;
        }
       echo"<br>";  
    }
    //SONUÇ
    echo"Player A: $aWin wins<br>";  
    echo"Player B: $bWin wins<br>";  
    echo"$d Games were a draw.<br>";  
    if($aWin > $bWin){
        echo"THE WINNER IS PLAYER A<br>"; 
    }
    else{
        echo"THE WINNER IS PLAYER B<br>"; 
    }
    echo"<br>"; 
?>
</body>
</html>