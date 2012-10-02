
<html>
    <head>
        <title><?php echo 'Witaj na mojej stronie'; ?></title>
    </head>
    <body>
        <?php
//Tworzymy stala
        define("VAT", 23);
        /*
         * Tworzymy funkcje
         */

        function ObliczVat($kwota) {
            return $kwota * VAT / 100;
        }

        $produkt = 100;
        echo obliczVat($produkt);
        ?>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </body>
</html>