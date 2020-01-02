<?php require VDIR.'/admin/header.php' ?>
    <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Hotspot Kullanıcısını Düzenle</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="<?php echo URL ?>">FHotspot FreeRADIUS Yönetim Paneli </a></li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Hotspot Kullanıcısını Düzenle</h4>
                                        <h6><?php if (isset($message)): ?>
                                        	<?php echo $message ?>
                                        <?php endif ?></h6>
                                    </div>
                                    <div class="widget-body">
                                        <form class="needs-validation" name="budadegisik" method="POST" action="<?php echo URL ?>/?url=admin/editHotspotUser/<?php echo $HotspotUser->id ?>">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ad Soyad</label>
                                                <div class="col-lg-5">
                                                	<input type="hidden" class="form-control" maxlength="100" name="id"  value="<?php echo $HotspotUser->id ?>">
                                                    <input type="text" class="form-control" maxlength="100" name="ad" placeholder="Adını Giriniz" value="<?php echo $HotspotUser->adsoyad ?>">
                                                    <input type="text" class="form-control" maxlength="100" name="soyad" placeholder="Soyadını Giriniz" >
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">TC NO *</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" maxlength="100" name="tcno" placeholder="TC Kimlik Numarası" required value="<?php echo $HotspotUser->TcKimlikNo ?>">
                                                    <div class="invalid-feedback">
                                                       Lütfen Geçerli TC Kimlik Numarası Giriniz
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Doğum Tarihi</label>
                                                <div class="col-lg-5">
                                                    <input type="date" class="form-control" maxlength="100" name="dtarihi" value="<?php echo ($HotspotUser->dtarih) ?>">
                                                </div>
                                            </div>      

                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Password *</label>
                                                <div class="col-lg-5">
                                                    <input type="password" class="form-control" maxlength="100" name="password" placeholder="Şifre" required value="<?php echo $HotspotUser->Value ?>">
                                                    <div class="invalid-feedback">
                                                        Lütfen Geçerli bir Şifre Giriniz
                                                    </div>
                                                </div>
                                            </div>

                                             
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Telefon Numarası</label>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon addon-primary">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                        <input type="text" class="form-control" maxlength="100" name="telefon" placeholder="Telefon Numarası" value="<?php echo $HotspotUser->Telefon ?>">
                                                    </div>
                                                </div>
                                            </div>
                                           

                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Geçerlilik Tarihi</label>
                                                <div class="col-lg-5">
                                                    <input type="date" class="form-control" maxlength="100" name="gtarihi"  value="<?php echo ($HotspotUser->tarih) ?>">
                                                </div>
                                            </div>
                                         
                                          
                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit">Hotspot Kullanıcısını Düzenle</button>
                                            </div>
                                        </form>


                                    <?php if (is_array($HotspotGroups)): ?>

                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Hotspot Kullanıcısı Grup Ayarları</h4>
                                                <hr>
                                            </div>


                                                <form name="degisik" novalidate class="needs-validation" method="POST" action="<?php echo URL ?>/?url=admin/addtogroupHotspotUser/<?php echo $HotspotUser->UserName ?>/<?php echo $HotspotUser->id ?>">
                                                   <div class="col-xs-4"> Grup Şeçiniz:</div>
                                                   <div class="col-xs-8">
                                                        <select class="form-control" name="groupname">
                                                        
                                                        <?php foreach ($HotspotGroups as $HotspotGroup): ?>
                                                            
                                                            <option value="<?php echo $HotspotGroup->group_name ?>"><?php echo $HotspotGroup->group_name ?></option>

                                                        <?php endforeach ?>

                                                    </select>

                                                   </div>

                                                    
                                                    
                                                     <div class="text-right">
                                                       <button class="btn btn-gradient-01"  >Hotspot Kullanıcısına Grup Ata</button>
                                                    </div>
                                                </form>
                                                
                                             
                                            </div>

                                     <?php endif ?>
                             
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->

                    <?php require VDIR.'/admin/infooter.php' ?>

                   
                </div>
            </div>
            <!-- End Page Content -->

<?php require VDIR.'/admin/footer.php' ?>


