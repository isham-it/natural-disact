<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use File;


class ApiController extends Controller
{


    public function getApi()
    {
  $files = File::files(public_path());
    }

}
