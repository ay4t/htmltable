<?php

namespace Ay4t\HtmlTable\Table;

use Ay4t\HtmlTable\Axis\Axis;
use Ay4t\HtmlTable\Html\Multiple\StaticAttributesMap;
use Ay4t\HtmlTable\TSection\TableSection;
use Ay4t\HtmlTable\TSection\TableSectionStructureInterface;

/**
 * Wrapper/decorator for a tbody element.
 */
class TBodyWrapper implements TableSectionStructureInterface {

  /**
   * @var \Ay4t\HtmlTable\TSection\TableSection
   */
  private $tbody;

  /**
   * The constructor.
   *
   * @param \Ay4t\HtmlTable\TSection\TableSection $tbody
   */
  function __construct(TableSection $tbody) {
    $this->tbody = $tbody;
  }

  /**
   * @return \Ay4t\HtmlTable\TSection\TableSection
   */
  function tbody() {
    return $this->tbody;
  }

  /**
   * @param string $colName
   *
   * @return \Ay4t\HtmlTable\Handle\SectionColHandle
   */
  function colHandle($colName) {
    return $this->tbody->colHandle($colName);
  }

  /**
   * @param string $rowName
   *
   * @return $this
   * @throws \Exception
   */
  function addRowName($rowName) {
    $this->tbody->addRowName($rowName);
    return $this;
  }

  /**
   * @param string[] $rowNames
   *
   * @return $this
   */
  function addRowNames(array $rowNames) {
    $this->tbody->addRowNames($rowNames);
    return $this;
  }

  /**
   * @param string $groupName
   * @param string[] $rowNameSuffixes
   *
   * @return $this
   * @throws \Exception
   */
  function addRowGroup($groupName, array $rowNameSuffixes) {
    $this->tbody->addRowGroup($groupName, $rowNameSuffixes);
    return $this;
  }

  /**
   * @param string $rowName
   *
   * @return \Ay4t\HtmlTable\Handle\RowHandle
   * @throws \Exception
   */
  public function rowHandle($rowName) {
    return $this->tbody->rowHandle($rowName);
  }

  /**
   * Adds a row and returns the row handle.
   * This is a hybrid of addRowName() and rowHandle().
   *
   * @param $rowName
   *
   * @return \Ay4t\HtmlTable\Handle\RowHandle
   * @throws \Exception
   */
  public function addRow($rowName) {
    return $this->tbody->addRow($rowName);
  }

  /**
   * @param string $rowName
   * @param string $class
   *
   * @return $this
   */
  public function addRowClass($rowName, $class) {
    $this->tbody->addRowClass($rowName, $class);
    return $this;
  }

  /**
   * @param string[] $rowClasses
   *   Format: $[$rowName] = $class
   *
   * @return $this
   */
  public function addRowClasses(array $rowClasses) {
    $this->tbody->addRowClasses($rowClasses);
    return $this;
  }

  /**
   * @param string[] $striping
   *   Classes for striping. E.g. ['odd', 'even'], or '['1st', '2nd', '3rd'].
   *
   * @return $this
   */
  public function addRowStriping(array $striping = ['odd', 'even']) {
    $this->tbody->addRowStriping($striping);
    return $this;
  }

  /**
   * @param string $rowName
   *   Row name, group or range.
   * @param string $colName
   *   Column name, group or range.
   * @param string $content
   *   HTML cell content.
   *
   * @return $this
   * @throws \Exception
   */
  function td($rowName, $colName, $content) {
    $this->tbody->td($rowName, $colName, $content);
    return $this;
  }

  /**
   * @param string $rowName
   *   Row name, group or range.
   * @param string $colName
   *   Column name, group or range.
   * @param string $content
   *   HTML cell content.
   *
   * @return $this
   * @throws \Exception
   */
  function th($rowName, $colName, $content) {
    $this->tbody->th($rowName, $colName, $content);
    return $this;
  }

  /**
   * Adds a td cell with a colspan that ends where the next known cell begins.
   *
   * @param string $rowName
   *   Row name, group or range.
   * @param string $colName
   *   Column name, group or range.
   * @param string $content
   *   HTML cell content.
   *
   * @return $this
   * @throws \Exception
   */
  function tdOpenEnd($rowName, $colName, $content) {
    $this->tbody->tdOpenEnd($rowName, $colName, $content);
    return $this;
  }

  /**
   * Adds a th cell with a colspan that ends where the next known cell begins.
   *
   * @param string $rowName
   *   Row name, group or range.
   * @param string $colName
   *   Column name, group or range.
   * @param string $content
   *   HTML cell content.
   *
   * @return $this
   * @throws \Exception
   */
  function thOpenEnd($rowName, $colName, $content) {
    $this->tbody->thOpenEnd($rowName, $colName, $content);
    return $this;
  }

  /**
   * @param string $rowName
   * @param string $colName
   * @param string $class
   *
   * @return $this
   */
  public function addCellClass($rowName, $colName, $class) {
    $this->tbody->addCellClass($rowName, $colName, $class);
    return $this;
  }

  /**
   * @param string $rowName
   * @param string $colName
   * @param array $attributes
   *
   * @return $this
   */
  public function addCellAttributes($rowName, $colName, $attributes) {
  	$this->tbody->addCellAttributes($rowName, $colName, $attributes);
  	return $this;
  }

  /**
   * @param Axis $columns
   * @param StaticAttributesMap $tableColAttributes
   *
   * @return string
   */
  function renderTBody(Axis $columns, StaticAttributesMap $tableColAttributes) {
    return $this->tbody->render($columns, $tableColAttributes);
  }

  /**
   * @param string $rowName
   *
   * @return true
   */
  function rowExists($rowName) {
    return $this->tbody->rowExists($rowName);
  }
}
