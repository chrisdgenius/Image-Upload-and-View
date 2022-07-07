var pageTitle="Posting";
function progress(button_id) {
    $("#" + button_id).toggleClass('running');
}
function shake(element_id) {
    $("#" + element_id).effect("shake");
}
function process_signup(element, form_info) {
    this.fdata = {};
    this.fdata['t'] = form_info.tn;
    for (var item in element) {
        var elem = element[item];
        console.log(elem);
        switch (elem.type) {
            case 'email':
                this.fdata["" + elem.info.id] = $("#" + elem.info.id).val();
                break;
            case 'text':
                this.fdata["" + elem.info.id] = $("#" + elem.info.id).val();
                break;
            case 'password':
                this.fdata["" + elem.info.id] = $("#" + elem.info.id).val();
                break;
            case 'select':

                //    var e = document.getElementById("#"+elem.info.id);
                //     this.fdata[""+elem.info.id ]= e.options(e.selectedIndex).value;


                break;
            case 'checkbox':
                this.fdata["" + elem.info.id] = $("#" + elem.info.id).is(":checked");
                if (elem.info.required == 'yes')
                {
                    if (this.fdata["" + elem.info.id] != true) {
                        shake(form_info.id);
                        $("#resp").text("Something is missing");
                        $("#" + elem.info.id).css("background", "red");
                        return;
                    }
                }
                break;
            default:

                break;
        }
    }
    console.log("result");
    console.log(this.fdata);
    progress("submit");
    $.post(formdata.url, this.fdata, function (resp) {
        progress("submit");
        console.log(resp);
        var res = JSON.parse(resp);
        $('#resp').html(res.message);
        if (res.status == 1) {
            // console.log("yes");
            $('#resp').css("color", "green");
        }
    });
}
function process_login() {
    this.process = function (element, form_info) {
        this.fdata = {};
        this.fdata['t'] = form_info.tn;
        for (var item in element) {
            var elem = element[item];
            console.log(elem);
            switch (elem.type) {
                case 'email':
                    this.fdata["" + elem.info.id] = $("#" + elem.info.id).val();
                    break;
                case 'text':
                    this.fdata["" + elem.info.id] = $("#" + elem.info.id).val();
                    break;
                case 'password':
                    this.fdata["" + elem.info.id] = $("#" + elem.info.id).val();
                    break;
                case 'select':

                    //    var e = document.getElementById("#"+elem.info.id);
                    //     this.fdata[""+elem.info.id ]= e.options(e.selectedIndex).value;


                    break;
                case 'checkbox':
                    this.fdata["" + elem.info.id] = $("#" + elem.info.id).is(":checked");
                    if (elem.info.required == 'yes')
                    {
                        if (this.fdata["" + elem.info.id] != true) {
                            shake(form_info.id);
                            $("#resp").text("Something is missing");
                            $("#" + elem.info.id).css("background", "red");
                            return;
                        }
                    }
                    break;
                default:

                    break;
            }
        }
        console.log("result");
        console.log(this.fdata);
        progress("submit");
        $.post(formdata.url, this.fdata, function (resp) {
            progress("submit");
            console.log(resp);
            var res = JSON.parse(resp);
            $('#resp').html(res.message);
            if (res.status == 1) {
                // console.log("yes");
                $('#resp').css("color", "green");
                var token = res.token;
                var mys = window.localStorage;
                if (res.save == 1)
                    mys.setItem("token", token);
                window.location.href = res.redirect + token;
            }
        });
    }
}

function sync_single_field(info_data) {
    let pa_data = info_data.data;
    let jpa_data = JSON.stringify(pa_data);
    let pa_url = info_data.url;

    console.log(pa_data);
    console.log(pa_url);
    $.post(pa_url, {'data': jpa_data}, function (resp) {
        console.log(resp);
        let res = JSON.parse(resp);
        console.log(res);
        window[res.fuc + ""](res.data, res.container);
    });
}

function set_get() {
    let str = window.location.href;
    if (str.includes("editor")) {
        // alert(str);
        let res = str.split("/");
        //console.log(res);
        return res[res.length - 2];
    } else {
        let res = str.split("/");
        return res[res.length - 1];
    }
}
function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    if (dict[result] == undefined) {
        return result;
    } else
    {
        makeid(5);
    }
}
function getFormData($form) {
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};
    $.map(unindexed_array, function (n, i) {
        indexed_array[n['name']] = n['value'];
    });
    return indexed_array;
}

function copyToClipboard(text) {
    if (window.clipboardData && window.clipboardData.setData) {
        // Internet Explorer-specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text);

    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in Microsoft Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
        }
    }
}

function appCopyToClipBoard(sText)
{
    var oText = false,
            bResult = false;
    try
    {
        oText = document.createElement("textarea");
        $(oText).addClass('clipboardCopier').val(sText).insertAfter('#gallary').focus();
        oText.select();
        document.execCommand("Copy");
        bResult = true;
       // notify("Link copied",pageTitle)
    } catch (e) {
    }
    $(oText).remove();
    return bResult;
}

function notify(text, title, type = "info") {
    $.notify({
        // options
        //  icon: icon,
        title: title,
        message: text,
        //  url: url,
        target: '_blank'
    }, {
        // settings
        element: 'body',
        position: null,
        type: type,
        allow_dismiss: true,
        newest_on_top: true,
        showProgressbar: false,
        placement: {
            from: "top",
            align: "right"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 5000,
        timer: 1000,
        url_target: '_blank',
        mouse_over: null,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        },
        onShow: null,
        onShown: null,
        onClose: null,
        onClosed: null


    });
    /*
     *    icon_type: 'class',
     template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
     '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
     '<span data-notify="icon"></span> ' +
     '<span data-notify="title">{1}</span> ' +
     '<span data-notify="message">{2}</span>' +
     '<div class="progress" data-notify="progressbar">' +
     '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
     '</div>' +
     '<a href="{3}" target="{4}" data-notify="url"></a>' +
     '</div>'
     */
}
function escapeRegExp(str) {
    return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}
async function post_data(data, url) {
    let pdata = await  $.post(url, {data: data}, function (resp) {
        return resp;
    });
    return pdata;
}
 function post_data1(data, url) {
   return post_data(data, url).then(resp=>{return resp});
}
function post_data2(data, url) {
   return post_data_raw(data, url).then(resp=>{return resp});
}

async function post_data_raw(data, url) {
    let pdata = await  $.post(url, data, function (resp) {
        return resp;
    });
    return pdata;
}