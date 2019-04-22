<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mhs;


class mhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = mhs::all()->toArray();
        return view('v1.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mhs = $this->validate(request(), [
            'nama' => 'required',
            'nim' => 'required|numeric'
    ]);

    mhsController::create($mhs);

    return back()->with('success', 'Mahasiswa berhasil ditambah');;
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = mhs::find($id);
        return view('v1.edit',compact('mhs','id'));
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
        $mhs = mhs::find($id);
        $this->validate(request(), [
            'nama' => 'required',
            'nim' => 'required|numeric'
        ]);
            $mhs->nama = $request->get('nama');
            $mhs->nim = $request->get('nim');
            $mhs->save();
            return redirect('v1')->with('success','Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = mhs::find($id);
        $mhs->delete();
        return redirect('v1')->with('success','Student has been deleted');
    }
}
