<?php
//access tokens
$consumer_key = 'zsRBF05abwyzgUOCDG06Z8tCW';
$consumer_secret = 'iD9NpPeviiBcp90bUlYNob04AFMQssKLVfk69uqxZ6Of0WrTMy';
$access_token = '2357390754-QMluI5RNpRDgKUr4jrTlNpC3ZAqRHyKEzD6fqY6';
$access_token_secret = 'zfUFuiuisLVKzhKymYBkguubGXSKeNeoLE9J2Jza8Plh7';

//require("../model/database.php");
include("../View/header.html");

//TwitterOAuth info
require ("../Model/twitteroauth-master/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth; 

//Connect to Twitter API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$TweetType1 = $connection->get("search/tweets", [  "q" => $_POST["phrase"],
  "count" => 15,
  "lang" => "en"]);

echo "<h1>Results</h1>";

echo "<div id='container'>";
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
echo "</div>";

echo "<a href=../Controller/index.php>Return to search</a>";

json_encode($TweetType1)
?>
