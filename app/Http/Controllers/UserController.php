<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        //parsing data
        $nama = "Hilga Rizky Nugraha";
        $titles = ["staff","kasir"];
        $usia = 20;
        $data = [
            "myName" => $nama,
            "usia"   => $usia,
            "titles" => $titles
        ];
        return view('user.index', $data);
    }

    public Function create()
    {
        // 127.0.0.1:8000/user/create
        return "Ini Adalah tampilan create user";

    }

    public Function show()
    {
        // 127.0.0.1:8000/user/show
        return "Ini Adalah tampilan show user";

    }

    public Function edit()
    {
        // 127.0.0.1:8000/user/edit
        return "Ini Adalah tampilan edit user";

    }

    public Function update()
    {
        // 127.0.0.1:8000/user/update
        return "Ini Adalah tampilan update user";

    }

    public Function delete()
    {
        // 127.0.0.1:8000/user/delete
        return "Ini Adalah tampilan delete user";

    }
}