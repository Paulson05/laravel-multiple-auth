@extends('dashboard.admin.templetes.defaults')
@section('title', '| dashboard')
@section('content')
    <div class="">
        @include('dashboard.admin.templetes.partials.headerpanel')
        <section >
            <div class="content pt-5" >




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
                                                <h6 class="stats-title">Messages</h6>
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
                                                <h6 class="stats-title">Today Revenue</h6>
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
                                                <h6 class="stats-title">Customers</h6>
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
                                                <h6 class="stats-title">Support Requests</h6>
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
                        <div class="card ">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                        <h4 class="card-title">Users</h4>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">Add user</a>
                                    </div>
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Creat header Post</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form action="" method="post" enctype= "multipart/form-data" >
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <strong>Title</strong>
                                                                    <input type="text" name="title" class="form-control" placeholder="title">

                                                                </div>

                                                            </div>

                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <strong>Slug</strong>
                                                                    <input type="text" name="slug" class="form-control" placeholder="slug">

                                                                </div>

                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <strong>Category:</strong>
                                                                    <select class="form-control" name="category_id">


                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <strong>Body:</strong>
                                                                    <textarea cols="10" rows="5" class="form-control"   name="body" value="body"
                                                                              placeholder="" ></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
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
                                            Name
                                        </th>
                                        <th>
                                            Country
                                        </th>
                                        <th>
                                            City
                                        </th>
                                        <th>
                                            Salary
                                        </th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Dakota Rice
                                            </td>
                                            <td>
                                                Niger
                                            </td>
                                            <td>
                                                Oud-Turnhout
                                            </td>
                                            <td class="text-primary">
                                                $36,738
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Minerva Hooper
                                            </td>
                                            <td>
                                                Curaçao
                                            </td>
                                            <td>
                                                Sinaai-Waas
                                            </td>
                                            <td class="text-primary">
                                                $23,789
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Sage Rodriguez
                                            </td>
                                            <td>
                                                Netherlands
                                            </td>
                                            <td>
                                                Baileux
                                            </td>
                                            <td class="text-primary">
                                                $56,142
                                            </td>
                                        </tr>

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
                <!-- The Modal -->

            </div>
        </section>
    </div>
    <!-- The Modal -->

    </div>
@endsection
