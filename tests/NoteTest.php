<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NoteTest extends TestCase
{

  public function test_notes_list()
  {
    //1.- having "las base de las pruebas, las condiciones"
    Note::create(['note'=>'My first note']);
    Note::create(['note'=>'My Second note']);

    // 2.- when "definimos las acciones del usuarios"
    $this->visit('notes')
    //3.- then "donde agregamos las comprobaciones"
        ->see('My first note')
        ->see('My second note');


  }
}
