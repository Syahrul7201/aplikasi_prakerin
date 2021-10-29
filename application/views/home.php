
<main>
  <div class="card border-0 bg-light mx-auto col-lg-10 col-md-10">
    <div class="card mx-auto border-0" style="width: 456px;">
    <div class="card-body">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
          <a class="carousel-item active" href="#">
            <img src="https://www.rentalmobilbali.net/wp-content/uploads/2016/01/Tempat-Wisata-Unik-Di-Bali-Feature-Image.jpg" class="d-block " alt="..." style="width: 420px; height: 280px;">
          </a>
          <a class="carousel-item" href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLgQA12pHFVg42cBtE-LKn0V3ZISm66MAo-Q&usqp=CAU" class="d-block " alt="..." style="width: 420px; height: 280px;">
          </a>
          <a class="carousel-item" href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ09DPFLrYn8CulkP29YYG4nXeIh8_0LVE1A&usqp=CAU" class="d-block " alt="..." style="width: 420px; height: 280px;">
          </a>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden ">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>



























<div class="card mt-2 col-lg-10 col-md-10 mx-auto">

  <ul class="nav nav-tabs mx-2 my-2" id="myTab" role="tablist">

  <li class="nav-item" role="presentation">
    <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tiket Pesawat</button>
  </li>



  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tiket Kereta Api</button>
  </li>


</ul>





<div class="tab-content mx-2 my-2" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><form method="GET" action="<?= site_url('flight/search')?>">
      <div class="row my-2">
      <div class="col-lg-4 col-md-6 col-sm-12">
          Kota Asal :
          <div class="input-group input-group-md mb-3">
            <span class=" my-auto" style="height: 30px;" id="inputGroup-sizing-md"><h4 class="fas fa-plane-departure mx-2"></h4></span>
            <select name="from" class="form-select" id="p_asal" onchange="cekTP()">
              <option value="" disabled selected hidden>Pilih Kota</option>  
              <?php
              foreach($plp as $l){
                echo '<option value="'.$l->id_place.'">'.$l->city_name.' - '.$l->place_name.'</option>';
              }
              ?>
            </select>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            Kota Tujuan:
            <div class="input-group input-group-md mb-3">
              <span class=" my-auto" style="height: 30px;" id="inputGroup-sizing-md"><h4 class="fas fa-plane-arrival mx-2"></h4></span>
              <select name="to" class="form-select" id="p_tujuan" onchange="cekTP()">
              <option value="" disabled selected hidden>Pilih Kota</option>  
              
              <?php
              foreach($plp as $l){
                echo '<option value="'.$l->id_place.'">'.$l->city_name.' - '.$l->place_name.'</option>';
              }
              ?>
              </select>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-6 ">
            Kelas :
            <div class="input-group input-group-md mb-3">  
            <span class=" my-auto" style="height: 30px;" id="inputGroup-sizing-md"><h4 class="fas fa-layer-group mx-2"></h4></span>  
            <select name="class" class="form-select" onchange="cekTP()">  
            <option value="" disabled selected hidden>Pilih Kelas</option>  
            
  
            <?php
            foreach($kp as $l){
              echo '<option value="'.$l->id_transportation_class.'">'.$l->class_name.'</option>';
            } ?>

            </select>
          </div>
        </div>
  

        <div class="col-lg-2 col-md-6 col-6">
          Penumpang :
          <div class="input-group input-group-md mb-3">
            <span class=" my-auto" style="height: 30px;" id="inputGroup-sizing-md"><h4 class="fas fa-users mx-2"></h4></span>
            <select name="ps" class="form-select">
              <option value="" disabled selected hidden>Jumlah Penumpang</option>  

              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
        </div>
      </div>



      <div class="row">
        <div class="form-grup col col-lg-3 col-md-6 col-6">
          Tanggal Berangkat :
          <label class="control-label "></label>
          <input class="form-control" id="p_b" name="date_g" placeholder="MM/DD/YYY" type="date" onchange="cekTPLG()"></input>
        </div>
        <div class="form-grup col col-lg-3 col-md-6 col-6">
          Tanggal Pulang :
          <label class="control-label"></label>
          <input class="form-control" id="p_p" name="date_b" placeholder="MM/DD/YYY" type="date" onchange="cekTPLG()"></input>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <button type="submit" style="width: 100%" class="btn btn-primary mt-4"><i class="fas fa-search mx-2"></i>CARI TIKET</button>
      </div>
    </div>
  </form></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><form method="GET" action="<?=site_url('train/search')?>">
  <div class="row my-2">
    <div class="col-lg-4 col-md-6 col-sm-12">
      Kota Asal :
      <div class="input-group input-group-md mb-3">
        <span class=" my-auto" style="height: 30px;" id="inputGroup-sizing-md"><h4 class="fas fa-train mx-2"></h4></span>
        <select name="from" class="form-select" id="inputGroupSelect01" onchange="cekTP()">
        <option value="" disabled selected hidden>Pilih Kota</option>  
        <?php
        foreach($plp as $l){
          echo '<option value="'.$l->id_place.'">'.$l->city_name.' - '.$l->place_name.'</option>';
        } ?>
        </select>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      Kota Tujuan:
      <div class="input-group input-group-md mb-3">
        <span class=" my-auto" style="height: 30px;" id="inputGroup-sizing-md"><h4 class="fas fa-subway mx-2"></h4></span>
        <select name="to" class="form-select" id="inputGroupSelect01" onchange="cekTP()">
        <option value="" disabled selected hidden>Pilih Kota</option>  

        <?php
        foreach($plp as $l){
          echo '<option value="'.$l->id_place.'">'.$l->city_name.' - '.$l->place_name.'</option>';
        } ?>
        </select>
      </div>
    </div>


    <div class="col-lg-2 col-md-6 col-6 ">
      Kelas :
      <div class="input-group input-group-md mb-3">
        <span class=" my-auto" style="height: 30px;" id="inputGroup-sizing-md"><h4 class="fas fa-layer-group mx-2"></h4></span>
        <select name="class" class="form-select" id="inputGroupSelect01" onchange="cekTP()">
        <option value="" disabled selected hidden>Pilih Kelas</option>  
        <?php foreach($kp as $l){
          echo '<option value="'.$l->id_transportation_class.'">'.$l->class_name.'</option>';
        } ?>
        </select>
      </div>
    </div>

    <div class="col-lg-2 col-md-6 col-6">
      Penumpang :
      <div class="input-group input-group-md mb-3">
        <span class=" my-auto" style="height: 30px;" id="inputGroup-sizing-md"><h4 class="fas fa-users mx-2"></h4></span>
        <select name="ps" class="form-select" id="inputGroupSelect01">
          <option value="" disabled selected hidden>Jumlah Penumpang</option>  

          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
    </div>
  </div>


  <div class="row">
  <div class="form-grup col col-lg-3 col-md-6 col-6">
          Tanggal Berangkat :
          <label class="control-label "></label>
          <input class="form-control" id="p_b" name="date_g" placeholder="MM/DD/YYY" type="date" onchange="cekTPLG()"></input>
        </div>
        <div class="form-grup col col-lg-3 col-md-6 col-6">
          Tanggal Pulang :
          <label class="control-label"></label>
          <input class="form-control" id="p_p" name="date_b" placeholder="MM/DD/YYY" type="date" onchange="cekTPLG()"></input>
        </div>
    
    <div class="col-lg-6 col-md-12 col-sm-12">
      <button type="submit" style="width: 100%" class="btn btn-primary mt-4"><i class="fas fa-search mx-2"></i>CARI TIKET</button>
    </div>
  </div>
</form></div>

</div>



























      
</main>


