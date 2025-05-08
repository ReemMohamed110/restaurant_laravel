<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Categories;
use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\UpdateMenuItemRequest;
use App\Models\Employee;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = MenuItem::with('category')->orderBy('category_id')->latest()->paginate(3);
        $categories= Categories::all();
        $chief=Employee::where('role', 'chief')->get();
        return view('home')->with(['items'=> $items,'categories'=>$categories,'chiefs'=>$chief]);
    }
    public function allItems()
    {
        $items = MenuItem::with('category')->orderBy('category_id')->latest()->paginate(20);
        return view('admin.pages.allItems')->with(['items'=> $items]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuItem $menuItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuItem $menuItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuItemRequest $request, MenuItem $menuItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuItem $menuItem)
    {
        //
    }
}
