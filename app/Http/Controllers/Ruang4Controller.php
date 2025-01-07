<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class Ruang4Controller extends Controller
{
    public function index()
    {
        return view('Ruang4.index');
    }
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $assets = Asset::where('id_ruangan', 4)
                ->select(['nama_pc', 'processor', 'ram', 'vga', 'kapasitas_penyimpanan', 'tipe_penyimpanan', 'monitor', 'id']);

            return DataTables::of($assets)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    return '
                        <a href="' . route('assets.edit4', $row->id) . '" class="edit"><i class="bx bx-edit"></i></a>
                        <a href="javascript:void(0)" class="delete" data-id="' . $row->id . '" data-nama="' . $row->nama_pc . '"><i class="bx bx-trash"></i></a>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function assets()
    {
        $assets = Asset::where('id_ruangan', 4)->get();

        return view('Ruang4.asset', compact('assets'));
    }
    public function create()
    {
        return view('Ruang4.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pc' => 'required|string|max:255|unique:xcode_asset,nama_pc',
            'processor' => 'required|string|max:255',
            'ram' => 'required|in:2GB,4GB,8GB,16GB,32GB',
            'vga' => 'required|string|max:255',
            'kapasitas_penyimpanan' => 'required|string|max:255',
            'tipe_penyimpanan' => 'required|in:hdd,ssd',
            'monitor' => 'required|string|max:255',
        ]);

        $asset = new Asset();
        $asset->nama_pc = $request->nama_pc;
        $asset->processor = $request->processor;
        $asset->ram = $request->ram;
        $asset->vga = $request->vga;
        $asset->kapasitas_penyimpanan = $request->kapasitas_penyimpanan;
        $asset->tipe_penyimpanan = $request->tipe_penyimpanan;
        $asset->monitor = $request->monitor;
        $asset->id_ruangan = 4;
        $currentUser = Auth::user();
        $asset->createdBy = $currentUser->username;
        $asset->createdDate = now();
        $asset->updatedBy = null;
        $asset->updatedDate = null;
        $asset->save();

        return redirect()->route('Ruang4.asset');
    }
    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        $ruangan = $asset->ruangan;
        
        return view('Ruang4.edit', compact('asset', 'ruangan'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_pc' => 'required|string|max:255|unique:xcode_asset,nama_pc,' . $id,
            'processor' => 'required|string|max:255',
            'ram' => 'required|in:2GB,4GB,8GB,16GB,32GB',
            'vga' => 'required|string|max:255',
            'kapasitas_penyimpanan' => 'required|string|max:255',
            'tipe_penyimpanan' => 'required|in:hdd,ssd',
            'monitor' => 'required|string|max:255',
        ]);

        $asset = Asset::findOrFail($id);

        $asset->nama_pc = $request->nama_pc;
        $asset->processor = $request->processor;
        $asset->ram = $request->ram;
        $asset->vga = $request->vga;
        $asset->kapasitas_penyimpanan = $request->kapasitas_penyimpanan;
        $asset->tipe_penyimpanan = $request->tipe_penyimpanan;
        $asset->monitor = $request->monitor;
        $currentUser = Auth::user();
        $asset->updatedBy = $currentUser->username;
        $asset->updatedDate = now();

        $asset->save();

        return redirect()->route('Ruang4.asset');
    }
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();
    
        return response()->json([
            'status' => 'success',
            'message' => 'Asset deleted successfully'
        ]);
    }
}
