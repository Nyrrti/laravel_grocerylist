<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of all items.
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index() 
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new item.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created item in storage.
     */
    public function store(StoreItemRequest $request)
    {
        // Validation requirements(StoreItemRequest)
        $validated = $request->validated();

        $item = new Item();

        $item->name = $validated['name'];
        $item->description = $validated['description'];
        $item->save();

        return redirect()->route('items.index');
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
    public function edit(int $id)
    {
        $item = Item::find($id);

        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item) 
    {
        $validated = $request->validated();
        $item->name = $validated['name'];
        $item->description = $validated['description'];
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified item from storage.
     * 
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Item $item) 
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
