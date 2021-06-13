@extends('dashboard.admin.templetes.defaults')
@section('title', '| heroslider')
@section('content')
    <div class="">
        @include('dashboard.admin.templetes.partials.headerpanel')
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">heroslider</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Creat skill</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="{{route('heroslider.store')}}" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>h1</strong>
                                                            <input type="text" name="heading" class="form-control" placeholder="heading">
                                                            @error('heading')
                                                            <span class="form-text text-danger">{{$errors->first('heading')}}</span>
                                                            @enderror

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>h2</strong>
                                                            <input type="text" name="paragraph" class="form-control" placeholder="h2">
                                                            @error('paragraph')
                                                            <span class="form-text text-danger">{{$errors->first('paragraph')}}</span>
                                                            @enderror

                                                        </div>

                                                    </div>


                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>image</strong>
                                                            <label for="img">upload:</label>
                                                            <input type="file" id="image" name="image"  >
                                                            @error('image')
                                                            <span class="form-text text-danger">{{$errors->first('image')}}</span>
                                                            @enderror
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
                    <div >

                        <div class="">
                            <table class="table ">
                                <thead class=" text-primary">
                                <th style="font-size: 10px;">
                                    ID
                                </th>
                                <th >
                                 h1
                                </th>
                                <th>
                                h2
                                </th>
                                 <th>
                                     image
                                 </th>


                                </thead>
                                <tbody>
                                @foreach($herosliders as $heroslider)
                                <tr>

                                        <td>
                                            {{$heroslider->id}}
                                        </td>
                                        <td>
                                            {{$heroslider->heading}}
                                        </td>
                                        <td>
                                            {{$heroslider->paragraph}}

                                        </td>

                                    <td>
                                        <img  src ="/upload/images/{{$heroslider->image}}" height= "70px;" width = "80px;">
                                    </td>
                                       <td>
                                            <a href="" title="show">
                                                <i class="btn btn-primary btn-sm fa fa-eye" ></i>
                                            </a>

                                            <a href=""  >
                                                <i class="btn btn-success btn-sm  fa fa-edit" ></i>
                                            </a>

                                            <form style="display: inline-block" method="post" action="{{route('heroslider.destroy', ['heroslider' =>$heroslider->id ])}}" >
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
