<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Compra;
use App\Models\DetalleVenta;
use App\Models\Pago;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\SubCategoria;
use App\Models\User;
use App\Models\Venta;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      
        if (Auth::user()->hasRole('superAdmin') || Auth::user()->hasRole('empleado')) {
            $ventas = Venta::count();
            $pagos = Pago::count();
            $productos = Producto::count();
            $compras = Compra::count();
            $usuarios = User::count();

            $categorias = Categoria::count();
            $subcategorias = SubCategoria::count();
            $proveedores = Proveedor::count();

            $response = file_get_contents("https://ve.dolarapi.com/v1/dolares/oficial");
       
            // dd();
             if($response){
                 $dato = json_decode($response);
                 $dolar = $dato->promedio;
             }else{
                 $dolar = 42.30;
             }
           
            $notificaciones = auth()->user()->unreadNotifications;
    
            
            return view('home', data: compact('ventas', 'dolar', 'compras', 'notificaciones' ,'proveedores' ,'usuarios', 'productos', 'categorias', 'subcategorias', 'pagos'));
        } else {
            $ventas = Venta::where('user_id', Auth::user()->id)->count();
            $pagos = Pago::where('user_id', Auth::user()->id)->count();
            $productos = DetalleVenta::join('ventas', 'detalle_ventas.id_venta', '=', 'ventas.id')
                ->where('ventas.user_id', Auth::user()->id)
                ->count();

            $response = file_get_contents("https://ve.dolarapi.com/v1/dolares/oficial");

            // dd();
            if ($response) {
                $dato = json_decode($response);
                $dolar = $dato->promedio;
            } else {
                $dolar = 42.30;
            }

            $notificaciones = auth()->user()->unreadNotifications;


            return view('home', data: compact('ventas', 'dolar', 'notificaciones', 'productos', 'pagos'));
        }

    }


}
