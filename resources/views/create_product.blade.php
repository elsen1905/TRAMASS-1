@extends('layouts.main_layout')


@section('content')

<div class="container-fluid change_pro">

            <div class="container">

            <!--title-->
                <div class="row title">
                    <div class="col-md-12">

                        <h2 class="text-capitalize">Create Product</h2>
                            <hr>
                    </div>


                </div>
                <!-- end title-->

                <!--start man info part-->
                <div class="row content">
                    <div class="col-md-3">
                        <div class="card">

                        <!--start all post part-->
                        <form method="post" action=""  enctype="multipart/form-data">
                          {{ csrf_field() }}


                        <!--picure post part-->

                            <div class="card-block"> Picture </div>
                            <br>
                            <div class="photo">
                                <img class="card-img-bottom img-responsive" src="/img/dummy.png" alt="Card image cap">
                                <div class="text-center caption">


                                    <i id="click_trigger" class="fa fa-camera fa-2x btn btn-default btn-file" aria-hidden="true">

                                    </i>
                                    <input  id="click_submit" type="file" name="image" value="select" style="display:none;">


                                    <h3 class="text-center text-capitalize">change picture</h3>

                                </div>


                            </div>

<!--end img post part-->

                         <!--    <div class="fileinput fileinput-new" data-provides="fileinput">
                             <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 248px; height: 248px;"></div>
                             <div>
                                 <span class="btn btn-default btn-file"><i class="fileinput-new">Select image</i><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                 <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                             </div>
                         </div> -->
                        </div>
                    </div>

                    <!--start another info inputs-->
                    <div class="col-md-9">


                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Product title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" name="discription" class="form-control" id="description" placeholder="description" ></textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label for="count">Count</label>
                                <textarea name="count" id="count" cols="30" class="form-control" rows="2" placeholder="Hectar Count"></textarea>
                            </div> -->
                            <div class="form-group">
                                <label for="price">Price for hectare in AZN</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                            </div>
                            <div class="form-group">
                              <label for="">Category</label>
                                <select class="form-control" name="product_category_id" >
                                    @foreach($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <button type="submit" name="change_profile"
                            class="btn btn-success btn-lg text-capitalize pull-right">Create Product</button>
                        </form>

                        <!--end -->


                    </div>


                </div>
            </div>
        </div>


@endsection


@section('script')
<script>
	      $('.photo').mouseenter(function(){
            $('.caption').fadeIn();
        })
        $('.photo').mouseleave(function(){
            $('.caption').fadeOut();
        })

        $("#click_trigger").click(function() {
            $("#click_submit").click();
        });
</script>

@endsection
