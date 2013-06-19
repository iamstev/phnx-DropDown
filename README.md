# phnx-DropDown
A PHP class for quickly generating common drop down menus.

## Purpose
This simple class allows you to quickly generate common HTML dropdown menus (select tags) with out a lot of
copying and pasting, or writting custom loops every time you need a new drop down.

## Usage

    $month = new phnx\DropDown\DropDown;	// creates the dropdown object  
    $month->name = 'month';		// optional - sets the NAME attribute on the SELECT tag  
    $month->id = 'month';       // optional - sets the ID attribute on the SELECT tag  
    $month->classes = 'blue'    // optional - sets the CLASS attribue on the SELECT tag, seperate multiple classes with space  
    $month->style = '1thru12';  // required - chooses the style, in this case 1 though 12  
    $month->selected = '8'      // optional - sets the option with this value to SELECTED
    $month->display();          // prints the SELECT tag with its options

## Current Styles
`Style Code` - Style Description
* `0thru9` - 0 through 9
* `1thru9` - 1 through 9
* `1thru31` - 1 through 31
* `1thru12` - 1 through 12 w/ leading zeros 
* `12hour` -  12 then 1 though 11 w/ leading zeros
* `0thru59` - 0 through 59 w/ leading zeros

## Change Log

### v.1.0.1
* Added namespace
* Updated usage to reflect namespace
* Bug fix: The `$selected` variable was missing (oops!)

### v.1.0
* Six styles to start with: `0thru9`, `1thru9`, `1thru31`, `1thru12`, `12hour`, and `0thru59`.