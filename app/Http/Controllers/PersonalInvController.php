<?php

namespace App\Http\Controllers;

use App\Models\PersonalInv;
use Illuminate\Http\Request;

class PersonalInvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guardStaff.addInv');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'middleName' => 'required',
            'invId' => 'required',
            'type' => 'required',
            'campusId' => 'required',
        ]);     



        if ($request->image){
            $image = $request->input('image'); // image base64 encoded
            preg_match("/data:image\/(.*?);/",$image,$image_extension); // extract the image extension
            $image = preg_replace('/data:image\/(.*?);base64,/','',$image); // remove the type part
            $image = str_replace(' ', '+', $image);
            $imageName = $request->invId . '.' . $image_extension[1]; //generating unique file name;
            \File::put(public_path(). '\users\img\\' .$imageName,base64_decode($image));
            // return back()->with('success', 'Images Successfully uploaded.');
            // return 'ok';
            // return 
        }


        PersonalInv::create($request->all());            

        return redirect()->route('guardStaff.addInv')->with('success','Personal Inv created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalInv  $personalInv
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalInv $personalInv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalInv  $personalInv
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalInv $personalInv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalInv  $personalInv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalInv $personalInv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalInv  $personalInv
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalInv $personalInv)
    {
        //
    }
    public function showAll(){
        $personalInvs = PersonalInv::latest()->paginate(6);

        return view('guardStaff.viewAll', compact('personalInvs'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
         }

}
