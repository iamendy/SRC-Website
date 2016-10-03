<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/3/2016
 * Time:    2:29 AM
 **/
?>

<div class="mdl-grid">
<div class="mdl-cell mdl-cell--3-col">
</div>
<div class="mdl-cell mdl-cell--9-col">
<form style="font-family: 'Arial Black';">


    <!--Row for Name-->
    <div class="row">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label for="name" class="mdl-textfield__label">Name</label>
            <br/>
            <input type="text" name="name" id="name" class="mdl-textfield__input" placeholder="First Name or User Name" required />
        </div>
    </div>
    <!--Row for Name End-->


    <!--Row for Email and Telephone Number-->
    <div class="row">

        <!--Column for Email-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label for="email" class="mdl-textfield__label"><b>Email</b></label>
            <br/>
            <input type="text" name="email" id="email"  class="mdl-textfield__input" placeholder="example@*******.com" required />
        </div>
        <!--Column for Email End-->


        <!--Column for telephone input-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label for="telephone" class="mdl-textfield__label">Telephone</label>
            <br/>
            <input type="tel" name="telephone" id="telephone" class="mdl-textfield__input" placeholder="+(Country Code)(Phone Number)" required />

        </div>
        <!--Column for telephone input End-->

    </div>
    <!--Row for Email and Telephone Number End-->


    <!--Row for Comment(Textfield)-->
    <div class="row">
        <div class="mdl-textfield mdl-js-textfield" style="width:70%;">
            <label for="message" class="mdl-textfield__label">Message</label><br/>
            <textarea type="text" name="message" class="mdl-textfield__input" rows="4"></textarea>
        </div>
    </div>
    <!--Row for Comment(Textfield) End-->
</form>
<!--Form Ends-->
<button class="mdl-button mdl-button--raised mdl-button--colored"><i class="material-icons">email</i>Submit</button>
</div>
</div>
