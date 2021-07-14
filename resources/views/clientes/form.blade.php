@include('layout.header')
<div class="row card align-items-center">
    <div class="col-10 card-body">

        @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    @foreach($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach
                </div>
            @endif

        <form action="/clientes/salvar" method="POST">
            @csrf
            <input type="hidden" name="id" value="@if(isset($cliente)){{$cliente->id}}@else{{ old('id') }}@endif">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" class="form-control" value="@if(isset($cliente)){{$cliente->nome}}@else{{ old('nome') }}@endif">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" name="endereco" class="form-control" required value="@if(isset($cliente)){{$cliente->endereco}}@else{{ old('endereco') }}@endif">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="bairro" class="form-label">bairro:</label>
                        <input type="text" name="bairro" class="form-control" required value="@if(isset($cliente)){{$cliente->bairro}}@else{{ old('bairro') }}@endif">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="municipio" class="form-label">municipio:</label>
                        <input type="text" name="municipio" class="form-control" required value="@if(isset($cliente)){{$cliente->municipio}}@else{{ old('municipio') }}@endif">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="estado" class="form-label">Estado:</label>
                        <input type="text" name="estado" class="form-control" maxlength="2" required value="@if(isset($cliente)){{$cliente->estado}}@else{{ old('estado') }}@endif">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="cep" class="form-label">Cep:</label>
                        <input type="text" name="cep" class="form-control cep" required value="@if(isset($cliente)){{$cliente->cep}}@else{{ old('cep') }}@endif">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" name="telefone" class="form-control telefone" required value="@if(isset($cliente)){{$cliente->telefone}}@else{{ old('telefone') }}@endif">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" align="end">
                    <button type="submit" class="btn btn-success w-25 hover-shadow">
                        Salvar 
                        <i class="fas fa-save"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@include('layout.footer')