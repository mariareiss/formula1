<h1>Results</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Final Position</th>
      <th>Point Earned in this Race</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
              body {
            background-color: #f8f9fa; /* Set your desired background color */
        }
        .container {
            margin-top: 20px;
        }
        th {
            font-weight: bold;
        }
        td, th {
            text-align: center;
            vertical-align: middle !important;
        }
        .btn-primary {
            background-color: #007bff; /* Set your desired button color */
            border-color: #007bff; /* Set the button border color */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Set the hover color */
            border-color: #0056b3; /* Set the hover border color */
        }
<?php
while ($result = $results->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $result['position']; ?></td>
    <td><?php echo $result['points_earned']; ?></td>
    <td>
      
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

