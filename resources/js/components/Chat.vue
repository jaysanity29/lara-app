<template>
	<div class="page-content">
		<div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row position-relative">
                  <div class="col-lg-4 chat-aside border-lg-right">
                    <div class="aside-content">
                      <div class="aside-header">
                        <div class="d-flex justify-content-between align-items-center pb-2 mb-2">
                          <div class="d-flex align-items-center">
                            <figure class="mr-2 mb-0">
                              <img src="/assets/images/faces/face1.jpg" class="img-sm rounded-circle" alt="profile">
                              <div class="status online"></div>
                            </figure>
                            <div>
                              <h6>Amiah Burton</h6>
                              <p class="text-muted tx-13">Software Developer</p>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-lg text-muted pb-3px" data-toggle="tooltip" title="" data-original-title="Settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                              <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View Profile</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit Profile</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-aperture icon-sm mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg> <span class="">Add status</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-sm mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> <span class="">Settings</span></a>
                            </div>
                          </div>
                        </div>
                        <form class="search-form">
                          <div class="input-group border rounded-sm">
                            <div class="input-group-prepend">
                              <div class="input-group-text border-0 rounded-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search icon-md cursor-pointer"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                              </div>
                            </div>
                            <input type="text" class="form-control  border-0 rounded-sm" id="searchForm" placeholder="Search here...">
                          </div>
                        </form>
                      </div>
                      <div class="aside-body">
                        <ul class="nav nav-tabs mt-3" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="chats-tab" data-toggle="tab" href="#chats" role="tab" aria-controls="chats" aria-selected="true">
                              <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-sm mr-sm-2 mr-lg-0 mr-xl-2 mb-md-1 mb-xl-0"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <p class="d-none d-sm-block">Chats</p>
                              </div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="calls-tab" data-toggle="tab" href="#calls" role="tab" aria-controls="calls" aria-selected="false">
                              <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call icon-sm mr-sm-2 mr-lg-0 mr-xl-2 mb-md-1 mb-xl-0"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <p class="d-none d-sm-block">Calls</p>
                              </div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="contacts-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">
                              <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users icon-sm mr-sm-2 mr-lg-0 mr-xl-2 mb-md-1 mb-xl-0"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <p class="d-none d-sm-block">Contacts</p>
                              </div>
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content mt-3 ps ps--active-y">
                          <div class="tab-pane fade show active" id="chats" role="tabpanel" aria-labelledby="chats-tab">
                            <div>
                              <p class="text-muted mb-1">Recent chats</p>
                              <ul class="list-unstyled chat-list px-1">
                                <li class="chat-item pr-1">
                                  <a href="javascript:;" class="d-flex align-items-center">
                                    <figure class="mb-0 mr-2">
                                      <img src="/assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="user">
                                      <div class="status online"></div>
                                    </figure>
                                    <div class="d-flex justify-content-between flex-grow border-bottom">
                                      <div>
                                        <p class="text-body font-weight-bold">John Doe</p>
                                        <p class="text-muted tx-13">Hi, How are you?</p>
                                      </div>
                                      <div class="d-flex flex-column align-items-end">
                                        <p class="text-muted tx-13 mb-1">4:32 PM</p>
                                        <div class="badge badge-pill badge-primary ml-auto">5</div>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                
                               
                                <li class="chat-item pr-1">
                                  <a href="javascript:;" class="d-flex align-items-center">
                                    <figure class="mb-0 mr-2">
                                      <img src="/assets/images/faces/face5.jpg" class="img-xs rounded-circle" alt="user">
                                      <div class="status online"></div>
                                    </figure>
                                    <div class="d-flex justify-content-between flex-grow border-bottom">
                                      <div>
                                        <p class="text-body">Jensen Combs</p>
                                        <div class="d-flex align-items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video text-muted icon-md mb-2px"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                          <p class="text-muted ml-1">Video</p>
                                        </div>
                                      </div>
                                      <div class="d-flex flex-column align-items-end">
                                        <p class="text-muted tx-13 mb-1">2 days ago</p>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                           
                             
                                <li class="chat-item pr-1">
                                  <a href="javascript:;" class="d-flex align-items-center">
                                    <figure class="mb-0 mr-2">
                                      <img src="/assets/images/faces/face5.jpg" class="img-xs rounded-circle" alt="user">
                                      <div class="status online"></div>
                                    </figure>
                                    <div class="d-flex justify-content-between flex-grow border-bottom">
                                      <div>
                                        <p class="text-body">Leonardo Payne</p>
                                        <div class="d-flex align-items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video text-muted icon-md mb-2px"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                          <p class="text-muted ml-1">Video</p>
                                        </div>
                                      </div>
                                      <div class="d-flex flex-column align-items-end">
                                        <p class="text-muted tx-13 mb-1">2 days ago</p>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                <li class="chat-item pr-1">
                                  <a href="javascript:;" class="d-flex align-items-center">
                                    <figure class="mb-0 mr-2">
                                      <img src="/assets/images/faces/face6.jpg" class="img-xs rounded-circle" alt="user">
                                      <div class="status online"></div>
                                    </figure>
                                    <div class="d-flex justify-content-between flex-grow border-bottom">
                                      <div>
                                        <p class="text-body">John Doe</p>
                                        <p class="text-muted tx-13">Hi, How are you?</p>
                                      </div>
                                      <div class="d-flex flex-column align-items-end">
                                        <p class="text-muted tx-13 mb-1">4 week ago</p>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="calls" role="tabpanel" aria-labelledby="calls-tab">
                            <p class="text-muted mb-1">Recent calls</p>
                            <ul class="list-unstyled chat-list px-1">
                            
                              
                              <li class="chat-item pr-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 mr-2">
                                    <img src="/assets/images/faces/face6.jpg" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                                    <div>
                                      <p class="text-body">Carl Henson</p>
                                      <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-left icon-sm text-danger mr-1"><line x1="17" y1="7" x2="7" y2="17"></line><polyline points="17 17 7 17 7 7"></polyline></svg>
                                        <p class="text-muted tx-13">Today, 04:24 PM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call text-danger icon-md"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pr-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 mr-2">
                                    <img src="/assets/images/faces/face7.jpg" class="img-xs rounded-circle" alt="user">
                                    <div class="status online"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                                    <div>
                                      <p class="text-body">Jensen Combs</p>
                                      <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-left icon-sm text-danger mr-1"><line x1="17" y1="7" x2="7" y2="17"></line><polyline points="17 17 7 17 7 7"></polyline></svg>
                                        <p class="text-muted tx-13">Today, 12:53 AM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video text-danger icon-md"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pr-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 mr-2">
                                    <img src="/assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="user">
                                    <div class="status online"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                                    <div>
                                      <p class="text-body">John Doe</p>
                                      <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-left icon-sm text-success mr-1"><line x1="17" y1="7" x2="7" y2="17"></line><polyline points="17 17 7 17 7 7"></polyline></svg>
                                        <p class="text-muted tx-13">Today, 01:42 AM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video text-success icon-md"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pr-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 mr-2">
                                    <img src="/assets/images/faces/face3.jpg" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                                    <div>
                                      <p class="text-body">John Doe</p>
                                      <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right icon-sm text-success mr-1"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                                        <p class="text-muted tx-13">Today, 12:01 AM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call text-success icon-md"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            <p class="text-muted mb-1">Contacts</p>
                            <ul class="list-unstyled chat-list px-1">
                            
                              <li class="chat-item pr-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 mr-2">
                                    <img src="/assets/images/faces/face5.jpg" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                                    <div>
                                      <p class="text-body">John Doe</p>
                                      <div class="d-flex align-items-center">
                                        <p class="text-muted tx-13">Front-end Developer</p>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-end text-body">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md text-success mr-2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call icon-md text-primary mr-2"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video icon-md text-danger"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 291px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 128px;"></div></div></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 chat-content">
                    <div class="chat-header border-bottom pb-2">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left icon-lg mr-2 ml-n2 text-muted d-lg-none" id="backToChatList"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                          <figure class="mb-0 mr-2">
                            <img src="/assets/images/faces/face2.jpg" class="img-sm rounded-circle" alt="image">
                            <div class="status online"></div>
                            <div class="status online"></div>
                          </figure>
                          <div>
                            <p>Mariana Zenha</p>
                            <p class="text-muted tx-13">Front-end Developer</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-body ps ps--active-y">
                      <ul class="messages">
             
                        <li class="message-item me">
                          <img src="/assets/images/faces/face1.jpg" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                              </div>
                              <span>8:30 PM</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 336px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 130px;"></div></div></div>
                    <div class="chat-footer d-flex">
                      <div>
                        <button type="button" class="btn border btn-icon rounded-circle mr-2" data-toggle="tooltip" title="" data-original-title="Emoji">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile text-muted"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                        </button>
                      </div>
                      <div class="d-none d-md-block">
                        <button type="button" class="btn border btn-icon rounded-circle mr-2" data-toggle="tooltip" title="" data-original-title="Attatch files">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip text-muted"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                        </button>
                      </div>
                      <div class="d-none d-md-block">
                        <button type="button" class="btn border btn-icon rounded-circle mr-2" data-toggle="tooltip" title="" data-original-title="Record you voice">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic text-muted"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                        </button>
                      </div>
                      <form class="search-form flex-grow mr-2">
                        <div class="input-group">
                          <input type="text" class="form-control rounded-pill" id="chatForm" placeholder="Type a message">
                        </div>
                      </form>
                      <div>
                        <button type="button" class="btn btn-primary btn-icon rounded-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
					</div>
	</div>
</template>