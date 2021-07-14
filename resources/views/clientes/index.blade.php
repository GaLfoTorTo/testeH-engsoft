@include('layout.header')
<div class="card">
        <div class="card-header">
          <a href="/clientes/novo" class="btn btn-primary">
            Novo cliente 
          </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap table-bordered ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Ações</th>
              </tr>
            </thead>
            @foreach ($clientes as $item)
            <tbody>
              <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->nome }}</td>
                  <td>{{ $item->endereco }}</td>
                  <td>{{ $item->telefone }}</td>
                  <td>
                    <a href="clientes/editar/{{ $item->id }}" class="btn btn-warning">
                      Editar
                    </a>
                    <a href="/clientes/deletar/{{ $item->id }}" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">
                      Deletar
                    </a>
                  </td>
              </tr>
            </tbody>
            @endforeach
          </table>
          <br>
            @if(count($clientes) < 1)
            <div class="alert alert-info" style="margin-left: 61px; margin-right: 61px;">
              Nenhum registro encontrado!
            </div>
            @endif
        </div>
        <!-- /.card-body -->
      </div>
@include('layout.footer')