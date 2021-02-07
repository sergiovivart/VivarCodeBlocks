<?php 
   // this function post data to api
   function postCurl( $url,  $data)
   {
   $curl = curl_init();  // init
   curl_setopt($curl, CURLOPT_URL, $url); // config
   curl_setopt($curl, CURLOPT_POST, true); // POST request
   curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // the data we wil posting
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );  
   $res = curl_exec( $curl );
   if( $e = curl_error($curl))
   {
      return false;  // return if error
   } else {
     return json_decode($res); // return decode json response
   }
   curl_close($curl);  // close
  }

   // data to post
   $data = array(
       'name' => 'sergio',
       'job'  => 'web developer'
   );

   // test the function
   $buffer =  postCurl('https://reqres.in/api/users',  $data);
   print_r($buffer);
