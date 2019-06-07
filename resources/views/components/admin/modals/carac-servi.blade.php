<!--===============================
      Modal Form Servico/Caracteristicas
  ================================-->
      <!-- Modal -->
      <div class="modal fade" id="serviCaracModal" tabindex="-1" role="dialog" aria-labelledby="serviCaracModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Criar Serviço</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="body_assoc_carac">
              <form method="POST" onsubmit="asscCarac(event)" id="form_assoc_carac">
                @csrf
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Serviço: </label>
                    <div class="col-sm-10">
                      <select class="form-control col-sm-12" id="servico" style="margin-right: 5px;" name="servi">
                        @foreach($servis as $servi)
                          <option value="{{$servi->id}}">{{$servi->nome}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Caracteristicas:</label>
                    <div class="col-sm-10" id="caracCheck">
                      @foreach($caracs as $carac)
                      <div class="input-group mb-3" name="carac" id="carac">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                          <input class="caracteristica" id="{{$carac->id}}" type="checkbox">
                          </div>
                        </div>
                        <p class="form-control">{{$carac->preco . '€ - ' . $carac->desc}}</p>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Criar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  </div>
                </form>
            </div>
            <div class="modal-body" style="display: none;" id="message_assoc_carac">
              <div class="alert alert-success" role="alert">
                  Sucesso! Caracteristica associada.
              </div>
            </div>
            <div class="modal-body" style="display: none;" id="message_error_assoc_carac">
              <div class="alert alert-danger" role="alert">
                  <span id="span-error-custom">Ocorreu um erro, tente novamente dentro de instantes.</span>
              </div>
            </div>
          </div>
        </div>
        </div>

<script>
  function asscCarac(event){
    event.preventDefault()

    var servico = document.getElementById("servico").value;
    var checkedIds = Array();
    $('input[type=checkbox]:checked').each( function(i,v)
    {
        checkedIds.push($(v).attr('id'));
    });

    axios.post('/api/assoc-carac', { servico, checkedIds})
    .then(function (res){
      console.log(res);
      document.getElementById('form_assoc_carac').reset();
      document.getElementById('body_assoc_carac').style.display = "none";
      document.getElementById('message_assoc_carac').style.display = "block";
      function clodeModal(){
        $('#serviCaracModal').modal('toggle');
        document.getElementById('body_assoc_carac').style.display = "block";
        document.getElementById('message_assoc_carac').style.display = "none";
      }
      setTimeout(clodeModal, 5000);
    })
    .catch(function (err){ 
      console.log(err)
      document.getElementById('span-error-custom').innerHTML = "Ocorreu um erro! Tente novamente dentro de instantes.";
      document.getElementById('body_assoc_carac').style.display = "none";
      document.getElementById('message_error_assoc_carac').style.display = "block";
      function explode(){
        document.getElementById('body_assoc_carac').style.display = "block";
        document.getElementById('message_error_assoc_carac').style.display = "none";
      }
      setTimeout(explode, 3000);
    })

  }

</script>