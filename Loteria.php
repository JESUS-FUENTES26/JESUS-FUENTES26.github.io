<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos Mexicanos</title>
    <link rel="stylesheet" href="view/style.css"> <!-- Ruta al archivo CSS -->
</head>
<body>
    <header>
        <div class="header-content">
            <img src="img/logo.jg" alt="Juegos Mexicanos" class="logo"> <!-- Ruta a la imagen del logo -->
            <nav>
                <ul>
                    <li><a href="trompos.php">Trompos </a></li>
                    <li><a href="mar.php"> La Víbora de la mar</a></li>
                    <li><a href="Loteria.php">Loteria mexicana</a></li>
                  
                </ul>
            </nav>
        </div>
    </header>
    <?php
session_start(); // Iniciar la sesión para recordar el estado de las cartas

// Array de cartas de la lotería con su nombre, imagen y audio
$cartas_original = [
    ["nombre" => "El Camaron", "imagen" => "img/camaron.jpg", "audio" => "audio/camaron.mp3"],
    ["nombre" => "El Diablo", "imagen" => "img/diablo.jpg", "audio" => "audio/diablo.mp3"],
    ["nombre" => "La Dama", "imagen" => "img/dama.jpg", "audio" => "audio/dama.mp3"],
    ["nombre" => "El Apache", "imagen" => "img/apache.jpg", "audio" => "audio/apache.mp3"],
    ["nombre" => "La Mano", "imagen" => "img/mano.jpg", "audio" => "audio/mano.mp3"],
    ["nombre" => "El Pajaro", "imagen" => "img/pajaro.jpg", "audio" => "audio/pajaro.mp3"],
    ["nombre" => "El Valiente", "imagen" => "img/valiente.jpg", "audio" => "audio/valiente.mp3"],
    ["nombre" => "El Melon", "imagen" => "img/melon.jpg", "audio" => "audio/melon.mp3"],
    ["nombre" => "La Corona", "imagen" => "img/corona.jpg", "audio" => "audio/corona.mp3"],
    ["nombre" => "La Garza", "imagen" => "img/garza.jpg", "audio" => "audio/garza.mp3"],
    ["nombre" => "El Mundo", "imagen" => "img/mundo.jpg", "audio" => "audio/mundo.mp3"],
    ["nombre" => "La Rosa", "imagen" => "Loteria/la rosa.jpg", "audio" => "audio/rosa.mp3"],
    ["nombre" => "La Sandia", "imagen" => "img/sandia.jpg", "audio" => "audio/sandia.mp3"],
    ["nombre" => "El Árbol", "imagen" => "img/arbol.jpg", "audio" => "audio/arbol.mp3"],
    ["nombre" => "El Alacran", "imagen" => "img/alacran.jpg", "audio" => "audio/alacran.mp3"],
    ["nombre" => "El Corazon", "imagen" => "img/corazon.jpg", "audio" => "audio/corazon.mp3"],
    ["nombre" => "La Muerte", "imagen" => "img/muerte.jpg", "audio" => "audio/muerte.mp3"],
    ["nombre" => "La Sirena", "imagen" => "img/sirena.jpg", "audio" => "audio/sirena.mp3"]
];

// Comprobar si ya existe un orden de cartas guardado en la sesión
if (!isset($_SESSION['cartas'])) {
    $_SESSION['cartas'] = $cartas_original; // Inicializar las cartas en la sesión
}

// Revolver el array si se presiona el botón "Revolver"
if (isset($_POST['revolver'])) {
    shuffle($_SESSION['cartas']); // Revolver las cartas en la sesión
}

// Utilizar el orden de cartas guardado en la sesión
$cartas = $_SESSION['cartas'];

// Obtener la carta actual
$cartaActual = isset($_POST['carta_actual']) ? $_POST['carta_actual'] : 0;

// Incrementar para mostrar la siguiente carta si se presiona "Siguiente"
if (isset($_POST['siguiente'])) {
    $cartaActual++;
    if ($cartaActual >= count($cartas)) {
        $cartaActual = 0; // Volver a la primera carta si llegamos al final
    }
}

// Manejo de clic en una carta
if (isset($_POST['fila']) && isset($_POST['columna'])) {
    $fila = (int)$_POST['fila'];
    $columna = (int)$_POST['columna'];
    $index = $fila * 4 + $columna; // Calcular el índice de la carta seleccionada
    if ($index >= 0 && $index < count($cartas)) {
        $cartaActual = $index;
    }
}

$carta = $cartas[$cartaActual];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotería Mexicana</title>
    <link rel="stylesheet" href="view/style.css">
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .tablero-container {
            text-align: center;
        }

        .tablero {
            display: grid;
            grid-template-columns: repeat(4, 100px);
            grid-gap: 10px;
            margin-top: 20px;
        }

        .carta {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
            color: black;
            cursor: pointer;
        }

        .carta p {
            color: black;
        }

        .carta-actual {
            text-align: center;
            color: black;
        }

        .botones {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Tablero de cartas y botón "Revolver" -->
        <div class="tablero-container">
            <form method="post" style="margin-bottom: 20px;">
                <button type="submit" name="revolver">Revolver</button>
            </form>

            <div class="tablero">
                <!-- Muestra el tablero de cartas -->
                <?php for ($i = 0; $i < 16; $i++): ?>
                    <?php $fila = floor($i / 4); $columna = $i % 4; ?>
                    <form method="post" style="display:inline-block;">
                        <input type="hidden" name="fila" value="<?= $fila; ?>">
                        <input type="hidden" name="columna" value="<?= $columna; ?>">
                        <button type="submit" style="border:none; background:none; padding:0;">
                            <div class="carta">
                                <img src="<?= $cartas[$i % count($cartas)]['imagen']; ?>" alt="<?= $cartas[$i % count($cartas)]['nombre']; ?>" width="80">
                            </div>
                        </button>
                    </form>
                <?php endfor; ?>
            </div>

            <!-- Buscador por fila y columna -->
            <form method="post" class="botones">
                <label for="fila">Fila:</label>
                <input type="number" name="fila" min="0" max="3" required>
                <label for="columna">Columna:</label>
                <input type="number" name="columna" min="0" max="3" required>
                <button type="submit" name="buscar">Buscar Carta</button>
            </form>
        </div>

        <!-- Mostrar carta actual y controles de audio -->
        <div class="carta-actual">
            <h2>Carta actual: <?= $carta['nombre']; ?></h2>
            <img src="<?= $carta['imagen']; ?>" alt="<?= $carta['nombre']; ?>" class="imagen-carta" width="150">
            <audio controls>
                <source src="<?= $carta['audio']; ?>" type="audio/mpeg">
                Tu navegador no soporta audio.
            </audio>

            <!-- Botones para Siguiente y Revolver -->
            <form method="post" class="botones">
                <input type="hidden" name="carta_actual" value="<?= $cartaActual; ?>">
                <button type="submit" name="siguiente">Siguiente</button>
                <button type="submit" name="revolver">Revolver</button>
            </form>
        </div>
    </div>
</body>
</html>