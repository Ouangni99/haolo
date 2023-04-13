<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
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
            'Trouvez un hotel','Réservez des hotels à vos convenances.'
        ];

        return view('hotel.hotel',[
            'bread_acti'    => $bread_acti,
            'title'    => $title
        ]);
    }

     /*
     * Function to display hotel details view
     */
    public function hotel_details()
    {
        $bread_acti = [
            'home'  => [
                'value' => "Accueil",
                'link'  => 'main',
            ],
            'hotel'  => [
                'value' => "Hotels",
                'link'  => 'hotel',
            ],
            'details'  => [
                'value' => "Détails",
                'link'  => "javascrit:;",
            ],
        ];

        $title = [
            'Universal luxury Grand Hotel',
        ];

        return view('hotel.hotel_details',[
            'bread_acti'    => $bread_acti,
            'title'    => $title
        ]);
    }

}
