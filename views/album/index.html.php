  <div class="container bootdey">
        <?php foreach ($artists as $artist): ?> 
        <div class="row">
            <div class="col-md-12">
                <!-- START widget-->
                <div class="panel widget">
                    <div class="half-float">
                        <img src="https://bootdey.com/img/Content/bg1.jpg" alt="" class="img-responsive card-img-top">
                        <div class="half-float-bottom">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image" class="img-thumbnail img-circle thumb128">
                        </div>
                    </div>
                    <div class="panel-body text-center">
                        <h3 class="m0"><?= $artist['name'] ?></h3>
                        <p class="text-muted">Lead director</p>
                        <p>Proin metus justo, commodo in ultrices at, lobortis sit amet dui. Fusce dolor purus, adipiscing a tempus at, gravida vel purus.</p>
                    </div>
                    <div class="panel-body text-center bg-gray-dark">
                        <div class="row row-table">
                        <div class="col-xs-4">
                            <h3 class="m0"><?= $artist['year'] ?></h3>
                            <p class="m0">Year</p>
                        </div>
                        <div class="col-xs-4">
                            <h3 class="m0">2000</h3>
                            <p class="m0">Likes</p>
                        </div>
                        <div class="col-xs-4">
                            <h3 class="m0">500</h3>
                            <p class="m0">Following</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    <div>
      
      <style>


.widget .panel, .widget.panel {
  overflow: hidden;
}

.widget {
  margin-bottom: 20px;
  border: 0;
}

.bg-gray-darker {
  background-color: #232735;
  color: #fff!important;
}

.half-float {
  position: relative;
  margin-bottom: 65px;
}

.half-float .half-float-bottom, .half-float .half-float-top {
  position: absolute;
  left: 50%;
  bottom: -60px;
  width: 120px;
  height: 120px;
  margin-left: -60px;
  z-index: 2;
}

.thumb128 {
  width: 128px!important;
  height: 128px!important;
}

.half-float+* {
  margin-top: -55px;
  padding-top: 65px;
}

.m0 {
  margin: 0!important;
}

.bg-gray-dark {
  background-color: #3a3f51;
  color: #fff!important;
}

.row-table {
  display: table;
  table-layout: fixed;
  height: 100%;
  width: 100%;
  margin: 0;
}

.row-table>[class*=col-] {
  display: table-cell;
  float: none;
  table-layout: fixed;
  vertical-align: middle;
}


      </style>