<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use App\Models\XemPhim;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        $list_phim_1 = Phim::where('trang_thai', 1)->get();
        $list_phim_2 = Phim::where('trang_thai', 2)->get();
        $list_phim_3 = Phim::where('trang_thai', 3)->get();
        $list_phim_4 = Phim::where('trang_thai', 4)->get();
        return view('clients.page.homepage', compact('list_phim_1', 'list_phim_2', 'list_phim_3', 'list_phim_4'));
    }

    public function chiTietPhim($slug) {
        $parts = explode('-', $slug);
        preg_match('/\d+$/', $slug, $matches);
        $id = $matches[0];
        $detail_phim = Phim::where('id' , $id)->first();
        $list_phim_2 = Phim::where('trang_thai', 2)->get();
        return view('clients.page.chi_tiet_phim', compact('detail_phim', 'list_phim_2'));
    }

    public function trailer($slug) {
        $xem_phim = Phim::where('slug_ten_phim', $slug)->first();
        $list_phim_2 = Phim::where('trang_thai', 3)->get();
        return view('clients.page.trailer', compact('xem_phim', 'list_phim_2'));
    }

    public function phim($slug) {
       //dd('day la phim: ' .$move->id );
        //dd($id_phim);
        $xem_phim = Phim::where('slug_ten_phim', $slug)->first();
        $list_phim_2 = Phim::where('trang_thai', 2)->get();
        //dd($xem_phim->id);
        return view('clients.page.xem_phim', compact('xem_phim', 'list_phim_2'));
    }

    public function phimMoi() {
        $list_phim_moi = Phim::where('trang_thai', 5)->get();
        $list_phim_moi_noi_bat = Phim::where('trang_thai', 2)->get();
        return view('clients.page.phim_moi', compact('list_phim_moi_noi_bat', 'list_phim_moi'));
    }

    public function actionTimKiem(Request $request) {
        $search = $request->search;
        $list_phim_moi = Phim::where('ten_phim', 'like', '%' . $search . '%')->get();

        return view('clients.page.phim_moi', compact('list_phim_moi'));
    }

    public function tinTuc() {
        return view('clients.page.tin_tuc');
    }
}
