<?php 
    include 'header.php';
    $user_id = $_SESSION['id'];

    $data = mysqli_query($db->conn, "select * from `conference` where user_id='$user_id' order by created_at desc");
?>

            <div class="py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Conferences</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Conferences</h1>
                    </div>
                    <div>
                        <a href="add_conference.php" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        Add new conference
                        </a>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">#</th>
                                    <th class="border-0">Title</th>
                                    <th class="border-0">Speaker</th>
                                    <th class="border-0">Link</th>
                                    <th class="border-0">Image</th>
                                    <th class="border-0">Date Time</th>
                                    <th class="border-0">Description</th>
                                    <th class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(mysqli_num_rows($data) > 0) {
                                    $i = 0;
                                    while($row = mysqli_fetch_assoc($data)) {
                                
                            ?>
                                <tr>
                                    <td><?=++$i?></td>
                                    <td><?=$row['title']?></td>
                                    <td><?=$row['speaker']?></td>
                                    <td><a target="_blank" href="<?=$row['link']?>"><?=$row['link']?></a></td>
                                    <td>
                                        <img src="../assets/uploads/<?=$row['image']?>" alt="title image" style="height:80px; width:80px">
                                    </td>
                                    <td><?=date("d/M/y H:i A", strtotime($row['date_time'])) ?></td>
                                    <td><?=$row['desc']?></td>
                                    <td>
                                        <a href="edit_conf.php?cid=<?=$row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="../functions/conference.php?cid=<?=$row['id']?>&img=<?=$row['image']?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php 
                                    }
                                }
                            ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

<?php  
  include 'footer.php';
?>