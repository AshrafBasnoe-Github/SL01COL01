<?php

// Developer: Ashraf Basnoe

//Variables
$FirstName = "Ashraf"; //string
$LastName = "Basnoe";//string
$Fullname = $FirstName . " " . $LastName;//string
$ShoeSize = 46;//int
$PhoneNumber = "06 50266647"; //string
$Country = "Nederland";//string
$Province = "Flevoland";//string
$City = "Almere";//string
$weight = 86.1;//float


//Hier word er een zin gevormd met de aangemaakt variables. Er worden, strings, floats en integers gebruikt.
$zin = "Ik ben $Fullname. Mijn schoenmaat is $ShoeSize en ik weeg $weight. 
    <br> Ik ben bereikbaar op $PhoneNumber. <br> 
    Ik woon in het land $Country en de provincie $Province. 
    <br>De stad waar ik in woon heet $City <br>";


//string
$Developer = "Ashraf Basnoe";

//boolean
$IsMarried = false;

//dit is een if else. er word gecheckt als de persoon getrouwd is of niet en laat op die basis de juiste zin zien
if ($IsMarried == true) {
    echo $Developer . " is getrouwd" . "<br>";
} else {
    echo $Developer . " is niet getrouwd" . "<br>";
}

//Integer
$age = 20;

echo $Developer . " is hou oud? " . $age;

//float

$pi = 3.14;

$cirkelDiameter = 10;

$oppervlakte = $pi * $cirkelDiameter;

echo "<br> $oppervlakte" . "<br>";


//arrays


//dit is een array genaamd programmeertalen. Het is een rij, met daarin programmeertalen die in een variable gestopt zijn
$ProgrammeerTalen = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "C#",
    "Python",
    "Node.js",
    "Vue",
    "React"
];

//hier word je array getoond met de print_r(); functie.
print_r($ProgrammeerTalen);


//Hier word er gezegd hoeveel programmeertalen er zijn. Er word gebruik gemaakt van de Count functie
echo "<br>";
print("aantal programmeertalen" . " ");
print_r(count($ProgrammeerTalen));
print ("<br>");
//date

$currentDate = date('d-m-y H:i:s');
echo $currentDate;


date_default_timezone_set("Europe/Amsterdam");
$time = date("H:i:s");
echo $time;

if ($time < 120000) {
    //In de ochtend is het groen
    echo '<body style="background-color:green">';
} else {
    // in de middag en daarna is het rood
    echo '<body style="background-color:red">';

}

?>

<html>
<head>
    <style>
        .zin {
            font-family: Georgia, serif;
            font-size: 20px;
            letter-spacing: 6px;
            word-spacing: 6px;
            color: #000000;
            font-weight: 700;
            text-decoration: underline solid rgb(68, 68, 68);
            font-style: italic;
            font-variant: normal;
            text-transform: uppercase;
        }

    </style>
</head>
    <body>
        <div class="zin""zin">
        <?php


        print ($zin);
        ?>

        </div>
    </body> 
</html>