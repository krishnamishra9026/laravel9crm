<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PreviousVersion;
use App\Models\Product;
use Illuminate\Http\Request;

class PreviousVersionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $previous_versions = PreviousVersion::latest()->paginate(5);
      
        return view('admin.previous_versions.index',compact('previous_versions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::latest()->pluck('name','id');
        return view('admin.previous_versions.create', compact('products'));
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
            'version' => 'required',
            'added_on' => 'required',
        ]);

        $input = $request->all();

        if($request->hasfile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->storeAs('uploads/image', $name, 'public');

            $input['image']         = $name;
        }

        if($request->hasfile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file->storeAs('uploads/file', $name, 'public');

            $input['file']         = $name;
        }
      
        PreviousVersion::create($input);
       
        return redirect()->route('previous-versions.index')
                        ->with('success','Previous Version created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PreviousVersion  $previous_version
     * @return \Illuminate\Http\Response
     */
    public function show(PreviousVersion $previous_version)
    {
        return view('admin.previous_versions.show',compact('previous_version'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PreviousVersion  $previous_version
     * @return \Illuminate\Http\Response
     */
    public function edit(PreviousVersion $previous_version)
    {
        $products = Product::latest()->pluck('name','id');
        return view('admin.previous_versions.edit',compact('previous_version','products'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PreviousVersion  $previous_version
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreviousVersion $previous_version)
    {
        $request->validate([
            'version' => 'required',
            'added_on' => 'required',
        ]);

        $input = $request->all();

        if($request->hasfile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->storeAs('uploads/image', $name, 'public');

            $input['image']         = $name;
        }

        if($request->hasfile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file->storeAs('uploads/file', $name, 'public');

            $input['file']         = $name;
        }
      
        $previous_version->update($input);
      
        return redirect()->route('previous-versions.index')
                        ->with('success','Previous Version updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PreviousVersion  $previous_version
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreviousVersion $previous_version)
    {
        $previous_version->delete();
       
        return redirect()->route('previous-versions.index')
                        ->with('success','Previous Version deleted successfully');
    }
}
