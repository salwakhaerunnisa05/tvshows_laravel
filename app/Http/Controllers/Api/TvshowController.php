<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TvShow;
use Illuminate\Http\Request;

class TvShowController extends Controller
{
    // Ambil semua data (GET /api/tv-shows)
    public function index()
    {
        $shows = TvShow::all();

        return response()->json([
            'status' => 'success',
            'data' => $shows,
        ]);
    }

    // Tambah data baru dari Postman (POST /api/tv-shows)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'channel' => 'required',
            'category' => 'required',
            'image_url',
            'description' => 'required',
            
        ]);

        $show = TvShow::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $show,
        ], 201);
    }

    // Lihat 1 data (GET /api/tv-shows/{id})
    public function show($id)
    {
        $show = TvShow::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data' => $show,
        ]);
    }

    // Ubah data (PUT /api/tv-shows/{id})
    public function update(Request $request, $id)
    {
        $show = TvShow::findOrFail($id);
        $show->update($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $show,
        ]);
    }

    // Hapus data (DELETE /api/tv-shows/{id})
    public function destroy($id)
    {
        $show = TvShow::findOrFail($id);
        $show->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil dihapus',
        ]);
    }
}