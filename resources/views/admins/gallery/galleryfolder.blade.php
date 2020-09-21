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
                          <h3 class="panel-title">{{$folderdata->folder}}</h3>
                          <!-- FOLDER NAME -->
                       </div>
                       <div class="panel-body">
                    <!-- form start  -->
        <div class="row">
           <div class="col-md-12 badge-dark">
              <div class="item ">
                 <div class="card item-card card-block">
                    <center>
                       <h4>UPLOAD IMAGE</h4>
                       @if($message=Session::get('message'))
                                  <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{$message}}</strong>
                                  
                                  </div>
                                  @endif
                       <br>
                       <form action="/admins/gallery/folder/{{$folderdata->id}}" method="POST" enctype="multipart/form-data">
                       @csrf
                          <div class="form-group" style="margin-top:15px">
                             <input type="file"  name="image" value="{{old('image')}}" class="form-control-file">
                             @error('image')
                           <p class="alert alert-danger alert-block">{{$errors->first("image")}}</p>
                          @enderror
                             <br>
                             <div class="form-group">
                                <label for="exampleFormControlInput1" >Title</label>
                                <input type="text" value="{{old('body')}}"  name="body" class="form-control"  placeholder="Enter the title"> 
                                @error('body')
                           <p class="alert alert-danger alert-block">{{$errors->first("body")}}</p>
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
        <div class="popup" id="popup-1">
                       <form action="/admins/gallery/folder" method="POST">
                          @csrf
                          <input type="text" name="folder">
                          <button  class="btn btn-success">Create</button>
                      </form>
                   </div>
        
        <div class="row">
        @foreach($galleries as $gallery)
           <!-- image card  -->
           <div class="col-md-4" style="margin-bottom:5px">
              <div class="item ">
                 <div class="card item-card card-block">
                    <img class="card-img-top" src="{{asset('image/gallery/'.$gallery->image)}}" alt="Card image" style="width:100%;height:150px">
                    <div class="card-body">
                       <p class="card-title">{{$gallery->body}}</p>
                       <form action="/admins/gallery/{{$gallery->id}}" method="post">
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