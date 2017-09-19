@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label" for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                            
                        <input type="submit" class="btn btn-info" value="Save">
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
