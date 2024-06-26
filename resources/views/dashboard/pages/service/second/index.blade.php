@extends('dashboard.layout.dashboard')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>Project</h4>
                         <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">DashBoard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Our Project</a></li>
                            <li class="breadcrumb-item active">Project List</li>
                        </ol>
                     </div>
                 </div>
             </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h2 class=" mb-4">Service List</h2>
                                    </div>
                                    <div class="float-end d-none d-sm-block">
                                        <a href="{{route('service-second.create')}}" class="btn btn-success">Add Service</a>
                                    </div>
                                </div>
                                <table id="myTable" class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr >
                                            <th>SL</th>
                                            <th>Service Name</th>
                                            <th>Service Description</th>
                                            <th>Service Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $services as $service)
                                        <tr >
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{ $service->service_name}}</td>
                                            <td>{{ Str::substr( $service->service_description, 0, 70)}}</td>
                                            <td><img class="rounded-circle" height="50"
                                                src="{{ asset('assets/images/services/'.$service->service_photo) }}" alt="photo not found">
                                            </td>

                                            <td >
                                                <!-- Example single danger button -->
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-primary has-arrow dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                   Action <i class="fas fa-angle-down"></i>
                                                </button>
                                                    <ul class="dropdown-menu">
                                                       <li><a class="dropdown-item" href="{{route('service-second.edit',$service->id)}}">Edit</a>
                                                       <li>
                                                            <form id="deleteData{{$service->id}}" action="{{ route('service-second.destroy', $service->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a style="cursor: pointer;"  class="dropdown-item" onclick="deleteData({{$service->id}})">Delete</a>
                                                            </form>
                                                       </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
