<div id="sidebar"><a href="#" class="visible-phone"><i class="fas fa-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($page=='dashboard'){ echo 'active'; }?>"><a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="fas fa-users"></i> <span>Administrar miembros</span> <span class="label label-important"><?php include 'dashboard-usercount.php';?> </span></a>
      <ul>
        <li class="<?php if($page=='members'){ echo 'active'; }?>"><a href="members.php"><i class="fas fa-arrow-right"></i> Listar Miembros</a></li>
        <li class="<?php if($page=='members-entry'){ echo 'active'; }?>"><a href="member-entry.php"><i class="fas fa-arrow-right"></i> Inscribir Miembro</a></li>
        <li class="<?php if($page=='members-remove'){ echo 'active'; }?>"><a href="remove-member.php"><i class="fas fa-arrow-right"></i> Eliminar Miembro</a></li>
        <li class="<?php if($page=='members-update'){ echo 'active'; }?>"><a href="edit-member.php"><i class="fas fa-arrow-right"></i> Actualizar Miembro</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="fas fa-dumbbell"></i> <span>Administrar Equipos</span> <span class="label label-important"><?php include 'dashboard-equipcount.php';?> </span></a>
    <ul>
        <li class="<?php if($page=='list-equip'){ echo 'active'; }?>"><a href="equipment.php"><i class="fas fa-arrow-right"></i> Listar Equipos</a></li>
        <li class="<?php if($page=='add-equip'){ echo 'active'; }?>"><a href="equipment-entry.php"><i class="fas fa-arrow-right"></i> Agregar Equipo</a></li>
        <li class="<?php if($page=='remove-equip'){ echo 'active'; }?>"><a href="remove-equipment.php"><i class="fas fa-arrow-right"></i> Eliminar Equipo</a></li>
        <li class="<?php if($page=='update-equip'){ echo 'active'; }?>"><a href="edit-equipment.php"><i class="fas fa-arrow-right"></i> Actualizar Equipo</a></li>
      </ul>
    </li>
    <li class="<?php if($page=='attendance'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="fas fa-calendar-alt"></i> <span>Asistencia</span></a>
      <ul>
        <li class="<?php if($page=='attendance'){ echo 'active'; }?>"><a href="attendance.php"><i class="fas fa-arrow-right"></i> Check In/Out</a></li>
          <li class="<?php if($page=='view-attendance'){ echo 'active'; }?>"><a href="view-attendance.php"><i class="fas fa-arrow-right"></i> Ver</a></li>
        </ul>
      </li>

    
    <li class="<?php if($page=='manage-customer-progress'){ echo 'active'; }?>"><a href="customer-progress.php"><i class="fas fa-tasks"></i> <span>Progreso del Cliente</span></a></li>
    <li class="<?php if($page=='member-status'){ echo 'active'; }?>"><a href="member-status.php"><i class="fas fa-eye"></i> <span>Estado del Cliente</span></a></li>
    <li class="<?php if($page=='payment'){ echo 'active'; }?>"><a href="payment.php"><i class="fas fa-hand-holding-usd"></i> <span>Pagos</span></a></li>
    <li class="<?php if($page=='announcement'){ echo 'active'; }?>"><a href="announcement.php"><i class="fas fa-bullhorn"></i> <span>Anuncios</span></a></li>
    <li class="<?php if($page=='staff-management'){ echo 'active'; }?>"><a href="staffs.php"><i class="fas fa-briefcase"></i> <span>Administración de personal</span></a></li>
    <li class="submenu"> <a href="#"><i class="fas fa-file"></i> <span>Reportes</span></a>
    <ul>
        <li class="<?php if($page=='chart'){ echo 'active'; }?>"><a href="reports.php"><i class="fas fa-arrow-right"></i> Representación gráfica</a></li>
        <li class="<?php if($page=='member-repo'){ echo 'active'; }?>"><a href="members-report.php"><i class="fas fa-arrow-right"></i> Informe de miembros</a></li>
        <li class="<?php if($page=='c-p-r'){ echo 'active'; }?>"><a href="progress-report.php"><i class="fas fa-arrow-right"></i> Informe de progreso del cliente</a></li>
      </ul>
    </li>

     
   
    <!-- Visit codeastro.com for more projects -->
  </ul>
</div>