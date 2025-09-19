<html>
    <head></head>
    <body>
        <h2>Detyrat</h2>
        <?php
            $x= 18;
            var_dump(is_int($x));
            echo "<br>";
            $y= 32;
            var_dump(is_double($y));  
        ?>
        <br>
        <?php
            echo strlen("Un jame nxenes ne shkollen digjitale prizren");
        ?>
        <br>
        <?php
            $pozicion=strpos("Un Jam Nxenes Ne Shkollen Digjtiale","D");
            echo $pozicion;
        ?> 
        
        <?php
         echo str_word_count("Un jame nxenes ne shkollen digjitale prizren");
        ?>
        <br>
        <?php
            $emri ='Shkolla Digjitale Prizren'.'<br>';
            $ndrroje= str_replace('Prizren','Mitrovic',$emri);

            echo $emri;
            echo $ndrroje;
        ?>
        
    </body>
</html>