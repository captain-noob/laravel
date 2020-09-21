@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','collapse')
@section('formcoll','in')
@section('form','active')
<div class="main">
   <div class="main-content">
      <div class="container-fluid">
         <h3 class="page-title">Contact Registeration</h3>
         <div class="row">
            <div class="col-md-12">
               <!-- TABLE NO PADDING -->
               <div class="panel">
                  <div class="panel-heading ">
                     <div class="row">
                        <div class="col-md-3">
                           <h3 class="panel-title">Filter Results</h3>
                        </div>
                        <br>
                        <form action="/admins/contact/filter" method="post">
                        @csrf
                           <div class="col-md-3">
                              <input  type="text" name='search' class="form-control" placeholder="Search Text">
                           </div>
                           <div class="col-md-3">
                              <select name="filter1" class="form-control">
                                <option value="null">Select one</option>
                                 <option value="contact">Contact</option>
                                 <option value="not-contact">Not-Contact</option>
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
                     <form action="/admins/contact/download" method="POST">
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
                              <th>message</th>
                              <th>Email</th>
                              <th>Date</th>
                              <th>Contact</th>
                              <th>Contacted or Not</th>
                              
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $contact)
                           <tr>
                              <td>{{$contact->id}}</td>
                              <td>{{$contact->name}}</td>
                              <td>{{$contact->phone}}</td>
                              <td>{{$contact->message}}</td>
                              <td>{{$contact->email}}</td>
                              <td>{{$contact->date}}</td>
                              <td>
                                 <!-- <div class="row"> -->
                                 <form action="/admins/contact/{{$contact->id}}" method='POST'>
                                 @csrf 
                                 @method('PUT')
                                    <!-- <div class="col-md-6"> -->
                                    <label class="fancy-radio">
                                    <input name="contact" value="Contact" type="radio">
                                    <span><i></i>Contact</span>
                                    </label>
                                    <label class="fancy-radio">
                                    <input name="contact" value="Not-Contact" type="radio" checked>
                                    <span><i></i>Not-Contact</span>
                                    </label>
                                    <!-- </div> -->
                                    <div class="col-md-6 ">
                                       <p class="demo-button">
                                          <button type="submit" class="btn btn-primary">Save</button>
                                       </p>
                                    </div>
                                 </form>
                  </div>
                  </td>
                  <td>{{$contact->contacted}}</td>
                  </tr>
                  @endforeach
                  <!-- second list  -->
               </tbody>
               </table>
            </div>
         </div>
         <!-- END TABLE NO PADDING -->
      </div>
   </div>
</div>
</div>
</div>
@endsection