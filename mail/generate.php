<?php


$country_from = !empty($_POST['residency-country']) ? $_POST['residency-country'] : false;

$city_from = $_POST['residance-city'];
$country_to = $_POST['country-to'];
$city_to = $_POST['city-to'];
$dates = $_POST['dates-1'];

$email =  $_POST['email'];

$email_content = "<strong>Country From:</strong> $country_from<br />";
$email_content .= "<strong>City From:</strong> $city_from<br />";
$email_content .= "<strong>Country To:</strong> $country_to<br />";

$email_content .= "<strong>City To:</strong> $city_to<br />";

$email_content .= "<strong>Dates:</strong> $dates<br />";
if (isset($_POST['phone']) && !empty($_POST['phone'])) {
    $phone = $_POST['phone'];
    $email_content .= "<strong>Phone:</strong> $phone";
}
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $email_content .= "<br /><strong>Email: </strong>$email";
}
if (isset($_POST['time-to-call']) && !empty($_POST['time-to-call'])) {
    $email_content .= "<br /><strong>Time to call: </strong>" . $_POST['time-to-call'] . "<br />";
}

if (isset($_POST['adults-num']) && !empty($_POST['adults-num'])) {
    $email_content .= "<strong>Number of travelers “Adults”: </strong>" . $_POST['adults-num'];
}
if (isset($_POST['adults-age']) && !empty($_POST['adults-age'])) {
    $email_content .= "<br /><strong>Their ages: </strong>" . $_POST['adults-age'];
}
if (isset($_POST['kids-num']) && !empty($_POST['kids-num'])) {
    $email_content .= "<br /><strong>Number of travelers “Kids”:</strong> " . $_POST['kids-num'];
}
if (isset($_POST['kids-age']) && !empty($_POST['kids-age'])) {
    $email_content .= "<br /><strong>“Kids” ages:</strong> " . $_POST['kids-age'];
}

if (isset($_POST['c-1']) && !empty($_POST['c-1'])) {
    $email_content .= "<strong>Main cities, Metropols:</strong> &#10003;<br />";
}
if (isset($_POST['c-2']) && !empty($_POST['c-2'])) {
    $email_content .= "<strong>Historic Small Towns:</strong> &#10003;<br />";
}
if (isset($_POST['c-3']) && !empty($_POST['c-3'])) {
    $email_content .= "<strong>Religious Sites:</strong> &#10003;<br />";
}
if (isset($_POST['c-4']) && !empty($_POST['c-4'])) {
    $email_content .= "<strong>World War Memorials:</strong> &#10003;<br />";
}
if (isset($_POST['c-5']) && !empty($_POST['c-5'])) {
    $email_content .= "<strong>Built World Wonders:</strong> &#10003;<br />";
}
if (isset($_POST['c-6']) && !empty($_POST['c-6'])) {
    $email_content .= "<strong>UNESCO World Heritage Sites:</strong> &#10003;<br />";
}

$celebrate = "<strong>Celebrate:</strong> <br />";
if (isset($_POST['c-s41']) && !empty($_POST['c-s41'])) {
    $celebrate .= "Anniversary<br />";
}
if (isset($_POST['c-s42']) && !empty($_POST['c-s42'])) {
    $celebrate .= "Honeymoon<br />";
}
if (isset($_POST['c-s43']) && !empty($_POST['c-s43'])) {
    $celebrate .= "Romance getaway<br />";
}


$beach = "<strong>Beach Holiday:</strong> <br />";
if (isset($_POST['c-7']) && !empty($_POST['c-7'])) {
    $beach .= " - Relaxing,<br />";
}
if (isset($_POST['c-8']) && !empty($_POST['c-8'])) {
    $beach .= " - Swimming,<br />";
}
if (isset($_POST['c-9']) && !empty($_POST['c-9'])) {
    $beach .= " - Snorkelling,<br />";
}
if (isset($_POST['c-10']) && !empty($_POST['c-10'])) {
    $beach .= " - Sailing,<br />";
}
if (isset($_POST['c-11']) && !empty($_POST['c-11'])) {
    $beach .= " - Surfing,<br />";
}


$sports_and_games = "<strong>Sports and Games:</strong> <br />";
if (isset($_POST['c-12']) && !empty($_POST['c-12'])) {
    $sports_and_games .= " - Tennis,<br />";
}
if (isset($_POST['c-13']) && !empty($_POST['c-13'])) {
    $sports_and_games .= " - Golf,<br />";
}
if (isset($_POST['c-14']) && !empty($_POST['c-14'])) {
    $sports_and_games .= " - Skiing,<br />";
}
if (isset($_POST['c-15']) && !empty($_POST['c-15'])) {
    $sports_and_games .= " - Snowboarding,<br />";
}
if (isset($_POST['c-16']) && !empty($_POST['c-16'])) {
    $sports_and_games .= " - Sailing,<br />";
}
if (isset($_POST['c-16']) && !empty($_POST['c-16'])) {
    $sports_and_games .= " - Sailing,<br />";
}
if (isset($_POST['c-17']) && !empty($_POST['c-17'])) {
    $sports_and_games .= " - Horse Riding,<br />";
}
if (isset($_POST['c-18']) && !empty($_POST['c-18'])) {
    $sports_and_games .= " - Rock Climbing,<br />";
}
if (isset($_POST['c-19']) && !empty($_POST['c-19'])) {
    $sports_and_games .= " - Rafting,<br />";
}
if (isset($_POST['c-20']) && !empty($_POST['c-20'])) {
    $sports_and_games .= " - Hiking,<br />";
}
if (isset($_POST['c-21']) && !empty($_POST['c-21'])) {
    $sports_and_games .= " - Paragliding,<br />";
}
if (isset($_POST['c-22']) && !empty($_POST['c-22'])) {
    $sports_and_games .= " - Surfing, Kite Surfing,<br />";
}


$enjoing_nature = "<strong>Enjoying Nature:</strong> <br />";
if (isset($_POST['c-23']) && !empty($_POST['c-23'])) {
    $enjoing_nature .= " - Natural Wonders,<br />";
}
if (isset($_POST['c-24']) && !empty($_POST['c-24'])) {
    $enjoing_nature .= " - National Parks,<br />";
}
if (isset($_POST['c-25']) && !empty($_POST['c-25'])) {
    $enjoing_nature .= " - Nature World Heritage Sites,<br />";
}
if (isset($_POST['c-26']) && !empty($_POST['c-26'])) {
    $enjoing_nature .= " - Rainforest Trecking,<br />";
}
if (isset($_POST['c-27']) && !empty($_POST['c-27'])) {
    $enjoing_nature .= " - Hunting,<br />";
}
if (isset($_POST['c-28']) && !empty($_POST['c-28'])) {
    $enjoing_nature .= " - Fishing,<br />";
}


$cultural_events = "<strong>Cultural & Sports Events:</strong> <br />";
if (isset($_POST['c-29']) && !empty($_POST['c-29'])) {
    $cultural_events .= " - Classical Music Concerts,<br />";
}
if (isset($_POST['c-30']) && !empty($_POST['c-30'])) {
    $cultural_events .= " - Opera,<br />";
}
if (isset($_POST['c-31']) && !empty($_POST['c-31'])) {
    $cultural_events .= " - Pop - Rock Concerts, Festivals,<br />";
}
if (isset($_POST['c-32']) && !empty($_POST['c-32'])) {
    $cultural_events .= " - Olympic Games,<br />";
}
if (isset($_POST['c-33']) && !empty($_POST['c-33'])) {
    $cultural_events .= " - Formule-1 Races,<br />";
}
if (isset($_POST['c-34']) && !empty($_POST['c-34'])) {
    $cultural_events .= " - ATP Tennis Tour,<br />";
}
if (isset($_POST['c-35']) && !empty($_POST['c-35'])) {
    $cultural_events .= " - Americas Cup,<br />";
}
if (isset($_POST['c-36']) && !empty($_POST['c-36'])) {
    $cultural_events .= " - Major Football Games,<br />";
}


$other_attractions = "<strong>Other Attractions:</strong> <br />";
if (isset($_POST['c-37']) && !empty($_POST['c-37'])) {
    $other_attractions .= " - Michelin Star Restaurants,<br />";
}
if (isset($_POST['c-38']) && !empty($_POST['c-38'])) {
    $other_attractions .= " - Shopping,<br />";
}
if (isset($_POST['c-39']) && !empty($_POST['c-39'])) {
    $other_attractions .= " - Night Life,<br />";
}
if (isset($_POST['c-40']) && !empty($_POST['c-40'])) {
    $other_attractions .= " - Cruising,<br />";
}
if (isset($_POST['c-41']) && !empty($_POST['c-41'])) {
    $other_attractions .= " - Theme and Water Parks,<br />";
}


$transportation_type = "<strong>Transportation Type:</strong> <br />";
if (isset($_POST['c-42']) && !empty($_POST['c-42'])) {
    $transportation_type .= " - Airline \"Plane\", helicopter,<br />";
}
if (isset($_POST['c-43']) && !empty($_POST['c-43'])) {
    $transportation_type .= " - Rental Car, limusine,<br />";
}
if (isset($_POST['c-44']) && !empty($_POST['c-44'])) {
    $transportation_type .= " - Train,<br />";
}
if (isset($_POST['c-45']) && !empty($_POST['c-45'])) {
    $transportation_type .= " - Bus,<br />";
}
if (isset($_POST['c-46']) && !empty($_POST['c-46'])) {
    $transportation_type .= " - Taxi,<br />";
}
if (isset($_POST['c-47']) && !empty($_POST['c-47'])) {
    $transportation_type .= " - Cruise, shipb,<br />";
}
if (isset($_POST['c-48']) && !empty($_POST['c-48'])) {
    $transportation_type .= " - Public transport,<br />";
}

$stay = "<strong>Would to stay:</strong> <br />";
if (isset($_POST['c-49']) && !empty($_POST['c-49'])) {
    $stay .= " - Hotel, resort,<br />";
}
if (isset($_POST['c-50']) && !empty($_POST['c-50'])) {
    $stay .= " - Private Villa,<br />";
}
if (isset($_POST['c-51']) && !empty($_POST['c-51'])) {
    $stay .= " - Serviced or Furnished Appartment,<br />";
}
if (isset($_POST['c-52']) && !empty($_POST['c-52'])) {
    $stay .= " - Luxury Guesthouse,<br />";
}

$ratings = "<strong>Ratings:</strong> <br />";
if (isset($_POST['c-53']) && !empty($_POST['c-53'])) {
    $ratings .= " - 5,<br />";
}
if (isset($_POST['c-54']) && !empty($_POST['c-54'])) {
    $ratings .= " - 4,<br />";
}
if (isset($_POST['c-55']) && !empty($_POST['c-55'])) {
    $ratings .= " - Between 8.6-9.0 on booking.com,<br />";
}
if (isset($_POST['c-56']) && !empty($_POST['c-56'])) {
    $ratings .= " - Super host on airbnb.com,<br />";
}
if (isset($_POST['c-57']) && !empty($_POST['c-57'])) {
    $ratings .= " - Minimum traveler rating 4-5 on tripadvisor.com,<br />";
}

$specifics = "<strong>Important specifics:</strong> <br />";
if (isset($_POST['c-58']) && !empty($_POST['c-58'])) {
    $specifics .= " - Double Bed,<br />";
}
if (isset($_POST['c-59']) && !empty($_POST['c-59'])) {
    $specifics .= " - King Size Bed,<br />";
}
if (isset($_POST['c-60']) && !empty($_POST['c-60'])) {
    $specifics .= " - Suite,<br />";
}
if (isset($_POST['c-61']) && !empty($_POST['c-61'])) {
    $specifics .= " - Free Wifi,<br />";
}
if (isset($_POST['c-62']) && !empty($_POST['c-62'])) {
    $specifics .= " - Parking,<br />";
}
if (isset($_POST['c-63']) && !empty($_POST['c-63'])) {
    $specifics .= " - Central Location,<br />";
}
if (isset($_POST['c-64']) && !empty($_POST['c-64'])) {
    $specifics .= " - Close to Airport,<br />";
}
if (isset($_POST['c-65']) && !empty($_POST['c-65'])) {
    $specifics .= " - Quiet Location,<br />";
}
if (isset($_POST['c-66']) && !empty($_POST['c-66'])) {
    $specifics .= " - Room With a View,<br />";
}
if (isset($_POST['c-67']) && !empty($_POST['c-67'])) {
    $specifics .= " - Balcony,<br />";
}
if (isset($_POST['c-68']) && !empty($_POST['c-68'])) {
    $specifics .= " - Beauty Salon,<br />";
}
if (isset($_POST['c-69']) && !empty($_POST['c-69'])) {
    $specifics .= " - Fitness Center,<br />";
}
if (isset($_POST['c-70']) && !empty($_POST['c-70'])) {
    $specifics .= " - Spa,<br />";
}

$cuisine = "<strong>Type of cuisine:</strong> <br />";
if (isset($_POST['c-71']) && !empty($_POST['c-71'])) {
    $cuisine .= " - International,<br />";
}
if (isset($_POST['c-72']) && !empty($_POST['c-72'])) {
    $cuisine .= " - Arabic,<br />";
}
if (isset($_POST['c-73']) && !empty($_POST['c-73'])) {
    $cuisine .= " - Italian,<br />";
}
if (isset($_POST['c-74']) && !empty($_POST['c-74'])) {
    $cuisine .= " - Asian,<br />";
}
if (isset($_POST['c-75']) && !empty($_POST['c-75'])) {
    $cuisine .= " - Sea food,<br />";
}
if (isset($_POST['c-76']) && !empty($_POST['c-76'])) {
    $cuisine .= " - Vegetarian,<br />";
}
if (isset($_POST['c-77']) && !empty($_POST['c-77'])) {
    $cuisine .= " - Mediterranean,<br />";
}
if (isset($_POST['c-78']) && !empty($_POST['c-78'])) {
    $cuisine .= " - American,<br />";
}

$restaurants = "<strong>Type of restaurants:</strong> <br />";
if (isset($_POST['c-79']) && !empty($_POST['c-79'])) {
    $restaurants .= " - Fine Dining,<br />";
}
if (isset($_POST['c-80']) && !empty($_POST['c-80'])) {
    $restaurants .= " - Casual Dining,<br />";
}
if (isset($_POST['c-81']) && !empty($_POST['c-81'])) {
    $restaurants .= " - Cafe,<br />";
}
if (isset($_POST['c-82']) && !empty($_POST['c-82'])) {
    $restaurants .= " - Buffet,<br />";
}
if (isset($_POST['c-83']) && !empty($_POST['c-83'])) {
    $restaurants .= " - Fast Food,<br />";
}
if (isset($_POST['c-84']) && !empty($_POST['c-84'])) {
    $restaurants .= " - Steak House,<br />";
}

$diet = "<strong>Specific diet:</strong> <br />";
if (isset($_POST['c-85']) && !empty($_POST['c-85'])) {
    $diet .= " - Halal,<br />";
}
if (isset($_POST['c-86']) && !empty($_POST['c-86'])) {
    $diet .= " - Gluten Free,<br />";
}
if (isset($_POST['c-87']) && !empty($_POST['c-87'])) {
    $diet .= " - Lactose free,<br />";
}
if (isset($_POST['c-88']) && !empty($_POST['c-88'])) {
    $diet .= " - Nut-free,<br />";
}


if (isset($_POST['budget']) && !empty($_POST['budget'])) {
    $budget = "<strong>Budget for this vacation:</strong> " . $_POST['budget'];
}
if (isset($_POST['range-1']) && !empty($_POST['range-1'])) {
    $accomodation = "<br /><strong>Accomodation:</strong> " . $_POST['range-1'];
}
if (isset($_POST['range-2']) && !empty($_POST['range-2'])) {
    $travel = "<br /><strong>Travel:</strong> " . $_POST['range-2'];
}
if (isset($_POST['range-3']) && !empty($_POST['range-3'])) {
    $dining = "<br /><strong>Dining: </strong>" . $_POST['range-3'];
}
if (isset($_POST['range-4']) && !empty($_POST['range-4'])) {
    $sights = "<br /><strong>Sights at destination:</strong> " . $_POST['range-4'];
}
if (isset($_POST['range-5']) && !empty($_POST['range-5'])) {
    $events = "<br /><strong>Events and programs:</strong> " . $_POST['range-5'];
}
if (isset($_POST['toggle-s14']) && !empty($_POST['toggle-s14'])) {
    $disability = "<br /><strong>Kind of disability:</strong> Yes";
}
if (isset($_POST['toggle-s15']) && !empty($_POST['toggle-s15'])) {
    $females = "<br /><strong>Applicable for females:</strong> Yes";
}
if (isset($_POST['toggle-s16']) && !empty($_POST['toggle-s16'])) {
    $pets = "<br /><strong>With pets:</strong> Yes";
}
if (isset($_POST['toggle-s17']) && !empty($_POST['toggle-s17'])) {
    $b_day = "<br /><strong>Birthday during your vacation:</strong> Yes";
}
if (isset($_POST['additional-comment']) && !empty($_POST['additional-comment'])) {
    $additional = "<br /><strong>Anything else:</strong> Yes<br />";
}
if (isset($_POST['call-me']) && !empty($_POST['call-me'])) {
    $type = $_POST['call-me'];
}
if (isset($_POST['first-name']) && !empty($_POST['first-name'])) {
    $f_name = $_POST['first-name'];
}
if (isset($_POST['last-name']) && !empty($_POST['last-name'])) {
    $l_name = $_POST['last-name'];
}

$name = "$type. $f_name $l_name";

$email_content .= "
        <strong>Name:</strong> $name<br />
        $celebrate
        $beach
        $sports_and_games
        $enjoing_nature
        $cultural_events
        $other_attractions
        $transportation_type
        $stay
        $ratings
        $specifics
        $cuisine
        $restaurants
        $diet
        $budget
        $accomodation
        $dining
        $sights
        $events
        $disability
        $females
        $pets
        $b_day
        $additional
        $time
    ";