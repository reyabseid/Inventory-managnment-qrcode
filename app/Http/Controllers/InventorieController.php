<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventorie;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class InventorieController extends Controller
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
        return view('store.add');
    }

    /**
     *
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'inventorieTypeId' => 'required',
            'type' => 'required',
            'unit' => 'required',
            'count' => 'required',
            'status' => 'required',
        ]);
            
        // change moveble cheak box to boolean
        $request['movable'] = ($request->movable == 'on') ? true : false;

        //  iterate by count
        for ($x = 0; $x < $request->input('count' , 1); $x++) {
            Inventorie::create($request->all());            
          }
          
   
        return redirect()->route('store.add')->with('success','Post created successfully.');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $posts = Post::latest();
        // return view('store.view',compact('posts'));
  
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
    public function showAll(){
        $inventories = Inventorie::latest()->paginate(6);

        return view('store.viewAll', compact('inventories'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
         }

         public function transfer(){
             return view('store.transfer');
        }   
        public function transferUpdate(Request $request){
            $request->validate([
                'transferTo' => 'required',
                'inventorieTypeId' => 'required',
                'count' => 'required',
            ]);
            // // get items for each cout
            $inv = Inventorie::where(
                'inventorieTypeId',
                $request->inventorieTypeId
                )
                ->take($request->count)->get();

            //loop over cout
            foreach ($inv as $key => $value) {
               $value->isTransferd = true;

            //update  istransfer to true

               Inventorie::where('id', $value->id)->update(array('isTransferd' => true));
                
            
               Transfer::create(
                   array(
                   'transferFrom' => Auth::user()->email,
                   'transferTo' => $request->transferTo,
                   'inventorieTypeId' => $request->inventorieTypeId,
                   'inventorieId' => $value->id,
                   'returnable' => $value->returnable,
                   'status' => $value->status
               ));            

            }

            return redirect()->route('store.transfer')->with('success','inv transferd successfully.');

        }       
}
