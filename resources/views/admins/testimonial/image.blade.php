@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Testimonial Galllery</h3>
      <div class="row">
         <div class="col-md-12">
            <!-- LABELS -->
            <div class="panel">
               <div class="panel-heading">
               </div>
               <div class="panel-body">

            <!-- form start  -->
<div class="row">
   <div class="col-md-12 badge-dark">
      <div class="item ">
         <div class="card item-card card-block">
            <center>
               <h4>UPLOAD IMAGE</h4>
               <br>
               @if($message=Session::get('message'))
                   <div class="alert alert-success alert-block">
                         <button type="button" class="close" data-dismiss="alert">x</button>
                              <strong>{{$message}}</strong>
                                  
                         </div>
                @endif
               <form action="/admins/testimonial/gallery" method="POST" enctype="multipart/form-data">
               @csrf
                  <div class="form-group" style="margin-top:15px">
                     <input type="file"  name="image" value="{{old('image')}}" class="form-control-file">
                     @error('image')
                   <p class="alert alert-danger alert-block">{{$errors->first("image")}}</p>
                  @enderror
                     <br>
                     <div class="form-group">
                        <label for="exampleFormControlInput1" >Name</label>
                        <input type="text" value="{{old('name')}}"  name="name" class="form-control"  placeholder="Enter the Name">
                        @error('name')
                        <p class="alert alert-danger alert-block">{{$errors->first("name")}}</p>
                       @enderror
                       <label for="exampleFormControlInput1" >designation</label>
                        <input type="text" value="{{old('designation')}}"  name="designation" class="form-control"  placeholder="Enter the Designation">
                        @error('designation')
                   <p class="alert alert-danger alert-block">{{$errors->first("designation")}}</p>
                   @enderror
                        <label for="exampleFormControlInput1" >Message</label>
                        <textarea type="textarea"  name="message" style="height:200px;width:100%" > {{old('message')}}</textarea>
                   @error('message')
                   <p class="alert alert-danger alert-block">{{$errors->first("message")}}</p>
                   @enderror
                     </div>
                     <button class="btn btn-success" style="margin:11px">Upload</button>
                  </div>
               </form>
            </center>
         </div>
      </div>
   </div>
</div>
<hr>
<!-- form end -->
<!-- image display    -->
<br>

<div class="row">
@foreach($data as $gallery)
   <!-- image card  -->
   <div class="col-md-4" style="margin-bottom:5px">
      <div class="item ">
         <div class="card item-card card-block">
            <img class="card-img-top" src="{{asset('image/testimonial/'.$gallery->image)}}" alt="Card image" style="width:100%;height:150px">
            <h2>{{$gallery->name}}</h2>
            <h4>{{$gallery->designation}}</h4>
            <div class="card-body">
               <p class="card-title">{{$gallery->body}}</p>
               <form action="/admins/testimonial/gallery/{{$gallery->id}}" method="post">
                                 @csrf
                                 @method("DELETE")
                                 <center><button onclick="return confirm('are you sure');" class="btn btn-danger stretched-link">Delete</button></center>
                                 </form>
            </div>
         </div>
      </div>
   </div>
<!-- END MAIN CONTENT -->  
@endforeach
</div>
<!-- end -->
@endsection