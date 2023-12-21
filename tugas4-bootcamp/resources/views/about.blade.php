@extends('layouts.app')
@section ('title','Habibie Shop')
@section ('acAbout', 'active')

@section('navbar')
@parent 
@endsection

@section ('content')
<h4 class="text-center">ABOUT ME</h4>
<div class="row mt-4 ">
<div class="col col-md-3">
    <img class="img-thumbnail" src="img/nopal2.jpeg"width="300px" alt="">

</div>
<div class="col col-md-6">
   <table class="table">
    <tr>
        <td>Muhammad Nouval Habibie</td>
    </tr>
    <tr>
        <td>Padang, 18 Februari 2004</td>
    </tr>
    <tr>
        <td>2211521020</td>
    </tr>
    <tr>
        <td>Departemen Sistem Informasi Unand 22</td>
    </tr>
   </table>
</div>
</div>

@endsection