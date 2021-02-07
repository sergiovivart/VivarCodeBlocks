<?php  

// gets data from api 
function getCurl( $url )
{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($curl); // execute
    if(curl_error($curl) ) // check for error
    {
        return false; // return false if error
    } else {
        return json_decode($res); // return json decoded
    }
curl_close($curl);
}

// test function
$buffer = getCurl('https://reqres.in/api/users?page=2');
print_r($buffer);