<?php
include('./database/dbconnect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage School Year</title>
</head>

<body>
  <!-- <form action="schoolyearCreate.php" method="post">

  </form> -->

  <div class="col-lg-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <div class="card-tools">
          <a class="btn btn-block btn-sm btn-default btn-flat border-primary new_academic" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
        </div>
      </div>
      <div class="card-body">
        <table class="table tabe-hover table-bordered" id="list">
          <colgroup>
            <col width="5%">
            <col width="25%">
            <col width="25%">
            <col width="15%">
            <col width="15%">
            <col width="15%">
          </colgroup>
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Year</th>
              <th>Semester</th>
              <th>System Default</th>
              <th>Evaluation Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $qry = $conn->query("SELECT * FROM tblschoolyear order by abs(annual_year) desc,abs(semester) desc ");
            while ($row = $qry->fetch_assoc()):
            ?>
              <tr>
                <th class="text-center"><?php echo $i++ ?></th>
                <td><b><?php echo $row['annual_year'] ?></b></td>
                <td><b><?php echo $row['semester'] ?></b></td>
                <td class="text-center">
                  <?php if ($row['is_default'] == 0): ?>
                    <button type="button" class="btn btn-secondary bg-gradient-secondary col-sm-4 btn-flat btn-sm px-1 py-0 make_default" data-id="<?php echo $row['school_year_id'] ?>">No</button>
                  <?php else: ?>
                    <button type="button" class="btn btn-primary bg-gradient-primary col-sm-4 btn-flat btn-sm px-1 py-0">Yes</button>
                  <?php endif; ?>
                </td>
                <td class="text-center">
                  <?php if ($row['is_status'] == 0): ?>
                    <span class="badge badge-secondary">Not yet Started</span>
                  <?php elseif ($row['is_status'] == 1): ?>
                    <span class="badge badge-success">Starting</span>
                  <?php elseif ($row['is_status'] == 2): ?>
                    <span class="badge badge-primary">Closed</span>
                  <?php endif; ?>
                </td>

                <td class="text-center">
                  <div class="btn-group">
                    <a href="javascript:void(0)" data-id='<?php echo $row['school_year_id'] ?>' class="btn btn-primary btn-flat manage_academic">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-danger btn-flat delete_academic" data-id="<?php echo $row['school_year_id'] ?>">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>