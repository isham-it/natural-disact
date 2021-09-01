<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Offer;


class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();

        return view('offers', ['offers' => $offers]);
    }


    public function show($id)
    {
        // Grab the Offer

        $offer = Offer::find($id);


        // Show the form
        return view('details-offer', ['offer' => $offer]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-offer');
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
        $offer = new Offer;
            $offer->title = $request->title;
            //$helpOffer->user_id = $request->user_id;
            //$helpOffer->description = $request->description;
            //$helpOffer->capacity = $request->capacity;
           //$helpOffer->type = $request->type;
            //$helpOffer->city = $request->city;
            //$helpOffer->date = $request->date;
            $offer->save();
    
            return response()->json(['success', $request->title . ' was created successfully']);    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $offer = Offer::find($id);

        // Show the form
        return view('update-offer', ['offer' => $offer]);
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

        $offer = Offer::find($id);

        $offer->title = $request->title;

        $offer->save();

        return redirect('offers')->with('success', $request->title . ' was updated successfully');
    }



        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offer::destroy($id);

        return redirect('offers')->with('success', 'offer deleted');
    }

}
