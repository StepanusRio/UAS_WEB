<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once '../modules/config/06337connection.php';
                    $no = 1;
                    $query = "SELECT * FROM barang";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['kdbrg'] ?></td>
                            <td><?php echo $row['nmbrg'] ?></td>
                            <td><?php echo $row['hrgbrg'] ?></td>
                            <td><?php echo $row['satuan'] ?></td>
                            <td><img src="../assets/temp/img/barang/<?php echo $row['filegbr'] ?>" alt="<?php echo $row['nmbrg'] ?>" width="100"></td>
                            <td>
                                <a href="06337update_pages.php?kdbrg=<?php echo $row['kdbrg'] ?>" class="btn btn-primary">Edit</a>
                                <!-- Alertmodal confirmation -->
                                <a href="../modules/function/06337delete.php?kdbrg=<?php echo $row['kdbrg'] ?>" data-toggle="modal" data-target="#deleteModal">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
                                        Delete
                                    </button>
                                </a>
                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Alerts</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Are you Sure to Delete this</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <a class="btn btn-primary" href="../modules/function/06337delete.php?kdbrg=<?php echo $row['kdbrg'] ?>">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>