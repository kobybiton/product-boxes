<?php

abstract class Http {
  public $product;
  public function __construct($product) {
    $this->product = $product;
  }
}

class Request extends Http {
  public function get() : string {
      switch ($this->product['id']) {
        case 1:
          return 'With a slim profile and a tall silhouette, this Celin Klein mini bag is made from a vegan-friendly faux leather. Designed with an allover monogram, an adjustable crossbody strap and multiple zip compartments.';
          break;
        case 2:
          return 'Special by Chanel - POWDER PINK PATENT CALFSKIN LEATHER PUMP, 7 CM ❤ liked on Polyvore featuring shoes, pumps, heels, pink shoes, heel pump, pink patent pumps, patent leather pumps and patent shoes';
          break;
        case 3:
          return 'Go 100% Ray-Ban with the original sun prescription lenses made to perfectly fit your favorite Ray-Ban shades. Pick your must-haves frames amongst a wide range and make them truly yours with the inclusion of authentic Ray-Ban sun prescription lenses. Have the full Ray-Ban experience. Your authentic Ray-Ban sun prescription lenses come with 100% UVA and UVB protection to preserve your eyes from sun rays. Pick yours in either polar or non- polar filters. The exclusive and original sun prescription lenses featuring the Ray-Ban logo, just like your favorite standard shades - you won\'t be able to spot the difference.';
          break;
        default:
          '';
      }
  }
}

$request = new Request($_POST);
echo $request->get();

?>