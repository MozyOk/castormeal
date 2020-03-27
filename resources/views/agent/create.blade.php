{{-- layouts/admin.blade.phpを読み込む--}}
@extends('layouts.layout')


{{-- layout.blade.phoの@yield('title')にニュースの新規作成を埋め込む --}}
@section('title','通関業者登録')
@section('subtitle','通関業者登録')

{{-- layout.blade.phpの@yield('content')に以下のタグを埋め込む　--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <body>
                    <form action ="{{ action('AgentController@add') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0 )
                            <ul>
                                @foreach($errors -> all() as $e )
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <h4>通関業者</h4>
                        <br>
                        
                            <div class ="form-group row">
                                <label class="col-md-1">業者名</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name ="company_name" value="{{ old('company_name') }}">
                                    </div>
                                
                            </div>
                            <br>
                            
                            <div class ="form-group row">
                                <label class="col-md-1">担当者名</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name ="staff" value="{{ old('staff') }}">
                                    </div>
                                    <label class="col-md-1">e-mail</label>
                                    <div class="col-md-5" >
                                        <input type="text" class="form-control" name="e-mail" value="{{old("e-mail")}}">
                                    </div>
                                
                            </div>
                            <br>
                            
                            <div class ="form-group row">
                                <label class="col-md-1">担当者名</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name ="staff" value="{{ old('staff') }}">
                                    </div>
                                    <label class="col-md-1">e-mail</label>
                                    <div class="col-md-5" >
                                        <input type="text" class="form-control" name="e-mail" value="{{old("e-mail")}}">
                                    </div>
                                
                            </div>
                            <br>
    
                            <div class ="form-group row">
                                <label class="col-md-1">担当者名</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name ="staff" value="{{ old('staff') }}">
                                    </div>
                                    <label class="col-md-1">e-mail</label>
                                    <div class="col-md-5" >
                                        <input type="text" class="form-control" name="e-mail" value="{{old("e-mail")}}">
                                    </div>
                                
                            </div>
                            <br>
    
                            <div class ="form-group row">
                                <label class="col-md-1">担当者名</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name ="staff" value="{{ old('staff') }}">
                                    </div>
                                    <label class="col-md-1">e-mail</label>
                                    <div class="col-md-5" >
                                        <input type="text" class="form-control" name="e-mail" value="{{old("e-mail")}}">
                                    </div>
                                
                            </div>

                            <br>
                            <br>
                            
                            <div class="col-md-3">
                                <input type="hidden" name="id" value="">
                                {{csrf_field()}}
                                <input type="submit" class="btn btn-primary" value="更新">
                            </div>
                   </form>
                </body>
            </div>
        </div>
    </div>
@endsection
