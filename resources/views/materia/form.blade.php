<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('creditos') }}
            {{ Form::text('creditos', $materia->creditos, ['class' => 'form-control' . ($errors->has('creditos') ? ' is-invalid' : ''), 'placeholder' => 'Creditos']) }}
            {!! $errors->first('creditos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $materia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profesor') }}
            {{ Form::text('profesor', $materia->profesor, ['class' => 'form-control' . ($errors->has('profesor') ? ' is-invalid' : ''), 'placeholder' => 'Profesor']) }}
            {!! $errors->first('profesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('turno: ') }}
        </br>
            {!! Form::radio('turno', 'Matutino', $materia->turno) !!}
            {{ Form::label('Matutino') }}
        </br>
            {!! Form::radio('turno','Vespertino', $materia->turno) !!}
            {{ Form::label('Vespertino') }}

            {!! $errors->first('turno', '<div class="invalid-feedback">:message</div>') !!}
        </br>
        <div class="form-group">
            {{ Form::label('disponible') }}
        </br>
            {!! Form::radio('disponible', true, $materia->disponible) !!}
            {{ Form::label('si') }}
            {!! Form::radio('disponible', 0, $materia->disponible) !!}
            {{ Form::label('no') }}
            {!! $errors->first('disponible', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>