<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Archive;
class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Archive::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $name = time().'.'.$ext;
        if($request->file->move(public_path('/file/research-archive'),$name)){

              $this->validate($request, [
                'title' => 'required|string|max:191',
                'adviser' => 'required|string|max:191',
                'year' => 'required|string|max:191',
                'authors' => 'required|string|max:191',
              ]);      
            Archive::create([
                'title' => $request['title'],
                'year' => $request['year'],
                'author' => $request['authors'],
                'adviser' => $request['adviser'],
                'file_name' => $name,
            ]);
            return ['message' => 'Success']; 
        }
        return ['message' => 'Failed'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
