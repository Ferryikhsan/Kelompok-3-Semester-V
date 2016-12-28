<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Dosen;
use Illuminate\Http\Request;
use Session;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dosen = Dosen::paginate(25);

        return view('admin.dosen.index', compact('dosen'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function dosen()
    {
        $dosen = Dosen::all();

        return view('tampilan_dosen', compact('dosen'));
    }

    public function search(Request $request)
    {
        $cari= $request->get('search');
        $dosens= Dosen::where('nama_dosen','LIKE','%'.$cari.'%')->orWhere('nip','LIKE','%'.$cari.'%')->paginate(10);
        return view('tampilan_dosensearch', compact('dosens'));
        
    }

    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Dosen::create($requestData);

        Session::flash('flash_message', 'Dosen added!');

        return redirect('admin/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);

        return view('admin.dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);

        return view('admin.dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $dosen = Dosen::findOrFail($id);
        $dosen->update($requestData);

        Session::flash('flash_message', 'Dosen updated!');

        return redirect('admin/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Dosen::destroy($id);

        Session::flash('flash_message', 'Dosen deleted!');

        return redirect('admin/dosen');
    }
}
