* * *

#`table` 

Form element to edit values in a two-dimensional matrix a.k.a. table.

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/table.jpg)


**Composition:**

`<property> = table (headings) (widths)`

_Parameters_

None

_Lists_

* Headings 

List of headings for the table columns. Number of entries determines the number of columns.

* Widths (Optional)

Relative width for the table columns, can be any number.

**Examples:**

`Table = table (A,B,C)`

`Log = table (Quantity, Unit, Food) (15,15,70)`


**Storage:**

The cell values are stored within a [JSON](http://en.wikipedia.org/wiki/JSON) array of rows containing an array of the columns.

_Example_


`[[\"Cell A1\",\"Cell B1\",\"Cell C1\"],[\"Cell A2\",\"Cell B2\",\"Cell C2\"]]`

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/table2cells.jpg)


* * *

#`sequence` 

Description

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/textfield.jpg)


**Composition:**

`<property> = xxx <yyy>`

_Parameters_

* yyy (Optional)

Parameter Description

_Lists_

None.

**Examples:**

`Name = xxx`

`Title = xxx yyy`

Notice

**Storage:**

Text.