<html>
<head>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php
    // skladnia i zmienna 
    // str ( tekst )
    $informacje = array(
    'imie' => 'Bartek',
    'nazwisko' => 'Drań',
    
    // int ( liczba całkowita )
    'wiek' => '17' ,
    'zamieszkanie'=> array(
        'miasto' => 'Szczecin',
        'kod_pocztowy' => '71-072',
        'ulica' => 'Madalińskiego 8'
    ),
    'zainteresowania'=>  array(
        '0'=>'programowanie',
        '1'=>'koszykówka',
        '2'=>'sport'
        ),
        'szkoly'=> array(
        '0'=>'podstawówka',
        '1'=>'gimnazjum',
        '2'=>'technikum'
        ),
    );
    

    // print ( wyświetlanie )

    echo '<h1>' . $informacje['imie'] . ' ' . $informacje['nazwisko'] . '<button type="button" class="btn btn-primary">'.$informacje['wiek'] .'lat'.'</button>' . '</h1>';
    echo '<br />';
    echo 'Mam' . $informacje['wiek'] . 'lat';
    echo '<br />';
    echo 'Mieszkam w ' . $informacje['zamieszkanie']['miasto'];
    echo ' kod pocztowy ' . $informacje['zamieszkanie']['kod_pocztowy'] ;
    echo ' numer ulicy ' . $informacje['zamieszkanie']['ulica'] ; 
    echo '<br />';

    echo '<div class="row">';
    echo '<div class="col-md-6">Moje zainteresownia :';
    $co = count($informacje['zainteresowania']);
    echo '<ul>';
    for ($index = 0; $index < $co; $index++) {
        echo '<li>' . $informacje['zainteresowania'][$index] . '</li>';
    }
    echo '</ul>';
    echo '</div><div class="col-md-6">' ;
    echo 'Moje szkoly:';
    $co = count($informacje['szkoly']);
    echo '<ul>';
    for ($index = 0; $index < $co; $index++) {
        echo '<li>' . $informacje['szkoly'][$index] . '</li>';
    }
    echo '</ul></div>';
    echo '</div>';
    echo '<hr />';
    echo '2015' ;
   
?>

</body>
</html>


