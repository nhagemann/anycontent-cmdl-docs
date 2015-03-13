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

Form element for text with basic formatting.

![a = richtext 10 L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/richtext.jpg)



**Composition:**

`<property> = richtext <rows> <size>`

_Parameters_

<style>
table {border:1px solid green}
</style>

<table>
<thead>
<tr> 
<th>Name</th>
<th>Type</th>
<th>Default</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr> 
<td>Rows</td>
<td>Value</td>
<td>10</td>
<td>Determines the number of rows of the input field.</td>
</tr>
</tbody>     
</table>

| Name | Type | Default | Description |   
|------|-------|---------|-------------|
|Rows  | Value | 10 | Determines the number of rows of the input field.|   


* Rows (Optional)

Determines the number of rows of the input field. Default Value '10'.

* Size (Optional)

Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.

_Lists_

None.

**Examples:**

`Abstract = richtext`

`News = richtext 20 XL`

**Storage:**

HTML
 
* * *

#`markdown`

Form element for formatted text using [Markdown](http://daringfireball.net/projects/markdown/syntax) syntax. 

![a = markdown 10 L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/markdown.jpg)


**Composition:**

`<property> = markdown <rows> <size>`

_Parameters_

| Name | Type | Default | Description |   
|------|-------|---------|-------------|
|Rows  | Value | 10 | Determines the number of rows of the input field.| 
|Size|Value| L | Determines the size of the input field.|

* Rows (Optional)

Determines the number of rows of the input field. Default Value '10'.

* Size (Optional)

Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.

_Lists_

None.

**Examples:**

`Abstract = markdown`

`News = markdown 20 XL`

**Storage:**

[Markdown](http://daringfireball.net/projects/markdown/syntax)
 
  
