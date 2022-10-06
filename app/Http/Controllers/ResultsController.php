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
                1 => 'Arte y Creatividad',
                2 => 'Ciencias Sociales',
                3 => 'Economica Administrativa y Financiera',
                4 => 'Ciencia y Tecnologia',
                5 => 'Ciencias ecologicas, biologicas y de salud'
            ];

            Aspirante::create([
                'name' => $request->person['name'] . " " . $request->person['lastname'],
                'email' => $request->person['email'],
                'option' => $request->person['option'],
                'interestedCareer' => $request->person['interestedCareer'],
                'originSchool' => $request->person['originSchool'],
                'age' => $request->person['age'],
                'area_id' => array_key_first($count),
                'results' => $arrayDeCossas[array_key_first($count)]
            ]);

            $arrayDeRegreso = [
                'count' => $count,
                'area_id' => array_key_first($count),
                'result' => $arrayDeCossas[array_key_first($count)]
            ];
        }

        return $arrayDeRegreso;

    }
}
