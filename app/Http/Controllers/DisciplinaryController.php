<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDisciplinaryFormRequest;
use App\Models\Disciplinary;
use Illuminate\Http\Request;

class DisciplinaryController extends Controller
{
    public function index(Request $request)

    {
        $search = $request->search;


         $disciplinarys = Disciplinary::where(function($query) use ($search){
            if($search){
                $query -> orWhere ('name_disciplinary', 'LIKE', "%{$search}");

             }
         })->get();

        return view ('disciplinarys.index', compact('disciplinarys'));
    }

    public function show($id)

    {
        //$user = User::where('id', $id) -> first ();
        if (!$disciplinary = Disciplinary::find($id))
            return redirect()-> route('disciplinarys.index');

        return view ('disciplinarys.show', compact('disciplinary'));
    }

    public function create()
    {
        return view('disciplinarys.create');
    }

    public function store(Request $request)
    {
        // dd($request->validated());
        
        $data = $request->all();

        Disciplinary::create($data);

        return redirect() -> route('disciplinarys.index');
    }

    public function edit($id)
    {
        if (!$disciplinary = Disciplinary::find($id)){
            return redirect()-> route('disciplinarys.index');
        }

        return view('disciplinarys.edit', compact('disciplinary'));
    }

    public function update(StoreUpdateDisciplinaryFormRequest $request, $id)
    {
        if (!$disciplinary = Disciplinary::find($id)){
            return redirect()-> route('disciplinarys.index');
        }
            
        $data = $request->validated();

        $disciplinary->update($data);
        
        return redirect()-> route('disciplinarys.index');
    }

    public function delete($id)
    {
        if (!$disciplinary = Disciplinary::find($id)){
            return redirect()-> route('disciplinarys.index');
        }

        $disciplinary ->delete();

        return redirect()-> route('disciplinarys.index');
    } 

}
