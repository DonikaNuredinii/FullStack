<?php 
include 'config.php'; 
 $stmt = $conn->query('SELECT * FROM user');
  $user = $stmt->fetchAll(PDO::FETCH_ASSOC); 
  ?>
   <!DOCTYPE html>
    <html lang="en">
         <head>     
            <meta charset="UTF-8"> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <title>Dashboard</title>
             <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
              <link rel="stylesheet" href="style.css">
             </head> 
             <body> 
                <nav class="navbar navbar-dark bg-dark">
                     <div class="container-fluid">
                         <span class="navbar-brand mb-0 h1">Digital School</span>
                          <span class="text-light">Welcome </span> 
                          <a href="#" class="btn btn-outline-light">Sign out</a> 
                        </div>
                     </nav> 
                     <div class="container mt-4"> 
                        <div class="row"> <div class="col-md-3"> 
                        <ul class="list-group"> 
                        <li class="list-group-item"><a href="dashboard.php">Dashboard</a></li> 
                        <li class="list-group-item"><a href="profile.php">Edit Profile</a></li> 
                    </ul>
 
                        </div> 
                        <div class="col-md-9"> 
                            <h2>Dashboard</h2>
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th>ID</th> 
                                         <th>Name</th>
                                          <th>Surname</th> 
                                          <th>Age</th>
                                         <th>Phone_number</th>
                                         <th>adress</th>
                                         <th>Update</th>
                                         </tr> 
                                        </thead> 
                                        <tbody>
                                             <?php
                                              foreach ($user as $user): ?>
                                               <tr>
                                                 <td><?= $user['id'] ?>
                                                </td> 
                                                <td><?= $user['name'] ?></td>
                                                 <td><?= $user['surname'] ?>
                                                </td> 
                                                <td><?= $user['age'] ?>
                                            </td>
                                             <td><?= $user['phone_number'] ?>
                                            </td>
                                            <td><?= $user['adress'] ?>
                                            </td>
                                             <td>
                                                 <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm">Delete</a> 
                                             <a href="update.php?id=<?= $user['id'] ?>" class="btn btn-primary btn-sm">Update</a> 
                                            </td> 
                                        </tr> 
                                        <?php endforeach; ?> 
                                    </tbody>
                                 </table>
                                 </div> 
                                </div> 
                            </div>
                            
                         </body> 
                         </html>