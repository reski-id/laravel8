<?php

namespace App\Http\Controllers;
use App\Models\Programming;
use Illuminate\Http\Request;

class ProgrammingController extends Controller
{
    public function index(Request $request)
    {

        if (request()->search) {
            $code = Programming::where('name', 'LIKE',"%$request->search%")
            ->get();
            return $code;
        }
        $code = Programming::all();
        return $code;
    }

    public function Store(Request $request)
    {
        Programming::create([
            'name'=>$request->name,
        ]);
        return response()->json("Insert data Success", 200);
    }

    public function show($id)
    {
        $code = Programming::find($id);

        return response()->json([
            'message'=> "Success get data",
            'code' => http_response_code(200),
            'data' => $code,
        ]);;
    }

    public function edit(Request $request, $id)
    {

        $code = Programming::find($id);

        $code ->update([
            'name'=>$request->name,
        ]);
        return response()->json('Update Success', 200);
    }
    public function destroy($id)
    {
        $code = Programming::find($id);
        $code ->delete();
        return response()->json('Delete Success', 200);
    }
}
