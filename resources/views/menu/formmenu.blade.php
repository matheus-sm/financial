@extends('layouts.main')

@section('content')
<form action="{{ route('create_menus.store') }}" method="POST">
  @csrf
  <div class="card card-primary card-outline">
    <div class="card-body">
      <div class="card card-primary">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="pm_description">Descrição Menu:</label>
                <input type="text" name="pm_description" class="form-control" id="pm_description" placeholder="Descrição do Menu">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="pm_icon">Icone:</label>
                <input type="text" name="pm_icon" class="form-control" id="pm_icon" placeholder="Enter email">
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>
  @if (session('success'))
    <div id="toastsContainerTopRight" class="toasts-top-right fixed">
        <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Cadastro Realizado</strong>
                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div id="toastsContainerTopRight" class="toasts-top-right fixed">
        <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Erro ao realizar cadastro do menu</strong>
                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('error') }}
            </div>
        </div>
    </div>
@endif
</form>
@endsection