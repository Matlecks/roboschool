<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class Index_2Controller extends Controller
{
    public function index()
    {
        $services = Service::all();

        foreach ($services as $key => $service) {

            $previous_id = ($key > 0) ? $services[$key - 1]->id : $services[count($services) - 1]->id;
            $current_id = $service->id;
            $next_id = ($key < count($services) - 1) ? $services[$key + 1]->id : $services[0]->id;

            $previous_slide = Service::find($previous_id);
            $current_slide = Service::find($current_id);
            $next_slide = Service::find($next_id);

            $services_slides[] = [
                'previous_slide' => $previous_slide,
                'current_slide' => $current_slide,
                'next_slide' => $next_slide
            ];
        }
        return view('index_v2', compact('services_slides'));
    }
}
