
#`number`

Form element for editing numbers.

![a = number](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/number.jpg)


**Composition:**

`<property> = number <digits> <unit>`

_Parameters_

* Digits (Optional)

Determines the number of digits. Default Value '0'.

* Unit (Optional)

Determines the unit of the entered number. Default Value ''.


_Lists_

None.

**Examples:**

`a = number`

![a = number](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/number.jpg)

`a = number 2 Unit`

![a = number 2 Unit](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/number2u.jpg)


**Storage:**

Numbers are stored with '.' as decimal separator and as many digits as specified by the digits parameter.

E.g.: "42.42"
 
* * *

#`date`

Form element for editing dates.


**Composition:**

`<property> = date <type> <init>`

_Parameters_

* Type (Optional)

Determines which parts of a date should be stored, possible values 'long','short','datetime','full'. Default Value 'long'.

* Init (Optional)

Specifies initialization of the field, possible values 'today' and 'now'. The value 'now' includes time. No Default Value.

_Lists_

None.

**Examples:**

`Date = date`

`Date = date short`

`Date = date long today`


**Storage:**

Dates are stored in a format inspired by [ISO 8601](http://en.wikipedia.org/wiki/ISO_8601): YYYY-MM-DD hh:mm:ss
  
* * *

#`timestamp`


Form element for editing dates.


**Composition:**

`<property> = timestamp <type> <init>`

_Parameters_

* Type (Optional)

Determines which parts of a date should be stored, possible values 'datetime','full'. Default Value 'datetime'.

* Init (Optional)

Specifies initialization of the field, possible values 'today' and 'now'. The value 'now' includes time. No Default Value.

_Lists_

None.

**Examples:**

`Date = timestamp`

`Date = timestamp full now`


**Storage:**

Dates are stored as [UNIX timestamps](http://en.wikipedia.org/wiki/Unix_time)

* * *

#`time`     

Form element for editing times.


**Composition:**

`<property> = time <type> <init>`

_Parameters_

* Type (Optional)

Determines which parts of a date should be stored, possible values 'short','long'. Default Value 'short'.

* Init (Optional)

Specifies initialization of the field, possible value 'now'. No Default Value.


_Lists_

None.

**Examples:**

`Name = xxx`

`Title = xxx yyy`

Notice

**Storage:**

Times are stored in a format inspired by [ISO 8601](http://en.wikipedia.org/wiki/ISO_8601): hh:mm:ss

* * *

#`geolocation` 

Form element for editing places.

![a = geolocation](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/geolocation.jpg)
![a = geolocation](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/geolocation_modal.jpg)

**Composition:**

`<property> = geolocation`

_Parameters_

None.


_Lists_

None.

**Examples:**

`Main site = geolocation`


**Storage:**

Latitude and Longitude gets separated with a comma. The coordinates itself are encoded as [decimal degrees](http://en.wikipedia.org/wiki/Decimal_degrees).

E.g.: "50.1109221, 8.682126700000026"
   
* * *

#`color`

Description

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/color.jpg)


**Composition:**

`<property> = color <selectiontype> (options)`

_Parameters_

* Selection Type (Optional)

Determines whether the use must choose from a palette (fixed) or can choose an arbitrary color (free).

_Lists_

* Options (Optional)

List of selectable colors.

**Examples:**

`Color = color`

`Palette = color fixed (F00: Red, #0F0: Green, #00F: Blue)`

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/color2palette.jpg)

**Storage:**

Colors are stored as [RGB hex](http://en.wikipedia.org/wiki/Web_colors#hex_triplet) values including '#'.
    
    
* * *

#`range`     

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