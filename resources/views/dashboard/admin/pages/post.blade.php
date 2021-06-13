@extends('dashboard.admin.default')

@section('title', '| post')
@section('content')
    {{--    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

    <div class="">

        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">POSt</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
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
                                        <div class="modal-body ps-child">
                                            <form action="" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Title</strong>
                                                            <input type="text" name="title" class="form-control @error('title'){{"is-invalid"}}@enderror" placeholder="title" value = "{{Request::old('title') ?: ''}}">
                                                           @error('title')
                                                            <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                                            @enderror

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>slug</strong>
                                                            <input type="text" name="slug" class="form-control @error('slug'){{"is-invalid"}}@enderror" placeholder="slug" value = "{{Request::old('slug') ?: ''}}">
                                                            @error('slug')
                                                            <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                                            @enderror
                                                        </div>

                                                    </div>


                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Category:</strong>
                                                           <fieldset>
                                                               <div class="row">
                                                                   <div class="col-lg-12 col-md-6 col-sm-3 mb-3 ">
                                                                       <select name="category_id" class="selectpicker" data-size="7" data-style="btn btn-primary btn-round btn-block" title="Single Select">
                                                                           <option disabled selected>Single Option</option>
                                                                           @foreach($categorys as $category)
                                                                           <option value="{{$category->id}}">{{$category->name}}</option>
                                                                           @endforeach
                                                                       </select>
                                                                   </div>
{{--                                                                   <div class="col-sm-10">--}}
{{--                                                                       @foreach($categorys as $category)--}}
{{--                                                                           <div class="form-check form-check-inline">--}}
{{--                                                                               <label class="form-check-label">--}}
{{--                                                                                   <input class="form-check-input" type="checkbox" value="">--}}
{{--                                                                                   <span class="form-check-sign"></span>--}}
{{--                                                                                   {{$category->name}}--}}
{{--                                                                               </label>--}}
{{--                                                                           </div>--}}
{{--                                                                       @endforeach--}}

{{--                                                                   </div>--}}
                                                               </div>
                                                           </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">


                                                        <div class="form-group">
                                                            <label><strong>Tags:</strong></label><br>
{{--                                                            <select name="name[]" id="cars" multiple class="form-control custom-select">--}}
{{--                                                                @foreach($tags as $tag)--}}


{{--                                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>--}}
{{--                                                                @endforeach--}}
{{--                                                            </select>--}}

                                                        </div>

                                                    </div>
                                                     <div class="col-md-6">
                                                        <h4 class="card-title">Regular Image</h4>
                                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail">
                                                                <img src="../../assets/img/image_placeholder.jpg" alt="...">
                                                                {{Request::old('image') ?: ''}}
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                            <div>
                                  <span class="btn btn-rose btn-round btn-file">
                                      <span class="fileinput-new">Select image</span>
                                      <span class="fileinput-exists">Change</span>
                                      <input type="file" name="image" class="form-control @error('image'){{"is-invalid"}}@enderror" value = "{{Request::old('image') ?: ''}}" />
                                         @error('image')
                                      <span class="form-text text-danger">{{$errors->first('image')}}</span>
                                      @enderror

                                  </span>
                                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>body</strong>
                                                            <textarea  id="mytextarea" cols="10" rows="5" placeholder="body" class="form-control" name="body" value = "{{Request::old('body') ?: ''}}"></textarea>
                                                            @error('body')
                                                            <span class="form-text text-danger">{{$errors->first('body')}}</span>
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
                                    <th>
                                        slug
                                    </th>
                                    <th >
                                        body
                                    </th>
                                    <th >
                                        category_id
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
