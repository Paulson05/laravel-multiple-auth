@extends('dashboard.admin.templetes.defaults')
@section('content')
    @include('dashboard.admin.templetes.partials.headerpanel')
    <div class="container">


                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="{{route('home.update', ['home'=> $home->id])}}" method="post" enctype= "multipart/form-data" >
                                                @method('PUT')
                                                @csrf

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Title</strong>
                                                            <input type="text" name="title" class="form-control" placeholder="title"  value="{{ $home->title}}">

                                                        </div>

                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>sub title</strong>
                                                            <input type="text" name="sub_title" class="form-control" placeholder="sub title"  value="{{ $home->sub_title}}" >

                                                        </div>

                                                    </div>




                                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                        <button type="submit" class="btn btn-primary">update</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
    </div>



@endsection
