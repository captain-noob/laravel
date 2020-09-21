@extends('layouts.adminlayouts')
@section('admincontents')
@section('prof','active')
@section('gall','collapse')

<div class="main">
   <div class="main-content">
      <div class="container-fluid">
         <h3 class="page-title">Profile Page</h3>
         <div class="row">
               <div class="col-md-3">
                  <ul class="nav nav-pills nav-stacked admin-menu" >
                     <li id="a"><a data-target-id="profile" onclick="click1();"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                     <li id="b"><a data-target-id="change-password" onclick="click2();"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                     <li id="c"><a data-target-id="settings" onclick="click3();"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                     <li><a href="/admins/logout" onclick="return confirm('are you sure');" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                  </ul>
               </div>
               <div class="col-md-9  admin-content" id="profile">
               @if($message=Session::get('message'))
                   <div class="alert alert-success alert-block">
                         <button type="button" class="close" data-dismiss="alert">x</button>
                              <strong>{{$message}}</strong>
                                  
                         </div>
                @endif
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Name</h3>
                     </div>
                     <div class="panel-body">
                      {{$data->name}}
                     </div>
                  </div>
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                     </div>
                     <div class="panel-body">
                     {{$data->email}}
                     </div>
                  </div>
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Last Password Change</h3>
                     </div>
                     <div class="panel-body">
                     {{$data->updated_at}}
                     </div>
                  </div>
               </div>
                  <div class="col-md-9 admin-content" id="settings" style="float:right">
                     <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title">Notification</h3>
                        </div>
                        <div class="panel-body">
                           <div class="label label-success">allowed</div>
                        </div>
                     </div>
                     <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title">Newsletter</h3>
                        </div>
                        <div class="panel-body">
                           <div class="badge">Monthly</div>
                        </div>
                     </div>
                     <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title">Admin</h3>
                        </div>
                        <div class="panel-body">
                           <div class="label label-success">yes</div>
                        </div>
                     </div>
                  </div>
               <div class="col-md-9  admin-content" id="change-password" style="float:right">
                  <form action="/admins/profile/{{$data->id}}" method="POST">
                  @csrf
                  @method('PUT')
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title"><label for="new_password"  class="control-label panel-title">Old Password</label></h3>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <div class="col-sm-10">
                                 <input type="password" class="form-control" name="oldpassword" id="new_password" >
                                 @error('oldpassword')
                                 <p class="alert alert-danger alert-block">{{$errors->first('oldpassword')}}</p>
                                 @enderror
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title"><label for="new_password" class="control-label panel-title">New Password</label></h3>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <div class="col-sm-10">
                                 <input type="password" class="form-control" name="password" id="new_password" >
                                 @error('password')
                                 <p class="alert alert-danger alert-block">{{$errors->first('password')}}</p>
                                 @enderror
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Confirm password</label></h3>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <div class="col-sm-10">
                                 <input type="password" class="form-control" name="password_confirmation" id="confirm_password" >
                                 @error('password_confirmation')
                                 <p class="alert alert-danger alert-block">{{$errors->first('password_confirmation')}}</p>
                                 @enderror
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-info border" style="margin: 1em;">
                        <div class="panel-body">
                           <div class="form-group">
                              <div class="pull-left">
                                 <button type="submit" class="form-control btn btn-primary" name="submit" id="submit">submit</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-9  admin-content" id="settings"></div>
               <div class="col-md-9  admin-content" id="logout" style="float:right">
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Confirm Logout</h3>
                     </div>
                     <div class="panel-body">
                        Do you really want to logout ?  
                        <a  href="#" class="btn btn-danger"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        <span >   Yes   </span>
                        </a>    
                        <a href="#account" class="btn btn-success"> <span >  No   </span></a>
                     </div>
                     <form id="logout-form" action="#" method="POST" style="display: none;">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
@endsection