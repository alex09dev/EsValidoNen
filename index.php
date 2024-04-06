<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip</title>
</head>

<body>

    <div id="contenedor">
        <h1 class="titulo">
            Es valido nen??
        </h1>
        <form class="cacharro">
            <input type="text" name="regalo">
        </form>

        <?php
        $regalo = $_GET["regalo"] ?? null;
        ?>


        <h1>
            <div class="texto">
                <?php
                //flipe malissssimo
                if ($regalo)
                    if (str_starts_with(strtolower($regalo), "a")) {
                        echo "Nen, que es validooo!";
                    } else {
                        echo "Nen, que te la flipas! No es valido";
                    } else {
                    echo "Va nen, pon un regalillo";
                }

                ?>
            </div>
        </h1>
    </div>

    <style>
        * {
            box-sizing: border-box;
            margin: auto;
            padding: auto;
        }

        body {
            color: #202124;
            background-color: #2b344a;
            margin: auto;
            padding: auto;
            display: grid;
            place-items: center;
            height: 100vh;
            text-align: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        #contenedor {
            background-color: #f3f3f3;
            padding: 40px;
            border-radius: 20px;
        }

        .titulo {
            font-size: 50px;
            color: black;
        }

        .cacharro input {
            margin-bottom: 20px;
            margin-top: 20px;
            font-size: 35px;
            height: 35px;
            width: 100%;
            padding: 12px;
        }
    </style>


</body>

</html>