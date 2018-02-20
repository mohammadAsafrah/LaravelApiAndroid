<?php

namespace App\Http\Controllers;

use App\Accounts;
use Illuminate\Http\Request;


class AccountsController extends Controller
{

    public function index(Request $request)
    {
        return "welcome mohammad";
    }
    public function insert(Request $request)
    {
        $account = new Accounts();
        $account->name = $request->input("name");
       if($account->save())
       {
            return response()->json(['status'=>'success','Data'=>$account]);
       }
       else
       {
            return response()->json(['status'=>'faild','Data'=>$account]);
       }
    }

    public function getAll()
    {
        $account = Accounts::get();
        if($account !=null)
        {
            return response()->json(['status'=>'success','Data'=>$account]);
        }
        else
        {
            return response()->json(['status'=>'Failed','Data'=>$account]);
        }
    }
    public function getByID($id)
    {
        $account = Accounts::find($id);
        if($account !=null)
        {
            return response()->json(['status'=>'success','Data'=>$account]);
        }
        else
        {
            return response()->json(['status'=>'Failed','Data'=>$account]);
        }
    }
    public function update(Request $request,$id)
    {
        $account = Accounts::find($id);
        $account->name = $request->input("name");
           if($account->save())
           {
                return response()->json(['status'=>'success','Data'=>$account]);
           }
           else
           {
                return response()->json(['status'=>'faild','Data'=>$account]);
           }
    }
}
