<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function number() {

      $type = 'Numeri da 0 a 9';
      $color = 'orange';
      $contentArr = [];

      for ($i=0; $i<10; $i++) {
        $contentArr[] = $i;
      }
      return view('number', compact('type', 'color', 'contentArr'));
    }

    public function letters() {
      $type = "Lettere dell'alfabeto";
      $color = 'red';

      $contentArr = range('a', 'z');

      // foreach (range('a', 'z') as $lettera) {
      //   $contentArr[] = $lettera;
      // }

      return view('letters', compact('type', 'color', 'contentArr'));
    }


}
