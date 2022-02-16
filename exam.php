<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> exercice 1 </header>
     <form action="" method="POST">
        <label>Table</label>
        <input type="text" name="table" placeholder="entre le nombre a multiplier">
        

      <button type ="submit" name="save">save</button>


    <?php
      $table=$_POST['table'];
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
      echo($table.'*'.$i.'='.$totale.'<br>');
    

  
    }
    $table=1;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
      echo($table.'*'.$i.'='.$totale.'<br>');

  
    }
    $table=2;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
     echo($table.'*'.$i.'='.$totale.'<br>');

  
    }
    $table=3;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
      echo($table.'*'.$i.'='.$totale.'<br>');

  
    }
    $table=4;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
      echo($table.'*'.$i.'='.$totale.'<br>');
  
    }
     $table=5;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
     echo($table.'*'.$i.'='.$totale.'<br>');

  
    }
     $table=6;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
      echo($table.'*'.$i.'='.$totale.'<br>');

  
    }
     $table=7;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
     echo($table.'*'.$i.'='.$totale.'<br>');
  
    }
    
     $table=8;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
      echo($table.'*'.$i.'='.$totale.'<br>');

  
    }
      $table=9;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
     echo($table.'*'.$i.'='.$totale.'<br>');

  
    }
   
      $table=10;
       $totale= 0;
     for ($i=0; $i<11; $i++){
       $totale=$table*$i;
     echo($table.'*'.$i.'='.$totale.'<br>');
  
    }

    
    ?>
  
    
    
</body>
</html>