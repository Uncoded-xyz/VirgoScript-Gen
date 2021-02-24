<?php
/////////////////
///   ///   /////
////   /   //////
/////     ///////
//////   ////////
/////////////////
/// Virgo PHP ///
/////////////////
// FoxWorn3365 //
/////////////////
// Program the //
// VirgoScript //
// With PHP    //
// Function    //
/////////////////

function space() {
      echo "<br><br><br>";
}

function kamikaze($nome, $descrizione, $messaggio, $permissions, $risposta, $errore) {
       $stringa = '
                &#123;?
                    "name": "' .$nome. '",?
                    "description": "' .$descrizione. '",?
                    "answer": "' .$messaggio. '",?
                    "script": ["purge = {args}", "kamikaze = ' .$risposta. ' | 5000"],?
                    "error": "' .$errore. '",?
                    "permissions_level": ' .$permissions. ',?
                &#125;
       ';


$stringa=str_replace(" ", "&nbsp;", $stringa);
$stringa=str_replace("?", "<br>", $stringa);


echo $stringa;
}

function embed($nome, $descrizione, $dice, $colore, $permissions, $error) {
       $stringaa = '
                &#123;?
                        "name": "' .$nome. '",?
                        "description": "' .$descrizione. '",?
                        "answer": "",?
                        "script": [?
                        "del",?
                        "embed = {username} ' .$dice. '  | {args} | ' .$colore. '"?
                         ],?
                        "error": "' .$error. '",?
                        "permissions_level": ' .$permissions. ',?
                &#125;
        ';

$stringaa=str_replace(" ", "&nbsp;", $stringaa);
$stringaa=str_replace("?", "<br>", $stringaa);

echo $stringaa;
}

function command($nome, $descrizione, $risposta, $permissions, $error) {
       $strina = '
                &#123;?
                        "name": "' .$nome. '",?
                        "description": "' .$descrizione. '",?
                        "answer": "' .$risposta. '",?
                        "error": "' .$error. '",?
                        "permissions_level": ' .$permissions. ',?
                &#125;
        ';

$strina=str_replace(" ", "&nbsp;", $strina);
$strina=str_replace("?", "<br>", $strina);

echo $strina;
}

function image($command, $descrizione, $imageURL, $permissions, $error) {
       $stringaaa = '
                &#123;?
                        "name": "' .$nome. '",?
                        "description": "' .$descrizione. '",?
                        "answer": "",?
                        "script": [?
                        "img = ' .$imageURL. '",?
                        ],?
                        "error": "' .$error. '",?
                        "permissions_level": ' .$permissions. ',?
                &#125;
        ';

$stringaaa=str_replace(" ", "&nbsp;", $stringaaa);
$stringaaa=str_replace("?", "<br>", $stringaaa);

echo $stringaaa;
}
?>
