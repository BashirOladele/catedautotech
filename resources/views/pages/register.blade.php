@extends('layouts.master')
@section('content')
<br><br><br><br>
<div class="container">
        <form class="" action="index.php" method="POST">
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input class="form-control" type="text" name="name" value="">
                </div>
                    <div class="form-group">
                        <label for="Email1">Email1:</label>
                        <input class="form-control" type="text" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="_token" value="{{csrf_token()}}">
                    </div>
                    
            </form>
</div>
@endsection