
   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row"> 

      	
      	
         <div class="six columns info">

            <h3>About Keep It Simple</h3> 

            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint 
            sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

         </div>

         <div class="four columns">

         <?php
         if(is_active_sidebar('footer1')){
            dynamic_sidebar('footer1');
         } else {
            echo "there is no widget";
         }
         ?>   

         </div>

         <div class="two columns">
            <h3 class="social">Navigate</h3>

            <ul class="navigate group">
               <li><a href="#">Home</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Demo</a></li>
               <li><a href="#">Archives</a></li>
               <li><a href="#">About</a></li>
            </ul>
         </div>

         <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>
        
      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="assets/js/main.js"></script>
   <?php wp_footer(); ?>
</body>

</html>