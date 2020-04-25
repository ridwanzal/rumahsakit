        <script src="<?php echo base_url()?>assets/backview/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/backview/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="<?php echo base_url()?>assets/backview/vendor/slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>assets/backview/libs/js/main-js.js"></script>
        <script src="<?php echo base_url()?>assets/backview/libs/js/gmaps.min.js"></script>
        <!-- jvactormap js -->
        <script src="<?php echo base_url()?>assets/backview/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/backview/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?php echo base_url()?>assets/backview/vendor/jvectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="<?php echo base_url()?>assets/backview/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="<?php echo base_url()?>assets/backview/vendor/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="<?php echo base_url()?>assets/backview/vendor/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="<?php echo base_url()?>assets/backview/libs/js/jvectormap.custom.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.0/standard-all/ckeditor.js"></script>
        <script>
                var ck_config = {
                extraPlugins: 'easyimage, codesnippet',
                codeSnippet_theme: 'monokai_sublime',
                removePlugins: 'image',
                removeDialogTabs: 'link:advanced',
                toolbar: [{
                name: 'document',
                items: ['Undo', 'Redo', 'mode', 'document', 'doctools' ]
                },
                {
                name: 'styles',
                items: ['Format']
                },
                {
                name: 'basicstyles',
                items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
                },
                {
                name: 'paragraph',
                items: ['NumberedList', 'BulletedList']
                },
                {
                name: 'links',
                items: ['Link', 'Unlink']
                },
                {
                name: 'insert',
                items: ['EasyImageUpload']
                },
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                { name: 'forms', groups: [ 'forms' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                { name: 'insert', groups: [ 'insert' ] },
                { name: 'colors', groups: [ 'colors' ] },
                { name: 'tools', groups: [ 'tools' ] },
                { name: 'others', groups: [ 'others' ] },
                { name: 'about', groups: [ 'about' ] }
                ],
                height: 360,
                cloudServices_uploadUrl: 'https://33333.cke-cs.com/easyimage/upload/',
                // Note: this is a token endpoint to be used for CKEditor 4 samples only. Images uploaded using this token may be deleted automatically at any moment.
                // To create your own token URL please visit https://ckeditor.com/ckeditor-cloud-services/.
                cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
                easyimage_styles: {
                gradient1: {
                group: 'easyimage-gradients',
                attributes: {
                'class': 'easyimage-gradient-1'
                },
                label: 'Blue Gradient',
                icon: 'https://ckeditor.com/docs/ckeditor4/4.13.0/examples/assets/easyimage/icons/gradient1.png',
                iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.13.0/examples/assets/easyimage/icons/hidpi/gradient1.png'
                },
                gradient2: {
                group: 'easyimage-gradients',
                attributes: {
                'class': 'easyimage-gradient-2'
                },
                label: 'Pink Gradient',
                icon: 'https://ckeditor.com/docs/ckeditor4/4.13.0/examples/assets/easyimage/icons/gradient2.png',
                iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.13.0/examples/assets/easyimage/icons/hidpi/gradient2.png'
                },
                noGradient: {
                group: 'easyimage-gradients',
                attributes: {
                'class': 'easyimage-no-gradient'
                },
                label: 'No Gradient',
                icon: 'https://ckeditor.com/docs/ckeditor4/4.13.0/examples/assets/easyimage/icons/nogradient.png',
                iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.13.0/examples/assets/easyimage/icons/hidpi/nogradient.png'
                }
                },
                easyimage_toolbar: [
                'EasyImageFull',
                'EasyImageSide',
                'EasyImageGradient1',
                'EasyImageGradient2',
                'EasyImageNoGradient',
                'EasyImageAlt'
                ]
        };
        CKEDITOR.addCss('figure[class*=easyimage-gradient]::before { content: ""; position: absolute; top: 0; bottom: 0; left: 0; right: 0; }' +
        'figure[class*=easyimage-gradient] figcaption { position: relative; z-index: 2; }' +
        '.easyimage-gradient-1::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 66, 174, 234, .72 ) 100% ); }' +
        '.easyimage-gradient-2::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 228, 66, 234, .72 ) 100% ); }');
        CKEDITOR.replace( 'editor', ck_config); // apply ckeditor                
        </script>
        <script src="<?php echo base_url()?>assets/general/js/main.js"></script>
</body>
 
</html>