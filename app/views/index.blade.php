<div class="box">
    <div class="box-header">
        <h2><i class="fa fa-edit"></i>X-editable</h2>
        <div class="box-icon">
            <a href="form-x-editable.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
            <a href="form-x-editable.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
            <a href="form-x-editable.html#" class="btn-close"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="box-content">

        <div style="float: right; margin-bottom: 10px">
            <label style="display: inline-block; margin-right: 50px"><input type="checkbox" id="autoopen" style="vertical-align: baseline">&nbsp;auto-open next field</label>
            <button id="enable" class="btn btn-default">enable / disable</button>
        </div>
        <p>Click to edit</p>
        <table id="user" class="table table-bordered table-striped" style="clear: both">
            <tbody>
                <tr>
                    <td width="35%">Simple text field</td>
                    <td width="65%"><a href="form-x-editable.html#" id="username" data-type="text" data-pk="1" data-original-title="Enter username" class="editable editable-click">superuser</a></td>
                </tr>
                <tr>
                    <td>Empty text field, required</td>
                    <td><a href="form-x-editable.html#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a></td>
                </tr>
                <tr>
                    <td>Select, local array, custom display</td>
                    <td><a href="form-x-editable.html#" id="sex" data-type="select" data-pk="1" data-value="" data-original-title="Select sex" class="editable editable-click" style="color: rgb(128, 128, 128);">not selected</a></td>
                </tr>
                <tr>
                    <td>Select, remote array, no buttons</td>
                    <td><a href="form-x-editable.html#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-original-title="Select group" class="editable editable-click">Admin</a></td>
                </tr>
                <tr>
                    <td>Select, error while loading</td>
                    <td><a href="form-x-editable.html#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-original-title="Select status" class="editable editable-click">Active</a></td>
                </tr>

                <tr>
                    <td>Datepicker</td>
                    <td>

                        <span class="notready">not implemented for Bootstrap 3 yet</span>

                    </td>
                </tr>
                <tr>
                    <td>Combodate (date)</td>
                    <td><a href="form-x-editable.html#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-original-title="Select Date of birth" class="editable editable-click">15/05/1984</a></td>
                </tr>
                <tr>
                    <td>Combodate (datetime)</td>
                    <td><a href="form-x-editable.html#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-original-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a></td>
                </tr>



                <tr>
                    <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                    <td><a href="form-x-editable.html#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Enter comments" class="editable editable-pre-wrapped editable-click">awesome
                            user!</a></td>
                </tr>




                <tr>
                    <td>Twitter typeahead.js</td>
                    <td><a href="form-x-editable.html#" id="state2" data-type="typeaheadjs" data-pk="1" data-placement="right" data-original-title="Start typing State.." class="editable editable-click">California</a></td>
                </tr>


                <tr>
                    <td>Checklist</td>
                    <td><a href="form-x-editable.html#" id="fruits" data-type="checklist" data-value="2,3" data-original-title="Select fruits" class="editable editable-click">peach<br>apple</a></td>
                </tr>

                <tr>
                    <td>Select2 (tags mode)</td>
                    <td><a href="form-x-editable.html#" id="tags" data-type="select2" data-pk="1" data-original-title="Enter tags" class="editable editable-click">html, javascript</a></td>
                </tr>

                <tr>
                    <td>Select2 (dropdown mode)</td>
                    <td><a href="form-x-editable.html#" id="country" data-type="select2" data-pk="1" data-value="BS" data-original-title="Select country" class="editable editable-click">Bahamas</a></td>
                </tr>

                <tr>
                    <td>Custom input, several fields</td>
                    <td><a href="form-x-editable.html#" id="address" data-type="address" data-pk="1" data-original-title="Please, fill address" class="editable editable-click"><b>Moscow</b>, Lenina st., bld. 12</a></td>
                </tr>


            </tbody>
        </table>

    </div>
</div>