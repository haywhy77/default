
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">

               

                <h4 class="header-title mb-4 float-sm-start">Quick Summary</h4>

                <!-- <div class="float-sm-end">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Day</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Month</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Year</a>
                        </li>
                    </ul>
                </div> -->

                <div class="clearfix"></div>
               

                <div class="row align-items-center">
                    <div class="col-xl-9">

                        <div>
                            <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                        </div>

                    </div>


                    <div class="col-xl-3">
                        <div class="dash-info-widget mt-4 mt-lg-0 py-4 px-3 rounded">

                          

                            <div class="media dash-main-border pb-2 mt-2">
                                <div class="avatar-sm mb-3 mt-2">
                                    <span class="avatar-title rounded-circle bg-white shadow">
                                            <i class="mdi mdi-currency-inr text-primary font-size-18"></i>
                                        </span>
                                </div>
                               <div class="media-body ps-3">

                                <h4 class="font-size-20">$2354</h4>
                                <p class="text-muted">Expected <a href="#" class="text-primary">Rent <i class="mdi mdi-arrow-right"></i></a>
                                </p>

                               </div>
                              
                            </div>

                          

                          

                            <div class="media mt-4 dash-main-border pb-2">
                                <div class="avatar-sm mb-3 mt-2">
                                    <span class="avatar-title rounded-circle bg-white shadow">
                                            <i class="mdi mdi-credit-card-outline text-primary font-size-18"></i>
                                        </span>
                                </div>
                                <div class="media-body ps-3">
                                    <h4 class="font-size-20">$1598</h4>
                                <p class="text-muted">Expected <a href="#" class="text-primary">Sale <i class="mdi mdi-arrow-right"></i></a></p>
                                </div>
                            </div>

                         

                            

                            <div class="media mt-4">
                                <div class="avatar-sm mb-2 mt-2">
                                    <span class="avatar-title rounded-circle bg-white shadow">
                                            <i class="mdi mdi-eye-outline text-primary font-size-18"></i>
                                        </span>
                                </div>
                               <div class="media-body ps-3">
                                <h4 class="font-size-20">1230</h4>
                                <p class="text-muted mb-0">Expected <a href="#" class="text-primary">Others <i class="mdi mdi-arrow-right"></i></a></p>
                               </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>


    <div class="col-xl-4">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <p class="font-size-16">Properties</p>
                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="mdi mdi-home-outline text-primary font-size-20"></i>
                                    </span>
                            </div>
                            <h5 class="font-size-22"><?= ($statistics['property']) ?></h5>

                            <p class="text-muted"><?= (($statistics['views']/$statistics['property'])*100) ?>% Target</p>

                            <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: <?= (($statistics['views']/$statistics['property'])*100) ?>%" aria-valuenow="<?= (($statistics['views']/$statistics['property'])*100) ?>" aria-valuemin="0" aria-valuemax="<?= (($statistics['views']/$statistics['property'])*100) ?>">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

            <div class="col-xl-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <p class="font-size-16">Bookings</p>
                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                <span class="avatar-title rounded-circle bg-soft-success">
                                        <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                    </span>
                            </div>
                            <h5 class="font-size-22"><?= ($statistics['booking']) ?></h5>

                            <p class="text-muted"><?= (($statistics['booking']/$statistics['property'])*100) ?>% Target</p>

                            <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: <?= (($statistics['booking']/$statistics['property'])*100) ?>%" aria-valuenow="<?= (($statistics['booking']/$statistics['property'])*100) ?>" aria-valuemin="0" aria-valuemax="<?= (($statistics['booking']/$statistics['property'])*100) ?>">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Revenue Stastics</h4>

                <div class="media">

                    <h4>$<?= ($statistics['revenue']) ?> </h4>


                    <div class="media-body ps-3">

                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Today<i class="mdi mdi-chevron-down ms-1"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Yesterday</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">last Month</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-3">
                    <div id="stastics-chart"></div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title mb-4">Property Traking</h4>


                <ul class="list-unstyled activity-wid mb-0">
                    <?php $count=0; foreach (($properties?:[]) as $key=>$property): $count++; ?>
                        <li class="activity-list activity-border">
                            <div class="activity-icon avatar-sm">
                           
                              <img src="<?= ($BASE) ?>/<?= ($fetchImage($property['id'])) ?>" class="avatar-sm rounded-circle" alt="">
                                  
                            </div>
                            <div class="media">
                                <div class="me-3">
                                 <h5 class="font-size-15 mb-1"><a href="<?= ($BASE) ?>/console/properties/<?= ($property['id']) ?>" style="color:#C7C9F6;"><?= ($property['title']) ?></a></h5>
                                 <p class="text-muted font-size-14 mb-0" style="display: flex; flex-direction: row; gap: 20px;">
                                    <span><?= ($property['views']) ?> views</span> <span><?= (explode(":", $property['ratings'])[0]) ?>% rate</span>
                                 </p>
                                </div>
    
                                <div class="media-body">
                                    <div class="text-end d-none d-md-block">
                                    <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> <?= ($fixTime($property['updated_at'], true)) ?></p>
                                    </div>
                                </div>
                               
                            </div>
                        </li>
                    <?php endforeach; ?>
                    
                    
                </ul>

            </div>
        </div>
    </div>


    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Earning Goal</h4>

                <div class="mt-2 text-center">
                   

                    <div class="row">
                        <div class="col-md-6">

                            <div class="mt-4 mt-sm-0">


                                <div id="list-chart-1" class="apex-charts" dir="ltr"></div>
                                <p class="text-muted mb-2 mt-2 pt-1">Total Earning:</p>
                                <h5 class="font-size-18 mb-1">USD 13,545.65</h5>
                            </div>
                        </div>



                        <div class="col-md-6 dash-goal">

                            <div class="mt-4 mt-sm-0">

                                <div id="list-chart-2" class="apex-charts" dir="ltr"></div>

                                <p class="text-muted mb-2 mt-2 pt-1">Earning Goal:</p>
                                <h5 class="font-size-18 mb-1">USD 84,265.45</h5>


                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Best viewed property</h4>

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                    <div class="carousel-inner">
                        <?php $count=0; foreach (($views?:[]) as $key=>$property): $count++; ?>
                            <div class="carousel-item <?= ($key==0?'active':'') ?>">
                                <div class="row align-items-center mb-5">
                                    <div class="col-md-4">
                                        <img src="<?= ($BASE) ?>/<?= ($fetchImage($property['id'])) ?>"
                                            class="avatar-sm rounded-circle me-3" alt="" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-7 offset-md-1">
    
                                      <div class="mt-4 mt-sm-0">
                                        <p class="text-muted mb-2"><?= ($property['title']) ?></p>
    
                                        <h5 class="text-primary"><?= ($property['category']) ?> | <?= ($property['type']) ?></h5>
    
    
    
                                        <div class="row no-gutters mt-4">
    
                                            <div class="col-6">
    
                                                <div class="mt-1">
                                                    <h4><?= ($property['price']) ?></h4>
                                                    <p class="text-muted mb-1"><?= (ucfirst($property['availability'])) ?></p>
                                                </div>
    
                                            </div>
                                            
                                            <div class="col-6">
                                                <div class="mt-4 pt-1">
                                                    <a href="<?= ($BASE) ?>/console/properties/<?= ($property['id']) ?>" class="btn btn-primary btn-sm">View property</a>
                                                </div>
                                            </div>
    
    
                                        </div>
                                      </div>
    
    
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        

                    </div>

                </div>

            </div>

        </div>

       


        


    </div>


    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title mb-4">Availability by State</h4>

                <div id="world-map-markers" style="height: 230px"></div>

                <div class="px-4 py-3 mt-4">
                    <?php $count=0; foreach (($states?:[]) as $key=>$property): $count++; ?>
                        <?php $value=$calculatePercentage($property['total']); ?>
                        <p class=" mb-1"><?= ($property['state']) ?> <span class="float-right"><?= ($value) ?>%</span></p>
                        <div class="progress mt-2" style="height: 6px; margin-bottom: 10px;">
                            <div class="progress-bar progress-bar-striped bg-primary"
                                role="progressbar" style="width: <?= ($value) ?>%" aria-valuenow="<?= ($value) ?>"
                                aria-valuemin="0" aria-valuemax="<?= ($value) ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                </div>

            </div>
        </div>


    </div>


  


</div>