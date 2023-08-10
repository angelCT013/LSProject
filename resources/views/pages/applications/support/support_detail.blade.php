@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="products_page product_page--grid mb-30">
    <div class="container-fluid">
        <div class="row justify-content-center">

        <div class="columns-2 col-lg-12">

            <div class="tab-content mt-25" id="ap-tabContent">
            <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
                <!-- Start: Shop Item -->
                <div class="row product-page-list justify-content-center">





                <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">

                    <div class="card product product--grid">
                    <div class="h-100">
                        <div class="product-item">
                        <div class="product-item__image">

                            <a href="#"><img class="card-img-top img-fluid" src="https://cdn-icons-png.flaticon.com/512/7042/7042615.png" alt="digital-chair"></a>
                        </div>

                        <div class="card-body px-20 pb-25 pt-25">
                            <div class="product-item__body text-capitalize">
                            <a href="http://lsproject.test/en/applications/ecommerce/product-detail">
                                <h6 class="card-title">Reset table</h6>
                            </a>
                            <div class="stars-rating d-flex align-items-center flex-wrap mb-10">
                                <button class="btn btn-success" onclick="resetDB()">Reset</button>

                            </div>
                            </div>


                        </div>



                        </div>
                    </div>
                    </div>

                </div>




                <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">

                    <div class="card product product--grid">
                    <div class="h-100">
                        <div class="product-item">
                        <div class="product-item__image">

                            <a href="#"><img class="card-img-top img-fluid" src="https://cdn-icons-png.flaticon.com/512/2878/2878806.png" alt="digital-chair"></a>
                        </div>

                        <div class="card-body px-20 pb-25 pt-25">
                            <div class="product-item__body text-capitalize">
                            <a href="http://lsproject.test/en/applications/ecommerce/product-detail">
                                <h6 class="card-title">Backup database</h6>
                            </a>
                            <div class="stars-rating d-flex align-items-center flex-wrap mb-10">
                            <button class="btn btn-success" onclick="backupDB()">Backup</button>

                            </div>
                            </div>

                        </div>



                        </div>
                    </div>
                    </div>

                </div>



                <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">

                    <div class="card product product--grid">
                    <div class="h-100">
                        <div class="product-item">
                        <div class="product-item__image">

                            <a href="#"><img class="card-img-top img-fluid" src="                            <a href="#"><img class="card-img-top img-fluid" src="https://www.pngall.com/wp-content/uploads/12/Restore-PNG-Pic.png" alt="digital-chair"></a>" alt="digital-chair"></a>
                        </div>
                        <div class="card-body px-20 pb-25 pt-25">
                            <div class="product-item__body text-capitalize">
                            <a href="http://lsproject.test/en/applications/ecommerce/product-detail">
                                <h6 class="card-title">Restore database</h6>
                            </a>
                            <div class="stars-rating d-flex align-items-center flex-wrap mb-10">
                               <button class="btn btn-success" onclick="restoreDB()">Restore</button>
                            </div>
                            </div>


                        </div>



                        </div>
                    </div>
                    </div>

                </div>






                <!-- End: Shop Item -->
            </div>



            </div>
            <!-- End: Shop Item -->
            <div class="row">
            <div class="col-12">
                <div class="user-pagination">

                </div>
            </div>
            </div>
        </div><!-- End: .columns-2 -->
        </div>
    </div>
    </div>
    <!-- End: .products -->



        </div>

        <script type="text/javascript">

            function resetDB(){
                    console.log('resetDB');
            }

            function backupDB(){
                console.log('backupDB');

            }

            function restoreDB(){
                console.log('restoreDB');

            }


        </script>
@endsection
