<?php 

 
function  curlPut( $url, $data, $header)
{

   $curl = curl_init();  // init
   // configuration
   curl_setopt($curl, CURLOPT_URL, $url); 
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT'); // the custom request 
   curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // data to post
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );  
   curl_setopt($curl, CURLOPT_HTTPHEADER, $header); // et headersa
   $res = curl_exec( $curl ); // execute
   if( $e = curl_error($curl))
   {
       return false;
   } else {
     return json_decode($res);
   }
   curl_close($curl); // cerramos la conexion
}

// array de data
$data = array(
    'name' => 'sergio',
    'job'  => 'web developer'
);

// teh header array
$header = array(
    'Authorization : wedfwsdfeggfgs',
    'key : 1233445566');

$buffer = curlPut('https://reqres.in/api/users/2', $data, $header); /// call the function
print_r($buffer); // test