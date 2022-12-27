@extends('layouts.master')

@section('sample-comment') active @endsection

@section('page-route')
<div class="page-route">
  <div>Menu1 </div> / 
  <div>sub menu1</div> / 
  <div>sub sub title</div>
</div>
@endsection

@section('style')
<style >
.my-photo{
  background: #F0F3F4;
  width: 80px;
  height: 80px;
  border-radius: 50%;
}
.input-comment{
  display: flex;
  gap: 20px;
}

.input-box
{
  display: flex;
  flex-direction: column;
  gap: 10px;
  height: 100%;
  flex: 2;
}
textarea{
  border: 0px;
  overflow: hidden;
  resize: none;
  line-height: 20px;
  min-height: 80px;
  background-color: transparent;
}
textarea:focus-visible{
  border: 0px;
  outline: 0px;
}
.wapper-add{
  width: 700px;
  padding: 30px;
  background-color:#F7F9F9;
  border-radius: 8px;
}
</style>
@endsection

@section('page-content')
<div class="page-content">
  <div class="wapper-add">
    <div class="input-comment">
      <div class="my-photo"></div>
      <div class="input-box">
        <textarea class="textarea"></textarea>
      </div>
    </div>
    <div style="margin-top: 10px; text-align: right">
      <button type="button" class="btn btn-primary">Primary</button>
    </div>
  </div>
  <div class="list-comment"></div>
</div>
@endsection

@section('script')
<script>
  $(function(){
    var textarea = document.querySelector(".textarea");
    textarea.addEventListener("keyup", () => {
      console.log('key up');
      console.log(calcHeight(textarea.value))
      textarea.style.height = calcHeight(textarea.value) + "px";
    });
  })

  function calcHeight(value) {
    let numberOfLineBreaks = (value.match(/\n/g) || []).length;
    let newHeight = 30 + numberOfLineBreaks * 20 + 12 + 2;
    return newHeight;
  }
</script>
@endsection