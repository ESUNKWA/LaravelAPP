<?php

namespace App\Http\Controllers\pages;

use App\Models\rc;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PosteController extends Controller
{

    protected $a = 2;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPosts = Post::all();

        return view('pages/post', ['listPosts' => $listPosts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listPosts = Post::all();

        return view('pages/post', ['listPosts' => $listPosts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Récupération des données
        $inputs = $request->all();

        //Validation du données récues
        $request->validate(
            [
                'libelle' => 'required|min:5',
                'etat' => 'required'
            ],
            [
                'libelle.required' => 'Le libellé est réquis',
                'libelle.min' => 'La taille du libelle doit être au moins de 5 caractères',
                'etat.required' => 'Selectionner l\'état du post'
            ]
        );

        try {
            //Insertion des données dans la bd
            $insertion = Post::create([
                'r_libelle' => $inputs['libelle'],
                'r_etat' => $inputs['etat'],
                'r_description' => $inputs['desc'],
            ]);

           return back();

        } catch (\Throwable $th) {
            $errors = $th->getMessage();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show(rc $rc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit(rc $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rc $rc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy(rc $rc)
    {
        //
    }
}
