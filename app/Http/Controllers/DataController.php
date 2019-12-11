<?php

namespace App\Http\Controllers;
use App\user;
use App\data;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;



class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('index');
    }
    public function admin(Request $request)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        $cari = $request->cari;
        $data = data::where('judul','like',"%".$cari."%")->orderBy('id','DESC')->paginate();
        
        return view('/admin/index',compact('data'));
    }
    public function overview(Request $request)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        $cari = $request->cari;
        $data = data::where('judul','like',"%".$cari."%")->orderBy('id','DESC')->paginate();
        
        return view('admin.overview',compact('data'));
    }
    public function galery(Request $request)
    {
        $cari = $request->cari;
        
        $data = data::where('judul','like',"%".$cari."%")->orderBy('id','DESC')->paginate();
        
        return view('/galery',compact('data'));
    }
    public function about(Request $request)
    {   
        return view('/about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        $users = user::all();
        return view('admin.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        
            'file' => 'required|mimes:mp4,3gp,jpg,jpeg,png',
            'judul'=>'required',
            
            
        ]);
       
      
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();
        $path =Storage::putFileAs('public',$request->file('file'),$nama_file);
        
        
        //kirim ke storage
        // Storage::disk('local') -> put('public/data_file'.'/'.$nama_file, file_get_contents($file -> getRealPath()));
        // Storage::disk('local')->put('data_file'.'/'.$nama_file,file_get_contents($file -> getRealPath()));
        //   isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        
        //check extensi
        $ekstensi = explode('.',$file->getClientOriginalName());//memecah contoh ['pink.png']=['pink']['png']
	    $ekstensi_file=strtolower(end($ekstensi));

   

        data::Create([
         
            'file'=>$nama_file,
            'judul'=>$request->judul,
            'type'=>$ekstensi_file
        ]);

     
        return redirect('/admin/create')->with('status','Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(data $data)
    {
        return view('admin.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $data)
    {
        //model di atas harus di hapus
        $datas = data::find($data);
        $datas->judul = $request->judul;   
        $datas->save();

       
        return redirect('/admin/overview')->with('status','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(data $data)
    {
        data::destroy($data->id);
        return redirect('/admin/overview')->with('status','Data berhasil dihapus');
    }
}
