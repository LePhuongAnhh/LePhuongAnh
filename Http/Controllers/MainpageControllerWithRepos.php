<?php

namespace App\Http\Controllers;

use App\Repository\CateRepos;
use App\Repository\ElecRepos;
use App\Repository\MainpageRepos;
use Illuminate\Http\Request;

class MainpageControllerWithRepos extends Controller
{
    public function index()
    {
        $category = MainpageRepos::getAllCat();
        $product = MainpageRepos::getAllElec();
        return view('harvelElec.homepage',
            [
                'category'=>$category,
                'product' => $product,
            ]);
    }

    public function detail($Elec_id)
    {
        $category = MainpageRepos::getAllCat();
        $product = MainpageRepos::getElecByID($Elec_id);
        return view('harvelElec.pro_detail',
            [
                'category'=>$category,
                'product' => $product[0]
            ]
        );
    }

    public function search(Request $request)
    {
        $category = CateRepos::getAllCate();
        $search = $request->input('search')
            ;
        $product = MainpageRepos::getElecByKey($search);
        return view('harvelElec.search',
            [
                'category' => $category,
                'product' => $product,
                'search'=>$search
            ]);
    }

    public function select_category($Cate_id)
    {
        $product = ElecRepos::selectCate($Cate_id);
        $category = CateRepos::getAllCate();
        return view('harvelElec.search',
            [
                'product' => $product,
                'category'=>$category,
            ]);
    }

    public function feedback(){
        $category = CateRepos::getAllCate();
        return view('harvelElec.feedback',
            [
                'category'=>$category
            ]);
    }

    public function contact(){
        $category = CateRepos::getAllCate();
        return view('harvelElec.contactUs',
            [
                'category'=>$category
            ]);
    }

    public function intro(){
        $category = CateRepos::getAllCate();
        return view('harvelElec.introduction',
            [
                'category'=>$category
            ]);
    }

}
