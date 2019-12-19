<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Święta</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Cabin|Ma+Shan+Zheng&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="banner">Kolędy - Święta 2019</div>
        <div class="menu"></br></br></br></br></br>Wybierz kolęde:


        <?php

            include('polaczenie.php');

            mysqli_set_charset($conn,"utf8");
            
            $sql = "select * from koledy";
				$result = $conn->query($sql);
				
				if($result->num_rows > 0)
				{
					echo "<form action='index.php' method='POST'>";
					echo "<select name='Lista'>";
					while($row = $result->fetch_assoc())
					{
						echo "<option value=",$row["ID"],">",$row["TYTUL"]."</option>";
					}
                    echo "</select>";
                    
                    echo "</br>";
							
					echo "<input type='submit' value='Wyświetl'/>";
					echo "</form>";
                }

        ?>
        
            
        </div>
        <div class="koleda">
            <div class="x">
                
                <?php

                    $ID = $_POST["Lista"];
                    if(($_POST["Lista"])!="" )
                    {
                        $sql = "select * from koledy where ID = '$ID'";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo "<h2>".$row["TYTUL"]."</h2>";
                                echo "</br>";
                                echo $row["TEKST"];
                            }

                        }


                    }

                ?>
            </div>
        </div>
        <div class="stopka"></div>

    </body>

</html>