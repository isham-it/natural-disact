<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Accord;
use Illuminate\Support\Facades\Auth;


class AccordController extends Controller
{
    public function index($offer_id, $title)
    {


        $accord = Accord::create([
            'user_id' => Auth::id(),
            'offer_id' => $offer_id,
            'title' => $title,
        ]);

        $accords = Accord::all();


        return view('accords', ['accords' => $accords]);
    }

    public function show()
    {
        //$flowers = DB::select('SELECT * FROM flowers');
        $accords = Accord::all();

        // To display a specific view :
        return view('accords', ['accords' => $accords]);
    }


    /*public function show($id)
    {
        // Grab the Ask
        $success = Success ::find($id);
        // Show the form
        return view('details-success', ['success' => $success]);
    }*/

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        return view('accords');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        // Validate automatically return back() to previous page if errors
        /*$validated = $request->validate([
            'title' => 'required|max:300',

        ]);*/






        /*$accord = Accord::create([
            'user_id' => Auth::id(),
            'offer_id' => $id,
            'title' => 'title2',
        ]);

        return redirect('accords');
    }*/









}





