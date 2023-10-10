<?php

namespace App\Http\Controllers\Menus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\menus\MenusService;

class MenusController extends Controller
{
    protected $menuService;

    public function __construct(MenusService $menuService)
    {
        $this->menuService = $menuService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu/formmenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->menuService->createMenu($request);

            return redirect()->route('create_menus.create')->with('success', 'Menu cadastrado com sucesso!');
            
        } catch (\Throwable $th) {
            return redirect()->route('create_menus.create')->with('error', 'Erro ao cadastrar o menu!');
        }
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
