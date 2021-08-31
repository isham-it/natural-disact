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
        // Validate automatically return back() to previous page if errors
        $validated = $request->validate([
            'title' => 'required|max:300',

        ]);

        $offer = new Offer;

        $offer->title = $request->title;

        $offer->save();

        // redirect to offers list with a message
        return redirect('offers')->with('success', $request->title . ' was created successfully');
    }


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
