@extends('layouts.master')

@section('page-route')
<div class="page-route">
  <div>Menu1 </div> / 
  <div>sub menu1</div> / 
  <div>sub sub title</div>
</div>
@endsection

@section('page-content')
<div class="page-content">
  <div> {{ $type }}</div>
</div>
@endsection