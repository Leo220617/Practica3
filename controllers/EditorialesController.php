<?php
  // file: controllers/ProfessorController.php

  require_once('editorial.php');

  class EditorialesController extends Controller {

    public function index() {  
      return view('editorial/index',
       ['editorial'=>editorial::all(),
        'title'=>'editorial List']);
    }

    public function show($id) {
      $editorial = editorial::find($id);
      return view('editorial/show',
        ['editorial'=>$editorial,
         'title'=>'editorial Detail']);
    }
    public function create() {
      return view('editorial/create',
        ['title'=>'editorial Create']);
    }  
    
    public function store() {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $books__book_id = Input::get('books__book_id');
      $books__title = Input::get('books__title');
     // $books__title_id = Input::get('books__title_id');
      $item = ['publisher'=>$publisher,'country'=>$country,
      'founded'=>$founded,'genere'=>$genere
      ,'books__book_id'=>$books__book_id,'books__title'=>$books__title
      ];
      editorial::create($item);
      return redirect('/editorial');
    }  
    
    public function edit($id) {  
      $bk = editorial::find($id);
      return view('editorial/edit',
       ['editorial'=>$bk,
       'title'=>'editorial Edit']);
    }  
    
    public function update($id) {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $books__book_id = Input::get('books__book_id');
      $books__title = Input::get('books__title');
     // $books__title_id = Input::get('books__title_id');
      $item = ['publisher'=>$publisher,'country'=>$country,
      'founded'=>$founded,'genere'=>$genere
      ,'books__book_id'=>$books__book_id,'books__title'=>$books__title
      ];

      editorial::update($id,$item);
      return redirect('/editorial');
    }
    
    public function destroy($id) {  
      editorial::destroy($id);
      return redirect('/editorial');
    }
  
  }
?>