<?php







if($msg == "/start")
{
$getid = file_get_contents("DATA/british/british $userID"); 
if($getid == "") 
{
mkdir("DATA"); 
mkdir("DATA/british"); 
file_put_contents("DATA/british/british $userID", "british"); 
$zuccheroconpanna[] = array(
array(
"text" => "Canale British!",
"url" => "https://t.me/BRRITISH"),
);
sm($chatID, "ORA SEI BRRITISHHHHHHHHHH🇬🇧🇬🇧🇬🇧", $zuccheroconpanna, 'Markdown', false, false, true);


$menu[] = array(
array(
"text" => "Diventa British!",
"url" => "t.me/BrritishBot"),
);
sm("-1001264887149", "$nome è un britishhhhh🇬🇧🇬🇧🇬🇧", $menu, 'Markdown', false, false, true);
sm("-1001357944415", "$nome è un britishhhhh🇬🇧🇬🇧🇬🇧", $menu, 'Markdown', false, false, true);
exit; 
}
if($getid == "british") 
{
$menu[] = array(
array(
"text" => "Canale British!",
"url" => "https://t.me/BRRITISH"),
);
sm($chatID, "Sei gia british 🇬🇧🇬🇧🇬🇧", $menu, 'Markdown', false, false, true);
}
}



