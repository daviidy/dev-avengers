<style type="text/css">


.form-group {
    position: relative;
    margin-bottom: 1.5rem
}

.form-control-placeholder {
    /*position: absolute;
    top: 0;*/
    padding: 7px 0 0 13px;
    transition: all 200ms;
    /*opacity: 0.5;*/
    color: grey
}



/*.form-control .bo {
    background: transparent;
    border: none;
    border-bottom: 1px solid grey
}*/

input.form-control:focus,
input.form-control:after {
    outline-width: 0;
    border-bottom: 1px solid aqua;
    background: transparent
}

.modal-content {
    color: #000;

}

/*.modal-title {
    color: aqua
}
*/
.modal {
    background-color: #00000033;
}

.tc {
    font-size: 12px
}

.modal-footer {
    justify-content: center;
}

.signup {
    background: #D86000;
    background: linear-gradient(90deg, #D86000 0%, #007808 100%);
    border-radius: 34rem;
    border: none;
    color: white;
    font-size: 14px;
    font-weight: bold;
    height: 46px
}

.close {
    color: aqua;
    font-size: 12px;
    position: relative;
    top: 20px
}

/*h5 {
    font-size: 2rem;
    font-weight: 900
}*/

.title {
    font-size: 2.25rem;
    font-weight: 700
}

.x {
    color: grey;
    font-size: 40px;
    font-weight: 100;
    display: flex;
    flex-direction: row-reverse;
    top: 0
}

.btn.focus,
.btn:focus {
    outline: 0;
    box-shadow: none !important
}

.x.focus,
.x:focus {
    outline: 0;
    box-shadow: none !important
}
.ss-edit-profile-button:hover{background-color:#ffffff;border: 2px solid #D86000;}
.mb-2 {
    text-align: center!important;
    font-weight: 700;
}
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-4"> <button type="button" class="close x" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-header border-0 mb-2">
                <h5 class="modal-title" id="exampleModalLabel">Veuillez renseigner les informations ci-dessous avant de continuer</h5>
                <!--button type="button" class="close" aria-label="Close" disabled='true'>
                    <span aria-hidden="true">Log in</span>
                </button-->
            </div>
            <form class="" action="/addCountries" method="post">
                <div class="modal-body">
                    <!--h3 class="mb-4 title">New<br />Account</h3-->
                    <div class="form-group">
                        <label class="form-control-placeholder p-0" for="name lbl">Pays de résidence</label>
                        <input type="text" id="country_1" class="form-control " required style="box-shadow: none;border-radius:0px" name="">
                    </div>
                    <div class="form-group">
                        <label class="form-control-placeholder p-0" for="name">Pays d'origine</label>
                        <input type="text" id="country_3" class="form-control " required style="box-shadow: none;border-radius:0px" name="">
                    </div>
                    <div class="form-group">
                        <label class="form-control-placeholder p-0" for="password">Pays de naissance</label>
                        <input type="text" id="country_6" class="form-control " required style="box-shadow: none;border-radius:0px" name="">
                    </div>
                </div>
                <div class="modal-footer border-0 mb-4">
                    <button type="submit" class="btn signup col-6 col-md-6 ss-edit-profile-button" data-dismiss="modal">Envoyer</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="/plugin/build/js/countrySelect.min.js"></script>
<script>
  $("#country_1").countrySelect();
  $("#country_3").countrySelect();
  $("#country_6").countrySelect();
</script>
