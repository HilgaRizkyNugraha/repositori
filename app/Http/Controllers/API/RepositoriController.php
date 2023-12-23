<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Repositori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RepositoryController extends Controller
{
    public function index()
    {
        $repositories = Repositori::all();
        return response()->json([
            "repositories" => $repositories
        ]);
    }

    public function store(Request $request) {
        $rules = [
            "title" => ['required'],
            "description" => ['required'],
            "year"  => ['required', 'numeric'],
            "author"  => ['required'],
        ];
        
        $validated = Validator::make($request->all(), $rules);

        if($validated->fails()) {
            return response()->json([
                "errors" => $validated->errors()
            ], 401);
        }
        $new = Repositori::create($request->all());
        return response()->json([
            "message" => "Repositori created successfully",
        ]);
    }

    public function show($id) {
        $repositori = Repositori::find($id);
        return response()->json([
            "repositori" => $repositori
        ]);
    }


    public function destroy($id) {
        $repositori = Repositori::find($id);
        $repositori->delete();
        return response()->json([
            "message" => "Repositori deleted successfully"
        ]);
    }
    
    public function update(Request $request) {
        $rules = [
            "title" => ['required'],
            "description" => ['required'],
            "year"  => ['required', 'numeric'],
            "author"  => ['required'],
        ];

        $validated = Validator::make($request->all(), $rules);
        if($validated->fails()) {
            return response()->json([
                "errors" => $validated->errors()
            ], 401);
        }
        Repositori::where('id', $request->id)->update($request->all());
        return response()->json([
            "message" => "Repositori updated successfully",
   ]);
    }

}