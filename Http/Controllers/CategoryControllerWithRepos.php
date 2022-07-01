<?php

namespace App\Http\Controllers;

use App\Repository\CateRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryControllerWithRepos extends Controller
{
    public function index()
    {
        $category = CateRepos::getAllCate();
        return view('electronics.category.index',
            [
                'category' => $category,
            ]);
    }

    public function show($Cate_id)
    {
        $category = CateRepos::getCateById($Cate_id);

        return view('electronics.category.show',
            [
                'category' => $category[0]
            ]
        );
    }

    public function create()
    {
        return view(
            'electronics.category.new',
            ["category" => (object)[
                'Cate_id' => '',
                'Cate_Name' => '',
                'Cate_Description' => '',
            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidateCate($request)->validate();

        $category = (object)[
            'Cate_Name' => $request->input('Cate_Name'),
            'Cate_Description' => $request->input('Cate_Description'),
        ];

        $newCate_id = CateRepos::insert($category);
        return redirect()
            ->action('CategoryControllerWithRepos@index')
            ->with('msg', 'New book with id: '.$newCate_id.' has been inserted');
    }

    public function edit($Cate_id)
    {
        $category = CateRepos::getCateById($Cate_id); //this is always an array

        return view(
            'electronics.category.update',
            ["category" => $category[0]]);
    }

    public function update(Request $request, $Cate_id)
    {
        if ($Cate_id != $request->input('Cate_id')) {
            return redirect()->action('CategoryControllerWithRepos@index');
        }

        $this->formValidateCate($request)->validate(); //shortcut

        $category = (object)[
            'Cate_id' => $request->input('Cate_id'),
            'Cate_Name' => $request->input('Cate_Name'),
            'Cate_Description' => $request->input('Cate_Description'),
        ];
        CateRepos::update($category);

        return redirect()->action('CategoryControllerWithRepos@index');

    }

    public function confirm($Cate_id){
        $category = CateRepos::getCateById($Cate_id); //this is always an array

        return view('electronics.category.confirm',
            [
                'category' => $category[0]
            ]
        );
    }

    public function destroy(Request $request, $Cate_id)
    {


        CateRepos::delete($Cate_id);

        return redirect()->action('CategoryControllerWithRepos@index');
    }

    private function formValidateCate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'Cate_Name' => ['required'],
                'Cate_Description' => ['required'],
            ]
        );
    }
}
