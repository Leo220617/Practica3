<?php
  // file: controllers/ProfessorController.php

  require_once('book.php');

  class BookController extends Controller {

    public function index() {  
      return view('book/index',
       ['books'=>book::all(),
        'title'=>'Book List']);
    }

    public function show($id) {
      $book = book::find($id);
      return view('book/show',
        ['book'=>$book,
         'title'=>'Book Detail']);
    }
    public function create() {
      return view('book/create',
        ['title'=>'Book Create']);
    }  
    
    public function store() {
      $title = Input::get('title');
      $edition = Input::get('edition');
      $copyright = Input::get('copyright');
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author = Input::get('author');
      $author_id = Input::get('author_id');
      $publisher = Input::get('publisher');
      $publisher_id = Input::get('publisher_id');
      $item = ['title'=>$title,'edition'=>$edition,
      'copyright'=>$copyright,'language'=>$language
      ,'pages'=>$pages,'author'=>$author
      ,'author_id'=>$author_id,'publisher'=>$publisher
      ,'publisher_id'=>$publisher_id];
      Book::create($item);
      return redirect('/book');
    }  
    
    public function edit($id) {  
      $bk = Book::find($id);
      return view('book/edit',
       ['books'=>$bk,
       'title'=>'Book Edit']);
    }  
    
    public function update($id) {
      $title = Input::get('title');
      $edition = Input::get('edition');
      $copyright = Input::get('copyright');
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author = Input::get('author');
      $author_id = Input::get('author_id');
      $publisher = Input::get('publisher');
      $publisher_id = Input::get('publisher_id');
      $item = ['title'=>$title,'edition'=>$edition,
      'copyright'=>$copyright,'language'=>$language
      ,'pages'=>$pages,'author'=>$author
      ,'author_id'=>$author_id,'publisher'=>$publisher
      ,'publisher_id'=>$publisher_id];
      Book::update($id,$item);
      return redirect('/book');
    }
    
    public function destroy($id) {  
      Book::destroy($id);
      return redirect('/book');
    }
  }
?>