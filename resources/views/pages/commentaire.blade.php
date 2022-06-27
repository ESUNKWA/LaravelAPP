@extends('layout.app', ['title' => 'commentaires', 'action' => 'Saisie et affichage des commentaires'])

@section('contenu')

    <form action="{{ Route('saisie_commentaire') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="commentaire" class="form-label">Commentaire</label>
            <textarea class="form-control @error('commentaire') is-invalid @enderror " name="commentaire" rows="3" autocomplete="off"></textarea>
            @error('commentaire')
                <span class="text-danger" >{{$errors->first()}}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

    <br>

    @if ( $commentaires->count() > 0 )



    @else
        <div class="alert alert-primary" role="alert">
            Aucun commentaire trouvé!
        </div>
    @endif

@endsection
