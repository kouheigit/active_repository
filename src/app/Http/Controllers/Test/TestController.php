<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestValidationRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*
     *   public function index()
    {
        $testform = Testform::all();
        return view('admin.testform',compact('testform'));
    }
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
