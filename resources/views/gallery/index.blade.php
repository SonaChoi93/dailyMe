@extends('layouts.master')

@section('sample-gallery') active @endsection

@section('page-route')
<div class="page-route">
  <div>Menu1 </div> / 
  <div>sub menu1</div> / 
  <div>sub sub title</div>
</div>
@endsection

@section('style')
<style >
  .wrapper-gallery{
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }
  .gallery{
    width: 300px;
    height: 300px;
    background-color: #D2B4DE;
    border-radius: 4px;
  }
</style>
@endsection

@section('page-content')
<div class="page-content">
  <div class="wrapper-gallery w-100">
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
    <div class="gallery"></div>
  </div>
  
</div>
@endsection

@section('script')
<script>
  $(function(){
    // $('.page-content').scroll(function(event){

    // });
  })
</script>
@endsection