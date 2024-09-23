
<form method="post" action="<?= ($BASE) ?>/candidates/create" class="manifesto">
    <input type="hidden" name="type" value="<?= ($type) ?>" />
    <input type="hidden" name="step" value="manifesto" />
    <input type="hidden" name="id" value="<?= (isset($profile) ? $profile->id:'') ?>" />
    <input type="hidden" name="action" value="<?= (isset($profile) ? 'update':'insert') ?>" />
    <div class="form-group">  
        <label>Manifesto</label> 
        <div class="my-editor" id="manifesto" data-form-name="manifesto" style="height: 150px;" ><?= (isset($profile) ? $profile->manifesto:'') ?></div>
        <span  class="form-text">Enter Manifesto of the President</span> 
    </div> 
    
    <div class="form-group">
        <label>Ideology</label>
        <input type="text" class="form-control"   id='ideology'  name='ideology' value="<?= (isset($profile) ? $profile->ideology:'') ?>">  
        <span  class="form-text">Enter Ideology Spectrum of President</span> 
    </div>
    
    <div class="form-group">
        <label>Verdict</label>
        <select name="verdict" class="form-control">
            <option value="Invalid Selection">-Select Performance-</option>
            <option value="High Performance" <?= (isset($profile) && $profile->verdict=='High Performance'?'selected="selected"':'') ?>>High Performance</option>
            <option value="Medium Performance" <?= (isset($profile) && $profile->verdict=='Medium Performance'?'selected="selected"':'') ?>>Medium Performance</option>
            <option value="Low Performance" <?= (isset($profile) && $profile->verdict=='Low Performance'?'selected="selected"':'') ?>>Low Performance</option>
            <option value="Others" <?= (isset($profile) && $profile->verdict=='Others'?'selected="selected"':'') ?>>Others</option>
        </select>
        <span  class="form-text">Select Verdict</span> 
    </div> 
    <hr/>
    <div class="form-group" id="sign_button">
        <div class="row">
            <div class="col-md-10">
                <input type="button" value="Back" name="submit1" id="prevBtn" class="btn btn-secondary" onclick="nextPrev(-1)"/> 
                <input type="button" value="Save and Continue" name="Next" id="nextBtn" class="btn btn-secondary" onclick="nextPrev(1)" /> 
            </div>
            <div class="col-md-2">
                <input type="button" value="Skip" name="skip" id="nextBtn" class="btn btn-primary" onclick="skipNext(1)" /> 
            </div>
        </div>
    </div>
</form>