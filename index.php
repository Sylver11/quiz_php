<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Try the best quiz ever</title>
</head>
<body>




   <div id="content"> 
<H1>Welcome to the best quiz ever!</H1>
<?php 
$correct = 0;
if(!empty($_POST)){

if($correct =="20"){
    echo "Crazy you are a genuis! <style='background-color:red;'>";
    echo "You got ". $correct . " out of " . count($questions[0]);
}
elseif($correct >="16" && $correct <"20"){
    echo "Well done my friend!!";
}
elseif($correct <= "15" && $correct >="10"){
    echo "Not too bad amigo";
}
else{
    echo "<p class='tags'> OMG did you even go to school?</p> <body style='background-color:red;'>";
    echo "You got ". $correct . " out of " . count($questions);
}};
?>
<form action="index.php" method="post">     
<?php $questions = array(
    
    array("How long was the second world war?","Which country was first to enter Berlin in combat?","When did the WW2 start?","What year during the Nazi-Regime did Germany host the Olympics?","Approximately, how many Jews lost their lives in concentration camps during the Nazi-regime","Who of the following persons was the chief of propanda and the right hand of Adolf Hitler?","Of all countries particpating in the WW2 which of the following countries experienced the heighest amount of causulties in absolute numbers?","After the siege of Germany Berlin was divided into sectors each assigned to one ally. How many sectors were there?","Which country was first attacked by German forces in the beginning of WW2?","Who was the leader of Japan during WW2?","How did Adolf Hitler die?","What day was D-day?","Which area in France was first sieged by the United States forces?","Which country helped Germany invade Poland?","Who was the president at the start of WWII?","Which event led the U.S. to enter WWII?","Who was the leader of the Soviet Union during WW2?","Which of the following countries remained neutral during the war?","What did the United States do to some Japanese-American citizens during the war?","What were Japanese suicide bombers called?"
    ),
    array("questionA","questionB","questionC","questionD","questionE","questionF","questionG","questionH","questionI","questionJ","questionK","questionL","questionM","questionN","questionO","questionP","questionQ","questionR","questionS","questionT"),
    array(      
                array("3 years", "5 years", "6 years", "7 years"),
                array("France", "United States", "Russia", "England"),
                array("1914", "1945", "1939", "1960"),
                array("1933", "1936", "1929", "1950"),
                array("50000", "800000", "1000000", "6000000"),
                array("Joseph Goebbels", "Hermann Goering", "Friedrich Himmler", "Erwin Rommel"),
                array("Germany", "Italy", "Russia", "United States"),
                array("2", "3", "4", "6"),
                array("Netherlands", "France", "England", "Poland"),
                array("Mao Zedong", "Emperor Meiji", "Emperor Hirohito", "Shinzo Abe"),
                array("Commit sucide", "Killed in combat", "Heart attack", "Natural death"),
                array("8 August 1944", "6 June 1944", "6 August 1944", "8 Mai 1943"),
                array("La Cote D'Azur", "Normandy", "Languedoc", "Riviera"),
                array("Romania", "Soviet Union", "Ukraine", "Netherlands"),
                array("Harry Truman", "Dwight Eisenhower", "Barack Obama", "Franklin Roosevelt"),
                array("Sinking of the Lusitania", "Attack on Pearl Habour", "Bombing of London",
              "German concentration camps"),
                array("Joseph Stalin", "Karl Marx", "Vladimir Lenin", "Vladimir Putin"),
                array("Netherlands", "Spain", "France", "Italy"),
                array("Exil them to Hawaii", "Sent them to internment camps",
              "Forced them to register as terrists", "Killed them"),
                array("Kaiten", "Bushido", "Kamikaze", "Nain"),
));


 
for($x=0; $x <= 19; ++$x){
    echo "<br><br>";
    print_r($questions[0][$x]);

    echo "\n <br>";
    for($y=0 ; $y <= 3; ++$y){
       echo "<input type=\"radio\" name=\"". $questions[1][$x] . "\" value=\"" .$questions[2][$x][$y]."\"
       
       >
       \"".$questions[2][$x][$y]."\"" ;}};
       echo "<br><br>";
?>

<input id="mybutton" type="submit" value="Submit">

<?php



$correct = 0;
$solutions = array("questionA"=>"6 years","questionB" => "Russia","questionC" =>"1939", "questionD" => "1936","questionE"=>"6000000", "questionF"=> "Joseph Goebbels", "questionG" => "Russia", "questionH"=>"4","questionI"=>"Poland","questionJ"=>"Emperor Hirohito", "questionK"=>"Commit sucide","questionL"=>"6 June 1944","questionM"=>"Normandy","questionN"=>"Soviet Union", "questionO"=>"Dwight Eisenhower","questionP"=>"Attack on Pearl Habour","questionQ"=>"Joseph Stalin","questionR"=>"Spain","questionS"=>"Sent them to internment camps","questionT"=>"Kamikaze");



if(!empty($_POST)){
    foreach($_POST as $item => $checking){
        switch($checking){
            case $solutions[$item]:$correct++;
        }}}



// if(!empty($_POST)){

// if($correct =="20"){
//     echo "Crazy you are a genuis! <style='background-color:red;'>";
// }
// elseif($correct >="16" && $correct <"20"){
//     echo "Well done my friend!!";
// }
// elseif($correct <= "15" && $correct >="10"){
//     echo "Not too bad amigo";
// }
// else{
//     echo "<p class='tags'> OMG did you even go to school?</p> <body style='background-color:red;'>";
// }};

?>


</div>

</body>
</html>