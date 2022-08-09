            <p>
            <?php
            echo 'XII RPL 1';
            ?>
</p>
<p>
            <?php

            $bil= 3;
            echo $bil;
            var_dump($bil);
            // output int (3)

            $var = "";
            var_dump($var);
            // output: string(0) ""

            $var = null;
            var_dump($var);
            // output: NULL
            ?>
</p>
<p>
            <?php
            $a = 5;
            $b = 5;

            if ($a > $b) {
                echo 'a lebih besar dari b';
            } elseif ($a == $b) {
                echo 'a sama dengan b';
            } else {
                echo 'a kurang dari b';
            }
            ?>
</p><p>
                <p>----------1.Perulangan Bilangan Genap 100 - 0---------------</p>
                <?php
                $i = 100;
                while ($i >= 0){
                    echo "$i";
                    echo "<br/>";
                    $i-=2;
                }
                ?>
</p>
<p>
            <p>-------------2.Menampilkan Bilangan Yang mempunyai Angka 8---------------</p>
            <?php
            for ($i=8; $i <= 100; $i=$i+10){
                 echo $i;
                 echo "<br />";
            }
            ?></p>
             