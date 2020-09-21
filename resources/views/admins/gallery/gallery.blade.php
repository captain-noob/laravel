@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Gallery</h3>
      <div class="row">
         <div class="col-md-3">
            <!-- FOLDERS -->
            <div class="panel">
               <div class="panel-heading">
                  <h3 class="panel-title">Folders</h3>
               </div>
               <div class="panel-body ">
                  <!-- start -->
                  <ul class="nav">
                  @if($message=Session::get('message'))
                   <div class="alert alert-success alert-block">
                         <button type="button" class="close" data-dismiss="alert">x</button>
                               <strong>{{$message}}</strong>
                                  
                         </div>
                   @endif
                  <form action="/admins/gallery/folder" method="POST">
                  @csrf
                  <input type="text" name="folder" value="{{old('folder')}}">
                  @error('folder')
                  <p class="alert alert-danger alert-block">{{$errors->first('folder')}}</p>
                  @enderror
             
                  <button  class="btn btn-success">Create</button>
              </form>
                 
                     <!--  list folders in db -->
                     
                     <li><a href="/admins/gallery/folder/{{$a2folder->id}}" class=""><span></span>A2 Winners</a></li>
                     <li><a href="/admins/gallery/folder/{{$b2folder->id}}" class=""><span></span>B2  Winners</a></li>
                     <li><a href="/admins/gallery/folder/{{$c2folder->id}}" class=""><span> </span>C2 Winners</a></li>
                  
                     @foreach($data as $folder)
                     <li><a href="/admins/gallery/folder/{{$folder->id}}" class=""><span>{{$folder->folder}}</span></a></li>
                     <form action="/admins/gallery/folder/{{$folder->id}}" method="POST">
                     @csrf
                     @method('DELETE')
                      <button type="submit" >delete</button>
                      </form>
                     @endforeach

                     <!-- end loop -->
                     <center><button onclick="popup()"  class="btn btn-primary "  onclick=" "data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <span>Add Folder</span></button></center>
                  </ul>
                  <!-- end -->
               </div>
            </div>
            <!-- END FOLDERS -->
            <!-- END INPUT SIZING -->
         </div>
         <div class="col-md-9">
            <!-- LABELS -->
            <div class="panel">
               <div class="panel-heading">
                  <!-- FOLDER NAME -->
               </div>
               <div class="panel-body">
<!-- image display    -->
<br>
<div class="popup" id="popup-1">

             
           </div>
<!-- END MAIN CONTENT -->  
</div>
<!-- end -->
@endsection