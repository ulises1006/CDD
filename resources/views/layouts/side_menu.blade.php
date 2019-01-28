
    <ul id="nav-mobile" class="sidenav sidenav-fixed grey darken-4">
        <li><div class="user-view center">
          <div class="background center">
            <img id="imagen_fondo_sidenav" src="../../images/f3.jpg">
          </div>
          <a><img id="user_imagen" class="circle" src="../../images/doc.png"></a>
          <a><span style="font-size:19px; font-weight:900;" class="black-text name">{{ Auth::user()->name }}</span></a>
          <a><span style="font-size:21x;" class="black-text email">{{ Auth::user()->email }}</span></a>
        </div></li>
        <li><div id="titulo_sidenav" class="container"></div></li>
        <li><a style="color:white;" class="waves-effect" href="/"><i id="icon" class="small material-icons">home</i>Inicio</a></li>
        <li><a style="color:white;" class="waves-effect" href="{{ Route('appointment.index') }}"><i id="icon" class="small material-icons">event</i>Calendario de citas</a></li>
        <li><a style="color:white;" class="waves-effect" href="{{ Route('patient.index') }}"><i id="icon" class="small material-icons">assignment_ind</i>Pacientes</a></li>
        <li><a style="color:white;" class="waves-effect" href="{{ Route('payment.index') }}"><i id="icon" class="small material-icons">credit_card</i>Pagos</a></li>
        <li><a style="color:white;" class="waves-effect" href="{{ Route('recipe.index') }}"><i id="icon" class="small material-icons">list</i>Recetas</a></li>
      </ul>
      <a href="#" id="menu_toggle" data-target="nav-mobile" class="top-nav sidenav-trigger full hide-on-large-only"><i id="icono_menu" class="large material-icons">menu</i></a>
      
      

   
