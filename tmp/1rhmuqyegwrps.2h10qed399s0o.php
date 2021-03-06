<main>
    <section class="main">
      <section class="row">
          <article class="small-12 medium-8 large-7 columns">
            <h1>Rockville Remodeling Inc.</h1>
              <p> We are a full-service remodeling company, licensed and insured for work in Maryland and Washington, DC. We do our best to take care of you and give you the best customer service in the business. Every job is completed to your highest satisfaction!</p>
              <a href="/contact" class="button">Contact us</a>
          </article>

        <!--   <article class="small-12 large-5 large-offset-1 columns">
            <img src="http://lorempixel.com/400/200" />
          </article> -->
      </section>
      <!-- Call to Action -->
      <div class="small-12 columns"><p id="action">Schedule a no-obligation consultation with Rockville Remodeling<strong> (240) 731-8811</strong></p></div>
    </section>
      <!--  Servics and Crew Section -->
        <section class="row">
        <!-- Services article -->
          <article class="services small-12 columns">
           <h2 class="small-12 large-text-center  columns">SERVICES</h2>
              <div class="row large-text-center small-up-1 medium-up-3">
                <div class="column kitchen column-block">
                  <div>
                    <figure><img src="assets/img/kitchen-small.jpg" alt="kitchen"></figure>
                    <h4>KITCHEN</h4>
                    <p> Do you need maximum counter space and storage? More light? Updated cabinets?</p>
                    <a class="button" href="/services/kitchen">Read More</a>
                  </div>
                </div> 
                       <div class="column bathroom column-block">
                          <div>
                            <figure><img src="assets/img/bathroom-small.jpg" alt="bathroom"></figure>
                              <h4>BATHROOM</h4>
                              <p>An investment in your bathroom is quite simply an investment in your 
                              well-being at home!</p>
                              <a class="button" href="/services/bathroom">Read More</a>
                          </div>
                       </div> 
                   <div class="column miscellaneous column-block">
                    <div>
                      <figure><img src="assets/img/misc-small.jpg" alt="Miscellaneous"></figure>
                        <h4>MISCELANEOUS</h4>
                        <p>No job is to large. Doing it right costs less than than doing it over!Your project is our business.</p>
                        <a class="button" href="/services/miscellaneous">Read More</a>
                    </div>
                  </div> 
              </div>
          </article>
          <!-- Why Choose us -->
          <article class="why-us small-12 small-centered columns">
            <h2 class="small-12 large-text-center columns">WHY CHOOSE US?</h2>
            
          <div class="row large-text-center small-up-1 medium-up-2 large-up-5">
                <div class="column column-block">
                    <p><strong>Easy Communication.</strong> Our project manager responds to your calls and emails promptly.</p>
                </div>
                    <div class="column column-block">
                        <p><strong>Respect.</strong> Our workers are trained to treat your home with respect, broom-clean the site at the end of each workday, arrive punctually, and never to bring someone new into your home without making sure you know about it first.</p>
                      </div>
                          <div class="column column-block">
                            <p><strong>Punctuality.</strong> We commit to one project at a time per team to avoid over-scheduling and unnecessary delays.  When we start your project, we aim to work on it alone until it is finished.</p>
                          </div>
                                <div class="column column-block">
                                <p><strong>Minimal Subcontractors. </strong> We have very high standards of quality and prefer to limit our work to full-time Rockville Remodeling employees and their assistants. This keeps the number of people in your home to a minimum.</p>
                              </div>
                        <div class="column column-block">
                          <p><strong>Honesty.</strong> We are ethical and straightforward with our clients throughout every phase of the project.</p>
                        </div>
             
            </div>
          </article>
          <!-- Crew Article -->
          <article class="crew small-12 small-centered columns">
            <h2 class="small-12 large-text-center columns"><a href="/crew">MEET THE CREW</a></h2>
              <div class="row large-text-center small-up-2 medium-up-4">
                  <div class="column column-block">
                       <figure>
                       <img src="assets/img/luka.jpg" alt="Negovan Petkovic" />
                         <figcaption>
                            <a href="/crew">Negovan "Luka" Petkovic</a>
                         </figcaption>
                       </figure> 
                   <p>Project Manager/Owner</p>
                  </div> 
                           <div class="column column-block">
                                 <figure>
                                     <img src="assets/img/miso.jpg" alt="Miso Novakovic" />
                                       <figcaption>
                                          <a href="/crew">Miso Novakovic</a>
                                       </figcaption>
                               </figure> 
                               <p>Project Supervisor</p>
                          </div> 
                       <div class="column  column-block">
                             <figure>
                                 <img src="assets/img/milanilic.jpg" alt="Miljan Ilic" />
                                   <figcaption>
                                       <a href="/crew">Miljan Ilic</a>
                                   </figcaption>
                           </figure> 
                       <p>Project Supervisor</p>
                      </div> 
                  <div class="column column-block">
                         <figure>
                            <img src="assets/img/nikolalukic.jpg" alt="Nikola Lukic" />
                             <figcaption>
                                 <a href="/crew">Nikola Lukic</a>
                             </figcaption>
                       </figure> 
                  </div> 
              </div>
          </article>
          <!-- End of Service and Crew Section -->
        </section>

        <!-- Testimonials -->
        <section class="row  show-for-medium testimonials">
          <h3 class="small-12 large-text-center columns">TESTIMONIALS</h3>
            
            <article class="small-12 columns">
              <div class="your-class">
              <!-- Fat-free template, parsing JSON file -->
              <?php foreach (($testimonials['feedback']?:[]) as $name): ?>
                  <div>
                      <blockquote><em><?php echo $name['testimonial']; ?></em>
                            <cite><?php echo $name['name']; ?></cite>
                      </blockquote>
                  </div>
              <?php endforeach; ?>
              
              </div>
            </article>

        </section>

        <!-- End of Main -->
    </main>