<?hh // strict
/*
 *  Copyright (c) 2016, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\HackRouter;

abstract class RequestParametersCodegenBase<T as RequestParametersBase> {
  public function __construct(
    private T $parameters,
  ) {
  }

  final protected function getParameters(): T {
    return $this->parameters;
  }
}