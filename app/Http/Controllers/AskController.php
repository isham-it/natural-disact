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
        // + Validations
        $validations = Validator::make($request->all(), [
            'title' => 'required|max:50',
            //'description' => 'required',
            //'city' => 'required',
            // user id will delate after INNER JOIN
            //'user_id'=>'required',
            //'type' => 'required',
        ]);
 
        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);
        //$offer = new Ask();
            //$offer->title = $request->title;
            $ask = new Ask;
                $ask->title = $request->title;
            
            //$helpOffer->user_id = $request->user_id;
            //$helpOffer->description = $request->description;
            //$helpOffer->capacity = $request->capacity;
           //$helpOffer->type = $request->type;
            //$helpOffer->city = $request->city;
            //$helpOffer->date = $request->date;
            $ask->save();
    
            return response()->json(['success', $request->title . ' was created successfully']);
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





