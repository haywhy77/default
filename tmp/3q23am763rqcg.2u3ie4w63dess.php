<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Admin Account</h4>
                <p class="card-title-desc">Invite user to join your team.</p>    
                
                <div class="table-responsive">
                    <?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
                        <div class="alert alert-<?= ($msg['status']) ?> alert-dismissable">
                            <?= ($msg['text'])."
" ?>
                        </div>
                    <?php endforeach; ?>
                    <form method="post" action="<?= ($BASE) ?>/console/acess/users/new">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required="required">
                            <span class="form-text margin-top-0">Enter the official name</span>
                            
                        </div>
                        <hr/>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required="required">
                            <span class="form-text margin-top-0">Enter a valid email address</span>
                            
                        </div>

                        <div class="form-group">
                            <label class="form-label">Access role</label>
                            <select class="form-select" name="role" required>
                                <option selected disabled value="">Choose...</option>
                                <?php $count=0; foreach (($roles?:[]) as $key=>$role): $count++; ?>
                                    <option value="<?= ($role['id']) ?>"><?= ($role['name']) ?></option>
                                <?php endforeach; ?>
                                
                            </select>
                            
                        </div>
                        
                        
                        <hr/>
                        
                        <div class="form-group" id="sign_button">
                            <button type="submit" class="btn btn-secondary">Send an invite</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>