
<div class="card mb-2 not-collapsed-border collapsed card-bubble <?php if ($is_read): ?>bg-silver<?php else: ?>card-success<?php endif; ?>" data-bs-toggle="collapse" data-bs-target="#notif-item-<?php print $id ?>" aria-expanded="false" aria-controls="collapseExample">
    <div class="card-body">
        <div class="row align-items-center mb-3">
            <div class="col text-start text-left">
                <span class="text-primary text-break-line-2">New comment</span>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col" style="max-width: 100px;">
                <div class="img-circle-holder img-absolute border-radius-0 border-0">
                    <img src="<?php echo $picture; ?>"/>
                </div>
            </div>
            <div class="col text-start text-left">
                <?php if (isset($article['title'])): ?>
                <h5 class="text-primary text-break-line-2"><?php echo $article['title']; ?></h5>
                <?php endif; ?>
            </div>

            <div class="col-12 col-sm text-end text-right"><?php _e(mw('format')->ago($notification['created_at'])); ?></div>
        </div>
        <div class="collapse" id="notif-item-<?php print $id ?>">
            <?php if (isset($article['full_url'])): ?>
            <div class="row mt-3">
                <div class="col-12">
                    <a href="<?php echo $article['full_url']; ?>" class="btn btn-primary btn-sm btn-rounded">View article</a>
                </div>
            </div>
            <?php endif; ?>

            <hr class="thin"/>

            <div class="row">
                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col" style="max-width: 80px;">
                            <div class="img-circle-holder w-60 border-0 border-radius-10">
                                <img src="<?php echo $user_picture; ?>"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-1">
                                
                            </div>
                            <div>
                               

                               
                            </div>
                        </div>
                    </div>


                    <h6><strong><?php echo e($created_by_username); ?></strong>
                        <small class="text-muted">says:</small>
                    </h6>
                    <div>
                        <p><?php echo e($notification['comment_body']); ?></p>
                    </div>


                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\microweber-master\src\MicroweberPackages\Comment/resources/views/admin/notifications/new_comment.blade.php ENDPATH**/ ?>