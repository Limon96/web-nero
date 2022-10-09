@extends('layouts.admin')
@section('title'){{ __('Настройки') }}@endsection
@section('meta_desc'){{ __('Настройки') }}@endsection
@section('styles')

@endsection
@section('scripts')
    <script>
        var loadFile = function(event) {
            var src = URL.createObjectURL(event.target.files[0])

            if (!$('#preview img').length) {
                $('#preview').prepend('<img class="img-thumbnail">');
            }

            $('#preview img').attr('src', src);

            $('#preview img').onload = function() {
                URL.revokeObjectURL(src) // free memory
            }
        };
    </script>
@endsection
@section('content')

<div class="sh-breadcrumb">
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Панель управления</a>
        <a class="breadcrumb-item" href="{{ route('admin.portfolio.index') }}">Портфолио</a>
        <span class="breadcrumb-item active">@yield('title')</span>
    </nav>
</div><!-- sh-breadcrumb -->
<div class="sh-pagetitle">
    <div class="input-group"></div><!-- input-group -->
    <div class="sh-pagetitle-left">
        <div class="sh-pagetitle-icon"><i class="icon ion-ios-photos-outline"></i></div>
        <div class="sh-pagetitle-title">
            <span>Портфолио</span>
            <h2>@yield('title')</h2>
        </div><!-- sh-pagetitle-left-title -->
    </div><!-- sh-pagetitle-left -->
</div><!-- sh-pagetitle -->

<div class="sh-pagebody">
    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <button class="close" type="button" data-dismiss="alert"
                            aria-label="Close">x
                    </button>
                    {{ session()->get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.portfolio.setting.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" class="form-control-label">{{ __('Заголовок страницы') }}</label>
                            <input type="text" class="form-control" name="title" value="{{ config('app.portfolio.title', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-control-label">{{ __('Meta Title') }}</label>
                            <input type="text" class="form-control" name="meta_title" value="{{ config('app.portfolio.meta_title', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-control-label">{{ __('Meta Description') }}</label>
                            <input type="text" class="form-control" name="meta_description" value="{{ config('app.portfolio.meta_description', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-control-label">{{ __('Meta Keywords') }}</label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{ config('app.portfolio.meta_keywords', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-control-label">{{ __('OG Title') }}</label>
                            <input type="text" class="form-control" name="og_title" value="{{ config('app.portfolio.og_title', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-control-label">{{ __('OG Description') }}</label>
                            <input type="text" class="form-control" name="og_description" value="{{ config('app.portfolio.og_description', '') }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-control-label">{{ __('OG Image') }}</label>
                            <div class="form-group">
                                <div id="preview"style="max-width: 480px;width: 100%;">
                                    @if(config('app.portfolio.og_image', ''))
                                        <img src="{{ thumbnail(config('app.portfolio.og_image', ''), 480) }}" class="img-thumbnail" alt="Preview">
                                    @endif
                                    <input type="hidden" name="image" value="{{ config('app.portfolio.og_image', '') }}">
                                    <label for="file-image" class="btn btn-dark w-100 mt-3">
                                        <input type="file" id="file-image" name="image" class="form-control-file" accept="image/*" onchange="loadFile(event)" style="display: none">
                                        Загрузить
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">{{ __('Сохранить') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- sh-pagebody -->

@endsection
