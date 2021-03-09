<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de entrada del dato</title>
    
    <style>
        .padre {
            display: flex;
            height: auto;
            border: solid 1px red;
            background-color: grey;
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
        }
        
        .son1 {
            width: 400px;
            padding-top: 8px;
            padding-bottom: 8px;
            background-color: white;
            border: solid 1px #1c4051;
            border-radius: 6px;
            text-align: center;
            font-weight: bold;
            font-size: 2em;
            display: inline-block;
        }
    </style>
    
</head>

<body>
    <div class="padre">
        <div class="son1">
           <?php
                // $0 - piedra
                // $1 - papel
                // $2 - tijera
                // $3 - lagarto
                // $4 - spock
                function game($player){
                    $com = rand(0, 4);
                    if ($com == 0 and $player == "Piedra") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Piedra";
                        echo "<hr>";
                        echo ">>TABLAS<<";
                        echo "<hr>";
                    } elseif ($com == 0 and $player == "Papel") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Piedra";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 0 and $player == "Tijera") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Piedra";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 0 and $player == "Lagarto") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Piedra";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 0 and $player == "Spock") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Piedra";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 1 and $player == "Piedra") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Papel";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 1 and $player == "Papel") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Papel";
                        echo "<hr>";
                        echo ">>TABLAS<<";
                        echo "<hr>";
                    } elseif ($com == 1 and $player == "Tijera") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Papel";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 1 and $player == "Lagarto") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Papel";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 1 and $player == "Spock") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Papel";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 2 and $player == "Piedra") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Tijera";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 2 and $player == "Papel") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Tijera";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 2 and $player == "Tijera") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Tijera";
                        echo "<hr>";
                        echo ">>TABLAS<<";
                        echo "<hr>";
                    } elseif ($com == 2 and $player == "Lagarto") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Tijera";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 2 and $player == "Spock") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Tijera";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 3 and $player == "Piedra") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Lagarto";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 3 and $player == "Papel") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Lagarto";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 3 and $player == "Tijera") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Lagarto";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 3 and $player == "Lagarto") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Lagarto";
                        echo "<hr>";
                        echo ">>TABLAS<<";
                        echo "<hr>";
                    } elseif ($com == 3 and $player == "Spock") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Lagarto";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 4 and $player == "Piedra") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Spock";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 4 and $player == "Papel") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Spock";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 4 and $player == "Tijera") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Spock";
                        echo "<hr>";
                        echo ">>HAS PERDIDO<<";
                        echo "<hr>";
                    } elseif ($com == 4 and $player == "Lagarto") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Spock";
                        echo "<hr>";
                        echo ">>HAS GANADO<<";
                        echo "<hr>";
                    } elseif ($com == 4 and $player == "Spock") {
                        echo "--RESULTADO--";
                        echo "<hr>";
                        echo "PLAYER: " . $player;
                        echo "<br>";
                        echo "COM: Spock";
                        echo "<hr>";
                        echo ">>TABLAS<<";
                        echo "<hr>";
                    } else {
                        header("Location: EjerFormulario_4.html");
                    }   
                }
                echo game($_REQUEST["game"]);
            ?>
            <a>¿Quieres volver a jugar?</a>
            <form method="post" action="20-11-2020_EjerFormulario_4.html">
               <input type="submit" value="Volver a jugar">
           </form>
        </div>
    </div>		
</body>
</html>