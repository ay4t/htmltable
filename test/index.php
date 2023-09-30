<?php

use Ay4t\HtmlTable\Table\Table;

require_once '../vendor/autoload.php';

$table = Table::create()
  ->addColNames(['legend', 'sublegend', 0, 1])
  ->addRowNames(['dimensions.width', 'dimensions.height', 'price'])
  ->th('dimensions', 'legend', 'Dimensions')
  ->th('dimensions.width', 'sublegend', 'Width')
  ->th('dimensions.height', 'sublegend', 'Height')
  ->th('price', 'legend', 'Price')
  ->addAttributes('id', 'id-table')
  ->addClass('table table-bordered table-striped')
;

// cell atributes
$table->addCellAttributes('price', 'legend', [
    'attr' => 'test-attr'
]);

$table->headRow()->thMultiple(['Product 0', 'Product 1']);
$table->rowHandle('dimensions.width')->tdMultiple(['2cm', '5cm']);
$table->rowHandle('dimensions.height')->tdMultiple(['14g', '22g']);
$table->rowHandle('price')->tdMultiple(['7,- EUR', '5,22 EUR']);

echo $table->render();