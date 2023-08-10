@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ecommerce-products') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.dashboard-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ecommerce-products') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="products_page product_page--grid mb-30">
    <div class="container-fluid">
        <div class="row justify-content-center">
        {{-- <div class="columns-1 col-lg-8 col-sm-10  mb-lg-0 mb-30">
            <div class="widget mb-lg-30">
            <div class="widget-header-title px-20 py-15">
                <h6 class="d-flex align-content-center fw-500">
                <img src="{{ asset('assets/img/svg/sliders.svg') }}" alt="sliders" class="svg"> Filters
                </h6>
            </div>
            <div class="category_sidebar">
                <!-- Start: Aside -->
                <aside class="product-sidebar-widget mb-30">
                <!-- Title -->
                <div class="widget_title nocollapse">
                    <h6>Price Range</h6>
                </div>
                <!-- Title -->
                <!-- Body -->
                <div class="card border-0 shadow-none mt-10">
                    <div class="product-price-ranges">
                    <div id="price-range" class="mb-0">
                        <div class="section price">
                        <div class="price-slider"></div>
                        <p class="price-value"></p>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Body -->
                </aside>
                <!-- End: Aside -->
                <!-- Start: Aside -->
                <aside class="product-sidebar-widget mb-30">
                <!-- Title -->
                <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" role="button" aria-expanded="true">
                    <h6>Category</h6>
                </div>
                <!-- Title -->
                <!-- Body -->
                <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample2">
                    <div class="product-category limit-list-item">
                    <ul>
                        <li>
                        <div class="w-100">
                            <span class="fs-14 color-gray">Accessories<span class="item-numbers">25</span></span>
                        </div>
                        </li>
                        <li>
                        <div class="w-100">
                            <span class="fs-14 color-gray">Appliances<span class="item-numbers">54</span></span>
                        </div>
                        </li>
                        <li>
                        <div class="w-100">
                            <span class="fs-14 color-gray">Bags<span class="item-numbers">78</span></span>
                        </div>
                        </li>
                        <li>
                        <div class="w-100">
                            <span class="fs-14 color-gray">Electronic<span class="item-numbers">42</span></span>
                        </div>
                        </li>
                        <li>
                        <div class="w-100">
                            <span class="fs-14 color-gray">Entertainment<span class="item-numbers">35</span></span>
                        </div>
                        </li>
                        <li>
                        <div class="w-100">
                            <span class="fs-14 color-gray">Induction<span class="item-numbers">64</span></span>
                        </div>
                        </li>
                        <li>
                        <div class="w-100">
                            <span class="fs-14 color-gray">Mobile phone<span class="item-numbers">92</span></span>
                        </div>
                        </li>
                    </ul>
                    </div>
                </div>
                <!-- Body -->
                </aside>
                <!-- End: Aside -->
                <!-- Start: Aside -->
                <aside class="product-sidebar-widget mb-30">
                <!-- Title -->
                <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" role="button" aria-expanded="true">
                    <h6>Brands</h6>
                </div>
                <!-- Title -->
                <!-- Body -->
                <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample3">
                    <div class="product-brands limit-list-item">
                    <ul>
                        <li>

                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="check-1">
                            <label for="check-1">
                            <span class="checkbox-text">
                                Appliances

                                <span class="item-numbers">25</span>

                            </span>
                            </label>
                        </div>


                        </li>
                        <li>

                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="check-2">
                            <label for="check-2">
                            <span class="checkbox-text">
                                Bags

                                <span class="item-numbers">54</span>

                            </span>
                            </label>
                        </div>

                        </li>
                        <li>

                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="check-3">
                            <label for="check-3">
                            <span class="checkbox-text">
                                Electronic

                                <span class="item-numbers">78</span>

                            </span>
                            </label>
                        </div>


                        </li>
                        <li>

                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="check-4">
                            <label for="check-4">
                            <span class="checkbox-text">
                                Entertainment

                                <span class="item-numbers">42</span>

                            </span>
                            </label>
                        </div>


                        </li>
                        <li>

                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="check-5">
                            <label for="check-5">
                            <span class="checkbox-text">
                                Induction

                                <span class="item-numbers">35</span>

                            </span>
                            </label>
                        </div>


                        </li>
                        <li>

                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="check-6">
                            <label for="check-6">
                            <span class="checkbox-text">
                                Laptops

                                <span class="item-numbers">64</span>

                            </span>
                            </label>
                        </div>


                        </li>
                    </ul>
                    </div>
                </div>
                <!-- Body -->
                </aside>
                <!-- End: Aside -->
                <!-- Start: Aside -->
                <aside class="product-sidebar-widget">
                <!-- Title -->
                <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" role="button" aria-expanded="true">
                    <h6>Ratings</h6>
                </div>
                <!-- Title -->
                <!-- Body -->
                <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample4">
                    <div class="product-ratings">
                    <ul>
                        <li>
                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="rating-1">
                            <label for="rating-1">

                            <span class="stars-rating d-flex align-items-center">
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="checkbox-text">
                                and up
                                <span class="item-numbers">42</span>
                                </span>
                            </span>

                            </label>
                        </div>
                        </li>
                        <li>
                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="rating-3">
                            <label for="rating-3">

                            <span class="stars-rating d-flex align-items-center">
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="checkbox-text">
                                and up
                                <span class="item-numbers">54</span>
                                </span>
                            </span>

                            </label>
                        </div>
                        </li>
                        <li>
                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="rating-4">
                            <label for="rating-4">

                            <span class="stars-rating d-flex align-items-center">
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="checkbox-text">
                                and up
                                <span class="item-numbers">78</span>
                                </span>
                            </span>

                            </label>
                        </div>
                        </li>
                        <li>
                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="rating-5">
                            <label for="rating-5">

                            <span class="stars-rating d-flex align-items-center">
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="checkbox-text">
                                and up
                                <span class="item-numbers">42</span>
                                </span>
                            </span>

                            </label>
                        </div>
                        </li>
                        <li>
                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="rating-6">
                            <label for="rating-6">

                            <span class="stars-rating d-flex align-items-center">
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="star-icon las la-star inactive"></span>
                                <span class="checkbox-text">
                                and up
                                <span class="item-numbers">35</span>
                                </span>
                            </span>

                            </label>
                        </div>
                        </li>
                    </ul>
                    </div>
                </div>
                <!-- Body -->
                </aside>
                <!-- End: Aside -->
            </div>
            </div><!-- End: .widget -->
        </div><!-- End: .columns-1 --> --}}
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
                            <span class="like-icon">
                            <button type="button" class="content-center">
                                <i class="lar la-heart icon"></i>
                            </button>
                            </span>
                            <a href="#"><img class="card-img-top img-fluid" src="{{ asset('assets/img/digital-chair.png') }}" alt="digital-chair"></a>
                        </div>

                        <div class="card-body px-20 pb-25 pt-25">
                            <div class="product-item__body text-capitalize">
                            <a href="{{ route('ecommerce.product_detail',app()->getLocale()) }}">
                                <h6 class="card-title">Producto1</h6>
                            </a>
                            <div class="stars-rating d-flex align-items-center flex-wrap mb-10">
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star-half-alt active"></span>
                                <span class="stars-rating__point">4.9</span>
                                <span class="stars-rating__review">
                                <span>778</span> Reviews</span>
                            </div>
                            </div>
                            <div class="product-item__footer">

                            <div class="d-flex align-items-center flex-wrap">
                                <span class="product-desc-price">$200.00</span>
                                <span class="product-price">$100.00</span>
                                <span class="product-discount">50% Off</span>
                            </div>
                            </div>
                            <div class="product-item__button d-flex mt-20 flex-wrap">

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
                {{-- <div class="d-flex justify-content-lg-end justify-content-center mt-1 mb-30">

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
                            <option value="20">20/paginas</option>
                            <option value="40">40/paginas</option>
                            <option value="60">60/paginas</option>
                            </select>
                        </div>
                        </li>
                    </ul>
                    </nav>


                </div> --}}
                </div>
            </div>
            </div>
        </div><!-- End: .columns-2 -->
        </div>
    </div>
    </div>
    <!-- End: .products -->
    <div class="col-12 mb-30">
            <div class="support-ticket-system support-ticket-system--search">
                <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Productos</h4>
                        </div>
                    </div>

                </div>
                <div class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">

                    <div class="support-form__search">
                        <div class="support-order-search">
                            <form action="/" class="support-order-search__form">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header">

                                    <th>
                                        <span class="userDatatable-title">Producto</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">numSerie</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">modelo</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">categoria</span>
                                    </th>
                                    <th class="actions">
                                        <span class="userDatatable-title">Actions</span>
                                    </th>

                                </tr>
                            </thead>
                            <tbody class='tbody'>






                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="d-flex justify-content-end pt-30">
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
                    </div> -->
                </div>
            </div>
        </div>

<div class="modal fade" id="ModalEnlazar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="modaltitle">Editar producto: <h3 id="neditar1">a</h3></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{ route('ecommerce.products', app()->getLocale()) }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="nombre">Nombre</label>
                                                <input  class="form-control" type="hidden" name="idproducto" id="idproducto" >
                                                <input  class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre producto..." required>
                                            </div>
                                            <div class="form-group">
                                                <label for="numSerie">Número de Serie</label>
                                                <input  class="form-control" type="text" name="numSerie" id="numSerie" placeholder="Número de serie del producto..." required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status_id">Estado</label>
                                                <select class="js-example-basic-single js-states form-control" name="status_id" id="status_id" required>
                                                    <option value="1">Activo</option>
                                                    <option value="2">Inactivo</option>
                                                    <option value="3">Baja</option>

                                                </select>
                                            </div>
                                            <div class="form-group">

                                            <label for="modelo_id">Modelo</label>
                                            <select class="js-example-basic-single js-states form-control" name="modelo_id" id="modelo_id" required>
                                                <option value="" id="opModelo" selected>Seleccionar Modelo</option>
                                                <option value="1">Z Book</option>
                                                <option value="2">ThinkPad</option>
                                                <option value="3">MacBook Pro</option>
                                                <option value="4">Galaxy Book</option>
                                                <option value="5">XPS</option>
                                                <option value="6">VAIO</option>
                                                <option value="7">ROG</option>
                                                <option value="8">Surface Laptop</option>
                                                <option value="9">Satellite</option>
                                                <option value="10">Gram</option>
                                                <option value="11">Toughbook</option>
                                                <option value="12">ThinkCentre</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="categoria_id">Categoría</label>
                                                <select class="js-example-basic-single js-states form-control" name="categoria_id" id="categoria_id" required>
                                                    <option value="" selected>Seleccionar Categoria</option>
                                                    <option value="1">Tecnologia</option>
                                                    <option value="2">Bebes</option>
                                                    <option value="3">Ropa</option>
                                                    <option value="4">Higiene</option>
                                                    <option value="5">Belleza</option>
                                                </select>
                                            </div>
                                            <div class="form-group">

                                            <label for="descripcion">Descripción</label>
                                            <textarea class="form-control" rows="3" name="descripcion" id="descripcion" placeholder="Descripcion producto..." required></textarea>
                                            </div>

                                            <button class="btn btn-primary btn-default btn-squared text-capitalize" type="submit">Editar Producto</button>


                                            {{-- <label for="imagen">Imagen</label>
                                            <input type="text" name="imagen" id="imagen"> --}}


        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Cerrar</button>

    </div>
    </div>
  </div>

</div>



<div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="modaltitle">Eliminar producto: <h4 id="neditar">a</h4></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="/Eliminar-Productos" method="post">

                @csrf
                <input  class="form-control" value="" type="hidden" name="idproducto_Del" id="idproducto_Del" >

            <button class="btn btn-primary btn-default btn-squared text-capitalize" onclick="deleteProducto()" type="submit">Eliminar Producto</button>
        </form>
      </div>

    </div>
  </div>
</div>




        <script type='text/javascript'>
        var modalEnlazar = document.getElementById('ModalEnlazar');
        var ModalEliminar = document.getElementById('ModalEliminar');

        var nombreE= document.getElementById('nombre');
        var numserieE = document.getElementById('numSerie');
        var descripcionE = document.getElementById('descripcion');

        var modeloid = document.getElementById('modelo_id');
        var categoriaid = document.getElementById('categoria_id');
        var statusid = document.getElementById('status_id');
        var idproducto = document.getElementById('idproducto');

        var idproducto2 = document.getElementById('idproducto2');
        var tneditar = document.getElementById('neditar');
        var tneditar1 = document.getElementById('neditar1');


         $(document).ready(function(){
            productos();
         })

         function productos(){
            var tbody = document.querySelector('.tbody');
           $.ajax({
            type:"GET",
            url:"/obtener-productos",
            datatype:'json',
            success: function(response){
                let res = response;
                res.forEach(function(valor,index,array){
                    var producto_id = valor.producto_id;
                    var nombre = valor.nombre;
                    var numSerie = valor.numSerie;
                    var nmodelo = valor.modelo;
                    var ncategoria= valor.categoria;
                    var status = valor.status_id;
                    var descripcion = valor.descripcion;
                    var modeloid = valor.modelo_id;
                    var cateogoriaid = valor.categoria_id;
                
                    var data = producto_id +'||'+ nombre +'||'+ numSerie +'||'+ nmodelo +'||'+ ncategoria +'||'+ status +'||'+ descripcion +'||'+modeloid+'||'+cateogoriaid;
                    var data2 = producto_id +'||'+ nombre;
                    var tdHtml = '';  // Creamos una variable para guardar el HTML del <td>

                        // Verificar si el rol es 3 para incluir o no la clase al <td>
                            if ('{{ session('rol') }}' == 3) {
                            tdHtml = '<td>' +
                                        '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">' +
                                            '<li>' +
                                                '<a href="#" class="edit">' +
                                                    '<i class="uil uil-edit" onclick="editar(\''+data+'\')"></i>' +
                                                '</a>' +
                                            '</li>' +
                                            '<li>' +
                                                '<a href="#" class="remove" onclick="borrar(\''+data2+'\')">' +
                                                    '<i class="uil uil-trash-alt"></i>' +
                                                '</a>' +
                                            '</li>' +
                                        '</ul>' +
                                    '</td>';
                            } else {
                            tdHtml = '<td></td>';  // Si el rol no es 3, simplemente un <td> vacío
                            }

                    var html =    '<tr>'
                                    +'<td>'
                                        +'<div class="d-flex">'
                                            +'<div class="userDatatable-inline-title">'
                                                +'<a href="#" class="text-dark fw-500">'
                                                    +'<h6>'+nombre+'</h6>'
                                                +'</a>'
                                            +'</div>'
                                        +'</div>'
                                    +'</td>'
                                    +'<td>'
                                        +'<div class="userDatatable-content--subject">'
                                              +'<h6>'+numSerie+'</h6>'
                                        +'</div>'
                                    +'</td>'
                                    +'<td>'
                                        +'<div class="userDatatable-content--subject">'
                                            +'<h6>'+nmodelo+'</h6>'
                                        +'</div>'
                                    +'</td>'
                                    +'<td>'
                                        +'<div class="userDatatable-content--priority">'
                                            +'<h6>'+ncategoria+'</h6>'
                                        +'</div>'
                                    +'</td>'

                                    + tdHtml 
                                +'</tr>';

                                $(html).appendTo(tbody);


                })

            }
           })


         }

         function editar(data){
                $(modalEnlazar).modal('show');
                var dataSplit = data.split('||');
                var productoid = dataSplit[0];
                var nombre = dataSplit[1];
                var numSerie = dataSplit[2];
                // var modelo_id = dataSplit[7];
                // var categoriaid = dataSplit[8];
                var status = dataSplit[5];
                var descripcion = dataSplit[6];
                // console.log(dataSplit);
                // console.log(data);
                // console.log(dataSplit[7]);
                // console.log(dataSplit[8]);
                // console.log(modeloid);
                // console.log(categoriaid);

                var modelo_id = dataSplit[7];

                var selectElement = document.getElementById("modelo_id");

                // Recorre las opciones del select
                for (var i = 0; i < selectElement.options.length; i++) {
                    var option = selectElement.options[i];

                    // Compara el valor de la opción con el valor que deseas seleccionar
                    if (option.value == modelo_id) {
                        // Establece la opción como seleccionada
                        option.selected = true;
                        break;
                    }
                }
                var categoria_id = dataSplit[8];

                var selectElement = document.getElementById("categoria_id");

                // Recorre las opciones del select
                for (var i = 0; i < selectElement.options.length; i++) {
                    var option = selectElement.options[i];

                    // Compara el valor de la opción con el valor que deseas seleccionar
                    if (option.value == categoria_id) {
                        // Establece la opción como seleccionada
                        option.selected = true;
                        break;
                    }
                }


                idproducto.value = productoid;
                nombreE.value = nombre;
                numserieE.value = numSerie;
                descripcionE.value = descripcion;
                // modeloid.value = modeloid;
                // categoriaid.value = categoriaid;
                statusid.value = status;
                neditar1.innerHTML = nombre;




         }

         function borrar(data2){
            // console.log(data2);

            var dataSplit = data2.split('||');
            // console.log(dataSplit);
            // console.log(dataSplit[0]);

            idproducto_Del.value = dataSplit[0];

            tneditar.innerHTML = dataSplit[1];
            $(ModalEliminar).modal('show');

         }

         function closeModal(){
        var ModalEnlazar = document.getElementById('ModalEnlazar');
        $(ModalEnlazar).modal('hide');
        }
        // function deleteProducto(){
        //     // console.log(data2);

        //     var idProducto_del= document.getElementById('idproducto_Del').value;
        //     console.log(idProducto_del);
        //  }
      


        </script>




@endsection
