@extends('Dashboard::backend.default.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-body">
            @if( isset($town) )
                {!! Form::open(['route' => ['backend.country.town.update', [$country->id, $town->id]], 'method' => 'PUT']) !!}
                {!! Form::hidden('id', $town->id) !!}
            @else
                {!! Form::open(['route' => ['backend.country.town.store', $country->id], 'method' => 'post']) !!}
            @endif

            <div class="form-group">
                <label>Name (<i class="fa fa-star star-validate"></i>)</label>
                {!!Form::text('name', isset($town) ? $town->name : old('name'), ['class' => 'form-control', 'placeholder' => 'Việt Nam'] ) !!}
                {!! $errors->first('name', '<span class="help-block error">:message</span>') !!}
            </div>

            <div class="form-group">
                <a href="{{route('backend.country.town.index', [$country->id])}}" class="btn btn-warning">Cancel</a>
                @if(isset($town))
                    {!! Form::submit('Update', ['class' => 'btn btn-success', 'name' => 'update']) !!}
                @else
                    {!! Form::submit('Create', ['class' => 'btn btn-primary', 'name' => 'create']) !!}
                @endif
            </div>
            {!! Form::close() !!}

        </div>
    </div>


@stop