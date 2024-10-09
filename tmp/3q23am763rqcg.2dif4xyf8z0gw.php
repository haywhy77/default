
<form method="post" action="<?= ($BASE) ?>/console/acess/roles/new">
    <input type="hidden" name="action" value="<?= ($action) ?>" />
    <?php if (isset($roles)): ?>
        
            <input type="hidden" name="id" value="<?= ($roles->id) ?>" />
        
    <?php endif; ?>
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
                        <div class="alert alert-<?= ($msg['status']) ?> alert-dismissable">
                            <?= ($msg['text'])."
" ?>
                        </div>
                    <?php endforeach; ?>
                    <h4 class="header-title">Admin Account</h4>
                    <p class="card-title-desc">Invite user to join your team.</p>    
                    
                    <div class="table-responsive">
                        
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required="required" value="<?= (isset($roles) && $roles->name?$roles->name:'') ?>">
                            <span class="form-text margin-top-0">Enter the unit name</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Access permissions</h4>
                    <p class="card-title-desc">This pernission indicate the actions users in this group ca perform on datas.</p>
                    <div class="form-check form-switch" dir="ltr">
                        <input type="checkbox" class="form-check-input" id="customSwitch1" name="privilege[select]" <?= (isset($roles) && $roles->privileges['select']?$roles->privileges['select']:'') ?>>
                        <label class="form-check-label" for="customSwitch1">User can view records</label>
                    </div>
                    <div class="form-check form-switch" dir="ltr">
                        <input type="checkbox" class="form-check-input" id="customSwitch2" name="privilege[insert]" <?= (isset($roles) && $roles->privileges['insert']?$roles->privileges['insert']:'') ?>>
                        <label class="form-check-label" for="customSwitch2">User can add new records</label>
                    </div>
                    <div class="form-check form-switch" dir="ltr">
                        <input type="checkbox" class="form-check-input" id="customSwitch3" name="privilege[update]" <?= (isset($roles) && $roles->privileges['update']?$roles->privileges['update']:'') ?>>
                        <label class="form-check-label" for="customSwitch2">User can alter records</label>
                    </div>
                    <div class="form-check form-switch" dir="ltr">
                        <input type="checkbox" class="form-check-input" id="customSwitch4" name="privilege[delete]" <?= (isset($roles) && $roles->privileges['delete']?$roles->privileges['delete']:'') ?>>
                        <label class="form-check-label" for="customSwitch2">User can trash records</label>
                    </div>
                    <div class="form-check form-switch" dir="ltr">
                        <input type="checkbox" class="form-check-input" id="customSwitch5" name="privilege[download]" <?= (isset($roles) && $roles->privileges['download']?$roles->privileges['download']:'') ?>>
                        <label class="form-check-label" for="customSwitch2">User can download records</label>
                    </div>
                    <div class="form-check form-switch" dir="ltr">
                        <input type="checkbox" class="form-check-input" id="customSwitch6" name="privilege[print]" <?= (isset($roles) && $roles->privileges['print']?$roles->privileges['print']:'') ?>>
                        <label class="form-check-label" for="customSwitch2">User can print records</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Access menus</h4>
                    <p class="card-title-desc">This access menus indicate what areas of the system this user grop can access.</p>
                    <div class="form-group">
                        <select multiple="multiple" size="10" name="menus[]">
                            <?php foreach (($module?:[]) as $category): ?>
                                <optgroup label="<?= ($category['title']) ?>">
                                    <?php foreach (($category['groupmenu']?:[]) as $items): ?>
                                        <?php if ($items['required']): ?>
                                            
                                                <option value="<?= ($items['verbs']) ?> <?= ($items['url']) ?>" selected><?= ($items['title']) ?></option>    
                                            
                                            <?php else: ?>
                                                <option value="<?= ($items['verbs']) ?> <?= ($items['url']) ?>" <?= ($items['selected']) ?>><?= ($items['title']) ?></option>    
                                            
                                        <?php endif; ?>
                                        
                                    <?php endforeach; ?>
                                </optgroup>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group" id="sign_button">
                        <button type="submit" class="btn btn-secondary">Create access role</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</form>


<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        var demo1 = $('select[name="menus[]"]').bootstrapDualListbox({});
    });
</script>