<?php

namespace App\Http\Controllers\Residence;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    /*
     * Function to display hotel view
     */
    public function index()
    {
        $bread_acti = [
            'home'  => [
                'value' => "Accueil",
                'link'  => 'main',
            ],
            'hotel'  => [
                'value' => "Hotels",
                'link'  => "javascrit:;",
            ],
        ];
        $title = [
            'Trouvez une résidence','Réservez des résidence à vos convenances.'
        ];

        return view('residence.residence',[
            'bread_acti'    => $bread_acti,
            'title'    => $title
        ]);
    }

     /*
     * Function to display residence details view
     */
    public function residence_details()
    {
        $bread_acti = [
            'home'  => [
                'value' => "Accueil",
                'link'  => 'main',
            ],
            'residence'  => [
                'value' => "Résidences",
                'link'  => 'residence',
            ],
            'details'  => [
                'value' => "Détails",
                'link'  => "javascrit:;",
            ],
        ];

        $title = [
            'Universal luxury Grand Residence',
        ];

        return view('residence.residence_details',[
            'bread_acti'    => $bread_acti,
            'title'    => $title
        ]);
    }
}
