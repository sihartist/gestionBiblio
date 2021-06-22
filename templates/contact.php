<script type="text/javascript" src="./js/contact.js"></script>
<div class="container">

<section class="mb-4" >

 <h2 class="h1-responsive font-weight-bold text-center my-4"><?php echo translate('contact-us');?></h2>

 <p class="text-center w-responsive mx-auto mb-5"><?php echo translate('contact-text');?></p>

 <div class="row">

     <div class="col-md-9 mb-md-0 mb-5">
         <form id="contactform" name="contact-form" action="./templates/formulaire.php" method="POST">
           <div class="row">
                 <div class="col-md-6">
                     <div class="md-form mb-0">
                         <input type="text" id="name" name="name" class="form-control">
                         <label for="name" class=""><?php echo translate('nom');?></label>
                     </div>
                 </div>

                 <div class="col-md-6">
                     <div class="md-form mb-0">
                         <input type="text" id="email" name="email" class="form-control" placeholder="">
                         <label for="email" class="">Email</label>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-md-12">
                     <div class="md-form mb-0">
                         <input type="text" id="sujet" name="sujet" class="form-control">
                         <label for="sujet" class=""><?php echo translate('sujet');?></label>
                     </div>
                 </div>
             </div>

             <div class="row">
               <div class="col-md-12">
                     <div class="md-form">
                         <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                         <label for="message"><?php echo translate('msg');?></label>
                     </div>
                 </div>
             </div>

         </form>

         <div class="text-center text-md-left">
             <button id="send" onclick="envoyer();" class="btn btn-primary"><?php echo translate('envoyer');?></button>
             <label for="send" id="labelButton"></label>
         </div>

         <div class="status"></div>
     </div>

     <div class="col-md-3 text-center">
         <ul class="list-unstyled mb-0">
             <li><svg class="bi bi-geo-alt" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                  </svg>
                 <p>Rabat, 67000, MAR</p>
             </li>

             <li><svg class="bi bi-phone" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11 1H5a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1V2a1 1 0 00-1-1zM5 0a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V2a2 2 0 00-2-2H5z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M8 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                  </svg>
                 <p>+212 6 66 34 67 89</p>
             </li>

             <li><svg class="bi bi-envelope-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z"/>
                </svg>
                 <p>contact@aventus.com</p>
             </li>
         </ul>
     </div>


 </div>

</section>
</div>
</div>
