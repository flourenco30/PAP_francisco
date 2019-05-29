<!--==========================
      Services Section
    ============================-->
    <section class="pricing py-5" id="servicos">
            <div class="container">
              <div class="section-header">
                <h3 class="section-title">SERVIÇOS</h3>
              </div>
              <div class="row mt-5 mb-5">
                <!-- Free Tier -->
                <div class="col-lg-4">
                  <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">BASIC</h5>
                      <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>20</h6>
                      <hr>
                      <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Lavagem Manual</strong></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza de vidros</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Hidratante de pneus</li>
                      </ul>
                      @auth
                      <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                      @endauth
                      @guest
                      <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                      @endguest
                    </div>
                  </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-4">
                  <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">STANDARD</h5>
                      <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>40</h6>
                      <hr>
                      <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Lavagem Basic</strong></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Aplicação de cera</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Interior aspirado</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza pó interior</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza de vidros</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Hidratante de pneus</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Tratamento plásticos interiores</li>
                      </ul>
                      @auth
                      <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                      @endauth
                      @guest
                      <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                      @endguest
                    </div>
                  </div>  
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">ADVANCED</h5>
                      <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>60</h6>
                      <hr>
                      <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Lavagem Standard</strong></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza e acondicionamento de estofos</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza e acondicionamento de eplásticos e vinil</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza do foro do tejadilho</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Lavagem e acondicionamento dos tapetes e alcatifas</li>
                      </ul>
                      @auth
                        <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                      @endauth
                      @guest
                        <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                      @endguest
                    </div>
                  </div>
                </div>
                  <div id="ola" class="row mt-5 mb-5" style="display: none;">
                  <div class="row mt-5 mb-5">
                  <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                      <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">BASIC MOTO</h5>
                        <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>20</h6>
                        <hr>
                        <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Lavagem Manual</strong></li>
                          <li><span class="fa-li"><i class="fas fa-check"></i></span>Acondicionamento de plásticos e vinil</li>
                        </ul>
                        @auth
                          <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                        @endauth
                        @guest
                          <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                        @endguest
                      </div>
                    </div>
                  </div>
                  <!-- Plus Tier -->
                  <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                      <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">BASIC OLEO</h5>
                        <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>25</h6>
                        <hr>
                        <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Revisão Simples</strong></li>
                          <li><span class="fa-li"><i class="fas fa-check"></i></span>Inclui Oleo</li>
                          <li><span class="fa-li"><i class="fas fa-check"></i></span>10 pontos de controlo</li>
                          <li><span class="fa-li"><i class="fas fa-check"></i></span>Mão de obra incluida</li>
                        </ul>
                        @auth
                          <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                        @endauth
                        @guest
                          <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                        @endguest
                      </div>
                    </div>  
                  </div>
                  <!-- Pro Tier -->
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">ADVANCED OLEO/FILTROS</h5>
                        <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>80</h6>
                        <hr>
                        <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Revisão Simples</strong></li>
                          <li><span class="fa-li"><i class="fas fa-check"></i></span>Mudança de filtros</li>
                          <li><span class="fa-li"><i class="fas fa-check"></i></span>70 pontos de controlo</li>
                          <li><span class="fa-li"><i class="fas fa-check"></i></span>Manutenção personalizada de acordo com as prescrições do construtor</li>
                          <li><span class="fa-li"><i class="fas fa-check"></i></span>Mão de obra incluida</li>
                        </ul>
                        @auth
                          <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                        @endauth
                        @guest
                          <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                        @endguest
                      </div>
                    </div>
                  </div>
      
      
            
      
                    </div>
                  <!-- Pro Tier -->
                  <div class="col-lg-4">
                    <script>
                      
                    </script>
                  </div>
                    <div class="my_bt_custom">
                        <button id="btcustom" class="button btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#servicoModal">Criar Serviço Personalizado</button>
                    </div>
                  </div>
      
                  <div class="my_bt_readmore">
                      <button id="meubt" onclick="myFunction()" class="button btn-block btn-primary text-uppercase ">Ver Mais Serviços</button>
                  </div>
              </div>
            </div>
          </section>