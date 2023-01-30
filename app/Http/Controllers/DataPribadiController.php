<?php

namespace App\Http\Controllers;
use App\Models\DataPribadi;
use Illuminate\Http\Request;


class DataPribadiController extends Controller
{
    public function index(Request $request)
    {
        $data = DataPribadi::all();
        if($request->has('search')){
            $data = DataPribadi::where('nama','LIKE','%'.$request->search.'%')->paginate(5);
            }else{
            $data = DataPribadi::paginate(5);
            }
        return view('home', compact('data'),[
            'title' => 'HOME']);
    }

    public function tambah()
    {
        return view('tambah',[
            'title' => 'TAMBAH']);
    }


    public function insertdata(Request $request){
        $data = DataPribadi::create($request->all());
        return redirect()->route('home')->with('success','Data Berhasil ditambahkan');
    }

    public function tampilkandata($id){
        $data = DataPribadi::find($id);
        return view('tampilkandata', compact('data'),[
            'title' => 'UPDATE']);
    }

    public function detail($id)
    {
        $data = DataPribadi::find($id);
        return view('detail', compact('data'),[
            'title' => 'DETAIL']);
    }

    public function updatedata(Request $request,$id){
        $data = DataPribadi::find($id);
        $data->update($request->all());
        return redirect()->route('home')->with('success','Data Berhasil diUpdate');
    }

    public function deletedata($id){
        $data = DataPribadi::find($id);
        $data->delete();
        return redirect()->route('home')->with('success','Data Berhasil Dihapus');
    }
}
