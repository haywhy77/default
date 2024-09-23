<?php echo $this->render('includes/public/header.htm',NULL,get_defined_vars(),0); ?>
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5"> 
        
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Presidents</h2>
        </div>
    </section>
</div>
<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<section class="w3l-aboutblock1 py-5" id="about">
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="title-big" style="color:#007bff;"><?= ($profile->name) ?></h3>
                <h5 class="title-small mt-2">Political Party: <?= ($profile->name) ?></h5>
                <h5 class="title-small">Occupation: <?= ($profile->occupation) ?></h5>
                <h5 class="title-small">State of Origin: <?= ($profile->state) ?></h5>
                <h5 class="title-small">Local Govt Area: <?= ($profile->lga) ?></h5>
                <h5 class="title-small">Religion: <?= ($profile->religion) ?></h5>
                <h5 class="title-small">Date of Birth: <?= ($profile->dob) ?></h5>
                <h3 class="title mt-4" style="color:#007bff;">Manifesto</h3>
                <p class="mt-2"><?= ($profile->manifesto) ?></p>
                <h3 class="title mt-4" style="color:#007bff;">Ideology</h3>
                <p class="mt-2"><?= ($profile->ideology) ?></p>
                <h3 class="title mt-4"  style="color:#007bff;">Verdict</h3> 
                <p class="mt-2"><?= ($profile->verdict) ?></p>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <img src="<?= ($BASE) ?>/<?= ($profile->picture_path) ?>" alt="" class="radius-image img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5">
            
            
            <section class="chart-section">
                <div class="chart">
                    <?php foreach (($kpis?:[]) as $index=>$kpi): ?>
                        <div class="graph-container">
                            <p><?= ($kpi['name']) ?>: </p>
                            <div>
                                <span class="<?= ($kpi['class']) ?>" style="width:<?= ($kpi['kp']) ?>%">&nbsp;<?= ($kpi['kp']) ?>%</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div> 
            </section>
        </div>
    </div>
</section>

<?php echo $this->render('includes/public/footer.htm',NULL,get_defined_vars(),0); ?>

400%

High perfomance 40 *4=160/100
medium 20 *4=80/100
low 30 *4=120/100

H: 80%
other 10 *4=40/100


H=80%
M=50%
L=20%


7 metrics

Metric 1 
    H

Metric 2 
    H
    M

Metric 3
    L
    M

Metric 4
    H
    L

Metric 5
    L

Metric 6
    M

Metric 7
    H
    M
    L