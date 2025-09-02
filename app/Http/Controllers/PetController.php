<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    // Landing page
    public function index()
    {
        return view('landing');
    }

    public function show($pets)
    {
        $pet=null;
        if ($pets == 'dogs') {
            $pet = [
                'heading' => 'You chose dogs!',
                'tagline' => "Here's a picture of a cute puppy!",
                'image' => 'https://as2.ftcdn.net/v2/jpg/03/12/93/33/1000_F_312933371_vMqXBtR0s84b7WHGbUWpgIzVmhrgp8za.jpg',
                'alt'   => 'Dog Picture',
            ];
        }
        if ($pets == 'cats') {
            $pet = [
                'heading' => 'You chose cats!',
                'tagline' => "Here's a picture of a cool kitty!",
                'image' => 'https://as2.ftcdn.net/v2/jpg/03/48/53/09/1000_F_348530913_oyDmqo8YVn6AF7bTLOgOdhTS5QKJreiW.jpg',
                'alt'   => 'Cat Picture',
            ];
        }
        if ($pet === null) {
            abort(404);
        }

        return view('pet',['pet' => $pet]);

    }
}