<!--===============================
      Modal Form Agendamento
  ================================-->
      <!-- Modal -->
      <div class="modal fade" id="agendaCustomModal" tabindex="-1" role="dialog" aria-labelledby="agendaCustomLabel" aria-hidden="true" data-target="agendaCustomModal">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Agendamento | Serviço Personalizado</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="display: block;" id="body-custom">
                  <form method="POST" onsubmit="regAgendamentoPerso(event)" name="form-personalizado" id="form-personalizado">
                    @csrf
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email: </label>
                        <div class="col-sm-10">
                          @auth
                          <input type="text" readonly class="form-control" id="staticEmail" value="{{Auth::user()->email}}">
                          @endauth
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Data<span style="color: red;">*</span>:</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control" name="Data-custom" required id="Data_Custom">
                        </div>
                        <label for="inputPassword" class="col-sm-2 col-form-label">Hora<span style="color: red;">*</span>:</label>
                        <div class="col-sm-4">
                          <div class="row">
                            <select class="form-control col-sm-3" style="margin-right: 5px;" name="hora" id="hora_custom">
                              <option value="08">8</option>
                              <option value="09">9</option>
                              <option value=10>10</option>
                              <option value=11>11</option>
                              <option value=12>12</option>
                              <option value=14>14</option>
                              <option value=15>15</option>
                              <option value=16>16</option>
                              <option value=17>17</option>
                              <option value=18>18</option>
                            </select>
                            <span style="margin-right: 30px;margin-top: 3%;">h</span>
                            <select class="form-control col-sm-3" style="margin-right: 5px;" name="minutos" id="minutos_custom">
                                <option value=00>00</option>
                                <option value=30>30</option>
                            </select>
                            <span style="margin-top: 2%;">m</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Notas:</label>
                        <div class="col-sm-10">
                          <textarea rows="10" cols="30" class="form-control" name="Notas-custom" id="Notas_custom"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar Pedido</button>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#perfilModal">Personalizar dados faturamento</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </form>
                </div>
                <div class="modal-body" style="display: none;" id="message-custom">
                  <div class="alert alert-success" role="alert">
                      Sucesso! Serviço agendado
                  </div>
                </div>
                <div class="modal-body" style="display: none;" id="message-error-custom">
                  <div class="alert alert-danger" role="alert">
                      <span id="span-error-custom">Ocorreu um erro, tente novamente dentro de instantes.</span>
                  </div>
                </div>
              </div>
            </div>
            </div>

<script>
  function regAgendamentoPerso(event){
    event.preventDefault()

    var data_custom = document.getElementById("Data_Custom").value;
    var hora_custom = document.getElementById("hora_custom").value;
    var minutos_custom = document.getElementById("minutos_custom").value;
    var notas_custom = document.getElementById("Notas_custom").value;

    axios.post('/api/reg-agenda-custom', { data_custom, hora_custom, minutos_custom, notas_custom, Id})
      .then(function (res){
        console.log(res);
        document.getElementById('form-personalizado').reset();
        document.getElementById('body-custom').style.display = "none";
        document.getElementById('message-custom').style.display = "block";
        function clodeModal(){
          $('#agendaCustomModal').modal('toggle');
          document.getElementById('body-custom').style.display = "block";
          document.getElementById('message-custom').style.display = "none";
        }
        setTimeout(clodeModal, 5000);
      })
      .catch(function (err){ 
        console.log(err)
        if(err.response.data == "Hora indisponível neste dia."){
          document.getElementById('span-error-custom').innerHTML = err.response.data;
        } else{
          document.getElementById('span-error-custom').innerHTML = "Ocorreu um erro! Tente novamente dentro de instantes.";
        }
        document.getElementById('body-custom').style.display = "none";
        document.getElementById('message-error-custom').style.display = "block";
        function explode(){
          document.getElementById('body').style.display = "block";
          document.getElementById('message-error-custom').style.display = "none";
        }
        setTimeout(explode, 3000);
      })
      console.log('deu');
    }
</script>