<style>
h1 code {border: 0px !important;}
table {margin-bottom:25px !important}
th {border:1px solid grey;padding:4px;background-color:#E3E3E3}
td {border:1px solid grey;padding:5px}
</style>


#`textfield` 

Form element for single line raw text.

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/textfield.jpg)


**Composition:**

`<property> = textfield <size>`

**Parameters:**

| Name | Type | Default | Description |   
|------|-------|---------|-------------|
|Rows  | Value | 10 | Determines the number of rows of the input field.| 
|Size|Value| L | Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.|

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

**Parameters:**

| Name | Type | Default | Description |   
|------|-------|---------|-------------|
|Rows  | Value | 10 | Determines the number of rows of the input field.| 
|Size|Value| L | Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.|

**Storage:**

Text with linefeeds.


* * *

#`richtext`

Form element for text with basic formatting.

![a = richtext 10 L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/richtext.jpg)



**Composition:**

`<property> = richtext <rows> <size>`

**Parameters:**

| Name | Type | Default | Description |   
|------|-------|---------|-------------|
|Rows  | Value | 10 | Determines the number of rows of the input field.| 
|Size|Value| L | Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.|  

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

**Parameters:**

| Name | Type | Default | Description |   
|------|-------|---------|-------------|
|Rows  | Value | 10 | Determines the number of rows of the input field.| 
|Size|Value| L | Determines the size of the input field. Can be on of 'S', 'M', 'L', 'XL', 'XXL'. Default Value 'L'.|


**Examples:**

`Abstract = markdown`

`News = markdown 20 XL`

**Storage:**

[Markdown](http://daringfireball.net/projects/markdown/syntax)
 
  
