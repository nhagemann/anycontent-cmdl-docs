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

`Title = textfield M`

`Short Title`

The textfield form element is the default form element for any property. So you don't have to specify it explicitly, a cmdl line like `Short Title` is perfectly valid.

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

Description

![a = richtext 10 L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/richtext.jpg)



**Composition:**

`<property> = richtext <rows> <size>`

_Parameters_

* Rows (Optional)

Determines the number of rows of the input field. Default Value '10'.

* Size (Optional)

Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.

_Lists_

None.

**Examples:**

`Abstract = richtext`

`News = richtext 20 XL`

 
* * *

#`markdown`

Description

![a = markdown 10 L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/markdown.jpg)


**Composition:**

`<property> = markdown <rows> <size>`

_Parameters_

* Rows (Optional)

Determines the number of rows of the input field. Default Value '10'.

* Size (Optional)

Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.

_Lists_

None.

**Examples:**

`Abstract = markdown`

`News = markdown 20 XL`
  
