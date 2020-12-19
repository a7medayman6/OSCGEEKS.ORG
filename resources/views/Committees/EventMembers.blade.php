@extends('layout.back')
@section('content')
<style>
    td{
        border-bottom: 1px solid #09c;
    }
</style>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">College</th>
                    <th scope="col">Year</th>
                    <th scope="col">ComA</th>
                    <th scope="col">DateComA</th>
                    <th scope="col">TimeComA</th>
                    <th scope="col">ComB</th>
                    <th scope="col">DateComB</th>
                    <th scope="col">TimeComB</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $member)
                        <tr>
                            <td>{{$member->id}}</td>
                            <td>{{$member->name}}</td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->phone}}</td>
                            <td>{{$member->college}}</td>
                            <td>{{$member->studentYear}}</td>
                            <td>{{$member->committee_A}}</td>
                            <td>{{$member->dateCommittee_A}}</td>
                            <td>{{$member->timeCommittee_A}}</td>
                            <td>{{$member->committee_B}}</td>
                            {{-- <td>{{$member->dateCommittee_B}}</td>
                            <td>{{$member->timeCommittee_B}}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

@endsection
