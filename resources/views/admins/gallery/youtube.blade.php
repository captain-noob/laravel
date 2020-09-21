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
                                 <h4>ADD YOUTUBE VIDEO</h4>
                                 <br>
                                 @if($message=Session::get('message'))
                                  <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{$message}}</strong>
                                  
                                  </div>
                                  @endif
                                 <form action="youtube" method="POST">
                                 @csrf
                                    <div class="form-group" style="margin-top:15px">
                                       <input type="text" name="youtubelink" value="{{old('youtubelink')}}" class="form-control" placeholder="Enter the Youtube Link">
                                       @error('youtubelink')
                                       <p style="color:red">{{$errors->first("youtubelink")}}</p>
                                       @enderror
                                       <br>
                                  
                                       <div class="form-group">
                                          <label for="exampleFormControlInput1">Title</label>
                                          <input type="text" name="title" class="form-control" value="{{old('tite')}}" placeholder="Enter the title">
                                          @error('title')
                                          <p style="color:red">{{$errors->first("title")}}</p>
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
                  @foreach($data as $youtube)
                     <!-- image card  -->
                     <div class="col-md-4" style="margin-bottom:5px">
                        <div class="item ">
                           <div class="card item-card card-block">
                              <iframe class="card-img-top" src="{{$youtube->youtubelink}}" alt="Card image" style="width:100%;height:150px"></iframe>
                              <div class="card-body">
                                 <p class="card-title">{{$youtube->title}}</p>
                                 <center> <a href="/admins/youtube/{{$youtube->id}}/edit" class="btn btn-success" style="margin:11px">edit</a></center>
                                 <form action="/admins/youtube/{{$youtube->id}}" method="post">
                                 @csrf
                                 @method("DELETE")
                                 <center><button onclick="return confirm('are you sure');" class="btn btn-danger stretched-link">Delete</button></center>
                                 </form>

                              </div>
                           </div>
                        </div>
                     </div>
                             <!-- all image card end -->
                             @endforeach
                  </div>
                  <!-- image display end  -->
               </div>
         
            </div>
          
            <!-- END LABELS -->
         </div>
      </div>
   </div>
</div>
<!-- END MAIN CONTENT -->
@endsection