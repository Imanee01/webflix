<?php

namespace App\Http\Controllers;



class AboutController 
{

   public function about()
   {
    return view('apropos',[
        'name' => 'A propos',
        'team'=>['marina','fiorella','alex'],
    ]); 
   }


   public function aboutSomeone($user)
   {
    return view('about-show',[
        'user' => $user,
        
    ]);
   }
   
}
