<?php

$possible_chars = "q w e r t y u i o p a s d f g h j k l z x c v b n m 1 2 3 4 5 6 7 8 9 £ % & @ # * . , Q W E R T Y U I O P A S D F G H J K L Z X C V B N M";

$array_chars = explode(" ", $possible_chars);
$length_password = 7;

$has_length_password = isset($_GET["number"]);
if ($has_length_password){
    $length_password = $_GET["number"];
};

include __DIR__ . "/partials/function.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Genera una password più sicura</h1>
            </div>
            <div class="card-body">
                <form method="GET">
                    <label for="number">Inserire il numero di caratteri della password (7-15)</label>
                    <input type="number" name="number" id="number" value="<?php echo $length_password; ?>" min="7" max="15" step="1">
                    <button type="submit" class="btn btn-primary">Genera</button>
                </form>
                <?php if($has_length_password): ?>
                <h3><?php echo generate_password($length_password, $array_chars);?></h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
</body>