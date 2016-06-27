<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Classification;
use DB;
class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('classification/index');
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
            'filmtitle' => 'required|unique:classifications',
            'category' => 'required',
            'runningtime' => 'required',
            'fee' => 'required',
            'postertrailer' => 'required',
            'applicant' => 'required',
            'agree' => 'required',
        ]);
        $classification = new Classification();

        $classification->filmtitle = $request->input('filmtitle');
        $classification->category = $request->input('category');
        $classification->runningtime = $request->input('runningtime');
        $classification->fee = $request->input('fee');
        $classification->postertrailer = $request->input('postertrailer');
        $classification->applicant = $request->input('applicant');
        $classification->agree = $request->input('agree');
        if($classification->save()){
            $id = DB::table('classifications')->where('filmtitle', $request->input('filmtitle'))->value('id');
//            $id=DB::select('select id from classifications where filmtitle=?',$request->input('filmtitle'));
            return redirect('classification/invoice/'.$id)->with('status', 'Application for '.$request->input('filmtitle').' Classification Successful!');
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
        $flights = Classification::where('id', $id)->first();
        return view('invoice/classification',['flights' => $flights]);
    }
    public function paid($id)
    {
        $flights = Classification::where('id', $id)->first();
        return view('classification/paid',['flights' => $flights]);
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
