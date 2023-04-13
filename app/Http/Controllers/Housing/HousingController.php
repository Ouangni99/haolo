<?php

namespace App\Http\Controllers\Housing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HousingController extends Controller
{
     /*
     * Function to display housing view
     */
    public function index()
    {
        $bread_acti = [
            'home'  => [
                'value' => "Accueil",
                'link'  => 'main',
            ],
            'housing'  => [
                'value' => "Logements",
                'link'  => "javascrit:;",
            ],
        ];
        $title = [
            'Trouvez un logement','Louer un logement à vos convenances.'
        ];

        return view('housing.housing',[
            'bread_acti'    => $bread_acti,
            'title'         => $title
        ]);
    }

     /*
     * Function to display housing details view
     */
    public function housing_details()
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
            'Universal luxury Grand Housing',
        ];

        return view('housing .housing _details',[
            'bread_acti'    => $bread_acti,
            'title'    => $title
        ]);
    }
}
