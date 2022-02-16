<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> exercice 2 </header>
     <form action="" method="POST">
        <label>Table</label>
        <input type="text" name="table2" placeholder="entrer votre nombre">
        

      <button type ="submit" name="save">save</button>
       
    <?php 
        
        $nb = $_POST['table2'];
       
        $tot = 0;
        $sum=0;
        for($i=0; $i<$nb;){
            $tot=$tot+$i;
            $i=$i+1;
            $sum=$tot+$i;
        
            
        }
        echo($sum);
        

    
    
    ?>

    
</body>
</html>