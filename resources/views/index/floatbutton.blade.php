<a class="float" id="floatbtn" onclick="myfunction()" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="¡Agenda un cita en Doctoralia!">
    <img class="my-float w-50" src="{{ url('staticimg/docicon.png')}}">
</a>
<div class="intento" style="visibility=visible;" id="#intento2">
    <a id="zl-url" class="zl-url" href="https://www.doctoralia.com.mx/carlos-enrique-de-la-torre-gonzalez/oftalmologo/miguel-hidalgo" rel="nofollow" data-zlw-doctor="carlos-enrique-de-la-torre-gonzalez" data-zlw-type="big" data-zlw-opinion="true" data-zlw-hide-branding="true">Carlos Enrique De La Torre Gonzalez - Doctoralia.com.mx</a><script>!function($_x,_s,id){var js,fjs=$_x.getElementsByTagName(_s)[0];if(!$_x.getElementById(id)){js = $_x.createElement(_s);js.id = id;js.src = "//platform.docplanner.com/js/widget.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","zl-widget-s");</script>
</div>
<script>
    function myfunction(){
        var hola = document.getElementsByClassName("intento")[0];
        var icon = document.body.querySelector("#iconfab");
        var btn = document.body.querySelector("#floatbtn");
        if(hola.style.visibility==""){
            hola.style.visibility="visible";
            //icon.classList.remove("fa-angle-double-up");
            //icon.classList.add("fa-angle-double-down");
            btn.style.background="#F7CC41";
        }
        else if (hola.style.visibility=="visible"){
            hola.style.visibility="hidden";
            //icon.classList.add("fa-angle-double-up");
            //icon.classList.remove("fa-angle-double-down");
            btn.style.background="#fff";
        }
        else if (hola.style.visibility="hidden"){
            hola.style.visibility="visible";
            //icon.classList.remove("fa-angle-double-up");
            //icon.classList.add("fa-angle-double-down");
            btn.style.background="#F7CC41";
        }
    };
</script>