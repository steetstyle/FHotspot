<?php require VDIR.'/admin/header.php' ?>
                                <!-- Begin Page Header-->
                                <div class="row">
                                    <div class="page-header mt-3">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                                <h2 class="page-header-title" style="margin-right: 0 !important;"><?php echo $title ?></h2>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 d-flex justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                                <div class="page-header-tools">
                                                    <a class="btn btn-gradient-01" href="<?php echo URL ?>/?url=admin/addHotspotUser">Kullanıcı Ekle</a>
                                                    <a class="btn btn-gradient-01" href="<?php echo URL ?>/?url=admin/addHotspotGroup">Hotspot Grubu Ekle</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Page Header -->
                                <h2 class="page-header-title" style="margin-bottom: 10px !important;">Hotspot Kullanıcıları</h2>
                                <!-- Begin Row -->
                                <div class="row">
                                    <div class="col-xl-12 widget-29">
                                        <div class="widget no-bg">
                                            <div class="widget-body pt-0">
                                                <div class="widget29 owl-carousel">
                                                   
                                                   <?php if (is_array($HotspotUsers)): ?>
                                                       
                                                       <?php foreach ($HotspotUsers as $HotspotUser): ?>
                                                           
                                                            <div class="item" data-toggle="modal" data-target="#hotspotUser<?php echo $HotspotUser->id ?>">
                                                                <div class="devices-item d-flex justify-content-center align-items-center">
                                                                    <i class="la la-tv"></i>
                                                                    <div class="room"><?php echo $HotspotUser->adsoyad ?></div>
                                                                </div>
                                                                <img class="img-fluid" src="<?php echo ACSSDIR ?>/img/smarthome/03.jpg" alt="<?php echo $HotspotUser->adsoyad ?>">
                                                            </div>

                                                       <?php endforeach ?>

                                                   <?php endif ?>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Row -->
                                <!-- Begin Row -->
                                <div class="row flex-row" style="display: none">
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="widget-30 widget-image bg-image">
                                            <div class="widget-body">
                                                <!-- Begin House Members -->
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6">
                                                        <div class="house-members">
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- End House Members -->
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="content text-center">
                                                <div id="events-day"></div>
                                                <div id="events-date"></div>
                                                <div id="events-year"></div>
                                            </div>
                                            <div class="real-time text-center">
                                                <div id="events-time"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-4">
                                 
                                    </div>
                                </div>
                                <!-- End Row -->
                              
                                <!-- Begin Row -->
                                <div class="row flex-row">
                                    <div class="col-xl-12">
                                    	<h2 class="page-header-title" style="margin-bottom: 10px !important;">Hotspot Grupları</h2>
                                        <!-- Begin Widget 28 -->
                                        <div class="widget-28 widget has-shadow">
                                            <div class="widget-body">
                                                
                                                <div class="row">
					                              	<?php if (is_array($HotspotGroups)): ?>
					                                                                
					                                                                <?php foreach ($HotspotGroups as $HotspotGroup): ?>

														                                    <div class="col-xl-3 col-md-4 col-sm-6 col-remove">
														                                        <!-- Begin Card -->
														                                        <div class="widget-image has-shadow">
														                                            <div class="group-card">
														                                                <!-- Begin Widget Body -->
														                                                <div class="widget-body">
														                                                    
														                                                    <div class="cover-image mx-auto">
														                                                        <img src="<?php echo ACSSDIR ?>/img/group/01.jpg" alt="..." class="rounded-circle mx-auto">
														                                                    </div>
														                                                    <h4 class="name"><a href="#"><?php echo $HotspotGroup->group_name ?></a></h4>
														                                                    <div class="category">Hotspot Grubu</div>
														                                                    <div class="stats text-center">
														                                                        <span><i class="la la-users"></i></span>
														                                                        <span class="counter">9,999</span> 
														                                                        <span class="text">Üyesi Var</span>
														                                                    </div>
														                                                    <div class="group-members text-center mt-4">
														                                                        <a href="javascript:void(0);">
														                                                            <img src="<?php echo ACSSDIR ?>/img/avatar/avatar-02.jpg" class="img-fluid rounded-circle" alt="...">
														                                                        </a>
														                                                        <a href="javascript:void(0);">
														                                                            <img src="<?php echo ACSSDIR ?>/img/avatar/avatar-04.jpg" class="img-fluid rounded-circle" alt="...">
														                                                        </a>
														                                                        <a href="javascript:void(0);">
														                                                            <img src="<?php echo ACSSDIR ?>/img/avatar/avatar-06.jpg" class="img-fluid rounded-circle" alt="...">
														                                                        </a>
														                                                        <a href="javascript:void(0);">
														                                                            <img src="<?php echo ACSSDIR ?>/img/avatar/avatar-07.jpg" class="img-fluid rounded-circle" alt="...">
														                                                        </a>
														                                                        <a href="javascript:void(0);">
														                                                            <img src="<?php echo ACSSDIR ?>/img/avatar/avatar-05.jpg" class="img-fluid rounded-circle" alt="...">
														                                                        </a>
														                                                    </div>
														                                                    <div class="text-center mt-5 pb-3">
														                                                        <a href="<?php echo URL ?>/?url=admin/editHotspotGroup/<?php echo $HotspotGroup->id ?>" class="btn btn-secondary ripple">Gruba Gözat</a>
														                                                    </div>
														                                                </div>
														                                                <!-- End Widget Body -->
														                                            </div>
														                                        </div>
														                                        <!-- End Card -->
														                                    </div>
					                                                                   
					                                                                <?php endforeach ?>

					                                 <?php endif ?>
					                                    
					                               </div>
                                            </div>
                                        </div>
                                        <!-- End Widget 28 -->
                                    </div>
                                  
                                </div>
                                <!-- End Row -->
                                
                            </div>
                        </div>
                    </div>

                   <?php require VDIR.'/admin/infooter.php' ?>

                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>

             <?php if (is_array($HotspotUsers)): ?>                                                       
                               
                               <?php foreach ($HotspotUsers as $HotspotUser): ?>
                                                           
                                                            
                                                        <!-- Begin Hotspot User Modal -->
                                                        <div id="hotspotUser<?php echo $HotspotUser->id; ?>" class="modal fade">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content room-details">
                                                                    <div class="modal-header border-0">
                                                                        <h3 class="modal-title"><i class="la la-cutlery la-2x align-middle pr-2"></i><?php echo $HotspotUser->adsoyad ?></h3>
                                                                        <button type="button" class="close" data-dismiss="modal">
                                                                            <span aria-hidden="true">×</span>
                                                                            <span class="sr-only">kapat</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-xl-12">
                                                                                <div class="room-image">
                                                                                    <div class="live">
                                                                                        <span class="badge-rounded mr-2 danger"></span>
                                                                                        <p><?php echo $HotspotUser->Tip ?></p>
                                                                                    </div>
                                                                                    <div class="overlay"></div>
                                                                                    <img src="<?php echo ACSSDIR ?>/img/smarthome/13.jpg" class="img-fluid rounded" alt="<?php echo $HotspotUser->ad_soyad ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3 global-room-info align-items-center">
                                                                            <div class="col-xl-6">
                                                                                <div class="title">Kullanıcı Profili</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <a href="<?php echo URL ?>/?url=admin/editHotspotUser/<?php echo $HotspotUser->id ?>" class="btn btn-gradient-01">Kullanıcı'nın Profilini Düzenle</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="em-separator separator-dashed"></div>
                                                                        <div class="row global-room-info align-items-center">
                                                                            <div class="col-xl-6">
                                                                                <div class="title">Internet Erişimi</div>
                                                                            </div>
                                                                            <div class="col-xl-6 text-right">
                                                                                <label class="mb-0">
                                                                                    <input class="toggle-checkbox-sm" type="checkbox" checked>
                                                                                    <span>
                                                                                        <span></span>
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="em-separator separator-dashed"></div>
                                                                    </div>
                                                                    <div class="modal-footer border-0">
                                                                        <button type="button" class="btn btn-gradient-01" data-dismiss="modal">Pencereyi Kapat</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Hotspot User Modal -->

                                <?php endforeach ?>
                                                       
            <?php endif ?>

<?php require VDIR.'/admin/footer.php' ?>

