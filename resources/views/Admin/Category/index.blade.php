@extends('Admin.master')
@section('title' , 'category')

@section('body')


    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Category</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Category </li>
                </ol>
                <a href="{{route('admin-categories.create')}}" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</a>
            </div>
        </div>
    </div>



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Category</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped border">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categorys as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name}}</td>
                                            <td>{!! $category->description !!}</td>
                                            <td>
                                                <img src="{{$category->image}}" alt="" style="height: 60px">
                                            </td>


                                            <td>{{ $category->status == 1 ? 'published' : 'unpublished' }}</td>


                                            <td>
                                                <a href="{{ route('admin-categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>

{{--                                                <a href="{{ route('members.show', $member->id) }}" class="btn btn-info btn-sm">--}}
{{--                                                    <i class="fas fa-eye"></i>--}}
{{--                                                </a>--}}
                                                <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('deleteFrom{{$category->id}}').submit();" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>

                                                <form id="deleteFrom{{$category->id}}" action="{{ route('admin-categories.destroy', $category->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                </form>
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
    </section>




@endsection
