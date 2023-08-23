<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acessibilidade;

class AcessibilidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        return Acessibilidade::all();
    }
}