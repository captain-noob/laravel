@extends('layouts.adminlayouts')
@section('admincontents')
@section('news','active')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
   <div class="row">
      <h3 class="page-title">BROSSER</h3>
      <div class="col-md-7" id="edit">
         <h3 class="page-title">Add Document </h3>
         @if($message=Session::get('message'))
               <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">x</button>
               <strong>{{$message}}</strong>
               
               </div>
         @endif
            <div class="panel panel-headline">
               <form action="/admins/document/brosser" method="post" enctype="multipart/form-data" >
                @csrf
                 <div class="panel-body">
                   <p>Select Document</p>
                   <input type='file' value="" name="file" style="width:100%;margin-bottom:10px" class="form-control bg-grey" >
                   @error('file')
                   <p class="alert alert-danger">{{$errors->first('file')}}</p>
                   @enderror
                
                   <p>Title</p>
                   <input type="text" value="{{old('title')}}"  name="title" class="form-control"  placeholder="Enter the title">
                   @error('title')
                   <p class="alert alert-danger">{{$errors->first('title')}}</p>
                   @enderror
                 
                   <p>Add Discerption</p>
                   <textarea type="textarea"   name="body" style="height:200px;width:100%" >{{old('body')}}</textarea>
                   @error('body')
                   <p class="alert alert-danger">{{$errors->first('body')}}</p>
                   @enderror
                  
                   <center><button class="btn btn-outline-secondary float-right btn-success">Save</button></center>
                 </div>
               </form>
            </div> 
      </div>
         <!-- News List  --> 
      @foreach($data as $document)
      <div class="col-md-5"> 
           <!-- PANEL HEADLINE -->
         <div class="panel panel-headline">
            <image src="{{asset('storage/file/brosser'.$document->file)}}" style="width:100%;height:300px">
            <div class="panel-body">
            <h3 class="card-title">{{$document->title}}</h3>
            <h4>{{$document->body}}</h4>
                <form action="/admins/document/brosser/{{$document->id}}" method="POST">
                @csrf
                @method('DELETE')
                  <center><button type="submit" class="btn btn-outline-secondary btn-primary float-right">delete</button></center>
                 </form>
             </div>
         </div>
            
            <!-- END PANEL HEADLINE -->
       </div>
       @endforeach
         
         <!-- end news list -->
        
 </div>
</div>
<!-- END MAIN CONTENT -->
@endsection