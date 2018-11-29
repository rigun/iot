<?php

namespace App\Http\Controllers;

use App\Placeposition;
use Illuminate\Http\Request;
use App\User;

class PlacepositionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Placeposition::all();
        return $item;
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
    public function store(Request $request, $token)
    {
        $this->validateWith([
            'longitude' => 'required',
            'latitude' => 'required',
          ]);

          $user = User::where('token',$token)->first();
          if(!$item = Placeposition::where('user_id', $user->id)->first()){
                $item = new Placeposition();
                $item->user_id = $user->id;          
          }
          $item->longitude = $request->longitude;
          $item->latitude = $request->latitude;
          $item->save();

          return $item;
    }
    public function storeFromArduino($token,$lat,$lng)
    {
          $user = User::where('token',$token)->first();
          if(!$item = Placeposition::where('user_id', $user->id)->first()){
                $item = new Placeposition();
                $item->user_id = $user->id;          
          }
          $item->longitude = $lat;
          $item->latitude = $lng;
          $item->save();

          return $item;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Placeposition  $detail
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {
        $user = User::where('token',$token)->first();
        if(!$item = Placeposition::where('user_id', $user->id)->first()){
            return "not found";
        };
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Placeposition  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Placeposition $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Placeposition  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateWith([
            'tanggalLahir' => 'required',
            'nomorHp' => 'required',
            'jenisKelamin' => 'required',
          ]);

          $user = User::findOrFail($id);
          if($user)
          {
            if($request->name != null){
                $user->name = $request->name;
                $user->save();
            }
            $item = Placeposition::where('user_id', $id)->first();
            $item->tanggalLahir = $request->tanggalLahir;
            $item->nomorHp = $request->nomorHp;
            $item->jenisKelamin = $request->jenisKelamin;
            $item->save();  
              return $item;
          }else{
              return 'gagal';
          }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Placeposition  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uploaded_image = Placeposition::findOrFail($id);
 
        if (empty($uploaded_image)) {
            return response()->json(['message' => 'Sorry file does not exist'], 400);
        }else{
            $uploaded_image->delete();
        }
        
        return "Terhapus";
    }
}
