var batch = 1;

var subValues = {
    "AT-false-ARJ": "Automata Thoery",
    "COA-true": "Computer Organization & Architecture",
    "CN-true": "Computer Network",
    "ITC-false-SD": "Information Theory & Coding",
    "Maths-false-MK": "Maths",
    "WP-false-MD": "Web Programming"
};

var pracValues = {
    "AT-false-ARJ": "Automata Thoery",
    "COA-true": "Computer Organization & Architecture",
    "CN-true": "Computer Network",
    "ITC-false-SD": "Information Theory & Coding",
    "Maths-true": "Maths",
    "WP-true": "Web Programming"
};

var teachValues = {
    "teach1": "Teacher 1",
    "teach2": "Teacher 2",
};

var teach_arr = {};

teach_arr.COA = {
    "AV": "Anusha Vegesna",
    "NK": "Neha Katre"
};

teach_arr.COAprac = {
    "AV": "Anusha Vegesna",
    "NK": "Neha Katre"
};

teach_arr.CN = {
    "PK": "Pratik kanani",
    "TD": "Tanaya Dipnaik"
};

teach_arr.CNprac = {
    "PK": "Pratik kanani",
    "TD": "Tanaya Dipnaik"
};

teach_arr.Mathsprac = {
    "STC": "S. Chaudhari",
    "MK": "Manisha Keshab",
    "KS": "Kruti"
};

teach_arr.WPprac = {
    "MD": "Mitchel D'silva",
    "AJ": "Arjun Jaiswal"
};

// homes.sort(function(a,b) { return parseFloat(a.price) - parseFloat(b.price) } );

var period = 0;

function append_before(argument) {
    period++;

    $('#append_here').before('\
        <div class="section" id="period-' + period + '">\
            <div class="row">\
                <h5>New Period</h5>\
                <br>\
                <div class="col l2 m2 s4">\
                    <input name = "day-' + period + '" type="checkbox" id="mon' + period + '" value="0"/>\
                    <label for="mon' + period + '">Mon</label>\
                </div>\
                <div class="col l2 m2 s4">\
                    <input name = "day-' + period + '" type="checkbox" id="tue' + period + '" value="1"/>\
                    <label for="tue' + period + '">Tue</label>\
                </div>\
                <div class="col l2 m2 s4 ">\
                    <input name = "day-' + period + '" type="checkbox" id="wed' + period + '" value="2"/>\
                    <label for="wed' + period + '">Wed</label>\
                </div>\
                <div class="col l2 m2 s4 ">\
                    <input name = "day-' + period + '" type="checkbox" id="thu' + period + '" value="3"/>\
                    <label for="thu' + period + '">Thu</label>\
                </div>\
                <div class="col l2 m2 s4 ">\
                    <input name = "day-' + period + '" type="checkbox" id="fri' + period + '" value="4"/>\
                    <label for="fri' + period + '">Fri</label>\
                </div>\
                <div class="col l2 m2 s4 ">\
                    <input name = "day-' + period + '" type="checkbox" id="sat' + period + '" value="5"/>\
                    <label for="sat' + period + '">Sat</label>\
                </div>\
                <div class="input-field col l6 m6 s12">\
                    <input id="start-' + period + '" type="time" class="start-time">\
                    <label for="start-' + period + '" class="time-label">Start time.</label>\
                </div>\
                <div class="input-field col l6 m6 s12">\
                    <input id="end-' + period + '" type="time" class="end-time">\
                    <label for="end-' + period + '" class="time-label">End Time.</label>\
                </div>\
            </div>\
            <div class="row" id="ptype-' + period + '">\
                <div class="col l4 m4 s4">\
                    <input name="ptype-' + period + '" type="radio" id="radio-lec-' + period + '" value="lec" />\
                    <label for="radio-lec-' + period + '">Lecture</label>\
                </div>\
                <div class="col l4 m4 s4">\
                    <input name="ptype-' + period + '" type="radio" id="radio-prac_tut-' + period + '" value="prac_tut" />\
                    <label for="radio-prac_tut-' + period + '">Practical/Tutorial</label>\
                </div>\
            </div>\
        </div>\
        <div class="divider"></div>');
    ptype();
}

function uniq(a) {
    console.log('in uniq');
    return a.sort().filter(function(item, pos, ary) {
        return !pos || item != ary[pos - 1];
    })
}

function isArray(myArray) {
    return myArray.constructor.toString().indexOf("Array") > -1;
}

function create_objects(argument) {

    period_array = [];

    time_array = [];

    var batch_no = 4;

    var day_no = 6;
    $('#create-timetable').click(function(event) {

        console.log('In Click starting for loop');

        var period_no = 0;

        $("[id^=period-]").each(function(event) {

            period_no++;
        });

        console.log('period_no ' + period_no);

        for (var period = 1; period <= period_no; period++) {

            console.log('Outer loop period = ' + period);

            var start = $(document).find('#start-' + period).val();

            var end = $(document).find('#end-' + period).val();

            var type = $(document).find('[name="ptype-' + period + '"]:checked').val();

            console.log('actual type = ' + type);

            if (type == "lec") {

                console.log('type = lec');

                var sub_arr = $(document).find('#lec-' + period + '-sub-').val().split('-');

                var sub_arr_name = sub_arr[0];

                var teach_flag = sub_arr[1];

                var sub = sub_arr_name;

                if (teach_flag == "true") {

                    console.log('Lec teach true');

                    var teach = $(document).find('#lec-' + period + '-teach').val();

                } else {
                    var teach = sub_arr[2];
                }

            } else {

                var sub = "";

                var teach = "";

                console.log('type = prac');

                for (var batch = 1; batch <= batch_no; batch++) {

                    console.log('Inner loop period = ' + period + ' batch = ' + batch);

                    var sub_arr = $(document).find('#prac-' + period + '-batch-' + batch + '-sub-').val().split('-');

                    var sub_arr_name = sub_arr[0];

                    var teach_flag = sub_arr[1];
                    console.log('sub_arr_name ' + sub_arr_name);

                    sub += sub_arr_name + "/";

                    if (teach_flag == "true") {

                        console.log('prac teach true');

                        teach += $(document).find('#prac-' + period + '-teach-' + batch).val() + "/";

                    } else {
                        teach = sub_arr[2];
                    }
                }

                sub = sub.substring(0, sub.length - 1);

                teach = teach.substring(0, sub.length - 1);

                // teach = teach.substring(0, teach.length - 1);
            }

            console.log('Exiting Inner Loop');

            $('[name="day-' + period + '"]:checked').each(function() {

                console.log('Day Loop  Pushing values');

                var day_name = $(this).val();

                console.log('day ' + day_name);

                period_array.push({
                    start: start,
                    end: end,
                    day: day_name,
                    type: type,
                    sub: sub,
                    teach: teach
                });

                time_array.push(start);

                time_array.push(end);
            });
        }

        console.log('Exiting Loop Appending string');

        period_array.sort(function(a, b) {
            return parseFloat(a.start) - parseFloat(b.start)
        });

        time_array = uniq(time_array);

        $('#append_here').before(' ' + time_array.toString() + ' ');

        $('#append_here').before(JSON.stringify(period_array, null, 2));

    });
}

function switch_hide(argument) {

    $('[id^=switch]').change(function() {

        console.log('in switch toggle method');

        $(this).parent().parent().parent().nextAll().fadeToggle();

        console.log('element hidden');
    });
}

function ptype() {

    if ($('[id^=switch]').prop("checked")) {
        console.log('hello');
    }


    $('[name^=ptype]').change(function(event) {

        event.stopImmediatePropagation();

        var grand = $(this).parent().parent().children(':last');

        period = this.name.split('-')[1];

        if (!$(grand).hasClass('switch')) {
            $(this).parent().parent().append('<div class="col offset-l2 l2 m4 s1 offset-s2 switch" > <label>  <input type="checkbox" checked id="switch-' + period + '"> <span class="lever"></span>  </label> </div>');
            switch_hide();
        }

        console.log('In the input method!');

        if ($(this).val() == "lec") {

            $('#ptype-' + period).after($('<div class="row"></div>').attr('id', 'lec-' + period));

            $('#lec-' + period).append($('<select> </select>').attr({
                id: 'lec-' + period + '-sub-',
                class: 'lec'
            }));

            $('#lec-' + period + '-sub-').append($('<option disabled selected></option>').attr('value', '').text('Select Subject'));

            $.each(subValues, function(key, value) {

                $('#lec-' + period + '-sub-').append($('<option></option>').attr('value', key).text(value));
            });

            $('select#lec-' + period + '-sub-').wrap('<div class="col l6 m6 s12"></div>').material_select();

            for (batch = 4; batch > 0; batch--) {

                $('#prac-' + period + '-batch-' + batch).remove();
            }

            onLecSub();
        }

        if ($(this).val() == "prac_tut") {

            for (batch = 4; batch > 0; batch--) {

                $('#ptype-' + period).after($('<div class="row"></div>').attr('id', 'prac-' + period + '-batch-' + batch));

                $('#prac-' + period + '-batch-' + batch).append($('<select></select>').attr({
                    id: 'prac-' + period + '-batch-' + batch + '-sub-',
                    class: 'prac_tut'
                }));

                $('#prac-' + period + '-batch-' + batch + '-sub-').append($('<option disabled selected></option>').attr('value', '').text('Select Subject'));

                $.each(pracValues, function(key, value) {

                    $('#prac-' + period + '-batch-' + batch + '-sub-').append($('<option></option>').attr('value', key).text(value));
                });

                $('select#prac-' + period + '-batch-' + batch + '-sub-').wrap('<div class="col l5 m5 s12"></div>').material_select();

                $('#prac-' + period + '-batch-' + batch).append($('<div class="input-field col l2 m2 s12"></div>').append('<p class="padding-l6 grey-text">Batch ' + batch + '</p>'));
            }

            $('#lec-' + period).remove();

            onPracSub();
        }

        console.log("Input added after " + period);

    });

}

function onLecSub() {

    console.log('In the onLecSub method!');

    $('.lec').change(function(event) {

        var parent = $(this).parent().parent();

        var grand = $(parent).parent();

        var grandid = $(grand).attr('id');

        var grand_array = grandid.split("-");

        period = grand_array[1];

        var sub_arr = $(this).val().split('-');

        var sub_arr_name = sub_arr[0];

        var teach_flag = sub_arr[1];

        $(this).material_select();

        if (teach_flag == "true") {

            if ($(parent).next().hasClass("lec-teach")) {
                $(parent).next().empty();
            }

            console.log('We are going to add another Select element to the DOM ' + period);

            $('#lec-' + period).append($('<select> </select>').attr('id', 'lec-' + period + '-teach'));

            $('#lec-' + period + '-teach').append($('<option disabled selected></option>').attr('value', '').text('Select Teacher'));

            $.each(teach_arr[sub_arr_name], function(key, value) {

                $('#lec-' + period + '-teach').append($('<option></option>').attr('value', key).text(value));
            });

            $('select#lec-' + period + '-teach').wrap('<div class="col l6 m6 s12 lec-teach"></div>').material_select();

        } else if (teach_flag == "false" && $(parent).next().hasClass("lec-teach")) {

            var next = $(parent).next();

            console.log('lec-teach found removing teacher ' + $(next));

            $(next).remove();
        }
    });
}

function onPracSub() {

    console.log('In the onPracSub method!');

    $('.prac_tut').change(function(event) {

        var parent = $(this).parent().parent();

        var parentid = $(parent).attr('id');

        var grand_array = $(this).attr('id').split("-");

        period = grand_array[1];

        batch = grand_array[3];

        $(this).material_select();

        var sub_arr = $(this).val().split('-');

        var sub_arr_name = sub_arr[0] + 'prac';

        var teach_flag = sub_arr[1];

        if (teach_flag == "true") {

            if ($(parent).next().hasClass("prac-teach")) {
                $(parent).next().empty().remove();
            }

            console.log('No prac-teach found apedding teacher Select' + period);

            $(parent).after($('<select> </select>').attr('id', 'prac-' + period + '-teach-' + batch));

            $('#prac-' + period + '-teach-' + batch).append($('<option disabled selected></option>').attr('value', '').text('Select Teacher'));

            $.each(teach_arr[sub_arr_name], function(key, value) {

                $('#prac-' + period + '-teach-' + batch).append($('<option></option>').attr('value', key).text(value));
            });

            $('select#prac-' + period + '-teach-' + batch).wrap('<div class="col l5 m5 s12 prac-teach"></div>').material_select();

        } else if (teach_flag == "false" && $(parent).next().hasClass("prac-teach")) {

            var next = $(parent).next();

            console.log('prac-teach found removing teacher Select next ' + $(next));

            $(next).remove();
        }
    });
}

function span_value(start, end) {
    console.log('start span ' + start + '    end span ' + end);


    var start_index, end_index;
    for (var i = 0; i < time_array.length; i++) {
        if (time_array[i] == start)
            start_index = i;
        if (time_array[i] == end)
            end_index = i;
    }
    console.log('start_index ' + start_index);
    console.log('end_index ' + end_index);
    return end_index - start_index;
}

function create_timetable(argument) {

    $('#create-timetable').click(function(event) {

        event.stopImmediatePropagation();

        console.log('In create timetable');
        $('#timetable').after('<div class="container my-container">\
            <table class="centered bordered white">\
                <thead>\
                    <tr>\
                        <th data-field="id"><i class="mdi-device-access-time medium"></i></th>\
                        <th data-field="name">MONDAY</th>\
                        <th data-field="price">TUESDAY</th>\
                        <th data-field="name">WEDNESDAY</th>\
                        <th data-field="price">THURSDAY</th>\
                        <th data-field="name">FRIDAY</th>\
                        <th data-field="price">SATURDAY</th>\
                    </tr>\
                </thead>\
                <tbody id="tbody">\
                    <tr>\
                        <td>7:00-8:00</td>\
                        <td>Eclair</td>\
                        <td>$0.87</td>\
                        <td>Eclair</td>\
                        <td>$0.87</td>\
                        <td>Eclair</td>\
                        <td>$0.87</td>\
                    </tr>\
                    <tr>\
                        <td>8:00-9:00</td>\
                        <td>Jellybean</td>\
                        <td>$3.76</td>\
                        <td>Jellybean</td>\
                        <td>$3.76</td>\
                        <td>Jellybean</td>\
                        <td>$3.76</td>\
                    </tr>\
                    <tr>\
                        <td>9:30-10:30</td>\
                        <td>Lollipop</td>\
                        <td>$7.00</td>\
                        <td>Lollipop</td>\
                        <td>$7.00</td>\
                        <td>Lollipop</td>\
                        <td>$7.00</td>\
                    </tr>\
                </tbody>\
            </table>\
            </div>');
        var i = 0;

        while (i < time_array.length - 1) {

            var start = time_array[i];
            var k = i + 1;
            var end = time_array[k];

            $('#tbody').append('<tr id=' + start + '><td>' + start + ' - ' + end + '</td></tr>');

            for (var j = 0; j < 6; j++) {

                flag = false;

                for (var c = 0; c < period_array.length; c++) {
                    var p_day = period_array[c].day;
                    var p_start = period_array[c].start;
                    var p_end = period_array[c].end;

                    if (p_start == start && p_day == j) {

                        flag = true;

                        var sub = period_array[c].sub;

                        var p_end = period_array[c].end;

                        var teach = period_array[c].teach;

                        var span = span_value(p_start, p_end);

                        console.log('span ' + span);

                        var row = document.getElementById(start);
                        var x = row.insertCell(-1);
                        x.innerHTML = '<td>' + sub + '<br>(' + teach + ')</td>';
                        x.setAttribute("rowspan", span);
                    } else {

                        flag2 = false;

                        if (p_end == end && p_day == j)
                            flag2 = true;
                    }
                }
                if (flag == false && flag2 == false) {

                    var row = document.getElementById(start);
                    var x = row.insertCell(-1);
                    x.innerHTML = '<td>&nbsp</td>';

                }
            }
            i++;
        }
    });
}
