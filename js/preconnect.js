/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function load() {
    var $, $$, before, pass, details, details2, signInButton, signUpButton, username, id2, Nombre2, priApe, segApe, Usuario2, pass2, err, valid, input, inputs;
    $ = document.querySelector.bind(document);
    $$ = document.querySelectorAll.bind(document);

    details = $$(".input-sign-in");
    details2 = $$(".input-sign-up");

    details.forEach((inp, idx) => {
        inp.onfocus = () => {
            $(".reg" + idx).style.width = "100%";
            $(".reg" + idx).style.border = "1px solid #ffffff";
        };
        inp.onblur = () => {
            $(".reg" + idx).style.width = "85%";
            $(".reg" + idx).style.border = "1px solid #ffffff95";
            validInput("error" + idx, "reg" + idx);
        };

        if (window.innerWidth >= 600) {
            inp.onfocus = () => {
                $(".reg" + idx).style.width = "100%";
                $(".reg" + idx).style.border = "3px solid #ffffff";
            };
            inp.onblur = () => {
                $(".reg" + idx).style.width = "85%";
                $(".reg" + idx).style.border = "3px solid #ffffff95";
                validInput("error" + idx, "reg" + idx);
            };
        }
    });

    details2.forEach((inp, idx) => {
        inp.onfocus = () => {
            $(".reg" + idx + "" + idx).style.width = "100%";
            $(".reg" + idx + "" + idx).style.border = "1px solid #ffffff";

        };
        inp.onblur = () => {

            $(".reg" + idx + "" + idx).style.width = "85%";
            $(".reg" + idx + "" + idx).style.border = "1px solid #ffffff95";
            validInput("error" + idx + "" + idx, "reg" + idx + "" + idx);

        };

        if (window.innerWidth >= 600) {
            inp.onfocus = () => {
                $(".reg" + idx + "" + idx).style.width = "100%";
                $(".reg" + idx + "" + idx).style.border = "3px solid #ffffff";

            };
            inp.onblur = () => {
                $(".reg" + idx + "" + idx).style.width = "85%";
                $(".reg" + idx + "" + idx).style.border = "3px solid #ffffff95";
                validInput("error" + idx + "" + idx, "reg" + idx + "" + idx);
            };
        }
    });

    $$(".sign").forEach((elem, ind, arr) => {
        elem.addEventListener("click", switchHeader);
        function switchHeader() {
            let a, color;
            if (ind != 0) {
                a = 50;
                fadeInSignUp();
            } else {
                a = 0;
                fadeInSignIn("fade");
            }


            $(".bottom-border").style.left = `${a}%`;
            arr[ind].style.setProperty("color", "#36EFCB");
            for (let i = 0; i < arr.length; i++) {
                if (i != ind)
                    arr[i].style.setProperty("color", "white");
            }
        }
    });


    errors = $$(".error");
    signInButton = $("#button");
    signUpButton = $("#button2");
    username = $("#username");
    pass = $("#password");

    //surname = $("#surname");
    id2 = $("#id2");
    Nombre2 = $("#Nombre2");
    priApe = $("#Apellidos2_1");
    segApe = $("#Apellidos2_2");
    Usuario2 = $("#Usuario2");
    pass2 = $("#password2");



    function invalidInput(err, input) {
        $("." + err).style.display = "block";
        $("." + input).style.borderColor = "#dd0909";
    }

    function validInput(valid, inputs) {
        $(`.${valid}`).style.display = "none";
        $(`.${inputs}`).style.borderColor = "#ffffff95";
    }



    function validateInput() {

        details.forEach((inp, idx) => {
            if (inp.value.trim == "" || !(inp.value)) {
                invalidInput("error" + idx, "reg" + idx);
                event.preventDefault();
            } else if (username.value == "" || username.value == " ") {
                invalidInput("error0", "reg0");


            } else if (pass.value == "" || pass.value == " ") {
                invalidInput("error1", "reg1");

            } else {
                return true;
            }
        });


        username.onfocus = () => {
            validInput("error0", "reg0");

        };
        pass.onfocus = () => {
            validInput("error1", "reg1");
        };

    }

    function validateInput2() {

        for (let i = 0; i < details2.length; i++) {

            if (details2[i].value.trim == "" || !(details2[i].value)) {
                invalidInput("error" + i + "" + i, "reg" + i + "" + i);
                event.preventDefault();
            } else if (id2.value == "" || id2.value == " ") {
                invalidInput("error00", "reg00");
            } else if (Nombre2.value == "" || Nombre2.value == " " || Nombre2.value == "a") {
                invalidInput("error11", "reg11");
            } else if (priApe.value == "" || priApe.value == " " || !(/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(priApe))) {
                invalidInput("error22", "reg22");
            } else if (segApe.value == "" || segApe.value == " " || !(/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(segApe))) {
                invalidInput("error33", "reg33");
            } else if (Usuario2.value == "" || Usuario2.value == " " || !(/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(Usuario2))) {
                invalidInput("error44", "reg44");
            } else if (pass2.value == "" || pass2.value == " " || !(/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(pass2))) {
                invalidInput("error55", "reg55");
            } else {
                return true;
            }
        }

        id2.onfocus = () => {
            validInput("error00", "reg00");
        };
        Nombre2.onfocus = () => {
            validInput("error11", "reg11");
        };
        priApe.onfocus = () => {
            validInput("error22", "reg22");
        };
        segApe.onfocus = () => {
            validInput("error33", "reg33");
        };
        Usuario2.onfocus = () => {
            validInput("error44", "reg44");
        };
        pass2.onfocus = () => {
            validInput("error55", "reg55");
        };
    }


    $("#form1").addEventListener("submit", validateInput);
    $("#form2").addEventListener("submit", validateInput2);

    $(".hide").addEventListener('click', () => {

        if (pass.type == "password") {
            pass.type = "text";
            $(".hide").classList.remove("fa-eye-slash");
            $(".hide").classList.add("fa-eye");
        } else {
            pass.type = "password";
            $(".hide").classList.remove("fa-eye");
            $(".hide").classList.add("fa-eye-slash");
        }

    });


    $(".hide2").addEventListener('click', () => {

        if (pass2.type == "password") {
            pass2.type = "text";
            $(".hide2").classList.remove("fa-eye-slash");
            $(".hide2").classList.add("fa-eye");
        } else {
            pass2.type = "password";
            $(".hide2").classList.remove("fa-eye");
            $(".hide2").classList.add("fa-eye-slash");
        }

    });



    let anim;
    function fadeInSignIn(anim) {
        $(".sign-up-wrapper").style.display = "none  ";
        $(".sign-in-wrapper").style.display = "flex";
        $(".sign-in-wrapper").classList.remove(anim);
        setTimeout(() => {
            $(".sign-in-wrapper").classList.add(anim);

            details.forEach((item, num) => {
                item.value = "";
                validInput("error" + num, "reg" + num);
            });
        }, 10);
    }

    function fadeInSignUp() {
        $(".sign-in-wrapper").style.display = "none  ";
        $(".sign-up-wrapper").style.display = "flex";
        $(".sign-up-wrapper").classList.remove("slide");
        setTimeout(() => {
            $(".sign-up-wrapper").classList.add("slide");

            details2.forEach((item, pos) => {
                item.value = "";
                validInput("error" + pos + "" + pos, "reg" + pos + "" + pos);
            });

        }, 10);
    }

    function fadeIn() {
        $(".sign-in-wrapper").classList.add("fade");
        $(".sign-in-wrapper").style.display = "flex";
        $(".sign-up-wrapper").style.display = "none";

    }
    fadeIn();

}

window.addEventListener("DOMContentLoaded", load);