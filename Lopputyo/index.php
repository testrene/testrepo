<html>
    <head>
        <title>Venäläinen ruletti</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
         
        <h1>Venäläinen ruletti!</h1>  
        <h3>Astut Moskovan kylmiltä kaduilta lämmittelemään paikalliseen 
            kuppilaan. <br>Juuri kun olisitkin mennyt tilaamaan huurteista niin 
            näet muuan miehen <br>pimeässä nurkassa viitoittelevan luokseen. Mies 
            ottaa revolverin takin sisältä,<br> ojentaa asetta ja osoittaa pöydällä 
            olevaa setelitukkua.<br><br>
            Mies kertoo että revolverissa on yksi panos ja viisi tyhjää. 
            <br>Haluatko ottaa riskin ja voittaa 10 000 000 ruplaa?<br> Peliä pelataan
            niin kauan kunnes jompikumpi pelaajista kuolee.<br> Jos häviät niin 
            mies saa kaiken omaisuutesi jos voitat niin saat 10 000 000 ruplaa!</h3>
        <h4>(10 000 000 ruplaa on noin 200 000 euroa)</h4>
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="submit" name="submit" value="Onnea...">
        </form>
        <?php 
        include 'ruletti.php';
        
        if(isset($_POST['submit'])) {
            pelaa();
            
        }
        ?>
        
    </body>
</html>
