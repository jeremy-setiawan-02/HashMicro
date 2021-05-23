@extends('master.master')

@section('content')
<div class="container">
    <div class="card mx-auto" style="width: 18rem; margin: 15% 0 15% 0">
        <div class="card-header">
            <h3>Quiz</h3>
        </div>
        <div class="card-body">
            <form style="margin : 10px 10px 10px 10px" method="POST" action="/QuizAction">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Input 1</label>
                    <input type="text" name="input1" class="form-control"  aria-describedby="emailHelp" placeholder="Input 1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Input 2</label>
                    <input type="text" name="input2" class="form-control"  placeholder="Input 2">
                </div>
                <button type="submit" style="width : 100%" class="btn btn-primary">Validate</button>
                @if($persen != null)
                <div class="form-group" style="margin: 10px 0 0 0">
                    <label for="exampleInputPassword1">Answer : {{$persen}}%</label>
                </div>
                @endif
            </form>
        </div>
    <div>
</div>
@endsection