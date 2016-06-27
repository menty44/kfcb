<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Distributor;
use App\User;
use DB;
use Mail;
use Auth;
class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('distributor/index');
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
        $this->validate($request, [
            'companyname' => 'required|unique:distributors',
//            'chief' => 'required',
//            'police' => 'required',
//            'director1' => 'required',
//            'address' => 'required',
//            'town' => 'required',
//            'source' => 'required',
            'agree' => 'required',
        ]);
        $distrib = new Distributor();
        $user=Auth::User()->name;
        $distrib->companyname = $request->input('companyname');
        $distrib->address = $request->input('address');
        $distrib->address1 = $request->input('address1');
        $distrib->telephone = $request->input('telephone');
        $distrib->director1 = $request->input('director1');
        $distrib->director2 = $request->input('director2');
        $distrib->director3 = $request->input('director3');
        $distrib->director4 = $request->input('director4');
        $distrib->town = $request->input('town');
        $distrib->town1 = $request->input('town1');
        $distrib->plot = $request->input('plot');
        $distrib->plot1 = $request->input('plot1');
        $distrib->source = $request->input('source');
        $distrib->employees = $request->input('employees');
        $distrib->source1 = $request->input('source1');
        $distrib->police = $request->input('police');
        $distrib->chief = $request->input('chief');
        $distrib->sign = $request->input('sign');
        $distrib->countyoffice = $request->input('countyoffice');
        $distrib->agree = $request->input('agree');
        if($distrib->save()){
            $id = DB::table('distributors')->where('companyname', $request->input('companyname'))->value('id');

            $dist = Distributor::where('id', $id)->first();;
            $data=['dist',$dist];
            Mail::queue('distributor.index', $data, function ($message) {
                $message->from('noreply@flag42.com', 'KFCB PORTAL');
                $message->to('larrykiprop@gmail.com.com')->cc('larry@flag42.com');
            });

            return redirect('distributor/invoice/'.$id)->with('status', 'Application for '.$request->input('companyname').' as a Distributor Successful!');
        }
    }

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
    public function invoice($id)
    {
        $dist = Distributor::where('id', $id)->first();
        return view('invoice/distributor',['dist' => $dist]);
    }
    public function paid($id)
    {
        $dist = Distributor::where('id', $id)->first();
        return view('classification/paid',['dist' => $dist]);
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
}
