<style>
table {
border-collapse: collapse;
}
table, th, td {
border: 1px solid black;
}
th {
    text-align: left;
    background-color: #D8D8D8;
}
</style>
<h5>
<?php if (isset($tipo_seleccion) and $tipo_seleccion): ?>
<?php echo $tipo_seleccion->nombre ?>
<?php else: ?>
SOLICITUDES
<?php endif ?>
</h5>
<table>
  <thead>
    <tr>
      <th width="5%">Solicitud</th>
      <th width="5%">Fecha</th>
      <th width="5%">Cédula</th>
      <th width="22%">Solicitante</th>
      <th>Telefono n°1</th>
      <th>Telefono n°2</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach (Paginator($solicitudes) as $c): ?>
    <?php
    $fecha = $c->fecha_hora_asignado_consignado;
    list($date,$hora) = explode(' ', $fecha);
    list($ano,$mes,$dia)= explode('-', $date);
    ?>
    <tr id="tr<?php echo $c->id ?>">
      <td><?php echo $c->cod ?></td>
      <td>
        <?php
        $fecha = $c->fecha_hora_asignado_consignado;
        list($date,$hora) = explode(' ', $fecha);
        list($ano,$mes,$dia)= explode('-', $date);
        echo $dia.'/'.$mes.'/'.$ano;
        ?>
      </td>
      <td>V-<?php echo $c->solicitante->cedula ?></td>
      <td>V-<?php echo $c->solicitante->nombre_apellido ?></td>
      <td><?php echo $c->solicitante->telefono1 ?></td>
      <td><?php echo $c->solicitante->telefono2 ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>