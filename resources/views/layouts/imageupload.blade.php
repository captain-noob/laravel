<!-- form start  -->
<div class="row">
   <div class="col-md-12 badge-dark">
      <div class="item ">
         <div class="card item-card card-block">
            <center>
               <h4>UPLOAD IMAGE</h4>
               <br>
               <form action="/admins/gallery" method="POST" enctype="multipart/form-data">
               @csrf
                  <div class="form-group" style="margin-top:15px">
                     <input type="file" name="image" class="form-control-file" required>
                     <br>
                     <div class="form-group">
                        <label for="exampleFormControlInput1" >Title</label>
                        <input type="text"  name="body" class="form-control"  placeholder="Enter the title" required>
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
   <!-- image card  -->
   <div class="col-md-4" style="margin-bottom:5px">
      <div class="item ">
         <div class="card item-card card-block">
            <img class="card-img-top" src="" alt="Card image" style="width:100%;height:150px">
            <div class="card-body">
               <p class="card-title">{{$gallery->body}}</p>
               <center><a href="#" class="btn btn-danger stretched-link">Delete</a></center>
            </div>
         </div>
      </div>
   </div>
   <!-- image card end  -->
   <div class="col-md-4" style="margin-bottom:5px">
      <div class="item ">
         <div class="card item-card card-block">
            <img class="card-img-top" src="//placeimg.com/250/250/tech" alt="Card image" style="width:100%;height:150px">
            <div class="card-body">
               <p class="card-title">Some example text some example text. John Doe is an architect and engineer</p>
               <center><a href="#" class="btn btn-danger stretched-link">Delete</a></center>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-4" style="margin-bottom:5px">
      <div class="item ">
         <div class="card item-card card-block">
            <img class="card-img-top" src="//placeimg.com/250/250/tech" alt="Card image" style="width:100%;height:150px">
            <div class="card-body">
               <p class="card-title">Some example text some example text. John Doe is an architect and engineer</p>
               <center><a href="#" class="btn btn-danger stretched-link">Delete</a></center>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-4" style="margin-bottom:5px">
      <div class="item ">
         <div class="card item-card card-block">
            <img class="card-img-top" src="//placeimg.com/250/250/tech" alt="Card image" style="width:100%;height:150px">
            <div class="card-body">
               <p class="card-title">Some example text some example text. John Doe is an architect and engineer</p>
               <center><a href="#" class="btn btn-danger stretched-link">Delete</a></center>
            </div>
         </div>
      </div>
   </div>
   <!-- all image card end -->
</div>
<!-- image display end  -->