# _Word Frequency_

#### _Word Frequency, 2017_

#### By _**Zach Beecher**_

## Description

_A webapp built with silex that returns how frequent a word appears in a given string. A user inputs a word and the string of words to check it against, only finds full word matches, no partial matches._

##Specs
* _Spec zero: Return 0 if the searched word is not in the string input._
* _input: Johnny is awesome! Search string: Mike's good guy._
* _output: 0_
* _Spec one: Return 1 if the two input words match exactly as written_
* _Input: User's Search Input: "awesome" Find String Input: "awesome"
Output: 1_
* _Spec two: Returned number increments each time the Find string occurs in the Search string._
* _Input: Search Input: "There's a cat on my porch, and another cat on my lawn" Find Input: "cat"_
* _Output: 2_
* _Spec three:Ignore partial matches_
* _Input: Search: "Totally radical dude!", Find: "rad"_
* _Output: 0_
* _Spec four:program should show a match if search input has capitalization)_
* _Input: Search: "Totally radical dude!", Find: "totally"_
* _Output: 1_

## Git hub link:
* https://github.com/ziggity/week2WordFrequencySilexTwigPHP.git

## Setup/Installation Requirements

* _Clone repo from github_
* _open project directory in terminal, and run composer install_
* _start a local server inside the web folder: php -S localhost:8000_
* _Navigate yourself to the web browser of your choice, and type in localhost:8000_
* _Enjoy!_

_Dependencies are Silex, Twig, and PHPUnit for testing_

## Known Bugs

_none at this time_

## Support and contact details

_email me!_

## Technologies Used

_HTML, PHP, Silex, Twig, CSS, Bootstrap, Jquery_

### License

*This is licensed under the MIT license*

Copyright (c) 2017 **_Zach Beecher_**
