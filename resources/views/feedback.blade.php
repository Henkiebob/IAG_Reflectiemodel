@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feedbackformuliertje</div>

                <div class="panel-body">
                    <form action="POST">
                      <h5>Hier het onderwerpsnaam ofzo</h5>
                      <input type="text" name="feedback_title" placeholder="hier titel">
                      <h5>Hier je feedback</h5>
                      <input type="text" name="feedback_feedback" placeholder="hier text"> <br><br>
                      <input type="submit" name="sumbit_form">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection