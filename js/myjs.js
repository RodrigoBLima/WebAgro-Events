
     //cript para o preloader
     document.addEventListener("DOMContentLoaded", function(){
        $('.preloader-background').delay(350).fadeOut('slow');
        
        $('.preloader-wrapper')
            .delay(350)
            .fadeOut();
    });


    //script para o navbar
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });
        
    $(document).ready(function() {
        M.updateTextFields();
    });