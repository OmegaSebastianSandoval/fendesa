<ul>
  <?php if (Session::getInstance()->get('kt_login_level') == '1') { ?>
    <li <?php if ($this->botonpanel == 1) { ?>class="activo" <?php } ?>>
      <a href="/administracion/panel">
        <i class="fas fa-info-circle"></i> 
        Información página
      </a>
    </li>
  <?php } ?>
  <li <?php if ($this->botonpanel == 2) { ?>class="activo" <?php } ?>>
    <a href="/administracion/publicidad">
      <i class="far fa-images"></i> 
      Administrar publicidad
    </a>
  </li>
  <li <?php if ($this->botonpanel == 3) { ?>class="activo" <?php } ?>>
    <a href="/administracion/contenido">
      <i class="fas fa-file-invoice"></i> 
      Administrar contenidos
    </a>

  </li>
  <li <?php if ($this->botonpanel == 5) { ?>class="activo" <?php } ?>>
  <a href="/administracion/partials/manage?id=1">
    <i class="fas fa-file-invoice"></i> 
    Administrar header y footer
  </a>
</li>
<li <?php if ($this->botonpanel == 6) { ?>class="activo" <?php } ?>>
  <a href="/administracion/ruleta">
    <i class="fas fa-file-invoice"></i> 
    Administrar home
  </a>
</li>
<li <?php if ($this->botonpanel == 7) { ?>class="activo" <?php } ?>>
  <a href="/administracion/contactenos/manage?id=1">
    <i class="fas fa-file-invoice"></i> 
    Administrar Contáctanos
  </a>
</li>
  <?php if (Session::getInstance()->get('kt_login_level') == '1') { ?>
    <li <?php if ($this->botonpanel == 4) { ?>class="activo" <?php } ?>>
      <a href="/administracion/usuario">
        <i class="fas fa-users"></i> 
        Administrar usuarios
      </a>
    </li>
  <?php } ?>
</ul>