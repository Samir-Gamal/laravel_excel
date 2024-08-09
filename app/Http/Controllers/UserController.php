<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Imports\UsersImport2;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function import(Request $request)
    {

        Excel::import(new UsersImport, $request->file('file'));
        dd('imported successfully');
    }

    public function import2(Request $request)
    {
        $file = $request->file('file');
        $filePath = $file->store('files_excel');
        $data = Excel::toArray(new UsersImport2, $file);
        $columns = array_keys($data[0][0]);
        $db_fields = ['name', 'email', 'password'];
        $request->session()->put('file_excel_import', $filePath);
        return view('users.import_show', compact('db_fields', 'columns'));

    }

    public function store(Request $request)
    {
        $fields = $request->input('fields');
        $filePath = session('file_excel_import');
        $file = storage_path('app/' . $filePath);
        $data = Excel::toArray(new UsersImport2, $file)[0];
        foreach ($data as $row) {
            $data_insert = [];
            foreach ($fields as $key => $value) {
                $data_insert[$value] = $row[$key];
            }
            User::create($data_insert);
        }
        dd('saved successfully');


    }


}
