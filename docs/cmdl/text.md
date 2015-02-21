#`textfield` 

Form element for single line raw text.

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/textfield.jpg)


**Composition:**

`<property> = textfield <size>`

_Parameters_

* Size (Optional)

Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.

_Lists_

None.

**Examples:**

`Name = textfield`

`Name = textfield M`

`Name`

The textfield form element is the default form element for any property. So you don't have to specify it explicity, a cmdl line like `Title` is perfectly valid.

**Storage:**

Text.

* * *

#`textarea` 

Form element for multi line raw text.

![a = textarea 5 M](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/textarea.jpg)


**Composition:**

`<property> = textarea <rows> <size>`

_Parameters_

* Rows (Optional)

Determines the number of rows of the input field. Default Value '10'.

* Size (Optional)

Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.

_Lists_

None.

**Storage:**

Text with linefeeds.


* * *

#`richtext`
 
* * *

#`markdown`
  
