<?php

namespace Roots\Sage;

use Closure;

use Illuminate\Container\Container as BaseContainer;

class Container extends BaseContainer
{
     public function terminating(Closure $callback)
  {
    add_action('shutdown', $callback);
  }
}
