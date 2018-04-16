@extends('admin.layouts.app')

@section('main-content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>


        <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messages')
            <form role="form" action="{{ route('category.update', $category->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                      <label for="name">Category Title</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Category Title"
                      value="{{ $category->name }}">
                  </div>


                  <div class="form-group">
                      <label for="slug">Category Slug</label>
                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $category->slug }}">
                  </div>

              <div class="form-group"style="margin-top:39px">
                <label>Select Tags</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('category.index') }}" class="btn btn-primary" role="button" >Back</a>
                  </div>
                </div>
                  
              </div>
              <!-- /.box-body -->


            </form>



        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection