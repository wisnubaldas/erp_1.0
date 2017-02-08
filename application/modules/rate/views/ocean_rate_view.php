<!--<div id="formcontent" xmlns="http://www.w3.org/1999/html">-->
<div id="page_content_inner">
    <div class="md-card">
        <div class="md-card-content">
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <form id="formrate" name="formrate" >
                        <div class="uk-grid uk-grid-divider">
                            <div class="uk-width-4-10">
                                <div class="md-input-wrapper">
                                    <label>Port Origin</label>
                                    <input class="md-input label-fixed k-input ordes" id="origin" >
                                    <input type="text" id="org" name="org" hidden>
                                    <span class="md-input-bar"></span>
                                </div>
                                <div class="md-input-wrapper">
                                    <label>Port Destination</label>
                                    <input class="md-input label-fixed k-input ordes" id="destination" >
                                    <input type="text" id="dst" name="dst" hidden>
<!--                                    <input type="text" id="idscheme" name="idscheme"  value="001" hidden>-->
                                    <span class="md-input-bar"></span>
                                </div>
                                <div class="md-input-wrapper">
                                    <label>Shipping Line</label>
                                    <input class="md-input label-fixed k-input"  type="text" id="portname">
                                    <input type="text" id="prt" name="prt" hidden>
                                    <span class="md-input-bar"></span>
                                </div>
                                <span class="uk-form-help-block md-color-pink-500" style="padding: 0px; margin: 0px;">Leave blank for ALL Shipping Line</span>
                            </div>
                            <!--    en of 4-10-->
                            <div class="uk-width-6-10">
                                <div id="priview">
                                    <ul class="md-list md-list-addon md-list-right">

                                    </ul>
                                </div>

                                <div id="viewOrigin">
                                    <ul class="md-list md-list-addon md-list-right">

                                    </ul>
                                </div>
                                <div id="viewdest">
                                    <ul class="md-list md-list-addon md-list-right">

                                    </ul>
                                </div>
                            </div>
                            <!--    end of 6-10-->
                            <div class="uk-width-1-1" style="text-align: right;">
                                <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" name="submit" id="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!--                    end of uk grid-->
                </div>
            </div>
            <!--</div>-->
<!--            ini harus di hidden-->
            <div class="md-card-content" id="viewratenya" hidden>
                <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-width-medium-1-1">
                            <a class="md-btn md-btn-warning md-btn-wave-light waves-effect waves-button waves-light" href="#" id="editsearch">Edit Search</a>
                        </div>
                        <hr class="horizontal" />
                        <!--                    tampilan heading nya -->
                        <div class="uk-grid">
                            <div class="uk-width-2-4">
                                <p class="uk-text-primary">Origin
                                    <span class="md-color-indigo-900" id="orgview" style="font-size: large; font-weight:bolder;"></span></br>
                                <span class="uk-text-primary">Destination
                                    <span style="font-size: large; font-weight:bolder;" class="md-color-indigo-900" id="dstview"></span>
                                </span>
                                </p>
                            </div>
                            <div class="uk-width-2-4">
                            <span class="uk-text-italic">Notes :
                            <ul class="uk-text-italic uk-text-small">
                                <li>Subject to change with / without prior notice</li>
                            </ul>
                            </span>
                            </div>
                        </div>
                        <!--buat tab-->
                        <div class="uk-width-1-1">
                            <div class="uk-width-1-1 uk-row-first">
                                <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1'}">
<!--                                    <li class="uk-active"><a href="">SCHEME <sup class="uk-badge uk-badge-notification uk-badge-danger" id="sup-001" style="padding: 0px; margin: 0px;"></sup></a></li>-->
                                </ul>
                                <ul id="tabs_1" class="uk-switcher uk-margin">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end content -->