<?php

$name = '';
$celebrate = '';
$beach = '';
$sports_and_games = '';
$enjoing_nature = '';
$cultural_events = '';
$other_attractions = '';
$transportation_type = '';
$stay = '';
$ratings = '';
$specifics = '';
$cuisine = '';
$restaurants = '';
$diet = '';
$budget = '';
$accomodation = '';
$dining = '';
$sights = '';
$events = '';
$disability = '';
$females = '';
$pets = '';
$b_day = '';
$additional = '';
$time = '';


$dates_array = explode(' - ', $_POST['dates-1']);

$date_from_array = explode('/', $dates_array[0]);
$date_to_array = explode('/', $dates_array[1]);


$date_from_string = "$date_from_array[2]/$date_from_array[0]/$date_from_array[1]";
$date_to_string = "$date_to_array[2]/$date_to_array[0]/$date_to_array[1]";
$date_from = date_create($date_from_string);
$date_to = date_create($date_to_string);

$total_days = date_diff($date_to, $date_from);
$days = $total_days->days;


$amount = ($days >= 10) ? 30.00 : 40.00;
$amount = $amount * $days;
