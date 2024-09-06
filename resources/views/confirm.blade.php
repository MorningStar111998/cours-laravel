@extends('test')
     
    @section('contenu')
        <br>
        <div class="container">
            <div class="row card text-white bg-dark">
                <h4 class="card-header">Merci {{$infos['nom']}}</h4>
                <div class="card-body">
                    <p class="card-text">Merci. Votre message a été transmis à l'administrateur du site. Vous recevrez une réponse rapidement à l'addresse {{$infos['email']}} .</p>
                </div>
            </div>
        </div>
    @endsection