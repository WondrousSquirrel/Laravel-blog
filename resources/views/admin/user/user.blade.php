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
            <form role="form">
              <div class="box-body">
                <div class="col-lg-6">

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
               

                <div class="col-lg-6">
                  
                  <div class="form-group">
                      <label for="Image">File input</label>
                      <input type="file" name="image" id="image">

                      
                  </div>

                  <br>


                  <div class="checkbox">
                      <label>
                      <input type="checkbox" name="status">Publish
                      </label>
                  </div>
                </div>
              </div>
               



                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            



        
            <!-- Main content -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Post Body Here
                <small>Simple  and fast</small>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea class="textarea" placeholder="Place some text here" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
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