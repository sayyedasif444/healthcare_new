@extends('admin.layout.master')
@section('content')

{{-- breadcrumb --}}
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 ml-0 mr-0">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Events</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Events</a></li>
            <li class="breadcrumb-item active">Edit Events</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="row m-0">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" id="event_form">
                        <div class="row">
                          <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Event Title</label>
                              <input type="text" class="form-control" placeholder="Enter Title..." id="event_title" value="{{$event->event_title}}">
                            </div>
                          </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Event Date</label>
                                <input type="date" id="event_date" class="form-control" placeholder="Date" value="{{$event->event_date}}">
                             </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Event Time</label>
                                  <input type="time" id="event_time" class="form-control" placeholder="Time" value="{{$event->event_time}}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group clearfix ml-2">
                                @php
                                    $image = '';
                                    $video = '';
                                    $slider = '';
                                    if($event->event_img_type == 'image'){
                                        $image = 'checked';
                                    }
                                    if($event->event_img_type == 'video'){
                                        $video = 'checked';
                                    }
                                    if($event->event_img_type == 'slider'){
                                        $slider = 'checked';
                                    }
                                @endphp
                                <p>Instructions: if you select anything in this section will override the current images/videos/slider content.</p>
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="image" value="image" name="r1"  @php echo $image @endphp>
                                  <label for="image">Image
                                  </label>
                                </div>
                                <div class="icheck-primary d-inline ml-2">
                                  <input type="radio" id="slider" value="slider" name="r1" @php echo $slider @endphp>
                                  <label for="slider">Slider
                                  </label>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="img" >
                            <div class="col-lg-4" >
                                <div class="form-group">
                                    <label>Single Image</label>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="images" >
                                      <label class="custom-file-label" for="images">Choose file</label>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row" id="slid" style="display: none">
                            <div class="col-lg-4" >
                                <div class="form-group">
                                    <label>Select images</label>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input sliders" id="sliders">
                                      <label class="custom-file-label" for="sliders">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" id="add_more_cont">
                                <button type="button" class="btn btn-info" id="add_more"><i class="fas fa-plus"></i> Add More</button>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="">
                                <label>Content</label>
                                <textarea class="textarea" id="event_desc" placeholder="Place some text here"  >{{$event->event_desc}}</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="">
                                <label>Event Schedule</label>
                                <textarea class="textarea2" id="event_sch" placeholder="Place some text here" >{{$event->event_sch}}</textarea>
                            </div>
                        </div>
                        <div class="row text-right"><button type="button" class="btn  btn-primary ml-auto pl-4 pr-4" id="save_event"><i class="fas fa-save"></i> Save Changes</button></div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{asset('admin/customFiles/edit-events.js')}}"></script>
@endsection
