<?php

namespace App\Http\Controllers;
use App\Models\CourseKategory;
use Illuminate\Http\Request;

class CourseCategController extends Controller
{
    public function index(Request $request)
    {

        if (request()->search) {
            $code = CourseKategory::where('kategory', 'LIKE',"%$request->search%")
            ->get();
            return $code;
        }
        $code = CourseKategory::all();
        return $code;
    }

    public function Store(Request $request)
    {
        CourseKategory::create([
            'kategory'=>$request->kategory,
        ]);
        return response()->json("Insert data Success", 200);
    }

    public function show($id)
    {
        $code = CourseKategory::find($id);

        return response()->json([
            'message'=> "Success get data",
            'code' => http_response_code(200),
            'data' => $code,
        ]);;
    }

    public function edit(Request $request, $id)
    {

        $code = CourseKategory::find($id);

        $code ->update([
            'kategory'=>$request->kategory,
        ]);
        return response()->json('Update Success', 200);
    }
    public function destroy($id)
    {
        $code = CourseKategory::find($id);
        $code ->delete();
        return response()->json('Delete Success', 200);
    }
}
