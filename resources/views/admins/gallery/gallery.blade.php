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
            <div class="panel" style="min-height:450px;">
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

                  <modal class="modal" id="myModal">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                                <h3 class="modal-title text-center" style="font-weight:800;color:black;">Add Folder</h3>
                                <button class="close" data-dismiss="modal">&times;</button>
                           </div>
                           <div class="row">
                              <form action="/admins/gallery/folder" method="POST">
                                @csrf
                                <div class="col-lg-6" style="margin:20px 150px 0 150px !important;">
                                    <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Enter folder name" name="folder" value="{{old('folder')}}">
                                          @error('folder')
                                             <p class="alert alert-danger alert-block">{{$errors->first('folder')}}</p>
                                          @enderror
                                          <button  class="btn btn-success" style="margin:20px 100px 0 100px !important;">Create</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="modal-footer">
                             <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                           </div>
                        </div>
                     </div>
                  </modal>
                 
                     <!--  list folders in db -->
                     
                     <li><a href="/admins/gallery/folder/{{$a2folder->id}}" class=""><span></span><i class="fa fa-folder-open"></i> A2 Winners</a></li>
                     <li><a href="/admins/gallery/folder/{{$b2folder->id}}" class=""><span></span><i class="fa fa-folder-open"></i> B2  Winners</a></li>
                     <li><a href="/admins/gallery/folder/{{$c2folder->id}}" class=""><span> </span><i class="fa fa-folder-open"></i> C2 Winners</a></li>
                  
                     @foreach($data as $folder)
                     <li><a href="/admins/gallery/folder/{{$folder->id}}" class=""><span><i class="fa fa-folder-open"></i> {{$folder->folder}}</span></a></li>
                     <form action="/admins/gallery/folder/{{$folder->id}}" method="POST">
                     @csrf
                     @method('DELETE')
                      <button type="submit" class="btn btn-danger" style="margin-left:15px;">Delete <i class="fa fa-trash"></i></button>
                      </form>
                     @endforeach

                     <!-- end loop -->
                     <center><button onclick="popup()"  class="btn btn-primary" style="margin-left:-35px;margin-top:15px;"  onclick=" "data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <span>Add Folder</span></button></center>
                  </ul>
                  <!-- end -->
               </div>
            </div>
            <!-- END FOLDERS -->
            <!-- END INPUT SIZING -->
         </div>
         <div class="col-md-9">
            <!-- LABELS -->
            <div class="panel" style="min-height:450px;">
               <div class="panel-heading">
                  <!-- FOLDER NAME -->
                  <p class="text-center" style="padding-top:150px;"><i class="fa fa-folder-open"></i>  Please select a folder</p>
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