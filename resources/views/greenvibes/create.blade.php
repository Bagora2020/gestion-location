@extends('layout.app')

@section('content')
<H1>
    <marquee behavior="Alternate" direction="rigth" class="text-primary">Bienvenue à la page Green Vibes</marquee>
</H1>

<div class="card mb-3 card-center bg-gray shadow-lg p-2 w-23  col-lg-6 offset-lg-2 " style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/img/gora.jpg" class="card-img" alt="..." width="90" height="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Informations</h5>
        <p class="card-text">
            <ul>
                <li>
                    Nom: Amy 
                </li>
                <li>
                    Prenom: Tamba
                </li>
                <li>
                    Contact: 77 777 77 77
                </li>
                <li>
                    mail: green@green.com
                </li>
            </ul>
        </p>
        
      </div>
    </div>
  </div>
</div>


<div class="container mt-5">

    <div class="row">
        <div class="col mx-auto">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Ajouter Paiement
            </button>
        </div>
    </div>
</div>

<!-- 
<table class="table table-center col-lg-6 offset-lg-3 " >
  <thead>
    <tr width="15%">
      <th scope="col">#</th>
      <th scope="col">Mois</th>
      <th scope="col">Montant</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($grenVibes as $greenvibe)
    <tr>
      <th scope="row">{{$greenvibe->id }}</th>
      <td>{{$greenvibe->mois }}</td>
      <td>{{$greenvibe->montant }}</td>
      <td>
        <a href="{{ route('greenvibes.edit', $greenvibe->id) }}" class="btn btn-primary" data-toggle="modal" data-target="#modifier">Modifier

        </a>
        <a href="#" class="btn btn-danger">supprimer

        </a>
        <a href="#" class="btn btn-warning">Imprimer

        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('greenvibes.add')}}" method="post" class="col-lg-6 offset-lg-3 ">
                    @csrf
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Mois</label>
                        <select class="form-select" id="exampleSelect1" name="mois">
                            <option value="janvier">Janvier</option>
                            <option value="fevrier">Fevrie</option>
                            <option value="mars">Mars</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect2" class="form-label mt-4">Montant</label>
                        <select class="form-select" id="exampleSelect2" name="montant">
                            <option value="25000">25 000</option>
                        </select>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-success" type="submit"> Enregistrer</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div> -->

@endsection