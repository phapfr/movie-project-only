<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use Illuminate\Http\Request;

class PhimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.Phim.index');
    }

    public function store(Request $request) {
        $phim = $request->all();
        Phim::create($phim);

        return response()->json([
            'status' => true,
            'message' => 'Thêm phim mới thành công',
        ]);
    }

    public function getData() {
        $data = Phim::orderByDESC('created_at')->get();

        return response()->json([
            'phim' => $data,
        ]);
    }

    // xoá phim
    public function destroy(Request $request) {
        Phim::where('id', $request->id)->first()->delete();

        return response()->json([
            'status' => true,
        ]);
    }

    // update phim
    public function update(Request $request) {
        $data = $request->all();
        $phim = Phim::where('id', $request->id)->first();
        $phim->update($data);

        return response()->json([
            'status'    => true,
        ]);
    }
}
