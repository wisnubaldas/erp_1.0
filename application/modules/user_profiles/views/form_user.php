
            <form action="" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-large-10-10 uk-row-first">
                        <div class="md-card">
                            <div class="uk-sticky-placeholder" style="height: 130px; margin: 0px;"><div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }" style="margin: 0px;">
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="<?php echo base_url();?>asset/images/avatar.png" alt="user avatar" class="">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div class="user_avatar_controls">
                                        <span class="btn-file">
                                            <span class="fileinput-new"><i class="material-icons"></i></span>
                                            <span class="fileinput-exists"><i class="material-icons"></i></span>
                                            <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                        </span>
                                        <a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons"></i></a>
                                    </div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Rafles N</span><span class="sub-heading" id="user_edit_position">Raflesngln@gmail.com</span></h2>
                                </div>
                                <div class="md-fab-wrapper">
                                    <div class="md-fab md-fab-toolbar md-fab-small md-fab-accent">
                                        <i class="material-icons"></i>
                                        <div class="md-fab-toolbar-actions">
                                            <button type="submit" id="user_edit_save" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Save"><i class="material-icons md-color-white"></i></button>
                                            <button type="submit" id="user_edit_print" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Print"><i class="material-icons md-color-white"></i></button>
                                            <button type="submit" id="user_edit_delete" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Delete"><i class="material-icons md-color-white"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            <div class="user_content">
                                <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                                    <li class="uk-active" aria-expanded="true"><a href="#">General</a></li>
                                    <li aria-expanded="false"><a href="#">Password</a></li>
                                    
                                <li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false"><a>Basic</a><div class="uk-dropdown uk-dropdown-small"><ul class="uk-nav uk-nav-dropdown"></ul><div></div></div></li></ul>
                                <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                                    <li aria-hidden="false" class="uk-active">
                                        <div class="uk-margin-top">
                                            <h3 class="full_width_in_card heading_c">
                                                General info
                                            </h3>
                                            <div class="uk-grid" data-uk-grid-margin="">
                                                <div class="uk-width-medium-1-2 uk-row-first">
                                                    <div class="md-input-wrapper md-input-filled"><label for="user_edit_uname_control">User name</label><input class="md-input" type="text" id="user_edit_uname_control" name="user_edit_uname_control"><span class="md-input-bar"></span></div>
                                                    
                                                </div>
                                                <div class="uk-width-medium-1-2">
                                                    <div class="md-input-wrapper md-input-filled"><label for="user_edit_position_control">User position</label><input class="md-input" type="text" id="user_edit_position_control" name="user_edit_position_control"><span class="md-input-bar"></span></div>
                                                    
                                                </div>
                                            </div>
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <div class="md-input-wrapper md-input-filled"><label for="user_edit_personal_info_control">About</label><textarea class="md-input autosize_init" name="user_edit_personal_info_control" id="user_edit_personal_info_control" cols="30" rows="4" style="overflow: hidden; word-wrap: break-word; height: 121px;">Iste voluptas facere voluptatem sequi suscipit ea alias eos recusandae cumque quae architecto aut voluptatem sapiente ut rerum vitae aut et et rerum unde eum non aspernatur quod exercitationem ut soluta quisquam laboriosam natus voluptatem sed autem omnis consequuntur non facere ipsum.</textarea><span class="md-input-bar"></span></div>
                                                    
                                                </div>
                                            </div>

                                            <h3 class="full_width_in_card heading_c">
                                                Contact info
                                            </h3>
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin="">
                                                        <div class="uk-row-first">
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons"></i>
                                                                </span>
                                                                <div class="md-input-wrapper md-input-filled"><label>Email</label><input type="text" class="md-input" name="user_edit_email" value="sonya.schoen@carrollrodriguez.net"><span class="md-input-bar"></span></div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons"></i>
                                                                </span>
                                                                <div class="md-input-wrapper md-input-filled"><label>Phone Number</label><input type="text" class="md-input" name="user_edit_phone" value="076.727.2412"><span class="md-input-bar"></span></div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="uk-grid-margin uk-row-first">
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                                                </span>
                                                                <div class="md-input-wrapper md-input-filled"><label>Facebook</label><input type="text" class="md-input" name="user_edit_facebook" value="facebook.com/envato"><span class="md-input-bar"></span></div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="uk-grid-margin">
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-twitter"></i>
                                                                </span>
                                                                <div class="md-input-wrapper md-input-filled"><label>Twitter</label><input type="text" class="md-input" name="user_edit_twitter" value="twitter.com/envato"><span class="md-input-bar"></span></div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="uk-grid-margin uk-row-first">
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-linkedin"></i>
                                                                </span>
                                                                <div class="md-input-wrapper md-input-filled"><label>Linkdin</label><input type="text" class="md-input" name="user_edit_linkdin" value="linkedin.com/company/envato"><span class="md-input-bar"></span></div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="uk-grid-margin">
                                                            <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon uk-icon-google-plus"></i>
                                                                </span>
                                                                <div class="md-input-wrapper md-input-filled"><label>Google+</label><input type="text" class="md-input" name="user_edit_google_plus" value="plus.google.com/+envato/about"><span class="md-input-bar"></span></div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li aria-hidden="true">
                                        <p class="uk-text-muted uk-text-small">Move the draggable group by clicking and holding handler and drag it to other list.</p>
                                        <div class="uk-grid" data-uk-grid-margin="">
                                            <div class="uk-width-medium-1-2">
                                                <h4 class="heading_c uk-margin-small-bottom">My groups</h4>
                                                <ul class="md-list md-list-addon uk-sortable groups_connected" id="user_groups">
                                                    <li data-group-id="1">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Cloud Computing</a></span>
                                                            <span class="uk-text-small uk-text-muted">193 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="2">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Account Manager Group</a></span>
                                                            <span class="uk-text-small uk-text-muted">132 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="3">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Digital Marketing</a></span>
                                                            <span class="uk-text-small uk-text-muted">179 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="4">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">HR Professionals Association - Human Resources</a></span>
                                                            <span class="uk-text-small uk-text-muted">152 Members</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <h4 class="heading_c uk-margin-small-bottom">All Groups</h4>
                                                <ul class="md-list md-list-addon uk-sortable groups_connected" id="all_groups">
                                                    <li data-group-id="5">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Biotech &amp; Pharma Professionals Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">48 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="6">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">The IT Sales Global Community</a></span>
                                                            <span class="uk-text-small uk-text-muted">202 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="7">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Healthcare Executives Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">196 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="8">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Luxury &amp; Lifestyle Professionals</a></span>
                                                            <span class="uk-text-small uk-text-muted">67 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="9">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Information Security Community</a></span>
                                                            <span class="uk-text-small uk-text-muted">284 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="10">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">eMarketing Association Network</a></span>
                                                            <span class="uk-text-small uk-text-muted">83 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="11">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Finance Club</a></span>
                                                            <span class="uk-text-small uk-text-muted">96 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="12">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Banking Careers</a></span>
                                                            <span class="uk-text-small uk-text-muted">53 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="13">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Java Developers</a></span>
                                                            <span class="uk-text-small uk-text-muted">74 Members</span>
                                                        </div>
                                                    </li>
                                                    <li data-group-id="14">
                                                        <div class="md-list-addon-element sortable-handler">
                                                            <i class="md-list-addon-icon material-icons"></i>
                                                        </div>
                                                        <div class="md-list-content">
                                                            <span class="md-list-heading"><a href="#">Information Technology: Software, Hardware, Computer, Developer, Cloud &amp; Engineering</a></span>
                                                            <span class="uk-text-small uk-text-muted">106 Members</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <input name="user_groups_control" id="user_groups_control" type="hidden" value="[{&quot;group-id&quot;:1},{&quot;group-id&quot;:2},{&quot;group-id&quot;:3},{&quot;group-id&quot;:4}]">
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </form>
