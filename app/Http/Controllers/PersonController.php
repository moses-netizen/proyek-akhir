<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Moses I.B";
    private $nrp = "200914024";
    public function index() {
        return view("person.index");
    }
    
        public function sendData() {
            $nrp = $this->nrp;
            $name = $this->name;
            
            return view("person.send-data", compact("nrp", "name"));
    }
        public function data() {
            $names = ["ana". "banu", "cecep", "dadang", "entis"];

            return view("person.data", ['names' => $names]);
        }

}
