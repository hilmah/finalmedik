<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembayaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/masuk_admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pembayaran</li>
      </ol>
    </section>
  

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <h3>
             &nbsp;<i class="fa fa-book"></i> 
               <div class="pull-right" >
                  <div class="col-sm-12" align="pull-right">
                    <ul>
                      <a style="float: right;" href="<?php echo base_url('pembayaran/tambah_pembayaran') ?>" class="btn btn-sm btn-primary">Tambah <i class="fa fa-plus"></i></a>
                    </ul>
                    </div>
                  </div>
          </h3>
              
            <!-- /.box-header -->
            <div class="table-responsive ">
              <table  class="table table-bordered table-striped" id="example1">
               
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>tanggal</th>
                  <th>poli</th>
                  <th>cara Bayar</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php

                foreach ($pembayaran as $p) {
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $p->nama ?></td>
                    <td><?php echo $p->tanggal ?></td>
                    <td><?php echo $p->poli?></td>
                    <td><?php echo $p->cara_bayar?></td>
                    
                    <td>
                    
                   <a class="btn btn-sm btn-primary" href="<?php echo base_url().('aset/edit_pembayaran/').$p->id; ?>" ><i class="fa fa-edit"></i> Edit</a>
                    
                  <!--<a href="<?php echo base_url().('pasien/detail/').$k->id; ?>" title="Detail">
                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                   <a href="<?php echo base_url().'pasien/edit_pasien/'.$k->id; ?>" title="Edit Data">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                      <a href="<?php echo base_url().'pasien/hapus/'.$k->id; ?>" title="Hapus Data" onclick="return confirm('Apakah anda yakin mau menghapus?')">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>-->

                         <a class="btn btn-sm btn-danger" href="<?php echo base_url().'aset/hapus/'.$p->id; ?>" onclick="return confirm(\'yakin?\')" ><i class="fa fa-wrench"></i> Hapus</a>
                   
                    </td>
                  
                  </tr>
                  <?php $no++; ?>
                  <?php } ?>
                   </tbody>
              </table>
              
                </div>
              </div>
            </div>
          </div>
        </div>
</div>