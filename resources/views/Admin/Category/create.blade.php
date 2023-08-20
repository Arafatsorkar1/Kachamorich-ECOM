@extends('Admin.master')
@section('title','create-category')

@section('body')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Create-Category</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Category </li>
                </ol>
                <a  href="{{route('admin-categories.index')}}" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i>Category list</a>
            </div>
        </div>
    </div>



    <form action="{{route('admin-categories.store')}}" method="POST" class="form-horizontal p-t-20" enctype="multipart/form-data">

        @csrf


        <div class="form-group row">
            <label for="exampleInputuname3" class="col-sm-3 control-label">Category Name <span class="text-danger">*</span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Category Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleInputEmail3" class="col-sm-3 control-label">Category Description <span class="text-danger">*</span></label>
            <div class="col-sm-9">
                <textarea name="description" class="form-control" id="editor" placeholder="Category Description"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="form-label col-sm-3 control-label" for="web">Category Image</label>
            <div class="col-sm-9">
                <input type="file" name="image" id="input-file-now" class="dropify" />
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
            <div class="col-sm-9">
                <label class="me-3"><input type="radio" name="status" value="1" checked> Published</label>
                <label><input type="radio" name="status" value="2"> Unpublished</label>
            </div>
        </div>
        <div class="form-group row m-b-0">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Category</button>
            </div>
        </div>
    </form>




@endsection
