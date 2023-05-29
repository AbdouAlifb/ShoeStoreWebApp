@extends('admin.adminlayout')

@section('content')

<br>
<br>
<br>
<br>
<style>
  .card {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 0 0 4px #88c8bc;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .card-img {
    height: 200px;
    object-fit: cover;
    border-radius: 4px 4px 0 0;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }

  .card-body {
    padding: 1.25rem;
  }
  .card-img img {
    height: 100%;
    width: auto;
    object-fit: cover;
  }
  .btn-block {
    border-radius: 0 0 4px 4px;
  }
</style>

<div class="container text-center">
  <div class="row d-flex justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-img">
          <img src="{{ asset('storage/images/shoe.jpg') }}" alt="Shoes" class="card-img-top">
        </div>
        <br>

        <div class="card-body">
        <a href="{{ route('shoes.index') }}" class="btn btn-primary btn-block">Shoes</a>


        </div>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-img">
          <img src="{{ asset('storage/images/users pic.png') }}" alt="Users" class="card-img-top">
        </div>
        <br>

        <div class="card-body">
          <a href="{{ route('users.index') }}" class="btn btn-primary btn-block">Users</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-img">
          <img src="{{ asset('storage/images/commande.png') }}" alt="Commande" class="card-img-top"  >
        </div>
        <br>
        <div class="card-body">
          <a href="{{ route('admin.commands.index') }}" class="btn btn-primary btn-block">Commande</a>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>

    <div class="col-md-4">
    <br>
    <br>
    <br>
      <div class="card">
        <div class="card-img">
          <img src="{{ asset('storage/images/statistics.jpg') }}" alt="Statistics" class="card-img-top">
        </div>
        <div class="card-body">
          <a href="{{ route('statistics.index') }}" class="btn btn-primary btn-block">Statistics</a>
        </div>
      </div>
      </div>
      <br>
    <br>
    <br>
      <div class="col-md-4">
      <br>
    <br>
    <br>
    
      <div class="card">
        <div class="card-img">
          <img src="{{ asset('storage/images/comment.png') }}" alt="Comments" class="card-img-top" >
        </div>
        <div class="card-body">
          <a href="{{ route('admin.comments') }}" class="btn btn-primary btn-block">Comments</a>
        </div>
      </div>
    </div>
  </div>
    
</div>


@endsection
