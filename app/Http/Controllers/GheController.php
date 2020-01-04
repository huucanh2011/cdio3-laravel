<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ghe;

class GheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'cot' => 'required|max:15',
                'hang' => 'required',
                'gia' => 'required',
                'idrap' => 'required'
            ],
            [
                'cot.required' => 'Bạn chưa nhập cột',
                'cot.max' => 'Cột không được quá :max',
                'hang.required' => 'Bạn chưa nhập hàng',
                'gia.required' => 'Bạn chưa nhập giá',
                'idrap.required' => 'Bạn chưa chọn Rạp'
            ]
        );
        $ghe = new Ghe;
        $ghe->Cot = $request->cot;
        $ghe->Hang = $request->hang;
        $ghe->Gia = $request->gia;
        $ghe->idRap = $request->idrap;
        $ghe->save();

        return back()->with(['thongbao1'=> 'Thêm thành công','type'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ghe $ghe)
    {
        $ghe->delete();
        return back()->with(["thongbao1"=>'Xóa thành công','type'=>"success"]);
    }
}
