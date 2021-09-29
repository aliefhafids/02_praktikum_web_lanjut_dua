<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function article(Request $id){
    return 'halaman artikel dengan id '.$id->id;
  }
}
