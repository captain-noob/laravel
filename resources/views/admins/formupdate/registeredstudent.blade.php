@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','collapse')
@section('formcoll','in')
@section('form','active')
<div class="main">
   <div class="main-content">
      <div class="container">
         <h3 class="page-title">Request Registeration</h3>
         <div class="row">
            <div class="container-fluid">
               <!-- TABLE NO PADDING -->
               <div class="panel">
                  <div class="panel-heading ">
                     <div class="row">
                        <div class="col-md-3">
                           <h3 class="panel-title">Filter Results</h3>
                        </div>
                        <br>
                        <form action="/admins/registeredstudent/filter" method="post">
                        @csrf
                           <div class="col-md-3">
                              <input type="text"  name="search" class="form-control" placeholder="Search Text">
                           </div>
                           <div class="col-md-3">
                              <select name="filter1" class="form-control">
                                 <option value="null">Select one</option>
                                 <option value="contacted">Contacted</option>
                                 <option value="not-contacted">Not-Contacted</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <select name="filter2" class="form-control">
                                 <option value="null">Select one</option>
                                 <option value="recent">Recent added</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <p class="demo-button btn btn-primary">
                                 <button type="submit" class="fa fa-search">Filter</button>
                              </p>
                           </div>
                        </form>
                     </div>
                     <form action="/admins/registeredstudent/download" method="POST">
                     @csrf
                     <input type="date" name="from" id="" placeholder="date from">
                     <input type="date" name="to" id="" placeholder="date to"> 
                     <BUtton type="submit">download</BUtton>
                     </form>
                  </div>
                  <div class="panel-body no-padding">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Date</th>
                              <th>Email</th>
                              <th>Qualification</th>
                              <th>Branch</th>
                              <th>Age</th>
                              <th>Contact</th>
                              <th>contacted or not</th>
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $reg)
                           <tr>
                              <td>{{$reg->id}}</td>
                              <td>{{$reg->name}}</td>
                              <td>{{$reg->phone}}</td>
                              <td>{{$reg->address}}</td>
                              <td>{{$reg->date}}</td>
                              <td>{{$reg->email}}</td>
                              <td>{{$reg->qualification}}</td>
                              <td>{{$reg->branch}}</td>
                              <td>{{$reg->age}}</td>
                              <td>
                                 <!-- <div class="row"> -->
                                 <form action="/admins/registeredstudent/{{$reg->id}}" method="POST">
                                 @csrf 
                                 @method('PUT')
                                    <!-- <div class="col-md-6"> -->
                                    <label class="fancy-radio">
                                    <input name="contact" value="contacted" type="radio" checked>
                                    <span><i></i>Contacted</span>
                                    </label>
                                    <label class="fancy-radio">
                                    <input name="contact" value="not-contacted" type="radio">
                                    <span><i></i>Not-Contacted</span>
                                    </label>
                                    <!-- </div> -->
                                    <div class="col-md-6 ">
                                       <p class="demo-button">
                                          <button type="submit" value="save" class="btn btn-primary">Save</button>
                                       </p>
                                    </div>
                                 </form>
                  </div>               
                  </td>
                  <td>{{$reg->contacted}}</td>
                  </tr>
                  @endforeach
               <!-- end  -->
               </tbody>
               </table>
            </div>
         </div>
         <!-- END TABLE NO PADDING -->
      </div>
   </div>
</div>
@endsection