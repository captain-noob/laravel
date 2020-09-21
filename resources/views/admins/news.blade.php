@extends('layouts.adminlayouts')
@section('admincontents')
@section('news','active')
<div class="main">
    <div class="main-content">
         <div class="container-fluid">
           <div class="row">
               <h3 class="page-title" style="padding-left:15px;">News</h3>
                 <div class="col-md-12" id="edit">
                         <div class="panel panel-headline">
                           <center>
                      <h3 style="font-weight:700;color:black;">Edit News</h3>
                          <center>
                          @if($message=Session::get('message'))
                   <div class="alert alert-success alert-block">
                         <button type="button" class="close" data-dismiss="alert">x</button>
                              <strong>{{$message}}</strong>
                                  
                         </div>
                @endif
                           <form action="/admins/news" method="post" enctype="multipart/form-data" >
                              @csrf
                             <div class="panel-body">
                                <p>Select Image</p>
                                <input type='file' value="{{old('image')}}" name="image" style="width:100%;margin-bottom:10px" class="form-control bg-grey" >
                                @error('image')
                                <p style="color:red">{{$errors->first("image")}}</p>
                                @enderror
                                <p style="padding-top:20px;padding-bottom:20px;">Add Discription</p>
                                <textarea type="textarea"  name="body" style="height:200px;width:100%" placeholder="Please type..." > {{old('body')}}</textarea>
                                @error('body')
                                <p style="color:red">{{$errors->first("body")}}</p>
                                @enderror
                                <center><button class="btn btn-outline-secondary float-right btn-success" style="margin-top:20px;margin-bottom:20px;">Save <i class="fa fa-bookmark"></i></button></center>
                              </div>
                           </form>
                   </div> 
             </div>
         <!-- News List  -->
               <div class="row"> 
                   @foreach($data as $news)
                <div class="col-lg-3"> 
                     <!-- PANEL HEADLINE -->
                   <div class="panel panel-headline">
                       <image src="{{asset('image/news/'.$news->image)}}" style="width:100%;">
                         <div class="panel-body">
                              <h4>{{$news->body}}</h4>
                              <center><a href="/admins/news/{{$news->id}}/edit"><button class="btn btn-outline-secondary btn-primary float-right"><i class="fa fa-edit"></i> EDIT</button></a></center>
                         </div>
                   </div>
            
                       <!-- END PANEL HEADLINE -->
                </div>
        
                   <!-- end news list -->
                    @endforeach
               </div>

          </div>
      </div>
</div> 
<!-- END MAIN CONTENT -->
@endsection