    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Activate popover -->
    <script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
    });
    </script>
    <!-- AJAX -->
    <script>

    $("#ajaxBtn").click(function(){
      $.ajax({
        method:"POST",
        url:"/registration/ajaxPars",
        data:{"email":$("#email").val(),"password":$("#password").val()},
        success: function(msg){
          if(msg="welcome"){
            alert(msg);
          }
        }
      })
    })
    </script>
  </body>
</html>