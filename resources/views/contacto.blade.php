
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{url('/contact/new/create')}}" role="form" method="POST">
                {{ csrf_field()}}
                {{ method_field('POST')}}
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="{{old('fname') }}" id="fname" name="fname" type="text" placeholder="First Name" class="form-control">
                                 {{-- ERROS NAME--}}
                        @if ($errors->has('fname'))

                            <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
                            <span class="sr-only">Error</span>
                        Introduzca su nombre</div>
                        @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="{{old('lname') }}" id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                                {{-- ERROS LNAME--}}
                        @if ($errors->has('lname'))

                            <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
                            <span class="sr-only">Error</span>
                        Introduzca su apellido</div>
                        @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="{{old('email') }}" id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                {{-- ERROS EMAIL--}}
                        @if ($errors->has('email'))

                            <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
                            <span class="sr-only">Error</span>
                        Introduzca su Email</div>
                        @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="{{old('phone') }}" id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                {{-- ERROS PHONE--}}
                        @if ($errors->has('phone'))

                            <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
                            <span class="sr-only">Error</span>
                        Introduzca su número telefónico</div>
                        @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="messages" name="messages" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7">{{ old('messages')}}</textarea>
                             {{-- ERROS MESSAGE--}}
                        @if ($errors->has('messages'))
                            <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
                            <span class="sr-only">Error</span>
                        Intrudzca el mensaje a enviar</div>
                        @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" value="Crear">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

