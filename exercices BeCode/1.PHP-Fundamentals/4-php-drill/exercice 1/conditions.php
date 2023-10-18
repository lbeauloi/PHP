
<!--Series of exercises on PHP conditional structures-->


<!-- 1.1 Clean your room Exercise  -->
<?php
// $room_is_filthy = true;

// if( $room_is_filthy == true ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
//     echo "<br>**clean his room**";
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy == false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }
?>

<!-- 1.2. Improve it
Let's now make our script a little smarter by allowing more than 2 possible values. The room could be either "health hazard", "filthy", "dirty", "clean", "immaculate" in that order. Store them in an array $possible_states. -->

<!-- 1.2 Clean your room Exercise, improved -->

<?php
// Create the array of possible states
$possible_states = array (0=> "health hazard", 1=> "filthy", 2=> "dirty",3=> "clean", 4=>"immaculate");

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[1]; 

if( $room_filthiness == $possible_states[0]){
	echo "Yuk, Room is a health hazard! Let's clean it up !";
} else if($room_filthiness == $possible_states[1]){
	echo "Yuk, Room is filthy : let's clean it up !";
} else if ($room_filthiness == $possible_states[2]) {
    echo "Yuk, Room is dirty : let's clean it up;";
} else if ($room_filthiness == $possible_states[3]){
    echo "Room is clean, great !";
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>

