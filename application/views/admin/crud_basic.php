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
                if($action==''){
                  echo '<div class="d-none">Kelola Data '.$title.'</div>';
                }elseif(isset($info)){
                  echo '<div class="alert alert-primary">'.$info.'</div>';
                }
              }
              ?>   
            </div>









      <?php if($action!==''){ ?>

<?php
if($action=='add'){
  echo form_open('admin/'.$page.'/p/insert');
}elseif($action=='edit'){
  echo form_open('admin/'.$page.'/p/update/'.$aidi.'');
}
?>  
<div id="message"></div>
<?php foreach($inputType as $i){
  ?>

<div class="col">

      <div class="card mx-auto" style="width: 300px;">
      <div class="card-body bg-info">
      <label><?=$i['label']?></label>
      <div class="input-group">
    
      <?php if($i['type']=='text'||$i['type']=='number'||$i['type']=='time'||$i['type']=='file'){ ?>
      <input class="col btn btn-sm btn-light mx-1" name="<?=$i['name']?>" <?php if(isset($i['id'])) echo 'id="'.$i['id'].'"'?> type="<?=$i['type']?>" <?php if(isset($i['value'])) echo 'value="'.$i['value'].'"'?> <?php if(isset($i['class'])) echo 'class="'.$i['class'].'"'?>>
      <?php }elseif($i['type']=='select'){
        ?>

        <select class="col d-flex btn btn-sm btn-light mx-1" id="<?php if(isset($i['id'])) echo $i['id']?>" name="<?=$i['name']?>" <?php if(isset($i['onchange'])) echo 'onchange="'.$i['onchange'].'"'?> <?php if(isset($i['class'])) echo 'class="'.$i['class'].'"'?>>
          <option value="">Pilih <?=$i['label']?></option>
          <?php 
          $o = $i['option'];
          $value = $o['value'];
          $label = $o['label'];
          if($o['data']=='database'){
            $get = $this->m_general->gDataA($o['table'])->result();
            foreach($get as $gg){
              if(isset($i['value'])){
                if($gg->$value==$i['value']){
                  $selected = " selected";
                }else{
                  $selected = "";
                }
              }else{
                $selected = "";
              }
              echo '<option value="'.$gg->$value.'"'.$selected.'>'.$gg->$label.'</option>';
            }
          }elseif($o['data']=='custom'){
            foreach($o['list'] as $gg){
              echo '<option value="'.$gg['value'].'">'.$gg['label'].'</option>';
            }
          }elseif($o['data']=='ajax'){
            if(isset($i['value'])){
              $get = $this->m_general->gDataW($o['table'],array($i['option']['value']=>$i['value']))->result();
              foreach($get as $gg){
                if(isset($i['value'])){
                  if($gg->$value==$i['value']){
                    $selected = " selected";
                  }else{
                    $selected = "";
                  }
                }else{
                  $selected = "";
                }
                echo '<option value="'.$gg->$value.'"'.$selected.'>'.$gg->$label.'</option>';
              }
            }
          }
          ?>
        </select>

        <?php
      }elseif($i['type']=='textarea'){
        ?>
        <textarea class="materialize-textarea <?php if(isset($i['class'])) echo $i['class']?>" name="<?=$i['name']?>"></textarea>
        <?php
      } ?>

    </div>
    </div>
  </div>
  <?php } ?>
  <div class="card mx-auto bg-info mb-3"style="width: 300px;">
    <div class="card-body bg-info mx-auto">
  <button type="submit" class="btn btn-primary waves-effect waves-light blue"><i class="fas fa-plus  text-white"></i> Simpan</button>
  <button type="reset" class="btn btn-danger "><i class="fas fa-redo text-white"></i> Reset</button>
</form>
<?php }else{
  ?>
  <?php
} ?>
  
</div>
</div>
</div>

<div class="col m5 s12">
<div class="card grey lighten-4">

<div class="card-header">

<div class="btn-toolbar justify-content-lg-end justify-content-evenly">
<div class="btn-group " role="group" aria-label="First group">  
<a href="<?=site_url('admin/'.$page.'/index/add')?>" class="btn btn-primary rounded mx-1"><i class="fas fa-plus "></i> Tambah</a>
  <a href="<?=site_url('admin/'.$page.'/backup')?>" class="btn btn-primary rounded mx-1"><i class="fas fa-cloud-download-alt "></i> Backup</a>
  <a href="<?=site_url('admin/'.$page.'/export')?>" class="btn btn-primary rounded mx-1"><i class="fas fa-file-export "></i> Export</a>
  <a href="#truncate" class="btn btn-primary rounded mx-1 m" data-bs-toggle="modal" data-bs-target="#truncate"><i class="fas fa-trash "></i> Hapus</a>
</div>
  <div class="modal position-fixed top-50 start-50 translate-middle" id="truncate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 500px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Semua Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus semua data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="<?=site_url('admin/'.$page.'/truncate')?>" type="button" class="btn btn-primary">Ya</a>
      </div>
    </div>
  </div>
</div>
  
  

</div>
</div>
</div>

    <div class="card-body">


</div>

<div class="row">
  <div class="col overflow-auto">
    <div class="datatebles">
      <table class="table table-striped bg-light mt-2">
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
                  <a href="<?=site_url('admin/'.$page.'/index/edit/'.$d->$primary_key.'')?>" class="btn btn-warning waves-effect waves-light action yellow"><i class="fas fa-pen text-white"></i></a>
                  <a href="#deleteDialog<?=$d->$primary_key?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteDialog<?=$d->$primary_key?>"><i class="fas fa-trash text-white"></i></a>
                </td>




                <div class="modal position-absolute top-50 start-50 translate-middle" id="deleteDialog<?=$d->$primary_key?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 500px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="<?=site_url('admin/'.$page.'/p/delete/'.$d->$primary_key.'')?>" type="button" class="btn btn-primary">Ya</a>
      </div>
    </div>
  </div>
</div>




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
          </div>
      </div>

    



                  </div>
                  </div>
                </main>  