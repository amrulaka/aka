<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">About Bantal Digital</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            About Bantal Digital
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">




                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>

                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($about as $u) :?>
                                    <tr class="odd gradeX">

                                        <td><img src="<?php echo base_url().'assets/img/uploads/';?><?php echo $u['gambar'] ?>" width="100"/><br><br></td>
                                        <td class="center"><?= $u['deskripsi']?></td>
                                        <td>
                                          <a href="<?php echo
                                              base_url('admin/updateabout/'.$u['id']);?>">Edit</a>

                                        </td>
                                    </tr>
                                  <?php endforeach; ?>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
