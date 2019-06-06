<!--==========================
    Tabela Serviços
  ============================-->
  <div class="container">
    <h1 style="text-align: center;margin-top: 10%;">TABELA SERVIÇOS</h1>
    <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#serviModal">Criar Serviço</button>
    <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#serviCaracModal" onclick="getCaracteristicas(event)">Associar Caracteristica</button>
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
          @if(isset($servis))
            <script>let servis = new Array();</script>
            @foreach($servis as $servi)
            <script>servis[{{$servi->id}}] = {'Id':'{{$servi->id}}','nome':'{{$servi->nome}}', 'preco2':'{{$servi->preco}}'};</script>
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
                  <a class="btn btn-success" data-toggle="modal" onclick="editServi({{$servi->id}});" data-target="#edit-modal" style="color: white;">Editar</a>
                @endif
              </th>
            </tr>
            @endforeach
            @endif
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
          <div class="modal-body" style="display: block;" id="body2">
            <form method="POST" onsubmit="atualizarServi(event)" name="form1" id="form-servi">
              @if(isset($servi))
              @csrf
                <div class="form-group row">
                  <label for="labelDesc" class="col-sm-2 col-form-label">Descrição: </label>
                  <div class="col-sm-10">
                    @auth
                      <input type="text" class="form-control" id="nome" value="">
                    @endauth
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Preço:</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="preco2" required value="">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
                @endif
              </form>
          </div>
        <div class="modal-body" style="display: none;" id="message2">
            <div class="alert alert-success" role="alert">
                Sucesso! Serviço editado.
            </div>
          </div>
          <div class="modal-body" style="display: none;" id="message-error2">
            <div class="alert alert-danger" role="alert">
                <span id="span-error">Ocorreu um erro, tente novamente dentro de instantes.</span>
            </div>
          </div>
        </div>
      </div>
      </div>

<script>
  let _id = null;
  function editServi(id){
    event.preventDefault()

    console.log(servis[id]);
    document.getElementById("nome").value = servis[id].nome;
    document.getElementById("preco2").value = servis[id].preco2;
    _id = id;
  }

  function atualizarServi(event){
    event.preventDefault()

    var nome = document.getElementById("nome").value;
    var preco2 = document.getElementById("preco2").value;

    axios.post('/api/edit-servi/'+_id, { Id: _id, nome, preco2 })
      .then(function (res){
        console.log(res);
        document.getElementById('form-servi').reset();
        document.getElementById('body2').style.display = "none";
        document.getElementById('message2').style.display = "block";
        function clodeModal(){
          $('#edit-modal').modal('toggle');
          document.getElementById('body2').style.display = "block";
          document.getElementById('message2').style.display = "none";
          location.reload();
        }
        setTimeout(clodeModal, 5000);
      })
      .catch(function (err) {
        console.log(err)
        document.getElementById('span-error').innerHTML = "Ocorreu um erro! Tente novamente dentro de instantes.";
        document.getElementById('body2').style.display = "none";
        document.getElementById('message-error2').style.display = "block";
        function explode(){
          document.getElementById('body2').style.display = "block";
          document.getElementById('message-error2').style.display = "none";
        }
        setTimeout(explode, 3000);
      })
  }

  function editServi(id){
    event.preventDefault()

    console.log(servis[id]);
    document.getElementById("nome").value = servis[id].nome;
    document.getElementById("preco2").value = servis[id].preco2;
    _id = id;
  }

  function getCaracteristicas(event){
    event.preventDefault()
    axios.get('/api/servi-carac')
      .then(function (res){
        console.log(res);
        document.getElementById('body2').innerHTML = "";
      })
      .catch(function (err) {
        console.log(err)
        document.getElementById('span-error').innerHTML = "Ocorreu um erro! Tente novamente dentro de instantes.";
        document.getElementById('body2').style.display = "none";
        document.getElementById('message-error2').style.display = "block";
        function explode(){
          document.getElementById('body2').style.display = "block";
          document.getElementById('message-error2').style.display = "none";
        }
        setTimeout(explode, 3000);
      })
  }
</script>