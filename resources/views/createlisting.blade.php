@extends('layouts.app')
@section('content')
<div class="container">
  @include('inc.messages')
  <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">profile <a href="/home" class="pull-right btn btn-default btn-xs">Go Back</a></div>

              <div class="panel-body">
                  {!!Form::open(['action' => 'ListingsController@store', 'method' => 'POST'])!!}
                  {{Form::bsText('name', '', ['placeholder' => 'Name'])}}
                  {{Form::bsText('website', '', ['placeholder' => 'Website'])}}
                  {{Form::bsText('email', '', ['placeholder' => 'Email'])}}
                  {{Form::bsText('phone', '', ['placeholder' => 'Phone'])}}
                  {{Form::bsText('address', '', ['placeholder' => 'Address'])}}
                  {{Form::bsText('bio', '', ['placeholder' => 'About yourself'])}}
                  {{Form::bsSubmit('submit')}}
                  {!! Form::close() !!}
              </div>

            </div>
          </div>


        </div>
  </div>
</div>
@endsection
