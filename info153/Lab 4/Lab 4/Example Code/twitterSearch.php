<?php
require "twitteroauth-0.6.1/twitteroauth-0.6.1/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//  require_once 'twitteroauth/src/twitteroauth.php';
 
define('CONSUMER_KEY', '10xJGdQlAjk5wMGfwfYdKCPOg');
define('CONSUMER_SECRET', 'K81mhQHWwBadWe8YANgOZgwzl8uUJ8ABUAOx8r7a6QPVVrM4kh');
define('ACCESS_TOKEN', '4229213235-qQe3UozUkCtMMx5GkUcS0yolAPAZnGcKYosfA7Q');
define('ACCESS_TOKEN_SECRET', 'NDbmThm9F2yRue90Iu24rTXtcZXSNUHQLzsvtBNHz0BF3');
 
// $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
function search(array $query)
{
  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
  return $connection->get('search/tweets', $query);
}
 
$query = array(
  "q" => "Data Science",
  "count" => 10,
  "lang" => "en"
);
  
$results = search($query);

//echo json_encode($results, JSON_PRETTY_PRINT);

echo "<table border='1'><tr>";
echo "<th>created at</th>";
echo "<th>user name</th>";
echo "<th>text</th></tr>";
foreach ($results->statuses as $result) {

  echo "<tr><td>" . $result->created_at . "</td>";
  echo "<td>" . $result->user->screen_name . "</td>"; 
  echo "<td>" . $result->text . "</td>";
}
echo "</table>";

