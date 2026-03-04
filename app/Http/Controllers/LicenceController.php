<?php

namespace App\Http\Controllers;

use App\LicenceModel;
use Illuminate\Http\Request;

class LicenceController extends Controller
{
    public function licence()
    {
      $title = 'Licence';
      $licences = LicenceModel::all();

      return view('licence', [
        'title' => $title,
        'licences' => $licences,
      ]);
    }
}
