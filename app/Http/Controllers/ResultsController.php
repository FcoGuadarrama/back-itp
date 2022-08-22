<?php

namespace App\Http\Controllers;

use App\Models\Aspirante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ResultsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function __invoke(Request $request)
    {

        $arrayDeRegreso = [];
        if (count($request->data)) {
            $count = array_count_values($request->data);
            arsort($count);

            $arrayDeCossas = [
                1 => 'arte y creatividad',
                2 => 'ciencias sociales',
                3 => 'economica administrativa y financiera',
                4 => 'ciencia y tecnologia',
                5 => 'Ciencias ecologicas, biologicas y de salud'
            ];

            Aspirante::create([
                'name' => $request->person['name'] . " " . $request->person['lastname'],
                'email' => $request->person['email'],
                'results' => json_encode($count)
            ]);

            $arrayDeRegreso = [
                'count' => $count,
                'result' => $arrayDeCossas[array_key_first($count)]
            ];
        }

        return $arrayDeRegreso;

    }
}
