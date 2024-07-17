@extends('layouts.app') <!-- Remplacez 'app' par le nom de votre layout principal -->

@section('content')
<div class="container-fluid px-2 px-md-4">
  <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
    <span class="mask bg-gradient-primary opacity-6"></span>
  </div>
  <div class="card card-body mx-3 mx-md-4 mt-n6">
    <div class="row gx-4 mb-2">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            Richard Davis
          </h5>
          <p class="mb-0 font-weight-normal text-sm">
            CEO / Co-Founder
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                <i class="material-icons text-lg position-relative">home</i>
                <span class="ms-1">App</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                <i class="material-icons text-lg position-relative">email</i>
                <span class="ms-1">Messages</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                <i class="material-icons text-lg position-relative">settings</i>
                <span class="ms-1">Settings</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="row">
        <!-- Card Sections -->
        <!-- Platform Settings Section -->
        <div class="col-12 col-xl-4">
          <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Platform Settings</h6>
            </div>
            <div class="card-body p-3">
              <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
              <ul class="list-group">
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                  </div>
                </li>
              </ul>
              <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
              <ul class="list-group">
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0 pb-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Profile Information Section -->
        <div class="col-12 col-xl-4">
          <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Profile Information</h6>
                </div>
                <div class="col-md-4 text-end">
                  <a href="javascript:;">
                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm">
                Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
              </p>
              <hr class="horizontal gray-light my-4">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
                <li class="list-group-item border-0 ps-0 pb-0">
                  <strong class="text-dark text-sm">Social:</strong> &nbsp;
                  <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-facebook fa-lg"></i>
                  </a>
                  <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>
                  <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Conversations Section -->
        <div class="col-12 col-xl-4">
          <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Conversations</h6>
                </div>
                <div class="col-md-4 text-end">
                  <a href="javascript:;">
                    <i class="fas fa-plus text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Conversation"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                  <div class="avatar me-3">
                    <img src="../assets/img/kal-visuals-square.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Sophie B.</h6>
                    <p class="mb-0 text-xs">Hi! I need more information..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../assets/img/marie.jpg" alt="marie" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Anne Marie</h6>
                    <p class="mb-0 text-xs">Awesome work, can you..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../assets/img/ivana-square.jpg" alt="ivana" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Ivanna</h6>
                    <p class="mb-0 text-xs">About files I can..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0">
                  <div class="avatar me-3">
                    <img src="../assets/img/team-4.jpg" alt="team4" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Peterson</h6>
                    <p class="mb-0 text-xs">Have a great afternoon..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Projects Table Section -->
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-4">
          <div class="card-header pb-0 px-3">
            <div class="row">
              <div class="col-md-6">
                <h6 class="mb-0">Projects</h6>
              </div>
              <div class="col-md-6 d-flex justify-content-end align-items-center">
                <i class="far fa-calendar-alt me-2"></i>
                <small>23 - 30 March 2020</small>
              </div>
            </div>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Project #2</h6>
                    <span class="text-xs">01/12/19</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $180
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" href="javascript:;"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Project #1</h6>
                    <span class="text-xs">02/12/19</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $250
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" href="javascript:;"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Project #3</h6>
                    <span class="text-xs">03/12/19</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $315
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" href="javascript:;"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Project #4</h6>
                    <span class="text-xs">04/12/19</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $400
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" href="javascript:;"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Project #5</h6>
                    <span class="text-xs">05/12/19</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $560
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" href="javascript:;"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
  </div>




