@extends('layouts.app')
@section ('title','Habibie Shop')

@section('navbar')
@parent 
@endsection

@section ('content')
<div class="row">
    <h2>TopUp Games</h1>
  </div>
  <br>
<div class="row">
<div class=" col-6 col-md-3">
  <div class="card">
    <img src="img/fifa.jpg" class="card-img-top" alt="..." />
    <div class="card-body">
      <h5 class="center">FIFA 24</h5>
    </div>
  </div>
</div>

<div class="col-6 col-md-3">
  <div class="card">
    <img src="img/coc.jpg" class="card-img-top" alt="..." />
    <div class="card-body">
      <h5 class="center">Clash Of Clans</h5>
    </div>
  </div>
</div>

<div class="col-6 col-md-3">
  <div class="card">
    <img src="img/cod.jpg" class="card-img-top" alt="..." />
    <div class="card-body">
      <h5 class="center">Call Of Duty</h5>
    </div>
  </div>
</div>

<div class="col-6 col-md-3">
  <div class="card">
    <img src="img/ml.jpg" class="card-img-top" alt="..." />
    <div class="card-body">
      <h5 class="center">Mobile Legend</h5>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="col-6 col-md-3">
  <div class="card">
    <img src="img/bs.jpg" class="card-img-top" alt="..." />
    <div class="card-body">
      <h5 class="center">Brawl Stars</h5>
    </div>
  </div>
</div>

<div class="col-6 col-md-3">
  <div class="card">
    <img src="img/valo.jpg" class="card-img-top" alt="..." />
    <div class="card-body">
      <h5 class="center">Valorant</h5>
    </div>
  </div>
</div>
</div>


@endsection