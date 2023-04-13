<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
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
                'value' => "Evênement",
                'link'  => "javascrit:;",
            ],
        ];
        $title = [
            'Trouvez un logement',
        ];

        return view('event.event',[
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
