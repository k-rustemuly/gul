"use strict";
// const axios = require('axios');
var KTSigninGeneral = function () {
    var t,
        e,
        i;
    return {
        init: function () {
            t = document.querySelector("#kt_sign_in_form"),
            e = document.querySelector("#kt_sign_in_submit"),
            i = FormValidation.formValidation(t, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: t.getAttribute("data-email-not-empty")
                            },
                            emailAddress: {
                                message: t.getAttribute("data-email-address")
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: t.getAttribute("data-password-required")
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5(
                        {rowSelector: ".fv-row"}
                    )
                }
            }),
            e.addEventListener("click", (function (n) {
                n.preventDefault(),
                i.validate().then((function (i) {
                    "Valid" == i ? (e.setAttribute("data-kt-indicator", "on"), e.disabled =! 0, 
                    axios.post(t.getAttribute("data-url"), {
                        email: t.querySelector('[name="email"]').value,
                        password: t.querySelector('[name="password"]').value
                    })
                    .then(function (response) {
                        e.removeAttribute("data-kt-indicator"),
                        e.disabled = !1,
                        t.querySelector('[name="email"]').value = "",
                        t.querySelector('[name="password"]').value = "";
                        var i = t.getAttribute("data-kt-redirect-url");
                        i && (location.href = i)
                    })
                    .catch(function (error) {
                        Swal.fire({
                            text: error.message,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(){
                            e.removeAttribute("data-kt-indicator"),
                            e.disabled = !1
                        }))
                    })) : Swal.fire({
                        text: t.getAttribute("data-some-error"),
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTSigninGeneral.init()
}));
