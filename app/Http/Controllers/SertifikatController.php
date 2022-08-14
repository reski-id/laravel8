<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SertifikatController extends Controller
{
    public function index(Request $request)
    {

        if (request()->search) {
            $serti = DB::table('sertifikat')
            ->where('name', 'LIKE',"%$request->search%")
            ->get();
            return $serti;
        }
        $serti = DB::table('sertifikat')->get();
        return $serti;
    }
    public function Store(Request $request)
    {
        DB::table('sertifikat')->insert([
            'name'=>$request->name,
            'lembaga'=>$request->lembaga,
            'waktu'=>$request->waktu,
            'sampai'=>$request->sampai,
            'link'=>$request->link,
            'created_at'=> now(),
        ]);
        return response()->json("Insert data Success", 200);
    }
    public function show($id)
    {
        $serti = DB::table('sertifikat')->where('id',$id)->first();
        return $serti;
    }

    public function edit(Request $request, $id)
    {
        $tasklist = DB::table('sertifikat')->where('id',$id)->update([
            'name'=>$request->name,
            'lembaga'=>$request->lembaga,
            'waktu'=>$request->waktu,
            'sampai'=>$request->sampai,
            'link'=>$request->link,
            'updated_at' => now(),
        ]);
        return response()->json('Update Success', 200);;
    }
    public function destroy($id)
    {
        DB::table('sertifikat')->where('id',$id)->delete();
        return response()->json('Delete Success', 200);;
    }
}
