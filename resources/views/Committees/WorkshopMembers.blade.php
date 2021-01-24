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
  <a href="{{route('workshop.registration.table',['key' => 'Web'])}}" class="btn bg-warning" role="button">web</a>
  <a href="{{route('workshop.registration.table',['key' => 'Blender'])}}" class="btn bg-warning" role="button">Blender</a>
  <a href="{{route('workshop.registration.table',['key' => 'Linux'])}}" class="btn bg-warning" role="button">Linux</a>
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
                    <th scope="col">workshop name</th>
                    <th scope="col">Interview time</th>
              
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
                    @foreach ($registrars as $member)
                        <tr>
                            <td>{{$member->id}}</td>
                            <td>{{$member->name}}</td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->phone}}</td>
                            <td>{{$member->college}}</td>
                            <td>{{$member->studentYear}}</td>
                            <td>{{$member->workshop}}</td>
                            <td>{{$member->interview_time}}</td>
                            <!-- <td><a href="{{route('deleteWorkshopMember',$member->id)}}" class="btn btn-danger">Delete</a></td> -->
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
