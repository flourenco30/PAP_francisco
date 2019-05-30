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
            <div class="modal-body">
              <form method="POST" onsubmit="asscCarac(event)">
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
                          <input class="caracteristica" id="{{$carac->id}}" type="checkbox" aria-label="Radio button for following text input">
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
      .then(res => console.log(res))
      .catch(err => console.log(err))
  }



  //   axios.post('/api/reg-agenda', { data, hora, minutos, notas, Id })
  //     .then(res => console.log(res))
  //     .catch(err => console.log(err))
</script>
