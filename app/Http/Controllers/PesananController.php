<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Menu;
use App\Models\Pelanggan;
use App\Models\Transaksi;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pesanan = Pesanan::with('menu')->with('pelanggan')->paginate(10);
        return view('admin.pesanan.pesanan')->with('pesanan', $pesanan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = Menu::all();
        $pelanggan = Pelanggan::all();
        return view('admin.pesanan.create-pesanan')->with('menu', $menu)->with('pelanggan', $pelanggan);
        return redirect('pesanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pesanan $pesanan)
    {
        //
        Transaksi::create([
            'jumlah' => $request->jumlah,
            'menu_id' => $request->menu_id,
            'pelanggan_id' => $request->pelanggan_id
        ]);
        Pesanan::create([
            'menu_id' => $request->menu_id,
            'pelanggan_id' => $request->pelanggan_id,
            'jumlah' => $request->jumlah
        ]);

        return redirect('pesanan');
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
    public function edit(Pesanan $pesanan)
    {
        //
        $pelanggan = Pelanggan::all();
        $menu = Menu::all();
        return view('admin.pesanan.edit-pesanan')->with('pesanan', $pesanan)->with('menu', $menu)->with('pelanggan', $pelanggan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        //
         $pesanan = Pesanan::findorfail($pesanan->id);
         $pesanan->update($request->all());
         return redirect()->route('pesanan.index');
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
        $pesanan = Pesanan::findorfail($id);
        $pesanan->delete();

        return back();
    }
}
