<html>
    <head></head>
    <body>
        <h2>Integer</h2>
        <?php 
        // NA tregon tipin e te dhenave boolean dhe na tregon a eshte  true apo false.
        $x = 1024;
        echo $X;
        echo "<br>";
        var_dump(is_int($x));
        echo "<br>";
        // is_int($x); //nuk funksionon
        ?>
        <br>
        <?php
        //Na tregon tipin e te dhenave boolean dhe na tregon a eshte true apo false.
        $x = 10.24;
        var_dump(is_integer($x));
        ?>
        <br>
        <?php
            // Na tregon tipin e te dhenave  boolean dhe na tregon a eshte true apo false.
            $x = 1024;
            var_dump(is_long($x)); //na tregon njejte sikurse is_int dhe is_integer.
        ?>
        <h2>test</h2>
        <?php
            $x = 10.240;
            var_dump(is_float($x));
            echo $x;
        ?>
        <br>
        <?php
            $x = 10240;
            var_dump(is_float($x));
            echo $x;
        ?>
        <br>
        <?php
              $x = 10240;
            var_dump(is_double($x));
            echo $x;
        ?>
        <br>
        <h2>Infinit</h2>
        <?php
            //Kur eshte nje vlere qe nuk mund te llogaritet athere ajo vlere llogaritet si infinit.
            $x= 9.9e9999999989+22;
            var_dump($x);
        ?>
        <br>
        <?php
            $x = 1.2e311133;//mas shkronjes e duhet me shenu 3 ose me shume vlera per me nxjerr infinit
            echo is_infinite($x);
            echo "<br>";
            echo var_dump(is_infinite($x));
        ?>
        <h2>Finit</h2>
        <?php
            //Finit tregon qe ka fund vlera
            $x = 1.2321;
            var_dump($x);
            echo"<br>";
            echo is_infinite($x);
            echo "<br>";
            echo var_dump(is_infinite($x));

        ?>
        <br>
        <h2>Not a Namber</h2>
        <?php
        $z=200;
        var_dump(is_nan($z));
        //$z=NAN;
        // var-dump(is_nan($z))
        ?>
    </body>
</html>