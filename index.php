<html>
    <head>
        <!--Postavljanje naslova stranice i povezivanje stila -->
        <title>Ljubisa Zadatak</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
                echo '<tr class="red">';
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
            echo '<p class="rez"></p>';
            
           /*Inicializacija  f1 i f2 koje preuzimaju kolacice napravljene pomocu java scripta */ 
           $f1 = $_COOKIE["f1"]; 
           $f2 = $_COOKIE["f2"];
           $dateTime = "'".date("Y-m-d")." ".date("H:i:s")."'"; //trenutno vrijeme
           
            /* pozivanje klase kalkulatora */
            $calc = new Calculator();
            $result = $calc -> calculate((int)$f1,(int)$f2);
            
            echo $f1.' X '.$f2." = ".$result.'<br>';
            /* Unos u bazu */ 
            $sql = "INSERT INTO results (id, factor1, factor2, operation, result, operation_date)
                    VALUES ('', $f1,$f2, '*', $result, $dateTime)";
        
            /* Provjera dal je unos uspjesan */
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }

            $conn->close();  
        ?>
        <script src="calculator.js"></script>
    </body>
</html>