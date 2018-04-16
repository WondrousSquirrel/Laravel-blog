@extends('admin.layouts.app')

@section('head-section')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

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




     <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messages')
            <!-- action важен для чего мы применяем эту форму-->
            <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-6">
                <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                      <label for="title">Post Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  </div>


                  <div class="form-group">
                      <label for="subtitle">Post Sub Title</label>
                      <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title">
                  </div>

                  <div class="form-group">
                      <label for="slug">Post Slug</label>
                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                  </div>
                </div>


                 
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="Image">File input</label>
                      <input type="file" name="image" id="image">
                  </div>

              <div class="form-group" >
                <label>Select Tags</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Tag" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                  @foreach ($tags as $tag)
                   <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group" >
                <label>Select Category</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]"> <!-- квадратные скобки указывают что хотим выбрать каждую выделеные объект-->
                  @foreach ($categories as $category)
                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="checkbox">
                      <label>
                      <input type="checkbox" name="status" value="1">Publish
                      </label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              
            



        
            <!-- Main content -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Post Body Here
                <small>Simple  and fast</small>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea id="editor1" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
          </div>
           <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('category.index') }}" class="btn btn-primary" role="button" >Back</a>
                  </div>
          </form>
        </div>

          </div>
          <!-- /.box -->



        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('footer-section')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<script>
  $(document).ready(function(){
    $(".select2").select2();
  });

</script>

    <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

@endsection