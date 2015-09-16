### Introduction

If you are prototyping websites in PHP this is a simple script you need. 

Create simple image placeholders from [placehold.it](http://placehold.it) with random flat background colors from [http://designmodo.github.io/Flat-UI/](http://designmodo.github.io/Flat-UI/). 

There is absense of responsive versions because I just wanted something easy and fast to use.

### Installation

Require the class in your document 

```
require 'pathtoplaceholdit/PlaceholdIt.php'
```

### Usage

Create an instance of the class where you need it
```
$placeholder = new PlaceholdIt();

```


When you want to create a placeholder image use ```getImage(width, height)```. If you want to create a square image you can skip the height(example 1).


```
$placeholder->getImage(100);
$placeholder->getImage(1000, 300);
```

### Disclosure

I don't host the images and I am not the creator of the color pallete. 

* Images: [placehold.it](http://placehold.it)
* Colors: [http://designmodo.github.io/Flat-UI/](http://designmodo.github.io/Flat-UI/).
* Json file: [https://gist.github.com/tripad/f16df8c07c2fec50365f](https://gist.github.com/tripad/f16df8c07c2fec50365f)