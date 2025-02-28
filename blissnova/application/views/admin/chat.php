<?php include 'header.php';?>      
<!-- Page CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/app-chat.css" />
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="app-chat card overflow-hidden">
      <div class="row g-0">
         <!-- Sidebar Left -->
         <?php $admin_profile=$this->db->select('profile_image')->where('user_type','a')->get('user_role')->row()->profile_image?>
         <!--<div class="col app-chat-sidebar-left app-sidebar overflow-hidden" id="app-chat-sidebar-left">-->
         <!--   <div-->
         <!--      class="chat-sidebar-left-user sidebar-header d-flex flex-column justify-content-center align-items-center flex-wrap px-4 pt-5">-->
         <!--      <div class="avatar avatar-xl avatar-online w-px-75 h-px-75">-->
         <!--         <img src="<?=BASEURL?>assets/images/users/profile.jpg" alt="Avatar" class="rounded-circle" />-->
         <!--      </div>-->
         <!--      <h5 class="mt-3 mb-1 fw-semibold">John Doe</h5>-->
         <!--      <span>UI/UX Designer</span>-->
         <!--      <i-->
         <!--         class="mdi mdi-close mdi-20px cursor-pointer close-sidebar"-->
         <!--         data-bs-toggle="sidebar"-->
         <!--         data-overlay-->
         <!--         data-target="#app-chat-sidebar-left"></i>-->
         <!--   </div>-->
         <!--   <div class="sidebar-body px-4 pb-4">-->
         <!--      <div class="my-4 pt-2">-->
         <!--         <label for="chat-sidebar-left-user-about" class="text-uppercase">About</label>-->
         <!--         <textarea-->
         <!--            id="chat-sidebar-left-user-about"-->
         <!--            class="form-control chat-sidebar-left-user-about mt-3"-->
         <!--            rows="3"-->
         <!--            maxlength="120">-->
         <!--         Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea-->
         <!--            >-->
         <!--      </div>-->
         <!--      <div class="my-4">-->
         <!--         <p class="text-uppercase">Status</p>-->
         <!--         <div class="d-grid gap-2">-->
         <!--            <div class="form-check form-check-success">-->
         <!--               <input-->
         <!--                  name="chat-user-status"-->
         <!--                  class="form-check-input"-->
         <!--                  type="radio"-->
         <!--                  value="active"-->
         <!--                  id="user-active"-->
         <!--                  checked />-->
         <!--               <label class="form-check-label" for="user-active">Active</label>-->
         <!--            </div>-->
         <!--            <div class="form-check form-check-danger">-->
         <!--               <input-->
         <!--                  name="chat-user-status"-->
         <!--                  class="form-check-input"-->
         <!--                  type="radio"-->
         <!--                  value="busy"-->
         <!--                  id="user-busy" />-->
         <!--               <label class="form-check-label" for="user-busy">Busy</label>-->
         <!--            </div>-->
         <!--            <div class="form-check form-check-warning">-->
         <!--               <input-->
         <!--                  name="chat-user-status"-->
         <!--                  class="form-check-input"-->
         <!--                  type="radio"-->
         <!--                  value="away"-->
         <!--                  id="user-away" />-->
         <!--               <label class="form-check-label" for="user-away">Away</label>-->
         <!--            </div>-->
         <!--            <div class="form-check form-check-secondary">-->
         <!--               <input-->
         <!--                  name="chat-user-status"-->
         <!--                  class="form-check-input"-->
         <!--                  type="radio"-->
         <!--                  value="offline"-->
         <!--                  id="user-offline" />-->
         <!--               <label class="form-check-label" for="user-offline">Offline</label>-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--      <div class="my-4">-->
         <!--         <p class="text-uppercase">Settings</p>-->
         <!--         <ul class="list-unstyled d-grid gap-3 me-3 ms-2 ps-1">-->
         <!--            <li class="d-flex justify-content-between align-items-center">-->
         <!--               <div>-->
         <!--                  <i class="mdi mdi-check-circle-outline me-1"></i>-->
         <!--                  <span class="align-middle">Two-step Verification</span>-->
         <!--               </div>-->
         <!--               <label class="switch switch-primary me-4">-->
         <!--               <input type="checkbox" class="switch-input" checked="" />-->
         <!--               <span class="switch-toggle-slider">-->
         <!--               <span class="switch-on"></span>-->
         <!--               <span class="switch-off"></span>-->
         <!--               </span>-->
         <!--               </label>-->
         <!--            </li>-->
         <!--            <li class="d-flex justify-content-between align-items-center">-->
         <!--               <div>-->
         <!--                  <i class="mdi mdi-bell-outline me-1"></i>-->
         <!--                  <span class="align-middle">Notification</span>-->
         <!--               </div>-->
         <!--               <label class="switch switch-primary me-4">-->
         <!--               <input type="checkbox" class="switch-input" />-->
         <!--               <span class="switch-toggle-slider">-->
         <!--               <span class="switch-on"></span>-->
         <!--               <span class="switch-off"></span>-->
         <!--               </span>-->
         <!--               </label>-->
         <!--            </li>-->
         <!--            <li>-->
         <!--               <i class="mdi mdi-account-outline me-1"></i>-->
         <!--               <span class="align-middle">Invite Friends</span>-->
         <!--            </li>-->
         <!--            <li>-->
         <!--               <i class="mdi mdi-delete-outline me-1"></i>-->
         <!--               <span class="align-middle">Delete Account</span>-->
         <!--            </li>-->
         <!--         </ul>-->
         <!--      </div>-->
         <!--      <div class="d-flex mt-4">-->
         <!--         <button-->
         <!--            class="btn btn-primary"-->
         <!--            data-bs-toggle="sidebar"-->
         <!--            data-overlay-->
         <!--            data-target="#app-chat-sidebar-left">-->
         <!--         Logout-->
         <!--         </button>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <!-- /Sidebar Left-->
         <!-- Chat & Contacts -->
         <div
            class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end"
            id="app-chat-contacts">
            <div class="sidebar-header py-3 px-4 border-bottom">
               <div class="d-flex align-items-center me-3 me-lg-0">
                  <div
                     class="flex-shrink-0 avatar avatar-online me-3"
                     data-bs-toggle="sidebar"
                     data-overlay="app-overlay-ex"
                     data-target="#app-chat-sidebar-left">
                     <img
                        class="user-avatar rounded-circle cursor-pointer"
                        src="<?=BASEURL?>assets/images/<?=$admin_profile?>"
                        alt="Avatar" />
                  </div>
                  <div class="flex-grow-1 input-group input-group-merge rounded-pill">
                     <span class="input-group-text" id="basic-addon-search31"
                        ><i class="mdi mdi-magnify lh-1"></i
                        ></span>
                     <input
                        type="text"
                        class="form-control chat-search-input"
                        placeholder="Search..."
                        aria-label="Search..."
                        aria-describedby="basic-addon-search31" />
                  </div>
               </div>
               <i
                  class="mdi mdi-close mdi-20px cursor-pointer position-absolute top-0 end-0 mt-2 me-2 fs-4 d-lg-none d-block"
                  data-overlay
                  data-bs-toggle="sidebar"
                  data-target="#app-chat-contacts"></i>
            </div>
             
            <div class="sidebar-body">
               <!-- Chats -->
               <ul class="list-unstyled chat-contact-list" id="chat-list">
                  <li class="chat-contact-list-item chat-contact-list-item-title">
                     <h5 class="text-primary mb-0">Chats</h5>
                  </li>
                  <li class="chat-contact-list-item chat-list-item-0 d-none">
                     <h6 class="text-muted mb-0">No Chats Found</h6>
                  </li>
                  <?php $chatsuser=$this->db->group_by('sender_id')->where('sender_id !=','Blissadmin')->get('chat_messages')->result_array();
                     foreach($chatsuser as $key => $senduser){
                         $username=$this->db->where('username',$senduser['sender_id'])->get('user_role')->row_array();
                         $unread=$this->db->where('sender_id',$senduser['sender_id'])->where('status','Unread')->count_all_results('chat_messages');
                         
                         if($unread=="Unread"){
                             $read="online";
                         }else{
                             $read="";
                         }
                         
                         $user_profile=$this->db->select('profile_image')->where('username',$senduser['sender_id'])->get('user_role')->row()->profile_image;
                         $badgecount = $this->db->where('sender_id',$senduser['sender_id'])->where('status=','Unread')->count_all_results('chat_messages')+0;
                     ?>
                     
                  <li class="chat-contact-list-item">
                     <a class="d-flex align-items-center" href="<?=BASEURL?>admin/chat/<?=$senduser['sender_id']?>">
                        <div class="flex-shrink-0 avatar avatar-<?=$read?>">
                           <img src="<?=BASEURL?>assets/images/<?=$user_profile?>" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="chat-contact-info flex-grow-1 ms-3">
                           <h6 class="chat-contact-name text-truncate m-0"><?=$username['first_name'].$username['last_name']?></h6>
                           <p class="chat-contact-status text-truncate mb-0"><?=$senduser['sender_id']?></p>
                        </div>
                        <?php $last_msg=$this->db->select('date')->order_by('id','desc')->limit(1)->where('sender_id',$senduser['sender_id'])->get('chat_messages')->row()->date;?>
                         <small class="text-muted mb-auto"><?=date('d-m-y',strtotime($last_msg))?></small>
                         <br>
                        <small class="text-muted mb-auto"><?=date('h:i A',strtotime($last_msg))?></small>
                   <?php
                    if ($badgecount > 0) {
                        echo '<div class="badge bg-success rounded-pill ms-auto">' . $badgecount . '</div>';
                    } else {
                        echo "";
                    }
                    ?>
                         
                     </a>
                  </li>
                  <?php
                     }?>
               </ul>
               <!-- Contacts -->
               <ul class="list-unstyled chat-contact-list" id="contact-list">
                  <li class="chat-contact-list-item chat-contact-list-item-title">
                     <h5 class="text-primary mb-0">Contacts</h5>
                  </li>
                  <li class="chat-contact-list-item contact-list-item-0 d-none">
                     <h6 class="text-muted mb-0">No Contacts Found</h6>
                  </li>
                  <?php
                     $totaluser =$this->db->where('user_type','u')->get('user_role')->result_array();
                     
                     foreach($totaluser as $key =>$contactuser){?>
                  <li class="chat-contact-list-item">
                     <a class="d-flex align-items-center" href="<?=BASEURL?>admin/chat/<?=$contactuser['username']?>">
                        <div class="flex-shrink-0 avatar">
                           <img src="<?=BASEURL?>assets/images/<?=$contactuser['profile_image']?>" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="chat-contact-info flex-grow-1 ms-3">
                           <h6 class="chat-contact-name text-truncate m-0"><?=$contactuser['first_name'].$user['last_name']?></h6>
                           <p class="chat-contact-status text-truncate mb-0"><?=$contactuser['username']?></p>
                        </div>
                     </a>
                  </li>
                  <?php
                     }?>
               </ul>
            </div>
         </div>
         <!-- /Chat contacts -->
         
         
         
         
         <!-- Chat History -->
         <?php $user=$this->db->where('username',$sender_id)->get('user_role')->row_array(); 
         if($sender_id==""){
             $co_image=$admin_profile;
         }else{
             $co_image=$user['profile_image'];
         }
         ?>
                           <div class="col app-chat-history">
                    <div class="chat-history-wrapper">
                      <div class="chat-history-header border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="d-flex overflow-hidden align-items-center">
                            <i
                              class="mdi mdi-menu mdi-24px cursor-pointer d-lg-none d-block me-3"
                              data-bs-toggle="sidebar"
                              data-overlay
                              data-target="#app-chat-contacts"></i>
                            <div class="flex-shrink-0 avatar avatar-online">
                              <img
                                src="<?=BASEURL?>assets/images/<?=$co_image?>"
                                alt="Avatar"
                                class="rounded-circle"
                                data-bs-toggle="sidebar"
                                data-overlay
                                data-target="#app-chat-sidebar-right">
                            </div>

                            <div class="chat-contact-info flex-grow-1 ms-3">
                              <h6 class="m-0"><?=$user['username']?></h6>
                              <span class="user-status text-body"><?=$user['first_name']?> <?=$user['last_name']?></span>
                            </div>
                          </div>
                          <!--<div class="d-flex align-items-center">-->
                          <!--  <i-->
                          <!--    class="mdi mdi-phone-outline mdi-24px cursor-pointer d-sm-block d-none me-1 btn btn-text-secondary btn-icon rounded-pill"></i>-->
                          <!--  <i-->
                          <!--    class="mdi mdi-video-outline mdi-24px cursor-pointer d-sm-block d-none me-1 btn btn-text-secondary btn-icon rounded-pill"></i>-->
                          <!--  <i-->
                          <!--    class="mdi mdi-magnify mdi-24px cursor-pointer d-sm-block d-none me-1 btn btn-text-secondary btn-icon rounded-pill"></i>-->
                          <!--  <div class="dropdown">-->
                          <!--    <i-->
                          <!--      class="mdi mdi-dots-vertical cursor-pointer mdi-24px"-->
                          <!--      id="chat-header-actions"-->
                          <!--      data-bs-toggle="dropdown"-->
                          <!--      aria-haspopup="true"-->
                          <!--      aria-expanded="false">-->
                          <!--    </i>-->
                          <!--    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="chat-header-actions">-->
                          <!--      <a class="dropdown-item" href="javascript:void(0);">View Contact</a>-->
                          <!--      <a class="dropdown-item" href="javascript:void(0);">Mute Notifications</a>-->
                          <!--      <a class="dropdown-item" href="javascript:void(0);">Block Contact</a>-->
                          <!--      <a class="dropdown-item" href="javascript:void(0);">Clear Chat</a>-->
                          <!--      <a class="dropdown-item" href="javascript:void(0);">Report</a>-->
                          <!--    </div>-->
                          <!--  </div>-->
                          <!--</div>-->
                        </div>
                      </div>
                      <div class="chat-history-body">
                 <?php foreach($sender as $key=>$chats) { ?>    
                        <ul class="list-unstyled chat-history">
                       
                   <!--chat right-->    
                 
                          <li class="chat-message chat-message-right">
                              
                    <?php   
                    if(!empty($chats['receive_msg'])){ ?>
                    
                            <div class="d-flex overflow-hidden">
                              <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">
                                  <p class="mb-0"><?=$chats['receive_msg']?></p>
                                </div>
                                <div class="text-end text-muted">
                                  <i class="mdi mdi-check-all mdi-14px text-success me-1"></i>
                                  <small><?=(new DateTime($chats['date']))->format('F j, Y h:i A')?></small>
                                </div>
                              </div>
                              <div class="user-avatar flex-shrink-0 ms-3">
                               <div class="avatar avatar-sm">
                                   <img src="<?=BASEURL?>assets/images/<?=$admin_profile?>" alt="Avatar" class="rounded-circle">
                                </div>
                              </div>
                            </div>
                             <?php   } ?>
                          </li>
                          
                <!--chat left-->
                          <li class="chat-message">
                              
                   
                  <?php  if(!empty($chats['send'])){ ?>
                            <div class="d-flex overflow-hidden">
                              <div class="user-avatar flex-shrink-0 me-3">
                               <div class="avatar avatar-sm">
                                 
                                  <img src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>" alt="Avatar" class="rounded-circle">
                                </div>
                              </div>
                              <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">
                                  <p class="mb-0"><?=$chats['send']?></p>
                                </div>
                                <div class="text-muted">
                                  <small><?=(new DateTime($chats['date']))->format('F j, Y h:i A')?></small>
                                </div>
                              </div>
                            </div>
                            <?php   } ?>
                          </li>
                          
                          
                         
                     </ul>
                      <?php } ?>
                      </div>
                      <!-- Chat message form -->
                   <div class="chat-history-footer" <?php if ($sender_id == "") { echo "hidden"; } ?>>

             <?php
              $admin=$this->session->userdata('ablisusername');
             $checkusermessage=$this->db->where('sender_id',$sender_id)->count_all_results('chat_messages')+0;
             
             
             if($checkusermessage>0){
                 $msgsender=$chats['sender_id'];
             }else{
                 $msgsender=$sender_id;
             }
             ?>
                         <?=form_open_multipart('admin/send_message')?>
                          <div class="d-flex">
                          <input
                            class="form-control message-input me-3 shadow-none"
                            placeholder="Type your message here" type="text" name="message">
                           <input type="hidden" name="sender" value="<?=$admin?>">
                           <input type="hidden" name="receiver" value="<?=$msgsender?>">
                          <div class="message-actions d-flex align-items-center">
                            <!--<i-->
                            <!--  class="btn btn-text-secondary btn-icon rounded-pill speech-to-text mdi mdi-microphone mdi-20px cursor-pointer"></i>-->
                            <!--<label for="attach-doc" class="form-label mb-0">-->
                              <!--<i-->
                              <!--  class="mdi mdi-paperclip mdi-20px cursor-pointer btn btn-text-secondary btn-icon rounded-pill me-2 ms-1"></i>-->
                              <!--<input type="file" id="attach-doc" hidden />-->
                            </label>
                            <button type="submit" class="btn btn-primary d-flex send-msg-btn">
                              <span class="align-middle">Send</span>
                            </button>
                          </div>
                          </div>
                        <?=form_close()?>
                      </div>
                    </div>
                  </div>
         <!-- /Chat History -->
         <!-- Sidebar Right -->
         <!--<div class="col app-chat-sidebar-right app-sidebar overflow-hidden" id="app-chat-sidebar-right">-->
         <!--   <div-->
         <!--      class="sidebar-header d-flex flex-column justify-content-center align-items-center flex-wrap px-4 pt-5">-->
         <!--      <div class="avatar avatar-xl avatar-online w-px-75 h-px-75">-->
         <!--         <img src="<?=BASEURL?>assets/images/users/profile.jpg" alt="Avatar" class="rounded-circle" />-->
         <!--      </div>-->
         <!--      <h5 class="mt-3 mb-1 fw-semibold">Felecia Rower</h5>-->
         <!--      <span>NextJS Developer</span>-->
         <!--      <i-->
         <!--         class="mdi mdi-close mdi-20px cursor-pointer close-sidebar d-block"-->
         <!--         data-bs-toggle="sidebar"-->
         <!--         data-overlay-->
         <!--         data-target="#app-chat-sidebar-right"></i>-->
         <!--   </div>-->
         <!--   <div class="sidebar-body px-4">-->
         <!--      <div class="my-4 pt-2">-->
         <!--         <p class="text-uppercase mb-2">About</p>-->
         <!--         <p class="mb-0">-->
         <!--            A Next. js developer is a software developer who uses the Next. js framework alongside ReactJS-->
         <!--            to build web applications.-->
         <!--         </p>-->
         <!--      </div>-->
         <!--      <div class="my-4 py-1">-->
         <!--         <p class="text-uppercase mb-2">Personal Information</p>-->
         <!--         <ul class="list-unstyled d-grid gap-3 mb-0 ms-2 ps-1">-->
         <!--            <li class="d-flex align-items-center">-->
         <!--               <i class="mdi mdi-email-outline"></i>-->
         <!--               <span class="align-middle ms-2">josephGreen@email.com</span>-->
         <!--            </li>-->
         <!--            <li class="d-flex align-items-center">-->
         <!--               <i class="mdi mdi-phone"></i>-->
         <!--               <span class="align-middle ms-2">+1(123) 456 - 7890</span>-->
         <!--            </li>-->
         <!--            <li class="d-flex align-items-center">-->
         <!--               <i class="mdi mdi-clock-outline"></i>-->
         <!--               <span class="align-middle ms-2">Mon - Fri 10AM - 8PM</span>-->
         <!--            </li>-->
         <!--         </ul>-->
         <!--      </div>-->
         <!--      <div class="my-4">-->
         <!--         <p class="text-uppercase">Options</p>-->
         <!--         <ul class="list-unstyled d-grid gap-3 mt-3 ms-2 ps-1">-->
         <!--            <li class="cursor-pointer d-flex align-items-center">-->
         <!--               <i class="mdi mdi-tag-outline"></i>-->
         <!--               <span class="align-middle ms-2">Add Tag</span>-->
         <!--            </li>-->
         <!--            <li class="cursor-pointer d-flex align-items-center">-->
         <!--               <i class="mdi mdi-star-outline"></i>-->
         <!--               <span class="align-middle ms-2">Important Contact</span>-->
         <!--            </li>-->
         <!--            <li class="cursor-pointer d-flex align-items-center">-->
         <!--               <i class="mdi mdi-image-outline"></i>-->
         <!--               <span class="align-middle ms-2">Shared Media</span>-->
         <!--            </li>-->
         <!--            <li class="cursor-pointer d-flex align-items-center">-->
         <!--               <i class="mdi mdi-delete-outline"></i>-->
         <!--               <span class="align-middle ms-2">Delete Contact</span>-->
         <!--            </li>-->
         <!--            <li class="cursor-pointer d-flex align-items-center">-->
         <!--               <i class="mdi mdi-block-helper"></i>-->
         <!--               <span class="align-middle ms-2">Block Contact</span>-->
         <!--            </li>-->
         <!--         </ul>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         
         
         
         <!-- /Sidebar Right -->
         <div class="app-overlay"></div>
      </div>
   </div>
</div>
<!-- / Content -->
<?php include 'footer.php';?>       
<!-- Page JS -->
<script src="<?=BASEURL?>assets/js/app-chat.js"></script>