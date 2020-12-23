<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $smsModel = fopen('Sms.csv', 'r');

    
        $linha1 = array();
        
        //lê o conteúdo do arquivo
        while (!feof($smsModel)) {
        //Mostra uma linha do arquivo
            $linha = fgets($smsModel, 1024);
           
            $linha1[]    = explode(",", $linha);
  
        }
             
        // Fecha arquivo aberto
        fclose($smsModel);array_shift($linha1);
        array_pop($linha1);
                
        foreach ($linha1 as $key => $value) {
             $linhaXls[] = array($value[1], $value[1], $value[2], 1, 0, $value[3]);
        }
        var_dump($linhaXls);
        
        

        ?>
    </body>
</html>
