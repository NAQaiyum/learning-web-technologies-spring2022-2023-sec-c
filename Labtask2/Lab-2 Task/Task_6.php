<html>
    <head>
        <title>Answer 5</title>  
    </head>
    <body>
        <?php 
        
        $x = array('11', '22', '33', '44', '55');
        $element = '33';

        for ($i = 0; $i < count($x); $i++)
        { 

            if ($x[$i] == $element)
            { 
            echo "<b> Element found at position </b>" . $i ."<br />";
            }

            else  echo " Element not found " . "<br />";

        }

        ?>  
    </body>
</html>




