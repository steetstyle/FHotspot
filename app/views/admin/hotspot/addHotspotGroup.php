<?php require VDIR.'/admin/header.php' ?>
    <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Hotspot Grubu Oluştur</h2>
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
                                        <h4>Hotspot Grubu Oluştur</h4>
                                        <h6><?php if (isset($message)): ?>
                                        	<?php echo $message ?>
                                        <?php endif ?></h6>
                                    </div>
                                    <div class="widget-body">
                                        <form class="needs-validation" method="POST" action="<?php echo URL ?>/?url=admin/addHotspotGroup">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Grup adı</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" maxlength="100" name="group_name" placeholder="Grubun Adını Giriniz">
                                                </div>
                                            </div>

                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Max Download(Kbps)</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" maxlength="100" name="max_down" placeholder="Maximum Dowload Hızı">
                                                </div>
                                            </div>
                                          
                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Max Upload(Kbps)</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" maxlength="100" name="max_up" placeholder="Maximum Upload Hızı">
                                                </div>
                                            </div>

                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Yönlendirilme URL'si</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" maxlength="100" name="redirection_url" placeholder="Giriş Yaptıktan sonra yönlendirilecek URL">
                                                </div>
                                            </div>

                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit">Hotspot Grubu Oluştur</button>
                                                <button class="btn btn-shadow" type="reset">Sıfırla</button>
                                            </div>
                                        </form>
                                    </div>
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
