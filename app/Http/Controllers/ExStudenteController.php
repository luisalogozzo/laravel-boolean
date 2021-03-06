<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExStudenteController extends Controller
{
  public function Show()
  {
   $data = [
     [
        'foto' => 'https://www.boolean.careers/images/students/biagini.png',
        'nome' => 'Alessandro Biagini',
        'eta' => 25,
        'azienda' => 'DISC SPA',
        'ruolo' => 'web developer',
        'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
      ],
      [
        'foto' => 'https://www.boolean.careers/images/students/poggini.png',
        'nome' => 'Paola Poggini',
        'eta' => 24,
        'azienda' => 'Prima Assicurazioni',
        'ruolo' => 'web developer',
        'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.'
      ],
      [
        'foto' => 'https://www.boolean.careers/images/students/masetti.png',
        'nome' => 'Loana Masetti',
        'eta' => 36,
        'azienda' => 'The Zen Agency',
        'ruolo' => 'junior software engineer',
        'descrizione' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.'
      ]
   ];

      return view('exStudenti', compact('data'));
    // $this->students = config('studenti.studenti');
    // compact($this->students);
  }


  public function ShowDetail()
  {
    // code...
  }
}
