@extends('layout.app')
@section('content')

<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!--begin::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{$ventas}}</h3>
                            <p>Ventas</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z">
                            </path>
                        </svg> <a href="{{route('ventas.index')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                           Ver más <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{$compras}}<sup class="fs-5"></sup></h3>
                            <p>Compras</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                            </path>
                        </svg> <a  href="{{route('compras.index')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            Ver más <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 3-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{$usuarios}}</h3>
                            <p>Usuarios Registrados</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg> <a href="{{route('usuarios.index')}}"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            Ver más <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 3-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>{{$productos}}</h3>
                            <p>Productos</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z">
                            </path>
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z">
                            </path>
                        </svg> <a href="{{route('almacen')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            Ver más <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 4-->
                </div> <!--end::Col-->
            </div> <!--end::Row--> <!--begin::Row-->
            <div class="row">
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 5-->
                    <div class="small-box text-bg-info">
                        <div class="inner">
                            <h3>{{$proveedores}}</h3>
                            <p>Proveedores</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M12 2C7.589 2 4 5.589 4 10v9h2v3h12v-3h2v-9c0-4.411-3.589-8-8-8zm1 18h-2v-2h2v2zm4-4H7v-4h10v4zm0-5H7v-1c0-3.309 2.691-6 6-6s6 2.691 6 6v1z">
                            </path>
                        </svg>
                        <a href="{{route('proveedores.index')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            Ver más <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div> <!--end::Small Box Widget 5-->

                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 6-->
                    <div class="small-box text-bg-secondary">
                        <div class="inner">
                            <h3>{{$categorias}}</h3>
                            <p>Categorías</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M12 3L2 9l10 6 10-6-10-6zm0 7l8.485-4.909L12 8 3.515 5.091 12 10zM2 19v-2l10 6 10-6v2l-10 6-10-6zm10-4l10-6v4l-10 6-10-6v-4l10 6z">
                            </path>
                        </svg>
                        <a href="{{route('categorias.index')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            Ver más <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div> <!--end::Small Box Widget 6-->

                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 7-->
                    <div class="small-box text-bg-dark">
                        <div class="inner">
                            <h3>{{$subcategorias}}</h3>
                            <p>Subcategorías</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M12 2C6.486 2 2 6.486 2 12c0 5.514 4.486 10 10 10s10-4.486 10-10c0-5.514-4.486-10-10-10zM12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm-1 4v8h2V8h-2zm-2 2H7v4h2v-4zm8 0h-2v4h2v-4z">
                            </path>
                        </svg>
                        <a href="{{route('subcategorias.index')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                           Ver más <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div> <!--end::Small Box Widget 7-->

                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 8-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{$pagos}}</h3>
                            <p>Pagos</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M3 6h18v12H3zM2 4v16h20V4H2zm10 5h5v1h-5v-1zm0 2h7v1h-7v-1z"></path>
                        </svg>
                        <a href="{{route('pagos.index')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            Ver más <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div> <!--end::Small Box Widget 8-->
            </div>


        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->


@include('layout.script')
<script src="{{ asset('js/adminlte.js') }}"></script>
@endsection