@extends('dashboard.admin.templetes.defaults')
@section('title', '| services')
@section('content')

    <div class="container">
        @include('dashboard.admin.templetes.partials.headerpanel')
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Services</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Services</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="{{route('services.store')}}" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>ion Icon</strong>
                                                            <input type="text" name="icon" class="form-control" placeholder="ion_icon">

                                                        </div>

                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Heading</strong>
                                                            <input type="text" name="heading" class="form-control" placeholder="Title">

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>paragraph</strong>
                                                            <input type="text" name="paragraph" class="form-control" placeholder="Title">

                                                        </div>

                                                    </div>



                                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                                        <button type="submit" class="btn btn-primary">Post</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>

                                </div>




                            </div>

                        </div>
                    </div>
                    <div class="card-body">

                        <div class="">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    ion icon
                                </th>
                                <th>
                                   Title
                                </th>
                                <th>
                                  decsription
                                </th>

                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>
                                       {{$service->id}}
                                    </td>
                                    <td>
                                        {{$service->icon}}
                                    </td>
                                    <td>
                                        {{$service->heading}}
                                    </td>
                                    <td>
                                        {{$service->paragraph}}
                                    </td>
                                    <td>

                                        <a href=""  >
                                            <i class="btn btn-success btn-sm  fa fa-edit" ></i>
                                        </a>

                                        <form style="display: inline-block" method="post" action="{{route('services.destroy',['service'=> $service->id])}}" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger  p-0"><i class="btn btn-danger btn-sm fa fa-trash" ></i></button>
                                        </form>
                                    </td>

                                </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

