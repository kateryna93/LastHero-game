<?php

$names = ['Nikita', 'Dima', 'Alex', 'Sergey', 'Vlad', 'Andrey', 'Artem', 'Ivan', 'Anton', 'Maxim', 'Oleg', 'Roman',];

$surnames = ['Melnyk', 'Shevchenko', 'Boyko', 'Kovalenko', 'Bondarenko', 'Tkachenko', 'Kovalchuk', 'Kravchenko',
    'Oliynyk', 'Shevchuk', 'Polishchuk', 'Lysenko',];

//Create list of 30 participants
define("TOTAL_PARTICIPANTS_COUNT", 30);
for ($i = 1; $i <= TOTAL_PARTICIPANTS_COUNT; $i++) {
    $randName = array_rand($names, 1);
    $randSurname = array_rand($surnames, 1);
    $randAge = rand(18, 60);
    $participants[$i] = [
        'name' => $names[$randName],
        'surname' => $surnames[$randSurname],
        'age' => $randAge,
    ];
}

echo "<strong>List of participants</strong><br>";
echo "<pre>";
print_r($participants);
echo "</pre>";

//Create game
echo "<br><h1>Game is starting:</h1><br>";
for($date=1; $date <= 30; $date++) {
    $rand_keyNumber = array_rand($participants, 1);
    $rand_participant = $participants[$rand_keyNumber];
    $participant = " ";

    foreach($rand_participant as $key => $value) {
        if ($key == 'age'){
            $participant .= ", ".$value." age";
        }else{
            $participant .= " ".$value;
        }
    }
    if($date == 30){
        echo '<h2>The winner is</h2><h3>' . $participant . '</h3><br>';
    } else {
        echo '<b>' . $date . '</b><br>';
        echo 'out of game: ' . $participant . '<br><br>';
    }

    unset($participants[$rand_keyNumber]);
}