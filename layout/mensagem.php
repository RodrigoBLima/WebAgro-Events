<?php
//sessão
session_start();

if(isset($_SESSION['mensagem'])): ?>

  
  <script>
    //mensagem com php e materialize
        window.onload =  function(){
            M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
        }
   </script>

<?php
endif;  
session_unset();
?>