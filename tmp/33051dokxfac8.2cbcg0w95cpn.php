
<form method="post" action="<?= ($BASE) ?>/candidates/create" class="summary">
    <input type="hidden" name="type" value="<?= ($type) ?>" />
    <input type="hidden" name="step" value="summary" />
    <div class="form-group">  
        
    </div> 
    
    <div class="form-group">
        <input type="checkbox" id='use_on_front_page'  name='use_on_front_page'>  
        <span  class="form-text">Show this profle on the home page?</span> 
    </div>

    <div class="form-group">
        <input type="checkbox" id='publish'  name='publish'>  
        <span  class="form-text">Do you want to publish this profile now?</span> 
    </div>
    
    
    <hr/>
    <div class="form-group" id="sign_button">
        <input type="button" value="Back" name="submit1" id="prevBtn" class="btn btn-secondary" onclick="nextPrev(-1)"/> 
        <input type="button" value="Submit finally" name="Next" id="nextBtn" class="btn btn-secondary" onclick="nextPrev(1)" /> 
    </div>
</form>
    