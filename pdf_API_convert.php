<?php
  
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pdfshift.io/v2/convert/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode(array("source" => "https://quizlet.com/343020062/relational-database-flash-cards/", "landscape" => false, "use_print" => true)),
    CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
    CURLOPT_USERPWD => 'dbd5782a10df46ed93d82e933830f71e'
));

$response = curl_exec($curl);
file_put_contents('database6.pdf', $response);


// $zip = zip_open("pscsc180082.zip");

// if ($zip) {
//   while ($zip_entry = zip_read($zip)) {
//     echo "<p>Name: " . zip_entry_name($zip_entry) . "<br>";

//     if (zip_entry_name($zip_entry) == 'pscsc180082/main.cpp') {
//             // Open directory entry for reading
//     if (zip_entry_open($zip, $zip_entry)) {
//         echo "File Contents:<br>";
//         // Read open directory entry
//          $contents = zip_entry_read($zip_entry);
//         echo "$contents<br>";
//         zip_entry_close($zip_entry);
//       }
//     }
  
//   echo "</p>";
//   }
// zip_close($zip);
// }
// 

?> 