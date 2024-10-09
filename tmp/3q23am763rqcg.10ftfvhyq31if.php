<?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
    <div class="alert alert-<?= ($msg['status']) ?> alert-dismissable">
        <?= ($msg['text'])."
" ?>
    </div>
<?php endforeach; ?>
<form id="dzproduct" method="post" action="<?= ($BASE) ?>/console/properties/new" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Property details</h4>
                            <p class="card-title-desc">Basic information about the property.</p>    
                            
                            <div class="table-responsive">

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-select" name="category" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="LEASE">LEASE</option>
                                        <option value="RENT">RENT</option>
                                        <option value="SALE">SALE</option>
                                        <option value="AIR BNB">AIR BNB</option>
                                        <option value="SPACE">SPACE</option>
                                    </select>
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-select" name="type" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="RESIDENTIAL">RESIDENTIAL</option>
                                        <option value="BUSINESS">BUSINESS</option>
                                        <option value="COMMERCIAL">COMMERCIAL</option>
                                        <option value="HALLS">HALLS</option>
                                        <option value="HIGH RISE">HIGH RISE</option>
                                        <option value="LAND">LAND</option>
                                    </select>
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" required="required">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <div class="my-editor" id="description" data-form-name="description" ></div>
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Propert description</h4>
                            <p class="card-title-desc">More information about the property.</p>    
                            
                            <div class="table-responsive">
                                
                                <div class="form-group">
                                    <label>Price</label>
                                    <input id="demo0" type="text" value="100" name="price" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                <div class="form-group">
                                    <label>How many bedrooms?</label>
                                    <input id="demo0" type="text" value="2" name="bedroom" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                
                                <div class="form-group">
                                    <label>How many bathrooms?</label>
                                    <input id="demo0" type="text" value="3" name="bathroom" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                <div class="form-group">
                                    <label>What is the land measurement?</label>
                                    <input id="demo0" type="text" value="55" name="measurement" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-info btn-lg waves-effect waves-light submit-click">Register property</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Property location</h4>
                            <p class="card-title-desc">Give more insight into where the property is located..</p>    
                            
                            <div class="table-responsive">

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Region</label>
                                    <input type="text" name="region" class="form-control">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>

                                <div class="form-group">
                                    <label>Zip code</label>
                                    <input type="text" name="zipcode" class="form-control">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <input type="text" name="longitutde" class="form-control">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="latitude" class="form-control">
                                    <span class="form-text margin-top-0">&nbsp;</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Propert pictures</h4>
                            <p class="card-title-desc">Attach property pictures.</p>
                            
                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="file" id="file-input" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                    </div>
                                    
                                    <h4>Drop files here to upload</h4>
                                </div>
                                <div class="previews"></div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
        </div>
    </div>
    
</form>


<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        let dataTransfer = new DataTransfer()
        $(".my-editor").each(function(ind){
            const id=$(this).attr('id');
            var el=$(this).get(0);
            const config = {
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

        const dropzone = new Dropzone("div.dropzone", { 
            url: $('#dzproduct').attr('action'),
            autoProcessQueue: false,
            autoDiscover: false,
            addRemoveLinks: true
        });

        
    
        dropzone.on("addedfile", function(file) {
            dataTransfer.items.add(file);
            // const fileList = dataTransfer.files;
            // fileInput.files=fileList;
            
            // fileInput.dispatchEvent(new Event('input', { bubbles: true }));
            // fileInput.dispatchEvent(new Event('change', { bubbles: true }));
            // console.log(fileInput)
            // const reader = new FileReader();
            // reader.onload = () => {
            //     // fileInput.files = reader.result;
                
            //     fileAsBinaryString.push(reader.result);
            //     console.log(fileAsBinaryString)
            // };
            // reader.onabort = () => console.log('file reading was aborted');
            // reader.onerror = () => console.log('file reading has failed');

            // reader.readAsBinaryString(file);
        });
        $('.submit-click').on('click', function(e){
            e.preventDefault();
            
            // console.log(dataTransfer.files)
            for(var ln in dataTransfer.files){
                // console.log(dataTransfer.files[ln].dataURL)
                $('#dzproduct').append('<input type="hidden" name="pictures[]" value="'+dataTransfer.files[ln].dataURL+'" />')
            }
            
            $('#dzproduct').append('<input type="hidden" name="description" value="'+window['description'].getContent()+'" />').submit()
            
        })
    })
</script>