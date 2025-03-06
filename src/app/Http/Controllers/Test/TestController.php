<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestValidationRequest;
use Illuminate\Http\Request;
use App\Models\Thread;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //データ一覧を表示する
        return view('test.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(TestValidationRequest $request)
    {
        return view('test.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestValidationRequest $request)
    {

        $validated = $request->validated();
        $title = $request->input('title');
        $name = $request->input('name');
        $comment = $request->input('comment');
        $fileName = null;

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'),$fileName);
        }
        $insert_list = [$title,$name,$comment, $fileName];

        /*
         *    //Bm_list
        for($i=0; $i<14; $i++){
            if($item[$i]==!null&&$quantity[$i]=!null&&$unit[$i]=!null&&$price[$i]=!null&&$sum[$i]=!null) {
                $taxation_check = 0;
                if (isset($taxation[$i])) {
                    $taxation_check = 1;
                }
                $inset_list = [
                    //Bm_list配列出ない値
                    'year' => $year,
                    'number' => $number,
                    //Bm_list配列の値
                    'item' => $item[$i],
                    'quantity' => $quantity[$i],
                    'unit' => $unit[$i],
                    'price' => $price[$i],
                    'sum' => $sum[$i],
                    'taxation' => $taxation_check,
                    'created_at' => new Carbon('Asia/Tokyo'),
                ];
                Billingmanagement_list::insert($inset_list);
         */
        //データベースに収納する処理を追加する
        return redirect('test');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
