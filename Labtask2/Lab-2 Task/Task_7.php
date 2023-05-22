<html>
<head>
    <title>Answer 7</title>
</head>
<body>
    <table border="2" width="30%" height="120px">
        <tr>
            <td>
                
                <?php
                for($a=0;$a<=2;$a++){	
	                for($b=0;$b<=$a;$b++){
		                echo "*";
	                    }
	                echo "<br/>";
                    }
                ?>
            </td>
            <td>
                
            <?php
            for($a=3; $a>=1; $a--)
            {
                for($b=1; $b<=$a; $b++)
                {
                    echo " $b ";
                }
                echo "<br>";

            }  

            ?>   
            </td>
            <td>
            <?php
                $alpha = range('A', 'Z');
                $i = 0;
                for($a=0; $a<=2; $a++)
                {
                    for($b=0; $b<=$a; $b++)
                    echo $alpha[$i++]." ";
                    echo "<br>";
                }
            ?>
            </td>
        </tr>
    </table>
</body>
</html>