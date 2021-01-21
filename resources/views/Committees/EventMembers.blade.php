@extends('layout.back')
@section('content')
<style>
    td{
        border-bottom: 1px solid #DAA520;
    }
</style>

<div class="container">
<div class='m-5'>
  <h2>Filter Commitee</h2>
  <a href="{{route('EventMembers',['key' => 'Web'])}}" class="btn bg-warning" role="button">web</a>
  <a href="{{route('EventMembers',['key' => 'LR'])}}" class="btn bg-warning" role="button">LR</a>
  <a href="{{route('EventMembers',['key' => 'PR'])}}" class="btn bg-warning" role="button">PR</a>
  <a href="{{route('EventMembers',['key' => 'Art'])}}" class="btn bg-warning" role="button">Art</a>
  <a href="{{route('EventMembers',['key' => 'Blender'])}}" class="btn bg-warning" role="button">Blender</a>
  <a href="{{route('EventMembers',['key' => 'CCC'])}}" class="btn bg-warning" role="button">CCC</a>
  <a href="{{route('EventMembers',['key' => 'English'])}}" class="btn bg-warning" role="button">English</a>
  <a href="{{route('EventMembers',['key' => 'Game'])}}" class="btn bg-warning" role="button">Game</a>
  <a href="{{route('EventMembers',['key' => 'HR'])}}" class="btn bg-warning" role="button">HR</a>
  <a href="{{route('EventMembers',['key' => 'Linux'])}}" class="btn bg-warning" role="button">Linux</a>
  <a href="{{route('EventMembers',['key' => 'Project'])}}" class="btn bg-warning" role="button">Project</a>
  </div>
  
</div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover" id='table'>

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
    <button id='export'>
        Click to Export 
    </button>
    <script>
   $(function() {
				$("#export").click(function(e){
					var table = $(this).prev('#table');
				
						// var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
						$(table).table2excel({
							exclude: ".noExl",
							name: "Excel Document Name",
							filename: "myFileName" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
							fileext: ".xls",
							exclude_img: true,
							exclude_links: true,
							exclude_inputs: true,
							// preserveColors: preserveColors
						});
					
				});
				
			});
</script>


@endsection
