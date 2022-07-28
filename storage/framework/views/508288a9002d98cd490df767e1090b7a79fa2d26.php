

<?php $__env->startSection('content'); ?>
    <?php if ($__env->exists('Job::frontend.layouts.search.'. $style)) echo $__env->make('Job::frontend.layouts.search.'. $style, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php if($style == 'job-list-v8' || $style == 'job-list-v9'): ?>
        <?php echo App\Helpers\MapEngine::scripts(); ?>

    <?php endif; ?>
    <script>
        jQuery(".view-more").on("click", function () {
            jQuery(this).closest('ul').find('li.tg').toggleClass("d-none");
            jQuery(this).find('.tg-text').toggleClass('d-none');
        });

        if($( ".job-salary-range-slider" ).length) {
            //Salary Range Slider
            $(".job-salary-range-slider").slider({
                range: true,
                min: <?php echo e($min_max_price[0]); ?>,
                max: <?php echo e($min_max_price[1]); ?>,
                values: [ <?php echo e(request()->get('amount_from') ?? 0); ?>, <?php echo e(request()->get('amount_to') ?? $min_max_price[1]); ?> ],
                slide: function (event, ui) {
                    $(".job-salary-amount .min").text(bc_format_money(ui.values[0]));
                    $(".job-salary-amount .max").text(bc_format_money(ui.values[1]));
                    $("input[name=amount_from]").val(ui.values[0]);
                    $("input[name=amount_to]").val(ui.values[1]);
                }
            });

            $(".job-salary-amount .min").text(bc_format_money($(".job-salary-range-slider").slider("values", 0)));
            $(".job-salary-amount .max").text(bc_format_money($(".job-salary-range-slider").slider("values", 1)));
        }
        if($("#bc_results_map").length) {
            var bravo_map_data = {
                markers: <?php echo json_encode($markers); ?>,
                center: [<?php echo e(!empty($markers[0]['lat']) ? $markers[0]['lat'] : 40.80); ?>, <?php echo e(!empty($markers[0]['lng']) ? $markers[0]['lng'] : -73.70); ?>]
            };
            var mapEngine = new BravoMapEngine('bc_results_map', {
                fitBounds: true,
                center: bravo_map_data.center,
                zoom: 9,
                disableScripts: true,
                ready: function (engineMap) {
                    if (bravo_map_data.markers) {
                        engineMap.addMarker3(bravo_map_data.markers);
                    }
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/GitHub/superio200/modules/Job/Views/frontend/index.blade.php ENDPATH**/ ?>