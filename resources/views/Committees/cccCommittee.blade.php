@extends('layout.back')
@section('content')
<h1>CCC Committee</h1>
<form action="{{route('Insert','3')}}" method="POST">
        {{ csrf_field() }}

        <div class="row py-2">
            <div class="offset-4 col-4">
                <label for="">Date</label>
                <input type="text" name="Date" class="form-control">
            </div>

        </div>
        <div class="row py-2">
            <div class=" offset-4 col-4">
                <label for="">Time</label>
                <input type="text" name="Time" class="form-control">
            </div>
        </div>
        <div class="row py-2">
            <div class=" offset-4 col-4">
                <label for="">Number of Avalliable</label>
                <input type="number" name="NumberOfAva" class="form-control" min="0">
            </div>
        </div>
        <div class="row py-2">
            <div class="offset-4 col-4">
                <input type="submit" value="Add to Committee" class="btn btn-primary">
            </div>
        </div>
    </form>
    <style>
        td{
            border-bottom: 1px solid #09c;
        }
    </style>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Number of Avalliable</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach ($appointments as $appointments)
                            <tr>
                                <td>{{$appointments->id}}</td>
                                <td>{{$appointments->date}}</td>
                                <td>{{$appointments->time}}</td>
                                <td>{{$appointments->numberOfSeats}}</td>
                                <td><a href="{{route('Delete',['committee_id'=>'3','id'=>$appointments->id])}}" class="btn btn-danger">Delete</a></td>

                            </tr>
                       @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
@endsection

