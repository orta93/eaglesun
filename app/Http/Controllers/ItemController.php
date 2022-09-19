<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($item_slug)
    {
        if ($item = Item::with('category')->where('slug', $item_slug)->first()) {
            return view('item-detail', ['item' => $item]);
        }

        return redirect()->to('/');
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $slug = str_replace('/ ', '', strtolower($this->removeAccents($name)));
        $slug = str_replace(' ', '-', strtolower($slug));

        $body = str_replace("\r\n", "<br>", $request->get('body'));
        $body = str_replace("<br><br><br>", "<br><br>", $body);
        $body = str_replace("<br><br>", "<br>", $body);
        $body = str_replace("https://neurocenter.mx", "", $body);
        $body = str_replace("/?utm_source=interlink&amp;utm_medium=link-organico", "", $body);

        $body = str_replace("<p>IMAGE3</p>", '<img src="/images/'.$slug.'-3.jpg" class="w-full"/>', $body);
        $body = str_replace("<p>IMAGE2</p>", '<img src="/images/'.$slug.'-2.jpg" class="w-full"/>', $body);
        $body = str_replace("<p>IMAGE</p>", '<img src="/images/'.$slug.'.jpg" class="w-full"/>', $body);
        $body = str_replace("<h2>", '<h3>', $body);
        $body = str_replace("</h2>", '</h3>', $body);
        $body = str_replace("<h3><strong>", '<h3>', $body);
        $body = str_replace("</strong></h3>", '</h3>', $body);
        $body = str_replace("Neurocenter", env('APP_NAME'), $body);
        //$body = str_replace("<p><strong>", '<h3>', $body);
        //$body = str_replace("</strong></p>", '</h3>', $body);

        $item = [
            'category_id' => $request->get('category_id'),
            'title' => ucfirst($name),
            'body' => $body,
            'contact_title' => $request->get('contact_title'),
            'contact_subtitle' => $request->get('contact_subtitle')
        ];

        Item::firstOrCreate(['slug' => $slug], $item);

        return redirect()->to('/item/create');
    }

    private function removeAccents($str)
    {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }
}
