<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\AccordAsk;
use Illuminate\Support\Facades\Auth;


class AccordAskController extends Controller
{
    public function index($ask_id, $title)
    {


        $accord = AccordAsk::create([
            'user_id' => Auth::id(),
            'offer_id' => $ask_id,
            'title' => $title,
        ]);

        $accords = AccordAsk::all();


        return view('accords', ['accords' => $accords]);
    }

    //public function show()
    //{
        //$flowers = DB::select('SELECT * FROM flowers');
      //  $accords = AccordAsk::all();

        // To display a specific view :
      //  return view('accords', ['accords' => $accords]);
    //}


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






