@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            @csrf {{--  permet de faire l'authenfication --}}
            <div class="form-group">
                <input type="text" name="title" placeholder="Titre">
            </div>
            <div class="">
                <button type="submit" class="">Rechcerche</button>
            </div>
        </form>
    </div>

@endsection
