<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Ask;


class AskController extends Controller
{
    public function index()
    {
        $asks = Ask::all();

        return view('asks', ['asks' => $asks]);
    }


    public function show($id)
    {
        // Grab the Ask
        $ask = Ask ::find($id);
        // Show the form
        return view('details-ask', ['ask' => $ask]);
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-ask');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate automatically return back() to previous page if errors
        $validated = $request->validate([
            'title' => 'required|max:300',

        ]);

        $ask = new Ask;

        $ask->title = $request->title;

        $ask->save();

        // redirect to offers list with a message
        return redirect('asks')->with('success', $request->title . ' was created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ask = Ask::find($id);

        // Show the form
        return view('update-ask', ['ask' => $ask]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $ask = Ask::find($id);

        $ask->title = $request->title;

        $ask->save();

        // redirect to asks list with a message
        return redirect('asks')->with('success', $request->title . ' was updated successfully');
    }


      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ask::destroy($id);
        //DB::delete('DELETE FROM flowers WHERE id = ?', [$id]);

        // redirect to flowers list with a message
        return redirect('asks')->with('success', 'ask annonce deleted');
    }

}





