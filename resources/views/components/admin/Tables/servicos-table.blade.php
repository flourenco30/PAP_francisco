<!--==========================
    Tabela Serviços
  ============================-->
  <div class="container">
    <h1 style="text-align: center;margin-top: 10%;">TABELA SERVIÇOS</h1>
    <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#serviModal">Criar Serviço</button>
    <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#serviCaracModal">Associar Caracteristica</button>
    <table class="table table-responsive table-striped" id="tabela-servi">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach($servis as $servi)
            <tr>
              <th style="font-weight:normal;">{{$servi->id}}</th>
              <th style="font-weight:normal;">{{$servi->nome}}</th>
              <th style="font-weight:normal;">{{$servi->preco}}€</th>
              <th style="font-weight:normal; width: 20%;">
                @if($servi->deleted_at)
                  <a href="/admin/servicos/{{$servi->id}}/force-delete" class="btn btn-danger" style="color: white;">Forçar Eliminar</a>
                  <a href="/admin/servicos/{{$servi->id}}/restore" class="btn btn-success mt-2" style="color: white;">Restaurar</a>
                @else
                  <a href="/admin/servicos/{{$servi->id}}/delete" class="btn btn-warning" style="color: white;">Eliminar</a>
                  <a class="btn btn-success" data-toggle="modal" data-target="#edit-modal" style="color: white;">Editar</a>
                @endif
              </th>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true" data-target="edit-modal">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" onsubmit="atualizarServi(event)" name="form1" id="form1">
              @csrf
                <div class="form-group row">
                  <label for="labelDesc" class="col-sm-2 col-form-label">Descrição: </label>
                  <div class="col-sm-10">
                    @auth
                      <input type="text" class="form-control" id="descri" value="{{$servi->nome}}">
                    @endauth
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Preço:</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="preco" required id="Data" value="{{$servi->preco}}">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>

<script>
  $(document).ready(function () {
    $('#tabela-servi').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });

  function atualizarServi(event){
    event.preventDefault()

    var desc = document.getElementById("descri").value;
    var preco = document.getElementById("preco").value;

    axios.post('/api/edit-carac', { desc, preco })
      .then(function (res){
        console.log(res);
        documento.getElementById('form1').reset();
      })
      .catch(err => console.log(err))
    }
</script>