#`checkbox` 

Form element for managing binary states.


**Composition:**

`<property> = checkbox <legend>`

_Parameters_

* Legend (Optional)

Description of the selectable state.

_Lists_

None.

**Examples:**

`Online = checkbox`

`Terms & Conditions = checkbox "Customer has agreed our terms & conditions."`


**Storage:**

Stored as '0' or '1' if the checkbox has been checked.

* * *

#`selection`
 
Form element for selection of one value out of a list of possible values.

**Composition:**

`<property> = selection <type> (options)`

_Parameters_

* Type (Optional)

Note how the selection should be presented. Possible values are 'radio', 'toggle' and 'dropdown'. Default value 'dropdown'.

_Lists_

* Options

List of selectable values.

**Examples:**

`Category = selection (Single, Double, Suite)`

`Class = selection radio (First, Business, Economy)`

`Class = selection radio (1:First, 2:Business, 3:Economy)`

**Storage:**

The selected value is stored as a string. If the list is is specified as key/value list only the key gets stored.

* * *

#`multiselection`
 
Form element for selection multiple values out of a list of possible values.

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/multiselection.jpg)


**Composition:**

`<property> = multiselection <type> (options)`

_Parameters_

* Type (Optional)

Note how the selection should be presented. Possible values are 'list' and 'checkbox'. Default value 'list'.

_Lists_

* Options

List of selectable values.

**Examples:**

`Category = multiselection (Comedy, Drama, Mystery, Science Fiction, Family)`

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/multiselection.jpg)


`Category = multiselection checkbox (Monday, Tuesday, Wednesday, Thursday, Friday)`

![a* = textfield L](https://raw.githubusercontent.com/nhagemann/anycontent-cmdl-docs/master/images/formelement/multiselection2checkbox.jpg)


**Storage:**

The selected values are stored as a comma separated string, e.g. "Mystery,Science Fiction".

* * *

#`reference`
 
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

* * *

#`multireference`
 
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

