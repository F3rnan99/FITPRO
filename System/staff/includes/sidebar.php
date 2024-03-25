<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($page=='dashboard'){ echo 'active'; }?>"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="<?php if($page=='member'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-group"></i> <span>Administrar Miembros</span></a>
      <ul>
        <li><a href="members.php">Lista de todos los miembros</a></li>
        <li><a href="member-entry.php">Inscribir Miembro Nuevo</a></li>
        <li><a href="remove-member.php">Eliminar Miembro</a></li>
        <li><a href="edit-member.php">Actualizar detalles de miembro</a></li>
      </ul>
    </li>

    <li class="<?php if($page=='equipment'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-cogs"></i> <span>Equipo de gimnasio</span> </a>
      <ul>
        <li><a href="equipment.php">Listar equipos de gimnasio</a></li>
        <li><a href="equipment-entry.php">Agregar Equipo</a></li>
        <li><a href="remove-equipment.php">Eliminar Equipo</a></li>
        <li><a href="edit-equipment.php">Actualizar detalles del equipo</a></li>
      </ul>
    </li>
    <li class="<?php if($page=='membersts'){ echo 'active'; }?>"><a href="member-status.php"><i class="icon icon-eye-open"></i> <span>Estado del Miembro</span></a></li>
    <li class="<?php if($page=='payment'){ echo 'active'; }?>"><a href="payment.php"><i class="icon icon-money"></i> <span>Pagos</span></a></li>
    <li class="<?php if($page=='attendance'){ echo 'active'; }?>"><a href="attendance.php"><i class="icon icon-calendar"></i> <span>Administrar asistencia</span></a></li>

  </ul>
</div>
<!--sidebar-menu-->