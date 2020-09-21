
@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Youtube</h3>
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
                                 <h4>ADD YOUTUBE VIDEO</h4>
                                 @if($message=Session::get('message'))
                                  <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{$message}}</strong>
                                  
                                  </div>
                                  @endif
                                 <br>
                                 <form action="/admins/testimonial/youtube" method="POST">
                                 @csrf
                                    <div class="form-group" style="margin-top:15px">
                                       <input type="text" name="youtubelink" value="" class="form-control" placeholder="Enter the Youtube Link">
                                       @error('youtubelink')
                                       <p class="alert alert-danger alert-block">{{$errors->first('youtubelink')}}</p>
                                       @enderror
                                       <br>
                                       <button class="btn btn-success" style="margin:11px"><i class="fa fa-upload"></i> Upload</button>
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
                  @foreach($data as $link)
                     <!-- image card  -->
                     <div class="col-md-4" style="margin-bottom:5px">
                        <div class="item ">
                           <div class="card item-card card-block">
                              <iframe class="card-img-top" src="{{$link->youtubelink}}" alt="Card image" style="width:100%;height:200px"></iframe>
                              <div class="card-body">
                                 <form action="/admins/testimonial/youtube/{{$link->id}}" method="post">
                                 @csrf
                                 @method("DELETE")
                                 <center><button onclick="return confirm('are you sure');" class="btn btn-danger stretched-link"><i class="fa fa-trash"></i> Delete</button></center>
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