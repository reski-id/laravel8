<?php

namespace App\Http\Controllers\api;

use App\Models\CV   ;

use Illuminate\Http\Request;

class UploadCVControllerAPI extends Controller
{
    public function index(Request $request)
    {

        return response()->json("index");
    }

    public function Store(Request $request)
    {
        $file = $request->file;

        $folder = 'data_cv';
        $filedb = $file->getClientOriginalName();

        $file->move($folder,$file->getClientOriginalName());


        CV::create([
            'file'=> $filedb,
            'keterangan'=>$request->keterangan,
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
