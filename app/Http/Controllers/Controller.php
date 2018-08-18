<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function coco()
     {
        
         $array_colors = array(
             array(
                 'id'=>'0',
                 'name'=>'blue'
             ),
             array(
                 'id'=>'00',
                 'name'=>'red'
             ),
             array(
                 'id'=>'000',
                 'name'=>'yellow'
             ),
             array(
                 'id'=>'0000',
                 'name'=>'green'
             )
         );
      
        $array_colors = json_encode($array_colors);
        return view('test',compact(['array_colors']));

     }
     /*With Ajax */
    public function colors()
     {
        
         $array_colors = array(
             array(
                 'id'=>'0',
                 'name'=>'blue'
             ),
             array(
                 'id'=>'00',
                 'name'=>'red'
             ),
             array(
                 'id'=>'000',
                 'name'=>'yellow'
             ),
             array(
                 'id'=>'0000',
                 'name'=>'green'
             )
         );
      
        return json_encode($array_colors);
     }
}

