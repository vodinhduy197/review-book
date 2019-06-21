<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePassword;
use App\Services\AccountService;
use Auth;

class ProfileController extends Controller
{
    // declare variable accountInterfaceRepository
    protected $account;

    // inject AccountInterfaceRepository in construct
    public function __construct(AccountService $account)
    {
        $this->account = $account;
    }

    // function get view profile
    public function index()
    {
        return view('admin.profile.profile');
    }

    // function change password
    public function changePassword(ChangePassword $request)
    {
        $idUser = Auth::guard('admin')->user()->id;
        try {
            $result = $this->account->changePasswordAdmin($idUser, $request);
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

        if ($result) {
            return response()->json(['success' => 'Change password Success!!']);
        } else {
            return response()->json(['errors' => $request->errors()->all()]);
        }
    }
}
