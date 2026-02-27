<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddEntryController extends Controller {

    public function addEntry() {
        return view('add-entry');
    }
}
