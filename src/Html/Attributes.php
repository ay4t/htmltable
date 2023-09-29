<?php

namespace Ay4t\HtmlTable\Html;

class Attributes implements AttributesInterface {

  use AttributesTrait {
    renderAttributes as public;
    renderTag as public;
    createTag as public;
  }
}
