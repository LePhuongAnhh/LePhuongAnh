<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminControllerWithRepos extends Controller
{
    public function index()
    {
        $admin = AdminRepos::getAllAdmin();
        return view('electronics.admin.index',
            [
                'admin' => $admin,
            ]);
    }

    public function show($Ad_id)
    {

        $admin = AdminRepos::getAdminById($Ad_id);
        return view('electronics.admin.show',
            [
                'admin' => $admin[0]
            ]
        );
    }


    public function store(Request $request)
    {
        $this->formValidateAd($request)->validate();

        $admin = (object)[
            'Ad_Fullname' => $request->input('Ad_Fullname'),
            'Ad_Username' => $request->input('Ad_Username'),
            'Ad_password' => $request->input('Ad_password'),
            'Ad_Email' => $request->input('Ad_Email'),
            'Ad_DoB' => $request->input('Ad_DoB'),

        ];

        $newAd_Id = AdminRepos::insert($admin);
        return redirect()
            ->action('AdminControllerWithRepos@index')
            ->with('msg', 'New book with id: ' . $newAd_Id . ' has been inserted');
    }

    public function edit($Ad_id)
    {
        $admin = AdminRepos::getAdminById($Ad_id); //this is always an array


        return view(
            'electronics.admin.update',
            ["admin" => $admin[0]]);
    }

    public function update(Request $request, $Ad_id)
    {
        if ($Ad_id != $request->input('Ad_id')) {
            return redirect()->action('AdminControllerWithRepos@index');
        }

        $this->formValidateAd($request)->validate(); //shortcut

        $admin = (object)[
            'Ad_id' => $request->input('Ad_id'),
            'Ad_Fullname' => $request->input('Ad_Fullname'),
            'Ad_Username' => $request->input('Ad_Username'),
            'Ad_Email' => $request->input('Ad_Email'),
            'Ad_DoB' => $request->input('Ad_DoB'),
        ];
        AdminRepos::update($admin);
        return redirect()->action('AdminControllerWithRepos@index');
    }

    public function confirm($Ad_id)
    {
        $admin = AdminRepos::getAdminById($Ad_id); //this is always an array

        return view('electronics.admin.confirm',
            [
                'admin' => $admin[0]
            ]
        );
    }

    public function destroy(Request $request, $Ad_id)
    {
        if ($request->input('Ad_id') != $Ad_id) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminSessionController@index');
        }

        AdminRepos::delete($Ad_id);

        return redirect()->action('AdminControllerWithRepos@index');
    }

    private function formValidateAd(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'Ad_Fullname' => ['required'],
                'Ad_Email' => ['required', 'email'],
                'Ad_DoB' => ['required', 'date'],
                'Ad_password' => ['required',
                    function ($attribute, $value, $fail) use ($request) {
                        $username = $request->input('Ad_Username');
//                      $password = $request->input('Ad_password');
                        $account = AdminRepos::getAllAdmin();
                        $n=0;
                        for ($i = 0; $i < count($account); $i++) {
                            if ($username == $account[$i]->Ad_Username) {
                                $value = sha1($request->input('Ad_password'));
                                if ($value != $account[$i]->Ad_password) {
                                    $n++;
                                    break;
                                }
                            }
                        }
                        if($n!=0)
                        {
                            $fail('Password is incorrect');
                        }
                    }],
            ]
        );
    }


}
