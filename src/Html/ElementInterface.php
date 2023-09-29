<?php

namespace Ay4t\HtmlTable\Html;

interface ElementInterface extends AttributesBuilderInterface {

  /**
   * @return string
   */
  function render();
}
