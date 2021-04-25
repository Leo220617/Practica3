<?php
  // file: controllers/ProfessorController.php

  require_once('autores.php');

  class AutoresController extends Controller {

    public function index() {  
      return view('autor/index',
        ['autores'=>autores::all(),
        'title'=>'autors list']);
    }
   
    public function show($id) {
     $bk = autores::find($id);
     return view('autor/show',
       ['autores'=>$bk,
       'title'=>'autor Details']);
   }
   public function create() {
     return view('autor/create',
       ['title'=>'autor Create']);
   }  
   
   public function store() {
     $author = Input::get('author');
     $nationality = Input::get('nationality');
     $birth_year = Input::get('birth_year');
     $fields = Input::get('fields');
     $books__book_id = Input::get('books__book_id');
     $books__title = Input::get('books__title');
    // $books__title_id = Input::get('books__title_id');
     $item = ['author'=>$author,'nationality'=>$nationality,
     'birth_year'=>$birth_year,'fields'=>$fields
     ,'books__book_id'=>$books__book_id,'books__title'=>$books__title
     ];
     autores::create($item);
     return redirect('/author');
   }  
   
   public function edit($id) {  
     $bk = autores::find($id);
     return view('autor/edit',
      ['autores'=>$bk,
      'title'=>'autor Edit']);
   }  
   
   public function update($id) {
    $author = Input::get('author');
    $nationality = Input::get('nationality');
    $birth_year = Input::get('birth_year');
    $fields = Input::get('fields');
    $books__book_id = Input::get('books__book_id');
    $books__title = Input::get('books__title');
   // $books__title_id = Input::get('books__title_id');
    $item = ['author'=>$author,'nationality'=>$nationality,
    'birth_year'=>$birth_year,'fields'=>$fields
    ,'books__book_id'=>$books__book_id,'books__title'=>$books__title
    ];
     autores::update($id,$item);
     return redirect('/author');
   }
   
   public function destroy($id) {  
    autores::destroy($id);
    return redirect('/author');
  }
  }
?>