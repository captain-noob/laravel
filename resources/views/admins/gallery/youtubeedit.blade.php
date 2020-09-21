@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Youtube Gallery</h3>
      <div class="row">
         
         <div class="col-md-12">
            <!-- LABELS -->
            <div class="panel">
               <div class="panel-heading">
                  <!-- FOLDER NAME -->
               </div>
               <div class="panel-body">

               <!-- form start  -->
                  <div class="row">
                     <div class="col-md-12 badge-dark">
                        <div class="item ">
                           <div class="card item-card card-block">
                              <center>
                                 <h4>UPDATE YOUTUBE VIDEO</h4>
                                 <br>
                                 <form action="/admins/youtube/{{$data->id}}" method="POST">
                                 @csrf
                                 @method('PUT')
                                    <div class="form-group" style="margin-top:15px">
                                       <input type="text" name="youtubelink" value="{{$data->youtubelink}}" class="form-control" placeholder="Enter the Youtube Link">
                                       @error('youtubelink')
                                       <p class="alert alert-danger alert-block">{{$errors->first('youtubelink')}}</p>
                                       @enderror
                                 <br>
                                  
                                       <div class="form-group">
                                          <label for="exampleFormControlInput1">Title</label>
                                          <input type="text" name="title" class="form-control" value="{{$data->title}}"  placeholder="Enter the title">
                                          @error('title')
                                       <p class="alert alert-danger alert-block">{{$errors->first('title')}}</p>
                                       @enderror
                                         
                                       </div>
                                       <button class="btn btn-success" style="margin:11px">update</button>
                                    </div>
                                 </form>
                              </center>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endsection