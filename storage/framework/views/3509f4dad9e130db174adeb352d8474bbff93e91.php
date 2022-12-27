<?php $__env->startSection('content'); ?>

    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <script>
        function installTemplate(name)
        {
            installTemplateDialog = mw.dialog({
                content: '<div>Loading...</div>',
                title: 'Installing template',
                width: 900,
                id: 'mw_install_template'
            });

            $.ajax({
                url: mw.settings.site_url + '?install_template_modal=' + name,
                type: "GET",
                success: function (html) {
                    installTemplateDialog.content(html);
                    installTemplateDialog.center();
                }
            });

            return name;
        }
    </script>
    <style>
        .template-preview {
            width:100%;
            height:250px;
            background-position: top;
            background-size: cover;
            background-repeat: no-repeat;
            margin-top: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
    </style>

    <script>
        function showTemplatesFilter(filter) {
            $('.js-btn-filter').removeClass('btn-primary');
            $('.js-btn-filter').addClass('btn-outlineprimary');

            if (filter == 'free') {
                $('.js-btn-free').addClass('btn-primary');

                $('.templates').hide();
                $('.templates-free').fadeIn()
            } else if (filter == 'paid') {
                $('.js-btn-paid').addClass('btn-primary');

                $('.templates').hide();
                $('.templates-paid').fadeIn()
            } else {
                $('.templates').fadeIn();
                $('.js-btn-all').addClass('btn-primary');

            }
        }
    </script>

    <div class="container mt-3">
       <div class="text-center pt-5">
           <h1 class="mb-3">Choose a template to start with</h1>
           <h5 class="lh-1_4">Each of our premium templates contains 450+ layouts in 20 different categories. <br> By buying a premium template you are saving time and money to create any type of website.</h5>
       </div>
        <div class="row justify-content-center py-3">
            <span class="btn btn-sm btn-primary rounded-0 js-btn-all js-btn-filter"  onclick="showTemplatesFilter('all')">ALL</span>
            <span class="btn btn-sm btn-outlineprimary rounded-0 js-btn-free js-btn-filter" onclick="showTemplatesFilter('free')">FREE</span>
            <span class="btn btn-sm btn-outlineprimary rounded-0 js-btn-paid js-btn-filter" onclick="showTemplatesFilter('paid')">PREMIUM</span>
        </div>
        <div class="row p-4 d-flex align-items-center">

        <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="hover-shadow-3 col-4  mt-4 templates <?php if($template['is_paid']): ?> templates-paid <?php else: ?> templates-free <?php endif; ?>">
                <div class="card rounded-0 ">
                    <div class="card-body py-4">
                        <div class="d-flex">
                            <h5 class=" pl-0 col-6" ><?php echo e($template['description']); ?></h5>

                            <div class="col-6 pr-0 text-right">
                                <?php if($template['is_paid']): ?>
                                    <span class="badge badge-sm badge-primary rounded-0" style="background-color: #9c00ff; font-weight: normal; font-size: 12px;">PREMIUM LICENSE</span>
                                <?php else: ?>
                                    <span class="badge badge-sm badge-success rounded-0" style="font-weight: normal; font-size: 12px; ">FREE LICENSE</span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <small class="text-muted d-block">v <?php echo e($template['version']); ?></small>

                        <div class="template-preview" style="background-image: url('<?php echo e($template['screenshot_link']); ?>');"></div>

                        <div class="text-right">
                            <?php if($template['current_install']): ?>
                                <a href="<?php echo site_url();?>?request_template=<?php echo e($template['target-dir']); ?>" class="btn btn-sm btn-outline-success rounded-0">
                                    USE TEMPLATE
                                </a>
                            <?php else: ?>
                            <button onclick="installTemplate('<?php echo e($template['name']); ?>')" class="btn btn-sm btn-outline-success rounded-0">
                                INSTALL & USE TEMPLATE
                            </button>
                            <?php endif; ?>


                            <?php if($template['demo_link']): ?>
                                <a href="<?php echo e($template['demo_link']); ?>" class="btn btn-sm btn-outline-primary rounded-0" target="_blank">
                                    DEMO
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $( ".card" ).hover(
                function() {
                    $(this).addClass('shadow-lg').css('cursor', 'pointer');
                }, function() {
                    $(this).removeClass('shadow-lg');
                }
            );

        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app::public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\microweber-master\src\MicroweberPackages\Install/resources/views/select_template.blade.php ENDPATH**/ ?>