<div class="row ">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <div class="card-body">
            <h4 id="rw-fl-row">Add a/an <?= ($page['title']) ?> member</h4>
            <p class="subtitle margin-bottom-20">Activate your account by providing all the necessary information.</p>
            <?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
                <div class="alert alert-<?= ($msg['status']) ?> alert-dismissable">
                    <?= ($msg['text'])."
" ?>
                </div>
            <?php endforeach; ?>
            <div style="text-align:center;margin-top:40px;">
                <?php $limit=count($kpis) + 3; ?>
                <?php for ($i=1;$i <= $limit;$i++): ?>
                    <span class="step"><?= ($i) ?></span>
                <?php endfor; ?>
            </div>
            <div class="row">
                
                <div class="tab">
                    <?php echo $this->render('forms/biodata.htm',NULL,get_defined_vars(),0); ?>
                </div>

                <div class="tab">
                    <?php echo $this->render('forms/manifesto.htm',NULL,get_defined_vars(),0); ?>
                </div>
                
                <?php foreach (($kpis?:[]) as $key=>$kpi): ?>
                    <div class="tab" id="<?= ($key) ?>">
                        <?php echo $this->render('forms/kpi.htm',NULL,['data'=>$kpi]+get_defined_vars(),0); ?>
                    </div>
                <?php endforeach; ?>
                
                <div class="tab">
                    <?php echo $this->render('forms/summary.htm',NULL,get_defined_vars(),0); ?>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
 
<script type="text/javascript">
    
    document.addEventListener("DOMContentLoaded", function () {
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var $tabs = $(".tab");
            $tabs.eq(n).show();
            
            if (n == 0) {
                $("#prevBtn").hide();
            } else {
                $("#prevBtn").show();
            }

            if (n == ($tabs.length - 1)) {
                $("#nextBtn").text("Submit finally");
            } else {
                $("#nextBtn").text("Next");
            }

            fixStepIndicator(n);
        }

        function skipNext(n) {
            var $tabs = $(".tab");
            $tabs.eq(currentTab).hide();
            currentTab += n;
            
            showTab(currentTab);
        }

        function nextPrev(n) {
            var btnText=$('#nextBtn').text();

            // console.log(window.quill);
            var $tabs = $(".tab");
            if(n <0){
                $tabs.eq(currentTab).hide();
                currentTab += n;
                showTab(currentTab);
            }else{
                if (n == 1 && !validateForm(currentTab)){
                    alert('All fields must be filled correctly');
                    return false
                };

            
                
                var $form=$tabs.eq(currentTab).children('form');
                var formClass=$form.attr('class');
            
                var formElement = document.getElementsByClassName(formClass);
                var formData = new FormData(formElement[0]);
                $editors=$form.find('div.my-editor');
               
                let elements=[];
                $editors.each(function(ind){
                    var item=$(this).attr('id');
                    var name=$(this).attr('data-form-name');
                    elements[ind]={
                        'key': name,
                        'value': $(this).find('.ql-editor').html()
                    }
                })
                
                
                if(elements){
                    let grouped = elements.reduce((result, item) => {
                        if (!result[item.key]) {
                            result[item.key] = [];
                        }
                        result[item.key].push(item.value);
                        return result;
                    }, {});
                    
                    // Convert the grouped object to an array of objects
                    // let finalArray = Object.keys(grouped).map(key => {
                    //     return { [key]: grouped[key] };
                    // });

                    Object.keys(grouped).map(key => {
                        formData.append(key, grouped[key])
                    });
                }
                
                // return false;
                // console.log(values)
                $form.submit( function( e ) {
                    $.ajax({
                        url: $(this).attr('action'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            $('#nextBtn').addClass("disabled").html('<i class="fa fa-spinner fa-spin"></i>Loading');
                        },
                        complete: function(){
                            $('#nextBtn').removeClass("disabled").text(btnText);
                        },
                        success: function(data){
                            
                            if(data.status){
                                $tabs.eq(currentTab).hide();
                                currentTab += n;
                                if (currentTab >= $tabs.length) {
                                    // $("#regForm").submit();
                                    var url='<?= ($BASE) ?>/<?= ($page['title']) ?>/view';
                                    window.location.href=url.toLocaleLowerCase();
                                }
                                showTab(currentTab);
                            }else{
                                alert(data.message)
                            }
                        },
                        error: function(error){
                            console.log(error)
                        },
                    });
                    
                    e.preventDefault();
                } ).trigger('submit');
                $('.make_deletable').remove();
            }
            
        }

        function validateForm(currentTab) {
            var $inputs = $(".tab").eq(currentTab).find("input");
            var valid = true;

            $inputs.each(function() {
                if ($(this).prop("required") && $(this).val() === "") {
                    $(this).addClass("invalid");
                    valid = false;
                }
            });

            if (valid) {
                $(".step").eq(currentTab).addClass("finish");
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var $steps = $(".step");
            $steps.removeClass("active");
            $steps.eq(n).addClass("active");
        }
        $(".state").on("change", function(){
            $(".lga").attr('disabled', 'disabled');
            // console.log($(this).val())
            setTimeout(()=>{
                var data=JSON.parse('<?= ($this->raw($data)) ?>');
                // console.log(data)
                const lgas=data[$(this).val()];
                if(lgas){
                    const lga=lgas.map((el)=>{
                        return `<option value="${el}">${el}</option>`
                    })
                    $(".lga").html(lga)
                }
                // console.log(lgas)
                
                $(".lga").removeAttr('disabled')
            },1200)
            
        })

        $('.btnWizard').on('click', function(){
            const n=$(this).attr('data-current');
            alert(n)
            var x = $(".tab");
            // if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";

            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);
        })

        $('.cloneBtn').on('click', function(){//
            var item=$('.clonable').closest('div.row').children(':first').clone();
            item.children('.delete-btn').css('visibility', 'visible')
            item.addClass('make_deletable')
            
            item.find('.my-editor').each(function(ind){
                $(this).closest('.form-group').children('.ql-toolbar').remove();
                let id=$(this).attr('id');
                id= `${id}_${ind}`;
                $(this).attr('id', id);
                var el=$(this).get(0);
                const quill = new Quill(el, {
                    theme: 'snow'
                });
                
                quill.setContents("");
                window[id]=quill;
            })

            item.find('.btn-delete').on('click', function(){
                $(this).closest('.clonable').remove();
            })
            
            // item.find(".my-editor").each(function(ind){
            //     const id=$(this).attr('id');
                
            //     const quill = new Quill(`#${id}`, {
            //         theme: 'snow'
            //     });
            //     quill.setContents($(this).html());
            //     window[id]=quill;
            // });

            item.appendTo($('.clonable').closest('div.row'));
        });

        
        // $("textarea").each(function(){
        //     const id=$(this).attr('id');
        //     CKEDITOR.replace( id );
        //     // $(this).html(id.getData());
        // });
        
        

        window.showTab = showTab;
        window.validateForm = validateForm;
        window.fixStepIndicator = fixStepIndicator;
        window.nextPrev = nextPrev;
        window.skipNext = skipNext;

        $(".my-editor").each(function(ind){
            const id=$(this).attr('id');
            // alert($(this).html())

            const quill = new Quill(`#${id}`, {
                theme: 'snow'
            });
            // quill.setContents([
            //     { insert: $(this).find('.ql-editor').html() },
            // ]);
            
            quill.setText($(this).find('.ql-editor').html());
            // quill.setContents($(this).find('.ql-editor').html());
            window[id]=quill;
        });
        
    });


</script>