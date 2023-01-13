<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Codeigniter Crud</title>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <div class="container mt-4">
      <h1>Codeigniter Crud</h1>
      <hr>
      <div class="d-flex justify-content-end">
         <a href="<?php echo site_url('/addname') ?>" class="btn btn-primary">Add a Name & email</a>
      </div>
      <?php
      if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];
      }
      // $curl = curl_init();

      // curl_setopt_array($curl, array(
      //    CURLOPT_URL => 'https://dataapi.moc.go.th/fta-usage-statistic?hs_codes=01012900,12030000&import_country_code=TH',
      //    CURLOPT_RETURNTRANSFER => true,
      //    CURLOPT_ENCODING => '',
      //    CURLOPT_MAXREDIRS => 10,
      //    CURLOPT_TIMEOUT => 0,
      //    CURLOPT_FOLLOWLOCATION => true,
      //    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      //    CURLOPT_CUSTOMREQUEST => 'GET',
      // ));

      // $response = curl_exec($curl);

      // curl_close($curl);
      // echo $response;
      ?>
      <div class="mt-3">
         <table class="table table-bordered" id="users-list">
            <thead>
               <tr>
                  <th>User Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($users) : ?>
                  <?php foreach ($users as $user) : ?>
                     <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                           <a href="<?php echo base_url('editnames/' . $user['id']); ?>" class="btn btn-warning">Edit</a>
                           <a href="<?php echo base_url('delete/' . $user['id']); ?>" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               <?php endif; ?>
            </tbody>
         </table>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <script>
      $(document).ready(function() {
         $('#users-list').DataTable();
      });
   </script>
   </body>

</html>