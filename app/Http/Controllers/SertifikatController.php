<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;

use Illuminate\Http\Request;


class SertifikatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('is_Admin');
    }

    //form
    public function form_create()
    {
        return view('sertifikat.create');
    }

    public function form_edit($id)
    {
        $tasklist = Task::find($id);
        return view('sertifikat.edit', compact('tasklist'));
    }

    public function index(Request $request)
    {

        if (request()->search) {
            $serti = Sertifikat::where('name', 'LIKE',"%$request->search%")
            ->get();
            return $serti;
        }

        $serti = Sertifikat::select("*")->orderByDesc("id")->paginate(3);
        return view('sertifikat.index', [
            'data' => $serti,
        ]);
    }

    public function Store(Request $request)
    {
        // $serti = $request->all();
        Sertifikat::create([
            'name'=>$request->name,
            'lembaga'=>$request->lembaga,
            'waktu'=>$request->waktu,
            'sampai'=>$request->sampai,
            'link'=>$request->link,
            'file'=>$request->file,

        ]);
        return redirect('/sertifikat');
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
