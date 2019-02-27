<!--how to create php variables -->

<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Php form Isset & Input </h1>

    <form  method="GET">

      <input type="text" name="persoon" >
      <button>Submit</button>

    </form>


    <?php

      if((isset($_GET['persoon']) == true)){

        $naam = $_GET['persoon'];
        echo $naam. " is een genie";

      } else {

        echo "Voer uw naam in";
      }

     ?>

  </body>
</html>
