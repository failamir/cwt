<?php $translation = $row->translateOrOrigin(app()->getLocale()); ?>
<div class="gig-item h-100 border-radius-8">
    <div class="d-flex flex-column h-100">
        <a href="<?php echo e($row->getDetailUrl()); ?>" class="gig-img">
            <?php if($row->image_id): ?>
                <?php echo get_image_tag($row->image_id,'full',['alt'=>$row->title]); ?>

            <?php else: ?>
                <?php echo e(__("GIG")); ?>

            <?php endif; ?>
        </a>
        <div class="gig-content flex-grow-1">
            <div class="gig-author mb-3 d-flex align-items-center">
                <?php if(!empty($author = $row->author)): ?>
                    <div class="gig-author-img mr-2">
                        <img src="<?php echo e($author->avatar_url); ?>" alt="<?php echo e($author->display_name); ?>">
                    </div>
                    <div class="author-name"><a class="c-222325" href="<?php echo e($author->getDetailUrl()); ?>"><?php echo e($author->display_name); ?></a></div>
                <?php endif; ?>
            </div>
            <h3 class="g-title fs-16 fs-16"><a href="<?php echo e($row->getDetailUrl()); ?>"><?php echo e($translation->title); ?></a></h3>
        </div>
        <div class="gig-footer p3 d-flex justify-content-between flex-shrink-0">
            <div class="div">

                <?php
                $reviewData = $row->getScoreReview();
                $score_total = $reviewData['score_total'];
                ?>
                <?php if($reviewData['total_review'] > 1): ?>
                <div class="rating d-inline-block">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <div class="rating-active" style="width: <?php echo e($score_total * 2 * 10 ?? 0); ?>%">
                        <div class="inner">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                (<?php echo e($reviewData['total_review']); ?>)
                <?php endif; ?>
            </div>
            <div>
                <span class="c-7a7d85"><?php echo e(__("Starting at ")); ?></span>
                 <span class="fs-20"><?php echo e(format_money($row->basic_price)); ?></span>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/forkomdi/ciptawiratirta.com/modules/Gig/Views/frontend/search/loop.blade.php ENDPATH**/ ?>