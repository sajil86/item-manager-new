<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
    return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $uomOptions = ['Kg', 'Lt', 'Nos'];
    return view('items.create', compact('uomOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'item_name' => 'required|string|max:255',
        'tax_per' => 'required|numeric',
        'hsn_code' => 'required|string|max:50',
        'rate' => 'required|numeric',
        'uom' => 'required|in:Kg,Lt,Nos'
    ]);

    Item::create($validated);
    return redirect()->route('items.index')->with('success', 'Item created!');
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
   public function edit(Item $item)
{
    $uomOptions = ['Kg', 'Lt', 'Nos'];
    return view('items.edit', compact('item', 'uomOptions'));
}


    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Item $item)
{
    $validated = $request->validate([
        'item_name' => 'required|string|max:255',
        'tax_per' => 'required|numeric',
        'hsn_code' => 'required|string|max:50',
        'rate' => 'required|numeric',
        'uom' => 'required|in:Kg,Lt,Nos'
    ]);

    $item->update($validated);
    return redirect()->route('items.index')->with('success', 'Item updated!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Item $item)
{
    $item->delete();
    return redirect()->route('items.index')->with('success', 'Item deleted!');
}
}
