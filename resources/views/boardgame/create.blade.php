<x-layout>
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center text-black display-4 text-shadow">
                    Inserisci i dati dei giochi
                </h1>
                @if (@session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form action="{{ route('boardgame.library') }}" method="POST"
                    class="rounded shadow p-5 bg-secondary-subtle text-center" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del gioco:</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo di gioco:</label>
                        <input class="form-control" type="text" name="type">
                    </div>
                    <div class="mb-3">
                        <label for="players" class="form-label">Numero di giocatori:</label>
                        <input class="form-control" type="number" name="players">
                    </div>

                    <div class="mb-3">
                        <label for="instructor" class="form-label">Istruttore:</label>
                        <input class="form-control" type="text" name="instructor">
                    </div>


                    <div class="mb-3">
                        <label for="box" class="form-label">Immagine:</label>
                        <input class="form-control" type="file" name="box">
                    </div>

                    <div class="text-center ">
                        <button class="btn btn-primary">
                            Inserisci nel database
                        </button>
                    </div>
                    {{-- <label for=""></label>
                    <input type="text" name="">
                    <button type="submit"></button> --}}
                </form>
            </div>
        </div>

    </div>




</x-layout>
