<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PLP;
use Illuminate\Http\Request;
use Session;

class PLPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $plp = PLP::paginate(25);

        return view('admin.plp.index', compact('plp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */

    public function plp()
    {
        $plp = PLP::all();

        return view('tampilan_plp', compact('plp'));
    }

    public function search(Request $request)
    {
        $cari= $request->get('search');
        $plps= PLP::where('nama_plp','LIKE','%'.$cari.'%')->orWhere('nip','LIKE','%'.$cari.'%')->paginate(10);
        return view('tampilan_plpsearch', compact('plps'));
        
    }

    public function create()
    {
        return view('admin.plp.create');
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
        
        PLP::create($requestData);

        Session::flash('flash_message', 'PLP added!');

        return redirect('admin/plp');
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
        $plp = PLP::findOrFail($id);

        return view('admin.plp.show', compact('plp'));
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
        $plp = PLP::findOrFail($id);

        return view('admin.plp.edit', compact('plp'));
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
        
        $plp = PLP::findOrFail($id);
        $plp->update($requestData);

        Session::flash('flash_message', 'PLP updated!');

        return redirect('admin/plp');
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
        PLP::destroy($id);

        Session::flash('flash_message', 'PLP deleted!');

        return redirect('admin/plp');
    }
}
