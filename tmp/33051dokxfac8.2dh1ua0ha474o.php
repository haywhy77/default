<?= (header("Content-Type: text/html"))."
" ?>
<div class="row">
    <div class="col-12 col-lg-2"></div>
    <div class="col-12 col-lg-8">
        <div class="container">
            <div class="card">
                <div class="card-body padding-top-10 padding-bottom-10">
                    <div class="row padding-top-1 padding-bottom-1">
                        <div class="col-12">
                            <img src="<?= ($BASE) ?>/<?= ($profile->picture_path) ?>" style="height: 200px; max-width:200px; padding-left:10px important!;">
                        </div>
                        <div class="logo-holder logo-holder--xl logo-holder--wide">
                            <div class="logo-text d-none d-lg-block">
                                <strong> <?= ($profile->name) ?> </strong></div>
                                <p class="subtitle text-center"><?= ($profile->created_at) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-12"> 
                                description
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-inner-container">
                            <div class="form-row"> 
                                <ul>
                                    <li>	
                                    <strong>Date of Birth: </strong><?= ($profile->dob) ?></li><li>
                                    <strong>Occupation: </strong><?= ($profile->occupation) ?></li><li>
                                    <strong>State of Origin: </strong><?= ($profile->state) ?></li><li>
                                    <strong>Religion: </strong><?= ($profile->religion) ?></li><li>
                                    <strong>Political Party: </strong><?= ($profile->party) ?></li><li>
                                    <strong>Ideology: </strong><?= ($profile->ideology) ?></li><li>
                                    <strong>Verdict: </strong><?= ($profile->verdict) ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-inner-container">
                            <div class="form-row"> 
                                <ul>
                                    <li><strong>Manifesto: </strong><?= ($profile->manifesto) ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php $count=0; foreach (($kpis?:[]) as $kpi): $count++; ?>
                        <div class="card-body">
                            <div class="card-inner-container">
                                <h4><strong><?= ($kpi['name']) ?></strong></h4>
                                <div class="form-row"> 
                                    <ul>
                                        <?php $count=0; foreach (($kpi['metrics']?:[]) as $metric): $count++; ?>
                                            <li><strong>Promise</strong>:
                                                <?= (trim($metric['promise']))."
" ?>
                                            </li>
                                            <li><strong>Actual Doings</strong>: <?= ($metric['actual_doings']) ?></li>
                                            <li><strong>Performance metric</strong>: <?= ($renderPerformanceSignal($metric['p_signal'])) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="card-body">
                        <div class="card-inner-container">
                            <div class="form-row"> 
                                <ul>
                                    <li><strong>Use profile on homepage?: </strong><?= ($profile->use_on_homepage==1?'YES':'NO') ?></li>
                                    <li><strong>Publish profile?: </strong><?= ($profile->publish?'YES':'NO') ?></li>
                                    <li><strong>Publish date?: </strong><?= ($profile->publish_at) ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group" >
                        <a class="btn btn-secondary btn-block" href="<?= ($BASE) ?>/<?= ($param) ?>/<?= ($profile->id) ?>/update">Edit Profile</a>
                    </div>
                    
                    <div class="form-group" >
                        <a class="btn btn-danger btn-block remove" href="delete_profile.php?mixhtyr12noitcudorpobguhtennek007=" onclick="return confirm('Are you sure you want to delete profile?')">Delete Profile</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>