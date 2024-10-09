<div class="row ">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Admin Account</h4>
                <p class="card-title-desc">Fill the form to post a new job vacancy</p>  
                <?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
                    <div class="alert alert-<?= ($msg['status']) ?> alert-dismissable">
                        <?= ($msg['text'])."
" ?>
                    </div>
                <?php endforeach; ?>
                <form method="post" action="<?= ($BASE) ?>/messaging/compose">
                    <div class="form-group">
                        <label>To</label>
                        <textarea class="form-control" rows="1%" cols="100%" name="to"></textarea>
                    </div>
                    <div class="form-group">
                        <label>CC</label>
                        <textarea class="form-control" rows="1%" cols="100%" name="cc"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <label></label>
                        <div class="my-editor" id="message" data-form-name="message" ></div>
                    </div>
                    <hr/>
                    
                    <div class="form-group" id="sign_button">
                        <button type="submit" class="btn btn-secondary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        $(".my-editor").each(function(ind){
            const id=$(this).attr('id');
            var el=$(this).get(0);
            const config = {
                // toolbar: ['bold', 'italic', 'underline', 'createLink', 'insertImage', 'insertVideo'],
                imageHandler: (image) => { 
                    console.log('image...', image);
                    // do something with image
                    window[id].insertImage('URL_OF_IMAGE');
                },
                videoHandler: (video) => { 
                    console.log('video...', video);
                    // do something with video
                    window[id].insertVideo('URL_OF_VIDEO');
                },
            };
            const editor = MictEditor.init(el, config);
            
            // Example usage of change event
            editor.onChange((content) => {
                // console.log('Content changed:', content);
            });
            window[id]=editor;
        });
    })
</script>