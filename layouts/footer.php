     </div>
     </div>

     <!-- CDN EXTERNAS -->
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

     <!-- SCRIPS LOCALES -->
     <script src="libs/js/jquery-3.5.1.min.js"></script>
     <script src="libs/js/popper.min.js"></script>
     <script src="libs/js/bootstrap.min.js"></script>
     <script src="libs/js/fontawesone.js"></script>
     <script type="text/javascript" src="libs/js/functions.js"></script>
     </body>

     </html>

     <?php if (isset($db)) {
        $db->db_disconnect();
      } ?>