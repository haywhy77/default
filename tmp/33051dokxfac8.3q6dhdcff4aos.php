<form method="post" action="<?= ($BASE) ?>/candidates/create" class="kpi_<?= ($data['id']) ?>">
    <input type="hidden" name="type" value="<?= ($type) ?>" />
    <input type="hidden" name="step" value="kpi" />
    <input type="hidden" name="kpi" value="<?= ($data['id']) ?>" />
    <input type="hidden" name="id" value="<?= (isset($profile) ? $profile->id:'') ?>" />
    <input type="hidden" name="action" value="<?= (isset($profile) ? 'update':'insert') ?>" />
    <h2><?= ($data['name']) ?></h2>
    <div class="row">
        <?php if (isset($data['metrics']) && count($data['metrics'])>0): ?>
            
                <?php $count=0; foreach (($data['metrics']?:[]) as $key=>$metric): $count++; ?>
                    <div class="col-md-12 clonable <?= ($count>1?'make_deletable':'') ?>" >

                        <?php if ($count>1): ?>
                            
                                <div class="delete-btn" style="visibility: visible;">
                                    <button class="btn btn-danger btn-sm btn-icon"><span class="fa fa-trash"></span></button>
                                </div>
                            
                        <?php endif; ?>
                        <div class="form-group">  
                            <label>Promise</label> 
                            <div class="my-editor" id="promise_<?= ($data['id']) ?>_<?= ($metric['id']) ?>" data-form-name="promise" style="height: 150px;" ><?= ($metric['promise']) ?></div>
                            <span class="form-text">Enter Commitment to Poverty Eradication</span> 
                        </div> 
                            
                        <div class="form-group">  
                            <label>Actual Doings</label> 
                            <div class="my-editor" id="doings_<?= ($data['id']) ?>_<?= ($metric['id']) ?>" data-form-name="doings" style="height: 150px;" ><?= ($metric['actual_doings']) ?></div>
                            <span class="form-text">Enter Actual Doings</span> 
                        </div> 
                        
                        <div class="form-group">
                            <label>Performance Signal</label>
                            <select name="verdict[]" class="form-control">
                                <option value="Invalid Selection">-Select Performance-</option>
                                <?php foreach (($signals?:[]) as $index=>$signal): ?>
                                    <option value="<?= ($signal['id']) ?>" <?= (isset($metric) && $metric['p_signal']==$signal['id']?'selected="selected"':'') ?>><?= ($signal['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="form-text">Select Verdict</span> 
                        </div> 
                    </div>
                <?php endforeach; ?>
            
            <?php else: ?>
                <div class="col-md-12 clonable" >
                    <div class="delete-btn">
                        <button type="button" class="btn btn-danger btn-sm btn-icon btn-delete"><span class="fa fa-trash"></span></button>
                    </div>
                    <div class="form-group">  
                        <label>Promise</label> 
                        <div class="my-editor" id="promise_<?= ($data['id']) ?>_1" data-form-name="promise" style="height: 150px;"></div>
                        <span class="form-text">Enter Commitment to Poverty Eradication</span> 
                    </div> 
                        
                    <div class="form-group">  
                        <label>Actual Doings</label> 
                        <div class="my-editor" id="doings_<?= ($data['id']) ?>_2" data-form-name="doings" style="height: 150px;" ></div>
                        <span class="form-text">Enter Actual Doings</span> 
                    </div> 
                    
                    <div class="form-group">
                        <label>Performance Signal</label>
                        <select name="verdict[]" class="form-control">
                            <option value="Invalid Selection">-Select Performance-</option>
                            <?php foreach (($signals?:[]) as $index=>$signal): ?>
                                <option value="<?= ($signal['id']) ?>"><?= ($signal['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="form-text">Select Verdict</span> 
                    </div> 
                </div>
            
        <?php endif; ?>
        
    </div>
    
    <hr/>
    <div class="form-group" id="sign_button">
        <div class="row">
            <div class="col-md-2">
                <input type="button" value="Add value" name="add" id="addBtn" class="btn btn-primary cloneBtn" /> 
            </div>
            <div class="col-md-8">
                <input type="button" value="Back" name="submit1" id="prevBtn" class="btn btn-secondary" onclick="nextPrev(-1)"/> 
                <input type="button" value="Save and Continue" name="Next" id="nextBtn" class="btn btn-secondary" onclick="nextPrev(1)" /> 
            </div>
            <div class="col-md-2">
                <input type="button" value="Skip" name="skip" id="nextBtn" class="btn btn-primary" onclick="skipNext(1)" /> 
            </div>
        </div>
    </div>
</form>