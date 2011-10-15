<?php
require_once __DIR__ . '/../src/Factory.php';
require_once __DIR__ . '/../src/Documentor.php';

$generator = Faker\Factory::create();
$documentor = new Faker\Documentor($generator);
?>
<?php foreach ($documentor->getFormatters() as $provider => $formatters): ?>
### `<?php echo $provider ?>`
<?php foreach ($formatters as $formatter => $example): ?>
 * <?php echo str_pad('`' . $formatter . '()`', 20) ?><?php if ($example): ?> // <?php echo $example ?> <?php endif; ?> 
<?php endforeach; ?>
<?php endforeach; ?>
