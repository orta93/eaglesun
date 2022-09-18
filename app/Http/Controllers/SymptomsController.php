<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomsController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::orderBy('name')->get();

        return view('symptoms', ['symptoms' => $symptoms, 'letter' => null]);
    }

    public function store(Request $request)
    {
        $body = str_replace("\r\n", "<br>", $request->get('body'));
        $body = str_replace("<br><br><br>", "<br><br>", $body);
        $body = str_replace("<br><br>", "<br>", $body);
        $body = str_replace("https://neurocenter.mx", "", $body);
        $body = str_replace("/?utm_source=interlink&amp;utm_medium=link-organico", "", $body);

        $diseases = $request->get('diseases');
        $diseases = collect(explode("\r\n", $diseases))->map(function ($disease) {
            return ucfirst($disease);
        })->toArray();

        $name = $request->get('name');
        $slug = str_replace(' ', '-', strtolower($this->removeAccents($name)));
        $name = ucfirst($name);

        $request['diseases'] = $diseases;

        // dump($slug);
        // dump($name);
        // dump($body);
        // dd($diseases);

        Symptom::firstOrCreate(['slug' => $slug], [
            'name' => $name,
            'body' => $body,
            'diseases' => $diseases
        ]);

        return redirect()->to('/sintomas/create');
    }

    private function replaceText($string)
    {
        $string = str_replace('Invitae', env('APP_NAME'), $string);
        $string = str_replace('invitae', env('APP_NAME'), $string);

        return $string;
    }

    private function removeAccents($str)
    {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }
}
