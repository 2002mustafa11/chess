 
<!DOCTYPE html>
 <html lang="en"> 
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
        <title>Document</title> <link rel="stylesheet" type="text/css" href="style.css"> 
    </head> 
    <body> 
        <?php
        for ($i=1; $i <= 8; $i++) { ?> <div class="game-container"> 
            <div class="grid-row"> 
                <?php $a=0; $j=($i % 2==0) ? 0 : 1 ; 
                for($j;$j<=8;$j++){ $a++; ?> 
                <div class="<?php echo ($j % 2==0) ? 'grid-cell' : 'grid-cel' ;?>" type="submit" value="">
                </div> <?php if ($a==8) { break; } }?> 
            </div> 
        </div> 
        
        <?php } ?> 
            </body>
             </html>