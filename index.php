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