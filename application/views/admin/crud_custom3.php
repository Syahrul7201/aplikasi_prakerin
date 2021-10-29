<main>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item"><a href="#">Transportasi</a> / </li>
    <li class="breadcrumb-item active"aria-current="page">Daftar Transportasi</li>
  </ol>
</nav>


<div class="row">
              <?php
              if($this->session->flashdata('pesan')){
                echo $this->session->flashdata('pesan');
              }else{
                if(isset($info)){
                  echo '<div class="alert alert-primary">'.$info.'</div>';
                }else{
                  echo '<div class="d-none">Kelola Data '.$title.'</div>';
                }
              }
              ?>   
            </div>





</div>
</div>
</div>

<div class="col m5 s12">
<div class="card grey lighten-4">

<div class="card-header">

<div class="btn-toolbar justify-content-lg-end justify-content-evenly">
<div class="btn-group " role="group" aria-label="First group">  

  <a href="<?=site_url('admin/'.$page.'/backup')?>" class="btn btn-primary rounded mx-1"><i class="fas fa-cloud-download-alt "></i> Backup</a>
  <a href="<?=site_url('admin/'.$page.'/export')?>" class="btn btn-primary rounded mx-1"><i class="fas fa-file-export "></i> Export</a>
  <a href="#truncate" class="btn btn-primary rounded mx-1 modal-trigger "><i class="fas fa-trash "></i> Hapus</a>
  <div id="truncate" class="modal deletemodal">
    <div class="modal-content blue white-text">
      <p>Apakah anda yakin ingin mengosongkan semua data?</p>
    </div>
    <div class="modal-footer">
      <a class="waves-effect waves-red btn white blue-text modal-action modal-close">TIDAK</a>
      <a href="<?=site_url('admin/'.$page.'/truncate')?>" class="waves-effect waves-green btn blue modal-action modal-close">YA</a>
    </div>
  </div>
</div>
</div>
</div>

    <div class="card-body">


</div>

<div class="row">
  <div class="col overflow-auto">
      <table id="hai" class="table table-striped bg-light mt-2">
<thead>
    <tr class="bg-primary text-center text-light">
    <th class="light">No</th>
                <?php 
                foreach($tableTitle as $tt){
                  echo '<th class="light">'.$tt.'</th>';
                }
                ?>
                <th width="15%" class="light">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach($data as $d){?>
              <tr>
                <td><?=$no?></td>
                <?php 
                foreach($tableField as $tf){
                  echo '<td>'.$d->$tf.'</td>';
                }
                ?>
                <td style="text-align: center">
                <a href="<?=site_url('admin/'.$page.'/p/accept/'.$d->$primary_key.'')?>" class="btn waves-effect waves-light action btn-success tooltipped" data-position="top" data-delay="50" data-tooltip="Terima Pembatalan"><i class="fas fa-">done</i></a>
                  <a href="#deleteDialog<?=$d->$primary_key?>" class="btn btn-danger waves-effect modal-trigger waves-light action modal-trigger red"><i class="fas fa-trash text-white"></i></a>
                </td>
                <div id="deleteDialog<?=$d->$primary_key?>" class="modal deletemodal">
                
                  <div class="modal-content blue white-text mx-auto p-2" style="width:300px">
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
           
                  <div class="col">
                  <div class="card mx-2 border-0">
                    
                    <a class="btn btn-primary modal-action modal-close mb-1">TIDAK</a>
                    <a href="<?=site_url('admin/'.$page.'/p/delete/'.$d->$primary_key.'')?>" class="btn btn-danger modal-action modal-close">YA</a>
                  </div>
                  </div>
                </div>
                <?php $no++; } ?>
              </tr>
            </tbody>
          </table>
</table>
      </div>

    



                  </div>
                  </div>
        





















              </main>