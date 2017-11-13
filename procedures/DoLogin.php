<?php

require __DIR__. '/../inc/bootstrap.php';


$user= findUserByStaffID(request()->get('StaffID'));


if(empty($user)){	
	$session->getFlashBag()->add('error','Username was not found');
     redirect('login.php');
     exit;
}


if(!password_verify(request()->get('password'),$user['passwords'])) {	
     $session->getFlashBag()->add('error','Invalid Password');   
     redirect('login.php');
     exit;
}



$expTime = time() + 9600;
 
$jwt =\Firebase\JWT\JWT::encode([
   'iss'=>request()->getBaseUrl(),
   'sub'=>"{$user['id']}",
   'exp'=>$expTime,
   'iat'=>time(),
   'nbf'=>time(),
   'is_admin'=>$user['role_ID']== 1
],getenv("SECRET_KEY"),'HS256'); 


$accessToken = new \Symfony\Component\HttpFoundation\Cookie('access_token',$jwt,$expTime,'/', getenv('COOKIE_DOMAIN'));


  $session->getFlashBag()->add('success', 'Successfully Logged In');
redirect('index.php',['cookies'=>[$accessToken]]); 
 