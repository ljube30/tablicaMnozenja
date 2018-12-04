<html>
    <head>
        <!--Postavljanje naslova stranice i povezivanje stila -->
        <title>Ljubisa Zadatak</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!--PHP kod-->
        <?php 
            include($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');
            include($_SERVER['DOCUMENT_ROOT'].'/class/calculator.class.php');
            /* Kreiranje tabele u hmtl pomocu php-a */
            echo '<table class="tabela">';
            for($i=0; $i<=10;$i++)
            {
                echo '<tr>';
                for($k=0; $k<=10;$k++)
                {
                    if ($i==0 and $k==0)
                        echo '<td class="celijaZaglavlje">' .''. '</td>';
                    else if ($i==0)
                        echo '<td class="celijaZaglavlje">'.$k.'</td>';
                    else if ($k==0)
                        echo '<td class="celijaZaglavlje">'.$i.'</td>';
                    else
                        echo '<td class="celija">'.$i.' X '.$k.'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        
            /*Inicializacija statickih varijabli f1 i f2 jer nisam bio u mogucnosti da uradim izracunavanje prilikom klika */
            $f1 = 2;
            $f2 = 6;
            $dateTime = "'".date("Y-m-d")." ".date("H:i:s")."'"; //trenutno vrijeme
        
            /* pozivanje klase kalkulatora */
            $calc = new Calculator();
            
            $result = $calc -> calculate($f1,$f2);
            echo '<br/><br/>Rezultat (alpha)kalkulatora je:' . $result . '<br/>';
        
            /* Unos u bazu */ 
            
            $sql = "INSERT INTO results (id, factor1, factor2, operation, result, operation_date)
                    VALUES ('', $f1,$f2, '*', $result, $dateTime)";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }

            $conn->close();  
        ?>
    </body>
</html>