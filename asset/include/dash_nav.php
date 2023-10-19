<nav class="navbar bg-dark navbar-dark">
    <div class="container-fluid d-block d-md-flex justify-content-between">
        <div class="d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center gap-3" href="dashboard">
                <!-- <img src="../assets/img/logo.png" alt="logo" height="40"> -->
                <span class="fs-4">Ventelect</span>
            </a>

            <div>
                <button class="btn  btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header bg-dark text-white">
                    <!-- <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Early Money</h5> -->
                    <!-- <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
                </div>
                <div class="offcanvas-body bg-dark p-0 text-white">
                    <ul class="list-group d-grid side-menu border-0">
                        <li class="d-block d-md-none my-3 align-self-end">
                            <div class="bg-dark align-items-center gap-5">
                                <div class="dropdown  bg-dark">
                                    <a class="d-flex align-items-center gap-3 text-light text-decoration-none dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../asset/img/avatars/<?php
                            $img = $UserData['pro_pic'];
                            echo "$img?".mt_rand();
                            ?>
                            alt="profile_img" class="rounded-circle" width="50" height="50""> 
                                    </a>
                                    <ul class="dropdown-menu mobile-dropdown shadow  bg-dark">
                                        <li><a class="dropdown-item text-light" href="../assets/config/logout">Log Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item active" aria-current="true">
                            <a href="dashboard">
                               <i class="fa fa-columns"></i> Dashboard
                            </a>
                        </li>
                        <?php if($UserData['user_role'] != 'admin'){ ?>
                            <li class="list-group-item">
                                <a href="profile">
                                    <i class="fa fa-id-card"></i>
                                    Profile
                                </a>
                            </li>
                        <?php } ?>
                        <li class="list-group-item">
                            <a href="record">
                                <i class="fa fa-wallet"></i>
                                Witness Record
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="eyewitness">
                                <i class="fa fa-money-bill-wave"></i>
                                Eye Witness
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="election">
                                <i class="fa fa-exchange-alt"></i>
                                Election Result
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="setting">
                                <i class="fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block align-items-center gap-5">
            <div class="dropdown">
                <a class="d-flex align-items-center gap-3 text-light text-decoration-none dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../asset/img/avatars/<?php
                            $img = $UserData['pro_pic'];
                            echo "$img?".mt_rand();
                            ?>
                            alt="profile_img" class="rounded-circle" width="50" height="50"">
                </a>
                <ul class="dropdown-menu bg-dark">
                    <li><a class="dropdown-item text-white" href="profile">Profile</a></li>
                    <li><a class="dropdown-item text-white" href="../assets/config/logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>