<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){

        return view('homePage');
    }

    public function actors(){

        $actors = [

      ['id'=>'1', 'name'=>'Tom', 'age'=> '61', 'bio'=> 'Tom ha', 'pic'=> '/media/tom_1.jpg' ],
      ['id'=>'2','name'=>'Ana', 'age'=> '35', 'bio'=> 'Ana ha', 'pic'=> '/media/ana_1.jpg' ],
      ['id'=>'3','name'=>'Nicole', 'age'=> '56', 'bio'=> 'Nicole ha', 'pic'=> '/media/nicol_1.jpg' ],
      ['id'=>'4','name'=>'Edward', 'age'=> '54', 'bio'=> 'Edward ha', 'pic'=> '/media/edward_1.jpg' ],


        ];



        return view('actors',['attori'=> $actors]);
    }

    public function films(){

        return view('films');
    }
    
    public function actorFilmography($id){

        $actors = [

            ['id'=>'1', 'name'=>'Tom', 'age'=> '61', 'bio'=> 'Tom ha', 'pic'=> '/media/tom_1.jpg' ],
            ['id'=>'2','name'=>'Ana', 'age'=> '35', 'bio'=> 'Ana ha', 'pic'=> '/media/ana_1.jpg' ],
            ['id'=>'3','name'=>'Nicole', 'age'=> '56', 'bio'=> 'Nicole ha', 'pic'=> '/media/nicol_1.jpg' ],
            ['id'=>'4','name'=>'Edward', 'age'=> '54', 'bio'=> 'Edward ha', 'pic'=> '/media/edward_1.jpg' ],
      
      
              ];

              foreach ($actors as $actor) {
             
                if(($id) == $actor['id']){

              return view('actorFilmography',['attore'=> $actor]);
             
            }
        }
          
        
    }

}
