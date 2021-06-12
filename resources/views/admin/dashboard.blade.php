@extends('admin.default')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="now-ui-icons ui-2_chat-round"></i>
                                    </div>
                                    <h3 class="info-title">859</h3>
                                    <h6 class="stats-title">Post</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="now-ui-icons business_money-coins"></i>
                                    </div>
                                    <h3 class="info-title"><small>$</small>3,521</h3>
                                    <h6 class="stats-title">Comment</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-info">
                                        <i class="now-ui-icons users_single-02"></i>
                                    </div>
                                    <h3 class="info-title">562</h3>
                                    <h6 class="stats-title">Category</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="now-ui-icons objects_support-17"></i>
                                    </div>
                                    <h3 class="info-title">353</h3>
                                    <h6 class="stats-title">Tag</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">

                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="table-responsive">

                        <table id="datatable" class="table">
                            <thead class=" text-primary">
                            <th>
                                id
                            </th>
                            <th >
                                title
                            </th>
                            <th>
                                image
                            </th>
                            <th >
                                slug
                            </th>
                            <th >
                                body
                            </th>
                            <th >
                                category
                            </th>


                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>


                                <td>
                                    {{$post->id}}
                                </td>
                                <td>
                                    {{$post->title}}
                                </td>
                                <td>
                                    <img  src ="/upload/images/{{$post->image}}" height= "70px;" width = "80px;">
                                </td>
                                <td>
                                    {{$post->slug}}
                                </td>
                                <td>
                                    {{$post->body}}
                                </td>
                                <td>
                                    {{$post->category_id}}
                                </td>
                                <td>
                                    <a href="" title="show">
                                        <i class="btn btn-primary btn-sm fa fa-eye" ></i>
                                    </a>

                                    <a href=""  >
                                        <i class="btn btn-success btn-sm  fa fa-edit" ></i>
                                    </a>

                                    <form style="display: inline-block" method="post" action="" >
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
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
@endsection
