<DOCUMENT HTML>
    <html lang="en">>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

    </head>

    <body>
    <?php
      echo "<table border='1' style='border-collapse-collaose'>";
      for($i=1; $i<=10; $i++){
        echo "<tr> <td>" . $i . '</td></tr>';
    }
      echo "</table>";

      echo "<br>";

      echo "<table border='1' style='border-collapse-collaose'>";
      for($i=1; $i<=10; $i++){
          echo "<tr>";
          for($j=1; $j<=10; $j++){
            echo '<td>' . $i*$j . '</td>';
          }
          echo '</tr>';
        }
    ?>

    </body>

    </html>