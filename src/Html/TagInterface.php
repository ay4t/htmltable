<?php

namespace Ay4t\HtmlTable\Html;

interface TagInterface extends AttributesBuilderInterface {

  /**
   * @param string $content
   *
   * @return string
   */
  function renderWithContent($content);
}
