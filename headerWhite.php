<nav class="navbar navbar-expand-lg navbar-light text-center" id="navbar-primera">
  <img src="./img/Logo.jpg" width="20%" alt="" id="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>Menú
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="idiomasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Idiomas
        </a>
        <div class="dropdown-menu text-center" aria-labelledby="idiomasDropdown">
          <a class="dropdown-item d-flex justify-content-between" href="#">Español  <img src="./img/banderas/spain.png" alt=""></a>
          <a class="dropdown-item d-flex justify-content-between" href="#">Ingles  <img src="./img/banderas/united-states.png" alt=""> </a>
          <a class="dropdown-item d-flex justify-content-between" href="#">Frances  <img src="./img/banderas/france.png" alt=""> </a>
          <a class="dropdown-item d-flex justify-content-between" href="#">Aleman  <img src="./img/banderas/germany.png" alt=""> </a>
          <a class="dropdown-item d-flex justify-content-between" href="#">Italiano  <img src="./img/banderas/italy.png" alt=""> </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="accesoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acceso
        </a>
        <div class="dropdown-menu text-center" aria-labelledby="accesoDropdown">
          <a class="dropdown-item" href="#">Clientes</a>
          <a class="dropdown-item" href="#">Hoteles</a>
          <a class="dropdown-item" href="#">Empresas</a>
          <a class="dropdown-item" href="#">Agencias</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="registroDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registro
        </a>
        <div class="dropdown-menu text-center" aria-labelledby="registroDropdown">
          <a class="dropdown-item" href="registroClientes.php">Clientes</a>
          <a class="dropdown-item" href="registroHoteles.php">Hoteles</a>
          <a class="dropdown-item" href="registroEmpresas.php">Empresas</a>
          <a class="dropdown-item" href="registroAgencia.php">Agencias</a>
          <a class="dropdown-item" href="registroProveedor.php">Proveedor</a>
        </div>
      </li>
        <button style="color:black;" type="button" class="btn btn-outline-primary font-weight-bold" data-toggle="modal" data-target="#exampleModal">
          Te llamamos
        </button>
      </li>
      
    </ul>
  </div>

</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Te llamaremos en menos de 24 horas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_llamada">
          <div class="row">
            <div class="col-md-3 p-1">
              <input type="text" class="form-control" placeholder="Indicativo" id="indicativo" require>
            </div>
            <div class="col-md-9 p-1">
              <input type="text" class="form-control" placeholder="Numero" id="numero" require>
            </div>
          </div>
          <div class="row">
            <div class="col p-1">
              <input type="text" class="form-control" placeholder="Nombre y apellidos" id="nombre" require>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Recibir llamada">
        </form>
      </div>
    </div>
  </div>
</div>
<script src="./js/adicionales/llamada.js"></script>
