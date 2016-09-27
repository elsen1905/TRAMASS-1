@extends('layouts.main_layout')



@section('content')

<div class="container-fluid" id="profile">
            <div class="container">
                <div class="row content">
                    <div class=" col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/img/dummy.png" alt="..." class="img-circle img-responsive">

                            </div>
                            <div class="col-md-9">
                                <!--info about man-->
                                <h2 class="text-uppercase"> {{ $user->name }} {{  $user->surname }}
                                @if($user->id == Auth::user()->id)


              <!--change-profile link-->

                                  <a href="/cnprofile/{{ $user->id }}">
                                         <i class="fa fa-pencil-square-o" aria-hidden="true" style="float: right;"></i>
                                  </a>

                                @endif
                                </h2>
                                <p>No description is available</p>
                                <!--Table about planted absorbed participated;-->
                                <table class=" table" style=" border-top-style:hidden;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>0</b>
                                                Seed Planted
                                            </td>
                                            <td>
                                                <b>0</b>
                                                kg CO
                                                <sub>2</sub>
                                                Absorbed
                                            </td>
                                            <td> Participated</td>
                                        </tr>
                                    </tbody>

                                </table>
<!--button for invest-->
                                <div class="text-left">
                                    <a type="button" class="btn btn-success btn-lg" href="/product">Products</a>
                                    @if(Auth::user()->type)
                                    <a type="button" class="btn btn-success btn-lg" href="/create_product/{{ Auth::user()->id }}">Create Product</a>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <!--penting part-->
                        <h2 class="text-center text-capitalize">
                        Pending Payment
                        </h2>
                        @foreach($user->products as $user_products)
                            <div class="row penting">
                                <hr>
                                <div class="col-md-6">
                                        <ul class="media-list">
                                            <li class="media">
                                              <a class="media-left" href="#">
                                                 <img src="" alt="" class="img-responsive">
                                             </a>
                                             <div class="media-body">
                                                 <h3 class="media-heading"><a href="#">{{ $user_products->title }}</a></h3>
                                                 <br>
                                             <i class="fa fa-bookmark" aria-hidden="true"></i>{{ $user_products->product_category->title }}</p>

                                            </li>
                                    </ul>
                                </div>

                                <!--pending payment right part-->
                                <div class="col-md-6">
                                    <table class="table" style="border-top-style:hidden;">
                                        <tbody>
                                            <tr>
                                                <td class="pull-right" style="border-top-style:hidden;">

                                                    Price
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td> {{  $user_products->price }}</td>
                                            </tr>
                                            <tr>
                                                <td class="pull-right" style="border-top-style:hidden;">

                                                    Seed Planted
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td> Participated</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                                <button type="button" name="add_to_cart"  class="btn btn-success pull-right">Add to cart</button>
                        </div>
                    @endforeach
                    <hr>
                    <!--seed part-->
                    <div class="row seed text-center">

                    <!--title-->
                        <h2 class="text-center text-capitalize">
                        my seed
                        </h2>
                        <hr>
                        <!-- two button part-->
                        <div class="col-md-6 col-xs-6 text-uppercase text-center" id="left">
                            <a name="button"> on planting</a>
                        </div>
                        <div class="col-md-6 col-xs-2 text-uppercase text-center" id="right">
                            <a name="button">
                            harvested</a>
                        </div>
                        <!--line which scrol(left-right)-->
                        <div class="col-md-6 line">

                        </div>
                        <br>
                        <!-- button part end-->

                        <!--part where we put some information-->
                        <div class="col-md-12 text-center leftInfo" >
                        <img src="/img/empty-state.png" class="img-responsive" alt="Responsive image">
                        <p class="text-center">Whoops you don't have any on planting seed</p>
                        </div>

                        <div class="col-md-12 text-center rightInfo" style="display: none">
                        <img src="/img/empty-state.png" class="img-responsive" alt="Responsive image">
                        <p class="text-center">Whoops Bla bla bla</p>
                        </div>
                    </div>
                </div>



                <!--right part (global col-md-3)-->

                <div class="col-md-3">

                <!--part about time -->
                    <div class="upcoming">

                        <h3 class="text-capitalize text-left">
                        Upcoming Harvest
                        </h3>
                        <hr>
                          <ul class="media-list">
                                    <li class="media">

                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Avokado</a></h3>
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp <a href = "#">Tanjung Lesung Agropolis</a>
                                            <br>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp  10 September 2020</p>
                                    </div>
                                </li>

                            </ul>

                        <p class="text-center">There is no upcoming harvest </p>
                    </div>
                    <!--end time part-->

                    <!--part about investment-->
                    <br>
                    <div class="investment">
                        <h3 class="text-capitalize text-left">
                        Recent Investment
                        </h3>
                        <hr>
                        <ul class="media-list">
                            <li class="media">
                                <a class="media-left" href="#">
                                    <img class="media-object" src="/img/dummy.png" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <span class="media-heading">Irma R Thala has planted crop</span>
                                    <p><a href="#">Avocado</a> in <a href="#"> Tanjung Lesung Agropolis</a></p>
                                </div>
                                <p>1 day ago</p>
                            </li>

                            <li class="media">
                                <a class="media-left" href="#">
                                    <img class="media-object" src="/img/dummy.png" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <span class="media-heading">Irma R Thala has planted crop</span>
                                    <p><a href="#">Deli Water Apple </a> in <a href="#">  Jonggol, Jawa Barat</a></p>
                                </div>
                                <p>1 day ago</p>
                            </li>
                            <li class="media">
                                <a class="media-left" href="#">
                                    <img class="media-object" src="/img/dummy.png" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <span class="media-heading">Irma R Thala has planted crop</span>
                                    <p><a href="#">Deli Water Apple </a> in <a href="#">  Jonggol, Jawa Barat</a></p>
                                </div>
                                <p>1 day ago</p>
                            </li>


                        </ul>

                    </div>

                    <!--end investment part-->
                    <br>

                    <!--info from our blog-->
                    <div class="ourBlog">
                        <h3 class="text-capitalize text-left">
                        From Our Blog
                        </h3>
                        <hr>
                        <span>
                            <a href="#" class="text-capitalize">Obah</a>
                            <p>2 days ago</p>
                        </span>
                        <span>
                            <a href="#" class="text-capitalize">Selling An Experience, Selling A Vision</a>
                            <p>1 month ago</p>
                        </span>
                        <span>
                            <a href="#" class="text-capitalize">Seeds of Life</a>
                            <p>1 month ago</p>
                        </span>
                    </div>
                    <!--end info part-->

                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')

<script>

 $(document).ready(function(){

    $("#left").click(function(){
        $(".line").animate({
        "left":"0%"
    },500);
       /* .css("border-bottom","2px solid #417630");
         $("#right").css("border-bottom","");*/
    $(".seed")
    $(".rightInfo")
    .hide();
    $(".leftInfo")
    .show();



  })

    $("#right").click(function(){
        $(".line").animate({
        "left":"50%"
    },500);
         /*$(this)
        .css("border-bottom","2px solid gray");
        $("#left").css("border-bottom","#417630");*/
        $(".seed")
         $(".leftInfo").hide();
         $(".rightInfo").show();

    })
});
</script>
@endsection
