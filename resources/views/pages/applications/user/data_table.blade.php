@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <div class="breadcrumb-main user-member justify-content-sm-between ">
                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                    <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                        <h4 class="text-capitalize fw-500 breadcrumb-title">{{ trans('menu.user-table') }}</h4>
                        <span class="sub-title ms-sm-25 ps-sm-25">Home</span>
                    </div>

                    <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                        <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                    </form>

                </div>
                <div class="action-btn">
                    <a href="#" class="btn px-15 btn-primary" data-bs-toggle="modal" data-bs-target="#new-member">
                        <i class="las la-plus fs-16"></i>users list datatable</a>

                    <!-- Modal -->
                    <div class="modal fade new-member " id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content  radius-xl">
                                <div class="modal-header">
                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Create project</h6>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="new-member-modal">
                                        <form>
                                            <div class="form-group mb-20">
                                                <input type="text" class="form-control" placeholder="Duran Clayton">
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="category-member">
                                                    <select class="js-example-basic-single js-states form-control" id="category-member">
                                                        <option value="JAN">1</option>
                                                        <option value="FBR">2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Project description"></textarea>
                                            </div>
                                            <div class="form-group textarea-group">
                                                <label class="mb-15">status</label>
                                                <div class="d-flex">
                                                    <div class="project-task-list__left d-flex align-items-center">
                                                        <div class="checkbox-group d-flex me-50 pe-10">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-1" checked>
                                                                <label for="check-grp-1" class="fs-14 color-light strikethrough">
                                                                    status
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-group d-flex me-50 pe-10">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-2">
                                                                <label for="check-grp-2" class="fs-14 color-light strikethrough">
                                                                    Deactivated
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-group d-flex">
                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                <input class="checkbox" type="checkbox" id="check-grp-3">
                                                                <label for="check-grp-3" class="fs-14 color-light strikethrough">
                                                                    bloked
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-25">
                                                <div class="form-group mb-10">
                                                    <label for="name47">project member</label>
                                                    <input type="text" class="form-control" id="name47" placeholder="Search members">
                                                </div>
                                                <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm1.png') }}" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm2.png') }}" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm3.png') }}" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm4.png') }}" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="{{ asset('assets/img/tm5.png') }}" alt="author"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex new-member-calendar">
                                                <div class="form-group w-100 me-sm-15 form-group-calender">
                                                    <label for="datepicker">start Date</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/yyyy">
                                                        <a href="#">
                                                            <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg"></a>
                                                    </div>
                                                </div>
                                                <div class="form-group w-100 form-group-calender">
                                                    <label for="datepicker2">End Date</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" id="datepicker2" placeholder="mm/dd/yyyy">
                                                        <a href="#">
                                                            <img class="svg" src="{{ asset('assets/img/svg/chevron-right.svg') }}" alt="chevron-right.svg"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-group d-flex pt-25">


                                                <button class="btn btn-primary btn-default btn-squared text-capitalize">add new project
                                                </button>





                                                <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-bs-dismiss="modal">cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->

                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30">
                <div class="table-responsive">
                    <table class="table mb-0 table-borderless">
                        <thead>
                            <tr class="userDatatable-header">
                                <th>
                                    <span class="userDatatable-title">Nombre</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Correo</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">ciudad</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">tipo</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title float-end">action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="tbody">


                           



            
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end pt-30">

                    <nav class="dm-page ">
                        <ul class="dm-pagination d-flex">
                            <li class="dm-pagination__item">
                                <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                                <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                                <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                                <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                <a href="#" class="dm-pagination__option">
                                </a>
                            </li>
                            <li class="dm-pagination__item">
                                <div class="paging-option">
                                    <select name="page-number" class="page-selection">
                                        <option value="20">20/page</option>
                                        <option value="40">40/page</option>
                                        <option value="60">60/page</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </nav>


                </div>
            </div>
        </div>
    </div>
</div>
<script>

$(document).ready(function(){
            usuarios();
         })

         function usuarios(){


           $.ajax({
            type:"GET",
            url:"/obtener-usuarios",
            datatype:'json',
            success: function(response){
                var tbody = document.querySelector('.tbody');
                let res = response;
                res.forEach(function(valor,index,array){
                   var nombre= valor.name ;
                   var apellido= valor.lastname ;
                    if(apellido == null){
                        var fullnombre = nombre;

                    }else{
                        var fullnombre = nombre+' '+apellido;
                    }


                   var email= valor.email ;
                   var tipo= valor.tipo ;
                   var ciudad= valor.nombre ;






                    var html =  '<tr>'
                                +'<td>'
                                    +'<div class="userDatatable-content">'
                                    +'<p class="d-block mb-0">'
                                                +fullnombre
                                            +'</p>'
                                    +'</div>'
                                +'</td>'
                                +'<td>'
                                    +'<div class="userDatatable-content">'
                                    +'<p class="d-block mb-0">'
                                             +email
                                            +'</p>'
                                    +'</div>'
                                +'</td>'
                                +'<td>'
                                    +'<div class="userDatatable-content">'
                                    +'<p class="d-block mb-0">'
                                                +ciudad
                                            +'</p>'
                                    +'</div>'
                               +'</td>'
                                +'<td>'
                                    +'<div class="userDatatable-content">'
                                    +'<p class="d-block mb-0">'
                                                +tipo
                                            +'</p>'
                                    +'</div>'
                                +'</td>'
                                +'<td>'
                                    +'<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">'
                                        +'<li>'
                                            +'<a href="#" class="view">'
                                                +'<i class="uil uil-eye"></i>'
                                            +'</a>'
                                        +'</li>'
                                        +'<li>'
                                            +'<a href="#" class="edit">'
                                                +'<i class="uil uil-edit"></i>'
                                            +'</a>'
                                        +'</li>'
                                        +'<li>'
                                            +'<a href="#" class="remove">'
                                                +'<i class="uil uil-trash-alt"></i>'
                                            +'</a>'
                                        +'</li>'
                                    +'</ul>'
                                +'</td>'
                            +'</tr>';

                            $(html).appendTo(tbody);        

                })

            }
           })


         }

        </script>
@endsection
