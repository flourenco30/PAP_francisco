<!--===============================
      Modal Form Agendamento
  ================================-->
      <!-- Modal -->
      <div class="modal fade" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="agendaModalLabel" aria-hidden="true" data-target="agendaModal">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Agendamento | <span id="nome_servi">Nome servico</span></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" onsubmit="regAgendamento(event)" name="form1" id="form1">
                    @csrf
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nome: </label>
                        <div class="col-sm-10">
                          @auth
                          <input type="text" readonly class="form-control"id="staticName" value="{{Auth::user()->email}}">
                          @endauth
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Data<span style="color: red;">*</span>:</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control" name="Data" required id="Data">
                        </div>
                        <label for="inputPassword" class="col-sm-2 col-form-label">Hora<span style="color: red;">*</span>:</label>
                        <div class="col-sm-4">
                          <div class="row">
                            <select class="form-control col-sm-3" style="margin-right: 5px;" name="hora" id="hora">
                              <option value="08">8</option>
                              <option value="09">9</option>
                              <option value=10>10</option>
                              <option value=11>11</option>
                              <option value=12>12</option>
                              <option value=13>13</option>
                              <option value=14>14</option>
                              <option value=15>15</option>
                              <option value=16>16</option>
                              <option value=17>17</option>
                              <option value=18>18</option>
                            </select>
                            <span style="margin-right: 30px;margin-top: 3%;">h</span>
                            <select class="form-control col-sm-3" style="margin-right: 5px;" name="minutos" id="minutos">
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
                          <textarea rows="10" cols="30" class="form-control" name="Notas" id="Notas"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar Pedido</button>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#perfilModal">Personalizar dados faturamento</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
            </div>

<script>
  function regAgendamento(event){
    event.preventDefault()

    var data = document.getElementById("Data").value;
    var hora = document.getElementById("hora").value;
    var minutos = document.getElementById("minutos").value;
    var notas = document.getElementById("Notas").value;

    axios.post('/api/reg-agenda', { data, hora, minutos, notas, Id })
      .then(function (res){
        console.log(res);
        documento.getElementById('form1').reset();
      })
      .catch(err => console.log(err))
    }
</script>