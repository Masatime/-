<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderby('created_at', 'DESC')->paginate(5);  
     
        return view ('cross-open/cross-open',['items' => $items]);
    }
    
    public function all()
    {
        $items = Item::latest()->get();  
     
        return view ('cross-open/cross-osirase',['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cross-open/cross-toukou');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 新しい Item を作成
        $item = new Item;
        // フォームから送られてきたデータをそれぞれ代入
        $item->title = $request->title;
        $item->body = $request->body;
        $item->save();
        // indexページへ遷移
        return redirect('/osirase/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    public function ally()
    {
        $items = Item::latest()->get();  
     
        return view ('cross-open/cross-sakuzyo',['items' => $items]);
    }
    
    public function destroy(Item $item, Request $request)
    {
        $id=$request->id;
        $item = Item::find($id);
        $item->delete();
        return redirect('/osirase/all');
    }
}
