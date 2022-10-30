<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('items.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        $request->validate([
            'title' => 'required', 
            'content' => 'required', 
            'user_id' => 'required', 
        ]);

        $item = new Item();
        $item->title = $request->input('title');
        $item->content = $request->input('content');
        $item->url = $request->input('url');
        $item->user_id = $request->input('user_id');
        $item->language = $request->input('language');
        $item->save();

        return redirect()->route('items.index')->with('flash_message', '登録が完了しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show', compact(('item')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact(('item')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $request->validate([
            'title' => 'required', 
            'content' => 'required', 
            'user_id' => 'required', 
        ]);
        
        $item->title = $request->input('title');
        $item->content = $request->input('content');
        $item->url = $request->input('url');
        $item->user_id = $request->input('user_id');
        $item->language = $request->input('language');
        $item->save();

        return redirect()->route('items.show', $item)->with('flash_message', '編集が完了しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('top')->with('flash_message', '削除が完了しました。');
    }
}
