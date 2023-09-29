<?php

namespace Ay4t\HtmlTable\Cell;

class PlaceholderCell extends Cell {

  function __construct() {
    parent::__construct('td', '');
  }
}
