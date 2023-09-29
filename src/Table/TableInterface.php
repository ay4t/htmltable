<?php

namespace Ay4t\HtmlTable\Table;

use Ay4t\HtmlTable\Columns\ColumnClassesInterface;
use Ay4t\HtmlTable\Columns\TableColumnsInterface;
use Ay4t\HtmlTable\Html\MutableAttributesInterface;
use Ay4t\HtmlTable\TSection\TableSectionStructureInterface;

interface TableInterface extends
  MutableAttributesInterface,
  TableSectionStructureInterface,
  TableColumnsInterface,
  ColumnClassesInterface {

}
