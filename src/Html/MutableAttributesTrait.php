<?php

namespace Ay4t\HtmlTable\Html;

/**
 * @see MutableAttributesInterface
 */
trait MutableAttributesTrait {

  /**
   * Attribute values for all attributes except class.
   * @var Attributes
   */
  private $attributes;

  function __constructMutableAttributes() {
    $this->attributes = new Attributes();
  }

  public function addAttributes(string $key, $value) {
    $this->attributes = $this->attributes->setAttribute($key, $value);
    return $this;
  }


  /**
   * @param string $class
   *
   * @return $this
   *
   * @see MutableAttributesBuilderInterface::addClass()
   */
  function addClass($class) {
    $this->attributes = $this->attributes->addClass($class);
    return $this;
  }

  /**
   * @param string[] $classes
   *
   * @return $this
   *
   * @see MutableAttributesBuilderInterface::addClasses()
   */
  function addClasses(array $classes) {
    $this->attributes = $this->attributes->addClasses($classes);
    return $this;
  }

  /**
   * @return string
   *   The string of all attributes, starting with a space.
   *   E.g. ' class="class0 class1" id="5"'
   *
   * @see AttributesGetterInterface::renderAttributes()
   */
  public function renderAttributes() {
    return $this->attributes->renderAttributes();
  }

  /**
   * @param string $tagName
   * @param string $content
   *
   * @return string
   *
   * @see AttributesGetterInterface::renderTag()
   */
  public function renderTag($tagName, $content) {
    return $this->attributes->renderTag($tagName, $content);
  }

  /**
   * @param $tagName
   *
   * @return TagInterface
   *
   * @see AttributesGetterInterface::createTag()
   */
  public function createTag($tagName) {
    return $this->attributes->createTag($tagName);
  }

}
