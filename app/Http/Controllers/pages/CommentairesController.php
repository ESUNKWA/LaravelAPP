<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Commentaires;
use App\Models\rc;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{
    protected $idPost = 0;

    /**
     * Create a new controller instance.
     *
     * @param  $idPost
     * @return void
     */

    public function __construct($idPost){
        $this->idPost = $idPost;
    }

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
        $input = $request->all();

        $errors = [
            'commentaire' => 'required|min:5',
        ];
        $erreurs = [
            'commentaire.required' => 'Veuillez saisir un commentaire',
            'commentaire.min' => 'Le commentaire doit avoir au moins 5 caractètes',
        ];
        $request->validate($errors, $erreurs);

        dd($this->idPost);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show($idPost)
    {
        $this->idPost = $idPost;

        $commentairesByPost = Commentaires::where('id', $this->idPost)->get();

        return view('pages/commentaire', ['commentaires' => $commentairesByPost]);
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
