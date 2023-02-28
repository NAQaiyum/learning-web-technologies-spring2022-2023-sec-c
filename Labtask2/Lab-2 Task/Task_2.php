<html>
    <head>
        <title>Answer 2</title>  
    </head>
    <body>
        <?php  

        $price = 150;  
        $vat = 15;  

        echo "<b> Price is = " . $price . "<br />";
        echo "<b> Vat is = " . $vat . "<br />";
        echo "<b> Total </b> = " . (($price * ($vat / 100)) + $price) . "<br />"; 

        ?>  
    </body>
</html>
