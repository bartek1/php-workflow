<?php
    // skladnia i zmienna 

    // str ( tekst )
    $imie = 'Bartek';
    $nazwisko = 'Hendzel';
    
    // int ( liczba całkowita )
    $wiek = 17;

    // dict ( słownik )
    $adres_zamieszkania = array(
        'miasto' => 'Szczecin',
        'kod_pocztowy' => '71-072',
        'ulica' => 'Madalińskiego 8',
    );

    // list ( lista )
    $zainteresowania = array(
        'programowanie',
        'koszykówka',
        'sport'
    );

    // print ( wyświetlanie )
    echo '<h1>' . $imie . ' ' . $nazwisko . '</h1>';
    echo '<br />';
    echo 'Mam' . $wiek . 'lat';
    echo '<br />';
    echo 'Mieszkam w ' . $adres_zamieszkania['miasto'];
    echo ' kod pocztowy ' . $adres_zamieszkania['kod_pocztowy'] ;
    echo ' numer ulicy ' . $adres_zamieszkania['ulica'] ; 
    echo '<br />';
    echo 'Moje zainteresownia :';

    $co = count($zainteresowania);

    echo '<ul>';
    for ($index = 0; $index < $co; $index++) {
        echo '<li>' . $zainteresowania[$index] . '</li>';
    }
    echo '</ul>';
?>
