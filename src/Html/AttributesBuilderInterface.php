<?php

namespace Ay4t\HtmlTable\Html;

interface AttributesBuilderInterface {

  /**
   * @param string $class
   *
   * @return static
   */
  function addClass($class);

  /**
   * @param string[] $classes
   *
   * @return static
   */
  function addClasses(array $classes);

}
