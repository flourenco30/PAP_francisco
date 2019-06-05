<!--==========================
    Tabela Caracteristicas
  ============================-->
  <div class="container">
    <h1 style="text-align: center;margin-top: 10%;">TABELA CARACTERISTICAS</h1>
    <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#caracModal">Criar Caracteristica</button>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @if(isset($caracs))
            <script>let caracs = new Array();</script>
            @foreach($caracs as $carac)
            <script>caracs[{{$carac->id}}] = {'Id':'{{$carac->id}}','descricao':'{{$carac->desc}}', 'preco':'{{$carac->preco}}'};</script>
            <tr>
              <th style="font-weight:normal;">{{$carac->id}}</th>
              <th style="font-weight:normal;">{{$carac->desc}}</th>
              <th style="font-weight:normal;">{{$carac->preco}}€</th>
              <th style="font-weight:normal; width: 20%;">
                @if($carac->deleted_at)
                  <a href="/admin/caracteristicas/{{$carac->id}}/force-delete" class="btn btn-danger" style="color: white;">Forçar Eliminar</a>
                  <a href="/admin/caracteristicas/{{$carac->id}}/restore" class="btn btn-success mt-2" style="color: white;">Restaurar</a>
                @else
                  <a href="/admin/caracteristicas/{{$carac->id}}/delete" class="btn btn-warning" style="color: white;">Eliminar</a>
                  <a class="btn btn-success" onclick="editCarac({{$carac->id}});" data-toggle="modal" data-target="#editmodal" style="color: white;">Editar</a>
                @endif
              </th>
            </tr>
            @endforeach
            @endif
        </tbody>
      </table>
    </div>
    
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true" data-target="edit-modal">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="display: block;" id="body">
            @if(isset($carac))
            <form method="POST" onsubmit="atualizarCarac(event)" name="form-carac" id="form-carac">
              @csrf
                <div class="form-group row">
                  <label for="labelDesc" class="col-sm-2 col-form-label">Descrição: </label>
                  <div class="col-sm-10">
                    @auth
                      <input type="text" class="form-control" id="descri" value="{{$carac->desc}}">
                    @endauth
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Preço:</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="preco" required value="" id="preco-carac">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
                @endif
              </form>
          </div>
          <div class="modal-body" style="display: none;" id="message">
              <div class="alert alert-success" role="alert">
                  Sucesso! Caracteristica editada.
              </div>
            </div>
            <div class="modal-body" style="display: none;" id="message-error">
              <div class="alert alert-danger" role="alert">
                  <span id="span-error">Ocorreu um erro, tente novamente dentro de instantes.</span>
              </div>
            </div>
        </div>
      </div>
      </div>

<script>
  let _id = null;
  function editCarac(id){
    event.preventDefault()

    console.log(caracs[id]);
    document.getElementById("descri").value = caracs[id].descricao;
    document.getElementById("preco-carac").value = caracs[id].preco;
    _id = id;
  }

  function atualizarCarac(event){
    event.preventDefault()

    var desc = document.getElementById("descri").value;
    var preco = document.getElementById("preco-carac").value;

    axios.post('/api/edit-carac/'+_id, { Id: _id, desc, preco })
      .then(function (res){
        console.log(res);
        document.getElementById('form-carac').reset();
        document.getElementById('body').style.display = "none";
        document.getElementById('message').style.display = "block";
        function clodeModal(){
          $('#editmodal').modal('toggle');
          document.getElementById('body').style.display = "block";
          document.getElementById('message').style.display = "none";
          location.reload();
        }
        setTimeout(clodeModal, 5000);
      })
      .catch(function (err) {
        console.log(err)
        document.getElementById('span-error').innerHTML = "Ocorreu um erro! Tente novamente dentro de instantes.";
        document.getElementById('body').style.display = "none";
        document.getElementById('message-error').style.display = "block";
        function explode(){
          document.getElementById('body').style.display = "block";
          document.getElementById('message-error').style.display = "none";
        }
        setTimeout(explode, 3000);
      })
  }

    // axios.post('/api/edit-carac', { desc, preco })
    //   .then(function (res){
    //     console.log(res);
    //     documento.getElementById('form-carac').reset();
    //   })
    //   .catch(err => console.log(err))
    // }
</script>