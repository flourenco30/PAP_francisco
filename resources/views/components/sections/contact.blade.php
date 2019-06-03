<!--==========================
      Contact Section
    ============================-->
    <section id="contact">
            <div class="container wow fadeInUp">
              <div class="section-header">
                <h3 class="section-title">Contactos</h3>
                <p class="section-description">Qualquer dúvida não exite, contacte-nos!</p>
              </div>
            </div>
      
            <!-- Uncomment below if you wan to use dynamic maps -->
            <iframe src="https://maps.google.com/maps?q=R.%20In%C3%A1cio%20Nunes%20da%20Costa%2019%2C%202560-538%20Silveira&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      
            <div class="container wow fadeInUp mt-5">
              <div class="row justify-content-center">
      
                <div class="col-lg-3 col-md-4">
      
                  <div class="info">
                    <div>
                      <i class="fa fa-map-marker"></i>
                      <p>R. Inácio Nunes da Costa, Nº19<br>2560-538 Silveira, Torres Vedras</p>
                    </div>
      
                    <div>
                      <i class="fa fa-envelope"></i>
                      <p>ferreira-auto@gmail.com</p>
                    </div>
      
                    <div>
                      <i class="fa fa-phone"></i>
                      <p>+351 915421311</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-5 col-md-8">
                  <div class="form">
                    <div id="sendmessage">A sua mensagem foi enviada. Obrigado!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                      @auth
                      <div class="form-group">
                        <h2 sytle="text-shadow: 1px 1px #111;">Olá {{ Auth::user()->name }}!<h2>
                      </div>
                      @endauth
                      @guest
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="O seu Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="O seu Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                      </div>
                      @endguest
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escreva a sua dúvida" placeholder="Message"></textarea>
                        <div class="validation"></div>
                      </div>
                      <div class="text-center"><button type="submit">Enviar</button></div>
                    </form>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- #contact -->