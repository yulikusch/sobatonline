<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('counter', [])->html();
} elseif ($_instance->childHasBeenRendered('0pAV2tj')) {
    $componentId = $_instance->getRenderedChildComponentId('0pAV2tj');
    $componentTag = $_instance->getRenderedChildComponentTagName('0pAV2tj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0pAV2tj');
} else {
    $response = \Livewire\Livewire::mount('counter', []);
    $html = $response->html();
    $_instance->logRenderedChild('0pAV2tj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html><?php /**PATH D:\project laravel + livewire\casscom-livewire\resources\views/home.blade.php ENDPATH**/ ?>