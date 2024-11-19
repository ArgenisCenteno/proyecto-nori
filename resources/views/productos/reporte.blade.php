@extends('layout.app')

@section('content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0 my-5">
                        <div class="px-2 row">
                            <div class="col-lg-12">
                                @include('flash::message')
                            </div>
                            <div class="col-md-6 col-6">
                                <h3 class="p-2 bold">Reporte de Ventas</h3>
                            </div>
                            <div class="d-flex justify-content-end mt-3">

                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('productos.export') }}" method="GET">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="disponible">Disponibilidad</label>
                                        <select id="disponible" name="disponible" class="form-control">
                                            <option value="">Todos</option>
                                            <option value="1">Disponible</option>
                                            <option value="0">No disponible</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="fecha_inicio">Fecha Inicio</label>
                                        <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="fecha_fin">Fecha Fin</label>
                                        <input type="date" id="fecha_fin" name="fecha_fin" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Exportar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> <!--end::App Main--> <!--begin::Footer-->
@endsection
@include('layout.script')
<script src="{{ asset('js/adminlte.js') }}"></script>
<script src="{{asset('js/sweetalert2.js')}}"></script>