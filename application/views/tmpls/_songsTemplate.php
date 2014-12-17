      <section id="music_section" class="track_section">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="section_head_widget animatedParent ">
                <h2 class="animated fadeInLeft">vip music</h2>
                <h5 class="animated bounceInRight">All Songs</h5>
              </div>
              <!--section_head_widget--> 
            </div>
            <div class="col-xs-12 col-sm-4 text-right music-genre">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle genre" data-toggle="dropdown">
                    SELECT GENRE <span class="fa fa-caret-down"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="javascript:void(0);" data-genre="">SELECT GENRE</a></li>
                    <?php foreach($songGenres as $key=>$val): ?>
                      <li><a href="javascript:void(0);" data-genre="<?php echo $val->slug; ?>"><?php echo $val->name; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 text-right music-subgenre">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle subgenre" data-toggle="dropdown">
                    SELECT SUB GENRE <span class="fa fa-caret-down"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    
                  </ul>
                </div>
            </div>
          </div>
          <!--row-->
          <div class="tours_widget">
            <div class="tour_row_header">
              <div class="column_one"> Date </div>
              <div class="column_two"> &nbsp;<!--no header for picture column--> 
              </div>
              <div class="column_three"> Song Name </div>
              <div class="column_four"> Artist Name </div>
              <div class="column_five"> BPM </div>
              <div class="column_six"> Action </div>
            </div>
            <div id="musicListHolder">
            <?php foreach($songs as $vKey => $vVal): ?>
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span><?php echo $vVal->createdAt; ?></span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_07.jpg" alt="" /> </div>
                <div class="column_three"> <?php echo $vVal->songName; ?> </div>
                <div class="column_four"> <?php echo $vVal->artistName; ?> </div>
                <div class="column_five"> <?php echo $vVal->bpm; ?> </div>
                <div class="column_six music">
                    <a href="javascript:void(0);"><span class="fa fa-play" data-slug="<?php echo $vVal->slug; ?>"></span></a>
                    <a href="javascript:void(0);"><span class="fa fa-plus" data-slug="<?php echo $vVal->slug; ?>"></span></a>
                    <a href="javascript:void(0);"><span class="fa fa-download" data-slug="<?php echo $vVal->slug; ?>"></span></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
          <ul id="music-pagination" class="pagination-sm"></ul>
        </div>
        
        <div class="container">
          <ul class="channels_list row animatedParent ">
            <li class="col-xs-12 col-sm-4 animated fadeInLeft"><a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
            <li class="col-xs-12 col-sm-4 animated fadeInLeft"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
            <li class="col-xs-12 col-sm-4 animated fadeInLeft"><a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
          </ul>
       </div>
       
    </section>   