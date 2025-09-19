<html>
    <head></head>
    <body>
        <h3>String</h3>
        <?php
            //Na mundeson gjejten e gjatsis se stringut.
            echo strlen("Prizren");
        ?>
        <br>
        <?php
            //Na tregon sa fjal i kemi brenda nje stringu.
            echo str_word_count('Shkolla Digjitale Prizren');
        ?>
        <br>
        <?php
            //Eshte nje metod e cila na kthen stringun mbprapsht
            echo strrev('Shkolla');
        ?>
        <br>
        <?php
            //Na mundeson ta gjejme se ne cilen pozite fillon cfare shkronja
            $pozicioni = strops('Shkolla Digjitale Prizren','D');
            $pozicioni2 = strops('Shkolla Digjitale Prizren','Prizren');
            echo $pozicioni. '<br>';
            echo $pozicioni2;
        ?>
        <br>
        <?php
            //Na mundeson te ndryshojme nje fjale me nje fjale tjeter brenda nje stringu.
            $emri ='Shkolla Digjitale Prizren'.'<br>';
            $ndrroje= str_replace('Prizren','Prishtine',$emri);

            echo $emri;
            echo $ndrroje;
        ?>
    </body>
</html>