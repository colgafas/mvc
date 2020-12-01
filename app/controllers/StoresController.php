<?php

namespace App\Controllers;

use App\Core\Controller;
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Store;

class StoresController extends Controller
{
    public function show($id)
    {
        $store = Store::findOrFail($id);

        return $this->view('stores/show', ['store' => $store]);
    }

    public function create()
    {
        $countries = Capsule::table('countries')->orderBy('name')->get();

        return $this->view('stores/create', ['countries' => $countries, 'states' => [], 'cities' => []]);
    }

}