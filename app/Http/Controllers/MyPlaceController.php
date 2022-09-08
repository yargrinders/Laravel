<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index () {
        return '<a href="https://www.youtube.com/watch?v=_ucEVqSDXBg&list=PLd2_Os8Cj3t8pnG4ubQemoqnTwf0VFEtU&index=7" target="_blank">Ссылка на урок</a>';
    }
}
