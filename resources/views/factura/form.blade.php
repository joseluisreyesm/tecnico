<div class="box box-info padding-1">
    <div class="box-body">
        <div class="container">
        <div class="form-group d-none">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $factura->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $factura->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dirección') }}
            {{ Form::text('direccion', $factura->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('código_postal') }}
            {{ Form::number('codigo_postal', $factura->codigo_postal, ['class' => 'form-control' . ($errors->has('codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Código Postal' ]) }}
            {!! $errors->first('codigo_postal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcion', $factura->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::number('cantidad', $factura->cantidad, ['class' => 'form-control' , 'id'=>'cantidad', 'onchange' => "obtenCantidad(this.value)" . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_unitario') }}
            {{ Form::number('precio_unitario', $factura->precio_unitario, ['class' => 'form-control' , 'id'=>'precio_unitario', 'onchange' => "obtenPrecioUnitario(this.value)", 'step'=>'any' . ($errors->has('precio_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Precio Unitario']) }}
            {!! $errors->first('precio_unitario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sub-total') }}
            {{ Form::number('subtotal', $factura->subtotal, ['class' => 'form-control' , 'id'=>'subtotal', 'readonly' => 'true','step'=>'any' . ($errors->has('subtotal') ? ' is-invalid' : ''), 'placeholder' => 'Sub-total']) }}
            {!! $errors->first('subtotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total (IVA 16%)') }}
            {{ Form::number('total', $factura->total, ['class' => 'form-control' , 'id'=>'total', 'readonly' => 'true','step'=>'any' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <br>
        <div class="row d-flex justify-content-center">
            <a href="{{ route('facturas.index') }}" class="btn btn-danger col col-sm-2">{{ __('Cancelar')}}</a>    
            <div class="col col-sm-2"></div>
            <button type="submit" id="btn-aceptar" onclick="myFunction();" class="btn btn-primary col col-sm-2">Aceptar</button>
        </div>
</div>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#cantidad').select2();
        $('#precio_unitario').select2();
        $('#subtotal').select2();
        $('#total').select2();

        function obtenCantidad(val) {
            let cantidadAux = "0";
            cantidadAux = val;
            var precioUnitario = document.getElementById('precio_unitario');
            var subtotal = document.getElementById('subtotal');
            subtotal.value = cantidadAux * precioUnitario.value;
            var total = document.getElementById('total');
            total.value =  (subtotal.value * 1.16);
        }

        function obtenPrecioUnitario(val) {
            let precioUnitarioAux = "0";
            precioUnitarioAux = val;
            var cantidad = document.getElementById('cantidad');
            var subtotal = document.getElementById('subtotal');
            subtotal.value = precioUnitarioAux * cantidad.value;
            var total = document.getElementById('total');
            total.value =  (subtotal.value * 1.16);
        }
        
    </script>
@endpush