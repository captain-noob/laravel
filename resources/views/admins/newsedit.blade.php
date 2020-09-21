@extends('layouts.adminlayouts')
@section('admincontents')
@section('news','active')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
<div class="row">
         <!-- News List  -->
          <div class="col-md-7" id="edit">
         <h3 class="page-title">Update News</h3>
            <div class="panel panel-headline">
                <center>
                   <h3>Edit News</h3>
                <center>
               <form action="/admins/news/{{$news->id}}" method="POST" enctype="multipart/form-data" >
               @csrf
               @method('PUT')
               <div class="panel-body">
                  <p>Select Image</p>
                  <input type='file'  name="image" style="width:100%;margin-bottom:10px" class="form-control bg-grey">
                  @error('image')
                  <p class="alert alert-danger alert-bock">{{$errors->first('image')}}</p>
                  @enderror
                  <p>Add Discerption</p>
                  <textarea type="textarea"  name="body" style="height:200px;width:100%" >{{$news->body}}</textarea>
                  @error('body')
                  <p class="alert alert-danger alert-bock">{{$errors->first('body')}}</p>
                  @enderror
                  <center><a href="news.php"><button class="btn btn-outline-secondary float-right btn-success">UPDATE</button></a></center>
               </div>
               </form>
            </div>

            
         </div>
         </div>
         </div>
         </div>
         
</div>
@endsection
