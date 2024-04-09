<?php

// 課題①: else

class FoodCalculator {
  private $food;
  private $num;

  // 引数$foodに整数を表示
  public function __construct(int $food) {
    $this->food = $food;
    $this->calculateNum();
  }
  
  // 返り値 getNum に整数を表示
  public function getNum(): int {
    return $this->num;
  }

  private function calculateNum() {
    if ($this->food / 2 == 0) {
      $this->num = $this->food % 2;
      return;
    }
    $this->num = ($this->food - 1) / 2;

    if ($this->num > 3) {
      $this->num +=5;
      return;
    }

    $this->num += 5;
  }
}
    $foodCalculator = new FoodCalculator(7);
    echo $foodCalculator->getNum();


// 課題②: elseif

class NumberChecker {
  // $num プロパティに int 型を指定
  private int $num;
  // メソッドの引数に int $num として整数を指定
  public function __construct(int $num) {
    $this->num = $num;
  }
  // メソッドの返り値に string 文字列を指定
  public function checkMultiples(): string {
    $output = "";

    if ($this->num % 12 == 0 && $this->num % 24 == 0) {
      $output = "numの値は12の倍数かつ、24の倍数です";
    } elseif ($this->num % 12 == 0) {
      $output = "numの値は12の倍数です";
    } elseif ($this->num % 24 == 0) {
      $output = "numの値は24の倍数です";
    }
    return $output;
  }
}
  $numChecker = new NumberChecker(72);
  echo $numChecker->checkMultiples();

  ?>