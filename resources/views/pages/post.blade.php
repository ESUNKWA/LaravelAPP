@extends('layout.app', ['title' => 'Poste','action' => 'Saisie et affichage des posts'])

@section('contenu')

    <form action="{{ Route('saisie_poste') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="libelle" class="form-label">Libellé</label>
            <input type="text" class="form-control @error('libelle') is-invalid @enderror" autocomplete="off" name="libelle">
            {{-- Affichage erreur de validation --}}
            @error('libelle')
                <span class="text-danger" >{{ $errors->first() }}</span>
            @enderror
            {{-- Affichage erreur de validation --}}
        </div>
        <div class="mb-3">
            <label for="etat" class="form-label" >Etat du post</label>
            <select class="form-select" name="etat" aria-label="--Selection--">
                <option value="1">Actif</option>
                <option value="2">Inactif</option>
              </select>
              {{-- Affichage erreur de validation --}}
              @error('etat')
                <span class="text-danger" >{{ $errors->first() }}</span>
              @enderror
              {{-- Affichage erreur de validation --}}
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea class="form-control" name="desc" rows="3" autocomplete="off"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

    <br>

    {{-- Affichage des posts --}}
    @if ($listPosts->count() > 0)

            <div class="row">

                @foreach ($listPosts as $post )

                    <div class="col-lg-4 mb-5">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">{{ $post->r_libelle }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Post {{ $post->id }}</h6>
                            <p class="card-text">{{ $post->r_description }}</p>

                            @if ($post->r_etat === 1)
                                <span class="badge text-bg-success">Actif</span>
                            @else
                            <span class="badge text-bg-danger">Inactif</span>

                            @endif
                            <a href="{{ Route('commentaires', ['idPost' => $post->id]) }}" class="card-link" title="de {{ $post->r_libelle}}" >Voir les commentaires</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
    @else

        <div class="alert alert-primary" role="alert">
            Aucun post trouvé!
        </div>

    @endif

@endsection
