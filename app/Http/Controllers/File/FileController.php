<?php

namespace App\Http\Controllers\File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\TblFiles as ClassTblfiles;

class FileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ClassTblfiles::all();

        return view('pages.files.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        /*----http://api.symfony.com/3.0/Symfony/Component/HttpFoundation/File/UploadedFile.html----*/
        if ($request->hasFile('upload') && $request->upload->isValid() ){

            $file=$request->upload;
            $originalFileName=$file->getClientOriginalName() ;
            $extension =$file->extension();
            
            switch ($extension) {
                case 'pdf':
                $filename=$file->storeAs('public/pdf',$originalFileName);
                $filetype="pdf";
                break;

                case 'jpeg': 
                case 'jpg': 
                case 'png':
                $filename=$file->storeAs('public/image',$originalFileName);
                $filetype="image";
                break;

                default:
                echo "no setting for ".$extension." yet defined";
                break;
            }

            /*
            Saving in database with original file name.
             */
            $tblfiles=new ClassTblfiles();
            $tblfiles->file=$originalFileName;
            $tblfiles->file_type=$filetype;
            $tblfiles->save();

            return redirect()->route('file.index')->with('message',"One item added");
            // return redirect('file');

        }else{
            echo "no file uploaded.";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=ClassTblfiles::findOrFail($id);
        $fileType=$data->file_type;
        switch ($fileType) {
            case 'pdf':
            return response()->file(storage_path('/app/public/pdf/'.$data->file));
            break;
            
            case 'image':
            return response()->file(storage_path('/app/public/image/'.$data->file));
            break;
            
            default:
            return "Nothing to response.";
            break;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=ClassTblfiles::findOrFail($id);
        $fileType=$data->file_type;
        $file=$data->file;
        
        switch ($fileType) {
            case 'pdf':
            $state=Storage::delete('/public/pdf/'.$data->file);
            // File::delete(storage_path('/public/pdf/'.$data->file));
            break;
            
            case 'image':
            $state=Storage::delete('/public/image/'.$data->file);
            // File::delete(storage_path('/public/image/'.$data->file));
            break;
            
            default:
            return "Nothing to delete.";
            break;
        }
        if($state){
            ClassTblfiles::destroy($id);
            return redirect()->route('file.index')->with('message',"One item deleted");
        }else{
            return "Sorry! Couldnot delete";
        }
    }
}
