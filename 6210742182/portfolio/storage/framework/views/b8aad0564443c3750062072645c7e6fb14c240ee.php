<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-dome2">
            <div class="body-dome">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-dropdown')->html();
} elseif ($_instance->childHasBeenRendered('DjeWan4')) {
    $componentId = $_instance->getRenderedChildComponentId('DjeWan4');
    $componentTag = $_instance->getRenderedChildComponentTagName('DjeWan4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DjeWan4');
} else {
    $response = \Livewire\Livewire::mount('navigation-dropdown');
    $html = $response->html();
    $_instance->logRenderedChild('DjeWan4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                <div>
                    <!-- Page Heading -->
                    <header class=" shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <?php echo e($header); ?>

                        </div>
                    </header>

                    <!-- Page Content -->
                    <main>
                        <?php echo e($slot); ?>

                    </main>
                </div>
            </div>
        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH /Users/sundress/Documents/CN334-WebApplication/newapp/resources/views/layouts/app.blade.php ENDPATH**/ ?>