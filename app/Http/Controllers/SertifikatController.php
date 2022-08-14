<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;

use Illuminate\Http\Request;


class SertifikatController extends Controller
{
    public function index(Request $request)
    {

        if (request()->search) {
            $serti = Sertifikat::where('name', 'LIKE',"%$request->search%")
            ->get();
            return $serti;
        }
        $serti = Sertifikat::all();
        return $serti;
    }

    public function Store(Request $request)
    {
        Sertifikat::create([
            'name'=>$request->name,
            'lembaga'=>$request->lembaga,
            'waktu'=>$request->waktu,
            'sampai'=>$request->sampai,
            'link'=>$request->link,
        ]);
        return response()->json("Insert data Success", 200);
    }

    public function show($id)
    {
        $serti = Sertifikat::find($id);

        return response()->json([
            'message'=> "Success get data",
            'code' => http_response_code(200),
            'data' => $serti,
        ]);;
    }

    public function edit(Request $request, $id)
    {

        $serti = Sertifikat::find($id);

        $serti ->update([
            'name'=>$request->name,
            'lembaga'=>$request->lembaga,
            'waktu'=>$request->waktu,
            'sampai'=>$request->sampai,
            'link'=>$request->link,
        ]);
        return response()->json('Update Success', 200);
    }
    public function destroy($id)
    {
        $serti = Sertifikat::find($id);
        $serti ->delete();
        return response()->json('Delete Success', 200);
    }
}
