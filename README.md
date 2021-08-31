# StackerStack

This library provides a simple file stacking solution using [LIFO / FIFO](https://www.freshbooks.com/hub/accounting/fifo-vs-lifo) stacking database model. 

## Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
php composer.phar require "long-blade/stakerstack"
```

## Usage

The stakerstack is able to create a simple stacking method using a file, generated in the root directory of your project.

```php
$lifoStack = new LifoStack(); // OR new FifoStack();

$lifoStack->push($data]) // push any data to the stack
$lifoPoppedItem = $lifoStack->pop() // pop an item from the stack
```

## Contributing
Please read the [CONTRIBUTING.md](CONTRIBUTING.md) contents if you wish to help out!

## License
[MIT](https://choosealicense.com/licenses/mit/)

