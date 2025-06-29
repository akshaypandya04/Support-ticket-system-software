@extends('backend.admin.layouts.master')
@section('title','Change Password - HP10')
@section('main-content')
    <div class="container">
        <div class="row">
              @include('partial.errors')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Change Password</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/admin/update-pwd') }}">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Current
                                    Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="current_pwd"
                                           autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                                <div class="col-md-6">
                                    <input id="new_pwd" type="password" class="form-control" name="new_pwd"
                                           autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm
                                    Password</label>

                                <div class="col-md-6">
                                    <input id="confirm_pwd" type="password" class="form-control" name="confirm_pwd"
                                           autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
