
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
              <li class="user-details cyan darken-2">
                  <div class="row">
                      <div class="col col s4 m4 l4">
                          <img src="assets/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                      </div>
                      <div class="col col s8 m8 l8">
                          <ul id="profile-dropdown" class="dropdown-content">
                                        <li class="divider"></li>
                              <li><a href="admin_profile.php"><i class="mdi-action-face-unlock"></i> Profile</a>
                              </li>

                                                 <li><a href="change_adminpass.php"><i class="mdi-action-settings"></i>Setting</a>
                              </li>

         <li class="divider"></li>
                              <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i>Logout</a>
                              </li>
                          </ul>
                          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION['username']; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                          <p class="user-roal"><?php echo $_SESSION['usertype']; ?></p>
                      </div>
                  </div>
              </li>
              <li class="bold"><a href="index.php" class="waves-effect waves-teal"><i class="mdi-action-dashboard"></i> Dashboard</a>
              </li>
              <li class="bold"><a href="alluser.php" class="waves-effect waves-teal"><i class="mdi-social-people "></i> All User</a>
              </li>


                <li class="bold"><a href="help.php" class="waves-effect waves-teal"><i class="mdi-communication-live-help"></i> Help</a>
                      </li>
                        <li class="bold"><a href="reset_status.php" class="waves-effect waves-teal"><i class="mdi-communication-live-help"></i> Reset Status</a>
                      </li>
            
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                 
                      <li class="bold"><a class="collapsible-header waves-effect waves-teal">
                      <i class="mdi-editor-format-list-bulleted "></i> Database </a>
                          <div class="collapsible-body">
                              <ul>
                                  <li><a class="waves-effect waves-teal" href="user_data.php"><i class="mdi-action-perm-identity  "></i>User Data</a>
                                  
                                  </li>                                        
                                  <li><a class="waves-effect waves-teal" href="alladmin.php"><i class="mdi-action-account-box  "></i>Admin</a>
                                  </li>
                                  <li><a class="waves-effect waves-teal" href="location.php"><i class="mdi-maps-place "></i> Location</a>
                                  </li>
                                  <li><a class="waves-effect waves-teal" href="user_response.php"><i class="mdi-communication-textsms "></i>User Response</a>


                                  </li>
                                  <li><a href="alertnotice.php"><i class="mdi-alert-warning"></i>Alert Notice</a>


                                  </li>
                              </ul>
                          </div>
                      </li>  
                     
 
                      <li class="bold"><a href="logout.php" class="waves-effect waves-teal"><i class="mdi-action-info-outline"></i> Log Out</span></a>
                      </li>
                  </ul>
              </li>
             
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
