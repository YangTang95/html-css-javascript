<?php
//access tokens
/*
$consumer_key = 'zsRBF05abwyzgUOCDG06Z8tCW';
$consumer_secret = 'iD9NpPeviiBcp90bUlYNob04AFMQssKLVfk69uqxZ6Of0WrTMy';
$access_token = '2357390754-QMluI5RNpRDgKUr4jrTlNpC3ZAqRHyKEzD6fqY6';
$access_token_secret = 'zfUFuiuisLVKzhKymYBkguubGXSKeNeoLE9J2Jza8Plh7';
*/


include("../View/header.html");
echo "<link rel='stylesheet' href='..View/Main.css'>";

/*
//TwitterOAuth info
require ("../Model/twitteroauth-master/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth; 

//Connect to Twitter API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

//Get tweets
$TweetType1 = $connection->get("search/tweets", [  "q" => "Dog",
  "count" => 10,
  "lang" => "en"]);
*/

//$TweetDecode1 = json_decode($TweetType1, true);

//***Allows you to see the json
//print_r($TweetType1);

?>
<div id='search'>
  <form action="../Model/GetTweets.php" method="post">
      <h3>Search for a phrase to see the most recent tweets from <br/> phrase, username, and follower count of user: </h3>
      </br><input type="text" name="phrase"><br></br>
      <input type="submit">
  </form>
</div>
<?php

//$TweetDecode1 = json_decode($TweetType1, true);
/*
echo "<table border='1'><tr>";
echo "<th>User Name</th>";
echo "<th>Tweet</th>";
echo "<th>Follower Count</th></tr>";
foreach ($TweetType1->statuses as $result)
{
  echo "<tr><td>" . $result->user->screen_name . "</td>";
  echo "<td>" . $result->text . "</td>"; 
  echo "<td>" . $result->user->followers_count . "</td>";
}
echo "</table>";
*/
require("../model/database.php");
include("../View/footer.html");
//include("../view/testList.php");
?>

