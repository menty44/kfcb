<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Classification;

use App\exhibition;

use DB;

class ExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //displaying the exhibition landding page
        return view('exhibition/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //SAVING THE INPUT FORM DETAILS INTO THE DATABASE
        $this->validate($request, [
            'companyname' => 'required',
            'address' => '',
            'telephone' => '',
            'town' => '',
            'plot' => '',
            'Director1' => 'required',
            'Director2' => '',
            'Director3' => '',
            'Director4' => '',
            'seatno' => '',
            'seatcapacity' => '',
            'employeeno' => '',
            'toiletno' => '',
            'ventilation' => '',
            'extinguishers' => '',
            'booking' => '',
            'projroom' => '',
            'firstaidkit' => '',
            'projtv' => '',
            'amenities' => '',
            'childfee' => '',
            'firstshow' => '',
            'otherexhibitions' => '',
            'adultfee' => '',
            'lastshow' => '',
            'police' => '',
            'chiefs' => '',
            'countyoffice' => '',
            
        ]);
        $exhibition = new Exhibition();

        $exhibition->nameofcompany = $request->input('companyname');
        $exhibition->address = $request->input('address');
        $exhibition->telephone = $request->input('telephone');
        $exhibition->area = $request->input('town');
        $exhibition->plotno = $request->input('plot');
        $exhibition->director1 = $request->input('Director1');
        $exhibition->director2 = $request->input('Director2');
        $exhibition->director3 = $request->input('Director3');
        $exhibition->director4 = $request->input('Director4');
        $exhibition->noofseat = $request->input('seatno');
        $exhibition->capacity = $request->input('seatcapacity');
        $exhibition->noofemp = $request->input('employeeno');
        $exhibition->nooftoilet = $request->input('toiletno');
        $exhibition->typeofventilation = $request->input('ventilation');
        $exhibition->nooffireextinguisher = $request->input('extinguishers');
        $exhibition->bookingoffice = $request->input('booking');
        $exhibition->projectionroom = $request->input('projroom');
        $exhibition->firstaidkit = $request->input('firstaidkit');
        $exhibition->projectionbytv = $request->input('projtv');
        $exhibition->socialamenity = $request->input('amenities');
        $exhibition->admfeechild = $request->input('childfee');
        $exhibition->firstshowtime = $request->input('firstshow');
        $exhibition->otherexhibitionowned = $request->input('otherexhibitions');
        $exhibition->admfeeadult = $request->input('adultfee');
        $exhibition->lastshowtime = $request->input('lastshow');
        $exhibition->nearestpolicestation = $request->input('police');
        $exhibition->chiefsoffice = $request->input('chiefs');
        $exhibition->nearestcountyoff = $request->input('countyoffice');
        if($exhibition->save()){
            $id = DB::table('exhibitions')->where('nameofcompany', $request->input('companyname'))->value('id');
            //$id=DB::select('select id from classifications where filmtitle=?',$request->input('filmtitle'));
            //return redirect('exhibition/invoice/'.$id)->with('status', 'Application for '.$request->input('companyname').' is Successful!'); 
            return redirect('exhibition/invoice/'.$id)->with('status', 'Application for '.$request->input('companyname').' Successful!'); 
            //return redirect('invoice');      
            
    };}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function invoice($id)
    {
        $flights = Exhibition::where('id', $id)->first();
        return view('exhibition/invoice',['flights' => $flights]);
    }
}
