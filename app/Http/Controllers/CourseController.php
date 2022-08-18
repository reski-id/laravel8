<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('is_Admin');
    }

    public function index(Request $request)
    {

        if (request()->search) {
            $code = Course::where('name', 'LIKE',"%$request->search%")
            ->get();
            return $code;
        }
        $code = Course::all();
        return $code;
    }

    public function Store(Request $request)
    {
        Course::create([
            'name'=>$request->name,
            'finish_years'=> $request->finish_years,
            'course'=> $request->course,
            'lembaga'=> $request->lembaga,
            'link_sertifikat'=> $request->link_sertifikat,
            'kategory_course'=> $request->kategory_course,
        ]);
        return response()->json("Insert data Success", 200);
    }

    public function show($id)
    {
        $code = Course::find($id);

        return response()->json([
            'message'=> "Success get data",
            'code' => http_response_code(200),
            'data' => $code,
        ]);;
    }

    public function edit(Request $request, $id)
    {

        $code = Course::find($id);

        $code ->update([
            'name'=>$request->name,
            'finish_years'=> $request->finish_years,
            'course'=> $request->course,
            'lembaga'=> $request->lembaga,
            'link_sertifikat'=> $request->link_sertifikat,
            'kategory_course'=> $request->kategory_course,
        ]);
        return response()->json('Update Success', 200);
    }
    public function destroy($id)
    {
        $code = Course::find($id);
        $code ->delete();
        return response()->json('Delete Success', 200);
    }
}
