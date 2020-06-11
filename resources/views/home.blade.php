@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="card border border-primary text-white bg-dark mb-3">
                <div class="card-header border-primary">

                    <h1 class="text-center font-weight-bold text-primary display-4">
                        BIENVENIDO A THE BOOK SHOP
                    </h1>

                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <img src="{{url('/img/libroarte.jpg')}}" alt="Responsive image"
                        class="img-fluid img-thumbnail" />
                </div>
            </div>

        </div>
    </div>

    <br />

    <div class="container-fluid"> {{-- Orignal --}}
        <div class="card text-white bg-dark mb-3 border-primary"> {{-- edit --}}
            <div class="card-header h1 border-primary">Acerca de The Book Shop</div> {{-- Editado --}}
            <div class="card-body"> {{-- edit --}}

                <h3>
                    <p class="card-text">
                        Somos The Book Shop y nos encargamos de tu felicidad por eso nos damos a la tarea de mejorar
                        cada vez
                        para facilitarte el acceso a libros diversos y al mismo tiempo raros de conseguir como algunas
                        sagas de percy jackson
                        resident evil etc. brindamos una interfaz sencilla para cualquier tipo de usuario y su aspecto
                        oscuro hace que tu vista
                        no se canse, porque nos preocupamos por ti. Elige TheBookShop elige bien.
                    </p>
                    <p>
                        Socialmente responsable, todos los derechos al creador, lee y alimenta de conocimiento tu
                        cerebro,
                        grandes historias te esperan llenas de emocion.
                    </p>
                </h3>
            </div>
        </div>
    </div>

    @endsection
