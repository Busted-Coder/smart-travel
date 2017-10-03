<div class="row">
  <div align="center" style="margin-top: 50px;padding-bottom: 50px;"> <h2 style="color: blue"> Your are going to Book !</h2>
</div>
<div class="row">
  <div class="col-sm-4">
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <table class="table">
      <thead>
        <tr>
          <th>Source</th>
          <th>Destination</th>
          <th>Departure</th>
          <th>Arrival</th>
          <th>Arrival Day</th>
          <th>Fare</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td> <?php echo $this->session->userdata($falsh_info['source']); ?></td>
            <td> <?php echo $data['schedule']['destination'] ?></td>
            <td> <?php echo $p['seats'] ?> </td>
            <td> <?php echo $p['class'] ?> </td>
            <td> <?php echo $p['des'] ?> </td>
            <td> <?php echo $p['created_at'] ?> </td>
          </tr>
      </tbody>
    </table>
  </div>
</div>

<script>