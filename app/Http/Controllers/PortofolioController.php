<?php

namespace App\Http\Controllers;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
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
            $code = Portofolio::where('proj_name', 'LIKE',"%$request->search%")
            ->get();
            return $code;
        }
        $code = Portofolio::all();
        return $code;
    }

    public function Store(Request $request)
    {
        Portofolio::create([
            'proj_name'=>$request->proj_name,
            'proj_link'=>$request->proj_link,
            'proj_kategory'=>$request->proj_kategory,
            'programming_language'=>$request->programming_language,
        ]);
        return response()->json("Insert data Success", 200);
    }

    public function show($id)
    {
        $code = Portofolio::find($id);

        return response()->json([
            'message'=> "Success get data",
            'code' => http_response_code(200),
            'data' => $code,
        ]);;
    }

    public function edit(Request $request, $id)
    {

        $code = Portofolio::find($id);

        $code ->update([
            'proj_name'=>$request->proj_name,
            'proj_link'=>$request->proj_link,
            'proj_kategory'=>$request->proj_kategory,
            'programming_language'=>$request->programming_language,
        ]);
        return response()->json('Update Success', 200);
    }
    public function destroy($id)
    {
        $code = Portofolio::find($id);
        $code ->delete();
        return response()->json('Delete Success', 200);
    }
}
