<?php

namespace App\Http\Controllers;

use App\Preset;
use Illuminate\Http\Request;

class PresetController extends Controller
{
    /** @var Preset preset */
    private $preset;

    /** @var Request request */
    private $request;

    public function __construct(Preset $preset, Request $request)
    {
        $this->preset = $preset;
        $this->request = $request;
    }

    public function index()
    {

    }
}
