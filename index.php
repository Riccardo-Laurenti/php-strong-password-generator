<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>BoolPass</title>
</head>

<body>
    <form>
        <label for="pswlenght">Lunghezza della password</label>
        <input type="number" name="pswlength" id="pswlength">
        <input type="submit" value="GENERA PASSWORD">
        <?php

        $pswlength = $_GET['pswlength'];
        settype($pswlength, 'integer');
        $generaPassw = generateRandomString($pswlength);
        echo $generaPassw;


        // // Funzione generatore caratteri
        function generateRandomString($pswlength)
        {
            $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$&()£";
            $charactersLength = strlen($characters);
            $passw = "";
            $x = 0;
            while (++$x <= $pswlength) {

                $passw = $passw . $characters[rand(0, $charactersLength - 1)];
            };
            return $passw;
        };

        ?>
    </form>


</body>

</html>