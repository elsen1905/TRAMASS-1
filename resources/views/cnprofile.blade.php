@extends('layouts.main_layout')


@section('content')

<div class="container-fluid change_pro">

            <div class="container">

            <!--title-->
                <div class="row title">
                    <div class="col-md-12">

                        <h2 class="text-capitalize">Edit Profile</h2>
                            <hr>
                    </div>


                </div>
                <!-- end title-->

                <!--start man info part-->
                <div class="row content">
                    <div class="col-md-3">
                        <div class="card">

                        <!--start all post part-->
                        <form method="post" action="/profile/{{$user->id}}  " >
                          {{ csrf_field() }}
                        <!--picure post part-->
                            <div class="card-block"> Picture </div>
                            <br>
                            <div class="photo">
                                <img class="card-img-bottom img-responsive" src="/img/dummy.png" alt="Card image cap">
                                <div class="text-center caption">


                                    <i id="click_trigger" class="fa fa-camera fa-2x btn btn-default btn-file" aria-hidden="true">

                                    </i>
                                    <input  id="click_submit" type="file" name="..." value="select" style="display:none;">


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
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email@email.com" readonly>
                            </div>
                            <div class="form-group">
                                <label for="biodata">Biodata</label>
                                <textarea name="" id="biodata" cols="30" class="form-control" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="province">Province</label>
                                <input type="text" class="form-control" id="province" value="o">
                            </div>
                            <div class="form-group">
                                <label for="region">Region</label>
                                <input type="text" class="form-control" id="region" value="o">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" value="o">
                                <span class="text-left">*informasi Alamat tidak dipublikasikan</span>
                            </div>
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" class="form-control" id="telephone" value="o">
                                <span class="text-left">*informasi No Telephone tidak dipublikasikan</span>
                            </div>

                            <div class="form-group">
                                <label for="telephone">Seller status</label>
                                <input type="checkbox" name="seller_status" value="1"   @if(Auth::user()->type) checked value="0" @endif  > 
                            </div>

                            <h3 class="text-capitalize">Informasi Ahli Waris</h3>
                            <div class="form-group">
                                <label for="informasi">Nama Ahli Waris</label>
                                <input type="text" class="form-control" id="informasi" value="o">

                            </div>
                            <div class="form-group">
                                <label for="notelp">No Telp. Ahli Waris</label>
                                <input type="text" class="form-control" id="notelp" value="o">

                            </div>
                            <div class="form-group">
                                <label for="almat">Alamat Ahli Waris</label>
                                <textarea name="" cols="30" class="form-control" rows="2" id="ealmat"></textarea>
                            </div>

                            <button type="submit" name="change_profile" formnovalidate="" class="btn btn-success btn-lg text-capitalize pull-right">Update profile</button>
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
